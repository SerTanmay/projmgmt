-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 29, 2017 at 01:30 PM
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

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `faculty_name`, `faculty_office_phone`, `faculty_mobile_no`, `faculty_email`, `joining_date`, `gender`, `birthdate`, `teaching_exp`, `industry_exp`, `permanent_address`, `local_address`, `UG_University`, `PG_University`, `pan_card_no`, `election_card_no`) VALUES
(1, 'Rakesh Sharma', 0, 89889328, 'rakesh@gec.com', '0000-00-00', 'M', '0000-00-00', 0, 0, 'Vasco', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_review`
--

CREATE TABLE `faculty_review` (
  `faculty_id` int(11) NOT NULL,
  `rcid` int(11) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE `hod` (
  `faculty_id` int(11) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`faculty_id`, `password`) VALUES
(1, 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `proj`
--

CREATE TABLE `proj` (
  `pid` int(11) NOT NULL,
  `pdescr` int(11) DEFAULT NULL,
  `domain` int(11) DEFAULT NULL,
  `tech_used` int(11) DEFAULT NULL,
  `year` int(11) NOT NULL,
  `rcid` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `rcid` int(11) NOT NULL COMMENT 'review committee id',
  `marks` int(11) NOT NULL,
  `roll_no` int(11) NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review_schedule`
--

CREATE TABLE `review_schedule` (
  `rcid` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `lab` int(11) NOT NULL,
  `pid` int(11) NOT NULL
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

-- --------------------------------------------------------

--
-- Table structure for table `student_mks`
--

CREATE TABLE `student_mks` (
  `roll_no` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `avgmks1` int(11) DEFAULT NULL COMMENT 'average marks of review 1',
  `avgmks2` int(11) DEFAULT NULL COMMENT 'average marks of review 2',
  `avgmks3` int(11) DEFAULT NULL COMMENT 'average marks of review 3',
  `Imarks` int(11) DEFAULT NULL COMMENT 'Final internal marks'
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
-- Indexes for table `proj`
--
ALTER TABLE `proj`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`rcid`);

--
-- Indexes for table `review_schedule`
--
ALTER TABLE `review_schedule`
  ADD PRIMARY KEY (`rcid`,`pid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`roll_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
