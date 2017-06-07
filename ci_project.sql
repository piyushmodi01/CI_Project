-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2017 at 11:44 AM
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
  `name` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `pan_no` varchar(20) NOT NULL,
  `pan_image` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `logo` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`c_id`, `name`, `address`, `pan_no`, `pan_image`, `email`, `logo`) VALUES
(1, 'Piyush Modi', 'jaipur', 'asd213asd2', '', 'piyushmodi01@gmail.c', ''),
(2, 'Ajay', 'Manali', '123asd1231', '', 'ajay@haha.com', ''),
(3, 'Mr Piyush Modi', 'mansarovar', '12124545as', 'assets/upload/screenshots.jpg', 'piyush@gmail.com', 'assets/upload/');

-- --------------------------------------------------------

--
-- Table structure for table `customer_gstn`
--

CREATE TABLE IF NOT EXISTS `customer_gstn` (
  `c_id` int(10) NOT NULL,
  `gstn_no` varchar(20) NOT NULL,
  `state` varchar(30) NOT NULL,
  `gstn_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer_gstn`
--

INSERT INTO `customer_gstn` (`c_id`, `gstn_no`, `state`, `gstn_image`) VALUES
(1, '12134568108as', 'rajasthan', ''),
(1, '123123213', 'Bihar', ''),
(1, 'asdasd', '0', ''),
(2, 'asdasdasd', 'Arunachal Pradesh', ''),
(1, 'asdasdasda', 'Andhra Pradesh', ''),
(1, 'asdasdasdasd', 'Arunachal Pradesh', ''),
(2, 'asdasdasdasdasdasd', 'Andhra Pradesh', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer_po`
--

CREATE TABLE IF NOT EXISTS `customer_po` (
  `c_id` int(10) NOT NULL,
  `cpo_no` varchar(20) NOT NULL,
  `amount` int(50) NOT NULL,
  `date` date NOT NULL,
  `item_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer_po`
--

INSERT INTO `customer_po` (`c_id`, `cpo_no`, `amount`, `date`, `item_desc`) VALUES
(2, 'Boyash123124', 5000, '2017-06-09', 'Item Item hai');

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
-- Table structure for table `vendor_additional_details`
--

CREATE TABLE IF NOT EXISTS `vendor_additional_details` (
  `v_id` int(4) NOT NULL,
  `tan_no` varchar(20) NOT NULL,
  `pan_no` varchar(20) NOT NULL,
  `company_reg_no` varchar(30) NOT NULL,
  `date_of_inc` date NOT NULL,
  `prov_fund_no` varchar(25) NOT NULL,
  `esi_reg_no` varchar(25) NOT NULL,
  `invoice_currency` varchar(50) NOT NULL,
  `bank_name` varchar(60) NOT NULL,
  `bank_address` text NOT NULL,
  `cheque_image` text NOT NULL,
  `country` varchar(40) NOT NULL,
  `branch_no` varchar(20) NOT NULL,
  `account_no` varchar(25) NOT NULL,
  `ifsc_code` varchar(20) NOT NULL,
  `swift_no` varchar(30) NOT NULL,
  `iban_no` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_details`
--

CREATE TABLE IF NOT EXISTS `vendor_details` (
  `v_id` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact_person` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `country` varchar(50) NOT NULL,
  `landline_no` varchar(20) NOT NULL,
  `mobile_no` varchar(13) NOT NULL,
  `fax_no` varchar(13) NOT NULL,
  `email` int(50) NOT NULL,
  `type` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'unapproved'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_gstn`
--

CREATE TABLE IF NOT EXISTS `vendor_gstn` (
  `v_id` int(4) NOT NULL,
  `gstn_no` varchar(20) NOT NULL,
  `state` varchar(30) NOT NULL,
  `gstn_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_po`
--

CREATE TABLE IF NOT EXISTS `vendor_po` (
  `cpo_no` varchar(20) NOT NULL,
  `vpo_no` varchar(20) NOT NULL,
  `amount` varchar(6) NOT NULL,
  `item_desc` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `customer_gstn`
--
ALTER TABLE `customer_gstn`
  ADD PRIMARY KEY (`gstn_no`);

--
-- Indexes for table `customer_po`
--
ALTER TABLE `customer_po`
  ADD PRIMARY KEY (`cpo_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
