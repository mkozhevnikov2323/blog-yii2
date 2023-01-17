<?php
// This file must have been created, it contains in .gitignore
require __DIR__ . '/config.php';

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=' . HOSTNAME . ';dbname=' . DB_NAME,
    'username' => DB_USERNAME,
    'password' => DB_PASSWORD,
    'charset' => 'utf8',
    'tablePrefix' => 'tbl_',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
