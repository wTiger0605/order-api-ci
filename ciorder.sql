-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2020 at 12:44 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ciorder`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `order_number` bigint(20) UNSIGNED DEFAULT NULL,
  `customer_address` text DEFAULT NULL,
  `items` text DEFAULT NULL,
  `customer_name` varchar(20) DEFAULT NULL,
  `amount` double UNSIGNED DEFAULT NULL,
  `cc_number` varchar(30) DEFAULT NULL,
  `cc_exp_month` varchar(10) DEFAULT NULL,
  `cc_exp_year` varchar(10) DEFAULT NULL,
  `cvv` varchar(10) DEFAULT NULL,
  `status` varchar(2) DEFAULT NULL,
  `shipping_method` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ID`, `order_id`, `order_number`, `customer_address`, `items`, `customer_name`, `amount`, `cc_number`, `cc_exp_month`, `cc_exp_year`, `cvv`, `status`, `shipping_method`) VALUES
(70, 45, 43, 'a:11:{s:10:\"first_name\";s:5:\"first\";s:9:\"last_name\";s:4:\"last\";s:7:\"company\";s:7:\"company\";s:9:\"address_1\";s:8:\"address1\";s:9:\"address_2\";s:8:\"address2\";s:4:\"city\";s:4:\"city\";s:5:\"state\";s:2:\"GA\";s:8:\"postcode\";s:5:\"14766\";s:7:\"country\";s:2:\"US\";s:5:\"email\";s:13:\"test@test.com\";s:5:\"phone\";s:6:\"123124\";}', 'a:2:{i:0;a:3:{s:2:\"id\";i:25;s:3:\"qty\";i:2;s:4:\"name\";s:8:\"Variable\";}i:1;a:3:{s:2:\"id\";i:23;s:3:\"qty\";i:3;s:4:\"name\";s:6:\"Simple\";}}', 'first last', 520, '5105105105105100', '08', '2029', '555', '1', 'only'),
(73, 57, 57, 'a:11:{s:10:\"first_name\";s:4:\"Name\";s:9:\"last_name\";s:8:\"LastName\";s:7:\"company\";s:7:\"company\";s:9:\"address_1\";s:15:\"street address1\";s:9:\"address_2\";s:8:\"address2\";s:4:\"city\";s:2:\"NH\";s:5:\"state\";s:2:\"FL\";s:8:\"postcode\";s:5:\"14766\";s:7:\"country\";s:2:\"US\";s:5:\"email\";s:13:\"test@test.com\";s:5:\"phone\";s:6:\"123124\";}', 'a:0:{}', 'first last', 110, '5270429275019142', '09', '2031', '5543', '1', ''),
(74, 47, 43, 'a:11:{s:10:\"first_name\";s:5:\"first\";s:9:\"last_name\";s:4:\"last\";s:7:\"company\";s:7:\"company\";s:9:\"address_1\";s:8:\"address1\";s:9:\"address_2\";s:8:\"address2\";s:4:\"city\";s:4:\"city\";s:5:\"state\";s:2:\"GA\";s:8:\"postcode\";s:5:\"14766\";s:7:\"country\";s:2:\"US\";s:5:\"email\";s:13:\"test@test.com\";s:5:\"phone\";s:6:\"123124\";}', 'a:2:{i:0;a:3:{s:2:\"id\";i:25;s:3:\"qty\";i:2;s:4:\"name\";s:8:\"Variable\";}i:1;a:3:{s:2:\"id\";i:23;s:3:\"qty\";i:3;s:4:\"name\";s:6:\"Simple\";}}', 'first last', 520, '5105105105105100', '08', '2029', '555', '1', '10-14 days'),
(75, 58, 57, 'a:11:{s:10:\"first_name\";s:4:\"Name\";s:9:\"last_name\";s:8:\"LastName\";s:7:\"company\";s:7:\"company\";s:9:\"address_1\";s:15:\"street address1\";s:9:\"address_2\";s:8:\"address2\";s:4:\"city\";s:2:\"NH\";s:5:\"state\";s:2:\"FL\";s:8:\"postcode\";s:5:\"14766\";s:7:\"country\";s:2:\"US\";s:5:\"email\";s:13:\"test@test.com\";s:5:\"phone\";s:6:\"123124\";}', 'a:0:{}', 'first last', 110, '5270429275019142', '09', '2031', '5543', '1', ''),
(76, 44, 43, 'a:11:{s:10:\"first_name\";s:5:\"first\";s:9:\"last_name\";s:4:\"last\";s:7:\"company\";s:7:\"company\";s:9:\"address_1\";s:8:\"address1\";s:9:\"address_2\";s:8:\"address2\";s:4:\"city\";s:4:\"city\";s:5:\"state\";s:2:\"GA\";s:8:\"postcode\";s:5:\"14766\";s:7:\"country\";s:2:\"US\";s:5:\"email\";s:13:\"test@test.com\";s:5:\"phone\";s:6:\"123124\";}', 'a:2:{i:0;a:3:{s:2:\"id\";i:25;s:3:\"qty\";i:2;s:4:\"name\";s:8:\"Variable\";}i:1;a:3:{s:2:\"id\";i:23;s:3:\"qty\";i:3;s:4:\"name\";s:6:\"Simple\";}}', 'first last', 520, '5105105105105100', '08', '2029', '555', '1', 'only'),
(77, 48, 43, 'a:11:{s:10:\"first_name\";s:5:\"first\";s:9:\"last_name\";s:4:\"last\";s:7:\"company\";s:7:\"company\";s:9:\"address_1\";s:8:\"address1\";s:9:\"address_2\";s:8:\"address2\";s:4:\"city\";s:4:\"city\";s:5:\"state\";s:2:\"GA\";s:8:\"postcode\";s:5:\"14766\";s:7:\"country\";s:2:\"US\";s:5:\"email\";s:13:\"test@test.com\";s:5:\"phone\";s:6:\"123124\";}', 'a:2:{i:0;a:3:{s:2:\"id\";i:25;s:3:\"qty\";i:2;s:4:\"name\";s:8:\"Variable\";}i:1;a:3:{s:2:\"id\";i:23;s:3:\"qty\";i:3;s:4:\"name\";s:6:\"Simple\";}}', 'first last', 520, '5105105105105100', '08', '2029', '555', '1', '10-14 days'),
(78, 59, 57, 'a:11:{s:10:\"first_name\";s:4:\"Name\";s:9:\"last_name\";s:8:\"LastName\";s:7:\"company\";s:7:\"company\";s:9:\"address_1\";s:15:\"street address1\";s:9:\"address_2\";s:8:\"address2\";s:4:\"city\";s:2:\"NH\";s:5:\"state\";s:2:\"FL\";s:8:\"postcode\";s:5:\"14766\";s:7:\"country\";s:2:\"US\";s:5:\"email\";s:13:\"test@test.com\";s:5:\"phone\";s:6:\"123124\";}', 'a:0:{}', 'first last', 110, '5270429275019142', '09', '2031', '5543', '1', ''),
(79, 60, 57, 'a:11:{s:10:\"first_name\";s:4:\"Name\";s:9:\"last_name\";s:8:\"LastName\";s:7:\"company\";s:7:\"company\";s:9:\"address_1\";s:15:\"street address1\";s:9:\"address_2\";s:8:\"address2\";s:4:\"city\";s:2:\"NH\";s:5:\"state\";s:2:\"FL\";s:8:\"postcode\";s:5:\"14766\";s:7:\"country\";s:2:\"US\";s:5:\"email\";s:13:\"test@test.com\";s:5:\"phone\";s:6:\"123124\";}', 'a:0:{}', 'first last', 110, '5270429275019142', '09', '2031', '5543', '1', ''),
(80, 49, 43, 'a:11:{s:10:\"first_name\";s:5:\"first\";s:9:\"last_name\";s:4:\"last\";s:7:\"company\";s:7:\"company\";s:9:\"address_1\";s:8:\"address1\";s:9:\"address_2\";s:8:\"address2\";s:4:\"city\";s:4:\"city\";s:5:\"state\";s:2:\"GA\";s:8:\"postcode\";s:5:\"14766\";s:7:\"country\";s:2:\"US\";s:5:\"email\";s:13:\"test@test.com\";s:5:\"phone\";s:6:\"123124\";}', 'a:2:{i:0;a:3:{s:2:\"id\";i:25;s:3:\"qty\";i:2;s:4:\"name\";s:8:\"Variable\";}i:1;a:3:{s:2:\"id\";i:23;s:3:\"qty\";i:3;s:4:\"name\";s:6:\"Simple\";}}', 'first last', 520, '5105105105105100', '08', '2029', '555', '1', '10-14 days'),
(81, 50, 43, 'a:11:{s:10:\"first_name\";s:5:\"first\";s:9:\"last_name\";s:4:\"last\";s:7:\"company\";s:7:\"company\";s:9:\"address_1\";s:8:\"address1\";s:9:\"address_2\";s:8:\"address2\";s:4:\"city\";s:4:\"city\";s:5:\"state\";s:2:\"GA\";s:8:\"postcode\";s:5:\"14766\";s:7:\"country\";s:2:\"US\";s:5:\"email\";s:13:\"test@test.com\";s:5:\"phone\";s:6:\"123124\";}', 'a:2:{i:0;a:3:{s:2:\"id\";i:25;s:3:\"qty\";i:2;s:4:\"name\";s:8:\"Variable\";}i:1;a:3:{s:2:\"id\";i:23;s:3:\"qty\";i:3;s:4:\"name\";s:6:\"Simple\";}}', 'first last', 520, '5105105105105100', '08', '2029', '555', '1', '10-14 days'),
(82, 43, 43, 'a:11:{s:10:\"first_name\";s:5:\"first\";s:9:\"last_name\";s:4:\"last\";s:7:\"company\";s:7:\"company\";s:9:\"address_1\";s:8:\"address1\";s:9:\"address_2\";s:8:\"address2\";s:4:\"city\";s:4:\"city\";s:5:\"state\";s:2:\"GA\";s:8:\"postcode\";s:5:\"14766\";s:7:\"country\";s:2:\"US\";s:5:\"email\";s:13:\"test@test.com\";s:5:\"phone\";s:6:\"123124\";}', 'a:2:{i:0;a:3:{s:2:\"id\";i:25;s:3:\"qty\";i:2;s:4:\"name\";s:8:\"Variable\";}i:1;a:3:{s:2:\"id\";i:23;s:3:\"qty\";i:3;s:4:\"name\";s:6:\"Simple\";}}', 'first last', 520, '5105105105105100', '08', '2029', '555', '1', 'only'),
(83, 42, 43, 'a:11:{s:10:\"first_name\";s:5:\"first\";s:9:\"last_name\";s:4:\"last\";s:7:\"company\";s:7:\"company\";s:9:\"address_1\";s:8:\"address1\";s:9:\"address_2\";s:8:\"address2\";s:4:\"city\";s:4:\"city\";s:5:\"state\";s:2:\"GA\";s:8:\"postcode\";s:5:\"14766\";s:7:\"country\";s:2:\"US\";s:5:\"email\";s:13:\"test@test.com\";s:5:\"phone\";s:6:\"123124\";}', 'a:2:{i:0;a:3:{s:2:\"id\";i:25;s:3:\"qty\";i:2;s:4:\"name\";s:8:\"Variable\";}i:1;a:3:{s:2:\"id\";i:23;s:3:\"qty\";i:3;s:4:\"name\";s:6:\"Simple\";}}', 'first last', 520, '5105105105105100', '08', '2029', '555', '1', 'only');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `city`) VALUES
(16, 'admin', 'admin@gamil.com', '1234', ''),
(17, 'admin', 'admin@gamil.com', '1234', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
