<?php
declare(strict_types = 1);

/**
 * Демонстрация реализации алгоритма подсчета суммы заданного ряда чисел
 * с помощью функции и переменного количества аргументов.
 *
 * @param         $summary
 * @param  mixed  ...$numbers
 *
 * @return mixed
 */
function summary($summary, ...$numbers)
{
    foreach ($numbers as $number) {
        $summary += $number;
    }

    return $summary;
}

$variable = summary(0, 10, 20, 30, 40);
