-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2011 年 09 月 05 日 11:51
-- 服务器版本: 5.5.8
-- PHP 版本: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `shop`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `rights` int(1) NOT NULL,
  `loginTime` int(20) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `loginSum` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `rights`, `loginTime`, `ip`, `loginSum`) VALUES
(3, '后盾网', 'admin', 1, 1315219669, '127.0.0.1', 39),
(6, 'mengkai', 'admin', 2, 1314377132, '127.0.0.1', 8),
(7, '后盾网视频教程', '123456789', 2, 0, '', 0),
(8, 'houdunwang', 'admin', 2, 0, '', 0),
(10, 'nihao', 'nihao', 2, 0, '', 0);

-- --------------------------------------------------------

--
-- 表的结构 `adminlog`
--

CREATE TABLE IF NOT EXISTS `adminlog` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `addtime` int(20) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `state` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=77 ;

--
-- 转存表中的数据 `adminlog`
--

INSERT INTO `adminlog` (`id`, `username`, `password`, `addtime`, `ip`, `state`) VALUES
(6, '后盾网', 'admin', 1314085589, '127.0.0.1', '1'),
(7, '后盾网', 'admin', 1314086285, '127.0.0.1', '-1'),
(8, '后盾网', 'admin', 1314086304, '127.0.0.1', '1'),
(9, '后盾网', 'admin888', 1314086351, '127.0.0.1', '-1'),
(10, '后盾网', 'admin', 1314086359, '127.0.0.1', '1'),
(11, '后盾网', 'admin', 1314096309, '127.0.0.1', '1'),
(12, '后盾网', 'admin888', 1314097135, '127.0.0.1', '-1'),
(13, '后盾网', 'admin', 1314097143, '127.0.0.1', '1'),
(14, '后盾网', 'admin', 1314102123, '127.0.0.1', '1'),
(15, '后盾网', 'admin', 1314102832, '127.0.0.1', '1'),
(16, 'mengkai', 'admin', 1314103934, '127.0.0.1', '1'),
(17, '后盾网', 'admin', 1314155265, '127.0.0.1', '1'),
(18, '后盾网', 'admin', 1314155335, '127.0.0.1', '1'),
(19, '后盾网', 'admin', 1314155932, '127.0.0.1', '1'),
(20, '后盾网', 'admin', 1314156296, '127.0.0.1', '1'),
(21, '后盾网', 'admin', 1314156666, '127.0.0.1', '1'),
(22, '后盾网', 'admin', 1314160289, '127.0.0.1', '1'),
(23, '后盾网', 'admin', 1314160322, '127.0.0.1', '1'),
(24, '后盾网', 'admin', 1314165746, '127.0.0.1', '1'),
(25, '后盾网', 'admin', 1314165978, '127.0.0.1', '1'),
(26, '后盾网', 'admin', 1314168869, '127.0.0.1', '1'),
(27, '后盾网', 'admin', 1314168978, '127.0.0.1', '1'),
(28, 'mengkai', 'admin', 1314169107, '127.0.0.1', '1'),
(29, 'mengkai', 'admin', 1314169907, '127.0.0.1', '1'),
(30, '后盾网', 'admin', 1314169956, '127.0.0.1', '1'),
(31, '后盾网', 'admin', 1314176069, '127.0.0.1', '1'),
(32, '后盾网', 'admin888', 1314236139, '127.0.0.1', '-1'),
(33, '后盾网', 'admin', 1314236148, '127.0.0.1', '1'),
(34, '后盾网', 'admin', 1314238724, '127.0.0.1', '1'),
(35, '后盾网', 'admin', 1314244308, '127.0.0.1', '1'),
(36, '后盾网', 'admin', 1314255298, '127.0.0.1', '1'),
(37, '后盾网', 'admin', 1314255479, '127.0.0.1', '1'),
(38, 'mengkai', 'admin', 1314256974, '127.0.0.1', '1'),
(39, '后盾网', 'admin', 1314257308, '127.0.0.1', '1'),
(40, 'mengkai', 'admin', 1314257346, '127.0.0.1', '1'),
(41, '后盾网', 'admin', 1314261116, '127.0.0.1', '1'),
(42, 'mengkai', 'admin', 1314262054, '127.0.0.1', '1'),
(43, '后盾网', 'admin', 1314351825, '127.0.0.1', '1'),
(44, '后盾网', 'admin', 1314364856, '127.0.0.1', '1'),
(45, '后盾网 ', 'admin', 1314365348, '127.0.0.1', '1'),
(46, 'mengkai', 'admin', 1314365778, '127.0.0.1', '1'),
(47, '后盾网', 'admin', 1314369686, '127.0.0.1', '1'),
(48, 'mengkai', 'admin', 1314369730, '127.0.0.1', '1'),
(49, '后盾网', 'admin', 1314375566, '127.0.0.1', '1'),
(50, '后盾网', 'admin', 1314375863, '127.0.0.1', '1'),
(51, '后盾网', 'admin', 1314376752, '127.0.0.1', '1'),
(52, 'mengkai', 'admin', 1314377132, '127.0.0.1', '1'),
(53, '后盾网', 'admin', 1314379243, '127.0.0.1', '1'),
(54, '后盾网', 'admin', 1314509980, '127.0.0.1', '1'),
(55, '后盾网', 'admin', 1314510653, '127.0.0.1', '1'),
(56, '后盾网', 'admin', 1314513727, '127.0.0.1', '1'),
(57, '后盾网', 'admin', 1314684759, '127.0.0.1', '1'),
(58, '后盾网', 'admin', 1314696453, '127.0.0.1', '1'),
(59, '后盾网', 'admin', 1314697555, '127.0.0.1', '1'),
(60, '后盾网', 'admin', 1314697591, '127.0.0.1', '1'),
(61, '后盾网', 'admin', 1314698338, '127.0.0.1', '1'),
(62, '后盾网', 'admin', 1314708111, '127.0.0.1', '1'),
(63, '后盾网', 'admin', 1314708331, '127.0.0.1', '1'),
(64, '后盾网', 'admin', 1315016471, '127.0.0.1', '1'),
(65, 'admin', 'admin888', 1315059538, '127.0.0.1', '-2'),
(66, '后盾网', 'admin', 1315059549, '127.0.0.1', '1'),
(67, '后盾网', 'admin', 1315060414, '127.0.0.1', '1'),
(68, '后盾网', 'admin', 1315060664, '127.0.0.1', '1'),
(69, 'admin', 'admin888', 1315198103, '127.0.0.1', '-2'),
(70, '后盾网', 'admin', 1315201708, '127.0.0.1', '1'),
(71, '后盾网', 'admin', 1315201949, '127.0.0.1', '1'),
(72, '后盾网', 'admin', 1315205166, '127.0.0.1', '1'),
(73, '后盾网 ', 'admin', 1315206667, '127.0.0.1', '1'),
(74, '后盾网', 'admin', 1315212862, '127.0.0.1', '1'),
(75, '后盾网', 'admin', 1315219592, '127.0.0.1', '1'),
(76, '后盾网', 'admin', 1315219669, '127.0.0.1', '1');

-- --------------------------------------------------------

--
-- 表的结构 `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `typeid` int(5) NOT NULL,
  `author` varchar(30) NOT NULL,
  `com` varchar(30) NOT NULL,
  `hits` int(10) NOT NULL,
  `inputer` varchar(30) NOT NULL,
  `addtime` int(20) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `article`
--

INSERT INTO `article` (`id`, `title`, `typeid`, `author`, `com`, `hits`, `inputer`, `addtime`, `content`) VALUES
(2, '谢谢大家支持mengkai录制的PHP视频！', 3, 'mengkai', 'houdunwnag.com', 0, '后盾网', 1314245752, '<p>\r\n	<a href="">ni hao sasdasd</a></p>\r\n'),
(4, '欢迎收看后盾网视频教程', 6, 'mengkai', 'houdunwnag.com', 55, '后盾网', 1314245827, '<p>\r\n	欢迎大家收看后盾网视频教程</p>\r\n'),
(5, '欢迎收看后盾网视频教程欢迎收看后盾网视频教程', 4, 'mengkai', 'houdunwnag.com', 0, '后盾网', 1314246480, '<p>\r\n	！！！！</p>\r\n'),
(7, '标题文章标题', 3, 'mengkai', 'houdunwnag.com', 0, '后盾网 ', 1314365369, '<p>\r\n	你好！！</p>\r\n'),
(15, '欢迎收看后盾网视频教程', 3, 'mengkai', 'houdunwnag.com', 0, '后盾网', 1314376771, '<p>\r\n	##########</p>\r\n');

-- --------------------------------------------------------

--
-- 表的结构 `articletype`
--

CREATE TABLE IF NOT EXISTS `articletype` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `typename` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `articletype`
--

INSERT INTO `articletype` (`id`, `typename`) VALUES
(3, '关于退换货'),
(4, '关于保修'),
(6, '后盾网前端视频讲解'),
(7, '新的分类'),
(8, 'ABCD');

-- --------------------------------------------------------

--
-- 表的结构 `links`
--

CREATE TABLE IF NOT EXISTS `links` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `webname` varchar(30) NOT NULL,
  `weburl` varchar(50) NOT NULL,
  `styleid` int(1) NOT NULL,
  `logourl` varchar(50) NOT NULL,
  `addtime` int(30) NOT NULL,
  `intro` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `links`
--

INSERT INTO `links` (`id`, `webname`, `weburl`, `styleid`, `logourl`, `addtime`, `intro`) VALUES
(8, '后盾网视频教程', 'www.houdunwang.com', 2, '文本链接', 1314698539, '我们让每一个PHP爱好者感觉到满意！'),
(9, '163', 'www.163.com', 1, 'upload/mp3-jg.gif', 1314698558, '网易门户');

-- --------------------------------------------------------

--
-- 表的结构 `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `numbers` varchar(30) NOT NULL,
  `title` varchar(100) NOT NULL,
  `typeid` int(5) NOT NULL,
  `hot` int(1) NOT NULL,
  `drops` int(1) NOT NULL,
  `recommend` int(1) NOT NULL,
  `kucun` int(10) NOT NULL,
  `hits` int(5) NOT NULL,
  `picurl` varchar(100) NOT NULL,
  `picurls` text NOT NULL,
  `content` text NOT NULL,
  `addtime` int(30) NOT NULL,
  `inputer` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `product`
--

INSERT INTO `product` (`id`, `numbers`, `title`, `typeid`, `hot`, `drops`, `recommend`, `kucun`, `hits`, `picurl`, `picurls`, `content`, `addtime`, `inputer`) VALUES
(1, 'B-123', '西服上衣', 0, 0, 0, 0, 0, 0, '', '', '', 0, ''),
(2, 'B-123', '西服上衣', 0, 0, 0, 0, 0, 0, '', '', '', 0, ''),
(12, 'ABCDE', '西服上衣蓝色', 21, 1, 1, 1, 10000, 0, '../upload/u=2887277631,3792939548&fm=4&gp=0.jpg', '', '<p>\r\n	####</p>\r\n', 1315216787, '后盾网'),
(13, 'ABCDE', '西服上衣蓝色', 21, 1, 1, 1, 10000, 0, '../upload/u=2887277631,3792939548&fm=4&gp=0.jpg', '', '<p>\r\n	####</p>\r\n', 1315216886, '后盾网');

-- --------------------------------------------------------

--
-- 表的结构 `productlist`
--

CREATE TABLE IF NOT EXISTS `productlist` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `tid` int(5) NOT NULL,
  `typename` varchar(30) NOT NULL,
  `sd` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=23 ;

--
-- 转存表中的数据 `productlist`
--

INSERT INTO `productlist` (`id`, `tid`, `typename`, `sd`) VALUES
(4, 0, '服装', 1),
(15, 4, '男装', 2),
(16, 0, '西服', 1),
(17, 0, '女装', 1),
(18, 17, '休闲', 2),
(19, 16, '正装', 2),
(20, 18, '上衣', 3),
(21, 20, '蓝色', 4),
(22, 19, '上衣', 3);
