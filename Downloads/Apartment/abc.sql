-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 01, 2019 at 05:41 PM
-- Server version: 5.0.33
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `abc`
--
CREATE DATABASE `abc` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `abc`;

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE IF NOT EXISTS `complain` (
  `cid` int(11) NOT NULL auto_increment,
  `email` varchar(50) NOT NULL,
  `ctype` varchar(50) NOT NULL,
  `cdate` varchar(50) NOT NULL,
  `cdesc` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY  (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`cid`, `email`, `ctype`, `cdate`, `cdesc`, `status`) VALUES
(2, 'reenaoswal404@gmail.com', 'electric', '2019-11-22', 'bulb not working', 'not'),
(3, 'reenaoswal404@gmail.com', 'plumbing', '2019-11-22', 'pipe leak', 'not'),
(6, 'reenaoswal404@gmail.com', 'general', '2019-11-22', 'lan is not working', 'not'),
(8, 'reenaoswal404@gmail.com', 'electric', '2019-11-22', 'LED Bulb fused', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `eid` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `work` varchar(50) NOT NULL,
  `salary` varchar(50) NOT NULL,
  `mobno` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`eid`, `name`, `work`, `salary`, `mobno`) VALUES
('1', 'pallabi', 'president', '35000', ''),
('231', 'bhuvan kumar', 'security guard', '10000', '7986577451');

-- --------------------------------------------------------

--
-- Table structure for table `employee_salary`
--

CREATE TABLE IF NOT EXISTS `employee_salary` (
  `eid` int(11) NOT NULL auto_increment,
  `ename` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `month_salary` varchar(12) NOT NULL,
  `status` varchar(50) NOT NULL,
  `etype` varchar(50) NOT NULL,
  PRIMARY KEY  (`eid`,`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `employee_salary`
--

INSERT INTO `employee_salary` (`eid`, `ename`, `mobile`, `email`, `month_salary`, `status`, `etype`) VALUES
(1, 'reena oswal', '9165333968', 'reenaoswal404@gmail.com', '1000', 'active', 'treasurer 1'),
(2, 'richa mehra', '8879683452', 'richamehra@gmail.com', '2000', 'active', 'treasurer2'),
(3, 'shraddha priya', '9865742365', 'shraddhapriya@gmail.com', '2500', 'active', 'office bearer'),
(5, 'prachi', '9845742365', 'prachi.kale@gmail.com', '1500', 'active', 'secretary'),
(6, 'pallabi', '8898742365', 'palllabi.123@gmail.com', '3500', 'active', 'President');

-- --------------------------------------------------------

--
-- Table structure for table `expenditure`
--

CREATE TABLE IF NOT EXISTS `expenditure` (
  `doorno` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `expenditure` varchar(50) NOT NULL,
  `maintenanceDesc` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expenditure`
--

INSERT INTO `expenditure` (`doorno`, `date`, `expenditure`, `maintenanceDesc`) VALUES
('1-N-229-12-1', '2019-11-21', '1000', 'EBB'),
('1-N-229-12-2', '2019-11-20', '2000', 'Telephone Expences'),
('1-N-229-12-5', '2019-11-18', '1000', 'Diesel'),
('1-N-229-12-3', '2019-11-20', '1500', 'Office Expenses'),
('1-N-229-12-4', '2019-11-18', '2000', 'Stationery'),
('1-N-229-12-5', '2019-11-11', '5000', 'Inspection'),
('1-N-229-12-2', '2019-11-20', '2000', 'Taxes');

-- --------------------------------------------------------

--
-- Table structure for table `flat1`
--

CREATE TABLE IF NOT EXISTS `flat1` (
  `name` varchar(50) default NULL,
  `door` varchar(50) default NULL,
  `month` varchar(50) default NULL,
  `paymode` varchar(50) default NULL,
  `chq_trac_no` varchar(50) default NULL,
  `paydate` date default NULL,
  `issued_receipt` varchar(50) NOT NULL default '',
  `amount` varchar(50) NOT NULL,
  `approve` varchar(50) NOT NULL default 'not approved',
  PRIMARY KEY  (`issued_receipt`),
  UNIQUE KEY `chq_trac_no` (`chq_trac_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flat1`
--

INSERT INTO `flat1` (`name`, `door`, `month`, `paymode`, `chq_trac_no`, `paydate`, `issued_receipt`, `amount`, `approve`) VALUES
('Reena os', '1-N-12-229/1', 'july', 'cash', '123998', '2019-11-15', '116655', '11000disabled', 'aprove'),
('shraddha', '1-N-12-229/3', 'jan', 'credit card', '122254', '2019-01-17', '122564', '10002', 'aprove'),
('Reena ', '1-N-12-229/1', 'jun', 'netbanking', '123444', '2019-11-19', '123480', '120000', 'aprove'),
('riya', '1-N-12-229/1', 'august', 'netbanking', '123234', '2019-11-18', '123487', '12300', 'approved'),
('Reena Oswal', '1-N-12-229/1', 'april', 'online', '123990', '2019-11-09', '123489', '30000', 'approved'),
('Reena Oswal', '1-N-12-229/1', 'april', 'netbanking', '123999', '2019-11-17', '123497', '20000', 'approved'),
('Ravina Oswal', '1-N-12-229/1', 'december', 'credit card', '12399978', '2019-11-19', '123607', '12301', 'not '),
('Reena Oswal', '1-N-12-229/1', 'november', 'netbanking', '1234511', '2019-11-22', '123777', '6000', 'not '),
('richa', '1-N-12-229/1', 'jan', 'cash', '123888', '2019-11-08', '123897', '10000', 'not '),
('richa', '1-N-12-229/1', 'sept', 'cash', '123901', '2019-11-22', '125497', '7000', 'not ');

-- --------------------------------------------------------

--
-- Table structure for table `flatowner`
--

CREATE TABLE IF NOT EXISTS `flatowner` (
  `Door` varchar(30) default NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(20) default NULL,
  `photo` varchar(500) default NULL,
  `photoid` varchar(500) default NULL,
  `fname` varchar(50) default NULL,
  `mname` varchar(50) default NULL,
  `occupation` varchar(50) default NULL,
  `commadd` varchar(100) default NULL,
  `peradd` varchar(100) default NULL,
  `flatocc` varchar(20) default NULL,
  `approve` varchar(50) NOT NULL,
  `addarpic` varchar(60) NOT NULL,
  PRIMARY KEY  (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flatowner`
--

INSERT INTO `flatowner` (`Door`, `email`, `contact`, `photo`, `photoid`, `fname`, `mname`, `occupation`, `commadd`, `peradd`, `flatocc`, `approve`, `addarpic`) VALUES
('1-N-229-12/1', 'reenaoswal404@gmail.com', '7987462010', 'photos/picc.jpeg', 'photos/id.jpg', 'Hiralal Oswal', 'Srekuver Oswal', 'student', 'Khachrod ,ujjain', 'Khachrod ,ujjain', 'occupied', '', 'photos/aadhar.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `letter`
--

CREATE TABLE IF NOT EXISTS `letter` (
  `Reference` varchar(70) NOT NULL,
  `Date` date NOT NULL,
  `Froml` varchar(60) NOT NULL,
  `Too` varchar(60) NOT NULL,
  `Subject` varchar(70) NOT NULL,
  `Body` varchar(120) NOT NULL,
  `lid` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `letter`
--

INSERT INTO `letter` (`Reference`, `Date`, `Froml`, `Too`, `Subject`, `Body`, `lid`) VALUES
('a', '2019-11-20', 'c', 'd', 'e', 'f', 'p@h.com'),
('a', '2019-11-20', 'c', 'd', 'e', 'f', 'p@h.com'),
('d', '2019-11-20', 'f', 'g', 'h', 'i', 'z@h.com'),
('s', '2019-11-20', 'a', 'c', 'd', 'e', 'e@e.com'),
('a', '2019-11-20', 'a', 'b', 'vf', 'g', '2'),
('55', '2019-11-23', '2', 'rr', 'hh', '55', '5'),
('Secretary, Star Apartment', '2019-12-12', 'prachi.kale@gmail.com', 'owners', 'invitation for christmas celeberation', 'all are invited for the Christmas celebration in the Apartment Club.', '1');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `utype` varchar(50) NOT NULL,
  PRIMARY KEY  (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`, `utype`) VALUES
('mehraricha29@gmail.com', 'abcd1234', 'treasurer'),
('pallabi.123@gmail.com', '12345', 'president'),
('prachi.kale@gmail.com', '12345', 'secretary'),
('reenaoswal404@gmail.com', '12345', 'user'),
('shraddhapriya@gmail.com', '12345', 'bearer');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
  `Reference` varchar(60) NOT NULL,
  `Date` date NOT NULL,
  `Froml` varchar(60) NOT NULL,
  `Too` varchar(60) NOT NULL,
  `Subject` varchar(60) NOT NULL,
  `Body` varchar(120) NOT NULL,
  `nid` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`Reference`, `Date`, `Froml`, `Too`, `Subject`, `Body`, `nid`) VALUES
('--', '2019-11-30', 'prachi.kale@gmail.com', 'owners', 'regarding rent  ', '9500 to 10000 per month', '123');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE IF NOT EXISTS `owner` (
  `door` varchar(32) NOT NULL,
  `flat` int(14) NOT NULL,
  `father` varchar(50) NOT NULL,
  `mother` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `commadd` varchar(50) NOT NULL,
  `peradd` varchar(50) NOT NULL,
  `mob` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `flatstatus` varchar(50) NOT NULL,
  `approvalstatus` varchar(32) NOT NULL default 'not yet aproved'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`door`, `flat`, `father`, `mother`, `name`, `occupation`, `commadd`, `peradd`, `mob`, `email`, `flatstatus`, `approvalstatus`) VALUES
('1-N-12-123/1', 1, 'Reena Oswal', 'b', 'Reena Oswal', 'student', 'e', 'Khachrod ,ujjain', '', 'reenaoswal404@gmail.com', 'i', 'aproved'),
('1-N-12-123/2', 2, 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'not yet aproved'),
('1-N-12-123/3', 3, 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', ' not yet aproved'),
('1-G-34-234/55', 1, 'kjlk', 'njk', 'jnlk', 'nkkl', '', 'AT POST BAWANBIR, Ta Sangrampur', '0997540913', 'prachikaleg22@gmail.com', '', 'aproved'),
('1-G-34-234/81', 1, 'gg', 'ggg', 'gg', 'dd', '', 'AT POST BAWANBIR, Ta Sangrampurhhhhhhh', '0997540913', 'prachikaleg22@gmail.co', '', 'aproved'),
('1-G-34-234/57', 7, 'hhhhh', 'ggg', 'gggg', 'dd', '', 'AT POST BAWANBIR, Ta Sangrampur', '0997540913', 'p@e.v', '', ' aproved'),
('1-G-34-234/59', 9, 'jj', 'hha@b.', 'ii', 'dd', '', 'AT POST BAWANBIR, Ta Sangrampur', '0997540913', 'a@b.n', 'Yes', 'aproved'),
('1-G-34-234/59', 1, 'gg', 'gg', 'aa', 'gg', 'a', 'a', 'ff', 'e@e.v', 'Yes', 'aproved'),
('1-G-34-234/5', 0, '', '', '', '', '', '', '', '', 'Yes', 'aproved'),
('1-G-34-234/5', 1, 'h', 'hh', 'gg', 'dd', 'AggT POST BAWANBIR', 'AggT POST BAWANBIR', '0997540913', 'e@e.v', 'Yes', 'aproved'),
('1-G-34-234/9', 6, 'hh', 'hh', 'ww', 'dd', 'AT POST BAWANBIR', 'AT POST BAWANBIR, Ta Sangrampur', '0997540913', 'e@e.g', 'Yes', 'aproved');

-- --------------------------------------------------------

--
-- Table structure for table `rcontact`
--

CREATE TABLE IF NOT EXISTS `rcontact` (
  `Door` varchar(25) NOT NULL,
  `Contact` varchar(11) NOT NULL,
  PRIMARY KEY  (`Door`,`Contact`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rcontact`
--

INSERT INTO `rcontact` (`Door`, `Contact`) VALUES
('1-N-12-277/1', '8358890552'),
('1-N-12-277/1', '8978675689');

-- --------------------------------------------------------

--
-- Table structure for table `remail`
--

CREATE TABLE IF NOT EXISTS `remail` (
  `Door` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `vkey` varchar(50) default NULL,
  PRIMARY KEY  (`Door`,`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `remail`
--

INSERT INTO `remail` (`Door`, `email`, `vkey`) VALUES
('1-N-12-277/1', 'mehraricha29@gmail.com', '803444'),
('1-N-12-277/1', 'richmehra29@gmail.com', '130354');

-- --------------------------------------------------------

--
-- Table structure for table `tenant`
--

CREATE TABLE IF NOT EXISTS `tenant` (
  `name` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `photoid` varchar(500) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `peradd` varchar(50) NOT NULL,
  `addprf` varchar(500) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `vehicletype` varchar(30) NOT NULL,
  `vehicleregno` varchar(30) NOT NULL,
  PRIMARY KEY  (`vehicleregno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tenant`
--

INSERT INTO `tenant` (`name`, `fname`, `mname`, `occupation`, `photoid`, `photo`, `peradd`, `addprf`, `contact`, `email`, `vehicletype`, `vehicleregno`) VALUES
('Reena Oswal', 'hiralal oswal', 'srekuver oswal', 'student', 'photos/food.jpg', 'photos/shutt.jpg', 'ujjain mp', 'photos/shutt.jpg', '9236548754', 'reenaoswal404@gmail.com', 'bike', '12334'),
('Abc', 'xyz', 'mno', 'occ', 'photos/food.png', 'photos/shutt.jpg', 'add', 'photos/images.jpg', '6789543298', 'mehraricha29@gmail.com', 'Two', 'mp0956');
