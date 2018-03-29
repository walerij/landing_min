-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 29 2018 г., 06:35
-- Версия сервера: 5.5.48
-- Версия PHP: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `land_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `home`
--

CREATE TABLE IF NOT EXISTS `home` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `name_proj` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `landings`
--

CREATE TABLE IF NOT EXISTS `landings` (
  `id` int(11) NOT NULL,
  `landing` varchar(255) DEFAULT NULL,
  `landing_info` text,
  `about_pupil` varchar(255) DEFAULT NULL,
  `about_lessons` varchar(255) DEFAULT NULL,
  `about_techno` varchar(255) DEFAULT NULL,
  `link_header` varchar(255) DEFAULT NULL,
  `theme` varchar(255) DEFAULT NULL,
  `slider` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `landings`
--

INSERT INTO `landings` (`id`, `landing`, `landing_info`, `about_pupil`, `about_lessons`, `about_techno`, `link_header`, `theme`, `slider`) VALUES
(1, 'Глубокое знакомство с PHP-фреймворком YII2', '<ul>\r\n<li><i class="glyphicon glyphicon-ok text-success"></i>&nbsp;&nbsp;Хочешь научиться быстро создавать сайты на liHli YII2?</li>\r\n<li><i class="glyphicon glyphicon-ok text-success"></i>&nbsp;&nbsp;Хочешь понимать, что и как работает внутри YII?</li>\r\n<li><i class="glyphicon glyphicon-ok text-success"></i>&nbsp;&nbsp;Хочешь cоздавать сайты, используя MVC?</li>\r\n<li><i class="glyphicon glyphicon-ok text-success"></i>&nbsp;&nbsp;Тогда тебе к нам!</li>\r\n</ul>\r\n', 'для тех, кто давно хочет создать web-проект\r\nдля начинающих программистов\r\nдля веб-разработчиков', 'Опыт в создании веб сайта с нуля\r\nзнакомство с технологией ASP.NET, ООП\r\nSQL-инъекции\r\nопыт по размещению сайта в сети интернет', 'Опыт в создании веб сайта с нуля\r\nзнакомство с технологией ASP.NET, ООП\r\nSQL-инъекции\r\nопыт по размещению сайта в сети интернет', 'https://www.videosharp.info/start/web/img/aspect.png', 'voronka', 'yes');

-- --------------------------------------------------------

--
-- Структура таблицы `landingsaudithory`
--

CREATE TABLE IF NOT EXISTS `landingsaudithory` (
  `id` int(11) NOT NULL,
  `landing_id` int(11) DEFAULT NULL,
  `audithory` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `landingsaudithory`
--

INSERT INTO `landingsaudithory` (`id`, `landing_id`, `audithory`) VALUES
(1, 1, 'для тех, кто давно хочет создать web-проект'),
(2, 1, 'для начинающих программистов'),
(3, 1, 'для веб-разработчиков');

-- --------------------------------------------------------

--
-- Структура таблицы `landingsauthors`
--

CREATE TABLE IF NOT EXISTS `landingsauthors` (
  `id` int(11) NOT NULL,
  `landing_id` int(11) DEFAULT NULL,
  `fio` varchar(255) DEFAULT NULL,
  `info` varchar(255) DEFAULT NULL,
  `lilk_photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `landingsauthors`
--

INSERT INTO `landingsauthors` (`id`, `landing_id`, `fio`, `info`, `lilk_photo`) VALUES
(1, 1, 'Евгений Волосатов', NULL, 'https://www.videosharp.info/users/1/avatar/1_avatar_1.png');

-- --------------------------------------------------------

--
-- Структура таблицы `landingscomments`
--

CREATE TABLE IF NOT EXISTS `landingscomments` (
  `id` int(11) NOT NULL,
  `landing_id` int(11) DEFAULT NULL,
  `fio` varchar(255) DEFAULT NULL,
  `link_photo` varchar(255) DEFAULT NULL,
  `text_comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `landingsscreenlinks`
--

CREATE TABLE IF NOT EXISTS `landingsscreenlinks` (
  `id` int(11) NOT NULL,
  `landing_id` int(11) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1520884401),
('m180312_105310_create_home_table', 1520884403),
('m180312_110018_create_landings_table', 1520884403),
('m180312_110613_create_landingsauthors_table', 1520884403),
('m180312_110857_create_landingscomments_table', 1520884403),
('m180312_112717_create_landingsscreenlinks_table', 1520884403),
('m180312_114859_create_landingsaudithory_table', 1520884403),
('m180314_114712_add_position_column_to_landings_table', 1521343722),
('m180327_191805_add_position_column_to_landings_table', 1522178435);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `landings`
--
ALTER TABLE `landings`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `landingsaudithory`
--
ALTER TABLE `landingsaudithory`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `landingsauthors`
--
ALTER TABLE `landingsauthors`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `landingscomments`
--
ALTER TABLE `landingscomments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `landingsscreenlinks`
--
ALTER TABLE `landingsscreenlinks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `landings`
--
ALTER TABLE `landings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `landingsaudithory`
--
ALTER TABLE `landingsaudithory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `landingsauthors`
--
ALTER TABLE `landingsauthors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `landingscomments`
--
ALTER TABLE `landingscomments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `landingsscreenlinks`
--
ALTER TABLE `landingsscreenlinks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
