<?php
declare(strict_types = 1);

// Выводит данные из строки запросаю
//
// Если строка запроса будет в виде /?example=hello,
// то вывод будет string(5) "hello"
//
// Если данные для ключа "example" не будут переданы,
// то будет сгенерирован notice и возвращен — NULL
var_dump($_GET['example']);
