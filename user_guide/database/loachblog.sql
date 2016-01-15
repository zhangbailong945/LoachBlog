-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 01 月 15 日 16:54
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
-- 表的结构 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `userpassword` varchar(50) NOT NULL,
  `useremail` varchar(50) NOT NULL,
  `userip` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `username`, `userpassword`, `useremail`, `userip`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', '192.168.1.1');
INSERT INTO `users` (`id`, `username`, `userpassword`, `useremail`, `userip`) VALUES
(2, 'admin', 'admin', 'admin@admin.com', '192.168.1.1');
INSERT INTO `users` (`id`, `username`, `userpassword`, `useremail`, `userip`) VALUES
(3, 'admin', 'admin', 'admin@admin.com', '192.168.1.1');
INSERT INTO `users` (`id`, `username`, `userpassword`, `useremail`, `userip`) VALUES
(4, 'admin', 'admin', 'admin@admin.com', '192.168.1.1');
INSERT INTO `users` (`id`, `username`, `userpassword`, `useremail`, `userip`) VALUES
(5, 'admin', 'admin', 'admin@admin.com', '192.168.1.1');
INSERT INTO `users` (`id`, `username`, `userpassword`, `useremail`, `userip`) VALUES
(6, 'admin', 'admin', 'admin@admin.com', '192.168.1.1');
INSERT INTO `users` (`id`, `username`, `userpassword`, `useremail`, `userip`) VALUES
(7, 'admin', 'admin', 'admin@admin.com', '192.168.1.1');
INSERT INTO `users` (`id`, `username`, `userpassword`, `useremail`, `userip`) VALUES
(8, 'admin', 'admin', 'admin@admin.com', '192.168.1.1');
INSERT INTO `users` (`id`, `username`, `userpassword`, `useremail`, `userip`) VALUES
(9, 'admin', 'admin', 'admin@admin.com', '192.168.1.1');
INSERT INTO `users` (`id`, `username`, `userpassword`, `useremail`, `userip`) VALUES
(10, 'admin', 'admin', 'admin@admin.com', '192.168.1.1');
INSERT INTO `users` (`id`, `username`, `userpassword`, `useremail`, `userip`) VALUES
(11, 'admin', 'admin', 'admin@admin.com', '192.168.1.1');
INSERT INTO `users` (`id`, `username`, `userpassword`, `useremail`, `userip`) VALUES
(12, 'admin', 'admin', 'admin@admin.com', '192.168.1.1');
INSERT INTO `users` (`id`, `username`, `userpassword`, `useremail`, `userip`) VALUES
(13, 'admin', 'admin', 'admin@admin.com', '192.168.1.1');
INSERT INTO `users` (`id`, `username`, `userpassword`, `useremail`, `userip`) VALUES
(14, 'admin', 'admin', 'admin@admin.com', '192.168.1.1');
INSERT INTO `users` (`id`, `username`, `userpassword`, `useremail`, `userip`) VALUES
(15, 'admin', 'admin', 'admin@admin.com', '192.168.1.1');
INSERT INTO `users` (`id`, `username`, `userpassword`, `useremail`, `userip`) VALUES
(16, 'admin', 'admin', 'admin@admin.com', '192.168.1.1');
INSERT INTO `users` (`id`, `username`, `userpassword`, `useremail`, `userip`) VALUES
(17, 'admin', 'admin', 'admin@admin.com', '192.168.1.1');
INSERT INTO `users` (`id`, `username`, `userpassword`, `useremail`, `userip`) VALUES
(18, 'admin', 'admin', 'admin@admin.com', '192.168.1.1');
INSERT INTO `users` (`id`, `username`, `userpassword`, `useremail`, `userip`) VALUES
(19, 'admin', 'admin', 'admin@admin.com', '192.168.1.1');
INSERT INTO `users` (`id`, `username`, `userpassword`, `useremail`, `userip`) VALUES
(100, 'admin', 'admin', 'admin@admin.com', '192.168.1.1');
INSERT INTO `users` (`id`, `username`, `userpassword`, `useremail`, `userip`) VALUES
(101, 'admin', 'admin', 'admin@admin.com', '192.168.1.1');
INSERT INTO `users` (`id`, `username`, `userpassword`, `useremail`, `userip`) VALUES
(102, 'admin', 'admin', 'admin@admin.com', '192.168.1.1');
INSERT INTO `users` (`id`, `username`, `userpassword`, `useremail`, `userip`) VALUES
(103, 'admin', 'admin', 'admin@admin.com', '192.168.1.1');
INSERT INTO `users` (`id`, `username`, `userpassword`, `useremail`, `userip`) VALUES
(104, 'admin', 'admin', 'admin@admin.com', '192.168.1.1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
