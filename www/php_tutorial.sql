-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2017 at 08:16 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_tutorial`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `name` text NOT NULL,
  `father name` text NOT NULL,
  `mother name` text NOT NULL,
  `enrollment no` varchar(20) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `nation` varchar(10) NOT NULL,
  `category` varchar(10) NOT NULL,
  `physically handicapped` varchar(10) NOT NULL,
  `ex serviceman` varchar(10) NOT NULL,
  `date of birth` date NOT NULL,
  `address1` varchar(30) NOT NULL,
  `address2` varchar(30) NOT NULL,
  `address3` varchar(30) NOT NULL,
  `district` text NOT NULL,
  `state` text NOT NULL,
  `pin` bigint(20) NOT NULL,
  `mobileno` bigint(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `preference1` varchar(40) NOT NULL,
  `preference2` varchar(40) NOT NULL,
  `insti_name` varchar(40) NOT NULL,
  `programme` varchar(30) NOT NULL,
  `sub_cat` varchar(30) NOT NULL,
  `desi_of_emp` varchar(40) NOT NULL,
  `desig_of_applicant` varchar(40) NOT NULL,
  `exp_from` date NOT NULL,
  `exp_to` date NOT NULL,
  `dd` varchar(20) NOT NULL,
  `dd_date` date NOT NULL,
  `bank` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `father name`, `mother name`, `enrollment no`, `sex`, `nation`, `category`, `physically handicapped`, `ex serviceman`, `date of birth`, `address1`, `address2`, `address3`, `district`, `state`, `pin`, `mobileno`, `email`, `preference1`, `preference2`, `insti_name`, `programme`, `sub_cat`, `desi_of_emp`, `desig_of_applicant`, `exp_from`, `exp_to`, `dd`, `dd_date`, `bank`) VALUES
(119, 'yash natani', 'dinesh natani', 'jyoti natani', '13eucee095', 'male', 'indian', 'general', 'no', 'no', '2017-05-18', 'purana bazar', 'sangod', '', 'kota', 'rajasthan', 325601, 8824079615, 'ynyashnatani99@gmail.com', 'rtu kota', 'jecrc jaipur', 'RTU', 'fulltime', 'pt1', 'teacher', 'student', '2017-05-05', '2017-05-06', '7687678', '2017-05-04', 'sbi'),
(110, 'yash natani', 'd', 'jyoti natani', '13eucee095', 'male', 'indian', 'general', 'no', 'no', '2005-07-13', 'oisdhishdkjvskdjbv', 'njkbjkbkjb', '', 'kota', 'rajasthan', 3579327598, 883482789, 'ynyashnatani99@gmail.com', '', '', '', 'parttime', 'ft1', '', '', '2017-05-13', '2017-05-13', '59873953', '2017-05-11', 'sbi'),
(111, 'yash natani', 'd', 'jyoti natani', '13eucee095', 'male', 'indian', 'general', 'no', 'no', '2005-07-13', 'oisdhishdkjvskdjbv', 'njkbjkbkjb', '', 'kota', 'rajasthan', 3579327598, 883482789, 'ynyashnatani99@gmail.com', '', '', '', 'parttime', 'ft1', '', '', '2017-05-13', '2017-05-13', '59873953', '2017-05-11', 'sbi'),
(112, 'yash natani', 'd', 'jyoti natani', '13eucee095', 'male', 'indian', 'general', 'no', 'no', '2005-07-13', 'oisdhishdkjvskdjbv', 'njkbjkbkjb', '', 'kota', 'rajasthan', 3579327598, 883482789, 'ynyashnatani99@gmail.com', '', '', '', 'parttime', 'ft1', '', '', '2017-05-13', '2017-05-13', '59873953', '2017-05-11', 'sbi'),
(113, 'yash natani', 'd', 'jyoti natani', '13eucee095', 'male', 'indian', 'general', 'no', 'no', '2005-07-13', 'oisdhishdkjvskdjbv', 'njkbjkbkjb', '', 'kota', 'rajasthan', 3579327598, 883482789, 'ynyashnatani99@gmail.com', '', '', '', 'parttime', 'ft1', '', '', '2017-05-13', '2017-05-13', '59873953', '2017-05-11', 'sbi'),
(114, 'yash natani', 'd', 'jyoti natani', '13eucee095', 'male', 'indian', 'general', 'no', 'no', '2005-07-13', 'oisdhishdkjvskdjbv', 'njkbjkbkjb', '', 'kota', 'rajasthan', 3579327598, 883482789, 'ynyashnatani99@gmail.com', '', '', '', 'parttime', 'ft1', '', '', '2017-05-13', '2017-05-13', '59873953', '2017-05-11', 'sbi'),
(115, 'yash natani', 'd', 'jyoti natani', '13eucee095', 'male', 'indian', 'general', 'no', 'no', '2005-07-13', 'oisdhishdkjvskdjbv', 'njkbjkbkjb', '', 'kota', 'rajasthan', 3579327598, 883482789, 'ynyashnatani99@gmail.com', '', '', '', 'parttime', 'ft1', '', '', '2017-05-13', '2017-05-13', '59873953', '2017-05-11', 'sbi'),
(116, 'yash natani', 'd', 'jyoti natani', '13eucee095', 'male', 'indian', 'general', 'no', 'no', '2005-07-13', 'oisdhishdkjvskdjbv', 'njkbjkbkjb', '', 'kota', 'rajasthan', 3579327598, 883482789, 'ynyashnatani99@gmail.com', '', '', '', 'parttime', 'ft1', '', '', '2017-05-13', '2017-05-13', '59873953', '2017-05-11', 'sbi'),
(117, 'yash natani', 'd', 'jyoti natani', '13eucee095', 'male', 'indian', 'general', 'no', 'no', '2005-07-13', 'oisdhishdkjvskdjbv', 'njkbjkbkjb', '', 'kota', 'rajasthan', 3579327598, 883482789, 'ynyashnatani99@gmail.com', '', '', '', 'parttime', 'ft1', '', '', '2017-05-13', '2017-05-13', '59873953', '2017-05-11', 'sbi'),
(118, 'vivek singhal', 'vivek singhal', 'vivek singhal', '13eucee094', 'male', 'indian', 'general', 'no', 'no', '2017-05-19', 'GJHVGHJV NVHJVMNB NVVBMN', '', '', 'kota', 'rajasthan', 686897, 8824079615, 'ynyashnatani99@gmail.com', 'YASH NATANI', 'LOKESH JUDANI', 'RTU', 'parttime', 'ft5', 'teacher', 'student', '2017-05-13', '2017-05-15', '281768', '2017-05-17', 'hdfc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
