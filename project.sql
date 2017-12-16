-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 16, 2017 at 07:35 PM
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
(1, 'J.A.Laxminarayana', 8322733451, 89889328, 'jal@gec.com', '0000-00-00', 'M', '0000-00-00', 0, 5, 'Vasco', '', 'Mysore', 'Mysore', '1233', '6784'),
(2, 'Marushka Mascarenhas', 8322733452, 8622791235, 'marushka@gec.com', '1999-07-02', 'F', '1968-05-12', 20, 2, 'margao', '', 'goa', 'bombay', '1234', '5678'),
(3, 'Amit Patil', 8322733453, 9422654651, 'amit@gec.com', '2013-04-02', 'M', '1978-04-09', 6, 1, 'ponda', 'dhavali', 'goa', 'karnataka', '1237', '6789'),
(4, 'Vineet Jain', 8322733454, 9823654141, 'vineet@gec.com', '2000-06-04', 'M', '1978-02-15', 15, 2, 'ponda', 'Mardol', 'Delhi', 'Pilani', '1235', '6780'),
(5, 'Nagraj vernekar', 8322733455, 9423881166, 'nagraj@gec.com', '1998-04-02', 'M', '1989-08-11', 21, 3, 'mapusa', 'panjim', 'bombay', 'bombay', '1236', '6781');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_login`
--

CREATE TABLE `faculty_login` (
  `faculty_id` int(11) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_login`
--

INSERT INTO `faculty_login` (`faculty_id`, `password`) VALUES
(2, 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_review`
--

CREATE TABLE `faculty_review` (
  `faculty_id` int(11) NOT NULL,
  `rcid` int(11) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_review`
--

INSERT INTO `faculty_review` (`faculty_id`, `rcid`, `year`) VALUES
(2, 2, 2016),
(3, 2, 2016),
(5, 1, 2016);

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
  `pdescr` varchar(50) DEFAULT NULL,
  `domain` varchar(30) DEFAULT NULL,
  `tech_used` varchar(30) DEFAULT NULL,
  `year` int(11) NOT NULL,
  `rcid` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proj`
--

INSERT INTO `proj` (`pid`, `pdescr`, `domain`, `tech_used`, `year`, `rcid`, `faculty_id`) VALUES
(1, 'home automation', 'iot', 'microcontroller', 2016, 1, 4),
(2, 'machine interfacing', 'machine learning', 'linux server kernel', 2016, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `faculty_id` int(11) NOT NULL,
  `rcid` int(11) NOT NULL COMMENT 'review committee id',
  `roll_no` int(11) NOT NULL COMMENT 'student roll no.',
  `marks` int(11) NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review_details`
--

CREATE TABLE `review_details` (
  `rcid` int(11) NOT NULL,
  `rdate` date NOT NULL,
  `rtime` time NOT NULL,
  `lab` varchar(25) NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_details`
--

INSERT INTO `review_details` (`rcid`, `rdate`, `rtime`, `lab`, `pid`) VALUES
(2, '2017-12-18', '13:00:00', 'MP', 1);

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
-- Dumping data for table `student`
--

INSERT INTO `student` (`roll_no`, `name`, `address`, `gender`, `date_of_birth`, `phone_no`, `email_id`, `joining_year`, `fathers_name`, `mothers_name`) VALUES
(141205012, 'Rahul', 'panjim', 'M', '1995-12-06', 9822164451, 'rm@gmail.com', 2013, 'Rakesh', 'Reena'),
(141205025, 'Seema', 'ponda', 'F', '1995-07-19', 9822164444, 'seema@gmail.com', 2013, 'Ramesh', 'Sneha');

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
-- Dumping data for table `student_mks`
--

INSERT INTO `student_mks` (`roll_no`, `pid`, `faculty_id`, `avgmks1`, `avgmks2`, `avgmks3`, `Imarks`) VALUES
(141205012, 2, 3, 9, 8, NULL, 17);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `faculty_login`
--
ALTER TABLE `faculty_login`
  ADD KEY `faculty_id` (`faculty_id`);

--
-- Indexes for table `hod`
--
ALTER TABLE `hod`
  ADD KEY `faculty_id` (`faculty_id`);

--
-- Indexes for table `proj`
--
ALTER TABLE `proj`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `faculty_id` (`faculty_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD KEY `roll_no` (`roll_no`),
  ADD KEY `faculty_id` (`faculty_id`);

--
-- Indexes for table `review_details`
--
ALTER TABLE `review_details`
  ADD PRIMARY KEY (`rcid`,`pid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `student_mks`
--
ALTER TABLE `student_mks`
  ADD KEY `roll_no` (`roll_no`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `faculty_login`
--
ALTER TABLE `faculty_login`
  ADD CONSTRAINT `faculty_login_ibfk_1` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`);

--
-- Constraints for table `hod`
--
ALTER TABLE `hod`
  ADD CONSTRAINT `hod_ibfk_1` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`);

--
-- Constraints for table `proj`
--
ALTER TABLE `proj`
  ADD CONSTRAINT `proj_ibfk_1` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`roll_no`) REFERENCES `student` (`roll_no`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`);

--
-- Constraints for table `student_mks`
--
ALTER TABLE `student_mks`
  ADD CONSTRAINT `student_mks_ibfk_1` FOREIGN KEY (`roll_no`) REFERENCES `student` (`roll_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
