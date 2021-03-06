<?php
declare(strict_types = 1);

/**
 * Аргументы по умолчанию - необязательные аргументы, которые имеют заранее определенное
 * значение. Если значения для этизх аргументов не будут переданы — функция будет использовать
 * заранее определенные.
 *
 * Например, если данной функции не передать второй аргумент, ошибка не будет сгенерирована,
 * а будет использовано значение 2.
 *
 * Помните, что аргументы по умолчанию должны следовать за обязательными аргументами,
 * так как в противной случаи они нарушат последовательность передачи.
 *
 * @param       $str
 * @param  int  $count
 */
function repeat_str($str, $count = 2)
{
    $count = (int) $count;

    for ($i = 0; $i < $count; ++$i) {
        echo $str;
    }
}

repeat_str('Default');      // DefaultDefault
repeat_str('Defined', 2);   // DefinedDefined
repeat_str('Long', 5);      // LongLongLongLongLong
