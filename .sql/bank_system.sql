-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2024 at 07:25 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(150) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `nida` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `account` varchar(15) NOT NULL,
  `date_joined` datetime NOT NULL DEFAULT current_timestamp(),
  `password` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `dob`, `address`, `phone`, `email`, `nida`, `status`, `amount`, `account`, `date_joined`, `password`) VALUES
(4, 'Josephat', 'Nkungugu', '1997-12-15', 'Dar es salaam, Kivule-Kananura 001', '+255625290997', 'profnkungugu@gmail.com', '19971212111020000123', 'Verified', 9100000, '499355880823040', '2024-07-04 17:12:03', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE `loans` (
  `id` int(11) NOT NULL,
  `customer` int(11) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `description` text NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Pending',
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loans`
--

INSERT INTO `loans` (`id`, `customer`, `amount`, `description`, `status`, `date`) VALUES
(1, 4, 10000, 'I need a loan for my business', 'Accepted', '2024-07-05 12:18:17'),
(2, 4, 100000, 'Need more loan', 'Accepted', '2024-07-05 12:18:17'),
(3, 4, 200000, 'another loan', 'Accepted', '2024-07-05 12:18:17'),
(4, 4, 30000, 'Some more loan', 'Accepted', '2024-07-05 12:18:17'),
(5, 4, 900000, 'Give me more', 'Accepted', '2024-07-05 12:18:17'),
(6, 4, 100000, 'Some cash', 'Accepted', '2024-07-05 12:18:17'),
(7, 4, 100000, 'I need more cash', 'Accepted', '2024-07-05 12:18:17'),
(8, 4, 900000, 'Naomba laki 9', 'Accepted', '2024-07-05 12:18:17'),
(9, 4, 700000, 'Money', 'Accepted', '2024-07-05 12:18:17'),
(10, 4, 400000, 'Money again', 'Accepted', '2024-07-05 12:18:17'),
(12, 4, 80000, 'A loan', 'Declined', '2024-07-05 12:18:17'),
(13, 4, 700000, 'New loan', 'Accepted', '2024-07-05 12:24:40');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `username`, `email`, `password`) VALUES
(1, 'kadilana', 'kadilana@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `account` varchar(150) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `type` varchar(20) NOT NULL,
  `date_issued` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `account`, `amount`, `type`, `date_issued`) VALUES
(1, '499355880823040', 50000, 'Deposit', '2024-07-04 18:05:54'),
(4, '499355880823040', 10000, 'Withdraw', '2024-07-04 18:05:54'),
(5, '499355880823040', 100, 'Deposit', '2024-07-04 18:05:54'),
(6, '499355880823040', 500, 'Deposit', '2024-07-04 18:05:54');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `action` varchar(150) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user`, `action`, `amount`, `date`) VALUES
(1, 4, 'Initial Deposit', 10000, '2024-07-04 17:12:03'),
(2, 4, 'Deposit', 50000, '2024-07-04 17:29:58'),
(5, 4, 'Withdraw', 10000, '2024-07-04 17:36:24'),
(6, 4, 'Deposit', 100, '2024-07-04 17:37:56'),
(7, 4, 'Deposit', 500, '2024-07-04 17:41:01'),
(8, 4, 'Withdraw', 10000, '2024-07-04 17:45:53'),
(9, 4, 'Withdraw', 10000, '2024-07-04 17:46:35'),
(10, 4, 'Withdraw', 10000, '2024-07-04 17:46:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `account` (`account`);

--
-- Indexes for table `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `loans_ibfk_1` (`customer`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `account` (`account`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `loans`
--
ALTER TABLE `loans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `loans`
--
ALTER TABLE `loans`
  ADD CONSTRAINT `loans_ibfk_1` FOREIGN KEY (`customer`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`account`) REFERENCES `customers` (`account`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_details`
--
ALTER TABLE `user_details`
  ADD CONSTRAINT `user_details_ibfk_1` FOREIGN KEY (`user`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
