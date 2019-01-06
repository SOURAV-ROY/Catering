-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2018 at 12:20 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dream_land`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `fullname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `event_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `event_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `event_package_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `decoration_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `food_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `total_cost` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `user_id`, `fullname`, `email`, `event_type`, `event_name`, `event_package_name`, `decoration_name`, `food_name`, `total_cost`) VALUES
(14, 1, 'Sourav Roy', 'sourav@gmail.com', 'Wedding', 'Hindu', 'Silver-HN', 'RANGOLI', 'LIGHT', 138200),
(20, 3, 'Faria Uddin Adity', 'Faria@gmail.com', 'Wedding', 'Muslim', 'Gold-HN', 'PREMIER', 'HEAVY', 250350),
(24, 1, 'Sourav Roy', 'sourav@gmail.com', 'Wedding', 'Engagement', 'Gold-HN', 'RANGOLI', 'PREMIER', 150500),
(26, 1, 'Sourav Roy', 'sourav@gmail.com', 'Wedding', 'Hindu', 'Gold-HN', 'PREMIER', 'PREMIER', 250500),
(27, 3, 'Faria Uddin Adity', 'Faria@gmail.com', 'Wedding', 'Engagement', 'Bronze-HN', 'FLOWER', 'PREMIER', 155500),
(29, 1, 'Sourav Roy', 'sourav@gmail.com', 'Wedding', 'Hindu', 'Bronze-HN', 'RANGOLI', 'LIGHT', 105200),
(30, 1, 'Sourav Roy', 'sourav@gmail.com', 'Birthday', '', 'Silver-HN', 'BIRTHDAY-L', 'PREMIER', 238500),
(40, 4, 'Sourav ', 'souravroy@gmail.com', 'Wedding', 'Engagement', 'Silver-HN', 'PREMIER', 'PREMIER', 238500),
(41, 4, 'Sourav ', 'souravroy@gmail.com', 'Birthday', 'N/A', 'Gold-HN', 'BIRTHDAY-L', 'PREMIER', 250500),
(42, 1, 'Sourav Roy', 'sourav@gmail.com', 'Meeting', 'N/A', 'Silver-HN', 'MEETING-M', 'HEAVY', 188350),
(43, 1, 'Sourav Roy', 'sourav@gmail.com', 'Wedding', 'Haldi', 'Silver-HN', 'FLOWER', 'HEAVY', 188350),
(44, 3, 'Faria Uddin Adity', 'Faria@gmail.com', 'Birthday', 'N/A', 'Silver-HN', 'BIRTHDAY-L', 'PREMIER', 238500),
(45, 3, 'Faria Uddin Adity', 'Faria@gmail.com', 'Meeting', 'N/A', 'Gold-HN', 'MEETING-S', 'PREMIER', 250500),
(46, 3, 'Faria Uddin Adity', 'Faria@gmail.com', 'Wedding', 'Hindu', 'Silver-HN', 'PREMIER', 'PREMIER', 238500),
(47, 3, 'Faria Uddin Adity', 'Faria@gmail.com', 'Birthday', 'N/A', 'Gold-HN', 'BIRTHDAY-L', 'PREMIER', 250500),
(49, 3, 'Faria Uddin Adity', 'Faria@gmail.com', 'Meeting', 'N/A', 'Silver-HN', 'MEETING-S', 'PREMIER', 238500);

-- --------------------------------------------------------

--
-- Table structure for table `decorations`
--

CREATE TABLE `decorations` (
  `id` int(10) NOT NULL,
  `decoration_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `decoration_type` int(10) NOT NULL,
  `cost` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `decorations`
--

INSERT INTO `decorations` (`id`, `decoration_name`, `decoration_type`, `cost`) VALUES
(1, 'RANGOLI', 1, 50000),
(2, 'FLOWERS', 2, 100000),
(3, 'PREMIUM', 3, 150000),
(4, 'BIRTHDAY S', 4, 50000),
(5, 'BIRTHDAY M', 5, 100000),
(6, 'BIRTHDAY L', 6, 150000),
(7, 'MEETING S', 7, 50000),
(8, 'MEETING M', 8, 100000),
(9, 'MEETING L', 9, 150000);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) NOT NULL,
  `event_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `event_type` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_name`, `event_type`) VALUES
(1, 'Engagement Ceremony', 1),
(2, 'Haldi Function', 1),
(3, 'Reception', 1),
(4, 'Muslim Wedding', 1),
(5, 'Hindu Wedding', 1);

-- --------------------------------------------------------

--
-- Table structure for table `event_packages`
--

CREATE TABLE `event_packages` (
  `id` int(10) NOT NULL,
  `event_id` int(10) NOT NULL,
  `package_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `guest_amount` int(10) NOT NULL,
  `cost` int(10) NOT NULL,
  `time` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `event_packages`
--

INSERT INTO `event_packages` (`id`, `event_id`, `package_name`, `guest_amount`, `cost`, `time`) VALUES
(1, 1, 'Bronze-HN', 500, 55000, 'NIGHT'),
(2, 2, 'Silver-HN', 800, 88000, 'NIGHT'),
(3, 3, 'Gold-HN', 1000, 100000, 'WHOLE DAY'),
(4, 4, 'Package-L', 1000, 110000, 'NIGHT'),
(5, 5, 'Package-XL', 1250, 137500, 'NIGHT'),
(6, 6, 'Package-XXL', 1500, 165000, 'WHOLE DAY');

-- --------------------------------------------------------

--
-- Table structure for table `event_types`
--

CREATE TABLE `event_types` (
  `id` int(10) NOT NULL,
  `type_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `event_types`
--

INSERT INTO `event_types` (`id`, `type_name`) VALUES
(1, 'WEDDING'),
(2, 'BIRTHDAY'),
(3, 'CORPORATE MEETING');

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `id` int(10) NOT NULL,
  `food_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `food_type` int(10) NOT NULL,
  `cost` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`id`, `food_name`, `food_type`, `cost`) VALUES
(1, 'LIGHT', 1, 200),
(2, 'HEAVY', 2, 350),
(3, 'PREMIUM', 3, 500);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(10) NOT NULL,
  `FullName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `FullName`, `Email`, `Password`) VALUES
(1, 'Sourav Roy', 'sourav@gmail.com', '1234'),
(2, 'ami', 'ami@g.com', 'ami'),
(3, 'Faria Uddin Adity', 'Faria@gmail.com', 'faria'),
(4, 'Sourav ', 'souravroy@gmail.com', 'sourav'),
(5, 'Sourav Chandra Roy', 'sourav.roy@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `decorations`
--
ALTER TABLE `decorations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_packages`
--
ALTER TABLE `event_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_types`
--
ALTER TABLE `event_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `decorations`
--
ALTER TABLE `decorations`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `event_packages`
--
ALTER TABLE `event_packages`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `event_types`
--
ALTER TABLE `event_types`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
