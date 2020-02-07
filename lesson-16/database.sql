-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 07 2020 г., 20:36
-- Версия сервера: 5.7.25-log
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `application`
--

-- --------------------------------------------------------

--
-- Структура таблицы `attributes`
--

CREATE TABLE `attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Дамп данных таблицы `attributes`
--

INSERT INTO `attributes` (`id`, `code`, `name`, `type`, `is_active`) VALUES
(1, 'name', 'Наименование товара', 'varchar', 1),
(2, 'price', 'Стоимость', 'decimal', 1),
(3, 'quantity', 'Количество', 'int', 1),
(4, 'rating', 'Рейтинг', 'int', 1),
(5, 'description', 'Описание', 'text', 1),
(6, 'short_description', 'Краткое описание', 'varchar', 1),
(7, 'screen_diagonal', 'Диагональ экрана', 'int', 1),
(8, 'weight', 'Вес (кг)', 'decimal', 1),
(9, 'os', 'Операционная система', 'varchar', 1),
(10, 'streamer_mode', 'Режим пароварки', 'bool', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Смартфоны'),
(2, 'Мультиварки');

-- --------------------------------------------------------

--
-- Структура таблицы `category_attributes`
--

CREATE TABLE `category_attributes` (
  `id` bigint(20) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `attribute_id` bigint(20) UNSIGNED NOT NULL,
  `ordering` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `category_attributes`
--

INSERT INTO `category_attributes` (`id`, `category_id`, `attribute_id`, `ordering`) VALUES
(1, 1, 1, 10),
(2, 1, 2, 20),
(3, 1, 3, 30),
(4, 1, 4, 60),
(5, 1, 5, 50),
(6, 1, 6, 40),
(7, 1, 7, 70),
(8, 1, 8, 90),
(9, 1, 9, 80),
(10, 2, 1, 10),
(11, 2, 2, 20),
(12, 2, 3, 30),
(13, 2, 4, 60),
(14, 2, 5, 50),
(15, 2, 6, 40),
(16, 2, 10, 70);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `sku` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `category_id`, `sku`) VALUES
(1, 1, '6ca8fc78'),
(2, 1, '3a2acda9'),
(3, 1, 'cb5591a9'),
(4, 2, '90736ed8'),
(5, 2, '51382138');

-- --------------------------------------------------------

--
-- Структура таблицы `product_attributes_bool`
--

CREATE TABLE `product_attributes_bool` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `attribute_id` bigint(20) UNSIGNED NOT NULL,
  `value` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `product_attributes_bool`
--

INSERT INTO `product_attributes_bool` (`id`, `product_id`, `attribute_id`, `value`) VALUES
(1, 4, 10, 1),
(2, 5, 10, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `product_attributes_decimal`
--

CREATE TABLE `product_attributes_decimal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `attribute_id` bigint(20) UNSIGNED NOT NULL,
  `value` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `product_attributes_decimal`
--

INSERT INTO `product_attributes_decimal` (`id`, `product_id`, `attribute_id`, `value`) VALUES
(1, 1, 2, '2999.00'),
(2, 1, 8, '0.12'),
(3, 2, 2, '14449.00'),
(4, 2, 8, '0.09'),
(5, 3, 2, '5999.00'),
(6, 3, 8, '0.17'),
(7, 4, 2, '2145.00'),
(8, 4, 8, '2.70'),
(9, 5, 2, '6069.00'),
(10, 5, 8, '2.95');

-- --------------------------------------------------------

--
-- Структура таблицы `product_attributes_int`
--

CREATE TABLE `product_attributes_int` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `attribute_id` bigint(20) UNSIGNED NOT NULL,
  `value` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `product_attributes_int`
--

INSERT INTO `product_attributes_int` (`id`, `product_id`, `attribute_id`, `value`) VALUES
(1, 1, 3, 15),
(2, 1, 4, 4),
(3, 1, 7, 5),
(4, 2, 3, 0),
(5, 2, 4, 5),
(6, 2, 7, 7),
(7, 3, 3, 30),
(8, 3, 4, 3),
(9, 3, 7, 4),
(10, 4, 3, 10),
(11, 4, 4, 5),
(12, 5, 3, 15),
(13, 5, 4, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `product_attributes_text`
--

CREATE TABLE `product_attributes_text` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `attribute_id` bigint(20) UNSIGNED NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `product_attributes_text`
--

INSERT INTO `product_attributes_text` (`id`, `product_id`, `attribute_id`, `value`) VALUES
(1, 1, 5, 'Qui tenetur quaerat consequatur. Eius aut deserunt ut. Excepturi pariatur est quibusdam aut. Officia aut enim. Beatae aspernatur consectetur tempora dolorem qui in cupiditate. Repudiandae at quaerat ab molestiae excepturi minima magnam.'),
(2, 2, 5, 'Recusandae iste nemo perspiciatis ea explicabo. Magnam voluptas sed. Cupiditate non iste tempora illo voluptatem eos. Ut et vel aliquam est ut et dolores. Facere dolor excepturi. In illo ratione aspernatur sint rerum magni eos voluptatem eius. Iure nam quibusdam aut ad aut eum iure porro incidunt. Minus iure omnis aperiam. Ipsam iste quasi autem soluta vel. Cumque nam a omnis est nihil. Blanditiis sed excepturi natus consequuntur nulla possimus. In aspernatur iure possimus dolorem tempora sed. Impedit reiciendis doloremque occaecati et ut nostrum aut ut quod. Quia ut et repellat provident nesciunt omnis.'),
(3, 4, 5, 'Explicabo quaerat cumque velit ut sint maiores.Eum voluptatibus porro blanditiis porro magni et unde laborum harum.');

-- --------------------------------------------------------

--
-- Структура таблицы `product_attributes_varchar`
--

CREATE TABLE `product_attributes_varchar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `attribute_id` bigint(20) UNSIGNED NOT NULL,
  `value` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `product_attributes_varchar`
--

INSERT INTO `product_attributes_varchar` (`id`, `product_id`, `attribute_id`, `value`) VALUES
(1, 1, 1, 'Телефон модели А'),
(2, 1, 6, 'Velit accusamus ut. Nisi eveniet pariatur. Nihil adipisci id.'),
(3, 2, 1, 'Телефон модели Б'),
(4, 2, 6, 'Accusantium neque adipisci autem hic. Unde eveniet tempore quas. Non repellat sed et aut est. Et quod aut libero et consequatur. Magni vero fugit officiis consequatur consequuntur id tenetur quo. Voluptas facere aperiam delectus eligendi eaque est fugiat id id.'),
(5, 3, 1, 'Телефон Модели С'),
(6, 4, 1, 'Мультиварка и пароварка'),
(7, 4, 6, 'Velit accusamus ut. Nisi eveniet pariatur. Nihil adipisci id.'),
(8, 5, 1, 'Просто мультиварка'),
(9, 5, 6, NULL),
(10, 1, 9, 'Android'),
(11, 2, 9, 'iOS'),
(12, 3, 9, 'Android');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `login` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `name`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator'),
(2, 'guest', '084e0343a0486ff05530df6c705c8bb4', 'Guest');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `is_active` (`is_active`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category_attributes`
--
ALTER TABLE `category_attributes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `attribute_id` (`attribute_id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sku` (`sku`),
  ADD KEY `category_id` (`category_id`);

--
-- Индексы таблицы `product_attributes_bool`
--
ALTER TABLE `product_attributes_bool`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `attribute_id` (`attribute_id`);

--
-- Индексы таблицы `product_attributes_decimal`
--
ALTER TABLE `product_attributes_decimal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `attribute_id` (`attribute_id`);

--
-- Индексы таблицы `product_attributes_int`
--
ALTER TABLE `product_attributes_int`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `attribute_id` (`attribute_id`);

--
-- Индексы таблицы `product_attributes_text`
--
ALTER TABLE `product_attributes_text`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `attribute_id` (`attribute_id`);

--
-- Индексы таблицы `product_attributes_varchar`
--
ALTER TABLE `product_attributes_varchar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `attribute_id` (`attribute_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `category_attributes`
--
ALTER TABLE `category_attributes`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `product_attributes_bool`
--
ALTER TABLE `product_attributes_bool`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `product_attributes_decimal`
--
ALTER TABLE `product_attributes_decimal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `product_attributes_int`
--
ALTER TABLE `product_attributes_int`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `product_attributes_text`
--
ALTER TABLE `product_attributes_text`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `product_attributes_varchar`
--
ALTER TABLE `product_attributes_varchar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `category_attributes`
--
ALTER TABLE `category_attributes`
  ADD CONSTRAINT `category_attributes_ibfk_1` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `category_attributes_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `product_attributes_bool`
--
ALTER TABLE `product_attributes_bool`
  ADD CONSTRAINT `product_attributes_bool_ibfk_1` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_attributes_bool_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `product_attributes_decimal`
--
ALTER TABLE `product_attributes_decimal`
  ADD CONSTRAINT `product_attributes_decimal_ibfk_1` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_attributes_decimal_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `product_attributes_int`
--
ALTER TABLE `product_attributes_int`
  ADD CONSTRAINT `product_attributes_int_ibfk_1` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_attributes_int_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `product_attributes_text`
--
ALTER TABLE `product_attributes_text`
  ADD CONSTRAINT `product_attributes_text_ibfk_1` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_attributes_text_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `product_attributes_varchar`
--
ALTER TABLE `product_attributes_varchar`
  ADD CONSTRAINT `product_attributes_varchar_ibfk_1` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_attributes_varchar_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
