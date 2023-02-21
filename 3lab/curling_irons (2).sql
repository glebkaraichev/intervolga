-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Окт 18 2022 г., 13:16
-- Версия сервера: 10.4.24-MariaDB
-- Версия PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `curling_irons`
--

-- --------------------------------------------------------

--
-- Структура таблицы `brands`
--

CREATE TABLE `brands` (
  `id` int(11) UNSIGNED NOT NULL,
  `brandname` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `brands`
--

INSERT INTO `brands` (`id`, `brandname`) VALUES
(1, 'Harizma'),
(2, 'Dewal'),
(3, 'Promozer'),
(4, 'Mark_shmidt'),
(5, 'Moser');

-- --------------------------------------------------------

--
-- Структура таблицы `curling_irons_tab`
--

CREATE TABLE `curling_irons_tab` (
  `id` int(11) UNSIGNED NOT NULL,
  `img_path` varchar(45) NOT NULL DEFAULT 'no_img.png',
  `curlingname` varchar(45) NOT NULL,
  `id_brand` int(10) UNSIGNED NOT NULL,
  `curlingdescription` varchar(255) DEFAULT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `curling_irons_tab`
--

INSERT INTO `curling_irons_tab` (`id`, `img_path`, `curlingname`, `id_brand`, `curlingdescription`, `cost`) VALUES
(1, 'DEWAI RED TITANIUM.png', 'Dewai red Titanium', 2, 'Надежный прибор для создания безопасной укладки не только в профессиональных условиях, но и для завивки волос дома.Профессиональная плойка имеет высокие технические характеристики и максимальную износоустойчивость. Покрытие из титана и турмалина обеспечи', 1835),
(2, 'Dewal 03-2025 Coral Limited Edition.png', 'Dewai Coral Limited Edition', 2, 'Плойка для волос Dewal Coral Limited Edition – надежный прибор для создания безопасной укладки в профессиональных условиях, а также является комфортным вариантом для завивки в домашнем применении.', 2300),
(3, 'Dewal Exception 03-1619T.png', 'Dewai Exception', 2, 'Профессиональная плойка для волос Dewal Exception 03-1619T с терморегулятором и матовым металлическим покрытием корпуса с напылением микрочастиц титана. Работать этими инструментами еще комфортнее, поскольку титан обладает гипоаллергенными свойствами.', 3356),
(4, 'Dewal Titanium T2 pro 03-132.png', 'Dewal Titanium T2 pro', 2, 'Плойка для волос Dewal TitaniumT Pro 03-16A – качественный профессиональный инструмент для быстрого создания безупречных локонов и роскошных укладок.', 1880),
(5, 'Dewal TitaniumT Pro 03-19A.png', 'Dewal TitaniumT Pro 03-19A', 2, 'Плойка для волос Dewal TitaniumT Pro 03-16A – качественный профессиональный инструмент для быстрого создания безупречных локонов и роскошных укладок.', 2229),
(6, 'Harizma Creative h10303-09.png', 'Harizma Creative h10303-09', 1, 'Современная модель конусной плойки, с помощью которой можно быстро завить волосы, делать разные прически, накручивая пряди и формируя красивые локоны. В конструкции плойки применяется керамика и инновационное турмалиновое антистатическое покрытие. ', 2180),
(7, 'Harizma italian Classic h10-348-26.png', 'Harizma italian Classic h10-348-26', 1, 'Профессиональная плойка для завивки волос Harizma Classic Italian позволяет с лёгкостью создавать отдельные креативные пряди и локоны, и использовать её для полноценной завивки волос.', 1792),
(8, 'Harizma Mini Curl h1010305-35.png', 'Harizma Mini Curl h1010305-35', 1, 'Миниатюрные щипцы для завивки волос Harizma Mini Curl позволяют с лёгкостью создавать отдельные креативные пряди и локоны, и использовать её для полноценной завивки волос', 1793),
(9, 'harizma_h10307_01.png', 'harizma_h10307_01', 1, 'лассический дизайн профессиональных щипцов для завивки волос Harizma Beauty Curl h10307 позволяет с лёгкостью создавать отдельные креативные пряди и локоны, и использовать её для полноценной завивки волос.', 2074),
(10, 'Mark shmidt 507-b.png', 'Mark shmidt 507-b', 4, 'Плойка Mark Shmidt 507-B серии Long с удлинённой рабочей поверхностью позволяет завить даже очень длинные волосы от корней до самых кончиков.', 1840),
(11, 'Moser Titan Curl 4443-0050.png', 'Moser Titan Curl 4443-0050', 5, 'Данная модель щипцов позволяет осуществлять максимально бережную завивку волос любой структуры, исключая статический эффект. Встроенная система Nano-Silver позволяет прибору нагреваться до рабочей температуры за 20 секунд.', 4350),
(12, 'Moser Curling 4445-0050.png', 'Moser Curling 4445-0050', 5, 'Данная модель щипцов позволяет осуществлять максимально бережную завивку волос любой структуры, исключая статический эффект. Встроенная система Nano-Silver позволяет прибору нагреваться до рабочей температуры за 20 секунд.\r\n', 4350),
(13, 'Moser Titan Curl Rose Gold 4443-0051.png', 'Moser Titan Curl Rose Gold 4443-0051', 5, 'Профессиональная плойка с покрытием из керамики рекомендована для завивки средних или длинных волос.', 2930),
(14, 'PROMOZER MZ-6601-28.png', 'PROMOZER MZ-6601-28', 3, 'Профессиональная плойка Promozer обладает следующими преимуществами: Длинный профессиональный, вращающийся шнур 2,5м Керамический нагревательный РТС элемент, очень быстро выводит плойку на рабочую температуру', 1649),
(15, 'PROMOZER MZ-6611-25.png', 'PROMOZER MZ-6611-25', 3, 'Профессиональная плойка Promozer для локонов MZ-6611 обладает следующими преимуществами:\r\nДлинный профессиональный прорезиненный вращающийся шнур 2,5 м\r\nКерамический нагревательный РТС элемент, очень быстро выводит плойку на рабочую температуру', 1540),
(16, 'PROMOZER MZ--6611-28.png', 'PROMOZER MZ--6611-28', 3, 'Профессиональная плойка Promozer для локонов MZ-6611 обладает следующими преимуществами:\r\nДлинный профессиональный прорезиненный вращающийся шнур 2,5 м\r\nКерамический нагревательный РТС элемент, очень быстро выводит плойку на рабочую температуру', 1540),
(17, 'Promozer MZ-7010B.png', 'Promozer MZ-7010B', 3, 'Профессиональная конусная плойка Promozer обладает следующими преимуществами:\r\nДлинный профессиональный, вращающийся шнур 2,5м\r\nКерамический нагревательный РТС элемент, очень быстро выводит плойку на рабочую температуру', 1925),
(18, 'Promozer MZ-7010C-25.png', 'Promozer MZ-7010C-25', 3, 'Профессиональная конусная плойка Promozer обладает следующими преимуществами:\r\nДлинный профессиональный, вращающийся шнур 2,5м\r\nКерамический нагревательный РТС элемент, очень быстро выводит плойку на рабочую температуру', 2118),
(19, 'Proomozer MZ-6611-22.png', 'Proomozer MZ-6611-22', 3, 'Удобная и безопасная плойка позволяет создавать аккуратные локоны различного диаметра. ', 2336),
(20, 'Promozer MZ-7010C-32.png', 'Promozer MZ-7010C-32', 3, 'Профессиональная конусная плойка Promozer обладает следующими преимуществами:\r\nДлинный профессиональный, вращающийся шнур 2,5м\r\nКерамический нагревательный РТС элемент, очень быстро выводит плойку на рабочую температуру', 2118);

-- --------------------------------------------------------

--
-- Структура таблицы `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `email1` varchar(45) NOT NULL,
  `password1` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `test`
--

INSERT INTO `test` (`id`, `email1`, `password1`) VALUES
(3, '215152151515151', '21321321'),
(4, '2131', '2131321');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email1` varchar(55) NOT NULL,
  `password1` varchar(55) NOT NULL,
  `password_conf` varchar(55) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `birthday_date` varchar(255) DEFAULT NULL,
  `address` varchar(55) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `interests` varchar(455) DEFAULT NULL,
  `vklink` varchar(155) DEFAULT NULL,
  `blood_type` varchar(35) DEFAULT NULL,
  `rh_factor` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email1`, `password1`, `password_conf`, `full_name`, `birthday_date`, `address`, `sex`, `interests`, `vklink`, `blood_type`, `rh_factor`) VALUES
(18, 'ывфвыфв', 'ыфвыфвф', 'фыввф', 'вывфвфвф', 'ыфвфвфв', 'ыфвфвф', 'ыфвфвфвыф', 'ыфвфвыфвф', 'ыфвфвфвф', 'ыфвфвыфвыф', 'ыфвыфвфвф'),
(19, '', '', 'dsadsa', 'sadada', 'sadsada', 'sadada', 'sdadsada', 'sadada', 'sadsada', 'asdsadsa', 'sasdada'),
(20, 'ivanthebestfifa21@mail.ru', '', 'dsadsa', 'sadada', 'sadsada', 'sadada', 'sdadsada', 'sadada', 'sadsada', 'asdsadsa', 'sasdada'),
(21, 'ivanthebestfifa21@mail.ru', '', 'dsadsa', 'sadada', 'sadsada', 'sadada', 'sdadsada', 'sadada', 'sadsada', 'asdsadsa', 'sasdada'),
(22, 'ASsSA', 'sadada', 'sadada', 'sadada', 'dadada', 'sadada', 'dadada', 'dadada', 'dadada', 'dadadada', 'dadadada'),
(23, 'ASsSA', 'sadada', 'sadada', 'sadada', 'dadada', 'sadada', 'dadada', 'dadada', 'dadada', 'dadadada', 'положительный'),
(24, '21313', 'sadada', 'asdsadasda', 'dsadsadada', '', 'ыфвфвф', '', '', '', '', ''),
(25, '21313', 'sadada', 'asdsadasda', 'dsadsadada', '', 'ыфвфвф', '', '', '', '', ''),
(26, '21313', 'ыфвыфвф', '', '', '', '', '', '', '', '', ''),
(27, '21313', '$2y$10$vHUsIHYXEzOsvud/Csq8WOhBKoMu5pUBE297ViYkhPt2zyMn', '', '', '', '', '', '', '', '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `curling_irons_tab`
--
ALTER TABLE `curling_irons_tab`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_1` (`id_brand`);

--
-- Индексы таблицы `test`
--
ALTER TABLE `test`
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
-- AUTO_INCREMENT для таблицы `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `curling_irons_tab`
--
ALTER TABLE `curling_irons_tab`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `curling_irons_tab`
--
ALTER TABLE `curling_irons_tab`
  ADD CONSTRAINT `foreign_key_1` FOREIGN KEY (`id_brand`) REFERENCES `brands` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
