-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 08, 2015 at 06:50 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `totaltra`
--

CREATE TABLE IF NOT EXISTS `totaltra` (
  `tratype` varchar(50) NOT NULL,
  `amt` int(50) NOT NULL,
  `id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `totaltra`
--

INSERT INTO `totaltra` (`tratype`, `amt`, `id`) VALUES
('withdraw', 500, 15),
('deposit', 5000, 15),
('withdraw', 1000, 15),
('withdraw', 1, 15),
('withdraw', 1000, 15),
('withdraw', 1001, 15),
('withdraw', 1000, 15),
('deposit', 2000, 15),
('withdraw', 990, 15),
('withdraw', 10, 15),
('deposit', 999, 15),
('deposit', 2, 15),
('withdraw', 500, 15),
('withdraw', 100, 15),
('withdraw', 399, 15),
('withdraw', 0, 1),
('deposit', 9, 15),
('withdraw', 9, 15),
('deposit', 1000, 15),
('withdraw', 0, 15),
('withdraw', 1, 15),
('deposit', 1000, 15),
('deposit', 1000, 15),
('withdraw', 1000, 15),
('deposit', 2000, 15),
('withdraw', 1000, 15),
('withdraw', 2999, 15),
('deposit', 0, 15),
('deposit', 2, 15),
('withdraw', 1, 15),
('deposit', 1000, 16),
('withdraw', 3000, 16);

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE IF NOT EXISTS `transfer` (
  `Toid` int(50) NOT NULL,
  `Fromid` int(50) NOT NULL,
  `amt` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`Toid`, `Fromid`, `amt`) VALUES
(7, 4, 500),
(1, 14, 5000),
(14, 1, 8000),
(14, 1, 4000),
(1, 14, 5000),
(0, 1, 0),
(14, 1, 4000),
(14, 15, 499),
(1, 15, 2000),
(15, 15, 2000),
(15, 15, 100000),
(17, 16, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `intbalans` int(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `intbalans`) VALUES
(1, 'mehul', 'mehul', 3400),
(14, 'icreate', '123', 5000),
(15, 'm', 'm', 1000),
(16, 'mmpatel', 'mmpatel', 5000),
(17, 'mina', 'mina', 1000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
