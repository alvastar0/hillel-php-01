<?php

// Проверка наличия элементов в массиве

// Старайтесь не использовать литералы в Вашем коде.
//
// Вместо этого определите константы для тех фиксированных
// значений и используйте их там, где хотели использовать литерал.
const ROLE_ADMIN  = 'admin';
const ROLE_EDITOR = 'editor';

// Массив доступных ролей.
$roles = [
    ROLE_ADMIN,
    ROLE_EDITOR,
];

const INCLUDE_ARTICLES   = 'articles';
const INCLUDE_COMMENTS   = 'comments';
const INCLUDE_STATISTICS = 'statistics';

// Массив доступных включений для каждой из роли
$includePolicies = [
    ROLE_ADMIN  => [INCLUDE_ARTICLES, INCLUDE_COMMENTS, INCLUDE_STATISTICS],
    ROLE_EDITOR => [INCLUDE_ARTICLES, INCLUDE_COMMENTS],
];

// Получаем данные из $_GET и сохраняем в массив $request
$request = [
    'role'    => $_GET['role'] ?? '',
    'include' => $_GET['include'] ?? '',
];

// Преобразуем данные запроса в строки нижнего регистра.
foreach ($request as $index => $value) {
    $request[$index] = strtolower($value);
}

// То же самое, но с использованием функции array_walk и
// функции обратного вызова (замыкания).
//array_walk($request, static function (&$value, $index) {
//    $value = strtolower($value);
//});

// Валидация роли
// https://www.php.net/manual/ru/language.operators.logical.php
if (empty($request['role']) || !in_array($request['role'], $roles, true)) {
    die('401 — Неизвестный уровень доступа');
}

if (!empty($request['include'])) {
    // Массив запрошенных включений
    $requestedIncludes = explode(',', $request['include']);

    // Массив разрешенных включений
    $allowedIncludes = $includePolicies[$request['role']] ?? [];

    // Массив недоступных включений
    // https://www.php.net/manual/ru/function.array-diff.php
    $disallowedIncludes = array_diff($requestedIncludes, $allowedIncludes);

    if (!empty($disallowedIncludes)) {
        die('400 — Неверный запрос');
    }
}

echo '200 — Данные успешно получены';
