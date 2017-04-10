-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 20, 2014 at 07:28 PM
-- Server version: 5.5.35-1ubuntu1
-- PHP Version: 5.5.9-1ubuntu2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE DATABASE ChatApp;
USE ChatApp;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ChatApp`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `msgId` int(11) NOT NULL AUTO_INCREMENT,
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`msgId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=78 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `message`, `msgId`, `datetime`) VALUES
(4, 'd', 49, '2014-03-18 21:07:44'),
(4, 'gg', 50, '2014-03-18 21:14:25'),
(4, 'yes', 51, '2014-03-18 21:27:16'),
(1, 'Oh yeah it working', 52, '2014-03-18 21:53:38'),
(2, 'ssadfa', 53, '2014-03-18 21:58:06'),
(2, 'sa', 54, '2014-03-18 21:59:23'),
(2, ':)', 55, '2014-03-18 21:59:30'),
(2, 's', 56, '2014-03-18 22:01:54'),
(2, 'hi', 57, '2014-03-18 22:03:42'),
(2, 'hi', 58, '2014-03-18 22:05:29'),
(2, 'sdfsd''dsfds', 59, '2014-03-18 22:05:34'),
(2, 'test', 61, '2014-03-19 10:45:36'),
(1, 'today', 62, '2014-03-19 11:45:57'),
(1, 'yesygesa', 63, '2014-03-19 11:46:00'),
(4, 'dsafadsf', 64, '2014-03-19 11:46:10'),
(4, 'dfg', 65, '2014-03-19 11:48:28'),
(1, 'hi', 66, '2014-03-20 14:18:22'),
(1, 'hi', 67, '2014-03-20 14:18:23'),
(1, 'fsadf', 68, '2014-03-20 14:18:24'),
(1, 'gdfs', 69, '2014-03-20 14:18:25'),
(4, 'sdfasdf', 70, '2014-03-20 14:18:37'),
(4, 'dfadsf', 71, '2014-03-20 14:18:38'),
(4, 's', 72, '2014-03-20 14:32:11'),
(2, 'hi', 73, '2014-03-20 14:32:37'),
(1, 'a', 74, '2014-03-20 14:38:04'),
(1, 'sd', 75, '2014-03-20 15:43:07'),
(32, 'd', 76, '2014-03-20 16:04:04'),
(1, 'hi', 77, '2014-03-20 19:14:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `online` varchar(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `name`, `email`, `id`, `online`) VALUES
('user1', 'pass1', 'yoyo', 'yoyo@yo.com', 1, 'TRUE'),
('user2', 'pass2', 'yeye', 'yey@ye.com', 2, 'FALSE'),
('chips', 'chips', 'chipchop', 'chip@live.com', 4, 'FALSE'),
('see', 'see', 'df', 'df@sadsd.com', 31, 'FALSE'),
('greg', 'greg', 'grag', 'gra@fdsf.com', 32, 'FALSE'),
('fefe', 'fefe', 'fefe', 'fefe@fdskc.oom', 33, 'FALSE'),
('asd', 'asd', 'asd', 'fefe@fdskc.oom', 34, 'FALSE'),
('spring', 'spring', 'sdfhakj', 'dsfhj@fdshfj.cinedf', 35, 'FALSE');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
