<?php

function repeatStr($str, $count)
{
    if (is_numeric($count)) {
        $count = (int)$count;

        for ($i = 0; $i < $count; ++$i) {
            echo $str;
        }
    }
}

$repeat = $_GET['repeat'] ?? '';
$count = $_GET['count'] ?? 1;

repeatStr('String', 5);
repeatStr($repeat, $count);
