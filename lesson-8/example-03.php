<?php

$repeat = $_GET['repeat'] ?? '';

function repeatStr($str)
{
    for ($i = 0; $i < 10; ++$i) {
        echo $str;
    }
}

repeatStr('String');
repeatStr($repeat);
