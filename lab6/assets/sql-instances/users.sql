-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 21 2020 г., 14:32
-- Версия сервера: 10.4.11-MariaDB
-- Версия PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lab6`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(14, 'rostgood', 'alsogood@good.go', '$2y$10$3EKR9aZDaWaUjM44onHMYO0Ov0Gv8LxpLOm9YnGUFhl6RjCoSMIqG'),
(17, 'Stas', 'stask49@gmail.com', '$2y$10$.OqgbcuMr6TaaRQwL/93LOcVEdqBDJthictjc8RnsW0aLuWCTWKrK'),
(29, 'test', 'test@test.test', '$2y$10$MViyHXO3bcwiBrfHbrNKmeKrg53P/GV4erBgFCMpiXEwiLx2nS52W'),
(31, 'Стас Кривошея', 'kryvosheia.s18@fpm.dnulive.dp.ua', '$2y$10$VPxlQ0ewIu68vZbZ2nwKL./MqyxazPdGEqjB7mac200cNLuuRf9kG'),
(33, 'vladd8', 'volkovskiy4@gmail.com', '$2y$10$0z3lTtzM1GiSowTTTsgoLueTnmTyY5uRYTgO3ZzyOpBGkEDRHz5j2'),
(34, 'Владос', 'vladberezhnoy70@gmail.com', '$2y$10$0ipFjjIQftjhV6VR07LLSeezgI59g6IFD5JZLAhL9.U3UYjHNGRVW'),
(35, 'Я - Илья, честно, не вру', 'reception.yarovoy@gmail.com', '$2y$10$TyjP5wfdkdp9xSXh07VofOHebSFusr2QAQHFcavX5DuzxOol3mwkS'),
(36, 'Jame-Jam', 'iakoviarovoi@gmail.com', '$2y$10$MrfqI6av/hYDarUG0MNcM.iDIpZAOxgq/wNo.1Ki/dFSBLi8Bzcbm'),
(37, 'Albert S', 'albertsoloviov333@gmail.com', '$2y$10$A0fArWBQgtvvnpatReLnnOMPqmb0cmnqmFK68C7YBK6hvc0aqWXr6'),
(38, 'DIMONSUPER', 'fedchenko@dlit.dp.ua', '$2y$10$nbSK8LnmViE.OZ.GUs/sSOo.URA2vMOIRWWo4RiUJtiql571Xbvqy'),
(40, 'Иван', 'iavavsv@gmail.com', '$2y$10$HfPVEw8CY2JM5q4ia1Fl/unEBH9qqSZFl1e7FTDJsMcpFAKR1Jkne'),
(41, 'Владик', 'vladk03311@gmail.com', '$2y$10$3kggt6x/ffeXJW5WzggePu1UFh6FLCssMgRKQ55VU.t2PdehY1BXC');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
