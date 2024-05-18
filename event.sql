-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2024 at 05:34 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(50) NOT NULL,
  `pswd` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mob` varchar(50) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `pswd`, `name`, `mob`, `branch`, `city`) VALUES
('8', '5', '85', '85', '80', '80000000'),
('1', '1', '1', '1', '1', '1'),
('1', '2', '1', '22', '22', '22'),
('admin', 'admin', 'admin', '99999', '9999', '999');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `name` varchar(100) NOT NULL,
  `mo` varchar(50) NOT NULL,
  `remark` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `eventtype` varchar(150) NOT NULL,
  `address` varchar(100) NOT NULL,
  `guestcount` varchar(50) NOT NULL,
  `budget` varchar(50) NOT NULL,
  `theme` varchar(100) NOT NULL,
  `decorationpref` varchar(100) NOT NULL,
  `specialreq` varchar(100) NOT NULL,
  `photovideo` varchar(100) NOT NULL,
  `entertainmentreq` varchar(100) NOT NULL,
  `securityreq` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `advpayment` varchar(50) NOT NULL,
  `finalpayment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`name`, `mo`, `remark`, `date`, `time`, `city`, `eventtype`, `address`, `guestcount`, `budget`, `theme`, `decorationpref`, `specialreq`, `photovideo`, `entertainmentreq`, `securityreq`, `status`, `advpayment`, `finalpayment`) VALUES
('parth', '992477585', 'ok', '15/02/2024', '9:18', 'Bhavnagar', 'marrege', 'bhagvati', '100', '50', 'cool', 'classic', 'ko ', 'ok', '1', '1', '1', '0', '0'),
('sanjay', '555555', '5555', '555555', '55555', '5555555', '55555', '55555', '5555', '5555555', '555', '5555', '5555 ', '55555', '555', '555', '555', '', '0'),
('parth', '5', '5', '2024-02-13', '5', '000000', '5', '5', '5', '5', '5', '5', '5 ', '5', '5', '5', 'done', '15', '15'),
('parth', '5', '5', '2024-02-13', '5', '000000', '5', '5', '5', '5', '5', '5', '5 ', '5', '5', '5', 'done', '15', '15'),
('parth', '5', '5', '2024-02-13', '5', '000000', '5', '5', '5', '5', '5', '5', '5 ', '5', '5', '5', 'done', '15', '15'),
('parth', '5', '5', '2024-02-13', '5', '000000', '5', '5', '5', '5', '5', '5', '5 ', '5', '5', '5', 'done', '15', '15'),
('parth', '5', '5', '2024-02-13', '5', '000000', '5', '5', '5', '5', '5', '5', '5 ', '5', '5', '5', 'done', '15', '15'),
('parth', '5', '5', '2024-02-13', '5', '000000', '5', '5', '5', '5', '5', '5', '5 ', '5', '5', '5', 'done', '15', '15'),
('parth', '5', '5', '2024-02-13', '5', '000000', '5', '5', '5', '5', '5', '5', '5 ', '5', '5', '5', 'done', '15', '15'),
('parth', '5', '5', '2024-02-13', '5', '000000', '5', '5', '5', '5', '5', '5', '5 ', '5', '5', '5', 'done', '15', '15'),
('parth', '5', '5', '2024-02-13', '5', '000000', '5', '5', '5', '5', '5', '5', '5 ', '5', '5', '5', 'done', '15', '15'),
('SANJYA', '999999', '999', '9999-09-09', '999', '9999', '9999', '999', '9999', '99', '999', '999', '999', '999', '999', '99', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `mob` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `exp` varchar(50) NOT NULL,
  `skill` varchar(50) NOT NULL,
  `applyfor` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `joingdt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `name`, `address`, `qualification`, `dob`, `mob`, `email`, `exp`, `skill`, `applyfor`, `time`, `date`, `status`, `joingdt`) VALUES
('1', '55555', '5555555', 'pass', '111', '999999', '11', '111', '1111', '111', '99999999999999', '111', '11', '11');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `srno` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`srno`, `email`, `password`) VALUES
('1', 'admin', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
