-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Време на генериране: 
-- Версия на сървъра: 5.5.16
-- Версия на PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данни: `messages`
--

-- --------------------------------------------------------

--
-- Структура на таблица `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `msgDate` text NOT NULL,
  `msgBody` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=52 ;

--
-- Ссхема на данните от таблица `messages`
--

INSERT INTO `messages` (`id`, `author`, `subject`, `msgDate`, `msgBody`) VALUES
(44, 'lili', 'css', '23.09.20015', 'css'),
(45, 'mimi', 'html', '23.09.20015', 'html'),
(43, 'admin', 'php', '23.09.20015', 'php oop'),
(46, 'elli', 'java', '23.09.20015', 'java'),
(47, 'koko', 'html', '23.09.20015', 'html li'),
(48, 'titi', 'css', '23.09.20015', 'css'),
(50, 'fredi', 'php', '23.09.20015', 'php oop'),
(51, 'eva', 'php', '23.09.20015', 'php');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
