<?php

require_once __DIR__ . '/database.php';

/**
 * @param int $id
 * @return array
 * @todo Предотвратить дублирование
 */
function get_user_by_id(int $id): array
{
    $statement = get_database()->prepare(
        'SELECT * FROM `users` WHERE `id` = ?'
    );

    $isSuccess = $statement->execute([$id]);
    if ($isSuccess === false) {
        return [];
    }

    $userData = $statement->fetch();
    if ($userData === false) {
        return [];
    }

    return $userData;
}

/**
 * @param string $login
 * @return array
 * @todo Предотвратить дублирование
 */
function get_user_by_login(string $login): array
{
    $statement = get_database()->prepare(
        'SELECT * FROM `users` WHERE `login` = ?'
    );

    $isSuccess = $statement->execute([$login]);
    if ($isSuccess === false) {
        return [];
    }

    $userData = $statement->fetch();
    if ($userData === false) {
        return [];
    }

    return $userData;
}
