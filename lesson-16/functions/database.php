<?php

function get_database(): PDO
{
    static $database;

    $dns = 'mysql:host=127.0.0.1;dbname=application;charset=utf8mb4';

    if (empty($database)) {
        $database = new PDO($dns, 'root', '', [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    return $database;
}
