-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Хост: sql3.freemysqlhosting.net
-- Время создания: Мар 14 2015 г., 20:21
-- Версия сервера: 5.5.40-0ubuntu0.12.04.1
-- Версия PHP: 5.3.28

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `sql369955`
--

-- --------------------------------------------------------

--
-- Структура таблицы `child`
--

CREATE TABLE IF NOT EXISTS `child` (
  `child_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) COLLATE utf8_bin NOT NULL,
  `last_name` varchar(100) COLLATE utf8_bin NOT NULL,
  `surname` varchar(100) COLLATE utf8_bin NOT NULL,
  `birth_date` date NOT NULL,
  `time_birth` time NOT NULL,
  `birth_place` varchar(255) COLLATE utf8_bin NOT NULL,
  `sex` tinyint(4) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `child`
--

INSERT INTO `child` (`child_id`, `user_id`, `first_name`, `last_name`, `surname`, `birth_date`, `time_birth`, `birth_place`, `sex`) VALUES
(1, 1, 'Кира', 'Ковальчук', 'Алексеевна', '2014-07-10', '00:00:00', 'Севастополь, Россия', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `child_feeding_up`
--

CREATE TABLE IF NOT EXISTS `child_feeding_up` (
  `child_feeding_up_id` int(11) NOT NULL,
  `child_id` int(11) NOT NULL,
  `dct_age_id` int(11) NOT NULL,
  `dct_feeding_up_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Структура таблицы `child_first_time`
--

CREATE TABLE IF NOT EXISTS `child_first_time` (
  `child_progress_id` int(11) NOT NULL,
  `child_id` int(11) NOT NULL,
  `dct_progress_id` int(11) NOT NULL,
  `event_date` date NOT NULL,
  `event_age_month` int(11) NOT NULL,
  `event_age_days` int(11) NOT NULL,
  `notes` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Структура таблицы `child_tooth`
--

CREATE TABLE IF NOT EXISTS `child_tooth` (
  `child_tooth_id` int(11) NOT NULL,
  `child_id` int(11) NOT NULL,
  `dct_tooth_id` int(11) NOT NULL,
  `tooth_order` int(11) NOT NULL,
  `tooth_date` varchar(10) COLLATE utf8_bin NOT NULL,
  `tooth_age_months` int(11) NOT NULL,
  `tooth_age_days` int(11) NOT NULL,
  `notes` text COLLATE utf8_bin
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `child_tooth`
--

INSERT INTO `child_tooth` (`child_tooth_id`, `child_id`, `dct_tooth_id`, `tooth_order`, `tooth_date`, `tooth_age_months`, `tooth_age_days`, `notes`) VALUES
(1, 1, 1, 6, '12.12.2014', 5, 2, 'АААААААААААААА зубик!!!'),
(2, 1, 2, 2, '14.02.2015', 5, 13, ''),
(3, 1, 12, 3, '19.02.2015', 5, 18, ''),
(4, 1, 6, 4, '19.03.2015', 8, 9, NULL),
(5, 1, 4, 5, '08.03.2015', 7, 26, NULL),
(6, 1, 15, 7, '13.03.2015', 8, 3, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `ip_address` varchar(45) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `user_agent` varchar(120) COLLATE utf8_bin NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Структура таблицы `dct_age`
--

CREATE TABLE IF NOT EXISTS `dct_age` (
  `dct_age_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `type` int(11) NOT NULL,
  `position` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `dct_age`
--

INSERT INTO `dct_age` (`dct_age_id`, `name`, `type`, `position`) VALUES
(1, '7 месяцев', 1, 7);

-- --------------------------------------------------------

--
-- Структура таблицы `dct_doctor`
--

CREATE TABLE IF NOT EXISTS `dct_doctor` (
  `dct_doctor_id` int(11) NOT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `dct_doctor`
--

INSERT INTO `dct_doctor` (`dct_doctor_id`, `enable`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `dct_doctor_loc`
--

CREATE TABLE IF NOT EXISTS `dct_doctor_loc` (
  `dct_doctor_loc_id` int(11) NOT NULL AUTO_INCREMENT,
  `dct_doctor_id` int(11) NOT NULL,
  `text` varchar(250) NOT NULL,
  `dct_language_id` int(11) NOT NULL,
  PRIMARY KEY (`dct_doctor_loc_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Дамп данных таблицы `dct_doctor_loc`
--

INSERT INTO `dct_doctor_loc` (`dct_doctor_loc_id`, `dct_doctor_id`, `text`, `dct_language_id`) VALUES
(1, 1, 'педиатр', 1),
(2, 2, 'невролог', 1),
(3, 3, 'ортопед', 1),
(4, 4, 'хирург', 1),
(5, 5, 'окулист', 1),
(6, 6, 'ЛОР', 1),
(7, 7, 'стоматолог', 1),
(8, 8, 'кардиолог', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `dct_feeding_in_type`
--

CREATE TABLE IF NOT EXISTS `dct_feeding_in_type` (
  `dct_feeding_in_type_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Структура таблицы `dct_language`
--

CREATE TABLE IF NOT EXISTS `dct_language` (
  `dct_language_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8 NOT NULL,
  `prefix` varchar(5) NOT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`dct_language_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `dct_language`
--

INSERT INTO `dct_language` (`dct_language_id`, `name`, `prefix`, `enable`) VALUES
(1, 'Русский', 'ru', 1),
(2, 'Украинский', 'ua', 1),
(3, 'Английский', 'en', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `dct_progress`
--

CREATE TABLE IF NOT EXISTS `dct_progress` (
  `dct_progress_id` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `dct_progress`
--

INSERT INTO `dct_progress` (`dct_progress_id`, `position`, `enable`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 7, 1),
(8, 8, 1),
(9, 9, 1),
(10, 10, 1),
(11, 11, 1),
(12, 12, 1),
(13, 13, 1),
(14, 14, 1),
(15, 15, 1),
(16, 16, 1),
(17, 17, 1),
(18, 18, 1),
(19, 19, 1),
(20, 20, 1),
(21, 21, 1),
(22, 22, 1),
(23, 23, 1),
(24, 24, 1),
(25, 25, 1),
(26, 26, 1),
(27, 27, 1),
(28, 28, 1),
(29, 29, 1),
(30, 30, 1),
(31, 31, 1),
(32, 32, 1),
(33, 33, 1),
(34, 34, 1),
(35, 35, 1),
(36, 36, 1),
(37, 37, 1),
(38, 38, 1),
(39, 39, 1),
(40, 40, 1),
(41, 41, 1),
(42, 42, 1),
(43, 43, 1),
(44, 44, 1),
(45, 45, 1),
(46, 46, 1),
(47, 47, 1),
(48, 48, 1),
(49, 49, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `dct_progress_loc`
--

CREATE TABLE IF NOT EXISTS `dct_progress_loc` (
  `dct_progress_loc_id` int(11) NOT NULL AUTO_INCREMENT,
  `dct_progress_id` int(11) NOT NULL,
  `text` varchar(250) NOT NULL,
  `dct_language_id` int(11) NOT NULL,
  PRIMARY KEY (`dct_progress_loc_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=50 ;

--
-- Дамп данных таблицы `dct_progress_loc`
--

INSERT INTO `dct_progress_loc` (`dct_progress_loc_id`, `dct_progress_id`, `text`, `dct_language_id`) VALUES
(1, 1, 'фиксировать взгляд на неподвижном предмете', 1),
(2, 2, 'следить за движущимся предметом', 1),
(3, 3, 'прислушиваться к голосу, звукам', 1),
(4, 4, 'улыбаться в ответ', 1),
(5, 5, 'держать голову при поддержке вертикально', 1),
(6, 6, 'рассматривать ручки', 1),
(7, 7, 'поворачиваться в сторону звука', 1),
(8, 8, 'удерживать голову лежа на животе', 1),
(9, 9, 'подносить ручки ко рту', 1),
(10, 10, 'хихикать, смееться', 1),
(11, 11, 'удерживать предмет в руке', 1),
(12, 12, 'упираться на ручки лежа на животе', 1),
(13, 13, 'придерживать рукой бутылочку или грудь', 1),
(14, 14, 'тянуться и захватывать предмет', 1),
(15, 15, 'различать людей по голосу', 1),
(16, 16, 'перекладывать предмет из руки в руку', 1),
(17, 17, 'переворачиваться со спины на живот', 1),
(18, 18, 'есть с ложки', 1),
(19, 19, 'захватывать руками стопы', 1),
(20, 20, 'ползать на животе', 1),
(21, 21, 'сидеть с поддержкой', 1),
(22, 22, 'переворачиваться с живота на спину', 1),
(23, 23, 'стучать игрушками', 1),
(24, 24, 'реагировать на свое имя', 1),
(25, 25, 'распознавать "своих" и "чужих"', 1),
(26, 26, 'сидеть с опорой на руки', 1),
(27, 27, 'стоять при поддержке под мышки', 1),
(28, 28, 'изменять интонацию голоса', 1),
(29, 29, 'сидеть без опоры', 1),
(30, 30, 'вставать на четвереньки', 1),
(31, 31, 'самостоятельно садиться', 1),
(32, 32, 'стоять на ногах, держась за опору', 1),
(33, 33, 'ползать на ладошках и коленях', 1),
(34, 34, 'самостоятельно пить из чашки', 1),
(35, 35, 'понимать запрещающие слова', 1),
(36, 36, 'дотягиваться до предмета сидя', 1),
(37, 37, 'садиться из положения на четвереньках', 1),
(38, 38, 'вставать на ноги, держась за опору', 1),
(39, 39, 'самостоятельно устойчиво стоять', 1),
(40, 40, 'делать шаги, держась за опору', 1),
(41, 41, 'брать мелкие предметы двумя пальцами', 1),
(42, 42, 'садиться из положения стоя, держась за опору', 1),
(43, 43, 'произносить осмысленные слова', 1),
(44, 44, 'самостоятельно ходить', 1),
(45, 45, 'танцевать под музыку', 1),
(46, 46, 'сидеть на корточках', 1),
(47, 47, 'стоять на цыпочках', 1),
(48, 48, 'разбирать и собирать предметы', 1),
(49, 49, 'самостоятельно есть ложкой', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `dct_solid_food`
--

CREATE TABLE IF NOT EXISTS `dct_solid_food` (
  `dct_solid_food_id` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `dct_solid_food`
--

INSERT INTO `dct_solid_food` (`dct_solid_food_id`, `position`, `enable`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 7, 1),
(8, 8, 1),
(9, 9, 1),
(10, 10, 1),
(11, 11, 1),
(12, 12, 1),
(13, 13, 1),
(14, 14, 1),
(15, 15, 1),
(16, 16, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `dct_solid_food_loc`
--

CREATE TABLE IF NOT EXISTS `dct_solid_food_loc` (
  `dct_solid_food_loc_id` int(11) NOT NULL AUTO_INCREMENT,
  `dct_solid_food_id` int(11) NOT NULL,
  `text` varchar(250) NOT NULL,
  `dct_language_id` int(11) NOT NULL,
  PRIMARY KEY (`dct_solid_food_loc_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Дамп данных таблицы `dct_solid_food_loc`
--

INSERT INTO `dct_solid_food_loc` (`dct_solid_food_loc_id`, `dct_solid_food_id`, `text`, `dct_language_id`) VALUES
(1, 1, 'сок', 1),
(2, 2, 'овощное пюре', 1),
(3, 3, 'фруктовое пюре', 1),
(4, 4, 'безмолочная крупяная каша', 1),
(5, 5, 'безмолочная злаковая каша', 1),
(6, 6, 'молочная крупяная каша', 1),
(7, 7, 'молочная злаковая каша', 1),
(8, 8, 'творог', 1),
(9, 9, 'кисломолочные продукты', 1),
(10, 10, 'яичный желток', 1),
(11, 11, 'мясное пюре', 1),
(12, 12, 'рыбное пюре', 1),
(13, 13, 'растительное масло', 1),
(14, 14, 'сливочное масло', 1),
(15, 15, 'пшеничный хлеб', 1),
(16, 16, 'сухари, печенье', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `dct_tooth`
--

CREATE TABLE IF NOT EXISTS `dct_tooth` (
  `dct_tooth_id` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `dct_tooth`
--

INSERT INTO `dct_tooth` (`dct_tooth_id`, `position`, `enable`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 7, 1),
(8, 8, 1),
(9, 9, 1),
(10, 10, 1),
(11, 11, 1),
(12, 12, 1),
(13, 13, 1),
(14, 14, 1),
(15, 15, 1),
(16, 16, 1),
(17, 17, 1),
(18, 18, 1),
(19, 19, 1),
(20, 20, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `dct_tooth_loc`
--

CREATE TABLE IF NOT EXISTS `dct_tooth_loc` (
  `dtc_tooth_loc_id` int(11) NOT NULL AUTO_INCREMENT,
  `dct_tooth_id` int(11) NOT NULL,
  `text` varchar(250) NOT NULL,
  `dct_language_id` int(11) NOT NULL,
  PRIMARY KEY (`dtc_tooth_loc_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Дамп данных таблицы `dct_tooth_loc`
--

INSERT INTO `dct_tooth_loc` (`dtc_tooth_loc_id`, `dct_tooth_id`, `text`, `dct_language_id`) VALUES
(1, 1, 'Центральный резец (верхний правый)', 1),
(2, 2, 'Центральный резец (верхний левый)', 1),
(3, 3, 'Боковой резец (верхний правый)', 1),
(4, 4, 'Боковой резец (верхний левый)', 1),
(5, 5, 'Клык (верхний правый)', 1),
(6, 6, 'Клык (верхний левый)', 1),
(7, 7, 'Первый моляр (верхний правый)', 1),
(8, 8, 'Первый моляр (верхний левый)', 1),
(9, 9, 'Второй моляр (верхний правый)', 1),
(10, 10, 'Второй моляр (верхний левый)', 1),
(11, 11, 'Центральный резец (нижний правый)', 1),
(12, 12, 'Центральный резец (нижний левый)', 1),
(13, 13, 'Боковой резец (нижний правый)', 1),
(14, 14, 'Боковой резец (нижний левый)', 1),
(15, 15, 'Клык (нижний правый)', 1),
(16, 16, 'Клык (нижний левый)', 1),
(17, 17, 'Первый моляр (нижний правый)', 1),
(18, 18, 'Первый моляр (нижний левый)', 1),
(19, 19, 'Второй моляр (нижний правый)', 1),
(20, 20, 'Второй моляр (нижний левый)', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `dct_ui`
--

CREATE TABLE IF NOT EXISTS `dct_ui` (
  `dct_ui_id` int(11) NOT NULL AUTO_INCREMENT,
  `code` int(11) NOT NULL,
  `dct_ui_types_id` int(11) NOT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`dct_ui_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Дамп данных таблицы `dct_ui`
--

INSERT INTO `dct_ui` (`dct_ui_id`, `code`, `dct_ui_types_id`, `enable`) VALUES
(1, 1000001, 0, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `dct_ui_loc`
--

CREATE TABLE IF NOT EXISTS `dct_ui_loc` (
  `dct_ui_loc_id` int(11) NOT NULL AUTO_INCREMENT,
  `dct_ui_id` int(11) NOT NULL,
  `text` varchar(250) NOT NULL,
  `dct_language_id` int(11) NOT NULL,
  PRIMARY KEY (`dct_ui_loc_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `dct_ui_types`
--

CREATE TABLE IF NOT EXISTS `dct_ui_types` (
  `dct_ui_types_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`dct_ui_types_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `dct_ui_types`
--

INSERT INTO `dct_ui_types` (`dct_ui_types_id`, `name`) VALUES
(1, 'Label'),
(2, 'Input placeholder'),
(3, 'Column header'),
(4, 'Title'),
(5, 'Button'),
(6, 'Error message'),
(7, 'Validation message');

-- --------------------------------------------------------

--
-- Структура таблицы `dct_vaccination`
--

CREATE TABLE IF NOT EXISTS `dct_vaccination` (
  `dct_vaccination_id` int(11) NOT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT '1',
  `position` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `dct_vaccination`
--

INSERT INTO `dct_vaccination` (`dct_vaccination_id`, `enable`, `position`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 1, 8),
(9, 1, 9),
(10, 1, 10),
(11, 1, 11),
(12, 1, 12),
(13, 1, 13),
(14, 1, 14),
(15, 1, 15),
(16, 1, 16);

-- --------------------------------------------------------

--
-- Структура таблицы `dct_vaccination_loc`
--

CREATE TABLE IF NOT EXISTS `dct_vaccination_loc` (
  `dct_vaccination_loc_id` int(11) NOT NULL AUTO_INCREMENT,
  `dct_vaccination_id` int(11) NOT NULL,
  `text` varchar(250) NOT NULL,
  `genitive_text` varchar(250) NOT NULL,
  `dct_language_id` int(11) NOT NULL,
  PRIMARY KEY (`dct_vaccination_loc_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- Дамп данных таблицы `dct_vaccination_loc`
--

INSERT INTO `dct_vaccination_loc` (`dct_vaccination_loc_id`, `dct_vaccination_id`, `text`, `genitive_text`, `dct_language_id`) VALUES
(26, 10, 'паротит', 'паротита', 1),
(25, 9, 'краснуха', 'краснухи', 1),
(24, 8, 'корь', 'кори', 1),
(23, 7, 'гемофильная инфекция типа b', 'гемофильной инфекции типа b', 1),
(22, 6, 'полиомиелит', 'полиомиелита', 1),
(21, 5, 'столбняк', 'столбняка', 1),
(20, 4, 'коклюш', 'коклюша', 1),
(19, 3, 'дифтерия', 'дифтерии', 1),
(18, 2, 'туберкулез', 'туберкулеза', 1),
(17, 1, 'гепатит В', 'гепатита В', 1),
(27, 11, 'пневмококковая инфекция', 'пневмококковой инфекции', 1),
(28, 12, 'ветряная оспа', 'ветряной оспы', 1),
(29, 13, 'вирусный гепатит А', 'вирусного гепатита А', 1),
(30, 14, 'вирус папилломы человека', 'вируса папилломы человека', 1),
(31, 15, 'ротовирусная инфекция', 'ротовирусной инфекции', 1),
(32, 16, 'грипп', 'гриппа', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `diary`
--

CREATE TABLE IF NOT EXISTS `diary` (
  `diary_id` int(11) NOT NULL,
  `child_id` int(11) NOT NULL,
  `dct_age_id` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `diary`
--

INSERT INTO `diary` (`diary_id`, `child_id`, `dct_age_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `diary_common`
--

CREATE TABLE IF NOT EXISTS `diary_common` (
  `diary_common_id` int(11) NOT NULL,
  `diary_id` int(11) NOT NULL,
  `photo` varchar(255) COLLATE utf8_bin NOT NULL,
  `weight` decimal(5,3) NOT NULL,
  `height` int(11) NOT NULL,
  `head_circumference` int(11) NOT NULL,
  `chest_circumference` int(11) NOT NULL,
  `other` varchar(255) COLLATE utf8_bin NOT NULL,
  `notes` text COLLATE utf8_bin NOT NULL,
  `spelling` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `diary_common`
--

INSERT INTO `diary_common` (`diary_common_id`, `diary_id`, `photo`, `weight`, `height`, `head_circumference`, `chest_circumference`, `other`, `notes`, `spelling`) VALUES
(1, 1, 'u1ch1.png', '8.400', 69, 0, 0, '', 'Some notes', 'Bla-bla-bla');

-- --------------------------------------------------------

--
-- Структура таблицы `diary_feeding`
--

CREATE TABLE IF NOT EXISTS `diary_feeding` (
  `diary_feeding_id` int(11) NOT NULL,
  `diary_id` int(11) NOT NULL,
  `feeding_in` tinyint(1) NOT NULL DEFAULT '0',
  `dct_feeding_in_type_id` int(11) NOT NULL,
  `feeding_in_count` int(11) NOT NULL,
  `feeding_in_duration` time NOT NULL,
  `feeding_up` tinyint(1) NOT NULL DEFAULT '0',
  `feeding_up_count` int(11) NOT NULL,
  `notes` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Структура таблицы `diary_feeding_up`
--

CREATE TABLE IF NOT EXISTS `diary_feeding_up` (
  `diary_feeding_up_id` bigint(20) NOT NULL,
  `diary_feeding_id` int(11) NOT NULL,
  `dct_feeding_up` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Структура таблицы `diary_first_time`
--

CREATE TABLE IF NOT EXISTS `diary_first_time` (
  `diary_first_time_id` bigint(20) NOT NULL,
  `child_id` int(11) NOT NULL,
  `dct_first_time_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `first_time_age_month` int(11) NOT NULL,
  `first_time_age_days` int(11) NOT NULL,
  `notes` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Структура таблицы `diary_nursing`
--

CREATE TABLE IF NOT EXISTS `diary_nursing` (
  `diary_nursing_id` bigint(20) NOT NULL,
  `diary_id` bigint(20) NOT NULL,
  `sleep_duration` time NOT NULL,
  `sleep_count` int(11) NOT NULL,
  `sleep_notes` text COLLATE utf8_bin NOT NULL,
  `walk_duration` time NOT NULL,
  `walk_average_temperature` int(11) NOT NULL,
  `airbath_temperature` int(11) NOT NULL,
  `airbath_count` int(11) NOT NULL,
  `airbath_duration` time NOT NULL,
  `bath_temperature` int(11) NOT NULL,
  `bath_duration` time NOT NULL,
  `douche_temperature` int(11) NOT NULL,
  `massage_count` int(11) NOT NULL,
  `massage_duration` time NOT NULL,
  `massage_notes` text COLLATE utf8_bin NOT NULL,
  `gymnastics_count` int(11) NOT NULL,
  `gymnastics_duration` time NOT NULL,
  `gymnastics_notes` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `menu_id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_bin NOT NULL,
  `url` varchar(100) COLLATE utf8_bin NOT NULL,
  `parent` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`menu_id`, `title`, `url`, `parent`, `position`, `enable`) VALUES
(1, 'Главная', '', 0, 0, 1),
(2, 'Статистика', 'stat', 0, 1, 1),
(3, 'Рецепты', 'cookbook', 0, 3, 1),
(4, 'О нас', 'about', 0, 4, 1),
(5, 'Кашки', 'cookbook/kasha', 3, 0, 1),
(6, 'Пюре', 'cookbook/puree', 3, 1, 1),
(7, 'Дневник малыша', 'diary', 0, 2, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `page_id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_bin NOT NULL,
  `header` varchar(100) COLLATE utf8_bin NOT NULL,
  `description` varchar(255) COLLATE utf8_bin NOT NULL,
  `keywords` varchar(100) COLLATE utf8_bin NOT NULL,
  `seo_url` varchar(100) COLLATE utf8_bin NOT NULL,
  `content` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`user_id`, `login`, `password`, `email`, `enable`) VALUES
(1, 'qw', 'qw', 'qw@qw.er', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
