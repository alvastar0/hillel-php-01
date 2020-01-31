<?php
header('Content-Type: text/plain');

$database = new mysqli('127.0.0.1', 'root', '', 'application');

if ($database->connect_errno) {
    die($database->connect_error);
}

// Получаем всех пользователей
$query = 'SELECT * FROM users';
$result = $database->query($query);

if ($database->errno) {
    die($database->error);
}

$users = $result->fetch_all(MYSQLI_ASSOC);

// Получаем телейоні пользователей
foreach ($users as $user) {
    $query = 'SELECT * FROM phones WHERE user_id = '
        . $database->real_escape_string($user['id']);
    $result = $database->query($query);

    if ($database->errno) {
        die($database->error);
    }

    $phones = $result->fetch_all(MYSQLI_ASSOC);
}

$database->close();
