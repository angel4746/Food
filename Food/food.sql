-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2021 at 03:00 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` bigint(8) NOT NULL,
  `name` varchar(250) NOT NULL,
  `msg` varchar(250) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `name`, `msg`, `date`) VALUES
(1, 'Abbas Ahmad', 'aaaaaaa', '2016-05-27 15:19:45'),
(11, 'Abbas Ahmad', 'new texr', '2018-12-03 08:19:45'),
(12, 'sadfds', 'asffdjjls', '2018-12-03 08:19:53'),
(14, 'fsjlf', 'askfdlksfj', '2018-12-03 08:26:26'),
(16, 'lizu', 'bhalo asche', '2021-04-23 06:48:03'),
(17, 'nishat', 'ami bhat khai', '2021-04-23 07:13:51'),
(18, 'mustahid', 'bhalo asche', '2021-04-23 08:41:12'),
(19, 'akash', 'bhalo asche', '2021-05-01 06:49:19'),
(20, 'shovo', 'amr pate betha', '2021-05-01 06:49:51'),
(21, 'shovo ', 'fuck you', '2021-05-01 07:42:13'),
(22, 'lizu', 'ki chas', '2021-05-01 07:42:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` bigint(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
