-- phpMyAdmin SQL Dump
-- version 3.4.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 16, 2011 at 06:58 PM
-- Server version: 5.0.45
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cms3`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu__items`
--

CREATE TABLE IF NOT EXISTS `menu__items` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `menu_id` int(11) unsigned NOT NULL,
  `uri` varchar(1024) character set cp1251 NOT NULL,
  `parent_id` int(11) NOT NULL,
  `ordering` int(11) NOT NULL,
  `active_condition_id` int(11) unsigned NOT NULL,
  `route_id` int(11) unsigned NOT NULL,
  `params` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `menu_id` (`menu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `menu__items`
--

INSERT INTO `menu__items` (`id`, `menu_id`, `uri`, `parent_id`, `ordering`, `active_condition_id`, `route_id`, `params`) VALUES
(1, 1, '', 0, 1, 0, 1, '[]'),
(2, 1, '', 1, 2, 0, 1, '{"shop_category_id":"1"}'),
(3, 1, '', 2, 3, 0, 1, '{"shop_category_id":"1","shop_product_id":"1"}'),
(4, 1, '', 0, 4, 0, 2, '{"gallery_album_id":"1","gallery_photo_id":"2"}'),
(5, 1, '/action/cms3/gallery/gallery/clear_cache', 0, 50, 0, 0, '[]'),
(6, 1, '', 0, 5, 0, 4, '{"content_item_id":"1"}'),
(7, 1, '/admin', 0, 0, 0, 0, '[]');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
