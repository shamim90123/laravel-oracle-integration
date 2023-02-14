# install yajra first
composer require yajra/laravel-oci8

# after yajra install then added providers in config/app.php
Yajra\Oci8\Oci8ServiceProvider::class,

# oracle connection added config/database and env file

# in env
    DB_CONNECTION=oracle
    DB_HOST=127.0.0.1
    DB_PORT=1521
    DB_DATABASE=dev_moc_rjsc_service
    DB_USERNAME=dev_moc_rjsc_service
    DB_PASSWORD='xyz'

# in config/database

    'oracle' => [
        'driver'    => 'oracle',
        'tns'       => env('DB_TNS', '(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = localhost)(PORT = 1521))(CONNECT_DATA = (SERVER = DEDICATED) (SERVICE_NAME = orcl)))'),
        'host'      => env('DB_HOST', 'localhost'),
        'port'      => env('DB_PORT', '1521'),
        'database'  => env('DB_DATABASE', 'dev_moc_rjsc_service'),
        'username'  => env('DB_USERNAME', 'dev_moc_rjsc_service'),
        'password'  => env('DB_PASSWORD', 'SynTech#1627'),
        'charset'   => env('DB_CHARSET', 'AL32UTF8'),
        'prefix'    => env('DB_PREFIX', ''),
        'prefix_schema' => env('DB_SCHEMA_PREFIX', ''),
        'edition'   => env('DB_EDITION', 'ora$base'),
    ],
