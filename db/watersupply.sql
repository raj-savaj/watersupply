-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2020 at 03:16 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `watersupply`
--

-- --------------------------------------------------------

--
-- Table structure for table `addbottle`
--

CREATE TABLE `addbottle` (
  `a_id` int(20) NOT NULL,
  `a_cbottle` int(20) DEFAULT NULL,
  `a_hbottle` int(20) DEFAULT NULL,
  `a_amount` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addbottle`
--

INSERT INTO `addbottle` (`a_id`, `a_cbottle`, `a_hbottle`, `a_amount`) VALUES
(1, 12, 23, 0),
(2, 1, 2, 0),
(3, 1, 2, 0),
(4, 11, 12, 13);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `cBottle` int(11) DEFAULT NULL,
  `hBottle` int(11) DEFAULT NULL,
  `cBottlePrice` float DEFAULT NULL,
  `hBottlePrice` float DEFAULT NULL,
  `cBottleRet` int(11) DEFAULT NULL,
  `hBottleRet` int(11) DEFAULT NULL,
  `credit` float DEFAULT NULL,
  `debit` float DEFAULT NULL,
  `total` float DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `name`, `address`, `phone`, `cBottle`, `hBottle`, `cBottlePrice`, `hBottlePrice`, `cBottleRet`, `hBottleRet`, `credit`, `debit`, `total`, `status`, `date`) VALUES
(1, 'krupa', 'amreli', '123456', 12, 14, 20, 25, 1, 2, 100, 900, 1000, 'paid', '2020-05-07 18:30:00'),
(6, 'Savaj Raj', 'Jira Savarkundala', '9824318964', 10, 20, 20, 15, 0, 0, 0, 0, 0, NULL, '2020-05-08 11:33:36'),
(7, 'Tushar', 'Surat', '9824500214', 10, 10, 15, 10, 0, 0, 300, 100, 200, NULL, '2020-05-08 19:00:34'),
(8, 'Ajay', 'Amreli', '9825439225', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2020-05-09 10:55:49');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `pass` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `pass`) VALUES
(1, 'krupa', 'k@gmail.com', '123'),
(2, 'krishna', '456', 'a@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addbottle`
--
ALTER TABLE `addbottle`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addbottle`
--
ALTER TABLE `addbottle`
  MODIFY `a_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
