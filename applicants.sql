-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 25, 2014 at 06:34 AM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `applicants`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE IF NOT EXISTS `applicants` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `preferredTrack` varchar(255) NOT NULL,
  `sscRoll` int(255) NOT NULL,
  `sscBoard` varchar(255) NOT NULL,
  `hscRoll` int(255) NOT NULL,
  `hscBoard` varchar(255) NOT NULL,
  `hasLaptop` varchar(255) NOT NULL,
  `preferredExamCenter` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `fatherName` varchar(255) NOT NULL,
  `motherName` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `nationalId` int(255) NOT NULL,
  `presentAddress` varchar(255) NOT NULL,
  `permanentAddress` varchar(255) NOT NULL,
  `mobile` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `levelOfEducation` varchar(255) NOT NULL,
  `degreeName` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `institute` varchar(255) NOT NULL,
  `result` int(255) NOT NULL,
  `passingYear` int(255) NOT NULL,
  `duration` int(255) NOT NULL,
  `achievements` varchar(255) NOT NULL,
  `completionStatus` varchar(255) NOT NULL,
  `ictSkills` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`ID`, `preferredTrack`, `sscRoll`, `sscBoard`, `hscRoll`, `hscBoard`, `hasLaptop`, `preferredExamCenter`, `firstName`, `lastName`, `fatherName`, `motherName`, `religion`, `dateOfBirth`, `gender`, `nationality`, `nationalId`, `presentAddress`, `permanentAddress`, `mobile`, `email`, `levelOfEducation`, `degreeName`, `group`, `institute`, `result`, `passingYear`, `duration`, `achievements`, `completionStatus`, `ictSkills`) VALUES
(1, '', 123, 'chi ', 0, '', '', '', '', '', '', '', '', '0000-00-00', '', '', 0, '', '', 0, '', '', '', '', '', 0, 0, 0, '', '', ''),
(2, '', 123, 'chi ', 0, '', '', '', '', '', '', '', '', '0000-00-00', '', '', 0, '', '', 0, '', '', '', '', '', 0, 0, 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE IF NOT EXISTS `education` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `levelOfEducation` varchar(255) NOT NULL,
  `degreeName` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `institute` varchar(255) NOT NULL,
  `result` int(255) NOT NULL,
  `passingYear` int(255) NOT NULL,
  `duration` int(255) NOT NULL,
  `achievements` varchar(255) NOT NULL,
  `completionStatus` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`ID`, `levelOfEducation`, `degreeName`, `group`, `institute`, `result`, `passingYear`, `duration`, `achievements`, `completionStatus`) VALUES
(1, '', '', '', '', 0, 0, 0, '', ''),
(2, '', '', '', '', 0, 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ictSkill`
--

CREATE TABLE IF NOT EXISTS `ictSkill` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `ictSkill` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ictSkill`
--

INSERT INTO `ictSkill` (`ID`, `ictSkill`) VALUES
(1, ''),
(2, '');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `preferredTrack` varchar(255) NOT NULL,
  `sscRoll` int(255) NOT NULL,
  `sscBoard` varchar(255) NOT NULL,
  `hscRoll` int(255) NOT NULL,
  `hscBoard` varchar(255) NOT NULL,
  `hasLaptop` varchar(255) NOT NULL,
  `preferredExamCenter` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `fatherName` varchar(255) NOT NULL,
  `motherName` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `nationalId` int(255) NOT NULL,
  `presentAddress` varchar(255) NOT NULL,
  `permanentAddress` varchar(255) NOT NULL,
  `mobile` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `levelOfEducation` varchar(255) NOT NULL,
  `degreeName` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `institute` varchar(255) NOT NULL,
  `result` int(255) NOT NULL,
  `passingYear` int(255) NOT NULL,
  `duration` int(255) NOT NULL,
  `achievements` varchar(255) NOT NULL,
  `completionStatus` varchar(255) NOT NULL,
  `ictSkills` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`ID`, `preferredTrack`, `sscRoll`, `sscBoard`, `hscRoll`, `hscBoard`, `hasLaptop`, `preferredExamCenter`, `firstName`, `lastName`, `fatherName`, `motherName`, `religion`, `dateOfBirth`, `gender`, `nationality`, `nationalId`, `presentAddress`, `permanentAddress`, `mobile`, `email`, `levelOfEducation`, `degreeName`, `group`, `institute`, `result`, `passingYear`, `duration`, `achievements`, `completionStatus`, `ictSkills`) VALUES
(1, '', 123, 'chi ', 0, '', '', '', '', '', '', '', '', '0000-00-00', '', '', 0, '', '', 0, '', '', '', '', '', 0, 0, 0, '', '', ''),
(2, '', 123, 'chi ', 0, '', '', '', '', '', '', '', '', '0000-00-00', '', '', 0, '', '', 0, '', '', '', '', '', 0, 0, 0, '', '', ''),
(3, '', 123, 'chi ', 565756, 'ggkk', 'Yes', '', 't', 'd', 't', 'si', 'i', '0000-00-00', '', 'b', 2324, 'sds', 'dad', 0, 'tanjina_tushar@yahoo.com', '', '', '', '', 0, 0, 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `personalInformation`
--

CREATE TABLE IF NOT EXISTS `personalInformation` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `fatherName` varchar(255) NOT NULL,
  `motherName` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `nationalId` int(255) NOT NULL,
  `presentAddress` varchar(255) NOT NULL,
  `permanentAddress` varchar(255) NOT NULL,
  `mobile` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `personalInformation`
--

INSERT INTO `personalInformation` (`ID`, `firstName`, `lastName`, `fatherName`, `motherName`, `religion`, `dateOfBirth`, `gender`, `nationality`, `nationalId`, `presentAddress`, `permanentAddress`, `mobile`, `email`) VALUES
(1, '', '', '', '', '', '0000-00-00', '', '', 0, '', '', 0, ''),
(2, '', '', '', '', '', '0000-00-00', '', '', 0, '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `track`
--

CREATE TABLE IF NOT EXISTS `track` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `preferredTrack` varchar(255) NOT NULL,
  `sscRoll` int(255) NOT NULL,
  `sscBoard` varchar(255) NOT NULL,
  `hscRoll` int(255) NOT NULL,
  `hscBoard` varchar(255) NOT NULL,
  `hasLaptop` varchar(255) NOT NULL,
  `preferredExamCenter` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `track`
--

INSERT INTO `track` (`ID`, `preferredTrack`, `sscRoll`, `sscBoard`, `hscRoll`, `hscBoard`, `hasLaptop`, `preferredExamCenter`) VALUES
(3, '', 12113, 'jhj ', 565756, 'ggkk', 'Yes', ''),
(5, '', 123, 'chi ', 565756, 'ggkk', 'Yes', ''),
(6, '', 123, 'chi ', 565756, 'ggkk', 'Yes', ''),
(7, '', 123, 'chi ', 565756, 'ggkk', 'Yes', ''),
(8, '', 0, ' ', 0, '', '', ''),
(9, '', 0, ' ', 0, '', '', ''),
(10, '', 0, ' ', 0, '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
