-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 26, 2019 at 04:59 PM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `worldchanger`
--

-- --------------------------------------------------------

--
-- Table structure for table `forumComIdea`
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

--
-- Dumping data for table `forumComIdea`
--

INSERT INTO `forumComIdea` (`parent_id`, `id`, `user_id`, `date`, `text`, `iThink`, `yourLike`, `howLikes`) VALUES
(5, 20, 1, '2019-05-28 17:00:54', 'fddffdfd', 2, 0, 0),
(5, 21, 1, '2019-05-12 15:25:24', 'fddffdfd', 1, 0, 0),
(5, 22, 1, '2019-05-12 15:25:26', 'fddffdfd', 3, 0, 0),
(4, 30, 3, '2019-05-13 01:49:58', 'fd', 2, 0, 1),
(28, 39, 1, '2019-05-25 23:24:33', 'fdfd', 1, 0, 0),
(28, 40, 1, '2019-05-25 23:25:18', 'fdfdfd', 1, 0, 0),
(28, 41, 1, '2019-05-25 23:26:04', 'dffddfdf', 3, 0, 0),
(41, 52, 1, '2019-05-26 01:56:01', 'fdfdfdfd', 3, 0, 1),
(41, 53, 1, '2019-05-26 01:56:13', 'fdffd', 3, 0, 1),
(41, 54, 1, '2019-05-27 22:34:37', 'fdfd', 1, 0, 0),
(48, 55, 1, '2019-05-29 02:44:28', 'ваавав', 2, 0, 0),
(4, 66, 2, '2019-05-29 20:44:31', 'fd', 2, 0, 0),
(4, 68, 2, '2019-05-29 20:44:39', 'fdfdfdfdfd', 2, 0, 0),
(4, 70, 2, '2019-05-29 20:48:53', 'авававав', 2, 0, 0),
(68, 82, 1, '2019-05-30 22:35:50', 'vhttp://localhost:8888/project/forum.php?idea=70&amp;id=4http://localhost:8888/project/forum.php?idea=70&amp;id=4', 2, 0, 0),
(68, 83, 1, '2019-05-30 22:36:03', '<a href=\"http://localhost:8888/project/section.php?idea=4&amp;id=4\" class=\"startup_right_urlTopic\"><div class=\"toForumWrapper\"><div class=\"toForumItemTxt\">ния</div></div><div class=\"toForumCount\">21</div></a><a href=\"http://localhost:8888/project/section.php?docs=4&amp;id=4\" class=\"startup_right_urlTopic\"><div class=\"toForumWrapper\"><div class=\"toForumIconLeft\" style=\"transition-property: all;\"><span class=\"material-icons-outlined\" style=\"font-size: 28px; color: rgb(52, 152, 219);\">insert_drive_file</span></div><div class=\"toForumItemTxt\">Документы</div></div><div class=\"toForumCount\">6</div></a><a href=\"http://localhost:8888/project/section.php?task=4&amp;id=4\" class=\"startup_right_urlTopic\"><div class=\"toForumWrapper\"><div class=\"toForumIconLeft\" style=\"transition-property: all;\"><span class=\"material-icons-outlined\" style=\"font-size: 28px; color: rgb(52, 152, 219);\">person_add</span></div><div class=\"toForumItemTxt\">Задачник</div></div><div class=\"toForumCount\">9</div></a>', 2, 0, 0),
(68, 84, 1, '2019-05-30 22:36:18', '<div id=\"startup_functions_wrap\"><div class=\"startup_wrap_padding\"><a href=\"http://localhost:8888/project/insert.php?id=4\" class=\"startup_functions_wrapper\">Посмотр заявок</a><a href=\"http://localhost:8888/project/teaming.php?id=4\" class=\"startup_functions_wrapper\"><span class=\"material-icons\" style=\"font-size: 20px; padding-right: 10px; padding-left: 10px; color: rgb(153, 176, 198);\">group_work</span>Команда стартапа</a><div class=\"wrappH3\"><h3 class=\"startup_right_h3_setting\">Настройки аватарки:</h3></div><form method=\"post\" enctype=\"multipart/form-data\"><label for=\"file\" class=\"startup_functions_wrapper\" id=\"btnAddImg\"><span class=\"material-icons\" style=\"font-size: 20px; padding-right: 10px; padding-left: 10px; color: rgb(153, 176, 198);\">photo_camera</span>Добавить фото</label></form></div></div><div class=\"startup_right_blocks\"><div class=\"startup_right_h2\"><h2>Разделы</h2></div><div class=\"startup_wrap_padding\"><a href=\"http://localhost:8888/project/section.php?idea=4&amp;id=4\" class=\"startup_right_urlTopic\"><div class=\"toForumWrapper\"><div class=\"toForumIconLeft\" style=\"transition-property: all;\"><span class=\"material-icons-outlined\" style=\"font-size: 28px; color: rgb(52, 152, 219);\">accessibility_new</span></div><div class=\"toForumItemTxt\">Идея и предложения</div></div><div class=\"toForumCount\">21</div></a><a href=\"http://localhost:8888/project/section.php?docs=4&amp;id=4\" class=\"startup_right_urlTopic\"><div class=\"toForumWrapper\"><div class=\"toForumIconLeft\" style=\"transition-property: all;\"><span class=\"material-icons-outlined\" style=\"font-size: 28px; color: rgb(52, 152, 219);\">insert_drive_file</span></div><div class=\"toForumItemTxt\">Документы</div></div><div class=\"toForumCount\">6</div></a><a href=\"http://localhost:8888/project/section.php?task=4&amp;id=4\" class=\"startup_right_urlTopic\"><div class=\"toForumWrapper\"><div class=\"toForumIconLeft\" style=\"transition-property: all;\"><span class=\"material-icons-outlined\" style=\"font-size: 28px; color: rgb(52, 152, 219);\">person_add</span></div><div class=\"toForumItemTxt\">Задачник</div></div><div class=\"toForumCount\">9</div></a></div></div><div class=\"startup_right_blocks\"><div class=\"startup_right_h2\"><h2>Инициаторы</h2></div><div class=\"startup_wrap_padding\"><div class=\"from_user_wrapper\"><div class=\"from_user_foto user_fotoImgRi317\"></div><div class=\"from_user_main_info_wrap\"><a href=\"http://localhost:8888/project/user.php?id=17\" class=\"item_a_main\">BаваавАДЛАДЛа КаgjkТЬАТЬП</a><div class=\"smallItemPeople\">345</div></div></div><div class=\"from_user_wrapper\"><div class=\"from_user_foto user_fotoImgRi34\"></div><div class=\"from_user_main_info_wrap\"><a href=\"http://localhost:8888/project/user.php?id=4\" class=\"item_a_main\">иЛЬЯИЛЬЯ КаПтПлоавлоВ</a><div class=\"smallItemPeople\">34667</div></div></div><div class=\"from_user_wrapper\"><div class=\"from_user_foto user_fotoImgRi33\"></div><div class=\"from_user_main_info_wrap\"><a href=\"http://localhost:8888/project/user.php?id=3\" class=\"item_a_main\">Dkjfkdj', 2, 0, 0),
(70, 85, 1, '2019-05-30 22:40:29', 'document.designMode = \'on\';document.designMode = \'on\';document.designMode = \'on\';document.designMode = \'on\';document.designMode = \'on\';document.designMode = \'on\';', 2, 0, 0),
(70, 86, 1, '2019-05-30 22:41:11', '<b>textarea_blog_setting_texttextarea_blog_setting_texttextarea_blog_setting_texttextarea_blog_setting_texttextarea_blog_setting_texttextarea_blog_setting_texttextarea_blog_setting_texttextarea</b>_blog_setting_texttextarea_blog_setting_texttextarea_blog_setting_text', 2, 0, 0),
(70, 87, 1, '2019-05-30 22:42:41', 'textarea_blog_setting_texttextarea_blog_setting_texttextarea_blog_setting_texttextarea_blog_setting_texttextarea_blog_setting_texttextarea_blog_setting_texttextarea_blog_setting_texttextarea_blog_setting_text', 2, 0, 0),
(70, 88, 1, '2019-05-30 22:42:50', 'fdjkfdjkjfdkjfjdkjfkdfjdkgjgfdgjdkfsjdgfgjfdsjfgdlgfjdskjgsfdklgfjsdkhjkfgdhjgkflhgjskflgfhsdjkgdfhjksjgfkslgfdhjklfgdhjskshjkfghjkgsfhjklgddfghjjkgs', 2, 0, 0),
(72, 89, 1, '2019-05-30 22:50:13', 'whatshot<div>Предложить идею</div><div>link</div><div>Добавить документwhatshot</div><div>Предложить идею</div><div>link</div><div>Добавить документ</div><div>add</div><div>Написать задачу</div><div>add</div><div>Написать задачуdocument.querySelector(\'[contenteditable]\').addEventListener(\'paste\', (e) =&gt; {<div>&nbsp; &nbsp; e.preventDefault();</div><div>&nbsp; &nbsp; const text = (e.originalEvent || e).clipboardData.getData(\'text/plain\');</div><div>&nbsp; &nbsp; window.document.execCommand(\'insertText\', false, text);</div><div>});</div></div>', 2, 0, 0),
(72, 91, 1, '2019-05-30 22:58:06', '<b>dfdfdfdfdword-break: break-all;word-break: break-all;word-break: break-all;word-break: break-all;word-break: break-all;word-break: break-all;word-break: break-all;word-break: break-all;word-break: break-all;word-break: break-all;word-break: break-all;word-break: break-all;</b>', 2, 0, 0),
(72, 92, 1, '2019-05-30 22:58:21', 'word-break: break-all; word-break: break-all; word-break: break-all; word-break: break-all; word-break: break-all; word-break: break-all; word-break: break-all;word-break: break-all; &nbsp;<div>word-break: break-all;&nbsp;</div><div>word-break: break-all;</div>', 2, 0, 0),
(72, 93, 1, '2019-05-30 22:59:12', 'word-break: break-all; word-break: break-all; word-break: break-all; word-break: break-all; word-break: break-all;word-break: break-all;word-break: break-all;word-break: break-all;word-break: break-all;', 2, 0, 0),
(72, 94, 1, '2019-05-30 22:59:37', 'word-break: break-all;word-break: break-all;word-break: break-all;word-break: break-all;Мне не нравится<div><br></div><div>format_bold</div><div><br></div><div>format_italic</div><div><br></div><div>format_underlined</div><div><br></div><div>format_list_numbered</div><div><br></div><div>format_list_bulleted</div><div><br></div><div>format_align_left</div><div><br></div><div>format_align_center</div><div><br></div><div>format_align_right</div><div><br></div><div>format_align_justify</div><div>text_format</div><div>format_size</div><div>format_color_text</div><div>format_color_fill</div><div><br></div><div>linkМне не нравится</div><div><br></div><div>format_bold</div><div><br></div><div>format_italic</div><div><br></div><div>format_underlined</div><div><br></div><div>format_list_numbered</div><div><br></div><div>format_list_bulleted</div><div><br></div><div>format_align_left</div><div><br></div><div>format_align_center</div><div><br></div><div>format_align_right</div><div><br></div><div>format_align_justify</div><div>text_format</div><div>format_size</div><div>format_color_text</div><div>format_color_fill</div><div><br></div><div>linkМне не нравится</div><div><br></div><div>format_bold</div><div><br></div><div>format_italic</div><div><br></div><div>format_underlined</div><div><br></div><div>format_list_numbered</div><div><br></div><div>format_list_bulleted</div><div><br></div><div>format_align_left</div><div><br></div><div>format_align_center</div><div><br></div><div>format_align_right</div><div><br></div><div>format_align_justify</div><div>text_format</div><div>format_size</div><div>format_color_text</div><div>format_color_fill</div><div><br></div><div>link</div>', 2, 0, 1),
(72, 95, 1, '2019-05-30 23:00:31', '<b>kfdjfdkfkdjfjdfdkj</b>', 2, 0, 0),
(72, 97, 1, '2019-05-30 23:01:56', '<b>dfjkfdjkfdjfjkdfjkdfjdkfdjkfdjkfdkjfdjfdjkfjkdfkjdfkjdfjkdjkfdjkfdfjkdfjkdfjdkfjkdfjkd</b><div><b><br></b></div><div><b>dfjkfdjkfdjfjkdfjkdfjdkfdjkfdjkfdkjfdjfdjkfjkdfkjdfkjdfjkdjkfdjkfdfjkdfjkdfjdkfjkdfjkd</b></div>', 2, 0, 0),
(74, 98, 1, '2019-05-30 23:05:36', '<ol><li><b><font \r\nsize=\"2\">fdfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfd</font></b><br></li></ol>', 2, 0, 0),
(74, 99, 1, '2019-05-30 23:38:09', 'kjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfk', 2, 0, 0),
(74, 100, 1, '2019-05-30 23:39:03', '<ol><li style=\"text-align: center;\"><b><i><u>kjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfddfjdjfkdfjdkjfkdfdjkdfjkfjdkjkfdkjfkdfdjkdfjkfj', 2, 0, 0),
(91, 101, 1, '2019-05-31 03:17:07', '$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email', 3, 0, 0),
(41, 102, 1, '2019-05-31 06:33:21', '<b><i><u>fdfdffffd</u></i></b>', 2, 0, 0),
(41, 103, 1, '2019-07-01 16:06:26', 'fdfdfd', 1, 0, 0),
(85, 108, 1, '2019-07-01 16:54:50', 'k', 2, 0, 0),
(85, 110, 1, '2019-07-04 02:57:57', '12', 2, 0, 0),
(85, 111, 1, '2019-07-04 03:16:21', '212', 2, 0, 0),
(85, 112, 1, '2019-07-04 15:13:25', '21', 2, 0, 0),
(85, 113, 1, '2019-07-04 15:15:55', '21212121', 2, 0, 0),
(85, 114, 1, '2019-07-04 15:16:46', 'fd', 2, 0, 0),
(85, 115, 1, '2019-07-04 15:31:43', 'Ghbdtn!', 3, 0, 0),
(85, 116, 1, '2019-07-04 16:23:03', '212121', 2, 0, 0),
(85, 117, 1, '2019-07-04 16:28:26', '12', 2, 0, 0),
(85, 118, 1, '2019-07-04 16:28:29', '212', 2, 0, 0),
(85, 119, 1, '2019-07-04 16:40:21', '12', 2, 0, 0),
(85, 120, 1, '2019-07-04 16:40:43', '21', 2, 0, 0),
(85, 121, 1, '2019-07-04 16:41:48', 'df', 1, 0, 0),
(85, 122, 1, '2019-07-04 16:43:56', '2121', 2, 0, 0),
(85, 123, 1, '2019-07-04 16:59:46', 'ваав', 1, 0, 1),
(85, 124, 1, '2019-07-04 17:00:18', '122121', 2, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `forumComLikes`
--

CREATE TABLE `forumComLikes` (
  `user_id` int(11) NOT NULL,
  `post_id` int(19) NOT NULL,
  `its` int(2) NOT NULL,
  `parent_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `forumComLikes`
--

INSERT INTO `forumComLikes` (`user_id`, `post_id`, `its`, `parent_id`) VALUES
(1, 148, 3, 10),
(1, 123, 1, 85);

-- --------------------------------------------------------

--
-- Table structure for table `forumComments`
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

--
-- Dumping data for table `forumComments`
--

INSERT INTO `forumComments` (`parent_id`, `id`, `user_id`, `date`, `text`, `yourLike`, `howLikes`) VALUES
(5, 3, 1, '2019-05-28 17:12:05', 'fdfdfd', 0, 1),
(5, 4, 1, '2019-05-28 17:12:06', 'fddffd', 0, 1),
(5, 5, 1, '2019-05-28 17:10:36', 'fdfdfd', 0, 0),
(1, 6, 1, '2019-05-29 02:44:00', 'впав', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `forumComTask`
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

--
-- Dumping data for table `forumComTask`
--

INSERT INTO `forumComTask` (`parent_id`, `id`, `user_id`, `date`, `text`, `iThink`, `yourLike`, `howLikes`, `statusCom`) VALUES
(4, 46, 1, '2019-05-13 17:27:34', 'fff', 3, 0, 0, 0),
(4, 49, 1, '2019-05-13 17:51:43', 'fd &nbsp; &nbsp; &nbsp; &nbsp; $sqlInsWant = \"INSERT INTO startup_want_do( parent_id,user_id,`text`,from_task,comment_id ) VALUES ( ?,?,?,?,? )\";<div>&nbsp; &nbsp; &nbsp; startup_want_do( parent_id,user_id,`text`,from_task,comment_id ) VALUES ( ?,?,?,?,? )\";</div><div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;$stmtInsWant = $pdo-&gt;prepare($sqlInsWant);</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;$stmtInsWant-&gt;execute([ $itemsStartup[\'parent_id\'], $_SESSION[\'id\'],substr($_POST[\'text\'],0,5000),$_POST[\'idPost\'],$idOfTask]);</div></div><div><br></div>', 1, 0, 0, 0),
(4, 50, 1, '2019-05-13 17:54:42', 'fd &nbsp; &nbsp; &nbsp; &nbsp; $sqlInsWant = \"INSERT INTO startup_want_do( parent_id,user_id,`text`,from_task,comment_id ) VALUES ( ?,?,?,?,? )\";<div>&nbsp; &nbsp; &nbsp; startup_want_do( parent_id,user_id,`text`,from_task,comment_id ) VALUES ( ?,?,?,?,? )\";</div><div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;$stmtInsWant = $pdo-&gt;prepare($sqlInsWant);</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;$stmtInsWant-&gt;execute([ $itemsStartup[\'parent_id\'], $_SESSION[\'id\'],substr($_POST[\'text\'],0,5000),$_POST[\'idPost\'],$idOfTask]);</div></div><div><br></div>', 1, 0, 0, 0),
(4, 59, 1, '2019-05-23 22:07:43', '1212', 1, 0, 0, NULL),
(4, 60, 2, '2019-05-25 23:12:02', 'ПРОВЕРКА', 1, 0, 1, 8),
(2, 61, 2, '2019-05-15 21:40:29', 'ХОЧУУУ', 1, 0, 2, 1),
(2, 62, 3, '2019-05-15 21:40:31', 'fggfgf', 1, 0, 0, 1),
(2, 63, 3, '2019-05-15 16:18:00', 'http://localhost:8888/project/forum.php?task=2http://localhost:8888/project/forum.php?task=2', 1, 0, 0, NULL),
(2, 64, 1, '2019-05-15 16:21:03', 'fdfddfdffd', 1, 0, 0, NULL),
(2, 65, 3, '2019-05-15 16:23:58', 'http://localhost:8888/project/insert.php?id=4fkfgdkjdgfjdgfkljklfdgfdsljgfdkl;', 1, 0, 0, NULL),
(2, 66, 4, '2019-05-15 16:25:19', 'PROVERKA', 1, 0, 0, NULL),
(1, 67, 3, '2019-05-15 17:12:15', 'Проверка - активная задача', 1, 0, 0, NULL),
(2, 68, 3, '2019-05-15 17:12:47', 'Проверка Выполняется задача', 1, 0, 0, NULL),
(2, 69, 3, '2019-05-15 17:16:05', 'were', 1, 0, 0, NULL),
(4, 70, 2, '2019-05-15 22:39:58', 'ПРОВЕРЯЮ', 1, 0, 0, NULL),
(4, 71, 3, '2019-05-23 22:07:36', 'возьмите плиз', 1, 0, 0, 2),
(1, 72, 3, '2019-05-15 23:18:48', '123tra проверка', 1, 0, 0, NULL),
(5, 75, 1, '2019-05-24 17:49:11', 'ДАРОВА', 2, 0, 0, NULL),
(5, 76, 18, '2019-05-24 20:01:23', 'ХХАХХААХАХ', 1, 0, 0, NULL),
(6, 77, 1, '2019-05-25 00:41:37', 'fdfd', 2, 0, 1, NULL),
(6, 104, 1, '2019-05-25 22:13:27', 'dffd', 2, 0, 1, NULL),
(6, 105, 1, '2019-05-25 22:14:30', 'dffdfd', 1, 0, 0, NULL),
(4, 106, 1, '2019-05-25 23:21:28', 'fdfdf', 2, 0, 0, NULL),
(4, 118, 1, '2019-05-27 23:27:05', '<div>line-height: 20px;</div><div>&nbsp; letter-spacing: 0.5px;line-height: 20px;</div><div>&nbsp; letter-spacing: 0.5px;line-height: 20px;</div><div>&nbsp; letter-spacing: 0.5px;line-height: 20px;</div><div>&nbsp; letter-spacing: 0.5px;line-height: 20px;</div><div>&nbsp; letter-spacing: 0.5px;line-height: 20px;</div><div>&nbsp; letter-spacing: 0.5px;line-height: 20px;</div><div>&nbsp; letter-spacing: 0.5px;line-height: 20px;</div><div>&nbsp; letter-spacing: 0.5px;line-height: 20px;</div><div>&nbsp; letter-spacing: 0.5px;line-height: 20px;</div><div>&nbsp; letter-spacing: 0.5px;line-height: 20px;</div><div>&nbsp; letter-spacing: 0.5px;line-height: 20px;</div><div>&nbsp; letter-spacing: 0.5px;line-height: 20px;</div><div>&nbsp; letter-spacing: 0.5px;line-height: 20px;</div><div>&nbsp; letter-spacing: 0.5px;line-height: 20px;</div><div>&nbsp; letter-spacing: 0.5px;line-height: 20px;</div><div>&nbsp; letter-spacing: 0.5px;line-height: 20px;</div><div>&nbsp; letter-spacing: 0.5px;</div>', 2, 0, 0, NULL),
(9, 119, 1, '2019-05-28 02:02:47', 'fd', 3, 0, 0, NULL),
(2, 120, 1, '2019-05-29 02:33:57', 'fddf', 4, 0, 0, NULL),
(2, 121, 1, '2019-05-29 02:35:51', 'dffdfd', 4, 0, 0, NULL),
(9, 122, 1, '2019-05-29 02:40:06', 'fdfd', 4, 0, 0, NULL),
(9, 123, 1, '2019-05-29 02:42:14', 'ewww', 4, 0, 0, NULL),
(9, 124, 1, '2019-05-29 02:43:39', 'ава', 4, 0, 0, NULL),
(4, 125, 1, '2019-05-29 02:46:02', 'ав', 2, 0, 0, NULL),
(9, 126, 2, '2019-05-31 00:35:38', '<b>ХОЧУ ХОЧУ ХОЧУ!</b>', 1, 0, 0, NULL),
(10, 131, 3, '2019-05-31 00:51:26', 'ВЫПОЛНЯЕТСЯ ПРОВЕРКА', 1, 0, 0, NULL),
(11, 132, 1, '2019-05-31 00:55:14', 'МЕЧТАЮ', 1, 0, 1, NULL),
(11, 133, 3, '2019-05-31 01:18:33', 'ХОЧУ Задача2&nbsp;', 1, 0, 0, 1),
(11, 134, 3, '2019-05-31 01:00:48', 'ХОЧУ зад2 (2ой)', 1, 0, 0, NULL),
(11, 135, 3, '2019-05-31 01:00:55', 'хочу зад2 (3ей', 1, 0, 0, NULL),
(11, 136, 3, '2019-05-31 01:00:58', '4ый', 1, 0, 0, NULL),
(11, 137, 4, '2019-05-31 01:07:47', 'Участие &nbsp;задача1 4id', 2, 0, 0, NULL),
(11, 138, 4, '2019-05-31 01:07:59', 'Участие &nbsp;задача2 4id', 3, 0, 0, NULL),
(11, 139, 4, '2019-05-31 02:14:20', 'Участие  задача3 4id пробую', 1, 0, 0, 9),
(11, 140, 4, '2019-05-31 01:08:14', 'Участие задача4 4id пробую2', 1, 0, 0, NULL),
(11, 141, 4, '2019-05-31 01:08:21', 'Участие задача5 4id пробую3', 1, 0, 0, NULL),
(12, 142, 2, '2019-05-31 01:39:54', 'id2 want', 1, 0, 0, NULL),
(12, 143, 2, '2019-05-31 01:40:01', 'id2 want2', 1, 0, 0, NULL),
(12, 144, 2, '2019-05-31 01:40:08', 'id2 want3', 1, 0, 0, NULL),
(11, 145, 2, '2019-05-31 01:41:39', 'KAKA', 1, 0, 0, NULL),
(10, 146, 2, '2019-05-31 01:41:49', 'KAKA', 1, 0, 0, NULL),
(10, 147, 17, '2019-05-31 01:59:56', 'ХОЧУ ЕЩЕ РАЗ ПЛИЗ', 1, 0, 0, NULL),
(10, 148, 18, '2019-05-31 02:03:15', 'КОЛЯ ЗАЯВОЧКА ЕПТА УДАЛЕНО', 1, 0, 1, NULL),
(11, 149, 18, '2019-05-31 02:03:46', 'КОЛЯ ВЫПОЛНЯЕТСЯ', 1, 0, 0, NULL),
(12, 150, 18, '2019-05-31 02:04:05', 'КОЛЯ АКТИВНАЯ1', 1, 0, 0, NULL),
(12, 151, 18, '2019-05-31 02:08:47', 'КОЛЯ АКТИВНАЯ2', 1, 0, 0, 2),
(12, 152, 18, '2019-05-31 02:04:19', 'КОЛЯ АКТИВНАЯ3', 1, 0, 0, NULL),
(13, 153, 2, '2019-05-31 02:25:01', '<ol><li>Задача 1</li><li><br></li></ol>', 1, 0, 0, NULL),
(14, 154, 2, '2019-05-31 02:27:09', '<ol><li>задача 2</li></ol>', 1, 0, 0, 2),
(13, 155, 3, '2019-05-31 02:30:01', '<ol><li>ХОЧУ задача 1</li></ol>', 1, 0, 0, 9),
(14, 156, 3, '2019-05-31 02:28:41', 'ХОЧУ ЗАДАЧА 2', 1, 0, 0, NULL),
(15, 157, 4, '2019-05-31 02:36:07', 'ЗАДАЧА 3', 1, 0, 0, 9),
(16, 158, 18, '2019-05-31 02:36:05', 'fdfdf', 1, 0, 0, 8),
(16, 159, 18, '2019-05-31 02:37:03', 'Задача4 после отказа', 1, 0, 1, NULL),
(16, 160, 18, '2019-05-31 02:38:36', 'Задача4 после отказа2', 1, 0, 1, 1),
(16, 161, 18, '2019-05-31 02:37:05', 'Задача4 после отказа3', 1, 0, 1, NULL),
(17, 162, 1, '2019-05-31 03:20:21', '$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email', 2, 0, 0, NULL),
(17, 163, 1, '2019-05-31 03:24:04', 'fdfd', 1, 0, 0, NULL),
(17, 164, 1, '2019-05-31 03:24:33', 'fddf', 2, 0, 0, NULL),
(17, 165, 1, '2019-05-31 03:24:40', 'fdfd', 1, 0, 0, NULL),
(17, 166, 1, '2019-06-30 17:39:29', 'fdfdfd', 1, 0, 0, NULL),
(6, 167, 1, '2019-07-01 17:15:18', 'fd', 4, 0, 0, NULL),
(6, 168, 1, '2019-07-01 17:15:38', '111', 3, 0, 0, NULL),
(21, 169, 54, '2019-07-16 18:07:38', 'gfgf', 1, 0, 0, 8),
(18, 170, 54, '2019-07-16 18:11:12', 'gfdgfgfd', 1, 0, 0, 2),
(9, 171, 54, '2019-07-16 18:14:26', 'ХУЙ', 1, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `forumMainLikes`
--

CREATE TABLE `forumMainLikes` (
  `user_id` int(11) NOT NULL,
  `post_id` int(15) NOT NULL,
  `its` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `forumMainLikes`
--

INSERT INTO `forumMainLikes` (`user_id`, `post_id`, `its`) VALUES
(2, 5, 1),
(1, 2, 3),
(1, 1, 3),
(2, 3, 3),
(2, 11, 1),
(2, 4, 1),
(2, 4, 3),
(1, 30, 1),
(1, 4, 3),
(2, 30, 1),
(3, 2, 3),
(1, 5, 3),
(1, 28, 1),
(1, 59, 1),
(1, 5, 2),
(1, 6, 2),
(1, 45, 1),
(1, 63, 1),
(17, 10, 3),
(1, 11, 3),
(27, 17, 3),
(27, 16, 3),
(27, 14, 3),
(27, 5, 1),
(1, 41, 1),
(1, 85, 1),
(1, 88, 1),
(1, 65, 1),
(1, 12, 3),
(54, 21, 3);

-- --------------------------------------------------------

--
-- Table structure for table `startups`
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
-- Dumping data for table `startups`
--

INSERT INTO `startups` (`id`, `date_born`, `name`, `status`, `type`, `area`, `people`, `views`, `avatar_src`) VALUES
(1, '2019-05-05 01:21:10', 'dsffdsds', 'Новый проект', 'Производство', NULL, 1, NULL, NULL),
(2, '2019-05-05 01:30:05', 'dffdfdfdfd', 'Новый проект', 'Производство', NULL, 1, NULL, NULL),
(3, '2019-05-05 01:30:37', 'fdfdfdfd', 'Новый проект', 'Производство', NULL, 1, NULL, NULL),
(4, '2019-05-31 06:33:46', 'DfgfdgfdgdfПРОВЕРКА1strip_tagsstrip_tags', 'Компания', 'Торговля', 'Государственная деятельность', 1, 2492, '4-_-Avatar-_-.jpg'),
(5, '2019-05-29 20:56:37', 'Новый стартап', 'Новый проект', 'Производство', NULL, 1, 51, NULL),
(6, '2019-05-29 20:14:18', 'fdfd', 'Компания', 'Торговля', 'Автомобильный бизнес', 1, 33, NULL),
(7, '2019-05-29 21:03:34', ' ловлоОЛОЛП О    1а', 'Развивающийся проект', 'Торговля', 'Дизайн, проектирование', 1, 43, NULL),
(8, '2019-05-31 02:21:38', 'Strip_tagsstrip_tagsstrip_tagsstrip_tags', 'Развивающийся проект', 'Торговля', 'Государственная деятельность', 1, 145, NULL),
(9, '2019-05-31 06:59:06', 'ТЕСТ ЗАДАЧ', 'Новый проект', 'Производство', 'Автомобильный бизнес', 1, 264, NULL),
(10, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(11, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(12, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(13, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(14, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(15, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(16, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(17, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(18, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(19, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(20, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(21, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(22, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(23, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(24, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(25, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(26, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(27, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(28, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(29, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(30, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(31, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(32, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(33, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(34, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(35, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(36, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(37, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(38, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(39, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(40, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(41, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(42, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(43, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(44, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(45, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(46, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(47, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(48, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(49, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(50, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(51, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(52, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(53, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(54, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(55, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(56, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(57, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(58, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(59, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(60, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(61, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(62, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(63, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(64, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(65, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(66, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(67, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(68, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(69, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(70, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(71, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(72, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(73, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(74, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(75, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(76, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(77, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(78, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(79, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(80, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(81, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(82, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(83, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(84, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(85, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(86, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(87, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(88, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(89, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(90, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(91, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(92, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(93, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(94, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(95, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(96, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(97, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(98, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(99, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(100, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(101, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(102, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(103, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(104, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(105, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(106, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(107, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(108, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(109, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(110, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(111, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(112, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(113, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(114, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(115, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(116, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(117, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(118, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(119, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(120, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(121, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(122, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(123, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(124, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(125, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(126, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(127, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(128, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(129, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(130, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(131, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(132, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(133, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(134, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(135, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(136, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(137, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(138, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(139, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(140, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(141, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(142, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(143, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(144, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(145, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(146, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(147, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(148, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(149, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(150, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(151, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(152, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(153, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(154, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(155, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(156, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(157, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(158, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(159, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(160, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(161, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(162, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(163, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(164, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 1, NULL),
(165, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(166, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(167, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL),
(168, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 2, NULL),
(169, '2019-07-21 19:49:44', 'тестовый стартап', 'Новый проект', 'Торговля', 'Финансовый сектор', 1, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `startups_text`
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
-- Dumping data for table `startups_text`
--

INSERT INTO `startups_text` (`parent_id`, `idea`, `purpose`, `problems`, `philosophy`, `comment`) VALUES
(2, 'fdfdfd', 'fdfdfd', 'dffdfd', 'dffddf', 'dffdfd'),
(3, 'dffdfdfd', 'fdffdfdfd', 'dffdffd', 'fdfdfdfd', ''),
(4, 'gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt; gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt; gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt; gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1\r\nddfgdg\r\n1\r\n\r\n12\r\n2\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n1_ \r\n\r\n2_ gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt; gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt; gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt; gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1\r\nddfgdg\r\n1\r\n\r\n12\r\n2\r\n1_ \r\n\r\n2_ gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt; gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt; gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt; gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1\r\nddfgdg\r\n1\r\n\r\n12\r\n2\r\n1_ \r\n\r\n2_ gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1', 'fgdfgfdgfgdfgdfgПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt; gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt; gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt; gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt; gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1\r\nddfgdg\r\n1\r\n\r\n12\r\n2\r\n1_ \r\n\r\n2_ gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt; gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt; gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt; gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1\r\nddfgdg\r\n1\r\n\r\n12\r\n2\r\n1_ \r\n\r\n2_ gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt; gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt; gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt; gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1\r\nddfgdg\r\n1\r\n\r\n12\r\n2\r\n1_ \r\n\r\n2_ gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;g', 'gddgffdgfgdgdfdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt; gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt; gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt; gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt; gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1\r\nddfgdg\r\n1\r\n\r\n12\r\n2\r\n1_ \r\n\r\n2_ gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt; gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt; gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt; gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1\r\nddfgdg\r\n1\r\n\r\n12\r\n2\r\n1_ \r\n\r\n2_ gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt; gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt; gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt; gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1\r\nddfgdg\r\n1\r\n\r\n12\r\n2\r\n1_ \r\n\r\n2_ gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;', 'gdgfdfdgdfggfdfgdПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt; gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt; gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt; gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt; gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1\r\nddfgdg\r\n1\r\n\r\n12\r\n2\r\n1_ \r\n\r\n2_ gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt; gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt; gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt; gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1\r\nddfgdg\r\n1\r\n\r\n12\r\n2\r\n1_ \r\n\r\n2_ gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt; gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt; gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt; gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1\r\nddfgdg\r\n1\r\n\r\n12\r\n2\r\n1_ \r\n\r\n2_ gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;', '&lt;h1&gt;1&lt;/h1&gt; gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt; gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt; gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt; gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1\r\nddfgdg\r\n1\r\n\r\n12\r\n2\r\n1_ \r\n\r\n2_ gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt; gfddfgdgfdfgdgfПРОВЕРА&lt;h1&gt;1&lt;/h1&gt; gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt; gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1\r\nddfgdg\r\n1\r\n\r\n12\r\n2\r\n1_ \r\n\r\n2_ gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt; gfddfgdgfdfgdgfПРОВЕР&lt;h1&gt;1&lt;/h1&gt; gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt; gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1\r\nddfgdg\r\n1\r\n\r\n12\r\n2\r\n1_ \r\n\r\n2_ gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h1&gt;1&lt;/h1&gt;gfddfgdgfdfgdgfПРОВЕРКА&lt;h'),
(5, 'content_bigImg', 'content_bigImg', 'content_bigImg', 'content_bigImg', 'content_bigImg'),
(6, 'fdfd', 'fdfd', 'fdfd', 'fddf', 'fdfd'),
(7, '&lt;h1&gt;1&lt;/h1&gt;', '&lt;h1&gt;1&lt;/h1&gt;', '&lt;h1&gt;1&lt;/h1&gt;', '&lt;h1&gt;1&lt;/h1&gt;', '&lt;h1&gt;1&lt;/h1&gt;'),
(8, 'strip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tags', 'strip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tags', 'strip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tags', 'strip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tags', 'strip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tags'),
(9, 'ТЕСТ ЗАДАЧ', 'ТЕСТ ЗАДАЧ', 'ТЕСТ ЗАДАЧ', 'ТЕСТ ЗАДАЧ', 'ТЕСТ ЗАДАЧ');

-- --------------------------------------------------------

--
-- Table structure for table `startup_deleter_people`
--

CREATE TABLE `startup_deleter_people` (
  `id` int(17) NOT NULL,
  `parent_id` int(13) NOT NULL,
  `user_id` int(11) NOT NULL,
  `who_delete` int(11) NOT NULL,
  `text` varchar(1201) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `startup_deleter_people`
--

INSERT INTO `startup_deleter_people` (`id`, `parent_id`, `user_id`, `who_delete`, `text`, `date`) VALUES
(4, 4, 2, 1, 'fdfd', '2019-05-15 22:44:37'),
(5, 4, 17, 1, 'ffd', '2019-05-24 19:44:56'),
(6, 4, 3, 1, 'fdfdfdfdfd', '2019-05-25 01:44:03'),
(7, 4, 3, 1, 'хуесос какой-то', '2019-05-25 01:49:16'),
(8, 4, 3, 1, 'ПОКА', '2019-05-25 01:50:42'),
(9, 4, 3, 1, 'GJ', '2019-05-25 01:53:47'),
(10, 4, 3, 1, 'fdfd', '2019-05-25 01:54:25'),
(11, 4, 3, 1, 'fdfdfdfdd', '2019-05-25 01:58:26'),
(12, 4, 3, 1, 'ПРивава', '2019-05-25 02:00:44'),
(13, 4, 3, 1, 'ававав', '2019-05-25 02:01:42'),
(14, 4, 3, 1, 'папа', '2019-05-25 02:36:51'),
(15, 4, 3, 1, 'КАРА', '2019-05-25 03:31:01'),
(16, 8, 17, 1, '<b><i>Нихуя &nbsp;не сделал гандон ебаный сука блять</i></b>', '2019-05-31 01:53:52'),
(17, 8, 4, 1, 'авдлда', '2019-05-31 02:14:20'),
(18, 9, 3, 1, 'ава', '2019-05-31 02:30:00'),
(19, 9, 4, 1, 'fddfd', '2019-07-01 00:17:19');

-- --------------------------------------------------------

--
-- Table structure for table `startup_forums_docs`
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

--
-- Dumping data for table `startup_forums_docs`
--

INSERT INTO `startup_forums_docs` (`parent_id`, `id`, `date`, `user_id`, `count_views`, `count_comments`, `count_likes`, `tittle`, `text`, `my_like`) VALUES
(4, 1, '2019-05-31 00:28:59', 1, 4, 1, 0, 'dffddf', 'fdfdfd', 0),
(4, 2, '2019-05-11 19:00:47', 1, 1, 0, 0, 'fddffddf', 'dffdfd', 0),
(4, 3, '2019-05-26 01:43:01', 1, 3, 0, 0, 'dfdf', 'dffd', 0),
(4, 5, '2019-05-31 00:28:36', 1, 16, 3, 1, 'ffffd', 'fdfd', 0),
(4, 6, '2019-05-31 00:28:42', 1, 3, 0, 1, '1', '1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `startup_forums_idea`
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

--
-- Dumping data for table `startup_forums_idea`
--

INSERT INTO `startup_forums_idea` (`parent_id`, `id`, `date`, `user_id`, `count_views`, `count_comments`, `count_likes`, `tittle`, `text`, `my_like`) VALUES
(4, 4, '2019-05-29 20:54:24', 1, 367, 28, 1, 'Идея давдлавлававплолвпарпоавыдплаврпвоапровалрпваыовпаовпаро', 'fddf', 0),
(4, 5, '2019-05-28 17:00:47', 1, 38, 3, 2, 'fdfd', 'fd', 0),
(3, 7, '2019-05-06 01:59:10', 1, 0, 0, 0, 'fdfdfd', 'fdfdfd', 0),
(2, 8, '2019-05-06 02:29:10', 1, 0, 0, 0, 'fddffdfd', 'fdfdfd', 0),
(2, 9, '2019-05-06 02:30:38', 1, 0, 0, 0, 'fddf', 'dfdf', 0),
(2, 10, '2019-05-06 02:35:10', 1, 0, 0, 0, 'fdfdfd', 'fddfdfdfd', 0),
(3, 11, '2019-05-11 03:52:31', 1, 0, 0, 1, 'ававва', 'вааввав', 0),
(1, 14, '2019-05-29 22:35:32', 5, 2, 0, 0, 'fdfdfd', 'fdfd', 0),
(8888, 15, '2019-05-07 19:31:01', 1, 0, 0, 0, 'dsdsds', 'sddsds', 0),
(8888, 16, '2019-05-07 19:31:01', 1, 0, 0, 0, 'dsdsds', 'sddsds', 0),
(8888, 17, '2019-05-07 19:31:01', 1, 0, 0, 0, 'dsdsds', 'sddsds', 0),
(8888, 18, '2019-05-07 19:31:04', 1, 0, 0, 0, 'adds', 'dss', 0),
(8888, 19, '2019-05-07 19:41:28', 1, 0, 0, 0, 'fdfd', 'dffd', 0),
(8888, 20, '2019-05-07 19:42:20', 1, 0, 0, 0, 'fddf', 'fdfd', 0),
(8888, 21, '2019-05-07 19:42:30', 1, 0, 0, 0, 'fdfd', 'fdfd', 0),
(8888, 22, '2019-05-07 19:42:58', 1, 0, 0, 0, 'fdfd', 'dffd', 0),
(8888, 23, '2019-05-07 19:47:11', 1, 0, 0, 0, 'ава', 'ававва', 0),
(8888, 24, '2019-05-07 20:12:33', 1, 0, 0, 0, 'jkjk', 'kkj', 0),
(3, 25, '2019-05-11 03:50:34', 1, 1, 0, 0, 'fdfd', 'fdfd', 0),
(4, 26, '2019-05-11 03:50:30', 2, 6, 0, 0, 'Привет мир!', 'Привет мир!', 0),
(4, 28, '2019-05-30 21:00:35', 2, 17, 3, 1, 'display: block;     margin-top: 3px;     color: #777777;     font-size: 14px;   ', '<div>display: block;</div><div>&nbsp; &nbsp; margin-top: 3px;</div><div>&nbsp; &nbsp; color: #777777;</div><div>&nbsp; &nbsp; font-size: 14px;</div><div>&nbsp; &nbsp; padding-left: 15px;display: block;</div><div>&nbsp; &nbsp; margin-top: 3px;</div><div>&nbsp; &nbsp; color: #777777;</div><div>&nbsp; &nbsp; font-size: 14px;</div><div>&nbsp; &nbsp; padding-left: 15px;display: block;</div><div>&nbsp; &nbsp; margin-top: 3px;</div><div>&nbsp; &nbsp; color: #777777;</div><div>&nbsp; &nbsp; font-size: 14px;</div><div>&nbsp; &nbsp; padding-left: 15px;</div>', 0),
(4, 29, '2019-05-12 03:51:35', 2, 3, 0, 0, 'fdfd', 'dffdfd', 0),
(4, 30, '2019-05-12 04:07:10', 1, 3, 0, 2, 'fdfd', 'fdfdfdfd', 0),
(3, 34, '2019-05-25 21:44:54', 17, 0, 0, 0, 'fdfd', 'dffd', 0),
(3, 35, '2019-05-25 21:45:41', 17, 0, 0, 0, 'dffddf', 'f', 0),
(3, 36, '2019-05-25 21:45:44', 17, 0, 0, 0, 'fdfd', 'fdfd', 0),
(3, 37, '2019-05-25 21:46:43', 17, 0, 0, 0, 'fdfd', 'dffd', 0),
(3, 38, '2019-05-25 21:47:07', 17, 0, 0, 0, 'fddf', 'fdfd', 0),
(3, 39, '2019-05-25 21:47:44', 17, 0, 0, 0, 'dffddf', 'fdfd', 0),
(3, 40, '2019-05-25 21:49:15', 17, 1, 0, 0, 'dffd', 'fdfd', 0),
(4, 41, '2019-05-31 06:33:46', 1, 37, 7, 1, 'RHfdmnfdnm', 'fjkdfjkdfjkdjfkdfjkd', 0),
(7, 42, '2019-05-26 05:12:36', 1, 2, 0, 0, 'Dasd', '<div style=\"text-align: center;\"><span style=\"font-weight: bold;\">fdfdfdfd</span></div>', 0),
(5, 43, '2019-05-28 00:04:43', 1, 7, 0, 0, 'Большая идея', '<p style=\"margin: 0.4em 0px 0.5em; line-height: 1.5em; color: rgb(0, 0, 0); font-family: sans-serif; font-size: 12.7px; font-variant-ligatures: normal; orphans: 2; widows: 2;\"><b>JavaScript</b>&nbsp;(он же&nbsp;<i>JS, Яваскрипт, LiveScript, ECMAScript, Жабаскрипт</i>)&nbsp;— поделие&nbsp;<a href=\"http://lurkmore.to/%D0%A1%D1%83%D0%BC%D1%80%D0%B0%D1%87%D0%BD%D1%8B%D0%B9_%D0%B3%D0%B5%D0%BD%D0%B8%D0%B9\" title=\"Сумрачный гений\" style=\"text-decoration: none; color: rgb(90, 54, 150); background-image: none; background-position: initial initial; background-repeat: initial initial;\">Брендана Айха</a>, чуть более чем повсеместно использующееся для написания&nbsp;<a href=\"http://lurkmore.to/%D0%9A%D0%BE%D1%81%D1%82%D1%8B%D0%BB%D1%8C\" title=\"Костыль\" style=\"text-decoration: none; color: rgb(90, 54, 150); background-image: none; background-position: initial initial; background-repeat: initial initial;\">костылей</a>&nbsp;к тому, что не сделать с помощью HTML и CSS<sup id=\"cite_ref-0\" class=\"reference\"><a href=\"http://lurkmore.to/JavaScript#cite_note-0\" style=\"text-decoration: none; color: rgb(90, 54, 150); background-image: none; background-position: initial initial; background-repeat: initial initial;\">[1]</a></sup>. Если где-либо на веб-странице что-либо выдвигается, скукоживается, моргает, перекрашивается, перекашивается, вырвиглазно всплывает, икает, гыгыкает, хрюкает, пукает и весело ржот за кадром&nbsp;— и всё это при отсутствии&nbsp;<a href=\"http://lurkmore.to/Flash\" title=\"Flash\" style=\"text-decoration: none; color: rgb(90, 54, 150); background-image: none; background-position: initial initial; background-repeat: initial initial;\">Flash</a>&nbsp;или CSS,&nbsp;— это и есть JavaScript.</p><p style=\"margin: 0.4em 0px 0.5em; line-height: 1.5em; color: rgb(0, 0, 0); font-family: sans-serif; font-size: 12.7px; font-variant-ligatures: normal; orphans: 2; widows: 2;\">Своим появлением обрушил порог входа в профессию «<a href=\"http://lurkmore.to/%D0%91%D1%8B%D0%B4%D0%BB%D0%BE%D0%BA%D0%BE%D0%B4%D0%B5%D1%80\" title=\"Быдлокодер\" style=\"text-decoration: none; color: rgb(90, 54, 150); background-image: none; background-position: initial initial; background-repeat: initial initial;\">программиста</a>» практически до нуля, причём ноль этот абсолютно круглый и плоский. Собственно,&nbsp;<a href=\"http://lurkmore.to/%D0%90%D0%BD%D0%BE%D0%BD%D0%B8%D0%BC%D1%83%D1%81\" title=\"Анонимус\" style=\"text-decoration: none; color: rgb(90, 54, 150); background-image: none; background-position: initial initial; background-repeat: initial initial;\">человек</a>, практикующий JavaScript, иногда даже не зовется программистом, а приравнивается к верстальщикам. Толпы народу, не имеющие ни малейшего представления об указателях и&nbsp;<a href=\"http://lurkmore.to/%D0%A0%D0%B5%D0%BA%D1%83%D1%80%D1%81%D0%B8%D1%8F\" title=\"Рекурсия\" style=\"text-decoration: none; color: rgb(90, 54, 150); background-image: none; background-position: initial initial; background-repeat: initial initial;\">рекурсии</a>, не знающие даже основных алгоритмов, называющие переменные русской латинкой&nbsp;— спокойно пишут на языке, где правил оформления кода нет как не было.</p><p style=\"margin: 0.4em 0px 0.5em; line-height: 1.5em; color: rgb(0, 0, 0); font-family: sans-serif; font-size: 12.7px; font-variant-ligatures: normal; orphans: 2; widows: 2;\">Язык поддерживается всеми браузерами, способен выполняться и на серверах, на нём уже пишут складской учёт, воруют данные с Яндекс-маркета, зачисляют платежи, следят за таксопарком, сдают&nbsp;<a href=\"http://lurkmore.to/%D0%9F%D1%80%D0%BE%D1%81%D1%82%D0%B8%D1%82%D1%83%D1%82%D0%BA%D0%B0\" title=\"Проститутка\" style=\"text-decoration: none; color: rgb(90, 54, 150); background-image: none; background-position: initial initial; background-repeat: initial initial;\">блядей</a>&nbsp;в аренду&nbsp;— он стал де-факто&nbsp;<a href=\"http://lurkmore.to/%D0%A0%D0%B0%D0%B1%D1%81%D0%BA%D0%B8%D0%B9_%D0%BC%D0%B5%D0%BD%D1%82%D0%B0%D0%BB%D0%B8%D1%82%D0%B5%D1%82\" title=\"Рабский менталитет\" style=\"text-decoration: none; c', 0),
(43, 44, '2019-05-28 00:04:16', 1, 0, 0, 0, 'Now you can', '<h1 class=\"font-xxlarge\" style=\"box-sizing: border-box; font-size: 48px; line-height: 52px; font-weight: normal; margin: 0px; -webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility; color: rgb(0, 0, 0); font-family: Medium-65, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-variant-ligatures: normal; orphans: 2; widows: 2;\">Now you can<br style=\"box-sizing: border-box;\">pre–pay for icons</h1><p class=\"font-medium weight-light padding-r-xl\" style=\"box-sizing: border-box; font-size: 18px; line-height: 24px; padding-right: 40px; font-family: Light-45, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; -webkit-font-smoothing: antialiased; color: rgb(0, 0, 0); font-variant-ligatures: normal; orphans: 2; widows: 2;\">You may not need icons every day. Now you can add money to your account for a pre–paid balance you can use any time you wish.</p><h1 class=\"font-xxlarge\" style=\"box-sizing: border-box; font-size: 48px; line-height: 52px; font-weight: normal; margin: 0px; -webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility; color: rgb(0, 0, 0); font-family: Medium-65, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-variant-ligatures: normal; orphans: 2; widows: 2;\">Now you can<br style=\"box-sizing: border-box;\">pre–pay for icons</h1><p class=\"font-medium weight-light padding-r-xl\" style=\"box-sizing: border-box; font-size: 18px; line-height: 24px; padding-right: 40px; font-family: Light-45, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; -webkit-font-smoothing: antialiased; color: rgb(0, 0, 0); font-variant-ligatures: normal; orphans: 2; widows: 2;\">You may not need icons every day. Now you can add money to your account for a pre–paid balance you can use any time you wish.</p>', 0),
(4, 45, '2019-05-28 17:54:47', 1, 1, 0, 1, 'Fdfd', 'dffdfd', 0),
(4, 46, '2019-05-28 00:06:30', 1, 1, 0, 0, 'Now you can', '<h1 class=\"font-xxlarge\" style=\"box-sizing: border-box; font-size: 48px; line-height: 52px; font-weight: normal; margin: 0px; -webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility; color: rgb(0, 0, 0); font-family: Medium-65, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-variant-ligatures: normal; orphans: 2; widows: 2;\">Now you canNow you canNow you canNow you canNow you canNow you canNow you canNow you canNow you canNow you canNow you canNow you canNow you canNow you canNow you can</h1>', 0),
(4, 47, '2019-05-29 02:44:44', 1, 3, 0, 0, 'Dffdfdfdfdfdfdfdfd', '<p style=\"margin: 0.4em 0px 0.5em; line-height: 1.5em; color: rgb(0, 0, 0); font-family: sans-serif; font-size: 12.7px; font-variant-ligatures: normal; orphans: 2; widows: 2;\">тся, моргает, перекрашивается, перекашивается, вырвиглазно всплывает, икает, гыгыкает, хрюкает, пукает и весело ржот за кадром&nbsp;— и всё это при отсутствии&nbsp;<a href=\"http://lurkmore.to/Flash\" title=\"Flash\" style=\"text-decoration: none; color: rgb(90, 54, 150); background-image: none; background-position: initial initial; background-repeat: initial initial;\">Flash</a>&nbsp;или CSS,&nbsp;— это и есть JavaScript.</p><p style=\"margin: 0.4em 0px 0.5em; line-height: 1.5em; color: rgb(0, 0, 0); font-family: sans-serif; font-size: 12.7px; font-variant-ligatures: normal; orphans: 2; widows: 2;\">Своим появлением обрушил порог входа в профессию «<a href=\"http://lurkmore.to/%D0%91%D1%8B%D0%B4%D0%BB%D0%BE%D0%BA%D0%BE%D0%B4%D0%B5%D1%80\" title=\"Быдлокодер\" style=\"text-decoration: none; color: rgb(90, 54, 150); background-image: none; background-position: initial initial; background-repeat: initial initial;\">программиста</a>» практически до нуля, причём ноль этот абсолютно круглый и плоский. Собственно,&nbsp;<a href=\"http://lurkmore.to/%D0%90%D0%BD%D0%BE%D0%BD%D0%B8%D0%BC%D1%83%D1%81\" title=\"Анонимус\" style=\"text-decoration: none; color: rgb(90, 54, 150); background-image: none; background-position: initial initial; background-repeat: initial initial;\">человек</a>, практикующий JavaScript,&nbsp;<span style=\"font-size: 12.7px;\">ргает, перекрашивается, перекашивается, вырвиглазно всплывает, икает, гыгыкает, хрюкает, пукает и весело ржот за кадром&nbsp;— и всё это при отсутствии&nbsp;</span><a href=\"http://lurkmore.to/Flash\" title=\"Flash\" style=\"font-size: 12.7px; text-decoration: none; color: rgb(90, 54, 150); background-image: none;\">Flash</a><span style=\"font-size: 12.7px;\">&nbsp;или CSS,&nbsp;— это и есть JavaScript.</span></p><p style=\"margin: 0.4em 0px 0.5em; line-height: 1.5em; color: rgb(0, 0, 0); font-family: sans-serif; font-size: 12.7px; font-variant-ligatures: normal; orphans: 2; widows: 2;\">Своим появлением обрушил порог входа в профессию «<a href=\"http://lurkmore.to/%D0%91%D1%8B%D0%B4%D0%BB%D0%BE%D0%BA%D0%BE%D0%B4%D0%B5%D1%80\" title=\"Быдлокодер\" style=\"text-decoration: none; color: rgb(90, 54, 150); background-image: none;\">программиста</a>» практически до нуля, причём ноль этот абсолютно круглый и плоский. Собственно,&nbsp;<a href=\"http://lurkmore.to/%D0%90%D0%BD%D0%BE%D0%BD%D0%B8%D0%BC%D1%83%D1%81\" title=\"Анонимус\" style=\"text-decoration: none; color: rgb(90, 54, 150); background-image: none;\">человек</a>, практикующий JavaScript,&nbsp;<span style=\"font-size: 12.7px;\">ргает, перекрашивается, перекашивается, вырвиглазно всплывает, икает, гыгыкает, хрюкает, пукает и весело ржот за кадром&nbsp;— и всё это при отсутствии&nbsp;</span><a href=\"http://lurkmore.to/Flash\" title=\"Flash\" style=\"font-size: 12.7px; text-decoration: none; color: rgb(90, 54, 150); background-image: none;\">Flash</a><span style=\"font-size: 12.7px;\">&nbsp;или CSS,&nbsp;— это и есть JavaScript.</span></p><p style=\"margin: 0.4em 0px 0.5em; line-height: 1.5em; color: rgb(0, 0, 0); font-family: sans-serif; font-size: 12.7px; font-variant-ligatures: normal; orphans: 2; widows: 2;\">Своим появлением обрушил порог входа в профессию «<a href=\"http://lurkmore.to/%D0%91%D1%8B%D0%B4%D0%BB%D0%BE%D0%BA%D0%BE%D0%B4%D0%B5%D1%80\" title=\"Быдлокодер\" style=\"text-decoration: none; color: rgb(90, 54, 150); background-image: none;\">программиста</a>» практически до нуля, причём ноль этот абсолютно круглый и плоский. Собственно,&nbsp;<a href=\"http://lurkmore.to/%D0%90%D0%BD%D0%BE%D0%BD%D0%B8%D0%BC%D1%83%D1%81\" title=\"Анонимус\" style=\"text-decoration: none; color: rgb(90, 54, 150); background-image: none;\">человек</a>, практикующий JavaScript,&nbsp;</p>', 0),
(4, 48, '2019-05-29 02:44:31', 1, 18, 1, 0, 'Скопировано с википедии', '<p style=\"margin: 0.5em 0px; line-height: inherit; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px; font-variant-ligatures: normal; orphans: 2; widows: 2;\"><a href=\"https://ru.wikipedia.org/wiki/%D0%90%D0%B2%D1%81%D1%82%D1%80%D0%B0%D0%BB%D0%B8%D1%8F\" title=\"Австралия\" style=\"text-decoration: none; color: rgb(11, 0, 128); background-image: none; background-position: initial initial; background-repeat: initial initial;\">ралии</a>&nbsp;и&nbsp;<a href=\"https://ru.wikipedia.org/wiki/%D0%A2%D0%B0%D1%81%D0%BC%D0%B0%D0%BD%D0%B8%D1%8F\" title=\"Тасмания\" style=\"text-decoration: none; color: rgb(11, 0, 128); background-image: none; background-position: initial initial; background-repeat: initial initial;\">Тасмании</a>, один — на&nbsp;<a href=\"https://ru.wikipedia.org/wiki/%D0%9C%D0%BE%D0%BB%D1%83%D0%BA%D0%BA%D1%81%D0%BA%D0%B8%D0%B5_%D0%BE%D1%81%D1%82%D1%80%D0%BE%D0%B2%D0%B0\" title=\"Молуккские острова\" style=\"text-decoration: none; color: rgb(11, 0, 128); background-image: none; background-position: initial initial; background-repeat: initial initial;\">Молуккских островах</a>&nbsp;и ещё один — в&nbsp;<a href=\"https://ru.wikipedia.org/wiki/%D0%9D%D0%BE%D0%B2%D0%B0%D1%8F_%D0%9A%D0%B0%D0%BB%D0%B5%D0%B4%D0%BE%D0%BD%D0%B8%D1%8F\" title=\"Новая Каледония\" style=\"text-decoration: none; color: rgb(11, 0, 128); background-image: none; background-position: initial initial; background-repeat: initial initial;\">Новой Каледонии</a>. К раннему и среднему&nbsp;<a href=\"https://ru.wikipedia.org/wiki/%D0%9C%D0%B8%D0%BE%D1%86%D0%B5%D0%BD\" title=\"Миоцен\" style=\"text-decoration: none; color: rgb(11, 0, 128); background-image: none; background-position: initial initial; background-repeat: initial initial;\">миоцену</a>&nbsp;относят ещё одного представителя семейства —&nbsp;<i><a href=\"https://ru.wikipedia.org/w/index.php?title=Quipollornis_koniberi&amp;action=edit&amp;redlink=1\" class=\"new\" title=\"Quipollornis koniberi (страница отсутствует)\" style=\"text-decoration: none; color: rgb(165, 88, 88); background-image: none; background-position: initial initial; background-repeat: initial initial;\">Quipollornis koniberi</a></i>.</p><p style=\"margin: 0.5em 0px; line-height: inherit; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px; font-variant-ligatures: normal; orphans: 2; widows: 2;\">Птицы длиной до&nbsp;<span class=\"nowrap\" style=\"white-space: nowrap;\">30&nbsp;см</span>&nbsp;и массой до&nbsp;<span class=\"nowrap\" style=\"white-space: nowrap;\">100&nbsp;г</span>&nbsp;с круглой головой, слабо выраженными&nbsp;<a href=\"https://ru.wikipedia.org/wiki/%D0%9B%D0%B8%D1%86%D0%B5%D0%B2%D0%BE%D0%B9_%D0%B4%D0%B8%D1%81%D0%BA\" title=\"Лицевой диск\" style=\"text-decoration: none; color: rgb(11, 0, 128); background-image: none; background-position: initial initial; background-repeat: initial initial;\">лицевыми дисками</a>&nbsp;и смотрящими вперёд глазами.&nbsp;<a href=\"https://ru.wikipedia.org/wiki/%D0%9E%D0%BF%D0%B5%D1%80%D0%B5%D0%BD%D0%B8%D0%B5_(%D0%B1%D0%B8%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D1%8F)\" title=\"Оперение (биология)\" style=\"text-decoration: none; color: rgb(11, 0, 128); background-image: none; background-position: initial initial; background-repeat: initial initial;\">Оперение</a>&nbsp;в основном окрашено в коричневые, рыжие, каштановые или серые цвета разных оттенков со струйчатым рисунком, поперечной рябью или полосками. Своим внешним видом и вертикальной посадкой напоминают&nbsp;<a href=\"https://ru.wikipedia.org/wiki/%D0%A1%D0%BE%D0%B2%D1%8B\" class=\"mw-redirect\" title=\"Совы\" style=\"text-decoration: none; color: rgb(11, 0, 128); background-image: none; background-position: initial initial; background-repeat: initial initial;\">сов</a>. Обитают в лесах на высоте до 3700 метров над уровнем моря. Ведут ночной образ жизни, днём прячутся в&nbsp;<a href=\"https://ru.wikipedia.org/wiki/%D0%94%D1%83%D0%BF%D0%BB%D0%BE\" title=\"Дупло\" style=\"text-decoration: none; color: rgb(11, 0, 128); background-image: none; background-position: initial initial; background-repeat: initial initial;\">дуплах</a>&nbsp;деревьев, в расщелинах скал, по берегам рек. Питаются&nbsp;<a href=\"https://ru.wikipedia.org/wiki/%D0%9D%D0%B0%D1%81%D0%B5%D0%BA%D0%BE%D0%BC%D1%8B%D0%B5\" title=\"\" style=\"text-decoration: none; color: rgb(11, 0, 128); background-image: none; background-position: initial initial; background-repeat: initial initial;\">на', 0),
(48, 49, '2019-05-28 00:51:26', 1, 0, 0, 0, 'Випедия 2', '<p style=\"margin: 0.5em 0px; line-height: inherit; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px; font-variant-ligatures: normal; orphans: 2; widows: 2;\"><b><a href=\"https://ru.wikipedia.org/wiki/%D0%9A%D0%B0%D0%BD%D1%82%D0%BE%D1%80%D0%BE%D0%B2%D0%B8%D1%87,_%D0%90%D0%BD%D0%B0%D1%82%D0%BE%D0%BB%D0%B8%D0%B9_%D0%AF%D0%BA%D0%BE%D0%B2%D0%BB%D0%B5%D0%B2%D0%B8%D1%87\" title=\"Канторович, Анатолий Яковлевич\" style=\"text-decoration: none; color: rgb(11, 0, 128); background-image: none; background-position: initial initial; background-repeat: initial initial;\">натолий Яковлевич Канторович</a></b>&nbsp;(псевдонимы: Аякс, Н. Терентьев;&nbsp;<a href=\"https://ru.wikipedia.org/wiki/28_%D0%B8%D1%8E%D0%BD%D1%8F\" title=\"28 июня\" style=\"text-decoration: none; color: rgb(11, 0, 128); background-image: none; background-position: initial initial; background-repeat: initial initial;\">28 июня</a>&nbsp;<a href=\"https://ru.wikipedia.org/wiki/1896_%D0%B3%D0%BE%D0%B4\" title=\"1896 год\" style=\"text-decoration: none; color: rgb(11, 0, 128); background-image: none; background-position: initial initial; background-repeat: initial initial;\">1896 года</a>&nbsp;— 1937 год)&nbsp;— советский учёный-международник, специалист по экономической истории Китая, доктор экономических наук (1936).</p><p style=\"margin: 0.5em 0px; line-height: inherit; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px; font-variant-ligatures: normal; orphans: 2; widows: 2;\">Родился в семье учёного-<a href=\"https://ru.wikipedia.org/wiki/%D0%AE%D1%80%D0%B8%D1%81%D0%BF%D1%80%D1%83%D0%B4%D0%B5%D0%BD%D1%86%D0%B8%D1%8F\" title=\"Юриспруденция\" style=\"text-decoration: none; color: rgb(11, 0, 128); background-image: none; background-position: initial initial; background-repeat: initial initial;\">юриспрудента</a>. Принимал активное участие в&nbsp;<a href=\"https://ru.wikipedia.org/wiki/%D0%9E%D0%BA%D1%82%D1%8F%D0%B1%D1%80%D1%8C%D1%81%D0%BA%D0%B0%D1%8F_%D1%80%D0%B5%D0%B2%D0%BE%D0%BB%D1%8E%D1%86%D0%B8%D1%8F\" title=\"Октябрьская революция\" style=\"text-decoration: none; color: rgb(11, 0, 128); background-image: none; background-position: initial initial; background-repeat: initial initial;\">Октябрьской революции</a>&nbsp;и&nbsp;<a href=\"https://ru.wikipedia.org/wiki/%D0%93%D1%80%D0%B0%D0%B6%D0%B4%D0%B0%D0%BD%D1%81%D0%BA%D0%B0%D1%8F_%D0%B2%D0%BE%D0%B9%D0%BD%D0%B0_%D0%B2_%D0%A0%D0%BE%D1%81%D1%81%D0%B8%D0%B8\" title=\"Гражданская война в России\" style=\"text-decoration: none; color: rgb(11, 0, 128); background-image: none; background-position: initial initial; background-repeat: initial initial;\">гражданской войне</a>&nbsp;на стороне большевиков. После революции работал в&nbsp;<a href=\"https://ru.wikipedia.org/wiki/%D0%9D%D0%B0%D1%80%D0%BE%D0%B4%D0%BD%D1%8B%D0%B9_%D0%BA%D0%BE%D0%BC%D0%B8%D1%81%D1%81%D0%B0%D1%80%D0%B8%D0%B0%D1%82_%D0%BF%D0%BE_%D0%B8%D0%BD%D0%BE%D1%81%D1%82%D1%80%D0%B0%D0%BD%D0%BD%D1%8B%D0%BC_%D0%B4%D0%B5%D0%BB%D0%B0%D0%BC_%D0%A0%D0%A1%D0%A4%D0%A1%D0%A0\" title=\"Народный комиссариат по иностранным делам РСФСР\" style=\"text-decoration: none; color: rgb(11, 0, 128); background-image: none; background-position: initial initial; background-repeat: initial initial;\">НКИД</a>. В 1924—1928 годы работал советником при советском посольстве в&nbsp;<a href=\"https://ru.wikipedia.org/wiki/%D0%9F%D0%B5%D0%BA%D0%B8%D0%BD\" title=\"Пекин\" style=\"text-decoration: none; color: rgb(11, 0, 128); background-image: none; background-position: initial initial; background-repeat: initial initial;\">Пекине</a>, параллельно занимался исследованием китайской экономики. Вернувшись в Москву, преподавал в&nbsp;<a href=\"https://ru.wikipedia.org/wiki/%D0%9C%D0%BE%D1%81%D0%BA%D0%BE%D0%B2%D1%81%D0%BA%D0%B8%D0%B9_%D0%B8%D0%BD%D1%81%D1%82%D0%B8%D1%82%D1%83%D1%82_%D0%B2%D0%BE%D1%81%D1%82%D0%BE%D0%BA%D0%BE%D0%B2%D0%B5%D0%B4%D0%B5%D0%BD%D0%B8%D1%8F\" title=\"Московский институт востоковедения\" style=\"text-decoration: none; color: rgb(11, 0, 128); background-image: none; background-position: initial initial; background-repeat: initial initial;\">МИВ</a>, продолжал также работать в НКИД до 1932 года, после чего перешёл на должность старшего научного сотрудника в&nbsp;<a href=\"https://ru.wikipedia.org/wiki/%D0%98%D0%BD%D1%81%D1%82%D0%B8%D1%82%D1%83%D1%82_%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%BE%D0%B3%D0%BE_%D1%85%D0%BE%D0%B7%D1%8F%D', 0),
(48, 50, '2019-05-28 00:54:45', 1, 0, 0, 0, 'Fdfdfdfdfdfd', '', 0),
(48, 51, '2019-05-28 00:54:51', 1, 0, 0, 0, 'Fdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfd', '', 0),
(48, 52, '2019-05-28 00:55:32', 1, 0, 0, 0, 'Dffddfdf', '', 0),
(48, 53, '2019-05-28 00:56:30', 1, 0, 0, 0, 'Dffd', 'натолий Яковлевич Канторович (псевдонимы: Аякс, Н. Терентьев; 28 июня 1896 года — 1937 год) — советский учёный-международник, специалист по экономической истории Китая, доктор экономических наук (1936).\n\nРодился \n\n\n', 0),
(4, 54, '2019-05-30 20:52:40', 1, 7, 0, 0, 'Fdfdfdfdfd', '\nРазница между innerText и innerHTML\n\nВ чем разница между innerHTML, innerText и childNodes[].value в JavaScript?\n\n207 javascript dom\nuser2819851 26 сент. \'13 в 17:16источникподелиться\n8 ответов\nВ отличие от innerText, однако, innerHTML позволяет работать с форматированным текстом HTML и не выполняет автоматическое кодирование и декодирование текста. Другими словами, innerTextизвлекает и устанавливает содержимое тега в виде простого текста, тогда как innerHTML извлекает и устанавливает содержимое в формате HTML.\n\n', 0),
(54, 55, '2019-05-28 00:57:27', 1, 0, 0, 0, 'Fdfdfd', 'fdfddfdfdfd', 0),
(54, 56, '2019-05-28 00:57:38', 1, 0, 0, 0, 'Fdfdfd', 'fdfddfdfdfd', 0),
(54, 57, '2019-05-28 00:57:52', 1, 0, 0, 0, 'Vvvv', 'vvvvvvvvvvvvvv', 0),
(54, 58, '2019-05-28 00:58:11', 1, 0, 0, 0, 'Dffdfdfdfdfdfdfdfd', 'ffff', 0),
(4, 59, '2019-05-28 17:00:04', 1, 13, 0, 1, 'Fdfdfd', 'fdfdfd', 0),
(4, 60, '2019-05-28 16:36:13', 1, 4, 0, 0, 'Fdfdfd', 'fdfdfd', 0),
(4, 61, '2019-05-28 16:36:22', 1, 7, 0, 0, '1', '1', 0),
(4, 63, '2019-05-30 20:52:44', 1, 2, 0, 1, 'авлавлд', 'валдавлдав', 0),
(4, 65, '2019-05-30 20:52:52', 1, 32, 0, 1, 'ваав', 'ав', 0),
(4, 66, '2019-05-30 20:52:47', 1, 2, 0, 0, 'Vcvcvc', '<span style=\"color: rgb(51, 51, 51); font-family: &quot;PT Sans&quot;, Helvetica, Arial, sans-serif; font-size: 15px; font-variant-ligatures: normal; orphans: 2; widows: 2;\">Пара во<u>просов по поводу сайта без перезагрузки страницы.</u></span><br style=\"box-sizing: border-box; color: rgb(51, 51, 51); font-family: &quot;PT Sans&quot;, Helvetica, Arial, sans-serif; font-size: 15px; font-variant-ligatures: normal; orphans: 2; widows: 2;\"><div style=\"text-align: justify;\"><font color=\"#333333\" face=\"PT Sans, Helvetica, Arial, sans-serif\"><span style=\"caret-color: rgb(51, 51, 51); font-size: 15px;\"><u><br></u></span></font></div><span style=\"font-family: &quot;PT Sans&quot;, Helvetica, Arial, sans-serif; font-size: 15px; font-variant-ligatures: normal; orphans: 2; widows: 2;\"><div style=\"text-align: justify;\"><font color=\"#333333\"><u>1) Когда мы х</u></font><i><font color=\"#333333\"><u>одим по ра</u></font><font color=\"#ff001a\" style=\"background-color: rgb(255, 250, 0);\"><u>зделам ВК (Мои груп</u>пы, мои сообщения), страница ведь не перезагружается?</font></i></div></span><span style=\"font-family: &quot;PT Sans&quot;, Helvetica, Arial, sans-serif; font-size: 15px; font-variant-ligatures: normal; orphans: 2; widows: 2;\"><div style=\"text-align: justify;\"><b><font color=\"#ff001a\" style=\"background-color: rgb(255, 250, 0);\"><i>2) Если сайт без перезагрузки, как менять URL? Допустим человек пришел по ссылке в раздел изображений, и что</i>бы открыть этот раз<a href=\"vc\">дел н</a></font><font color=\"#333333\"><a href=\"vc\">ам нужно узнать URl (страница то одна).</a></font></b></div></span><a href=\"vc\"><span style=\"color: rgb(51, 51, 51); font-family: &quot;PT Sans&quot;, Helvetica, Arial, sans-serif; font-size: 15px; font-variant-ligatures: normal; orphans: 2; widows: 2;\"><b>3) Связка со вторым вопро</b>сом. Если<b> сайт без перезагрузки, значит у него один .html файл? И мы его контейнер body обновляем без перезагрузки?</b></span><b><br style=\"box-sizing: border-box; color: rgb(51, 51, 51); font-family: &quot;PT Sans&quot;, Helvetica, Arial, sans-serif; font-size: 15px; font-variant-ligatures: normal; orphans: 2; widows: 2;\"></b></a><span style=\"color: rgb(51, 51, 51); font-family: &quot;PT Sans&quot;, Helvetica, Arial, sans-serif; font-size: 15px; font-variant-ligatures: normal; orphans: 2; widows: 2;\"><b><a href=\"vc\">4) Какие еще советы по поводу сайта без перезагрузк</a>и</b>?</span>', 0),
(4, 67, '2019-05-30 21:04:00', 1, 1, 0, 0, 'Dsdsdsdsdsds', '<div><br></div><div>.notFound_pickImg {</div><div><span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>width: all;</div><div><span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>height: 200px;</div><div><span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>display: flex;</div><div><span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>justify-content: center;</div><div><span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>align-items: center;</div><div><span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>background-color: white;</div><div>}</div><div>.notFound_pickImg img {</div><div><span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>height: inherit;</div><div><span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>width: auto;</div><div>}</div><div>.cant_do_Functions {</div><div><span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>width: all;</div><div><span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>height: auto;</div><div><span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>word-wrap: break-word;</div><div><span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>font-size: 16px;</div><div>}</div><div>.cant_do_Functions b {</div><div><span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>font-weight: 500;</div><div>}</div><div>.cant_do_Functions a {</div><div><span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>text-decoration: none;</div><div><span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>color: #33658a;</div><div>} .cant_do_Functions a:hover { text-decoration:underline; }</div><div><br></div><div><br></div><div><br></div><div>.txtControl {</div><div>&nbsp; &nbsp; line-height: 1.55;</div><div>&nbsp; &nbsp; letter-spacing: 0.15px;</div><div>&nbsp; &nbsp; overflow: hidden;</div><div>&nbsp; &nbsp; word-wrap: break-word;</div><div>&nbsp; &nbsp; white-space: pre-line;</div><div>&nbsp; &nbsp; position: relative;</div><div>}</div><div><br></div><div>.namesHidden {</div><div><span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>max-width: 380px;</div><div><span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>white-space: nowrap;</div><div>&nbsp; &nbsp; overflow: hidden;</div><div>&nbsp; &nbsp; display: inline-block;</div><div>}</div><div>.clearBottom {</div><div><span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>width: 1px;</div><div><span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>height: 10px;</div><div>}</div><div><br></div><div><br></div><div>.goLoginBlock {</div><div><span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>font-size: 16px;</div><div><br></div><div>.notFound_pickImg {</div><div><span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>width: all;</div><div><span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>height: 200px;</div><div><span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>display: flex;</div><div><span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>justify-content: center;</div><div><span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>align-items: center;</div><div><span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>background-color: white;</div><div>}</div><div>.notFound_pickImg img {</div><div><span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>height: inherit;</div><div><span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>width: auto;</div><div>}</div><div>.cant_do_Functions {</div><div><span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>width: all;</div><div><span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>height: auto;</div><div><span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>word-wrap: break-word;</div><div><span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>font-size: 16px;</div><div>}</div><div>.cant_do_Functions b {</div><div><span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>font-weight: 500;</div><div>}</div><div>.cant_do_Functions a {</div><div><span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>text-decoration: none;</div><div><span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>color: #33658a;</div><div>} .cant_do_Functions a:hover { text-decoration:underline; }</div><div><br></div><div><br></div><div><br></div><div>.txtControl {</div><div>&nbsp; &nbsp; line-height: 1.55;</div><div>&nbsp; &nbsp; letter-spacing: 0.15px;</div><div>&nbsp; &nbsp; overflow: hidden;</div><div>&nbsp; &nbsp; word-wrap: break-word;</div><div>&nbsp; &nbsp; white-space: pre-line;</div><div>&nbsp; &nbsp; position: relative;</div><div>}</div><div><br></div><div>.namesHidden {</div><div><span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>max-width: 380px;</div><div><span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>white-space: nowrap;</div><div>&nbsp; &nbsp; overflow: hidden;</div><div>&nbsp; &nbsp; display: inline-block;</div><div>}</div><div>.clearBottom {</div><div><span class=\"Apple-tab-', 0),
(4, 68, '2019-05-30 22:36:20', 1, 14, 3, 0, 'Fdfdffd', '<p style=\"margin: 0px 0px 1em; padding: 0px; border: 0px; font-variant-ligatures: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; font-size: 15px; vertical-align: baseline; box-sizing: inherit; clear: both; color: rgb(36, 39, 41); orphans: 2; widows: 2;\">Now, when I reach the max size, I can type more characters and it looks like I jump into next line. When I hit&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant-ligatures: inherit; font-variant-position: inherit; font-variant-caps: inherit; font-variant-numeric: inherit; font-variant-alternates: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: italic; font-variant-ligatures: inherit; font-variant-position: inherit; font-variant-caps: inherit; font-variant-numeric: inherit; font-variant-alternates: inherit; font-variant-east-asian: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit;\">enter</span></strong>&nbsp;button i also jump down into next line/raw.</p><p style=\"margin: 0px 0px 1em; padding: 0px; border: 0px; font-variant-ligatures: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; font-size: 15px; vertical-align: baseline; box-sizing: inherit; clear: both; color: rgb(36, 39, 41); orphans: 2; widows: 2;\">What I want to reach is to block this editable content \"window\" when I reach their max width and block the possibility to increase the height by hitting&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant-ligatures: inherit; font-variant-position: inherit; font-variant-caps: inherit; font-variant-numeric: inherit; font-variant-alternates: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: italic; font-variant-ligatures: inherit; font-variant-position: inherit; font-variant-caps: inherit; font-variant-numeric: inherit; font-variant-alternates: inherit; font-variant-east-asian: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit;\">enter</span></strong>&nbsp;button.</p><p style=\"margin: 0px 0px 1em; padding: 0px; border: 0px; font-variant-ligatures: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; font-size: 15px; vertical-align: baseline; box-sizing: inherit; clear: both; color: rgb(36, 39, 41); orphans: 2; widows: 2;\">I want to know if it is possible to do it using html5/css or only chance is to create some javascript code?</p><p style=\"margin: 0px 0px 1em; padding: 0px; border: 0px; font-variant-ligatures: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; font-size: 15px; vertical-align: baseline; box-sizing: inherit; clear: both; color: rgb(36, 39, 41); orphans: 2; widows: 2;\">Thanks in advance for you help!Now, when I reach the max size, I can type more characters and it looks like I jump into next line. When I hit&nbsp;<strong style=\"font-family: inherit; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant-ligatures: inherit; font-variant-position: inherit; font-variant-caps: inherit; font-variant-numeric: inherit; font-variant-alternates: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; box-sizing: inherit;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: italic; font-variant-ligatures: inherit; font-variant-position: inherit; font-variant-caps: inherit; font-variant-numeric: inherit; font-variant-alternates: inherit; font-variant-east-asian: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit;\">enter</span></strong>&nbsp;button i also jump down into next line/raw.</p><p style=\"margin: 0px 0px 1em; padding: 0px; border: 0px; font-variant-ligatures: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; font-size: 15px; vertical-align: baseline; box-sizing: inherit; clear: b', 0),
(4, 70, '2019-05-30 22:42:52', 1, 22, 10, 0, 'ваавав', 'авававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававававав', 0),
(4, 72, '2019-05-31 00:27:56', 1, 77, 10, 0, 'Forum_textMainBlock', 'forum_textMainBlockforum_textMainBlockforum_textMainBlockforum_textMainBlockforum_textMainBlockforuforum_textMainBlockforum_textMainBlockm_textMainBlockforum_textMainBlockforum_textMainBlockforum_textMainBlockforum_textMainBlock', 0),
(4, 73, '2019-05-30 22:54:36', 1, 1, 0, 0, 'аоваов', '<b>оалвоалваовлаовлаволлоавлоаволаволвололаволававлолавлаваолвавлоаолваолваволвалоаолаволаловлвоаволавло</b>', 0),
(4, 74, '2019-05-30 23:39:05', 1, 28, 3, 0, 'Fjkdjkfd', '<ol><li style=\"text-align: center;\"><b><font size=\"1\">fjkdjkfdjfdfdkjjfdkfjkdjkfdjfdfdkjjfdkfjkdjkfdjfdfdkjjfdkfjkdjkfdjfdfdkjjfdkfjkdjkfdjfdfdkjjfdkfjkdjkfdjfdfdkjjfdkfjkdjkfdjfdfdkjjfdkfjkdjkfdjfdfdkjjfdkfjkdjkfdjfdfdkjjfdkfjkdjkfdjfdfdkjjfdkfjkdjkfdjfdfdkjjfdkfjkdjkfdjfdfdkjjfdkfjkdjkfdjfdfdkjjfdkfjkdjkfdjfdfdkjjfdkfjkdjkfdjfdfdkjjfdkfjkdjkfdjfdfdkjjfdkfjkdjkfdjfdfdkjjfdkfjkdjkfdjfdfdkjjfdkfjkdjkfdjfdfdkjjfdk</font></b><br></li></ol>', 0),
(4, 76, '2019-05-30 23:55:34', 1, 1, 0, 0, '!important', '<b><i><u>!important</u></i></b>', 0),
(4, 77, '2019-05-30 23:55:47', 1, 1, 0, 0, 'Fdfdffd', '<ol><li style=\"text-align: right;\"><b><i><u>!important</u></i></b><br></li></ol>', 0),
(4, 78, '2019-05-30 23:56:05', 1, 1, 0, 0, 'Fdfd', '<ol><li style=\"text-align: center;\"><b><i><u><font face=\"Cuprum\" size=\"2\">!important</font></u></i></b><br></li></ol>', 0),
(4, 79, '2019-05-30 23:56:43', 1, 1, 0, 0, 'Fdfd', '<ol><li style=\"text-align: center;\"><b><i><u><font face=\"Sree Krushnadevaraya\" size=\"7\" color=\"#1614a7\" style=\"background-color: rgb(0, 0, 0);\"><a href=\"dffd\">!important</a></font></u></i></b><br></li></ol>', 0),
(4, 80, '2019-05-30 23:56:59', 1, 1, 0, 0, 'Fddffdfd', '<b><i><u>!important!important!important!important!important!important</u></i></b><div><b><i><u>!important!important!important!important!important</u></i></b></div><div><b><i><u>ant!important!important!important!important!important</u></i></b></div><div><b><i><u>!important!important!important!important!importantant!important!important!important!important!important</u></i></b></div><div><b><i><u>!important!important!important!important!importantant!important!important!important!important!important</u></i></b></div><div><b><i><u>!important!important!important!important!importantant!important!important!important!important!important</u></i></b></div><div><b><i><u>!important!important!important!important!importantant!important!important!important!important!important</u></i></b></div><div><b><i><u>!important!important!important!important!important</u></i></b></div><div><b><i><u>ant!important!important!important!important!important</u></i></b></div><div>!important!important!important!important!important</div>', 0),
(4, 81, '2019-05-30 23:57:18', 1, 1, 0, 0, 'Fdfdfdfdfd', 'ant!important!important!important!important!important<div>!important!important!important!important!importantant!important!important!important!important!important</div><div>!important!important!important!important!importantant!important!important!important!important!important</div><div>!important!important!important!important!importantant!important!important!important!important!important</div><div>!important!important!important!important!importantant!important!important!important!important!important</div><div>!important!important!important!important!importantant!important!important!important!important!important</div><div>!important!important!important!important!importantant!important!important!important!important!important</div><div>!important!important!important!important!importantant!important!important!important!important!important</div><div>!important!important!important!important!importantant!important!important!important!important!important</div><div>!important!important!important!important!importantant!important!important!important!important!important</div><div><ol><li style=\"text-align: right;\">!important!important!important!important!importantant!important!important!important!<b><i><u>important!important</u></i></b><br></li><li style=\"text-align: right;\"><b><i><u>!important!important!important!important!importantant!important!important!important!important!important</u></i></b><br></li><li style=\"text-align: right;\"><b><i><u>!important!important!important!important!importantant!important!important!important!important!important</u></i></b><br></li><li style=\"text-align: right;\"><b><i><u>!important!important!important!important!importantant!important!important!important!important!important</u></i></b><br></li><li style=\"text-align: right;\"><b><i><u>!important!important!important!important!importantant!important!important!important!important!important</u></i></b><br></li><li style=\"text-align: right;\"><b><i><u>!important!important!important!important!importantant!important!important!important!important!important</u></i></b><br></li><li style=\"text-align: right;\"><b><i><u>!important!important!important!important!importantant!important!important!important!important!important</u></i></b><br></li><li style=\"text-align: right;\"><b><i><u>!important!important!important!important!importantant!important!important!important!important!important</u></i></b><br></li><li style=\"text-align: right;\"><b><i><u>!important!important!important!important!importantant!important!important!important!important!important</u></i></b><br></li><li style=\"text-align: right;\"><b><i><u>!important!important!important!important!importantant!important!important!important!important!important</u></i></b><br></li><li style=\"text-align: right;\"><b><i><u>!important!important!important!important!importantant!important!important!important!important!important</u></i></b><br></li><li style=\"text-align: right;\"><b><i><u>!important!important!important!important!importantant!important!important!important!important!important</u></i></b><br></li><li style=\"text-align: right;\"><b><i><u>!important!important!important!important!importantant!important!important!important!important!important</u></i></b><br></li><li style=\"text-align: right;\"><b><i><u>!important!important!important!important!important</u></i></b><br></li></ol></div>', 0);
INSERT INTO `startup_forums_idea` (`parent_id`, `id`, `date`, `user_id`, `count_views`, `count_comments`, `count_likes`, `tittle`, `text`, `my_like`) VALUES
(4, 83, '2019-05-31 00:08:19', 1, 1, 0, 0, '', '&lt;ol&gt;&lt;li style=\"text-align: center;\"&gt;&lt;font face=\"Cuprum\" color=\"#000000\" style=\"background-color: rgb(80, 108, 255);\"&gt;&lt;b&gt;&lt;i&gt;&lt;u&gt;ant!important!important!important!important!important&lt;/u&gt;&lt;/i&gt;&lt;/b&gt;&lt;br&gt;&lt;/font&gt;&lt;/li&gt;&lt;li style=\"text-align: center;\"&gt;&lt;font face=\"Cuprum\" color=\"#000000\" style=\"background-color: rgb(80, 108, 255);\"&gt;&lt;b&gt;&lt;i&gt;&lt;u&gt;!important!important!important!important!importantant!important!important!important!important!important&lt;/u&gt;&lt;/i&gt;&lt;/b&gt;&lt;br&gt;&lt;/font&gt;&lt;/li&gt;&lt;li style=\"text-align: center;\"&gt;&lt;font face=\"Cuprum\" color=\"#000000\" style=\"background-color: rgb(80, 108, 255);\"&gt;&lt;b&gt;&lt;i&gt;&lt;u&gt;!important!important!important!important!importantant!important!important!important!important!important&lt;/u&gt;&lt;/i&gt;&lt;/b&gt;&lt;br&gt;&lt;/font&gt;&lt;/li&gt;&lt;li style=\"text-align: center;\"&gt;&lt;font face=\"Cuprum\" color=\"#000000\" style=\"background-color: rgb(80, 108, 255);\"&gt;&lt;b&gt;&lt;i&gt;&lt;u&gt;!important!important!important!important!importantant!important!important!important!important!important&lt;/u&gt;&lt;/i&gt;&lt;/b&gt;&lt;br&gt;&lt;/font&gt;&lt;/li&gt;&lt;li style=\"text-align: center;\"&gt;&lt;font face=\"Cuprum\" color=\"#000000\" style=\"background-color: rgb(80, 108, 255);\"&gt;&lt;b&gt;&lt;i&gt;&lt;u&gt;!important!important!important!important!importantant!important!important!important!important!important&lt;/u&gt;&lt;/i&gt;&lt;/b&gt;&lt;br&gt;&lt;/font&gt;&lt;/li&gt;&lt;li style=\"text-align: center;\"&gt;&lt;font face=\"Cuprum\" color=\"#000000\" style=\"background-color: rgb(80, 108, 255);\"&gt;&lt;b&gt;&lt;i&gt;&lt;u&gt;!important!important!important!important!importantant!important!important!important!important!important&lt;/u&gt;&lt;/i&gt;&lt;/b&gt;&lt;br&gt;&lt;/font&gt;&lt;/li&gt;&lt;li style=\"text-align: center;\"&gt;&lt;font face=\"Cuprum\" color=\"#000000\" style=\"background-color: rgb(80, 108, 255);\"&gt;&lt;b&gt;&lt;i&gt;&lt;u&gt;!important!important!important!important!importantant!important!important!important!important!important&lt;/u&gt;&lt;/i&gt;&lt;/b&gt;&lt;br&gt;&lt;/font&gt;&lt;/li&gt;&lt;li style=\"text-align: center;\"&gt;&lt;font face=\"Cuprum\" color=\"#000000\" style=\"background-color: rgb(80, 108, 255);\"&gt;&lt;b&gt;&lt;i&gt;&lt;u&gt;!important!important!important!important!importantant!important!important!important!important!important&lt;/u&gt;&lt;/i&gt;&lt;/b&gt;&lt;br&gt;&lt;/font&gt;&lt;/li&gt;&lt;li style=\"text-align: center;\"&gt;&lt;font face=\"Cuprum\" color=\"#000000\" style=\"background-color: rgb(80, 108, 255);\"&gt;&lt;b&gt;&lt;i&gt;&lt;u&gt;!important!important!important!important!importantant!important!important!important!important!important&lt;/u&gt;&lt;/i&gt;&lt;/b&gt;&lt;br&gt;&lt;/font&gt;&lt;/li&gt;&lt;li style=\"text-align: center;\"&gt;&lt;font face=\"Cuprum\" color=\"#000000\" style=\"background-color: rgb(80, 108, 255);\"&gt;&lt;b&gt;&lt;i&gt;&lt;u&gt;!important!important!important!important!importantant!important!important!important!important!important&lt;/u&gt;&lt;/i&gt;&lt;/b&gt;&lt;br&gt;&lt;/font&gt;&lt;/li&gt;&lt;li style=\"text-align: center;\"&gt;&lt;font face=\"Cuprum\" color=\"#000000\" style=\"background-color: rgb(80, 108, 255);\"&gt;&lt;b&gt;&lt;i&gt;&lt;u&gt;!important!important!important!important!importantant!important!important!important!important!important&lt;/u&gt;&lt;/i&gt;&lt;/b&gt;&lt;br&gt;&lt;/font&gt;&lt;/li&gt;&lt;li style=\"text-align: center;\"&gt;&lt;font face=\"Cuprum\" color=\"#000000\" style=\"background-color: rgb(80, 108, 255);\"&gt;&lt;b&gt;&lt;i&gt;&lt;u&gt;!important!important!important!important!importantant!important!important!important!important!important&lt;/u&gt;&lt;/i&gt;&lt;/b&gt;&lt;br&gt;&lt;/font&gt;&lt;/li&gt;&lt;li style=\"text-align: center;\"&gt;&lt;font face=\"Cuprum\" color=\"#000000\" style=\"background-color: rgb(80, 108, 255);\"&gt;&lt;b&gt;&lt;i&gt;&lt;u&gt;!important!important!important!important!importantant!important!important!important!important!important&lt;/u&gt;&lt;/i&gt;&lt;/b&gt;&lt;br&gt;&lt;/font&gt;&lt;/li&gt;&lt;li style=\"text-align: center;\"&gt;&lt;font face=\"Cuprum\" color=\"#000000\" style=\"background-color: rgb(80, 108, 255);\"&gt;&lt;b&gt;&lt;i&gt;&lt;u&gt;!important!important!important!important!importantant!important!important!important!important!important&lt;/u&gt;&lt;/i&gt;&lt;/b&gt;&lt;br&gt;&lt;/font&gt;&lt;/li&gt;&lt;li style=\"text-align: center;\"&gt;&lt;font face=\"Cuprum\" color=\"#000000\" style=\"background-color: rgb(80, 108, 255);\"&gt;&lt;b&gt;&lt;i&gt;&lt;u&gt;!important!important!important!important!importantant!important!important!important!important!important&lt;/u&gt;&lt;/i&gt;&lt;/b&gt;&lt;br&gt;&lt;/font&gt;&lt;/li&gt;&lt;li style=\"text-align: center;\"&gt;&lt;font face=\"Cuprum\" color=\"#000000\" style=\"background-color: rgb(80, 108, 255);\"&gt;&lt;b&gt;&lt;i&gt;&lt;u&gt;!important!important!important!important!importantant!important!important!important!important!important', 0),
(4, 84, '2019-05-31 00:08:35', 1, 1, 0, 0, 'Dffdfddf', '<b>&lt;ol&gt;&lt;li style=\"text-align: center;\"&gt;&lt;font face=\"Cuprum\" color=\"#000000\" style=\"background-color: rgb(80, 108, 255);\"&gt;&lt;b&gt;&lt;i&gt;&lt;u&gt;ant!important!important!important!important!important&lt;/u&gt;&lt;/i&gt;&lt;/b&gt;&lt;br&gt;&lt;/font&gt;&lt;/li&gt;&lt;li style=\"text-align: center;\"&gt;&lt;font face=\"Cuprum\" color=\"#000000\" style=\"background-color: rgb(80, 108, 255);\"&gt;&lt;b&gt;&lt;i&gt;&lt;u&gt;!important!important!important!important!importantant!important!important!important!important!important&lt;/u&gt;&lt;/i&gt;&lt;/b&gt;&lt;br&gt;&lt;/font&gt;&lt;/li&gt;&lt;li style=\"text-align: center;\"&gt;&lt;font face=\"Cuprum\" color=\"#000000\" style=\"background-color: rgb(80, 108, 255);\"&gt;&lt;b&gt;&lt;i&gt;&lt;u&gt;!important!important!important!important!importantant!important!important!important!important!important&lt;/u&gt;&lt;/i&gt;&lt;/b&gt;&lt;br&gt;&lt;/font&gt;&lt;/li&gt;&lt;li style=\"text-align: center;\"&gt;&lt;font face=\"Cuprum\" color=\"#000000\" style=\"background-color: rgb(80, 108, 255);\"&gt;&lt;b&gt;&lt;i&gt;&lt;u&gt;!important!important!important!important!importantant!important!important!important!important!important&lt;/u&gt;&lt;/i&gt;&lt;/b&gt;&lt;br&gt;&lt;/font&gt;&lt;/li&gt;&lt;li style=\"text-align: center;\"&gt;&lt;font face=\"Cuprum\" color=\"#000000\" style=\"background-color: rgb(80, 108, 255);\"&gt;&lt;b&gt;&lt;i&gt;&lt;u&gt;!important!important!important!important!importantant!important!important!important!important!important&lt;/u&gt;&lt;/i&gt;&lt;/b&gt;&lt;br&gt;&lt;/font&gt;&lt;/li&gt;&lt;li style=\"text-align: center;\"&gt;&lt;font face=\"Cuprum\" color=\"#000000\" style=\"background-color: rgb(80, 108, 255);\"&gt;&lt;b&gt;&lt;i&gt;&lt;u&gt;!important!important!important!important!importantant!important!important!important!important!important&lt;/u&gt;&lt;/i&gt;&lt;/b&gt;&lt;br&gt;&lt;/font&gt;&lt;/li&gt;&lt;li style=\"text-align: center;\"&gt;&lt;font face=\"Cuprum\" color=\"#000000\" style=\"background-color: rgb(80, 108, 255);\"&gt;&lt;b&gt;&lt;i&gt;&lt;u&gt;!important!important!important!important!importantant!important!important!important!important!important&lt;/u&gt;&lt;/i&gt;&lt;/b&gt;&lt;br&gt;&lt;/font&gt;&lt;/li&gt;&lt;li style=\"text-align: center;\"&gt;&lt;font face=\"Cuprum\" color=\"#000000\" style=\"background-color: rgb(80, 108, 255);\"&gt;&lt;b&gt;&lt;i&gt;&lt;u&gt;!important!important!important!important!importantant!important!important!important!important!important&lt;/u&gt;&lt;/i&gt;&lt;/b&gt;&lt;br&gt;&lt;/font&gt;&lt;/li&gt;&lt;li style=\"text-align: center;\"&gt;&lt;font face=\"Cuprum\" color=\"#000000\" style=\"background-color: rgb(80, 108, 255);\"&gt;&lt;b&gt;&lt;i&gt;&lt;u&gt;!important!important!important!important!importantant!important!important!important!important!important&lt;/u&gt;&lt;/i&gt;&lt;/b&gt;&lt;br&gt;&lt;/font&gt;&lt;/li&gt;&lt;li style=\"text-align: center;\"&gt;&lt;font face=\"Cuprum\" color=\"#000000\" style=\"background-color: rgb(80, 108, 255);\"&gt;&lt;b&gt;&lt;i&gt;&lt;u&gt;!important!important!important!important!importantant!important!important!important!important!important&lt;/u&gt;&lt;/i&gt;&lt;/b&gt;&lt;br&gt;&lt;/font&gt;&lt;/li&gt;&lt;li style=\"text-align: center;\"&gt;&lt;font face=\"Cuprum\" color=\"#000000\" style=\"background-color: rgb(80, 108, 255);\"&gt;&lt;b&gt;&lt;i&gt;&lt;u&gt;!important!important!important!important!importantant!important!important!important!important!important&lt;/u&gt;&lt;/i&gt;&lt;/b&gt;&lt;br&gt;&lt;/font&gt;&lt;/li&gt;&lt;li style=\"text-align: center;\"&gt;&lt;font face=\"Cuprum\" color=\"#000000\" style=\"background-color: rgb(80, 108, 255);\"&gt;&lt;b&gt;&lt;i&gt;&lt;u&gt;!important!important!important!important!importantant!important!important!important!important!important&lt;/u&gt;&lt;/i&gt;&lt;/b&gt;&lt;br&gt;&lt;/font&gt;&lt;/li&gt;&lt;li style=\"text-align: center;\"&gt;&lt;font face=\"Cuprum\" color=\"#000000\" style=\"background-color: rgb(80, 108, 255);\"&gt;&lt;b&gt;&lt;i&gt;&lt;u&gt;!important!important!important!important!importantant!important!important!important!important!important&lt;/u&gt;&lt;/i&gt;&lt;/b&gt;&lt;br&gt;&lt;/font&gt;&lt;/li&gt;&lt;li style=\"text-align: center;\"&gt;&lt;font face=\"Cuprum\" color=\"#000000\" style=\"background-color: rgb(80, 108, 255);\"&gt;&lt;b&gt;&lt;i&gt;&lt;u&gt;!important!important!important!important!importantant!important!important!important!important!important&lt;/u&gt;&lt;/i&gt;&lt;/b&gt;&lt;br&gt;&lt;/font&gt;&lt;/li&gt;&lt;li style=\"text-align: center;\"&gt;&lt;font face=\"Cuprum\" color=\"#000000\" style=\"background-color: rgb(80, 108, 255);\"&gt;&lt;b&gt;&lt;i&gt;&lt;u&gt;!important!important!important!important!importantant!important!important!important!important!important&lt;/u&gt;&lt;/i&gt;&lt;/b&gt;&lt;br&gt;&lt;/font&gt;&lt;/li&gt;&lt;li style=\"text-align: center;\"&gt;&lt;font face=\"Cuprum\" color=\"#000000\" style=\"background-color: rgb(80, 108, 255);\"&gt;&lt;b&gt;&lt;i&gt;&lt;u&gt;!important!important!important!important!importantant!important!important!important!important!import', 0),
(4, 85, '2019-05-31 00:09:22', 1, 241, 20, 1, 'Http://localhost:8888/project/forum.php?idea=84&id=4', '<b>http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=</b>4', 0),
(4, 87, '2019-05-31 00:11:15', 1, 2, 0, 0, 'Http://localhost:8888/project/forum.php?idea=84&id=4', '<ol><li><u><i><font face=\"Cuprum\" size=\"2\" color=\"#1614a7\" style=\"background-color: rgb(234, 0, 255);\">http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4a=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4a=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4a=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4a=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4a=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4a=84&amp;id=4htt', 0),
(4, 88, '2019-05-31 00:16:12', 1, 8, 0, 1, 'ава', '<ol><li><b>http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4a=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4a=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4a=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4a=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4a=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4http://localhost:8888/project/forum.php?idea=84&amp;id=4a=84&amp;id=4htt</b><br></li></ol>', 0),
(9, 91, '2019-05-31 06:58:56', 1, 11, 1, 0, '$email$email$email$email$email$email', '$email$email$email$email$email$email<div>$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email</div><div>vv$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$emailv$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email</div>', 0),
(9, 93, '2019-07-01 01:18:30', 27, 2, 0, 0, '12', '12', 0),
(4, 96, '2019-07-04 01:26:21', 1, 2, 0, 0, '12', '12', 0),
(4, 97, '2019-07-04 15:37:31', 1, 22, 0, 0, '2112', '2121', 0),
(4, 98, '2019-07-04 15:40:35', 1, 1, 0, 0, 'Fdfd', 'fdfd', 0),
(4, 99, '2019-07-04 16:23:26', 1, 34, 0, 0, '122112121', '1221', 0),
(4, 100, '2019-07-06 22:36:09', 1, 2, 0, 0, 'Nnbnbbn', 'ugh', 0);

-- --------------------------------------------------------

--
-- Table structure for table `startup_forums_task`
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

--
-- Dumping data for table `startup_forums_task`
--

INSERT INTO `startup_forums_task` (`parent_id`, `id`, `date`, `user_id`, `count_views`, `count_comments`, `count_likes`, `tittle`, `text`, `company`, `comment`, `my_like`, `status`, `who_id`, `deleter`) VALUES
(4, 1, '2019-05-28 02:01:52', 1, 13, 2, 1, '$statusSql$statusSql$statusSql$statusSql$statusSql', '$statusSql$statusSql$statusSql$statusSql$statusSql$statusSql', '10', '$statusSql$statusSql$statusSql$statusSql', 0, 0, NULL, NULL),
(4, 2, '2019-05-29 03:23:52', 4, 53, 10, 2, ',0,1200),0,1200)', ',0,1200),0,1200),0,1200),0,1200),0,1200),0,1200),0,1200),0,1200),0,1200)', '10', ',0,1200),0,1200),0,1200),0,1200)', 0, 1, 3, 2),
(4, 3, '2019-05-26 01:47:44', 1, 18, 11, 1, 'dffdfdfdfd', '\'cg\']\'cg\']\'cg\']\'cg\']\'cg\']\'cg\']\'cg\']\'cg\']\'cg\']\'cg\']\'cg\']\'cg\']\'cg\']\'cg\']\'cg\']\'cg\']\'cg\']\'cg\']\'cg\']\'cg\']', '10', 'dffdffd', 0, 0, NULL, NULL),
(4, 4, '2019-05-29 02:47:22', 1, 365, 64, 2, ' это достойный заработок для копирайтеров и возможность заказать текст у профессиональных авторов', ' это достойный заработок для копирайтеров и возможность заказать текст у профессиональных авторов. Здесь вы можете реализовать свой творческий потенциал или приобрести уникальные статьи для нужд своего сайта. это достойный заработок для копирайтеров и возможность заказать текст у профессиональных авторов. Здесь вы можете реализовать свой творческий потенциал или приобрести уникальные статьи для нужд своего сайта. это достойный заработок для копирайтеров и возможность заказать текст у профессиональных авторов. Здесь вы можете реализовать свой творческий потенциал или приобрести уникальные статьи для нужд своего сайта. это достойный заработок для копирайтеров и возможность заказать текст у профессиональных авторов. Здесь вы можете реализовать свой творческий потенциал или приобрести уникальные статьи для нужд своего сайта.', 'По договоренности', ' это достойный заработок для копирайтеров и возможность заказать текст у профессиональных авторов. Здесь вы можете реализовать свой творческий потенциал или приобрести уникальные статьи для нужд своего сайта. это достойный заработок для копирайтеров и возможность заказать текст у профессиональных авторов. Здесь вы можете реализовать свой творческий потенциал или приобрести уникальные статьи для нужд своего сайта.\r\n', 0, 2, 3, 3),
(4, 5, '2019-05-27 23:01:27', 1, 26, 2, 1, 'КРУТАЯ ЗАДАЧА ', 'ЗАДАЧА ЗАДАЧАЗАДАЧА ЗАДАЧАЗАДАЧА ЗАДАЧАЗАДАЧА ЗАДАЧАЗАДАЧА ЗАДАЧАЗАДАЧА ЗАДАЧАЗАДАЧА ЗАДАЧА', 'По договоренности', 'ЗАДАЧА ЗАДАЧА', 0, 0, NULL, NULL),
(4, 6, '2019-05-27 22:58:07', 1, 117, 33, 0, 'КРУТАЯ ЗАДАЧА ', 'ЗАДАЧА ЗАДАЧАЗАДАЧА ЗАДАЧАЗАДАЧА ЗАДАЧАЗАДАЧА ЗАДАЧАЗАДАЧА ЗАДАЧАЗАДАЧА ЗАДАЧАЗАДАЧА ЗАДАЧА', 'По договоренности', 'ЗАДАЧА ЗАДАЧА', 0, 0, 17, 17),
(4, 7, '2019-05-29 02:44:54', 1, 6, 0, 0, 'RHFNMDDFMNDFMN', 'itemCountsTaskitemCountsTaskitemCountsTaskitemCountsTask', '10', '', 0, 0, NULL, NULL),
(4, 8, '2019-05-28 02:23:33', 1, 3, 0, 0, 'Написать техническое задание на мобильное &lt;', '&lt;h1&gt;$_POST[\'cgComment\']$_POST[\'cgComment\']&lt;/h1&gt;\r\n&lt;h1&gt;$_POST[\'cgComment\']$_POST[\'cgComment\']&lt;/h1&gt;', '50', '&lt;h1&gt;$_POST[\'cgComment\']$_POST[\'cgComment\']&lt;/h1&gt;&lt;h1&gt;$_POST[\'cgComment\']$_POST[\'cgComment\']&lt;/h1&gt;', 0, 0, NULL, NULL),
(4, 9, '2019-05-31 00:35:40', 1, 27, 6, 0, '1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 21 22 23 24 25 26 27 28 29 30', '&lt;h1&gt;$_POST[\'cgComment\']$_POST[\'cgComment\']&lt;/h1&gt;\r\n&lt;h1&gt;$_POST[\'cgComment\']$_POST[\'cgComment\']&lt;/h1&gt;', '50', '&lt;h1&gt;$_POST[\'cgComment\']$_POST[\'cgComment\']&lt;/h1&gt;&lt;h1&gt;$_POST[\'cgComment\']$_POST[\'cgComment\']&lt;/h1&gt;', 0, 0, NULL, NULL),
(8, 10, '2019-05-31 02:03:18', 1, 24, 8, 1, 'strip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tags', 'strip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tags', '12', 'strip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tagsstrip_tags', 0, 9, 17, 17),
(8, 11, '2019-05-31 02:14:38', 1, 24, 12, 1, 'user_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduse', 'er_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_ider_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_ider_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_ider_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_ider_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_id', '10', 'ser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iduser_iser_iduser_iduser_iduser_iduser_iduser_id', 0, 9, 4, 4),
(8, 12, '2019-05-31 02:21:38', 1, 8, 6, 1, 'fromTaskSetting', 'fromTaskSettingfromTaskSettingfromTaskSettingfromTaskSettingfromTaskSetting', 'По договоренности', 'fromTaskSetting', 0, 2, 18, 18),
(9, 13, '2019-05-31 02:30:17', 1, 7, 2, 0, 'ЗАДАЧА 1', '3232ТЕСТ ЗАДАЧТЕСТ ЗАДАЧТЕСТ ЗАДАЧТЕСТ ЗАДАЧТЕСТ ЗАДАЧТЕСТ ЗАДАЧТЕСТ ЗАДАЧ', 'По договоренности', '232', 0, 9, 3, 3),
(9, 14, '2019-05-31 02:28:41', 1, 4, 2, 1, 'ЗАДАЧА 2', 'ТЕСТ ЗАДАЧТЕСТ ЗАДАЧТЕСТ ЗАДАЧТЕСТ ЗАДАЧТЕСТ ЗАДАЧТЕСТ ЗАДАЧТЕСТ ЗАДАЧ', '10', 'щзуцуц', 0, 2, 2, NULL),
(9, 15, '2019-05-31 04:25:03', 1, 4, 1, 0, 'ЗАДАЧА 3', 'ТЕСТ ЗАДАЧТЕСТ ЗАДАЧТЕСТ ЗАДАЧТЕСТ ЗАДАЧТЕСТ ЗАДАЧТЕСТ ЗАДАЧТЕСТ ЗАДАЧТЕСТ ЗАДАЧ', '10', 'ТЕСТ ЗАДАЧ', 0, 9, 4, 4),
(9, 16, '2019-05-31 02:39:49', 1, 8, 4, 1, 'ЗАДАЧА 4', 'ТЕСТ ЗАДАЧТЕСТ ЗАДАЧТЕСТ ЗАДАЧТЕСТ ЗАДАЧТЕСТ ЗАДАЧТЕСТ ЗАДАЧТЕСТ ЗАДАЧТЕСТ ЗАДАЧ', 'По договоренности', 'ТЕСТ ЗАДАЧТЕСТ ЗАДАЧТЕСТ ЗАДАЧТЕСТ ЗАДАЧТЕСТ ЗАДАЧТЕСТ ЗАДАЧТЕСТ ЗАДАЧ', 0, 1, 18, NULL),
(9, 17, '2019-05-31 06:59:06', 1, 16, 5, 1, '$email$email$email$email$email$email', '$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email', '10', '$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email$email', 0, 0, NULL, NULL),
(4, 18, '2019-07-01 15:48:47', 1, 9, 1, 0, 'fdfdfdfdfdfdfd', '10dffdfdfdfdkfdfdjfjdhkldghjslkghl;gdhsjldhgjskldghkl;', '10', '10', 0, 2, 54, NULL),
(7, 19, '2019-07-07 17:06:25', 1, 0, 0, 0, 'fddddfklfdklfdklfdkl', 'dffdfdkfgaklgf\'fjdfjklhsjkldhjklsdfsklfgjklsgfjklsgfsjklfgsjklfgklfglsk;', 'По договоренности', '', 0, 0, NULL, NULL),
(7, 20, '2019-07-07 17:06:49', 1, 1, 0, 0, 'fdklklfgsddfjsjsfdgkdfjklgdfklsjgdfsjkl;', 'kfgljkglfklfgsdfgksgkdfsgfkdslfgjkldkgjldfsgkdljsfdfgksldfgsklfgdskl', '10', '', 0, 0, NULL, NULL),
(9, 21, '2019-07-16 18:07:21', 2, 4, 1, 1, 'gfgffgfffggfgffgfdgfdgdf', 'hgkjhlgjkhgfhkgjlfgdfhjklghfjdklhgdfjklghdfjlhgjklhgdfjklhgfklhgdfldhfgjkldhgf', '10', '', 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `startup_task_cg`
--

CREATE TABLE `startup_task_cg` (
  `id` int(15) NOT NULL,
  `cg` varchar(5) NOT NULL,
  `parent_cg` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `startup_task_cg`
--

INSERT INTO `startup_task_cg` (`id`, `cg`, `parent_cg`) VALUES
(3, '4', 0),
(3, '6', 0),
(4, '1', 0),
(4, '1_1', 1),
(4, '1_2', 1),
(4, '4', 0),
(4, '6', 0),
(4, '6_2', 6),
(4, '6_4', 6),
(4, '6_5', 6),
(4, '9', 0),
(5, '4', 0),
(5, '6', 0),
(5, '6_3', 6),
(5, '6_4', 6),
(5, '14', 0),
(5, '14_4', 14),
(6, '4', 0),
(6, '6', 0),
(6, '6_3', 6),
(6, '6_4', 6),
(6, '14', 0),
(6, '14_4', 14),
(7, '2', 0),
(8, '1', 0),
(8, '1_4', 1),
(8, '1_8', 1),
(9, '1', 0),
(9, '1_4', 1),
(9, '1_8', 1),
(10, '7', 0),
(11, '13', 0),
(14, '1', 0),
(15, '1', 0),
(16, '2', 0),
(17, '5', 0),
(18, '1', 0),
(20, '3', 0),
(21, '3', 0);

-- --------------------------------------------------------

--
-- Table structure for table `startup_verify_users`
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
-- Dumping data for table `startup_verify_users`
--

INSERT INTO `startup_verify_users` (`parent_id`, `date`, `user_id`, `verify`, `creater`, `numTask`, `textBig`, `who_insert`, `textSmall`, `who_change`, `id`) VALUES
(4, '2019-05-14 17:05:40', 1, 3, 1, NULL, NULL, NULL, '', NULL, 1),
(3, '2019-05-14 17:05:40', 1, 2, NULL, NULL, NULL, NULL, '', NULL, 2),
(2, '2019-05-14 17:05:40', 2, 0, NULL, NULL, NULL, NULL, '', NULL, 3),
(3, '2019-05-14 17:05:40', 5, 0, NULL, NULL, NULL, NULL, '', NULL, 6),
(4, '2019-05-14 17:05:40', 5, 1, NULL, NULL, NULL, NULL, '', NULL, 7),
(1, '2019-05-14 17:05:40', 5, 1, NULL, NULL, NULL, NULL, '', NULL, 8),
(2, '2019-05-14 17:05:40', 5, 1, NULL, NULL, NULL, NULL, '', NULL, 10),
(3, '2019-05-14 17:05:40', 3, 1, NULL, NULL, NULL, NULL, '', NULL, 14),
(2, '2019-05-14 17:05:40', 3, 1, NULL, NULL, NULL, NULL, '', NULL, 15),
(1, '2019-05-14 17:05:40', 3, 1, NULL, NULL, NULL, NULL, '', NULL, 16),
(2, '2019-05-14 17:05:40', 1, 1, NULL, NULL, NULL, NULL, '', NULL, 18),
(1, '2019-05-14 17:05:40', 1, 1, NULL, NULL, NULL, NULL, '', NULL, 20),
(4, '2019-05-14 17:05:40', 2, 9, NULL, 2, NULL, 1, '', NULL, 21),
(4, '2019-05-15 17:16:04', 3, 3, NULL, 4, 'КРАСАВЧИК', 1, '123', 1, 29),
(5, '2019-05-17 22:26:34', 1, 3, 1, NULL, NULL, NULL, NULL, NULL, 30),
(4, '2019-05-17 23:46:01', 4, 3, NULL, 2, 'fdfdfd', 1, '34667', 1, 31),
(1, '2019-05-18 00:27:40', 4, 0, NULL, NULL, NULL, NULL, NULL, NULL, 32),
(4, '2019-05-23 23:54:52', 17, 3, NULL, 6, 'ddgfd', 1, '345', 1, 36),
(4, '2019-05-24 20:01:22', 18, 1, NULL, NULL, NULL, NULL, NULL, NULL, 37),
(3, '2019-05-25 19:46:16', 17, 1, NULL, NULL, NULL, NULL, NULL, NULL, 38),
(2, '2019-05-25 21:51:23', 17, 1, NULL, NULL, NULL, NULL, NULL, NULL, 42),
(7, '2019-05-26 05:03:52', 1, 3, 1, NULL, NULL, NULL, NULL, NULL, 43),
(4, '2019-05-28 01:23:23', 20, 1, NULL, NULL, NULL, NULL, NULL, NULL, 44),
(6, '2019-05-29 03:06:13', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, 45),
(7, '2019-05-29 03:07:15', 2, 3, NULL, NULL, 'dffd', 1, 'Fdfd', 1, 46),
(1, '2019-05-29 22:53:32', 2, 1, NULL, NULL, NULL, NULL, NULL, NULL, 52),
(8, '2019-05-30 15:17:28', 1, 3, 1, NULL, NULL, NULL, NULL, NULL, 53),
(8, '2019-05-31 00:38:36', 17, 9, NULL, 10, NULL, 1, NULL, NULL, 54),
(8, '2019-05-31 00:51:06', 3, 2, NULL, 11, NULL, 1, NULL, NULL, 55),
(8, '2019-05-31 01:07:28', 4, 9, NULL, 11, NULL, 1, NULL, NULL, 56),
(8, '2019-05-31 01:38:04', 2, 2, NULL, NULL, NULL, 1, NULL, NULL, 57),
(8, '2019-05-31 02:02:11', 18, 3, NULL, 12, 'КОЛЯ', 1, 'КОЛЯCBR', 1, 58),
(9, '2019-05-31 02:23:05', 1, 3, 1, NULL, NULL, NULL, NULL, NULL, 59),
(9, '2019-05-31 02:25:01', 2, 3, NULL, 14, 'аваров', 1, 'Да)Задача4 посл отказаЗа', 2, 60),
(9, '2019-05-31 02:28:09', 3, 9, NULL, 13, NULL, 1, NULL, NULL, 61),
(9, '2019-05-31 02:31:38', 4, 9, NULL, 15, NULL, 1, NULL, NULL, 62),
(9, '2019-05-31 02:33:35', 18, 3, NULL, 16, 'Коля', 1, 'Колянычdffd1', 1, 63),
(8888, '2019-07-01 00:58:47', 27, 1, NULL, NULL, NULL, NULL, NULL, NULL, 64),
(9, '2019-07-01 01:03:04', 27, 1, NULL, NULL, NULL, NULL, NULL, NULL, 65),
(4, '2019-07-01 15:19:34', 27, 1, NULL, NULL, NULL, NULL, NULL, NULL, 66),
(7, '2019-07-01 19:24:55', 27, 1, NULL, NULL, NULL, NULL, NULL, NULL, 67),
(6, '2019-07-16 18:04:56', 2, 1, NULL, NULL, NULL, NULL, NULL, NULL, 68),
(9, '2019-07-16 18:07:38', 54, 0, NULL, NULL, NULL, NULL, NULL, NULL, 69),
(4, '2019-07-16 18:11:12', 54, 3, NULL, 18, 'ggghghgh', 1, 'Ththhtt', 1, 70);

-- --------------------------------------------------------

--
-- Table structure for table `startup_want_do`
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

--
-- Dumping data for table `startup_want_do`
--

INSERT INTO `startup_want_do` (`parent_id`, `id`, `user_id`, `date`, `text`, `from_task`, `comment_id`) VALUES
(3, 1, 1, '2019-05-06 01:57:01', 'fdfdfdfdfddfdfd', NULL, NULL),
(3, 2, 1, '2019-05-06 01:59:15', 'fdfdfd', NULL, NULL),
(3, 3, 1, '2019-05-06 16:51:04', 'аваров', NULL, NULL),
(1, 4, 5, '2019-05-06 19:22:29', '2121', NULL, NULL),
(1, 5, 5, '2019-05-06 19:22:31', '1221', NULL, NULL),
(2, 7, 5, '2019-05-06 20:33:03', 'fdfdfd', NULL, NULL),
(3, 9, 4, '2019-05-06 20:39:28', 'dffdfdfd', NULL, NULL),
(1, 10, 4, '2019-05-06 20:48:55', 'dffdfdfdfdfd', NULL, NULL),
(2, 11, 4, '2019-05-06 20:49:30', 'dfdfdfd', NULL, NULL),
(3, 12, 3, '2019-05-06 20:52:31', 'fdfdfd', NULL, NULL),
(2, 13, 3, '2019-05-06 20:53:43', 'fdfdfdfdfd', NULL, NULL),
(1, 14, 3, '2019-05-06 20:55:09', 'dffdfdfdfdfdfdfdfd', NULL, NULL),
(8888, 15, 1, '2019-05-07 19:47:41', 'впав', NULL, NULL),
(8888, 16, 1, '2019-05-07 19:51:04', 'fdfdfdfd', NULL, NULL),
(3, 17, 1, '2019-05-07 19:51:59', 'fddfdf', NULL, NULL),
(2, 18, 1, '2019-05-07 20:49:54', 'df', NULL, NULL),
(1, 21, 1, '2019-05-07 21:47:32', 'аппапа', NULL, NULL),
(4, 22, 1, '2019-05-13 01:05:52', 'dffdfdfdfd', 4, NULL),
(4, 31, 1, '2019-05-13 03:35:39', 'http://localhost:8888/project/insert.php?id=4http://localhost:8888/project/insert.php?id=4http://localhost:8888/project/insert.php?id=4http://localhost:8888/project/insert.php?id=4http://localhost:8888/project/insert.php?id=4http://localhost:8888/project/insert.php?id=4http://localhost:8888/project/insert.php?id=4http://localhost:8888/project/insert.php?id=4http://localhost:8888/project/insert.php?id=4http://localhost:8888/project/insert.php?id=4http://localhost:8888/project/insert.php?id=4http://localhost:8888/project/insert.php?id=4http://localhost:8888/project/insert.php?id=4http://localhost:8888/project/insert.php?id=4http://localhost:8888/project/insert.php?id=4http://localhost:8888/project/insert.php?id=4http://localhost:8888/project/insert.php?id=4http://localhost:8888/project/insert.php?id=4http://localhost:8888/project/insert.php?id=4http://localhost:8888/project/insert.php?id=4http://localhost:8888/project/insert.php?id=4http://localhost:8888/project/insert.php?id=4http://localhost:8888/project/insert.php?id=4', 4, NULL),
(4, 35, 1, '2019-05-13 03:45:48', 'http://localhost:8888/project/insert.php?id=4http://localhost:8888/project/insert.php?id=4fkfdjfdkfjkggfjdsjfgdhklfdghjgfdshjkhgfdjkhttp://localhost:8888/project/insert.php?id=4fdhttp://localhost:8888/project/insert.php?id=4dfhttp://localhost:8888/project/insert.php?id=4http://localhost:8888/project/insert.php?id=4http://localhost:8888/project/insert.php?id=4http://localhost:8888/project/insert.php?id=4http://localhost:8888/project/insert.php?id=4http://localhost:8888/project/insert.php?id=4http://localhost:8888/project/insert.php?id=4http://localhost:8888/project/insert.php?id=4http://localhost:8888/project/insert.php?id=4http://localhost:8888/project/insert.php?id=4http://localhost:8888/project/insert.php?id=4http://localhost:8888/project/insert.php?id=4http://localhost:8888/project/insert.php?id=4http://localhost:8888/project/insert.php?id=4', 4, NULL),
(4, 36, 1, '2019-05-13 16:32:18', 'fdfdfdfdfd &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;$sqlUpdateMe = \"UPDATE startup_verify_users SET verify=1 WHERE parent_id=:parent_id AND user_id=:user_id\";<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $stmtUpdateMe = $pdo-&gt;prepare($sqlUpdateMe);</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $stmtUpdateMe-&gt;execute([ $itemsStartup[\'parent_id\'], $_SESSION[\'id\']]);</div>', 4, NULL),
(4, 38, 5, '2019-05-13 16:43:27', 'http://localhost:8888/project/forum.php?task=4', 4, NULL),
(4, 49, 3, '2019-05-15 16:18:00', 'http://localhost:8888/project/forum.php?task=2http://localhost:8888/project/forum.php?task=2', 2, 63),
(4, 51, 3, '2019-05-15 17:16:05', 'were', 2, 69),
(4, 55, 18, '2019-05-24 20:01:23', 'ХХАХХААХАХ', 5, 76),
(2, 61, 17, '2019-05-25 21:51:24', 'fdfd', NULL, NULL),
(2, 62, 17, '2019-05-25 21:51:29', 'fdfd', NULL, NULL),
(4, 63, 20, '2019-05-28 01:24:41', 'f', NULL, NULL),
(6, 64, 1, '2019-05-29 03:06:14', 'ПРИВЕТ&nbsp;', NULL, NULL),
(1, 70, 2, '2019-05-29 22:53:33', 'ава', NULL, NULL),
(8888, 71, 27, '2019-07-01 00:58:47', 'hhjjh', NULL, NULL),
(9, 72, 27, '2019-07-01 01:03:04', '1', NULL, NULL),
(4, 73, 27, '2019-07-01 15:19:34', '12', NULL, NULL),
(7, 74, 27, '2019-07-01 19:24:55', 'dffd', NULL, NULL),
(6, 75, 2, '2019-07-16 18:05:16', 'tyghgjghghghghghgh', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `userBlog`
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
-- Dumping data for table `userBlog`
--

INSERT INTO `userBlog` (`id`, `parent_id`, `main_date`, `text`, `yourLike`, `Howlikes`) VALUES
(1, 1, '2019-07-07 23:16:35', '12', 0, 1),
(2, 1, '2019-07-16 01:24:13', '2121', 0, 1),
(3, 2, '2019-07-16 17:49:50', '<a href=\"http://localhost:8888/project/user-2\">fgfgffg</a>', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `userDialogs`
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

--
-- Dumping data for table `userDialogs`
--

INSERT INTO `userDialogs` (`id`, `one_user`, `second_user`, `Date`, `last_message`, `from_who`, `to_who`, `reed`, `how_many_reed`) VALUES
(1, 4, 1, '2019-07-16 12:07:06', 'fdfdfd', 1, 4, 0, 8),
(2, 4, 3, '2019-04-25 17:12:01', 'Привет', 4, 3, 1, 0),
(3, 4, 5, '2019-04-25 17:10:28', 'Привет!', 4, 5, 1, 0),
(4, 2, 3, '2019-05-17 17:41:49', 'Qje', 3, 2, 1, 0),
(5, 2, 1, '2019-07-19 08:49:02', 'ав', 2, 1, 1, 0),
(6, 1, 1, '2019-07-18 06:08:03', 'fdfddf', 1, 1, 1, 0),
(8, 1, 3, '2019-07-16 12:06:27', 'fdfd', 1, 3, 0, 13),
(9, 1, 18, '2019-07-16 23:50:44', 'fdfd', 1, 18, 0, 1),
(10, 1, 21, '2019-07-16 12:52:15', 'fdfd', 1, 21, 0, 19),
(11, 27, 20, '2019-06-29 15:37:13', 'cxcx', 27, 20, 0, 1),
(12, 27, 19, '2019-06-29 18:45:18', 'vvc', 27, 19, 0, 1),
(13, 27, 21, '2019-06-29 22:50:02', '1', 27, 21, 0, 2),
(14, 1, 20, '2019-07-16 15:47:51', 'add', 1, 20, 0, 2),
(15, 27, 3, '2019-07-01 00:56:19', 'dffd', 27, 3, 0, 1),
(16, 27, 4, '2019-07-01 17:32:15', '12', 27, 4, 0, 3),
(17, 27, 18, '2019-07-01 17:38:21', '212121', 27, 18, 0, 1),
(18, 27, 2, '2019-07-01 17:44:46', 'aaa', 27, 2, 1, 0),
(19, 1, 27, '2019-07-16 16:52:26', 'fd', 1, 27, 0, 45),
(20, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(21, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(22, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(23, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(24, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(25, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(26, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(27, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(28, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(29, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(30, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(31, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(32, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(33, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(34, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(35, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(36, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(37, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(38, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(39, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(40, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(41, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(42, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(43, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(44, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(45, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(46, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(47, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(48, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(49, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(50, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(51, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(52, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(53, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(54, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(55, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(56, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(57, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(58, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(59, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(60, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(61, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(62, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(63, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(64, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(65, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(66, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(67, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(68, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(69, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(70, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(71, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(72, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(73, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(74, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(75, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(76, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(77, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(78, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(79, 1, 100, '2019-07-05 00:19:28', 'Помойный диалог', 1, 100, 0, 1),
(80, 54, 1, '2019-07-22 06:22:06', 'ав', 54, 1, 0, 2),
(81, 2, 54, '2019-07-19 08:23:01', 'gh', 2, 54, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `userLikesAnother`
--

CREATE TABLE `userLikesAnother` (
  `id` int(13) NOT NULL,
  `numBlog` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userLikesAnother`
--

INSERT INTO `userLikesAnother` (`id`, `numBlog`) VALUES
(2, 8),
(2, 7),
(2, 6),
(2, 5),
(2, 4),
(1, 7),
(1, 14),
(27, 56),
(27, 52),
(1, 9),
(1, 4),
(1, 5),
(1, 10),
(1, 58),
(1, 52),
(27, 12),
(27, 58),
(2, 65),
(1, 68),
(1, 78),
(1, 2),
(54, 1);

-- --------------------------------------------------------

--
-- Table structure for table `userMessages`
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

--
-- Dumping data for table `userMessages`
--

INSERT INTO `userMessages` (`id_mes`, `parent_id`, `date`, `text`, `to_who_mes`, `from_who_mes`, `reed_mes`) VALUES
(1, 1, '2019-04-25 17:06:40', 'ghbdtn', 1, 4, 1),
(2, 2, '2019-04-25 17:08:36', 'fdfdfd', 3, 4, 1),
(3, 1, '2019-04-25 17:06:14', 'Ghbfsdsf', 4, 1, 1),
(4, 1, '2019-04-25 17:06:40', 'Как твои дела?', 1, 4, 1),
(5, 2, '2019-04-25 17:12:01', 'Привет', 3, 4, 1),
(6, 3, '2019-04-25 17:10:28', 'Привет!', 5, 4, 1),
(7, 1, '2019-04-25 21:51:52', 'уццууц', 4, 1, 1),
(8, 1, '2019-04-25 21:51:52', 'fdfd', 4, 1, 1),
(9, 1, '2019-04-25 21:51:52', 'df', 4, 1, 1),
(10, 1, '2019-04-25 21:51:52', 'wq', 4, 1, 1),
(11, 1, '2019-04-25 21:51:52', 'wq', 4, 1, 1),
(12, 4, '2019-04-26 17:15:39', 'Привет', 3, 2, 1),
(13, 5, '2019-05-03 05:21:28', 'fdfdfd', 1, 2, 1),
(14, 5, '2019-05-03 05:21:28', 'Привет!', 1, 2, 1),
(15, 5, '2019-05-03 05:21:28', 'аппапаа', 1, 2, 1),
(16, 5, '2019-05-03 05:21:28', 'аппапапа', 1, 2, 1),
(17, 5, '2019-05-03 05:21:28', 'возникла ошибка :(', 1, 2, 1),
(18, 5, '2019-05-03 05:21:28', 'отправлено!', 1, 2, 1),
(19, 5, '2019-05-03 05:21:28', 'vdffdfdfdfdfdfdfd', 1, 2, 1),
(20, 5, '2019-05-03 05:21:28', 'возникла ошибка :(', 1, 2, 1),
(21, 5, '2019-05-03 05:21:28', 'vvvcvcvccvcvc', 1, 2, 1),
(22, 5, '2019-05-03 05:21:28', 'vvvcvcvccvcvc', 1, 2, 1),
(23, 5, '2019-05-03 05:21:28', 'ffdffdfdотправлено!', 1, 2, 1),
(24, 5, '2019-05-03 05:21:28', 'ffdffdfdотправлено!', 1, 2, 1),
(25, 5, '2019-05-03 05:21:28', '<ol><li>f<span style=\"color: rgb(80, 108, 255);\">dfdfdfddfdfdfdfdfddfdfdfdfdfddfdfdfdfdfddfdfdfdfdfddfdfdfdfdfddfdfdfdfdfddfdfdfdfdfddfdfdfdfdfddfdfdfdfdfddfdfdfdfdfddfdfdfdfdfddfdfdfdfdfddfdfdfdfdfddfdfdfdfdfddfdfdfdfdfddfdfdfdfdfddfdfdfdfdfddfdfdfdfdfddfd</span><br></li></ol>', 1, 2, 1),
(26, 5, '2019-05-03 05:21:28', '<ol><li>f<span style=\"color: rgb(80, 108, 255);\">dfdfdfddfdfdfdfdfddfdfdfdfdfddfdfdfdfdfddfdfdfdfdfddfdfdfdfdfddfdfdfdfdfddfdfdfdfdfddfdfdfdfdfddfdfdfdfdfddfdfdfdfdfddfdfdfdfdfddfdfdfdfdfddfdfdfdfdfddfdfdfdfdfddfdfdfdfdfddfdfdfdfdfddfdfdfdfdfddfdfdfdfdfddfd</span><br></li></ol>', 1, 2, 1),
(27, 5, '2019-05-03 05:21:28', 'dffddfd', 1, 2, 1),
(28, 5, '2019-05-03 05:21:28', 'dffdfdfdfddfdfdfdfdfddfdfdfdfdfddfdfdfdfdfddfdfdfdfdfddfdfdfdfdfddfdfdfdfdfdd<span style=\"color: rgb(216, 216, 216);\">fdfdfdfdfddfdfdfdfdfddfdfdfdfdfddfdfdfdfdfddfdfdfdfdfddfdfdfdfdfddfdfdfdfdfddfdfdfdfdfddfdfdfdfdfddf</span>dfdfdfdfddfdfdfdfdfddfdfdfdfdfddfdfdfdfdfddfdfdfdfdfddfd', 1, 2, 1),
(29, 5, '2019-05-03 05:21:28', 'fd', 1, 2, 1),
(30, 5, '2019-05-03 05:21:28', 'fd', 1, 2, 1),
(31, 5, '2019-05-03 05:21:28', 'fdfd', 1, 2, 1),
(32, 5, '2019-05-03 05:21:28', 'fd', 1, 2, 1),
(33, 5, '2019-05-03 05:22:48', 'Привет!', 1, 2, 1),
(34, 5, '2019-05-08 21:36:53', 'Заела', 2, 1, 1),
(35, 5, '2019-05-10 21:43:29', 'lkklklkllklkklklkllklkklklkllklkklklkllklkklklkllklkklklkllklkklklkllklkklklkllklkklklkllklkklklkllklkklklkllklkklklkllklkklklkllklkklklkllklkklklkllklkklklkllklkklklkllklkklklkllklkklklkllklkklklkllk', 1, 2, 1),
(36, 6, '2019-05-13 15:21:52', 'дароууу', 1, 1, 1),
(37, 6, '2019-05-13 15:22:03', 'привет!', 1, 1, 1),
(38, 5, '2019-05-13 21:45:19', 'Привет!', 2, 1, 1),
(39, 5, '2019-05-13 21:45:19', '$idOfTask', 2, 1, 1),
(40, 6, '2019-05-13 15:26:42', '$idOfTask$idOfTask', 1, 1, 1),
(41, 6, '2019-05-13 15:48:12', 'fdfd', 1, 1, 1),
(42, 5, '2019-05-13 21:45:19', 'fdfdfdfdfdfd', 2, 1, 1),
(43, 5, '2019-05-13 21:45:19', 'fdfdfdfdfdfd', 2, 1, 1),
(44, 6, '2019-05-13 15:48:12', 'dffdfdfdfd', 1, 1, 1),
(45, 5, '2019-05-13 21:45:19', 'dffddf', 2, 1, 1),
(46, 5, '2019-05-13 21:45:19', 'dffddf', 2, 1, 1),
(47, 5, '2019-05-13 21:45:19', 'dffddf', 2, 1, 1),
(48, 5, '2019-05-13 21:45:19', 'dffddf', 2, 1, 1),
(49, 5, '2019-05-13 21:45:19', 'dffddf', 2, 1, 1),
(50, 6, '2019-05-13 15:48:12', 'fdfddf', 1, 1, 1),
(51, 6, '2019-05-13 15:48:12', 'fdfddf', 1, 1, 1),
(52, 6, '2019-05-13 15:48:12', 'fdfddf', 1, 1, 1),
(53, 6, '2019-05-13 15:48:12', 'dfdffd', 1, 1, 1),
(54, 6, '2019-05-13 15:48:12', 'dfdffd', 1, 1, 1),
(55, 6, '2019-05-13 15:48:12', 'dfdffd', 1, 1, 1),
(56, 6, '2019-05-13 15:48:12', 'dfdffd', 1, 1, 1),
(57, 6, '2019-05-13 15:48:12', 'dfdffd', 1, 1, 1),
(58, 6, '2019-05-13 15:48:12', 'dfdffd', 1, 1, 1),
(59, 6, '2019-05-13 15:48:12', 'dfdffd', 1, 1, 1),
(60, 6, '2019-05-13 15:48:12', 'dfdffd', 1, 1, 1),
(61, 6, '2019-05-13 15:48:12', 'dfdffd', 1, 1, 1),
(62, 6, '2019-05-13 15:48:12', 'dfdffd', 1, 1, 1),
(63, 6, '2019-05-13 15:48:12', 'dffddf', 1, 1, 1),
(64, 6, '2019-05-13 15:48:12', 'dffddf', 1, 1, 1),
(65, 6, '2019-05-13 15:48:12', 'dffddf', 1, 1, 1),
(66, 6, '2019-05-13 15:48:12', 'dffddf', 1, 1, 1),
(67, 6, '2019-05-13 15:48:12', 'dffddf', 1, 1, 1),
(68, 6, '2019-05-13 15:48:12', 'dffddf', 1, 1, 1),
(69, 6, '2019-05-13 15:48:12', 'dffddf', 1, 1, 1),
(70, 6, '2019-05-13 15:48:12', 'вывы', 1, 1, 1),
(71, 6, '2019-05-13 15:48:12', 'вывы', 1, 1, 1),
(72, 6, '2019-05-13 15:48:12', 'вывы', 1, 1, 1),
(73, 6, '2019-05-13 15:48:12', 'вывы', 1, 1, 1),
(74, 6, '2019-05-13 15:48:12', 'вывы', 1, 1, 1),
(75, 6, '2019-05-13 16:03:48', 'вывы', 1, 1, 1),
(76, 5, '2019-05-13 21:45:19', 'ff', 2, 1, 1),
(77, 6, '2019-05-13 20:30:45', 'ff', 1, 1, 1),
(78, 6, '2019-05-13 20:30:45', 'ff', 1, 1, 1),
(79, 6, '2019-05-13 20:30:45', 'ff', 1, 1, 1),
(80, 5, '2019-05-13 21:45:19', 'ff', 2, 1, 1),
(81, 5, '2019-05-13 21:45:19', 'ff', 2, 1, 1),
(82, 6, '2019-05-13 20:30:45', 'fdfdfd', 1, 1, 1),
(83, 7, '2019-05-17 23:44:20', 'fdfddf', 5, 1, 1),
(84, 8, '2019-05-15 16:08:59', '123', 3, 1, 1),
(85, 5, '2019-05-13 21:45:19', '321', 2, 1, 1),
(86, 6, '2019-05-13 21:29:41', '23232', 1, 1, 1),
(87, 6, '2019-05-14 03:31:59', '<span style=\"font-size: xx-large;\">dffdfdfdfd</span>', 1, 1, 1),
(88, 8, '2019-05-15 16:27:57', 'Привет', 1, 3, 1),
(89, 4, '2019-05-17 17:41:49', 'Qje', 2, 3, 1),
(90, 8, '2019-05-21 19:56:13', '&lt;h1&gt;1&lt;/h1', 3, 1, 1),
(91, 8, '2019-05-21 19:56:13', 'd', 3, 1, 1),
(92, 8, '2019-05-21 19:56:13', '&lt;h1&gt;1&lt;/h1&gt;', 3, 1, 1),
(93, 8, '2019-05-21 19:56:13', 'gfgf', 3, 1, 1),
(94, 6, '2019-05-22 11:34:14', 'Привет!', 1, 1, 1),
(95, 6, '2019-05-22 19:06:58', 'ав', 1, 1, 1),
(96, 6, '2019-05-22 19:08:03', 'ва', 1, 1, 1),
(97, 8, '2019-05-22 19:23:15', 'ава', 3, 1, 0),
(98, 8, '2019-05-22 19:55:25', 'dfdf', 3, 1, 0),
(99, 8, '2019-05-22 19:55:47', 'fdfdfdfd', 3, 1, 0),
(100, 8, '2019-05-24 21:41:18', 'fdfd', 3, 1, 0),
(101, 8, '2019-05-24 23:35:32', 'fdfd', 3, 1, 0),
(102, 9, '2019-05-31 02:33:51', 'л', 18, 1, 1),
(103, 8, '2019-05-26 02:09:51', 'fddf', 3, 1, 0),
(104, 9, '2019-05-31 02:33:51', '<h1>f</h1>', 18, 1, 1),
(105, 9, '2019-05-31 02:33:51', '&lt;h1&gt;1&lt;/h1&gt;', 18, 1, 1),
(106, 9, '2019-05-31 02:33:51', 'fd', 18, 1, 1),
(107, 9, '2019-05-31 02:33:51', '<span style=\"font-weight: bold;\">ffdfdfdfd</span>', 18, 1, 1),
(108, 9, '2019-05-31 02:33:51', 'd', 18, 1, 1),
(109, 5, '2019-05-26 18:00:15', 'ПРИВЕТ', 1, 2, 1),
(110, 5, '2019-05-26 18:00:15', 'ЙОЙО', 1, 2, 1),
(111, 5, '2019-05-27 10:44:06', 'fddffdf', 1, 2, 1),
(112, 8, '2019-05-26 22:30:15', 'fdfdfd', 3, 1, 0),
(113, 6, '2019-05-26 22:42:35', 'fed', 1, 1, 1),
(114, 6, '2019-05-26 22:43:30', 'dffd', 1, 1, 1),
(115, 6, '2019-05-26 22:43:30', 'dffd', 1, 1, 1),
(116, 9, '2019-05-31 02:33:51', 'fdfdd', 18, 1, 1),
(117, 9, '2019-05-31 02:33:51', '&lt;h1&gt;&lt;/h1&gt;', 18, 1, 1),
(118, 9, '2019-05-31 02:33:51', '&lt;h1&gt;fdfd&lt;/h1&gt;', 18, 1, 1),
(119, 9, '2019-05-31 02:33:51', '&lt;h1&gt;&lt;/h1&gt;', 18, 1, 1),
(120, 9, '2019-05-31 02:33:51', '&lt;h1&gt;fdfd&lt;/h1&gt;', 18, 1, 1),
(121, 9, '2019-05-31 02:33:51', '&lt;h1&gt;1&lt;/h1&gt;', 18, 1, 1),
(122, 9, '2019-05-31 02:33:51', '&lt;h1&gt;1&lt;/h1&gt;', 18, 1, 1),
(123, 9, '2019-05-31 02:33:51', '&lt;h1&gt;1&lt;/h1&gt;', 18, 1, 1),
(124, 9, '2019-05-31 02:33:51', 'v', 18, 1, 1),
(127, 9, '2019-05-31 02:33:51', 'ргумент значения. Обратите внимание, что Internet Explorer использует это для установки цвета фона текста.\nbold\nПереключение жирным шрифтом вкл / выкл для выделения или в точке вставки. Internet Explorer использует &lt;strong&gt;тег вместо &lt;b&gt;.\nClearAuthenticationCache\nУдаляет все учетные данные аутентификации из кэша.\ncontentReadOnly\nДелает документ содержимого доступным только для чтения или редактируемым. Это требует логического true / false в качестве аргумента значения. (Не поддерживается Internet Explorer.)\n', 18, 1, 1),
(128, 9, '2019-05-31 02:33:51', '12345678901234567890123456789012345678901234567890', 18, 1, 1),
(129, 9, '2019-05-31 02:33:51', 'ав', 18, 1, 1),
(130, 9, '2019-05-31 02:33:51', 'флдавлоавпыпдоалволвадпаволпдоплдваавподлапдволавпдолапвдыолпы', 18, 1, 1),
(131, 5, '2019-05-29 20:15:08', 'fdfd', 2, 1, 1),
(132, 5, '2019-05-29 20:15:08', 'fdfd', 2, 1, 1),
(133, 5, '2019-05-29 20:15:08', 'fdfd', 2, 1, 1),
(134, 9, '2019-05-31 02:33:51', 'ав', 18, 1, 1),
(135, 9, '2019-05-31 02:33:51', 'df', 18, 1, 1),
(136, 9, '2019-05-31 02:33:51', 'forum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXT', 18, 1, 1),
(137, 8, '2019-05-28 01:19:26', 'fed', 3, 1, 0),
(138, 8, '2019-05-28 01:19:28', 'fd', 3, 1, 0),
(139, 8, '2019-05-28 01:19:30', 'fd', 3, 1, 0),
(140, 9, '2019-05-31 02:33:51', 'df', 18, 1, 1),
(141, 9, '2019-05-31 02:33:51', '&lt;?php echo 1; ?&gt;', 18, 1, 1),
(142, 9, '2019-05-31 02:33:51', '&lt;h1&gt;1&lt;/h1&gt;', 18, 1, 1),
(143, 10, '2019-05-29 02:12:41', 'ав', 21, 1, 0),
(144, 10, '2019-05-29 02:12:41', 'ав', 21, 1, 0),
(145, 10, '2019-05-29 02:12:45', 'ав', 21, 1, 0),
(146, 10, '2019-05-29 02:12:45', 'ав', 21, 1, 0),
(147, 10, '2019-05-29 02:12:46', 'ав', 21, 1, 0),
(148, 10, '2019-05-29 02:12:46', 'ав', 21, 1, 0),
(149, 10, '2019-05-29 02:12:53', 'а', 21, 1, 0),
(150, 10, '2019-05-29 02:12:56', 'ав', 21, 1, 0),
(151, 10, '2019-05-29 02:12:57', 'ав', 21, 1, 0),
(152, 10, '2019-05-29 02:12:59', 'ав', 21, 1, 0),
(153, 10, '2019-05-29 02:13:38', 'а', 21, 1, 0),
(154, 8, '2019-05-29 17:26:30', 'fdfd', 3, 1, 0),
(155, 5, '2019-05-30 01:53:51', '<span style=\"background-color: rgb(200, 0, 20);\">т<font color=\"#506cff\">тттттттт</font></span><div><span style=\"background-color: rgb(200, 0, 20);\"><font color=\"#506cff\"><br></font></span></div>', 1, 2, 1),
(156, 10, '2019-05-30 02:03:52', 'fdfdfd', 21, 1, 0),
(157, 10, '2019-05-30 02:27:18', 'df<a href=\"http://fdfd\">dfdfdfd</a>', 21, 1, 0),
(158, 1, '2019-05-30 20:39:13', 'ВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладис', 4, 1, 0),
(159, 1, '2019-05-30 20:39:31', '<span style=\"letter-spacing: 0.15000000596046448px; white-space: pre-line;\">ВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладисла', 4, 1, 0),
(160, 1, '2019-05-30 20:39:40', '<ul id=\"Messanger_wrapperITEMS_ul\"><li class=\"Messanger_item\"><div class=\"Messanger_item_Inherit Messanger_item_Inherit_right\"><div class=\"Messanger_item_Text txtControl\">ладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладисл', 4, 1, 0),
(161, 1, '2019-05-30 20:39:55', '<span style=\"letter-spacing: 0.15000000596046448px; white-space: pre-line;\">ВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВПРИВЕТлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВл', 4, 1, 0),
(162, 1, '2019-05-30 20:40:02', '<span style=\"letter-spacing: 0.15000000596046448px; white-space: pre-line;\">ВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладисла', 4, 1, 0),
(163, 1, '2019-05-30 20:40:20', '<span style=\"letter-spacing: 0.15000000596046448px; white-space: pre-line;\">ВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладисла', 4, 1, 0),
(164, 1, '2019-05-30 20:41:09', '&lt;/div&gt;', 4, 1, 0),
(165, 10, '2019-05-30 20:42:37', '<div style=\"text-align: center;\"><ul><li style=\"text-align: right;\"><span style=\"letter-spacing: 0.15000000596046448px; white-space: pre-line;\">ВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВ<font face=\"Cuprum\" size=\"2\" color=\"#ea00ff\">лаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВла</font>диславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладисла<font size=\"2\">вВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладисл</font>авВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлВладислав</span><u style=\"letter-spacing: 0.15000000596046448px; white-space: pre-line;\"><i><b>ВлаmВлВладиславВл', 21, 1, 0),
(166, 9, '2019-05-31 02:33:51', '<b>fd</b>', 18, 1, 1),
(167, 9, '2019-05-31 02:33:51', '<ul id=\"Messanger_wrapperITEMS_ul\"><li class=\"Messanger_item\"><div class=\"Messanger_item_Inherit Messanger_item_Inherit_right\"><div class=\"Messanger_item_Text txtControl\">forum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXT</div><div class=\"Messanger_wrapper_Date_Post\"><div class=\"Messanger_item_Date_not_me\">05:35</div><div class=\"Messanger_item_Post_TO\"><span class=\"material-icons\" style=\"font-size: 18px; display: flex; height: inherit; align-items: flex-end; justify-content: flex-end;\">done</span></div></div></div></li><li class=\"Messanger_item\"><div class=\"Messanger_item_Inherit Messanger_item_Inherit_right\"><div class=\"Messanger_item_Text txtControl\">df</div><div class=\"Messanger_wrapper_Date_Post\"><div class=\"Messanger_item_Date_not_me\">02:24</div><div class=\"Messanger_item_Post_TO\"><span class=\"material-icons\" style=\"font-size: 18px; display: flex; height: inherit; align-items: flex-end; justify-content: flex-end;\">done</span></div></div></div></li><li class=\"Messanger_item\"><div class=\"Messanger_item_Inherit Messanger_item_Inherit_right\"><div class=\"Messanger_item_Text txtControl\">&lt;?php echo 1; ?&gt;</div><div class=\"Messanger_wrapper_Date_Post\"><div class=\"Messanger_item_Date_not_me\">02:25</div><div class=\"Messanger_item_Post_TO\"><span class=\"material-icons\" style=\"font-size: 18px; display: flex; height: inherit; align-items: flex-end; justify-content: flex-end;\">done</span></div></div></div></li><li class=\"Messanger_item\"><div class=\"Messanger_item_Inherit Messanger_item_Inherit_right\"><div class=\"Messanger_item_Text txtControl\">&lt;h1&gt;1&lt;/h1&gt;</div><div class=\"Messanger_wrapper_Date_Post\"><div class=\"Messanger_item_Date_not_me\">02</div></div></div></li></ul>', 18, 1, 1),
(168, 9, '2019-05-31 02:33:51', '<ul id=\"Messanger_wrapperITEMS_ul\"><li class=\"Messanger_item\"><div class=\"Messanger_item_Inherit Messanger_item_Inherit_right\"><div class=\"Messanger_item_Text txtControl\">forum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXT</div><div class=\"Messanger_wrapper_Date_Post\"><div class=\"Messanger_item_Date_not_me\">05:35</div><div class=\"Messanger_item_Post_TO\"><span class=\"material-icons\" style=\"font-size: 18px; display: flex; height: inherit; align-items: flex-end; justify-content: flex-end;\">done</span></div></div></div></li><li class=\"Messanger_item\"><div class=\"Messanger_item_Inherit Messanger_item_Inherit_right\"><div class=\"Messanger_item_Text txtControl\">df</div><div class=\"Messanger_wrapper_Date_Post\"><div class=\"Messanger_item_Date_not_me\">02:24</div><div class=\"Messanger_item_Post_TO\"><span class=\"material-icons\" style=\"font-size: 18px; display: flex; height: inherit; align-items: flex-end; justify-content: flex-end;\">done</span></div></div></div></li><li class=\"Messanger_item\"><div class=\"Messanger_item_Inherit Messanger_item_Inherit_right\"><div class=\"Messanger_item_Text txtControl\">&lt;?php echo 1; ?&gt;</div><div class=\"Messanger_wrapper_Date_Post\"><div class=\"Messanger_item_Date_not_me\">02:25</div><div class=\"Messanger_item_Post_TO\"><span class=\"material-icons\" style=\"font-size: 18px; display: flex; height: inherit; align-items: flex-end; justify-content: flex-end;\">done</span></div></div></div></li><li class=\"Messanger_item\"><div class=\"Messanger_item_Inherit Messanger_item_Inherit_right\"><div class=\"Messanger_item_Text txtControl\">&lt;h1&gt;1&lt;/h1&gt;</div><div class=\"Messanger_wrapper_Date_Post\"><div class=\"Messanger_item_Date_not_me\">02</div><ul id=\"Messanger_wrapperITEMS_ul\" style=\"caret-color: rgb(8, 13, 34); color: rgb(8, 13, 34);\"><li class=\"Messanger_item\"><div class=\"Messanger_item_Inherit Messanger_item_Inherit_right\"><div class=\"Messanger_item_Text txtControl\">forum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXTforum_Com_right_TEXT</div><div class=\"Messanger_wrapper_Date_Post\"><div class=\"Messanger_item_Date_not_me\">05:35</div><div class=\"Messanger_item_Post_TO\"><span class=\"material-icons\" style=\"font-size: 18px; display: flex; height: inherit; align-items: flex-end; justify-content: flex-end;\">done</span></div></div></div></li><li class=\"Messanger_item\"><div class=\"Messanger_item_Inherit Messanger_item_Inherit_right\"><div class=\"Messanger_item_Text txtControl\">df</div><div class=\"Messanger_wrapper_Date_Post\"><div class=\"Messanger_item_Date_not_me\">02:24</div><div class=\"Messanger_item_Post_TO\"><', 18, 1, 1),
(169, 10, '2019-05-30 20:45:52', '<span style=\"font-style: normal; font-weight: normal; text-align: right;\"><font face=\"Cuprum\">аmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладисл</font>авВлаmВлВладиславВлаmВлВладиславВлаm</span>', 21, 1, 0);
INSERT INTO `userMessages` (`id_mes`, `parent_id`, `date`, `text`, `to_who_mes`, `from_who_mes`, `reed_mes`) VALUES
(170, 10, '2019-05-30 20:48:39', '<ul id=\"Messanger_wrapperITEMS_ul\" style=\"font-style: normal; font-weight: normal; letter-spacing: normal; white-space: normal;\"><li class=\"Messanger_item\"><div class=\"Messanger_item_Inherit Messanger_item_Inherit_right\"><div class=\"Messanger_item_Text txtControl\"><div style=\"text-align: center;\"><ul><li style=\"text-align: right;\">ВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВ<font face=\"Cuprum\" size=\"2\" color=\"#ea00ff\">лаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВла</font>диславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладисла<font size=\"2\">вВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладисл</font>авВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладислав', 21, 1, 0),
(171, 6, '2019-05-30 23:33:20', '09:29<div>dffdfdfdfd</div><div>03:31</div><div>Привет!</div><div>11:34</div><div>ав</div><div>07:06</div><div><br></div>', 1, 1, 1),
(172, 6, '2019-05-30 23:33:20', 'j<b><i><u>gkgfjgfkjfggkjfgkfjfgkjgkjkfgjgkgfjgfkjfggkjfgkfjfgkjgkjkfgjgkgfjgfkjfggkjfgkfjfgkjgkjkfgjgkgfjgfkjfggkjfgkfjfgkjgkjkfgjgkgfjgfkjfggkjfgkfjfgkjgkjkfgjgkgfjgfkjfggkjfgkfjfgkjgkjkfgjgkgfjgfkjfggkjfgkfjfgkjgkjkfgjgkgfjgfkjfggkjfgkfjfgkjgkjkfg</u></i></b>', 1, 1, 1),
(173, 8, '2019-05-31 02:29:11', 'Привет!', 3, 1, 0),
(174, 6, '2019-05-31 06:28:11', 'fdfd', 1, 1, 1),
(175, 6, '2019-05-31 06:32:22', '<b>fdffdfdfdfdfdfd</b><div>fdfdfdfdifddfd<br></div>', 1, 1, 1),
(176, 6, '2019-05-31 06:32:22', '<b>fdfddffd</b>', 1, 1, 1),
(177, 6, '2019-05-31 06:35:11', '<a href=\"http://\">fdfffdfdfd</a>', 1, 1, 1),
(178, 5, '2019-05-31 06:36:45', '<b>fdfdfd</b>', 1, 2, 1),
(179, 5, '2019-06-01 19:08:21', 'Привет!', 2, 1, 1),
(180, 6, '2019-06-02 01:14:15', 'dffd', 1, 1, 1),
(181, 11, '2019-06-29 15:37:13', 'cxcx', 20, 27, 0),
(182, 12, '2019-06-29 18:45:18', 'vvc', 19, 27, 0),
(183, 13, '2019-06-29 22:50:02', 'dffd', 21, 27, 0),
(184, 8888, '2019-06-30 23:34:28', 'dffd', 21, 27, 0),
(185, 8888, '2019-06-30 23:34:33', '1', 21, 27, 0),
(186, 13, '2019-06-30 23:34:57', '1', 21, 27, 0),
(187, 10, '2019-07-01 00:05:01', '123', 21, 1, 0),
(188, 10, '2019-07-01 00:06:37', '111', 21, 1, 0),
(189, 14, '2019-07-01 00:08:42', '1111', 20, 1, 0),
(190, 15, '2019-07-01 00:56:19', 'dffd', 3, 27, 0),
(191, 16, '2019-07-01 17:32:15', '11', 4, 27, 0),
(192, 16, '2019-07-01 17:37:37', '1221', 4, 27, 0),
(193, 16, '2019-07-01 17:37:45', '12', 4, 27, 0),
(194, 17, '2019-07-01 17:38:21', '212121', 18, 27, 0),
(195, 18, '2019-07-01 17:44:46', '12112', 2, 27, 1),
(196, 18, '2019-07-01 17:45:02', 'df', 2, 27, 1),
(197, 18, '2019-07-01 17:45:04', 'df', 2, 27, 1),
(198, 18, '2019-07-01 17:45:24', '21', 2, 27, 1),
(199, 18, '2019-07-01 17:45:26', '2121', 2, 27, 1),
(200, 18, '2019-07-01 17:47:08', '<a href=\"21122121\">aaa</a>', 2, 27, 1),
(201, 19, '2019-07-01 19:25:19', '21', 27, 1, 1),
(202, 5, '2019-07-02 17:40:50', '21', 2, 1, 1),
(203, 5, '2019-07-02 17:40:52', '12', 2, 1, 1),
(204, 5, '2019-07-02 17:40:54', '1', 2, 1, 1),
(205, 5, '2019-07-02 20:00:03', 'лдвадлавдлалдваалдвадвлалдвалвдавлдладвлдавладвалвдладвалдввадлавдлалдваалдвадвлалдвалвдавлдладвлдавладвалвдладвалдввадлавдлалдваалдвадвлалдвалвдавлдладвлдавладвалвдладвалдввадлавдлалдваалдвадвлалдвалвдавлдладвлдавладвалвдладвалдввадлавдлалдваалдвадвлалдвалвдавлдладвлдавладвалвдладвалдввадлавдлалдваалдвадвлалдвалвдавлдладвлдавладвалвдладвалдввадлавдлалдваалдвадвлалдвалвдавлдладвлдавладвалвдладвалдввадлавдлалдваалдвадвлалдвалвдавлдладвлдавладвалвдладвалдввадлавдлалдваалдвадвлалдвалвдавлдладвлдавладвалвдладвалдввадлавдлалдваалдвадвлалдвалвдавлдладвлдавладвалвдладвалдввадлавдлалдваалдвадвлалдвалвдавлдладвлдавладвалвдладвалдввадлавдлалдваалдвадвлалдвалвдавлдладвлдавладвалвдладвалдввадлавдлалдваалдвадвлалдвалвдавлдладвлдавладвалвдладвалдввадлавдлалдваалдвадвлалдвалвдавлдладвлдавладвалвдладвалдв', 2, 1, 1),
(206, 5, '2019-07-02 20:01:28', 'textarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_small', 2, 1, 1),
(207, 5, '2019-07-02 20:01:30', 'textarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_smalltextarea_small', 2, 1, 1),
(208, 5, '2019-07-02 20:02:20', 'wq', 2, 1, 1),
(209, 5, '2019-07-02 22:33:06', '1', 2, 1, 1),
(210, 5, '2019-07-02 22:38:25', '1\n', 2, 1, 1),
(211, 5, '2019-07-02 23:34:01', '1', 2, 1, 1),
(212, 5, '2019-07-02 23:34:03', '12', 2, 1, 1),
(213, 5, '2019-07-02 23:34:05', '21', 2, 1, 1),
(214, 5, '2019-07-02 23:34:12', '12', 2, 1, 1),
(215, 19, '2019-07-04 19:16:40', '21', 27, 1, 1),
(216, 19, '2019-07-04 19:17:00', '21', 27, 1, 1),
(217, 19, '2019-07-04 19:21:36', '21', 27, 1, 1),
(218, 19, '2019-07-04 19:22:28', '2121211', 27, 1, 1),
(219, 19, '2019-07-04 19:25:18', '12212121', 27, 1, 1),
(220, 19, '2019-07-04 19:26:29', '2121', 27, 1, 1),
(221, 5, '2019-07-06 21:22:16', 'fdfd', 2, 1, 1),
(222, 5, '2019-07-06 22:35:15', '<ol><li>hjhjhj</li></ol>', 2, 1, 1),
(223, 5, '2019-07-11 15:35:15', 'jhgjhgjhgjgjg', 2, 1, 1),
(224, 5, '2019-07-15 22:26:37', 'Привет\n', 1, 2, 1),
(225, 5, '2019-07-15 23:33:42', 'Дрова', 2, 1, 1),
(226, 5, '2019-07-15 23:36:39', 'dffdfdfdfdd', 2, 1, 1),
(227, 5, '2019-07-15 23:41:59', 'fdfd', 2, 1, 1),
(228, 5, '2019-07-15 23:44:45', 'dfdf', 2, 1, 1),
(229, 5, '2019-07-15 23:48:26', 'fdfdfdfd', 2, 1, 1),
(230, 5, '2019-07-15 23:56:38', 'fdfdfd', 2, 1, 1),
(231, 5, '2019-07-16 00:01:52', 'dffd', 2, 1, 1),
(232, 5, '2019-07-16 00:05:02', 'fdfd', 2, 1, 1),
(233, 5, '2019-07-16 00:06:31', 'ddsdsds', 2, 1, 1),
(234, 5, '2019-07-16 00:09:28', 'fdfdfd', 2, 1, 1),
(235, 5, '2019-07-16 00:09:44', 'dffdfdfd', 2, 1, 1),
(236, 5, '2019-07-16 00:10:19', 'fdfd', 2, 1, 1),
(237, 5, '2019-07-16 00:13:34', 'dffdfd', 2, 1, 1),
(238, 5, '2019-07-16 00:13:58', 'fddf', 2, 1, 1),
(239, 5, '2019-07-16 00:15:21', 'fdfd', 2, 1, 1),
(240, 5, '2019-07-16 00:17:26', 'dffdfd', 2, 1, 1),
(241, 5, '2019-07-16 00:22:35', 'fdfddf', 2, 1, 1),
(242, 5, '2019-07-16 00:23:40', 'dffd', 2, 1, 1),
(243, 5, '2019-07-16 00:28:07', 'dffd', 2, 1, 1),
(244, 5, '2019-07-16 00:32:25', 'fdfdfd', 2, 1, 1),
(245, 5, '2019-07-16 00:32:31', 'dffd', 2, 1, 1),
(246, 5, '2019-07-16 00:32:45', 'fdfd', 2, 1, 1),
(247, 5, '2019-07-16 00:32:52', 'fdfdfd', 2, 1, 1),
(248, 5, '2019-07-16 00:33:04', 'fdfd', 2, 1, 1),
(249, 5, '2019-07-16 00:37:44', 'dffd', 2, 1, 1),
(250, 5, '2019-07-16 00:38:00', 'fddf', 2, 1, 1),
(251, 5, '2019-07-16 00:40:40', 'fdffd', 2, 1, 1),
(252, 5, '2019-07-16 00:41:06', 'fdfdfdfd', 2, 1, 1),
(253, 5, '2019-07-16 00:46:10', 'fdfd', 2, 1, 1),
(254, 5, '2019-07-16 00:46:32', 'fdfd', 2, 1, 1),
(255, 5, '2019-07-16 00:52:33', 'dffd', 2, 1, 1),
(256, 5, '2019-07-16 00:58:56', 'fdfdfd', 1, 2, 1),
(257, 5, '2019-07-16 00:59:41', 'fdfd', 1, 2, 1),
(258, 5, '2019-07-16 01:04:44', 'fdfd', 1, 2, 1),
(259, 5, '2019-07-16 01:04:51', 'fddf', 1, 2, 1),
(260, 5, '2019-07-16 01:04:59', 'fdfd', 1, 2, 1),
(261, 5, '2019-07-16 01:05:43', 'fdfd', 1, 2, 1),
(262, 5, '2019-07-16 01:06:33', 'fdfd', 1, 2, 1),
(263, 5, '2019-07-16 01:09:50', 'fd', 1, 2, 1),
(264, 5, '2019-07-16 03:33:10', 'fd', 2, 1, 1),
(265, 5, '2019-07-16 03:33:20', 'fd', 2, 1, 1),
(266, 5, '2019-07-16 03:33:47', 'df', 2, 1, 1),
(267, 5, '2019-07-16 03:33:49', 'df', 2, 1, 1),
(268, 5, '2019-07-16 03:33:57', 'fd', 2, 1, 1),
(269, 5, '2019-07-16 03:34:09', 'fd', 2, 1, 1),
(270, 5, '2019-07-16 03:34:26', 'fd', 2, 1, 1),
(271, 5, '2019-07-16 03:34:40', 'fdfd', 2, 1, 1),
(272, 5, '2019-07-16 03:34:43', 'df', 2, 1, 1),
(273, 5, '2019-07-16 03:34:53', 'fd', 2, 1, 1),
(274, 5, '2019-07-16 03:35:41', 'ва', 2, 1, 1),
(275, 5, '2019-07-16 03:36:28', 'ав', 2, 1, 1),
(276, 5, '2019-07-16 03:36:35', 'ва', 2, 1, 1),
(277, 5, '2019-07-16 03:36:46', 'ав', 2, 1, 1),
(278, 5, '2019-07-16 03:36:47', 'ва', 2, 1, 1),
(279, 5, '2019-07-16 03:36:49', 'ав', 2, 1, 1),
(280, 5, '2019-07-16 11:55:10', 'dffd', 2, 1, 1),
(281, 5, '2019-07-16 11:56:20', 'dffd', 2, 1, 1),
(282, 5, '2019-07-16 11:58:21', 'df', 2, 1, 1),
(283, 5, '2019-07-16 11:58:38', 'df', 2, 1, 1),
(284, 5, '2019-07-16 11:59:54', 'fd', 2, 1, 1),
(285, 5, '2019-07-16 11:59:55', 'fd', 2, 1, 1),
(286, 5, '2019-07-16 12:00:49', 'fdfd', 2, 1, 1),
(287, 5, '2019-07-16 12:05:55', 'fd', 2, 1, 1),
(288, 8, '2019-07-16 12:06:27', 'fdfd', 3, 1, 0),
(289, 1, '2019-07-16 12:07:06', 'fdfdfd', 4, 1, 0),
(290, 19, '2019-07-16 12:07:22', 'fdffd', 27, 1, 0),
(291, 19, '2019-07-16 12:07:41', 'fdfd', 27, 1, 0),
(292, 10, '2019-07-16 12:52:15', 'fdfd', 21, 1, 0),
(293, 6, '2019-07-16 12:52:33', 'fdfd', 1, 1, 1),
(294, 5, '2019-07-16 13:09:27', 'fdfd', 2, 1, 1),
(295, 5, '2019-07-16 13:59:48', 'fdfds', 1, 2, 1),
(296, 5, '2019-07-16 14:00:28', 'fdfd', 1, 2, 1),
(297, 5, '2019-07-16 14:02:18', 'fdfd', 1, 2, 1),
(298, 5, '2019-07-16 14:02:42', 'fd', 1, 2, 1),
(299, 5, '2019-07-16 14:06:33', 'fdfd', 1, 2, 1),
(300, 14, '2019-07-16 15:47:51', 'add', 20, 1, 0),
(301, 5, '2019-07-16 15:55:06', 'df', 1, 2, 1),
(302, 5, '2019-07-16 15:57:05', 'fd', 1, 2, 1),
(303, 5, '2019-07-16 15:58:08', 'df', 1, 2, 1),
(304, 5, '2019-07-16 15:58:45', 'fd', 1, 2, 1),
(305, 5, '2019-07-16 15:59:31', 'dff', 1, 2, 1),
(306, 5, '2019-07-16 16:01:53', 'dfdf', 1, 2, 1),
(307, 5, '2019-07-16 16:02:23', 'dffd', 1, 2, 1),
(308, 5, '2019-07-16 16:19:27', 'hh', 1, 2, 1),
(309, 5, '2019-07-16 16:21:15', 'kjhjh', 1, 2, 1),
(310, 5, '2019-07-16 16:21:24', 'hjhj', 1, 2, 1),
(311, 5, '2019-07-16 16:21:41', 'hjh', 1, 2, 1),
(312, 5, '2019-07-16 16:27:43', 'hj', 1, 2, 1),
(313, 19, '2019-07-16 16:46:30', '21', 27, 1, 0),
(314, 19, '2019-07-16 16:46:31', '21', 27, 1, 0),
(315, 19, '2019-07-16 16:46:32', '21', 27, 1, 0),
(316, 19, '2019-07-16 16:46:34', '21', 27, 1, 0),
(317, 19, '2019-07-16 16:46:34', '21', 27, 1, 0),
(318, 19, '2019-07-16 16:46:34', '21', 27, 1, 0),
(319, 19, '2019-07-16 16:46:35', '2121', 27, 1, 0),
(320, 19, '2019-07-16 16:46:35', '21', 27, 1, 0),
(321, 19, '2019-07-16 16:46:35', '21', 27, 1, 0),
(322, 19, '2019-07-16 16:46:35', '12', 27, 1, 0),
(323, 19, '2019-07-16 16:46:35', '21', 27, 1, 0),
(324, 19, '2019-07-16 16:46:35', '21', 27, 1, 0),
(325, 19, '2019-07-16 16:46:36', '12', 27, 1, 0),
(326, 19, '2019-07-16 16:46:36', '21', 27, 1, 0),
(327, 19, '2019-07-16 16:46:36', '21', 27, 1, 0),
(328, 19, '2019-07-16 16:46:36', '21', 27, 1, 0),
(329, 19, '2019-07-16 16:46:37', '21', 27, 1, 0),
(330, 19, '2019-07-16 16:46:41', '1', 27, 1, 0),
(331, 19, '2019-07-16 16:46:41', '1', 27, 1, 0),
(332, 19, '2019-07-16 16:46:42', '1', 27, 1, 0),
(333, 19, '2019-07-16 16:46:42', '1', 27, 1, 0),
(334, 19, '2019-07-16 16:46:42', '1', 27, 1, 0),
(335, 19, '2019-07-16 16:46:42', '1', 27, 1, 0),
(336, 19, '2019-07-16 16:46:42', '1', 27, 1, 0),
(337, 19, '2019-07-16 16:46:42', '1', 27, 1, 0),
(338, 19, '2019-07-16 16:46:43', '1', 27, 1, 0),
(339, 19, '2019-07-16 16:46:43', '1', 27, 1, 0),
(340, 19, '2019-07-16 16:46:43', '1', 27, 1, 0),
(341, 19, '2019-07-16 16:46:43', '1', 27, 1, 0),
(342, 19, '2019-07-16 16:46:43', '1', 27, 1, 0),
(343, 19, '2019-07-16 16:46:44', '1', 27, 1, 0),
(344, 19, '2019-07-16 16:46:44', '1', 27, 1, 0),
(345, 19, '2019-07-16 16:46:44', '11', 27, 1, 0),
(346, 19, '2019-07-16 16:46:44', '1', 27, 1, 0),
(347, 19, '2019-07-16 16:46:44', '1', 27, 1, 0),
(349, 19, '2019-07-16 16:46:45', '1', 27, 1, 0),
(350, 19, '2019-07-16 16:46:45', '1', 27, 1, 0),
(351, 19, '2019-07-16 16:46:45', '1', 27, 1, 0),
(352, 19, '2019-07-16 16:46:45', '1', 27, 1, 0),
(353, 19, '2019-07-16 16:46:45', '1', 27, 1, 0),
(354, 19, '2019-07-16 16:51:46', '32', 27, 1, 0),
(355, 19, '2019-07-16 16:52:26', 'fd', 27, 1, 0),
(356, 5, '2019-07-16 17:22:17', 'hj', 1, 2, 1),
(357, 5, '2019-07-16 17:22:26', 'kkkjkj', 1, 2, 1),
(358, 5, '2019-07-16 17:22:38', 'uii', 1, 2, 1),
(359, 5, '2019-07-16 17:37:16', 'fgfg', 1, 2, 1),
(360, 5, '2019-07-16 17:37:31', 'fggfgf', 1, 2, 1),
(361, 5, '2019-07-16 17:37:44', 'hjhjhj', 1, 2, 1),
(362, 80, '2019-07-16 23:41:24', 'fdfddfdf', 1, 54, 1),
(363, 80, '2019-07-16 23:41:41', 'fdfdfd', 1, 54, 1),
(364, 80, '2019-07-16 23:41:53', 'fdfd', 1, 54, 1),
(365, 80, '2019-07-16 23:42:01', 'df', 54, 1, 1),
(366, 80, '2019-07-16 23:43:41', 'df', 1, 54, 1),
(367, 80, '2019-07-16 23:48:05', 'fd', 54, 1, 1),
(368, 80, '2019-07-16 23:48:28', 'fd', 54, 1, 1),
(369, 80, '2019-07-16 23:48:54', 'fd', 54, 1, 1),
(370, 9, '2019-07-16 23:50:44', 'fdfd', 18, 1, 0),
(371, 80, '2019-07-16 23:52:16', 'gfgfgf', 54, 1, 1),
(372, 5, '2019-07-16 23:54:16', 'fd', 2, 1, 1),
(373, 5, '2019-07-16 23:56:41', 'fdfd', 2, 1, 1),
(374, 5, '2019-07-16 23:57:49', 'fd', 2, 1, 1),
(375, 5, '2019-07-16 23:58:03', 'fd', 2, 1, 1),
(376, 5, '2019-07-16 23:58:32', 'dffd', 2, 1, 1),
(377, 5, '2019-07-16 23:58:33', 'fdfd', 2, 1, 1),
(378, 5, '2019-07-16 23:59:05', 'fdfd', 2, 1, 1),
(379, 5, '2019-07-16 23:59:15', 'fdfd', 2, 1, 1),
(380, 5, '2019-07-16 23:59:17', 'fdffd', 2, 1, 1),
(381, 5, '2019-07-16 23:59:49', 'fdfdfd', 2, 1, 1),
(382, 5, '2019-07-16 23:59:58', 'fd', 2, 1, 1),
(383, 5, '2019-07-16 23:59:59', 'fd', 2, 1, 1),
(384, 5, '2019-07-17 00:00:43', 'fd', 2, 1, 1),
(385, 80, '2019-07-17 00:01:09', 'fdfd', 1, 54, 1),
(386, 80, '2019-07-17 00:02:59', 'dfdf', 1, 54, 1),
(387, 80, '2019-07-17 00:03:25', 'fd', 1, 54, 1),
(388, 80, '2019-07-17 00:03:53', 'fddf', 1, 54, 1),
(389, 80, '2019-07-17 00:04:19', 'fdfd', 1, 54, 1),
(390, 80, '2019-07-17 00:04:46', 'fdfd', 1, 54, 1),
(391, 80, '2019-07-17 00:05:06', 'fd', 1, 54, 1),
(392, 80, '2019-07-17 00:06:16', 'fd', 1, 54, 1),
(393, 80, '2019-07-17 00:06:37', 'fd', 1, 54, 1),
(394, 80, '2019-07-17 00:23:11', 'fd', 1, 54, 1),
(395, 80, '2019-07-17 00:23:44', 'fd', 1, 54, 1),
(396, 5, '2019-07-17 00:24:18', 'fd', 1, 2, 1),
(397, 80, '2019-07-17 00:24:47', 'fd', 1, 54, 1),
(398, 80, '2019-07-17 00:24:57', 'fdfd', 1, 54, 1),
(399, 80, '2019-07-17 00:25:54', 'ffdfd', 1, 54, 1),
(400, 80, '2019-07-17 00:26:16', 'fd', 1, 54, 1),
(401, 5, '2019-07-17 00:26:44', 'fdfd', 1, 2, 1),
(402, 5, '2019-07-17 00:27:03', 'fdfd', 1, 2, 1),
(403, 80, '2019-07-17 00:27:25', 'fdfd', 1, 54, 1),
(404, 80, '2019-07-17 00:27:54', 'fddf', 1, 54, 1),
(405, 80, '2019-07-17 22:20:26', 'ав', 54, 1, 1),
(406, 80, '2019-07-17 22:38:59', '21', 1, 54, 1),
(407, 80, '2019-07-17 22:40:37', '1', 1, 54, 1),
(408, 80, '2019-07-17 22:40:39', '2', 1, 54, 1),
(409, 80, '2019-07-17 22:40:40', '3', 1, 54, 1),
(410, 80, '2019-07-17 22:42:15', '4', 1, 54, 1),
(411, 80, '2019-07-17 22:42:16', '5', 1, 54, 1),
(412, 80, '2019-07-17 22:42:17', '6', 1, 54, 1),
(413, 80, '2019-07-17 22:42:18', '7', 1, 54, 1),
(414, 80, '2019-07-17 22:42:19', '8', 1, 54, 1),
(415, 80, '2019-07-17 22:42:21', '9', 1, 54, 1),
(416, 80, '2019-07-17 22:45:46', '1221', 1, 54, 1),
(417, 80, '2019-07-17 22:45:48', '212121', 1, 54, 1),
(418, 80, '2019-07-17 22:45:49', '21212121', 1, 54, 1),
(419, 80, '2019-07-17 22:45:50', '212121', 1, 54, 1),
(420, 80, '2019-07-17 22:47:39', '32323232', 1, 54, 1),
(421, 80, '2019-07-17 22:49:16', '2121', 1, 54, 1),
(422, 80, '2019-07-17 23:18:47', 'df\nf\n', 54, 1, 1),
(423, 80, '2019-07-17 23:18:48', 'fdfd', 54, 1, 1),
(424, 80, '2019-07-17 23:18:49', 'fdfd', 54, 1, 1),
(425, 80, '2019-07-17 23:18:55', '12', 1, 54, 1),
(426, 80, '2019-07-17 23:20:29', 'f', 1, 54, 1),
(427, 80, '2019-07-17 23:21:07', 'fd', 1, 54, 1),
(428, 80, '2019-07-17 23:21:46', 'fd', 54, 1, 1),
(429, 80, '2019-07-17 23:21:49', 'fd', 54, 1, 1),
(430, 80, '2019-07-17 23:21:50', 'fd', 54, 1, 1),
(431, 80, '2019-07-17 23:21:52', 'fd', 1, 54, 1),
(432, 80, '2019-07-17 23:22:19', 'fd', 54, 1, 1),
(433, 80, '2019-07-17 23:22:20', 'fd', 54, 1, 1),
(434, 80, '2019-07-17 23:22:21', 'fd', 54, 1, 1),
(435, 80, '2019-07-17 23:22:24', 'fd', 1, 54, 1),
(436, 81, '2019-07-17 23:24:19', 'dffd', 54, 2, 1),
(437, 81, '2019-07-17 23:24:31', 'fdfdfd', 54, 2, 1),
(438, 80, '2019-07-18 06:05:34', 'fdfd', 1, 54, 1),
(439, 81, '2019-07-18 06:06:24', 'fdfd', 2, 54, 1),
(440, 81, '2019-07-18 06:07:14', 'fdfdfd', 2, 54, 1),
(441, 81, '2019-07-18 06:07:35', 'fdfdfd', 2, 54, 1),
(442, 6, '2019-07-18 06:08:03', 'fdfddf', 1, 1, 1),
(443, 80, '2019-07-18 06:08:30', 'fdfd', 1, 54, 1),
(444, 80, '2019-07-18 06:08:39', '1', 1, 54, 1),
(445, 80, '2019-07-18 06:08:40', '2', 1, 54, 1),
(446, 80, '2019-07-18 06:08:42', '3', 1, 54, 1),
(447, 80, '2019-07-18 06:08:43', '4', 1, 54, 1),
(448, 80, '2019-07-18 06:08:45', '5', 1, 54, 1),
(449, 80, '2019-07-18 06:08:46', '6', 1, 54, 1),
(450, 80, '2019-07-18 06:08:48', '7', 1, 54, 1),
(451, 80, '2019-07-18 06:08:49', '8', 1, 54, 1),
(452, 80, '2019-07-18 06:08:50', '9', 1, 54, 1),
(453, 80, '2019-07-18 06:08:52', '10', 1, 54, 1),
(454, 80, '2019-07-18 06:09:49', 'dfdfdggfd', 54, 1, 1),
(455, 80, '2019-07-18 06:09:51', 'ffdgfgd', 54, 1, 1),
(456, 80, '2019-07-18 06:09:53', 'gdfgfd', 54, 1, 1),
(457, 80, '2019-07-18 06:10:01', '21212121', 1, 54, 1),
(458, 80, '2019-07-18 06:32:55', 'fdfd', 54, 1, 1),
(459, 80, '2019-07-18 06:33:12', 'f', 54, 1, 1),
(460, 80, '2019-07-18 06:34:42', '', 54, 1, 1),
(461, 80, '2019-07-18 06:36:20', '\n', 54, 1, 1),
(462, 80, '2019-07-18 06:38:12', '\n', 54, 1, 1),
(463, 80, '2019-07-18 06:40:22', '\n\nf', 54, 1, 1),
(464, 80, '2019-07-18 06:41:07', 'f', 54, 1, 1),
(465, 80, '2019-07-18 06:41:14', 'ff\nf\n\nf', 54, 1, 1),
(466, 80, '2019-07-18 06:41:19', 'f', 54, 1, 1),
(467, 80, '2019-07-18 06:41:25', 'f\n\n\n\nf', 54, 1, 1),
(468, 80, '2019-07-18 06:41:30', 'f', 54, 1, 1),
(469, 80, '2019-07-18 06:42:26', 'f', 54, 1, 1),
(470, 80, '2019-07-18 06:42:29', 'f\n\n\nf', 54, 1, 1),
(471, 80, '2019-07-18 06:42:31', 'fff', 54, 1, 1),
(472, 80, '2019-07-18 06:42:37', 'f', 54, 1, 1),
(473, 80, '2019-07-18 06:42:40', 'ff', 54, 1, 1),
(474, 80, '2019-07-18 06:43:15', '<div><br></div><div><br></div><div><br></div><div>1</div>', 54, 1, 1),
(475, 80, '2019-07-18 06:43:51', '<div><br></div><div><br></div><div><br></div><div><br></div><div>f</div>', 54, 1, 1),
(476, 80, '2019-07-18 06:44:06', 'f', 54, 1, 1),
(477, 80, '2019-07-18 07:58:54', 'fd', 1, 54, 1),
(478, 80, '2019-07-18 07:58:56', 'df', 1, 54, 1),
(479, 80, '2019-07-18 07:59:13', '12', 1, 54, 1),
(480, 80, '2019-07-18 07:59:14', '21', 1, 54, 1),
(481, 80, '2019-07-19 06:58:14', 'fd', 1, 54, 1),
(482, 80, '2019-07-19 07:00:19', '21', 1, 54, 1),
(483, 80, '2019-07-19 07:16:05', 'hjhj', 1, 54, 1),
(484, 80, '2019-07-19 07:26:25', 'fd', 1, 54, 1),
(485, 80, '2019-07-19 07:26:44', 'fd', 1, 54, 1),
(486, 80, '2019-07-19 07:51:40', 'fd', 1, 54, 1),
(487, 80, '2019-07-19 07:53:44', 'fddf', 1, 54, 1),
(488, 80, '2019-07-19 07:54:01', '12', 1, 54, 1),
(489, 80, '2019-07-19 07:54:23', 'fd', 1, 54, 1),
(490, 80, '2019-07-19 07:55:13', 'fd', 1, 54, 1),
(491, 80, '2019-07-19 07:56:00', 'fd', 1, 54, 1),
(492, 80, '2019-07-19 07:58:53', '34', 1, 54, 1),
(493, 80, '2019-07-19 08:00:21', 'fd', 1, 54, 1),
(494, 80, '2019-07-19 08:00:32', 'fd', 1, 54, 1),
(495, 80, '2019-07-19 08:00:38', 'fd', 1, 54, 1),
(496, 80, '2019-07-19 08:01:14', 'fd', 1, 54, 1),
(497, 80, '2019-07-19 08:01:53', 'fd', 1, 54, 1),
(498, 80, '2019-07-19 08:02:12', '3', 1, 54, 1),
(499, 80, '2019-07-19 08:03:09', 'fd', 1, 54, 1),
(500, 80, '2019-07-19 08:05:15', '76', 1, 54, 1),
(501, 80, '2019-07-19 08:05:34', 'gh', 1, 54, 1),
(502, 80, '2019-07-19 08:05:56', 'tr', 1, 54, 1),
(503, 80, '2019-07-19 08:06:19', 'tr', 1, 54, 1),
(504, 80, '2019-07-19 08:07:40', 'hgghg', 1, 54, 1),
(505, 80, '2019-07-19 08:08:31', 'fdfd', 1, 54, 1),
(506, 80, '2019-07-19 08:11:35', 'rt', 1, 54, 1),
(507, 80, '2019-07-19 08:20:49', '2112', 1, 54, 1),
(508, 80, '2019-07-19 08:21:02', 'fdd', 1, 54, 1),
(509, 80, '2019-07-19 08:21:10', 'dfdf', 1, 54, 1),
(510, 80, '2019-07-19 08:21:48', 'gfg', 1, 54, 1),
(511, 80, '2019-07-19 08:22:28', 'trrt', 1, 54, 1),
(512, 81, '2019-07-19 08:23:01', 'gh', 54, 2, 0),
(513, 5, '2019-07-19 08:23:46', 'ghf', 1, 2, 1),
(514, 5, '2019-07-19 08:45:03', 'fd', 1, 2, 1),
(515, 5, '2019-07-19 08:49:02', 'ав', 1, 2, 1),
(516, 80, '2019-07-19 20:18:00', 'fddfs', 1, 54, 1),
(517, 80, '2019-07-19 20:18:47', 'fd', 1, 54, 1),
(518, 80, '2019-07-19 20:20:04', 'fd', 1, 54, 1),
(519, 80, '2019-07-19 20:21:03', 'fdfd', 1, 54, 1),
(520, 80, '2019-07-19 20:44:02', 'dfdfdfdfdfdfdfdfd dfdfdfdfdfdfdfdfddfdfdfdfdfdfdfdfd dfdfdfdfdfdfdfdfd dfdfdfdfdfdfdfdfddfdfdfdfdfdfdfdfddfdfdfdfdfdfdfdfd dfdfdfdfdfdfdfdfddfdfdfdfdfdfdfdfddfdfdfdfdfdfdfdfd dfdfdfdfdfdfdfdfddfdfdfdfdfdfdfdfddfdfdfdfdfdfdfdfd dfdfdfdfdfdfdfdfddfdfdfdfdfdfdfdfddfdfdfdfdfdfdfdfd dfdfdfdfdfdfdfdfddfdfdfdfdfdfdfdfddfdfdfdfdfdfdfdfd dfdfdfdfdfdfdfdfddfdfdfdfdfdfdfdfddfdfdfdfdfdfdfdfd dfdfdfdfdfdfdfdfddfdfdfdfdfdfdfdfddfdfdfdfdfdfdfdfd dfdfdfdfdfdfdfdfddfdfdfdfdfdfdfdfddfdfdfdfdfdfdfdfd dfdfdfdfdfdfdfdfddfdfdfdfdfdfdfdfd', 54, 1, 1),
(521, 80, '2019-07-19 20:59:01', 'fd', 1, 54, 1),
(522, 80, '2019-07-19 20:59:42', 'df', 1, 54, 1),
(523, 80, '2019-07-19 21:01:20', 'fd', 1, 54, 1),
(524, 80, '2019-07-20 10:36:06', 'fddfkfjkfdjkfdjkfjdkfjdkfjdkjfkdjfkdjfkdjfkd  jdfgjk jkfg jkdf jkdf kjdf jkdffdjk', 54, 1, 1),
(525, 80, '2019-07-20 10:38:19', '43', 1, 54, 1),
(526, 80, '2019-07-20 10:38:32', 'fddfkfjkfdjkfdjkfjdkfjdkfjdkjfkdjfkdjfkdjfkd jdfgjk jkfg jkdf jkdf kjdf jkdffdjk', 54, 1, 1),
(527, 80, '2019-07-20 10:47:06', 'dffds', 1, 54, 1),
(528, 80, '2019-07-20 10:47:13', 'df', 1, 54, 1),
(529, 80, '2019-07-20 10:47:42', 'dffd', 1, 54, 1),
(530, 80, '2019-07-20 10:48:00', 'fdsf', 1, 54, 1),
(531, 80, '2019-07-20 10:48:36', 'fd', 1, 54, 1),
(532, 80, '2019-07-20 10:49:01', '12', 1, 54, 1),
(533, 80, '2019-07-20 10:52:16', 'fdfddfs', 1, 54, 1),
(534, 80, '2019-07-20 11:02:25', 'fd', 1, 54, 1),
(535, 80, '2019-07-20 11:03:03', 'df', 54, 1, 1),
(536, 80, '2019-07-20 11:03:03', 'fd', 54, 1, 1),
(537, 80, '2019-07-20 11:03:03', 'fd', 54, 1, 1),
(538, 80, '2019-07-20 11:03:03', 's', 54, 1, 1),
(539, 80, '2019-07-20 11:03:03', 'fsd', 54, 1, 1),
(540, 80, '2019-07-20 11:03:03', 'sfd', 54, 1, 1),
(541, 80, '2019-07-20 11:03:06', 'fd', 1, 54, 1),
(542, 80, '2019-07-20 11:03:06', 'f', 1, 54, 1),
(543, 80, '2019-07-20 11:03:07', 'd', 1, 54, 1),
(544, 80, '2019-07-20 11:03:07', 'f', 1, 54, 1),
(545, 80, '2019-07-20 11:03:07', 'd', 1, 54, 1),
(546, 80, '2019-07-20 11:13:47', 'fd', 1, 54, 1),
(547, 80, '2019-07-20 11:13:47', 'fdg', 1, 54, 1),
(548, 80, '2019-07-20 11:13:47', 'fg', 1, 54, 1),
(549, 80, '2019-07-20 11:13:48', 'gdfs', 1, 54, 1),
(550, 80, '2019-07-20 11:15:32', 'fd', 1, 54, 1),
(551, 80, '2019-07-20 11:15:32', 'fd', 1, 54, 1),
(552, 80, '2019-07-20 11:15:32', 'df', 1, 54, 1),
(553, 80, '2019-07-20 11:15:33', 'fd', 1, 54, 1),
(554, 80, '2019-07-20 11:15:55', 'fddf', 1, 54, 1),
(555, 80, '2019-07-20 11:16:02', '12', 1, 54, 1),
(556, 80, '2019-07-20 11:16:02', '2', 1, 54, 1),
(557, 80, '2019-07-20 11:16:02', '121', 1, 54, 1),
(558, 80, '2019-07-20 11:16:03', '21', 1, 54, 1),
(559, 80, '2019-07-20 11:16:03', '2', 1, 54, 1),
(560, 80, '2019-07-20 11:16:03', '121', 1, 54, 1),
(561, 80, '2019-07-20 11:16:03', '21', 1, 54, 1),
(562, 80, '2019-07-20 11:16:03', '1', 1, 54, 1),
(563, 80, '2019-07-20 11:16:03', '12', 1, 54, 1),
(564, 80, '2019-07-20 11:16:04', '1', 1, 54, 1),
(565, 80, '2019-07-20 11:16:04', '21', 1, 54, 1),
(566, 80, '2019-07-20 11:23:37', 'fd', 1, 54, 1),
(567, 80, '2019-07-20 11:26:01', 'fd', 1, 54, 1),
(568, 80, '2019-07-20 11:26:34', 'df', 1, 54, 1),
(569, 80, '2019-07-20 11:26:34', 'fd', 1, 54, 1),
(570, 80, '2019-07-20 11:26:34', 'df', 1, 54, 1),
(571, 80, '2019-07-20 11:26:35', 'f', 1, 54, 1),
(572, 80, '2019-07-20 11:26:35', 'df', 1, 54, 1),
(573, 80, '2019-07-20 11:26:35', 'df', 1, 54, 1),
(574, 80, '2019-07-20 11:26:46', 'dfd', 1, 54, 1),
(575, 80, '2019-07-20 11:26:46', 'fd', 1, 54, 1),
(576, 80, '2019-07-20 11:26:46', 'f', 1, 54, 1),
(577, 80, '2019-07-20 11:26:46', 'fd', 1, 54, 1),
(578, 80, '2019-07-20 11:26:46', 'fd', 1, 54, 1),
(579, 80, '2019-07-20 11:28:27', 'fd', 1, 54, 1),
(580, 80, '2019-07-20 11:28:27', 'fd', 1, 54, 1),
(581, 80, '2019-07-20 11:28:28', 'fd', 1, 54, 1),
(582, 80, '2019-07-20 11:28:42', 'df', 1, 54, 1),
(583, 80, '2019-07-20 11:28:43', 'df', 1, 54, 1),
(584, 80, '2019-07-20 11:30:43', '1', 1, 54, 1),
(585, 80, '2019-07-20 11:30:43', '1', 1, 54, 1),
(586, 80, '2019-07-20 11:31:09', '1', 1, 54, 1),
(587, 80, '2019-07-20 11:31:10', '1', 1, 54, 1),
(588, 80, '2019-07-20 11:31:10', '1', 1, 54, 1),
(589, 80, '2019-07-20 11:37:38', '21', 1, 54, 1),
(590, 80, '2019-07-20 11:37:38', '1', 1, 54, 1),
(591, 80, '2019-07-20 11:37:39', '21', 1, 54, 1),
(592, 80, '2019-07-20 11:37:39', '221', 1, 54, 1),
(593, 80, '2019-07-20 11:37:43', '3', 1, 54, 1),
(594, 80, '2019-07-20 11:37:43', '32', 1, 54, 1),
(595, 80, '2019-07-20 11:37:43', '32', 1, 54, 1),
(596, 80, '2019-07-20 11:37:44', '32', 1, 54, 1),
(597, 80, '2019-07-20 11:39:10', '21', 1, 54, 1),
(598, 80, '2019-07-20 11:39:10', '2121', 1, 54, 1),
(599, 80, '2019-07-20 11:39:10', '2', 1, 54, 1),
(600, 80, '2019-07-20 11:39:11', '1', 1, 54, 1),
(601, 80, '2019-07-20 11:39:42', '12', 1, 54, 1),
(602, 80, '2019-07-20 11:39:43', '21', 1, 54, 1),
(603, 80, '2019-07-20 11:39:43', '21', 1, 54, 1),
(604, 80, '2019-07-20 11:39:44', '2', 1, 54, 1),
(605, 80, '2019-07-20 11:40:07', '12', 1, 54, 1),
(606, 80, '2019-07-20 11:40:07', '21', 1, 54, 1),
(607, 80, '2019-07-20 11:40:07', '2', 1, 54, 1),
(608, 80, '2019-07-20 11:40:08', '1', 1, 54, 1),
(609, 80, '2019-07-20 11:40:44', 'fd', 1, 54, 1),
(610, 80, '2019-07-20 11:40:44', 'fd', 1, 54, 1),
(611, 80, '2019-07-20 11:40:45', 'fd', 1, 54, 1),
(612, 80, '2019-07-20 11:41:19', '21', 54, 1, 1),
(613, 80, '2019-07-20 11:41:19', '21', 54, 1, 1),
(614, 80, '2019-07-20 11:41:20', '21', 54, 1, 1),
(615, 80, '2019-07-20 11:41:22', '2', 1, 54, 1),
(616, 80, '2019-07-20 11:41:22', '1', 1, 54, 1),
(617, 80, '2019-07-20 11:41:23', '21', 1, 54, 1),
(618, 80, '2019-07-20 11:41:23', '21', 1, 54, 1),
(619, 80, '2019-07-20 11:41:23', '21', 1, 54, 1),
(620, 80, '2019-07-20 11:41:25', '1', 1, 54, 1),
(621, 80, '2019-07-20 11:41:47', '12', 1, 54, 1),
(622, 80, '2019-07-20 11:41:48', '12', 1, 54, 1),
(623, 80, '2019-07-20 11:41:48', '1', 1, 54, 1),
(624, 80, '2019-07-20 11:42:42', '12', 1, 54, 1),
(625, 80, '2019-07-20 11:42:42', '2', 1, 54, 1),
(626, 80, '2019-07-20 11:42:42', '1', 1, 54, 1),
(627, 80, '2019-07-20 11:43:26', '1', 1, 54, 1),
(628, 80, '2019-07-20 11:43:27', '1', 1, 54, 1),
(629, 80, '2019-07-20 11:43:27', '1', 1, 54, 1),
(630, 80, '2019-07-20 11:45:39', '12', 1, 54, 1),
(631, 80, '2019-07-20 11:45:40', '21', 1, 54, 1),
(632, 80, '2019-07-20 11:46:20', '1', 1, 54, 1),
(633, 80, '2019-07-20 11:46:20', '2', 1, 54, 1),
(634, 80, '2019-07-20 11:46:20', '21', 1, 54, 1),
(635, 80, '2019-07-20 11:47:12', '21', 1, 54, 1),
(636, 80, '2019-07-20 11:47:12', '21', 1, 54, 1),
(637, 80, '2019-07-20 11:49:53', '12', 1, 54, 1),
(638, 80, '2019-07-20 11:49:53', '21', 1, 54, 1),
(639, 80, '2019-07-20 11:53:16', '21', 1, 54, 1),
(640, 80, '2019-07-20 11:53:16', '2', 1, 54, 1),
(641, 80, '2019-07-20 11:53:17', '21', 1, 54, 1),
(642, 80, '2019-07-20 11:53:17', '21', 1, 54, 1),
(643, 80, '2019-07-20 11:53:23', 'а', 1, 54, 1),
(644, 80, '2019-07-20 11:53:24', 'ап', 1, 54, 1),
(645, 80, '2019-07-20 11:53:52', 'ав', 1, 54, 1),
(646, 80, '2019-07-20 11:53:52', 'ва', 1, 54, 1),
(647, 80, '2019-07-20 11:54:11', 'ав', 1, 54, 1),
(648, 80, '2019-07-20 11:54:12', 'ав', 1, 54, 1),
(649, 80, '2019-07-20 11:54:54', '21', 1, 54, 1),
(650, 80, '2019-07-20 11:54:55', '21', 1, 54, 1),
(651, 80, '2019-07-20 11:54:55', '21', 1, 54, 1),
(652, 80, '2019-07-20 11:55:21', 'j', 1, 54, 1),
(653, 80, '2019-07-20 11:55:21', 'h', 1, 54, 1),
(654, 80, '2019-07-20 11:55:21', 'jhj', 1, 54, 1),
(655, 80, '2019-07-20 11:55:21', 'h', 1, 54, 1),
(656, 80, '2019-07-20 11:56:18', 'h', 1, 54, 1),
(657, 80, '2019-07-20 11:56:18', '21', 1, 54, 1),
(658, 80, '2019-07-20 11:56:19', '21', 1, 54, 1),
(659, 80, '2019-07-20 11:56:39', '21', 1, 54, 1),
(660, 80, '2019-07-20 11:56:40', '12', 1, 54, 1),
(661, 80, '2019-07-20 11:56:55', 'fd', 1, 54, 1),
(662, 80, '2019-07-20 11:56:56', 'f', 1, 54, 1),
(663, 80, '2019-07-20 11:56:56', 'd', 1, 54, 1),
(664, 80, '2019-07-20 11:56:56', 'fd', 1, 54, 1),
(665, 80, '2019-07-20 11:56:56', 'fd', 1, 54, 1),
(666, 80, '2019-07-20 11:57:34', '21', 1, 54, 1),
(667, 80, '2019-07-20 11:58:01', '12', 1, 54, 1),
(668, 80, '2019-07-20 11:58:01', '21', 1, 54, 1),
(669, 80, '2019-07-20 11:58:01', '12', 1, 54, 1),
(670, 80, '2019-07-20 11:58:02', '21', 1, 54, 1),
(671, 80, '2019-07-20 11:58:14', 'fd', 1, 54, 1),
(672, 80, '2019-07-20 11:58:14', 'fd', 1, 54, 1),
(673, 80, '2019-07-20 11:58:14', 'f', 1, 54, 1),
(674, 80, '2019-07-20 11:58:14', 'fd', 1, 54, 1),
(675, 80, '2019-07-20 11:58:55', '12', 1, 54, 1),
(676, 80, '2019-07-20 11:58:55', '12', 1, 54, 1),
(677, 80, '2019-07-20 11:58:55', '12', 1, 54, 1),
(678, 80, '2019-07-20 11:59:19', '21', 1, 54, 1),
(679, 80, '2019-07-20 11:59:20', '12', 1, 54, 1),
(680, 80, '2019-07-20 11:59:20', '21', 1, 54, 1),
(681, 80, '2019-07-20 11:59:41', 'fd', 1, 54, 1),
(682, 80, '2019-07-20 11:59:41', 'f', 1, 54, 1),
(683, 80, '2019-07-20 11:59:41', 'd', 1, 54, 1),
(684, 80, '2019-07-20 12:00:30', '12', 1, 54, 1),
(685, 80, '2019-07-20 12:00:30', '212', 1, 54, 1),
(686, 80, '2019-07-20 12:00:30', '1', 1, 54, 1),
(687, 80, '2019-07-20 12:00:30', '21', 1, 54, 1),
(688, 80, '2019-07-20 12:00:30', '21122', 1, 54, 1),
(689, 80, '2019-07-20 12:00:30', '112', 1, 54, 1),
(690, 80, '2019-07-20 12:00:30', '21', 1, 54, 1),
(691, 80, '2019-07-20 12:00:31', '12', 1, 54, 1),
(692, 80, '2019-07-20 12:02:05', '21', 1, 54, 1),
(693, 80, '2019-07-20 12:02:05', '21', 1, 54, 1),
(694, 80, '2019-07-20 12:02:05', '21', 1, 54, 1),
(695, 80, '2019-07-20 12:02:05', '21', 1, 54, 1),
(696, 80, '2019-07-20 12:02:06', '12', 1, 54, 1),
(697, 80, '2019-07-20 12:05:00', 'fd', 1, 54, 1),
(698, 80, '2019-07-20 12:05:00', 'f', 1, 54, 1),
(699, 80, '2019-07-20 12:05:01', 'd', 1, 54, 1),
(700, 80, '2019-07-20 12:05:01', 'fdfd', 1, 54, 1),
(701, 80, '2019-07-20 12:05:02', 'df', 1, 54, 1),
(702, 80, '2019-07-20 12:05:02', 'fd', 1, 54, 1),
(703, 80, '2019-07-20 12:05:26', '212', 1, 54, 1),
(704, 80, '2019-07-20 12:05:27', '1', 1, 54, 1),
(705, 80, '2019-07-20 12:10:46', '221', 1, 54, 1),
(706, 80, '2019-07-20 12:10:46', '2', 1, 54, 1),
(707, 80, '2019-07-20 12:10:46', '1', 1, 54, 1),
(708, 80, '2019-07-20 12:10:47', '12', 1, 54, 1),
(709, 80, '2019-07-20 12:11:05', '2', 1, 54, 1),
(710, 80, '2019-07-20 12:11:05', '12', 1, 54, 1),
(711, 80, '2019-07-20 12:11:05', '12', 1, 54, 1),
(712, 80, '2019-07-20 12:11:06', '1', 1, 54, 1),
(713, 80, '2019-07-20 12:12:54', '21', 54, 1, 1),
(714, 80, '2019-07-20 12:12:54', '212', 54, 1, 1),
(715, 80, '2019-07-20 12:12:54', '1', 54, 1, 1),
(716, 80, '2019-07-20 12:12:59', '12', 1, 54, 1),
(717, 80, '2019-07-20 12:13:00', '12', 1, 54, 1),
(718, 80, '2019-07-20 12:13:00', '12', 1, 54, 1),
(719, 80, '2019-07-20 12:13:24', '21', 1, 54, 1),
(720, 80, '2019-07-20 12:13:24', '212', 1, 54, 1),
(721, 80, '2019-07-20 12:13:24', '1', 1, 54, 1),
(722, 80, '2019-07-20 12:13:44', '21', 1, 54, 1),
(723, 80, '2019-07-20 12:13:44', '21', 1, 54, 1),
(724, 80, '2019-07-20 12:13:45', '12', 1, 54, 1),
(725, 80, '2019-07-20 12:14:29', '21', 1, 54, 1),
(726, 80, '2019-07-20 12:14:29', '21', 1, 54, 1),
(727, 80, '2019-07-20 12:14:53', 'fd', 54, 1, 1),
(728, 80, '2019-07-20 12:14:53', 'fd', 54, 1, 1),
(729, 80, '2019-07-20 12:14:57', 'df', 1, 54, 1),
(730, 80, '2019-07-20 12:14:58', 'fd', 1, 54, 1),
(731, 80, '2019-07-20 12:15:07', '12', 1, 54, 1),
(732, 80, '2019-07-20 12:15:08', '21', 1, 54, 1),
(733, 80, '2019-07-20 12:17:07', '21', 54, 1, 1),
(734, 80, '2019-07-20 12:17:08', '21', 54, 1, 1),
(735, 80, '2019-07-20 12:17:13', '21', 1, 54, 1),
(736, 80, '2019-07-20 12:17:14', '21', 1, 54, 1),
(737, 80, '2019-07-20 12:17:14', '21', 1, 54, 1),
(738, 80, '2019-07-20 12:23:38', '21', 1, 54, 1),
(739, 80, '2019-07-20 12:23:38', '21', 1, 54, 1),
(740, 80, '2019-07-20 12:23:38', '12', 1, 54, 1),
(741, 80, '2019-07-20 12:23:39', '12', 1, 54, 1),
(742, 80, '2019-07-20 12:23:39', '12', 1, 54, 1),
(743, 80, '2019-07-20 12:24:14', '21', 1, 54, 1),
(744, 80, '2019-07-20 12:24:15', '21', 1, 54, 1),
(745, 80, '2019-07-20 12:24:15', '12', 1, 54, 1),
(746, 80, '2019-07-20 12:24:15', '12', 1, 54, 1),
(747, 80, '2019-07-20 12:25:03', '21', 1, 54, 1),
(748, 80, '2019-07-20 12:25:03', '1', 1, 54, 1),
(749, 80, '2019-07-20 12:25:03', '2', 1, 54, 1),
(750, 80, '2019-07-20 12:25:04', '21', 1, 54, 1),
(751, 80, '2019-07-20 12:25:35', '12', 1, 54, 1),
(752, 80, '2019-07-20 12:25:35', '21', 1, 54, 1),
(753, 80, '2019-07-20 12:26:02', '21', 1, 54, 1),
(754, 80, '2019-07-20 12:26:03', '12', 1, 54, 1),
(755, 80, '2019-07-20 12:28:09', '21', 1, 54, 1),
(756, 80, '2019-07-20 12:28:09', '12', 1, 54, 1),
(757, 80, '2019-07-20 12:28:09', '12', 1, 54, 1),
(758, 80, '2019-07-20 12:28:09', '12', 1, 54, 1),
(759, 80, '2019-07-20 12:29:17', '1', 1, 54, 1),
(760, 80, '2019-07-20 12:29:17', '1', 1, 54, 1),
(761, 80, '2019-07-20 12:29:18', '1', 1, 54, 1),
(762, 80, '2019-07-20 12:29:18', '1', 1, 54, 1),
(763, 80, '2019-07-20 12:29:18', '1', 1, 54, 1),
(764, 80, '2019-07-20 12:29:18', '1', 1, 54, 1),
(765, 80, '2019-07-20 12:29:52', '1', 54, 1, 1),
(766, 80, '2019-07-20 12:29:52', '1', 54, 1, 1),
(767, 80, '2019-07-20 12:29:52', '1', 54, 1, 1),
(768, 80, '2019-07-20 12:29:53', '1', 54, 1, 1),
(769, 80, '2019-07-20 12:29:53', '1', 54, 1, 1),
(770, 80, '2019-07-20 12:29:53', '1', 54, 1, 1),
(771, 80, '2019-07-20 12:29:54', '1', 54, 1, 1),
(772, 80, '2019-07-20 12:30:17', '1', 1, 54, 1),
(773, 80, '2019-07-20 12:30:17', '1', 1, 54, 1),
(774, 80, '2019-07-20 12:30:18', '1', 1, 54, 1),
(775, 80, '2019-07-20 12:31:25', '21', 1, 54, 1),
(776, 80, '2019-07-20 12:31:25', '21', 1, 54, 1),
(777, 80, '2019-07-20 12:31:25', '21', 1, 54, 1),
(778, 80, '2019-07-20 12:31:25', '1', 1, 54, 1),
(779, 80, '2019-07-20 12:31:56', '21', 1, 54, 1),
(780, 80, '2019-07-20 12:31:57', '21', 1, 54, 1),
(781, 80, '2019-07-20 12:31:57', '2', 1, 54, 1),
(782, 80, '2019-07-20 12:31:57', '1', 1, 54, 1),
(783, 80, '2019-07-20 12:32:38', '12', 1, 54, 1),
(784, 80, '2019-07-20 12:32:38', '21', 1, 54, 1),
(785, 80, '2019-07-20 12:32:38', '2', 1, 54, 1),
(786, 80, '2019-07-20 12:32:38', '1', 1, 54, 1),
(787, 80, '2019-07-20 12:32:38', '12', 1, 54, 1),
(788, 80, '2019-07-20 12:33:10', '21', 1, 54, 1),
(789, 80, '2019-07-20 12:33:10', '2', 1, 54, 1),
(790, 80, '2019-07-20 12:33:10', '1', 1, 54, 1),
(791, 80, '2019-07-20 12:33:10', '21', 1, 54, 1),
(792, 80, '2019-07-20 12:33:11', '12', 1, 54, 1),
(793, 80, '2019-07-20 12:33:27', '2', 1, 54, 1),
(794, 80, '2019-07-20 12:33:27', '1', 1, 54, 1),
(795, 80, '2019-07-20 12:33:27', '21', 1, 54, 1),
(796, 80, '2019-07-20 12:33:27', '12', 1, 54, 1),
(797, 80, '2019-07-20 12:33:28', '21', 1, 54, 1),
(798, 80, '2019-07-20 12:33:53', 'df', 1, 54, 1),
(799, 80, '2019-07-20 12:33:53', 'fd', 1, 54, 1),
(800, 80, '2019-07-20 12:33:54', 'f', 1, 54, 1),
(801, 80, '2019-07-20 12:33:54', 'fd', 1, 54, 1),
(802, 80, '2019-07-20 12:33:54', 'fd', 1, 54, 1),
(803, 80, '2019-07-20 12:33:54', 'fd', 1, 54, 1),
(804, 80, '2019-07-20 12:34:15', '2', 1, 54, 1),
(805, 80, '2019-07-20 12:34:15', '1', 1, 54, 1),
(806, 80, '2019-07-20 12:34:15', '21', 1, 54, 1),
(807, 80, '2019-07-20 12:34:16', '21', 1, 54, 1),
(808, 80, '2019-07-20 12:34:16', '21', 1, 54, 1),
(809, 80, '2019-07-20 12:34:34', '21', 1, 54, 1),
(810, 80, '2019-07-20 12:34:34', '21', 1, 54, 1),
(811, 80, '2019-07-20 12:34:35', '21', 1, 54, 1),
(812, 80, '2019-07-20 12:34:35', '21', 1, 54, 1),
(813, 80, '2019-07-20 12:34:51', '2', 1, 54, 1),
(814, 80, '2019-07-20 12:34:51', '1', 1, 54, 1),
(815, 80, '2019-07-20 12:34:51', '21', 1, 54, 1),
(816, 80, '2019-07-20 12:34:51', '21', 1, 54, 1),
(817, 80, '2019-07-20 12:35:00', '21', 1, 54, 1),
(818, 80, '2019-07-20 12:35:00', '12', 1, 54, 1),
(819, 80, '2019-07-20 12:35:54', '12', 1, 54, 1),
(820, 80, '2019-07-20 12:35:54', '21', 1, 54, 1),
(821, 80, '2019-07-20 12:35:54', '21', 1, 54, 1),
(822, 80, '2019-07-20 12:37:52', '12', 1, 54, 1),
(823, 80, '2019-07-20 12:37:52', '2', 1, 54, 1),
(824, 80, '2019-07-20 12:37:52', '1', 1, 54, 1),
(825, 80, '2019-07-20 12:37:53', '21', 1, 54, 1),
(826, 80, '2019-07-20 12:38:51', '21', 1, 54, 1),
(827, 80, '2019-07-20 12:38:51', '2', 1, 54, 1),
(828, 80, '2019-07-20 12:38:51', '1', 1, 54, 1),
(829, 80, '2019-07-20 12:38:52', '21', 1, 54, 1),
(830, 80, '2019-07-20 12:38:52', '21', 1, 54, 1),
(831, 80, '2019-07-20 12:41:26', '21', 54, 1, 1),
(832, 80, '2019-07-20 12:41:30', '2121', 1, 54, 1),
(833, 80, '2019-07-20 12:41:30', '21', 1, 54, 1),
(834, 80, '2019-07-20 12:43:14', '12', 54, 1, 1),
(835, 80, '2019-07-20 12:43:16', '12', 54, 1, 1),
(836, 80, '2019-07-20 12:43:23', '21', 1, 54, 1),
(837, 80, '2019-07-20 12:43:24', '12', 1, 54, 1),
(838, 80, '2019-07-20 12:44:01', '2121', 1, 54, 1),
(839, 80, '2019-07-20 12:44:02', '21', 1, 54, 1),
(840, 80, '2019-07-20 12:44:02', '21', 1, 54, 1),
(841, 80, '2019-07-20 12:44:03', '21', 1, 54, 1),
(842, 80, '2019-07-20 12:44:58', '2121', 1, 54, 1),
(843, 80, '2019-07-20 12:44:58', '21', 1, 54, 1),
(844, 80, '2019-07-20 12:44:58', '21', 1, 54, 1),
(845, 80, '2019-07-20 12:45:16', '21', 1, 54, 1),
(846, 80, '2019-07-20 12:45:45', '2121', 1, 54, 1),
(847, 80, '2019-07-20 12:45:45', '21', 1, 54, 1),
(848, 80, '2019-07-20 12:45:45', '21', 1, 54, 1),
(849, 80, '2019-07-20 12:45:45', '21', 1, 54, 1),
(850, 80, '2019-07-20 12:46:34', '21', 1, 54, 1),
(851, 80, '2019-07-20 12:48:52', '2112', 1, 54, 1),
(852, 80, '2019-07-20 12:48:53', '12', 1, 54, 1),
(853, 80, '2019-07-20 12:48:53', '21', 1, 54, 1),
(854, 80, '2019-07-20 12:48:54', '21', 1, 54, 1),
(855, 80, '2019-07-20 12:49:21', '1', 54, 1, 1),
(856, 80, '2019-07-20 12:49:21', '1', 54, 1, 1),
(857, 80, '2019-07-20 12:49:21', '21', 54, 1, 1),
(858, 80, '2019-07-20 12:49:25', '2112', 1, 54, 1),
(859, 80, '2019-07-20 12:49:26', '21', 1, 54, 1),
(860, 80, '2019-07-20 12:49:26', '12', 1, 54, 1),
(861, 80, '2019-07-20 12:49:57', '2121', 1, 54, 1),
(862, 80, '2019-07-20 12:50:41', '1212', 1, 54, 1),
(863, 80, '2019-07-20 12:50:42', '21', 1, 54, 1),
(864, 80, '2019-07-20 12:50:42', '21', 1, 54, 1),
(865, 80, '2019-07-20 12:52:00', '55454', 1, 54, 1),
(866, 80, '2019-07-20 12:52:00', '45', 1, 54, 1),
(867, 80, '2019-07-20 12:52:00', '5', 1, 54, 1),
(868, 80, '2019-07-20 12:52:01', '4', 1, 54, 1),
(869, 80, '2019-07-20 12:53:58', '3443', 1, 54, 1),
(870, 80, '2019-07-20 12:54:57', '2332', 1, 54, 1),
(871, 80, '2019-07-20 12:55:42', '45', 54, 1, 1),
(872, 80, '2019-07-20 12:55:43', '54', 54, 1, 1),
(873, 80, '2019-07-20 12:55:48', '54543', 1, 54, 1),
(874, 80, '2019-07-20 12:56:52', '433', 1, 54, 1),
(875, 80, '2019-07-20 12:56:52', '34', 1, 54, 1),
(876, 80, '2019-07-20 12:56:52', '43', 1, 54, 1),
(877, 80, '2019-07-20 12:56:52', '4', 1, 54, 1),
(878, 80, '2019-07-20 12:56:53', '3', 1, 54, 1),
(879, 80, '2019-07-20 12:58:30', '21', 1, 54, 1),
(880, 80, '2019-07-20 12:58:30', '21', 1, 54, 1),
(881, 80, '2019-07-20 12:58:30', '21', 1, 54, 1),
(882, 80, '2019-07-20 12:58:43', '23', 1, 54, 1),
(883, 80, '2019-07-20 12:58:44', '23', 1, 54, 1),
(884, 80, '2019-07-20 12:58:44', '32', 1, 54, 1),
(885, 80, '2019-07-20 12:59:36', '2112', 1, 54, 1),
(886, 80, '2019-07-20 12:59:43', '2121', 1, 54, 1),
(887, 80, '2019-07-20 12:59:43', '12', 1, 54, 1),
(888, 80, '2019-07-20 12:59:43', '1', 1, 54, 1),
(889, 80, '2019-07-20 12:59:43', '2', 1, 54, 1),
(890, 80, '2019-07-20 12:59:43', '211', 1, 54, 1),
(891, 80, '2019-07-20 12:59:44', '2', 1, 54, 1),
(892, 80, '2019-07-20 13:02:48', '212112', 1, 54, 1),
(893, 80, '2019-07-20 13:03:19', '2121', 1, 54, 1),
(894, 80, '2019-07-20 13:04:25', '2121', 1, 54, 1),
(895, 80, '2019-07-20 13:09:39', '13213123', 1, 54, 1),
(896, 80, '2019-07-20 13:12:16', 'fd<div><br></div>', 1, 54, 1),
(897, 80, '2019-07-20 13:15:02', 'fd', 1, 54, 1),
(898, 80, '2019-07-20 13:24:45', 'dsffds', 1, 54, 1),
(899, 80, '2019-07-20 13:25:53', 'fddf', 1, 54, 1),
(900, 80, '2019-07-20 13:25:55', 'df', 1, 54, 1),
(901, 80, '2019-07-20 13:25:59', '21', 1, 54, 1),
(902, 80, '2019-07-20 13:26:00', '2', 1, 54, 1),
(903, 80, '2019-07-20 13:26:00', '1', 1, 54, 1),
(904, 80, '2019-07-20 13:26:00', '21', 1, 54, 1),
(905, 80, '2019-07-20 13:26:00', '21', 1, 54, 1),
(906, 80, '2019-07-20 13:26:00', '2', 1, 54, 1),
(907, 80, '2019-07-20 13:26:00', '21', 1, 54, 1),
(908, 80, '2019-07-20 13:26:01', '21', 1, 54, 1),
(909, 80, '2019-07-20 13:26:01', '21', 1, 54, 1),
(910, 80, '2019-07-20 13:26:01', '21', 1, 54, 1),
(911, 80, '2019-07-20 13:26:01', '21', 1, 54, 1),
(912, 80, '2019-07-20 13:26:01', '21', 1, 54, 1),
(913, 80, '2019-07-20 13:26:01', '21', 1, 54, 1),
(914, 80, '2019-07-20 13:26:01', '21', 1, 54, 1),
(915, 80, '2019-07-20 13:26:02', '1', 1, 54, 1),
(916, 80, '2019-07-20 13:26:02', '2', 1, 54, 1),
(917, 80, '2019-07-20 13:26:02', '2', 1, 54, 1),
(918, 80, '2019-07-20 13:26:02', '1', 1, 54, 1),
(919, 80, '2019-07-20 13:26:02', '12', 1, 54, 1),
(920, 80, '2019-07-20 13:26:02', '12', 1, 54, 1),
(921, 80, '2019-07-22 06:18:58', 'Привет', 1, 54, 0),
(922, 80, '2019-07-22 06:22:06', 'ав', 1, 54, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
  `url_avatar` varchar(254) DEFAULT NULL,
  `online` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `date`, `name`, `lastname`, `email`, `password`, `salt`, `cookie`, `formStart`, `mailStr`, `mailVerify`, `passStr`, `url_avatar`, `online`) VALUES
(1, '2019-05-21 17:52:47', 'Владислав', 'Владислав', 'pas@ya.ru', '24fee336773041118aefb5e39f1441e0', 'eh#6dk\"z', 'K}nZq.+)', 1, NULL, 1, NULL, '1-_-Avatar-_-.png', '2019-07-23 22:14:15'),
(2, '2019-05-21 17:52:47', 'ШШШШШШШШШШШШ', 'ШШШШШШШШШШШШ', 'spa@ya.ru', '6e2b242001aaeb9189999c45a114536d', '`lLC(*uj', '=q4y(Q$u', 1, NULL, 1, NULL, '2-_-Avatar-_-.png', '2019-07-19 20:17:45'),
(3, '2019-05-21 17:52:47', 'Dkjfkdjfdjkfdkjfjdkfjdkf', 'Dkjfkdjfdjkfdkjfjdkfjdkf', 'tra@ya.ru', '0ebd93023ee5fda52fe522c87e03a193', 'yU{Nqcxd', '35q=F6S?', 0, NULL, NULL, NULL, NULL, '2019-07-17 01:48:48'),
(4, '2019-05-21 17:52:47', 'иЛЬЯИЛЬЯ', 'КаПтПлоавлоВ', '123@ya.ru', 'b22ee820e24dff216a5dcdb96ccb6821', 'K)aZ\\D$i', 'Rv\'8HJ%g', 0, NULL, NULL, NULL, NULL, '2019-07-17 01:48:48'),
(18, '2019-05-24 19:52:24', 'Коля', 'Колясик', 'spad20@bk.ru', '429998dbf12fa0f335676581c1498c56', 'y@>k&`?s', '=fsQ1.&>', 0, '8toD9oiLLVTepf9ftH8Hm2VbFQN9xCQ6EwC1o86omXIOhbohGGYtg9XQMqpedHMH326FEwVmP2NxmQf4', 0, NULL, NULL, '2019-07-17 01:48:48'),
(19, '2019-05-26 03:04:25', 'Илья Илья', 'Ильич Ильич', 'rubbish@mail.ru', '65751be6ec3a2e0f04cbf79e9142e6ef', '+A/[>bN}', '\"RNDvSlL', 0, 'vhSePtujhmN1B1DVFz7QYsYhAUYyIPAOfkqt2MgpbwBRMgzu0gngeuMdBCRX1uLMlDojTOy3xjV2eFl9', 0, NULL, NULL, '2019-07-17 01:48:48'),
(20, '2019-05-26 03:08:25', 'ИЛЬЯИЛЬЯ', 'fdfdfdfdfdffd', 'fdlkfldk@mail.ru', '8c5a01b2c7ddf0424412afaa61d980e1', 'e-i/o/!s', 'F\"@egrva', 0, 'YO81hY7w8T6hI8SbzLRPQSJPBEERdFRWZYJYdbhZV9PBzcgyetAM4qmPlUC8fOEGvQreWdMyN2g5ohBb', 0, NULL, NULL, '2019-07-17 01:48:48'),
(21, '2019-05-26 03:12:42', 'Dfjkhjfkdjkfjjjjjj', 'Fdjkjkjfkjfhjs', 'dffdjfdk@mail.ru', '05ec3d6953631f44f93da649170feab2', 'hEdU1m:O', '&il?jko#', 0, '2424jzFAKMvjDJpip8f7ZW5JLQNsMMYfydAFQ3CsFDYAUAuVQqf95W1N8KIX6NK0c85eDqNcualPTZnD', 0, NULL, NULL, '2019-07-17 01:48:48'),
(27, '2019-06-02 02:11:31', 'Илья', 'Капитонов', 'ilyakapitonovspad@gmail.com', 'bab0f94f64c39c545f82e661a800b393', 'n\"ZOo:!9', '\'+*j.x9T', 1, NULL, 1, NULL, '27-_-Avatar-_-.jpeg', '2019-06-17 07:10:48'),
(40, '2019-07-06 16:48:16', 'Fdl;;lfd', 'Dkffdkklfd', 'fdkklfdlkfdlkd@mail.ru', '4b872b284c62251c012595b6b2c88c00', 'wn@t>*R:', '6zk<[7@G', 0, '8a2FiQmApnLYwShaKITGgHRSO5Z4SjUIxdhYmrF6FQY1DhHlTrvourogR5ApNnLrbyGUHthBWo4IZpYB', 0, NULL, NULL, '2019-07-17 01:48:48'),
(41, '2019-07-06 16:49:33', 'Fdfdklfd', 'Dfklfkdlkl', 'ffddfdfdfdf@mail.ru', '5ae57996b91a37c95e862df28f6843af', 'F3oTK\"6)', 'X>X9nj`|', 0, 'qTL7CEAiJgni5cZNxmvzPNLnGFCV6N9l4eHtgjllR56F9zWKostp4kZMPiXtyozJRM9uBjNNnVNXsaat', 0, NULL, NULL, '2019-07-17 01:48:48'),
(51, '2019-07-06 20:23:48', 'Вова', 'Вова', 'malinovskuv@gmail.com', 'f064e8b871271254b55dea1061a8f671', 'n0|D!!L8', '>UZ)7l;)', 0, 'UQ7xjolVqG7HGckUe5UOhIlF6hd0yDMjulx1fW63k9sS8iJZkj9850dvnX6ai8ce5QTTb3YlrPSS3xeK', 0, NULL, NULL, '2019-07-17 01:48:48'),
(54, '2019-07-07 02:05:56', 'Илья', 'Капитонов', 'spad20@yandex.ru', 'f31a1538c818c99a80705fb71cd6d826', 'Zp@PU^Ps', '5VCsfThs', 1, NULL, 1, NULL, NULL, '2019-07-22 06:19:01'),
(55, '2019-07-21 17:23:03', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:03'),
(56, '2019-07-21 17:23:12', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:12'),
(57, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(58, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(59, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(60, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(61, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(62, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(63, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(64, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(65, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(66, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(67, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(68, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(69, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(70, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(71, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(72, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(73, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(74, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(75, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(76, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(77, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(78, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(79, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(80, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(81, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(82, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(83, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(84, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(85, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(86, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(87, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(88, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(89, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(90, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(91, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(92, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(93, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(94, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(95, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(96, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(97, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(98, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(99, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(100, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(101, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(102, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(103, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(104, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(105, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(106, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(107, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(108, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(109, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(110, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(111, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(112, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(113, '2019-07-21 17:23:43', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:43'),
(114, '2019-07-21 17:23:44', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:44'),
(115, '2019-07-21 17:23:44', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:44'),
(116, '2019-07-21 17:23:44', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:44'),
(117, '2019-07-21 17:23:44', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:44'),
(118, '2019-07-21 17:23:44', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:44'),
(119, '2019-07-21 17:23:44', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:44'),
(120, '2019-07-21 17:23:44', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:44'),
(121, '2019-07-21 17:23:44', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:44'),
(122, '2019-07-21 17:23:44', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:44'),
(123, '2019-07-21 17:23:44', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:44'),
(124, '2019-07-21 17:23:44', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:44'),
(125, '2019-07-21 17:23:44', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:44'),
(126, '2019-07-21 17:23:44', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:44'),
(127, '2019-07-21 17:23:44', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:44'),
(128, '2019-07-21 17:23:44', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:44'),
(129, '2019-07-21 17:23:44', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:44'),
(130, '2019-07-21 17:23:44', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:44'),
(131, '2019-07-21 17:23:44', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:44'),
(132, '2019-07-21 17:23:44', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:44'),
(133, '2019-07-21 17:23:44', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:44'),
(134, '2019-07-21 17:23:44', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:44'),
(135, '2019-07-21 17:23:44', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:44'),
(136, '2019-07-21 17:23:44', 'Тестовый', 'Пользователь', '123@mail.ru', '1234567', '43434', 'fdfdfdfd', 0, 'fdfdfdfdfd', 1, NULL, NULL, '2019-07-21 17:23:44');

-- --------------------------------------------------------

--
-- Table structure for table `users_call`
--

CREATE TABLE `users_call` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `id_auto` int(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_call`
--

INSERT INTO `users_call` (`id`, `name`, `contact`, `id_auto`) VALUES
(4, '&lt;h1&gt;&lt;/h1&gt;', '&lt;h1&gt;&lt;/h1&gt;', 37),
(17, '&lt;h1&gt;1&lt;/h1&gt;', '&lt;h1&gt;1&lt;/h1&gt;', 42),
(3, 'ШШШШШШШШШШШШШШШ', 'ШШШШШШШШШШШ', 46),
(1, 'аваВладиславВлаmВлВладиславВла', 'аваВладиславВлаmВлВладиславВла', 65);

-- --------------------------------------------------------

--
-- Table structure for table `users_lang`
--

CREATE TABLE `users_lang` (
  `id` int(11) NOT NULL,
  `lang` varchar(25) NOT NULL,
  `id_auto` int(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_lang`
--

INSERT INTO `users_lang` (`id`, `lang`, `id_auto`) VALUES
(17, 'maxlength=&quot;30&quot;', 78),
(2, 'Русский', 79),
(3, 'English', 95),
(3, 'Русский', 96),
(3, 'Русский', 97),
(18, 'Русский', 101),
(20, 'Русский', 102),
(27, 'Русский', 125),
(54, 'Русский', 139),
(1, 'English', 149),
(1, 'ВладиславВадиславВ', 150),
(1, 'в222', 151),
(1, 'ШШШШШШШШШШШШШШШШШШШШШШШШШ', 152),
(1, '222', 153),
(1, 'хуй', 154);

-- --------------------------------------------------------

--
-- Table structure for table `users_network`
--

CREATE TABLE `users_network` (
  `id` int(11) NOT NULL,
  `network` varchar(30) NOT NULL,
  `url` varchar(100) NOT NULL,
  `id_auto` int(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_network`
--

INSERT INTO `users_network` (`id`, `network`, `url`, `id_auto`) VALUES
(4, '&lt;h1&gt;&lt;/h1&gt;', 'http://localhost:8888/project/', 42),
(17, '&lt;h1&gt;1&lt;/h1&gt;', 'http://localhost:8888/project/edit.php?id=17', 45),
(1, 'http://localhost:8888/project/', 'http://localhost:8888/project/formStart.php', 82),
(1, 'fdfdfdfdfd', 'http://localhost:8888/project/formStart.php', 83),
(1, 'fdfdfd', 'http://localhost:8888/project/formStart.php', 84),
(1, 'dffddf', 'http://localhost:8888/project/formStart.php', 85),
(1, 'fdfddf', 'http://localhost:8888/project/formStart.php', 86);

-- --------------------------------------------------------

--
-- Table structure for table `users_save`
--

CREATE TABLE `users_save` (
  `id` int(18) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `this_user` int(11) NOT NULL,
  `saving_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_save`
--

INSERT INTO `users_save` (`id`, `date`, `this_user`, `saving_user`) VALUES
(8, '2019-05-18 00:47:06', 4, 1),
(9, '2019-05-18 00:47:10', 4, 3),
(12, '2019-05-18 02:43:42', 1, 3),
(13, '2019-05-18 02:43:46', 1, 4),
(17, '2019-06-01 19:28:45', 2, 20),
(18, '2019-07-16 17:40:12', 1, 27);

-- --------------------------------------------------------

--
-- Table structure for table `users_static_info`
--

CREATE TABLE `users_static_info` (
  `id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `city` varchar(30) NOT NULL,
  `birthday` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_static_info`
--

INSERT INTO `users_static_info` (`id`, `status`, `city`, `birthday`) VALUES
(1, 'Занят', 'MoscowВладиславВлаmВлВлад', '05.10.1ВладиславВлаmВлВла'),
(2, 'Частично свободен', 'Москва', '05.10.1999'),
(4, 'Частично занят', '<h1>а</h1>', '<h1>а</h1>'),
(17, 'Свободен', '&lt;h1&gt;1&lt;/h1&gt;', '&lt;h1&gt;1&lt;/h1&gt;'),
(17, 'Частично свободен', '&lt;h1&gt;1&lt;/h1&gt;', '&lt;h1&gt;1&lt;/h1&gt;'),
(3, 'Частично занят', 'Невада', '05.10.1999'),
(18, 'Частично свободен', 'Moscow', '05.10.1999'),
(20, 'Частично свободен', 'Moscov', '05.10.1999'),
(27, 'Свободен', 'Москва', '2018-12-12'),
(1, 'Частично свободен', 'dsdsdsdsdsds', 'dsdsdsdsdsds'),
(54, 'Частично свободен', 'Vjcrdf', '2018-12-13');

-- --------------------------------------------------------

--
-- Table structure for table `users_text`
--

CREATE TABLE `users_text` (
  `id` int(11) NOT NULL,
  `callback` varchar(1500) NOT NULL,
  `about_cg` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_text`
--

INSERT INTO `users_text` (`id`, `callback`, `about_cg`) VALUES
(1, 'аваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладислав', 'аваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладислав'),
(1, 'аваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладислав', 'аваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладислав'),
(1, 'аваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладислав', 'аваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлВладиславВлаmВлаваВладислав'),
(2, 'С любыми', '$LocationToId = $itemsIdUser[\'id\'];'),
(4, '<h1>а</h1>', '<h1>а</h1>'),
(17, 'С любыми', ''),
(17, 'С любыми', ''),
(3, 'С любыми', ''),
(18, 'С любыми', ''),
(20, 'С любыми', ''),
(27, 'С любыми', ''),
(1, 'sds', 'dsdsdsd'),
(54, 'С любыми', '');

-- --------------------------------------------------------

--
-- Table structure for table `users_want_cg`
--

CREATE TABLE `users_want_cg` (
  `id` int(11) NOT NULL,
  `cg` varchar(5) NOT NULL,
  `parent_cg` int(2) NOT NULL,
  `id_auto` int(19) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_want_cg`
--

INSERT INTO `users_want_cg` (`id`, `cg`, `parent_cg`, `id_auto`) VALUES
(4, '2', 0, 381),
(17, '4', 0, 422),
(17, '6', 0, 423),
(17, '6_2', 6, 424),
(17, '12', 0, 425),
(17, '12_2', 12, 426),
(2, '1', 0, 427),
(2, '1_4', 1, 428),
(2, '1_6', 1, 429),
(2, '1_11', 1, 430),
(2, '5', 0, 431),
(2, '5_2', 5, 432),
(2, '5_4', 5, 433),
(3, '2', 0, 461),
(3, '2_4', 2, 462),
(3, '2_6', 2, 463),
(3, '3', 0, 464),
(3, '6', 0, 465),
(18, '10', 0, 517),
(20, '5', 0, 518),
(27, '3', 0, 621),
(54, '5', 0, 659),
(1, '2', 0, 696),
(1, '2_2', 2, 697),
(1, '2_3', 2, 698),
(1, '2_4', 2, 699),
(1, '2_5', 2, 700),
(1, '2_6', 2, 701),
(1, '2_7', 2, 702),
(1, '3', 0, 703),
(1, '3_1', 3, 704),
(1, '3_3', 3, 705),
(1, '4', 0, 706),
(1, '6', 0, 707),
(1, '8', 0, 708),
(1, '8_3', 8, 709),
(1, '8_4', 8, 710),
(1, '15', 0, 711),
(1, '15_3', 15, 712),
(1, '15_5', 15, 713);

-- --------------------------------------------------------

--
-- Table structure for table `want_cg`
--

CREATE TABLE `want_cg` (
  `id` varchar(20) NOT NULL,
  `parent_id` varchar(2) DEFAULT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `want_cg`
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
-- Indexes for dumped tables
--

--
-- Indexes for table `forumComIdea`
--
ALTER TABLE `forumComIdea`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forumComments`
--
ALTER TABLE `forumComments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forumComTask`
--
ALTER TABLE `forumComTask`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `startups`
--
ALTER TABLE `startups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `startup_deleter_people`
--
ALTER TABLE `startup_deleter_people`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `startup_forums_docs`
--
ALTER TABLE `startup_forums_docs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `startup_forums_idea`
--
ALTER TABLE `startup_forums_idea`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `startup_forums_task`
--
ALTER TABLE `startup_forums_task`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `startup_verify_users`
--
ALTER TABLE `startup_verify_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `startup_want_do`
--
ALTER TABLE `startup_want_do`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userBlog`
--
ALTER TABLE `userBlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userDialogs`
--
ALTER TABLE `userDialogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userMessages`
--
ALTER TABLE `userMessages`
  ADD PRIMARY KEY (`id_mes`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_call`
--
ALTER TABLE `users_call`
  ADD PRIMARY KEY (`id_auto`);

--
-- Indexes for table `users_lang`
--
ALTER TABLE `users_lang`
  ADD PRIMARY KEY (`id_auto`);

--
-- Indexes for table `users_network`
--
ALTER TABLE `users_network`
  ADD PRIMARY KEY (`id_auto`);

--
-- Indexes for table `users_save`
--
ALTER TABLE `users_save`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_want_cg`
--
ALTER TABLE `users_want_cg`
  ADD PRIMARY KEY (`id_auto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `forumComIdea`
--
ALTER TABLE `forumComIdea`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `forumComments`
--
ALTER TABLE `forumComments`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `forumComTask`
--
ALTER TABLE `forumComTask`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT for table `startups`
--
ALTER TABLE `startups`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT for table `startup_deleter_people`
--
ALTER TABLE `startup_deleter_people`
  MODIFY `id` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `startup_forums_docs`
--
ALTER TABLE `startup_forums_docs`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `startup_forums_idea`
--
ALTER TABLE `startup_forums_idea`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `startup_forums_task`
--
ALTER TABLE `startup_forums_task`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `startup_verify_users`
--
ALTER TABLE `startup_verify_users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `startup_want_do`
--
ALTER TABLE `startup_want_do`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `userBlog`
--
ALTER TABLE `userBlog`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `userDialogs`
--
ALTER TABLE `userDialogs`
  MODIFY `id` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `userMessages`
--
ALTER TABLE `userMessages`
  MODIFY `id_mes` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=923;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `users_call`
--
ALTER TABLE `users_call`
  MODIFY `id_auto` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `users_lang`
--
ALTER TABLE `users_lang`
  MODIFY `id_auto` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `users_network`
--
ALTER TABLE `users_network`
  MODIFY `id_auto` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `users_save`
--
ALTER TABLE `users_save`
  MODIFY `id` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users_want_cg`
--
ALTER TABLE `users_want_cg`
  MODIFY `id_auto` int(19) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=714;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
