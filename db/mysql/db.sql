-- phpMyAdmin SQL Dump
-- version 3.2.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 07, 2012 at 02:18 PM
-- Server version: 5.1.40
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cms3`
--

-- --------------------------------------------------------

--
-- Table structure for table `engine__conditions`
--

CREATE TABLE IF NOT EXISTS `engine__conditions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `language` char(5) NOT NULL,
  `title` varchar(255) NOT NULL,
  `condition` varchar(1024) NOT NULL,
  `engine` varchar(255) NOT NULL,
  `user` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=101 ;

--
-- Dumping data for table `engine__conditions`
--

INSERT INTO `engine__conditions` (`id`, `language`, `title`, `condition`, `engine`, `user`) VALUES
(4, 'ru_ru', '', 'content.item.id <> ''''', '', 0),
(5, 'ru_ru', 'Админка', 'grid <> "" or (form <> "")', '', 0),
(10, 'ru_ru', '', '1', '', 0),
(11, 'ru_ru', '', 'content.item.id = ''''', '', 0),
(100, 'ru_ru', 'Главная', '_count = 0', '', 0);
