-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 06, 2018 at 09:08 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ihack`
--

-- --------------------------------------------------------

--
-- Table structure for table `customerindex`
--

DROP TABLE IF EXISTS `customerindex`;
CREATE TABLE IF NOT EXISTS `customerindex` (
  `customerId` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(20) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address1` varchar(100) NOT NULL,
  `address2` varchar(100) NOT NULL,
  `address3` varchar(100) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `nic` varchar(20) NOT NULL,
  `birthday` date NOT NULL,
  `registerDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`customerId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `driverinfo`
--

DROP TABLE IF EXISTS `driverinfo`;
CREATE TABLE IF NOT EXISTS `driverinfo` (
  `driverId` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(20) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `telephone` int(11) NOT NULL,
  `address1` varchar(200) NOT NULL,
  `address2` varchar(200) NOT NULL,
  `address3` varchar(200) NOT NULL,
  `driverPhoto` varchar(200) NOT NULL,
  `vehical` varchar(200) NOT NULL,
  `vehicalPhoto` varchar(200) NOT NULL,
  `currentDateTime` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`driverId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hireinfo`
--

DROP TABLE IF EXISTS `hireinfo`;
CREATE TABLE IF NOT EXISTS `hireinfo` (
  `hireId` int(11) NOT NULL AUTO_INCREMENT,
  `driverId` int(11) NOT NULL,
  `currentLocation` varchar(200) NOT NULL,
  `departureDate` date NOT NULL,
  `departureTime` time NOT NULL,
  `through` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `available` varchar(20) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`hireId`),
  KEY `driverId` (`driverId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `respond`
--

DROP TABLE IF EXISTS `respond`;
CREATE TABLE IF NOT EXISTS `respond` (
  `respondId` int(11) NOT NULL AUTO_INCREMENT,
  `hireId` int(11) NOT NULL,
  `customerId` int(11) NOT NULL,
  `driverId` int(11) NOT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`respondId`),
  KEY `customerId` (`customerId`),
  KEY `hireId` (`hireId`),
  KEY `driverId` (`driverId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customerindex`
--
ALTER TABLE `customerindex`
  ADD CONSTRAINT `customerindex_ibfk_1` FOREIGN KEY (`customerId`) REFERENCES `respond` (`customerId`);

--
-- Constraints for table `hireinfo`
--
ALTER TABLE `hireinfo`
  ADD CONSTRAINT `hireinfo_ibfk_1` FOREIGN KEY (`driverId`) REFERENCES `driverinfo` (`driverId`);

--
-- Constraints for table `respond`
--
ALTER TABLE `respond`
  ADD CONSTRAINT `respond_ibfk_1` FOREIGN KEY (`hireId`) REFERENCES `hireinfo` (`hireId`),
  ADD CONSTRAINT `respond_ibfk_2` FOREIGN KEY (`customerId`) REFERENCES `customerindex` (`customerId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `respond_ibfk_3` FOREIGN KEY (`driverId`) REFERENCES `driverinfo` (`driverId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
