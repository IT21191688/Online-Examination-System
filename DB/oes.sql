-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2022 at 11:06 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oes`
--

-- --------------------------------------------------------

--
-- Table structure for table `answerscript`
--

CREATE TABLE `answerscript` (
  `stuID` varchar(100) NOT NULL,
  `stName` varchar(100) NOT NULL,
  `answerScriptID` int(20) NOT NULL,
  `enrolmentKey` varchar(100) NOT NULL,
  `examID` enum('1','2','3','4','5','6','7','8','9','10','11','12') NOT NULL,
  `file` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `createexam`
--

CREATE TABLE `createexam` (
  `id` int(11) NOT NULL,
  `exid` varchar(100) NOT NULL,
  `exname` varchar(100) NOT NULL,
  `exdate` varchar(20) NOT NULL,
  `extime` varchar(20) NOT NULL,
  `enroll` varchar(10) NOT NULL,
  `filename` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `registration` varchar(300) NOT NULL,
  `feedback_type` varchar(200) NOT NULL,
  `feedback` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `Registration` varchar(150) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(300) NOT NULL,
  `Inquirytype` enum('type1','type2','type3','type4') NOT NULL,
  `subject` varchar(300) NOT NULL,
  `description` varchar(300) NOT NULL,
  `status` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `resid` int(11) NOT NULL,
  `stid` varchar(20) NOT NULL,
  `stname` varchar(100) NOT NULL,
  `exid` varchar(20) NOT NULL,
  `enroll` varchar(20) NOT NULL,
  `grade` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_ID` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `NIC` varchar(15) NOT NULL,
  `contactNo` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_ID`, `first_name`, `last_name`, `NIC`, `contactNo`, `email`, `username`, `password`, `status`) VALUES
(10, 'User', 'Sample', '200245145632', 784512452, 'sample@gmail.com', 'user@123', 'ba5ef51294fea5cb4eadea5306f3ca3b', 'Employee'),
(11, 'Exam ', 'Administrator', '200145124785', 745124563, 'examAdmin@gmail.com', 'examadmin@123', 'a75b10712b045756dea2a9936281cd7d', 'ExamAdmin'),
(12, 'Examiner', 'Sample', '200145214521', 745423452, 'examiner@gmail.com', 'examiner@123', 'a23078e22ef549c3365d29469ea5b721', 'Examiner'),
(13, 'Support', 'Officer', '20012245213', 754214521, 'officer@gmail.com', 'support@123', '7a8489429cff6d2bc3ac91ca8ac09ad0', 'SupportOfficer'),
(14, 'System', 'Administrator', '200145487563', 754896235, 'admin@gmail.com', 'admin@123', 'e6e061838856bf47e1de730719fb2609', 'Administrator'),
(16, 'Shenal', 'de Silva', '200235200139', 758436072, 'shenaldesilva17@gmail.com', 'shenal@4224', '0510d206f935cfbc7109f4ee7d4d6fb1', 'Employee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answerscript`
--
ALTER TABLE `answerscript`
  ADD PRIMARY KEY (`answerScriptID`);

--
-- Indexes for table `createexam`
--
ALTER TABLE `createexam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`registration`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`resid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answerscript`
--
ALTER TABLE `answerscript`
  MODIFY `answerScriptID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `createexam`
--
ALTER TABLE `createexam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `resid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
