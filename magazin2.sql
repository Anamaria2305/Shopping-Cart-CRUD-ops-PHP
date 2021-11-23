-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2021 at 07:20 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magazin2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`id`, `product_id`, `quantity`, `id_user`) VALUES
(62, 9, 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE latin1_bin NOT NULL,
  `code` varchar(255) COLLATE latin1_bin NOT NULL,
  `image` text COLLATE latin1_bin NOT NULL,
  `price` double(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `code`, `image`, `price`) VALUES
(9, 'Bluza', 'bluza1', 'poze\\bluza.jpg', 23.50),
(10, 'Pantaloni', 'pantaloni1', 'poze\\Pant.jpg', 50.50),
(11, 'Tricou', 'tricou1', 'poze\\Tricou.jpg', 30.00),
(12, 'Rochie', 'rochie1', 'poze\\Rochie.jpg', 21.00),
(13, 'Adidasi', 'adidasi1', 'poze\\adidasi.jpg', 77.00),
(14, 'Tricou Borussia Dortmund', 'bvb1', 'poze\\bvb.jpg', 100.00),
(15, 'Jersey NBA SAS', 'sas1', 'poze\\sas.jpg', 120.00),
(16, 'Joben F1', 'max1', 'poze\\max.jpg', 55.00),
(17, 'Jersey Luka Doncic', 'luka1', 'poze\\doncic.jpg', 111.00),
(18, 'Geaca', 'geaca1', 'poze\\geaca.jpg', 83.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', '$2y$10$4Vt0XZ85p2NeF4hdaruYg.YewlLSpCwfNRhMipZxgp3VzRWkolje.', 'admin@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `users2`
--

CREATE TABLE `users2` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users2`
--

INSERT INTO `users2` (`id`, `username`, `password`, `email`) VALUES
(8, 'sergiu', '$2y$10$sw/UmIEvCl3NUPUMF0./BudLVArHJ4dMQRlujsQG6qytODrAch1xi', 'sergiu@yahoo.com'),
(10, 'anca', '$2y$10$3hU1cICYJEnzfqgEMrPKsuheCIzHsYHL7it6NHhCe0Rw5j1MD7nGS', 'anca@yahoo.com'),
(11, 'ana3', '$2y$10$WUz4Sh.jsvZAQRPwRCUGk.mkiIgk1lbTnjMvCSWdzlilFb5VHrQyi', 'ana@yahoo.com'),
(16, 'sorin', '$2y$10$TDV1MfYZlw6PNkLME6K7Eel9pQYPyfoSvlpvjC42Ov5LhTavGSCMa', 'sorin@yahoo.com'),
(17, 'laura', '$2y$10$oT.xjzUPNftV6sXZTH0HOubD/eMZt.vc7LypERX3a.Mr/mt3ZIR3i', 'laura@yahoo.com'),
(18, 'denis', '$2y$10$nJkxh9.vGEaRkSq5ktd55Oe.YzoQIh7ngDluhUF5TFkfzevMc7Bwu', 'denis@yahoo.com'),
(19, 'gabriela', '$2y$10$hdy76AvBgmOOoq4f8okX0uOz.2t0fn/aFJDWuhvCdwCsocwnWtfcK', 'gabi@yahoo.com'),
(20, 'alin', '$2y$10$6wDx/5lJOO1wuQu09.YJiOmUiWHFOGSfsHB2msQ4o2Ue13Oeh16V6', 'alin@yahooc.com'),
(21, 'dana', '$2y$10$KsC1Alk7PJSl/3FkEewImOgo5jC2scHQzizVSM55YKzyM6EjU/PjK', 'dana@yahoo.com'),
(22, 'sabri', '$2y$10$YXEbX5wELYSM6TxJ0C6kQe6YOt6Kgnh7x/bofoKsrRghmvpL6h8YS', 'sabri@yahoo.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produs` (`product_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produs` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users2`
--
ALTER TABLE `users2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users2`
--
ALTER TABLE `users2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD CONSTRAINT `tbl_cart_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `tbl_product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
