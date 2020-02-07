<?php
declare(strict_types = 1);

header('Content-Type: text/plain');

/**
 * Функция, которая будет передана в параметры другой функции.
 *
 * @param  int  $n
 *
 * @return int
 */
function square(int $n): int
{
    return $n * $n;
}

/**
 * Функция, которая принимает вторым аргументов другую функцию.
 *
 * Иногда полезно сделать функции расширяемые. В таких ситуациях используют
 * функции обратного вызова — функции, которые могут быть переданы другим функциям.
 *
 * Есть два распространненных типа функций обратного вызова:
 *  1. Функторы — выполняют различные действия, расширяющие поведения функции
 *  2. Предикаты — частный случай функцтора, которые возвращает булево значение
 *      и изменяет поведение существующего алгоритма.
 *
 * @param  array     $array
 * @param  callable  $callback
 *
 * @return array
 */
function map(array $array, callable $callback): array
{
    $output = [];

    foreach ($array as $index => $value) {
        $output[$index] = $callback($value);
    }

    return $output;
}

$input = [1, 2, 3, 4];
var_export($input);

// Передача в функци map функции square.
// Обратите внимание, что функция square передается в виде строки.
$output = map($input, 'square');
var_export($output);
