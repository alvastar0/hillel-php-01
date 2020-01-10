<?php

function summary($summary, ...$numbers)
{
    foreach ($numbers as $number) {
        $summary += $number;
    }

    return $summary;
}

$variable = summary(0, 10, 20, 30, 40);
