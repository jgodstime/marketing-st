-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2019 at 03:48 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marketing`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`id`, `email`, `password`) VALUES
(1, 'admin', '$2y$10$zRe8Ii/45irUzBIVXAefDeNOthtdMHsyk8IxPeAYzPEzm9HzGLUKa');

-- --------------------------------------------------------

--
-- Table structure for table `register_tbl`
--

CREATE TABLE `register_tbl` (
  `id` int(11) NOT NULL,
  `location_of_marketing` text NOT NULL,
  `name_of_item` text NOT NULL,
  `qty_used` int(11) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `cost_of_item_marketed` text NOT NULL,
  `qty_marketed` int(11) NOT NULL,
  `income_from_marketing` int(11) NOT NULL,
  `cost_of_losses` int(11) NOT NULL,
  `total_income` int(11) NOT NULL,
  `names_of_maketers` text NOT NULL,
  `registration_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_tbl`
--

INSERT INTO `register_tbl` (`id`, `location_of_marketing`, `name_of_item`, `qty_used`, `unit_price`, `cost_of_item_marketed`, `qty_marketed`, `income_from_marketing`, `cost_of_losses`, `total_income`, `names_of_maketers`, `registration_date`) VALUES
(1, 'Ikot Ubo', 'Start Beer', 20, 100, '2000', 10, 1000, 300, 700, 'John', '01/08/2019'),
(2, 'Ikot aba', 'Star Beer big', 200, 200, '40000', 100, 20000, 1000, 19000, 'john, emmah', '05/08/2019'),
(3, 'Ikot Ubo 2', 'Star Beer big 2', 500, 200, '100000', 200, 40000, 1000, 39000, 'Eni and effiong', '05/08/2019');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_tbl`
--
ALTER TABLE `register_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `register_tbl`
--
ALTER TABLE `register_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
