<?php

//Настройки базы
const DB_HOST = 'localhost';
const DB_NAME = 'db_test';
const DB_USER = 'root';
const DB_PASSWORD = 'root';

//автозагрузка классов
spl_autoload_register(function ($class) {
    $file = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    require $file;
});