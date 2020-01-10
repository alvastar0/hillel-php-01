<?php

function repeatStr($str, $count = 1)
{
    $count = (int)$count;

    for ($i = 0; $i < $count; ++$i) {
        echo $str;
    }
}

repeatStr('Single');
repeatStr('Double', 2);
