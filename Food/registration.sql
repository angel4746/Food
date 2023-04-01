-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2021 at 09:12 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `total`
--

CREATE TABLE `total` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `category` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `total`
--

INSERT INTO `total` (`id`, `username`, `email`, `phonenumber`, `category`) VALUES
(1, 'lizu12', 'lizu@gmail.com', '23534256356', NULL),
(2, '1711071', 'lizu@gmail.com', '23534256356', NULL),
(3, 'uh', 'jkugl@gmail.com', 'hss', NULL),
(4, '1631880', 's@gmail.comj', '23534256356', NULL),
(5, 'lizu111', 'ktorash@yahoo.com', '01627162691', NULL),
(6, 'nishat', 'tosmia@gmail.com', '01764324', NULL),
(7, 'maraj', 'pp@gmail.com', 'hggffgg', NULL),
(8, 'lizu', 's@gmail.comj', '02466rfyfg', NULL),
(9, 'nabila', 'k@gmail.com', '096243732635', NULL),
(10, 'lizu', 'lizu@gmail.com', 'urgent call me', NULL),
(11, 'lizu', 'lizu@gmail.com', 'urgent call me', NULL),
(12, 'jvg', 'qefqe@rgf.vb', 'qeef', 'heart'),
(13, 'maraj', 'nibrasali3@gmail.com', '88765565665', 'Eye'),
(14, 'amma', 'lizu@gmail.com', '666666666', 'Eye');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `rname` varchar(200) NOT NULL,
  `option` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `rname`, `option`, `title`, `description`) VALUES
(7, 'nishat', 'Appoinment', '01627162691', 'ajahah'),
(8, 'nishat', 'Appoinment', '01627162691', 'ajahah'),
(9, 'nishat', 'Appoinment', '01627162691', 'ajahah'),
(10, 'nishat', 'Appoinment', '01627162691', 'ajahah'),
(11, 'nishat', 'Appoinment', '01627162691', 'ajahah'),
(12, 'nishat', 'Appoinment', '01627162691', 'ajahah'),
(13, 'tuly', 'Appoinment', '017161655154', 'f,fhjfhahfdj'),
(14, 'pah', 'Appoinment', 'jhgggg', 'ghghg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `total`
--
ALTER TABLE `total`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `total`
--
ALTER TABLE `total`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
