<?php
session_start();

require_once __DIR__ . '/users.php';

/**
 * Проверяет выполнена ли аутентификация для текущего пользователя.
 *
 * @return bool
 */
function is_auth(): bool
{
    return isset($_SESSION[get_auth_session_key()]);
}

/**
 * @param string $login
 * @param string $password
 *
 * @return bool
 */
function auth(string $login, string $password): bool
{
    
}

function logout(): bool
{
}

/**
 * Получение данных аутентифицированного пользователя.
 *
 * @return array
 */
function get_auth_user(): array
{
    if (is_auth()) {
        return get_user_by_id(get_auth_id());
    }

    return [];
}

/**
 * Получение ключа идентификатора пользователя в сессии.
 *
 * @return string
 */
function get_auth_session_key(): string
{
    return 'UID';
}

/**
 * Получение идентификатора аутентифицированного пользователя.
 *
 * @return int
 */
function get_auth_id(): int
{
    return (int)$_SESSION[get_auth_session_key()];
}
