-- phpMyAdmin SQL Dump
-- version 3.3.8.1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Янв 17 2011 г., 18:41
-- Версия сервера: 5.0.45
-- Версия PHP: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `cms3_new`
--

-- --------------------------------------------------------

--
-- Структура таблицы `acl_roles`
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
-- Структура таблицы `acl_roles_i18n`
--

CREATE TABLE IF NOT EXISTS `acl_roles_i18n` (
  `id` int(10) unsigned NOT NULL,
  `language` char(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`,`language`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `acl_roles_users`
--

CREATE TABLE IF NOT EXISTS `acl_roles_users` (
  `role_id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY  (`role_id`,`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `acl_rules`
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
-- Структура таблицы `auth_methods`
--

CREATE TABLE IF NOT EXISTS `auth_methods` (
  `id` int(12) unsigned NOT NULL auto_increment,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Структура таблицы `auth_methods_i18n`
--

CREATE TABLE IF NOT EXISTS `auth_methods_i18n` (
  `id` int(12) unsigned NOT NULL,
  `language` char(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`,`language`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `auth_method_basic`
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
-- Структура таблицы `auth_method_openid`
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
-- Структура таблицы `auth_tokens`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `auth_users`
--

CREATE TABLE IF NOT EXISTS `auth_users` (
  `id` int(12) unsigned NOT NULL auto_increment,
  `enabled` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Структура таблицы `auth_user_params`
--

CREATE TABLE IF NOT EXISTS `auth_user_params` (
  `id` int(12) unsigned NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Структура таблицы `auth_user_params_i18n`
--

CREATE TABLE IF NOT EXISTS `auth_user_params_i18n` (
  `id` int(12) unsigned NOT NULL,
  `language` char(5) NOT NULL,
  `label` char(255) NOT NULL,
  PRIMARY KEY  (`id`,`language`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `auth_user_param_values`
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
-- Структура таблицы `content_items_history`
--

CREATE TABLE IF NOT EXISTS `content_items_history` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `item_id` int(11) unsigned NOT NULL,
  `save_date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `save_user` int(11) NOT NULL,
  `save_coment` varchar(1000) NOT NULL,
  `state` tinyint(4) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `content_items_i18n`
--

CREATE TABLE IF NOT EXISTS `content_items_i18n` (
  `id` int(11) unsigned NOT NULL,
  `language` char(5) NOT NULL,
  `title` varchar(1024) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY  (`id`,`language`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `content_items_revisions`
--

CREATE TABLE IF NOT EXISTS `content_items_revisions` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `save_date` datetime NOT NULL,
  `save_user` int(11) unsigned NOT NULL,
  `save_comment` varchar(1000) NOT NULL,
  `state` tinyint(4) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Структура таблицы `content_items_test`
--

CREATE TABLE IF NOT EXISTS `content_items_test` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `rev_date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `rev_user_id` int(11) unsigned NOT NULL,
  `rev_comment` varchar(1000) NOT NULL,
  `state` tinyint(4) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `engine_blocks`
--

CREATE TABLE IF NOT EXISTS `engine_blocks` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `position` varchar(255) NOT NULL,
  `component` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  `ordering` int(11) NOT NULL,
  `condition_id` int(11) unsigned NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Структура таблицы `engine_block_params`
--

CREATE TABLE IF NOT EXISTS `engine_block_params` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `block_id` int(11) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `block_id` (`block_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Структура таблицы `engine_conditions`
--

CREATE TABLE IF NOT EXISTS `engine_conditions` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `condition` varchar(1024) NOT NULL,
  `component` varchar(255) NOT NULL,
  `user` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Структура таблицы `engine_conditions_i18n`
--

CREATE TABLE IF NOT EXISTS `engine_conditions_i18n` (
  `id` int(11) unsigned NOT NULL,
  `language` char(5) NOT NULL,
  `titile` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`,`language`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `engine_languages`
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
-- Структура таблицы `engine_modules`
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

-- --------------------------------------------------------

--
-- Структура таблицы `engine_pageheaders`
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
-- Структура таблицы `engine_pageheaders_i18n`
--

CREATE TABLE IF NOT EXISTS `engine_pageheaders_i18n` (
  `id` int(11) unsigned NOT NULL,
  `language` char(5) NOT NULL,
  `value` varchar(1024) NOT NULL,
  PRIMARY KEY  (`id`,`language`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `engine_routes`
--

CREATE TABLE IF NOT EXISTS `engine_routes` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `format` varchar(1024) character set cp1251 NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Структура таблицы `engine_routes_i18n`
--

CREATE TABLE IF NOT EXISTS `engine_routes_i18n` (
  `id` int(11) unsigned NOT NULL,
  `language` char(5) NOT NULL,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`,`language`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `engine_themes`
--

CREATE TABLE IF NOT EXISTS `engine_themes` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `condition_id` int(11) unsigned NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `condition_id` (`condition_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Структура таблицы `menu_items`
--

CREATE TABLE IF NOT EXISTS `menu_items` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `menu_id` int(11) unsigned NOT NULL,
  `uri` varchar(1024) character set cp1251 NOT NULL,
  `parent_id` int(11) NOT NULL,
  `ordering` int(11) NOT NULL,
  `active_condition_id` int(11) unsigned NOT NULL,
  `route_id` int(11) unsigned NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `menu_id` (`menu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Структура таблицы `menu_items_i18n`
--

CREATE TABLE IF NOT EXISTS `menu_items_i18n` (
  `id` int(11) unsigned NOT NULL,
  `language` char(5) NOT NULL,
  `title` varchar(1024) character set cp1251 NOT NULL,
  PRIMARY KEY  (`id`,`language`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `menu_item_params`
--

CREATE TABLE IF NOT EXISTS `menu_item_params` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `item_id` int(11) unsigned NOT NULL,
  `name` varchar(255) character set cp1251 NOT NULL,
  `value` varchar(255) character set cp1251 NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `menuitem_id` (`item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Структура таблицы `menu_menus`
--

CREATE TABLE IF NOT EXISTS `menu_menus` (
  `id` int(11) unsigned NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `menu_menus_i18n`
--

CREATE TABLE IF NOT EXISTS `menu_menus_i18n` (
  `id` int(11) unsigned NOT NULL,
  `language` char(5) NOT NULL,
  `title` varchar(1024) NOT NULL,
  PRIMARY KEY  (`id`,`language`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `acl_roles_i18n`
--
ALTER TABLE `acl_roles_i18n`
  ADD CONSTRAINT `acl_roles_i18n_ibfk_1` FOREIGN KEY (`id`) REFERENCES `acl_roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `acl_roles_i18n_ibfk_2` FOREIGN KEY (`language`) REFERENCES `engine_languages` (`code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `acl_roles_users`
--
ALTER TABLE `acl_roles_users`
  ADD CONSTRAINT `acl_roles_users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `acl_roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `acl_roles_users_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `auth_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `acl_rules`
--
ALTER TABLE `acl_rules`
  ADD CONSTRAINT `acl_rules_ibfk_1` FOREIGN KEY (`assert_condition_id`) REFERENCES `acl_rules` (`assert_condition_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `auth_methods_i18n`
--
ALTER TABLE `auth_methods_i18n`
  ADD CONSTRAINT `auth_methods_i18n_ibfk_1` FOREIGN KEY (`id`) REFERENCES `auth_methods` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_methods_i18n_ibfk_2` FOREIGN KEY (`language`) REFERENCES `engine_languages` (`code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `auth_method_basic`
--
ALTER TABLE `auth_method_basic`
  ADD CONSTRAINT `auth_method_basic_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `auth_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `auth_method_openid`
--
ALTER TABLE `auth_method_openid`
  ADD CONSTRAINT `auth_method_openid_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `auth_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `auth_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `auth_user_params_i18n`
--
ALTER TABLE `auth_user_params_i18n`
  ADD CONSTRAINT `auth_user_params_i18n_ibfk_1` FOREIGN KEY (`id`) REFERENCES `auth_user_params` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_user_params_i18n_ibfk_2` FOREIGN KEY (`language`) REFERENCES `engine_languages` (`code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `auth_user_param_values`
--
ALTER TABLE `auth_user_param_values`
  ADD CONSTRAINT `auth_user_param_values_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `auth_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_user_param_values_ibfk_2` FOREIGN KEY (`param_id`) REFERENCES `auth_user_params` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `content_items_i18n`
--
ALTER TABLE `content_items_i18n`
  ADD CONSTRAINT `content_items_i18n_ibfk_2` FOREIGN KEY (`language`) REFERENCES `engine_languages` (`code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `engine_block_params`
--
ALTER TABLE `engine_block_params`
  ADD CONSTRAINT `engine_block_params_ibfk_1` FOREIGN KEY (`block_id`) REFERENCES `engine_blocks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `engine_conditions_i18n`
--
ALTER TABLE `engine_conditions_i18n`
  ADD CONSTRAINT `engine_conditions_i18n_ibfk_1` FOREIGN KEY (`id`) REFERENCES `engine_conditions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `engine_conditions_i18n_ibfk_2` FOREIGN KEY (`language`) REFERENCES `engine_languages` (`code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `engine_pageheaders_i18n`
--
ALTER TABLE `engine_pageheaders_i18n`
  ADD CONSTRAINT `engine_pageheaders_i18n_ibfk_1` FOREIGN KEY (`id`) REFERENCES `engine_pageheaders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `engine_pageheaders_i18n_ibfk_2` FOREIGN KEY (`language`) REFERENCES `engine_languages` (`code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `engine_routes_i18n`
--
ALTER TABLE `engine_routes_i18n`
  ADD CONSTRAINT `engine_routes_i18n_ibfk_1` FOREIGN KEY (`id`) REFERENCES `engine_routes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `engine_routes_i18n_ibfk_2` FOREIGN KEY (`language`) REFERENCES `engine_languages` (`code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `engine_themes`
--
ALTER TABLE `engine_themes`
  ADD CONSTRAINT `engine_themes_ibfk_1` FOREIGN KEY (`condition_id`) REFERENCES `engine_conditions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `menu_menus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `menu_items_i18n`
--
ALTER TABLE `menu_items_i18n`
  ADD CONSTRAINT `menu_items_i18n_ibfk_1` FOREIGN KEY (`id`) REFERENCES `menu_items` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `menu_items_i18n_ibfk_2` FOREIGN KEY (`language`) REFERENCES `engine_languages` (`code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `menu_item_params`
--
ALTER TABLE `menu_item_params`
  ADD CONSTRAINT `menu_item_params_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `menu_items` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `menu_menus_i18n`
--
ALTER TABLE `menu_menus_i18n`
  ADD CONSTRAINT `menu_menus_i18n_ibfk_1` FOREIGN KEY (`id`) REFERENCES `menu_menus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `menu_menus_i18n_ibfk_2` FOREIGN KEY (`language`) REFERENCES `engine_languages` (`code`) ON DELETE CASCADE ON UPDATE CASCADE;
