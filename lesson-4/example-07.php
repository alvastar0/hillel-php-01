<?php

/*
 * Данный пример демонстрирует работа констант и приема
 * каскадирования условных операторов.
 *
 * @see https://www.php.net/manual/ru/control-structures.elseif.php
 * @see https://www.php.net/manual/ru/language.constants.php
 */

const ADMIN = 1;
const EDITOR = 2;
const USER = 3;
const GUEST = 4;

$role = (int)$_GET['role'];

if ($role === ADMIN) {
    echo 'Hello, Admin!';

} elseif ($role === EDITOR) {
    echo 'Hello, Editor!';

} elseif ($role === USER) {
    echo 'Hello, User!';

} elseif ($role === GUEST) {
    echo 'Hello, Guest!';

} else {
    /** @see https://www.php.net/manual/ru/function.die.php */
    die('Forbidden!');
}
