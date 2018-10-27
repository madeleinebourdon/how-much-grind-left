-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2018 at 02:31 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pokemon_grind`
--

-- --------------------------------------------------------

--
-- Table structure for table `current_prizes`
--

CREATE TABLE `current_prizes` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `10` varchar(255) NOT NULL,
  `30` varchar(255) NOT NULL,
  `50` varchar(255) NOT NULL,
  `70` varchar(255) NOT NULL,
  `100` varchar(255) NOT NULL,
  `130` varchar(255) NOT NULL,
  `170` varchar(255) NOT NULL,
  `210` varchar(255) NOT NULL,
  `270` varchar(255) NOT NULL,
  `330` varchar(255) NOT NULL,
  `410` varchar(255) NOT NULL,
  `490` varchar(255) NOT NULL,
  `590` varchar(255) NOT NULL,
  `690` varchar(255) NOT NULL,
  `820` varchar(255) NOT NULL,
  `980` varchar(255) NOT NULL,
  `1170` varchar(255) NOT NULL,
  `1400` varchar(255) NOT NULL,
  `1670` varchar(255) NOT NULL,
  `2000` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `top_prizes`
--

CREATE TABLE `top_prizes` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `illustration` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `current_prizes`
--
ALTER TABLE `current_prizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `top_prizes`
--
ALTER TABLE `top_prizes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `current_prizes`
--
ALTER TABLE `current_prizes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `top_prizes`
--
ALTER TABLE `top_prizes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
