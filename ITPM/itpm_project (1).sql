-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- දායකයා: 127.0.0.1
-- උත්පාදන වේලාව: මැයි 07, 2022 දින 06:56 PM ට
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
-- දත්තගබඩාව: `itpm_project`
--

-- --------------------------------------------------------

--
-- වගුවක් සඳහා වගු සැකිල්ල `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- වගු සඳහා නික්ෂේප දත්ත `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'adimin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- වගුවක් සඳහා වගු සැකිල්ල `employee`
--

CREATE TABLE `employee` (
  `EmpId` int(100) NOT NULL,
  `Rider_NIC` int(100) NOT NULL,
  `F_Name` varchar(100) NOT NULL,
  `Addr` varchar(100) NOT NULL,
  `MBN` varchar(100) NOT NULL,
  `Phone_No` int(10) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- වගු සඳහා නික්ෂේප දත්ත `employee`
--

INSERT INTO `employee` (`EmpId`, `Rider_NIC`, `F_Name`, `Addr`, `MBN`, `Phone_No`, `Email`) VALUES
(1, 456, 'Sayu Yasanga', '1256 dfgdg', '45678', 715468521, 'fgxhfghf@gmail.com'),
(2, 5634, 'xtghxftdgh', 'xfghxdtg', 'ghkmj5463', 256548479, 'rfgxdghxt@gmail.com'),
(3, 36892, 'asdbgy', '12345646', 'bnb-7856', 25487636, 'xfgbvxdfgb@gmail.com'),
(4, 456, 'Dhyan', 'xfghxdtg', '456348563', 45637863, 'ghmngchmn@gmail.com'),
(5, 456258, 'sanjaya', 'colombo 7', 'BNB-85614', 714568529, 'sanjaya@gmail.com'),
(6, 0, 'dfbg', 'dfgv', 'fgd', 0, 'df'),
(7, 15975, 'sanjaya kumara', 'colombo 10', 'BAB-4586', 7458961, 'kumara@gmail.com'),
(8, 0, 'dfgvdf', 'gdfvgxdf', 'gvxdfgvzd', 0, 'xdzfgv'),
(9, 0, 'gncfgnbh', 'gncfg', 'nfcgncfg', 0, 'nhfcgn'),
(10, 0, 'mmmmmmm', 'mmmmm', 'mmmm', 0, 'mmm'),
(11, 0, 'test1', 'test1', 'test1', 0, 'test1');

-- --------------------------------------------------------

--
-- වගුවක් සඳහා වගු සැකිල්ල `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- වගු සඳහා නික්ෂේප දත්ත `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(12, 'Dhyan', 'ddl@gmail.com', '993d69c44ee5846095c3f7b0b8b5f7b4'),
(13, 'Pavani', 'pavani@gmail.com', '895779e482ac678a380e9c7aa7b54672'),
(14, 'sayu', 'sayuruyasanga2016@gmail.com', 'd575ab8dd714014ff8ec460b8585a7f2'),
(15, 'dha', 'dds@gmail.com', '993d69c44ee5846095c3f7b0b8b5f7b4'),
(16, 'sayuru yasnga', 'syu@gmail.com', '4875b3210ffa9463be42c307d7e97c07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD UNIQUE KEY `num` (`EmpId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `EmpId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
