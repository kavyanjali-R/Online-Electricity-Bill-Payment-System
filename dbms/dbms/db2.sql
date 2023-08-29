-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2019 at 06:25 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db2`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `getBill_gen` (IN `bid` INT)  SELECT Bill_id FROM bill_gen where bid = Bill_id$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_name` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_name`, `password`) VALUES
('vyshanvi', 'ram@123'),
('shubha', 'ram@123');

-- --------------------------------------------------------

--
-- Table structure for table `adminview`
--

CREATE TABLE `adminview` (
  `Bill_id` int(11) DEFAULT NULL,
  `Payment_status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `CVVno` int(23) NOT NULL,
  `Cardno` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`CVVno`, `Cardno`) VALUES
(189, '123456987102'),
(144, '123456789101');

-- --------------------------------------------------------

--
-- Table structure for table `bill_gen`
--

CREATE TABLE `bill_gen` (
  `Bill_id` int(11) NOT NULL,
  `unit_consumed` int(11) DEFAULT NULL,
  `bill_read_date` date DEFAULT NULL,
  `bill_expire_date` date DEFAULT NULL,
  `total_amt` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `Bill_id` int(11) DEFAULT NULL,
  `Complaint_id` int(11) NOT NULL,
  `Complaint_status` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Bill_id` int(11) DEFAULT NULL,
  `Cardno` int(10) DEFAULT NULL,
  `CVVNo` int(3) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `Amount` float DEFAULT NULL,
  `Paydate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Bill_id` int(11) NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `Phone_no` varchar(20) NOT NULL,
  `Address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Bill_id`, `Name`, `Phone_no`, `Address`) VALUES
(100, 'Ramesh', '9980674566', 'Shanthinagar'),
(102, 'suresh', '8938838383', 'JPnagar'),
(103, 'Rahul', '9059089890', 'JCRoad'),
(104, 'Ravi', '9039029029', 'SR Nagar'),
(105, 'Kumar', '9509839898', 'Shanthinagar');

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `users` AFTER INSERT ON `users` FOR EACH ROW BEGIN
INSERT INTO users_backup VALUES(new.Bill_id,new.Name,new.Phone_no,new.Address);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users_backup`
--

CREATE TABLE `users_backup` (
  `Bill_id` int(11) NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `Phone_no` varchar(20) NOT NULL,
  `Address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_backup`
--

INSERT INTO `users_backup` (`Bill_id`, `Name`, `Phone_no`, `Address`) VALUES
(100, 'Ramesh', '9980674566', 'Shanthinagar'),
(101, 'suresh', '8938838383', 'JPnagar'),
(102, 'Rahul', '9059089890', 'JCRoad'),
(103, 'Ravi', '9039029029', 'SR Nagar'),
(104, 'Kumar', '9509839898', 'Shanthinagar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill_gen`
--
ALTER TABLE `bill_gen`
  ADD PRIMARY KEY (`Bill_id`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`Complaint_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Bill_id`);

--
-- Indexes for table `users_backup`
--
ALTER TABLE `users_backup`
  ADD PRIMARY KEY (`Bill_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `Complaint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1017;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `users_backup`
--
ALTER TABLE `users_backup`
  MODIFY `Bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
