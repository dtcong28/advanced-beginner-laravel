<?php

return [
    // routes config
    'routes' => [
        'api' => [
            'prefix' => env('API_PREFIX', 'api'),
            'middleware' => 'api',
            'namespace' => '\Api',
            'as' => 'api.',
        ],
        'admin' => [
            'prefix' => env('ADMIN_PREFIX', 'management'),
            'middleware' => 'admin',
            'namespace' => '\Admin',
            'as' => 'admin.',
        ],
        'web' => [
            'prefix' => env('WEB_PREFIX', '/'),
            'middleware' => 'web',
            'namespace' => '\Web',
            'as' => 'web.',
        ],
    ],

    // model field
    'model_field' => [
        'created' => ['at' => 'ins_date', 'by' => 'ins_id', 'default_by' => 1],
        'updated' => ['at' => 'upd_date', 'by' => 'upd_id', 'default_by' => 1],
        'deleted' => ['flag' => 'del_flag', 'at' => '', 'by' => ''],
    ],

    // deleted flag
    'deleted_flag' => [
        'off' => 0,
        'on' => 1,
    ],

    'disable_two_factor' => env('DISABLE_TWO_FACTOR', false),

    'administrators' => [
        'maximum_error_count' => 4,
        'auth_code_mail' => [
            'subject' => 'Mã xác thực màn hình admin',
        ],
    ],
];
