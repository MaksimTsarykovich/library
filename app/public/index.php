<?php

require_once '../Models/Database.php';

$db = Database::getInstance()
    ->setHost('mysql')
    ->setUser('user')
    ->setPass('password')
    ->setDatabaseName('app');
