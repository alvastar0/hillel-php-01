<?php

require_once __DIR__ . '\functions.php';

$input = [10, 20, 30, 40];
$output = array_multiply($input, 10);

echo '<pre>';
var_export($input);
var_export($output);
