<?php

return [
    'importers' => [
        'persons' => [
            'title' => 'Контакты',

            'validation' => [
                'errors' => [
                    'duplicate-email' => "E-mail: '%s' встречается в файле более одного раза.",
                    'duplicate-phone' => "Телефон: '%s' встречается в файле более одного раза.",
                    'email-not-found' => "E-mail: '%s' не найден в системе.",
                ],
            ],
        ],

        'products' => [
            'title' => 'Товары',

            'validation' => [
                'errors' => [
                    'sku-not-found' => 'Товар с указанным SKU не найден.',
                ],
            ],
        ],

        'leads' => [
            'title' => 'Сделки',

            'validation' => [
                'errors' => [
                    'id-not-found' => "ID: '%s' не найден в системе.",
                ],
            ],
        ],
    ],

    'validation' => [
        'errors' => [
            'column-empty-headers' => 'Столбцы под номерами "%s" имеют пустые заголовки.',
            'column-name-invalid' => 'Недопустимые имена столбцов: "%s".',
            'column-not-found' => 'Обязательные столбцы не найдены: %s.',
            'column-numbers' => 'Количество столбцов не соответствует числу строк в заголовке.',
            'invalid-attribute' => 'Заголовок содержит недопустимые атрибуты: "%s".',
            'system' => 'Произошла непредвиденная системная ошибка.',
            'wrong-quotes' => 'Использованы фигурные кавычки вместо прямых.',
            'already-exists' => ':attribute уже существует.',
        ],
    ],
];
