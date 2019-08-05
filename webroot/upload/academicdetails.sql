-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2019 at 10:57 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hr_software`
--

-- --------------------------------------------------------

--
-- Table structure for table `academicdetails`
--

CREATE TABLE `academicdetails` (
  `id` int(50) NOT NULL,
  `highestQualification` varchar(50) DEFAULT NULL,
  `yearOfPassing` varchar(50) DEFAULT NULL,
  `institution` varchar(50) DEFAULT NULL,
  `documentName` varchar(255) DEFAULT NULL,
  `documentPath` varchar(255) DEFAULT NULL,
  `empId` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academicdetails`
--

INSERT INTO `academicdetails` (`id`, `highestQualification`, `yearOfPassing`, `institution`, `documentName`, `documentPath`, `empId`) VALUES
(6, 'B.Tech', '2014', 'rcc', NULL, 'upload/t1 - Copy (7).txt', NULL),
(7, 'Av', '12', 'M', NULL, NULL, NULL),
(8, 'Bd', '13', 'MF', NULL, NULL, NULL),
(9, 'Av', '12', 'M', NULL, NULL, NULL),
(10, 'Bd', '13', 'MF', NULL, NULL, NULL),
(11, NULL, '', '', NULL, 'upload/', NULL),
(12, NULL, '', '', NULL, 'upload/', NULL),
(13, NULL, '', '', NULL, 'upload/', NULL),
(14, NULL, '8758', 'jgfj', NULL, 'upload/tst.txt', NULL),
(15, 'Av', '12', 'M', NULL, NULL, NULL),
(16, 'Bd', '13', 'MF', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academicdetails`
--
ALTER TABLE `academicdetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empId` (`empId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academicdetails`
--
ALTER TABLE `academicdetails`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `academicdetails`
--
ALTER TABLE `academicdetails`
  ADD CONSTRAINT `empId` FOREIGN KEY (`empId`) REFERENCES `emp_general_info` (`empId`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
