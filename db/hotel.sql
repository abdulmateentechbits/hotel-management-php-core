-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2021 at 04:42 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `phoneno` int(10) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `cdate` date DEFAULT NULL,
  `approval` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `usname` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `usname`, `pass`) VALUES
(4, 'Aziz', '1234'),
(5, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) DEFAULT NULL,
  `title` varchar(5) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `troom` varchar(30) DEFAULT NULL,
  `tbed` varchar(30) DEFAULT NULL,
  `nroom` int(11) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `ttot` double(8,2) DEFAULT NULL,
  `fintot` double(8,2) DEFAULT NULL,
  `mepr` double(8,2) DEFAULT NULL,
  `meal` varchar(30) DEFAULT NULL,
  `btot` double(8,2) DEFAULT NULL,
  `noofdays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `title`, `fname`, `lname`, `troom`, `tbed`, `nroom`, `cin`, `cout`, `ttot`, `fintot`, `mepr`, `meal`, `btot`, `noofdays`) VALUES
(18, 'Dr.', 'itizaz ur', 'rehman', 'Superior Room', 'Single', 1, '2021-02-03', '2021-02-03', 0.00, 0.00, 0.00, 'Room only', 0.00, 0),
(19, 'Dr.', 'itizaz ur', 'rehman', 'Deluxe Room', 'Double', 2, '2021-02-02', '2021-02-11', 3960.00, 4118.40, 118.80, 'Half Board', 39.60, 9),
(20, 'Miss.', 'rida', 'asad', 'Superior Room', 'Quad', 2, '2021-02-04', '2021-02-17', 8320.00, 8819.20, 332.80, 'Breakfast', 166.40, 13),
(21, 'Mrs.', 'aitizaz', 'rehman', 'Deluxe Room', 'Double', 2, '2021-02-05', '2021-02-12', 3080.00, 3110.80, 0.00, 'Room only', 30.80, 7),
(22, 'Miss.', 'rida', 'rehman', 'Guest House', 'Double', 3, '2021-02-04', '2021-02-05', 540.00, 554.40, 10.80, 'Half Board', 3.60, 1),
(23, 'Dr.', 'itizaz ur', 'rehman', 'Single Room', 'Single', 1, '2021-02-05', '2021-02-12', 1050.00, 1060.50, 0.00, 'Room only', 10.50, 7);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(15) DEFAULT NULL,
  `bedding` varchar(10) DEFAULT NULL,
  `place` varchar(10) DEFAULT NULL,
  `cusid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `type`, `bedding`, `place`, `cusid`) VALUES
(30, 'Superior Room', 'Single', 'Free', 0),
(31, 'Superior Room', 'Double', 'Free', NULL),
(32, 'Superior Room', 'Triple', 'Free', NULL),
(33, 'Superior Room', 'Quad', 'NotFree', 20),
(34, 'Deluxe Room', 'Single', 'Free', NULL),
(35, 'Deluxe Room', 'Double', 'Free', 0),
(36, 'Deluxe Room', 'Triple', 'Free', NULL),
(37, 'Deluxe Room', 'Quad', 'Free', NULL),
(38, 'Guest House', 'Single', 'Free', NULL),
(39, 'Guest House', 'Double', 'NotFree', 22),
(40, 'Guest House', 'Triple', 'Free', NULL),
(41, 'Guest House', 'Quad', 'Free', NULL),
(42, 'Single Room', 'Single', 'Free', 0),
(43, 'Single Room', 'Double', 'Free', NULL),
(44, 'Single Room', 'Triple', 'Free', NULL),
(45, 'Single Room', 'Quad', 'Free', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roombook`
--

CREATE TABLE `roombook` (
  `id` int(10) UNSIGNED NOT NULL,
  `Title` varchar(5) DEFAULT NULL,
  `FName` text DEFAULT NULL,
  `LName` text DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `National` varchar(30) DEFAULT NULL,
  `Country` varchar(30) DEFAULT NULL,
  `Phone` text DEFAULT NULL,
  `TRoom` varchar(20) DEFAULT NULL,
  `Bed` varchar(10) DEFAULT NULL,
  `NRoom` varchar(2) DEFAULT NULL,
  `Meal` varchar(15) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `stat` varchar(15) DEFAULT NULL,
  `nodays` int(11) DEFAULT NULL,
  `user_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roombook`
--

INSERT INTO `roombook` (`id`, `Title`, `FName`, `LName`, `Email`, `National`, `Country`, `Phone`, `TRoom`, `Bed`, `NRoom`, `Meal`, `cin`, `cout`, `stat`, `nodays`, `user_id`) VALUES
(19, 'Dr.', 'itizaz ur', 'rehman', 'aitizazrehman_cl@yahoo.com', 'Pakistani', 'Pakistan', '03499303662', 'Deluxe Room', 'Double', '2', 'Half Board', '2021-02-02', '2021-02-11', 'Confirm', 9, 7),
(22, 'Miss.', 'rida', 'rehman', 'aitizazrehman_cl@yahoo.com', 'Pakistani', 'Pakistan', '03499303662', 'Guest House', 'Double', '3', 'Half Board', '2021-02-04', '2021-02-05', 'Cancel', 1, 6),
(37, 'Mr.', 'itizaz ur', 'rehman', 'aitizazrehman77@gmail.com', 'Pakistani', 'Pakistan', '03499303662', 'Superior Room', 'Single', '1', 'Breakfast', '2021-04-24', '2021-04-24', 'Not Confirm', 0, 7);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `name`) VALUES
(1, 'superior room'),
(2, 'deluxe room'),
(3, 'guest room'),
(4, 'single room');

-- --------------------------------------------------------

--
-- Table structure for table `room_type`
--

CREATE TABLE `room_type` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_type`
--

INSERT INTO `room_type` (`id`, `name`) VALUES
(1, 'single \r\n'),
(2, 'double'),
(3, 'triple'),
(4, 'quad');

-- --------------------------------------------------------

--
-- Table structure for table `tour_request`
--

CREATE TABLE `tour_request` (
  `req_id` int(11) NOT NULL,
  `first_name` varchar(55) NOT NULL,
  `last_name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `address` varchar(255) NOT NULL,
  `nationality` varchar(55) NOT NULL,
  `p_countery` varchar(55) NOT NULL,
  `phone` varchar(55) NOT NULL,
  `tour_places` text NOT NULL,
  `pu_address` varchar(55) NOT NULL,
  `persons` int(11) NOT NULL,
  `pdate` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tour_request`
--

INSERT INTO `tour_request` (`req_id`, `first_name`, `last_name`, `email`, `address`, `nationality`, `p_countery`, `phone`, `tour_places`, `pu_address`, `persons`, `pdate`, `status`, `user_id`) VALUES
(4, 'itizaz ur', 'rehman', 'aitizazrehman77@gmail.com', 'district chitral,tehsil mastuj, village meragram no 1', 'Pakistani', 'Pakistan', '03499303662', 'Chitral National Park', 'district chitral,tehsil mastuj, village meragram no 1', 10, '2021-04-23', 'Cancel', 6),
(5, 'itizaz ur', 'rehman', 'aitizazrehman_cl@yahoo.com', 'district chitral,tehsil mastuj, village meragram no 1', 'Pakistani', 'Pakistan', '03499303662', 'Kalash Valley', 'district chitral,tehsil mastuj, village meragram no 1', 13, '2021-04-16', 'Cancel', 7),
(6, 'itizaz ur', 'rehman', 'aitizazrehman_cl@yahoo.com', 'district chitral,tehsil mastuj, village meragram no 1', 'Pakistani', 'Pakistan', '03499303662', 'Chitral National Park', 'district chitral,tehsil mastuj, village meragram no 1', 11, '2021-04-23', 'Cancel', 6),
(7, 'taskeen noor', 'rehman', 'admin@tutor.com', 'district chitral,tehsil mastuj, village meragram no 1', 'Pakistani', 'Pakistan', '03499303662', 'Boroghol Valley', 'district chitral,tehsil mastuj, village meragram no 1', 9, '2021-04-23', 'Confirm', 9),
(8, 'taskeen ', 'noor', 'taskinnoor77@gmail.com', 'district chitral,tehsil mastuj, village meragram no 1', 'Pakistani', 'Pakistan', '03499303662', 'Chitral National Park', 'district chitral,tehsil mastuj, village meragram no 1', 5, '2021-04-23', 'Not Confirm', 9);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES
(6, 'rida', 'c20ad4d76fe97759aa27a0c99bff6710', 'Rida Anjum'),
(7, 'aitizaz', '81dc9bdb52d04dc20036dbd8313ed055', 'aitizaz'),
(8, 'asad ali khan', '81dc9bdb52d04dc20036dbd8313ed055', 'asad'),
(9, 'taskeen', '81dc9bdb52d04dc20036dbd8313ed055', 'Taskeen'),
(10, 'sareer', '202cb962ac59075b964b07152d234b70', 'sareer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roombook`
--
ALTER TABLE `roombook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_type`
--
ALTER TABLE `room_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour_request`
--
ALTER TABLE `tour_request`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `roombook`
--
ALTER TABLE `roombook`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `room_type`
--
ALTER TABLE `room_type`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tour_request`
--
ALTER TABLE `tour_request`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
