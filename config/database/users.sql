-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2023 at 04:46 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corephpblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `UserEmail` varchar(255) NOT NULL,
  `UserPassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `UserName`, `Name`, `UserEmail`, `UserPassword`) VALUES
(1, 'root', 'Staff', 'mirimikelvin229@gmail.com', '$2y$10$uvbBs9.CI0rrt4IbX2RTnO0yzUexcsPFX04OrA4XLX/x9E.PNLWZu'),
(2, 'kelvin', 'kelvin Murimi', 'm33irimikelvin229@gmail.com', '$2y$10$uv2le/Bk07zOjmJ6.0OeH.7fy74uTh4RXXDl74x6rWqH5ErUFz6zu'),
(3, 'young', 'Youngfriends', 'mirimikelvin228@gmail.com', '$2y$10$MD522W1MjtsESMD.35O8BeHwB3kG37Hs0t23xtzQIASxn9dhAvU8G'),
(4, 'testuser', 'user123', 'user1@test.com', '$2y$10$10fnefWrlTsEautsfWKyJeBeXQ.Yu/POXwfvi4LgmpsdmK7bazLbu'),
(5, 'km', 'kelvin Murimi', 'cyje@mailinator.com', '$2y$10$qtGwewtrf3WheWJGfUCYseepnk.Ku7qNantnHfIbhza3juHzqkPRy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
