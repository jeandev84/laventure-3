<?php

return [

    /*
    |---------------------------------------------------------------------
    |                     Available connections :
    |              [ mysql, sqlite, pgsql, oracle (oci) ]
    |---------------------------------------------------------------------
    */
    'connection' => env('DB_TYPE'),
    'sqlite' => [
        'driver'     => 'sqlite',
        'database'   => base_path('laventure.db'),
    ],
    'mysql' => [
        'driver'     => 'mysql',
        'database'   => env('DB_NAME', 'laventure'),
        'host'       => env('DB_HOST', '127.0.0.1'),
        'port'       => env('DB_PORT', '3306'),
        'username'   => env('DB_USER', 'root'),
        'password'   => env('DB_PASS', 'secret'),
        'collation'  => 'utf8_unicode_ci',
        'charset'    => 'utf8',
        'prefix'     => '', // 5ksfsgeteyru_
        'engine'     => 'InnoDB', // MyISAM
        'options'    => [],
    ],
    'pgsql' => [
        'driver'     => 'pgsql',
        'database'   => env('DB_NAME', 'laventure'),
        'host'       => env('DB_HOST', '127.0.0.1'),
        'port'       => env('DB_PORT', '5432'),
        'username'   => env('DB_USER', 'postgres'),
        'password'   => env('DB_PASS', '123456'),
        'collation'  => 'utf8_unicode_ci',
        'charset'    => 'utf8',
        'prefix'     => '5ksfsgeteyru_',
        'engine'     => 'InnoDB', // MyISAM
        'options'    => [],
    ],
    'orm' => 'mapper', // mapper|model
];