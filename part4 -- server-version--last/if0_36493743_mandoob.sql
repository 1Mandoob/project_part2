-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql200.infinityfree.com
-- Generation Time: May 06, 2024 at 08:46 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_36493743_mandoob`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` text DEFAULT NULL,
  `price` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `user_id`, `name`, `price`) VALUES
(12, 0, 'Brownies', 1.5),
(13, 0, 'Brownies', 1.5),
(14, 0, 'Brownies', 1.5),
(15, 0, 'Brownies', 1.5),
(16, 0, 'Brownies', 1.5),
(17, 0, 'Brownies', 1.5),
(18, 0, 'Brownies', 1.5),
(19, 0, 'Brownies', 1.5),
(20, 0, 'Meet Burger', 1),
(21, 0, 'Meet Burger', 1),
(22, 0, 'Meet Burger', 1),
(23, 0, 'Meet Burger', 1),
(24, 0, 'Brownies', 1.5),
(25, 0, 'Brownies', 1.5),
(26, 0, 'Brownies', 1.5),
(27, 0, 'Brownies', 1.5),
(28, 0, 'Meet Burger', 1),
(29, 0, 'Meet Burger', 1),
(30, 0, 'Meet Burger', 1),
(31, 0, 'Meet Burger', 1),
(32, 0, 'Brownies', 1.5),
(33, 0, 'Brownies', 1.5),
(34, 0, 'Orsiia', 2),
(35, 0, 'Cheese Cake', 1.5),
(36, 0, 'Cheese Cake', 1.5),
(40, 1, 'grape Leaves', 3),
(42, 3, 'Double Meet Burger', 1.5),
(47, 8, 'grape Leaves', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `phone` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`, `phone`) VALUES
(6, 's140004@student.squ.edu.om', '12345', '93630398'),
(4, 'said2004j@gmial.com', '12345', '771'),
(7, 'Sara@squ.edu.om', '12345', '98056868');

-- --------------------------------------------------------

--
-- Table structure for table `users_feedback`
--

CREATE TABLE `users_feedback` (
  `feedback_id` int(11) NOT NULL,
  `Name` text DEFAULT NULL,
  `Email` text DEFAULT NULL,
  `Rating` text DEFAULT NULL,
  `Comments` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_feedback`
--

INSERT INTO `users_feedback` (`feedback_id`, `Name`, `Email`, `Rating`, `Comments`) VALUES
(0, 'mandoob', 'os65ma65@gmail.com', 'excellent', 'dsfsadfewfewf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
