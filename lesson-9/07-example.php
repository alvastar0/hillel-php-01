<?php

function map(array $array, callable $callback): array
{
    $output = [];

    foreach ($array as $index => $value) {
        $output[$index] = $callback($value);
    }

    return $output;
}

$input = [1, 2, 3, 4];

$output = map($input, function (int $n) {
    return $n * $n;
});

echo '<pre>';
var_export($input);
var_export($output);
