<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Следующие языковые строки содержат сообщения об ошибках по умолчанию,
    | используемые классом валидатора. Некоторые правила имеют несколько
    | версий, например правила размера. Не стесняйтесь изменять каждое из
    | этих сообщений здесь.
    |
    */

    'accepted' => ':attribute должен быть принят.',
    'active_url' => ':attribute не является допустимым URL.',
    'after' => ':attribute должен быть датой после :date.',
    'after_or_equal' => ':attribute должен быть датой после или равной :date.',
    'alpha' => ':attribute может содержать только буквы.',
    'alpha_dash' => ':attribute может содержать только буквы, цифры, тире и подчёркивания.',
    'alpha_num' => ':attribute может содержать только буквы и цифры.',
    'array' => ':attribute должен быть массивом.',
    'before' => ':attribute должен быть датой до :date.',
    'before_or_equal' => ':attribute должен быть датой до или равной :date.',
    'between' => [
        'numeric' => ':attribute должен быть между :min и :max.',
        'file' => ':attribute должен быть от :min до :max килобайт.',
        'string' => ':attribute должен быть от :min до :max символов.',
        'array' => ':attribute должен содержать от :min до :max элементов.',
    ],
    'boolean' => 'Поле :attribute должно быть true или false.',
    'confirmed' => 'Подтверждение :attribute не совпадает.',
    'date' => ':attribute не является корректной датой.',
    'date_equals' => ':attribute должен быть датой, равной :date.',
    'date_format' => ':attribute не соответствует формату :format.',
    'different' => ':attribute и :other должны отличаться.',
    'digits' => ':attribute должен состоять из :digits цифр.',
    'digits_between' => ':attribute должен содержать от :min до :max цифр.',
    'dimensions' => ':attribute имеет недопустимые размеры изображения.',
    'distinct' => 'Поле :attribute содержит повторяющееся значение.',
    'email' => ':attribute должен быть действительным адресом e-mail.',
    'ends_with' => ':attribute должен заканчиваться одним из следующих значений: :values.',
    'exists' => 'Выбранный :attribute недействителен.',
    'file' => ':attribute должен быть файлом.',
    'filled' => 'Поле :attribute должно быть заполнено.',
    'gt' => [
        'numeric' => ':attribute должен быть больше :value.',
        'file' => ':attribute должен быть больше :value килобайт.',
        'string' => ':attribute должен быть длиннее :value символов.',
        'array' => ':attribute должен содержать более :value элементов.',
    ],
    'gte' => [
        'numeric' => ':attribute должен быть больше или равен :value.',
        'file' => ':attribute должен быть больше или равен :value килобайт.',
        'string' => ':attribute должен быть не короче :value символов.',
        'array' => ':attribute должен содержать :value элементов или больше.',
    ],
    'image' => ':attribute должен быть изображением.',
    'in' => 'Выбранный :attribute недействителен.',
    'in_array' => 'Поле :attribute не существует в :other.',
    'integer' => ':attribute должен быть целым числом.',
    'ip' => ':attribute должен быть действительным IP-адресом.',
    'ipv4' => ':attribute должен быть действительным IPv4-адресом.',
    'ipv6' => ':attribute должен быть действительным IPv6-адресом.',
    'json' => ':attribute должен быть корректной JSON-строкой.',
    'lt' => [
        'numeric' => ':attribute должен быть меньше :value.',
        'file' => ':attribute должен быть меньше :value килобайт.',
        'string' => ':attribute должен быть короче :value символов.',
        'array' => ':attribute должен содержать менее :value элементов.',
    ],
    'lte' => [
        'numeric' => ':attribute должен быть меньше или равен :value.',
        'file' => ':attribute должен быть меньше или равен :value килобайт.',
        'string' => ':attribute должен быть не длиннее :value символов.',
        'array' => ':attribute не должен содержать более :value элементов.',
    ],
    'max' => [
        'numeric' => ':attribute не может быть больше :max.',
        'file' => ':attribute не может быть больше :max килобайт.',
        'string' => ':attribute не может быть длиннее :max символов.',
        'array' => ':attribute не может содержать более :max элементов.',
    ],
    'mimes' => ':attribute должен быть файлом одного из типов: :values.',
    'mimetypes' => ':attribute должен быть файлом одного из типов: :values.',
    'min' => [
        'numeric' => ':attribute должен быть не менее :min.',
        'file' => ':attribute должен быть не менее :min килобайт.',
        'string' => ':attribute должен быть не короче :min символов.',
        'array' => ':attribute должен содержать не менее :min элементов.',
    ],
    'multiple_of' => ':attribute должен быть кратен :value.',
    'not_in' => 'Выбранный :attribute недействителен.',
    'not_regex' => 'Неверный формат поля :attribute.',
    'numeric' => ':attribute должен быть числом.',
    'password' => 'Неверный пароль.',
    'present' => 'Поле :attribute должно присутствовать.',
    'regex' => 'Неверный формат поля :attribute.',
    'required' => 'Поле :attribute обязательно для заполнения.',
    'required_if' => 'Поле :attribute обязательно, если :other имеет значение :value.',
    'required_unless' => 'Поле :attribute обязательно, если только :other не находится в :values.',
    'required_with' => 'Поле :attribute обязательно, если присутствует :values.',
    'required_with_all' => 'Поле :attribute обязательно, если присутствуют :values.',
    'required_without' => 'Поле :attribute обязательно, если :values не указано.',
    'required_without_all' => 'Поле :attribute обязательно, если ни одно из :values не указано.',
    'same' => ':attribute и :other должны совпадать.',
    'size' => [
        'numeric' => ':attribute должен быть равен :size.',
        'file' => ':attribute должен быть размером :size килобайт.',
        'string' => ':attribute должен содержать :size символов.',
        'array' => ':attribute должен содержать :size элементов.',
    ],
    'starts_with' => ':attribute должен начинаться с одного из следующих значений: :values.',
    'string' => ':attribute должен быть строкой.',
    'timezone' => ':attribute должен быть действительным часовым поясом.',
    'unique' => ':attribute уже занят.',
    'uploaded' => ':attribute не удалось загрузить.',
    'url' => 'Неверный формат URL в поле :attribute.',
    'uuid' => ':attribute должен быть корректным UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'пользовательское сообщение',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    */

    'attributes' => [],

];
