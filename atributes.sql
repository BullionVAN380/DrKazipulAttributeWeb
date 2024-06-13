-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2024 at 01:54 PM
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
-- Database: `details`
--

-- --------------------------------------------------------

--
-- Table structure for table `atributes`
--

CREATE TABLE `atributes` (
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `comment` text NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `atributes`
--

INSERT INTO `atributes` (`firstname`, `lastname`, `comment`, `email`) VALUES
('Baraka', 'baraka@gmail.com', 'This is what we do dayly', 'baraka@gmail.com'),
('Hati', 'More', 'What we do', 'hati@gmail.com'),
('Kirisho', 'Mera', 'I love women than my life', 'mera@gmail.com'),
('Baraka', 'Mramba', 'Pole sana baba', 'mramba@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atributes`
--
ALTER TABLE `atributes`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
