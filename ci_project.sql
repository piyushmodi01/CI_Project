-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2017 at 12:43 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ci_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE IF NOT EXISTS `customer_details` (
  `c_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `pan_no` varchar(20) NOT NULL,
  `pan_image` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `logo` text NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `customer_gstn`
--

CREATE TABLE IF NOT EXISTS `customer_gstn` (
  `c_id` int(10) NOT NULL,
  `gstn_no` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `gstn_image` text NOT NULL,
  PRIMARY KEY (`gstn_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customer_po`
--

CREATE TABLE IF NOT EXISTS `customer_po` (
  `c_id` int(10) NOT NULL,
  `cpo_no` varchar(20) NOT NULL,
  `amount` int(50) NOT NULL,
  `date` date NOT NULL,
  `item_desc` text NOT NULL,
  PRIMARY KEY (`cpo_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE IF NOT EXISTS `user_login` (
  `id` int(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'richa', 'ruchiaude@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'user'),
(2, 'piyush', 'piyushmodi01@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
