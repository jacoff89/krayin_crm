# Деплой на прод (Docker)

Прод работает на Docker Compose (`docker-compose.prod.yml`). Деплой запускается вручную одной командой на сервере: `./bin/deploy.sh`.

## Как устроено

```
   браузер ──HTTPS──▶ головной nginx (SSL)
                          │ HTTP, X-Forwarded-*
                          ▼ :80 (WEB_BIND:WEB_PORT)
                    ┌───────────┐
                    │    web    │   nginx: статика public/
                    └─────┬─────┘
                          │ FastCGI :9000
                    ┌─────▼─────┐        ┌───────────┐
                    │    app    │        │ scheduler │  php artisan schedule:work
                    │  php-fpm  │        │ (тот же   │  (inbound-emails:process и др.)
                    └─────┬─────┘        │  образ)   │
                          │              └─────┬─────┘
               ┌──────────┴──────────┬─────────┘
         ┌─────▼─────┐      ┌────────▼─────────┐
         │    db     │      │ postfix-opendkim │  исходящая почта с DKIM
         │ MySQL 8.4 │      └──────────────────┘
         └───────────┘
```

Чем прод отличается от dev (`docker-compose.yml`):

- Код и `vendor` **запечены в образ**, а не примонтированы с хоста. Деплой = новый образ.
- Изменяемые данные хранятся в docker volumes:
  - `storage` — загрузки, логи, сессии;
  - `db-data` — MySQL.
- Порт MySQL наружу не публикуется.
- SSL здесь нет: внутренний nginx отдаёт HTTP, а HTTPS терминирует головной nginx. Laravel доверяет его заголовкам `X-Forwarded-*` (`trustProxies` в `bootstrap/app.php`), поэтому корректно генерирует `https://`-ссылки и secure-куки.
- OPcache включён без проверки файлов, кэши Laravel (`config`, `route`, `event`) собираются при старте контейнера (`.docker/prod/entrypoint.sh`).
- Фронтенд не собирается на сервере. Собранные ассеты (`public/admin/build`, `public/build` и т.д.) лежат в репозитории, как принято в Krayin. После изменений в Vue/CSS соберите их локально (`npm run build` в нужном пакете) и закоммитьте.

Файлы:

| Файл | Назначение |
|---|---|
| `docker-compose.prod.yml` | сервисы прода |
| `.docker/prod/Dockerfile` | образы `app` (php-fpm) и `web` (nginx) |
| `.docker/prod/nginx.conf` | внутренний nginx |
| `.docker/prod/php.ini`, `fpm-pool.conf` | настройки PHP |
| `.docker/prod/entrypoint.sh` | кэши Laravel при старте |
| `.env.prod.example` | шаблон `.env` для сервера |
| `bin/server-setup.sh` | первичная настройка сервера |
| `bin/deploy.sh` | деплой |

---

## Первичная настройка (один раз)

### 1. Головной nginx

DNS `crm.aquastyle74.ru` указывает на головной nginx, SSL настроен там. Добавьте на нём проксирование на CRM:

```nginx
server {
    listen 443 ssl;
    http2 on;
    server_name crm.aquastyle74.ru;
    # ssl_certificate ... — как у вас уже настроено

    client_max_body_size 100M;   # загрузка файлов в CRM

    location / {
        proxy_pass http://CRM_SERVER_IP:80;   # WEB_BIND:WEB_PORT из .env прода
        proxy_set_header Host              $host;
        proxy_set_header X-Real-IP         $remote_addr;
        proxy_set_header X-Forwarded-For   $proxy_add_x_forwarded_for;
        proxy_set_header X-Forwarded-Proto $scheme;
        proxy_set_header X-Forwarded-Host  $host;
        proxy_set_header X-Forwarded-Port  $server_port;
        proxy_read_timeout 300s;
    }
}
```

Заголовок `X-Forwarded-Proto` обязателен. Без него Laravel решит, что работает по HTTP: появятся `http://`-ссылки, mixed content и проблемы со входом.

**Если головной nginx на том же сервере, что и CRM**, порт 80 уже занят им. Тогда в `.env` прода укажите `WEB_BIND=127.0.0.1` и `WEB_PORT=8080`, а в `proxy_pass` — `http://127.0.0.1:8080`.

**Если головной nginx на другом сервере**, ограничьте доступ к порту 80 только с его IP. Docker публикует порты в обход `ufw`, поэтому правило нужно добавить в цепочку `DOCKER-USER`:

```bash
sudo iptables -I DOCKER-USER -p tcp --dport 80 ! -s IP_ГОЛОВНОГО_NGINX -j DROP
```

Чтобы правило пережило перезагрузку, поставьте `iptables-persistent`. Иначе любой сможет зайти напрямую по HTTP и подставить свои `X-Forwarded-*`.

### 2. Подготовка сервера

С локальной машины:

```bash
scp bin/server-setup.sh root@SERVER:/root/
ssh root@SERVER bash /root/server-setup.sh
```

Скрипт поставит Docker, файрвол (открыты только 22 и 80), swap и создаст пользователя `deploy`. Дальше всё делается под ним:

```bash
ssh deploy@SERVER
```

> После этого стоит запретить вход root и вход по паролю: в `/etc/ssh/sshd_config` выставить `PermitRootLogin no` и `PasswordAuthentication no`, затем выполнить `sudo systemctl restart ssh`. Сначала убедитесь, что вход под `deploy` по ключу работает.

### 3. Клонирование проекта

```bash
sudo mkdir -p /opt/aquastyle_crm && sudo chown deploy:deploy /opt/aquastyle_crm
git clone https://github.com/jacoff89/aquastyle_crm.git /opt/aquastyle_crm
cd /opt/aquastyle_crm
```

Репозиторий публичный, поэтому ключи для clone/pull не нужны. Если сделаете его приватным, добавьте на сервере deploy key (read-only) в настройках репозитория на GitHub.

### 4. `.env`

```bash
cp .env.prod.example .env
nano .env
```

Обязательно заполните:

- `APP_URL` (`https://crm.aquastyle74.ru`), `WEB_BIND`/`WEB_PORT` — см. шаг 1;
- `DB_PASSWORD`, `DB_ROOT_PASSWORD` (сгенерировать можно командой `openssl rand -base64 24`);
- почту и IMAP.

Сгенерируйте `APP_KEY`. Первая команда соберёт образ, это займёт несколько минут:

```bash
docker compose -f docker-compose.prod.yml run --rm --no-deps app php artisan key:generate --show
```

Вставьте выведенное значение в `APP_KEY=` в `.env`.

### 5. Первый запуск

```bash
./bin/deploy.sh
```

Далее одно из двух.

**Вариант А: перенести данные с dev (рекомендуется, там уже настроены ru/RUB и данные).**

На dev-машине сделайте дамп и упакуйте загрузки:

```bash
docker exec crm-db mysqldump -uroot -p"ПАРОЛЬ_DEV" --single-transaction --routines aquastyle_crm > dump.sql
tar czf storage-app.tgz -C storage app
scp dump.sql storage-app.tgz deploy@SERVER:/opt/aquastyle_crm/
```

На сервере:

```bash
cd /opt/aquastyle_crm
C="docker compose -f docker-compose.prod.yml"
$C exec -T db sh -c 'mysql -uroot -p"$MYSQL_ROOT_PASSWORD" "$MYSQL_DATABASE"' < dump.sql
$C run --rm app php artisan migrate --force          # догнать миграции, если прод новее dev
mkdir -p /tmp/st && tar xzf storage-app.tgz -C /tmp/st
docker cp /tmp/st/app/. "$($C ps -q app)":/var/www/html/storage/app/
$C exec -u root app chown -R ubuntu:ubuntu /var/www/html/storage
rm -rf dump.sql storage-app.tgz /tmp/st
```

**Вариант Б: чистая установка через установщик Krayin.**

Установщик пишет `APP_KEY` в файл `.env` и выполняет `migrate:fresh`, поэтому запускать его можно **только на пустой базе**. Файл `.env` нужно временно примонтировать внутрь контейнера:

```bash
C="docker compose -f docker-compose.prod.yml"
$C run --rm -u root -e APP_ENV=local -v "$PWD/.env:/var/www/html/.env" app \
    php artisan krayin-crm:install --skip-env-check
$C run --rm -u root app chown -R ubuntu:ubuntu /var/www/html/storage
$C up -d --force-recreate app scheduler     # подхватить новый APP_KEY из .env
```

Установщик спросит данные администратора. Локаль и валюту после установки поменяйте в настройках CRM.

Откройте `https://crm.aquastyle74.ru`, всё должно работать.

---

## Обычный деплой

```bash
ssh deploy@SERVER
cd /opt/aquastyle_crm
./bin/deploy.sh          # ветка master; другая ветка: ./bin/deploy.sh dev
```

Скрипт:

1. подтягивает код;
2. собирает образы;
3. применяет миграции;
4. пересоздаёт контейнеры (простой несколько секунд).

## Откат

Каждый релиз дополнительно помечается тегом с хэшем коммита. Список тегов:

```bash
docker images aquastyle-crm-app
```

Откат на предыдущий релиз:

```bash
docker tag aquastyle-crm-app:<SHA> aquastyle-crm-app:latest
docker tag aquastyle-crm-web:<SHA> aquastyle-crm-web:latest
docker compose -f docker-compose.prod.yml up -d
```

Миграции при этом **не откатываются**. Если релиз менял схему БД, сначала выполните `php artisan migrate:rollback`, пока запущен ещё новый образ.

Старые теги со временем удаляйте: `docker rmi aquastyle-crm-app:<SHA>`.

## Полезные команды

```bash
C="docker compose -f docker-compose.prod.yml"

$C ps                                   # статус контейнеров
$C logs -f app web scheduler            # логи
$C exec app php artisan tinker          # artisan на проде
$C exec app tail -f storage/logs/laravel-$(date +%F).log
$C restart app scheduler                # перезапуск (кэши пересоберутся)
```

Подключение к MySQL с локальной машины (например, из DBeaver) идёт через SSH-туннель. Узнать IP контейнера БД:

```bash
docker inspect -f '{{range .NetworkSettings.Networks}}{{.IPAddress}}{{end}}' $($C ps -q db)
```

Затем на локальной машине:

```bash
ssh -L 33306:<IP_контейнера>:3306 deploy@SERVER
```

После этого подключайтесь к `127.0.0.1:33306`.

## Бэкапы

Минимальный вариант: ежедневный дамп через cron пользователя `deploy` (`crontab -e`):

```cron
0 3 * * * cd /opt/aquastyle_crm && docker compose -f docker-compose.prod.yml exec -T db sh -c 'mysqldump -uroot -p"$MYSQL_ROOT_PASSWORD" --single-transaction "$MYSQL_DATABASE"' | gzip > /home/deploy/backups/db-$(date +\%F).sql.gz && find /home/deploy/backups -name 'db-*.sql.gz' -mtime +14 -delete
```

Перед этим создайте папку: `mkdir -p ~/backups`. Бэкапы стоит дополнительно копировать за пределы сервера.

## Почта

- Многие VPS-провайдеры по умолчанию **блокируют исходящий порт 25**. Если письма не уходят, проверьте это у провайдера или настройте отправку через внешний SMTP (`MAIL_MAILER=smtp`).
- Для доставляемости нужны DNS-записи SPF, DKIM (`mail._domainkey`) и PTR (reverse DNS) для IP сервера.
