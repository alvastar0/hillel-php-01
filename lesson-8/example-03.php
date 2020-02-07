<?php
declare(strict_types = 1);

$repeat = $_GET['repeat'] ?? '';

/**
 * Данная функция демонстрирует механизм передачи данных в тело функции.
 *
 * В данном примере мы передаем один аогумент (параметр), предполагая
 * что он будет строковый.
 *
 * Передавать мы можем как литералы так и значения других переменных / констант.
 *
 * @param string $str
 */
function repeat_str($str)
{
    for ($i = 0; $i < 10; ++$i) {
        echo $str;
    }
}

repeat_str('String'); // StringStringStringStringStringStringStringStringStringString
repeat_str($repeat);
