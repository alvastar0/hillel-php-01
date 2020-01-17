<?php

session_start();

if (isset($_POST['year'], $_POST['month'], $_POST['day'])) {

    $year = (int)$_POST['year'];
    $month = (int)$_POST['month'];
    $day = (int)$_POST['day'];

    $requiredTime = strtotime('-18 years');
    $userTime = strtotime("{$year}/{$month}/{$day}");

    if ($userTime < $requiredTime) {
        // Проходи
    } else {
        $_SESSION['errors'] = [
            'age' => [
                'value' => $year,
                'message' => 'Доступ запрещен!'
            ]
        ];

        header('Location: /lesson-11/validation/form.phtml');
    }
}
