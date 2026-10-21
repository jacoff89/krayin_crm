<?php

return [
    'seeders' => [
        'attributes' => [
            'leads' => [
                'description' => 'Описание',
                'expected-close-date' => 'Ожидаемая дата закрытия',
                'lead-value' => 'Сумма сделки',
                'sales-owner' => 'Ответственный',
                'source' => 'Источник',
                'title' => 'Название',
                'type' => 'Тип',
                'pipeline' => 'Воронка',
                'stage' => 'Этап',
            ],

            'persons' => [
                'contact-numbers' => 'Контактные номера',
                'emails' => 'E-mail',
                'job-title' => 'Должность',
                'name' => 'Имя',
                'organization' => 'Организация',
                'sales-owner' => 'Ответственный',
            ],

            'organizations' => [
                'address' => 'Адрес',
                'name' => 'Название',
                'sales-owner' => 'Ответственный',
            ],

            'products' => [
                'description' => 'Описание',
                'name' => 'Название',
                'price' => 'Цена',
                'quantity' => 'Количество',
                'sku' => 'SKU',
            ],

            'quotes' => [
                'adjustment-amount' => 'Сумма корректировки',
                'billing-address' => 'Платёжный адрес',
                'description' => 'Описание',
                'discount-amount' => 'Сумма скидки',
                'discount-percent' => 'Процент скидки',
                'expired-at' => 'Истекает',
                'grand-total' => 'Итого',
                'person' => 'Контакт',
                'sales-owner' => 'Ответственный',
                'shipping-address' => 'Адрес доставки',
                'sub-total' => 'Промежуточный итог',
                'subject' => 'Тема',
                'tax-amount' => 'Сумма налога',
            ],

            'warehouses' => [
                'contact-address' => 'Контактный адрес',
                'contact-emails' => 'Контактные e-mail',
                'contact-name' => 'Контактное лицо',
                'contact-numbers' => 'Контактные номера',
                'description' => 'Описание',
                'name' => 'Название',
            ],
        ],

        'email' => [
            'activity-created' => 'Активность создана',
            'activity-modified' => 'Активность изменена',
            'date' => 'Дата',
            'new-activity' => 'У вас новая активность. Подробности ниже',
            'new-activity-modified' => 'Активность была изменена. Подробности ниже',
            'participants' => 'Участники',
            'title' => 'Название',
            'type' => 'Тип',
        ],

        'lead' => [
            'pipeline' => [
                'default' => 'Воронка по умолчанию',

                'pipeline-stages' => [
                    'follow-up' => 'Follow Up',
                    'lost' => 'Проиграна',
                    'negotiation' => 'Переговоры',
                    'new' => 'Новая',
                    'prospect' => 'Потенциальная',
                    'won' => 'Выиграна',
                ],
            ],

            'source' => [
                'direct' => 'Прямой',
                'email' => 'E-mail',
                'phone' => 'Телефон',
                'web' => 'Веб',
                'web-form' => 'Веб-форма',
            ],

            'type' => [
                'existing-business' => 'Существующий клиент',
                'new-business' => 'Новый клиент',
            ],
        ],

        'user' => [
            'role' => [
                'administrator-role' => 'Роль администратора',
                'administrator' => 'Администратор',
            ],
        ],

        'workflow' => [
            'email-to-participants-after-activity-updation' => 'Письма участникам после изменения активности',
            'email-to-participants-after-activity-creation' => 'Письма участникам после создания активности',
        ],
    ],

    'installer' => [
        'index' => [
            'create-administrator' => [
                'admin' => 'Админ',
                'krayin' => 'Krayin',
                'confirm-password' => 'Подтвердите пароль',
                'email' => 'E-mail',
                'email-address' => 'admin@example.com',
                'password' => 'Пароль',
                'title' => 'Создание администратора',
            ],

            'environment-configuration' => [
                'allowed-currencies' => 'Разрешённые валюты',
                'allowed-locales' => 'Разрешённые локали',
                'application-name' => 'Название приложения',
                'database-connection' => 'Подключение к базе данных',
                'database-hostname' => 'Хост базы данных',
                'database-name' => 'Имя базы данных',
                'database-password' => 'Пароль базы данных',
                'database-port' => 'Порт базы данных',
                'database-prefix' => 'Префикс таблиц',
                'database-username' => 'Пользователь базы данных',
                'default-currency' => 'Валюта по умолчанию',
                'default-locale' => 'Локаль по умолчанию',
                'default-timezone' => 'Часовой пояс по умолчанию',
                'default-url' => 'URL по умолчанию',
                'select-timezone' => 'Выберите часовой пояс',
                'title' => 'Настройка магазина',
                'warning-message' => 'Внимание! Настройки языка и валюты по умолчанию являются постоянными и не могут быть изменены.',
            ],

            'installation-processing' => [
                'krayin' => 'Установка Krayin',
                'krayin-info' => 'Создаются таблицы базы данных, это может занять несколько минут',
                'title' => 'Установка',
            ],

            'installation-completed' => [
                'admin-panel' => 'Админ-панель',
                'krayin-forums' => 'Форум Krayin',
                'customer-panel' => 'Панель клиента',
                'explore-krayin-extensions' => 'Расширения Krayin',
                'title' => 'Установка завершена',
                'title-info' => 'Krayin успешно установлен на вашу систему.',
            ],

            'ready-for-installation' => [
                'create-databsae-table' => 'Создать таблицы базы данных',
                'install' => 'Установка',
                'install-info' => 'Подготовка к установке Krayin',
                'install-info-button' => 'Нажмите кнопку ниже, чтобы',
                'populate-database-table' => 'Заполнить таблицы базы данных',
                'start-installation' => 'Начать установку',
                'title' => 'Готово к установке',
            ],

            'start' => [
                'locale' => 'Локаль',
                'main' => 'Начать',
                'select-locale' => 'Выберите локаль',
                'title' => 'Установка Krayin',
                'welcome-title' => 'Добро пожаловать в Krayin',
            ],

            'server-requirements' => [
                'title' => 'Системные требования',
                'php-version' => '8.1 или выше',
            ],

            'back' => 'Назад',
            'continue' => 'Продолжить',
            'installation-description' => 'Установка Krayin включает несколько шагов.',
            'installation-info' => 'Мы рады видеть вас здесь!',
            'installation-title' => 'Добро пожаловать в установку',
            'installation-wizard' => 'Язык мастера установки',
            'title' => 'Установщик Krayin',
        ],
    ],
];
