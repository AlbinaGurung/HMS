-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2023 at 11:16 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `ID` int(11) NOT NULL,
  `Full_Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phone_no` char(10) NOT NULL,
  `No_of_individuals` int(11) NOT NULL,
  `Room_Category` varchar(30) NOT NULL,
  `Gender` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`ID`, `Full_Name`, `Email`, `Phone_no`, `No_of_individuals`, `Room_Category`, `Gender`) VALUES
(1, 'a', 'albina@gmail.com', '34', 1, 'single', 'female'),
(2, 'a', 'albina@gmail.com', '34', 1, 'single', 'female'),
(3, 'a', 'albina@gmail.com', '34', 1, 'single', 'female'),
(4, 'a', 'albina@gmail.com', '34', 1, 'single', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `checked_in`
--

CREATE TABLE `checked_in` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phone` char(10) NOT NULL,
  `No_Of_Individuals` int(11) NOT NULL,
  `RoomNo` varchar(30) NOT NULL,
  `RoomType` varchar(30) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `ID` int(10) NOT NULL,
  `Room` varchar(30) NOT NULL,
  `Category` varchar(30) NOT NULL,
  `Availability` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`ID`, `Room`, `Category`, `Availability`) VALUES
(2, 'bb', 'bjh', 'yes'),
(3, 'bb', 'single', 'yes'),
(4, 'bb', 'single', 'yes'),
(5, 'bb', 'single', 'yes'),
(6, 'bbaa', 'twin', 'yes'),
(7, 'bbaa', 'twin', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL,
  `user_role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `user_role`) VALUES
(3, 'Albina Gurung', 'albinakushu9545@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Customer'),
(4, 'Albina Gurung', 'albina222@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `checked_in`
--
ALTER TABLE `checked_in`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `checked_in`
--
ALTER TABLE `checked_in`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
