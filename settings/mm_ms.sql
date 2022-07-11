-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Фев 17 2022 г., 16:32
-- Версия сервера: 5.7.18
-- Версия PHP: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mm_ms`
--
CREATE DATABASE IF NOT EXISTS `mm_ms` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mm_ms`;

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(255) NOT NULL,
  `name_n` varchar(255) NOT NULL,
  `mtex_n` varchar(255) NOT NULL,
  `text_n` varchar(500) NOT NULL,
  `type_n` varchar(255) NOT NULL,
  `autor_n` varchar(255) NOT NULL,
  `data` text NOT NULL,
  `pic_n` text NOT NULL,
  `url_n` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `name_n`, `mtex_n`, `text_n`, `type_n`, `autor_n`, `data`, `pic_n`, `url_n`) VALUES
(1, 'bug reports. April 19, 2017', '...', 'Today, during the test of the main resource functions, the following errors were fixed:\r\n* Incorrect display of user avatar\r\n* Incorrect links to tracks from your profile\r\n* Incorrect display of tracks on the main page\r\n* Incorrect display of subscribers, subscriptions and likes in user profile\r\n* Error when user tries to subscribe or unsubscribe from another user\r\n\r\nMusiccloud dev.', '1', 'MusicCloud.com', 'April 19, 2017', '1', '1'),
(2, 'Changes. May 25, 2017', '...', 'Changes:\r\n\r\n- Added function to send private messages\r\n- Added function to the report\r\n- Change in the display of information about the track. This information is now displayed in the right pane.', '1', '', '25 May, 2017', '1', '3'),
(3, 'Update 1.1', '...', 'Coming soon:\r\n\r\n- Changing the mandachord system\r\n- Function of profile preview when hovering over the user\'s nickname\r\n- Displaying recent user comments\r\n- The menu of private messages. At the moment, personal messages can be sent, but not read.\r\n- Add the ability to add tags for the tracks when uploading to the resource. \r\n- Search by tags. \r\n- Improving the search page\r\n\r\nand other\r\n', '1', '', '30 May, 2017', '1', '2'),
(4, 'Changes. October 27, 2019', '...', 'Changes:\r\n\r\n- Restore old titul image, but in black version\r\n- Added function to display how many peoples listen track and liked it\r\n- Change default background for track.', '1', '', '27 October, 2019', '1', '3');

-- --------------------------------------------------------

--
-- Структура таблицы `o_album`
--

CREATE TABLE `o_album` (
  `id` int(20) NOT NULL,
  `a_name` varchar(40) NOT NULL,
  `a_lab` varchar(25) NOT NULL,
  `o_info` varchar(500) NOT NULL,
  `o_date` date NOT NULL,
  `o_genre` varchar(100) NOT NULL,
  `o_p.label` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `o_album`
--

INSERT INTO `o_album` (`id`, `a_name`, `a_lab`, `o_info`, `o_date`, `o_genre`, `o_p.label`) VALUES
(1, 'Personal', 'goddness_21.jpeg', '', '2019-12-27', 'classical', '');

-- --------------------------------------------------------

--
-- Структура таблицы `o_board`
--

CREATE TABLE `o_board` (
  `id` int(50) NOT NULL,
  `master` varchar(25) NOT NULL,
  `master_u` varchar(25) NOT NULL,
  `author` varchar(25) NOT NULL,
  `mess` text NOT NULL,
  `date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `o_comments`
--

CREATE TABLE `o_comments` (
  `id` int(255) NOT NULL,
  `comm_id` varchar(25) NOT NULL,
  `comm_author` varchar(25) NOT NULL,
  `comm` text NOT NULL,
  `comm_date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `o_favorite`
--

CREATE TABLE `o_favorite` (
  `id` int(255) NOT NULL,
  `f_master` varchar(25) NOT NULL,
  `f_author` varchar(25) NOT NULL,
  `f_object` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `o_followers`
--

CREATE TABLE `o_followers` (
  `id` int(255) NOT NULL,
  `f_master` varchar(25) NOT NULL,
  `f_author` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `o_followers`
--

INSERT INTO `o_followers` (`id`, `f_master`, `f_author`) VALUES
(1, 'goddness', 'Nier'),
(2, 'babalon', 'Nier'),
(3, 'Nier', 'babalon'),
(4, 'goddness', 'babalon');

-- --------------------------------------------------------

--
-- Структура таблицы `o_like`
--

CREATE TABLE `o_like` (
  `id` int(255) NOT NULL,
  `l_master` varchar(25) NOT NULL,
  `l_author` varchar(25) NOT NULL,
  `l_object` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `o_playlist`
--

CREATE TABLE `o_playlist` (
  `pl_id` int(11) NOT NULL,
  `pl_name` varchar(25) NOT NULL,
  `pl_auth` varchar(25) NOT NULL,
  `pl_lab` varchar(25) NOT NULL DEFAULT '0.jpg',
  `pl_genre` varchar(25) NOT NULL,
  `pl_dost` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `o_pltrack`
--

CREATE TABLE `o_pltrack` (
  `id` int(11) NOT NULL,
  `id_pllist` int(11) NOT NULL,
  `id_pltrack` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `o_titul`
--

CREATE TABLE `o_titul` (
  `id` int(20) NOT NULL,
  `t_nick` varchar(25) NOT NULL,
  `s_titul` varchar(35) NOT NULL,
  `type_dost` int(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `o_titul`
--

INSERT INTO `o_titul` (`id`, `t_nick`, `s_titul`, `type_dost`) VALUES
(1, '', 'user', 1),
(2, '', 'Singer', 1),
(3, '', 'Group', 1),
(4, '', 'Sys_Bot', 1),
(5, '', 'Administrator', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `o_track`
--

CREATE TABLE `o_track` (
  `id` int(20) NOT NULL,
  `o_name` varchar(40) NOT NULL DEFAULT 'Track',
  `o_lab` varchar(25) NOT NULL DEFAULT 'default.jpg',
  `o_author` varchar(25) NOT NULL,
  `o_group` varchar(25) NOT NULL,
  `o_url` varchar(100) NOT NULL,
  `o_info` varchar(500) NOT NULL,
  `o_album` varchar(40) NOT NULL,
  `o_tag` varchar(200) NOT NULL,
  `o_date` date NOT NULL,
  `o_genre` varchar(100) NOT NULL,
  `o_p.label` varchar(25) NOT NULL,
  `o_musican` varchar(50) NOT NULL,
  `o_arrange` varchar(50) NOT NULL,
  `o_lenth` varchar(10) NOT NULL DEFAULT '0:00',
  `full_likes` int(5) NOT NULL DEFAULT '0',
  `full_plays` int(25) NOT NULL DEFAULT '0',
  `type_dost` int(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `o_track`
--

INSERT INTO `o_track` (`id`, `o_name`, `o_lab`, `o_author`, `o_group`, `o_url`, `o_info`, `o_album`, `o_tag`, `o_date`, `o_genre`, `o_p.label`, `o_musican`, `o_arrange`, `o_lenth`, `full_likes`, `full_plays`, `type_dost`) VALUES
(1, 'Cult', 'goddness28069.jpeg', 'goddness', 'goddness', '112009', '...', 'Summer', '', '0000-00-00', 'Pop', '', '', '', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `profile`
--

CREATE TABLE `profile` (
  `id` int(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `rp_opis` varchar(455) NOT NULL DEFAULT '...',
  `kkode` varchar(255) NOT NULL DEFAULT '1',
  `afon` varchar(25) NOT NULL DEFAULT 'default.jpg',
  `avatar` varchar(25) NOT NULL DEFAULT '0.jpg',
  `rating` int(11) NOT NULL DEFAULT '0',
  `contacts` varchar(50) NOT NULL DEFAULT '0',
  `clr1` varchar(10) NOT NULL DEFAULT '86D0C9',
  `clr2` varchar(10) NOT NULL DEFAULT 'FB7157',
  `reg_dt` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `profile`
--

INSERT INTO `profile` (`id`, `login`, `rp_opis`, `kkode`, `afon`, `avatar`, `rating`, `contacts`, `clr1`, `clr2`, `reg_dt`) VALUES
(1, 'goddness', '', '5', 'goddness772414591.png', 'goddness1276143135.png', 1, '', '86D0C9', 'FB7157', ''),
(2, 'babalon', '...', '1', 'babalon529432627.jpeg', 'babalon3150808.jpeg', 0, '0', '86D0C9', 'FB7157', 'data'),
(3, 'Nier', '...', '1', 'Nier1023571463.png', 'Nier1376199740.jpeg', 0, '0', '86D0C9', 'FB7157', '2022-02-17');

-- --------------------------------------------------------

--
-- Структура таблицы `prof_opt`
--

CREATE TABLE `prof_opt` (
  `id` int(11) NOT NULL,
  `f_idprofile` varchar(25) NOT NULL,
  `f_up` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `prof_opt`
--

INSERT INTO `prof_opt` (`id`, `f_idprofile`, `f_up`) VALUES
(3, 'goddness', '-312.28'),
(4, 'Nier', '-618.64');

-- --------------------------------------------------------

--
-- Структура таблицы `prof_opt2`
--

CREATE TABLE `prof_opt2` (
  `id` int(11) NOT NULL,
  `a_idprofile` varchar(25) NOT NULL,
  `a_up` varchar(5) NOT NULL DEFAULT '0',
  `a_left` varchar(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `r_default`
--

CREATE TABLE `r_default` (
  `id` int(11) NOT NULL,
  `rp_name` varchar(25) NOT NULL,
  `rp_opis` varchar(255) NOT NULL,
  `rp_description` varchar(255) NOT NULL,
  `rp_keywords` varchar(255) NOT NULL,
  `rp_logo` varchar(50) NOT NULL,
  `rp_logo_tit` varchar(50) NOT NULL,
  `rp_logo_ico` varchar(50) NOT NULL,
  `rp_inst` varchar(30) NOT NULL,
  `rp_twitter` varchar(30) NOT NULL,
  `rp_facebook` varchar(30) NOT NULL,
  `rp_mail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `r_default`
--

INSERT INTO `r_default` (`id`, `rp_name`, `rp_opis`, `rp_description`, `rp_keywords`, `rp_logo`, `rp_logo_tit`, `rp_logo_ico`, `rp_inst`, `rp_twitter`, `rp_facebook`, `rp_mail`) VALUES
(1, 'MCcloud', 'music portal', '', '', '82.jpg', 'wcloud1.png', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `npi` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`, `npi`) VALUES
(1, 'goddness', '60bd6e821957c0e5a6ea5c838c055ab3', '', ''),
(2, 'babalon', 'aa2983ad4e2078c2d72e75caebf8251e', 'example@mail.com', '127.0.0.1'),
(3, 'Nier', '5b1309b46fd20674631bfe4d207f4265', 'example@mail.com', '127.0.0.1');

-- --------------------------------------------------------

--
-- Структура таблицы `zayavk`
--

CREATE TABLE `zayavk` (
  `id` int(25) NOT NULL,
  `h_nick` varchar(25) NOT NULL,
  `h_tema` varchar(50) NOT NULL,
  `h_razd` varchar(25) NOT NULL,
  `h_text` varchar(1500) NOT NULL,
  `h_k_an` int(3) NOT NULL,
  `h_date` date NOT NULL,
  `heal` int(5) NOT NULL DEFAULT '0',
  `max_hale` int(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `zayavk`
--

INSERT INTO `zayavk` (`id`, `h_nick`, `h_tema`, `h_razd`, `h_text`, `h_k_an`, `h_date`, `heal`, `max_hale`) VALUES
(1, 'Musiccloud team', 'what is musiccloud', 'get started', '\r\nMusicCloud is the social sound platform where anyone can listen to or upload sounds for Octavia and share them other players warframe.\r\n\r\nWhy is our site similar to soundcloud? It\'s simple. We believe that it will be easier for users to navigate in a familiar environment. We can not be considered it competitors, because we have different direction and purpose.\r\n', 0, '2017-05-09', 0, 0),
(2, 'MusicCloud team', 'Your Display Name and Profile URL', 'account', '\r\nAt the moment, other users can search for you on MusicCloud only on the tracks downloaded to the resource. If you have not added any music to your profile, it will be difficult to find your profile.\r\n\r\nYou can\'t change your display name and profile URL. On your profile page will be display your nickname, that you taken on registration.\r\n\r\n\r\n', 0, '2017-05-08', 0, 0),
(3, 'MusicCloud team', 'Profile image and header', 'account', '\r\nProfile Image\r\n\r\nHelp Your Friends Recognize You. We Accept Any Images Up To 2mb In Size. For The Best Results, We Recommend Uploading A .Jpg Or .Png Of 1x1(Height = Width).\r\nYou Can Add Or Change Your Profile\'s Image Either Directly On Your Profile Page.\r\n<video id=\"sample_webm\" style=\"height:382px;width:100%;top:-25px !important;\" src=\"../../content/help_vid/change_avatar.webm\" preload=\"\" autoplay=\"\" loop=\"\"></video>\r\nClick On Your Profile Image. From There, Choose The File Saved On Your Computer And Click \'Save\'.\r\nThere Is Not A Way To Delete A Profile Image From Your Account. However, If You Are Unhappy With Your Profile Image, You Can Easily Change It To Something Else.\r\nProfile Avatars Are Circular In Order To Differentiate From Track And Playlist Artwork.\r\n\r\nProfile Header\r\n\r\nAt The Moment, Uploading The Profile Header Is Not Available. \r\n', 0, '2017-05-08', 0, 0),
(4, 'MusicCloud team', 'Creating an Album', 'tracks', '\r\nAt the moment, this function is not avaible.\r\n\r\n', 0, '2017-05-08', 0, 1),
(5, 'MusicCloud team', 'Uploading', 'tracks', '\r\nAnyone can upload their tracks to MusicCloud. \r\nUploads are Web only\r\n<video id=\"sample_webm\" style=\"height:382px;width:100%;top:-25px !important;\" src=\"../../content/help_vid/upload_track.webm\" preload=\"\" autoplay=\"\" loop=\"\"></video>\r\nYou can only upload tracks via a computer. \r\nBy uploading, you confirm that your tracks don\'t infringe on anyone else\'s rights.\r\n', 0, '2017-05-08', 0, 0),
(6, 'MusicCloud team', 'Messaging', 'account', '\r\nAt the moment, this function is not avaible.\r\n\r\n', 0, '2017-05-08', 2, 2),
(7, 'MusicCloud team', 'Commenting', 'account', '\r\nAs a fan, give immediate feedback to your favorite creators. Creators, tell your followers how much you appreciate them. Comments drive creative connection for all users. \r\n\r\nLeaving a Comment\r\n<video style=\"height:382px;width:100%;\" src=\"../../content/help_vid/add_comm.webm\" preload=\"\" autoplay=\"\" loop=\"\"></video>\r\nYou can write a comment on a track through the text box below the waveform that says \'Write a comment...\' and press your return.\r\n\r\nReply to comment\r\n<video style=\"height:382px;width:100%;\" src=\"../../content/help_vid/add_reply.webm\" preload=\"\" autoplay=\"\" loop=\"\"></video>\r\nTo reply to a comment, hover the cursor over it, you\'ll see a replica button appear below. Clicking on it will appear the form of adding a comment. When you have finished typing the text, press the \"Enter\" key on the keyboard. You can visit a commenter\'s profile by clicking their Display Name.\r\n', 0, '2017-05-08', 1, 1),
(8, 'MusicCloud team', 'Follower', 'account', '\r\nFollowing other people on MusicCloud\r\n\r\nYou can follow anyone on MusicCloud by clicking the \'Follow\' button on the right hand side underneath their Profile Header image.\r\n\r\nYou can see everyone that follows you on your profile page under \'Followers\'. \r\n\r\n<img src=\'../../content/help_pic/followers.png\'>\r\n\r\nHow to unfollow\r\n\r\nTo stop following someone, simply click the \'unFollow\' button that appears to be  \'Follow\' button again. The person will not be notified of your decision.\r\n', 0, '2017-05-08', 1, 1),
(9, 'MusicCloud team', 'Likes', 'tracks', '\r\nLiking tracks or playlists\r\n\r\nLike any track let its creator know their work is appreciated. Click the Likes button below any tracks to add it to your Likes. \r\n\r\n<img src=\'../../content/help_pic/likes.png\'>\r\n', 0, '2017-05-08', 1, 1),
(10, 'MusicCloud team', 'Unable to play tracks', 'tracks', '\r\nIf you are unable to play any tracks on MusicCloud, please follow the steps below:\r\n<ul>\r\n<li>Try refreshing the page. In most cases, playback hiccups are only temporary. \r\n<li>Check our Blog for news and updates on any service interruptions that may be occurring.\r\n<li>Clear your browser\'s cache and cookies, and then restart it.\r\n<li>Check to make sure you have the latest version of your browser, and Flash installed.\r\n<li>Disable any extensions or ad-blocking plugins that could be blocking SoundCloud from working properly and add soundcloud.com to the exceptions list in the plug-in settings of your browser.\r\n<li>Try a different browser (such as Firefox, or Chrome) to see if it is a local issue on your browser.\r\n</ul>\r\n', 0, '2017-05-08', 2, 2),
(11, 'MusicCloud team', 'Search on MusicCloud', 'get started', '\r\nAt the top of our website and on the first page you will find our search bar that will help you find the tracks that interest you.\r\n\r\n<img src=\'../../content/help_pic/search.png\'>\r\n\r\nAfter the search is performed, on the search results page you can filter the tracks into two categories: Those who received the most likes and the last ones added to the site. At this time, there are no more categories for filtering.\r\n\r\nMusicCloud results\r\n\r\n<img src=\'../../content/help_pic/searching.png\'>\r\n', 0, '2017-05-09', 1, 1),
(12, 'MusicCloud team', 'Mandachord', 'tracks', '\r\nOne of the important features of Warframe is the mandachord system. Each user can now not only share their audio recordings with friends, but also the mandachord track.\r\n\r\n<video id=\"sample_webm\" style=\"height:382px;width:100%;top:-25px !important;\" src=\"../../content/help_vid/mandachord.webm\" preload=\"\" autoplay=\"\" loop=\"\"></video>\r\n\r\nTo share the Mendakord with others, it must first be created. The user who uploaded the track must go to the track page and click the \"Edit M.\" button.\r\n\r\n<video id=\"sample_webm\" style=\"height:382px;width:100%;top:-25px !important;\" src=\"../../content/help_vid/Add_and_edit_mandachord.webm\" preload=\"\" autoplay=\"\" loop=\"\"></video>', 0, '2017-05-08', 1, 1),
(13, 'MusicCloud team', 'Bugs', 'bugs', '\r\nAt the moment, the resource is still being created. You should understand that the site can sometimes break down or give out errors. If you find a bug, vulnerability or bug please contact us at support@MusicCloud.com\r\n', 0, '2017-05-30', 2, 3),
(14, 'MusicCloud team', 'Copyright', 'security', '\r\ncoming soon ...\r\n\r\n\r\n', 0, '2017-05-30', 1, 2),
(15, 'MusicCloud team', 'Account security', 'security', '\r\ncoming soon ...\r\n\r\n\r\n', 0, '2017-05-30', 1, 1),
(16, 'Musiccloud team', 'Basic rules', 'rules', 'Do not do any of the following:\r\n<ul>\r\n<li>Flame or insult other members\r\n<li>Abuse or encourage abuse of the Post Reporting System\r\n<li>Derail a thread\'s topic\r\n<li>Post links to phishing sites\r\n<li>Post spam (i.e. +1, 10char, rickrolls) \r\n<li>Repetitively post in the incorrect themes \r\n<li>Openly argue with a moderator\r\n<li>Artificially manipulate the User like system or rupor system\r\n</ul>\r\n\r\nContent Rules\r\nDo not post any content on Steam containing the following:\r\n<ul>\r\n<li>Porn, offensive content\r\n<li>Discussion of piracy including\r\n<li>Threats of violence or harassment, even as a joke\r\n<li>Posted copyright material such as magazine scans\r\n<li>Soliciting, begging,  referrals\r\n<li>Racism, discrimination\r\n<li>Abusive language, including swearing\r\n<li>Drugs and alcohol\r\n<li>Religious, political, and other “prone to huge arguments” threads\r\n</ul>\r\nNo Backseat Moderating\r\nLet the moderators do the moderating. If you see a person breaking the rules, take advantage of the Report button or simply ignore the offensive post(s). \r\n\r\nReport Posts to Moderators\r\nShould you observe a fellow Community member breaking these rules please report it by clicking the Report button located on every profile pages.\r\n\r\nRepeated Offenders\r\nRepeated offenders of the above rules and guidelines will be banned from the Musiccloud Community. Any moderator has the ability to ban a user for violating the rules at their discretion.', 0, '2017-05-30', 1, 1),
(17, 'Musiccloud team', 'Online conduct', 'rules', 'You agree to abide by the following conduct rules.\r\n\r\nYou will not:\r\n<ul>\r\n<li>Upload, or otherwise make available, files that contain images, photographs, or other material protected by intellectual property laws, including, by way of example, and not as limitation, copyright or trademark laws (or by rights of privacy or publicity) unless you own or control the rights thereto or have received all necessary consents to do the same.\r\n<li>Use any material or information, including images or photographs, via Musiccloud in any manner that infringes any copyright, trademark, patent, trade secret, or other proprietary right of any party.\r\n<li>Upload files that contain viruses, trojan horses, worms, or any other similar software or programs that may damage the operation of another\'s computer or property of another.\r\n<li>Institute attacks upon a Musiccloud server or otherwise disrupt Musiccloud.\r\n<li>Use Musiccloud in connection with surveys, contests, pyramid schemes, chain letters, junk email, spamming or any duplicative or unsolicited messages (commercial or otherwise).\r\n<li>Defame, abuse, harass, stalk, threaten or otherwise violate the legal rights (such as rights of privacy and publicity) of others.\r\n<li>Harvest or otherwise collect information about others, including e-mail addresses.\r\n<li>Create a false identity for the purpose of misleading others.\r\n<li>Violate any applicable laws or regulations.\r\n</ul>', 0, '2017-05-30', 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `za_usl`
--

CREATE TABLE `za_usl` (
  `id` int(25) NOT NULL,
  `z_nick` varchar(25) NOT NULL,
  `z_id` int(5) NOT NULL,
  `z_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `z_mess`
--

CREATE TABLE `z_mess` (
  `id` int(25) NOT NULL,
  `r_author` varchar(25) NOT NULL,
  `r_master` varchar(25) NOT NULL,
  `r_text` varchar(500) NOT NULL,
  `r_ip` varchar(25) NOT NULL,
  `r_date` date NOT NULL,
  `chit` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `z_mess`
--

INSERT INTO `z_mess` (`id`, `r_author`, `r_master`, `r_text`, `r_ip`, `r_date`, `chit`) VALUES
(1, 'Nier', 'goddness', 'hi, this is test mess', '', '2022-02-17', '1');

-- --------------------------------------------------------

--
-- Структура таблицы `z_report`
--

CREATE TABLE `z_report` (
  `id` int(25) NOT NULL,
  `r_author` varchar(25) NOT NULL,
  `r_master` varchar(25) NOT NULL,
  `r_type` int(2) NOT NULL,
  `r_text` varchar(500) NOT NULL,
  `r_ip` varchar(25) NOT NULL,
  `r_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `o_album`
--
ALTER TABLE `o_album`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `o_board`
--
ALTER TABLE `o_board`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `o_comments`
--
ALTER TABLE `o_comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `o_favorite`
--
ALTER TABLE `o_favorite`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `o_followers`
--
ALTER TABLE `o_followers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `o_like`
--
ALTER TABLE `o_like`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `o_playlist`
--
ALTER TABLE `o_playlist`
  ADD PRIMARY KEY (`pl_id`);

--
-- Индексы таблицы `o_pltrack`
--
ALTER TABLE `o_pltrack`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `o_titul`
--
ALTER TABLE `o_titul`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `o_track`
--
ALTER TABLE `o_track`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `prof_opt`
--
ALTER TABLE `prof_opt`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `prof_opt2`
--
ALTER TABLE `prof_opt2`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `r_default`
--
ALTER TABLE `r_default`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `zayavk`
--
ALTER TABLE `zayavk`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `za_usl`
--
ALTER TABLE `za_usl`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `z_mess`
--
ALTER TABLE `z_mess`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `z_report`
--
ALTER TABLE `z_report`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `o_album`
--
ALTER TABLE `o_album`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `o_board`
--
ALTER TABLE `o_board`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `o_comments`
--
ALTER TABLE `o_comments`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `o_favorite`
--
ALTER TABLE `o_favorite`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `o_followers`
--
ALTER TABLE `o_followers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `o_like`
--
ALTER TABLE `o_like`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `o_playlist`
--
ALTER TABLE `o_playlist`
  MODIFY `pl_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `o_pltrack`
--
ALTER TABLE `o_pltrack`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `o_titul`
--
ALTER TABLE `o_titul`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `o_track`
--
ALTER TABLE `o_track`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `prof_opt`
--
ALTER TABLE `prof_opt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `prof_opt2`
--
ALTER TABLE `prof_opt2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `r_default`
--
ALTER TABLE `r_default`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `zayavk`
--
ALTER TABLE `zayavk`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT для таблицы `za_usl`
--
ALTER TABLE `za_usl`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `z_mess`
--
ALTER TABLE `z_mess`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `z_report`
--
ALTER TABLE `z_report`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
