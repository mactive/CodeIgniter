-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 10, 2013 at 02:44 PM
-- Server version: 5.5.9
-- PHP Version: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ydkcar`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `currect` varchar(10) NOT NULL,
  `why` varchar(255) NOT NULL,
  `tip` varchar(255) NOT NULL,
  `grade` varchar(20) NOT NULL,
  `height` int(5) NOT NULL,
  `slice` tinyint(2) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `grade` (`grade`,`height`,`slice`,`type`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` VALUES(1, '默认问题', '{"A":"t1","B":"t2","C":"t3","D":"t4"}', '', '', '', 'easy', 480, 6, '', '', 'car');
INSERT INTO `questions` VALUES(2, '默认问题2', '{"A":"BMW","B":"Benz","C":"Audi","D":"TT"}', 'C', '', '', 'hard', 640, 3, '', '', 'other');
