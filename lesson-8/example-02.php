<?php

$variable = 100;

function printVariable()
{
    $variable = 500;

    echo $variable;
}

printVariable();

echo $variable;
