-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 07, 2025 at 06:40 AM
-- Server version: 8.0.41
-- PHP Version: 8.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gastenboek`
--

-- --------------------------------------------------------

--
-- Table structure for table `berichten`
--

CREATE TABLE `berichten` (
  `id` int NOT NULL,
  `naam` varchar(255) DEFAULT NULL,
  `bericht` text,
  `datum` timestamp NULL DEFAULT NULL,
  `image_item` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `berichten`
--

INSERT INTO `berichten` (`id`, `naam`, `bericht`, `datum`, `image_item`, `created_at`) VALUES
(5, 'naam 1', 'bericht 1', NULL, '', '2025-04-02 12:49:54'),
(6, 'naam 2', 'bericht 2', NULL, '', '2025-04-02 12:49:54'),
(7, 'naam 3', 'bericht 3', NULL, '', '2025-04-02 12:49:54'),
(8, 'naam 4', 'bericht 4', NULL, '', '2025-04-02 12:49:54'),
(15, 'John Doe', 'welkom', NULL, NULL, '2025-04-02 13:45:37'),
(16, 'John Doe', 'welkom allemaal', NULL, NULL, '2025-04-02 13:45:53');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `age` int DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `age`, `password`) VALUES
(1, 'Markje', 55, ''),
(2, 'Jan', 45, ''),
(3, 'Keesje', 66, ''),
(4, 'Jaap', 123, ''),
(5, 'Willem', 23, ''),
(6, 'Ja', 12, ''),
(7, 'lalala', 123, ''),
(8, 'woei', 56, ''),
(9, 'paspoort', 80, ''),
(10, 'pop', 67, ''),
(12, 'lalalalala', 45, ''),
(26, 'Jantje2', 50, '$2y$10$SPW1cYhkbn0e56T0conVOelPwmhN39tQx.Brp52L5TQ8qN1DXX01i'),
(32, 'uuuuu', 50, '$2y$10$NFg.F/BHqLidqUiy0IzXm.1g5oWdnct15Cpnjsw7uWX811GXfmyVK'),
(33, 'fariha', 50, '$2y$10$.KdpbS1UrJSSHQM7FXK20Ow7j0vOmgQ/YLmI3UnMYi2f/QUGIIm2q'),
(40, 'tttt', 50, '$2y$10$Iq39Ia5NJx0.aqyFQdKed.dKVJtuA305Zx/74QekJFzTvAtjXBHHO'),
(44, 'jantje', 55, '$2y$10$6leXHuHnKi/O6oTrxaSxMe97eyuvGl6CuoUANkcec6jcw3TcIMQYG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berichten`
--
ALTER TABLE `berichten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `name_2` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berichten`
--
ALTER TABLE `berichten`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
