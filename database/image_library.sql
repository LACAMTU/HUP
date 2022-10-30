-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 30, 2022 at 03:17 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bansach`
--

-- --------------------------------------------------------

--
-- Table structure for table `image_library`
--

DROP TABLE IF EXISTS `image_library`;
CREATE TABLE IF NOT EXISTS `image_library` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `path` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `image_library`
--

INSERT INTO `image_library` (`id`, `product_id`, `path`) VALUES
(1, 1001, 'uploads/BHDKTCXR/OIP (1).jfif'),
(2, 1001, 'uploads/BHDKTCXR/OIP (3).jfif'),
(3, 1001, 'uploads/BHDKTCXR/OIP.jfif'),
(4, 1002, 'uploads/Caycam/OIP.jfif'),
(5, 1002, 'uploads/Caycam/OIP (1).jfif'),
(6, 1002, 'uploads/Caycam/OIP (2).jfif'),
(7, 1003, 'uploads/DTCNPTTB/OIP.jfif'),
(8, 1003, 'uploads/DTCNPTTB/OIP (1).jfif'),
(9, 1003, 'uploads/DTCNPTTB/OIP (2).jfif'),
(10, 1004, 'uploads/DNDND/OIP.jfif'),
(11, 1004, 'uploads/DNDND/OIP (1).jfif'),
(12, 1004, 'uploads/DNDND/OIP (3).jfif'),
(13, 1005, 'uploads/LHD/OIP (1).jfif'),
(14, 1005, 'uploads/LHD/OIP.jfif'),
(15, 1006, 'uploads/NTBDKC20/download (1).jfif'),
(16, 1006, 'uploads/NTBDKC20/download (2).jfif'),
(17, 1006, 'uploads/NTBDKC20/download.jfif'),
(18, 1006, 'uploads/NTBDKC20/OIP (3).jfif'),
(19, 1007, 'uploads/NGLG/OIP.jfif'),
(20, 1007, 'uploads/NGLG/OIP (1).jfif'),
(21, 1007, 'uploads/NGLG/OIP (2).jfif'),
(22, 1008, 'uploads/NhaGK/download.jfif'),
(23, 1008, 'uploads/NhaGK/download (1).jfif'),
(24, 1008, 'uploads/NhaGK/OIP.jfif'),
(25, 1009, 'uploads/TLHVT/OIP.jfif'),
(26, 1009, 'uploads/TLHVT/OIP (1).jfif'),
(27, 1009, 'uploads/TLHVT/OIP (2).jfif');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
