-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2012 年 04 月 08 日 10:09
-- 服务器版本: 5.5.16
-- PHP 版本: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `bookstore`
--

-- --------------------------------------------------------

--
-- 表的结构 `bookitem`
--

CREATE TABLE IF NOT EXISTS `bookitem` (
  `b_id` int(20) NOT NULL AUTO_INCREMENT,
  `b_name` char(20) NOT NULL,
  `b_auther` char(20) NOT NULL,
  `b_price` float NOT NULL,
  `b_press` char(30) NOT NULL,
  `b_image` char(20) NOT NULL,
  `b_count` int(10) NOT NULL,
  `b_profile` text NOT NULL,
  `clacify` char(20) NOT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `bookitem`
--

INSERT INTO `bookitem` (`b_id`, `b_name`, `b_auther`, `b_price`, `b_press`, `b_image`, `b_count`, `b_profile`, `clacify`) VALUES
(2, 'php5Óëmysql5´ÓÈëÃÅµ½', 'ÎÀ†´ ³ÂÕùº½', 61, 'µç×Ó¹¤Òµ³ö°æÉç', 'pm5.jpg', 10, '    ±¾Êé²ÉÓÃÑ­Ðò½¥½øµÄ·½·¨½éÉÜÁËÓÃPHP5ÓëMysql5½øÐÐWeb³ÌÐòÉè¼ÆµÄ»ù´¡ÖªÊ¶£¬°üÀ¨·þÎñÆ÷»·¾³µÄ¹¹½¨£¬PHP»ù±¾Óï·¨£¬³£ÓÃPHPº¯Êý¿âµÄÊ¹ÓÃ·½·¨£¬Mysql5°²×°¡¢ÅäÖÃ·½·¨£¬SQLÓï·¨£¬phpMyAdminµÄÅäÖÃÊ¹ÓÃ£¬phpÄ£°åSmarty£¬phpÓëAjax½áºÏÊ¹ÓÃ£¬MysqlÊÓÍ¼£¬´æ´¢¹ý³ÌµÈ¡£', 'µçÄÔ¼¼Êõ'),
(3, '¿¼ÑÐÓ¢Óï´Ê»ãºì±¦Êé', '¿¼ÑÐÓ¢ÓïÃüÌâÑÐ¾¿×é', 43.8, 'Î÷±±´óÑ§³ö°æÉç', 'hbs.jpg', 20, '    ±¾ÊéÑÏ¸ñ°´ÕÕ¿¼ÑÐÓ¢Óï×îÐÂ´ó¸ÙÒªÇó£¬ÔËÓÃÓ¢Óï²âÊÔÑ§¼°Í³¼ÆÔ­Àí£¬ÔÚÉîÈëÑÐ¾¿ÀúÄêÕæÌâ¼°¿¼ÑÐÓ¢ÓïÃüÌâ¹æÂÉµÄ»ù´¡ÉÏ£¬¶Ô¿¼ÑÐÓ¢Óï´ó¸Ù´Ê»ã½øÐÐÁËÉîÈëµÄ·ÖÎöºÍÑÐ¾¿£¬½«¿¼ÑÐ´Ê»ã°´ÆäÖØÒª³Ì¶ÈÇø·ÖÎª£º±Ø¿¼´Ê¡¢»ù´¡´Ê¡¢³¬¸Ù´ÊµÈ£¬²¢ÇÒÖØµãÍ»³ö±Ø¿¼´Ê£¬ÉîÈëÆÊÎö±Ø¿¼´Ê£¬·´¸´Á·Ï°±Ø¿¼´Ê¡£Ê¹¿¼ÉúÄÜ¹»·ÖÇåÖ÷´Î£¬²¢×¥×¡¿¼ÑÐ´Ê»ãµÄÖØÖÐÖ®ÖØ£¬Ê¡Ê±Ê¡Á¦¡£', 'Ó¢ÓïÑ§Ï°'),
(4, 'Ê·µÙ·ò¡£ÇÇ²¼Ë¹´«', '[ÃÀ]ÎÖ¶ûÌØ¡£°¬Èø¿ËÉ­', 68, 'ÖÐÐÅ³ö°æÉç', 'qbs.jpg', 100, 'Ê·µÙ·ò¡£ÇÅ²»É«ÓÐÈç¹ýÉ½³µ°ã¾«²ÊµÄÈËÉúºÍÖËÈÈ¼¤Ô½µÄÐÔ¸ñ³É¾ÍÁËÒ»¸ö´«Ææ£¬Ò»¸ö¼«¾ß´´ÔìÁ¦µÄÆóÒµÁìÐä£¬Ëû×·ÇóÍêÃÀºÍÊÄ²»°ÕÐÝµÄ¼¤ÇéÊ¹¸öÈËµçÄÔ¡¢¶¯»­µçÓ°¡¢ÒôÀÖ¡¢ÒÆ¶¯µç»°¡¢Æ½°åµçÄÔÒÔ¼°Êý×Ö³ö°æµÈ6´ó²úÒµ·¢ÉúÁËµß¸²ÐÔ±ä¸ï', 'ÈËÎï´«¼Ç'),
(5, '¶àÃ´ÃÀµÄÁìÎò', 'ÔÝÎÞ', 26.8, 'ÎÄ»¯ÒÕÊõ³ö°æÉç', 'lw.jpg', 30, 'ÎÒÃÇÌ«ÈÝÒ×Ï°¹ßÓÚÐÄµÄÀÁ¶è£¬³£³£±»±íÃæµÄ»î¶¯ËùÑÚ¸Ç£¬¿´ÇåÁËÊÀÊÂµÄ±¾ÖÊÊÇÊ±Ê±¿Ì¿ÌµÄ±ä»¯£¬Äã¾Í²»»áÔÚËü±ä»¯µÄÊ±ºò´ëÊÖ²»¼°£¬°®Ï§¹âÒõ£¬¾ÍÒª²»¶ÏµØÅ¬Á¦È¥×öÓÐÒæµÄÊÂÇé£¬Í£Ö¹ÎÞÒæµÄ»î¶¯£¬ÐÞ¡°ÐÄ¡±µÄÖ÷ÒªÄ¿µÄ£¬ÊÇÈÃÄãÄÜ¹»×ÔÔÚµØ´´ÔìÉíÐÄ£¬Ê¹Äã²»ÔÙ³ÉÎªÏ°ÐÔµÄÎþÉüÆ·¡£', 'ÒæÖÇÐÝÏÐ'),
(8, ' ÊýÑ§¸´Ï°È«Êé', 'ÀîÕýÔª¡¢ÀîÓÀÀÖ', 59.8, '¹ú¼ÒÐÐÕþÑ§Ôº³ö°æÉç', 'fuxi.jpg', 1000, '¡¶±±´óÑàÔ°&#8226;ÀîÓÀÀÖ&#8226;ÀîÕýÔª¿¼ÑÐÊýÑ§1:ÊýÑ§¸´Ï°È«ÊéÏ°ÌâÈ«½â(ÊýÑ§1)(2013Äê)¡·ÄÚÈÝ¼ò½é£º\r\n\r\n2011Äê°æÊÇÔÚ2010Äê°æµÄ»ù´¡ÉÏ½øÐÐÐÞ¶©µÄ£¬¸ü¼ÓÍêÉÆ£¬¸ü¾ßÓÐÕë¶ÔÐÔºÍÊÊÓÃÐÔ¡£¸ßµÈÊýÑ§²¿\r\n\r\n·Ö£º°´¿¼ÊÔ´ó¸ÙµÄÒªÇó¼°¾ø´ó¶àÊý¿¼ÉúÏµÍ³¸´Ï°µÄÐèÒª£¬¡¶±±´óÑàÔ°&#8226;2012ÄêÀîÓÀÀÖ&#8226;ÀîÕýÔª¿¼\r\n\r\nÑÐÊýÑ§1:ÊýÑ§¸´Ï°È«Êé£¨ÊýÑ§1£©£¨Àí¹¤Àà£©¡·½øÐÐÁËµ÷Õû£¬×ÚÖ¼ÊÇÖØµãÄÚÈÝÖØµã½²½â£¬Èç£º\r\n\r\nÇó¼«ÏÞµÄ·½·¨£¬Çó»ý·Ö£¨Ò»Ôª¡¢¶àÔªº¯Êý£©µÄ·½·¨£¬Å£¶ÙÒ»À³²¼Äá×È¹«Ê½¼°ÆäÓ¦ÓÃ£¬¶þÖØ»ý·Ö\r\n\r\nµÄ¼ÆËãÓëÓ¦ÓÃ£¬Ì©ÀÕ¹«Ê½¼°ÆäÓ¦ÓÃ£¬ÇóÃÝ¼¶ÊýµÄÊÕÁ²Óò»òÊÕÁ²Çø¼ä£¬ÃÝ¼¶ÊýµÄÇóºÍ£¬Çóº¯ÊýµÄ\r\n\r\nÃÝ¼¶ÊýÕ¹¿ªÊ½µÈµ¥¶À·ÖÀë³öÀ´½øÐÐ¾ÙÀý½²½â£¬Í¬Ê±µ÷»»²¢Ôö¼ÓÁËÈô¸ÉµäÐÍÀýÌâ£¬²¢ÐÞ¸ÄÁË²¿·Ö\r\n\r\nÀýÌâµÄ½â·¨£¬Ê¹Ö®¸ü¼ò½Ý£¬¸üÒ×ÕÆÎÕ¡£ÏßÐÔ´úÊý²¿·Ö£ºÖ÷ÒªÊÇÕë¶ÔÒ»Ð©ÖØµã¸ÅÄîºÍ¹«Ê½µÄÔËÓÃ\r\n\r\n£¬µ÷»»²¢Ôö¼ÓÁËÈô¸ÉÀýÌâ½øÐÐ½²½â£¬Ê¹¿¼Éú¶ÔÕâÐ©ÖØµã¸ÅÄîºÍ¹«Ê½ÄÜ³¹µ×Àí½â¡¢³ÔÍ¸£¬¶ÔÒ»Ð©\r\n\r\n³£¿¼ÌâÐÍ£¬Èç£º³éÏóÐÐÁÐÊ½µÄ¼ÆËã£¬ÓÐ¹Ø°éËæ¾ØÕóµÄÃüÌâ£¬n½×¾ØÕóµÄÌØÕ÷ÖµºÍÌØÕ÷ÏòÁ¿ÒÔ¼°\r\n\r\nÏßÐÔÏà¹ØÓëÎÞ¹ØµÄÖ¤Ã÷¡¢»ù´¡½âÏµµÄÖ¤Ã÷µÈÌâÐÍµÄ½âÌâ·½·¨ºÍ¼¼ÇÉ½øÒ»²½×÷ÁË½ÏÏê¾¡µÄ¹éÄÉ×Ü\r\n\r\n½á£¬²¢¸øµäÐÍÀýÌâ½øÐÐ½²½â£¬Ïû³ý¿¼Éú¶ÔÕâÐ©ÖØÒª¸ÅÄîºÍ¹«Ê½µÄÔËÓÃºÍ³£¿¼ÌâÐÍ½âÌâ·½·¨µÄÒÉ\r\n\r\n»ó£¬ÒÔ±ã¿¼ÉúÔÚ¿¼ÊÔÖÐÓ¦¶Ô×ÔÈç£¬Ìá¸ßÓ¦ÊÔË®Æ½¡£¸ÅÂÊÍ³¼Æ²¿·Ö£ºÓë¸ßµÈÊýÑ§²¿·ÖÒ»ÑùÒ²½øÐÐ\r\n\r\nÁËµ÷Õû£¬µ÷Õûºó¸üÊÊºÏ¿¼Éú½øÐÐÏµÍ³¸´Ï°£¬Í¬Ê±¶ÔÖØµã¸ÅÄî¡¢¹«Ê½ºÍ³£¿¼ÌâÐÍ´Ó¶à½Ç¶ÈÃüÖÆµä\r\n\r\nÐÍÀýÌâ½øÐÐ½²½â£¬ÒÔÌá¸ß¿¼ÉúÔËÓÃ¸ÅÄî¡¢¹«Ê½×ÛºÏ·ÖÎöÄÜÁ¦£¬´Ó¶øÈ¡µÃºÃ³É¼¨¡£', 'ÒæÖÇÐÝÏÐ'),
(9, 'LinuxÄÚºËÉè¼ÆµÄÒÕÊõ', 'ÐÂÉè¼ÆÍÅ¶Ó', 79, '»úÐµ³ö°æÉç', 'linux.jpg', 200, '¡¶LinuxÄÚºËÉè¼ÆµÄÒÕÊõ:Í¼½âLinux²Ù×÷ÏµÍ³¼Ü¹¹Éè¼ÆÓëÊµÏÖÔ­Àí¡·ÄÚÈÝ¼ò½é£º¹ØÓÚLinuxÄÚ\r\n\r\nºËµÄÊéÒÑ¾­²»¼ÆÆäÊý£¬µ«¡¶LinuxÄÚºËÉè¼ÆµÄÒÕÊõ¡·È´ÊÇ¶ÀÊ÷Ò»ÖÄµÄ£¬ËüµÄÄÚÈÝ´ú±í×ÅLinuxÄÚ\r\n\r\nºËÑÐ¾¿³É¹ûµÄÊÀ½ç¶¥¼â¼¶Ë®Æ½£¬ËüÔÚÊÀ½ç·¶Î§ÄÚÊ×´ÎÌá³ö²¢²ûÊöÁË²Ù×÷ÏµÍ³Éè¼ÆµÄºËÐÄÖ¸µ¼Ë¼\r\n\r\nÏë¡ª¡ªÖ÷Å«»úÖÆ£¬ÕâÊÇËùÓÐ²Ù×÷ÏµÍ³ÑÐ¾¿ÕßµÄÒ»±Ê±¦¹ó²Æ¸»¡£±¾Êé¿ÉÄÜÒ²´ú±í×ÅÍ¬ÀàÍ¼ÊéµÄ¶¥\r\n\r\n¼âË®Æ½£¬ÊÇÒ»±¾ÕæÕýÄÜÒýµ¼ÎÒÃÇ½ÏÎªÈÝÒ×µØ¡¢¼«ÎªÍ¸³¹µØÀí½âLinuxÄÚºËµÄ¾­µäÖ®×÷£¬Ò²¿ÉÄÜ\r\n\r\nÊÇµ±Ç°Î¨Ò»ÄÜ´Ó±¾ÖÊÉÏÖ¸ÒýÎÒÃÇÈ¥Éè¼ÆºÍ¿ª·¢ÓµÓÐ×ÔÖ÷ÖªÊ¶²úÈ¨µÄ²Ù×÷ÏµÍ³µÄÖø×÷¡£ËüµÄ³ö°æ\r\n\r\nÒ²Ðí»á³ÉÎªLinuxÄÚºËÑÐ¾¿ÁìÓòµÄÒ»¸öÀï³Ì±®ÊÂ¼þ¡£¡¶LinuxÄÚºËÉè¼ÆµÄÒÕÊõ:Í¼½âLinux²Ù×÷Ïµ\r\n\r\nÍ³¼Ü¹¹Éè¼ÆÓëÊµÏÖÔ­Àí¡·µÄ×î´óÌØµãÊÇËüµÄÐ´×÷·½Ê½ºÍÄÚÈÝ×éÖ¯·½Ê½£¬ÓëÍ¬ÀàÊéÍêÈ«²»Í¬¡£Ëü\r\n\r\nÔÚÉî¿ÌµØ·ÖÎöÁË´«Í³½²½â·½·¨µÄÀû±×Ö®ºó£¬ÆÆ¾ÉÁ¢ÐÂ£¬´ÓÈÏÖªÑ§µÄ½Ç¶È¿ª´´ÁËÒ»ÖÖÈ«ÐÂµÄ·½Ê½\r\n\r\n¡£ÒÔ²Ù×÷ÏµÍ³µÄÕæÊµÔËÐÐ¹ý³ÌÎªÖ÷Ïß£¬½áºÏÕæÊµµÄÄÚºËÔ´´úÂë¡¢349·ù¾«È·µÄÄÚºËÔËÐÐÊ±ÐòÍ¼\r\n\r\nºÍ¾ßÓÐµã¾¦Ö®ÃîµÄÎÄ×ÖËµÃ÷£¬¶Ô²Ù×÷ÏµÍ³´Ó¿ª»ú¼Óµçµ½ÏµÍ³ÍêÈ«×¼±¸¾ÍÐ÷µÄÕû¸ö¹ý³Ì½øÐÐÁËÏµ\r\n\r\nÍ³¶øÍêÕûµØ·ÖÎö£¬Éî¿ÌµØ½ÒÊ¾ÁËÆä¼äÃ¿Ò»¸ö¶¯×÷µÄÉè¼ÆÒâÍ¼ºÍÊµÏÖÔ­Àí£¬ÍêÃÀµØÔÙÏÖÁË²Ù×÷Ïµ\r\n\r\nÍ³Éè¼ÆÕßµÄÉè¼ÆË¼Â·¡£ÔÄ¶Á±¾Êé¾ÍÈçÍ¬¸úËæ×Å²Ù×÷ÏµÍ³Éè¼ÆÕßÒ»ÆðÈ¥Ë¼¿¼£¬ÎÒÃÇ»áÔÚÔÄ¶ÁµÄ¹ý\r\n\r\n³ÌÖÐ·¢ÏÖLinuxÄÚºËÉè¼ÆµÄ¾«Ãî£¬»á·¢ÏÖÔ­À´´¦´¦¶¼¡°°µ²ØÐþ»ú¡±£¬ÄÄÅÂÊÇÒ»ÐÐºÜ¶ÌµÄ´úÂë¡£\r\n\r\n¡¶LinuxÄÚºËÉè¼ÆµÄÒÕÊõ:Í¼½âLinux²Ù×÷ÏµÍ³¼Ü¹¹Éè¼ÆÓëÊµÏÖÔ­Àí¡·ÔÚËùÓÐÏ¸½ÚÉÏ¶¼Á¦ÇóÍêÃÀ\r\n\r\n¡£ÎªÁË±£Ö¤ÖªÊ¶µÄ×¼È·ÐÔ£¬²Ù×÷ÏµÍ³ÔËÐÐ¹ý³ÌÖÐµÄÃ¿¸ö¶¯×÷¶¼¾­¹ýÁËÑÏ¸ñµÄ¿¼Ö¤£»ÎªÁËÈÃÎÒÃÇ\r\n\r\nÕæÕýÀí½âLinuxÄÚºËµÄÔ­Àí£¬ËüÍ»ÆÆ´«Í³£¬ÒÔLinuxµÄÕæÊµÔËÐÐ¹ý³ÌÎªÖ÷Ïß½øÐÐ½²½â£»ÎªÁË×öµ½\r\n\r\nÕæÕýÒ×ÓÚÀí½â£¬´´ÐÂÐÔµØÊ¹ÓÃÁËÍ¼½âµÄ·½Ê½£¬¾«ÐÄ»æÖÆÁË349·ù·Ö±æÂÊ600dpiµÄÊ±ÐòÍ¼£¬Í¼ÖÐ\r\n\r\n±íÏÖµÄÔËÐÐÊ±½á¹¹ºÍ×´Ì¬Óë²Ù×÷ÏµÍ³Êµ¼ÊÔËÐÐÊ±µÄÕæÊµ×´Ì¬ÍêÈ«ÎÇºÏ£»ÎªÁËÌá¸ßÔÄ¶ÁÌåÑé£¬±¾\r\n\r\nÊé²ÉÓÃÁËË«É«Ó¡Ë¢£¬ÒÔ±ãÓÚÎÒÃÇ¸üÇå³þµØ¹Û²ìÃ¿Ò»·ùÍ¼ÖÐµÄÏ¸½Ú¡£ ', 'µçÄÔ¼¼Êõ');

-- --------------------------------------------------------

--
-- 表的结构 `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `c_id` int(10) NOT NULL AUTO_INCREMENT,
  `c_name` char(50) NOT NULL,
  `c_password` int(20) NOT NULL,
  `c_email` char(30) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- 转存表中的数据 `customer`
--

INSERT INTO `customer` (`c_id`, `c_name`, `c_password`, `c_email`) VALUES
(25, 'songyingcheng', 123, '1259996968@qq.com'),
(26, 'songying3', 123, '1259996968@qq.com'),
(27, 'chenli', 123, '12@qq.com'),
(28, 'songying123', 0, '12@qq.com');

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `n_id` int(10) NOT NULL AUTO_INCREMENT,
  `n_name` text NOT NULL,
  `n_data` date NOT NULL,
  `n_content` text NOT NULL,
  PRIMARY KEY (`n_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`n_id`, `n_name`, `n_data`, `n_content`) VALUES
(12, 'ÓÉÓÚÍøÕ¾²âÊÔ Öî¶àÊéÄ¿ÉÏÊÐÈÕÆÚ´ý¶¨', '2012-04-03', 'ÊéÄ¿ÉÏÊÐ\r\n'),
(13, 'Ó¢Óï¿¼ÑÐ×ÊÁÏ£ºÓ¢Óï´Ê»ãºì±¦ÊéÈÈÂôÖÐ', '2012-04-03', 'ºì±¦Êé'),
(14, 'php5Óëmysql¼¼Êõweb¿ª·¢ ÈÈÂôÖÐ', '2012-04-03', 'phpÍøÕ¾'),
(15, '½ñÈÕËÉÓ£ÍøÕ¾¶Ô±¾Õ¾½øÐÐÁËÊ×´Î²âÊÔ', '2012-04-03', 'ÍøÕ¾²âÊÔ'),
(17, '½ñÌì½»×÷Òµ', '2012-04-08', '½ñÌì½»×÷Òµ');

-- --------------------------------------------------------

--
-- 表的结构 `notes`
--

CREATE TABLE IF NOT EXISTS `notes` (
  `l_id` int(10) NOT NULL AUTO_INCREMENT,
  `l_tiltle` char(30) NOT NULL,
  `l_content` text NOT NULL,
  `l_data` date NOT NULL,
  PRIMARY KEY (`l_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `notes`
--

INSERT INTO `notes` (`l_id`, `l_tiltle`, `l_content`, `l_data`) VALUES
(1, 'jie mian', 'bu hao\r\n', '2012-03-31'),
(2, 'ÍøÕ¾²»ºÃ', '½çÃæÓÐÎÊÌâ', '2012-04-08');

-- --------------------------------------------------------

--
-- 表的结构 `orderlist`
--

CREATE TABLE IF NOT EXISTS `orderlist` (
  `o_id` int(11) NOT NULL AUTO_INCREMENT,
  `bid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `o_data` date NOT NULL,
  `o_addr` text NOT NULL,
  `o_state` text NOT NULL,
  `o_price` float NOT NULL,
  PRIMARY KEY (`o_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `orderlist`
--

INSERT INTO `orderlist` (`o_id`, `bid`, `cid`, `o_data`, `o_addr`, `o_state`, `o_price`) VALUES
(8, 2, 25, '2012-04-03', ' Î÷°²½»Í¨´óÑ§', 'ÒÑ·¢»õ', 51),
(9, 3, 25, '2012-04-03', ' Î÷°²½»Í¨´óÑ§', 'ÒÑ·¢»õ', 33.8),
(10, 2, 27, '2012-04-04', ' Î÷°²½»Í¨´óÑ§¶«°Ë', '¶©µ¥½áÊø', 51),
(11, 4, 27, '2012-04-10', ' ¶«°ËÎåÂ¥', 'ÒÑ·¢»õ', 58),
(12, 5, 28, '2012-04-08', ' Î÷°²½»´óÎ÷Ò»Â¥', '¶©µ¥½áÊø', 16.8);

-- --------------------------------------------------------

--
-- 表的结构 `ordermanager`
--

CREATE TABLE IF NOT EXISTS `ordermanager` (
  `ordermanager_id` int(20) NOT NULL AUTO_INCREMENT,
  `ordermanager_name` char(20) NOT NULL,
  `ordermanager_password` int(20) NOT NULL,
  `ordermanager_email` char(30) NOT NULL,
  PRIMARY KEY (`ordermanager_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `ordermanager`
--

INSERT INTO `ordermanager` (`ordermanager_id`, `ordermanager_name`, `ordermanager_password`, `ordermanager_email`) VALUES
(12, 'songying2', 123, '1259996968@qq.com'),
(14, 'songying4', 1234, '1259996968@qq.com'),
(15, 'chengzhan', 123, '12@qq.com');

-- --------------------------------------------------------

--
-- 表的结构 `sysmanager`
--

CREATE TABLE IF NOT EXISTS `sysmanager` (
  `sys_id` int(20) NOT NULL AUTO_INCREMENT,
  `sys_name` char(20) NOT NULL,
  `sys_password` text NOT NULL,
  `sys_mobile` char(20) NOT NULL,
  PRIMARY KEY (`sys_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `sysmanager`
--

INSERT INTO `sysmanager` (`sys_id`, `sys_name`, `sys_password`, `sys_mobile`) VALUES
(2, 'songying', 'cheng123', '13669296702');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
