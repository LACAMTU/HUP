-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 28, 2022 at 06:05 PM
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
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `mssv` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HoTen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('Male','Female') COLLATE utf8mb4_unicode_ci DEFAULT 'Male',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` enum('Ad','Cus') COLLATE utf8mb4_unicode_ci DEFAULT 'Cus',
  PRIMARY KEY (`mssv`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`mssv`, `HoTen`, `username`, `password`, `gender`, `email`, `address`, `view`) VALUES
('030236200146', 'La Cẩm Tú', 'latu', '146', 'Female', '030236200146@st.buh.edu.vn', 'Bạc Liêu', 'Ad'),
('030236200108', 'Phùng Thị Nhị', 'thinhi', '108', 'Female', '030236200108@st.buh.edu.vn', 'Đắk Nông', 'Ad'),
('030236200170', 'Trần Thị Anh Thư', 'anhthu', '170', 'Female', '030236200170@st.buh.edu.vn', 'Bến tre', 'Ad'),
('030236200040', 'Phạm Minh Đức', 'minhduc', '040', 'Male', '030236200040@st.buh.edu.vn', 'Nha Trang', 'Ad'),
('030236200101', 'Trần Lê Đình An Nguyên', 'annguyen', '170', 'Male', '030236200101@st.buh.edu.vn', 'HCM', 'Ad');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
