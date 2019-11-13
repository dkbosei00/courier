-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 13, 2019 at 09:15 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `merc`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` tinytext,
  `lname` tinytext,
  `email` tinytext NOT NULL,
  `tel` tinytext NOT NULL,
  `pass_word` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `fname`, `lname`, `email`, `tel`, `pass_word`) VALUES
(1, 'Dan', 'Osei', 'danielosei00@gmail.com', '0200925339', '$2y$10$59RJi4lQnlRrl3/hwgEd1etugROh.hFmU0KhsTeaMA1669bVSfieG');

-- --------------------------------------------------------

--
-- Table structure for table `rider`
--

DROP TABLE IF EXISTS `rider`;
CREATE TABLE IF NOT EXISTS `rider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` tinytext,
  `lname` tinytext,
  `tel` tinytext NOT NULL,
  `pass_word` longtext NOT NULL,
  `lplate` tinytext NOT NULL,
  `lnumber` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rider`
--

INSERT INTO `rider` (`id`, `fname`, `lname`, `tel`, `pass_word`, `lplate`, `lnumber`) VALUES
(1, 'Daniel', 'Amoah', '0248183429', '$2y$10$4VOItjJ2jeNQR7Dy2mGheeMGzq1DXfRUH5VSymiCKOP0rc5qHDsM6', 'GX-5696-12', 'OSEI-12345678-12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
