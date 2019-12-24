<?php

/*
 * Формирование таблицы умножения от MIN до MAX.
 */

// Извлекаем параметры из массива $_GET
// или указываем параметры по умолчанию
$min = $_GET['min'] ?? 1;
$max = $_GET['max'] ?? 10;

// Проверяем минимум и максимум... мало ли
if ($min > $max) {
    $t   = $min;
    $min = $max;
    $max = $t;
}

// Переменная для хранения таблицы
$table = [];

// Формируем двумерный массив — таблицу умножения
for ($i = $min; $i <= $max; ++$i) {
    for ($j = $min; $j <= $max; ++$j) {
        $table[$i][$j] = $i * $j;
    }
}

?>

<table>
    <tbody>
    <?php foreach ($table as $row): ?>
        <tr>
            <?php foreach ($row as $number): ?>
                <td><?php echo $number ?></td>
            <?php endforeach ?>
        </tr>
    <?php endforeach ?>
    </tbody>
</table>
