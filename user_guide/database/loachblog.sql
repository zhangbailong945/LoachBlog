-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015年12月3日23:46:17
-- 服务器版本: 5.1.37
-- PHP 版本: 5.2.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- 数据库: `LoachBlog`
--
-- 用户数据结构


CREATE TABLE `users` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户PK',
  `name` varchar(32) NOT NULL COMMENT '用户名称',
  `password` varchar(49) DEFAULT NULL COMMENT '用户密码',
  `mail` varchar(200) NOT NULL COMMENT '用户邮箱',
  `url` varchar(200) DEFAULT NULL COMMENT '用户主页',
  `screenName` varchar(32) DEFAULT NULL COMMENT '用户的显示名称',
  `created` int(10) unsigned NOT NULL COMMENT '用户的注册时间',
  `activated` int(10) unsigned NOT NULL COMMENT '最后活跃时间',
  `logged` int(10) unsigned NOT NULL COMMENT '上次登陆最后活跃时间',
  `group` varchar(16) NOT NULL COMMENT '用户所在组',
  `token` varchar(40) DEFAULT NULL COMMENT '令牌',
  PRIMARY KEY (`uid`),
  UNIQUE KEY `name` (`name`,`mail`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='用户信息表' AUTO_INCREMENT=2 ;


INSERT INTO `users` VALUES(1, 'admin', 'b5151557ed3f279bc20627b4f5c30c82c1678518adc9be976', 'huyanggang@gmail.com', 'http://www.cnsaturn.com/', 'admin', 1111, 1268550988, 1268550964, 'administrator', 'fd0c6074d67e1ce3b7418aac9462084a63ec53bd');