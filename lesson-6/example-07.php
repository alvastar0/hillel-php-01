<?php

/*
 * Данный пример демонстрирует работы цикла с постусловием «do..while».
 *
 * Попробуйте изменить значение $number значение больше 100
 * и посмотрите на результат. Сравните полученный результат
 * с аналогичным результатом из предыдущего примера.
 *
 * @see https://www.php.net/manual/ru/control-structures.do.while.php#control-structures.do.while
 */

$summary = 0;
$number = 1;

do {
    $summary += $number++;
} while($number <= 100);

echo $summary;
