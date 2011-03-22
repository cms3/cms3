-- phpMyAdmin SQL Dump
-- version 3.3.8.1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Мар 21 2011 г., 14:20
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

--
-- Дамп данных таблицы `acl_roles`
--

INSERT INTO `acl_roles` (`id`, `parent_id`, `ordering`) VALUES
(1, 0, 1),
(2, 1, 2),
(3, 1, 3);

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

--
-- Дамп данных таблицы `acl_roles_users`
--

INSERT INTO `acl_roles_users` (`role_id`, `user_id`) VALUES
(3, 1);

--
-- Дамп данных таблицы `acl_rules`
--

INSERT INTO `acl_rules` (`id`, `role`, `resource`, `privilege`, `assert_condition_id`, `allow`, `enabled`, `ordering`) VALUES
(1, 'user_1', 'test_res', 'test_priv', NULL, 1, 1, 0);

--
-- Дамп данных таблицы `auth_methods`
--

INSERT INTO `auth_methods` (`id`) VALUES
(1),
(2);

--
-- Дамп данных таблицы `auth_methods_i18n`
--

INSERT INTO `auth_methods_i18n` (`id`, `language`, `name`) VALUES
(1, 'en_us', 'Basic'),
(1, 'ru_ru', 'Стандартный'),
(2, 'en_us', 'OpenID'),
(2, 'ru_ru', 'OpenID');

--
-- Дамп данных таблицы `auth_method_basic`
--

INSERT INTO `auth_method_basic` (`id`, `user_id`, `username`, `password`) VALUES
(1, 1, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99');

--
-- Дамп данных таблицы `auth_method_openid`
--


--
-- Дамп данных таблицы `auth_tokens`
--

INSERT INTO `auth_tokens` (`id`, `user_id`, `token`, `created`, `expires`) VALUES
(1, 1, 'aaSi9l5I36qc7It98k57VdGjsPRLlPUm', '2011-03-21 14:05:14', '2011-03-21 14:05:14'),
(2, 1, 'DtiikMM4i4c9w7SFCP0qoDXtTmxkyCK0', '2011-03-21 14:05:15', '2011-03-21 14:05:15'),
(3, 1, 'O47YjsULVVjagc9IXBw5Y9GOMHEWwYt6', '2011-03-21 14:05:16', '2011-03-21 14:05:16'),
(4, 1, 'NHozd20ymY0SfmuPr1QUyPC1vp31R0aW', '2011-03-21 14:09:08', '2011-03-21 14:09:08'),
(5, 1, 'ejL15mA4hO0qOXbItDjhkIDShfvYPnDS', '2011-03-21 14:09:12', '2011-03-21 14:09:12');

--
-- Дамп данных таблицы `auth_users`
--

INSERT INTO `auth_users` (`id`, `enabled`) VALUES
(1, 1);

--
-- Дамп данных таблицы `auth_user_params`
--

INSERT INTO `auth_user_params` (`id`, `name`) VALUES
(1, 'first_name');

--
-- Дамп данных таблицы `auth_user_params_i18n`
--

INSERT INTO `auth_user_params_i18n` (`id`, `language`, `label`) VALUES
(1, 'en_us', 'First name'),
(1, 'ru_ru', 'Имя');

--
-- Дамп данных таблицы `auth_user_param_values`
--

INSERT INTO `auth_user_param_values` (`id`, `user_id`, `param_id`, `value`) VALUES
(1, 1, 1, 'Янис');

--
-- Дамп данных таблицы `content_items`
--

INSERT INTO `content_items` (`id`, `state`) VALUES
(1, 1);

--
-- Дамп данных таблицы `content_items_i18n`
--

INSERT INTO `content_items_i18n` (`id`, `language`, `title`, `text`) VALUES
(1, 'ru_ru', 'Я — контент!', 'Умею поддерживать <a href="http://ru.wikipedia.org/wiki/HTML"><b>HTML</b></a>.');

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

--
-- Дамп данных таблицы `engine_block_params`
--

INSERT INTO `engine_block_params` (`id`, `block_id`, `name`, `value`) VALUES
(1, 2, 'count', '10'),
(2, 2, 'category_id', '150'),
(4, 4, 'menu_id', '1');

--
-- Дамп данных таблицы `engine_conditions`
--

INSERT INTO `engine_conditions` (`id`, `condition`, `component`, `user`) VALUES
(1, 'gallery_photo_id = "" and content_item_id = ""', '', 0),
(2, 'content_item_id = "" and (shop_category_id = "" and gallery_photo_id = "")', '', 0),
(3, 'shop_product_id<>""', '', 0),
(4, 'content_item_id <> ""', '', 0);

--
-- Дамп данных таблицы `engine_conditions_i18n`
--


--
-- Дамп данных таблицы `engine_languages`
--

INSERT INTO `engine_languages` (`code`, `short_code`, `title`, `active`) VALUES
('en_us', 'en', 'English', 1),
('ru_ru', 'ru', 'Русский', 1),
('uk_uk', 'uk', 'Українська', 0);

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

--
-- Дамп данных таблицы `engine_pageheaders`
--

INSERT INTO `engine_pageheaders` (`id`, `tag`, `attribute`, `condition_id`) VALUES
(1, 'title', '', 1);

--
-- Дамп данных таблицы `engine_pageheaders_i18n`
--

INSERT INTO `engine_pageheaders_i18n` (`id`, `language`, `value`) VALUES
(1, 'ru_ru', 'Магазин');

--
-- Дамп данных таблицы `engine_routes`
--

INSERT INTO `engine_routes` (`id`, `format`) VALUES
(1, 'shop(/<shop_path:.*>)'),
(2, 'gallery(/<gallery_album_id>(/<gallery_photo_id>))'),
(3, '<profile:profile>'),
(4, 'content(/<content_item_id>)');

--
-- Дамп данных таблицы `engine_routes_i18n`
--


--
-- Дамп данных таблицы `engine_themes`
--

INSERT INTO `engine_themes` (`id`, `name`, `condition_id`) VALUES
(1, 'default_blue', 4);

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

--
-- Дамп данных таблицы `menu_menus`
--

INSERT INTO `menu_menus` (`id`) VALUES
(1);

--
-- Дамп данных таблицы `menu_menus_i18n`
--

