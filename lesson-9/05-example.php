<?php
declare(strict_types = 1);

header('Content-type: text/plain');

/**
 * @param  array     $array
 * @param  callable  $callback
 *
 * @return array
 */
function map(array $array, callable $callback): array
{
    $output = [];

    foreach ($array as $index => $value) {
        $output[$index] = $callback($value);
    }

    return $output;
}

$input = [1, 2, 3, 4];

// Пример использования анонимной функции в качестве callable параметра
$output = map(
    $input,
    function (int $n) { // Еще более правильно в этом случае вот так: static function (int $n)
        return $n * $n;
    }
);

var_export($input);
var_export($output);
