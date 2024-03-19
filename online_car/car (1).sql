-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2022 at 11:25 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car`
--

-- --------------------------------------------------------

--
-- Table structure for table `serv_type`
--

CREATE TABLE `serv_type` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `serv_type`
--

INSERT INTO `serv_type` (`id`, `name`, `status`) VALUES
(1, 'Maintenance', 'active'),
(2, 'free service', 'active'),
(3, '1st service', 'active'),
(4, '2nd service', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_carta`
--

CREATE TABLE `tbl_carta` (
  `id` int(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `transmission` text NOT NULL,
  `price` varchar(100) NOT NULL,
  `fuel` varchar(100) NOT NULL,
  `photo` text NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_carta`
--

INSERT INTO `tbl_carta` (`id`, `brand`, `model`, `transmission`, `price`, `fuel`, `photo`, `description`) VALUES
(1, '', 'Tesla model 3', 'Automatic', '60 lakhs', 'Petrol', 'TS.jpg', ''),
(2, '', 'Tesla model S', 'Automatic', '1.5 crs', 'Petrol', 'TE.jpg', ''),
(3, '', 'Tesla model Y', 'Automatic', '60lakhs', 'Petrol', 'TX.jpg', ''),
(4, '', 'Tesla model X', 'Automatic', '2 crs', 'Petrol', 'TY.jpg', ''),
(5, 'sabil', 'krish', 'Automatic', '', 'Electrical', '', ''),
(6, 'wdwdw', 'wfw', 'Manual', 'www', 'Electrical', 'bluecoat.webp', 'wfwfwfw');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fueltype`
--

CREATE TABLE `tbl_fueltype` (
  `fuel_id` int(11) NOT NULL,
  `fuel_name` varchar(150) NOT NULL,
  `status` varchar(255) NOT NULL,
  `createdOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_fueltype`
--

INSERT INTO `tbl_fueltype` (`fuel_id`, `fuel_name`, `status`, `createdOn`) VALUES
(1, 'Petrol', 'Active', '2022-11-17 07:40:06'),
(2, 'Electrical', 'Active', '2022-11-17 07:40:29'),
(3, 'Diesel', 'Active', '2022-11-17 07:41:47');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register`
--

CREATE TABLE `tbl_register` (
  `id` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_register`
--

INSERT INTO `tbl_register` (`id`, `name`, `email`, `phone`, `username`, `password`) VALUES
(1, '0', '0', '78528628', '0', '0'),
(2, 'afrin', 'bbgyy', '78528628', 'jhdeudniodwde', 'frfrf'),
(3, 'shoe', 'bbgyy', '78528628', 'notabdulh', 'Afrinafrin'),
(44, 'admin', 'duiejndioejn@gmail.com', '33455555', 'gbgb', 'bnhnbhn'),
(45, 'aca', 'as@gmail.com', '323', 'ssf', '123'),
(46, 'aca', 'as@gmail.com', '235243', '1234', '1234'),
(47, 'aca', 'as@gmail.com', '235243', '1234', '1234'),
(48, 'aca', 'as@gmail.com', '235243', '1234', '1234'),
(49, 'aca', 'as@gmail.com', '235243', '1234', '1234'),
(50, 'aca', 'as@gmail.com', '235243', '1234', '1234'),
(51, 'aca', 'as@gmail.com', '235243', '1234', '1234'),
(52, 'aca', 'as@gmail.com', '235243', '1234', '1234'),
(53, 'aca', 'as@gmail.com', '235243', '1234', '1234'),
(54, 'aca', 'as@gmail.com', '235243', '1234', '1234'),
(55, 'aca', 'as@gmail.com', '235243', '1234', '1234'),
(56, 'aca', 'as@gmail.com', '235243', '1234', '1234'),
(57, 'aca', 'as@gmail.com', '235243', '1234', '1234'),
(58, 'aca', 'as@gmail.com', '235243', '1234', '1234'),
(59, 'aca', 'as@gmail.com', '235243', '1234', '1234'),
(60, 'aca', 'as@gmail.com', '35353', 'fdb', '34324'),
(61, 'aca', 'as@gmail.com', '35353', 'fdb', '34324'),
(62, '', '', '', '', ''),
(63, '', '', '', '', ''),
(64, '', '', '', '', ''),
(65, '', '', '', '', ''),
(66, '', '', '', '', ''),
(67, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_srv`
--

CREATE TABLE `tbl_srv` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `place` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `service` text NOT NULL,
  `vehicle_number` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_srv`
--

INSERT INTO `tbl_srv` (`id`, `name`, `place`, `phone`, `email`, `service`, `vehicle_number`, `message`) VALUES
(1, 'krishna', 'kochi', '9995660336', '', 'xxx', 'KL 16 3456d', 'dssd'),
(2, 'krishna', 'kochi', '9995660336', '', '', 'KL 16 3456d', 'aghcvda acaj;uoadd acalcv '),
(3, 'krishna', 'kochi', '9995660336', '', '', 'KL 16 3456d', 'aghcvda acaj;uoadd acalcv '),
(4, 'krishna', 'kochi', '9995660336', '', '', 'KL 16 3456d', 'vdsdaav   vdvdvdvvd'),
(5, 'krishna', 'kochi', '9995660336', '', '', 'KL 16 3456d', 'dcadcad '),
(6, 'krishna', 'kochi', '9995660336', '', '', 'sacscs', 'cacasc'),
(7, 'aca', 'kochi', '9995660336', '', 'free service', 'KL 16 3456d', 'ahhbdd'),
(8, 'aruna', 'kochi', '808945372', '', '', 'KL 16 3456d', 'ygaca ascaois'),
(9, 'payal', 'kochi', '9995660336', '', '1st service', 'KL 16 3456d', 'wdxwd'),
(10, 'sabil', 'kochi', '9995660336', 'sabildasdr@gmail.com', '2nd service', 'easfa ses', 'dvdavasd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE `tbl_staff` (
  `id` int(225) NOT NULL,
  `staff` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_name` varchar(10) NOT NULL,
  `status` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_staff`
--

INSERT INTO `tbl_staff` (`id`, `staff`, `email`, `user_name`, `status`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', 'Active', '123'),
(13, 'Shahana', 'shahana@gmail.com', 'shahana', 'Active', '123'),
(14, 'farui', 'afrinharoon966@gamil.com', 'fvfv', 'Active', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_trans`
--

CREATE TABLE `tbl_trans` (
  `id` int(11) NOT NULL,
  `trans_name` varchar(20) NOT NULL,
  `trans_status` varchar(20) NOT NULL,
  `createdOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_trans`
--

INSERT INTO `tbl_trans` (`id`, `trans_name`, `trans_status`, `createdOn`) VALUES
(1, 'Automatic', 'Active', '2022-11-17 09:33:10'),
(2, 'Manual', 'Active', '2022-11-17 09:34:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `serv_type`
--
ALTER TABLE `serv_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_carta`
--
ALTER TABLE `tbl_carta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_fueltype`
--
ALTER TABLE `tbl_fueltype`
  ADD PRIMARY KEY (`fuel_id`);

--
-- Indexes for table `tbl_register`
--
ALTER TABLE `tbl_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_srv`
--
ALTER TABLE `tbl_srv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_trans`
--
ALTER TABLE `tbl_trans`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `serv_type`
--
ALTER TABLE `serv_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_carta`
--
ALTER TABLE `tbl_carta`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_fueltype`
--
ALTER TABLE `tbl_fueltype`
  MODIFY `fuel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_register`
--
ALTER TABLE `tbl_register`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `tbl_srv`
--
ALTER TABLE `tbl_srv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_trans`
--
ALTER TABLE `tbl_trans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
