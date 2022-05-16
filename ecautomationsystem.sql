-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2022 at 04:05 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecautomationsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `hall_ticket`
--

CREATE TABLE `hall_ticket` (
  `stid` int(11) NOT NULL,
  `subject_1` varchar(50) NOT NULL,
  `subject_2` varchar(50) NOT NULL,
  `subject_3` varchar(50) NOT NULL,
  `subject_4` varchar(50) NOT NULL,
  `subject_5` varchar(50) NOT NULL,
  `subject_6` varchar(50) NOT NULL,
  `semester` int(11) NOT NULL,
  `seatnumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `ssn` int(11) NOT NULL,
  `stname` varchar(50) NOT NULL,
  `stemail` varchar(50) NOT NULL,
  `stadd` varchar(50) NOT NULL,
  `stphone` varchar(50) NOT NULL,
  `stimg` blob NOT NULL,
  `lname` varchar(50) NOT NULL,
  `level` int(50) NOT NULL,
  `semester` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`ssn`, `stname`, `stemail`, `stadd`, `stphone`, `stimg`, `lname`, `level`, `semester`) VALUES
(18, 'george', 'joga0559@gmail.com', '111', '111', 0x3231303834373834345f3631313338343236303236353433375f343339323736303039393933393133303838315f6e2e6a7067, 'ttt', 1, 1),
(19, 'mariam', 'mairam', '111', '111', 0x3235393132383136355f3435333238373033323838353134305f313437333935313635343735323433393638355f6e2e6a7067, 'osama', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `stinfo`
--

CREATE TABLE `stinfo` (
  `id` int(11) NOT NULL,
  `ssn` int(11) NOT NULL,
  `stpass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `stid` int(11) NOT NULL,
  `subjectname` varchar(50) NOT NULL,
  `grade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hall_ticket`
--
ALTER TABLE `hall_ticket`
  ADD KEY `student_id` (`stid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`ssn`);

--
-- Indexes for table `stinfo`
--
ALTER TABLE `stinfo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ssn` (`ssn`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD KEY `stid` (`stid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `ssn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `stinfo`
--
ALTER TABLE `stinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hall_ticket`
--
ALTER TABLE `hall_ticket`
  ADD CONSTRAINT `student_id` FOREIGN KEY (`stid`) REFERENCES `stinfo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `stinfo`
--
ALTER TABLE `stinfo`
  ADD CONSTRAINT `ssn` FOREIGN KEY (`ssn`) REFERENCES `register` (`ssn`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `stid` FOREIGN KEY (`stid`) REFERENCES `stinfo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
