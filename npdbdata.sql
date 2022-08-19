-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2022 at 07:27 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `npdbdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `is_delete` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `email`, `password`, `is_delete`, `created_at`) VALUES
(1, 'dimpy', 'dimpybca@gmail.com', 'dimpy!1', 0, '2021-07-22 09:43:29');

-- --------------------------------------------------------

--
-- Table structure for table `betch_no`
--

CREATE TABLE `betch_no` (
  `id` int(11) NOT NULL,
  `batch_no` varchar(50) NOT NULL,
  `report_no1` varchar(250) NOT NULL,
  `report_no2` varchar(250) NOT NULL,
  `packing_date` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `betch_no`
--

INSERT INTO `betch_no` (`id`, `batch_no`, `report_no1`, `report_no2`, `packing_date`) VALUES
(4, 'DS09GD066', 'IFS-210713086,IFS-210713086N', 'FL/FA/23072021-017,FL/FA/SL/23072021-005', '07/2021'),
(3, '2536', '2107210031,2107220351,2108120090', 'FL/FA/10082021-001,FL/FA/SL/10082021-001', '08/2021');

-- --------------------------------------------------------

--
-- Table structure for table `customer_quary`
--

CREATE TABLE `customer_quary` (
  `id` int(11) NOT NULL,
  `cus_name` varchar(100) NOT NULL,
  `cus_phone` varchar(13) NOT NULL,
  `cus_email` varchar(100) NOT NULL,
  `cus_quary` text NOT NULL,
  `adm_ans` text DEFAULT NULL,
  `is_delete` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_quary`
--

INSERT INTO `customer_quary` (`id`, `cus_name`, `cus_phone`, `cus_email`, `cus_quary`, `adm_ans`, `is_delete`, `created_at`) VALUES
(8, 'sonakshi ', '8094386221', 'sonakshi@sociapa.com', 'want in bulk ', 'okay', 0, '2021-07-23 16:56:13'),
(9, 'Amit Kumar', '1234567890', 'amit@mail.com', 'hii i am amit', 'what are you doing here', 0, '2021-07-28 01:41:48'),
(10, 'Bablu Thakur', '9570259929', 'dkthakur509@gmail.com', 'hay i want to know more about it.', NULL, 0, '2021-07-28 04:02:45'),
(11, 'Vicky Thakur', '9525651584', 'vicky@gmail.com', 'can i buy it in bulk.', 'yes you can', 0, '2021-07-28 04:12:35'),
(12, 'Chintu Thakur', '7654761579', 'chintu@gmail.com', 'i want to buy it in bulk.', 'yes you can', 0, '2021-07-28 04:17:51'),
(13, 'Pintu Thakur', '8678055796', 'pintu@gmail.com', 'i want to buy it in bulk.', 'yes you can.', 0, '2021-07-28 04:26:29'),
(14, 'Parvez', '8052837744', 'khanparvez7744@gmail.com', '', NULL, 0, '2021-07-29 07:53:14'),
(15, '', '', '', '', NULL, 0, '2021-07-29 07:53:31'),
(16, 'dfdfdf', 'dfdf', 'dfdf', '', NULL, 0, '2022-03-07 12:00:36'),
(17, 'dfdfdf', 'dfdf', 'dfdf', '', NULL, 0, '2022-03-07 12:00:38'),
(18, 'dfdfdf', 'dfdf', 'dfdf', '', NULL, 0, '2022-03-07 12:00:39'),
(19, 'a', 'a', 'a', '', NULL, 0, '2022-03-07 12:15:32'),
(20, 'dfdf', 'dfdf', 'fdfdfdfdf', '', NULL, 0, '2022-03-07 12:15:49'),
(21, 'dfdf', 'dfdf', 'fdfdfdfdf', '', NULL, 0, '2022-03-07 12:19:16'),
(22, 'parvez', '8052837744', 'web@sociapa.com', '', NULL, 0, '2022-03-07 12:19:37'),
(23, 'parvez', '8052837744', 'web@sociapa.com', '', NULL, 0, '2022-03-07 12:22:34'),
(24, 'javed', '8052837744', 'khanparvez7744@gmail.com', '', NULL, 0, '2022-03-07 12:23:01'),
(25, 'a', 'a', 'a@a', '', NULL, 0, '2022-03-07 12:43:05');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_info`
--

CREATE TABLE `enquiry_info` (
  `id` int(11) NOT NULL,
  `batch_no` varchar(11) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_no` varchar(13) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry_info`
--

INSERT INTO `enquiry_info` (`id`, `batch_no`, `c_name`, `c_no`) VALUES
(1, 'DS08GD065', 'Dhiraj Thakur', '8920602400'),
(2, 'DS29FD055', 'Dimpy Kumar', '8920602400'),
(3, '2536', '', ''),
(4, 'DS09GD066', '', ''),
(5, '2536', '', ''),
(6, '2536', '', ''),
(7, '2536', '', ''),
(8, '2536', '', ''),
(9, '2536', '', ''),
(10, '12345', 'Dheeraj Raj', '8375828920'),
(11, '2536', '', ''),
(12, '2536', '', ''),
(13, '2536', '', ''),
(14, '2536', '', ''),
(15, '2536', '', ''),
(16, '2536', '', ''),
(17, '2536', '', ''),
(18, '2536', '', ''),
(19, '2536', '', ''),
(20, '2536', '', ''),
(21, '2537', '', ''),
(22, '2536', '', ''),
(23, '2537', '', ''),
(24, '2536', '', ''),
(25, '2536', '', ''),
(26, '2537', '', ''),
(27, '2536', '', ''),
(28, '2537', '', ''),
(29, '2597', '', ''),
(30, 'Ghjjj', '', ''),
(31, '2536', '', ''),
(32, '2536', '', ''),
(33, '2536', '', ''),
(34, '2536', '', ''),
(35, '2536', '', ''),
(36, '2536', '', ''),
(37, '2536', '', ''),
(38, '2536', '', ''),
(39, '2536', '', ''),
(40, '2536', '', ''),
(41, '2536', '', ''),
(42, '2536', '', ''),
(43, '2536', '', ''),
(44, '2535', '', ''),
(45, 'dfdf', 'parvez', '8052837744'),
(46, '2536', 'parvez', '8052837744'),
(47, '2536', 'parvez', '8052837744'),
(48, '2536', 'parvez', '8052837744'),
(49, '2536', 'parvez', '8052837744'),
(50, '2536', 'parvez', '8052837744'),
(51, '2536', 'parvez', '8052837744'),
(52, '2536', 'parvez', '8052837744'),
(53, '2536', 'parvez', '8052837744'),
(54, '2536', 'parvez', '8052837744'),
(55, '2536', 'parvez', '8052837744'),
(56, '2536', 'parvez', '8052837744'),
(57, '2536', 'parvez', '8052837744'),
(58, '2536', 'parvez', '8052837744'),
(59, '2536', 'parvez', '8052837744'),
(60, '2536', 'parvez', '8052837744'),
(61, '2536', 'parvez', '8052837744'),
(62, '2536', 'parvez', '8052837744'),
(63, '2536', 'parvez', '8052837744'),
(64, '2536', 'parvez', '8052837744'),
(65, '2536', 'parvez', '8052837744'),
(66, '2536', 'parvez', '8052837744'),
(67, '2536', 'parvez', '8052837744'),
(68, '2536', 'parvez', '8052837744'),
(69, '2536', 'parvez', '8052837744'),
(70, '2536', 'parvez', '8052837744'),
(71, '2536', 'parvez', '8052837744'),
(72, '2536', 'parvez', '8052837744'),
(73, '2536', 'parvez', '8052837744'),
(74, '2536', 'dfdf', '8052837744'),
(75, '2536', 'dfdf', '8052837744'),
(76, '2536', 'dfdf', '8052837744'),
(77, '2536', 'parvez', '8052837744'),
(78, '2536', 'parvez', '8052837744'),
(79, '2536', 'parvez', '8052837744'),
(80, '2536', 'parvez', '8052837744'),
(81, '2536', 'parvez', '8052837744'),
(82, '2536', 'parvez', '8052837744'),
(83, '2536', 'parvez', '8052837744'),
(84, '2536', 'parvez', '8052837744'),
(85, '2536', 'parvez', '8052837744'),
(86, '2536', 'parvez', '8052837744'),
(87, '2536', 'parvez', '8052837744'),
(88, '2536', 'parvez', '8052837744'),
(89, '2536', 'parvez', '8052837744'),
(90, '2536', 'parvez', '8052837744'),
(91, '2536', 'parvez', '8052837744'),
(92, '2536', 'parvez', '8052837744'),
(93, '2536', 'dfdf', '8052837744'),
(94, '2536', 'dfdf', '8052837744'),
(95, '2536', 'dfdf', '8052837744'),
(96, '2536', 'dfdf', '8052837744'),
(97, '2536', 'dfdf', '8052837744'),
(98, '2536', 'dfdf', '8052837744'),
(99, '2536', 'dfdf', '8052837744'),
(100, '2536', 'dfdf', '8052837744'),
(101, '2536', 'dfdf', '8052837744'),
(102, '2536', 'dfdf', '8052837744'),
(103, '2536', 'dfdf', '8052837744'),
(104, '2536', 'dfdf', '8052837744'),
(105, '2536', 'dfdf', '8052837744'),
(106, '2536', 'dfdf', '8052837744'),
(107, '2536', 'dfdf', '8052837744'),
(108, '2536', 'dfdf', '8052837744'),
(109, '2536', 'dfdf', '8052837744'),
(110, '2536', 'dfdf', '8052837744'),
(111, '2536', '', ''),
(112, '2536', '', ''),
(113, '2536', '', ''),
(114, '11111', '', ''),
(115, '11111', '', ''),
(116, '11111', '', ''),
(117, '11111', '', ''),
(118, '11111', '', ''),
(119, '11111', '', ''),
(120, '11111', '', ''),
(121, '11111', '', ''),
(122, 'DS08GD065', 'Dhiraj Thakur', '8920602400'),
(123, '12345', 'Dheeraj Raj', '8375828920'),
(124, 'sds', 'sdsd', '232323'),
(125, '2323', '', '232323');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `betch_no`
--
ALTER TABLE `betch_no`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_quary`
--
ALTER TABLE `customer_quary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry_info`
--
ALTER TABLE `enquiry_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `betch_no`
--
ALTER TABLE `betch_no`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer_quary`
--
ALTER TABLE `customer_quary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `enquiry_info`
--
ALTER TABLE `enquiry_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
