-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2023 at 06:51 PM
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
  `RoomId` int(11) NOT NULL,
  `RoomType` varchar(30) NOT NULL,
  `Check_In_Date` date NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Check_Out_Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checked_in`
--

INSERT INTO `checked_in` (`ID`, `Name`, `Gender`, `Address`, `Email`, `Phone`, `No_Of_Individuals`, `RoomId`, `RoomType`, `Check_In_Date`, `Status`, `Check_Out_Date`) VALUES
(21, 'albina', 'female', 'btm', 'albina@gmail.com', '98060', 1, 0, 'single', '0000-00-00', 'check in', NULL),
(22, 'Albina Gurung', 'Female', 'Birtamode-7,Jhapa', 'albina@gmail.com', '98060', 1, 5, 'single', '2023-04-16', 'checked out', '2023-04-18'),
(23, 'Albina Gurung', 'Male', 'Birtamode-7,Jhapa', 'albina@gmail.com', '', 0, 5, '', '2023-04-17', 'checked out', '2023-04-26'),
(24, 'sandy', 'Male', 'Birtamode-7,Jhapa', 'sandy@gmail.com', '98060', 1, 5, 'single', '2023-04-18', 'checked out', '0000-00-00'),
(25, 'Albina Gurung', 'Female', 'Birtamode-7,Jhapa', 'albina@gmail.com', '98060', 1, 8, 'single', '2023-04-19', 'checked out', '2023-05-23'),
(26, 'Albina Gurung', 'Female', 'Birtamode-7,Jhapa', 'albina@gmail.com', '98060', 1, 9, 'single', '2023-04-19', 'checked out', '2023-05-18'),
(27, 'Albina Gurung', 'Female', 'Birtamode-7,Jhapa', 'albina@gmail.com', '98060', 1, 5, 'single', '2023-05-22', 'checked in', NULL),
(28, 'Albina Gurung', 'Female', 'Birtamode-7,Jhapa', 'albina@gmail.com', '9806068043', 1, 12, 'single', '2023-05-26', 'checked out', '2023-05-26');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `RoomId` int(11) NOT NULL,
  `RoomName` varchar(30) NOT NULL,
  `RoomType` varchar(30) NOT NULL,
  `Status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`RoomId`, `RoomName`, `RoomType`, `Status`) VALUES
(9, 'a106', 'single', 'Not Available'),
(12, 'a102', 'twin', 'Not Available');

-- --------------------------------------------------------

--
-- Table structure for table `rooms_category`
--

CREATE TABLE `rooms_category` (
  `ID` int(11) NOT NULL,
  `Room_Category` varchar(30) NOT NULL,
  `Image` int(11) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms_category`
--

INSERT INTO `rooms_category` (`ID`, `Room_Category`, `Image`, `Description`) VALUES
(1, 'single', 0, 'ghj'),
(2, 'single', 2, 'gh'),
(3, 'single', 2, 'gh'),
(4, 'single', 2, 'gh'),
(5, 'single', 2, 'gh'),
(6, 'single', 2, 'gh'),
(7, 'single', 2, 'gh');

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
  ADD PRIMARY KEY (`RoomId`);

--
-- Indexes for table `rooms_category`
--
ALTER TABLE `rooms_category`
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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `RoomId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `rooms_category`
--
ALTER TABLE `rooms_category`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
