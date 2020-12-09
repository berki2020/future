-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 09 2020 г., 17:50
-- Версия сервера: 5.6.43
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
-- База данных: `future`
--

-- --------------------------------------------------------

--
-- Структура таблицы `board`
--

CREATE TABLE `board` (
  `id` int(11) NOT NULL,
  `author` varchar(128) NOT NULL,
  `text` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `board`
--

INSERT INTO `board` (`id`, `author`, `text`, `date`) VALUES
(42, 'Артемий', 'Почему такое сложное задание??? Мне кажется, нужно быть первоклассным программистом, чтобы выполнить его :(', '2020-12-09 13:03:00'),
(43, 'Евдоким', 'Если включить мозги, то все элементарно Ватсон!', '2020-12-09 13:03:29'),
(44, 'Савва', 'Спасибо за Ваше тестовое задание. Оно, действительно, изумительное', '2020-12-09 13:03:55'),
(45, '@@!!!', 'fasdfaaaaaaaaaaaaaaasdfasdfasdfasdffasdfaaaaaaaaaaaaaaasdfasdfasdfasdffasdfaaaaaaaaaaaaaaasdfasdfasdfasdffasdfaaaaaaaaaaaaaaasdfasdfasdfasdf', '2020-12-09 17:44:50');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `board`
--
ALTER TABLE `board`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `board`
--
ALTER TABLE `board`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
