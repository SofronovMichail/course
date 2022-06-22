-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 22 2022 г., 07:42
-- Версия сервера: 8.0.24
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `detail52`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cleaning`
--

CREATE TABLE `cleaning` (
  `id` int NOT NULL,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Структура таблицы `protect`
--

CREATE TABLE `protect` (
  `id` int NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `protect`
--

INSERT INTO `protect` (`id`, `img`, `description`) VALUES
(1, '/public/img/protect1.jpg', 'Антигравийная защита капота Toyota Rav 4'),
(2, '/public/img/protect2.jpg', 'Антигравийная защита капота Toyota Camry'),
(3, '/public/img/protect3.jpg', 'Антигравийная защита Lada Vesta'),
(4, '/public/img/protect4.jpg', 'Антигравийная защита Toyota Fortuner: капот, фары, под ручками, зона погрузки, стойки.'),
(5, '/public/img/protect5.jpg', 'Антигравийная защита капота Volkswagen Passat B8'),
(6, '/public/img/protect6.jpg', 'Антигравийная защита Lexus RX 200'),
(7, '/public/img/protect7.jpg', 'Антигравийная защита зоны риска Toyota Venza'),
(8, '/public/img/protect8.jpg', 'Антигравийная защита задних фар BMW F10');

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE `services` (
  `id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `href` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `price_first` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `price_second` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `price_third` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `img`, `href`, `price_first`, `price_second`, `price_third`) VALUES
(1, 'ТОНИРОВКА АВТОМОБИЛЕЙ', 'Тонируем автомобили быстро и качественно, даём гарантию на проделанную работу. Также работаем со съёмной тонировкой!', '/public/img/toner.jpg', '/tinting', '', '', ''),
(2, 'АНТИГРАВИЙНАЯ ЗАЩИТА АВТОМОБИЛЕЙ', 'Надёжная защита от царапин и сколов! Оклеим Ваш автомобиль специальной плёнкой, толщиной в 100-300 микрон.', '/public/img/antigrav.jpg', '/protecting', '', '', ''),
(3, 'ХИМЧИСТКА САЛОНА АВТОМОБИЛЯ', 'Очистим салон Вашего автомобиля от пятен, грязи и грибков! Тщательная обработка всех видов поверхностей.', '/public/img/himchistka.jpg', '/cleaning', '', '', ''),
(4, 'ПОЛИРОВКА КУЗОВА АВТОМОБИЛЕЙ', 'Дополнительная защита Вашего автомобиля от агрессивного воздействия внешних факторов! Предпродажная подготовка автомобиля.', '/public/img/polirovka.jpg', '/polishing', '', '', ''),
(5, 'ШУМОИЗОЛЯЦИЯ АВТОМОБИЛЕЙ', 'Применяем только лучшие материалы, проверенные временем. Работаем со всеми типами и классами автомобилей!', '/public/img/shumka.jpg', '/soundproofing', '', '', ''),
(6, 'ОКЛЕИВАНИЕ ВИНИЛОВОЙ ПЛЁНКОЙ', 'Оклеиваем винилом кузов всех типов автомобилей. Производим отделку элементов интерьера.', '/public/img/vinil.jpg', '/vinyl', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `tinting`
--

CREATE TABLE `tinting` (
  `id` int NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `tinting`
--

INSERT INTO `tinting` (`id`, `img`, `description`) VALUES
(1, '/public/img/tint1.jpg', 'Тонировка BMW e60, передние бока 5%, лоб 35%'),
(2, '/public/img/tint2.jpg', 'Тонировка BMW X5, передние бока 15%'),
(3, '/public/img/tint3.jpg', 'Тонировка Mercedes Benz C-class, вкруг 15%'),
(4, '/public/img/tint4.jpg', 'Тонировка BMW e60, лобовое 35%'),
(5, '/public/img/tint5.jpg', 'Тонировка Mercedes Benz GLC, задний полукруг 5%'),
(6, '/public/img/tint6.jpg', 'Тонировка заднего полукруга 50%, передние бока 50%, лобовое стекло 75%'),
(7, '/public/img/tint7.jpg', 'Тонировка BMW 3, задний полукруг 5%, бока 75%'),
(8, '/public/img/tint8.jpg', 'Тонировка Mitsubishi Lancer, бока 5%, лобовое 35%'),
(9, '/public/img/tint9.jpg', 'Тонировка Volkswagen Jetta, передние бока 5%'),
(10, '/public/img/tint10.jpg', 'Тонировка Subaru Forester, передние бока съёмной тонировкой 15%'),
(11, '/public/img/tint11.jpg', 'Тонировка AUDI A4, задний полукруг 5%'),
(12, '/public/img/tint12.jpg', 'Тонировка Honda Civic, передние бока 5%, лобовое 35%\r\n'),
(13, '/public/img/tint13.jpg', 'Тонировка УАЗ Патриот, задний полукруг 5%'),
(14, '/public/img/tint14.jpg', 'Тонировка Volkswagen Golf, задний полукруг 5%'),
(15, '/public/img/tint15.jpg', 'Тонировка Hyundai Solaris, задний полукруг 5%'),
(16, '/public/img/tint16.jpg', 'Тонировка KIA Sportage, передние бока 50%, лоб 75%'),
(17, '/public/img/tint17.jpg', 'Тонировка задний полукруг 5%, передние бока съемной тонировкой 5%'),
(18, '/public/img/tint18.jpg', 'Тонировка Volkswagen Polo, передние бока съемной тонировкой 5%'),
(19, '/public/img/tint19.jpg', 'Тонировка Toyota Camry, задний полукруг 15%'),
(20, '/public/img/tint20.jpg', 'Тонировка лобового стекла 50%');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `role` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `login` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `role`, `login`, `password`, `name`, `phone`, `email`) VALUES
(1, 'admin', 'admin', '$2y$10$2WFATW2L0sIC5vsWMGk0xeBSHSxQSihxleB5X9WAlWOSjjZcd4eb.', 'admin', '', ''),
(2, 'helper', 'helper_acc', 'mini_root', 'helper', '', ''),
(5, 'user', 'admin@example.com', '$2y$10$jhXLNBQL/jqg8PZCiYJ2seajJwYyW3vKq6fmJ1y39X3Ud0lnyTA3e', 'admin', '8987654321', 'admin@example.com'),
(8, 'user', 'user', '$2y$10$b9Uek7oj72B5i7yoUJq5p.a4GVgi3QXpLonsl6PmX2Wet3THk7JAO', 'user', '8987654321', 'user@example.com');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cleaning`
--
ALTER TABLE `cleaning`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `protect`
--
ALTER TABLE `protect`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tinting`
--
ALTER TABLE `tinting`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cleaning`
--
ALTER TABLE `cleaning`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `protect`
--
ALTER TABLE `protect`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `tinting`
--
ALTER TABLE `tinting`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
