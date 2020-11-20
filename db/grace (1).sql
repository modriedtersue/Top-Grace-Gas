-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2020 at 12:00 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grace`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(70) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(70) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `name`, `address`, `phone`, `email`, `user_type`, `status`) VALUES
(2, 'Modried', 'f970e2767d0cfe75876ea857f92e319b', 'Zungwe', 'Lyon street km4', '0908383883883', 'zungwemodried@gmail.com', 'admin', 1),
(3, 'Mary', '6b2ded51d81a4403d8a4bd25fa1e57ee', 'Job', 'sdsd', '09049494994', 'Maryjob@gmail.com', 'super', 1);

-- --------------------------------------------------------

--
-- Table structure for table `concession`
--

CREATE TABLE `concession` (
  `concession_id` int(11) NOT NULL,
  `hash` varchar(20) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `amount` varchar(5) NOT NULL,
  `date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `concession`
--

INSERT INTO `concession` (`concession_id`, `hash`, `plan_id`, `amount`, `date`, `status`) VALUES
(1, '3434', 4, '3', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_serial_number` varchar(10) NOT NULL,
  `customer_number` varchar(50) NOT NULL,
  `customer_gender` varchar(10) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `customer_address` varchar(100) NOT NULL,
  `customer_plan_id` int(2) NOT NULL,
  `customer_card` varchar(20) NOT NULL,
  `customer_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `customer_status` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_serial_number`, `customer_number`, `customer_gender`, `customer_name`, `customer_email`, `customer_address`, `customer_plan_id`, `customer_card`, `customer_date`, `customer_status`) VALUES
(28, 'TG-771767', '09049494994', 'Male', 'akin', 'alumnus@venus.com', 'km4', 2, '', '2020-10-14 09:40:50', 1),
(29, 'TG-765689', '009494994', 'Male', 'Lyon', 'eliakimmodried@gmail.com', '74834783478347 jdjjsdjd', 1, '', '2020-11-12 11:10:41', 1);

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `plan_id` int(11) NOT NULL,
  `plan` varchar(20) NOT NULL,
  `plan_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`plan_id`, `plan`, `plan_status`) VALUES
(1, 'Instant', 1),
(2, 'Save', 1);

-- --------------------------------------------------------

--
-- Table structure for table `set_concession`
--

CREATE TABLE `set_concession` (
  `concession_id` int(11) NOT NULL,
  `amount` varchar(5) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `set_concession`
--

INSERT INTO `set_concession` (`concession_id`, `amount`, `status`) VALUES
(1, '100', 1);

-- --------------------------------------------------------

--
-- Table structure for table `set_kg_price`
--

CREATE TABLE `set_kg_price` (
  `kg_id` int(11) NOT NULL,
  `done` varchar(5) NOT NULL,
  `dtwo` varchar(5) NOT NULL,
  `price` varchar(10) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `set_kg_price`
--

INSERT INTO `set_kg_price` (`kg_id`, `done`, `dtwo`, `price`, `status`) VALUES
(1, '8', '12', '183.5', 1),
(2, '1', '7', '275.4', 1),
(3, '13', '10000', '175.5', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `transaction_id` int(11) NOT NULL,
  `kg_price` varchar(5) NOT NULL,
  `kg` varchar(20) NOT NULL,
  `total_amount` varchar(10) NOT NULL,
  `tran_customer_id` varchar(10) NOT NULL,
  `admin_id` int(10) NOT NULL,
  `date_sort` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`transaction_id`, `kg_price`, `kg`, `total_amount`, `tran_customer_id`, `admin_id`, `date_sort`, `status`) VALUES
(155, '275.4', '4', '1101.6', 'TG-765689', 7, '2020-11-20', 0),
(156, '275.4', '4', '1101.6', 'TG-771767', 7, '2020-11-20', 0),
(157, '183.5', '12', '2202', 'TG-771767', 7, '2020-11-20', 0),
(158, '275.4', '7', '1927.8', 'TG-771767', 7, '2020-11-20', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `concession`
--
ALTER TABLE `concession`
  ADD PRIMARY KEY (`concession_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`plan_id`);

--
-- Indexes for table `set_concession`
--
ALTER TABLE `set_concession`
  ADD PRIMARY KEY (`concession_id`);

--
-- Indexes for table `set_kg_price`
--
ALTER TABLE `set_kg_price`
  ADD PRIMARY KEY (`kg_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transaction_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `concession`
--
ALTER TABLE `concession`
  MODIFY `concession_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `plan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `set_concession`
--
ALTER TABLE `set_concession`
  MODIFY `concession_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `set_kg_price`
--
ALTER TABLE `set_kg_price`
  MODIFY `kg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
