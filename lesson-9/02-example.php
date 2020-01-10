<pre>
<?php

require_once __DIR__ . '\functions.php';

$input = [10, 20, 30, 40];
var_export($input);

array_multiply_ref($input, 10);
var_export($input);
