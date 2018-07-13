-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2018 at 09:42 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `s_no` int(11) NOT NULL,
  `EmpId` varchar(50) NOT NULL,
  `msg` varchar(500) NOT NULL,
  `commented_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `commentor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`s_no`, `EmpId`, `msg`, `commented_at`, `commentor`) VALUES
(1, 'E1', 'You are good', '2017-10-02 16:03:16', 'M1'),
(2, 'E3', 'INC000123456: John Stratton says ‘Anurag is a strong asset to IT. He dint just resolve my issue but also gave me tips to avoid this issue in future’.', '2017-10-02 16:03:16', 'M3'),
(3, 'E3', 'INC000123457: Edward says: ‘Majeed is a strong asset to IT. He dint just resolve my issue but also gave me tips to avoid this issue in future’.', '2017-10-22 13:14:11', 'M3'),
(4, 'M3', 'INC000123456: John Stratton says ‘Majeed is a strong asset to IT. He dint just resolve my issue but also gave me tips to avoid this issue in future’.', '2017-11-14 08:48:18', 'A1'),
(5, 'M3', 'You are very supportive.', '2017-11-19 09:10:53', 'A1');

-- --------------------------------------------------------

--
-- Table structure for table `employee_login`
--

CREATE TABLE `employee_login` (
  `S. No.` int(11) DEFAULT NULL,
  `EmpId` varchar(20) NOT NULL,
  `mgr` varchar(50) DEFAULT NULL,
  `Sun` varchar(50) DEFAULT NULL,
  `Mon` varchar(50) DEFAULT NULL,
  `Tue` varchar(50) DEFAULT NULL,
  `Wed` varchar(50) DEFAULT NULL,
  `Thu` varchar(50) DEFAULT NULL,
  `Fri` varchar(50) DEFAULT NULL,
  `Sat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_login`
--

INSERT INTO `employee_login` (`S. No.`, `EmpId`, `mgr`, `Sun`, `Mon`, `Tue`, `Wed`, `Thu`, `Fri`, `Sat`) VALUES
(1, 'E1', 'M1', 'WO', 'Time', 'Late', 'Time', 'Late', '-', 'WO'),
(2, 'E2', 'M1', 'Time', 'WO', 'WO', 'Time', 'Time', '-', '-'),
(3, 'E3', 'M1', 'Late', 'Time', 'Time', 'WO', 'WO', '-', '-'),
(4, 'E4', 'M2', 'Late', 'Time', 'Time', 'WO', 'WO', '-', '-'),
(5, 'E5', 'M2', 'WO', 'Time', 'Late', 'Time', 'Late', '-', 'WO'),
(6, 'E6', 'M2', 'Time', 'WO', 'WO', 'Time', 'Time', NULL, NULL),
(7, 'E7', 'M3', 'Late', 'Time', 'Time', 'WO', 'WO', '-', '-'),
(8, 'E8', 'M3', 'WO', 'Time', 'Late', 'Time', 'Late', '-', 'WO'),
(9, 'E9', 'M3', 'Time', 'WO', 'WO', 'Time', 'Time', '-', '-'),
(10, 'E10', 'M4', 'Late', 'Time', 'Time', 'WO', 'WO', '-', '-'),
(11, 'E11', 'M4', 'Late', 'Time', 'Time', 'WO', 'WO', '-', '-'),
(12, 'E12', 'M4', 'WO', 'Time', 'Late', 'Time', 'Late', '-', 'WO'),
(13, 'E13', 'M5', 'Time', 'WO', 'WO', 'Time', 'Time', NULL, NULL),
(14, 'E14', 'M5', 'WO', 'Time', 'Late', 'Time', 'Late', '-', 'WO'),
(15, 'E15', 'M5', 'Time', 'WO', 'WO', 'Time', 'Time', '-', '-'),
(16, 'E16', 'M6', 'Late', 'Time', 'Time', 'WO', 'WO', '-', '-'),
(17, 'E17', 'M6', 'Late', 'Time', 'Time', 'WO', 'WO', '-', '-'),
(18, 'E18', 'M6', 'WO', 'Time', 'Late', 'Time', 'Late', '-', 'WO');

-- --------------------------------------------------------

--
-- Table structure for table `metrics`
--

CREATE TABLE `metrics` (
  `s_no` int(11) NOT NULL,
  `EmpId` varchar(20) NOT NULL,
  `mgr` varchar(50) NOT NULL,
  `csat` varchar(50) DEFAULT NULL,
  `aht` float DEFAULT NULL,
  `rr` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `metrics`
--

INSERT INTO `metrics` (`s_no`, `EmpId`, `mgr`, `csat`, `aht`, `rr`) VALUES
(1, 'E1', 'M1', '95%', 13, '73%'),
(2, 'E2', 'M1', '85%', 15, '70%'),
(3, 'E3', 'M1', '70%', 11, '80%'),
(4, 'E4', 'M2', '95%', 12, '65%'),
(5, 'E5', 'M2', '85%', 13, '70%'),
(6, 'E6', 'M2', '70%', 15, '62%'),
(7, 'E7', 'M3', '90%', 13, '85%'),
(8, 'E8', 'M3', '85%', 15, '70%'),
(9, 'E9', 'M3', '70%', 17, '65%'),
(10, 'E10', 'M4', '95%', 11, '70%'),
(11, 'E11', 'M4', '85%', 13, '70%'),
(12, 'E12', 'M4', '70%', 15, '85%'),
(13, 'E13', 'M5', '75%', 13, '85%'),
(14, 'E14', 'M5', '85%', 15, '70%'),
(15, 'E15', 'M5', '70%', 11, '80%'),
(16, 'E16', 'M6', '95%', 18, '90%'),
(17, 'E17', 'M6', '85%', 17, '70%'),
(18, 'E18', 'M6', '70%', 15, '85%');

-- --------------------------------------------------------

--
-- Table structure for table `ot`
--

CREATE TABLE `ot` (
  `s_no` int(11) NOT NULL,
  `msg` varchar(50) DEFAULT NULL,
  `desc` varchar(2000) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ot`
--

INSERT INTO `ot` (`s_no`, `msg`, `desc`, `created`) VALUES
(1, 'Things to lookout for on calls', 'A service desk is a communications center that provides a single point of contact (SPOC) between a company and its customers, employees and business partners. The purpose of a service desk is to ensure that users receive appropriate help in a timely manner. A service desk is a communications center that provides a single point of contact (SPOC) between a company and its customers, employees and business partners. The purpose of a service desk is to ensure that users receive appropriate help. A service desk is a communications center that provides a single point of contact (SPOC) between a company and its customers, employees and business partners. The purpose of a service desk is to ensure that users receive appropriate help in a timely manner. A service desk is a communications center that provides a single point of contact (SPOC) between a company and its customers, employees and business partners. The purpose of a service desk is to ensure that users receive appropriate help in a', '2017-11-23 05:48:14'),
(2, 'Do not disclose SPi on Chats', 'A service desk is a communications center that provides a single point of contact (SPOC) between a company and its customers, employees and business partners. The purpose of a service desk is to ensure that users receive appropriate help in a timely manner.', '2017-11-23 05:48:22'),
(3, 'Do basic check on Status Calls', 'A service desk is a communications center that provides a single point of contact (SPOC) between a company and its customers, employees and business partners. The purpose of a service desk is to ensure that users receive appropriate help in a timely manner.', '2017-11-23 05:48:23'),
(4, 'Always check the Parent Incidents', 'A service desk is a communications center that provides a single point of contact (SPOC) between a company and its customers, employees and business partners. The purpose of a service desk is to ensure that users receive appropriate help in a timely manner.', '2017-11-23 05:48:24'),
(5, 'Always status the user if CC on hold>3mins', 'A service desk is a communications center that provides a single point of contact (SPOC) between a company and its customers, employees and business partners. The purpose of a service desk is to ensure that users receive appropriate help in a timely manner.', '2017-11-23 05:48:26'),
(6, 'Always check the Parent Incidents', 'A service desk is a communications center that provides a single point of contact (SPOC) between a company and its customers, employees and business partners. The purpose of a service desk is to ensure that users receive appropriate help in a timely manner.', '2017-11-23 05:48:27'),
(7, 'Always status the user if CC on hold>3mins', 'A service desk is a communications center that provides a single point of contact (SPOC) between a company and its customers, employees and business partners. The purpose of a service desk is to ensure that users receive appropriate help in a timely manner.', '2017-11-23 05:48:28'),
(10, 'Do basic check on Status Calls', 'Do basic check on Status Calls', '2017-11-23 05:48:30'),
(11, 'vnasjbsuvs', ' cs saubsv js', '2017-11-23 05:48:31');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `s_no` int(11) NOT NULL,
  `question` varchar(50) NOT NULL DEFAULT '0',
  `options1` varchar(50) NOT NULL DEFAULT '0',
  `options2` varchar(50) NOT NULL DEFAULT '0',
  `options3` varchar(50) NOT NULL DEFAULT '0',
  `options4` varchar(50) NOT NULL DEFAULT '0',
  `answer` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`s_no`, `question`, `options1`, `options2`, `options3`, `options4`, `answer`) VALUES
(1, 'Which crop is shown on the largest area in India?', 'Rice', 'Sugarcane', 'Wheat', 'Maize', 'Rice'),
(2, 'The Value of Gold is datermind in', 'Rome', 'Washington', 'Theeran', 'London', 'London'),
(3, 'The state which has the largest number of sugar mi', 'Bihar', 'Haryana', 'Punjab', 'Uttar Pradesh', 'Uttar Pradesh'),
(4, 'First University in India was founded at?', 'Bombay', 'Chennai', 'Calcutta', 'Delhi', 'Calcutta'),
(5, 'Tajmahal is on the banks of', 'Gangas', 'Jamuna', 'Tapti', 'Cauvery', 'Jamuna');

-- --------------------------------------------------------

--
-- Table structure for table `th`
--

CREATE TABLE `th` (
  `s_no` int(11) NOT NULL,
  `msg` varchar(100) DEFAULT NULL,
  `desc` varchar(1000) DEFAULT NULL,
  `hyperword` varchar(20) DEFAULT '0',
  `hyperlink` varchar(50) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `th`
--

INSERT INTO `th` (`s_no`, `msg`, `desc`, `hyperword`, `hyperlink`) VALUES
(1, 'Warm Transfer to EUS_VOIP team', 'Appetizers are short, daily warm-ups that, like any good appetizer, are intended to tantalize the students’ Reading and Math appetites. These appetizers, when used in conjunction with reading programs and math practice help to reinforce skills such as main idea, making predictions, context clues and fact vs opinion.', 'WebEx', ''),
(2, 'New CI info on My Verizon Online', 'Appetizers are short, daily warm-ups that, like any good appetizer, are intended to tantalize the students’ Reading and Math appetites. These appetizers, when used in conjunction with reading programs and math practice help to reinforce skills such as main idea, making predictions, context clues and fact vs opinion.', 'Verizon', 'http://www.verizon.com/about/'),
(3, 'Warm Transfer to EUS_VOIP team', 'Appetizers are short, daily warm-ups that, like any good appetizer, are intended to tantalize the students’ Reading and Math appetites. These appetizers, when used in conjunction with reading programs and math practice help to reinforce skills such as main idea, making predictions, context clues and fact vs opinion.', 'WebEx', ''),
(4, 'Check out the new portal', 'Appetizers are short, daily warm-ups that, like any good appetizer, are intended to tantalize the students’ Reading and Math appetites. These appetizers, when used in conjunction with reading programs and math practice help to reinforce skills such as main idea, making predictions, context clues and fact vs opinion.', 'new portal', 'http://www.verizon.com/about/'),
(5, 'New Windows 10 deployed', 'Appetizers are short, daily warm-ups that, like any good appetizer, are intended to tantalize the students’ Reading and Math appetites. These appetizers, when used in conjunction with reading programs and math practice help to reinforce skills such as main idea, making predictions, context clues and fact vs opinion.', 'WebEx', ''),
(6, 'Warm Transfer to EUS_VOIP team', 'Appetizers are short, daily warm-ups that, like any good appetizer, are intended to tantalize the students’ Reading and Math appetites. These appetizers, when used in conjunction with reading programs and math practice help to reinforce skills such as main idea, making predictions, context clues and fact vs opinion.', 'WebEx', ''),
(7, 'Warm Transfer to EUS_VOIP team', 'Appetizers are short, daily warm-ups that, like any good appetizer, are intended to tantalize the students’ Reading and Math appetites. These appetizers, when used in conjunction with reading programs and math practice help to reinforce skills such as main idea, making predictions, context clues and fact vs opinion.', 'WebEx', ''),
(9, 'This is only fo test', 'Description of the test message', '0', '0'),
(10, 'Warm Transfer to EUS_VOIP team', 'Appetizers are short, daily warm-ups that, like any good appetizer, are intended to tantalize the students’ Reading and Math appetites. These appetizers, when used in conjunction with reading programs and math practice help to reinforce skills such as main idea, making predictions, context clues and fact vs opinion.', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `S. No.` int(11) NOT NULL,
  `EmpId` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mgr` varchar(20) NOT NULL,
  `name` text NOT NULL,
  `pic` text,
  `shiftFrom` varchar(50) NOT NULL,
  `shiftTo` varchar(50) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`S. No.`, `EmpId`, `password`, `mgr`, `name`, `pic`, `shiftFrom`, `shiftTo`, `last_login`) VALUES
(25, 'A1', 'SDPortal@789', '', 'Anuj Singh', '', '', '', '2017-10-22 08:01:36'),
(26, 'A2', 'SDPortal@789', '', 'Sujeet Kumar', '', '', '', '2017-10-22 08:01:44'),
(1, 'E1', 'SDPortal@123', 'M1', 'sushil kumar yadav', '/img/p.jpeg', '5:30 PM', '2:30 AM', '2017-11-19 11:43:01'),
(10, 'E10', 'SDPortal@123', 'M4', 'Kashish Rastogi', '', '9:00 AM', '6:00 PM', '2017-11-19 11:44:21'),
(11, 'E11', 'SDPortal@123', 'M4', 'Santosh Yadav', '', '12:30 PM', '9:30 PM', '2017-11-19 11:44:24'),
(12, 'E12', 'SDPortal@123', 'M4', 'Ravi Singh', '', '3:30 AM', '12:30 PM', '2017-11-19 11:44:27'),
(13, 'E13', 'SDPortal@123', 'M5', 'Abhinav Gupta', '', '5:30 PM', '2:30 AM', '2017-11-19 11:44:29'),
(14, 'E14', 'SDPortal@123', 'M5', 'Dheeraj Kumar', '', '9:30 PM', '6:30 AM', '2017-11-19 11:44:31'),
(15, 'E15', 'SDPortal@123', 'M5', 'Swati ', '', '3:30 PM', '12:30 AM', '2017-11-19 11:44:34'),
(16, 'E16', 'SDPortal@123', 'M6', 'Apporva', '', '9:00 AM', '6:00 PM', '2017-11-19 11:44:36'),
(17, 'E17', 'SDPortal@123', 'M6', 'Sudhir Kumar', '', '12:30 PM', '9:30 AM', '2017-11-19 11:44:38'),
(18, 'E18', 'SDPortal@123', 'M6', 'Barun Singh', '', '3:30 AM', '12:30 PM', '2017-11-19 11:44:40'),
(27, 'E19', 'SDPortal@123', 'M7', 'Ashish', '', '2:30 AM', '5:30 PM', '2017-11-21 18:36:46'),
(2, 'E2', 'SDPortal@123', 'M1', 'Amit Kumar', '', '9:30 PM', '6:30 AM', '2017-11-19 11:44:01'),
(28, 'E20', 'SDPortal@123', 'M7', 'Aryan', NULL, '2:30 PM', '9:30 PM', '2017-11-21 18:42:33'),
(3, 'E3', 'SDPortal@123', 'M1', 'Anurag ', '/img/anurag.jpg', '3:30 PM', '12:30 AM', '2017-11-19 11:44:05'),
(4, 'E4', 'SDPortal@123', 'M2', 'Anuj Kumar', '', '9:00 AM', '6:00 PM', '2017-11-19 11:44:07'),
(5, 'E5', 'SDPortal@123', 'M2', 'Krishna Kumar', '', '12:30 PM', '9:30 PM', '2017-11-19 11:44:10'),
(6, 'E6', 'SDPortal@123', 'M2', 'Anil Singh', '', '3:30 AM', '12:30 PM', '2017-11-19 11:44:12'),
(7, 'E7', 'SDPortal@123', 'M3', 'Jaswant Singh', '', '5:30 PM', '2:30 AM', '2017-11-19 11:44:14'),
(8, 'E8', 'SDPortal@123', 'M3', 'Mukesh Kumar', '', '9:30 PM', '6:30 AM', '2017-11-19 11:44:16'),
(9, 'E9', 'SDPortal@123', 'M3', 'Sachin ', '', '3:30 PM', '12:30 AM', '2017-11-19 11:44:19'),
(19, 'M1', 'SDPortal@456', '', 'Sandeep Kumar', '', '', '', '2017-11-19 11:44:42'),
(20, 'M2', 'SDPortal@456', '', 'Rajeev Gupta', '', '', '', '2017-11-19 11:44:45'),
(21, 'M3', 'SDPortal@456', '', 'Majeed', '/img/majeed.JPG', '', '', '2017-11-19 11:44:47'),
(22, 'M4', 'SDPortal@456', '', 'Mohit Verma', '', '', '', '2017-11-19 11:44:49'),
(23, 'M5', 'SDPortal@456', '', 'Neeraj Tripathi', '', '', '', '2017-11-19 11:44:51'),
(24, 'M6', 'SDPortal@456', '', 'Pankaj Singh', '', '', '', '2017-11-19 11:44:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `employee_login`
--
ALTER TABLE `employee_login`
  ADD KEY `FK_employee_login_users` (`EmpId`);

--
-- Indexes for table `metrics`
--
ALTER TABLE `metrics`
  ADD UNIQUE KEY `s_no` (`s_no`),
  ADD KEY `FK_metrices_users` (`EmpId`);

--
-- Indexes for table `ot`
--
ALTER TABLE `ot`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `th`
--
ALTER TABLE `th`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`EmpId`),
  ADD UNIQUE KEY `S. No.` (`S. No.`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `metrics`
--
ALTER TABLE `metrics`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `ot`
--
ALTER TABLE `ot`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `th`
--
ALTER TABLE `th`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `S. No.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee_login`
--
ALTER TABLE `employee_login`
  ADD CONSTRAINT `FK_employee_login_users` FOREIGN KEY (`EmpId`) REFERENCES `users` (`EmpId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `metrics`
--
ALTER TABLE `metrics`
  ADD CONSTRAINT `FK_metrices_users` FOREIGN KEY (`EmpId`) REFERENCES `users` (`EmpId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
