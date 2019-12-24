<?php

/*
 * Данный пример демонстрирует работы цикла с предусловием «while».
 *
 * Попробуйте изменить значение $number значение больше 100
 * и посмотрите на результат.
 *
 * @see https://www.php.net/manual/ru/control-structures.while.php#control-structures.while
 */

$summary = 0;
$number  = 1;

while ($number <= 100) {
    $summary += $number++;
}

echo $summary;
