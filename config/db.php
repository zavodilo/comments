<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=comments-mysql-docker;dbname=comments',
    'username' => 'comments',
    'password' => 'comments',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
