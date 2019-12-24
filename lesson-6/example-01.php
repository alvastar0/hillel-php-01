<?php

/*
 * Данный пример демонстрирует работу цикла по коллекции «foreach»
 * для индексированного массива.
 *
 * @see https://www.php.net/manual/ru/control-structures.foreach.php#control-structures.foreach
 */

$array = [
    11,
    22,
    33,
    44,
];

$summary = 0;

foreach ($array as $value) {
    $summary += $value;
}

echo 'Summary = ', $summary;
