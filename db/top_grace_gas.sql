-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2020 at 11:19 AM
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
-- Database: `top_grace_gas`
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
  `email` varchar(70) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `name`, `email`, `status`) VALUES
(1, 'Micheal1234', '639bae9ac6b3e1a84cebb7b403297b79', 'Peter', 'Petermicheal@gmail.com', 1),
(2, 'Modried1234', 'f970e2767d0cfe75876ea857f92e319b', 'Zungwe', 'zungwemodried@gmail.com', 1),
(3, 'Mary5050', 'f970e2767d0cfe75876ea857f92e319b', 'Job', 'Maryjob@gmail.com', 1),
(4, 'Joy4040', 'f970e2767d0cfe75876ea857f92e319b', 'josh', 'joshjoy@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `concessions`
--

CREATE TABLE `concessions` (
  `concession_id` int(11) NOT NULL,
  `amount` varchar(10) NOT NULL,
  `plan` varchar(10) NOT NULL,
  `tran_rand_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `concessions`
--

INSERT INTO `concessions` (`concession_id`, `amount`, `plan`, `tran_rand_id`, `status`) VALUES
(29, '100', 'Instant', 1600701511, 0),
(30, '100', 'Instant', 1600701547, 0),
(31, '100', 'Save', 1600701555, 0),
(32, '100', 'Save', 1600701555, 0),
(33, '0', 'Instant', 1600701565, 0),
(34, '100', 'Save', 1600702511, 0),
(35, '100', 'Save', 1600702511, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_serial_number` varchar(50) NOT NULL,
  `customer_number` varchar(50) NOT NULL,
  `customer_gender` varchar(10) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `customer_address` varchar(100) NOT NULL,
  `customer_plan_id` int(2) NOT NULL,
  `customer_card` varchar(20) NOT NULL,
  `customer_calculator` varchar(20) NOT NULL,
  `customer_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `customer_status` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_serial_number`, `customer_number`, `customer_gender`, `customer_name`, `customer_email`, `customer_address`, `customer_plan_id`, `customer_card`, `customer_calculator`, `customer_date`, `customer_status`) VALUES
(12, 'TG-682131', '009494994', 'Female', 'Lyon', 'eliakimmodried@gmail.com', 'kmd 5', 1, '', '0', '2020-09-21 14:53:35', 1),
(19, 'TG-471616', '09049494994', 'Female', 'modried', 'eliakimmodried@gmail.com', 'nnn', 2, '', '300', '2020-09-21 15:35:12', 1),
(20, 'TG-460807', '009494994', 'Female', 'Lyon', 'eliakimmodried@gmail.com', '74834783478347 jdjjsdjd', 2, '', '400', '2020-09-21 15:19:15', 1),
(23, 'TG-555287', '09049494994', 'Male', 'zungwe', 'modriedterue@gmail.com', 'km 4 adrees', 2, '', '', '2020-09-21 15:36:36', 1);

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
  `set` decimal(4,0) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `set_concession`
--

INSERT INTO `set_concession` (`concession_id`, `set`, `status`) VALUES
(1, '100', 1);

-- --------------------------------------------------------

--
-- Table structure for table `set_kg_price`
--

CREATE TABLE `set_kg_price` (
  `kg_id` int(11) NOT NULL,
  `price` varchar(10) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `set_kg_price`
--

INSERT INTO `set_kg_price` (`kg_id`, `price`, `status`) VALUES
(1, '400', 1);

-- --------------------------------------------------------

--
-- Table structure for table `todo`
--

CREATE TABLE `todo` (
  `todo_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` varchar(50) NOT NULL,
  `todo_status` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `transaction_id` int(11) NOT NULL,
  `price` varchar(5) NOT NULL,
  `kg` varchar(20) NOT NULL,
  `total_amount` varchar(10) NOT NULL,
  `tran_customer_id` varchar(10) NOT NULL,
  `admin_id` int(10) NOT NULL,
  `time` varchar(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`transaction_id`, `price`, `kg`, `total_amount`, `tran_customer_id`, `admin_id`, `time`, `date`, `status`) VALUES
(47, '400', '7', '2800', 'TG-682131', 1, '1600701511', '2020-09-21 15:18:31', 0),
(48, '400', '8', '3200', 'TG-682131', 1, '1600701547', '2020-09-21 15:19:07', 0),
(49, '400', '8', '3200', 'TG-460807', 1, '1600701555', '2020-09-21 15:19:16', 0),
(50, '400', '3', '1200', 'TG-682131', 1, '1600701565', '2020-09-21 15:19:25', 0),
(51, '400', '7', '2800', 'TG-471616', 1, '1600702511', '2020-09-21 15:35:12', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `concessions`
--
ALTER TABLE `concessions`
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
-- Indexes for table `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`todo_id`);

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
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `concessions`
--
ALTER TABLE `concessions`
  MODIFY `concession_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

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
  MODIFY `kg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `todo`
--
ALTER TABLE `todo`
  MODIFY `todo_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
