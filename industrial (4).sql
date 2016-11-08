-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 08, 2016 at 05:50 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `industrial`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `no` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `title` varchar(500) NOT NULL,
  `subtitle` varchar(1000) NOT NULL,
  `project` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`no`, `image`, `title`, `subtitle`, `project`) VALUES
(2, 'http://192.168.2.249/industrial/admin/uploads/1478623525.png', '1', 'qwer', '');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `title` varchar(500) NOT NULL,
  `content` varchar(9000) NOT NULL,
  `no` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `timenow` varchar(15) NOT NULL,
  `creator` varchar(255) NOT NULL,
  `tag` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `cid` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `comment` varchar(5000) NOT NULL,
  `timenow` varchar(255) NOT NULL,
  `pid` int(11) NOT NULL,
  `flag` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `no` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `question` varchar(5000) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paymentid` int(11) NOT NULL,
  `user` varchar(500) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `transactionID` varchar(500) NOT NULL,
  `timenow` varchar(20) NOT NULL,
  `pid` int(11) NOT NULL,
  `rewardtitle` varchar(255) NOT NULL,
  `rewarddescription` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `pid` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `user` varchar(500) NOT NULL,
  `currentamt` decimal(10,0) NOT NULL,
  `needamt` decimal(10,0) NOT NULL,
  `category` varchar(500) NOT NULL,
  `deadline` varchar(100) NOT NULL,
  `timenow` varchar(100) NOT NULL,
  `residence` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `projectdescription` varchar(1000) NOT NULL,
  `projectvideo` varchar(255) NOT NULL,
  `rewardtitle1` varchar(255) NOT NULL,
  `rewardtitle2` varchar(255) NOT NULL,
  `rewardtitle3` varchar(255) NOT NULL,
  `rewardtitle4` varchar(255) NOT NULL,
  `rewardtitle5` varchar(255) NOT NULL,
  `rewarddescription1` varchar(5000) NOT NULL,
  `rewarddescription2` varchar(5000) NOT NULL,
  `rewarddescription3` varchar(5000) NOT NULL,
  `rewarddescription4` varchar(5000) NOT NULL,
  `rewarddescription5` varchar(5000) NOT NULL,
  `rewardamount1` decimal(10,0) NOT NULL,
  `rewardamount2` decimal(10,0) NOT NULL,
  `rewardamount3` decimal(10,0) NOT NULL,
  `rewardamount4` decimal(10,0) NOT NULL,
  `rewardamount5` decimal(10,0) NOT NULL,
  `businesstype` varchar(255) NOT NULL,
  `businessname` varchar(255) NOT NULL,
  `businessid` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `nric` varchar(255) NOT NULL,
  `address` varchar(500) NOT NULL,
  `bankname` varchar(255) NOT NULL,
  `accountno` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`pid`, `title`, `description`, `user`, `currentamt`, `needamt`, `category`, `deadline`, `timenow`, `residence`, `image`, `status`, `projectdescription`, `projectvideo`, `rewardtitle1`, `rewardtitle2`, `rewardtitle3`, `rewardtitle4`, `rewardtitle5`, `rewarddescription1`, `rewarddescription2`, `rewarddescription3`, `rewarddescription4`, `rewarddescription5`, `rewardamount1`, `rewardamount2`, `rewardamount3`, `rewardamount4`, `rewardamount5`, `businesstype`, `businessname`, `businessid`, `firstname`, `lastname`, `nric`, `address`, `bankname`, `accountno`) VALUES
(14, 'A Robot Dancer', 'It''s a asdf fdsgfg', '', '10', '1000', '', '1585921578000', '1477814683000', 'MYR', 'http://192.168.2.249/industrial/uploads/1477929220.jpg', 'Approved', 'gjkghk', 'http://localhost/industrial/uploads/1477829713.mp4', 'Get Kenny', '', '', '', '', 'Kenny is for you !\r\n\r\n\r\nHell YEA', '', '', '', '', '10', '0', '0', '0', '0', '', '', '', '', '', '', '', '', ''),
(15, 'ASD', 'QWER', 'kenny', '11', '12341234', 'Comic', '1479962467000', '1477975226000', 'MYR', 'http://192.168.2.249/industrial/uploads/1477975789.png', 'Approved', 'QWEFADSFASDF', 'http://192.168.2.249/industrial/uploads/1477975712.mp4', 'asdf', '', '', '', '', ' asdf', '', '', '', '', '11', '0', '0', '0', '0', '', '', '', '', '', '', '', '', ''),
(16, 'Dog', '', 'VIVEEK', '0', '0', 'Animals', '', '1477985299000', 'MYR', 'http://192.168.2.249/industrial/img/lightbulb.jpeg', 'pending', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '', '', '', '', '', '', '', '', ''),
(17, 'Beautiful art', 'beautiful', 'kenny', '0', '10000', 'Art', '1479557240000', '1477993944000', 'MYR', 'http://192.168.2.249/industrial/uploads/1478002818.jpg', 'In Review', 'asdf', 'http://192.168.2.249/industrial/uploads/1478002069.mp4', 'asdf', '', '', '', '', ' asdf', '', '', '', '', '10', '0', '0', '0', '0', '', '', '', '1234', '41234', '950206-10-6687', '1234', 'Maybank', '12341234'),
(18, 'Space Cadet 3.0', '', 'ArcheinTech', '0', '0', 'Gaming', '', '1478064222000', 'MYR', 'http://192.168.2.249/industrial/img/lightbulb.jpeg', 'Approved', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '', '', '', '', '', '', '', '', ''),
(19, 'Contemporary', 'Superb dance form', 'Asyraf', '0', '1000', 'Dance', '1480578529000', '1478072881000', 'MYR', 'http://192.168.2.249/industrial/img/lightbulb.jpeg', 'pending', '', '', 'Beginner', 'Amateur', '', '', '', ' 1 day class ', '3 time classes', '', '', '', '10', '25', '0', '0', '0', '', '', '', 'Muhammad', 'Asyraf', '941022-08-5485', 'Unimy', 'Maybank', '1298012308921'),
(20, 'sfdg', '', 'kenny', '0', '0', 'Animals', '', '1478436199000', 'MYR', 'http://192.168.2.249/industrial/img/lightbulb.jpeg', 'pending', '', '', 'dfgsd', '', '', '', '', 'wert dfgh', '', '', '', '', '10', '0', '0', '0', '0', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `no` int(11) NOT NULL,
  `tag` varchar(500) NOT NULL,
  `timenow` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`no`, `tag`, `timenow`) VALUES
(1, 'test', '1476368173000'),
(2, 'asdf', '1478619870000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `U_ID` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(8000) NOT NULL,
  `password` varchar(300) NOT NULL,
  `reg_date` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `profilepic` varchar(400) NOT NULL,
  `displayname` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `verified` varchar(10) NOT NULL,
  `website` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`U_ID`, `f_name`, `l_name`, `email`, `address`, `password`, `reg_date`, `role`, `profilepic`, `displayname`, `contact`, `verified`, `website`) VALUES
(3, 'your first name', 'your last name', 'kwangmengkenny@icloud.com', 'your house address', '$2y$10$JoyZeldj3N4zn5vAwt1thuogICYIRMDBxnJvi1Y4WQDG1VOIURt9u', '1472460819', 'admin', 'http://192.168.2.249/industrial/uploads/1477929080.12', 'kenny', 'your phone number', 'true', ''),
(4, 'your first name', 'your last name', 'kwangmengkenny@hotmail.my', 'your house address', '$2y$10$yJ3LzCQ4obe3EyWFOy6Koezkatd9.bAEnBD/clNPmSqLVVTYzzbOu', '1473229114', 'user', '', 'username', 'your phone number', 'false', ''),
(7, 'VIVEEKDEEP', 'SINGH', 'viveek22@gmail.com', 'No.3, Lorong Dua, Taman Maju Indah, 32000 Sitiawan, Perak Darul Ridzuan', '$2y$10$G4DOyJAYZgbQOYQAu9pwNO9H9kaU/FyzcIjzXaUEhVEWX1vjeX9P6', '1477984965', 'user', 'http://192.168.2.249/industrial/img/avatar.png', 'VIVEEK', '01116572437', 'true', ''),
(8, 'Mohammad Asyraf', 'Ismail', 'beta.asyraf95@gmail.com', 'Suria 2 3-2, Cyber Heights Villa, Cyberjaya, Selangor', '$2y$10$lYmal0X9oi0/14tXkoImse4kzb4QuZ2FPZ/zEHIruUMRixmmw3kyG', '1478063522', 'user', 'http://192.168.2.249/industrial/uploads/1478064072.png', 'ArcheinTech', '+60199564456', 'true', 'www.archeintech.com'),
(9, '', '', 'najib@unimy.edu.my', '', '$2y$10$iD4gznkDfMRF7xOzwMFAEeyOUfpRB494v7mWSOrm8yfLlYqp.WXrO', '1478069473', 'user', 'http://192.168.2.249/industrial/img/avatar.png', '', '', 'true', ''),
(10, 'Muhammad ', 'Asyraf', 'm.asyraf@student.unimy.edu.my', 'Unimy', '$2y$10$DRzEBcZ12dzRtQSKqsZhiuDzVznz7Eo0q6.NULr/o/Vl0cxznGyEe', '1478072322', 'user', 'http://192.168.2.249/industrial/img/avatar.png', 'Asyraf', '', 'true', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentid`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`U_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `paymentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `U_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
