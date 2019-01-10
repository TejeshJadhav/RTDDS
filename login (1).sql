-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2019 at 03:01 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `analysis data`
--

CREATE TABLE `analysis data` (
  `device_id` int(11) NOT NULL,
  `sensor_data` float NOT NULL,
  `Timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `device_id` int(11) NOT NULL,
  `device_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `device_ip` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `device_connected` tinyint(1) NOT NULL DEFAULT '0',
  `device_mode` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `devices`
--

INSERT INTO `devices` (`device_id`, `device_name`, `device_ip`, `device_connected`, `device_mode`) VALUES
(19, 'Device 1', '192.168.1.1', 0, 0),
(20, 'Device 2', '192.168.1.2', 0, 0),
(21, 'Device 3', '192.168.1.3', 0, 0),
(22, 'Device 4', '192.168.1.3', 0, 0),
(23, 'Device 5', '192.168.1.4', 0, 0),
(27, 'Debice 6', '192.168.164.323', 0, 0),
(28, 'Device4', '192.168.1.3', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `real data`
--

CREATE TABLE `real data` (
  `device_id` int(11) NOT NULL,
  `sensor_data` float NOT NULL,
  `Timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL COMMENT 'auto incrementing user_id of each user, unique index',
  `user_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s name, unique',
  `user_password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s password in salted and hashed format',
  `user_email` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s email, unique'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password_hash`, `user_email`) VALUES
(1, 'tejesh', '$2y$10$tUR4fzPoNjPdHvwxp2weDeZxrsgjnoLY5Yjvr6TVHXks9Be9tpTuK', 'tejeshjadhav.tj@gmail.com'),
(2, 'admin', '$2y$10$prK038Z0912SHKQF57.pguq6ahx.tZ8E9Vt9BQejJFjhFQ1BJ9t5C', 'admin@admin.com'),
(3, 'user', '$2y$10$sx4.61eUMiyFuVcspSi/1eM0YB6lXunsAfIDwGpir1Ghp66/X2i7q', 'user@gmail.com'),
(4, 'ankesh', '$2y$10$gOXlFUAZukLH74/WBYO1auq59kNjOLqqPoqD5efJldj7LVx9Wojy.', 'ankeshgaikwad@gmail.com'),
(5, 'test', '$2y$10$1/qupgeHrLpWAb.LhOMNRO567t6l4cFBw4TFSV1BkvHcbzz.bftqG', 'test@test.com'),
(6, 'Naseh', '$2y$10$BbFncxEhXF2R.GK.B.2rVeo5Q.yaz/f4rJ9NzIajLS.xxVrJ/hbr2', 'naseh@fcrit.ac'),
(7, 'demo', '$2y$10$cs6NqEEUAYB3wQN0O2VjX.oBPSIkImkVM8TogNfUsCToS7dZ3rmce', 'demo@abc.com'),
(8, 'ankesh06', '$2y$10$PZk/Imv6dKr6IMeTmtDKb.FU2y3CtSc/agEElRrNezItMj4xw/qia', 'ankesh123@gmail.com'),
(9, 'zxc', '$2y$10$xVINP4b9Ec.zCJKoCV0CouR.UB6H0rHeZUFjZh4GJyQJVeIejBTtG', 'zxc@zxc.zcx'),
(10, 'mayur', '$2y$10$LLx1P9g2TY.kVBHTnmeYOOQf.N/i2Qs/0aPtjCp0B6oG/l/XPdnRu', 'mayurk1997.mk@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `analysis data`
--
ALTER TABLE `analysis data`
  ADD KEY `fkey` (`device_id`);

--
-- Indexes for table `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`device_id`),
  ADD UNIQUE KEY `device_name` (`device_name`);

--
-- Indexes for table `real data`
--
ALTER TABLE `real data`
  ADD KEY `fkey` (`device_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `devices`
--
ALTER TABLE `devices`
  MODIFY `device_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing user_id of each user, unique index', AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `analysis data`
--
ALTER TABLE `analysis data`
  ADD CONSTRAINT `fkey` FOREIGN KEY (`device_id`) REFERENCES `devices` (`device_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
