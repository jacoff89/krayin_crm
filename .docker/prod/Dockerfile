# syntax=docker/dockerfile:1
#
# Продовый образ приложения. Код и vendor запекаются внутрь образа,
# изменяемые данные (storage) живут в docker volume.
#
# Цели сборки:
#   app — php-fpm с приложением (из него же запускается scheduler)
#   web — Caddy: HTTPS (Let's Encrypt), статика из public/, проксирование PHP в app:9000

############################
# app
############################
FROM phpdockerio/php:8.4-fpm AS app

ARG DEBIAN_FRONTEND=noninteractive
WORKDIR /var/www/html

RUN apt-get update \
    && apt-get -y --no-install-recommends install \
        unzip msmtp-mta \
        php8.4-mysql php8.4-bcmath php8.4-intl php8.4-xml php8.4-gd \
        php8.4-zip php8.4-mbstring php8.4-curl php8.4-opcache \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

COPY --from=composer:2 /usr/bin/composer /usr/local/bin/composer

# Почта уходит через контейнер postfix-opendkim (как в dev)
RUN printf '%s\n' \
        'account default' \
        'host postfix-opendkim' \
        'port 25' \
        'auto_from on' \
        'maildomain yakov89.ru' \
        'tls off' > /etc/msmtprc

COPY .docker/prod/php.ini /etc/php/8.4/fpm/conf.d/99-prod.ini
COPY .docker/prod/php.ini /etc/php/8.4/cli/conf.d/99-prod.ini
COPY .docker/prod/fpm-pool.conf /etc/php/8.4/fpm/pool.d/zz-prod.conf

# Сначала только зависимости — этот слой кэшируется, пока не меняется composer.lock
COPY composer.json composer.lock ./
COPY packages ./packages
RUN composer install --no-dev --no-scripts --no-autoloader --no-interaction --prefer-dist --no-progress

COPY . .

RUN composer dump-autoload --optimize --no-dev --no-scripts \
    && mkdir -p storage/app/public storage/logs \
        storage/framework/cache/data storage/framework/sessions storage/framework/views \
        bootstrap/cache \
    && rm -rf public/storage && ln -s /var/www/html/storage/app/public public/storage \
    && mkdir -p /run/php && touch /run/php-fpm.pid \
    && chown -R ubuntu:ubuntu storage bootstrap/cache /run/php /run/php-fpm.pid

COPY --chmod=755 .docker/prod/entrypoint.sh /usr/local/bin/entrypoint.sh

USER ubuntu

ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]
CMD ["php-fpm8.4", "-F", "-O"]

############################
# web
############################
FROM caddy:2-alpine AS web

COPY .docker/prod/Caddyfile /etc/caddy/Caddyfile
COPY --from=app /var/www/html/public /var/www/html/public
