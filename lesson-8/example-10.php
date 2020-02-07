<?php
declare(strict_types = 1);

/*
 * Отличие require и require_once в том, что они сгенерируют ошибку в том случае,
 * если файл не будет найден.
 */
require_once 'example-08.php';
require_once 'example-08.php';

summary(0, 10, 20, 30, 40);