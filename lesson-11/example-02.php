<?php
declare(strict_types = 1);

header('Content-Type: text/plain');

if (!isset($_COOKIE['key'])) {
    // Устанавливаем cookie с временем жизни = 10 секунд
    setcookie('key', random_int(0, 999), time() + 10);
}

echo $_COOKIE['key'];
