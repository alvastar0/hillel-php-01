--
-- Вставка нескольких значений в таблицу users
--
INSERT INTO `users`
-- ↑ ВСТАВИТЬ В ТАБЛИЦУ users
-- ↓ Перечисление столбцов, значения которых будут вставлены
(`id`, `email`, `password`, `name`, `created_at`, `updated_at`)
-- ↓ Перечисление значений для вставки. Значения должны передаваться в том же порядке,
--   что и были указаны в перечислении столбцов.
VALUES
    (NULL, 'admin@example.com', 'e64c7d89f26bd1972efa854d13d7dd61', 'Админ Админович', CURRENT_TIMESTAMP, NULL),
    (NULL, 'user@example.com', 'b58996c504c5638798eb6b511e6f49af', 'Юзер Юрезович', CURRENT_TIMESTAMP, NULL);

--
-- Вставка данных в таблицу users (другой пример форматирования)
--
INSERT INTO `application`.`users` (
    `email`, `password`, `name`
) VALUES (
    'database@emample.com',
    'f36ec691214ad9c209977c47aa4bf648',
    'Баз Данович'
)


SELECT *                     -- ВЫБРАТЬ ВСЁ
FROM `application`.`users`   -- ИЗ БАЗЫ ДАННЫХ application ТАБЛИЦЫ users
ORDER BY `name`              -- СОРТИРОВАТЬ ПО СТОЛБЦУ name
LIMIT 1;                     -- ВСЕГО 1


--
-- Выбрать всех пользователей, у которых столбец `updated_at` равен `null`
--
SELECT * FROM `application`.`users`
WHERE `updated_at` IS NULL;


--
-- Выбрать всех пользователей, у которых столбец `updated_at` не равен `null`
--
SELECT * FROM `application`.`users`
WHERE `updated_at` IS NOT NULL;


--
-- Выбрать всех пользователей, у которых email равен переданному значению
--
SELECT * FROM `application`.`users`
WHERE `email` = 'admin@example.com';


--
-- Обновление данные пользователя
--
UPDATE `application`.`users`                    -- ОБНОВИТЬ ДАННЫЕ ТАБЛИЦЫ users
SET `name` = 'Пользователь Пользователевич'     -- СТОЛБЕЦ = ЗНАЧЕНИЕ
WHERE `id` = 2;                                 -- ГДЕ id = 2


--
-- Обновление нескольких столбцов
--
UPDATE `application`.`users`
SET `name` = 'Пользователь Пользователевич', `email` = 'email@example.com'
WHERE `id` = 2;


--
-- Удаление пользователя по идентификатору
--
DELETE FROM `application`.`users`
WHERE `id` = 3;