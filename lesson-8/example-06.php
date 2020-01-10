<?php

function summary($summary, ...$numbers)
{
    foreach ($numbers as $number) {
        $summary += $number;
    }

    echo $summary;
}

$array = [10, 20, 30, 40];

summary(1000, ...$array);
