-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2014 at 10:11 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wpa_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_budger_plan_sub`
--

CREATE TABLE IF NOT EXISTS `tbl_budger_plan_sub` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `int_budget_plan_id` int(11) DEFAULT NULL,
  `int_vendor_type_id` int(11) DEFAULT NULL,
  `int_package_id` int(11) DEFAULT NULL,
  `dCost` decimal(10,2) DEFAULT NULL,
  `intEnable` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_budget_plans`
--

CREATE TABLE IF NOT EXISTS `tbl_budget_plans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `intCustomerID` int(11) DEFAULT NULL,
  `cCutomerType` varchar(45) DEFAULT 'C' COMMENT 'C- customer',
  `dCustomerBudget` decimal(10,2) DEFAULT NULL,
  `dFunctionDate` datetime DEFAULT NULL,
  `intDestrict` int(11) DEFAULT NULL,
  `dEstimaedCost` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comments`
--

CREATE TABLE IF NOT EXISTS `tbl_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `strComment` varchar(255) DEFAULT NULL,
  `dAddedTime` datetime DEFAULT NULL,
  `intSeen` int(11) DEFAULT '0',
  `cType` varchar(45) DEFAULT NULL COMMENT 'CV  - from customer',
  `intCustomerID` int(11) DEFAULT NULL,
  `intVendorID` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE IF NOT EXISTS `tbl_customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `strUserName` varchar(255) DEFAULT NULL,
  `strPassword` varchar(45) DEFAULT NULL,
  `strContactNumber` varchar(45) DEFAULT NULL,
  `intEnable` int(11) DEFAULT NULL,
  `strEmailAddress` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer_reviews`
--

CREATE TABLE IF NOT EXISTS `tbl_customer_reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `intCustomerID` int(11) DEFAULT NULL,
  `intVendorID` int(11) DEFAULT NULL,
  `intStars` int(11) DEFAULT NULL,
  `intComment` int(11) DEFAULT NULL,
  `intEnable` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cutomer_profile_posts`
--

CREATE TABLE IF NOT EXISTS `tbl_cutomer_profile_posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `intCustomerID` int(11) DEFAULT NULL,
  `strName` varchar(255) DEFAULT NULL,
  `strDescription` varchar(1000) DEFAULT NULL,
  `strImagePath` varchar(255) DEFAULT NULL,
  `intEnable` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_districts`
--

CREATE TABLE IF NOT EXISTS `tbl_districts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `strName` varchar(255) DEFAULT NULL,
  `intEnable` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guest`
--

CREATE TABLE IF NOT EXISTS `tbl_guest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `strGuestName` varchar(255) DEFAULT NULL,
  `dLoggedTime` datetime DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vender_packages`
--

CREATE TABLE IF NOT EXISTS `tbl_vender_packages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `int_vender_id` int(11) DEFAULT NULL,
  `strName` varchar(255) DEFAULT NULL,
  `strDescription` blob,
  `dPrice` decimal(10,2) DEFAULT NULL,
  `intMaxGuests` int(11) DEFAULT NULL COMMENT 'this is optional',
  `intEnable` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vender_package_images`
--

CREATE TABLE IF NOT EXISTS `tbl_vender_package_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `intVendor_package_id` int(11) DEFAULT NULL,
  `strImagePath` varchar(255) DEFAULT NULL,
  `intEnable` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vender_profile_images`
--

CREATE TABLE IF NOT EXISTS `tbl_vender_profile_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `int_vender_post_id` int(11) DEFAULT NULL,
  `strImagePath` varchar(255) DEFAULT NULL,
  `intEnable` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vender_profile_posts`
--

CREATE TABLE IF NOT EXISTS `tbl_vender_profile_posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `intVenderID` int(11) DEFAULT NULL,
  `strName` varchar(1000) DEFAULT NULL,
  `strDescription` varchar(2000) DEFAULT NULL,
  `intEnable` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vendors`
--

CREATE TABLE IF NOT EXISTS `tbl_vendors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `strUserName` varchar(45) DEFAULT NULL,
  `strPassword` varchar(45) DEFAULT NULL,
  `intTypeID` int(11) DEFAULT NULL,
  `dDateCreated` datetime DEFAULT NULL,
  `dLastLogin` datetime DEFAULT NULL,
  `intApproved` int(11) DEFAULT NULL,
  `intStage` int(11) DEFAULT NULL,
  `strAboutMe` blob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vendor_districts`
--

CREATE TABLE IF NOT EXISTS `tbl_vendor_districts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `intVenderID` int(11) DEFAULT NULL,
  `intDestrictID` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vendor_types`
--

CREATE TABLE IF NOT EXISTS `tbl_vendor_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `strName` varchar(100) DEFAULT NULL,
  `strDescription` varchar(1000) DEFAULT NULL,
  `intBudgerPresentation` int(11) DEFAULT NULL,
  `intEnable` int(11) DEFAULT '1',
  `strImagePath` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_vender_profile_posts`
--
ALTER TABLE `tbl_vender_profile_posts`
  ADD CONSTRAINT `intVenderID` FOREIGN KEY (`id`) REFERENCES `tbl_vendors` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
