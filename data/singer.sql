-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2014 年 02 月 20 日 09:59
-- 服务器版本: 5.5.27
-- PHP 版本: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `favorite_singer`
--

-- --------------------------------------------------------

--
-- 表的结构 `singer`
--

CREATE TABLE IF NOT EXISTS `singer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `sex` char(32) NOT NULL,
  `song` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `singer`
--

INSERT INTO `singer` (`id`, `name`, `sex`, `song`) VALUES
(1, 'Lily Allen', 'F', 'Not fair'),
(2, 'Coldplay', 'M', 'Yellow'),
(3, 'Keane', 'M', 'Somewhere only we know'),
(4, 'Olivia Ong', 'F', 'Where is the love'),
(5, 'Lady Gaga', 'F', 'Just dance'),
(6, 'Lana Del Rey', 'F', 'Diet Moutain Dew'),
(7, 'Birdy', 'F', '1901'),
(8, 'Pink', 'F', 'Funhouse'),
(9, 'Kate Havnevik', 'F', 'Unlike Me');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
