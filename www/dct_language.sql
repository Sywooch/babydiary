-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Апр 18 2015 г., 20:16
-- Версия сервера: 5.6.21
-- Версия PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `babydiary`
--

-- --------------------------------------------------------

--
-- Структура таблицы `dct_language`
--

CREATE TABLE IF NOT EXISTS `dct_language` (
`dct_language_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `url` varchar(10) NOT NULL,
  `locale` varchar(10) NOT NULL,
  `default` tinyint(1) NOT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `dct_language`
--

INSERT INTO `dct_language` (`dct_language_id`, `name`, `url`, `locale`, `default`, `enable`) VALUES
(1, 'Русский', 'ru', 'ru-RU', 1, 1),
(2, 'Украинский', 'ua', 'ua-UA', 0, 1),
(3, 'Английский', 'en', 'en-EN', 0, 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `dct_language`
--
ALTER TABLE `dct_language`
 ADD PRIMARY KEY (`dct_language_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `dct_language`
--
ALTER TABLE `dct_language`
MODIFY `dct_language_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
