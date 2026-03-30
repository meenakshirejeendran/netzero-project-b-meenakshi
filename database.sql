-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2026 at 03:39 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rose_and_crown`
--

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `name`, `email`, `message`, `date`) VALUES
(0, 'meena', 'meena@gmail.com', 'for 9', NULL),
(0, 'Meenakshi Rejeendran', 'meenakshi.rejeendran@Student.SL.On.Ca', '', '2026-04-04'),
(0, 'Freden', 'sferw@gmail.com', '', '2026-04-02'),
(0, 'naveen', 'nvnbbu@gmail.com', '', '2026-04-24'),
(0, 'Nikhil', 'nikil@gmail.com', 'for 2', '2026-03-31'),
(0, 'sdfg', 'fghj@gmail.com', '2345', '2026-03-14'),
(0, 'john', 'johnd@gmail.com', 'table for 4', '2026-04-01'),
(0, 'ANNE', 'annemari@gmail.com', 'table for 3', '2026-03-30'),
(0, 'test user', 'test@gmail.com', 'table for 2', '2026-03-31'),
(0, 'meenakshi', 'meenar@gmail.com', 'table', '2026-03-17');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
