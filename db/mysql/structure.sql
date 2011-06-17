-- phpMyAdmin SQL Dump
-- version 3.3.8.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 17, 2011 at 01:51 PM
-- Server version: 5.0.45
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cms3_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `acl_roles`
--

CREATE TABLE IF NOT EXISTS `acl_roles` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `parent_id` int(11) unsigned NOT NULL,
  `ordering` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `acl_roles_i18n`
--

CREATE TABLE IF NOT EXISTS `acl_roles_i18n` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `role_id` int(10) unsigned NOT NULL,
  `language` char(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `role_id` (`role_id`,`language`),
  KEY `language` (`language`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Table structure for table `acl_roles_users`
--

CREATE TABLE IF NOT EXISTS `acl_roles_users` (
  `role_id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY  (`role_id`,`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `acl_rules`
--

CREATE TABLE IF NOT EXISTS `acl_rules` (
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

-- --------------------------------------------------------

--
-- Table structure for table `auth_methods`
--

CREATE TABLE IF NOT EXISTS `auth_methods` (
  `id` int(12) unsigned NOT NULL auto_increment,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `auth_methods_i18n`
--

CREATE TABLE IF NOT EXISTS `auth_methods_i18n` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `method_id` int(12) unsigned NOT NULL,
  `language` char(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `method_id` (`method_id`,`language`),
  KEY `language` (`language`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `auth_method_basic`
--

CREATE TABLE IF NOT EXISTS `auth_method_basic` (
  `id` int(12) unsigned NOT NULL auto_increment,
  `user_id` int(12) unsigned NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `login` (`username`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `auth_method_openid`
--

CREATE TABLE IF NOT EXISTS `auth_method_openid` (
  `id` int(12) unsigned NOT NULL auto_increment,
  `user_id` int(12) unsigned NOT NULL,
  `openid` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `user_id` (`user_id`),
  UNIQUE KEY `openid` (`openid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE IF NOT EXISTS `auth_tokens` (
  `id` int(12) unsigned NOT NULL auto_increment,
  `user_id` int(12) unsigned NOT NULL,
  `token` char(32) NOT NULL,
  `created` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `expires` timestamp NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `token` (`token`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users`
--

CREATE TABLE IF NOT EXISTS `auth_users` (
  `id` int(12) unsigned NOT NULL auto_increment,
  `enabled` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `auth_user_params`
--

CREATE TABLE IF NOT EXISTS `auth_user_params` (
  `id` int(12) unsigned NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `auth_user_params_i18n`
--

CREATE TABLE IF NOT EXISTS `auth_user_params_i18n` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `user_param_id` int(12) unsigned NOT NULL,
  `language` char(5) NOT NULL,
  `label` char(255) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `user_param_id` (`user_param_id`,`language`),
  KEY `language` (`language`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `auth_user_param_values`
--

CREATE TABLE IF NOT EXISTS `auth_user_param_values` (
  `id` int(12) unsigned NOT NULL auto_increment,
  `user_id` int(12) unsigned NOT NULL,
  `param_id` int(12) unsigned NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `user_id` (`user_id`,`param_id`),
  KEY `param_id` (`param_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `content_items`
--

CREATE TABLE IF NOT EXISTS `content_items` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `state` tinyint(4) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `content_items_i18n`
--

CREATE TABLE IF NOT EXISTS `content_items_i18n` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `item_id` int(11) unsigned NOT NULL,
  `language` char(5) NOT NULL,
  `title` varchar(1024) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `item_id` (`item_id`,`language`),
  KEY `language` (`language`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `engine_blocks`
--

CREATE TABLE IF NOT EXISTS `engine_blocks` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `position` varchar(255) NOT NULL,
  `component` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  `ordering` int(11) NOT NULL,
  `condition_id` int(11) unsigned NOT NULL,
  `params` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Table structure for table `engine_conditions`
--

CREATE TABLE IF NOT EXISTS `engine_conditions` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `condition` varchar(1024) NOT NULL,
  `component` varchar(255) NOT NULL,
  `user` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Table structure for table `engine_conditions_i18n`
--

CREATE TABLE IF NOT EXISTS `engine_conditions_i18n` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `condition_id` int(11) unsigned NOT NULL,
  `language` char(5) NOT NULL,
  `titile` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `condition_id` (`condition_id`,`language`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `engine_languages`
--

CREATE TABLE IF NOT EXISTS `engine_languages` (
  `code` char(5) NOT NULL,
  `short_code` varchar(3) NOT NULL,
  `title` varchar(255) NOT NULL,
  `active` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY  (`code`),
  UNIQUE KEY `short_code` (`short_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `engine_modules`
--

CREATE TABLE IF NOT EXISTS `engine_modules` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `module` varchar(255) NOT NULL,
  `ordering` int(11) NOT NULL,
  `core` tinyint(1) NOT NULL default '0',
  `component` tinyint(1) NOT NULL,
  `enabled` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

-- --------------------------------------------------------

--
-- Table structure for table `engine_modules_i18n`
--

CREATE TABLE IF NOT EXISTS `engine_modules_i18n` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `module_id` int(11) NOT NULL,
  `language` char(5) NOT NULL,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `engine_pageheaders`
--

CREATE TABLE IF NOT EXISTS `engine_pageheaders` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `tag` varchar(32) NOT NULL,
  `attribute` varchar(32) NOT NULL,
  `condition_id` int(11) unsigned NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `engine_pageheaders_i18n`
--

CREATE TABLE IF NOT EXISTS `engine_pageheaders_i18n` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `pageheader_id` int(11) unsigned NOT NULL,
  `language` char(5) NOT NULL,
  `value` varchar(1024) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `pageheader_id` (`pageheader_id`,`language`),
  KEY `language` (`language`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `engine_routes`
--

CREATE TABLE IF NOT EXISTS `engine_routes` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `format` varchar(1024) character set cp1251 NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Table structure for table `engine_routes_i18n`
--

CREATE TABLE IF NOT EXISTS `engine_routes_i18n` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `route_id` int(11) unsigned NOT NULL,
  `language` char(5) NOT NULL,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `route_id` (`route_id`,`language`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `engine_themes`
--

CREATE TABLE IF NOT EXISTS `engine_themes` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `condition_id` int(11) unsigned NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `condition_id` (`condition_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE IF NOT EXISTS `menu_items` (
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

-- --------------------------------------------------------

--
-- Table structure for table `menu_items_i18n`
--

CREATE TABLE IF NOT EXISTS `menu_items_i18n` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `item_id` int(11) unsigned NOT NULL,
  `language` char(5) NOT NULL,
  `title` varchar(1024) character set cp1251 NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `item_id` (`item_id`,`language`),
  KEY `language` (`language`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Table structure for table `menu_menus`
--

CREATE TABLE IF NOT EXISTS `menu_menus` (
  `id` int(11) unsigned NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `menu_menus_i18n`
--

CREATE TABLE IF NOT EXISTS `menu_menus_i18n` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `menu_id` int(11) unsigned NOT NULL,
  `language` char(5) NOT NULL,
  `title` varchar(1024) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `menu_id` (`menu_id`,`language`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
