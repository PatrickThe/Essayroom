-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2022 at 10:38 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `essayroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `log_id` int(100) NOT NULL DEFAULT 0,
  `id` int(250) NOT NULL,
  `user_type` varchar(25) DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `ip` varchar(25) DEFAULT NULL,
  `host` varchar(300) DEFAULT NULL,
  `department` varchar(25) DEFAULT NULL,
  `activity` varchar(25) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`log_id`, `id`, `user_type`, `username`, `ip`, `host`, `department`, `activity`, `date`) VALUES
(0, 1, 'Customer', NULL, '', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-03-25 13:31:19'),
(0, 2, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-03-25 13:33:34'),
(0, 3, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-03-25 16:47:53'),
(0, 4, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-03-25 16:51:19'),
(0, 5, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-03-27 09:28:47'),
(0, 6, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-03-27 09:31:27'),
(0, 7, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-03-27 09:35:17'),
(0, 8, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-03-27 09:37:46'),
(0, 9, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-03-28 10:53:23'),
(0, 10, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-03-28 11:01:25'),
(0, 11, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-03-28 11:04:38'),
(0, 12, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-03-28 11:28:00'),
(0, 13, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-03-28 11:28:32'),
(0, 14, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-03-28 11:31:18'),
(0, 15, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-03-28 11:34:43'),
(0, 16, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-03-28 11:54:42'),
(0, 17, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-03-28 11:56:25'),
(0, 18, 'Customer', NULL, '192.168.43.1', '192.168.43.1', NULL, 'Placed Order', '2020-03-28 12:30:45'),
(0, 19, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-08 06:54:25'),
(0, 20, 'Customer', NULL, '192.168.43.1', '192.168.43.1', NULL, 'Placed Order', '2020-04-08 07:08:00'),
(0, 21, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-10 05:34:26'),
(0, 22, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-13 08:58:08'),
(0, 23, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-13 08:59:23'),
(0, 24, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-13 09:02:13'),
(0, 25, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-13 09:48:19'),
(0, 26, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-13 11:08:16'),
(0, 27, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-13 11:09:56'),
(0, 28, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-13 11:10:39'),
(0, 29, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-13 11:11:54'),
(0, 30, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-13 11:18:10'),
(0, 31, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-13 11:41:41'),
(0, 32, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-13 11:53:22'),
(0, 33, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-13 12:05:16'),
(0, 34, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-13 12:11:26'),
(0, 35, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-13 12:20:28'),
(0, 36, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-13 12:35:42'),
(0, 37, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-13 12:42:28'),
(0, 38, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-13 12:43:41'),
(0, 39, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-13 12:45:01'),
(0, 40, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-13 12:46:59'),
(0, 41, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-13 12:48:31'),
(0, 42, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-13 12:50:26'),
(0, 43, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-13 12:51:21'),
(0, 44, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-13 13:02:03'),
(0, 45, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-13 13:35:58'),
(0, 46, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-13 15:02:35'),
(0, 47, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-13 15:34:58'),
(0, 48, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-14 05:54:49'),
(0, 49, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-14 06:22:17'),
(0, 50, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-14 06:25:57'),
(0, 51, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-14 06:28:52'),
(0, 52, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-14 06:30:36'),
(0, 53, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-14 06:43:11'),
(0, 54, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-14 11:11:12'),
(0, 55, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-14 11:17:04'),
(0, 56, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-14 11:26:45'),
(0, 57, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-14 11:41:53'),
(0, 58, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-14 11:46:13'),
(0, 59, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-14 11:54:16'),
(0, 60, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-14 12:00:03'),
(0, 61, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-14 12:02:02'),
(0, 62, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-14 12:03:44'),
(0, 63, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-14 12:06:59'),
(0, 64, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-14 12:09:26'),
(0, 65, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-14 12:12:04'),
(0, 66, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-15 11:14:50'),
(0, 67, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-15 11:15:10'),
(0, 68, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-15 11:25:03'),
(0, 69, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-15 11:29:15'),
(0, 70, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-15 11:44:48'),
(0, 71, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-15 11:45:30'),
(0, 72, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-15 11:46:18'),
(0, 73, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-15 11:49:09'),
(0, 74, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-15 11:49:28'),
(0, 75, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-15 12:42:41'),
(0, 76, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-15 12:43:26'),
(0, 77, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-15 12:44:26'),
(0, 78, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-15 13:14:35'),
(0, 79, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-15 13:17:24'),
(0, 80, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-15 13:20:49'),
(0, 81, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-15 14:17:00'),
(0, 82, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-15 14:19:24'),
(0, 83, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-15 14:23:41'),
(0, 84, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed OrderTzsEBDKT', '2020-04-15 14:27:04'),
(0, 85, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order->VslAbkp2', '2020-04-15 14:28:03'),
(0, 86, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order: yRQit9og', '2020-04-15 14:31:02'),
(0, 87, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order: G4XYuMak', '2020-04-15 14:33:28'),
(0, 88, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-15 14:36:14'),
(0, 89, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order: KFr4zN88', '2020-04-15 14:38:56'),
(0, 90, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-16 06:11:19'),
(0, 91, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-16 06:50:08'),
(0, 92, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-16 09:06:58'),
(0, 93, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order: PwHTHtnI', '2020-04-17 06:55:53'),
(0, 94, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order: cyxDzATq', '2020-04-17 07:15:33'),
(0, 95, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order943ogUIN', '2020-04-17 08:11:56'),
(0, 96, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-17 08:13:40'),
(0, 97, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed OrderTqXrd2WB', '2020-04-17 08:48:06'),
(0, 98, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-17 08:50:18'),
(0, 99, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-17 14:00:52'),
(0, 100, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order14su8Hob', '2020-04-17 14:09:50'),
(0, 101, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-17 14:12:10'),
(0, 102, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-17 14:13:05'),
(0, 103, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-17 16:02:05'),
(0, 104, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-17 16:02:39'),
(0, 105, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order: tWLpvn5x', '2020-04-17 16:05:18'),
(0, 106, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed OrdertWLpvn5x', '2020-04-17 16:05:49'),
(0, 107, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed OrderqcmJx1qc', '2020-04-17 16:06:45'),
(0, 108, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order: clgwpn5m', '2020-04-17 16:09:40'),
(0, 109, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed OrderSJ0zUs4K', '2020-04-17 16:10:24'),
(0, 110, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order5B5C2G96', '2020-04-17 16:12:14'),
(0, 111, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order7SHBwMYE', '2020-04-17 16:13:23'),
(0, 112, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Orderb8J9K07G', '2020-04-17 16:24:05'),
(0, 113, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order: 0DwGiMM3', '2020-04-17 16:25:32'),
(0, 114, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-17 16:27:19'),
(0, 115, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-17 16:27:51'),
(0, 116, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-17 16:31:21'),
(0, 117, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-17 16:32:05'),
(0, 118, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-18 06:58:46'),
(0, 119, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-20 08:33:03'),
(0, 120, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-04-20 08:34:50'),
(0, 121, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-05-04 08:48:02'),
(0, 122, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-05-04 11:29:50'),
(0, 123, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-05-04 11:30:46'),
(0, 124, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-05-04 11:33:27'),
(0, 125, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-05-05 17:06:30'),
(0, 126, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-05-05 17:09:11'),
(0, 127, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-05-05 17:21:16'),
(0, 128, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-05-07 11:08:01'),
(0, 129, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-05-07 11:09:36'),
(0, 130, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-05-07 11:14:23'),
(0, 131, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-05-07 11:36:05'),
(0, 132, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-05-07 11:43:32'),
(0, 133, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-05-07 11:46:43'),
(0, 134, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-05-07 16:15:03'),
(0, 135, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-05-07 16:24:46'),
(0, 136, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-05-07 17:20:23'),
(0, 137, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-05-07 17:24:15'),
(0, 138, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-05-07 17:25:13'),
(0, 139, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-05-07 17:27:01'),
(0, 140, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-05-08 07:56:43'),
(0, 141, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-05-08 09:39:13'),
(0, 142, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-05-08 09:40:50'),
(0, 143, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-05-08 09:49:39'),
(0, 144, 'Customer', NULL, '127.0.0.1', 'localhost::1', NULL, 'Placed Order', '2020-05-10 10:57:54'),
(0, 145, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-05-12 06:13:35'),
(0, 146, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-05-16 06:56:55'),
(0, 147, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-05-18 15:46:52'),
(0, 148, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-05-18 16:17:11'),
(0, 149, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-05-18 16:25:23'),
(0, 150, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-05-19 06:27:06'),
(0, 151, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-05-19 06:32:39'),
(0, 152, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-05-23 06:53:30'),
(0, 153, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-05-25 09:07:01'),
(0, 154, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-05-26 05:16:42'),
(0, 155, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-07-10 17:32:21'),
(0, 156, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-07-10 17:38:32'),
(0, 157, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-07-10 19:06:49'),
(0, 158, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-07-10 19:09:12'),
(0, 159, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-07-10 19:13:11'),
(0, 160, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-07-10 19:13:42'),
(0, 161, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-07-13 16:24:15'),
(0, 162, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-07-13 17:36:39'),
(0, 163, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-07-13 17:50:10'),
(0, 164, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-07-13 18:39:46'),
(0, 165, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-07-15 15:46:32'),
(0, 166, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-07-15 15:47:43'),
(0, 167, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-07-15 17:05:47'),
(0, 168, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-07-15 17:52:34'),
(0, 169, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-07-16 05:21:48'),
(0, 170, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-07-16 16:28:42'),
(0, 171, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-07-16 16:40:06'),
(0, 172, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-07-17 17:23:22'),
(0, 173, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-07-17 18:00:22'),
(0, 174, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-07-18 08:16:19'),
(0, 175, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-07-18 09:00:48'),
(0, 176, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-07-18 10:07:26'),
(0, 177, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-07-20 16:11:40'),
(0, 178, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-07-20 16:19:41'),
(0, 179, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-07-21 16:06:48'),
(0, 180, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-07-21 16:07:35'),
(0, 181, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-07-21 16:17:40'),
(0, 182, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-07-21 16:55:47'),
(0, 183, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-07-22 17:53:13'),
(0, 184, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-09-18 05:48:46'),
(0, 185, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-09-18 05:54:17'),
(0, 186, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-09-29 17:40:20'),
(0, 187, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-10-18 18:52:18'),
(0, 188, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-10-19 07:16:17'),
(0, 189, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-10-19 13:53:18'),
(0, 190, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-10-23 06:16:20'),
(0, 191, 'Customer', NULL, '::1', 'DESKTOP-IM21E9G', NULL, 'Placed Order', '2020-10-23 16:08:27'),
(0, 192, 'Customer', NULL, '::1', 'DESKTOP-7VTG88M', NULL, 'Placed Order', '2020-11-22 12:12:17'),
(0, 193, 'Customer', NULL, '::1', 'DESKTOP-7VTG88M', NULL, 'Placed Order', '2020-12-17 07:26:21');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `admin_user` text NOT NULL,
  `admin_password` text NOT NULL,
  `host` varchar(100) DEFAULT NULL,
  `ip` varchar(40) DEFAULT NULL,
  `NAMES` varchar(100) DEFAULT NULL,
  `SIZE` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `name`, `admin_user`, `admin_password`, `host`, `ip`, `NAMES`, `SIZE`, `date`, `status`) VALUES
(1, 'patoh', 'patoh@gmail.com', '$2y$12$XEiRHxRf1Tw7FEbfRdrAG.lQ6F73Hm9ekA0oau3Rout.R1H8CCQJi', 'DESKTOP-IM21E9G', '::1', NULL, NULL, '2020-03-27 13:27:02', 1),
(2, 'kevo', 'kevo@gmail.com', '$2y$12$kR37J/mFhK9g0WZw8J8d3upVdo4OK6YCPOujycHitK7d.xpUDsvJ6', 'DESKTOP-IM21E9G', '::1', NULL, NULL, '2020-03-27 13:27:42', 1),
(3, 'https://essaypro.com/', 'essay@gmail.com', '$2y$12$u43DpKctVRk0sHtsY/iRYOijRGiUsbwy6WRtTPFF10SMHBQ.f8zTy', 'DESKTOP-IM21E9G', '::1', NULL, NULL, '2020-03-27 13:32:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog_events`
--

CREATE TABLE `blog_events` (
  `id` int(250) NOT NULL,
  `NAME` varchar(250) DEFAULT NULL,
  `size` int(250) DEFAULT NULL,
  `blog_name` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `status` int(3) NOT NULL DEFAULT 1,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `blog_id` varchar(125) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_events`
--

INSERT INTO `blog_events` (`id`, `NAME`, `size`, `blog_name`, `description`, `status`, `date`, `blog_id`) VALUES
(2, 'Screenshot (1).png', 274991, 'Why i cant access this site', 'wwed newdbvgwejhbg yugbyuewg ybyugewuew', 1, '2020-09-10 20:03:33', 'primaryHeading-1'),
(3, 'Screenshot (1).png', 274991, 'Why i cant access this sitev gvgsdgvs hsbdg', 'wwed newdbvgwejhbg yugbyuewg ybyugewuew', 1, '2020-09-10 20:09:24', 'primaryHeading-2'),
(7, 'Capture.JPG', 28540, 'Hezekiah story,tell me now', 'hezekia hhdfh hdhsd dsdgds hdsgds hdsbsdb hdsgshdg dhdsh dsbhsdbs hsdgshb hsddbhsb hdsghs hsdbhds hdbgshs hsddhsd hdsbjshb dshbshdb sdjbhjdsb jhhbshd hdsbhbsd hjsbjbds jhhbjsdbsb udsjhdsb hdsbhsb hsdsh sdhbsdhdsb dhhdh bdh hh hhh hsdbhs hdsbhjjhs', 1, '2020-09-10 20:31:23', 'primaryHeading-3'),
(8, 'cart3.PNG', 21334, 'kerspesky is working all right', 'CSS selectors can select a sibling element only when it is present after/below the reference element in the DOM. In your snippet, the div which needs to be selected is present after the input (which is the reference element and whose state triggers t', 1, '2020-09-11 08:20:04', NULL),
(9, 'Capture.JPG', 28540, 'xsbdn  dhdtbg sgrdthd', 'fcdhcngzvdbsxm sdgbsdfhdn  dfbdfc', 1, '2020-09-26 16:36:51', NULL),
(10, 'Capture.JPG', 28540, 'xsbdn  dhdtbg sgrdthd', 'fcdhcngzvdbsxm sdgbsdfhdn  dfbdfc', 1, '2020-09-26 16:49:39', NULL),
(11, 'Capture.JPG', 28540, 'patriclk ertete', 'regte 5rtvg rgteh  thb5ryt trg tdrgbreg rst', 1, '2020-10-19 09:35:41', NULL),
(12, 'Capture.JPG', 28540, 'patriclk ertete', 'regte 5rtvg rgteh  thb5ryt trg tdrgbreg rst', 1, '2020-10-19 09:41:58', NULL),
(13, NULL, NULL, 'desddfd nthgn', 'gfdhbdgfc gfbgf bdfdfg', 1, '2020-10-19 09:42:08', NULL),
(14, NULL, NULL, 'desddfd nthgn', 'gfdhbdgfc gfbgf bdfdfg', 1, '2020-10-19 09:44:34', NULL),
(15, NULL, NULL, 'pareicgdf jdhhy', 'sade grtr', 1, '2020-10-19 09:44:44', NULL),
(16, NULL, NULL, 'pareicgdf jdhhy', 'sade grtr', 1, '2020-10-19 09:45:01', NULL),
(17, '88008212_2994564397267917_2496632672047071232_o.jpg', 225364, 'lastly testing now', 'fgvet4rthdnb5r rtg4etg rfdvdgg4r\r\ntygfbtgfb', 1, '2020-10-19 09:47:21', NULL),
(18, NULL, NULL, 'patriaco test', 'dfcxvzcfdxvcc', 1, '2020-10-19 09:47:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `chatid` int(11) NOT NULL,
  `chat_room_id` int(11) DEFAULT NULL,
  `chat_id_admin` int(250) DEFAULT NULL,
  `chat_msg` varchar(250) NOT NULL,
  `username` varchar(45) NOT NULL,
  `to_user` varchar(100) DEFAULT NULL,
  `chat_date` varchar(255) DEFAULT NULL,
  `statusA` tinyint(1) NOT NULL DEFAULT 1,
  `status` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`chatid`, `chat_room_id`, `chat_id_admin`, `chat_msg`, `username`, `to_user`, `chat_date`, `statusA`, `status`) VALUES
(1, 1, NULL, '', '', 'writer', 'Sep-25-2020 07:28 PM', 1, 1),
(2, NULL, 1, 'dded', 'PATRICK', 'admin', 'Sep-25-2020 07:28 PM', 1, 1),
(3, 1, NULL, '', '', 'writer', 'Sep-25-2020 07:29 PM', 1, 1),
(4, NULL, 1, 'fed', 'PATRICK', 'admin', 'Sep-25-2020 07:29 PM', 1, 1),
(5, 1, NULL, '', '', 'writer', 'Sep-25-2020 07:29 PM', 1, 1),
(6, NULL, 1, 'rest', 'PATRICK', 'admin', 'Sep-25-2020 07:29 PM', 1, 1),
(7, 1, NULL, '', '', 'writer', 'Sep-25-2020 07:30 PM', 1, 1),
(8, NULL, 1, 'duka', 'PATRICK', 'admin', 'Sep-25-2020 07:30 PM', 1, 1),
(9, 1, NULL, '', '', 'writer', 'Sep-25-2020 07:30 PM', 1, 1),
(10, NULL, 1, 'fred', 'PATRICK', 'admin', 'Sep-25-2020 07:30 PM', 1, 1),
(11, NULL, 1, 'kwako', 'PATRICK', 'admin', 'Sep-25-2020 07:32 PM', 1, 1),
(12, NULL, 1, 'make it happen', 'PATRICK', 'admin', 'Sep-25-2020 07:33 PM', 1, 1),
(13, 1, NULL, 'dude', '', 'writer', 'Sep-25-2020 07:33 PM', 0, 1),
(14, 1, NULL, 'medol', '', 'writer', 'Sep-25-2020 07:34 PM', 0, 1),
(15, NULL, 1, 'admin', 'PATRICK', 'admin', 'Sep-25-2020 07:34 PM', 1, 1),
(16, 17, NULL, 'mixteu', '', 'writer', 'Sep-25-2020 07:39 PM', 1, 1),
(17, 19, NULL, 'deko 19', '', 'writer', 'Sep-25-2020 09:13 PM', 1, 1),
(18, NULL, 1, 'i got you', 'PATRICK', 'admin', 'Sep-25-2020 09:14 PM', 1, 1),
(19, 17, NULL, 'ni order 17', '', 'writer', 'Sep-25-2020 09:14 PM', 1, 1),
(20, 19, NULL, 'ni 19 order', '', 'writer', 'Sep-25-2020 09:15 PM', 1, 1),
(21, NULL, 1, 'derf', 'PATRICK', 'admin', 'Sep-25-2020 09:26 PM', 1, 1),
(22, 17, NULL, 'ee', '', 'writer', 'Sep-25-2020 09:26 PM', 1, 1),
(23, NULL, 1, 'dreas', 'PATRICK', 'admin', 'Oct-03-2020 02:27 PM', 1, 1),
(24, 25769967, NULL, 'me reasd', '', 'writer', 'Oct-03-2020 02:27 PM', 1, 1),
(25, NULL, 1, 'deard', 'PATRICK', 'admin', 'Oct-03-2020 02:30 PM', 1, 1),
(26, 75792392, NULL, 'ewfre', '', 'writer', 'Oct-18-2020 08:57 PM', 1, 1),
(27, NULL, 1, 'ders', 'PATRICK', 'admin', 'Oct-23-2020 06:51 PM', 1, 1),
(28, 83378941, NULL, 'derrt', '', 'writer', 'Dec-09-2020 07:05 PM', 0, 1),
(29, NULL, 1, 'dread', 'PATRICK', 'admin', 'Dec-09-2020 07:05 PM', 1, 1),
(30, NULL, 1, 'dftr', 'PATRICK', 'admin', 'Dec-09-2020 07:06 PM', 1, 1),
(31, NULL, 17, 'dea', 'admin', 'victor@gmail.com', 'Dec-15-2020 07:02 PM', 1, 1),
(32, NULL, 1, 'deee', 'PATRICK', 'admin', 'Jan-16-2021 02:39 PM', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer_file`
--

CREATE TABLE `customer_file` (
  `ID` int(100) NOT NULL,
  `NAME` varchar(50) DEFAULT NULL,
  `SIZE` varchar(50) DEFAULT NULL,
  `downloads` int(250) NOT NULL DEFAULT 0,
  `order_id` varchar(25) DEFAULT NULL,
  `email_address` varchar(25) DEFAULT NULL,
  `status` int(3) NOT NULL DEFAULT 1,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_file`
--

INSERT INTO `customer_file` (`ID`, `NAME`, `SIZE`, `downloads`, `order_id`, `email_address`, `status`, `date`) VALUES
(1, 'eurotruck.PNG', '', 0, 'GieXwGsA', NULL, 1, '2020-04-17 16:32:49'),
(2, 'CaptureErroe.PNG', '', 0, 'od6enz8v', NULL, 1, '2020-04-17 16:33:57'),
(3, 'FUNNY EXPLANATION FOR CORONA VIRUS- PASTOR NGANGA.', '', 0, 'GieXwGsA', NULL, 1, '2020-04-17 16:35:13'),
(4, 'Diyaloo-Do To -v2.docx', '', 0, 'vGdHekL5', NULL, 1, '2020-04-17 17:05:23'),
(5, 'BGF Training.docx', '', 0, '73746103', NULL, 1, '2020-05-18 12:14:12'),
(6, 'john.xlsx', '', 0, '73746103', NULL, 1, '2020-05-18 12:16:22'),
(7, 'simon.xlsx', '', 0, '', 'patoh@gmail.com', 1, '2020-05-18 12:46:25'),
(8, 'Book1.xlsx', '', 0, '', 'patoh@gmail.com', 1, '2020-05-18 12:46:40'),
(9, 'Book3.xlsx', '', 0, '8', 'patoh@gmail.com', 1, '2020-05-18 12:47:23'),
(10, 'visa.html', '', 0, '47169434', 'patoh@gmail.com', 1, '2020-05-18 12:48:10'),
(11, 'bookreview1.jpg', '', 0, '78602615', 'patoh@gmail.com', 1, '2020-06-01 13:05:40'),
(12, 'capruresolutionsdbSQL.txt', '', 0, '73746103', NULL, 1, '2020-06-01 13:07:11'),
(13, 'APIKey.txt', '', 0, '73746103', NULL, 1, '2020-06-01 13:09:35'),
(14, 'CaptureErroe.PNG', '', 0, '10', NULL, 1, '2020-07-13 20:24:34'),
(15, 'pic8.PNG', '', 0, '8', NULL, 1, '2020-07-18 13:19:48'),
(16, 'cart.PNG', '', 0, '47542713', NULL, 1, '2020-07-20 20:47:28');

-- --------------------------------------------------------

--
-- Table structure for table `general_files`
--

CREATE TABLE `general_files` (
  `id` int(250) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `SIZE` int(250) NOT NULL,
  `from_user` varchar(50) NOT NULL,
  `to_user` varchar(50) NOT NULL,
  `order_id` varchar(50) NOT NULL,
  `status` int(25) NOT NULL DEFAULT 1,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `general_files`
--

INSERT INTO `general_files` (`id`, `NAME`, `SIZE`, `from_user`, `to_user`, `order_id`, `status`, `date`) VALUES
(1, 'evance.JPG', 0, 'patoh@gmail.com', 'writer', '11', 1, '2020-07-20 19:12:05');

-- --------------------------------------------------------

--
-- Table structure for table `history_log`
--

CREATE TABLE `history_log` (
  `log_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `email_address` text NOT NULL,
  `action` varchar(100) NOT NULL,
  `actions` varchar(200) NOT NULL DEFAULT 'Has LoggedOut the system at',
  `ip` text NOT NULL,
  `host` text NOT NULL,
  `login_time` varchar(200) NOT NULL,
  `logout_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history_log`
--

INSERT INTO `history_log` (`log_id`, `id`, `email_address`, `action`, `actions`, `ip`, `host`, `login_time`, `logout_time`) VALUES
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-15-2020 09:22 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, '', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-15-2020 09:51 PM', 'Apr-22-2021 08:00 PM'),
(0, 0, '', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-15-2020 10:04 PM', 'Apr-22-2021 08:00 PM'),
(0, 0, '', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-15-2020 10:04 PM', 'Apr-22-2021 08:00 PM'),
(0, 0, '', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-15-2020 10:06 PM', 'Apr-22-2021 08:00 PM'),
(0, 0, '', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-15-2020 10:06 PM', 'Apr-22-2021 08:00 PM'),
(0, 0, '', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-15-2020 10:10 PM', 'Apr-22-2021 08:00 PM'),
(0, 0, '', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-15-2020 10:10 PM', 'Apr-22-2021 08:00 PM'),
(0, 0, '', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-15-2020 10:11 PM', 'Apr-22-2021 08:00 PM'),
(0, 0, 'kenya@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-15-2020 10:12 PM', 'Jul-18-2020 06:11 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-15-2020 10:13 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-15-2020 10:13 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, '', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-15-2020 10:17 PM', 'Apr-22-2021 08:00 PM'),
(0, 0, '', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-15-2020 10:19 PM', 'Apr-22-2021 08:00 PM'),
(0, 0, '', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-15-2020 10:23 PM', 'Apr-22-2021 08:00 PM'),
(0, 0, '', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-15-2020 10:28 PM', 'Apr-22-2021 08:00 PM'),
(0, 0, '', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-15-2020 10:34 PM', 'Apr-22-2021 08:00 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-16-2020 02:10 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-16-2020 02:38 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-16-2020 02:44 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-16-2020 02:51 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'kenya@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-16-2020 05:04 PM', 'Jul-18-2020 06:11 PM'),
(0, 0, 'corona@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-16-2020 07:40 PM', 'Jul-22-2020 12:25 AM'),
(0, 0, 'corona@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-16-2020 07:40 PM', 'Jul-22-2020 12:25 AM'),
(0, 0, 'corona@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-16-2020 07:41 PM', 'Jul-22-2020 12:25 AM'),
(0, 0, 'kenya@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-16-2020 07:48 PM', 'Jul-18-2020 06:11 PM'),
(0, 0, 'kenya@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-16-2020 07:55 PM', 'Jul-18-2020 06:11 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-16-2020 09:03 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-16-2020 09:04 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-16-2020 09:07 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'kevin@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-16-2020 09:13 PM', 'Apr-16-2020 09:13 PM'),
(0, 0, 'kevin@gmail.com1', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-16-2020 09:15 PM', 'Apr-16-2020 09:16 PM'),
(0, 0, 'kevin@gmail.com1', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-16-2020 09:16 PM', 'Apr-16-2020 09:16 PM'),
(0, 0, 'kevin@gmail.com1', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-16-2020 09:16 PM', ''),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-17-2020 01:24 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-17-2020 02:05 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-17-2020 02:08 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-17-2020 02:08 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-17-2020 02:34 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-17-2020 04:13 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'corona@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-17-2020 04:49 PM', 'Jul-22-2020 12:25 AM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-17-2020 06:17 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-17-2020 09:38 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-18-2020 02:51 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'jambo@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-20-2020 04:30 PM', 'Apr-20-2020 04:45 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-20-2020 04:45 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-24-2020 03:31 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-24-2020 10:10 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-24-2020 11:48 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-25-2020 12:29 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-27-2020 02:32 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-27-2020 03:34 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-27-2020 03:38 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-27-2020 03:44 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-27-2020 04:50 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-27-2020 05:03 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-27-2020 05:09 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-27-2020 05:12 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-27-2020 05:22 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-27-2020 05:27 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-27-2020 05:56 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-27-2020 06:01 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-27-2020 06:09 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-27-2020 06:15 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-28-2020 03:07 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-28-2020 11:43 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-29-2020 01:33 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-29-2020 01:58 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-29-2020 02:13 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-29-2020 02:52 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-29-2020 03:25 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-29-2020 04:05 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-29-2020 06:02 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-30-2020 07:54 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-30-2020 09:37 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-01-2020 12:41 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-01-2020 01:24 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-01-2020 01:25 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-03-2020 11:19 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-03-2020 11:59 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-04-2020 02:33 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-04-2020 02:47 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-04-2020 03:27 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-04-2020 04:47 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-04-2020 05:46 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-04-2020 06:18 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-04-2020 06:34 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-04-2020 07:11 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-05-2020 03:28 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-05-2020 03:47 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-05-2020 07:29 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-05-2020 11:54 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-06-2020 01:04 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-06-2020 01:19 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-06-2020 02:26 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-06-2020 04:04 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-06-2020 10:32 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-06-2020 11:36 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-07-2020 01:03 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-07-2020 03:49 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-07-2020 05:57 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-07-2020 05:57 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-07-2020 06:08 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-07-2020 06:08 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, '', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-07-2020 07:08 PM', 'Apr-22-2021 08:00 PM'),
(0, 0, '', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-07-2020 07:09 PM', 'Apr-22-2021 08:00 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-07-2020 07:13 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, '', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-07-2020 07:46 PM', 'Apr-22-2021 08:00 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-07-2020 11:12 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-07-2020 11:34 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-08-2020 12:14 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-08-2020 03:48 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-08-2020 05:09 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-08-2020 05:27 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-10-2020 12:01 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-10-2020 06:49 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '127.0.0.1', 'localhost::1', 'May-10-2020 06:56 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-12-2020 01:48 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-14-2020 01:54 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-14-2020 02:01 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-16-2020 02:39 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-16-2020 02:48 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'corona@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-16-2020 02:56 PM', 'Jul-22-2020 12:25 AM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-16-2020 03:19 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-16-2020 07:42 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-16-2020 10:08 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-16-2020 10:23 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-16-2020 10:37 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-16-2020 10:57 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-16-2020 11:04 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-18-2020 05:02 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-18-2020 07:02 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-18-2020 11:45 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-19-2020 02:03 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-19-2020 03:06 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-19-2020 03:22 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-19-2020 05:21 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-19-2020 05:29 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-19-2020 10:56 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-20-2020 12:41 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-20-2020 03:00 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-20-2020 03:07 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-20-2020 01:59 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-20-2020 02:10 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-20-2020 02:12 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-20-2020 02:15 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-20-2020 02:37 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-20-2020 02:44 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-20-2020 02:46 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-20-2020 02:48 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-20-2020 02:49 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-20-2020 02:51 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-20-2020 02:54 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-20-2020 02:56 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-21-2020 12:36 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-21-2020 11:53 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-22-2020 12:41 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, '', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-23-2020 02:55 PM', 'Apr-22-2021 08:00 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-24-2020 07:57 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-25-2020 12:55 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-25-2020 01:32 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'corona@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-25-2020 02:07 AM', 'Jul-22-2020 12:25 AM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-25-2020 02:08 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'corona@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-25-2020 02:09 AM', 'Jul-22-2020 12:25 AM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-25-2020 03:46 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'corona@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-25-2020 03:48 PM', 'Jul-22-2020 12:25 AM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-25-2020 04:11 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-25-2020 04:55 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-25-2020 05:55 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, '', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-26-2020 01:16 PM', 'Apr-22-2021 08:00 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-27-2020 05:47 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-30-2020 01:43 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-30-2020 03:55 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-30-2020 04:59 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-31-2020 08:29 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-31-2020 08:38 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-31-2020 08:56 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jun-01-2020 03:27 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jun-01-2020 03:43 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'corona@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jun-01-2020 03:54 PM', 'Jul-22-2020 12:25 AM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jun-01-2020 03:55 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'corona@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jun-01-2020 03:56 PM', 'Jul-22-2020 12:25 AM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jun-01-2020 04:09 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'corona@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jun-01-2020 04:13 PM', 'Jul-22-2020 12:25 AM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jun-01-2020 04:13 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jun-01-2020 04:14 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jun-01-2020 04:16 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jun-01-2020 04:30 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jun-01-2020 04:42 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jun-01-2020 04:58 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'corona@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jun-01-2020 05:34 PM', 'Jul-22-2020 12:25 AM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jun-01-2020 06:01 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jun-01-2020 08:02 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'corona@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jun-01-2020 08:03 PM', 'Jul-22-2020 12:25 AM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jun-01-2020 08:04 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jun-01-2020 08:04 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'corona@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jun-01-2020 08:05 PM', 'Jul-22-2020 12:25 AM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jun-01-2020 08:38 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jun-01-2020 08:49 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'corona@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jun-01-2020 09:03 PM', 'Jul-22-2020 12:25 AM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jun-01-2020 11:38 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'corona@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jun-01-2020 11:39 PM', 'Jul-22-2020 12:25 AM'),
(0, 0, 'corona@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jun-01-2020 11:39 PM', 'Jul-22-2020 12:25 AM'),
(0, 0, 'corona@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jun-01-2020 11:40 PM', 'Jul-22-2020 12:25 AM'),
(0, 0, 'corona@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jun-01-2020 11:41 PM', 'Jul-22-2020 12:25 AM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jun-01-2020 11:41 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'corona@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jun-01-2020 11:41 PM', 'Jul-22-2020 12:25 AM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jun-01-2020 11:43 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'corona@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jun-01-2020 11:43 PM', 'Jul-22-2020 12:25 AM'),
(0, 0, 'corona@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jun-01-2020 11:52 PM', 'Jul-22-2020 12:25 AM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jun-02-2020 12:03 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jun-02-2020 12:04 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'corona@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jun-02-2020 12:10 AM', 'Jul-22-2020 12:25 AM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jun-02-2020 12:10 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jun-02-2020 12:50 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jun-02-2020 12:58 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'corona@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jun-02-2020 01:47 AM', 'Jul-22-2020 12:25 AM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jun-02-2020 01:47 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jun-02-2020 01:50 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'corona@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jun-02-2020 01:54 AM', 'Jul-22-2020 12:25 AM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jun-02-2020 01:55 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-10-2020 11:30 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-11-2020 01:22 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, '', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-11-2020 01:38 AM', 'Apr-22-2021 08:00 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-11-2020 01:48 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-11-2020 02:03 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-11-2020 02:15 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-11-2020 02:21 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-11-2020 04:04 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-11-2020 04:14 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-11-2020 04:15 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-11-2020 04:16 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-11-2020 04:17 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-14-2020 12:23 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-14-2020 12:32 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-14-2020 12:49 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-14-2020 01:24 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, '', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-14-2020 01:50 AM', 'Apr-22-2021 08:00 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-14-2020 02:10 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'corona@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-14-2020 02:37 AM', 'Jul-22-2020 12:25 AM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-14-2020 02:41 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-14-2020 11:56 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-15-2020 12:45 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-15-2020 12:53 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-15-2020 12:54 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-15-2020 11:33 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-15-2020 11:43 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, '', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-15-2020 11:47 PM', 'Apr-22-2021 08:00 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-16-2020 12:22 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-16-2020 12:58 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-16-2020 02:18 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-16-2020 01:20 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-16-2020 01:21 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-17-2020 12:27 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-18-2020 01:17 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'kenya@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-18-2020 01:49 AM', 'Jul-18-2020 06:11 PM'),
(0, 0, 'kenya@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-18-2020 01:56 AM', 'Jul-18-2020 06:11 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-18-2020 03:01 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-18-2020 03:07 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'kenya@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-18-2020 03:09 PM', 'Jul-18-2020 06:11 PM'),
(0, 0, 'kenya@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-18-2020 03:10 PM', 'Jul-18-2020 06:11 PM'),
(0, 0, 'corona', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-18-2020 03:15 PM', 'Jul-23-2020 02:00 AM'),
(0, 0, 'corona@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-18-2020 04:10 PM', 'Jul-22-2020 12:25 AM'),
(0, 0, 'corona@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-18-2020 04:13 PM', 'Jul-22-2020 12:25 AM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-18-2020 04:17 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, '', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-18-2020 05:01 PM', 'Apr-22-2021 08:00 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-18-2020 05:19 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-18-2020 06:01 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'kevin', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-18-2020 06:06 PM', ''),
(0, 0, 'kenya@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-18-2020 06:10 PM', 'Jul-18-2020 06:11 PM'),
(0, 0, 'corona@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-18-2020 06:12 PM', 'Jul-22-2020 12:25 AM'),
(0, 0, 'corona@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-18-2020 06:15 PM', 'Jul-22-2020 12:25 AM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-18-2020 07:10 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'corona@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-18-2020 07:10 PM', 'Jul-22-2020 12:25 AM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-18-2020 07:22 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-18-2020 07:27 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-20-2020 11:59 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'corona@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-21-2020 12:00 AM', 'Jul-22-2020 12:25 AM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-21-2020 12:10 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'corona@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-21-2020 12:47 AM', 'Jul-22-2020 12:25 AM'),
(0, 0, 'corona@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-21-2020 01:35 AM', 'Jul-22-2020 12:25 AM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-21-2020 01:47 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'corona@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-21-2020 01:48 AM', 'Jul-22-2020 12:25 AM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-22-2020 12:04 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'corona@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-22-2020 12:06 AM', 'Jul-22-2020 12:25 AM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-22-2020 12:45 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-22-2020 12:49 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-22-2020 01:41 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-22-2020 01:45 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-23-2020 01:30 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-23-2020 01:32 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-23-2020 01:33 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-23-2020 01:36 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-23-2020 01:36 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-23-2020 01:36 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-23-2020 01:37 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-23-2020 01:39 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-23-2020 01:39 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-23-2020 01:39 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-23-2020 01:47 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'covid', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-23-2020 01:49 AM', 'Jul-23-2020 01:51 AM'),
(0, 0, 'corona', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-23-2020 01:52 AM', 'Jul-23-2020 02:00 AM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-23-2020 01:52 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-23-2020 01:53 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'corona', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-23-2020 02:00 AM', ''),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Sep-16-2020 01:02 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Sep-16-2020 01:02 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Sep-18-2020 01:43 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Sep-18-2020 01:48 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Sep-19-2020 01:26 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Sep-19-2020 01:33 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Sep-19-2020 01:36 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Sep-19-2020 01:51 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Sep-19-2020 05:26 PM', 'Jan-16-2021 11:51 PM');
INSERT INTO `history_log` (`log_id`, `id`, `email_address`, `action`, `actions`, `ip`, `host`, `login_time`, `logout_time`) VALUES
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Sep-19-2020 06:09 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Sep-19-2020 08:50 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Sep-19-2020 09:40 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Sep-19-2020 11:17 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Sep-22-2020 12:51 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Sep-22-2020 12:51 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Sep-22-2020 01:01 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Sep-22-2020 02:07 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Sep-23-2020 01:06 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Sep-25-2020 01:31 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Sep-25-2020 02:01 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Sep-25-2020 02:30 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Sep-25-2020 05:41 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Sep-25-2020 06:00 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Sep-25-2020 07:09 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Sep-25-2020 11:00 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Sep-26-2020 01:25 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Sep-26-2020 02:15 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Sep-26-2020 02:58 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Sep-26-2020 04:46 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Sep-26-2020 05:50 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Sep-28-2020 02:41 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Sep-30-2020 01:39 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'petro@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Oct-02-2020 12:08 AM', ''),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Oct-02-2020 12:31 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Oct-02-2020 02:42 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Oct-02-2020 02:42 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Oct-03-2020 12:16 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Oct-03-2020 01:23 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Oct-03-2020 05:12 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Oct-03-2020 05:18 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Oct-03-2020 07:45 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Oct-03-2020 08:10 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Oct-18-2020 09:29 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Oct-18-2020 09:30 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Oct-19-2020 02:50 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, '', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Oct-19-2020 02:52 AM', 'Apr-22-2021 08:00 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Oct-19-2020 02:53 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Oct-19-2020 02:20 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Oct-19-2020 08:45 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Oct-19-2020 09:25 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Oct-22-2020 12:58 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Oct-24-2020 12:07 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Oct-24-2020 12:41 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-7VTG88M', 'Nov-19-2020 08:12 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-7VTG88M', 'Nov-21-2020 02:33 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-7VTG88M', 'Nov-21-2020 10:03 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-7VTG88M', 'Nov-21-2020 10:18 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'victor@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-7VTG88M', 'Nov-21-2020 10:58 PM', 'Nov-21-2020 11:12 PM'),
(0, 0, 'victor@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-7VTG88M', 'Nov-21-2020 11:02 PM', 'Nov-21-2020 11:12 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-7VTG88M', 'Nov-22-2020 07:28 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-7VTG88M', 'Dec-08-2020 02:57 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-7VTG88M', 'Dec-08-2020 01:28 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-7VTG88M', 'Dec-09-2020 08:38 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-7VTG88M', 'Dec-10-2020 02:04 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-7VTG88M', 'Dec-16-2020 03:48 AM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-7VTG88M', 'Dec-17-2020 02:27 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-7VTG88M', 'Dec-17-2020 03:25 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-7VTG88M', 'Dec-24-2020 10:17 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-7VTG88M', 'Jan-16-2021 09:07 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-7VTG88M', 'Jan-16-2021 09:15 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '127.0.0.1', 'ads_church.test', 'Jan-16-2021 10:04 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '127.0.0.1', 'ads_church.test', 'Jan-16-2021 10:35 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '127.0.0.1', 'ads_church.test', 'Jan-16-2021 11:29 PM', 'Jan-16-2021 11:51 PM'),
(0, 0, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-7VTG88M', 'Apr-22-2021 07:43 PM', '');

-- --------------------------------------------------------

--
-- Table structure for table `history_log1`
--

CREATE TABLE `history_log1` (
  `log_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `admin_user` text NOT NULL,
  `action` varchar(100) NOT NULL,
  `actions` varchar(200) NOT NULL DEFAULT 'Has LoggedOut the system at',
  `ip` text NOT NULL,
  `host` text NOT NULL,
  `login_time` varchar(200) NOT NULL,
  `logout_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history_log1`
--

INSERT INTO `history_log1` (`log_id`, `id`, `admin_user`, `action`, `actions`, `ip`, `host`, `login_time`, `logout_time`) VALUES
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-18-2020 05:19 PM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-18-2020 05:20 PM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-18-2020 06:22 PM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-18-2020 06:38 PM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-18-2020 06:54 PM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-18-2020 07:20 PM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-20-2020 04:37 PM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-20-2020 05:50 PM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Apr-20-2020 07:59 PM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-04-2020 01:56 AM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-04-2020 02:34 PM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-04-2020 04:04 PM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-04-2020 04:21 PM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-04-2020 05:02 PM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-04-2020 06:35 PM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-05-2020 01:02 AM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-05-2020 01:19 AM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-05-2020 01:46 AM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-05-2020 03:27 PM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-05-2020 03:52 PM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-05-2020 04:02 PM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-05-2020 04:31 PM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-05-2020 06:43 PM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-05-2020 11:52 PM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-06-2020 12:14 AM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-06-2020 01:20 AM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-06-2020 02:27 PM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-06-2020 02:48 PM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-06-2020 03:31 PM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '127.0.0.1', 'localhost::1', 'May-06-2020 05:57 PM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-06-2020 10:41 PM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-07-2020 01:19 AM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-07-2020 03:08 PM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-07-2020 05:59 PM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-07-2020 06:37 PM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-08-2020 01:48 AM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-08-2020 03:49 PM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-08-2020 04:55 PM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-08-2020 05:28 PM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-18-2020 05:04 PM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-18-2020 05:34 PM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-18-2020 06:15 PM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-19-2020 01:30 AM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-19-2020 02:44 PM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-19-2020 03:22 PM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-19-2020 03:53 PM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'May-19-2020 05:24 PM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '127.0.0.1', 'localhost::1', 'May-25-2020 06:11 PM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jun-01-2020 06:06 PM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-11-2020 04:26 PM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-14-2020 12:01 AM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-14-2020 01:23 AM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-17-2020 01:35 AM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-18-2020 01:16 AM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-18-2020 06:18 PM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-21-2020 12:12 AM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-21-2020 01:08 AM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-21-2020 01:42 AM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-22-2020 12:49 AM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-22-2020 01:41 AM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Jul-22-2020 01:51 AM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Sep-19-2020 12:54 AM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Sep-19-2020 12:55 AM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Sep-19-2020 01:34 AM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Sep-19-2020 04:56 PM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Sep-19-2020 05:25 PM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Sep-26-2020 09:13 PM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Sep-26-2020 09:36 PM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Oct-03-2020 07:22 PM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '127.0.0.1', 'localhost::1', 'Oct-17-2020 12:52 AM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-IM21E9G', 'Oct-19-2020 02:24 PM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-7VTG88M', 'Dec-16-2020 02:01 AM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-7VTG88M', 'Dec-16-2020 02:19 AM', 'Jan-16-2021 09:52 PM'),
(0, 1, 'patoh@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '127.0.0.1', 'ads_church.test', 'Jan-16-2021 09:39 PM', 'Jan-16-2021 09:52 PM');

-- --------------------------------------------------------

--
-- Table structure for table `login_user`
--

CREATE TABLE `login_user` (
  `user_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email_address` text NOT NULL,
  `user_password` text NOT NULL,
  `user_status` varchar(50) NOT NULL DEFAULT '0',
  `ip` varchar(50) DEFAULT NULL,
  `host` varchar(50) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `avarta` varchar(250) NOT NULL,
  `SIZE` int(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `pass_code` int(25) DEFAULT NULL,
  `last_seen_noti` varchar(25) NOT NULL DEFAULT '0',
  `account_bal` double NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_user`
--

INSERT INTO `login_user` (`user_id`, `name`, `email_address`, `user_password`, `user_status`, `ip`, `host`, `status`, `avarta`, `SIZE`, `date`, `pass_code`, `last_seen_noti`, `account_bal`) VALUES
(1, 'PATRICK', 'patoh@gmail.com', '$2y$12$g1mtsgSLyR9AkzrDCiUE7OeA5VnYm/d8Lwz3XHJx.9kn3HbqUwOZ2', '0', '::1', 'DESKTOP-IM21E9G', 1, 'essayroom.PNG', 2118, '2020-04-16 20:24:55', 423286, '0', 7.6),
(2, 'His Excellency', 'lord@gmail.com', '$2y$12$rhnewqP9Yx84sOYRN25q8.d.mLxW7rrVPPEY4TVZzn7oRAS9rCpWq', '0', '::1', 'DESKTOP-IM21E9G', 1, 'WIN_20200209_21_22_43_Pro.jpg', 205683, '2020-04-17 10:16:34', 1, '0', 0),
(4, 'jambo', 'jambo@gmail.com', '$2y$12$82ziB.zQLs1ElhIERxg0ueKUkP0As2RBujtF4rKz99OJeJVSkuc9S', '0', '::1', 'DESKTOP-IM21E9G', 1, 'images (1).png', 5276, '2020-04-20 11:30:21', 1, '0', 0),
(8, 'kenya', 'kenya@gmail.com', '$2y$12$v4QIfGOW6ZxYpG6HlPIpHeUiS9vvA0GYBPLf//Mf.iQYOU.M9vWZ2', '0', '::1', 'DESKTOP-IM21E9G', 1, 'Capture.JPG', 28540, '2020-07-17 20:56:42', 3, '0', 0),
(14, 'corona', 'corona@gmail.com', '$2y$12$cDCnyC7nWRis6zGfMUHmwerCf0mpzahoEXNasxRxK70sQxbbNXR/.', '0', '::1', 'DESKTOP-IM21E9G', 1, '', 0, '2020-07-22 21:00:39', 249573, '0', 0),
(15, 'petro', 'petro@gmail.com', '$2y$12$kCDf4UqLOoSEj/oHivXMrOzX5CS9A33VyDjcNmg95rMl38JMjiWje', '0', '::1', 'DESKTOP-IM21E9G', 1, '', 0, '2020-10-01 19:08:08', NULL, '0', 0),
(16, 'softconsult', 'soft@mail.com', '$2y$12$9A7vLUEbDaaJdkSR5PoGN.j3FMu.zFil94X8zN9Qdz9Bl74Xcq50y', '0', '::1', 'DESKTOP-IM21E9G', 1, '', 0, '2020-10-23 09:17:49', NULL, '0', 0),
(17, 'victor', 'victor@gmail.com', '$2y$12$MB3O4hC.UNnjGxQvdpkp..J1Sq7.9m3SOQ3Fa/ChcJmSi7nwXZ3AS', '0', '::1', 'DESKTOP-7VTG88M', 1, '', 0, '2020-11-21 17:58:31', NULL, '0', 0),
(18, 'victor', 'victor@gmail.com', '$2y$12$8L9DZnSKItx3oJH/3G9FaOzlpyohuaqtgGhGgZtiQrGmCXsqsLTGu', '0', '::1', 'DESKTOP-7VTG88M', 1, '', 0, '2020-11-21 18:02:08', NULL, '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(250) NOT NULL,
  `from` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(250) NOT NULL,
  `message_id` int(25) NOT NULL,
  `status` int(2) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `message_chat`
--

CREATE TABLE `message_chat` (
  `id` int(11) NOT NULL,
  `from_user` varchar(25) NOT NULL,
  `to_user` varchar(25) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `chat_id` varchar(25) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message_chat`
--

INSERT INTO `message_chat` (`id`, `from_user`, `to_user`, `content`, `chat_id`, `status`, `date`) VALUES
(1, 'patoh@gmail.com', 'admin', 'am here now....', '1', 1, '2020-04-02 15:03:42'),
(2, 'admin', 'patoh@gmail.com', 'great work done', '1', 1, '2020-04-03 10:06:49');

-- --------------------------------------------------------

--
-- Table structure for table `nav_table`
--

CREATE TABLE `nav_table` (
  `id` int(25) NOT NULL,
  `url_name` varchar(25) NOT NULL,
  `url_link` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nav_table`
--

INSERT INTO `nav_table` (`id`, `url_name`, `url_link`, `status`) VALUES
(1, 'Neworder', '../Order/1235.php', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `noti_id` int(11) NOT NULL,
  `noti_message` varchar(50) NOT NULL,
  `logi_id` int(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(3) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`noti_id`, `noti_message`, `logi_id`, `date`, `status`) VALUES
(1, 'made new order 25769967', 1, '2020-07-22 20:53:13', 1),
(2, 'made new order 99867974', 1, '2020-09-18 08:48:46', 0),
(3, 'made new order 86511773', 1, '2020-09-18 08:54:17', 0),
(4, 'made new order 25759129', 1, '2020-09-29 20:40:20', 0),
(5, 'you deleted order', 1, '2020-09-29 20:44:17', 0),
(6, 'you changed password', 1, '2020-10-01 19:28:36', 0),
(7, 'you changed password', 1, '2020-10-01 19:29:16', 0),
(8, 'you changed password', 1, '2020-10-01 19:30:58', 0),
(9, 'you deleted order ', 1, '2020-10-18 21:55:17', 0),
(10, 'you deleted order ', 1, '2020-10-18 21:55:24', 0),
(11, 'made new order 91377954', 1, '2020-10-19 10:16:17', 0),
(12, 'you Payed for  order 91377954', 1, '2020-10-19 16:50:38', 0),
(13, 'you Payed for  order 91377954', 1, '2020-10-19 16:51:50', 0),
(14, 'made new order 76638928', 1, '2020-10-19 16:53:18', 0),
(15, 'you deleted order', 1, '2020-10-23 19:08:01', 0),
(16, 'you deleted order', 1, '2020-10-23 19:08:03', 0),
(17, 'made new order 33258752', 1, '2020-10-23 19:08:27', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_aclevel`
--

CREATE TABLE `order_aclevel` (
  `id` int(11) NOT NULL,
  `academic_name` varchar(50) NOT NULL,
  `rate` varchar(25) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_aclevel`
--

INSERT INTO `order_aclevel` (`id`, `academic_name`, `rate`, `status`) VALUES
(7, 'High School', '0.8', 1),
(11, 'Undergraduate', '1', 1),
(12, 'Masters', '1.1', 1),
(13, 'PhD', '1.2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_deadline`
--

CREATE TABLE `order_deadline` (
  `id` int(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `rate` varchar(25) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_deadline`
--

INSERT INTO `order_deadline` (`id`, `name`, `rate`, `status`) VALUES
(1, '3 Hours', '23', 1),
(2, '6 Hours', '22', 1),
(3, '12 Hours', '20', 1),
(4, '24 Hours', '18', 1),
(5, '48 Hours', '17.5', 1),
(6, '72 Hours', '16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_file`
--

CREATE TABLE `order_file` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(200) DEFAULT NULL,
  `SIZE` varchar(200) DEFAULT NULL,
  `DOWNLOAD` varchar(200) DEFAULT NULL,
  `task_id` varchar(30) NOT NULL,
  `topic` varchar(50) DEFAULT NULL,
  `subject_id` varchar(50) NOT NULL,
  `order_pages` varchar(25) DEFAULT NULL,
  `deadline_id` varchar(100) NOT NULL,
  `academic_level_id` varchar(50) NOT NULL,
  `quality_id` varchar(100) NOT NULL,
  `order_sources` varchar(30) DEFAULT NULL,
  `order_pptslides` varchar(200) DEFAULT NULL,
  `order_citation` varchar(100) DEFAULT NULL,
  `order_instructions` varchar(300) DEFAULT NULL,
  `order_id` int(100) DEFAULT NULL,
  `order_amount` double DEFAULT NULL,
  `host` varchar(100) DEFAULT NULL,
  `ip` varchar(100) DEFAULT NULL,
  `email_address` varchar(25) NOT NULL DEFAULT 'not',
  `status` int(11) NOT NULL DEFAULT 1,
  `paid_status` tinyint(1) NOT NULL DEFAULT 0,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `endDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_file`
--

INSERT INTO `order_file` (`ID`, `NAME`, `SIZE`, `DOWNLOAD`, `task_id`, `topic`, `subject_id`, `order_pages`, `deadline_id`, `academic_level_id`, `quality_id`, `order_sources`, `order_pptslides`, `order_citation`, `order_instructions`, `order_id`, `order_amount`, `host`, `ip`, `email_address`, `status`, `paid_status`, `date`, `endDate`) VALUES
(7, NULL, NULL, '0', 'Book/Movie Review', '', 'Biology (And Other Life Sciences)', '1', '24 Hours', 'Masters', 'Premium', '0', '0', 'APA', '<p>&nbsp;</p>', 13326171, 27.6, 'DESKTOP-IM21E9G', '::1', 'kenya@gmail.com', 1, 0, '2020-07-17 21:00:22', '2020-07-18 21:00:00'),
(8, NULL, NULL, '0', 'Book/Movie Review', '', 'Biology (And Other Life Sciences)', '1', '72 Hours', 'Undergraduate', 'Platinum', '0', '0', 'APA', '<p>&nbsp;</p>', 47542713, 23.27, 'DESKTOP-IM21E9G', '::1', 'corona@gmail.com', 3, 1, '2020-07-18 11:16:19', '2020-07-21 11:16:00'),
(10, NULL, NULL, '0', 'Book/Movie Review', '', 'Biology (And Other Life Sciences)', '1', '48 Hours', 'Masters', 'Platinum', '0', '0', 'MLA', '<p>&nbsp;</p>', 97328475, 28, 'DESKTOP-IM21E9G', '::1', 'kevin', 1, 0, '2020-07-18 13:07:26', '2020-07-20 13:07:00'),
(11, 'cart.PNG', NULL, '0', 'Business Plan', '', 'Aviation', '2', '48 Hours', 'PhD', '', '3', '5', 'Havard', '<p>&nbsp;</p>', 64912742, 80.9, 'DESKTOP-IM21E9G', '::1', 'patoh@gmail.com', 4, 2, '2020-07-20 19:11:40', '2020-10-20 20:59:00'),
(12, NULL, NULL, '0', 'Book/Movie Review', '', 'Biology (And Other Life Sciences)', '1', '72 Hours', 'Masters', 'Platinum', '0', '0', 'MLA', '<p>&nbsp;</p>', 35455742, 25.6, 'DESKTOP-IM21E9G', '::1', 'patoh@gmail.com', 4, 2, '2020-07-20 19:19:41', '2020-07-23 19:19:00'),
(13, NULL, NULL, '0', 'Annotated Bibliography', '', 'Aviation', '1', '48 Hours', 'Undergraduate', '', '1', '1', 'APA', '<p>&nbsp;</p>', 81668529, 27.21, 'DESKTOP-IM21E9G', '::1', 'corona@gmail.com', 1, 0, '2020-07-21 19:06:48', '2020-07-21 22:06:00'),
(14, NULL, NULL, '0', 'Argumentative Essay', '', 'Aviation', '1', '48 Hours', 'Undergraduate', 'Premium', '0', '0', 'MLA', '<p>&nbsp;</p>', 25623254, 20.33, 'DESKTOP-IM21E9G', '::1', 'corona@gmail.com', 1, 0, '2020-07-21 19:07:35', '2020-07-22 01:07:00'),
(16, NULL, NULL, '0', 'Business Plan', '', 'Aviation', '1', '24 Hours', 'Masters', '', '2', '2', 'APA', '<p>&nbsp;</p>', 87276171, 36, 'DESKTOP-IM21E9G', '::1', 'patoh@gmail.com', 4, 2, '2020-07-21 19:55:47', '2020-10-19 20:58:00'),
(18, NULL, NULL, '0', 'Capstone Project', '', 'Aviation', '1', '24 Hours', 'Masters', 'Platinum', '0', '1', 'APA', '<p>&nbsp;</p>', 99867974, 30, 'DESKTOP-IM21E9G', '::1', 'patoh@gmail.com', 4, 2, '2020-09-18 08:48:46', '2020-09-19 08:48:00'),
(22, NULL, NULL, '0', 'Business Plan', '', 'Biology (And Other Life Sciences)', '1', '48 Hours', 'Undergraduate', 'Premium', '1', '1', 'APA', '<p>&nbsp;</p>', 91377954, 30.39, 'DESKTOP-IM21E9G', '::1', 'patoh@gmail.com', 2, 1, '2020-10-19 10:16:17', '2020-10-21 10:16:00'),
(24, NULL, NULL, '0', 'Admission Essay', 'Good', 'Aviation', '3', '72 Hours', 'Undergraduate', 'Standard', '3', '0', 'APA', '<p>&nbsp;</p>', 35314464, 48.48, 'DESKTOP-IM21E9G', '::1', 'soft@mail.com', 2, 1, '2020-10-23 09:16:20', '2020-10-26 08:16:00'),
(25, NULL, NULL, '0', 'Assignment', '', 'Archaeology', '1', '72 Hours', 'Undergraduate', 'Standard', '0', '0', 'APA', '<p>&nbsp;</p>', 33258752, 16.16, 'DESKTOP-IM21E9G', '::1', 'patoh@gmail.com', 2, 1, '2020-10-23 19:08:27', '2020-10-26 19:08:00');

-- --------------------------------------------------------

--
-- Table structure for table `order_quality`
--

CREATE TABLE `order_quality` (
  `id` int(25) NOT NULL,
  `rate` varchar(50) NOT NULL,
  `quality_name` varchar(25) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_quality`
--

INSERT INTO `order_quality` (`id`, `rate`, `quality_name`, `status`) VALUES
(9, '1', 'Standard', 1),
(10, '1.15', 'Premium', 1),
(11, '1.2', 'Platinum', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_subject`
--

CREATE TABLE `order_subject` (
  `id` int(100) NOT NULL,
  `subject_name` varchar(50) NOT NULL,
  `rate` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_subject`
--

INSERT INTO `order_subject` (`id`, `subject_name`, `rate`, `status`) VALUES
(9, ' Other', '1', 1),
(10, 'Accounting', '1.2', 1),
(11, 'Anthropology', '1', 1),
(12, 'Application Letters ', '1', 1),
(13, 'Archaeology', '1', 1),
(14, 'Architecture, Building And Planning', '1.2', 1),
(15, 'Art(Fine Arts, Performing Arts)', '1', 1),
(16, 'Astronomy(And Other Space Science)', '1', 1),
(17, 'Aviation', '1', 1),
(18, 'Biology (And Other Life Sciences)', '1.2', 1),
(19, 'Business Studies', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_task`
--

CREATE TABLE `order_task` (
  `id` int(11) NOT NULL,
  `task_name` varchar(50) NOT NULL,
  `rate` varchar(25) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_task`
--

INSERT INTO `order_task` (`id`, `task_name`, `rate`, `status`) VALUES
(20, 'Essay (Any Type)', '1', 1),
(21, 'Article (Any Type)', '1', 1),
(22, 'Assignment', '1', 1),
(23, 'Content (Any Type)', '1', 1),
(24, 'Admission Essay', '1', 1),
(25, 'Annotated Bibliography', '1', 1),
(26, 'Argumentative Essay', '1', 1),
(27, 'Article Review', '1', 1),
(28, 'Book/Movie Review', '1', 1),
(29, 'Business Plan', '1', 1),
(30, 'Capstone Project', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(250) NOT NULL,
  `item_number` varchar(50) DEFAULT NULL,
  `txn_id` double DEFAULT NULL,
  `payment_gross` double DEFAULT NULL,
  `currency_code` varchar(25) DEFAULT NULL,
  `payment_status` int(15) DEFAULT NULL,
  `payer_email` varchar(25) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `item_number`, `txn_id`, `payment_gross`, `currency_code`, `payment_status`, `payer_email`, `date`) VALUES
(1, '47542713', 69, 23.27, 'USD', 0, '', '2020-07-18 13:17:10');

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `id` int(100) NOT NULL,
  `payment_method` varchar(25) NOT NULL,
  `amount` varchar(25) NOT NULL,
  `item_id` int(25) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`id`, `payment_method`, `amount`, `item_id`, `status`, `date`) VALUES
(1, 'Paypal', 'PAYID-L3CNBLY15A043522805', 0, 1, '2020-05-20 09:41:23'),
(2, 'Paypal', 'PAYID-L3CV3OA5HW68797AE16', 0, 1, '2020-05-20 19:44:33'),
(3, 'Paypal', 'PAYID-L3CV3OA5HW68797AE16', 0, 1, '2020-05-20 19:51:38'),
(4, 'Paypal', 'PAYID-L3CWAJI6D231530WV36', 0, 1, '2020-05-20 19:52:27'),
(5, 'Paypal', 'PAYID-L3CWAJI6D231530WV36', 0, 1, '2020-05-20 19:52:41'),
(6, 'Paypal', 'PAYID-L3DK7AY0UH38672V696', 0, 1, '2020-05-21 19:43:43'),
(7, 'Paypal', 'PAYID-L3DK7AY0UH38672V696', 0, 1, '2020-05-21 19:45:39'),
(8, 'Paypal', 'PAYID-L3DK7AY0UH38672V696', 0, 1, '2020-05-21 19:45:57'),
(9, 'Paypal', 'PAYID-L3DK7AY0UH38672V696', 0, 1, '2020-05-21 19:47:22'),
(10, 'Paypal', 'PAYID-L3IUTSA9DX56492YY77', 0, 1, '2020-05-29 20:45:44'),
(11, 'Paypal', 'PAYID-L3JBDAQ5V690812H536', 0, 1, '2020-05-30 11:00:50'),
(12, 'Paypal', 'PAYID-L3JBGAY1X941743JM79', 0, 1, '2020-05-30 11:02:55'),
(13, 'Paypal', 'PAYID-L3JBGAY1X941743JM79', 0, 1, '2020-05-30 11:03:50'),
(14, 'Paypal', 'PAYID-L3JCBIA3CJ34096S972', 0, 1, '2020-05-30 12:01:01'),
(15, 'Paypal', 'PAYID-L3JCBIA3CJ34096S972', 0, 1, '2020-05-30 12:04:36'),
(16, 'Paypal', 'paymentId', 0, 1, '2020-05-30 12:05:53'),
(17, 'Paypal', 'paymentId', 0, 1, '2020-05-30 12:06:44'),
(18, 'Paypal', 'paymentId', 0, 1, '2020-05-30 12:21:45'),
(19, 'Paypal', 'paymentId', 0, 1, '2020-05-30 12:23:32'),
(20, 'Paypal', 'paymentId', 0, 1, '2020-05-30 12:26:57'),
(21, 'Paypal33', '', 0, 1, '2020-05-31 15:54:27'),
(22, 'Paypal33', '', 0, 1, '2020-05-31 15:57:09'),
(23, 'Paypal33', '', 0, 1, '2020-05-31 15:59:03'),
(24, 'Paypal33', '', 0, 1, '2020-05-31 16:00:09'),
(25, 'Paypal33', '', 0, 1, '2020-06-01 12:35:56');

-- --------------------------------------------------------

--
-- Table structure for table `referal`
--

CREATE TABLE `referal` (
  `id` int(250) NOT NULL,
  `user_id` int(250) NOT NULL DEFAULT 0,
  `email` varchar(250) DEFAULT NULL,
  `status` int(3) NOT NULL DEFAULT 1,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `referal`
--

INSERT INTO `referal` (`id`, `user_id`, `email`, `status`, `date_created`) VALUES
(3, 1, 'none@gmail.com', 1, '2020-11-22 11:45:58'),
(4, 1, 'none@gmail.com', 1, '2020-11-22 11:46:15'),
(5, 14, 'bgt', 1, '2020-11-22 11:56:06');

-- --------------------------------------------------------

--
-- Table structure for table `refund_order`
--

CREATE TABLE `refund_order` (
  `id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `description` varchar(100) NOT NULL,
  `order_id` int(25) NOT NULL,
  `user_id` int(25) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `refund_order`
--

INSERT INTO `refund_order` (`id`, `amount`, `description`, `order_id`, `user_id`, `status`, `date`) VALUES
(1, 0, 'am not sure', 29248162, 1, 1, '0000-00-00 00:00:00'),
(2, 25.6, 'readaf', 35455742, 1, 1, '0000-00-00 00:00:00'),
(3, 44.72, 'i dont want', 64912742, 1, 1, '0000-00-00 00:00:00'),
(4, 24, 'why not', 87276171, 1, 1, '2020-07-21 19:56:30'),
(5, 30, 'vcc', 99867974, 1, 0, '2021-01-16 17:04:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_events`
--
ALTER TABLE `blog_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chatid`),
  ADD KEY `chat_room_id` (`chat_room_id`),
  ADD KEY `chat_id_admin` (`chat_id_admin`);

--
-- Indexes for table `customer_file`
--
ALTER TABLE `customer_file`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `general_files`
--
ALTER TABLE `general_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_user`
--
ALTER TABLE `login_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message_chat`
--
ALTER TABLE `message_chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nav_table`
--
ALTER TABLE `nav_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`noti_id`),
  ADD KEY `logi_id` (`logi_id`);

--
-- Indexes for table `order_aclevel`
--
ALTER TABLE `order_aclevel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_deadline`
--
ALTER TABLE `order_deadline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_file`
--
ALTER TABLE `order_file`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `task` (`task_id`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `deadline_id` (`deadline_id`),
  ADD KEY `academic_level_id` (`academic_level_id`),
  ADD KEY `quality_id` (`quality_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `order_quality`
--
ALTER TABLE `order_quality`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_subject`
--
ALTER TABLE `order_subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_task`
--
ALTER TABLE `order_task`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `referal`
--
ALTER TABLE `referal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `refund_order`
--
ALTER TABLE `refund_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog_events`
--
ALTER TABLE `blog_events`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `chatid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `customer_file`
--
ALTER TABLE `customer_file`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `general_files`
--
ALTER TABLE `general_files`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login_user`
--
ALTER TABLE `login_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `message_chat`
--
ALTER TABLE `message_chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nav_table`
--
ALTER TABLE `nav_table`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `noti_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `order_aclevel`
--
ALTER TABLE `order_aclevel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `order_deadline`
--
ALTER TABLE `order_deadline`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_file`
--
ALTER TABLE `order_file`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `order_quality`
--
ALTER TABLE `order_quality`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order_subject`
--
ALTER TABLE `order_subject`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `order_task`
--
ALTER TABLE `order_task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `referal`
--
ALTER TABLE `referal`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `refund_order`
--
ALTER TABLE `refund_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`logi_id`) REFERENCES `login_user` (`user_id`);

--
-- Constraints for table `referal`
--
ALTER TABLE `referal`
  ADD CONSTRAINT `referal_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `login_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `refund_order`
--
ALTER TABLE `refund_order`
  ADD CONSTRAINT `refund_order_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `login_user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
