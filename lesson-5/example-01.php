<?php

/*
 * Данный пример демонстрирует процесс создания пустого массива
 * и проверки на наличие / отсутствие элементов.
 *
 * @see https://www.php.net/manual/ru/language.types.array.php#language.types.array.syntax
 */

// Процесс создания пустого массива.
$array = []; // $array = array();

// Пустой массив преобразуется к FALSE
if ($array) {
    echo 'Filled!';
} else {
    echo 'Empty';
}

// Явный способ проверить массив на отсутствие элементов
// https://www.php.net/manual/ru/function.empty.php
if (empty($array)) {
    echo 'Empty';
} else {
    echo 'Filled!';
}
