-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2024 at 09:22 AM
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
-- Database: `mandoob`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `user_id` int(11) NOT NULL,
  `meal_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `meal`
--

CREATE TABLE `meal` (
  `meal_id` int(5) NOT NULL,
  `meal_naem` text DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `Resturent` text NOT NULL,
  `Price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `meal`
--

INSERT INTO `meal` (`meal_id`, `meal_naem`, `quantity`, `Resturent`, `Price`) VALUES
(1, 'Harres', 2, 'Um Haddel', 2.5),
(2, 'grape leaves', 1, 'Um Haddel', 3),
(3, 'Shawarma', 3, 'Um Haddel', 1),
(4, 'Fattah', 1, 'Um Haddel', 1.5),
(5, 'Sambosa', 7, 'Um Haddel', 0.5),
(6, 'Meet Burger', 1, 'Asoom Burger', 1),
(7, 'Double Meet Burger', 1, 'Asoom Burger', 1.5),
(8, 'Fries', 1, 'Asoom Burger', 1.5),
(9, 'Meet Mashakek', 1, 'Asoom Burger', 0.2),
(10, 'Bird Nest', 1, 'golden sweet', 2.5),
(11, 'Brownies', 1, 'golden sweet', 1.5),
(12, 'chocolate cookies', 1, 'golden sweet', 1),
(13, 'Orsiia', 1, 'golden sweet', 2),
(14, 'sweets', 1, 'golden sweet', 1),
(15, 'Chocolate Cake', 1, 'Bun Truck', 2.5),
(16, 'Cheese Cake', 1, 'Bun Truck', 1.5),
(17, 'Donate', 1, 'Bun Truck', 3.5),
(18, 'Ice cream', 1, 'Bun Truck', 0.3),
(19, 'Whaffle', 1, 'Bun Truck', 1),
(20, 'SanSpastian', 1, 'Bun Truck', 1.5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `Email` text DEFAULT NULL,
  `Password` text DEFAULT NULL,
  `Phone` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `meal`
--
ALTER TABLE `meal`
  ADD PRIMARY KEY (`meal_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users_feedback`
--
ALTER TABLE `users_feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users_feedback`
--
ALTER TABLE `users_feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
