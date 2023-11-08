-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2023 at 06:38 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infotech`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(10) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `emp_email` varchar(50) NOT NULL,
  `emp_role` varchar(50) NOT NULL,
  `emp_joindate` date NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT '0',
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_name`, `emp_email`, `emp_role`, `emp_joindate`, `status`, `password`) VALUES
(3, 'sushma ', 'sushma@gmail.com', 'IT', '2023-10-19', '0', '123'),
(7, 'suhani', 'suhaniY@gmail.com', 'Application', '2023-11-24', '0', '123'),
(8, 'swathi', 'sdswathi790@gmail.com', 'IT', '2023-11-01', '0', '1234'),
(9, 'swathi', 'sd@gmail.com', 'Application', '2023-11-07', '0', '12345'),
(10, 'tejashree', 'tejashree@gmail.com', 'IT', '2023-11-01', '0', '12345'),
(11, 'akshatha', 'akshatha@gmail.com', 'Cloud', '2023-10-31', '0', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `m_id` int(50) NOT NULL,
  `m_email` varchar(50) NOT NULL,
  `m_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`m_id`, `m_email`, `m_password`) VALUES
(1, 'manager@gmail.com', 'manager');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `req_id` int(50) NOT NULL,
  `emp_id` int(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `reason` varchar(500) NOT NULL,
  `status` int(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`req_id`, `emp_id`, `department`, `reason`, `status`) VALUES
(3, 3, 'Application', 'A paragraph is a series of sentences that are organized and coherent, and are all related to a single topic. Almost every piece of writing you ', 1),
(5, 3, 'IT', 'A paragraph is a series of sentences that are organized and coherent, and are all related to a single topic. Almost every piece of writing you ', 3),
(6, 7, 'Cloud', 'A paragraph is a series of sentences that are organized and coherent, and are all related to a single topic. Almost every piece of writing you ', 1),
(7, 8, 'IT', 'request', 0),
(8, 9, 'IT', 'uhrwirw78', 3),
(9, 10, 'Netword', 'requesting', 2),
(10, 11, 'Cloud', 'increase server speed', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`req_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `m_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `req_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
