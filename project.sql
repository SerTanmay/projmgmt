-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 18, 2017 at 06:15 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` int(11) NOT NULL,
  `faculty_name` varchar(30) NOT NULL,
  `faculty_office_phone` bigint(20) DEFAULT NULL,
  `faculty_mobile_no` bigint(20) DEFAULT NULL,
  `faculty_email` varchar(20) DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `gender` enum('M','F') NOT NULL,
  `birthdate` date NOT NULL,
  `teaching_exp` tinyint(4) DEFAULT NULL,
  `industry_exp` tinyint(4) DEFAULT NULL,
  `permanent_address` varchar(50) DEFAULT NULL,
  `local_address` varchar(50) DEFAULT NULL,
  `UG_University` varchar(20) DEFAULT NULL,
  `PG_University` varchar(20) DEFAULT NULL,
  `pan_card_no` varchar(20) DEFAULT NULL,
  `election_card_no` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `roll_no` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(40) DEFAULT NULL,
  `gender` enum('M','F','Others') NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `phone_no` bigint(20) DEFAULT NULL,
  `email_id` varchar(20) DEFAULT NULL,
  `joining_year` int(11) DEFAULT NULL,
  `fathers_name` varchar(20) DEFAULT NULL,
  `mothers_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`roll_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
