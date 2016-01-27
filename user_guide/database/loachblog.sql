-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 01 月 27 日 17:40
-- 服务器版本: 5.5.40
-- PHP 版本: 5.3.29

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `loachblog`
--

-- --------------------------------------------------------

--
-- 表的结构 `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `article_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '文章编号',
  `article_author_id` int(11) NOT NULL COMMENT '文章作者',
  `article_title` varchar(255) NOT NULL COMMENT '文章标题',
  `article_introduction` text COMMENT '文章简介',
  `article_content` longtext NOT NULL COMMENT '文章内容',
  `article_posttime` int(11) NOT NULL COMMENT '发表时间',
  `article_comment_nums` int(11) NOT NULL COMMENT '文章评论次数',
  `article_view_nums` int(11) NOT NULL COMMENT '文章浏览次数',
  `article_tags` varchar(255) NOT NULL COMMENT '文章标签',
  `article_status` tinyint(11) NOT NULL COMMENT '文章状态',
  PRIMARY KEY (`article_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='文章表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `article`
--

INSERT INTO `article` (`article_id`, `article_author_id`, `article_title`, `article_introduction`, `article_content`, `article_posttime`, `article_comment_nums`, `article_view_nums`, `article_tags`, `article_status`) VALUES
(1, 1, 'php', 'php', 'php', 11111, 111, 111, 'php', 1);

-- --------------------------------------------------------

--
-- 表的结构 `article_type`
--

CREATE TABLE IF NOT EXISTS `article_type` (
  `article_type_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '文章类型编号',
  `article_type_name` varchar(50) NOT NULL COMMENT '文章类型名称',
  `article_type_description` varchar(150) DEFAULT NULL COMMENT '文章类型描述',
  PRIMARY KEY (`article_type_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='文章类型表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `article_type`
--

INSERT INTO `article_type` (`article_type_id`, `article_type_name`, `article_type_description`) VALUES
(1, 'php', 'php');

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户编号',
  `username` varchar(50) NOT NULL COMMENT '用户名',
  `userpassword` varchar(50) NOT NULL COMMENT '用户密码',
  `useremail` varchar(50) NOT NULL COMMENT '用户邮箱',
  `userip` varchar(20) NOT NULL COMMENT '用户ip',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='用户表' AUTO_INCREMENT=19 ;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `username`, `userpassword`, `useremail`, `userip`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', '192.168.1.1'),
(2, 'admin', 'admin', 'admin@admin.com', '192.168.1.1'),
(3, 'admin', 'admin', 'admin@admin.com', '192.168.1.1'),
(4, 'admin', 'admin', 'admin@admin.com', '192.168.1.1'),
(5, 'admin', 'admin', 'admin@admin.com', '192.168.1.1'),
(6, 'admin', 'admin', 'admin@admin.com', '192.168.1.1'),
(7, 'admin', 'admin', 'admin@admin.com', '192.168.1.1'),
(8, 'admin', 'admin', 'admin@admin.com', '192.168.1.1'),
(9, 'admin', 'admin', 'admin@admin.com', '192.168.1.1'),
(10, 'admin', 'admin', 'admin@admin.com', '192.168.1.1'),
(11, 'admin', 'admin', 'admin@admin.com', '192.168.1.1'),
(12, 'admin', 'admin', 'admin@admin.com', '192.168.1.1'),
(13, 'admin', 'admin', 'admin@admin.com', '192.168.1.1'),
(14, 'admin', 'admin', 'admin@admin.com', '192.168.1.1'),
(15, 'admin', 'admin', 'admin@admin.com', '192.168.1.1'),
(16, 'admin', 'admin', 'admin@admin.com', '192.168.1.1'),
(17, 'admin', 'admin', 'admin@admin.com', '192.168.1.1'),
(18, 'admin', 'admin', 'admin@admin.com', '192.168.1.1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
