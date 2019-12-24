<?php

/*
 * Занный пример демонстрирует наполнение индексируемых
 * и ассоциативных массивов.
 */

$array = [];

// С помощью оператора [] (рекомендуется).

//$array[] = 10;
//$array[] = 20;
//$array[] = 30;
//$array[] = 40;

// С помощью функции «array_push» (не рекомендуется, почти в 2 раза медленнее)
// https://www.php.net/manual/ru/function.array-push.php

array_push($array, 5, 6, 7, 8);

// Наиболее быстрый способ вставить элементы массива вначало —
// использовать фукнцию «array_unshift»
// https://www.php.net/manual/ru/function.array-unshift

array_unshift($array, 1, 2, 3, 4);

var_dump($array);

// Заполнение ассоциативного массива

$assoc = [];

$assoc['a'] = 10;
$assoc['b'] = 20;

var_dump($assoc);
