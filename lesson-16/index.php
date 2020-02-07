<?php
header('Content-Type: text/plain');

require_once __DIR__ . '/functions/template.php';
require_once __DIR__ . '/functions/database.php';
require_once __DIR__ . '/functions/users.php';
require_once __DIR__ . '/functions/products.php';
require_once __DIR__ . '/functions/auth.php';

var_export(get_product(2));
