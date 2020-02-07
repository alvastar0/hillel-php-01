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
 * Выполняет аутентификацию.
 *
 * @param string $login
 * @param string $password
 *
 * @return bool
 */
function auth(string $login, string $password): bool
{
    $user = get_user_by_login($login);

    if (empty($user)) {
        return false;
    }

    if ($user['password'] !== md5($password)) {
        return false;
    }

    $_SESSION[get_auth_session_key()] = (int)$user['id'];

    return true;
}

/**
 * Уничтожает сессию пользователя.
 *
 * @return void
 */
function logout(): void
{
    unset($_SESSION[get_auth_session_key()]);
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
