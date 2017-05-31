-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2016 at 12:43 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `usrinfo`
--
CREATE DATABASE IF NOT EXISTS `usrinfo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `usrinfo`;

-- --------------------------------------------------------

--
-- Table structure for table `db`
--

CREATE TABLE IF NOT EXISTS `db` (
  `ip` varchar(20) NOT NULL,
  `count` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `db`
--

INSERT INTO `db` (`ip`, `count`, `id`) VALUES
('::1', 0, 8);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `sex` varchar(40) NOT NULL,
  `dob` int(2) NOT NULL,
  `city` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `ev1` tinyint(1) NOT NULL DEFAULT '0',
  `ev2` int(1) NOT NULL DEFAULT '0',
  `ev3` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=79 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `sex`, `dob`, `city`, `password`, `username`, `email`, `ev1`, `ev2`, `ev3`) VALUES
(72, '', '', 0, '', '@s', 'shubham', 'email@example.com', 1, 0, 0),
(73, 'shu', 'male', 0, 'aas', '', '', '', 0, 0, 0),
(74, 'A', 'male', 0, 'sad', 'as', 'sas', 'mohit@gmail.com', 1, 1, 0),
(75, 'cho', 'male', 0, 'cho', 'asdasd', 'klj', 'asdsad@gmai.com', 0, 0, 0),
(76, 'zmcvnmn', 'male', 0, 'mn', 'lkjlkj', 'lkjklj', 'jlkjjlkjklj', 0, 0, 0),
(78, '', '', 0, '', 'ascdasd', 'affae', 'Ashukla@gmial.com', 1, 1, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
