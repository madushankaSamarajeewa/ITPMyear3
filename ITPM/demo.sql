-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- දායකයා: 127.0.0.1
-- උත්පාදන වේලාව: මැයි 07, 2022 දින 06:55 PM ට
-- සේවාදායකයේ අනුවාදය: 10.4.22-MariaDB
-- PHP අනුවාදය: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- දත්තගබඩාව: `demo`
--

-- --------------------------------------------------------

--
-- වගුවක් සඳහා වගු සැකිල්ල `delever`
--

CREATE TABLE `delever` (
  `id` int(100) NOT NULL,
  `rider` varchar(100) NOT NULL,
  `mbn` varchar(100) NOT NULL,
  `loc` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `item` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- වගු සඳහා නික්ෂේප දත්ත `delever`
--

INSERT INTO `delever` (`id`, `rider`, `mbn`, `loc`, `email`, `item`) VALUES
(1, '11222', 'ddddd', 'ddd', 'dddd', ''),
(2, 'Dhyan', 'MBN-456', 'maharagama', 'dhyan@gmail.com', ''),
(3, 'sampath', 'mbn-6542', 'kaduwela', 'sampath@gmail.com', 'pizza'),
(4, 'test21', 'test21', 'test21', 'test21', 'test21'),
(5, 'sawe', 'vgvnh4563', 'dfgbdcgfb', 'sawe@gmail.com', 'burger');

-- --------------------------------------------------------

--
-- වගුවක් සඳහා වගු සැකිල්ල `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `RiderNIC` varchar(100) NOT NULL,
  `FName` varchar(255) NOT NULL,
  `Addr` varchar(100) NOT NULL,
  `MBN` varchar(100) NOT NULL,
  `PhoneNo` varchar(10) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- වගු සඳහා නික්ෂේප දත්ත `employee`
--

INSERT INTO `employee` (`id`, `RiderNIC`, `FName`, `Addr`, `MBN`, `PhoneNo`, `Email`) VALUES
(2, '45623', 'dhyan', 'fgbfcgb c', '465asd', '745869456', 'gbfn'),
(3, 'ffvzdfv', 'vfxfcv', 'fczvz', 'bnv nvn', '468596458', 'hgjhc');

-- --------------------------------------------------------

--
-- වගුවක් සඳහා වගු සැකිල්ල `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `nic` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mbn` varchar(10) NOT NULL,
  `phn` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- වගු සඳහා නික්ෂේප දත්ත `employees`
--

INSERT INTO `employees` (`id`, `nic`, `name`, `address`, `mbn`, `phn`, `email`) VALUES
(15, '123', 'Dhyan Dinujaya', '45, A\r\nMaharagama,\r\nColombo.', '4561', '0784595698', 'ddl@gmail.com'),
(16, '123', 'Dhyan Dinujaya', '45, A\r\nMaharagama,\r\nColombo.', '1379', '0784595698', 'ddl@gmail.com'),
(17, '456', 'sayu yasanga', 'maharagama,\r\ncolombo', '4568', '0748956258', 'sayu@gmail.com'),
(18, '123456a', 'dinidu rasara', 'kurunegala', '7391', '0714565705', 'dini@gmail.com'),
(20, 'hfghfc', 'fghfcgh', 'fghfcgh', '5316', '456345', 'yhjgytj'),
(21, 'yhjuytdry', 'hfrtyhfytdh', 'ftyhdrtyh', '153', '45456', 'jutfjty'),
(22, 'fcghnfchgnj', 'ghnjcvhgnj', 'hgnjcfghj', '536465', '653458634', 'hjvghmjvghmj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `delever`
--
ALTER TABLE `delever`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `delever`
--
ALTER TABLE `delever`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
