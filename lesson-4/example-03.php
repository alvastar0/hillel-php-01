<?php

/*
 * Данный пример демонстрирует работу операторов сравнения, за исключением
 * сравнения с дополнительной проверкой типа и оператора «космический корабль».
 *
 * @see https://www.php.net/manual/ru/language.operators.comparison.php#language.operators.comparison
 */

/**
 * @var int $a
 * @var int $b
 */
$a = 10;
$b = 50;

echo $a == $b, '<br>';  // FALSE
echo $a != $b, '<br>';  // TRUE
echo $a > $b, '<br>';   // FALSE
echo $a >= $b, '<br>';  // FALSE
echo $a < $b, '<br>';   // TRUE
echo $a <= $b, '<br>';  // TRUE
echo $a <= $a, '<br>';  // TRUE
echo $b >= $b, '<br>';  // TRUE

/*
 * Обратите внимание, что вместо слов «TRUE» или «FALSE», команда «echo»
 * выведет Вам «1» в случае «TRUE», и пусту строку в случае «FALSE».
 */
