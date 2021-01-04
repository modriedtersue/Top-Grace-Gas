-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2021 at 08:23 PM
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
(3, 'Mary', 'f970e2767d0cfe75876ea857f92e319b', 'Job', 'sdsd', '09049494994', 'Maryjob@gmail.com', 'super', 1);

-- --------------------------------------------------------

--
-- Table structure for table `concession_payout`
--

CREATE TABLE `concession_payout` (
  `payout_id` int(11) NOT NULL,
  `amout` decimal(4,0) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `date_sort` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `concession_payout`
--

INSERT INTO `concession_payout` (`payout_id`, `amout`, `customer_id`, `admin_id`, `date_sort`, `status`) VALUES
(7, '500', 28, 3, '2021-01-04', 1),
(8, '500', 28, 3, '2021-01-04', 1),
(9, '500', 29, 3, '2021-01-04', 1);

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
(28, 'TG-771767', '09049494994', 'Male', 'akin', 'alumnus@venus.com', 'km4', 2, '1400', '2021-01-04 13:02:31', 1),
(29, 'TG-765689', '009494994', 'Male', 'Lyon', 'eliakimmodried@gmail.com', '74834783478347 jdjjsdjd', 1, '4500', '2021-01-04 10:17:58', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gas_volume`
--

CREATE TABLE `gas_volume` (
  `volume_id` int(11) NOT NULL,
  `volume` varchar(10) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gas_volume`
--

INSERT INTO `gas_volume` (`volume_id`, `volume`, `status`) VALUES
(1, '100000', 0);

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
(1, 'Save', 1),
(2, 'Instant', 1);

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
  `plan_id` int(11) NOT NULL,
  `plan_amount` decimal(4,0) NOT NULL,
  `plan_status` int(11) NOT NULL DEFAULT 0,
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

INSERT INTO `transactions` (`transaction_id`, `plan_id`, `plan_amount`, `plan_status`, `kg_price`, `kg`, `total_amount`, `tran_customer_id`, `admin_id`, `date_sort`, `status`) VALUES
(169, 1, '100', 1, '275.4', '5', '1377', 'TG-765689', 2, '2021-01-04', 0),
(170, 1, '100', 1, '275.4', '7', '1927.8', 'TG-765689', 2, '2021-01-04', 0),
(171, 1, '0', 0, '275.4', '4', '1101.6', 'TG-765689', 2, '2021-01-04', 0),
(172, 2, '100', 1, '275.4', '5', '1377', 'TG-771767', 2, '2021-01-04', 0),
(173, 2, '100', 1, '275.4', '6', '1652.4', 'TG-771767', 2, '2021-01-04', 0),
(174, 2, '0', 0, '275.4', '4', '1101.6', 'TG-771767', 2, '2021-01-04', 0),
(175, 1, '100', 1, '275.4', '6', '1652.4', 'TG-771767', 3, '2021-01-04', 0),
(176, 1, '100', 2, '275.4', '6', '1652.4', 'TG-771767', 3, '2021-01-04', 0),
(177, 1, '100', 2, '175.5', '92', '16146', 'TG-771767', 3, '2021-01-04', 0),
(178, 1, '100', 2, '275.4', '5', '1377', 'TG-771767', 3, '2021-01-04', 0),
(179, 1, '100', 2, '175.5', '44', '7722', 'TG-771767', 3, '2021-01-04', 0),
(180, 2, '100', 1, '275.4', '5', '1377', 'TG-771767', 3, '2021-01-04', 0),
(181, 1, '100', 1, '275.4', '7', '1927.8', 'TG-765689', 3, '2021-01-04', 0),
(182, 1, '100', 1, '183.5', '8', '1468', 'TG-765689', 3, '2021-01-04', 0),
(183, 1, '100', 1, '183.5', '8', '1468', 'TG-765689', 3, '2021-01-04', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `concession_payout`
--
ALTER TABLE `concession_payout`
  ADD PRIMARY KEY (`payout_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `gas_volume`
--
ALTER TABLE `gas_volume`
  ADD PRIMARY KEY (`volume_id`);

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
-- AUTO_INCREMENT for table `concession_payout`
--
ALTER TABLE `concession_payout`
  MODIFY `payout_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `gas_volume`
--
ALTER TABLE `gas_volume`
  MODIFY `volume_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
