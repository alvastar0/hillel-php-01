<?php

/*
 * Данный пример демонстрирует работу операторов сравнения с дополнительной
 * проверкой типов данных (или операторов тождественного сравнения).
 *
 * @see https://www.php.net/manual/ru/language.operators.comparison.php#language.operators.comparison
 */

$ni = 10;
$ns = '10';

echo $ni == $ns;  // TRUE, поскольку выполняется приведение типов
echo $ni === $ns; // FALSE, поскольку помимо значений сравниваются типы данных
