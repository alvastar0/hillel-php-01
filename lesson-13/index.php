<?php
header('Content-Type: text/plain');

require_once __DIR__ . '/functions/database.php';

$db = get_database_connection([
    'host' => '127.0.0.1',
    'user' => 'root',
    'password' => '',
    'database' => 'application'
]);

// --------------

get_user($db, 'example@email.com', 'email');

// --------------

close_database_connection($db);
