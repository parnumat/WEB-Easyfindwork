-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 26, 2019 at 04:53 PM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `efw`
--

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `ID` int(10) NOT NULL,
  `member_code` int(10) NOT NULL,
  `User_Name` varchar(100) NOT NULL,
  `User_Email` varchar(100) NOT NULL,
  `Property` text NOT NULL,
  `Facebook` varchar(100) NOT NULL,
  `PhoneNumber` int(10) NOT NULL,
  `name_job` varchar(100) NOT NULL,
  `Price` int(11) NOT NULL,
  `Photo_Name` varchar(100) NOT NULL,
  `Status` int(11) DEFAULT NULL,
  `Score` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`ID`, `member_code`, `User_Name`, `User_Email`, `Property`, `Facebook`, `PhoneNumber`, `name_job`, `Price`, `Photo_Name`, `Status`, `Score`) VALUES
(1, 2, 'หนุ่ม บางประตง ', 'parnumat@hotmail.com', 'คนน่ารัก ', 'parnumat', 989944588, 'Painter', 500, '', 1, 1),
(4, 2, 'Parnumat Niropas', 'parnumat.n@ku.th', 'อยากได้Aครับ555', 'parnumat@hotmail.com', 989931699, 'HTML/CSS', 10000, '1529664315.png', 1, 0),
(5, 2, 'Parnumat Niropas', 'world_worm@hotmail.com', 'so petty.', 'parnumat@hotmail.com', 989931699, 'Gamer', 1200, '1529677519.jpg', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `business` varchar(100) NOT NULL,
  `name_job` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `ID` int(11) NOT NULL,
  `mem_name` varchar(255) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`ID`, `mem_name`, `Email`, `Password`) VALUES
(2, 'Parnumat', 'parnumat@hotmail.com', 'parnumat'),
(3, 'worm', 'worm@hotmail.com', '1234'),
(4, 'ra', 'ra@hotmail.com', 'parnumat'),
(5, 'Ice', 're@hotmail.com', 'parnumat'),
(6, 'rad', 'robot@hotmail.com', 'parnumat'),
(7, 'toe', 'toe@hotmail.com', 'toe'),
(8, 'ไอ้หนุ่มดิงดอง', 'kardpon007@gmail.com', '1150'),
(9, 'Alex', 'dasd@ko', 'asd'),
(10, 'Alex', 'asd@asd', 'asd'),
(11, '', 'asd@asd', ''),
(12, 'Alex', 'asd@asd', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `worker`
--

CREATE TABLE `worker` (
  `ID` int(10) NOT NULL,
  `member_code` int(10) NOT NULL,
  `User_Name` varchar(100) NOT NULL,
  `User_Email` varchar(100) NOT NULL,
  `Promote` text NOT NULL,
  `Facebook` varchar(100) NOT NULL,
  `PhoneNumber` int(10) NOT NULL,
  `name_job` varchar(100) NOT NULL,
  `Photo_Name` varchar(100) NOT NULL,
  `Status` int(11) DEFAULT NULL,
  `Score` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `worker`
--

INSERT INTO `worker` (`ID`, `member_code`, `User_Name`, `User_Email`, `Promote`, `Facebook`, `PhoneNumber`, `name_job`, `Photo_Name`, `Status`, `Score`) VALUES
(1, 2, 'Parnumat Niropas', 'parnumat.n@ku.th', 'ยังไม่ได้นอนเลยครับ ขอ A นะครับ555', 'parnumat@hotmail.com', 989931699, 'กฏหมาย', '1526924553.jpg', 1, 0),
(9, 2, 'Parnumat Niropas', 'parnumat.n@ku.th', 'I can do it. every think.', 'parnumat@hotmail.com', 989931699, '3D&Animation', '1529664975.jpg', 1, 0),
(10, 2, 'Parnumat Niropas', 'parnumat.n@ku.th', 'What do you me?', 'parnumat@hotmail.com', 989931699, 'Singer', '1529665308.jpg', 1, 0),
(11, 8, 'พ่อหนุ่มผมยาว นามว่าโทนี่', 'kardpon007@gmail.com', 'ผมว่างงานครับ  ว่างมาก และเก่งมากด้วย จบป.ตรี 3ใบ', '@mintonyStarbuck', 0, 'Video production', '1529822072.png', 1, 0),
(12, 7, 'asdaasdaasda asdas', 'world_worm@hotmail.com', 'adssad', 'parnumat@hotmail.com', 989931699, 'Word Press', '1529823188.png', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employer`
--
ALTER TABLE `employer`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `worker`
--
ALTER TABLE `worker`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
