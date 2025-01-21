<?php

require_once '../Config/DatabaseConfig.php';
require_once '../Models/Database.php';

$config = new DatabaseConfig(
    'library_mysql',
    'app',
    'user',
    'password',
    'utf8'
);

try {
    $db = Database::getInstance($config)->connectToDatabase();
} catch (Exception $e) {
    throw new Exception('Database error: '.$e->getMessage());
}
