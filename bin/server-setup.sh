#!/usr/bin/env bash
#
# Первичная подготовка «голого» сервера (Ubuntu / Debian). Запускать один раз от root:
#   scp bin/server-setup.sh root@SERVER:/root/ && ssh root@SERVER bash /root/server-setup.sh
#
# Что делает:
#   - обновляет систему, ставит git, ufw, fail2ban, автообновления безопасности
#   - ставит Docker Engine + compose plugin (официальный скрипт get.docker.com)
#   - создаёт пользователя deploy (группа docker), копирует ему SSH-ключи root
#   - добавляет swap 2G, если swap нет (сборка composer и MySQL любят память)
#   - открывает в файрволе только SSH, 80 и 443

set -euo pipefail

DEPLOY_USER="${DEPLOY_USER:-deploy}"

[[ $EUID -eq 0 ]] || { echo "Запустите от root"; exit 1; }
. /etc/os-release
[[ "$ID" == "ubuntu" || "$ID" == "debian" ]] || { echo "Скрипт рассчитан на Ubuntu/Debian, у вас: $ID"; exit 1; }

echo "==> Обновление системы"
export DEBIAN_FRONTEND=noninteractive
apt-get update
apt-get -y upgrade
apt-get -y install git curl ca-certificates ufw fail2ban unattended-upgrades
dpkg-reconfigure -f noninteractive unattended-upgrades

echo "==> Docker"
if ! command -v docker >/dev/null; then
    curl -fsSL https://get.docker.com | sh
fi
systemctl enable --now docker

echo "==> Пользователь $DEPLOY_USER"
if ! id "$DEPLOY_USER" >/dev/null 2>&1; then
    adduser --disabled-password --gecos "" "$DEPLOY_USER"
fi
usermod -aG docker "$DEPLOY_USER"
if [[ -f /root/.ssh/authorized_keys ]]; then
    install -d -m 700 -o "$DEPLOY_USER" -g "$DEPLOY_USER" "/home/$DEPLOY_USER/.ssh"
    install -m 600 -o "$DEPLOY_USER" -g "$DEPLOY_USER" /root/.ssh/authorized_keys "/home/$DEPLOY_USER/.ssh/authorized_keys"
fi

echo "==> Swap"
if [[ -z "$(swapon --show)" ]]; then
    fallocate -l 2G /swapfile
    chmod 600 /swapfile
    mkswap /swapfile
    swapon /swapfile
    echo '/swapfile none swap sw 0 0' >> /etc/fstab
fi

echo "==> Файрвол"
ufw allow OpenSSH
ufw allow 80/tcp
ufw allow 443/tcp
ufw allow 443/udp
ufw --force enable

echo
echo "Готово. Дальше — по DEPLOY.md, шаг «Клонирование проекта» (под пользователем $DEPLOY_USER)."
