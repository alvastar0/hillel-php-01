<?php

// Взодящая строка
$query = 'a=10&b=20.5&c=hello';

// Разбиваем строку на массив элементов
$pairs = explode('&', $query);

// Выходные данные
$output = [];

foreach ($pairs as $pair) {
    // Разбиваем пару на массив и инициализируем две переменные
    // https://www.php.net/manual/ru/function.list
    list($key, $value) = explode('=', $pair);

    // Преобразование типов
    if (is_numeric($value)) {
        // Если в значении есть точка, то мы имеем дело
        // с вещественными числами.
        if (strpos($value, '.') === false) {
            $output[$key] = (int) $value;
        } else {
            $output[$key] = (float) $value;
        }
    } else {
        $output[$key] = $value;
    }
}

var_dump($output);
