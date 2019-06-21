-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2019 at 04:44 PM
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
-- Database: `page`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `prod_type` varchar(20) NOT NULL,
  `brand_type` varchar(20) NOT NULL,
  `file` varchar(500) NOT NULL,
  `prod_descr` varchar(500) NOT NULL,
  `cost` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prod_id`, `prod_name`, `city`, `prod_type`, `brand_type`, `file`, `prod_descr`, `cost`) VALUES
(1, 'Nikon D5600', 'Mumbai', 'Electronics', 'Other', 'Nikon.jpg', 'Camera Made by Nikon To Click Beautiful Pictures', '78000'),
(2, 'Wings Of Fire', 'Mumbai', 'Books', 'Other', 'wingsoffire.jpeg', 'Inspirational Book Written By APJ abdul kalam', '200'),
(3, 'Xiaomi Note 6 Pro', 'Mumbai', 'Mobiles', 'Other', 'note6pro.png', 'Xiaomi Note 6 Pro Mobile', '15000'),
(4, 'Xperia XZ2', 'Mumbai', 'Mobiles', 'Sony', 'xperia.jpg', 'Mobile Phone Made By Xiaomi', '78000'),
(6, 'Adarsh', 'Navi_Mumbai', 'Other', 'Other', 'free.jpg', 'free hai ', '0'),
(7, 'LED Candles', 'Mumbai', 'Home_Accesories', 'Other', 'candles led.jpg', 'Beautiful LED Candle', '200'),
(10, 'Wallpaper Sticker', 'Panvel', 'Home_Accesories', 'Other', 'wallpaperStickers.jpeg', 'Waltop Wall Stickers Wallpaper Golden Paradise Flowers Thick Embossed Self Adhesive', '750'),
(14, 'I phone XR', 'Thane', 'Mobiles', 'Apple', 'iphonexr.jpg', 'Amazing Experience Mobile made by Apple', '75000'),
(43, 'test', 'test', 'Book', 'Book', 'candles led.jpg', 'wow', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prod_id`),
  ADD UNIQUE KEY `prod_name` (`prod_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
