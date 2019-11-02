-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2019 at 03:10 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shortly`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) UNSIGNED NOT NULL,
  `first_name` varchar(191) NOT NULL,
  `last_name` varchar(191) NOT NULL,
  `user_name` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `first_name`, `last_name`, `user_name`, `password`, `created_at`) VALUES
(12, 'salma', 'emad', 'root', '$2a$10$QbZMHhpWtqZh5B1FDv.NgepS2.s7h3xtO/cGo2NCpJFB0d22Ux4YS', '2019-11-01 16:59:45');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` int(11) NOT NULL,
  `full_url` text NOT NULL,
  `short_url` varchar(191) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `click` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `full_url`, `short_url`, `user_id`, `click`, `created_at`) VALUES
(1, 'https://twitter.com/', 'testing', 1, 0, '2019-11-01 16:30:37'),
(2, 'https://facebook.com/', 'testing facebook', 1, 30, '2019-11-01 16:31:05'),
(5, 'https://twitter.com/home', '8696d172', 3, 1, '2019-11-01 20:35:12'),
(8, 'https://twitter.com/home', 'd093d0fd', 3, 2, '2019-11-02 12:51:55'),
(9, 'https://twitter.com/home', '504f02f4', 3, 0, '2019-11-02 12:54:13'),
(10, 'https://twitter.com/home', '2acb9e2d', 3, 0, '2019-11-02 12:55:44'),
(11, 'https://twitter.com/home', '377545b7', 3, 0, '2019-11-02 12:55:50'),
(12, 'https://twitter.com/home', 'ebb86541', 3, 1, '2019-11-02 12:57:57'),
(13, 'https://twitter.com/home', 'dc691c66', 3, 0, '2019-11-02 13:08:00'),
(14, 'https://twitter.com/home', 'a34850ea', 3, 0, '2019-11-02 13:14:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(191) NOT NULL,
  `last_name` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_name` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `password`, `created_at`, `user_name`) VALUES
(1, 'salmaa', 'aaaaaa', '$2y$10$Y9d1RXVos8WssZOvYe46wOmc2.YNmoH7VlOsRi9L64XxfS8wEZa8G', '2019-10-31 11:52:04', 'aaaa'),
(2, 'salma', 'Cappuccinoo', '$2y$10$W8KbWlIABNEFtUl67gNCHurRvKpjiAoEBEa7cxx1kzimucVaw3HQm', '2019-11-01 19:30:12', 'salma'),
(3, 'salmazz', 'mehanny', '$2y$10$IjMSNcC38ruENIxnV26SfOz2cZrfxQH2B7KqaoL65MUUURpG8fUqu', '2019-11-01 19:38:06', 'salma1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usre_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `links`
--
ALTER TABLE `links`
  ADD CONSTRAINT `usre_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
