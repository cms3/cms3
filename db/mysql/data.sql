-- phpMyAdmin SQL Dump
-- version 3.3.8.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 17, 2011 at 01:52 PM
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

--
-- Dumping data for table `acl_roles`
--

INSERT INTO `acl_roles` (`id`, `parent_id`, `ordering`) VALUES
(1, 0, 1),
(2, 1, 2),
(3, 1, 3);

--
-- Dumping data for table `acl_roles_i18n`
--

INSERT INTO `acl_roles_i18n` (`id`, `role_id`, `language`, `name`) VALUES
(1, 1, 'en_us', 'ROOT'),
(2, 1, 'ru_ru', 'Для перемещения между полями значения, используйте клавишу TAB, либо CTRL+клавиши со стрелками - для свободного перемещения Для перемещения между полями значения, используйте клавишу TAB, либо CTRL+клавиши со стрелками - для свободного перемещения Для пер'),
(3, 2, 'en_us', 'Administrators'),
(4, 2, 'ru_ru', 'Администраторы'),
(5, 3, 'en_us', 'Users'),
(6, 3, 'ru_ru', 'Пользователи'),
(7, 3, 'uk_uk', '44');

--
-- Dumping data for table `acl_roles_users`
--

INSERT INTO `acl_roles_users` (`role_id`, `user_id`) VALUES
(3, 1);

--
-- Dumping data for table `acl_rules`
--

INSERT INTO `acl_rules` (`id`, `role`, `resource`, `privilege`, `assert_condition_id`, `allow`, `enabled`, `ordering`) VALUES
(1, 'user_1', 'test_res', 'test_priv', NULL, 1, 1, 0);

--
-- Dumping data for table `auth_methods`
--

INSERT INTO `auth_methods` (`id`) VALUES
(1),
(2);

--
-- Dumping data for table `auth_methods_i18n`
--

INSERT INTO `auth_methods_i18n` (`id`, `method_id`, `language`, `name`) VALUES
(1, 1, 'en_us', 'Basic'),
(2, 1, 'ru_ru', 'Стандартный'),
(3, 2, 'en_us', 'OpenID'),
(4, 2, 'ru_ru', 'OpenID');

--
-- Dumping data for table `auth_method_basic`
--

INSERT INTO `auth_method_basic` (`id`, `user_id`, `username`, `password`) VALUES
(1, 1, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99');

--
-- Dumping data for table `auth_method_openid`
--


--
-- Dumping data for table `auth_tokens`
--

INSERT INTO `auth_tokens` (`id`, `user_id`, `token`, `created`, `expires`) VALUES
(1, 1, 'aaSi9l5I36qc7It98k57VdGjsPRLlPUm', '2011-03-21 14:05:14', '2011-03-21 14:05:14'),
(2, 1, 'DtiikMM4i4c9w7SFCP0qoDXtTmxkyCK0', '2011-03-21 14:05:15', '2011-03-21 14:05:15'),
(3, 1, 'O47YjsULVVjagc9IXBw5Y9GOMHEWwYt6', '2011-03-21 14:05:16', '2011-03-21 14:05:16'),
(4, 1, 'NHozd20ymY0SfmuPr1QUyPC1vp31R0aW', '2011-03-21 14:09:08', '2011-03-21 14:09:08'),
(5, 1, 'ejL15mA4hO0qOXbItDjhkIDShfvYPnDS', '2011-03-21 14:09:12', '2011-03-21 14:09:12'),
(7, 1, 'CtYbQWybfIpjXZeryYkxC93Yrh83bzPT', '2011-05-10 16:58:33', '2011-05-10 16:58:33'),
(10, 1, 'WWpPHdk5mP392gQ7qNmuGypVBZt9mxz8', '2011-05-10 18:05:02', '2011-05-10 18:05:02'),
(12, 1, 'njFFDicig3ovoWVnW9IzSmAnhCq4skEF', '2011-05-20 14:02:18', '2011-05-20 14:02:18');

--
-- Dumping data for table `auth_users`
--

INSERT INTO `auth_users` (`id`, `enabled`) VALUES
(1, 1);

--
-- Dumping data for table `auth_user_params`
--

INSERT INTO `auth_user_params` (`id`, `name`) VALUES
(1, 'first_name');

--
-- Dumping data for table `auth_user_params_i18n`
--

INSERT INTO `auth_user_params_i18n` (`id`, `user_param_id`, `language`, `label`) VALUES
(1, 1, 'en_us', 'First name'),
(2, 1, 'ru_ru', 'Имя');

--
-- Dumping data for table `auth_user_param_values`
--

INSERT INTO `auth_user_param_values` (`id`, `user_id`, `param_id`, `value`) VALUES
(1, 1, 1, 'Янис');

--
-- Dumping data for table `content_items`
--

INSERT INTO `content_items` (`id`, `state`) VALUES
(1, 1);

--
-- Dumping data for table `content_items_i18n`
--

INSERT INTO `content_items_i18n` (`id`, `item_id`, `language`, `title`, `text`) VALUES
(1, 1, 'ru_ru', 'Я — контент!', 'Умею поддерживать <a href="http://ru.wikipedia.org/wiki/HTML"><b>HTML</b></a>.');

--
-- Dumping data for table `engine_blocks`
--

INSERT INTO `engine_blocks` (`id`, `position`, `component`, `action`, `ordering`, `condition_id`, `params`) VALUES
(1, 'center', 'cms3\\shop', '', 1, 1, 'a:0:{}'),
(2, 'center', 'cms3\\shop', 'catalog', 2, 2, 'a:2:{s:5:"count";s:2:"10";s:11:"category_id";s:3:"150";}'),
(3, 'center', 'cms3\\gallery', 'product_images', 2, 3, 'a:0:{}'),
(4, 'left', 'cms3\\menu', '', 1, 0, 'a:1:{s:7:"menu_id";s:1:"1";}'),
(5, 'left', 'cms3\\auth', 'login_form', 2, 0, 'a:0:{}'),
(6, 'center', 'cms3\\content', '', 1, 4, 'a:0:{}'),
(7, 'admin', 'cms3\\admin', '', 0, 5, 'a:0:{}');

--
-- Dumping data for table `engine_conditions`
--

INSERT INTO `engine_conditions` (`id`, `condition`, `component`, `user`) VALUES
(1, 'gallery_photo_id = "" and content_item_id = ""', '', 0),
(2, 'content_item_id = "" and (shop_category_id = "" and gallery_photo_id = "")', '', 0),
(3, 'shop_product_id<>""', '', 0),
(4, 'content_item_id <> ""', '', 0),
(5, 'admin <> ""', '', 0);

--
-- Dumping data for table `engine_conditions_i18n`
--


--
-- Dumping data for table `engine_languages`
--

INSERT INTO `engine_languages` (`code`, `short_code`, `title`, `active`) VALUES
('en_us', 'en', 'English', 1),
('ru_ru', 'ru', 'Русский', 1),
('uk_uk', 'uk', 'Українська', 0);

--
-- Dumping data for table `engine_modules`
--

INSERT INTO `engine_modules` (`id`, `name`, `module`, `ordering`, `core`, `component`, `enabled`) VALUES
(1, 'database', '', 1, 1, 0, 1),
(2, 'jelly', '', 2, 1, 0, 1),
(3, 'cms3\\expression', '', 2, 1, 0, 1),
(4, 'cms3\\engine', '', 3, 1, 0, 1),
(5, 'cms3\\shop', '', 50, 0, 1, 1),
(6, 'cms3\\gallery', '', 50, 0, 1, 1),
(7, 'cms3\\menu', '', 50, 0, 1, 1),
(8, 'cms3\\template_phptal', '', 5, 1, 0, 1),
(9, 'cache', '', 50, 1, 0, 1),
(11, 'cms3\\auth', '', 7, 1, 0, 1),
(12, 'cms3\\auth_openid', '', 15, 0, 0, 1),
(13, 'openid', '', 14, 0, 0, 1),
(14, 'cms3\\template_native', '', 50, 1, 0, 1),
(15, 'cms3\\auth_basic', '', 50, 0, 0, 1),
(16, 'cms3\\content', '', 50, 0, 1, 1),
(17, 'orm', '', 50, 1, 0, 1),
(18, 'acl', '', 50, 1, 0, 1),
(19, 'cms3\\acl', '', 50, 1, 0, 1),
(20, 'cms3\\ui', '', 50, 0, 0, 1),
(21, 'cms3\\ui_extjs', '', 50, 0, 0, 1),
(22, 'cms3\\admin', '', 50, 0, 1, 1),
(23, 'formo', '', 1, 0, 0, 1),
(24, 'formo-jelly', '', 2, 0, 0, 0),
(25, 'kint', '', 0, 1, 0, 1);

--
-- Dumping data for table `engine_modules_i18n`
--

INSERT INTO `engine_modules_i18n` (`id`, `module_id`, `language`, `title`) VALUES
(1, 5, 'ru_ru', 'Интернет-магазин'),
(2, 6, 'ru_ru', 'Галерея'),
(3, 16, 'ru_ru', 'Контент');

--
-- Dumping data for table `engine_pageheaders`
--

INSERT INTO `engine_pageheaders` (`id`, `tag`, `attribute`, `condition_id`) VALUES
(1, 'title', '', 1);

--
-- Dumping data for table `engine_pageheaders_i18n`
--

INSERT INTO `engine_pageheaders_i18n` (`id`, `pageheader_id`, `language`, `value`) VALUES
(1, 1, 'ru_ru', 'Магазин');

--
-- Dumping data for table `engine_routes`
--

INSERT INTO `engine_routes` (`id`, `format`) VALUES
(1, 'shop(/<shop_path:.*>)'),
(2, 'gallery(/<gallery_album_id>(/<gallery_photo_id>))'),
(3, '<profile:profile>'),
(4, 'content(/<content_item_id>)'),
(5, '(<admin:admin>(/<id>))');

--
-- Dumping data for table `engine_routes_i18n`
--


--
-- Dumping data for table `engine_themes`
--

INSERT INTO `engine_themes` (`id`, `name`, `condition_id`) VALUES
(2, 'default_blue', 4),
(3, 'admin_extjs', 5);

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `uri`, `parent_id`, `ordering`, `active_condition_id`, `route_id`, `params`) VALUES
(1, 1, '', 0, 1, 0, 1, 'a:0:{}'),
(2, 1, '', 0, 2, 0, 1, 'a:1:{s:16:"shop_category_id";s:1:"1";}'),
(3, 1, '', 2, 3, 0, 1, 'a:2:{s:16:"shop_category_id";s:1:"1";s:15:"shop_product_id";s:1:"1";}'),
(4, 1, '', 0, 4, 0, 2, 'a:2:{s:16:"gallery_album_id";s:1:"1";s:16:"gallery_photo_id";s:1:"2";}'),
(5, 1, '/action/cms3/gallery/gallery/clear_cache', 0, 50, 0, 0, 'a:0:{}'),
(6, 1, '', 0, 5, 0, 4, 'a:1:{s:15:"content_item_id";s:1:"1";}'),
(7, 1, '/admin', 0, 0, 0, 0, 'a:0:{}');

--
-- Dumping data for table `menu_items_i18n`
--

INSERT INTO `menu_items_i18n` (`id`, `item_id`, `language`, `title`) VALUES
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
(12, 7, 'ru_ru', 'Админпанель');

--
-- Dumping data for table `menu_menus`
--

INSERT INTO `menu_menus` (`id`) VALUES
(1);

--
-- Dumping data for table `menu_menus_i18n`
--

