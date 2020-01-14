<?php

/*
 * Проверка наличия необходимого набора данных
 */
$requiredFields = [
    'email',
    'age',
    'password',
    'password_confirm'
];

$rawData = [];

foreach ($requiredFields as $field) {
    if (isset($_POST[$field]) && strlen($_POST[$field])) {
        $rawData[$field] = trim($_POST[$field]);
    } else {
        header('HTTP/1.1 400 Bad Request');

        exit;
    }
}

/*
 * Подготовка данных для валидации
 */
$data = [
    'email' => htmlspecialchars($rawData['email']),
    'age' => intval($rawData['age']),
    'password' => password_hash($rawData['password'], PASSWORD_DEFAULT)
];

/*
 * Записываем данные в файл
 */
file_put_contents(
    __DIR__ . '/database/' . $data['email'],
    json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT)
);

/*
 * Перенаправляем обратно
 */
header('Location: /lesson-10/form.phtml');
exit;