-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 14, 2016 at 04:51 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `AdminID` int(11) NOT NULL AUTO_INCREMENT,
  `AdminName` varchar(250) NOT NULL,
  `AdminUsername` varchar(250) NOT NULL,
  `AdminPassword` varchar(13) NOT NULL,
  `AdminEmail` varchar(250) NOT NULL,
  `AdminImage` varchar(225) NOT NULL,
  PRIMARY KEY (`AdminID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `AdminName`, `AdminUsername`, `AdminPassword`, `AdminEmail`, `AdminImage`) VALUES
(1, 'KaiZyong', 'admin', '1234', 'admin@def.com', 'Storage/3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `ProductID` int(11) NOT NULL AUTO_INCREMENT,
  `ProductCode` varchar(20) NOT NULL,
  `ProductName` varchar(250) NOT NULL,
  `ProductQuantity` int(12) NOT NULL,
  `ProductPrice` varchar(12) NOT NULL,
  `ProductDescription` varchar(1000) NOT NULL,
  `ProductImage` varchar(250) NOT NULL,
  `AdminID` int(11) NOT NULL,
  PRIMARY KEY (`ProductID`),
  KEY `AdminID` (`AdminID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductID`, `ProductCode`, `ProductName`, `ProductQuantity`, `ProductPrice`, `ProductDescription`, `ProductImage`, `AdminID`) VALUES
(1, 'D1234', 'Receutics Active Skin Repair', 30, '19.90', 'The skin nourishing ingredients of Receutics Active Skin Repair: Gentle Hydrating Cleanser should be a vital part of every daily skin care routine. Receutics is powerful enough to clear your pores of impurities but gentle enough to be used daily as a facial cleanser, removing dirt and hydrating to restore your skin to its incandescent self. ', 'Storage/00011822555722_1.jpg', 1),
(7, 'D4567', 'Green Wallpaper', 40, '26.88', 'green', 'Storage/2.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `SalesID` int(12) NOT NULL AUTO_INCREMENT,
  `SalesQuantity` int(12) NOT NULL,
  `SalesDate` varchar(225) NOT NULL,
  `SalesTime` varchar(225) NOT NULL,
  `ProductID` int(20) NOT NULL,
  `StaffID` int(11) NOT NULL,
  PRIMARY KEY (`SalesID`),
  KEY `StaffID` (`StaffID`),
  KEY `ProductID` (`ProductID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `StaffID` int(12) NOT NULL AUTO_INCREMENT,
  `StaffName` varchar(250) NOT NULL,
  `StaffUsername` varchar(250) NOT NULL,
  `StaffPassword` varchar(20) NOT NULL,
  `StaffGender` varchar(20) NOT NULL,
  `StaffAge` int(11) NOT NULL,
  `StaffIC` varchar(20) NOT NULL,
  `StaffEmail` varchar(225) NOT NULL,
  `StaffContactNo` varchar(20) NOT NULL,
  `StaffImage` varchar(225) NOT NULL,
  PRIMARY KEY (`StaffID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`StaffID`, `StaffName`, `StaffUsername`, `StaffPassword`, `StaffGender`, `StaffAge`, `StaffIC`, `StaffEmail`, `StaffContactNo`, `StaffImage`) VALUES
(1, 'Maylin', 'staff', '1234', 'Female', 24, '820213065432', 'lily@bcd.com', '0132349876', 'Storage/360desktop_201351011934716_systemp.jpg'),
(2, 'KaiLing', 'ling', '12345', 'Female', 18, '820213065432', 'ling@abc.com', '0132349876', 'Storage/profilepicture.jpg');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`AdminID`) REFERENCES `admin` (`AdminID`);

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_ibfk_2` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`),
  ADD CONSTRAINT `sales_ibfk_3` FOREIGN KEY (`StaffID`) REFERENCES `staff` (`StaffID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
