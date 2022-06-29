-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Июн 29 2022 г., 10:45
-- Версия сервера: 8.0.29-0ubuntu0.20.04.3
-- Версия PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gwa`
--

-- --------------------------------------------------------

--
-- Структура таблицы `info_olympic_games`
--

CREATE TABLE `info_olympic_games` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `info_olympic_games`
--

INSERT INTO `info_olympic_games` (`id`, `name`, `date_start`, `date_end`, `country`) VALUES
(1, 'Бадминтон', '2022-06-01', '2022-06-02', 'Украина'),
(2, 'Академическая гребля', '2022-06-07', '2022-06-09', 'Польша'),
(3, 'Баскетбол', '2022-06-06', '2022-06-08', 'Украина'),
(4, 'Бейсбол', '2022-06-21', '2022-06-23', 'Польша'),
(5, 'Бокс', '2022-05-02', '2022-05-08', 'Украина'),
(6, 'Борьба', '2022-07-22', '2022-06-25', 'Польша'),
(7, 'Велоспорт', '2022-07-18', '2022-07-20', 'Германия'),
(8, 'Волейбол', '2022-07-05', '2022-07-07', 'Италия'),
(9, 'Гольф', '2022-06-03', '2022-06-05', 'Португалия'),
(10, 'Водное поло', '2022-08-10', '2022-08-13', 'Германия'),
(11, 'Гандбол', '2022-08-08', '2022-08-09', 'Италия'),
(12, 'Гандбол', '2021-08-08', '2021-08-09', 'Италия'),
(13, 'Гандбол', '2020-08-08', '2020-08-09', 'Италия'),
(14, 'Водное поло', '2021-08-10', '2021-08-13', 'Германия');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `info_olympic_games`
--
ALTER TABLE `info_olympic_games`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `info_olympic_games`
--
ALTER TABLE `info_olympic_games`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
