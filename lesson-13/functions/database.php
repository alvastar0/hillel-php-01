<?php

/**
 * @param array $parameters
 * @return mysqli
 */
function get_database_connection(array $parameters): mysqli
{
    $database = new mysqli(
        $parameters['host'] ?? null,
        $parameters['user'] ?? null,
        $parameters['password'] ?? null,
        $parameters['database'] ?? null
    );

    if ($database->connect_errno) {
        trigger_error($database->connect_error);
        //throw new RuntimeException($database->connect_error);
    }

    return $database;
}

function close_database_connection(mysqli $database): bool
{
    return $database->close();
}

function get_users(mysqli $database): array
{
    $result = $database->query('SELECT * FROM users');

    if ($result === false) {
        trigger_error($database->error);
    }

    return $result->fetch_all(MYSQLI_ASSOC);
}

function get_user(mysqli $database, $condition, string $column = 'id'): ?array
{
    echo $query = sprintf('SELECT * FROM users WHERE %s = %s LIMIT 1',
        $database->real_escape_string($column),
        $database->real_escape_string($condition)
    );

    return null;
}
