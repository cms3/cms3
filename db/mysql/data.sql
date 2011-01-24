-- phpMyAdmin SQL Dump
-- version 3.3.8.1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Янв 17 2011 г., 18:44
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

--
-- Дамп данных таблицы `acl_roles`
--

INSERT INTO `acl_roles` (`id`, `parent_id`, `ordering`) VALUES
(1, 0, 1),
(2, 1, 2),
(3, 1, 3);

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

--
-- Дамп данных таблицы `acl_roles_i18n`
--

INSERT INTO `acl_roles_i18n` (`id`, `language`, `name`) VALUES
(1, 'en_us', 'ROOT'),
(1, 'ru_ru', 'Для перемещения между полями значения, используйте клавишу TAB, либо CTRL+клавиши со стрелками - для свободного перемещения Для перемещения между полями значения, используйте клавишу TAB, либо CTRL+клавиши со стрелками - для свободного перемещения Для пер'),
(2, 'en_us', 'Administrators'),
(2, 'ru_ru', 'Администраторы'),
(3, 'en_us', 'Users'),
(3, 'ru_ru', 'Пользователи'),
(3, 'uk_uk', '44');

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

--
-- Дамп данных таблицы `acl_roles_users`
--

INSERT INTO `acl_roles_users` (`role_id`, `user_id`) VALUES
(3, 1);

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

--
-- Дамп данных таблицы `acl_rules`
--

INSERT INTO `acl_rules` (`id`, `role`, `resource`, `privilege`, `assert_condition_id`, `allow`, `enabled`, `ordering`) VALUES
(1, 'user_1', 'test_res', 'test_priv', NULL, 1, 1, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `auth_methods`
--

CREATE TABLE IF NOT EXISTS `auth_methods` (
  `id` int(12) unsigned NOT NULL auto_increment,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `auth_methods`
--

INSERT INTO `auth_methods` (`id`) VALUES
(1),
(2);

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

--
-- Дамп данных таблицы `auth_methods_i18n`
--

INSERT INTO `auth_methods_i18n` (`id`, `language`, `name`) VALUES
(1, 'en_us', 'Basic'),
(1, 'ru_ru', 'Стандартный'),
(2, 'en_us', 'OpenID'),
(2, 'ru_ru', 'OpenID');

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

--
-- Дамп данных таблицы `auth_method_basic`
--

INSERT INTO `auth_method_basic` (`id`, `user_id`, `username`, `password`) VALUES
(1, 1, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99');

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

--
-- Дамп данных таблицы `auth_method_openid`
--


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

--
-- Дамп данных таблицы `auth_tokens`
--


-- --------------------------------------------------------

--
-- Структура таблицы `auth_users`
--

CREATE TABLE IF NOT EXISTS `auth_users` (
  `id` int(12) unsigned NOT NULL auto_increment,
  `enabled` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `auth_users`
--

INSERT INTO `auth_users` (`id`, `enabled`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `auth_user_params`
--

CREATE TABLE IF NOT EXISTS `auth_user_params` (
  `id` int(12) unsigned NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `auth_user_params`
--

INSERT INTO `auth_user_params` (`id`, `name`) VALUES
(1, 'first_name');

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

--
-- Дамп данных таблицы `auth_user_params_i18n`
--

INSERT INTO `auth_user_params_i18n` (`id`, `language`, `label`) VALUES
(1, 'en_us', 'First name'),
(1, 'ru_ru', 'Имя');

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

--
-- Дамп данных таблицы `auth_user_param_values`
--

INSERT INTO `auth_user_param_values` (`id`, `user_id`, `param_id`, `value`) VALUES
(1, 1, 1, 'Янис');

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

--
-- Дамп данных таблицы `content_items_history`
--


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

--
-- Дамп данных таблицы `content_items_i18n`
--

INSERT INTO `content_items_i18n` (`id`, `language`, `title`, `text`) VALUES
(1, 'ru_ru', 'Я — контент!', 'Умею поддерживать <a href="http://ru.wikipedia.org/wiki/HTML"><b>HTML</b></a>.');

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

--
-- Дамп данных таблицы `content_items_revisions`
--

INSERT INTO `content_items_revisions` (`id`, `save_date`, `save_user`, `save_comment`, `state`) VALUES
(1, '2011-01-14 00:00:00', 1, '', 1);

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

--
-- Дамп данных таблицы `content_items_test`
--


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

--
-- Дамп данных таблицы `engine_blocks`
--

INSERT INTO `engine_blocks` (`id`, `position`, `component`, `action`, `ordering`, `condition_id`) VALUES
(1, 'center', 'cms3\\shop', '', 1, 1),
(2, 'center', 'cms3\\shop', 'catalog', 2, 2),
(3, 'center', 'cms3\\gallery', 'product_images', 2, 3),
(4, 'left', 'cms3\\menu', '', 1, 0),
(5, 'left', 'cms3\\auth', 'login_form', 2, 0),
(6, 'center', 'cms3\\content', '', 1, 4);

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

--
-- Дамп данных таблицы `engine_block_params`
--

INSERT INTO `engine_block_params` (`id`, `block_id`, `name`, `value`) VALUES
(1, 2, 'count', '10'),
(2, 2, 'category_id', '150'),
(4, 4, 'menu_id', '1');

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

--
-- Дамп данных таблицы `engine_conditions`
--

INSERT INTO `engine_conditions` (`id`, `condition`, `component`, `user`) VALUES
(1, 'gallery_photo_id = "" and content_item_id = ""', '', 0),
(2, 'content_item_id = "" and (shop_category_id = "" and gallery_photo_id = "")', '', 0),
(3, 'shop_product_id<>""', '', 0),
(4, 'content_item_id <> ""', '', 0);

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

--
-- Дамп данных таблицы `engine_conditions_i18n`
--


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

--
-- Дамп данных таблицы `engine_languages`
--

INSERT INTO `engine_languages` (`code`, `short_code`, `title`, `active`) VALUES
('en_us', 'en', 'English', 1),
('ru_ru', 'ru', 'Русский', 1),
('uk_uk', 'uk', 'Українська', 0);

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

--
-- Дамп данных таблицы `engine_modules`
--

INSERT INTO `engine_modules` (`id`, `name`, `module`, `ordering`, `core`, `component`, `enabled`) VALUES
(1, 'database', '', 1, 1, 0, 1),
(2, 'jelly', '', 4, 1, 0, 1),
(3, 'cms3\\expression', '', 2, 1, 0, 1),
(4, 'cms3\\engine', '', 3, 1, 0, 1),
(5, 'cms3\\shop', '', 0, 0, 1, 1),
(6, 'cms3\\gallery', '', 0, 0, 1, 1),
(7, 'cms3\\menu', '', 0, 0, 1, 1),
(8, 'cms3\\template_phptal', '', 5, 1, 0, 1),
(9, 'cache', '', 0, 1, 0, 1),
(11, 'cms3\\auth', '', 7, 1, 0, 1),
(12, 'cms3\\auth_openid', '', 15, 0, 0, 1),
(13, 'openid', '', 14, 0, 0, 1),
(14, 'cms3\\template_native', '', 0, 1, 0, 1),
(15, 'cms3\\auth_basic', '', 0, 0, 0, 1),
(16, 'cms3\\content', '', 0, 0, 1, 1),
(17, 'orm', '', 0, 1, 0, 1),
(18, 'acl', '', 0, 1, 0, 1),
(19, 'cms3\\acl', '', 0, 1, 0, 1);

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

--
-- Дамп данных таблицы `engine_pageheaders`
--

INSERT INTO `engine_pageheaders` (`id`, `tag`, `attribute`, `condition_id`) VALUES
(1, 'title', '', 1);

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

--
-- Дамп данных таблицы `engine_pageheaders_i18n`
--

INSERT INTO `engine_pageheaders_i18n` (`id`, `language`, `value`) VALUES
(1, 'ru_ru', 'Магазин');

-- --------------------------------------------------------

--
-- Структура таблицы `engine_routes`
--

CREATE TABLE IF NOT EXISTS `engine_routes` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `format` varchar(1024) character set cp1251 NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `engine_routes`
--

INSERT INTO `engine_routes` (`id`, `format`) VALUES
(1, 'shop(/<shop_path:.*>)'),
(2, 'gallery(/<gallery_album_id>(/<gallery_photo_id>))'),
(3, '<profile:profile>'),
(4, 'content(/<content_item_id>)');

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

--
-- Дамп данных таблицы `engine_routes_i18n`
--


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

--
-- Дамп данных таблицы `engine_themes`
--

INSERT INTO `engine_themes` (`id`, `name`, `condition_id`) VALUES
(1, 'default_blue', 4);

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

--
-- Дамп данных таблицы `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `uri`, `parent_id`, `ordering`, `active_condition_id`, `route_id`) VALUES
(1, 1, '', 0, 1, 0, 1),
(2, 1, '', 0, 2, 0, 1),
(3, 1, '', 2, 3, 0, 1),
(4, 1, '', 0, 4, 0, 2),
(5, 1, '/action/cms3/gallery/gallery/clear_cache', 0, 50, 0, 0),
(6, 1, '', 0, 5, 0, 4);

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

--
-- Дамп данных таблицы `menu_items_i18n`
--

INSERT INTO `menu_items_i18n` (`id`, `language`, `title`) VALUES
(1, 'en_us', 'Main'),
(1, 'ru_ru', 'Главная'),
(2, 'en_us', 'Category'),
(2, 'ru_ru', 'Категория'),
(3, 'en_us', 'Product'),
(3, 'ru_ru', 'Товар'),
(4, 'en_us', 'Gallery'),
(4, 'ru_ru', 'Галерея'),
(5, 'en_us', 'Clear cache'),
(5, 'ru_ru', 'Очистить кэш'),
(6, 'ru_ru', 'О магазине');

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

--
-- Дамп данных таблицы `menu_item_params`
--

INSERT INTO `menu_item_params` (`id`, `item_id`, `name`, `value`) VALUES
(1, 4, 'gallery_album_id', '1'),
(2, 4, 'gallery_photo_id', '2'),
(3, 2, 'shop_category_id', '1'),
(4, 3, 'shop_category_id', '1'),
(5, 3, 'shop_product_id', '1'),
(6, 6, 'content_item_id', '1');

-- --------------------------------------------------------

--
-- Структура таблицы `menu_menus`
--

CREATE TABLE IF NOT EXISTS `menu_menus` (
  `id` int(11) unsigned NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `menu_menus`
--

INSERT INTO `menu_menus` (`id`) VALUES
(1);

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
-- Дамп данных таблицы `menu_menus_i18n`
--


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
