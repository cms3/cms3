-- phpMyAdmin SQL Dump
-- version 3.4.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 26, 2011 at 04:12 PM
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
-- Table structure for table `acl__roles`
--

CREATE TABLE IF NOT EXISTS `acl__roles` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `parent_id` int(11) unsigned NOT NULL,
  `ordering` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `acl__roles`
--

INSERT INTO `acl__roles` (`id`, `parent_id`, `ordering`) VALUES
(1, 0, 1),
(2, 1, 2),
(3, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `acl__roles_i18n`
--

CREATE TABLE IF NOT EXISTS `acl__roles_i18n` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `role_id` int(10) unsigned NOT NULL,
  `language` char(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `role_id` (`role_id`,`language`),
  KEY `language` (`language`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `acl__roles_i18n`
--

INSERT INTO `acl__roles_i18n` (`id`, `role_id`, `language`, `name`) VALUES
(1, 1, 'en_us', 'ROOT'),
(2, 1, 'ru_ru', 'Для перемещения между полями значения, используйте клавишу TAB, либо CTRL+клавиши со стрелками - для свободного перемещения Для перемещения между полями значения, используйте клавишу TAB, либо CTRL+клавиши со стрелками - для свободного перемещения Для пер'),
(3, 2, 'en_us', 'Administrators'),
(4, 2, 'ru_ru', 'Администраторы'),
(5, 3, 'en_us', 'Users'),
(6, 3, 'ru_ru', 'Пользователи'),
(7, 3, 'uk_uk', '44');

-- --------------------------------------------------------

--
-- Table structure for table `acl__roles_users`
--

CREATE TABLE IF NOT EXISTS `acl__roles_users` (
  `role_id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY  (`role_id`,`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `acl__roles_users`
--

INSERT INTO `acl__roles_users` (`role_id`, `user_id`) VALUES
(3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `acl__rules`
--

CREATE TABLE IF NOT EXISTS `acl__rules` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `role` varchar(100) NOT NULL,
  `resource` varchar(100) NOT NULL,
  `privilege` varchar(100) NOT NULL,
  `assert_condition_id` int(11) unsigned default NULL,
  `allow` tinyint(1) NOT NULL,
  `enabled` tinyint(1) NOT NULL default '0',
  `ordering` int(11) unsigned NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `condition_id` (`assert_condition_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `acl__rules`
--

INSERT INTO `acl__rules` (`id`, `role`, `resource`, `privilege`, `assert_condition_id`, `allow`, `enabled`, `ordering`) VALUES
(1, 'user_1', 'test_res', 'test_priv', NULL, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `auth__methods`
--

CREATE TABLE IF NOT EXISTS `auth__methods` (
  `id` int(12) unsigned NOT NULL auto_increment,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `auth__methods`
--

INSERT INTO `auth__methods` (`id`) VALUES
(1),
(2);

-- --------------------------------------------------------

--
-- Table structure for table `auth__methods_i18n`
--

CREATE TABLE IF NOT EXISTS `auth__methods_i18n` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `method_id` int(12) unsigned NOT NULL,
  `language` char(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `method_id` (`method_id`,`language`),
  KEY `language` (`language`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `auth__methods_i18n`
--

INSERT INTO `auth__methods_i18n` (`id`, `method_id`, `language`, `name`) VALUES
(1, 1, 'en_us', 'Basic'),
(2, 1, 'ru_ru', 'Стандартный'),
(3, 2, 'en_us', 'OpenID'),
(4, 2, 'ru_ru', 'OpenID');

-- --------------------------------------------------------

--
-- Table structure for table `auth__method_basic_params`
--

CREATE TABLE IF NOT EXISTS `auth__method_basic_params` (
  `id` int(12) unsigned NOT NULL auto_increment,
  `user_id` int(12) unsigned NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `login` (`username`),
  UNIQUE KEY `user_id` (`user_id`),
  KEY `password` (`password`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `auth__method_basic_params`
--

INSERT INTO `auth__method_basic_params` (`id`, `user_id`, `username`, `password`) VALUES
(1, 1, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99');

-- --------------------------------------------------------

--
-- Table structure for table `auth__method_openid_params`
--

CREATE TABLE IF NOT EXISTS `auth__method_openid_params` (
  `id` int(12) unsigned NOT NULL auto_increment,
  `user_id` int(12) unsigned NOT NULL,
  `openid` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `user_id` (`user_id`),
  UNIQUE KEY `openid` (`openid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `auth__properties_users`
--

CREATE TABLE IF NOT EXISTS `auth__properties_users` (
  `user_id` int(11) unsigned default NULL,
  `property_id` int(11) unsigned NOT NULL,
  `ordering` int(11) NOT NULL,
  UNIQUE KEY `user_id` (`user_id`,`property_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth__properties_users`
--

INSERT INTO `auth__properties_users` (`user_id`, `property_id`, `ordering`) VALUES
(NULL, 1, 15),
(NULL, 2, 10),
(NULL, 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `auth__property_values_users`
--

CREATE TABLE IF NOT EXISTS `auth__property_values_users` (
  `user_id` int(10) unsigned NOT NULL,
  `property_id` int(10) unsigned NOT NULL,
  `value_id` int(11) NOT NULL,
  PRIMARY KEY  (`user_id`,`property_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth__property_values_users`
--

INSERT INTO `auth__property_values_users` (`user_id`, `property_id`, `value_id`) VALUES
(1, 1, 1),
(1, 2, 2),
(1, 3, 37);

-- --------------------------------------------------------

--
-- Table structure for table `auth__tokens`
--

CREATE TABLE IF NOT EXISTS `auth__tokens` (
  `id` int(12) unsigned NOT NULL auto_increment,
  `user_id` int(12) unsigned NOT NULL,
  `token` char(32) NOT NULL,
  `created` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `expires` timestamp NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `token` (`token`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `auth__tokens`
--

INSERT INTO `auth__tokens` (`id`, `user_id`, `token`, `created`, `expires`) VALUES
(1, 1, 'aaSi9l5I36qc7It98k57VdGjsPRLlPUm', '2011-03-21 12:05:14', '2011-03-21 12:05:14'),
(2, 1, 'DtiikMM4i4c9w7SFCP0qoDXtTmxkyCK0', '2011-03-21 12:05:15', '2011-03-21 12:05:15'),
(3, 1, 'O47YjsULVVjagc9IXBw5Y9GOMHEWwYt6', '2011-03-21 12:05:16', '2011-03-21 12:05:16'),
(4, 1, 'NHozd20ymY0SfmuPr1QUyPC1vp31R0aW', '2011-03-21 12:09:08', '2011-03-21 12:09:08'),
(5, 1, 'ejL15mA4hO0qOXbItDjhkIDShfvYPnDS', '2011-03-21 12:09:12', '2011-03-21 12:09:12'),
(7, 1, 'CtYbQWybfIpjXZeryYkxC93Yrh83bzPT', '2011-05-10 13:58:33', '2011-05-10 13:58:33'),
(10, 1, 'WWpPHdk5mP392gQ7qNmuGypVBZt9mxz8', '2011-05-10 15:05:02', '2011-05-10 15:05:02'),
(12, 1, 'njFFDicig3ovoWVnW9IzSmAnhCq4skEF', '2011-05-20 11:02:18', '2011-05-20 11:02:18');

-- --------------------------------------------------------

--
-- Table structure for table `auth__users`
--

CREATE TABLE IF NOT EXISTS `auth__users` (
  `id` int(12) unsigned NOT NULL auto_increment,
  `enabled` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `auth__users`
--

INSERT INTO `auth__users` (`id`, `enabled`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `content__items`
--

CREATE TABLE IF NOT EXISTS `content__items` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `state` tinyint(4) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `content__items`
--

INSERT INTO `content__items` (`id`, `user_id`, `state`) VALUES
(1, 1, 1),
(31, 0, 4),
(32, 0, 1),
(33, 1, 0),
(34, 1, 0),
(35, 1, 0),
(36, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `content__items_i18n`
--

CREATE TABLE IF NOT EXISTS `content__items_i18n` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `item_id` int(11) unsigned NOT NULL,
  `language` char(5) NOT NULL,
  `title` varchar(1024) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `item_id` (`item_id`,`language`),
  KEY `language` (`language`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `content__items_i18n`
--

INSERT INTO `content__items_i18n` (`id`, `item_id`, `language`, `title`, `text`) VALUES
(1, 1, 'ru_ru', 'kl22', '8888y'),
(8, 31, 'ru_ru', 'Some', 'Русский текст'),
(9, 32, 'ru_ru', 'ddd', '555'),
(10, 33, 'ru_ru', 'Оплата и доставка', 'Оплата и доставка - 111'),
(11, 34, 'ru_ru', 'О нас', 'О нас - 22222'),
(12, 35, 'ru_ru', 'Контакты', 'Контакты - 333333'),
(13, 36, 'ru_ru', 'TITLE', 'TEXT BLYUA'),
(14, 37, 'ru_ru', '4', '4'),
(15, 38, 'ru_ru', '4', '4'),
(16, 39, 'ru_ru', '4', '4');

-- --------------------------------------------------------

--
-- Table structure for table `engine__blocks`
--

CREATE TABLE IF NOT EXISTS `engine__blocks` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `position` varchar(255) NOT NULL,
  `module` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  `ordering` int(11) NOT NULL,
  `condition_id` int(11) unsigned NOT NULL,
  `template` varchar(255) NOT NULL,
  `params` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `engine__blocks`
--

INSERT INTO `engine__blocks` (`id`, `position`, `module`, `action`, `ordering`, `condition_id`, `template`, `params`) VALUES
(1, 'center', 'cms3\\shop', '', 1, 1, '', '[]'),
(2, 'center', 'cms3\\shop', 'catalog', 2, 2, '', '{"count":"10","category_id":"150"}'),
(3, 'center', 'cms3\\gallery', 'product_images', 2, 3, '', '[]'),
(4, 'left', 'cms3\\menu', '', 1, 0, '', '{"menu_id":"2"}'),
(5, 'left', 'cms3\\auth', 'login_form', 2, 0, '', '[]'),
(6, 'center', 'cms3\\content', '', 1, 4, '', '[]'),
(8, 'admin', 'cms3\\ui_grid', '', 0, 6, '', '[]'),
(9, 'admin', 'cms3\\ui_form', '', 0, 7, '', ''),
(10, 'nb_topmenu', 'cms3\\menu', '', 0, 0, '', '{"menu_id":"5"}'),
(11, 'nb_content', 'cms3\\content', '', 0, 4, '', ''),
(12, 'nb_content', 'cms3\\shop', '', 0, 11, '', ''),
(13, 'nb_bottommenu', 'cms3/menu', '', 0, 0, '', '{"menu_id":"5"}'),
(14, 'admin-menu', 'cms3\\menu', '', 0, 0, '', '{"menu_id":"1"}');

-- --------------------------------------------------------

--
-- Table structure for table `engine__conditions`
--

CREATE TABLE IF NOT EXISTS `engine__conditions` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `condition` varchar(1024) NOT NULL,
  `engine` varchar(255) NOT NULL,
  `user` tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `engine__conditions`
--

INSERT INTO `engine__conditions` (`id`, `condition`, `engine`, `user`) VALUES
(4, 'content.item.id <> ''''', '', 0),
(5, 'grid <> "" or (form <> "")', '', 0),
(10, '1', '', 0),
(11, 'content.item.id = ''''', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `engine__conditions_i18n`
--

CREATE TABLE IF NOT EXISTS `engine__conditions_i18n` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `condition_id` int(11) unsigned NOT NULL,
  `language` char(5) NOT NULL,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `condition_id` (`condition_id`,`language`),
  KEY `language` (`language`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `engine__conditions_i18n`
--

INSERT INTO `engine__conditions_i18n` (`id`, `condition_id`, `language`, `title`) VALUES
(1, 5, 'ru_ru', 'Админка'),
(2, 1, 'ru_ru', 'Главная');

-- --------------------------------------------------------

--
-- Table structure for table `engine__languages`
--

CREATE TABLE IF NOT EXISTS `engine__languages` (
  `code` char(5) NOT NULL,
  `short_code` varchar(3) NOT NULL,
  `title` varchar(255) NOT NULL,
  `active` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY  (`code`),
  UNIQUE KEY `short_code` (`short_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `engine__languages`
--

INSERT INTO `engine__languages` (`code`, `short_code`, `title`, `active`) VALUES
('en_us', 'en', 'English', 1),
('ru_ru', 'ru', 'Русский', 1),
('uk_uk', 'uk', 'Українська', 0);

-- --------------------------------------------------------

--
-- Table structure for table `engine__modules`
--

CREATE TABLE IF NOT EXISTS `engine__modules` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `module` varchar(255) NOT NULL,
  `ordering` int(11) NOT NULL,
  `core` tinyint(1) NOT NULL default '0',
  `enabled` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `engine__modules`
--

INSERT INTO `engine__modules` (`id`, `name`, `module`, `ordering`, `core`, `enabled`) VALUES
(1, 'database', '', 1, 1, 1),
(2, 'jelly', '', 2, 1, 1),
(3, 'cms3\\expression', '', 2, 1, 1),
(4, 'cms3\\engine', '', 3, 1, 1),
(5, 'cms3\\shop', '', 50, 0, 1),
(6, 'cms3\\gallery', '', 50, 0, 1),
(7, 'cms3\\menu', '', 50, 0, 1),
(8, 'cms3\\template_phptal', '', 5, 1, 1),
(11, 'cms3\\auth', '', 7, 1, 1),
(12, 'cms3\\auth_openid', '', 15, 0, 1),
(13, 'openid', '', 14, 0, 1),
(14, 'cms3\\template_native', '', 50, 1, 1),
(15, 'cms3\\auth_basic', '', 50, 0, 1),
(16, 'cms3\\content', '', 50, 0, 1),
(17, 'orm', '', 50, 1, 1),
(18, 'acl', '', 50, 1, 1),
(19, 'cms3\\acl', '', 50, 1, 1),
(20, 'cms3\\ui', '', 50, 0, 1),
(21, 'cms3\\ui_extjs', '', 50, 0, 1),
(22, 'cms3\\admin', '', 50, 0, 1),
(23, 'formo', '', 1, 0, 1),
(24, 'formo-jelly', '', 2, 0, 0),
(25, 'kint', '', 0, 1, 1),
(26, 'cms3\\properties', '', 25, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `engine__modules_i18n`
--

CREATE TABLE IF NOT EXISTS `engine__modules_i18n` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `module_id` int(11) NOT NULL,
  `language` char(5) NOT NULL,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `engine__modules_i18n`
--

INSERT INTO `engine__modules_i18n` (`id`, `module_id`, `language`, `title`) VALUES
(1, 5, 'ru_ru', 'Интернет-магазин'),
(2, 6, 'ru_ru', 'Галерея'),
(3, 16, 'ru_ru', 'Контент'),
(4, 27, 'ru_ru', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `engine__pageheaders`
--

CREATE TABLE IF NOT EXISTS `engine__pageheaders` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `tag` varchar(32) NOT NULL,
  `attribute` varchar(32) NOT NULL,
  `condition_id` int(11) unsigned NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `engine__pageheaders`
--

INSERT INTO `engine__pageheaders` (`id`, `tag`, `attribute`, `condition_id`) VALUES
(1, 'title', '', 1),
(2, 'title', '', 5),
(3, 'title', '', 10);

-- --------------------------------------------------------

--
-- Table structure for table `engine__pageheaders_i18n`
--

CREATE TABLE IF NOT EXISTS `engine__pageheaders_i18n` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `pageheader_id` int(11) unsigned NOT NULL,
  `language` char(5) NOT NULL,
  `value` varchar(1024) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `pageheader_id` (`pageheader_id`,`language`),
  KEY `language` (`language`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `engine__pageheaders_i18n`
--

INSERT INTO `engine__pageheaders_i18n` (`id`, `pageheader_id`, `language`, `value`) VALUES
(1, 1, 'ru_ru', 'Магазин'),
(2, 2, 'ru_ru', 'CMS 3.0 AdminPanel'),
(3, 3, 'ru_ru', 'New Bathroom&nbsp;&#8212; все для ванной комнаты');

-- --------------------------------------------------------

--
-- Table structure for table `engine__routes`
--

CREATE TABLE IF NOT EXISTS `engine__routes` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `format` varchar(1024) character set cp1251 NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `engine__routes`
--

INSERT INTO `engine__routes` (`id`, `format`) VALUES
(1, 'shop(/<shop_path:.*>)'),
(2, 'gallery(/<gallery_album_id>(/<gallery_photo_id>))'),
(3, '<profile:profile>'),
(4, 'content(/?content.item.id=<content_item_id>)'),
(5, '<grid:admin>(/<model>)'),
(6, '<form:admin>((/<model>)(/<id>))');

-- --------------------------------------------------------

--
-- Table structure for table `engine__routes_i18n`
--

CREATE TABLE IF NOT EXISTS `engine__routes_i18n` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `route_id` int(11) unsigned NOT NULL,
  `language` char(5) NOT NULL,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `route_id` (`route_id`,`language`),
  KEY `language` (`language`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `engine__routes_i18n`
--

INSERT INTO `engine__routes_i18n` (`id`, `route_id`, `language`, `title`) VALUES
(1, 1, 'ru_ru', 'Магазин'),
(2, 2, 'ru_ru', 'Галерея'),
(3, 3, 'ru_ru', 'Профайлер'),
(4, 4, 'ru_ru', 'Контент'),
(5, 5, 'ru_ru', 'Админка');

-- --------------------------------------------------------

--
-- Table structure for table `engine__themes`
--

CREATE TABLE IF NOT EXISTS `engine__themes` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `condition_id` int(11) unsigned NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `condition_id` (`condition_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `engine__themes`
--

INSERT INTO `engine__themes` (`id`, `name`, `condition_id`) VALUES
(2, 'default_blue', 1),
(3, 'admin', 5),
(4, 'newbathroom', 10);

-- --------------------------------------------------------

--
-- Table structure for table `files__files`
--

CREATE TABLE IF NOT EXISTS `files__files` (
  `id` int(11) NOT NULL auto_increment,
  `file_name` varchar(255) NOT NULL,
  `mime_type` varchar(255) NOT NULL,
  `protected` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `files__files_i18n`
--

CREATE TABLE IF NOT EXISTS `files__files_i18n` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `file_id` int(11) unsigned NOT NULL,
  `language` char(5) NOT NULL,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `file_id` (`file_id`,`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `files__images`
--

CREATE TABLE IF NOT EXISTS `files__images` (
  `id` int(11) NOT NULL,
  `file_id` int(11) default NULL,
  `url` text,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `files__images_i18n`
--

CREATE TABLE IF NOT EXISTS `files__images_i18n` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `image_id` int(11) unsigned NOT NULL,
  `language` char(5) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `image_id` (`image_id`,`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `menu__items`
--

INSERT INTO `menu__items` (`id`, `menu_id`, `uri`, `parent_id`, `ordering`, `active_condition_id`, `route_id`, `params`) VALUES
(1, 2, '', 0, 1, 0, 1, '[]'),
(2, 2, '', 1, 2, 0, 1, '{"shop_category_id":"1"}'),
(3, 2, '', 2, 3, 0, 1, '{"shop_category_id":"1","shop_product_id":"1"}'),
(4, 2, '', 0, 4, 0, 2, '{"gallery_album_id":"1","gallery_photo_id":"2"}'),
(5, 2, '/action/cms3/gallery/gallery/clear_cache', 0, 50, 0, 0, '[]'),
(6, 2, '', 0, 5, 0, 4, '{"content_item_id":"1"}'),
(7, 2, '/admin', 0, 0, 0, 0, '[]'),
(8, 1, '', 0, 1, 0, 5, '{"grid":"admin","model":"cms3-content-item"}'),
(9, 5, '#', 0, 2, 0, 0, ''),
(10, 5, '', 0, 3, 0, 4, '{"content_item_id":33}'),
(11, 5, '', 0, 4, 0, 4, '{"content_item_id":34}'),
(12, 5, '', 0, 5, 0, 4, '{"content_item_id":35}'),
(13, 5, '/', 0, 1, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `menu__items_i18n`
--

CREATE TABLE IF NOT EXISTS `menu__items_i18n` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `item_id` int(11) unsigned NOT NULL,
  `language` char(5) NOT NULL,
  `title` varchar(1024) character set cp1251 NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `item_id` (`item_id`,`language`),
  KEY `language` (`language`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `menu__items_i18n`
--

INSERT INTO `menu__items_i18n` (`id`, `item_id`, `language`, `title`) VALUES
(1, 1, 'en_us', 'Main'),
(2, 1, 'ru_ru', 'Главная'),
(3, 2, 'en_us', 'Category'),
(4, 2, 'ru_ru', 'Категория'),
(5, 3, 'en_us', 'Product'),
(6, 3, 'ru_ru', 'Товар'),
(7, 4, 'en_us', 'Gallery'),
(8, 4, 'ru_ru', 'Галерея'),
(9, 5, 'en_us', 'Clear cache'),
(10, 5, 'ru_ru', 'Очистить кэш'),
(11, 6, 'ru_ru', 'О магазине'),
(12, 7, 'ru_ru', 'Админпанель'),
(13, 8, 'ru_ru', 'Главная'),
(14, 9, 'ru_ru', 'Каталог'),
(15, 10, 'ru_ru', 'Оплата и доставка'),
(16, 11, 'ru_ru', 'О нас'),
(17, 12, 'ru_ru', 'Контакты');

-- --------------------------------------------------------

--
-- Table structure for table `menu__menus`
--

CREATE TABLE IF NOT EXISTS `menu__menus` (
  `id` int(11) unsigned NOT NULL auto_increment,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `menu__menus`
--

INSERT INTO `menu__menus` (`id`) VALUES
(1),
(2),
(5),
(6);

-- --------------------------------------------------------

--
-- Table structure for table `menu__menus_i18n`
--

CREATE TABLE IF NOT EXISTS `menu__menus_i18n` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `menu_id` int(11) unsigned NOT NULL,
  `language` char(5) NOT NULL,
  `title` varchar(1024) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `menu_id` (`menu_id`,`language`),
  KEY `language` (`language`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `menu__menus_i18n`
--

INSERT INTO `menu__menus_i18n` (`id`, `menu_id`, `language`, `title`) VALUES
(1, 5, 'ru_ru', 'Верхнее меню'),
(2, 6, 'ru_ru', 'Меню категорий');

-- --------------------------------------------------------

--
-- Table structure for table `properties__properties`
--

CREATE TABLE IF NOT EXISTS `properties__properties` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `properties__properties`
--

INSERT INTO `properties__properties` (`id`, `name`) VALUES
(1, 'age'),
(2, 'nickname'),
(3, 'year');

-- --------------------------------------------------------

--
-- Table structure for table `properties__property_booleans`
--

CREATE TABLE IF NOT EXISTS `properties__property_booleans` (
  `property_id` int(11) NOT NULL,
  `default` tinyint(1) NOT NULL,
  `checker` text NOT NULL,
  PRIMARY KEY  (`property_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `properties__property_booleans_i18n`
--

CREATE TABLE IF NOT EXISTS `properties__property_booleans_i18n` (
  `id` int(11) NOT NULL auto_increment,
  `property_id` int(11) NOT NULL,
  `language` char(5) NOT NULL,
  `label` text NOT NULL,
  `hint` text NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `property_id` (`property_id`,`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `properties__property_floats`
--

CREATE TABLE IF NOT EXISTS `properties__property_floats` (
  `property_id` int(11) NOT NULL,
  `default` float NOT NULL,
  `checker` text NOT NULL,
  PRIMARY KEY  (`property_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `properties__property_floats_i18n`
--

CREATE TABLE IF NOT EXISTS `properties__property_floats_i18n` (
  `id` int(11) NOT NULL auto_increment,
  `property_id` int(11) NOT NULL,
  `language` char(5) NOT NULL,
  `label` text NOT NULL,
  `hint` text NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `property_id` (`property_id`,`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `properties__property_integers`
--

CREATE TABLE IF NOT EXISTS `properties__property_integers` (
  `property_id` int(11) NOT NULL,
  `default` int(11) NOT NULL,
  `checker` text NOT NULL,
  PRIMARY KEY  (`property_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `properties__property_integers`
--

INSERT INTO `properties__property_integers` (`property_id`, `default`, `checker`) VALUES
(1, 20, ''),
(3, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `properties__property_integers_i18n`
--

CREATE TABLE IF NOT EXISTS `properties__property_integers_i18n` (
  `id` int(11) NOT NULL auto_increment,
  `property_id` int(11) NOT NULL,
  `language` char(5) NOT NULL,
  `label` text NOT NULL,
  `hint` text NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `property_id` (`property_id`,`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `properties__property_lists`
--

CREATE TABLE IF NOT EXISTS `properties__property_lists` (
  `property_id` int(11) NOT NULL,
  `default_option_id` int(11) NOT NULL,
  `checker` text NOT NULL,
  PRIMARY KEY  (`property_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `properties__property_lists_i18n`
--

CREATE TABLE IF NOT EXISTS `properties__property_lists_i18n` (
  `id` int(11) NOT NULL auto_increment,
  `property_id` int(11) NOT NULL,
  `language` char(5) NOT NULL,
  `label` text NOT NULL,
  `hint` text NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `property_id` (`property_id`,`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `properties__property_lists_options`
--

CREATE TABLE IF NOT EXISTS `properties__property_lists_options` (
  `id` int(11) NOT NULL auto_increment,
  `ordering` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `properties__property_lists_options_i18n`
--

CREATE TABLE IF NOT EXISTS `properties__property_lists_options_i18n` (
  `id` int(11) NOT NULL auto_increment,
  `property_id` int(11) NOT NULL,
  `language` char(5) NOT NULL,
  `hint` text NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `property_id` (`property_id`,`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `properties__property_strings`
--

CREATE TABLE IF NOT EXISTS `properties__property_strings` (
  `property_id` int(11) NOT NULL,
  `checker` text NOT NULL,
  PRIMARY KEY  (`property_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `properties__property_strings`
--

INSERT INTO `properties__property_strings` (`property_id`, `checker`) VALUES
(2, '');

-- --------------------------------------------------------

--
-- Table structure for table `properties__property_strings_i18n`
--

CREATE TABLE IF NOT EXISTS `properties__property_strings_i18n` (
  `id` int(11) NOT NULL auto_increment,
  `property_id` int(11) NOT NULL,
  `language` char(5) NOT NULL,
  `default` text NOT NULL,
  `name` text NOT NULL,
  `hint` text NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `property_id` (`property_id`,`language`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `properties__property_strings_i18n`
--

INSERT INTO `properties__property_strings_i18n` (`id`, `property_id`, `language`, `default`, `name`, `hint`) VALUES
(1, 2, 'ru_ru', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `properties__property_values`
--

CREATE TABLE IF NOT EXISTS `properties__property_values` (
  `id` int(11) NOT NULL auto_increment,
  `property_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `properties__property_values`
--

INSERT INTO `properties__property_values` (`id`, `property_id`) VALUES
(1, 2),
(2, 2),
(37, 3);

-- --------------------------------------------------------

--
-- Table structure for table `properties__property_value_booleans`
--

CREATE TABLE IF NOT EXISTS `properties__property_value_booleans` (
  `property_value_id` int(11) NOT NULL,
  `value` tinyint(1) NOT NULL,
  PRIMARY KEY  (`property_value_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `properties__property_value_floats`
--

CREATE TABLE IF NOT EXISTS `properties__property_value_floats` (
  `property_value_id` int(11) NOT NULL,
  `value` float NOT NULL,
  PRIMARY KEY  (`property_value_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `properties__property_value_integers`
--

CREATE TABLE IF NOT EXISTS `properties__property_value_integers` (
  `property_value_id` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  PRIMARY KEY  (`property_value_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `properties__property_value_integers`
--

INSERT INTO `properties__property_value_integers` (`property_value_id`, `value`) VALUES
(1, 22),
(37, 1989);

-- --------------------------------------------------------

--
-- Table structure for table `properties__property_value_lists`
--

CREATE TABLE IF NOT EXISTS `properties__property_value_lists` (
  `property_value_id` int(11) NOT NULL,
  `value_option_id` int(11) NOT NULL,
  PRIMARY KEY  (`property_value_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `properties__property_value_strings`
--

CREATE TABLE IF NOT EXISTS `properties__property_value_strings` (
  `id` int(11) NOT NULL auto_increment,
  `property_value_id` int(11) NOT NULL,
  `language` char(5) default NULL,
  `value` text NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `property_value_id` (`property_value_id`,`language`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `properties__property_value_strings`
--

INSERT INTO `properties__property_value_strings` (`id`, `property_value_id`, `language`, `value`) VALUES
(1, 2, 'ru_ru', 'Янис');

-- --------------------------------------------------------

--
-- Table structure for table `shop__distributors`
--

CREATE TABLE IF NOT EXISTS `shop__distributors` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `shop__distributor_products`
--

CREATE TABLE IF NOT EXISTS `shop__distributor_products` (
  `id` int(11) NOT NULL auto_increment,
  `product_id` int(11) NOT NULL,
  `distributor_id` int(11) NOT NULL,
  `article` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `in_stock` int(11) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `shop__images_products`
--

CREATE TABLE IF NOT EXISTS `shop__images_products` (
  `product_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  `small_image` tinyint(1) NOT NULL,
  `base_image` tinyint(1) NOT NULL,
  `ordering` int(11) NOT NULL,
  PRIMARY KEY  (`product_id`,`image_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `shop__products`
--

CREATE TABLE IF NOT EXISTS `shop__products` (
  `id` int(11) NOT NULL auto_increment,
  `product_type_id` int(11) default NULL,
  `discontinued` tinyint(1) NOT NULL,
  `in_stock` int(11) NOT NULL,
  `ordering` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `shop__products_i18n`
--

CREATE TABLE IF NOT EXISTS `shop__products_i18n` (
  `id` int(11) NOT NULL auto_increment,
  `product_id` int(11) NOT NULL,
  `language` char(5) NOT NULL,
  `title` text NOT NULL,
  `short_description` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `product_id` (`product_id`,`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `shop__product_prices`
--

CREATE TABLE IF NOT EXISTS `shop__product_prices` (
  `id` int(11) NOT NULL auto_increment,
  `product_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `auto_complete` tinyint(1) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `shop__product_properties`
--

CREATE TABLE IF NOT EXISTS `shop__product_properties` (
  `product_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `ordering` int(11) NOT NULL,
  PRIMARY KEY  (`product_id`,`property_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `shop__product_property_values`
--

CREATE TABLE IF NOT EXISTS `shop__product_property_values` (
  `item_id` int(11) NOT NULL,
  `_property_id` int(11) NOT NULL,
  `value_id` int(11) NOT NULL,
  `ordering` int(11) NOT NULL default '0',
  `enabled` tinyint(1) NOT NULL default '1',
  PRIMARY KEY  (`item_id`,`value_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `shop__product_types`
--

CREATE TABLE IF NOT EXISTS `shop__product_types` (
  `id` int(11) NOT NULL auto_increment,
  `ordering` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `shop__product_types`
--

INSERT INTO `shop__product_types` (`id`, `ordering`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `shop__product_types_i18n`
--

CREATE TABLE IF NOT EXISTS `shop__product_types_i18n` (
  `id` int(11) NOT NULL auto_increment,
  `product_type_id` int(11) NOT NULL,
  `language` char(5) NOT NULL,
  `title` varchar(1024) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `shop__product_types_i18n`
--

INSERT INTO `shop__product_types_i18n` (`id`, `product_type_id`, `language`, `title`) VALUES
(1, 1, 'ru_ru', 'Телевизоры'),
(2, 2, 'ru_ru', '3D телевизоры'),
(3, 3, 'ru_ru', 'Плазменные телевизоры'),
(4, 4, 'ru_ru', 'Плазменные 3D телевизоры');

-- --------------------------------------------------------

--
-- Table structure for table `shop__product_types_properties`
--

CREATE TABLE IF NOT EXISTS `shop__product_types_properties` (
  `product_type_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `ordering` int(11) NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  PRIMARY KEY  (`product_type_id`,`property_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `shop__product_types_property_values`
--

CREATE TABLE IF NOT EXISTS `shop__product_types_property_values` (
  `product_type_id` int(11) NOT NULL,
  `_property_id` int(11) NOT NULL,
  `value_id` int(11) NOT NULL,
  `ordering` int(11) NOT NULL default '0',
  `enabled` tinyint(1) NOT NULL default '1',
  PRIMARY KEY  (`product_type_id`,`value_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `shop__product_types_relationships`
--

CREATE TABLE IF NOT EXISTS `shop__product_types_relationships` (
  `product_type_id` int(11) NOT NULL,
  `parent_product_type_id` int(11) NOT NULL,
  PRIMARY KEY  (`product_type_id`,`parent_product_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shop__product_types_relationships`
--

INSERT INTO `shop__product_types_relationships` (`product_type_id`, `parent_product_type_id`) VALUES
(2, 1),
(3, 1),
(4, 2),
(4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `_new_properties__properties`
--

CREATE TABLE IF NOT EXISTS `_new_properties__properties` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `ordering` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `_new_properties__properties`
--

INSERT INTO `_new_properties__properties` (`id`, `name`, `ordering`) VALUES
(1, 'age', 0),
(2, 'nickname', 0),
(3, 'year', 0),
(4, 'diagonal', 0),
(5, 'resolution', 0),
(6, 'contrast', 0),
(7, 'response_time', 0),
(8, 'angle_of_view', 0),
(9, '3d', 0),
(10, 'display_type', 0);

-- --------------------------------------------------------

--
-- Table structure for table `_new_properties__properties_i18n`
--

CREATE TABLE IF NOT EXISTS `_new_properties__properties_i18n` (
  `id` int(11) NOT NULL auto_increment,
  `property_id` int(11) NOT NULL,
  `language` char(5) NOT NULL,
  `label` text NOT NULL,
  `hint` text NOT NULL,
  `edit_hint` text NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `property_id` (`property_id`,`language`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `_new_properties__properties_i18n`
--

INSERT INTO `_new_properties__properties_i18n` (`id`, `property_id`, `language`, `label`, `hint`, `edit_hint`) VALUES
(1, 9, 'ru_ru', '3D', 'Поддерживает технологию 3D.', 'Выводит наличие функции 3D.'),
(2, 8, 'ru_ru', 'Угол обзора', 'Угол обзора монитора.', ''),
(3, 6, 'ru_ru', 'Контраст', 'Контраст монитора.', ''),
(4, 7, 'ru_ru', 'Время отклика', 'Время отклика дисплея.', ''),
(5, 4, 'ru_ru', 'Диагональ', 'Диагональ дисплея.', '');

-- --------------------------------------------------------

--
-- Table structure for table `_new_properties__property_booleans`
--

CREATE TABLE IF NOT EXISTS `_new_properties__property_booleans` (
  `property_id` int(11) NOT NULL,
  `checker` text NOT NULL,
  PRIMARY KEY  (`property_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `_new_properties__property_booleans`
--

INSERT INTO `_new_properties__property_booleans` (`property_id`, `checker`) VALUES
(9, '');

-- --------------------------------------------------------

--
-- Table structure for table `_new_properties__property_floats`
--

CREATE TABLE IF NOT EXISTS `_new_properties__property_floats` (
  `property_id` int(11) NOT NULL,
  `default` float NOT NULL,
  `checker` text NOT NULL,
  PRIMARY KEY  (`property_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `_new_properties__property_integers`
--

CREATE TABLE IF NOT EXISTS `_new_properties__property_integers` (
  `property_id` int(11) NOT NULL,
  `default` int(11) NOT NULL,
  `checker` text NOT NULL,
  PRIMARY KEY  (`property_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `_new_properties__property_integers`
--

INSERT INTO `_new_properties__property_integers` (`property_id`, `default`, `checker`) VALUES
(1, 20, ''),
(3, 0, ''),
(4, 0, ''),
(6, 0, ''),
(7, 0, ''),
(8, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `_new_properties__property_lists`
--

CREATE TABLE IF NOT EXISTS `_new_properties__property_lists` (
  `property_id` int(11) NOT NULL,
  `default_option_id` int(11) NOT NULL,
  `checker` text NOT NULL,
  PRIMARY KEY  (`property_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `_new_properties__property_lists_options`
--

CREATE TABLE IF NOT EXISTS `_new_properties__property_lists_options` (
  `value_id` int(11) NOT NULL auto_increment,
  `property_id` int(11) NOT NULL,
  `ordering` int(11) NOT NULL,
  PRIMARY KEY  (`value_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `_new_properties__property_lists_options_i18n`
--

CREATE TABLE IF NOT EXISTS `_new_properties__property_lists_options_i18n` (
  `id` int(11) NOT NULL auto_increment,
  `value_id` int(11) NOT NULL,
  `language` char(5) NOT NULL,
  `hint` text NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `property_id` (`value_id`,`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `_new_properties__property_strings`
--

CREATE TABLE IF NOT EXISTS `_new_properties__property_strings` (
  `property_id` int(11) NOT NULL,
  `checker` text NOT NULL,
  PRIMARY KEY  (`property_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `_new_properties__property_strings`
--

INSERT INTO `_new_properties__property_strings` (`property_id`, `checker`) VALUES
(2, '');

-- --------------------------------------------------------

--
-- Table structure for table `_new_properties__property_strings_i18n`
--

CREATE TABLE IF NOT EXISTS `_new_properties__property_strings_i18n` (
  `id` int(11) NOT NULL auto_increment,
  `property_id` int(11) NOT NULL,
  `language` char(5) NOT NULL,
  `default` text NOT NULL,
  `name` text NOT NULL,
  `hint` text NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `property_id` (`property_id`,`language`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `_new_properties__property_strings_i18n`
--

INSERT INTO `_new_properties__property_strings_i18n` (`id`, `property_id`, `language`, `default`, `name`, `hint`) VALUES
(1, 2, 'ru_ru', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `_new_properties__property_values`
--

CREATE TABLE IF NOT EXISTS `_new_properties__property_values` (
  `id` int(11) NOT NULL auto_increment,
  `property_id` int(11) NOT NULL,
  `default` tinyint(1) NOT NULL COMMENT 'Используется это значение, если другое не задано.',
  `auto_complete` varchar(1024) default NULL COMMENT 'Условия, при которых используется это значение, если другое не задано.',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `_new_properties__property_values`
--

INSERT INTO `_new_properties__property_values` (`id`, `property_id`, `default`, `auto_complete`) VALUES
(1, 2, 0, NULL),
(2, 2, 0, NULL),
(37, 3, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `_new_properties__property_value_booleans`
--

CREATE TABLE IF NOT EXISTS `_new_properties__property_value_booleans` (
  `property_value_id` int(11) NOT NULL,
  `value` tinyint(1) NOT NULL,
  PRIMARY KEY  (`property_value_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `_new_properties__property_value_floats`
--

CREATE TABLE IF NOT EXISTS `_new_properties__property_value_floats` (
  `property_value_id` int(11) NOT NULL,
  `value` float NOT NULL,
  PRIMARY KEY  (`property_value_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `_new_properties__property_value_integers`
--

CREATE TABLE IF NOT EXISTS `_new_properties__property_value_integers` (
  `property_value_id` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  PRIMARY KEY  (`property_value_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `_new_properties__property_value_integers`
--

INSERT INTO `_new_properties__property_value_integers` (`property_value_id`, `value`) VALUES
(1, 22),
(37, 1989);

-- --------------------------------------------------------

--
-- Table structure for table `_new_properties__property_value_lists`
--

CREATE TABLE IF NOT EXISTS `_new_properties__property_value_lists` (
  `property_value_id` int(11) NOT NULL,
  `value_option_id` int(11) NOT NULL,
  PRIMARY KEY  (`property_value_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `_new_properties__property_value_strings`
--

CREATE TABLE IF NOT EXISTS `_new_properties__property_value_strings` (
  `property_value_id` int(11) NOT NULL,
  `language` char(5) NOT NULL default '',
  `value` text NOT NULL,
  PRIMARY KEY  (`property_value_id`,`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `_new_properties__property_value_strings`
--

INSERT INTO `_new_properties__property_value_strings` (`property_value_id`, `language`, `value`) VALUES
(2, 'ru_ru', 'Янис');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
