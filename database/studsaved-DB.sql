-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Версия на сървъра: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `studsavet`
--

-- --------------------------------------------------------

--
-- Структура на таблица `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `date` date NOT NULL,
  `content` text NOT NULL,
  `picture` varchar(30) NOT NULL,
  `isImportant` int(1) NOT NULL,
  `isHavePdf` int(1) NOT NULL DEFAULT '0',
  `pdfPath` varchar(50) DEFAULT NULL,
  `hrefText` text,
  `readable` int(5) NOT NULL,
  `isDeleted` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Схема на данните от таблица `news`
--

INSERT INTO `news` (`id`, `title`, `date`, `content`, `picture`, `isImportant`, `isHavePdf`, `pdfPath`, `hrefText`, `readable`, `isDeleted`) VALUES
(1, 'Първата тестова новина', '2014-09-09', 'явертъуиопасдфгхйклзьцжбнм,явертъуиопасдфгхйклзьцжбнм,явертъуиопасдфгхйклзьцжбнм,явертъуиопасдфгхйклзьцжбнм,', 'DSC091583.JPG', 1, 0, NULL, NULL, 1, 0),
(2, 'qwerty', '2014-09-17', 'qwertyqwertyqwertyqwertyqwerty', 'qwerty.jpg', 0, 0, NULL, NULL, 1, 0),
(6, 'qwertyw', '2014-09-20', 'qwertwqer', 'IMAG1699.jpg', 1, 0, NULL, NULL, 8, 0),
(7, 'poredna testova novina', '2014-09-09', 'poredna testova novina poredna testova novina poredna testova novina', 'IMAG1506.jpg', 0, 0, NULL, NULL, 6, 1),
(8, 'qwertyuio', '2014-09-09', 'qwertyuiklmnb', 'IMG_1521.JPG', 0, 0, NULL, NULL, 9, 1),
(9, 'malko nova informaciq', '2014-09-14', 'pochti nikakva informaciq', 'IMG_1548.JPG', 1, 0, NULL, NULL, 11, 1),
(10, 'poslednata vajna', '2014-09-14', 'poslednata vajna poslednata vajna poslednata vajna', 'IMG_1547.JPG', 1, 0, NULL, NULL, 1, 1),
(11, 'wergtefedwd', '2014-09-14', 'http://dl.uctm.edu/bg/sites/default/files/social_d/Klasirane_11.pdf', 'IMG_1528.JPG', 0, 0, NULL, NULL, 3, 0);

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`id`, `user`, `password`) VALUES
(1, 'test', 'testpass'),
(2, 'test2', 'testpass2'),
(3, 'denis', '$2y$12$drGjCpP5ijwcG'),
(4, 'qwerty', '$2y$12$4fCyT9ivLiqkL'),
(5, 'denisdenis', '$2y$12$Q5WCrUnwRe9Wg'),
(6, 'polina', '$2y$12$MH1DNVzQ9l8B3'),
(7, 'sined', 'sined');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
