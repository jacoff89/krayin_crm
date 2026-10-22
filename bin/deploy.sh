#!/usr/bin/env bash
#
# Деплой на прод. Запускается на сервере из корня репозитория:
#   ./bin/deploy.sh            # ветка master
#   ./bin/deploy.sh dev        # другая ветка
#
# Что делает: подтягивает код → собирает образы → применяет миграции →
# перезапускает контейнеры. Каждый релиз дополнительно помечается тегом
# с хэшем коммита — для быстрого отката (см. DEPLOY.md).

set -euo pipefail

BRANCH="${1:-master}"
cd "$(dirname "$0")/.."

COMPOSE=(docker compose -f docker-compose.prod.yml)

step() { printf '\n\033[1;34m==> %s\033[0m\n' "$*"; }
fail() { printf '\033[1;31mОшибка: %s\033[0m\n' "$*" >&2; exit 1; }

[[ -f .env ]] || fail "нет файла .env (скопируйте .env.prod.example в .env и заполните)"
git diff --quiet && git diff --cached --quiet || fail "в рабочей копии есть незакоммиченные изменения"

step "Код: ветка $BRANCH"
git fetch --prune origin
git checkout "$BRANCH"
git pull --ff-only origin "$BRANCH"
SHA="$(git rev-parse --short HEAD)"
echo "Коммит: $SHA — $(git log -1 --pretty=%s)"

step "Сборка образов"
"${COMPOSE[@]}" build --pull
docker tag aquastyle-crm-app:latest "aquastyle-crm-app:$SHA"
docker tag aquastyle-crm-web:latest "aquastyle-crm-web:$SHA"

step "База данных"
"${COMPOSE[@]}" up -d --wait db

step "Миграции"
"${COMPOSE[@]}" run --rm app php artisan migrate --force

step "Перезапуск контейнеров"
"${COMPOSE[@]}" up -d --remove-orphans

step "Очистка неиспользуемых слоёв"
docker image prune -f >/dev/null

"${COMPOSE[@]}" ps
printf '\n\033[1;32mГотово: задеплоен %s (%s)\033[0m\n' "$SHA" "$BRANCH"
