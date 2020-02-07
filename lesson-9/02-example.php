<?php
declare(strict_types = 1);

header('Content-Type: text/plain');

require_once __DIR__ . '\functions.php';

$input = [10, 20, 30, 40];
var_export($input);

/*
 * Посклюку функция принимает массив по ссылке — значения массива будут изменены
 * в оригинальном массиве.
 */
array_multiply_ref($input, 10);
var_export($input);
