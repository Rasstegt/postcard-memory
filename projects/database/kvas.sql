-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2019 at 03:18 AM
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
-- Database: `khalikov_kvas`
--
-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `phone` varchar(20) COLLATE utf8_bin NOT NULL,
  `email` varchar(40) COLLATE utf8_bin NOT NULL,
  `address` varchar(50) COLLATE utf8_bin NOT NULL,
  `city` varchar(50) COLLATE utf8_bin NOT NULL,
  `province` varchar(30) COLLATE utf8_bin NOT NULL,
  `postal` varchar(10) COLLATE utf8_bin NOT NULL,
  `ghost` int(11) NOT NULL,
  `friend` int(11) NOT NULL,
  `life` int(11) NOT NULL,
  `delivery` varchar(10) COLLATE utf8_bin NOT NULL,
  `order_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `name`, `phone`, `email`, `address`, `city`, `province`, `postal`, `ghost`, `friend`, `life`, `delivery`, `order_time`) VALUES
(6, 'Privet', '123-098-7321', 'joke@juke.jake', '34 Dunken Rd', 'Lester', 'Manitoba', 'A5Z 8L2', 2, 4, 0, 'Four Day', '2019-04-01 16:05:31'),
(7, 'Debil', '999-777-8888', 'check@admin.ek', '24 Lobster Dr', 'Oakville', 'Yukon', 'J0H 2O1', 0, 5, 4, 'Three Day', '2019-04-01 16:14:57'),
(9, 'Kedior', '435-654-8796', 'test@test.test', '1381 Test Te.', 'Testerilloi', 'Newfoundland and Labrador', 'K6G 6Z5', 5, 4, 3, 'Three Day', '2019-04-02 12:20:03'),
(12, 'Kedior', '321-312-4321', 'dkdas@kdas.dsa', '123124 Test Te.', 'Lsaodkr', 'Northwest Territories', 'K6G 6Z5', 0, 4, 4, 'Three Day', '2019-04-02 15:25:48'),
(13, 'Kedior', '321-312-4321', 'dkdas@kdas.dsa', '123124 Test Te.', 'Lsaodkr', 'Northwest Territories', 'K6G 6Z5', 0, 4, 4, 'Three Day', '2019-04-02 15:27:54'),
(14, 'Tester', '500-500-5000', 'test@test.test', '1381 Test Te.', 'Test', 'Ontario', 'T0T 0T0', 5, 0, 0, 'One Day', '2019-04-02 15:58:11'),
(15, 'Kedior', '435-654-8796', 'test@test.test', '1381 Test Te.', 'Testerilloi', 'Newfoundland and Labrador', 'K6G 6Z5', 0, 45, 1, 'Three Day', '2019-04-02 22:02:13'),
(16, 'Kristina', '500-500-5000', 'check@admin.ek', '1381 Test Te.', 'Test', 'Ontario', 'T0T 0T0', 0, 5, 0, 'One Day', '2019-04-02 22:09:14'),
(17, 'Debil', '999-777-8888', 'check@admin.ek', '24 Lobster Dr', 'Oakville', 'Yukon', 'J0H 2O1', 7, 0, 0, 'One Day', '2019-04-02 22:20:03'),
(19, 'Tester', '500-500-5000', 'test@test.test', '1381 Test Te.', 'Test', 'Ontario', 'T0T 0T0', 0, 5, 0, 'One Day', '2019-04-06 21:09:32'),
(26, 'Debil', '999-777-8888', 'check@admin.ek', '24 Lobster Dr', 'Oakville', 'Yukon', 'J0H 2O1', 0, 0, 6, 'Three Day', '2019-04-09 20:12:52'),
(29, 'Debil', '500-500-5000', 'dkdas@kdas.dsa', '1430 Trafalgar Rd', 'Oakville', 'Alberta', 'L6H 2L1', 0, 7, 0, 'One Day', '2019-04-09 20:21:03');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `user_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`user_id`, `name`, `username`, `password`, `role`) VALUES
(1, 'Admin', 'admin', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
