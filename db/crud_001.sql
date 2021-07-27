-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2021 at 09:42 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_001`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_1`
--

CREATE TABLE `product_1` (
  `id_product` int(11) NOT NULL,
  `pro_name` varchar(20) NOT NULL,
  `pro_price` varchar(20) NOT NULL,
  `pro_img` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_1`
--

INSERT INTO `product_1` (`id_product`, `pro_name`, `pro_price`, `pro_img`, `date`) VALUES
(1, 'มาม่า', '6', 'img_60d5f1bae21d4.jpg', '2021-06-25 15:09:46'),
(2, 'มาม่า2', '6', 'img_60d5f4a99e2eb.jpg', '2021-06-25 15:22:17'),
(3, 'ทดสอบ', '10', 'img_60fc2b96374cf.jpg', '2021-07-24 15:02:46'),
(4, 'น้ำส้ม', '20', 'img_60fc2ee641540.jpg', '2021-07-24 15:16:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_1`
--
ALTER TABLE `product_1`
  ADD PRIMARY KEY (`id_product`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_1`
--
ALTER TABLE `product_1`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
