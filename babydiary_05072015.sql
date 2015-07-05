-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июл 05 2015 г., 22:14
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
-- Структура таблицы `child`
--

DROP TABLE IF EXISTS `child`;
CREATE TABLE IF NOT EXISTS `child` (
  `child_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `last_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `surname` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `birth_date` date NOT NULL,
  `time_birth` time NOT NULL,
  `birth_place` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `sex` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `child`
--

INSERT INTO `child` (`child_id`, `user_id`, `first_name`, `last_name`, `surname`, `birth_date`, `time_birth`, `birth_place`, `sex`) VALUES
(1, 1, 'Кира', 'Ковальчук', 'Алексеевна', '2014-07-10', '00:00:00', 'Севастополь, Россия', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `child_progress`
--

DROP TABLE IF EXISTS `child_progress`;
CREATE TABLE IF NOT EXISTS `child_progress` (
  `child_progress_id` int(11) NOT NULL,
  `child_id` int(11) NOT NULL,
  `dct_progress_id` int(11) NOT NULL,
  `event_date` date NOT NULL,
  `event_age_month` int(11) NOT NULL,
  `event_age_days` int(11) NOT NULL,
  `notes` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `child_solid_food`
--

DROP TABLE IF EXISTS `child_solid_food`;
CREATE TABLE IF NOT EXISTS `child_solid_food` (
  `child_solid_food_id` int(11) NOT NULL,
  `child_id` int(11) NOT NULL,
  `dct_age_id` int(11) NOT NULL,
  `dct_solid_food_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `child_tooth`
--

DROP TABLE IF EXISTS `child_tooth`;
CREATE TABLE IF NOT EXISTS `child_tooth` (
  `child_tooth_id` int(11) NOT NULL,
  `child_id` int(11) NOT NULL,
  `dct_tooth_id` int(11) NOT NULL,
  `tooth_order` int(11) NOT NULL,
  `tooth_date` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `tooth_age_months` int(11) NOT NULL,
  `tooth_age_days` int(11) NOT NULL,
  `notes` text CHARACTER SET utf8 COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Структура таблицы `dct_age`
--

DROP TABLE IF EXISTS `dct_age`;
CREATE TABLE IF NOT EXISTS `dct_age` (
  `dct_age_id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `dct_age`
--

INSERT INTO `dct_age` (`dct_age_id`, `type`, `position`, `enable`) VALUES
(1, 1, 7, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `dct_age_loc`
--

DROP TABLE IF EXISTS `dct_age_loc`;
CREATE TABLE IF NOT EXISTS `dct_age_loc` (
`dct_age_loc_id` int(11) NOT NULL,
  `dct_age_id` int(11) NOT NULL,
  `dct_language_id` int(11) NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `dct_age_loc`
--

INSERT INTO `dct_age_loc` (`dct_age_loc_id`, `dct_age_id`, `dct_language_id`, `text`) VALUES
(1, 1, 1, '1 месяц');

-- --------------------------------------------------------

--
-- Структура таблицы `dct_doctor`
--

DROP TABLE IF EXISTS `dct_doctor`;
CREATE TABLE IF NOT EXISTS `dct_doctor` (
`dct_doctor_id` int(11) NOT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

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
(8, 1),
(12, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `dct_doctor_loc`
--

DROP TABLE IF EXISTS `dct_doctor_loc`;
CREATE TABLE IF NOT EXISTS `dct_doctor_loc` (
`dct_doctor_loc_id` int(11) NOT NULL,
  `dct_doctor_id` int(11) NOT NULL,
  `text` varchar(250) NOT NULL,
  `dct_language_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

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
(8, 8, 'кардиолог', 1),
(9, 1, 'pediatrician', 3),
(10, 1, 'педіатр', 2),
(11, 12, 'Тест', 1),
(12, 12, 'Тэст', 2),
(13, 12, 'Test', 3),
(14, 2, 'невролог', 1),
(15, 2, 'неврипитолог', 2),
(16, 2, 'невролог', 1),
(17, 2, 'неврилог', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `dct_feeding_type`
--

DROP TABLE IF EXISTS `dct_feeding_type`;
CREATE TABLE IF NOT EXISTS `dct_feeding_type` (
  `dct_feeding_type_id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `dct_language`
--

DROP TABLE IF EXISTS `dct_language`;
CREATE TABLE IF NOT EXISTS `dct_language` (
`dct_language_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `url` varchar(10) NOT NULL,
  `locale` varchar(10) NOT NULL,
  `default` tinyint(1) NOT NULL DEFAULT '0',
  `enable` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `dct_language`
--

INSERT INTO `dct_language` (`dct_language_id`, `name`, `url`, `locale`, `default`, `enable`) VALUES
(1, 'Русский', 'ru', 'ru-RU', 1, 1),
(2, 'Украинский', 'ua', 'ua-UA', 0, 1),
(3, 'Английский', 'en', 'en-EN', 0, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `dct_pages`
--

DROP TABLE IF EXISTS `dct_pages`;
CREATE TABLE IF NOT EXISTS `dct_pages` (
  `dct_page_id` int(11) NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `header` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `keywords` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `seo_url` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT '1',
  `main_menu` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `dct_progress`
--

DROP TABLE IF EXISTS `dct_progress`;
CREATE TABLE IF NOT EXISTS `dct_progress` (
  `dct_progress_id` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

DROP TABLE IF EXISTS `dct_progress_loc`;
CREATE TABLE IF NOT EXISTS `dct_progress_loc` (
`dct_progress_loc_id` int(11) NOT NULL,
  `dct_progress_id` int(11) NOT NULL,
  `text` varchar(250) NOT NULL,
  `dct_language_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

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

DROP TABLE IF EXISTS `dct_solid_food`;
CREATE TABLE IF NOT EXISTS `dct_solid_food` (
  `dct_solid_food_id` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

DROP TABLE IF EXISTS `dct_solid_food_loc`;
CREATE TABLE IF NOT EXISTS `dct_solid_food_loc` (
`dct_solid_food_loc_id` int(11) NOT NULL,
  `dct_solid_food_id` int(11) NOT NULL,
  `text` varchar(250) NOT NULL,
  `dct_language_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

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

DROP TABLE IF EXISTS `dct_tooth`;
CREATE TABLE IF NOT EXISTS `dct_tooth` (
  `dct_tooth_id` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

DROP TABLE IF EXISTS `dct_tooth_loc`;
CREATE TABLE IF NOT EXISTS `dct_tooth_loc` (
`dtc_tooth_loc_id` int(11) NOT NULL,
  `dct_tooth_id` int(11) NOT NULL,
  `text` varchar(250) NOT NULL,
  `dct_language_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

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

DROP TABLE IF EXISTS `dct_ui`;
CREATE TABLE IF NOT EXISTS `dct_ui` (
`dct_ui_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dct_ui_types_id` int(11) NOT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `dct_ui`
--

INSERT INTO `dct_ui` (`dct_ui_id`, `name`, `dct_ui_types_id`, `enable`) VALUES
(1, '1000001', 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `dct_ui_types`
--

DROP TABLE IF EXISTS `dct_ui_types`;
CREATE TABLE IF NOT EXISTS `dct_ui_types` (
`dct_ui_types_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

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

DROP TABLE IF EXISTS `dct_vaccination`;
CREATE TABLE IF NOT EXISTS `dct_vaccination` (
  `dct_vaccination_id` int(11) NOT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT '1',
  `position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

DROP TABLE IF EXISTS `dct_vaccination_loc`;
CREATE TABLE IF NOT EXISTS `dct_vaccination_loc` (
`dct_vaccination_loc_id` int(11) NOT NULL,
  `dct_vaccination_id` int(11) NOT NULL,
  `text` varchar(250) NOT NULL,
  `genitive_text` varchar(250) NOT NULL,
  `dct_language_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `dct_vaccination_loc`
--

INSERT INTO `dct_vaccination_loc` (`dct_vaccination_loc_id`, `dct_vaccination_id`, `text`, `genitive_text`, `dct_language_id`) VALUES
(17, 1, 'гепатит В', 'гепатита В', 1),
(18, 2, 'туберкулез', 'туберкулеза', 1),
(19, 3, 'дифтерия', 'дифтерии', 1),
(20, 4, 'коклюш', 'коклюша', 1),
(21, 5, 'столбняк', 'столбняка', 1),
(22, 6, 'полиомиелит', 'полиомиелита', 1),
(23, 7, 'гемофильная инфекция типа b', 'гемофильной инфекции типа b', 1),
(24, 8, 'корь', 'кори', 1),
(25, 9, 'краснуха', 'краснухи', 1),
(26, 10, 'паротит', 'паротита', 1),
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

DROP TABLE IF EXISTS `diary`;
CREATE TABLE IF NOT EXISTS `diary` (
  `diary_id` int(11) NOT NULL,
  `child_id` int(11) NOT NULL,
  `dct_age_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `diary`
--

INSERT INTO `diary` (`diary_id`, `child_id`, `dct_age_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `diary_common`
--

DROP TABLE IF EXISTS `diary_common`;
CREATE TABLE IF NOT EXISTS `diary_common` (
  `diary_common_id` int(11) NOT NULL,
  `diary_id` int(11) NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `weight` decimal(5,3) NOT NULL,
  `height` int(11) NOT NULL,
  `head_circumference` int(11) NOT NULL,
  `chest_circumference` int(11) NOT NULL,
  `other` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `notes` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `spelling` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `diary_common`
--

INSERT INTO `diary_common` (`diary_common_id`, `diary_id`, `photo`, `weight`, `height`, `head_circumference`, `chest_circumference`, `other`, `notes`, `spelling`) VALUES
(1, 1, 'u1ch1.png', '8.400', 69, 0, 0, '', 'Some notes', 'Bla-bla-bla');

-- --------------------------------------------------------

--
-- Структура таблицы `diary_doctor`
--

DROP TABLE IF EXISTS `diary_doctor`;
CREATE TABLE IF NOT EXISTS `diary_doctor` (
`diary_doctor_id` int(11) NOT NULL,
  `diary_id` int(11) NOT NULL,
  `dct_doctor_id` int(11) NOT NULL,
  `notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `diary_feeding`
--

DROP TABLE IF EXISTS `diary_feeding`;
CREATE TABLE IF NOT EXISTS `diary_feeding` (
  `diary_feeding_id` int(11) NOT NULL,
  `diary_id` int(11) NOT NULL,
  `feeding` tinyint(1) NOT NULL DEFAULT '0',
  `dct_feeding_type_id` int(11) NOT NULL,
  `feeding_count` int(11) NOT NULL,
  `feeding_duration` time NOT NULL,
  `solid_food` tinyint(1) NOT NULL DEFAULT '0',
  `solid_food_count` int(11) NOT NULL,
  `notes` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `diary_nursing`
--

DROP TABLE IF EXISTS `diary_nursing`;
CREATE TABLE IF NOT EXISTS `diary_nursing` (
  `diary_nursing_id` bigint(20) NOT NULL,
  `diary_id` int(11) NOT NULL,
  `sleep_duration` time NOT NULL,
  `sleep_count` int(11) NOT NULL,
  `sleep_notes` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
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
  `massage_notes` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `gymnastics_count` int(11) NOT NULL,
  `gymnastics_duration` time NOT NULL,
  `gymnastics_notes` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `diary_vaccination`
--

DROP TABLE IF EXISTS `diary_vaccination`;
CREATE TABLE IF NOT EXISTS `diary_vaccination` (
`diary_vaccination_id` int(11) NOT NULL,
  `diary_id` int(11) NOT NULL,
  `dct_vaccination_id` int(11) NOT NULL,
  `notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
`user_id` int(11) NOT NULL,
  `login` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`user_id`, `login`, `password`, `email`, `enable`) VALUES
(1, 'qw', 'qw', 'qw@qw.er', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `child`
--
ALTER TABLE `child`
 ADD PRIMARY KEY (`child_id`);

--
-- Индексы таблицы `child_progress`
--
ALTER TABLE `child_progress`
 ADD PRIMARY KEY (`child_progress_id`), ADD KEY `child_id` (`child_id`), ADD KEY `dct_progress_id` (`dct_progress_id`);

--
-- Индексы таблицы `child_solid_food`
--
ALTER TABLE `child_solid_food`
 ADD PRIMARY KEY (`child_solid_food_id`), ADD KEY `child_id` (`child_id`), ADD KEY `dct_age_id` (`dct_age_id`), ADD KEY `dct_solid_food_id` (`dct_solid_food_id`);

--
-- Индексы таблицы `child_tooth`
--
ALTER TABLE `child_tooth`
 ADD PRIMARY KEY (`child_tooth_id`), ADD KEY `child_id` (`child_id`), ADD KEY `dct_tooth_id` (`dct_tooth_id`);

--
-- Индексы таблицы `dct_age`
--
ALTER TABLE `dct_age`
 ADD PRIMARY KEY (`dct_age_id`);

--
-- Индексы таблицы `dct_age_loc`
--
ALTER TABLE `dct_age_loc`
 ADD PRIMARY KEY (`dct_age_loc_id`), ADD KEY `dct_language_id` (`dct_language_id`), ADD KEY `dct_age_id` (`dct_age_id`);

--
-- Индексы таблицы `dct_doctor`
--
ALTER TABLE `dct_doctor`
 ADD PRIMARY KEY (`dct_doctor_id`);

--
-- Индексы таблицы `dct_doctor_loc`
--
ALTER TABLE `dct_doctor_loc`
 ADD PRIMARY KEY (`dct_doctor_loc_id`), ADD KEY `dct_language_id` (`dct_language_id`), ADD KEY `dct_doctor_id` (`dct_doctor_id`);

--
-- Индексы таблицы `dct_feeding_type`
--
ALTER TABLE `dct_feeding_type`
 ADD PRIMARY KEY (`dct_feeding_type_id`);

--
-- Индексы таблицы `dct_language`
--
ALTER TABLE `dct_language`
 ADD PRIMARY KEY (`dct_language_id`);

--
-- Индексы таблицы `dct_pages`
--
ALTER TABLE `dct_pages`
 ADD PRIMARY KEY (`dct_page_id`);

--
-- Индексы таблицы `dct_progress`
--
ALTER TABLE `dct_progress`
 ADD PRIMARY KEY (`dct_progress_id`);

--
-- Индексы таблицы `dct_progress_loc`
--
ALTER TABLE `dct_progress_loc`
 ADD PRIMARY KEY (`dct_progress_loc_id`), ADD KEY `dct_progress_id` (`dct_progress_id`), ADD KEY `dct_language_id` (`dct_language_id`);

--
-- Индексы таблицы `dct_solid_food`
--
ALTER TABLE `dct_solid_food`
 ADD PRIMARY KEY (`dct_solid_food_id`);

--
-- Индексы таблицы `dct_solid_food_loc`
--
ALTER TABLE `dct_solid_food_loc`
 ADD PRIMARY KEY (`dct_solid_food_loc_id`), ADD KEY `dct_solid_food_id` (`dct_solid_food_id`), ADD KEY `dct_language_id` (`dct_language_id`);

--
-- Индексы таблицы `dct_tooth`
--
ALTER TABLE `dct_tooth`
 ADD PRIMARY KEY (`dct_tooth_id`);

--
-- Индексы таблицы `dct_tooth_loc`
--
ALTER TABLE `dct_tooth_loc`
 ADD PRIMARY KEY (`dtc_tooth_loc_id`), ADD KEY `dct_tooth_id` (`dct_tooth_id`), ADD KEY `dct_language_id` (`dct_language_id`);

--
-- Индексы таблицы `dct_ui`
--
ALTER TABLE `dct_ui`
 ADD PRIMARY KEY (`dct_ui_id`), ADD KEY `dct_ui_types_id` (`dct_ui_types_id`);

--
-- Индексы таблицы `dct_ui_types`
--
ALTER TABLE `dct_ui_types`
 ADD PRIMARY KEY (`dct_ui_types_id`);

--
-- Индексы таблицы `dct_vaccination`
--
ALTER TABLE `dct_vaccination`
 ADD PRIMARY KEY (`dct_vaccination_id`);

--
-- Индексы таблицы `dct_vaccination_loc`
--
ALTER TABLE `dct_vaccination_loc`
 ADD PRIMARY KEY (`dct_vaccination_loc_id`), ADD KEY `dct_vaccination_id` (`dct_vaccination_id`);

--
-- Индексы таблицы `diary`
--
ALTER TABLE `diary`
 ADD PRIMARY KEY (`diary_id`);

--
-- Индексы таблицы `diary_common`
--
ALTER TABLE `diary_common`
 ADD PRIMARY KEY (`diary_common_id`), ADD KEY `diary_id` (`diary_id`);

--
-- Индексы таблицы `diary_doctor`
--
ALTER TABLE `diary_doctor`
 ADD PRIMARY KEY (`diary_doctor_id`), ADD KEY `diary_id` (`diary_id`), ADD KEY `dct_doctor_id` (`dct_doctor_id`);

--
-- Индексы таблицы `diary_feeding`
--
ALTER TABLE `diary_feeding`
 ADD PRIMARY KEY (`diary_feeding_id`), ADD KEY `dct_feeding_type_id` (`dct_feeding_type_id`), ADD KEY `diary_id` (`diary_id`);

--
-- Индексы таблицы `diary_nursing`
--
ALTER TABLE `diary_nursing`
 ADD PRIMARY KEY (`diary_nursing_id`), ADD KEY `diary_id` (`diary_id`);

--
-- Индексы таблицы `diary_vaccination`
--
ALTER TABLE `diary_vaccination`
 ADD PRIMARY KEY (`diary_vaccination_id`), ADD KEY `diary_id` (`diary_id`), ADD KEY `dct_vaccination_id` (`dct_vaccination_id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `dct_age_loc`
--
ALTER TABLE `dct_age_loc`
MODIFY `dct_age_loc_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `dct_doctor`
--
ALTER TABLE `dct_doctor`
MODIFY `dct_doctor_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT для таблицы `dct_doctor_loc`
--
ALTER TABLE `dct_doctor_loc`
MODIFY `dct_doctor_loc_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT для таблицы `dct_language`
--
ALTER TABLE `dct_language`
MODIFY `dct_language_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `dct_progress_loc`
--
ALTER TABLE `dct_progress_loc`
MODIFY `dct_progress_loc_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT для таблицы `dct_solid_food_loc`
--
ALTER TABLE `dct_solid_food_loc`
MODIFY `dct_solid_food_loc_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT для таблицы `dct_tooth_loc`
--
ALTER TABLE `dct_tooth_loc`
MODIFY `dtc_tooth_loc_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT для таблицы `dct_ui`
--
ALTER TABLE `dct_ui`
MODIFY `dct_ui_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `dct_ui_types`
--
ALTER TABLE `dct_ui_types`
MODIFY `dct_ui_types_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `dct_vaccination_loc`
--
ALTER TABLE `dct_vaccination_loc`
MODIFY `dct_vaccination_loc_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT для таблицы `diary_doctor`
--
ALTER TABLE `diary_doctor`
MODIFY `diary_doctor_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `diary_vaccination`
--
ALTER TABLE `diary_vaccination`
MODIFY `diary_vaccination_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `child_progress`
--
ALTER TABLE `child_progress`
ADD CONSTRAINT `child_progress_ibfk_1` FOREIGN KEY (`child_id`) REFERENCES `child` (`child_id`),
ADD CONSTRAINT `child_progress_ibfk_2` FOREIGN KEY (`dct_progress_id`) REFERENCES `dct_progress` (`dct_progress_id`);

--
-- Ограничения внешнего ключа таблицы `child_solid_food`
--
ALTER TABLE `child_solid_food`
ADD CONSTRAINT `child_solid_food_ibfk_1` FOREIGN KEY (`child_id`) REFERENCES `child` (`child_id`),
ADD CONSTRAINT `child_solid_food_ibfk_2` FOREIGN KEY (`dct_age_id`) REFERENCES `dct_age` (`dct_age_id`),
ADD CONSTRAINT `child_solid_food_ibfk_3` FOREIGN KEY (`dct_solid_food_id`) REFERENCES `dct_solid_food` (`dct_solid_food_id`);

--
-- Ограничения внешнего ключа таблицы `child_tooth`
--
ALTER TABLE `child_tooth`
ADD CONSTRAINT `child_tooth_ibfk_1` FOREIGN KEY (`child_id`) REFERENCES `child` (`child_id`),
ADD CONSTRAINT `child_tooth_ibfk_2` FOREIGN KEY (`child_id`) REFERENCES `child` (`child_id`),
ADD CONSTRAINT `child_tooth_ibfk_3` FOREIGN KEY (`dct_tooth_id`) REFERENCES `dct_tooth` (`dct_tooth_id`);

--
-- Ограничения внешнего ключа таблицы `dct_age_loc`
--
ALTER TABLE `dct_age_loc`
ADD CONSTRAINT `dct_age_loc_ibfk_1` FOREIGN KEY (`dct_language_id`) REFERENCES `dct_language` (`dct_language_id`),
ADD CONSTRAINT `dct_age_loc_ibfk_2` FOREIGN KEY (`dct_age_id`) REFERENCES `dct_age` (`dct_age_id`);

--
-- Ограничения внешнего ключа таблицы `dct_doctor_loc`
--
ALTER TABLE `dct_doctor_loc`
ADD CONSTRAINT `dct_doctor_loc_ibfk_2` FOREIGN KEY (`dct_language_id`) REFERENCES `dct_language` (`dct_language_id`),
ADD CONSTRAINT `dct_doctor_loc_ibfk_3` FOREIGN KEY (`dct_doctor_id`) REFERENCES `dct_doctor` (`dct_doctor_id`);

--
-- Ограничения внешнего ключа таблицы `dct_progress_loc`
--
ALTER TABLE `dct_progress_loc`
ADD CONSTRAINT `dct_progress_loc_ibfk_1` FOREIGN KEY (`dct_progress_id`) REFERENCES `dct_progress` (`dct_progress_id`),
ADD CONSTRAINT `dct_progress_loc_ibfk_2` FOREIGN KEY (`dct_language_id`) REFERENCES `dct_language` (`dct_language_id`);

--
-- Ограничения внешнего ключа таблицы `dct_solid_food_loc`
--
ALTER TABLE `dct_solid_food_loc`
ADD CONSTRAINT `dct_solid_food_loc_ibfk_1` FOREIGN KEY (`dct_solid_food_id`) REFERENCES `dct_solid_food` (`dct_solid_food_id`),
ADD CONSTRAINT `dct_solid_food_loc_ibfk_2` FOREIGN KEY (`dct_language_id`) REFERENCES `dct_language` (`dct_language_id`);

--
-- Ограничения внешнего ключа таблицы `dct_tooth_loc`
--
ALTER TABLE `dct_tooth_loc`
ADD CONSTRAINT `dct_tooth_loc_ibfk_1` FOREIGN KEY (`dct_tooth_id`) REFERENCES `dct_tooth` (`dct_tooth_id`),
ADD CONSTRAINT `dct_tooth_loc_ibfk_2` FOREIGN KEY (`dct_language_id`) REFERENCES `dct_language` (`dct_language_id`);

--
-- Ограничения внешнего ключа таблицы `dct_ui`
--
ALTER TABLE `dct_ui`
ADD CONSTRAINT `dct_ui_ibfk_1` FOREIGN KEY (`dct_ui_types_id`) REFERENCES `dct_ui_types` (`dct_ui_types_id`);

--
-- Ограничения внешнего ключа таблицы `dct_vaccination_loc`
--
ALTER TABLE `dct_vaccination_loc`
ADD CONSTRAINT `dct_vaccination_loc_ibfk_1` FOREIGN KEY (`dct_vaccination_id`) REFERENCES `dct_vaccination` (`dct_vaccination_id`);

--
-- Ограничения внешнего ключа таблицы `diary_common`
--
ALTER TABLE `diary_common`
ADD CONSTRAINT `diary_common_ibfk_1` FOREIGN KEY (`diary_id`) REFERENCES `diary` (`diary_id`);

--
-- Ограничения внешнего ключа таблицы `diary_doctor`
--
ALTER TABLE `diary_doctor`
ADD CONSTRAINT `diary_doctor_ibfk_1` FOREIGN KEY (`diary_id`) REFERENCES `diary` (`diary_id`),
ADD CONSTRAINT `diary_doctor_ibfk_2` FOREIGN KEY (`dct_doctor_id`) REFERENCES `dct_doctor` (`dct_doctor_id`);

--
-- Ограничения внешнего ключа таблицы `diary_feeding`
--
ALTER TABLE `diary_feeding`
ADD CONSTRAINT `diary_feeding_ibfk_1` FOREIGN KEY (`dct_feeding_type_id`) REFERENCES `dct_feeding_type` (`dct_feeding_type_id`),
ADD CONSTRAINT `diary_feeding_ibfk_2` FOREIGN KEY (`diary_id`) REFERENCES `diary` (`diary_id`);

--
-- Ограничения внешнего ключа таблицы `diary_nursing`
--
ALTER TABLE `diary_nursing`
ADD CONSTRAINT `diary_nursing_ibfk_1` FOREIGN KEY (`diary_id`) REFERENCES `diary` (`diary_id`);

--
-- Ограничения внешнего ключа таблицы `diary_vaccination`
--
ALTER TABLE `diary_vaccination`
ADD CONSTRAINT `diary_vaccination_ibfk_1` FOREIGN KEY (`diary_id`) REFERENCES `diary` (`diary_id`),
ADD CONSTRAINT `diary_vaccination_ibfk_2` FOREIGN KEY (`dct_vaccination_id`) REFERENCES `dct_vaccination` (`dct_vaccination_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
