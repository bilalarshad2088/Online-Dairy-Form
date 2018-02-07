-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2018 at 10:37 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_dairy_form`
--
CREATE DATABASE IF NOT EXISTS `online_dairy_form` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `online_dairy_form`;

-- --------------------------------------------------------

--
-- Table structure for table `addproduct`
--

CREATE TABLE `addproduct` (
  `productId` int(11) NOT NULL,
  `productName` varchar(30) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `catagory` varchar(30) NOT NULL,
  `companyName` varchar(30) NOT NULL,
  `managerId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addproduct`
--

INSERT INTO `addproduct` (`productId`, `productName`, `quantity`, `price`, `catagory`, `companyName`, `managerId`) VALUES
(5, 'Nestle Yogut', 72, 50, 'Yogut', 'Nestle', 4),
(10, 'cooking oil', 18, 115, 'Oil ', 'Dalda', 4),
(12, 'Habib Milk Pack', 78, 50, 'Milk', 'Habib Foods', 4),
(13, 'Milk Pack', 487, 35, 'Milk', 'Nestle', 5),
(16, 'Olpers Yogut', 35, 20, 'Yogut', 'Olpers', 4),
(17, 'Nestle Cheese', 11, 30, 'Cheese', 'Nestle', 5),
(18, 'Milk Pack', 23, 19, 'Milk', 'Nestle', 12),
(19, 'OLpers Cheese', 96, 25, 'Cheese', 'Olpers', 12),
(20, 'Habib Yogut', 45, 36, 'Yogut', 'Habib Private Limited', 12),
(21, 'Habil Oil', 15, 115, 'Oil', 'Habib Private Limited', 12);

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `userName`, `password`) VALUES
(1, 'bilal208', '123');

-- --------------------------------------------------------

--
-- Table structure for table `cashier`
--

CREATE TABLE `cashier` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `dob` date NOT NULL,
  `salary` int(35) NOT NULL,
  `email` varchar(40) NOT NULL,
  `position` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cashier`
--

INSERT INTO `cashier` (`id`, `fname`, `lname`, `username`, `password`, `dob`, `salary`, `email`, `position`, `gender`) VALUES
(4, 'Zain', 'Ali  ', 'zain256  ', '123  ', '1997-07-21', 25000, 'zain@gmail.com', 'Cashier', 'Male'),
(5, 'Nazim', 'Khan ', 'Nazim123 ', '321 ', '1965-03-03', 45000, 'nazima12@gmail.com', 'Cashier', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `dob` date NOT NULL,
  `salary` int(35) NOT NULL,
  `email` varchar(40) NOT NULL,
  `position` varchar(15) NOT NULL,
  `gender` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`id`, `fname`, `lname`, `username`, `password`, `dob`, `salary`, `email`, `position`, `gender`) VALUES
(4, 'Bilal', 'Arshad', 'bilalarshad  ', '123  ', '1997-07-21', 100000, 'bilalarshad21041@gmail.com', 'Manager', 'Male'),
(5, 'Raheel', 'Arshad', 'raheel208', '123', '1990-06-21', 95000, 'raheel@gmail.com', 'Manager', 'Male'),
(12, 'Raheel', 'Khan', 'raheel333', '444', '1989-04-30', 265315, 'raheel@gmail.com', 'Manager', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `salerecord`
--

CREATE TABLE `salerecord` (
  `recordID` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(30) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `companyName` varchar(30) NOT NULL,
  `totalBill` int(11) NOT NULL,
  `cashierId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salerecord`
--

INSERT INTO `salerecord` (`recordID`, `productId`, `productName`, `quantity`, `price`, `companyName`, `totalBill`, `cashierId`) VALUES
(1, 17, 'Nestle Cheese', 21, 30, 'Nestle', 630, 0),
(2, 5, 'Nestle Yogut', 555, 50, 'Nestle', 27750, 0),
(9, 13, 'Milk Pack', 2, 35, 'Nestle', 70, 0),
(10, 13, 'Milk Pack', 5, 35, 'Nestle', 175, 0),
(11, 18, 'Milk Pack', 3, 19, 'Nestle', 57, 0),
(12, 18, 'Milk Pack', 3, 19, 'Nestle', 57, 0),
(13, 13, 'Milk Pack', 3, 35, 'Nestle', 105, 0),
(14, 13, 'Milk Pack', 2, 35, 'Nestle', 70, 0),
(15, 17, 'Nestle Cheese', 4, 30, 'Nestle', 120, 0),
(16, 17, 'Nestle Cheese', 2, 30, 'Nestle', 60, 4),
(17, 13, 'Milk Pack', 2, 35, 'Nestle', 70, 4),
(18, 13, 'Milk Pack', 3, 35, 'Nestle', 105, 4),
(19, 10, 'cooking oil', 3, 115, 'Shehbaz', 345, 4),
(20, 12, 'Habib Milk Pack', 5, 50, 'Habib Foods', 250, 4),
(21, 19, 'OLpers Cheese', 2, 25, 'Olpers', 50, 4),
(22, 12, 'Habib Milk Pack', 6, 50, 'Habib Foods', 300, 4),
(23, 18, 'Milk Pack', 7, 19, 'Nestle', 133, 4),
(24, 17, 'Nestle Cheese', 3, 30, 'Nestle', 90, 4),
(25, 12, 'Habib Milk Pack', 30, 50, 'Habib Foods', 1500, 4),
(26, 13, 'Milk Pack', 9, 35, 'Nestle', 315, 4),
(27, 5, 'Nestle Yogut', 8, 50, 'Nestle', 400, 4),
(28, 21, 'Habil Oil', 8, 115, 'Habib Private Limited', 920, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addproduct`
--
ALTER TABLE `addproduct`
  ADD PRIMARY KEY (`productId`),
  ADD KEY `managerId` (`managerId`);

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cashier`
--
ALTER TABLE `cashier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salerecord`
--
ALTER TABLE `salerecord`
  ADD PRIMARY KEY (`recordID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addproduct`
--
ALTER TABLE `addproduct`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cashier`
--
ALTER TABLE `cashier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `salerecord`
--
ALTER TABLE `salerecord`
  MODIFY `recordID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addproduct`
--
ALTER TABLE `addproduct`
  ADD CONSTRAINT `addproduct_ibfk_1` FOREIGN KEY (`managerId`) REFERENCES `manager` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
