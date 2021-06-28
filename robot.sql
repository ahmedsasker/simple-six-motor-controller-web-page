-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2021 at 06:16 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `robot`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `all`
-- (See below for the actual view)
--
CREATE TABLE `all` (
);

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `m1` int(11) NOT NULL,
  `m2` int(11) NOT NULL,
  `m3` int(11) NOT NULL,
  `m4` int(11) NOT NULL,
  `m5` int(11) NOT NULL,
  `m6` int(11) NOT NULL,
  `state` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `m1`, `m2`, `m3`, `m4`, `m5`, `m6`, `state`) VALUES
(49, 163, 43, 156, 90, 143, 90, 'on'),
(50, 20, 43, 45, 90, 60, 90, 'off'),
(51, 90, 90, 90, 90, 90, 90, 'on'),
(52, 90, 90, 90, 90, 90, 47, 'on'),
(53, 143, 90, 90, 90, 90, 47, 'on'),
(54, 143, 90, 90, 90, 147, 47, 'on'),
(55, 143, 90, 133, 90, 147, 47, 'on'),
(56, 168, 90, 164, 90, 147, 47, 'on'),
(57, 168, 90, 164, 135, 147, 47, 'on'),
(58, 39, 90, 164, 135, 49, 47, 'on'),
(59, 39, 90, 164, 135, 49, 164, 'on'),
(60, 120, 90, 164, 135, 49, 164, 'on'),
(61, 120, 90, 36, 135, 49, 164, 'on'),
(62, 171, 90, 36, 135, 49, 164, 'on'),
(63, 171, 90, 36, 135, 117, 164, 'on'),
(64, 171, 149, 149, 135, 117, 164, 'on'),
(65, 38, 57, 149, 135, 117, 164, 'on'),
(66, 38, 57, 32, 61, 117, 164, 'on'),
(67, 38, 57, 165, 122, 117, 164, 'on'),
(68, 165, 165, 165, 171, 117, 164, 'off'),
(69, 123, 90, 169, 159, 28, 35, 'on'),
(70, 90, 90, 90, 90, 90, 132, 'on'),
(71, 90, 131, 90, 90, 90, 90, 'on'),
(72, 90, 90, 90, 90, 90, 90, 'on'),
(73, 90, 90, 90, 90, 90, 90, 'off'),
(74, 90, 90, 90, 90, 90, 90, 'off'),
(75, 90, 90, 90, 90, 90, 90, 'off'),
(76, 90, 90, 90, 90, 90, 90, 'off'),
(77, 180, 149, 17, 148, 125, 36, 'off'),
(78, 90, 90, 90, 90, 90, 90, 'on'),
(79, 90, 90, 90, 90, 90, 90, 'on');

-- --------------------------------------------------------

--
-- Structure for view `all`
--
DROP TABLE IF EXISTS `all`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `all`  AS SELECT `data`.`m1` AS `m1`, `data`.`m2` AS `m2`, `data`.`m3` AS `m3`, `data`.`m4` AS `m4`, `data`.`m5` AS `m5`, `data`.`m6` AS `m6`, `data`.`a` AS `a`, `data`.`b` AS `b` FROM `data` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
