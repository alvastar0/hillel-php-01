<?php

header('Content-Type: text/plain');

if (!isset($_COOKIE['key'])) {
    setcookie('key', random_int(0, 999), time() + 10);
}

echo $_COOKIE['key'];
