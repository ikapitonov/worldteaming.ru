-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июл 08 2019 г., 03:48
-- Версия сервера: 5.7.25-28-log
-- Версия PHP: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `host1770875`
--

-- --------------------------------------------------------

--
-- Структура таблицы `forumComIdea`
--

CREATE TABLE `forumComIdea` (
  `parent_id` int(13) NOT NULL,
  `id` int(15) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `text` varchar(10000) NOT NULL,
  `iThink` int(2) NOT NULL,
  `yourLike` int(2) NOT NULL,
  `howLikes` int(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `forumComLikes`
--

CREATE TABLE `forumComLikes` (
  `user_id` int(11) NOT NULL,
  `post_id` int(19) NOT NULL,
  `its` int(2) NOT NULL,
  `parent_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `forumComments`
--

CREATE TABLE `forumComments` (
  `parent_id` int(13) NOT NULL,
  `id` int(15) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `text` varchar(10000) NOT NULL,
  `yourLike` int(2) NOT NULL,
  `howLikes` int(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `forumComTask`
--

CREATE TABLE `forumComTask` (
  `parent_id` int(13) NOT NULL,
  `id` int(15) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `text` varchar(10000) NOT NULL,
  `iThink` int(2) NOT NULL,
  `yourLike` int(2) NOT NULL,
  `howLikes` int(17) NOT NULL,
  `statusCom` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `forumMainLikes`
--

CREATE TABLE `forumMainLikes` (
  `user_id` int(11) NOT NULL,
  `post_id` int(15) NOT NULL,
  `its` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `startups`
--

CREATE TABLE `startups` (
  `id` int(13) NOT NULL,
  `date_born` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(40) NOT NULL,
  `status` varchar(40) NOT NULL,
  `type` varchar(40) NOT NULL,
  `area` varchar(40) DEFAULT NULL,
  `people` int(13) NOT NULL,
  `views` int(16) DEFAULT NULL,
  `avatar_src` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `startups`
--

INSERT INTO `startups` (`id`, `date_born`, `name`, `status`, `type`, `area`, `people`, `views`, `avatar_src`) VALUES
(1, '2019-07-08 00:20:32', 'WorldTeaming', 'Развивающийся проект', 'Агенство', 'ИТ, интернет', 1, 8, '1-_-Avatar-_-.png');

-- --------------------------------------------------------

--
-- Структура таблицы `startups_text`
--

CREATE TABLE `startups_text` (
  `parent_id` int(13) NOT NULL,
  `idea` varchar(1201) NOT NULL,
  `purpose` varchar(1201) NOT NULL,
  `problems` varchar(1201) NOT NULL,
  `philosophy` varchar(1201) NOT NULL,
  `comment` varchar(1201) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `startups_text`
--

INSERT INTO `startups_text` (`parent_id`, `idea`, `purpose`, `problems`, `philosophy`, `comment`) VALUES
(1, 'fdd', 'fdfd', 'fdfd', 'fdfd', 'fdfd');

-- --------------------------------------------------------

--
-- Структура таблицы `startup_deleter_people`
--

CREATE TABLE `startup_deleter_people` (
  `id` int(17) NOT NULL,
  `parent_id` int(13) NOT NULL,
  `user_id` int(11) NOT NULL,
  `who_delete` int(11) NOT NULL,
  `text` varchar(1201) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `startup_forums_docs`
--

CREATE TABLE `startup_forums_docs` (
  `parent_id` int(13) NOT NULL,
  `id` int(15) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `count_views` int(17) NOT NULL,
  `count_comments` int(17) NOT NULL,
  `count_likes` int(17) NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `text` varchar(20000) NOT NULL,
  `my_like` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `startup_forums_idea`
--

CREATE TABLE `startup_forums_idea` (
  `parent_id` int(13) NOT NULL,
  `id` int(15) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `count_views` int(17) NOT NULL,
  `count_comments` int(17) NOT NULL,
  `count_likes` int(17) NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `text` varchar(20000) NOT NULL,
  `my_like` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `startup_forums_task`
--

CREATE TABLE `startup_forums_task` (
  `parent_id` int(13) NOT NULL,
  `id` int(15) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `count_views` int(17) NOT NULL,
  `count_comments` int(17) NOT NULL,
  `count_likes` int(17) NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `text` varchar(20000) NOT NULL,
  `company` varchar(30) NOT NULL,
  `comment` varchar(1201) DEFAULT NULL,
  `my_like` int(2) NOT NULL,
  `status` int(2) NOT NULL,
  `who_id` int(11) DEFAULT NULL,
  `deleter` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `startup_task_cg`
--

CREATE TABLE `startup_task_cg` (
  `id` int(15) NOT NULL,
  `cg` varchar(5) NOT NULL,
  `parent_cg` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `startup_verify_users`
--

CREATE TABLE `startup_verify_users` (
  `parent_id` int(13) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `verify` int(2) NOT NULL,
  `creater` int(2) DEFAULT NULL,
  `numTask` int(15) DEFAULT NULL,
  `textBig` varchar(1201) DEFAULT NULL,
  `who_insert` int(11) DEFAULT NULL,
  `textSmall` varchar(26) DEFAULT NULL,
  `who_change` int(11) DEFAULT NULL,
  `id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `startup_verify_users`
--

INSERT INTO `startup_verify_users` (`parent_id`, `date`, `user_id`, `verify`, `creater`, `numTask`, `textBig`, `who_insert`, `textSmall`, `who_change`, `id`) VALUES
(1, '2019-07-08 00:20:32', 1, 3, 1, NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `startup_want_do`
--

CREATE TABLE `startup_want_do` (
  `parent_id` int(13) NOT NULL,
  `id` int(15) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `text` varchar(1200) NOT NULL,
  `from_task` int(15) DEFAULT NULL,
  `comment_id` int(17) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `userBlog`
--

CREATE TABLE `userBlog` (
  `id` int(12) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `main_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `text` varchar(3001) NOT NULL,
  `yourLike` int(1) NOT NULL,
  `Howlikes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `userBlog`
--

INSERT INTO `userBlog` (`id`, `parent_id`, `main_date`, `text`, `yourLike`, `Howlikes`) VALUES
(1, 1, '2019-07-07 23:54:20', 'Итак, поехали :) Бета версия <b><font color=\"#333333\">вроде</font> </b>работает', 0, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `userDialogs`
--

CREATE TABLE `userDialogs` (
  `id` int(18) NOT NULL,
  `one_user` int(11) NOT NULL,
  `second_user` int(11) NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_message` varchar(50) NOT NULL,
  `from_who` int(11) NOT NULL,
  `to_who` int(11) NOT NULL,
  `reed` int(11) NOT NULL,
  `how_many_reed` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `userLikesAnother`
--

CREATE TABLE `userLikesAnother` (
  `id` int(13) NOT NULL,
  `numBlog` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `userLikesAnother`
--

INSERT INTO `userLikesAnother` (`id`, `numBlog`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `userMessages`
--

CREATE TABLE `userMessages` (
  `id_mes` int(20) NOT NULL,
  `parent_id` int(13) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `text` varchar(5001) NOT NULL,
  `to_who_mes` int(11) NOT NULL,
  `from_who_mes` int(11) NOT NULL,
  `reed_mes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(26) NOT NULL,
  `lastname` varchar(26) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(8) NOT NULL,
  `cookie` varchar(255) DEFAULT NULL,
  `formStart` int(1) NOT NULL,
  `mailStr` varchar(200) DEFAULT NULL,
  `mailVerify` int(2) DEFAULT NULL,
  `passStr` varchar(200) DEFAULT NULL,
  `url_avatar` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `date`, `name`, `lastname`, `email`, `password`, `salt`, `cookie`, `formStart`, `mailStr`, `mailVerify`, `passStr`, `url_avatar`) VALUES
(1, '2019-07-07 23:29:06', 'Илья', 'Капитонов', 'ilyakapitonovspad20@gmail.com', '03874cd00bd89b2aaba8d4a8d8189b7b', 'ts]xml/;', 'E#jhfwoa', 1, NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users_call`
--

CREATE TABLE `users_call` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `id_auto` int(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users_call`
--

INSERT INTO `users_call` (`id`, `name`, `contact`, `id_auto`) VALUES
(1, 'WhatsApp ', '8 916 940 29 04', 7),
(1, 'Почта', 'spad20@yandex.ru', 8);

-- --------------------------------------------------------

--
-- Структура таблицы `users_lang`
--

CREATE TABLE `users_lang` (
  `id` int(11) NOT NULL,
  `lang` varchar(25) NOT NULL,
  `id_auto` int(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users_lang`
--

INSERT INTO `users_lang` (`id`, `lang`, `id_auto`) VALUES
(1, 'English', 7),
(1, 'Русский', 8);

-- --------------------------------------------------------

--
-- Структура таблицы `users_network`
--

CREATE TABLE `users_network` (
  `id` int(11) NOT NULL,
  `network` varchar(30) NOT NULL,
  `url` varchar(100) NOT NULL,
  `id_auto` int(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users_network`
--

INSERT INTO `users_network` (`id`, `network`, `url`, `id_auto`) VALUES
(1, 'В контактик', 'https://vk.com/id133703752', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `users_save`
--

CREATE TABLE `users_save` (
  `id` int(18) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `this_user` int(11) NOT NULL,
  `saving_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users_static_info`
--

CREATE TABLE `users_static_info` (
  `id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `city` varchar(30) NOT NULL,
  `birthday` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users_static_info`
--

INSERT INTO `users_static_info` (`id`, `status`, `city`, `birthday`) VALUES
(1, 'Свободен', 'Москва', '1999-10-05');

-- --------------------------------------------------------

--
-- Структура таблицы `users_text`
--

CREATE TABLE `users_text` (
  `id` int(11) NOT NULL,
  `callback` varchar(1500) NOT NULL,
  `about_cg` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users_text`
--

INSERT INTO `users_text` (`id`, `callback`, `about_cg`) VALUES
(1, 'С любыми', '');

-- --------------------------------------------------------

--
-- Структура таблицы `users_want_cg`
--

CREATE TABLE `users_want_cg` (
  `id` int(11) NOT NULL,
  `cg` varchar(5) NOT NULL,
  `parent_cg` int(2) NOT NULL,
  `id_auto` int(19) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users_want_cg`
--

INSERT INTO `users_want_cg` (`id`, `cg`, `parent_cg`, `id_auto`) VALUES
(1, '1', 0, 8),
(1, '1_2', 1, 9),
(1, '1_8', 1, 10),
(1, '1_11', 1, 11),
(1, '2', 0, 12),
(1, '2_1', 2, 13),
(1, '2_3', 2, 14);

-- --------------------------------------------------------

--
-- Структура таблицы `want_cg`
--

CREATE TABLE `want_cg` (
  `id` varchar(20) NOT NULL,
  `parent_id` varchar(2) DEFAULT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `want_cg`
--

INSERT INTO `want_cg` (`id`, `parent_id`, `text`) VALUES
('1', '0', 'Программирование'),
('1_1', '1', 'Лендинги (одностраничные сайты)'),
('1_2', '1', 'Сайты'),
('1_3', '1', 'Мобильные приложения'),
('1_4', '1', 'Боты'),
('1_5', '1', 'Прототипирование'),
('1_6', '1', 'Парсинг сайтов'),
('1_7', '1', 'Разработка игр'),
('1_8', '1', 'Десктопное ПО'),
('1_9', '1', 'Плагины'),
('1_10', '1', '1С программирование'),
('1_11', '1', 'Другое'),
('2', '0', 'Дизайн\r\n'),
('2_1', '2', 'Сайты'),
('2_2', '2', 'Логотипы'),
('2_3', '2', 'Иконки'),
('2_4', '2', 'Рисунки и иллюстрации'),
('2_5', '2', 'Мобильные приложения'),
('2_6', '2', 'Полиграфия (шрифты)'),
('2_7', '2', 'Баннеры'),
('2_8', '2', 'Векторная граффика'),
('2_9', '2', '3D'),
('2_10', '2', 'Анимации'),
('2_11', '2', 'Другое'),
('3', '0', 'Тестирование\r\n'),
('3_1', '3', 'Сайты'),
('3_2', '3', 'Мобильные приложения'),
('3_3', '3', 'Десктопное ПО'),
('4', '0', 'Тексты'),
('4_1', '4', 'Копирайт (написание)'),
('4_2', '4', 'Рерайт (правки)'),
('4_3', '4', 'Статьи, новости, посты'),
('4_4', '4', 'Рефераты, курсовые, дипломы'),
('4_5', '4', 'Сценарии'),
('4_6', '4', 'Резюме'),
('4_7', '4', 'Техническое задание'),
('4_8', '4', 'Отзывы'),
('4_9', '4', 'Калиграфия'),
('4_10', '4', 'Другое'),
('5', '0', 'Переводы\r\n'),
('5_1', '5', 'Тексты общей тематики'),
('5_2', '5', 'Тексты узкой специализации'),
('5_3', '5', 'Устные переводы'),
('5_4', '5', 'Выездные переводы'),
('5_5', '5', 'Другое'),
('6', '0', 'Маркетинг'),
('6_1', '6', 'SMM (социальные сети)'),
('6_2', '6', 'SEO (поисковая выдача)'),
('6_3', '6', 'Контекстная реклама'),
('6_4', '6', 'Продажа и генерация лидов'),
('6_5', '6', 'Исследование рынка и опросы'),
('6_6', '6', 'Другое'),
('7', '0', 'Фотография\r\n'),
('7_1', '7', 'Обработка'),
('7_2', '7', 'Выездная фотосъемка'),
('7_3', '7', 'Тематическое'),
('7_4', '7', 'Другое'),
('8', '0', 'Видео\r\n'),
('8_1', '8', 'Монтаж и обработка'),
('8_2', '8', 'Написание субтитров'),
('8_3', '8', 'Расскадровка'),
('8_4', '8', 'Создание видеоинфографики'),
('8_5', '8', 'Другое'),
('9', '0', 'Аудио и музыка\r\n'),
('9_1', '9', 'Обработка'),
('9_2', '9', 'Запись'),
('9_3', '9', 'Создание звуков'),
('9_4', '9', 'Создание с нуля'),
('9_5', '9', 'Другое'),
('10', '0', 'Бухгалтерия'),
('10_1', '10', 'Ведение бухгалтерии'),
('10_2', '10', 'Формирование отчетности'),
('10_3', '10', 'Оптимизация'),
('10_4', '10', 'Узкоспециализированная деятельность'),
('10_5', '10', 'Другое'),
('11', '0', 'Юриспруденция\r\n'),
('11_1', '11', 'Составление документации'),
('11_2', '11', 'Консультирование'),
('11_3', '11', 'Узкоспециализированная деятельность'),
('11_4', '11', 'Другое'),
('12', '0', 'Журналистика\r\n'),
('12_2', '12', 'Новости, статьи, репортажи'),
('12_3', '12', 'Узкоспециализированная деятельность'),
('12_4', '12', 'Другое'),
('13', '0', 'Архитектура'),
('13_1', '13', 'Создание плана'),
('13_2', '13', '3D макет'),
('13_3', '13', 'Макет'),
('13_4', '13', 'Ландшафтный дизайн'),
('13_5', '13', 'Интерьер'),
('13_6', '13', 'Узкоспециализированная деятельность'),
('13_7', '13', 'Другое'),
('14', '0', 'Инженерия'),
('14_1', '14', 'Чертежи, схемы'),
('14_2', '14', 'Проектирование'),
('14_3', '14', 'Конструкции'),
('14_4', '14', 'Узкоспециализированная деятельность'),
('14_5', '14', 'Другое'),
('15', '0', 'Менеджмент'),
('15_1', '15', 'Администрирование'),
('15_2', '15', 'Подбор людей'),
('15_3', '15', 'Менеджер проекта'),
('15_4', '15', 'Менеджер по продажам'),
('15_5', '15', 'PR-менеджер'),
('15_6', '15', 'Другое'),
('12_1', '12', 'Интервью');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `forumComIdea`
--
ALTER TABLE `forumComIdea`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `forumComments`
--
ALTER TABLE `forumComments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `forumComTask`
--
ALTER TABLE `forumComTask`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `startups`
--
ALTER TABLE `startups`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `startup_deleter_people`
--
ALTER TABLE `startup_deleter_people`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `startup_forums_docs`
--
ALTER TABLE `startup_forums_docs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `startup_forums_idea`
--
ALTER TABLE `startup_forums_idea`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `startup_forums_task`
--
ALTER TABLE `startup_forums_task`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `startup_verify_users`
--
ALTER TABLE `startup_verify_users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `startup_want_do`
--
ALTER TABLE `startup_want_do`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `userBlog`
--
ALTER TABLE `userBlog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `userDialogs`
--
ALTER TABLE `userDialogs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `userMessages`
--
ALTER TABLE `userMessages`
  ADD PRIMARY KEY (`id_mes`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users_call`
--
ALTER TABLE `users_call`
  ADD PRIMARY KEY (`id_auto`);

--
-- Индексы таблицы `users_lang`
--
ALTER TABLE `users_lang`
  ADD PRIMARY KEY (`id_auto`);

--
-- Индексы таблицы `users_network`
--
ALTER TABLE `users_network`
  ADD PRIMARY KEY (`id_auto`);

--
-- Индексы таблицы `users_save`
--
ALTER TABLE `users_save`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users_want_cg`
--
ALTER TABLE `users_want_cg`
  ADD PRIMARY KEY (`id_auto`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `forumComIdea`
--
ALTER TABLE `forumComIdea`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `forumComments`
--
ALTER TABLE `forumComments`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `forumComTask`
--
ALTER TABLE `forumComTask`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `startups`
--
ALTER TABLE `startups`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `startup_deleter_people`
--
ALTER TABLE `startup_deleter_people`
  MODIFY `id` int(17) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `startup_forums_docs`
--
ALTER TABLE `startup_forums_docs`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `startup_forums_idea`
--
ALTER TABLE `startup_forums_idea`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `startup_forums_task`
--
ALTER TABLE `startup_forums_task`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `startup_verify_users`
--
ALTER TABLE `startup_verify_users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `startup_want_do`
--
ALTER TABLE `startup_want_do`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `userBlog`
--
ALTER TABLE `userBlog`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `userDialogs`
--
ALTER TABLE `userDialogs`
  MODIFY `id` int(18) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `userMessages`
--
ALTER TABLE `userMessages`
  MODIFY `id_mes` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `users_call`
--
ALTER TABLE `users_call`
  MODIFY `id_auto` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `users_lang`
--
ALTER TABLE `users_lang`
  MODIFY `id_auto` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `users_network`
--
ALTER TABLE `users_network`
  MODIFY `id_auto` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users_save`
--
ALTER TABLE `users_save`
  MODIFY `id` int(18) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users_want_cg`
--
ALTER TABLE `users_want_cg`
  MODIFY `id_auto` int(19) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
