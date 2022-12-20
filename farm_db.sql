-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2022 at 11:35 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farm_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `farmer_log_tb`
--

CREATE TABLE `farmer_log_tb` (
  `logid` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmer_log_tb`
--

INSERT INTO `farmer_log_tb` (`logid`, `username`, `password`, `role`) VALUES
(35, 'gayu', 'gayu', 2),
(36, 'janaki', 'janaki', 1),
(37, 'admin', 'admin', 0),
(39, 'aki', 'aki', 3),
(40, 'monisha', 'monisha', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products_tb`
--

CREATE TABLE `products_tb` (
  `product_id` int(50) NOT NULL,
  `logid` int(50) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `pdesc` varchar(100) NOT NULL,
  `pquantity` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pprice` int(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products_tb`
--

INSERT INTO `products_tb` (`product_id`, `logid`, `product_image`, `pname`, `pdesc`, `pquantity`, `name`, `pprice`, `status`) VALUES
(9, 35, 'profile/apple.jpg', 'APPLE', 'apples', '13', 'gayu', 150, '1'),
(10, 35, 'profile/apple.jpg', 'APPLE', 'apples', '13', 'gayu', 180, '0'),
(12, 35, 'profile/apple.jpg', 'APPLE', 'apples', '13', 'gayu', 150, '1');

-- --------------------------------------------------------

--
-- Table structure for table `register_tb`
--

CREATE TABLE `register_tb` (
  `register_id` int(50) NOT NULL,
  `logid` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register_tb`
--

INSERT INTO `register_tb` (`register_id`, `logid`, `name`, `username`, `email`, `mobile`, `password`, `role`, `status`) VALUES
(35, 35, 'gayu', 'gayu', 'gayathri@gmail.com', 9999999999, 'gayu', '2', '0'),
(36, 36, 'janaki', 'janaki', 'fghjk@sdfg', 74159636852, 'janaki', '1', '1'),
(37, 39, 'aki', 'aki', 'aki@gmail.com', 1234567890, 'aki', '3', '1'),
(38, 40, 'MONISHA', 'monisha', 'monisha@gmail.com', 9658471236, 'monisha', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `review_tb`
--

CREATE TABLE `review_tb` (
  `review_id` int(50) NOT NULL,
  `logid` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  `freply` varchar(100) NOT NULL,
  `areply` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review_tb`
--

INSERT INTO `review_tb` (`review_id`, `logid`, `name`, `message`, `freply`, `areply`) VALUES
(7, 40, 'monisha', 'sdfgswedrfghdfg', 'asdfg', ''),
(8, 40, 'monisha', 'zxcvbnm,./', 'good', ''),
(9, 39, 'aki', 'Zxdcfvgbnm', 'aswedrfghjk', 'bad'),
(10, 35, 'gayu', 'asdfgbn', 'bad', '');

-- --------------------------------------------------------

--
-- Table structure for table `tip_tb`
--

CREATE TABLE `tip_tb` (
  `tip_id` int(50) NOT NULL,
  `logid` int(100) NOT NULL,
  `message` varchar(500) NOT NULL,
  `fmessage` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tip_tb`
--

INSERT INTO `tip_tb` (`tip_id`, `logid`, `message`, `fmessage`) VALUES
(5, 40, 'AXCV', ''),
(6, 36, 'axscd', ''),
(9, 36, '', 'asdfb'),
(10, 36, '', 'ASDFGHJKLQWERTYUIOPXCVBNM,SDFGHJKLERTYUIOPZXCVBNM,'),
(11, 36, 'asdfghjkl;ertyuiopxcvbnmdfghjkltyuiopqwertyuiopppppppppppppppppppppp', '');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_tb`
--

CREATE TABLE `transaction_tb` (
  `tid` int(50) NOT NULL,
  `product_id` int(100) NOT NULL,
  `logid` int(50) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pquantity` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `farmer_log_tb`
--
ALTER TABLE `farmer_log_tb`
  ADD PRIMARY KEY (`logid`);

--
-- Indexes for table `products_tb`
--
ALTER TABLE `products_tb`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `register_tb`
--
ALTER TABLE `register_tb`
  ADD PRIMARY KEY (`register_id`);

--
-- Indexes for table `review_tb`
--
ALTER TABLE `review_tb`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `tip_tb`
--
ALTER TABLE `tip_tb`
  ADD PRIMARY KEY (`tip_id`);

--
-- Indexes for table `transaction_tb`
--
ALTER TABLE `transaction_tb`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `farmer_log_tb`
--
ALTER TABLE `farmer_log_tb`
  MODIFY `logid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `products_tb`
--
ALTER TABLE `products_tb`
  MODIFY `product_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `register_tb`
--
ALTER TABLE `register_tb`
  MODIFY `register_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `review_tb`
--
ALTER TABLE `review_tb`
  MODIFY `review_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tip_tb`
--
ALTER TABLE `tip_tb`
  MODIFY `tip_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `transaction_tb`
--
ALTER TABLE `transaction_tb`
  MODIFY `tid` int(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
