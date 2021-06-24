-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2021 at 06:35 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `file_sharing`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sender_user_id` bigint(20) UNSIGNED NOT NULL,
  `reciver_user_id` bigint(20) UNSIGNED NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender_user_id`, `reciver_user_id`, `message`, `created_at`, `updated_at`) VALUES
(11, 1, 2, 'hi 2', '2021-06-24 09:39:28', '2021-06-24 09:39:28'),
(12, 2, 1, 'yes 1', '2021-06-24 09:39:36', '2021-06-24 09:39:36'),
(13, 1, 2, 'kia hall hay janb', '2021-06-24 10:10:15', '2021-06-24 10:10:15'),
(14, 1, 2, 'khan gum ho aj kl', '2021-06-24 10:10:23', '2021-06-24 10:10:23'),
(15, 1, 2, 'khai ni bs office or kha jana ha hum ny', '2021-06-24 10:12:39', '2021-06-24 10:12:39'),
(16, 3, 2, 'hi zahid', '2021-06-24 10:29:45', '2021-06-24 10:29:45'),
(17, 4, 3, 'hi jakhar', '2021-06-24 10:46:17', '2021-06-24 10:46:17'),
(18, 4, 3, 'kia hall hay', '2021-06-24 10:46:26', '2021-06-24 10:46:26'),
(19, 3, 4, 'Takh zubair Allahh pak da shukar ha', '2021-06-24 10:47:03', '2021-06-24 10:47:03'),
(20, 4, 2, 'hi zahid', '2021-06-24 10:47:21', '2021-06-24 10:47:21'),
(21, 3, 4, 'checking', '2021-06-24 10:56:17', '2021-06-24 10:56:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
