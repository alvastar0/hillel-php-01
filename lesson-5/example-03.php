<?php

/*
 * Данный пример демонстрирует доступ к элементам массива
 * с помощью оператора квадратных скобок «[]», а также разницу
 * между функциями «isset» и «array_key_exists».
 */

/** @var array $assocArray */
$assocArray = [
    'name'      => 'John Doe',
    'age'       => 18,
    'telephone' => '+38 (000) 11-22-333',
    'email'     => null,
];

// «isset» проверяет не только наличие ключа, но и значение этого ключа.
//
// Возвращает FALSE в следующих случаях:
//  1. Ключ не существует
//  2. Ключ существует, но установлен как NULL
//
// https://www.php.net/manual/ru/function.isset.php
if (isset($assocArray['email'])) {
    echo 'Isset!';
} else {
    echo 'Not isset :(';
}

// «array_key_exists» проверяет наличие ключа независимо от его значения.
//
// https://www.php.net/manual/ru/function.array-key-exists
if (array_key_exists('email', $assocArray)) {
    echo 'Isset!';
} else {
    echo 'Not isset :(';
}
