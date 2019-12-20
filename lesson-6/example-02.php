<?php

/*
 * Данный пример демонстрирует работу цикла по коллекции «foreach»
 * для ассоциативного массива.
 *
 * @see https://www.php.net/manual/ru/control-structures.foreach.php#control-structures.foreach
 */

$array = [
    'name' => 'John Doe',
    'email' => 'php@email.net',
    'telephone' => '88001234567',
    'age' => 27
];

$hiddenProperties = [
    'email', 'telephone'
];

foreach ($array as $index => $value) {
    // Проверяем, присутствует ли $index в массиве $hiddenProperties,
    // и если НЕТ (FALSE) — то выводим информацию об элементе.
    if (!in_array($index, $hiddenProperties, true)) {
        echo "{$index}: {$value}<br />";
    }
}
