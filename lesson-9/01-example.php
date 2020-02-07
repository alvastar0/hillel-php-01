<?php
declare(strict_types = 1);

// Для красивого вывода var_export
header('Content-Type: text/plain');

// Абсолютные пути к файлам работают быстрее, чем отновительные.
// Используйте магическую константу __DIR__ для генерации абсолютного пути к файлу (от корня диска).
require_once __DIR__ . '\functions.php';

$input  = [10, 20, 30, 40];
$output = array_multiply($input, 10);

var_export($input);
var_export($output);
