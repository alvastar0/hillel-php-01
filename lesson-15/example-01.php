<?php
header('Content-Type: text/plain');

const DATABASE_CONFIG = [
    'host' => '127.0.0.1',
    'user' => 'root',
    'password' => '',
    'database' => 'application',
    'charset' => 'utf8mb4'
];

$dns = vsprintf(
    'mysql:host=%s;dbname=%s;charset=%s', [
        DATABASE_CONFIG['host'],
        DATABASE_CONFIG['database'],
        DATABASE_CONFIG['charset']
    ]
);

const PDO_OPTIONS = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

// Покдлючение к базе данных
try {
    $database = new PDO(
        $dns, DATABASE_CONFIG['user'], DATABASE_CONFIG['password'], PDO_OPTIONS
    );
} catch (PDOException $e) {
    file_put_contents('logs.log', $e->getMessage() . PHP_EOL);
}

// Выполнение запросов
$statement = $database->query('SELECT * FROM `attributes`');

$data = [];
while ($attribute = $statement->fetch()) {
    $data[$attribute['id']] = $attribute;
}

// Подготовленные запросы

$search = '%' . $_GET['search'] . '%';

// Первый вариант

$statement = $database->prepare(
    'SELECT * FROM `product_attributes_varchar` WHERE `value` LIKE ?'
);

$statement->execute([
    $search
]);

// Второй вариант

$statement = $database->prepare(
    'SELECT * FROM product_attributes_varchar WHERE value LIKE :search'
);

$statement->execute([
    'search' => $search
]);

// Where In

$ids = [1, 3, 5];
$in = str_repeat('?,', count($ids) - 1) . '?';

$statement = $database->prepare(
    'SELECT * FROM product_attributes_varchar WHERE id IN (' . $in . ')'
);

$statement->execute($ids);

var_export($statement->fetchAll());

// Транзакции

$database->beginTransaction();

try {
    $statement = $database->query('...');
    $statement = $database->query('...');
    $statement = $database->query('...');

    $database->commit();
} catch (PDOException $e) {
    $database->rollBack();
}
