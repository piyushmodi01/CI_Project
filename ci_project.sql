-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2017 at 11:02 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

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
  `logo` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`c_id`, `name`, `address`, `email`, `service_tax`, `pan_no`, `tin_no`, `ct_no`, `logo`) VALUES
(1, 'Piyush', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'assets/upload/'),
(2, 'Ajay', 'asdasdasd', 'asd23423', 'asddhfd', 'cvbc', 'asd234234', 'asdxcxcv', 'assets/upload/'),
(3, 'Nitesh', 'asd34t3', 'asdcvbfb', 'asxcvdxcv', 'xcvxcv', 'asd131', 'xcv', 'assets/upload/'),
(4, 'Bhavin', 'asdgbvc', 'asd123', 'xcvbghtre', 'asd3412', 'asd123123', 'asd234wqe', 'assets/upload/');

-- --------------------------------------------------------

--
-- Table structure for table `customer_invoice`
--

CREATE TABLE IF NOT EXISTS `customer_invoice` (
  `bill_no` varchar(20) NOT NULL,
  `cpo_id` int(11) NOT NULL,
  `item_desc` text NOT NULL,
  `amount` varchar(10) NOT NULL,
  `service_tax` varchar(10) NOT NULL,
  `KKC` varchar(10) NOT NULL,
  `SBC` varchar(10) NOT NULL,
  `VAT` varchar(10) NOT NULL,
  `total` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer_po`
--

INSERT INTO `customer_po` (`cpo_id`, `c_id`, `amount`, `cpo_no`, `date`, `item_desc`) VALUES
(1, 1, '250000', 'JIO123ABRAJ', '2017-05-01', 'JIO Tower Setting up'),
(2, 1, '100000', 'CPO1252JIO', '2017-05-01', 'Add JIO Network');

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

-- --------------------------------------------------------

--
-- Table structure for table `vendor_details`
--

CREATE TABLE IF NOT EXISTS `vendor_details` (
  `vendor_id` int(10) unsigned NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_gst`
--

CREATE TABLE IF NOT EXISTS `vendor_gst` (
  `id` int(10) unsigned NOT NULL,
  `vendor_id` int(10) NOT NULL,
  `state` varchar(30) NOT NULL,
  `tin_no` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `customer_invoice`
--
ALTER TABLE `customer_invoice`
  ADD PRIMARY KEY (`bill_no`);

--
-- Indexes for table `customer_po`
--
ALTER TABLE `customer_po`
  ADD PRIMARY KEY (`cpo_id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `customer_po`
--
ALTER TABLE `customer_po`
  MODIFY `cpo_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
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
