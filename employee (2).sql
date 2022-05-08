-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- දායකයා: 127.0.0.1
-- උත්පාදන වේලාව: මැයි 08, 2022 දින 05:47 PM ට
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
-- වගුවක් සඳහා වගු සැකිල්ල `employee`
--

CREATE TABLE `employee` (
  `EmpId` int(4) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `Dob` date NOT NULL,
  `Age` int(3) NOT NULL,
  `Caddress` varchar(100) NOT NULL,
  `Phone_No` int(10) NOT NULL,
  `Nic` varchar(12) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Erole` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- වගු සඳහා නික්ෂේප දත්ත `employee`
--

INSERT INTO `employee` (`EmpId`, `FullName`, `Dob`, `Age`, `Caddress`, `Phone_No`, `Nic`, `Email`, `Erole`) VALUES
(1, 'Damith Silva', '1990-04-03', 31, '21/A karagasdeniya Matale', 776865344, '9234657890v', 'damith23@example.com', 'Accountant'),
(2, 'Hasith Manoj', '1992-03-04', 30, '71/b paathadumbara Theldeniya', 786855344, '9234615729v', 'hasi52@example.com', 'Cook'),
(3, 'Malaka Perera', '2000-02-17', 22, '232 Thangalla Hambanthota', 756858976, '2067157295v', 'malaka.p@example.com', 'Driver');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EmpId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `EmpId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
