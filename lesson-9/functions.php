<?php
declare(strict_types=1);

/**
 * @param array $array
 * @param int $multiplier
 *
 * @return array
 */
function array_multiply(array $array, int $multiplier): array
{
    $output = [];

    foreach ($array as $index => $item) {
        $output[$index] = +$item * $multiplier;
    }

    return $output;
}

/**
 * @param array $array
 * @param int $multiplier
 */
function array_multiply_ref(array &$array, int $multiplier): void
{
    foreach ($array as $index => $item) {
        $array[$index] = +$item * $multiplier;
    }
}

function fac(int $n): int
{
    if ($n > 1) {
        return $n * fac($n - 1);
    }

    return 1;
}

function fibo(int $n): int
{
    if ($n === 1 || $n === 2) {
        return 1;
    }

    return fibo($n - 2) + fibo($n - 1);
}
