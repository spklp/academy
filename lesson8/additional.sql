-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Апр 08 2019 г., 14:33
-- Версия сервера: 10.1.37-MariaDB-0+deb9u1
-- Версия PHP: 7.1.27-1+0~20190307202204.14+stretch~1.gbp7163d5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ryaposovsergey_library`
--

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `author` varchar(30) NOT NULL,
  `published` year(4) NOT NULL,
  `rating` int(11) NOT NULL,
  `color` varchar(30) DEFAULT 'красный',
  `pages` int(11) DEFAULT NULL,
  `readed` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `books`
--

INSERT INTO `books` (`id`, `name`, `author`, `published`, `rating`, `color`, `pages`, `readed`) VALUES
(1, 'Плоский мир', 'Терри Пратчетт', 1983, 5, 'серый', 1403, 1),
(2, 'Ведьмак', 'Анджей Сапковский', 1986, 5, 'черный', 576, 1),
(3, 'Страна Чудес без тормозов и Ко', 'Харуки Мураками', 1985, 4, 'белый', 874, 1),
(4, 'Сумерки', 'Дмитрий Глуховский', 2007, 5, 'коричневый', 659, 1),
(5, 'МЕТРО 2033: Питер', 'Шумин Врочер', 2010, 4, 'черный', 834, 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


// команды для дз

SELECT * FROM books
ALTER table books add (collor varchar(30) default 'красный' not null, readed boolean default false not null,
 pages varchar(30) not null)

UPDATE books SET color = 'серый', pages = 1403, readed = true WHERE id = 1
UPDATE books SET color = 'черный', pages = 576, readed = true WHERE id = 2
UPDATE books SET color = 'белый', pages = 874, readed = true WHERE id = 3
UPDATE books SET color = 'коричневый', pages = 659, readed = true WHERE id = 4
UPDATE books SET color = 'черный', pages = 834, readed = true WHERE id = 5