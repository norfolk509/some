<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    |
    */

    'default' => env('DB_CONNECTION', 'mysql'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */

    'connections' => [
//        content
        'mscontent' => [
            'driver'    => env('DB_MS_CONTENT_CONNECTION'),
            'host'      => env('DB_MS_CONTENT_HOST'),
            'port'      => env('DB_MS_CONTENT_PORT'),
            'database'  => env('DB_MS_CONTENT_DATABASE'),
            'username'  => env('DB_MS_CONTENT_USERNAME'),
            'password'  => env('DB_MS_CONTENT_PASSWORD'),
        ],
        'slcontent' => [
            'driver'    => env('DB_SL_CONTENT_CONNECTION'),
            'host'      => env('DB_SL_CONTENT_HOST'),
            'port'      => env('DB_SL_CONTENT_PORT'),
            'database'  => env('DB_SL_CONTENT_DATABASE'),
            'username'  => env('DB_SL_CONTENT_USERNAME'),
            'password'  => env('DB_SL_CONTENT_PASSWORD'),
        ],
//        history
        'mshistory' => [
            'driver'    => env('DB_MS_HISTORY_CONNECTION'),
            'host'      => env('DB_MS_HISTORY_HOST'),
            'port'      => env('DB_MS_HISTORY_PORT'),
            'database'  => env('DB_MS_HISTORY_DATABASE'),
            'username'  => env('DB_MS_HISTORY_USERNAME'),
            'password'  => env('DB_MS_HISTORY_PASSWORD'),
        ],
        'slhistory' => [
            'driver'    => env('DB_SL_HISTORY_CONNECTION'),
            'host'      => env('DB_SL_HISTORY_HOST'),
            'port'      => env('DB_SL_HISTORY_PORT'),
            'database'  => env('DB_SL_HISTORY_DATABASE'),
            'username'  => env('DB_SL_HISTORY_USERNAME'),
            'password'  => env('DB_SL_HISTORY_PASSWORD'),
        ],
//        payment
        'mspayment' => [
            'driver'    => env('DB_MS_PAYMENT_CONNECTION'),
            'host'      => env('DB_MS_PAYMENT_HOST'),
            'port'      => env('DB_MS_PAYMENT_PORT'),
            'database'  => env('DB_MS_PAYMENT_DATABASE'),
            'username'  => env('DB_MS_PAYMENT_USERNAME'),
            'password'  => env('DB_MS_PAYMENT_PASSWORD'),
        ],
        'slpayment' => [
            'driver'    => env('DB_SL_PAYMENT_CONNECTION'),
            'host'      => env('DB_SL_PAYMENT_HOST'),
            'port'      => env('DB_SL_PAYMENT_PORT'),
            'database'  => env('DB_SL_PAYMENT_DATABASE'),
            'username'  => env('DB_SL_PAYMENT_USERNAME'),
            'password'  => env('DB_SL_PAYMENT_PASSWORD'),
        ],
//        user
        'msuser' => [
            'driver'    => env('DB_MS_USER_CONNECTION'),
            'host'      => env('DB_MS_USER_HOST'),
            'port'      => env('DB_MS_USER_PORT'),
            'database'  => env('DB_MS_USER_DATABASE'),
            'username'  => env('DB_MS_USER_USERNAME'),
            'password'  => env('DB_MS_USER_PASSWORD'),
        ],
        'sluser' => [
            'driver'    => env('DB_SL_USER_CONNECTION'),
            'host'      => env('DB_SL_USER_HOST'),
            'port'      => env('DB_SL_USER_PORT'),
            'database'  => env('DB_SL_USER_DATABASE'),
            'username'  => env('DB_SL_USER_USERNAME'),
            'password'  => env('DB_SL_USER_PASSWORD'),
        ],
//        inspection
        'msinspection' => [
            'driver'    => env('DB_MSINSPECTIONCONNECTION'),
            'host'      => env('DB_MS_INSPECTION_HOST'),
            'port'      => env('DB_MS_INSPECTION_PORT'),
            'database'  => env('DB_MS_INSPECTION_DATABASE'),
            'username'  => env('DB_MS_INSPECTION_USERNAME'),
            'password'  => env('DB_MS_INSPECTION_PASSWORD'),
        ],
        'slinspection' => [
            'driver'    => env('DB_SL_INSPECTION_CONNECTION'),
            'host'      => env('DB_SL_INSPECTION_HOST'),
            'port'      => env('DB_SL_INSPECTION_PORT'),
            'database'  => env('DB_SL_INSPECTION_DATABASE'),
            'username'  => env('DB_SL_INSPECTION_USERNAME'),
            'password'  => env('DB_SL_INSPECTION_PASSWORD'),
        ],
//        developer
        'msdeveloper' => [
            'driver'    => env('DB_MS_DEVELOPER_CONNECTION'),
            'host'      => env('DB_MS_DEVELOPER_HOST'),
            'port'      => env('DB_MS_DEVELOPER_PORT'),
            'database'  => env('DB_MS_DEVELOPER_DATABASE'),
            'username'  => env('DB_MS_DEVELOPER_USERNAME'),
            'password'  => env('DB_MS_DEVELOPER_PASSWORD'),
        ],
        'sldeveloper' => [
            'driver'    => env('DB_SL_DEVELOPER_CONNECTION'),
            'host'      => env('DB_SL_DEVELOPER_HOST'),
            'port'      => env('DB_SL_DEVELOPER_PORT'),
            'database'  => env('DB_SL_DEVELOPER_DATABASE'),
            'username'  => env('DB_SL_DEVELOPER_USERNAME'),
            'password'  => env('DB_SL_DEVELOPER_PASSWORD'),
        ],
//        admin
        'msadmin' => [
            'driver'    => env('DB_MS_ADMIN_CONNECTION'),
            'host'      => env('DB_MS_ADMIN_HOST'),
            'port'      => env('DB_MS_ADMIN_PORT'),
            'database'  => env('DB_MS_ADMIN_DATABASE'),
            'username'  => env('DB_MS_ADMIN_USERNAME'),
            'password'  => env('DB_MS_ADMIN_PASSWORD'),
        ],
        'sladmin' => [
            'driver'    => env('DB_SL_ADMIN_CONNECTION'),
            'host'      => env('DB_SL_ADMIN_HOST'),
            'port'      => env('DB_SL_ADMIN_PORT'),
            'database'  => env('DB_SL_ADMIN_DATABASE'),
            'username'  => env('DB_SL_ADMIN_USERNAME'),
            'password'  => env('DB_SL_ADMIN_PASSWORD'),
        ],
//        marketing
        'msmarketing' => [
            'driver'    => env('DB_MS_MARKETING_CONNECTION'),
            'host'      => env('DB_MS_MARKETING_HOST'),
            'port'      => env('DB_MS_MARKETING_PORT'),
            'database'  => env('DB_MS_MARKETING_DATABASE'),
            'username'  => env('DB_MS_MARKETING_USERNAME'),
            'password'  => env('DB_MS_MARKETING_PASSWORD'),
        ],
        'slmarketing' => [
            'driver'    => env('DB_SL_MARKETING_CONNECTION'),
            'host'      => env('DB_SL_MARKETING_HOST'),
            'port'      => env('DB_SL_MARKETING_PORT'),
            'database'  => env('DB_SL_MARKETING_DATABASE'),
            'username'  => env('DB_SL_MARKETING_USERNAME'),
            'password'  => env('DB_SL_MARKETING_PASSWORD'),
        ],
//      MongoDB messages
        'mgdbmessages' => [
            'driver'   => 'mongodb',
            'host'     => env('MONGO_DB_HOST', 'localhost'),
            'port'     => env('MONGO_DB_PORT', 27017),
            'database' => env('MONGO_DB_MESSAGES_DATABASE'),
            'username' => env('MONGO_DB_USERNAME'),
            'password' => env('MONGO_DB_PASSWORD'),
            'options'  => []
        ],
//      MongoDB activity
        'mgdbactivity' => [
            'driver'   => 'mongodb',
            'host'     => env('MONGO_DB_HOST', 'localhost'),
            'port'     => env('MONGO_DB_PORT', 27017),
            'database' => env('MONGO_DB_ACTIVITY_DATABASE'),
            'username' => env('MONGO_DB_USERNAME'),
            'password' => env('MONGO_DB_PASSWORD'),
            'options'  => []
        ],
//      MongoDB cto messages
        'mgdbctomessages' => [
            'driver'   => 'mongodb',
            'host'     => env('MONGO_DB_HOST', 'localhost'),
            'port'     => env('MONGO_DB_PORT', 27017),
            'database' => env('MONGO_DB_CTO_MESSAGES_DATABASE'),
            'username' => env('MONGO_DB_USERNAME'),
            'password' => env('MONGO_DB_PASSWORD'),
            'options'  => []
        ],
//      MongoDB unread
        'mgdbunread' => [
            'driver'   => 'mongodb',
            'host'     => env('MONGO_DB_HOST', 'localhost'),
            'port'     => env('MONGO_DB_PORT', 27017),
            'database' => env('MONGO_DB_UNREAD_DATABASE'),
            'username' => env('MONGO_DB_USERNAME'),
            'password' => env('MONGO_DB_PASSWORD'),
            'options'  => []
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run in the database.
    |
    */

    'migrations' => 'migrations',

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer set of commands than a typical key-value systems
    | such as APC or Memcached. Laravel makes it easy to dig right in.
    |
    */

    'redis' => [

        'client' => 'predis',

        'default' => [
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', 6379),
            'database' => env('REDIS_DB', 0),
        ],

        'cache' => [
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', 6379),
            'database' => env('REDIS_CACHE_DB', 1),
        ],

    ],

];
