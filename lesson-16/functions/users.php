<?php

require_once __DIR__ . '/database.php';

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

function get_user_by_email(string $email): array
{
}
