<?php

return [
    'acl' => [
        'leads' => 'Сделки',
        'lead' => 'Сделка',
        'quotes' => 'Коммерческие предложения',
        'mail' => 'Почта',
        'inbox' => 'Входящие',
        'draft' => 'Черновики',
        'outbox' => 'Исходящие',
        'sent' => 'Отправленные',
        'trash' => 'Корзина',
        'activities' => 'Активности',
        'webhook' => 'Вебхук',
        'contacts' => 'Контакты',
        'persons' => 'Контакты',
        'organizations' => 'Организации',
        'products' => 'Товары',
        'settings' => 'Настройки',
        'groups' => 'Группы',
        'roles' => 'Роли',
        'users' => 'Пользователи',
        'user' => 'Пользователь',
        'automation' => 'Автоматизация',
        'attributes' => 'Атрибуты',
        'pipelines' => 'Воронки',
        'sources' => 'Источники',
        'types' => 'Типы',
        'email-templates' => 'Шаблоны писем',
        'workflows' => 'Бизнес-процессы',
        'other-settings' => 'Прочие настройки',
        'tags' => 'Теги',
        'configuration' => 'Конфигурация',
        'create' => 'Создать',
        'edit' => 'Изменить',
        'view' => 'Просмотр',
        'print' => 'Печать',
        'delete' => 'Удалить',
        'export' => 'Экспорт',
        'mass-delete' => 'Массовое удаление',
        'data-transfer' => 'Передача данных',
        'imports' => 'Импорты',
        'import' => 'Импорт',
        'event' => 'Событие',
        'campaigns' => 'Кампании',
    ],

    'users' => [
        'activate-warning' => 'Ваша учётная запись ещё не активирована. Свяжитесь с администратором.',
        'login-error' => 'Учётные данные не совпадают с нашими записями.',
        'not-permission' => 'У вас нет прав доступа к админ-панели.',

        'login' => [
            'email' => 'Адрес e-mail',
            'forget-password-link' => 'Забыли пароль?',
            'password' => 'Пароль',
            'submit-btn' => 'Войти',
            'title' => 'Вход',
        ],

        'forget-password' => [
            'create' => [
                'email' => 'Зарегистрированный e-mail',
                'email-not-exist' => 'E-mail не найден',
                'page-title' => 'Восстановление пароля',
                'reset-link-sent' => 'Ссылка для сброса пароля отправлена',
                'sign-in-link' => 'Вернуться ко входу',
                'submit-btn' => 'Сбросить',
                'title' => 'Восстановить пароль',
            ],
        ],

        'reset-password' => [
            'back-link-title' => 'Вернуться ко входу',
            'confirm-password' => 'Подтвердите пароль',
            'email' => 'Зарегистрированный e-mail',
            'password' => 'Пароль',
            'submit-btn' => 'Сбросить пароль',
            'title' => 'Сброс пароля',
        ],
    ],

    'account' => [
        'edit' => [
            'back-btn' => 'Назад',
            'change-password' => 'Сменить пароль',
            'confirm-password' => 'Подтвердите пароль',
            'current-password' => 'Текущий пароль',
            'email' => 'E-mail',
            'general' => 'Общее',
            'invalid-password' => 'Введён неверный текущий пароль.',
            'name' => 'Имя',
            'password' => 'Пароль',
            'profile-image' => 'Аватар',
            'save-btn' => 'Сохранить аккаунт',
            'title' => 'Мой аккаунт',
            'update-success' => 'Аккаунт успешно обновлён',
            'upload-image-info' => 'Загрузите изображение профиля (110x110) в формате PNG или JPG',
        ],
    ],

    'components' => [
        'activities' => [
            'actions' => [
                'mail' => [
                    'btn' => 'Почта',
                    'title' => 'Написать письмо',
                    'to' => 'Кому',
                    'enter-emails' => 'Нажмите Enter, чтобы добавить e-mail',
                    'cc' => 'Копия',
                    'bcc' => 'Скрытая копия',
                    'subject' => 'Тема',
                    'send-btn' => 'Отправить',
                    'message' => 'Сообщение',
                ],

                'file' => [
                    'btn' => 'Файл',
                    'title' => 'Добавить файл',
                    'title-control' => 'Заголовок',
                    'name' => 'Имя',
                    'description' => 'Описание',
                    'file' => 'Файл',
                    'save-btn' => 'Сохранить файл',
                ],

                'note' => [
                    'btn' => 'Заметка',
                    'title' => 'Добавить заметку',
                    'comment' => 'Комментарий',
                    'save-btn' => 'Сохранить заметку',
                ],

                'activity' => [
                    'btn' => 'Активность',
                    'title' => 'Добавить активность',
                    'title-control' => 'Заголовок',
                    'description' => 'Описание',
                    'schedule-from' => 'Начало',
                    'schedule-to' => 'Окончание',
                    'location' => 'Место',
                    'call' => 'Звонок',
                    'meeting' => 'Встреча',
                    'lunch' => 'Обед',
                    'save-btn' => 'Сохранить активность',

                    'participants' => [
                        'title' => 'Участники',
                        'placeholder' => 'Введите для поиска участников',
                        'users' => 'Пользователи',
                        'persons' => 'Контакты',
                        'no-results' => 'Ничего не найдено...',
                    ],
                ],
            ],

            'index' => [
                'all' => 'Все',
                'bcc' => 'Скрытая копия',
                'by-user' => 'Пользователь: :user',
                'calls' => 'Звонки',
                'cc' => 'Копия',
                'change-log' => 'Журнал изменений',
                'delete' => 'Удалить',
                'edit' => 'Изменить',
                'emails' => 'Письма',
                'empty' => 'Пусто',
                'files' => 'Файлы',
                'from' => 'От',
                'location' => 'Место',
                'lunches' => 'Обеды',
                'mark-as-done' => 'Отметить как выполнено',
                'meetings' => 'Встречи',
                'notes' => 'Заметки',
                'participants' => 'Участники',
                'planned' => 'Запланировано',
                'quotes' => 'Коммерческие предложения',
                'scheduled-on' => 'Запланировано на',
                'system' => 'Система',
                'to' => 'Кому',
                'unlink' => 'Отвязать',
                'view' => 'Просмотр',

                'empty-placeholders' => [
                    'all' => [
                        'title' => 'Активности не найдены',
                        'description' => 'Для этого элемента активности не найдены. Добавьте активность, нажав кнопку «Активность» в левой панели.',
                    ],

                    'planned' => [
                        'title' => 'Запланированных активностей нет',
                        'description' => 'Запланированные активности не найдены. Добавьте активность, нажав кнопку «Активность» в левой панели.',
                    ],

                    'notes' => [
                        'title' => 'Заметки не найдены',
                        'description' => 'Заметки не найдены. Добавьте заметку, нажав кнопку «Заметка» в левой панели.',
                    ],

                    'calls' => [
                        'title' => 'Звонки не найдены',
                        'description' => 'Звонки не найдены. Добавьте звонок, нажав кнопку «Активность» и выбрав тип «Звонок».',
                    ],

                    'meetings' => [
                        'title' => 'Встречи не найдены',
                        'description' => 'Встречи не найдены. Добавьте встречу, нажав кнопку «Активность» и выбрав тип «Встреча».',
                    ],

                    'lunches' => [
                        'title' => 'Обеды не найдены',
                        'description' => 'Обеды не найдены. Добавьте обед, нажав кнопку «Активность» и выбрав тип «Обед».',
                    ],

                    'files' => [
                        'title' => 'Файлы не найдены',
                        'description' => 'Файлы не найдены. Добавьте файл, нажав кнопку «Файл» в левой панели.',
                    ],

                    'emails' => [
                        'title' => 'Писем не найдено',
                        'description' => 'Письма не найдены. Добавьте письмо, нажав кнопку «Почта» в левой панели.',
                    ],

                    'system' => [
                        'title' => 'Журналы изменений не найдены',
                        'description' => 'Журналы изменений отсутствуют.',
                    ],
                ],
            ],
        ],

        'media' => [
            'images' => [
                'add-image-btn' => 'Добавить изображение',
                'ai-add-image-btn' => 'Magic AI',
                'allowed-types' => 'png, jpeg, jpg',
                'not-allowed-error' => 'Разрешены только файлы изображений (.jpeg, .jpg, .png, ...).',

                'placeholders' => [
                    'front' => 'Лицевая',
                    'next' => 'Следующая',
                    'size' => 'Размер',
                    'use-cases' => 'Сценарии использования',
                    'zoom' => 'Масштаб',
                ],
            ],

            'videos' => [
                'add-video-btn' => 'Добавить видео',
                'allowed-types' => 'mp4, webm, mkv',
                'not-allowed-error' => 'Разрешены только видеофайлы (.mp4, .mov, .ogg, ...).',
            ],
        ],

        'datagrid' => [
            'index' => [
                'no-records-selected' => 'Не выбрано ни одной записи.',
                'must-select-a-mass-action-option' => 'Выберите вариант массового действия.',
                'must-select-a-mass-action' => 'Выберите массовое действие.',
            ],

            'toolbar' => [
                'length-of' => ':length из',
                'of' => 'из',
                'per-page' => 'На странице',
                'results' => 'Результатов: :total',
                'delete' => 'Удалить',
                'selected' => 'Выбрано: :total',

                'mass-actions' => [
                    'submit' => 'Применить',
                    'select-option' => 'Выберите опцию',
                    'select-action' => 'Выберите действие',
                ],

                'filter' => [
                    'apply-filters-btn' => 'Применить фильтры',
                    'back-btn' => 'Назад',
                    'create-new-filter' => 'Создать фильтр',
                    'custom-filters' => 'Пользовательские фильтры',
                    'delete-error' => 'Ошибка при удалении фильтра. Повторите попытку.',
                    'delete-success' => 'Фильтр успешно удалён.',
                    'empty-description' => 'Нет выбранных фильтров для сохранения. Выберите фильтры.',
                    'empty-title' => 'Добавьте фильтры для сохранения',
                    'name' => 'Название',
                    'quick-filters' => 'Быстрые фильтры',
                    'save-btn' => 'Сохранить',
                    'save-filter' => 'Сохранить фильтр',
                    'saved-success' => 'Фильтр успешно сохранён.',
                    'selected-filters' => 'Выбранные фильтры',
                    'title' => 'Фильтр',
                    'update' => 'Обновить',
                    'update-filter' => 'Обновить фильтр',
                    'updated-success' => 'Фильтр успешно обновлён.',
                ],

                'search' => [
                    'title' => 'Поиск',
                ],
            ],

            'filters' => [
                'select' => 'Выбрать',
                'title' => 'Фильтры',

                'dropdown' => [
                    'searchable' => [
                        'at-least-two-chars' => 'Введите минимум 2 символа...',
                        'no-results' => 'Ничего не найдено...',
                    ],
                ],

                'custom-filters' => [
                    'clear-all' => 'Сбросить все',
                    'title' => 'Пользовательские фильтры',
                ],

                'boolean-options' => [
                    'false' => 'Нет',
                    'true' => 'Да',
                ],

                'date-options' => [
                    'last-month' => 'Прошлый месяц',
                    'last-six-months' => 'Последние 6 месяцев',
                    'last-three-months' => 'Последние 3 месяца',
                    'this-month' => 'Текущий месяц',
                    'this-week' => 'Текущая неделя',
                    'this-year' => 'Текущий год',
                    'today' => 'Сегодня',
                    'yesterday' => 'Вчера',
                ],
            ],

            'table' => [
                'actions' => 'Действия',
                'no-records-available' => 'Нет записей.',
            ],
        ],

        'modal' => [
            'confirm' => [
                'agree-btn' => 'Согласен',
                'disagree-btn' => 'Отмена',
                'message' => 'Вы уверены, что хотите выполнить это действие?',
                'title' => 'Вы уверены?',
            ],
        ],

        'tags' => [
            'index' => [
                'title' => 'Теги',
                'added-tags' => 'Добавленные теги',
                'save-btn' => 'Сохранить тег',
                'placeholder' => 'Введите для поиска тегов',
                'add-tag' => 'Добавить ":term"...',
                'aquarelle-red' => 'Aquarelle Red',
                'crushed-cashew' => 'Crushed Cashew',
                'beeswax' => 'Beeswax',
                'lemon-chiffon' => 'Lemon Chiffon',
                'snow-flurry' => 'Snow Flurry',
                'honeydew' => 'Honeydew',
            ],
        ],

        'layouts' => [
            'powered-by' => [
                'description' => 'Работает на :krayin — проект с открытым исходным кодом от :webkul.',
            ],

            'header' => [
                'mega-search' => [
                    'title' => 'Мега-поиск',

                    'tabs' => [
                        'leads' => 'Сделки',
                        'quotes' => 'Коммерческие предложения',
                        'persons' => 'Контакты',
                        'products' => 'Товары',
                        'settings' => 'Настройки',
                        'configurations' => 'Конфигурации',
                    ],

                    'explore-all-products' => 'Показать все товары',
                    'explore-all-leads' => 'Показать все сделки',
                    'explore-all-contacts' => 'Показать все контакты',
                    'explore-all-quotes' => 'Показать все КП',
                    'explore-all-settings' => 'Показать все настройки',
                    'explore-all-configurations' => 'Показать все конфигурации',
                    'explore-all-matching-products' => 'Показать все товары по запросу ":query" (:count)',
                    'explore-all-matching-leads' => 'Показать все сделки по запросу ":query" (:count)',
                    'explore-all-matching-contacts' => 'Показать все контакты по запросу ":query" (:count)',
                    'explore-all-matching-quotes' => 'Показать все КП по запросу ":query" (:count)',
                ],
            ],
        ],
    ],

    'quotes' => [
        'index' => [
            'title' => 'Коммерческие предложения',
            'create-btn' => 'Создать КП',
            'create-success' => 'КП успешно создано.',
            'update-success' => 'КП успешно обновлено.',
            'delete-success' => 'КП успешно удалено.',
            'delete-failed' => 'Невозможно удалить КП.',

            'datagrid' => [
                'subject' => 'Тема',
                'sales-person' => 'Менеджер',
                'expired-at' => 'Истекает',
                'created-at' => 'Создано',
                'person' => 'Контакт',
                'subtotal' => 'Промежуточный итог',
                'discount' => 'Скидка',
                'tax' => 'Налог',
                'adjustment' => 'Корректировка',
                'grand-total' => 'Итого',
                'edit' => 'Изменить',
                'delete' => 'Удалить',
                'print' => 'Печать',
            ],

            'pdf' => [
                'adjustment' => 'Корректировка',
                'amount' => 'Сумма',
                'billing-address' => 'Платёжный адрес',
                'date' => 'Дата',
                'discount' => 'Скидка',
                'expired-at' => 'Истекает',
                'grand-total' => 'Итого',
                'person' => 'Контакт',
                'price' => 'Цена',
                'product-name' => 'Товар',
                'quantity' => 'Количество',
                'quote-id' => 'ID КП',
                'sales-person' => 'Менеджер',
                'shipping-address' => 'Адрес доставки',
                'sku' => 'SKU',
                'sub-total' => 'Промежуточный итог',
                'subject' => 'Тема',
                'tax' => 'Налог',
                'title' => 'Коммерческое предложение',
            ],
        ],

        'create' => [
            'title' => 'Создание КП',
            'save-btn' => 'Сохранить КП',
            'quote-info' => 'Информация о КП',
            'quote-info-info' => 'Укажите основную информацию о КП.',
            'address-info' => 'Адрес',
            'address-info-info' => 'Информация об адресах для КП.',
            'quote-items' => 'Позиции КП',
            'search-products' => 'Поиск товаров',
            'link-to-lead' => 'Связать со сделкой',
            'quote-item-info' => 'Добавьте товарные позиции для этого КП.',
            'quote-name' => 'Название КП',
            'quantity' => 'Кол-во',
            'price' => 'Цена',
            'discount' => 'Скидка',
            'tax' => 'Налог',
            'total' => 'Итого',
            'amount' => 'Сумма',
            'add-item' => '+ Добавить позицию',
            'sub-total' => 'Промежуточный итог (:symbol)',
            'total-discount' => 'Скидка (:symbol)',
            'total-tax' => 'Налог (:symbol)',
            'total-adjustment' => 'Корректировка (:symbol)',
            'grand-total' => 'Итого (:symbol)',
            'discount-amount' => 'Сумма скидки',
            'tax-amount' => 'Сумма налога',
            'adjustment-amount' => 'Сумма корректировки',
            'product-name' => 'Товар',
            'action' => 'Действие',
        ],

        'edit' => [
            'title' => 'Редактирование КП',
            'save-btn' => 'Сохранить КП',
            'quote-info' => 'Информация о КП',
            'quote-info-info' => 'Укажите основную информацию о КП.',
            'address-info' => 'Адрес',
            'address-info-info' => 'Информация об адресах для КП.',
            'quote-items' => 'Позиции КП',
            'link-to-lead' => 'Связать со сделкой',
            'quote-item-info' => 'Добавьте товарные позиции для этого КП.',
            'quote-name' => 'Название КП',
            'quantity' => 'Кол-во',
            'price' => 'Цена',
            'search-products' => 'Поиск товаров',
            'discount' => 'Скидка',
            'tax' => 'Налог',
            'total' => 'Итого',
            'amount' => 'Сумма',
            'add-item' => '+ Добавить позицию',
            'sub-total' => 'Промежуточный итог (:symbol)',
            'total-discount' => 'Скидка (:symbol)',
            'total-tax' => 'Налог (:symbol)',
            'total-adjustment' => 'Корректировка (:symbol)',
            'grand-total' => 'Итого (:symbol)',
            'discount-amount' => 'Сумма скидки',
            'tax-amount' => 'Сумма налога',
            'adjustment-amount' => 'Сумма корректировки',
            'product-name' => 'Товар',
            'action' => 'Действие',
        ],
    ],

    'contacts' => [
        'persons' => [
            'index' => [
                'title' => 'Контакты',
                'create-btn' => 'Создать контакт',
                'create-success' => 'Контакт успешно создан.',
                'update-success' => 'Контакт успешно обновлён.',
                'all-delete-success' => 'Выбранные контакты удалены.',
                'partial-delete-warning' => 'Часть контактов удалена. Некоторые связаны со сделками.',
                'none-delete-warning' => 'Ни один контакт не удалён, так как они связаны со сделками.',
                'no-selection' => 'Контакты для удаления не выбраны.',
                'delete-failed' => 'Не удалось удалить выбранные контакты.',

                'datagrid' => [
                    'contact-numbers' => 'Телефоны',
                    'delete' => 'Удалить',
                    'edit' => 'Изменить',
                    'emails' => 'E-mail',
                    'id' => 'ID',
                    'view' => 'Просмотр',
                    'name' => 'Имя',
                    'organization-name' => 'Организация',
                ],
            ],

            'view' => [
                'title' => ':name',
                'about-person' => 'О контакте',
                'about-organization' => 'Об организации',

                'activities' => [
                    'index' => [
                        'all' => 'Все',
                        'calls' => 'Звонки',
                        'meetings' => 'Встречи',
                        'lunches' => 'Обеды',
                        'files' => 'Файлы',
                        'quotes' => 'КП',
                        'notes' => 'Заметки',
                        'emails' => 'Письма',
                        'by-user' => 'Пользователь: :user',
                        'scheduled-on' => 'Запланировано на',
                        'location' => 'Место',
                        'participants' => 'Участники',
                        'mark-as-done' => 'Отметить как выполнено',
                        'delete' => 'Удалить',
                        'edit' => 'Изменить',
                    ],

                    'actions' => [
                        'mail' => [
                            'btn' => 'Почта',
                            'title' => 'Написать письмо',
                            'to' => 'Кому',
                            'cc' => 'Копия',
                            'bcc' => 'Скрытая копия',
                            'subject' => 'Тема',
                            'send-btn' => 'Отправить',
                            'message' => 'Сообщение',
                        ],

                        'file' => [
                            'btn' => 'Файл',
                            'title' => 'Добавить файл',
                            'title-control' => 'Заголовок',
                            'name' => 'Имя файла',
                            'description' => 'Описание',
                            'file' => 'Файл',
                            'save-btn' => 'Сохранить файл',
                        ],

                        'note' => [
                            'btn' => 'Заметка',
                            'title' => 'Добавить заметку',
                            'comment' => 'Комментарий',
                            'save-btn' => 'Сохранить заметку',
                        ],

                        'activity' => [
                            'btn' => 'Активность',
                            'title' => 'Добавить активность',
                            'title-control' => 'Заголовок',
                            'description' => 'Описание',
                            'schedule-from' => 'Начало',
                            'schedule-to' => 'Окончание',
                            'location' => 'Место',
                            'call' => 'Звонок',
                            'meeting' => 'Встреча',
                            'lunch' => 'Обед',
                            'save-btn' => 'Сохранить активность',
                        ],
                    ],
                ],

                'tags' => [
                    'create-success' => 'Тег создан.',
                    'destroy-success' => 'Тег удалён.',
                ],
            ],

            'create' => [
                'title' => 'Создать контакт',
                'save-btn' => 'Сохранить контакт',
            ],

            'edit' => [
                'title' => 'Изменить контакт',
                'save-btn' => 'Сохранить контакт',
            ],
        ],

        'organizations' => [
            'index' => [
                'title' => 'Организации',
                'create-btn' => 'Создать организацию',
                'create-success' => 'Организация создана.',
                'update-success' => 'Организация обновлена.',
                'delete-success' => 'Организация удалена.',
                'delete-failed' => 'Невозможно удалить организацию.',

                'datagrid' => [
                    'delete' => 'Удалить',
                    'edit' => 'Изменить',
                    'id' => 'ID',
                    'name' => 'Название',
                    'persons-count' => 'Количество контактов',
                ],
            ],

            'create' => [
                'title' => 'Создать организацию',
                'save-btn' => 'Сохранить организацию',
            ],

            'edit' => [
                'title' => 'Изменить организацию',
                'save-btn' => 'Сохранить организацию',
            ],
        ],
    ],

    'products' => [
        'index' => [
            'title' => 'Товары',
            'create-btn' => 'Добавить товар',
            'create-success' => 'Товар создан.',
            'update-success' => 'Товар обновлён.',
            'delete-success' => 'Товар удалён.',
            'delete-failed' => 'Невозможно удалить товар.',

            'datagrid' => [
                'allocated' => 'Зарезервировано',
                'delete' => 'Удалить',
                'edit' => 'Изменить',
                'id' => 'ID',
                'in-stock' => 'В наличии',
                'name' => 'Название',
                'on-hand' => 'На складе',
                'tag-name' => 'Тег',
                'price' => 'Цена',
                'sku' => 'SKU',
                'view' => 'Просмотр',
            ],
        ],

        'create' => [
            'save-btn' => 'Сохранить товар',
            'title' => 'Создать товар',
            'general' => 'Общее',
            'price' => 'Цена',
        ],

        'edit' => [
            'title' => 'Изменить товар',
            'save-btn' => 'Сохранить товар',
            'general' => 'Общее',
            'price' => 'Цена',
        ],

        'view' => [
            'sku' => 'SKU',
            'all' => 'Все',
            'notes' => 'Заметки',
            'files' => 'Файлы',
            'inventories' => 'Инвентарь',
            'change-logs' => 'Журнал изменений',

            'attributes' => [
                'about-product' => 'О товаре',
            ],

            'inventory' => [
                'source' => 'Источник',
                'in-stock' => 'В наличии',
                'allocated' => 'Зарезервировано',
                'on-hand' => 'На складе',
                'actions' => 'Действия',
                'assign' => 'Назначить',
                'add-source' => 'Добавить источник',
                'location' => 'Место',
                'add-more' => 'Добавить ещё',
                'save' => 'Сохранить',
            ],
        ],
    ],

    'settings' => [
        'title' => 'Настройки',

        'groups' => [
            'index' => [
                'create-btn' => 'Создать группу',
                'title' => 'Группы',
                'create-success' => 'Группа создана.',
                'update-success' => 'Группа обновлена.',
                'destroy-success' => 'Группа удалена.',
                'delete-failed' => 'Невозможно удалить группу.',
                'delete-failed-associated-users' => 'Группа используется пользователями и не может быть удалена.',

                'datagrid' => [
                    'delete' => 'Удалить',
                    'description' => 'Описание',
                    'edit' => 'Изменить',
                    'id' => 'ID',
                    'name' => 'Название',
                ],

                'edit' => [
                    'title' => 'Изменить группу',
                ],

                'create' => [
                    'name' => 'Название',
                    'title' => 'Создать группу',
                    'description' => 'Описание',
                    'save-btn' => 'Сохранить группу',
                ],
            ],
        ],

        'roles' => [
            'index' => [
                'being-used' => 'Роль используется и не может быть удалена.',
                'create-btn' => 'Создать роль',
                'create-success' => 'Роль создана.',
                'current-role-delete-error' => 'Нельзя удалить роль текущего пользователя.',
                'delete-failed' => 'Невозможно удалить роль.',
                'delete-success' => 'Роль удалена.',
                'last-delete-error' => 'Необходима как минимум одна роль.',
                'settings' => 'Настройки',
                'title' => 'Роли',
                'update-success' => 'Роль обновлена.',
                'user-define-error' => 'Невозможно удалить системную роль.',

                'datagrid' => [
                    'all' => 'Все',
                    'custom' => 'Пользовательская',
                    'delete' => 'Удалить',
                    'description' => 'Описание',
                    'edit' => 'Изменить',
                    'id' => 'ID',
                    'name' => 'Название',
                    'permission-type' => 'Тип прав',
                ],
            ],

            'create' => [
                'access-control' => 'Контроль доступа',
                'all' => 'Все',
                'back-btn' => 'Назад',
                'custom' => 'Пользовательская',
                'description' => 'Описание',
                'general' => 'Общее',
                'name' => 'Название',
                'permissions' => 'Права',
                'save-btn' => 'Сохранить роль',
                'title' => 'Создать роль',
            ],

            'edit' => [
                'access-control' => 'Контроль доступа',
                'all' => 'Все',
                'back-btn' => 'Назад',
                'custom' => 'Пользовательская',
                'description' => 'Описание',
                'general' => 'Общее',
                'name' => 'Название',
                'permissions' => 'Права',
                'save-btn' => 'Сохранить роль',
                'title' => 'Изменить роль',
            ],
        ],

        'types' => [
            'index' => [
                'create-btn' => 'Создать тип',
                'create-success' => 'Тип создан.',
                'delete-failed' => 'Невозможно удалить тип.',
                'delete-success' => 'Тип удалён.',
                'title' => 'Типы',
                'update-success' => 'Тип обновлён.',

                'datagrid' => [
                    'delete' => 'Удалить',
                    'description' => 'Описание',
                    'edit' => 'Изменить',
                    'id' => 'ID',
                    'name' => 'Название',
                ],

                'create' => [
                    'name' => 'Название',
                    'save-btn' => 'Сохранить тип',
                    'title' => 'Создать тип',
                ],

                'edit' => [
                    'title' => 'Изменить тип',
                ],
            ],
        ],

        'sources' => [
            'index' => [
                'title' => 'Источники',
                'create-btn' => 'Создать источник',
                'create-success' => 'Источник создан.',
                'delete-failed' => 'Невозможно удалить источник.',
                'delete-success' => 'Источник удалён.',
                'update-success' => 'Источник обновлён.',
                'delete-failed-associated-leads' => 'Источник связан со сделками. Отвяжите или обновите сделки перед удалением.',

                'datagrid' => [
                    'delete' => 'Удалить',
                    'edit' => 'Изменить',
                    'id' => 'ID',
                    'name' => 'Название',
                ],

                'create' => [
                    'name' => 'Название',
                    'save-btn' => 'Сохранить источник',
                    'title' => 'Создать источник',
                ],

                'edit' => [
                    'title' => 'Изменить источник',
                ],
            ],
        ],

        'workflows' => [
            'index' => [
                'title' => 'Бизнес-процессы',
                'create-btn' => 'Создать процесс',
                'create-success' => 'Процесс создан.',
                'update-success' => 'Процесс обновлён.',
                'delete-success' => 'Процесс удалён.',
                'delete-failed' => 'Невозможно удалить процесс.',

                'datagrid' => [
                    'delete' => 'Удалить',
                    'description' => 'Описание',
                    'edit' => 'Изменить',
                    'id' => 'ID',
                    'name' => 'Название',
                ],
            ],

            'helpers' => [
                'update-related-leads' => 'Обновить связанные сделки',
                'send-email-to-sales-owner' => 'Отправить письмо ответственному',
                'send-email-to-participants' => 'Отправить письма участникам',
                'add-webhook' => 'Добавить вебхук',
                'update-lead' => 'Обновить сделку',
                'update-person' => 'Обновить контакт',
                'send-email-to-person' => 'Отправить письмо контакту',
                'add-tag' => 'Добавить тег',
                'add-note-as-activity' => 'Добавить заметку как активность',
                'update-quote' => 'Обновить КП',
            ],
        ],

        'webforms' => [
            'index' => [
                'title' => 'Веб-формы',
                'create-btn' => 'Создать веб-форму',
                'create-success' => 'Веб-форма создана.',
                'update-success' => 'Веб-форма обновлена.',
                'delete-success' => 'Веб-форма удалена.',
                'delete-failed' => 'Невозможно удалить веб-форму.',

                'datagrid' => [
                    'id' => 'ID',
                    'title' => 'Заголовок',
                    'edit' => 'Изменить',
                    'delete' => 'Удалить',
                ],
            ],
        ],

        'email-template' => [
            'index' => [
                'create-btn' => 'Создать шаблон письма',
                'title' => 'Шаблоны писем',
                'create-success' => 'Шаблон создан.',
                'update-success' => 'Шаблон обновлён.',
                'delete-success' => 'Шаблон удалён.',
                'delete-failed' => 'Невозможно удалить шаблон.',

                'datagrid' => [
                    'delete' => 'Удалить',
                    'edit' => 'Изменить',
                    'id' => 'ID',
                    'name' => 'Название',
                    'subject' => 'Тема',
                ],
            ],
        ],

        'marketing' => [
            'events' => [
                'index' => [
                    'create-btn' => 'Создать событие',
                    'title' => 'События',
                    'create-success' => 'Событие создано.',
                    'update-success' => 'Событие обновлено.',
                    'delete-success' => 'Событие удалено.',
                    'delete-failed' => 'Невозможно удалить событие.',
                    'mass-delete-success' => 'События удалены.',

                    'datagrid' => [
                        'delete' => 'Удалить',
                        'edit' => 'Изменить',
                        'id' => 'ID',
                        'name' => 'Название',
                        'description' => 'Описание',
                        'date' => 'Дата',
                    ],
                ],
            ],

            'campaigns' => [
                'index' => [
                    'create-btn' => 'Создать кампанию',
                    'title' => 'Кампании',
                    'create-success' => 'Кампания создана.',
                    'update-success' => 'Кампания обновлена.',
                    'delete-success' => 'Кампания удалена.',
                    'delete-failed' => 'Невозможно удалить кампанию.',
                    'mass-delete-success' => 'Кампании удалены.',

                    'datagrid' => [
                        'id' => 'ID',
                        'name' => 'Название',
                        'subject' => 'Тема',
                        'status' => 'Статус',
                        'active' => 'Активна',
                        'inactive' => 'Неактивна',
                        'edit' => 'Изменить',
                        'delete' => 'Удалить',
                    ],
                ],
            ],
        ],

        'tags' => [
            'index' => [
                'create-btn' => 'Создать тег',
                'title' => 'Теги',

                'datagrid' => [
                    'delete' => 'Удалить',
                    'edit' => 'Изменить',
                    'id' => 'ID',
                    'name' => 'Название',
                    'users' => 'Пользователи',
                    'created-at' => 'Создано',
                ],

                'create' => [
                    'name' => 'Название',
                    'save-btn' => 'Сохранить тег',
                    'title' => 'Создать тег',
                    'color' => 'Цвет',
                ],

                'edit' => [
                    'title' => 'Изменить тег',
                ],
            ],
        ],

        'users' => [
            'index' => [
                'create-btn' => 'Создать пользователя',
                'create-success' => 'Пользователь создан.',
                'delete-failed' => 'Невозможно удалить пользователя.',
                'delete-success' => 'Пользователь удалён.',
                'last-delete-error' => 'Нужен как минимум один пользователь.',
                'mass-delete-failed' => 'Невозможно удалить пользователей.',
                'mass-delete-success' => 'Пользователи удалены.',
                'mass-update-failed' => 'Невозможно обновить пользователей.',
                'mass-update-success' => 'Пользователи обновлены.',
                'title' => 'Пользователи',
                'update-success' => 'Пользователь обновлён.',
                'user-define-error' => 'Невозможно удалить системного пользователя.',
                'active' => 'Активен',
                'inactive' => 'Неактивен',

                'datagrid' => [
                    'active' => 'Активен',
                    'created-at' => 'Создан',
                    'delete' => 'Удалить',
                    'edit' => 'Изменить',
                    'email' => 'E-mail',
                    'id' => 'ID',
                    'inactive' => 'Неактивен',
                    'name' => 'Имя',
                    'status' => 'Статус',
                    'update-status' => 'Обновить статус',
                    'users' => 'Пользователи',
                ],

                'create' => [
                    'confirm-password' => 'Подтвердите пароль',
                    'email' => 'E-mail',
                    'general' => 'Общее',
                    'global' => 'Глобальные',
                    'group' => 'Группа',
                    'individual' => 'Индивидуальные',
                    'name' => 'Имя',
                    'password' => 'Пароль',
                    'permission' => 'Права',
                    'role' => 'Роль',
                    'save-btn' => 'Сохранить пользователя',
                    'status' => 'Статус',
                    'title' => 'Создать пользователя',
                    'view-permission' => 'Права просмотра',
                    'select-at-lest-one-group' => 'Выберите хотя бы одну группу',
                ],

                'edit' => [
                    'title' => 'Изменить пользователя',
                ],
            ],
        ],

        'pipelines' => [
            'index' => [
                'title' => 'Воронки',
                'create-btn' => 'Создать воронку',
                'create-success' => 'Воронка создана.',
                'update-success' => 'Воронка обновлена.',
                'default-required' => 'Нужна как минимум одна воронка по умолчанию.',
                'delete-success' => 'Воронка удалена.',
                'delete-failed' => 'Невозможно удалить воронку.',
                'default-delete-error' => 'Нельзя удалить воронку по умолчанию.',

                'datagrid' => [
                    'delete' => 'Удалить',
                    'edit' => 'Изменить',
                    'id' => 'ID',
                    'is-default' => 'По умолчанию',
                    'name' => 'Название',
                    'no' => 'Нет',
                    'rotten-days' => 'Дней до «протухания»',
                    'yes' => 'Да',
                ],
            ],

            'create' => [
                'title' => 'Создать воронку',
                'save-btn' => 'Сохранить воронку',
                'name' => 'Название',
                'rotten-days' => 'Дней до «протухания»',
                'mark-as-default' => 'Сделать по умолчанию',
                'general' => 'Общее',
                'probability' => 'Вероятность (%)',
                'new-stage' => 'Новая',
                'won-stage' => 'Выиграна',
                'lost-stage' => 'Проиграна',
                'stage-btn' => 'Добавить этап',
                'stages' => 'Этапы',
                'duplicate-name' => 'Поле «Название» должно быть уникальным',
                'delete-stage' => 'Удалить этап',
                'add-new-stages' => 'Добавить этапы',
                'add-stage-info' => 'Добавьте новый этап в вашу воронку',
                'newly-added' => 'Добавлено',
                'stage-delete-success' => 'Этап удалён',
            ],

            'edit' => [
                'title' => 'Изменить воронку',
                'save-btn' => 'Сохранить воронку',
                'name' => 'Название',
                'rotten-days' => 'Дней до «протухания»',
                'mark-as-default' => 'Сделать по умолчанию',
                'general' => 'Общее',
                'probability' => 'Вероятность (%)',
                'new-stage' => 'Новая',
                'won-stage' => 'Выиграна',
                'lost-stage' => 'Проиграна',
                'stage-btn' => 'Добавить этап',
                'stages' => 'Этапы',
                'duplicate-name' => 'Поле «Название» должно быть уникальным',
                'delete-stage' => 'Удалить этап',
                'add-new-stages' => 'Добавить этапы',
                'add-stage-info' => 'Добавьте новый этап в вашу воронку',
                'stage-delete-success' => 'Этап удалён',
            ],
        ],

        'webhooks' => [
            'index' => [
                'title' => 'Вебхуки',
                'create-btn' => 'Создать вебхук',
                'create-success' => 'Вебхук создан.',
                'update-success' => 'Вебхук обновлён.',
                'delete-success' => 'Вебхук удалён.',
                'delete-failed' => 'Невозможно удалить вебхук.',

                'datagrid' => [
                    'id' => 'ID',
                    'delete' => 'Удалить',
                    'edit' => 'Изменить',
                    'name' => 'Название',
                    'entity-type' => 'Тип сущности',
                    'end-point' => 'Endpoint',
                ],
            ],
        ],

        'warehouses' => [
            'index' => [
                'title' => 'Склады',
                'create-btn' => 'Создать склад',
                'create-success' => 'Склад создан.',
                'name-exists' => 'Склад с таким названием уже существует.',
                'update-success' => 'Склад обновлён.',
                'delete-success' => 'Склад удалён.',
                'delete-failed' => 'Невозможно удалить склад.',

                'datagrid' => [
                    'id' => 'ID',
                    'name' => 'Название',
                    'contact-name' => 'Контактное лицо',
                    'delete' => 'Удалить',
                    'edit' => 'Изменить',
                    'view' => 'Просмотр',
                    'created-at' => 'Создан',
                    'products' => 'Товары',
                    'contact-emails' => 'Контактные e-mail',
                    'contact-numbers' => 'Контактные номера',
                ],
            ],

            'create' => [
                'title' => 'Создать склад',
                'save-btn' => 'Сохранить склад',
                'contact-info' => 'Контактная информация',
            ],

            'edit' => [
                'title' => 'Изменить склад',
                'save-btn' => 'Сохранить склад',
                'contact-info' => 'Контактная информация',
            ],

            'view' => [
                'all' => 'Все',
                'notes' => 'Заметки',
                'files' => 'Файлы',
                'location' => 'Местоположение',
                'change-logs' => 'Журнал изменений',

                'locations' => [
                    'action' => 'Действие',
                    'add-location' => 'Добавить локацию',
                    'create-success' => 'Локация создана.',
                    'delete' => 'Удалить',
                    'delete-failed' => 'Невозможно удалить локацию.',
                    'delete-success' => 'Локация удалена.',
                    'name' => 'Название',
                    'save-btn' => 'Сохранить',
                ],

                'general-information' => [
                    'title' => 'Общая информация',
                ],

                'contact-information' => [
                    'title' => 'Контактная информация',
                ],
            ],
        ],

        'attributes' => [
            'index' => [
                'title' => 'Атрибуты',
                'create-btn' => 'Создать атрибут',
                'create-success' => 'Атрибут создан.',
                'update-success' => 'Атрибут обновлён.',
                'delete-success' => 'Атрибут удалён.',
                'delete-failed' => 'Невозможно удалить атрибут.',
                'user-define-error' => 'Нельзя удалить системный атрибут.',
                'mass-delete-failed' => 'Системные атрибуты нельзя удалять.',

                'datagrid' => [
                    'yes' => 'Да',
                    'no' => 'Нет',
                    'id' => 'ID',
                    'code' => 'Код',
                    'name' => 'Название',
                    'entity-type' => 'Тип сущности',
                    'type' => 'Тип',
                    'is-default' => 'По умолчанию',
                    'edit' => 'Изменить',
                    'delete' => 'Удалить',

                    'entity-types' => [
                        'leads' => 'Сделки',
                        'organizations' => 'Организации',
                        'persons' => 'Контакты',
                        'products' => 'Товары',
                        'quotes' => 'КП',
                        'warehouses' => 'Склады',
                    ],

                    'types' => [
                        'text' => 'Текст',
                        'textarea' => 'Текстовая область',
                        'price' => 'Цена',
                        'boolean' => 'Логический',
                        'select' => 'Выбор',
                        'multiselect' => 'Множественный выбор',
                        'checkbox' => 'Флажок',
                        'email' => 'E-mail',
                        'address' => 'Адрес',
                        'phone' => 'Телефон',
                        'lookup' => 'Справочник',
                        'datetime' => 'Дата и время',
                        'date' => 'Дата',
                        'image' => 'Изображение',
                        'file' => 'Файл',
                    ],
                ],
            ],

            'create' => [
                'title' => 'Создать атрибут',
                'save-btn' => 'Сохранить атрибут',
                'code' => 'Код',
                'name' => 'Название',
                'entity-type' => 'Тип сущности',
                'type' => 'Тип',
                'validations' => 'Валидации',
                'is-required' => 'Обязательный',
                'input-validation' => 'Проверка ввода',
                'is-unique' => 'Уникальный',
                'labels' => 'Метки',
                'general' => 'Общее',
                'numeric' => 'Числовой',
                'decimal' => 'Десятичный',
                'url' => 'URL',
                'options' => 'Опции',
                'option-type' => 'Тип опции',
                'lookup-type' => 'Тип справочника',
                'add-option' => 'Добавить опцию',
                'save-option' => 'Сохранить опцию',
                'option-name' => 'Название опции',
                'text' => 'Текст',
                'textarea' => 'Текстовая область',
                'price' => 'Цена',
                'boolean' => 'Логический',
                'select' => 'Выбор',
                'multiselect' => 'Множественный выбор',
                'email' => 'E-mail',
                'address' => 'Адрес',
                'phone' => 'Телефон',
                'datetime' => 'Дата и время',
                'date' => 'Дата',
                'image' => 'Изображение',
                'file' => 'Файл',
                'lookup' => 'Справочник',
                'checkbox' => 'Флажок',
                'actions' => 'Действия',
            ],

            'edit' => [
                'actions' => 'Действия',
                'add-attribute-options' => 'Добавить опции атрибута',
                'add-option' => 'Добавить опцию',
                'address' => 'Адрес',
                'boolean' => 'Логический',
                'checkbox' => 'Флажок',
                'code' => 'Код',
                'date' => 'Дата',
                'datetime' => 'Дата и время',
                'decimal' => 'Десятичный',
                'email' => 'E-mail',
                'entity-type' => 'Тип сущности',
                'file' => 'Файл',
                'general' => 'Общее',
                'image' => 'Изображение',
                'input-validation' => 'Проверка ввода',
                'is-required' => 'Обязательный',
                'is-unique' => 'Уникальный',
                'labels' => 'Метки',
                'lookup' => 'Справочник',
                'lookup-type' => 'Тип справочника',
                'multiselect' => 'Множественный выбор',
                'name' => 'Название',
                'numeric' => 'Числовой',
                'option-deleted' => 'Опция атрибута удалена',
                'option-name' => 'Название опции',
                'option-type' => 'Тип опции',
                'options' => 'Опции',
                'phone' => 'Телефон',
                'price' => 'Цена',
                'save-btn' => 'Сохранить атрибут',
                'save-option' => 'Сохранить опцию',
                'select' => 'Выбор',
                'text' => 'Текст',
                'textarea' => 'Текстовая область',
                'title' => 'Изменить атрибут',
                'type' => 'Тип',
                'url' => 'URL',
                'validations' => 'Валидации',
            ],
        ],

        'data-transfer' => [
            'imports' => [
                'index' => [
                    'button-title' => 'Создать импорт',
                    'title' => 'Импорты',

                    'datagrid' => [
                        'actions' => 'Действия',
                        'completed-at' => 'Завершено',
                        'created' => 'Создано',
                        'delete' => 'Удалить',
                        'deleted' => 'Удалён',
                        'edit' => 'Изменить',
                        'error-file' => 'Файл ошибок',
                        'id' => 'ID',
                        'started-at' => 'Начато',
                        'state' => 'Состояние',
                        'summary' => 'Итоги',
                        'type' => 'Тип',
                        'updated' => 'Обновлён',
                        'uploaded-file' => 'Загруженный файл',
                    ],
                ],

                'create-success' => 'Импорт создан.',
                'delete-failed' => 'Не удалось удалить импорт.',
                'delete-success' => 'Импорт удалён.',
                'not-valid' => 'Импорт недействителен',
                'nothing-to-import' => 'Нет ресурсов для импорта.',
                'setup-queue-error' => 'Смените драйвер очереди на "database" или "redis" для запуска импорта.',
                'update-success' => 'Импорт обновлён.',
            ],
        ],
    ],

    'activities' => [
        'index' => [
            'title' => 'Активности',

            'datagrid' => [
                'comment' => 'Комментарий',
                'created_at' => 'Создано',
                'created_by' => 'Кем создано',
                'edit' => 'Изменить',
                'id' => 'ID',
                'done' => 'Выполнено',
                'not-done' => 'Не выполнено',
                'lead' => 'Сделка',
                'mass-delete' => 'Массовое удаление',
                'mass-update' => 'Массовое обновление',
                'schedule-from' => 'Начало',
                'schedule-to' => 'Окончание',
                'title' => 'Заголовок',
                'is_done' => 'Выполнено',
                'type' => 'Тип',
                'update' => 'Обновить',
                'call' => 'Звонок',
                'meeting' => 'Встреча',
                'lunch' => 'Обед',
            ],
        ],

        'edit' => [
            'title' => 'Изменить активность',
            'back-btn' => 'Назад',
            'save-btn' => 'Сохранить активность',
            'type' => 'Тип активности',
            'call' => 'Звонок',
            'meeting' => 'Встреча',
            'lunch' => 'Обед',
            'schedule_to' => 'Окончание',
            'schedule_from' => 'Начало',
            'location' => 'Место',
            'comment' => 'Комментарий',
            'lead' => 'Сделка',
            'participants' => 'Участники',
            'general' => 'Общее',
            'persons' => 'Контакты',
            'no-result-found' => 'Записи не найдены.',
            'users' => 'Пользователи',
        ],

        'updated' => 'Обновлено :attribute',
        'created' => 'Создано',
        'duration-overlapping' => 'Участники заняты в это время. Продолжить?',
        'create-success' => 'Активность создана.',
        'update-success' => 'Активность обновлена.',
        'overlapping-error' => 'Участники заняты в это время.',
        'destroy-success' => 'Активность удалена.',
        'delete-failed' => 'Невозможно удалить активность.',
        'mass-update-success' => 'Активности обновлены.',
        'mass-destroy-success' => 'Активности удалены.',
        'mass-delete-failed' => 'Невозможно удалить активности.',
    ],

    'mail' => [
        'index' => [
            'compose' => 'Создать',
            'draft' => 'Черновики',
            'inbox' => 'Входящие',
            'outbox' => 'Исходящие',
            'sent' => 'Отправленные',
            'trash' => 'Корзина',
            'compose-mail-btn' => 'Создать письмо',
            'btn' => 'Почта',

            'mail' => [
                'title' => 'Написать письмо',
                'to' => 'Кому',
                'enter-emails' => 'Нажмите Enter, чтобы добавить e-mail',
                'cc' => 'Копия',
                'bcc' => 'Скрытая копия',
                'subject' => 'Тема',
                'send-btn' => 'Отправить',
                'message' => 'Сообщение',
                'draft' => 'Черновик',
            ],

            'datagrid' => [
                'id' => 'ID',
                'from' => 'От',
                'to' => 'Кому',
                'subject' => 'Тема',
                'tags' => 'Теги',
                'content' => 'Содержимое',
                'attachments' => 'Вложения',
                'date' => 'Дата',
                'move-to-inbox' => 'Перемещено во «Входящие»',
                'move-to-trash' => 'Перемещено в корзину',
                'edit' => 'Изменить',
                'view' => 'Просмотр',
                'delete' => 'Удалить',
            ],
        ],

        'create-success' => 'Письмо отправлено.',
        'update-success' => 'Письмо обновлено.',
        'mass-update-success' => 'Письма обновлены.',
        'delete-success' => 'Письмо удалено.',
        'delete-failed' => 'Невозможно удалить письмо.',

        'view' => [
            'title' => 'Письма',
            'subject' => ':subject',
            'link-mail' => 'Привязать письмо',
            'to' => 'Кому',
            'cc' => 'Копия',
            'bcc' => 'Скрытая копия',
            'reply' => 'Ответить',
            'reply-all' => 'Ответить всем',
            'forward' => 'Переслать',
            'delete' => 'Удалить',
            'enter-mails' => 'Введите e-mail',
            'rotten-days' => 'Сделка «протухла» :days дн.',
            'search-an-existing-lead' => 'Найти существующую сделку',
            'search-an-existing-contact' => 'Найти существующий контакт',
            'message' => 'Сообщение',
            'add-attachments' => 'Добавить вложения',
            'discard' => 'Отменить',
            'send' => 'Отправить',
            'no-result-found' => 'Ничего не найдено',
            'add-new-contact' => 'Добавить контакт',
            'description' => 'Описание',
            'search' => 'Поиск...',
            'add-new-lead' => 'Добавить сделку',
            'create-new-contact' => 'Создать контакт',
            'save-contact' => 'Сохранить контакт',
            'create-lead' => 'Создать сделку',
            'linked-contact' => 'Связанный контакт',
            'link-to-contact' => 'Привязать к контакту',
            'link-to-lead' => 'Привязать к сделке',
            'linked-lead' => 'Связанная сделка',

            'tags' => [
                'create-success' => 'Тег создан.',
                'destroy-success' => 'Тег удалён.',
            ],
        ],
    ],

    'common' => [
        'custom-attributes' => [
            'add-more' => 'Добавить',
            'address' => 'Адрес',
            'city' => 'Город',
            'contact' => 'Телефоны',
            'country' => 'Страна',
            'email' => 'E-mail',
            'home' => 'Домашний',
            'postcode' => 'Индекс',
            'save' => 'Сохранить',
            'select' => 'Выбрать',
            'select-country' => 'Выберите страну',
            'select-state' => 'Выберите регион',
            'state' => 'Регион',
            'update-contact-title' => 'Обновить телефоны',
            'update-emails-title' => 'Обновить e-mail',
            'work' => 'Рабочий',
        ],
    ],

    'leads' => [
        'create-success' => 'Сделка создана.',
        'update-success' => 'Сделки обновлены.',
        'update-failed' => 'Невозможно обновить сделки.',
        'destroy-success' => 'Сделка удалена.',
        'destroy-failed' => 'Невозможно удалить сделку.',

        'index' => [
            'title' => 'Сделки',
            'create-btn' => 'Создать сделку',

            'datagrid' => [
                'id' => 'ID',
                'sales-person' => 'Менеджер',
                'subject' => 'Тема',
                'source' => 'Источник',
                'lead-value' => 'Сумма сделки',
                'lead-type' => 'Тип сделки',
                'tag-name' => 'Тег',
                'contact-person' => 'Контакт',
                'stage' => 'Этап',
                'rotten-lead' => '«Протухшая» сделка',
                'date-to' => 'Дата до',
                'created-at' => 'Создана',
                'no' => 'Нет',
                'yes' => 'Да',
                'delete' => 'Удалить',
                'mass-delete' => 'Массовое удаление',
                'mass-update' => 'Массовое обновление',
            ],

            'kanban' => [
                'rotten-days' => 'Сделка «протухла» :days дн.',
                'empty-list' => 'Список сделок пуст',
                'empty-list-description' => 'Создайте сделку, чтобы организовать цели.',
                'create-lead-btn' => 'Создать сделку',

                'columns' => [
                    'contact-person' => 'Контакт',
                    'id' => 'ID',
                    'lead-type' => 'Тип сделки',
                    'lead-value' => 'Сумма сделки',
                    'sales-person' => 'Менеджер',
                    'source' => 'Источник',
                    'title' => 'Название',
                    'tags' => 'Теги',
                    'expected-close-date' => 'Ожидаемая дата закрытия',
                    'created-at' => 'Создана',
                ],

                'toolbar' => [
                    'search' => [
                        'title' => 'Поиск по названию',
                    ],

                    'filters' => [
                        'apply-filters' => 'Применить фильтры',
                        'clear-all' => 'Сбросить всё',
                        'filter' => 'Фильтр',
                        'filters' => 'Фильтры',
                        'from' => 'От',
                        'select' => 'Выбрать',
                        'to' => 'До',
                    ],
                ],

                'stages' => [
                    'won-lost' => 'Выиграна/Проиграна',
                    'won' => 'Выиграна',
                    'lost' => 'Проиграна',
                    'need-more-info' => 'Нужно больше данных',
                    'closed-at' => 'Закрыта',
                    'won-value' => 'Сумма выигрыша',
                    'lost-reason' => 'Причина проигрыша',
                    'save-btn' => 'Сохранить',
                ],
            ],

            'view-switcher' => [
                'all-pipelines' => 'Все воронки',
                'create-new-pipeline' => 'Создать воронку',
            ],

            'upload' => [
                'create-lead' => 'Создать сделку с помощью AI',
                'file' => 'Загрузка файла',
                'file-info' => 'Допустимые форматы: pdf, bmp, jpg, jpeg, png.',
                'file-required' => 'Выберите хотя бы один файл.',
                'save-btn' => 'Сохранить',
                'upload-file' => 'Загрузить файл',
            ],
        ],

        'create' => [
            'title' => 'Создать сделку',
            'save-btn' => 'Сохранить',
            'details' => 'Детали',
            'details-info' => 'Укажите основную информацию о сделке',
            'contact-person' => 'Контакт',
            'contact-info' => 'Информация о контакте',
            'products' => 'Товары',
            'products-info' => 'Информация о товарах',
        ],

        'edit' => [
            'title' => 'Изменить сделку',
            'save-btn' => 'Сохранить',
            'details' => 'Детали',
            'details-info' => 'Укажите основную информацию о сделке',
            'contact-person' => 'Контакт',
            'contact-info' => 'Информация о контакте',
            'products' => 'Товары',
            'products-info' => 'Информация о товарах',
        ],

        'common' => [
            'contact' => [
                'name' => 'Имя',
                'email' => 'E-mail',
                'contact-number' => 'Телефон',
                'organization' => 'Организация',
            ],

            'products' => [
                'product-name' => 'Товар',
                'quantity' => 'Кол-во',
                'price' => 'Цена',
                'amount' => 'Сумма',
                'action' => 'Действие',
                'add-more' => 'Добавить',
                'total' => 'Итого',
            ],
        ],

        'view' => [
            'title' => 'Сделка: :title',
            'rotten-days' => ':days дн.',

            'tabs' => [
                'description' => 'Описание',
                'products' => 'Товары',
                'quotes' => 'КП',
            ],

            'attributes' => [
                'title' => 'О сделке',
            ],

            'quotes' => [
                'subject' => 'Тема',
                'expired-at' => 'Истекает',
                'sub-total' => 'Промежуточный итог',
                'discount' => 'Скидка',
                'tax' => 'Налог',
                'adjustment' => 'Корректировка',
                'grand-total' => 'Итого',
                'delete' => 'Удалить',
                'edit' => 'Изменить',
                'download' => 'Скачать',
                'destroy-success' => 'КП удалено.',
                'empty-title' => 'КП не найдено',
                'empty-info' => 'Для этой сделки КП отсутствуют',
                'add-btn' => 'Добавить КП',
            ],

            'products' => [
                'product-name' => 'Товар',
                'quantity' => 'Кол-во',
                'price' => 'Цена',
                'amount' => 'Сумма',
                'action' => 'Действие',
                'add-more' => 'Добавить',
                'total' => 'Итого',
                'empty-title' => 'Товары не найдены',
                'empty-info' => 'Для этой сделки товары отсутствуют',
                'add-product' => 'Добавить товар',
            ],

            'persons' => [
                'title' => 'О контактах',
                'job-title' => ':job_title в :organization',
            ],

            'stages' => [
                'won-lost' => 'Выиграна/Проиграна',
                'won' => 'Выиграна',
                'lost' => 'Проиграна',
                'need-more-info' => 'Нужно больше данных',
                'closed-at' => 'Закрыта',
                'won-value' => 'Сумма выигрыша',
                'lost-reason' => 'Причина проигрыша',
                'save-btn' => 'Сохранить',
            ],

            'tags' => [
                'create-success' => 'Тег создан.',
                'destroy-success' => 'Тег удалён.',
            ],
        ],
    ],

    'configuration' => [
        'index' => [
            'back' => 'Назад',
            'delete' => 'Удалить',
            'save-btn' => 'Сохранить конфигурацию',
            'save-success' => 'Конфигурация сохранена.',
            'search' => 'Поиск',
            'select-country' => 'Выберите страну',
            'select-state' => 'Выберите регион',
            'title' => 'Конфигурация',

            'general' => [
                'title' => 'Общее',
                'info' => 'Общие настройки',

                'general' => [
                    'title' => 'Общее',
                    'info' => 'Обновите общие настройки здесь.',
                    'locale-settings' => [
                        'title' => 'Языковые настройки',
                        'title-info' => 'Определяет язык интерфейса, например ar, en, es, fa, tr.',
                    ],

                    'admin-logo' => [
                        'logo-image' => 'Логотип',
                        'title' => 'Логотип админки',
                        'title-info' => 'Задайте логотип для админ‑панели.',
                    ],
                ],

                'settings' => [
                    'title' => 'Настройки',
                    'info' => 'Обновите ваши настройки здесь.',

                    'footer' => [
                        'info' => 'Настройка секции «Powered by».',
                        'powered-by' => 'Текст «Powered by»',
                        'title' => 'Настройки секции «Powered by»',
                    ],

                    'menu' => [
                        'activities' => 'Активности',
                        'configuration' => 'Конфигурация',
                        'contacts' => 'Контакты',
                        'dashboard' => 'Дашборд',
                        'draft' => 'Черновики',
                        'inbox' => 'Входящие',
                        'info' => 'Переименуйте пункты меню.',
                        'leads' => 'Сделки',
                        'mail' => 'Почта',
                        'organizations' => 'Организации',
                        'outbox' => 'Исходящие',
                        'persons' => 'Контакты',
                        'products' => 'Товары',
                        'quotes' => 'КП',
                        'sent' => 'Отправленные',
                        'settings' => 'Настройки',
                        'title' => 'Настройки пунктов меню',
                        'trash' => 'Корзина',
                    ],

                    'menu-color' => [
                        'brand-color' => 'Цвет бренда',
                        'info' => 'Изменение цветов пунктов меню.',
                        'title' => 'Цвета пунктов меню',
                    ],
                ],
            ],

            'email' => [
                'title' => 'Почта',
                'info' => 'Настройки почты приложения.',

                'imap' => [
                    'title' => 'IMAP‑настройки',
                    'info' => 'Конфигурация IMAP для получения писем.',

                    'account' => [
                        'title' => 'IMAP‑аккаунт',
                        'title-info' => 'Настройки вашего IMAP‑аккаунта.',
                        'host' => 'Хост',
                        'port' => 'Порт',
                        'encryption' => 'Тип шифрования',
                        'validate-cert' => 'Проверять SSL‑сертификат',
                        'username' => 'IMAP‑логин',
                        'password' => 'IMAP‑пароль',
                    ],
                ],
            ],

            'magic-ai' => [
                'title' => 'Magic AI',
                'info' => 'Настройки Magic AI.',

                'settings' => [
                    'api-key' => 'API‑ключ',
                    'api-key-info' => 'Используйте ключ OpenRouter для каждой модели.',
                    'enable' => 'Включить',
                    'info' => 'Улучшите опыт Magic AI, указав API‑ключ OpenRouter.',
                    'other' => 'Другая модель',
                    'other-model' => 'Для других моделей используйте ID модели из OpenRouter.',
                    'doc-generation' => 'Генерация DOC',
                    'doc-generation-info' => 'Автоматически извлекать данные из DOC и конвертировать в текст.',
                    'title' => 'Общие настройки',

                    'models' => [
                        'deepseek-r1' => 'Deepseek R1 Distill-llama-8b',
                        'gemini-2-0-flash-001' => 'Gemini 2.0 flash-001',
                        'gpt-4o' => 'GPT-4.0',
                        'gpt-4o-mini' => 'GPT-4.0 mini',
                        'grok-2-1212' => 'Grok 2.12',
                        'llama-3-2-3b-instruct' => 'Llama 3.2 3b Instruct',
                        'title' => 'Модели',
                    ],
                ],
            ],
        ],
    ],

    'dashboard' => [
        'index' => [
            'title' => 'Дашборд',

            'revenue' => [
                'lost-revenue' => 'Упущенная выручка',
                'won-revenue' => 'Полученная выручка',
            ],

            'over-all' => [
                'average-lead-value' => 'Средняя сумма сделки',
                'total-leads' => 'Всего сделок',
                'average-leads-per-day' => 'Среднее сделок в день',
                'total-quotations' => 'Всего КП',
                'total-persons' => 'Всего контактов',
                'total-organizations' => 'Всего организаций',
            ],

            'total-leads' => [
                'title' => 'Сделки',
                'total' => 'Всего сделок',
                'won' => 'Выиграно',
                'lost' => 'Проиграно',
            ],

            'revenue-by-sources' => [
                'title' => 'Выручка по источникам',
                'empty-title' => 'Нет данных',
                'empty-info' => 'Нет данных за выбранный период',
            ],

            'revenue-by-types' => [
                'title' => 'Выручка по типам',
                'empty-title' => 'Нет данных',
                'empty-info' => 'Нет данных за выбранный период',
            ],

            'top-selling-products' => [
                'title' => 'Топ товары',
                'empty-title' => 'Товары не найдены',
                'empty-info' => 'Нет данных за выбранный период',
            ],

            'top-persons' => [
                'title' => 'Топ контакты',
                'empty-title' => 'Контакты не найдены',
                'empty-info' => 'Нет данных за выбранный период',
            ],

            'open-leads-by-states' => [
                'title' => 'Открытые сделки по этапам',
                'empty-title' => 'Нет данных',
                'empty-info' => 'Нет данных за выбранный период',
            ],
        ],
    ],

    'layouts' => [
        'app-version' => 'Версия: :version',
        'dashboard' => 'Дашборд',
        'leads' => 'Сделки',
        'quotes' => 'КП',
        'quote' => 'КП',
        'mail' => [
            'title' => 'Почта',
            'compose' => 'Создать',
            'inbox' => 'Входящие',
            'draft' => 'Черновики',
            'outbox' => 'Исходящие',
            'sent' => 'Отправленные',
            'trash' => 'Корзина',
            'setting' => 'Настройки',
        ],
        'activities' => 'Активности',
        'contacts' => 'Контакты',
        'persons' => 'Контакты',
        'person' => 'Контакт',
        'organizations' => 'Организации',
        'organization' => 'Организация',
        'products' => 'Товары',
        'product' => 'Товар',
        'settings' => 'Настройки',
        'user' => 'Пользователь',
        'user-info' => 'Управляйте пользователями и их правами в CRM.',
        'groups' => 'Группы',
        'groups-info' => 'Добавляйте, изменяйте и удаляйте группы в CRM',
        'roles' => 'Роли',
        'role' => 'Роль',
        'roles-info' => 'Добавляйте, изменяйте и удаляйте роли в CRM',
        'users' => 'Пользователи',
        'users-info' => 'Добавляйте, изменяйте и удаляйте пользователей в CRM',
        'lead' => 'Сделка',
        'lead-info' => 'Настройки сделок в CRM',
        'pipelines' => 'Воронки',
        'pipelines-info' => 'Добавляйте, изменяйте и удаляйте воронки в CRM',
        'sources' => 'Источники',
        'sources-info' => 'Добавляйте, изменяйте и удаляйте источники в CRM',
        'types' => 'Типы',
        'types-info' => 'Добавляйте, изменяйте и удаляйте типы в CRM',
        'automation' => 'Автоматизация',
        'automation-info' => 'Настройки автоматизации в CRM',
        'attributes' => 'Атрибуты',
        'attribute' => 'Атрибут',
        'attributes-info' => 'Добавляйте, изменяйте и удаляйте атрибуты в CRM',
        'email-templates' => 'Шаблоны писем',
        'email' => 'Почта',
        'email-templates-info' => 'Добавляйте, изменяйте и удаляйте шаблоны писем',
        'events' => 'События',
        'events-info' => 'Добавляйте, изменяйте и удаляйте события',
        'campaigns' => 'Кампании',
        'campaigns-info' => 'Добавляйте, изменяйте и удаляйте кампании',
        'workflows' => 'Бизнес‑процессы',
        'workflows-info' => 'Добавляйте, изменяйте и удаляйте процессы',
        'webhooks' => 'Вебхуки',
        'webhooks-info' => 'Добавляйте, изменяйте и удаляйте вебхуки',
        'other-settings' => 'Прочие настройки',
        'other-settings-info' => 'Управляйте дополнительными настройками',
        'tags' => 'Теги',
        'tags-info' => 'Добавляйте, изменяйте и удаляйте теги',
        'my-account' => 'Мой аккаунт',
        'sign-out' => 'Выход',
        'back' => 'Назад',
        'name' => 'Имя',
        'configuration' => 'Конфигурация',
        'howdy' => 'Привет!',
        'warehouses' => 'Склады',
        'warehouse' => 'Склад',
        'warehouses-info' => 'Добавляйте, изменяйте и удаляйте склады',
        'data_transfer' => 'Передача данных',
        'data_transfer_info' => 'Импорт/экспорт контактов, товаров и сделок',
    ],

    'user' => [
        'account' => [
            'name' => 'Имя',
            'email' => 'E-mail',
            'password' => 'Пароль',
            'my_account' => 'Мой аккаунт',
            'update_details' => 'Обновить данные',
            'current_password' => 'Текущий пароль',
            'confirm_password' => 'Подтвердите пароль',
            'password-match' => 'Текущий пароль не совпадает.',
            'account-save' => 'Изменения аккаунта сохранены.',
            'permission-denied' => 'Доступ запрещён',
            'remove-image' => 'Удалить изображение',
            'upload_image_pix' => 'Загрузите аватар (100x100)',
            'upload_image_format' => 'в формате PNG или JPG',
            'image_upload_message' => 'Разрешены только изображения (.jpeg, .jpg, .png, ...).',
        ],
    ],

    'emails' => [
        'common' => [
            'dear' => 'Уважаемый(ая) :name',
            'cheers' => 'С уважением,</br>Команда :app_name',

            'user' => [
                'dear' => 'Уважаемый(ая) :username',
                'create-subject' => 'Вы добавлены как участник.',
                'create-body' => 'Поздравляем! Вы стали участником нашей команды.',

                'forget-password' => [
                    'subject' => 'Сброс пароля',
                    'dear' => 'Уважаемый(ая) :username',
                    'reset-password' => 'Сбросить пароль',
                    'info' => 'Вы получили это письмо, потому что был запрос на сброс пароля.',
                    'final-summary' => 'Если вы не запрашивали сброс пароля, игнорируйте это письмо.',
                    'thanks' => 'Спасибо!',
                ],
            ],
        ],
    ],

    'validations' => [
        'message' => [
            'decimal' => ':attribute должен быть десятичным числом.',
        ],
    ],

    'errors' => [
        'dashboard' => 'Дашборд',
        'go-back' => 'Вернуться назад',
        'support' => 'Если проблема повторяется, напишите нам на <a href=":link" class=":class">:email</a>.',

        '404' => [
            'description' => 'Упс! Похоже, страницы, которую вы ищете, не существует.',
            'title' => '404 — Страница не найдена',
        ],

        '401' => [
            'description' => 'Упс! Похоже, у вас нет доступа к этой странице.',
            'title' => '401 — Неавторизован',
        ],

        '403' => [
            'description' => 'Упс! Доступ к этой странице запрещён.',
            'title' => '403 — Запрещено',
        ],

        '500' => [
            'description' => 'Упс! Что-то пошло не так при загрузке страницы.',
            'title' => '500 — Внутренняя ошибка сервера',
        ],

        '503' => [
            'description' => 'Упс! Ведутся технические работы. Попробуйте позже.',
            'title' => '503 — Сервис недоступен',
        ],
    ],

    'export' => [
        'csv' => 'CSV',
        'download' => 'Скачать',
        'export' => 'Экспорт',
        'no-records' => 'Нет данных для экспорта',
        'xls' => 'XLS',
        'xlsx' => 'XLSX',
    ],
];
