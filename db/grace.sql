-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2020 at 02:29 AM
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
  `email` varchar(70) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `name`, `email`, `user_type`, `status`) VALUES
(1, 'Micheal', '6b2ded51d81a4403d8a4bd25fa1e57ee', 'Peter', 'Petermicheal@gmail.com', 'admin', 1),
(2, 'Modried', '6b2ded51d81a4403d8a4bd25fa1e57ee', 'Zungwe', 'zungwemodried@gmail.com', 'admin', 1),
(3, 'Mary', '6b2ded51d81a4403d8a4bd25fa1e57ee', 'Job', 'Maryjob@gmail.com', 'super', 1);

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
  `customer_calculator` varchar(20) NOT NULL,
  `customer_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `customer_status` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_serial_number`, `customer_number`, `customer_gender`, `customer_name`, `customer_email`, `customer_address`, `customer_plan_id`, `customer_card`, `customer_calculator`, `customer_date`, `customer_status`) VALUES
(12, 'TG-682131', '009494994', 'Female', 'Terfa Modried', 'eliakimmodried@gmail.com', 'kmd 5', 2, '', '200', '2020-09-26 22:20:22', 1),
(20, 'TG-460807', '009494994', 'Female', 'Lyon', 'eliakimmodried@gmail.com', '74834783478347 jdjjsdjd', 1, '', '', '2020-09-26 22:20:11', 1),
(25, 'TG-460807', '090949494949', 'Male', 'Michael', 'Michael@gmail.com', 'km 4 makurdi Benue state', 1, '', '', '2020-09-26 22:20:01', 1);

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
(1, '50', 1);

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
(1, '80', 1);

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
  `c_amount` varchar(5) NOT NULL,
  `c_id` int(2) NOT NULL,
  `c_status` int(11) NOT NULL DEFAULT 0,
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

INSERT INTO `transactions` (`transaction_id`, `c_amount`, `c_id`, `c_status`, `price`, `kg`, `total_amount`, `tran_customer_id`, `admin_id`, `time`, `date`, `status`) VALUES
(70, '100', 1, 1, '400', '9', '3600', 'TG-460807', 1, '1601122204', '2020-09-26 12:10:04', 0),
(71, '0', 2, 2, '400', '3', '1200', 'TG-682131', 1, '1601122227', '2020-09-26 12:10:27', 0),
(72, '0', 1, 2, '400', '3', '1200', 'TG-460807', 1, '1601122238', '2020-09-26 12:10:38', 0),
(73, '100', 2, 0, '400', '6', '2400', 'TG-682131', 1, '1601122249', '2020-09-26 12:10:49', 0),
(74, '100', 1, 1, '400', '9', '3600', 'TG-460807', 1, '1601127033', '2020-09-26 13:30:33', 0),
(75, '100', 1, 1, '400', '8', '3200', 'TG-460807', 1, '1601127363', '2020-09-26 13:36:03', 0),
(76, '0', 1, 2, '400', '2', '800', 'TG-460807', 1, '1601127371', '2020-09-26 13:36:11', 0),
(77, '100', 1, 1, '400', '5', '2000', 'TG-99059', 1, '1601127640', '2020-09-26 13:40:40', 0),
(78, '100', 2, 0, '400', '5', '2000', 'TG-682131', 1, '1601127707', '2020-09-26 13:41:47', 0),
(79, '100', 2, 0, '400', '7', '2800', 'TG-682131', 1, '1601139886', '2020-09-26 17:04:46', 0),
(80, '100', 1, 1, '400', '9', '3600', 'TG-460807', 1, '1601122204', '2020-09-26 12:10:04', 0),
(81, '0', 2, 2, '400', '3', '1200', 'TG-682131', 1, '1601122227', '2020-09-26 12:10:27', 0),
(82, '0', 1, 2, '400', '3', '1200', 'TG-460807', 1, '1601122238', '2020-09-26 12:10:38', 0),
(83, '100', 2, 0, '400', '6', '2400', 'TG-682131', 1, '1601122249', '2020-09-26 12:10:49', 0),
(84, '100', 1, 1, '400', '9', '3600', 'TG-460807', 1, '1601127033', '2020-09-26 13:30:33', 0),
(85, '100', 1, 1, '400', '8', '3200', 'TG-460807', 1, '1601127363', '2020-09-26 13:36:03', 0),
(86, '0', 1, 2, '400', '2', '800', 'TG-460807', 1, '1601127371', '2020-09-26 13:36:11', 0),
(87, '100', 1, 1, '400', '5', '2000', 'TG-99059', 1, '1601127640', '2020-09-26 13:40:40', 0),
(88, '100', 2, 0, '400', '5', '2000', 'TG-682131', 1, '1601127707', '2020-09-26 13:41:47', 0),
(89, '100', 2, 0, '400', '7', '2800', 'TG-682131', 1, '1601139886', '2020-09-26 17:04:46', 0),
(90, '0', 2, 2, '400', '4', '1600', 'TG-682131', 4, '1601158432', '2020-09-26 22:13:52', 0),
(91, '0', 0, 2, '400', '', '0', '', 1, '1601236933', '2020-09-27 20:02:13', 0),
(92, '0', 0, 2, '400', '', '0', '', 1, '1601236942', '2020-09-27 20:02:22', 0),
(93, '0', 0, 2, '60', '', '0', '', 1, '1601236960', '2020-09-27 20:02:40', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

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
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

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
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
