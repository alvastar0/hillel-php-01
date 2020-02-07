<?php
declare(strict_types = 1);

/**
 * Подключение к базе данных.
 *
 * @param  array  $parameters
 *
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

/**
 * Закрытие подключения к базе данных.
 *
 * @param  \mysqli  $database
 *
 * @return bool
 */
function close_database_connection(mysqli $database): bool
{
    return $database->close();
}

/**
 * Получение массива польователей.
 *
 * @param  \mysqli  $database
 *
 * @return array
 */
function get_users(mysqli $database): array
{
    $result = $database->query('SELECT * FROM users');

    if ($result === false) {
        trigger_error($database->error);
    }

    return $result->fetch_all(MYSQLI_ASSOC);
}

/**
 * Поиск пользователя в базе данных.
 *
 * @param  \mysqli  $database
 * @param           $condition
 * @param  string   $column
 *
 * @return array|null
 */
function get_user(mysqli $database, $condition, string $column = 'id'): ?array
{
    echo $query = sprintf(
        'SELECT * FROM users WHERE %s = %s LIMIT 1',
        $database->real_escape_string($column),
        $database->real_escape_string($condition)
    );

    return null;
}
