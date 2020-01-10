<?php

function summary()
{
    $arguments = func_get_args();
    $summary = 0;

    foreach ($arguments as $number) {
        $summary += $number;
    }

    echo $summary;
}

summary(10, 50, 100, 150);
