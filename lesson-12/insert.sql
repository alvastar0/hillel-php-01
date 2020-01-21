INSERT INTO `users`
(`id`, `email`, `password`, `name`, `created_at`, `updated_at`) VALUES
(NULL, 'admin@example.com', 'e64c7d89f26bd1972efa854d13d7dd61', 'Админ Админович', CURRENT_TIMESTAMP, NULL),
(NULL, 'user@example.com', 'b58996c504c5638798eb6b511e6f49af', 'Юзер Юрезович', CURRENT_TIMESTAMP, NULL);

INSERT INTO `application`.`users` (
    `email`, `password`, `name`
) VALUES (
    'database@emample.com',
    'f36ec691214ad9c209977c47aa4bf648',
    'Баз Данович'
)

SELECT * FROM `application`.`users`
ORDER BY `name` LIMIT 1;


SELECT * FROM `application`.`users`
WHERE `updated_at` IS NULL;

SELECT * FROM `application`.`users`
WHERE `updated_at` IS NOT NULL;

SELECT * FROM `application`.`users`
WHERE `email` = 'admin@example.com';

UPDATE `application`.`users`
SET `name` = 'Пользователь Пользователевич'
WHERE `id` = 2;

UPDATE `application`.`users`
SET `name` = 'Пользователь Пользователевич', `email` = 'email@example.com'
WHERE `id` = 2;

DELETE FROM `application`.`users`
WHERE `id` = 3;