-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2017 at 09:37 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
`c_id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `service_tax` varchar(10) NOT NULL,
  `pan_no` varchar(20) NOT NULL,
  `tin_no` varchar(20) NOT NULL,
  `ct_no` varchar(20) NOT NULL,
  `logo` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `customer_po`
--

CREATE TABLE IF NOT EXISTS `customer_po` (
`cpo_id` int(10) NOT NULL,
  `c_id` int(10) NOT NULL,
  `amount` varchar(10) NOT NULL,
  `cpo_no` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `item_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------



--
-- Table structure for table `vendor_details`
--

CREATE TABLE IF NOT EXISTS `vendor_details` (
`vendor_id` int(10) unsigned NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_gst`
--

CREATE TABLE IF NOT EXISTS `vendor_gst` (
`id` int(10) unsigned NOT NULL,
  `vendor_id` int(10) NOT NULL,
  `state` varchar(30) NOT NULL,
  `tin_no` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_po`
--

CREATE TABLE IF NOT EXISTS `vendor_po` (
`id` int(10) NOT NULL,
  `vendor_id` int(10) NOT NULL,
  `vpo_no` varchar(25) NOT NULL,
  `amount` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `cpo_no` varchar(20) NOT NULL,
  `item_desc` text NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
 ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `customer_po`
--
ALTER TABLE `customer_po`
 ADD PRIMARY KEY (`cpo_id`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
 ADD `id` int(11) NOT NULL COMMENT 'PRIMARY KEY and ID for every user';

--
-- Indexes for table `vendor_details`
--
ALTER TABLE `vendor_details`
 ADD PRIMARY KEY (`vendor_id`);

--
-- Indexes for table `vendor_gst`
--
ALTER TABLE `vendor_gst`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_po`
--
ALTER TABLE `vendor_po`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer_po`
--
ALTER TABLE `customer_po`
MODIFY `cpo_id` int(10) NOT NULL AUTO_INCREMENT;
--
--
-- AUTO_INCREMENT for table `vendor_details`
--
ALTER TABLE `vendor_details`
MODIFY `vendor_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vendor_gst`
--
ALTER TABLE `vendor_gst`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vendor_po`
--
ALTER TABLE `vendor_po`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

--
-- Table structure for table `user_login`
--

CREATE TABLE IF NOT EXISTS `user_login` (
`id` int(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'richa', 'ruchiaude@gmail.com', '12345678', 'user'),
(2, 'piyush', 'piyushmodi01@gmail.com', '123456789', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;


ALTER TABLE `customer_details` CHANGE `logo` `logo` TEXT NOT NULL;



