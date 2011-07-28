-- phpMyAdmin SQL Dump
-- version 3.4.3.1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июл 23 2011 г., 15:29
-- Версия сервера: 5.0.45
-- Версия PHP: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT=0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `cms3`
--

-- --------------------------------------------------------

--
-- Структура таблицы `auth__properties_users`
--

DROP TABLE IF EXISTS `auth__properties_users`;
CREATE TABLE IF NOT EXISTS `auth__properties_users` (
  `user_id` int(11) unsigned default NULL,
  `property_id` int(11) unsigned NOT NULL,
  `value_id` int(10) unsigned default NULL,
  `ordering` int(11) NOT NULL,
  UNIQUE KEY `user_id` (`user_id`,`property_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `auth__properties_users`
--

INSERT INTO `auth__properties_users` (`user_id`, `property_id`, `value_id`, `ordering`) VALUES
(NULL, 1, 1, 10),
(NULL, 2, 2, 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
