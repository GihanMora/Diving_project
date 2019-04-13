-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2019 at 04:23 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web1`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `BookingID` int(10) NOT NULL,
  `First Name` varchar(100) NOT NULL,
  `Last Name` varchar(100) NOT NULL,
  `Instructor Name` varchar(100) NOT NULL,
  `Course Name` varchar(100) NOT NULL,
  `Booking Date` date NOT NULL,
  `Booking Time` time NOT NULL,
  `No of Stu` int(10) NOT NULL,
  `Course Fee` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`BookingID`, `First Name`, `Last Name`, `Instructor Name`, `Course Name`, `Booking Date`, `Booking Time`, `No of Stu`, `Course Fee`) VALUES
(1, 'Githmi', 'Sandeepani', 'Lal Sembakutti', 'Open Water Diver Course', '2018-06-14', '00:00:00', 2, 0),
(2, 'Imantha', 'Chanu', 'Praveen Wijesooriya', 'Advanced Open Water Diver Courses', '2018-06-14', '00:00:00', 2, 0),
(3, 'chamara', 'perera', 'Erin Murdoch', 'PADI Seal Team (8+)', '2018-07-13', '13:08:00', 2, 0),
(4, '', '', 'Imantha Sembakutti', 'PADI Scuba Diver Course', '2018-05-31', '13:59:00', 3, 0),
(5, 'lakshika', 'gamini', 'Praveen Wijesooriya', 'Master Scuba Diver Courses', '2018-06-19', '00:59:00', 4, 0),
(6, 'dilusha', 'dasanaak', 'Imantha Sembakutti', 'PADI Scuba Diver Course', '2018-06-14', '01:59:00', 3, 400),
(7, 'Charinda', 'Dissanayake', 'Lal Sembakutti', 'Discover Scuba Diving', '2018-06-20', '11:30:00', 3, 500),
(8, 'lakshika', 'gamini', 'Imantha Sembakutti', 'Open Water Diver Course', '2018-06-21', '16:50:00', 3, 600),
(9, '', '', 'http://google.com', 'PADI Scuba Diver Course', '0000-00-00', '00:00:00', 0, 0),
(10, '', '', 'http://google.com', 'PADI Scuba Diver Course', '0000-00-00', '00:00:00', 0, 0),
(11, '', '', 'http://google.com', 'PADI Scuba Diver Course', '0000-00-00', '00:00:00', 0, 0),
(12, '', '', 'http://google.com', 'PADI Scuba Diver Course', '0000-00-00', '00:00:00', 0, 0),
(13, 'prasad', 'fernando', 'Imantha', 'PADI Scuba Diver Course', '2018-09-14', '11:01:00', 1, 100),
(14, 'prasad', 'fernando', 'Imantha', 'PADI Scuba Diver Course', '2018-09-14', '11:01:00', 1, 100),
(15, 'prasad', 'fernando', 'Imantha', 'PADI Scuba Diver Course', '0000-00-00', '00:00:00', 0, 0),
(16, 'prasad', 'fernando', 'Imantha', 'PADI Scuba Diver Course', '0000-00-00', '00:00:00', 0, 0),
(17, 'prasad', 'fernando', 'Imantha', 'PADI Scuba Diver Course', '0000-00-00', '00:00:00', 0, 0),
(18, 'prasad', 'fernando', 'Imantha', 'PADI Scuba Diver Course', '0000-00-00', '00:00:00', 0, 0),
(19, 'prasad', 'fernando', 'Imantha', 'PADI Scuba Diver Course', '0000-00-00', '00:00:00', 0, 0),
(20, 'prasad', 'fernando', 'Imantha', 'PADI Scuba Diver Course', '0000-00-00', '00:00:00', 0, 0),
(21, 'prasad', 'fernando', 'Imantha', 'PADI Scuba Diver Course', '0000-00-00', '00:00:00', 0, 0),
(22, 'prasad', 'fernando', 'Imantha', 'PADI Scuba Diver Course', '0000-00-00', '00:00:00', 0, 100),
(23, 'dddd', 'ffff', 'Lal Sembakutti', 'course', '2018-09-25', '00:59:00', 2, 520),
(24, 'mmmmmmmmmmm', 'kkkkkkk', 'Imantha', 'PADI Scuba Diver Course', '2018-09-29', '02:02:00', 5, 500),
(25, 'mmmmmmmmmmm', 'kkkkkkk', 'Imantha', 'PADI Scuba Diver Course', '2018-09-29', '02:02:00', 5, 500),
(26, 'mmmmmmmmmmm', 'kkkkkkk', 'Imantha', 'PADI Scuba Diver Course', '2018-09-29', '02:02:00', 5, 500),
(27, 'Githmi', 'Sandeepani', 'Imantha', 'PADI Scuba Diver Course', '2018-09-14', '02:03:00', 5, 200),
(28, 'Indre', 'Jayalath', 'Lal Sembakutti', 'PADI Scuba Diver Course', '2018-09-29', '17:10:00', 2, 300),
(29, 'Indre', 'Jayalath', 'Lal Sembakutti', 'PADI Scuba Diver Course', '2018-09-29', '17:10:00', 2, 300),
(30, 'Indre', 'Jayalath', 'Lal Sembakutti', 'PADI Scuba Diver Course', '2018-09-29', '17:10:00', 2, 300),
(31, 'Indre', 'Jayalath', 'Lal Sembakutti', 'PADI Scuba Diver Course', '2018-09-29', '17:10:00', 2, 300),
(32, 'Indre', 'Jayalath', 'Lal Sembakutti', 'PADI Scuba Diver Course', '2018-09-29', '17:10:00', 2, 300),
(33, 'Indre', 'Jayalath', 'Lal Sembakutti', 'PADI Scuba Diver Course', '2018-09-29', '17:10:00', 2, 300),
(34, 'Indika', 'dddddd', 'Imantha', 'PADI Scuba Diver Course', '2018-09-15', '02:06:00', 5, 123),
(35, 'Indika', 'dddddd', 'Imantha', 'PADI Scuba Diver Course', '2018-09-15', '02:06:00', 5, 123),
(36, 'Indika', 'dddddd', 'Imantha', 'PADI Scuba Diver Course', '2018-09-15', '02:06:00', 5, 123),
(37, 'Indika', 'dddddd', 'Imantha', 'PADI Scuba Diver Course', '2018-09-15', '02:06:00', 5, 123),
(38, 'Chanuka', 'Perera', 'Lal Sembakutti', 'Discover Scuba Diving', '2018-09-29', '16:50:00', 2, 200),
(39, 'Githmi', 'Sandeepani', 'Imantha', 'PADI Scuba Diver Course', '2018-09-20', '14:01:00', 3, 300),
(40, 'Githmi', 'Sandeepani', 'Imantha', 'PADI Scuba Diver Course', '2018-09-20', '14:01:00', 3, 300),
(41, 'Yashmi', 'Chamathka', 'Lal Sembakutti', 'Advanced Open Water Diver Courses', '2018-09-19', '16:06:00', 3, 123),
(42, 'Indika', 'Gamini', 'Praveen Wijesooriya', 'Master Scuba Diver Courses', '2018-09-30', '13:59:00', 3, 2),
(43, 'Indika', 'Gamini', 'Praveen Wijesooriya', 'Master Scuba Diver Courses', '2018-09-30', '13:59:00', 3, 2),
(44, 'Indika', 'Gamini', 'Praveen Wijesooriya', 'Master Scuba Diver Courses', '2018-09-30', '13:59:00', 3, 2),
(45, 'Indika', 'Gamini', 'Praveen Wijesooriya', 'Master Scuba Diver Courses', '2018-09-30', '13:59:00', 3, 2),
(46, 'Indika', 'Gamini', 'Praveen Wijesooriya', 'Master Scuba Diver Courses', '2018-09-30', '13:59:00', 3, 2),
(47, 'Indika', 'Gamini', 'Praveen Wijesooriya', 'Master Scuba Diver Courses', '2018-09-30', '13:59:00', 3, 2),
(48, 'Indika', 'Gamini', 'Praveen Wijesooriya', 'Master Scuba Diver Courses', '2018-09-30', '13:59:00', 3, 2),
(49, 'Githmi', 'Sandeepani', 'Lal Sembakutti', 'Advanced Open Water Diver Courses', '2018-09-30', '01:59:00', 2, 200),
(50, 'Githmi', 'Gamini', 'Lal Sembakutti', 'Advanced Open Water Diver Courses', '2018-09-27', '23:59:00', 3, 3435),
(51, 'Githmi', 'Sandeepani', 'Imantha', 'PADI Scuba Diver Course', '2018-10-31', '23:00:00', 3, 300);

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `id_item` int(20) NOT NULL DEFAULT '0',
  `the_date` date NOT NULL DEFAULT '0000-00-00',
  `id_state` int(11) NOT NULL DEFAULT '0',
  `id_booking` int(10) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `id_item`, `the_date`, `id_state`, `id_booking`) VALUES
(1, 1, '2018-10-10', 1, 0),
(2, 1, '2018-10-18', 1, 0),
(3, 1, '2018-10-25', 1, 0),
(4, 1, '2018-10-23', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `bookings_admin_users`
--

CREATE TABLE `bookings_admin_users` (
  `id` int(11) NOT NULL,
  `level` tinyint(1) NOT NULL DEFAULT '2',
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `state` tinyint(1) NOT NULL DEFAULT '1',
  `date_visit` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `visits` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings_admin_users`
--

INSERT INTO `bookings_admin_users` (`id`, `level`, `username`, `password`, `state`, `date_visit`, `visits`) VALUES
(1, 1, 'admin', 'fe01ce2a7fbac8fafaed7c982a04e229', 1, '2018-09-26 10:54:41', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bookings_config`
--

CREATE TABLE `bookings_config` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT '',
  `num_months` tinyint(3) NOT NULL DEFAULT '3',
  `default_lang` varchar(6) NOT NULL DEFAULT 'en',
  `theme` varchar(50) NOT NULL DEFAULT 'default',
  `start_day` enum('mon','sun') NOT NULL DEFAULT 'sun',
  `date_format` enum('us','eu') NOT NULL DEFAULT 'eu',
  `click_past_dates` enum('on','off') NOT NULL DEFAULT 'off',
  `cal_url` varchar(255) NOT NULL DEFAULT '',
  `local_path` varchar(255) NOT NULL DEFAULT '/calendar',
  `version` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings_config`
--

INSERT INTO `bookings_config` (`id`, `title`, `num_months`, `default_lang`, `theme`, `start_day`, `date_format`, `click_past_dates`, `cal_url`, `local_path`, `version`) VALUES
(1, 'Availability Calendar', 3, 'en', 'default', 'sun', 'eu', 'off', '/calander', '/calendar', 'v3.04.04');

-- --------------------------------------------------------

--
-- Table structure for table `bookings_items`
--

CREATE TABLE `bookings_items` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL DEFAULT '1',
  `id_ref_external` int(11) NOT NULL COMMENT 'link to external db table',
  `desc_en` varchar(100) NOT NULL DEFAULT '',
  `desc_es` varchar(100) NOT NULL DEFAULT '',
  `list_order` int(11) NOT NULL DEFAULT '0',
  `state` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings_items`
--

INSERT INTO `bookings_items` (`id`, `id_user`, `id_ref_external`, `desc_en`, `desc_es`, `list_order`, `state`) VALUES
(1, 1, 0, 'Demo Item', 'Demo', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `bookings_last_update`
--

CREATE TABLE `bookings_last_update` (
  `id` int(10) NOT NULL,
  `id_item` int(10) NOT NULL DEFAULT '0',
  `date_mod` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings_last_update`
--

INSERT INTO `bookings_last_update` (`id`, `id_item`, `date_mod`) VALUES
(1, 1, '2018-09-26 10:54:54');

-- --------------------------------------------------------

--
-- Table structure for table `bookings_states`
--

CREATE TABLE `bookings_states` (
  `id` int(11) NOT NULL,
  `desc_en` varchar(100) NOT NULL DEFAULT '',
  `desc_es` varchar(100) NOT NULL DEFAULT '',
  `code` varchar(10) NOT NULL DEFAULT '',
  `state` tinyint(1) NOT NULL DEFAULT '1',
  `list_order` int(11) NOT NULL DEFAULT '0',
  `class` varchar(30) NOT NULL DEFAULT '',
  `show_in_key` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings_states`
--

INSERT INTO `bookings_states` (`id`, `desc_en`, `desc_es`, `code`, `state`, `list_order`, `class`, `show_in_key`) VALUES
(1, 'Booked', 'Reservado', 'b', 1, 0, 'booked', 1),
(2, 'Booked am', 'Reservado am', 'b_am', 1, 1, 'booked_am', 1),
(3, 'Booked pm', 'Reservado pm', 'b_pm', 1, 2, 'booked_pm', 1),
(4, 'Provisional', 'Provisional', 'pr', 1, 3, 'booked_pr', 1),
(5, 'Provisional am', 'Provisional am', 'pr_am', 1, 4, 'booked_pr_am', 1),
(6, 'Provisional pm', 'Provisional pm', 'pr_pm', 1, 5, 'booked_pr_pm', 1);

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `Euip ID` int(10) NOT NULL,
  `Equip Name` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Image` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start_event` datetime NOT NULL,
  `end_event` datetime NOT NULL,
  `instructor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `start_event`, `end_event`, `instructor_id`) VALUES
(5, 'dffvbm,', '2018-06-06 00:00:00', '2018-06-07 00:00:00', 3),
(6, 'bubblemaker', '2018-06-04 00:00:00', '2018-06-05 00:00:00', 3),
(16, 'ad', '2018-06-05 00:00:00', '2018-06-06 00:00:00', 4),
(17, 'ths', '2018-06-14 00:00:00', '2018-06-15 00:00:00', 4),
(18, 'test', '2018-06-03 00:00:00', '2018-06-04 00:00:00', 4),
(19, 'tet', '2018-06-24 00:00:00', '2018-06-25 00:00:00', 2),
(20, 'kkk', '2018-06-13 00:00:00', '2018-06-14 00:00:00', 2),
(21, 'dddd', '2018-06-13 00:00:00', '2018-06-14 00:00:00', 2),
(22, 'ssssssyyy', '2018-06-21 00:00:00', '2018-06-22 00:00:00', 2),
(23, 's', '2018-06-07 00:00:00', '2018-06-08 00:00:00', 2),
(24, 's', '2018-06-20 00:00:00', '2018-06-21 00:00:00', 2),
(25, 's', '2018-06-25 00:00:00', '2018-06-26 00:00:00', 5),
(26, 'y', '2018-06-26 00:00:00', '2018-06-27 00:00:00', 5),
(27, 'd', '2018-06-03 00:00:00', '2018-06-04 00:00:00', 5),
(28, 'test lak', '2018-06-15 00:00:00', '2018-06-16 00:00:00', 2),
(29, 'instructor if', '2018-06-17 00:00:00', '2018-06-18 00:00:00', 1),
(30, '123456', '2018-06-08 00:00:00', '2018-06-09 00:00:00', 2),
(31, 'sddffg', '2018-06-09 00:00:00', '2018-06-10 00:00:00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `professionals`
--

CREATE TABLE `professionals` (
  `InstructorID` int(20) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Instructor Name` varchar(100) NOT NULL,
  `Nationality` varchar(20) NOT NULL,
  `Awards` varchar(100) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `professionals`
--

INSERT INTO `professionals` (`InstructorID`, `Username`, `Password`, `Instructor Name`, `Nationality`, `Awards`, `email`) VALUES
(4, 'Praveen', '123', 'Praveen Wijesooriya', 'Sri Lankan', 'PADI Eliteinstructor 100+ in 2016, 2017', 'praveen@gmail.com'),
(2, 'Imantha', '123', 'Imantha Sembakutti', 'Sri Lankan', 'PADI Elite instructor 100+ in 2016\r\nPADI Eliteinstructor 150+ in 2017', 'imantha@gmail.com'),
(3, 'Lal', '123', 'Lal Sembakutti', 'Sri Lankan', 'PADI Elite instructor 100+ in 2015, 2016, 2017', 'lal@gmail.com'),
(5, 'Erin', '123', 'Erin Murdoch', 'Scottish', 'PADI Elite instructor 100+ in 2015, 2016, 2017', 'erin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `StuID` int(10) NOT NULL,
  `Username` varchar(20) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL,
  `First Name` varchar(100) NOT NULL,
  `Last Name` varchar(100) NOT NULL,
  `Country` text NOT NULL,
  `Address` text NOT NULL,
  `E-mail` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`StuID`, `Username`, `Password`, `First Name`, `Last Name`, `Country`, `Address`, `E-mail`) VALUES
(1, '', '', 'laki', 'gamini', 'Sri Lanka', 'ambalangoda', 'sdgfjhlklkjkjf'),
(2, NULL, NULL, 'dilusha', 'dasanaak', '1', 'ddddddddddddd', 'dg@gmail.cokm'),
(3, NULL, NULL, 'lakshika', 'gamini', '1', 'fgfhghj', 'sftftjki'),
(4, NULL, NULL, 'asd', 'hm', '1', 'ry', 'rerytu'),
(5, NULL, NULL, '', '', '2', '2asdf', 'asfgj'),
(6, NULL, NULL, 'kuma', 'rajapaksha', '3', 'dfegfhnh', 'asdfg'),
(7, NULL, NULL, 'lakshika', 'gamini', '2', 'ddghj', 'laakshimadusha1000@gmail.com'),
(8, NULL, NULL, 'dilusha', 'dasanaak', '3', 'wrrehtju', 'lakshimadusha1000@gmail.com'),
(9, NULL, NULL, 'Charinda', 'Dissanayake', '1', 'wathugedara,Ambalangoda', 'charinda@gmail.com'),
(10, NULL, NULL, 'lakshika', 'gamini', '1', 'qddghgj', 'laakshimadusha1000@gmail.com'),
(11, NULL, NULL, 'Githmi', 'Sandeepani', '1', 'qtgfdsdggfdf', 'githmi@gmail.com'),
(12, NULL, NULL, 'Githmi', 'Sandeepani', '1', 'qtgfdsdggfdf', 'githmi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `first_name` varchar(25) DEFAULT NULL,
  `last_name` varchar(25) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `country` varchar(20) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `nationality` varchar(20) DEFAULT NULL,
  `awards` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `email`, `country`, `address`, `nationality`, `awards`) VALUES
(3, 'admin', '21232f297a57a5a743894a0e4a801fc3', NULL, NULL, 'admin@gmail.com', NULL, NULL, NULL, NULL),
(2, 'lakshika', '81dc9bdb52d04dc20036dbd8313ed055', NULL, NULL, 'dg@gmail.cokm', NULL, NULL, NULL, NULL),
(9, 'Githmi', '202cb962ac59075b964b07152d234b70', NULL, NULL, 'githmi@gmail.com', NULL, NULL, NULL, NULL),
(8, 'gihani', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, 'dg@gmail.cokm', NULL, NULL, NULL, NULL),
(7, 'geema', '080ffa2803d0683595fb5f3c5ad2d244', NULL, NULL, 'geema@gmail.com', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`BookingID`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_item` (`id_item`),
  ADD KEY `id_state` (`id_state`);

--
-- Indexes for table `bookings_admin_users`
--
ALTER TABLE `bookings_admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings_config`
--
ALTER TABLE `bookings_config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings_items`
--
ALTER TABLE `bookings_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_ref_external` (`id_ref_external`);

--
-- Indexes for table `bookings_last_update`
--
ALTER TABLE `bookings_last_update`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_item` (`id_item`);

--
-- Indexes for table `bookings_states`
--
ALTER TABLE `bookings_states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`Euip ID`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professionals`
--
ALTER TABLE `professionals`
  ADD PRIMARY KEY (`InstructorID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`StuID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `BookingID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `bookings_admin_users`
--
ALTER TABLE `bookings_admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bookings_config`
--
ALTER TABLE `bookings_config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bookings_items`
--
ALTER TABLE `bookings_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bookings_last_update`
--
ALTER TABLE `bookings_last_update`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bookings_states`
--
ALTER TABLE `bookings_states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `Euip ID` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `professionals`
--
ALTER TABLE `professionals`
  MODIFY `InstructorID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `StuID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
