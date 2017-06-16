-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2017 at 11:32 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`c_id`, `name`, `address`, `pan_no`, `pan_image`, `email`, `logo`) VALUES
(1, 'Piyush Modi', 'Sanganer\r\nNear Mansa', 'DP123MPA22', 'assets/upload/331ae9eeca52ca86decc199732c17c85.png', 'Piyush@gmail.com', 'assets/upload/102fa55f6149b8fe1958336d24b2d86b.png'),
(12, 'E', 'FnKgFnKgFnKgFnKgFnKg', 'FnKgFnKg12', 'assets/upload/47cc0f3ea6367a5122a4a7cd23f5712d.png', 'bi@zid.com', 'assets/upload/fd3eec6a2d8ce994f6382d7c0aa174e9.png');

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
(3, '345678', 'Bihar', ''),
(1, '98765432', 'Assam', ''),
(1, 'asdasdasda', 'Andhra Pradesh', ''),
(1, 'gagagagagaaga', 'Gujarat', 'assets/upload/addCustomer_gstnImage_21069e3cd19746b1ed12abb1f9e736d5.png');

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
(2, 'Boyash123124', 5000, '2017-06-09', 'Item Item hai'),
(1, 'dfghjnbvfg13', 2343, '2017-06-09', 'hgdhfbsndm');

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
  `pan_image` text NOT NULL,
  `company_reg_no` varchar(30) NOT NULL,
  `date_of_inc` date NOT NULL,
  `prov_fund_no` varchar(25) NOT NULL,
  `pf_image` text NOT NULL,
  `esi_reg_no` varchar(25) NOT NULL,
  `esi_image` text NOT NULL,
  `invoice_currency` varchar(50) NOT NULL,
  `bank_name` varchar(60) NOT NULL,
  `bank_address` text NOT NULL,
  `cheque_image` text NOT NULL,
  `bank_country` varchar(40) NOT NULL,
  `branch_no` varchar(20) NOT NULL,
  `account_no` varchar(25) NOT NULL,
  `ifsc_code` varchar(20) NOT NULL,
  `swift_no` varchar(30) NOT NULL,
  `iban_no` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor_additional_details`
--

INSERT INTO `vendor_additional_details` (`v_id`, `tan_no`, `pan_no`, `pan_image`, `company_reg_no`, `date_of_inc`, `prov_fund_no`, `pf_image`, `esi_reg_no`, `esi_image`, `invoice_currency`, `bank_name`, `bank_address`, `cheque_image`, `bank_country`, `branch_no`, `account_no`, `ifsc_code`, `swift_no`, `iban_no`) VALUES
(5, '234567890', '2345678909876', '', '234567890987654', '0000-00-00', '23456789765432', '', '23456789', '', 'INR', 'asdasdasdasda', '  345tyhgfderf 345tyhgfderf 345tyhgfderf 345tyhgfderf', '', 'India', '23456789098765', '345678909876543', '34567890987654rfc', '', ''),
(1, '0987654321', '0987654321', 'assets/upload/9744d7d7118f10f03aae3ba997d02f3d.png', '1234567890', '2017-06-21', '1234567890', 'assets/upload/19f927da33361e0a1148c259667edebe.png', '1234567890', 'assets/upload/3ad65b68a28d74dd1be507b9cffbd700.png', 'INR', 'SBI', '1234567890\r\nMansarovar\r\n1234567890', 'assets/upload/3ad65b68a28d74dd1be507b9cffbd700.png', 'India', '098765432', '09876543', '9876543', '8765432', '98765432'),
(2, '23456789', '34567890', 'assets/upload/', '34567890', '2017-06-15', '1234567890', 'assets/upload/', '34567890-', 'assets/upload/', 'INR', 'po98765rew', 'sjkdgnsd,sdfgsdhgsjkdgnsd,sdfgsdhgsjkdgnsd,sdfgsdhgsjkdgnsd,sdfgsdhgsjkdgnsd,sdfgsdhgsjkdgnsd,sdfgsdhgsjkdgnsd,sdfgsdhg', 'assets/upload/', 'India', 'wertyuiop', '234567890', '234567890', '098765432', '34567890'),
(3, '1234567890', '1234567890', 'assets/upload/', '123456789', '2017-06-28', '1234567890', 'assets/upload/', 'Bu', 'assets/upload/', 'INR', '1234567890', 'Vusjoveg jeba peiluhe bucuna nogu kecelga sedvigci murpovno mohescuf da to dad ese kojo to. Uwcam cuorcor ribde kafar ijdot iv jivfiblab cofkighu feneoru aj va witem honis mopipe. Kuwmuhop fuivi je iwdohu hag du nobupel ge fu ku ocarbo vohop hefacabum fepur usebum maeli. If besaj vas barco ok nerhaca rudzopwon obodieb faw tudves rivhiceb alu todekuf wehepu wofi. Pi kumal ri pu busah cu luwa gemiweb vibaz owigarki wadnet pureile pag zup nidemsi. Gebidij kadletsal geraz wuco fosanwip la urag ri noju mi ohze si ti rar pezzesfan sudpegi.', 'assets/upload/', 'India', '234567890p', '234567890', '234567890', 'Niiu', '234567890');

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
  `email` varchar(50) NOT NULL,
  `type` varchar(10) NOT NULL,
  `status` varchar(12) NOT NULL DEFAULT 'disapproved'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor_details`
--

INSERT INTO `vendor_details` (`v_id`, `name`, `contact_person`, `address`, `country`, `landline_no`, `mobile_no`, `fax_no`, `email`, `type`, `status`) VALUES
(2, 'DemoVendor', 'Demo Contact Person', 'Demo Address\r\nMansarovar\r\nJaipur\r\n3242343', 'India', '1234567890', '0987654321', '1234567890', '234567890@gaga.com', 'direct', 'approved'),
(1, 'djfhsbdfdsjfhsbfsjhfmbsnsdmnf', 'Lgw', 'Hezud avjapid fi oc opejocali bofaok ve fulzo zatsian cobmugsi zeuhuca hucoguk okaojotuh. Lemgifev wa ze jokefcu vuk fomumop rimsu uva wa neh koc fobuz uwguh sako lugu zibvihe uz fomuc. Gas motlaide no du uho ena fen sivle ezees sizovmip zeki we ji kudom jajjetti.', 'India', 'Oaakoaaoea', 'Naaa  bhma', '1234567890', 'ek@din.co.uk', 'direct', 'disapproved');

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

--
-- Dumping data for table `vendor_gstn`
--

INSERT INTO `vendor_gstn` (`v_id`, `gstn_no`, `state`, `gstn_image`) VALUES
(2, '098765432', 'Bihar', 'screenshots.jpg'),
(2, '0987654321', 'Assam', ''),
(1, '234', 'Arunachal Pradesh', ''),
(3, '98765434567', 'Chhattisgarh', '');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_po`
--

CREATE TABLE IF NOT EXISTS `vendor_po` (
  `v_id` int(5) NOT NULL,
  `cpo_no` varchar(20) NOT NULL,
  `vpo_no` varchar(20) NOT NULL,
  `amount` varchar(6) NOT NULL,
  `item_desc` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor_po`
--

INSERT INTO `vendor_po` (`v_id`, `cpo_no`, `vpo_no`, `amount`, `item_desc`, `email`, `date`) VALUES
(1, '23423refdscx', '23456789', '234567', '23456', 'asdas@asdasd.co.in', '2017-06-01'),
(1, 'dfghjnbvfg13', '1234567890', '123456', 'ertyujhgfdsc', 'd@gmail.com', '2017-06-19'),
(2, 'dfghjnbvfg13', '3456', '789', '345676trew3456545', '2@aga.com', '2017-06-25');

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
-- Indexes for table `vendor_gstn`
--
ALTER TABLE `vendor_gstn`
  ADD PRIMARY KEY (`gstn_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
