<?php

/*
 * Данный пример демонстрирует работа оператора ветвления.
 *
 * @see https://www.php.net/manual/ru/control-structures.if.php
 * @see https://www.php.net/manual/ru/control-structures.else.php
 */

/**
 * Текущий баланс пользователя.
 *
 * @var int $userBalance
 */
$userBalance = 500;

/**
 * Сумма покупок.
 *
 * @var int $checkoutTotal
 */
$checkoutTotal = 400;

if ($userBalance >= $checkoutTotal) {
    // Если сумма покупок меньше или равно текущего баланса пользователя,
    // то необходимо уменьшить баланс и вывести сообщение об успешной покупке.
    $userBalance -= $checkoutTotal;

    echo 'Success! Your balance is ' . $userBalance;
} else {
    // В противном случае, выводим сообщение о том, что не хватает
    // средств для совершения покупок и указываем какой суммы не хватает.
    echo 'You have not enough funds on your balance (' . -($userBalance - $checkoutTotal) . ')';
}
