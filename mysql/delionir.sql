-- phpMyAdmin SQL Dump
-- version 4.9.4deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 02, 2020 at 05:13 AM
-- Server version: 8.0.19-0ubuntu0.19.10.3
-- PHP Version: 7.3.11-0ubuntu0.19.10.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `delionir`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `phone_number` varchar(15) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `family` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `pass` varchar(150) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `trialpass` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `datetrialpass` varchar(20) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `admin_or_restaurant` enum('admin','restaurant') CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `phone_number`, `email`, `name`, `family`, `pass`, `trialpass`, `datetrialpass`, `admin_or_restaurant`) VALUES
(1, '09303927397', 'tahmasebiarman96@gmail.com', 'ارمان', 'طهماسبی زاده', '123456', NULL, NULL, 'admin'),
(2, '09921837442', 'tahmasebiarman96@gmail.com', 'arman', 'tahmasebi', '934aa7be7deafc0053e92ce49a029603af8bc0b3891322a10b7ab730dfaa5d63', NULL, NULL, 'restaurant');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `food_id` int NOT NULL,
  `food_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `food_description` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `food_price` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `restaurant_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`food_id`, `food_name`, `food_description`, `food_price`, `restaurant_id`) VALUES
(1, 'غذای خوب', 'غذای خوبغذای خوبغذای خوبغذای خوبغذای خوبغذای خوبغذای خوبغذای خوبغذای خوبغذای خوبغذای خوبغذای خوبغذای خوبغذای خوبغذای خوبغذای خوبغذای خوبغذای خوبغذای خوبغذای خوبغذای خوبغذای خوبغذای خوبغذای خوبغذای خوبغذای خوبغذای خوبغذای خوب', '1000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `restaurant_id` int NOT NULL,
  `restaurant_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `restaurant_location` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `restaurant_number` int NOT NULL,
  `restaurant_description` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `restaurant_admin` int NOT NULL,
  `restaurant_delivery_fee` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `restaurant_discount_id` varchar(128) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`restaurant_id`, `restaurant_name`, `restaurant_location`, `restaurant_number`, `restaurant_description`, `restaurant_admin`, `restaurant_delivery_fee`, `restaurant_discount_id`) VALUES
(1, 'رستوران ولی عصر ', ' ', 34473092, 'رستوران خوب رستوران خوب رستوران خوب رستوران خوب رستوران خوب رستوران خوب رستوران خوب رستوران خوب رستوران خوب رستوران خوب رستوران خوب رستوران خوب رستوران خوب رستوران خوب رستوران خوب رستوران خوب رستوران خوب رستوران خوب رستوران خوب رستوران خوب رستوران خوب رستوران خوب رستوران خوب رستوران خوب رستوران خوب رستوران خوب ', 2, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_discount`
--

CREATE TABLE `restaurant_discount` (
  `restaurant_discount_id` int NOT NULL,
  `restaurant_discountـrate` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `restaurant_discount_code` varchar(128) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `restaurant_discount_expire_time` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`food_id`),
  ADD KEY `restaurant_id` (`restaurant_id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`restaurant_id`),
  ADD KEY `restaurant_admin` (`restaurant_admin`);

--
-- Indexes for table `restaurant_discount`
--
ALTER TABLE `restaurant_discount`
  ADD KEY `restaurant_discount_id` (`restaurant_discount_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `food_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `restaurant_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `food_ibfk_1` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurant` (`restaurant_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
