<?php

/**
 * Данный пример демонстрирует работу оператора множественного выбора switch.
 * Код, описанный ниже, выполняет ту же функцию, что и в предыдущем примере,
 * но с применением других языковых конструкций.
 *
 * @see https://www.php.net/manual/ru/control-structures.switch.php
 * @see https://www.php.net/manual/ru/control-structures.break.php
 */

const ADMIN = 1;
const EDITOR = 2;
const USER = 3;
const GUEST = 4;

$role = (int)$_GET['role'];

switch ($role) {
    case ADMIN:
        echo 'Hello, Admin!';
        break;

    case EDITOR:
        echo 'Hello, Editor!';
        break;

    case USER:
        echo 'Hello, User!';
        break;

    case GUEST:
        echo 'Hello, Guest!';
        break;

    default:
        die('Forbidden!');
}
