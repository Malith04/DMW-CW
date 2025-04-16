-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2025 at 05:52 PM
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
-- Database: `dmw-laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `age`, `password`, `created_at`, `updated_at`) VALUES
(2, 'jayamal', 'kadse241f-038@student.nibm.lk', 22, '$2y$12$XWxnAZXed24cGXtDE9g90u6OdjGyqI0DQwrMuTJl2vk8jZnGmDHAS', '2025-04-06 09:33:31', '2025-04-06 09:33:31');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `vehicle_id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `brand` varchar(150) NOT NULL,
  `chassis_number` varchar(255) NOT NULL,
  `color` varchar(50) NOT NULL,
  `passenger_count` int(11) NOT NULL,
  `model_year` date NOT NULL,
  `owned_by` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`vehicle_id`, `name`, `brand`, `chassis_number`, `color`, `passenger_count`, `model_year`, `owned_by`, `created_at`, `updated_at`) VALUES
(1, 'Toyota Corolla', 'Toyota', 'SV30-0169266923', 'White', 4, '2016-10-12', 'Mr.Kasun Kumarathunga', '2025-04-06 11:06:44', '2025-04-06 11:06:44'),
(2, 'Honda Wagon R', 'Honda', 'SR430-0169266923', 'Black', 5, '2019-10-10', 'Ms. Anula Damayanthi', '2025-04-06 11:38:32', '2025-04-06 11:38:32'),
(3, 'Suzuki maruti', 'Suzuki', 'SR430-01692665613156156', 'blue', 4, '2020-10-12', 'Mr.Ananda Wijepala', '2025-04-06 13:30:10', '2025-04-06 13:30:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`vehicle_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `vehicle_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
