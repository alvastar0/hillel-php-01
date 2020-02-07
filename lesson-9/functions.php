<?php
declare(strict_types = 1);

/**
 * Умножение всех элементов одномерного массива на указанны множительно.
 *
 * В данном примере мы предполагаем, что все числа должны быть целочисленными.
 *
 * @param  array  $array       Массив чисел
 * @param  int    $multiplier  Множитель
 *
 * @return array
 */
function array_multiply(array $array, int $multiplier): array
{
    $output = [];

    foreach ($array as $index => $item) {
//        $output[$index] = +$item * $multiplier;
        $output[$index] = (int) $item * $multiplier; // ← более явное преобразование
    }

    return $output;
}

/**
 * Умножение всеъ элементов ИСХОДНОГО массива. Массив передается по ссылке,
 * а значит мы будет работать не с ЛОКАЛЬНОЙ КОПИЕЙ, а с оригинальным массивом.
 *
 * @param  array  $array       Массив чисел
 * @param  int    $multiplier  Множитель
 */
function array_multiply_ref(array &$array, int $multiplier): void
{
    foreach ($array as $index => $item) {
        $array[$index] = +$item * $multiplier;
    }
}

/**
 * Рекурсивная функция — один из вариантов построены алгоритмов, у которых
 * нет конечного количества итераций.
 *
 * Данная функция рекурсивно вычесляет факториал числаю
 *
 * @param  int  $n
 *
 * @return int
 */
function fac(int $n): int
{
    if ($n > 1) {
        return $n * fac($n - 1);
    }

    return 1;
}

/**
 * Рекурсивное вычисление указанного члена последовательности Фибоначчи.
 *
 * @param  int  $n
 *
 * @return int
 */
function fibo(int $n): int
{
    if ($n === 1 || $n === 2) {
        return 1;
    }

    return fibo($n - 2) + fibo($n - 1);
}
