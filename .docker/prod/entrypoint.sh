#!/bin/sh
# Запускается при старте контейнеров app и scheduler (и при `docker compose run app ...`).
# Пересобирает кэши Laravel из текущих переменных окружения (.env на сервере).
set -e

cd /var/www/html

php artisan package:discover --ansi >/dev/null
php artisan config:cache
php artisan route:cache
php artisan event:cache
php artisan view:clear >/dev/null

exec "$@"
