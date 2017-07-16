-- phpMyAdmin SQL Dump
-- version 2.11.2.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2012 年 06 月 09 日 15:26
-- 服务器版本: 5.0.45
-- PHP 版本: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- 数据库: `gym`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL auto_increment,
  `admin_name` varchar(50) default NULL,
  `admin_psw` varchar(50) default NULL,
  `Levels` varchar(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gbk AUTO_INCREMENT=4 ;

--
-- 导出表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `admin_psw`, `Levels`) VALUES
(1, 'admin', 'admin', ''),
(3, '123', '123', '0');

-- --------------------------------------------------------

--
-- 表的结构 `ground`
--

CREATE TABLE `ground` (
  `ground_id` int(11) NOT NULL auto_increment,
  `content` text NOT NULL,
  `name` varchar(50) default NULL,
  `type` varchar(50) default NULL,
  `cost` varchar(11) default NULL,
  PRIMARY KEY  (`ground_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gbk AUTO_INCREMENT=11 ;

--
-- 导出表中的数据 `ground`
--

INSERT INTO `ground` (`ground_id`, `content`, `name`, `type`, `cost`) VALUES
(7, '123', '1号', '羽毛球', '4'),
(8, '123123', '1号', '足球', '4'),
(10, '213213', '测试场地', '足球', '123');

-- --------------------------------------------------------

--
-- 表的结构 `ground_top3`
--

CREATE TABLE `ground_top3` (
  `cost` int(11) default NULL,
  `total` double default NULL,
  `name` varchar(50) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=gbk;

--
-- 导出表中的数据 `ground_top3`
--


-- --------------------------------------------------------

--
-- 表的结构 `preengage`
--

CREATE TABLE `preengage` (
  `preengage_id` int(11) NOT NULL auto_increment,
  `user_name` varchar(50) default NULL,
  `ground_id` int(11) default NULL,
  `cost` varchar(50) default NULL,
  `paid` int(11) default '0',
  `pdate` int(11) default NULL,
  `beginhour` int(11) default NULL,
  `datetime` timestamp NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`preengage_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gbk AUTO_INCREMENT=3 ;

--
-- 导出表中的数据 `preengage`
--

INSERT INTO `preengage` (`preengage_id`, `user_name`, `ground_id`, `cost`, `paid`, `pdate`, `beginhour`, `datetime`) VALUES
(1, 'ztest', 10, '123', 1, 1324627200, 8, '2011-12-22 21:49:11'),
(2, 'ztest', 10, '123', 0, 1339340400, 15, '2012-06-09 23:13:36');

-- --------------------------------------------------------

--
-- 表的结构 `user_reg`
--

CREATE TABLE `user_reg` (
  `id` int(11) NOT NULL auto_increment,
  `user_name` varchar(50) default NULL,
  `psw` varchar(50) default NULL,
  `sex` varchar(50) default NULL,
  `email` varchar(50) default NULL,
  `tel` varchar(50) default NULL,
  `xibu` varchar(50) NOT NULL default '计算机学院',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gbk AUTO_INCREMENT=18 ;

--
-- 导出表中的数据 `user_reg`
--

INSERT INTO `user_reg` (`id`, `user_name`, `psw`, `sex`, `email`, `tel`, `xibu`) VALUES
(1, 'ztest', '123456', '男', '4444@qq.com', '45545454', '计算机学院'),
(2, 'ztest01', '123456', '男', '554554@qq.com', '54545445', '计算机学院'),
(3, 'ztest002', '123456', '男', '11111111@qq.com', '5555454', '计算机学院'),
(4, '0001', '123456', '男', '11111111@qq.com', '111555454', '计算机学院'),
(5, '00012', '123456', '男', '11111111@qq.com', '111555454', '计算机学院'),
(6, '000122', '123456', '男', '11111111@qq.com', '111555454', '计算机学院'),
(7, '000122', '123456', '男', '11111111@qq.com', '111555454', '计算机学院'),
(8, 'pengxiaodan', '1111', '女', '132242342@', '3546456456', '计算机学院'),
(9, 'g', '11', '男', 'wdetre@qq.com', '13423545656', '计算机学院'),
(10, 'gaojianhong', '222', '女', '7686672@qq.com', '1346666777', '计算机学院'),
(11, '11', '11', '男', '11', '11', '计算机学院'),
(12, '22', '22', '男', '22', '22', '计算机学院'),
(13, '22', '22', '男', '22', '22', '计算机学院'),
(14, '22', '22', '男', 'rtt', '13w54', '计算机学院'),
(15, '22', '222222', '男', 'were', 'ete1223', '计算机学院');

-- --------------------------------------------------------

--
-- 表的结构 `word`
--

CREATE TABLE `word` (
  `word_id` int(11) NOT NULL,
  `user_name` varchar(50) default NULL,
  `datetime` datetime default NULL,
  `title` varchar(50) default NULL,
  `word` longtext,
  PRIMARY KEY  (`word_id`)
) ENGINE=InnoDB DEFAULT CHARSET=gbk;

--
-- 导出表中的数据 `word`
--

