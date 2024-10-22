-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 09:05 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fancycakencookies`
--

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kodepos` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`id`, `nama`, `email`, `telepon`, `alamat`, `provinsi`, `kodepos`) VALUES
(14, 'Neng Suhaeni', 'neng@gmail.com', '0891390283012', 'jl. asdfghsk', 'Bekasi', '3231'),
(15, 'suci agisni', 'nashuuu30@gmail.com', '1232131314', 'jl akajas', 'Depok', '234234');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Price` int(11) NOT NULL,
  `UOM` varchar(20) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `Name`, `Price`, `UOM`, `Quantity`) VALUES
(1, 'Berry Choco Brownies', 350000, '/box', 10),
(2, 'Double Choco Cookie', 125000, '/pack', 5),
(3, 'Strawberry Moist', 100000, '/pack', 2),
(4, 'Choco Crumble Cream', 100000, '/slice', 7),
(5, 'Milky Cookie', 130000, '/pack', 4),
(8, 'Chocolate Classic', 350000, '/box', 10);

-- --------------------------------------------------------

--
-- Table structure for table `resumeorder`
--

CREATE TABLE `resumeorder` (
  `ordernumber` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `item` varchar(500) NOT NULL,
  `shipto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resumeorder`
--

INSERT INTO `resumeorder` (`ordernumber`, `nama`, `email`, `item`, `shipto`) VALUES
(42012001, 'Suci Agisni', 'suci@gmail.com', 'Chocolate Classic x1', 'Depok'),
(42012002, 'Nashuha Insani', 'nashuha@gmail.com', 'Milky Cookie x2 | Berry Choco Brownies x1', 'Jakarta'),
(42012003, 'Labuda Absorina', 'labuda@gmail.com', 'Choco Crumble Cream x1', 'Bogor'),
(42012004, 'Neng Suhaeni', 'neng@gmail.com', 'Strawberry Moist x1 | Milky Cookie x5 | Double Choco Cookie x1', 'Bekasi');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`id`, `nama`, `username`, `email`, `password`) VALUES
(2, 'labuda abs', 'labuda123', 'labuda123@gmail.com', 'labuda123'),
(3, 'Suci Agisni', 'suciagisni', 'suci@gmail.com', 'suci123');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `email`, `password`) VALUES
(12, 'Neng Suhaeni', 'nengsuhaeni', 'neng@gmail.com', 'neng123'),
(13, 'Nashuha Insani', 'nashuhainsani', 'nashu@gmail.com', 'nashu123'),
(14, 'Nashuha Insani', 'nashuha', 'nashu123@gmail.com', 'nashu123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `resumeorder`
--
ALTER TABLE `resumeorder`
  ADD PRIMARY KEY (`ordernumber`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `resumeorder`
--
ALTER TABLE `resumeorder`
  MODIFY `ordernumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42012005;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
