<?php

header('Content-Type: text/plain');

// Подключение к базе данных
$database = new mysqli('127.0.0.1', 'root', '', 'application');

if ($database->connect_errno) {
    die($database->connect_error);
}

// Получение $_GET параметров
$userId = $_GET['user_id'] ?? null;

if ($userId === null) {
    die('Enter user ID');
}

// Загрузка пользователя
$query = 'SELECT * FROM users WHERE id = '
    . $database->real_escape_string($userId);
$result = $database->query($query);

if ($database->errno) {
    die($database->error);
}

$user = $result->fetch_all(MYSQLI_ASSOC)[0];

// Загрузка телефона
$query = 'SELECT * FROM phones WHERE user_id = '
    . $database->real_escape_string($user['id']);
$result = $database->query($query);

if ($database->errno) {
    die($database->error);
}

$phone = $result->fetch_all(MYSQLI_ASSOC)[0];

var_export($user);
var_export($phone);

// Закрытие подключения с базой данных
$database->close();