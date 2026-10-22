#!/usr/bin/env bash
# Деплой прода: ./deploy.sh
set -euo pipefail

cd "$(dirname "$0")"
DC="docker compose -f docker-compose.prod.yml"
ARTISAN="$DC exec -T php-fpm php artisan"

echo "→ Maintenance mode"
$ARTISAN down --retry=15 || true
trap '$ARTISAN up || true' EXIT   # поднимем сайт даже если что-то упало

echo "→ git pull"
git pull --ff-only origin master

echo "→ composer install"
$DC exec -T php-fpm composer install --no-dev --optimize-autoloader --no-interaction

echo "→ migrate"
$ARTISAN migrate --force

echo "→ caches"
$ARTISAN optimize

echo "→ restart php-fpm (сброс OPcache)"
$DC restart php-fpm

echo "✓ Deployed: $(git log -1 --oneline)"