<?php
declare(strict_types = 1);

// Чтобы использовать сессии — обязательно нужно использовать функции session_start()
session_start();

// Записываем значение в сессию
$_SESSION['key'] = 'value';
