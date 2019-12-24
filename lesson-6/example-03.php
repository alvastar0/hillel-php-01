<?php

/*
 * Данный пример демонстрирует работу оператора «continue»
 * и выполняет те же операции, что в и предыдущем примере,
 * но другим методом :)
 *
 * @see https://www.php.net/manual/ru/control-structures.continue.php#control-structures.continue
 */

$array = [
    'name'      => 'John Doe',
    'email'     => 'php@email.net',
    'telephone' => '88001234567',
    'age'       => 27,
];

$hiddenProperties = [
    'email',
    'telephone',
];

foreach ($array as $index => $value) {
    if (in_array($index, $hiddenProperties, true)) {
        continue;
    }

    echo "{$index}: {$value}<br />";
}
