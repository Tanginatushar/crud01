-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 27, 2014 at 06:47 AM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `employskills`
--

-- --------------------------------------------------------

--
-- Table structure for table `empskilref`
--

CREATE TABLE IF NOT EXISTS `empskilref` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `comName` varchar(255) NOT NULL,
  `comBusiness` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `dep` varchar(255) NOT NULL,
  `emDu` varchar(255) NOT NULL,
  `res` varchar(255) NOT NULL,
  `exCat` varchar(255) NOT NULL,
  `skilldes` varchar(255) NOT NULL,
  `exAct` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `org` varchar(255) NOT NULL,
  `add` varchar(255) NOT NULL,
  `relation` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `empskilref`
--

INSERT INTO `empskilref` (`ID`, `comName`, `comBusiness`, `address`, `des`, `dep`, `emDu`, `res`, `exCat`, `skilldes`, `exAct`, `name`, `org`, `add`, `relation`, `mobile`, `email`) VALUES
(2, 'sdssds', 'dsds', 's', 's', 'ss', 's', 's', 'ss', 'r', 'f', 'dd', 'd', 'f', 'd', '23', 'rt'),
(3, 'dfg', '', '', 'vc', '', '', '', 'b', '', '', '', 'gdf', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
