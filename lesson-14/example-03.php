<?php
header('Content-Type: text/plain');

$database = new mysqli('127.0.0.1', 'root', '', 'application');

if ($database->connect_errno) {
    die($database->connect_error);
}

// Получаем всех пользователей
$query = '
SELECT users.*, phones.* FROM users
INNER JOIN phones
    ON users.id = phones.user_id
WHERE users.id = 5';
$result = $database->query($query);

if ($database->errno) {
    die($database->error);
}

$data = $result->fetch_all(MYSQLI_ASSOC);

var_export($data);

$database->close();
