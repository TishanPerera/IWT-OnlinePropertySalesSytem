-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2023 at 07:46 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iwt_a`
--

-- --------------------------------------------------------

--
-- Table structure for table `newtable`
--

CREATE TABLE `newtable` (
  `id` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `discription` varchar(300) NOT NULL,
  `Image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newtable`
--

INSERT INTO `newtable` (`id`, `Name`, `price`, `discription`, `Image`) VALUES
(21, 'House', '1200000', 'malabe, new house,', 'image/brand-new-luxury-house-park-road-buy-sale-best-sri-lanka-sl-colombo-realtors-lk.jpg'),
(22, 'House', '1100000', 'Maharagama, two floor', 'image/1790132-9180960.jpg'),
(24, 'House', '3000000', 'Kaluthara new house', 'image/images.jpg'),
(25, 'apartment', '1350000', 'High-ceilings', 'image/download.jpg'),
(26, 'apartment', '1250000', 'upscale', 'image/download (2).jpg'),
(27, 'land', '900000', '60 perch land in Nugegoda', 'image/images (1).jpg'),
(28, 'apartment', '1200000', 'skyline and astonishing view', 'image/download (1).jpg'),
(29, 'land', '965000', '100 perch in Malabe', 'image/images (3).jpg'),
(30, 'land', '400000', '300 perch in Matara', 'image/images (2).jpg'),
(31, 'land', '870000', '200 perch in Welimada', 'image/images (4).jpg'),
(32, 'land', '980000', 'Modern,urban', 'image/images (6).jpg'),
(33, 'apartment', '140000', 'Vintage,Modern', 'image/images (5).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `premium_add_req`
--

CREATE TABLE `premium_add_req` (
  `addId` int(10) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `coverImage` mediumblob NOT NULL,
  `description` varchar(200) NOT NULL,
  `promotionType` varchar(50) NOT NULL,
  `sellerName` varchar(100) NOT NULL,
  `sellerEmail` varchar(100) NOT NULL,
  `sellerPhno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `premium_add_req`
--

INSERT INTO `premium_add_req` (`addId`, `topic`, `coverImage`, `description`, `promotionType`, `sellerName`, `sellerEmail`, `sellerPhno`) VALUES
(8, 'toipc new 12', 0x696d616765312e706e67, 'fygvjh', 'Homepage Banne', 'nevil', 'nevil@gmail.com', 712345678);

-- --------------------------------------------------------

--
-- Table structure for table `reguser`
--

CREATE TABLE `reguser` (
  `userId` int(10) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `phno` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `psw` varchar(20) NOT NULL,
  `conpsw` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reguser`
--

INSERT INTO `reguser` (`userId`, `FirstName`, `LastName`, `phno`, `email`, `psw`, `conpsw`) VALUES
(7, 'Bob', 'Marley', 751234567, 'bob@gmail.com', 'Az@12', 'Az@12');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `sellerId` int(10) NOT NULL,
  `s_firstname` varchar(100) NOT NULL,
  `s_lastname` varchar(100) NOT NULL,
  `s_phno` int(11) NOT NULL,
  `s_email` varchar(100) NOT NULL,
  `s_psw` varchar(50) NOT NULL,
  `s_conpsw` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`sellerId`, `s_firstname`, `s_lastname`, `s_phno`, `s_email`, `s_psw`, `s_conpsw`) VALUES
(3, 'Kevin', 'Perera', 771234567, 'kevin@gmail.com', 'Kvin@123', 'Kvin@123');

-- --------------------------------------------------------

--
-- Table structure for table `seller_msg`
--

CREATE TABLE `seller_msg` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seller_msg`
--

INSERT INTO `seller_msg` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'Kevin Silva ', 'kevin@gmail.com', '0779912342', 'tcfygvuh'),
(13, 'new user', 'newuser@gmail.com', '0127533272', 'How to send a message to customer'),
(14, 'saman  ', 'saman@gmail.com', '0981234567', 'fcygvuhbj '),
(18, 'hiii ', 'hii@gmail.com', '0712345678', ' heloow ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `newtable`
--
ALTER TABLE `newtable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `premium_add_req`
--
ALTER TABLE `premium_add_req`
  ADD PRIMARY KEY (`addId`);

--
-- Indexes for table `reguser`
--
ALTER TABLE `reguser`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`sellerId`);

--
-- Indexes for table `seller_msg`
--
ALTER TABLE `seller_msg`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `newtable`
--
ALTER TABLE `newtable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `premium_add_req`
--
ALTER TABLE `premium_add_req`
  MODIFY `addId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reguser`
--
ALTER TABLE `reguser`
  MODIFY `userId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `sellerId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seller_msg`
--
ALTER TABLE `seller_msg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
