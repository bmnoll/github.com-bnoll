-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2020 at 11:56 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csc206noll`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(200) NOT NULL,
  `name` varchar(24) NOT NULL,
  `description` varchar(200) NOT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `price` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `photo`, `price`) VALUES
(1, 'Loser', 'Loser L hand design on a \"dad hat\" in a color of your choice', 'product-pictures\loser.png', '$20'),
(2, 'Suh Dude', 'Suh Dude hand design on a \"dad hat\" in a color of your choice', 'product-pictures\suh.png', '$20'),
(3, 'iLY', 'I Love You hand design on a \"dad hat\" in a color of your choice', 'product-pictures\ily.png', '$20'),
(4, 'Peace', 'Peace Sign hand design on a \"dad hat\" in a color of your choice', 'product-pictures\peace.png', '$20'),
(5, 'Heart', 'Heart hand design on a \"dad hat\" in a color of your choice', 'product-pictures\heart.png', '$25'),
(6, 'ILLuminati', 'Illuminati hand design on a \"dad hat\" in a color of your choice', 'product-pictures\illuminati.png', '$25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
