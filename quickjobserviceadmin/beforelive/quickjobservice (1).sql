-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2025 at 12:23 PM
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
-- Database: `quickjobservice`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_records`
--

CREATE TABLE `activity_records` (
  `id` int(11) NOT NULL,
  `ip_addreass` text NOT NULL,
  `url` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_records`
--

INSERT INTO `activity_records` (`id`, `ip_addreass`, `url`, `date`, `time`, `admin_id`, `admin_username`, `admin_password`) VALUES
(1, '::1', 'http://localhost/moxxydmcadmin/admin/dashboard', '2025-07-17', '12:15:11', 2, 'admin', 'admin'),
(2, '::1', 'http://localhost/moxxydmcadmin/admin/contact', '2025-07-17', '12:15:16', 2, 'admin', 'admin'),
(3, '::1', 'http://localhost/1ADMINPANELS/adminlara/admin/dashboard', '2025-07-17', '12:31:23', 2, 'admin', 'admin'),
(4, '::1', 'http://localhost/1ADMINPANELS/adminlara/admin/site_setting/edit/1', '2025-07-17', '12:31:31', 2, 'admin', 'admin'),
(5, '::1', 'http://localhost/quickjobserviceadmin/admin/dashboard', '2025-09-30', '11:01:19', 2, 'admin@gmail.com', 'admin'),
(6, '::1', 'http://localhost/quickjobserviceadmin/admin/site_setting/edit/1', '2025-09-30', '11:01:22', 2, 'admin@gmail.com', 'admin'),
(7, '::1', 'http://localhost/quickjobserviceadmin/admin/site_setting/edit/1', '2025-09-30', '11:01:34', 2, 'admin@gmail.com', 'admin'),
(8, '::1', 'http://localhost/quickjobserviceadmin/admin/site_setting/edit/1', '2025-09-30', '11:02:17', 2, 'admin@gmail.com', 'admin'),
(9, '::1', 'http://localhost/quickjobserviceadmin/admin/site_setting/edit/1', '2025-09-30', '11:03:01', 2, 'admin@gmail.com', 'admin'),
(10, '::1', 'http://localhost/quickjobserviceadmin/admin/site_setting/edit/1', '2025-09-30', '11:05:45', 2, 'admin@gmail.com', 'admin'),
(11, '::1', 'http://localhost/quickjobserviceadmin/admin/site_setting/edit/1', '2025-09-30', '11:06:36', 2, 'admin@gmail.com', 'admin'),
(12, '::1', 'http://localhost/quickjobserviceadmin/admin/category', '2025-09-30', '11:06:56', 2, 'admin@gmail.com', 'admin'),
(13, '::1', 'http://localhost/quickjobserviceadmin/admin/category/add', '2025-09-30', '11:06:58', 2, 'admin@gmail.com', 'admin'),
(14, '::1', 'http://localhost/quickjobserviceadmin/admin/category/add', '2025-09-30', '11:07:24', 2, 'admin@gmail.com', 'admin'),
(15, '::1', 'http://localhost/quickjobserviceadmin/admin/category', '2025-09-30', '11:08:09', 2, 'admin@gmail.com', 'admin'),
(16, '::1', 'http://localhost/quickjobserviceadmin/admin/category', '2025-09-30', '11:08:29', 2, 'admin@gmail.com', 'admin'),
(17, '::1', 'http://localhost/quickjobserviceadmin/admin/category/edit/1', '2025-09-30', '11:08:32', 2, 'admin@gmail.com', 'admin'),
(18, '::1', 'http://localhost/quickjobserviceadmin/admin/category', '2025-09-30', '11:08:34', 2, 'admin@gmail.com', 'admin'),
(19, '::1', 'http://localhost/quickjobserviceadmin/admin/category/add', '2025-09-30', '11:08:43', 2, 'admin@gmail.com', 'admin'),
(20, '::1', 'http://localhost/quickjobserviceadmin/admin/category', '2025-09-30', '11:08:50', 2, 'admin@gmail.com', 'admin'),
(21, '::1', 'http://localhost/quickjobserviceadmin/admin/category/add', '2025-09-30', '11:08:55', 2, 'admin@gmail.com', 'admin'),
(22, '::1', 'http://localhost/quickjobserviceadmin/admin/category', '2025-09-30', '11:08:57', 2, 'admin@gmail.com', 'admin'),
(23, '::1', 'http://localhost/quickjobserviceadmin/admin/category', '2025-09-30', '11:12:48', 2, 'admin@gmail.com', 'admin'),
(24, '::1', 'http://localhost/quickjobserviceadmin/admin/category', '2025-09-30', '11:15:30', 2, 'admin@gmail.com', 'admin'),
(25, '::1', 'http://localhost/quickjobserviceadmin/admin/country', '2025-09-30', '11:15:51', 2, 'admin@gmail.com', 'admin'),
(26, '::1', 'http://localhost/quickjobserviceadmin/admin/country', '2025-09-30', '11:16:08', 2, 'admin@gmail.com', 'admin'),
(27, '::1', 'http://localhost/quickjobserviceadmin/admin/country', '2025-09-30', '11:16:19', 2, 'admin@gmail.com', 'admin'),
(28, '::1', 'http://localhost/quickjobserviceadmin/admin/country', '2025-09-30', '11:17:41', 2, 'admin@gmail.com', 'admin'),
(29, '::1', 'http://localhost/quickjobserviceadmin/admin/country', '2025-09-30', '11:17:58', 2, 'admin@gmail.com', 'admin'),
(30, '::1', 'http://localhost/quickjobserviceadmin/admin/country/add', '2025-09-30', '11:18:19', 2, 'admin@gmail.com', 'admin'),
(31, '::1', 'http://localhost/quickjobserviceadmin/admin/country/add', '2025-09-30', '11:19:30', 2, 'admin@gmail.com', 'admin'),
(32, '::1', 'http://localhost/quickjobserviceadmin/admin/country', '2025-09-30', '11:22:37', 2, 'admin@gmail.com', 'admin'),
(33, '::1', 'http://localhost/quickjobserviceadmin/admin/country/edit/240', '2025-09-30', '11:22:39', 2, 'admin@gmail.com', 'admin'),
(34, '::1', 'http://localhost/quickjobserviceadmin/admin/country', '2025-09-30', '11:22:44', 2, 'admin@gmail.com', 'admin'),
(35, '::1', 'http://localhost/quickjobserviceadmin/admin/country', '2025-09-30', '11:22:51', 2, 'admin@gmail.com', 'admin'),
(36, '::1', 'http://localhost/quickjobserviceadmin/admin/country', '2025-09-30', '11:23:36', 2, 'admin@gmail.com', 'admin'),
(37, '::1', 'http://localhost/quickjobserviceadmin/admin/country', '2025-09-30', '11:25:27', 2, 'admin@gmail.com', 'admin'),
(38, '::1', 'http://localhost/quickjobserviceadmin/admin/state', '2025-09-30', '11:25:30', 2, 'admin@gmail.com', 'admin'),
(39, '::1', 'http://localhost/quickjobserviceadmin/admin/state', '2025-09-30', '11:25:53', 2, 'admin@gmail.com', 'admin'),
(40, '::1', 'http://localhost/quickjobserviceadmin/admin/state', '2025-09-30', '11:28:56', 2, 'admin@gmail.com', 'admin'),
(41, '::1', 'http://localhost/quickjobserviceadmin/admin/state', '2025-09-30', '11:28:59', 2, 'admin@gmail.com', 'admin'),
(42, '::1', 'http://localhost/quickjobserviceadmin/admin/state', '2025-09-30', '11:29:35', 2, 'admin@gmail.com', 'admin'),
(43, '::1', 'http://localhost/quickjobserviceadmin/admin/state', '2025-09-30', '11:29:54', 2, 'admin@gmail.com', 'admin'),
(44, '::1', 'http://localhost/quickjobserviceadmin/admin/state', '2025-09-30', '11:30:09', 2, 'admin@gmail.com', 'admin'),
(45, '::1', 'http://localhost/quickjobserviceadmin/admin/state', '2025-09-30', '11:30:19', 2, 'admin@gmail.com', 'admin'),
(46, '::1', 'http://localhost/quickjobserviceadmin/admin/state', '2025-09-30', '11:30:27', 2, 'admin@gmail.com', 'admin'),
(47, '::1', 'http://localhost/quickjobserviceadmin/admin/state', '2025-09-30', '11:31:58', 2, 'admin@gmail.com', 'admin'),
(48, '::1', 'http://localhost/quickjobserviceadmin/admin/state', '2025-09-30', '11:33:13', 2, 'admin@gmail.com', 'admin'),
(49, '::1', 'http://localhost/quickjobserviceadmin/admin/state', '2025-09-30', '11:33:30', 2, 'admin@gmail.com', 'admin'),
(50, '::1', 'http://localhost/quickjobserviceadmin/admin/state/add', '2025-09-30', '11:34:29', 2, 'admin@gmail.com', 'admin'),
(51, '::1', 'http://localhost/quickjobserviceadmin/admin/state/add', '2025-09-30', '11:38:56', 2, 'admin@gmail.com', 'admin'),
(52, '::1', 'http://localhost/quickjobserviceadmin/admin/state/add', '2025-09-30', '11:39:21', 2, 'admin@gmail.com', 'admin'),
(53, '::1', 'http://localhost/quickjobserviceadmin/admin/state/add', '2025-09-30', '11:40:02', 2, 'admin@gmail.com', 'admin'),
(54, '::1', 'http://localhost/quickjobserviceadmin/admin/state', '2025-09-30', '11:40:24', 2, 'admin@gmail.com', 'admin'),
(55, '::1', 'http://localhost/quickjobserviceadmin/admin/state/edit/36', '2025-09-30', '11:40:27', 2, 'admin@gmail.com', 'admin'),
(56, '::1', 'http://localhost/quickjobserviceadmin/admin/state', '2025-09-30', '11:40:31', 2, 'admin@gmail.com', 'admin'),
(57, '::1', 'http://localhost/quickjobserviceadmin/admin/state', '2025-09-30', '11:40:36', 2, 'admin@gmail.com', 'admin'),
(58, '::1', 'http://localhost/quickjobserviceadmin/admin/state', '2025-09-30', '11:43:43', 2, 'admin@gmail.com', 'admin'),
(59, '::1', 'http://localhost/quickjobserviceadmin/admin/state', '2025-09-30', '11:44:24', 2, 'admin@gmail.com', 'admin'),
(60, '::1', 'http://localhost/quickjobserviceadmin/admin/city', '2025-09-30', '11:44:27', 2, 'admin@gmail.com', 'admin'),
(61, '::1', 'http://localhost/quickjobserviceadmin/admin/city', '2025-09-30', '11:45:18', 2, 'admin@gmail.com', 'admin'),
(62, '::1', 'http://localhost/quickjobserviceadmin/admin/city', '2025-09-30', '11:46:28', 2, 'admin@gmail.com', 'admin'),
(63, '::1', 'http://localhost/quickjobserviceadmin/admin/city', '2025-09-30', '11:46:59', 2, 'admin@gmail.com', 'admin'),
(64, '::1', 'http://localhost/quickjobserviceadmin/admin/city', '2025-09-30', '11:47:22', 2, 'admin@gmail.com', 'admin'),
(65, '::1', 'http://localhost/quickjobserviceadmin/admin/category', '2025-09-30', '11:47:31', 2, 'admin@gmail.com', 'admin'),
(66, '::1', 'http://localhost/quickjobserviceadmin/admin/city', '2025-09-30', '11:47:41', 2, 'admin@gmail.com', 'admin'),
(67, '::1', 'http://localhost/quickjobserviceadmin/admin/state', '2025-09-30', '11:47:51', 2, 'admin@gmail.com', 'admin'),
(68, '::1', 'http://localhost/quickjobserviceadmin/admin/state/add', '2025-09-30', '11:47:55', 2, 'admin@gmail.com', 'admin'),
(69, '::1', 'http://localhost/quickjobserviceadmin/admin/state', '2025-09-30', '11:48:01', 2, 'admin@gmail.com', 'admin'),
(70, '::1', 'http://localhost/quickjobserviceadmin/admin/city', '2025-09-30', '11:48:51', 2, 'admin@gmail.com', 'admin'),
(71, '::1', 'http://localhost/quickjobserviceadmin/admin/city', '2025-09-30', '11:49:52', 2, 'admin@gmail.com', 'admin'),
(72, '::1', 'http://localhost/quickjobserviceadmin/admin/city', '2025-09-30', '11:49:56', 2, 'admin@gmail.com', 'admin'),
(73, '::1', 'http://localhost/quickjobserviceadmin/admin/city', '2025-09-30', '11:50:32', 2, 'admin@gmail.com', 'admin'),
(74, '::1', 'http://localhost/quickjobserviceadmin/admin/dashboard', '2025-09-30', '11:50:36', 2, 'admin@gmail.com', 'admin'),
(75, '::1', 'http://localhost/quickjobserviceadmin/admin/city', '2025-09-30', '11:50:49', 2, 'admin@gmail.com', 'admin'),
(76, '::1', 'http://localhost/quickjobserviceadmin/admin/city/add', '2025-09-30', '11:51:01', 2, 'admin@gmail.com', 'admin'),
(77, '::1', 'http://localhost/quickjobserviceadmin/admin/city/add', '2025-09-30', '11:52:12', 2, 'admin@gmail.com', 'admin'),
(78, '::1', 'http://localhost/quickjobserviceadmin/admin/city/add', '2025-09-30', '11:52:37', 2, 'admin@gmail.com', 'admin'),
(79, '::1', 'http://localhost/quickjobserviceadmin/admin/city/add', '2025-09-30', '11:52:43', 2, 'admin@gmail.com', 'admin'),
(80, '::1', 'http://localhost/quickjobserviceadmin/admin/city/add', '2025-09-30', '12:06:30', 2, 'admin@gmail.com', 'admin'),
(81, '::1', 'http://localhost/quickjobserviceadmin/admin/city/add', '2025-09-30', '12:06:41', 2, 'admin@gmail.com', 'admin'),
(82, '::1', 'http://localhost/quickjobserviceadmin/admin/city/add', '2025-09-30', '12:06:55', 2, 'admin@gmail.com', 'admin'),
(83, '::1', 'http://localhost/quickjobserviceadmin/admin/city/add', '2025-09-30', '12:08:13', 2, 'admin@gmail.com', 'admin'),
(84, '::1', 'http://localhost/quickjobserviceadmin/admin/city/add', '2025-09-30', '12:08:33', 2, 'admin@gmail.com', 'admin'),
(85, '::1', 'http://localhost/quickjobserviceadmin/admin/city/add', '2025-09-30', '12:11:37', 2, 'admin@gmail.com', 'admin'),
(86, '::1', 'http://localhost/quickjobserviceadmin/admin/city/add', '2025-09-30', '12:12:26', 2, 'admin@gmail.com', 'admin'),
(87, '::1', 'http://localhost/quickjobserviceadmin/admin/city/add', '2025-09-30', '12:13:08', 2, 'admin@gmail.com', 'admin'),
(88, '::1', 'http://localhost/quickjobserviceadmin/admin/city/add', '2025-09-30', '12:13:38', 2, 'admin@gmail.com', 'admin'),
(89, '::1', 'http://localhost/quickjobserviceadmin/admin/city/add', '2025-09-30', '12:15:04', 2, 'admin@gmail.com', 'admin'),
(90, '::1', 'http://localhost/quickjobserviceadmin/admin/city/add', '2025-09-30', '12:15:35', 2, 'admin@gmail.com', 'admin'),
(91, '::1', 'http://localhost/quickjobserviceadmin/admin/city/add', '2025-09-30', '12:16:00', 2, 'admin@gmail.com', 'admin'),
(92, '::1', 'http://localhost/quickjobserviceadmin/admin/city/add', '2025-09-30', '12:18:58', 2, 'admin@gmail.com', 'admin'),
(93, '::1', 'http://localhost/quickjobserviceadmin/admin/city/add', '2025-09-30', '12:19:13', 2, 'admin@gmail.com', 'admin'),
(94, '::1', 'http://localhost/quickjobserviceadmin/admin/city/add', '2025-09-30', '12:19:45', 2, 'admin@gmail.com', 'admin'),
(95, '::1', 'http://localhost/quickjobserviceadmin/admin/city/add', '2025-09-30', '12:21:37', 2, 'admin@gmail.com', 'admin'),
(96, '::1', 'http://localhost/quickjobserviceadmin/admin/city/add', '2025-09-30', '12:22:09', 2, 'admin@gmail.com', 'admin'),
(97, '::1', 'http://localhost/quickjobserviceadmin/admin/city/add', '2025-09-30', '12:22:45', 2, 'admin@gmail.com', 'admin'),
(98, '::1', 'http://localhost/quickjobserviceadmin/admin/city/edit/603', '2025-09-30', '12:22:56', 2, 'admin@gmail.com', 'admin'),
(99, '::1', 'http://localhost/quickjobserviceadmin/admin/city/edit/603', '2025-09-30', '12:23:13', 2, 'admin@gmail.com', 'admin'),
(100, '::1', 'http://localhost/quickjobserviceadmin/admin/city/add', '2025-09-30', '12:23:17', 2, 'admin@gmail.com', 'admin'),
(101, '::1', 'http://localhost/quickjobserviceadmin/admin/city', '2025-09-30', '12:23:30', 2, 'admin@gmail.com', 'admin'),
(102, '::1', 'http://localhost/quickjobserviceadmin/admin/city', '2025-09-30', '12:25:07', 2, 'admin@gmail.com', 'admin'),
(103, '::1', 'http://localhost/quickjobserviceadmin/admin/city', '2025-09-30', '12:25:18', 2, 'admin@gmail.com', 'admin'),
(104, '::1', 'http://localhost/quickjobserviceadmin/admin/city', '2025-09-30', '12:25:42', 2, 'admin@gmail.com', 'admin'),
(105, '::1', 'http://localhost/quickjobserviceadmin/admin/city', '2025-09-30', '12:25:56', 2, 'admin@gmail.com', 'admin'),
(106, '::1', 'http://localhost/quickjobserviceadmin/admin/city', '2025-09-30', '12:26:03', 2, 'admin@gmail.com', 'admin'),
(107, '::1', 'http://localhost/quickjobserviceadmin/admin/city', '2025-09-30', '12:26:44', 2, 'admin@gmail.com', 'admin'),
(108, '::1', 'http://localhost/quickjobserviceadmin/admin/city', '2025-09-30', '12:33:59', 2, 'admin@gmail.com', 'admin'),
(109, '::1', 'http://localhost/quickjobserviceadmin/admin/city', '2025-09-30', '12:35:08', 2, 'admin@gmail.com', 'admin'),
(110, '::1', 'http://localhost/quickjobserviceadmin/admin/city', '2025-09-30', '12:36:05', 2, 'admin@gmail.com', 'admin'),
(111, '::1', 'http://localhost/quickjobserviceadmin/admin/city', '2025-09-30', '12:38:06', 2, 'admin@gmail.com', 'admin'),
(112, '::1', 'http://localhost/quickjobserviceadmin/admin/city', '2025-09-30', '12:42:36', 2, 'admin@gmail.com', 'admin'),
(113, '::1', 'http://localhost/quickjobserviceadmin/admin/city', '2025-09-30', '12:43:57', 2, 'admin@gmail.com', 'admin'),
(114, '::1', 'http://localhost/quickjobserviceadmin/admin/city', '2025-09-30', '12:45:46', 2, 'admin@gmail.com', 'admin'),
(115, '::1', 'http://localhost/quickjobserviceadmin/admin/city', '2025-09-30', '12:53:37', 2, 'admin@gmail.com', 'admin'),
(116, '::1', 'http://localhost/quickjobserviceadmin/admin/city', '2025-09-30', '13:01:13', 2, 'admin@gmail.com', 'admin'),
(117, '::1', 'http://localhost/quickjobserviceadmin/admin/city', '2025-09-30', '13:12:17', 2, 'admin@gmail.com', 'admin'),
(118, '::1', 'http://localhost/quickjobserviceadmin/admin/city', '2025-09-30', '13:12:22', 2, 'admin@gmail.com', 'admin'),
(119, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-09-30', '13:14:14', 2, 'admin@gmail.com', 'admin'),
(120, '::1', 'http://localhost/quickjobserviceadmin/admin/job/add', '2025-09-30', '13:14:16', 2, 'admin@gmail.com', 'admin'),
(121, '::1', 'http://localhost/quickjobserviceadmin/admin/job/add', '2025-09-30', '13:14:34', 2, 'admin@gmail.com', 'admin'),
(122, '::1', 'http://localhost/quickjobserviceadmin/admin/job/add', '2025-09-30', '13:14:37', 2, 'admin@gmail.com', 'admin'),
(123, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-09-30', '13:14:39', 2, 'admin@gmail.com', 'admin'),
(124, '::1', 'http://localhost/quickjobserviceadmin/admin/job/add', '2025-09-30', '13:14:41', 2, 'admin@gmail.com', 'admin'),
(125, '::1', 'http://localhost/quickjobserviceadmin/admin/city', '2025-09-30', '13:14:47', 2, 'admin@gmail.com', 'admin'),
(126, '::1', 'http://localhost/quickjobserviceadmin/admin/city/add', '2025-09-30', '13:14:49', 2, 'admin@gmail.com', 'admin'),
(127, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-09-30', '13:14:51', 2, 'admin@gmail.com', 'admin'),
(128, '::1', 'http://localhost/quickjobserviceadmin/admin/job/add', '2025-09-30', '13:14:52', 2, 'admin@gmail.com', 'admin'),
(129, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-09-30', '13:14:55', 2, 'admin@gmail.com', 'admin'),
(130, '::1', 'http://localhost/quickjobserviceadmin/admin/dashboard', '2025-09-30', '13:14:59', 2, 'admin@gmail.com', 'admin'),
(131, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-09-30', '13:15:01', 2, 'admin@gmail.com', 'admin'),
(132, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-09-30', '13:15:24', 2, 'admin@gmail.com', 'admin'),
(133, '::1', 'http://localhost/quickjobserviceadmin/admin/dashboard', '2025-09-30', '13:15:30', 2, 'admin@gmail.com', 'admin'),
(134, '::1', 'http://localhost/quickjobserviceadmin/admin/dashboard', '2025-09-30', '13:17:05', 2, 'admin@gmail.com', 'admin'),
(135, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-09-30', '13:17:06', 2, 'admin@gmail.com', 'admin'),
(136, '::1', 'http://localhost/quickjobserviceadmin/admin/job/add', '2025-09-30', '13:17:07', 2, 'admin@gmail.com', 'admin'),
(137, '::1', 'http://localhost/quickjobserviceadmin/admin/dashboard', '2025-09-30', '13:17:54', 2, 'admin@gmail.com', 'admin'),
(138, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-09-30', '13:17:57', 2, 'admin@gmail.com', 'admin'),
(139, '::1', 'http://localhost/quickjobserviceadmin/admin/job/add', '2025-09-30', '13:18:03', 2, 'admin@gmail.com', 'admin'),
(140, '::1', 'http://localhost/quickjobserviceadmin/admin/job/add', '2025-09-30', '13:18:10', 2, 'admin@gmail.com', 'admin'),
(141, '::1', 'http://localhost/quickjobserviceadmin/admin/job/add', '2025-09-30', '13:20:16', 2, 'admin@gmail.com', 'admin'),
(142, '::1', 'http://localhost/quickjobserviceadmin/admin/job/add', '2025-09-30', '13:24:18', 2, 'admin@gmail.com', 'admin'),
(143, '::1', 'http://localhost/quickjobserviceadmin/admin/job_type', '2025-09-30', '13:24:20', 2, 'admin@gmail.com', 'admin'),
(144, '::1', 'http://localhost/quickjobserviceadmin/admin/job_type/add', '2025-09-30', '13:24:22', 2, 'admin@gmail.com', 'admin'),
(145, '::1', 'http://localhost/quickjobserviceadmin/admin/job_type', '2025-09-30', '13:24:29', 2, 'admin@gmail.com', 'admin'),
(146, '::1', 'http://localhost/quickjobserviceadmin/admin/job_type/add', '2025-09-30', '13:24:31', 2, 'admin@gmail.com', 'admin'),
(147, '::1', 'http://localhost/quickjobserviceadmin/admin/job_type', '2025-09-30', '13:24:37', 2, 'admin@gmail.com', 'admin'),
(148, '::1', 'http://localhost/quickjobserviceadmin/admin/job_type/add', '2025-09-30', '13:24:42', 2, 'admin@gmail.com', 'admin'),
(149, '::1', 'http://localhost/quickjobserviceadmin/admin/job_type', '2025-09-30', '13:24:44', 2, 'admin@gmail.com', 'admin'),
(150, '::1', 'http://localhost/quickjobserviceadmin/admin/job_type/edit/3', '2025-09-30', '13:24:52', 2, 'admin@gmail.com', 'admin'),
(151, '::1', 'http://localhost/quickjobserviceadmin/admin/job_type', '2025-09-30', '13:24:54', 2, 'admin@gmail.com', 'admin'),
(152, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-09-30', '13:25:38', 2, 'admin@gmail.com', 'admin'),
(153, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-09-30', '13:27:46', 2, 'admin@gmail.com', 'admin'),
(154, '::1', 'http://localhost/quickjobserviceadmin/admin/skills', '2025-09-30', '13:28:24', 2, 'admin@gmail.com', 'admin'),
(155, '::1', 'http://localhost/quickjobserviceadmin/admin/skills/add', '2025-09-30', '13:28:26', 2, 'admin@gmail.com', 'admin'),
(156, '::1', 'http://localhost/quickjobserviceadmin/admin/skills', '2025-09-30', '13:28:51', 2, 'admin@gmail.com', 'admin'),
(157, '::1', 'http://localhost/quickjobserviceadmin/admin/skills/add', '2025-09-30', '13:28:59', 2, 'admin@gmail.com', 'admin'),
(158, '::1', 'http://localhost/quickjobserviceadmin/admin/skills', '2025-09-30', '13:29:00', 2, 'admin@gmail.com', 'admin'),
(159, '::1', 'http://localhost/quickjobserviceadmin/admin/skills/add', '2025-09-30', '13:29:06', 2, 'admin@gmail.com', 'admin'),
(160, '::1', 'http://localhost/quickjobserviceadmin/admin/skills', '2025-09-30', '13:29:08', 2, 'admin@gmail.com', 'admin'),
(161, '::1', 'http://localhost/quickjobserviceadmin/admin/skills/add', '2025-09-30', '13:29:16', 2, 'admin@gmail.com', 'admin'),
(162, '::1', 'http://localhost/quickjobserviceadmin/admin/skills', '2025-09-30', '13:29:18', 2, 'admin@gmail.com', 'admin'),
(163, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-09-30', '13:30:08', 2, 'admin@gmail.com', 'admin'),
(164, '::1', 'http://localhost/quickjobserviceadmin/admin/job/add', '2025-09-30', '13:30:19', 2, 'admin@gmail.com', 'admin'),
(165, '::1', 'http://localhost/quickjobserviceadmin/admin/job/add', '2025-09-30', '13:31:16', 2, 'admin@gmail.com', 'admin'),
(166, '::1', 'http://localhost/quickjobserviceadmin/admin/job/add', '2025-09-30', '13:31:55', 2, 'admin@gmail.com', 'admin'),
(167, '::1', 'http://localhost/quickjobserviceadmin/admin/job/add', '2025-09-30', '14:24:48', 2, 'admin@gmail.com', 'admin'),
(168, '::1', 'http://localhost/quickjobserviceadmin/admin/job/add', '2025-09-30', '14:25:04', 2, 'admin@gmail.com', 'admin'),
(169, '::1', 'http://localhost/quickjobserviceadmin/admin/job/add', '2025-09-30', '14:25:33', 2, 'admin@gmail.com', 'admin'),
(170, '::1', 'http://localhost/quickjobserviceadmin/admin/job/add', '2025-09-30', '14:25:41', 2, 'admin@gmail.com', 'admin'),
(171, '::1', 'http://localhost/quickjobserviceadmin/admin/job/add', '2025-09-30', '14:26:11', 2, 'admin@gmail.com', 'admin'),
(172, '::1', 'http://localhost/quickjobserviceadmin/admin/job/add', '2025-09-30', '14:28:38', 2, 'admin@gmail.com', 'admin'),
(173, '::1', 'http://localhost/quickjobserviceadmin/admin/job/add', '2025-09-30', '14:31:16', 2, 'admin@gmail.com', 'admin'),
(174, '::1', 'http://localhost/quickjobserviceadmin/admin/job/add', '2025-09-30', '14:32:04', 2, 'admin@gmail.com', 'admin'),
(175, '::1', 'http://localhost/quickjobserviceadmin/admin/job/add', '2025-09-30', '14:37:15', 2, 'admin@gmail.com', 'admin'),
(176, '::1', 'http://localhost/quickjobserviceadmin/admin/job/add', '2025-09-30', '14:43:00', 2, 'admin@gmail.com', 'admin'),
(177, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-09-30', '14:43:16', 2, 'admin@gmail.com', 'admin'),
(178, '::1', 'http://localhost/quickjobserviceadmin/admin/job/edit/1', '2025-09-30', '14:43:37', 2, 'admin@gmail.com', 'admin'),
(179, '::1', 'http://localhost/quickjobserviceadmin/admin/job/edit/1', '2025-09-30', '14:46:22', 2, 'admin@gmail.com', 'admin'),
(180, '::1', 'http://localhost/quickjobserviceadmin/admin/job/add', '2025-09-30', '14:46:27', 2, 'admin@gmail.com', 'admin'),
(181, '::1', 'http://localhost/quickjobserviceadmin/admin/job/edit/1', '2025-09-30', '14:46:30', 2, 'admin@gmail.com', 'admin'),
(182, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-09-30', '14:46:35', 2, 'admin@gmail.com', 'admin'),
(183, '::1', 'http://localhost/quickjobserviceadmin/admin/job/edit/1', '2025-09-30', '14:46:37', 2, 'admin@gmail.com', 'admin'),
(184, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-09-30', '14:46:54', 2, 'admin@gmail.com', 'admin'),
(185, '::1', 'http://localhost/quickjobserviceadmin/admin/job/edit/1', '2025-09-30', '14:46:56', 2, 'admin@gmail.com', 'admin'),
(186, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-09-30', '14:47:10', 2, 'admin@gmail.com', 'admin'),
(187, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-09-30', '14:48:01', 2, 'admin@gmail.com', 'admin'),
(188, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-09-30', '14:49:14', 2, 'admin@gmail.com', 'admin'),
(189, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-09-30', '14:49:24', 2, 'admin@gmail.com', 'admin'),
(190, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-09-30', '14:50:02', 2, 'admin@gmail.com', 'admin'),
(191, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-09-30', '14:50:14', 2, 'admin@gmail.com', 'admin'),
(192, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-09-30', '14:50:25', 2, 'admin@gmail.com', 'admin'),
(193, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-09-30', '14:50:59', 2, 'admin@gmail.com', 'admin'),
(194, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-09-30', '14:51:12', 2, 'admin@gmail.com', 'admin'),
(195, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-09-30', '14:51:23', 2, 'admin@gmail.com', 'admin'),
(196, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-09-30', '14:51:30', 2, 'admin@gmail.com', 'admin'),
(197, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-09-30', '14:51:42', 2, 'admin@gmail.com', 'admin'),
(198, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-09-30', '14:51:49', 2, 'admin@gmail.com', 'admin'),
(199, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-09-30', '14:52:44', 2, 'admin@gmail.com', 'admin'),
(200, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-09-30', '14:52:54', 2, 'admin@gmail.com', 'admin'),
(201, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-09-30', '14:53:52', 2, 'admin@gmail.com', 'admin'),
(202, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-09-30', '14:55:16', 2, 'admin@gmail.com', 'admin'),
(203, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-09-30', '14:55:47', 2, 'admin@gmail.com', 'admin'),
(204, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-09-30', '14:56:18', 2, 'admin@gmail.com', 'admin'),
(205, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-09-30', '14:56:27', 2, 'admin@gmail.com', 'admin'),
(206, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-09-30', '14:57:38', 2, 'admin@gmail.com', 'admin'),
(207, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-09-30', '14:59:29', 2, 'admin@gmail.com', 'admin'),
(208, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-09-30', '14:59:43', 2, 'admin@gmail.com', 'admin'),
(209, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-09-30', '14:59:48', 2, 'admin@gmail.com', 'admin'),
(210, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-09-30', '14:59:54', 2, 'admin@gmail.com', 'admin'),
(211, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-09-30', '15:00:08', 2, 'admin@gmail.com', 'admin'),
(212, '::1', 'http://localhost/quickjobserviceadmin/admin/job/edit/1', '2025-09-30', '15:00:10', 2, 'admin@gmail.com', 'admin'),
(213, '::1', 'http://localhost/quickjobserviceadmin/admin/job/edit/1', '2025-09-30', '16:22:07', 2, 'admin@gmail.com', 'admin'),
(214, '::1', 'http://localhost/quickjobserviceadmin/admin/dashboard', '2025-10-03', '10:47:40', 2, 'admin@gmail.com', 'admin'),
(215, '::1', 'http://localhost/quickjobserviceadmin/admin/dashboard', '2025-10-03', '11:08:22', 2, 'admin@gmail.com', 'admin'),
(216, '::1', 'http://localhost/quickjobserviceadmin/admin/dashboard', '2025-10-03', '11:09:15', 2, 'admin@gmail.com', 'admin'),
(217, '::1', 'http://localhost/quickjobserviceadmin/admin/dashboard', '2025-10-03', '11:13:39', 2, 'admin@gmail.com', 'admin'),
(218, '::1', 'http://localhost/quickjobserviceadmin/admin/content/edit/1', '2025-10-03', '11:13:41', 2, 'admin@gmail.com', 'admin'),
(219, '::1', 'http://localhost/quickjobserviceadmin/admin/content/edit/1', '2025-10-03', '11:14:36', 2, 'admin@gmail.com', 'admin'),
(220, '::1', 'http://localhost/quickjobserviceadmin/admin/content/edit/1', '2025-10-03', '11:14:43', 2, 'admin@gmail.com', 'admin'),
(221, '::1', 'http://localhost/quickjobserviceadmin/admin/content/edit/1', '2025-10-03', '11:15:03', 2, 'admin@gmail.com', 'admin'),
(222, '::1', 'http://localhost/quickjobserviceadmin/admin/content/edit/1', '2025-10-03', '11:15:26', 2, 'admin@gmail.com', 'admin'),
(223, '::1', 'http://localhost/quickjobserviceadmin/admin/content/edit/2', '2025-10-03', '11:17:25', 2, 'admin@gmail.com', 'admin'),
(224, '::1', 'http://localhost/quickjobserviceadmin/admin/content/edit/2', '2025-10-03', '11:17:28', 2, 'admin@gmail.com', 'admin'),
(225, '::1', 'http://localhost/quickjobserviceadmin/admin/content/edit/1', '2025-10-03', '11:17:43', 2, 'admin@gmail.com', 'admin'),
(226, '::1', 'http://localhost/quickjobserviceadmin/admin/content/edit/1', '2025-10-03', '11:18:01', 2, 'admin@gmail.com', 'admin'),
(227, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-10-03', '11:19:31', 2, 'admin@gmail.com', 'admin'),
(228, '::1', 'http://localhost/quickjobserviceadmin/admin/job/edit/1', '2025-10-03', '11:19:34', 2, 'admin@gmail.com', 'admin'),
(229, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-10-03', '11:21:56', 2, 'admin@gmail.com', 'admin'),
(230, '::1', 'http://localhost/quickjobserviceadmin/admin/job/edit/1', '2025-10-03', '11:22:51', 2, 'admin@gmail.com', 'admin'),
(231, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-10-03', '11:22:52', 2, 'admin@gmail.com', 'admin'),
(232, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-10-03', '11:23:01', 2, 'admin@gmail.com', 'admin'),
(233, '::1', 'http://localhost/quickjobserviceadmin/admin/site_setting/edit/1', '2025-10-03', '11:23:45', 2, 'admin@gmail.com', 'admin'),
(234, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-10-03', '11:52:36', 2, 'admin@gmail.com', 'admin'),
(235, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-10-03', '12:33:35', 2, 'admin@gmail.com', 'admin'),
(236, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-10-03', '13:13:35', 2, 'admin@gmail.com', 'admin'),
(237, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-10-03', '13:16:25', 2, 'admin@gmail.com', 'admin'),
(238, '::1', 'http://localhost/quickjobserviceadmin/admin/job/edit/1', '2025-10-03', '13:16:27', 2, 'admin@gmail.com', 'admin'),
(239, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-10-03', '13:16:34', 2, 'admin@gmail.com', 'admin'),
(240, '::1', 'http://localhost/quickjobserviceadmin/admin/job/edit/1', '2025-10-03', '13:16:35', 2, 'admin@gmail.com', 'admin'),
(241, '::1', 'http://localhost/quickjobserviceadmin/admin/job/edit/1', '2025-10-03', '13:18:34', 2, 'admin@gmail.com', 'admin'),
(242, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-10-03', '13:19:34', 2, 'admin@gmail.com', 'admin'),
(243, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-10-03', '13:20:13', 2, 'admin@gmail.com', 'admin'),
(244, '::1', 'http://localhost/quickjobserviceadmin/admin/job/edit/1', '2025-10-03', '14:57:55', 2, 'admin@gmail.com', 'admin'),
(245, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-10-03', '14:59:48', 2, 'admin@gmail.com', 'admin'),
(246, '::1', 'http://localhost/quickjobserviceadmin/admin/job/edit/1', '2025-10-03', '14:59:50', 2, 'admin@gmail.com', 'admin'),
(247, '::1', 'http://localhost/quickjobserviceadmin/admin/job/edit/1', '2025-10-03', '15:00:11', 2, 'admin@gmail.com', 'admin'),
(248, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-10-03', '15:00:18', 2, 'admin@gmail.com', 'admin'),
(249, '::1', 'http://localhost/quickjobserviceadmin/admin/job/edit/1', '2025-10-03', '15:01:34', 2, 'admin@gmail.com', 'admin'),
(250, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-10-03', '15:01:38', 2, 'admin@gmail.com', 'admin'),
(251, '::1', 'http://localhost/quickjobserviceadmin/admin/job/edit/1', '2025-10-03', '15:01:56', 2, 'admin@gmail.com', 'admin'),
(252, '::1', 'http://localhost/quickjobserviceadmin/admin/job/edit/1', '2025-10-03', '15:02:39', 2, 'admin@gmail.com', 'admin'),
(253, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-10-03', '15:02:47', 2, 'admin@gmail.com', 'admin'),
(254, '::1', 'http://localhost/quickjobserviceadmin/admin/job/edit/1', '2025-10-03', '15:29:04', 2, 'admin@gmail.com', 'admin'),
(255, '::1', 'http://localhost/quickjobserviceadmin/admin/job/edit/1', '2025-10-03', '15:29:25', 2, 'admin@gmail.com', 'admin'),
(256, '::1', 'http://localhost/quickjobserviceadmin/admin/job/edit/1', '2025-10-03', '15:30:02', 2, 'admin@gmail.com', 'admin'),
(257, '::1', 'http://localhost/quickjobserviceadmin/admin/job', '2025-10-03', '15:44:31', 2, 'admin@gmail.com', 'admin'),
(258, '::1', 'http://localhost/quickjobserviceadmin/admin/job/edit/1', '2025-10-03', '15:44:49', 2, 'admin@gmail.com', 'admin'),
(259, '::1', 'http://localhost/quickjobserviceadmin/admin/job/edit/1', '2025-10-03', '15:51:48', 2, 'admin@gmail.com', 'admin'),
(260, '::1', 'http://localhost/quickjobserviceadmin/admin/apply_now', '2025-10-03', '15:52:21', 2, 'admin@gmail.com', 'admin'),
(261, '::1', 'http://localhost/quickjobserviceadmin/admin/apply_now', '2025-10-03', '15:52:34', 2, 'admin@gmail.com', 'admin'),
(262, '::1', 'http://localhost/quickjobserviceadmin/admin/apply_now', '2025-10-03', '15:52:49', 2, 'admin@gmail.com', 'admin'),
(263, '::1', 'http://localhost/quickjobserviceadmin/admin/apply_now', '2025-10-03', '15:53:00', 2, 'admin@gmail.com', 'admin'),
(264, '::1', 'http://localhost/quickjobserviceadmin/admin/apply_now', '2025-10-03', '15:53:15', 2, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `apply_now`
--

CREATE TABLE `apply_now` (
  `id` int(11) NOT NULL,
  `applyfor` text NOT NULL,
  `name` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `mobile` text DEFAULT NULL,
  `message` text DEFAULT NULL,
  `addeddate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apply_now`
--

INSERT INTO `apply_now` (`id`, `applyfor`, `name`, `email`, `mobile`, `message`, `addeddate`) VALUES
(5, 'Nursery Teacher Training Recruitment 2025', 'Spiderman', 'Rahuljain@gmail.com', '01234645654', 'asdd', '2025-10-03 15:51:38');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `image` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `content` blob DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `addeddate` datetime DEFAULT NULL,
  `modifieddate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `image` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `addeddate` datetime DEFAULT NULL,
  `modifieddate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `image`, `name`, `slug`, `status`, `addeddate`, `modifieddate`) VALUES
(1, NULL, 'Government Sector Jobs', 'government-sector-jobs', 1, '2025-09-30 11:08:09', '2025-09-30 11:08:34'),
(2, NULL, 'Private Sector Jobs', 'private-sector-jobs', 1, '2025-09-30 11:08:50', NULL),
(3, NULL, 'Pan-India Coverage', 'pan-india-coverage', 1, '2025-09-30 11:08:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `country_id` int(11) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `name` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `addeddate` datetime DEFAULT NULL,
  `modifieddate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `country_id`, `state_id`, `name`, `slug`, `status`, `addeddate`, `modifieddate`) VALUES
(1, 99, 32, 'North and Middle Andaman', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 99, 32, 'South Andaman', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 99, 32, 'Nicobar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 99, 1, 'Adilabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 99, 1, 'Anantapur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 99, 1, 'Chittoor', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 99, 1, 'East Godavari', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 99, 1, 'Guntur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 99, 1, 'Hyderabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 99, 1, 'Kadapa', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 99, 1, 'Karimnagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 99, 1, 'Khammam', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 99, 1, 'Krishna', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 99, 1, 'Kurnool', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 99, 1, 'Mahbubnagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 99, 1, 'Medak', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 99, 1, 'Nalgonda', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 99, 1, 'Nellore', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 99, 1, 'Nizamabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 99, 1, 'Prakasam', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 99, 1, 'Rangareddi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 99, 1, 'Srikakulam', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 99, 1, 'Vishakhapatnam', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 99, 1, 'Vizianagaram', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 99, 1, 'Warangal', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 99, 1, 'West Godavari', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 99, 3, 'Anjaw', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 99, 3, 'Changlang', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 99, 3, 'East Kameng', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 99, 3, 'Lohit', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 99, 3, 'Lower Subansiri', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 99, 3, 'Papum Pare', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 99, 3, 'Tirap', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 99, 3, 'Dibang Valley', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 99, 3, 'Upper Subansiri', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 99, 3, 'West Kameng', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 99, 2, 'Barpeta', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 99, 2, 'Bongaigaon', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 99, 2, 'Cachar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 99, 2, 'Darrang', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 99, 2, 'Dhemaji', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 99, 2, 'Dhubri', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 99, 2, 'Dibrugarh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 99, 2, 'Goalpara', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 99, 2, 'Golaghat', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 99, 2, 'Hailakandi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 99, 2, 'Jorhat', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 99, 2, 'Karbi Anglong', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 99, 2, 'Karimganj', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 99, 2, 'Kokrajhar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 99, 2, 'Lakhimpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 99, 2, 'Marigaon', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 99, 2, 'Nagaon', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 99, 2, 'Nalbari', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 99, 2, 'North Cachar Hills', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 99, 2, 'Sibsagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 99, 2, 'Sonitpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 99, 2, 'Tinsukia', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 99, 4, 'Araria', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 99, 4, 'Aurangabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 99, 4, 'Banka', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 99, 4, 'Begusarai', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 99, 4, 'Bhagalpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 99, 4, 'Bhojpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 99, 4, 'Buxar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 99, 4, 'Darbhanga', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 99, 4, 'Purba Champaran', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 99, 4, 'Gaya', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, 99, 4, 'Gopalganj', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, 99, 4, 'Jamui', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 99, 4, 'Jehanabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 99, 4, 'Khagaria', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, 99, 4, 'Kishanganj', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, 99, 4, 'Kaimur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, 99, 4, 'Katihar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, 99, 4, 'Lakhisarai', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, 99, 4, 'Madhubani', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, 99, 4, 'Munger', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, 99, 4, 'Madhepura', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, 99, 4, 'Muzaffarpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, 99, 4, 'Nalanda', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, 99, 4, 'Nawada', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, 99, 4, 'Patna', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, 99, 4, 'Purnia', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, 99, 4, 'Rohtas', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, 99, 4, 'Saharsa', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 99, 4, 'Samastipur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, 99, 4, 'Sheohar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, 99, 4, 'Sheikhpura', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, 99, 4, 'Saran', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, 99, 4, 'Sitamarhi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, 99, 4, 'Supaul', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, 99, 4, 'Siwan', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, 99, 4, 'Vaishali', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, 99, 4, 'Pashchim Champaran', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(96, 99, 36, 'Bastar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(97, 99, 36, 'Bilaspur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(98, 99, 36, 'Dantewada', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99, 99, 36, 'Dhamtari', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(100, 99, 36, 'Durg', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(101, 99, 36, 'Jashpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(102, 99, 36, 'Janjgir-Champa', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(103, 99, 36, 'Korba', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(104, 99, 36, 'Koriya', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(105, 99, 36, 'Kanker', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(106, 99, 36, 'Kawardha', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(107, 99, 36, 'Mahasamund', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(108, 99, 36, 'Raigarh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(109, 99, 36, 'Rajnandgaon', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(110, 99, 36, 'Raipur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(111, 99, 36, 'Surguja', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(112, 99, 29, 'Diu', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(113, 99, 29, 'Daman', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(114, 99, 25, 'Central Delhi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(115, 99, 25, 'East Delhi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(116, 99, 25, 'New Delhi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(117, 99, 25, 'North Delhi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(118, 99, 25, 'North East Delhi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(119, 99, 25, 'North West Delhi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(120, 99, 25, 'South Delhi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(121, 99, 25, 'South West Delhi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(122, 99, 25, 'West Delhi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(123, 99, 26, 'North Goa', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(124, 99, 26, 'South Goa', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(125, 99, 5, 'Ahmedabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(126, 99, 5, 'Amreli District', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(127, 99, 5, 'Anand', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(128, 99, 5, 'Banaskantha', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(129, 99, 5, 'Bharuch', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(130, 99, 5, 'Bhavnagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(131, 99, 5, 'Dahod', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(132, 99, 5, 'The Dangs', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(133, 99, 5, 'Gandhinagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(134, 99, 5, 'Jamnagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(135, 99, 5, 'Junagadh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(136, 99, 5, 'Kutch', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(137, 99, 5, 'Kheda', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(138, 99, 5, 'Mehsana', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(139, 99, 5, 'Narmada', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(140, 99, 5, 'Navsari', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(141, 99, 5, 'Patan', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(142, 99, 5, 'Panchmahal', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(143, 99, 5, 'Porbandar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(144, 99, 5, 'Rajkot', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(145, 99, 5, 'Sabarkantha', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(146, 99, 5, 'Surendranagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(147, 99, 5, 'Surat', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(148, 99, 5, 'Vadodara', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(149, 99, 5, 'Valsad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(150, 99, 6, 'Ambala', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(151, 99, 6, 'Bhiwani', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(152, 99, 6, 'Faridabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(153, 99, 6, 'Fatehabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(154, 99, 6, 'Gurgaon', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(155, 99, 6, 'Hissar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(156, 99, 6, 'Jhajjar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(157, 99, 6, 'Jind', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(158, 99, 6, 'Karnal', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(159, 99, 6, 'Kaithal', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(160, 99, 6, 'Kurukshetra', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(161, 99, 6, 'Mahendragarh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(162, 99, 6, 'Mewat', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(163, 99, 6, 'Panchkula', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(164, 99, 6, 'Panipat', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(165, 99, 6, 'Rewari', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(166, 99, 6, 'Rohtak', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(167, 99, 6, 'Sirsa', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(168, 99, 6, 'Sonepat', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(169, 99, 6, 'Yamuna Nagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(170, 99, 6, 'Palwal', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(171, 99, 7, 'Bilaspur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(172, 99, 7, 'Chamba', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(173, 99, 7, 'Hamirpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(174, 99, 7, 'Kangra', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(175, 99, 7, 'Kinnaur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(176, 99, 7, 'Kulu', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(177, 99, 7, 'Lahaul and Spiti', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(178, 99, 7, 'Mandi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(179, 99, 7, 'Shimla', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(180, 99, 7, 'Sirmaur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(181, 99, 7, 'Solan', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(182, 99, 7, 'Una', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(183, 99, 8, 'Anantnag', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(184, 99, 8, 'Badgam', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(185, 99, 8, 'Bandipore', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(186, 99, 8, 'Baramula', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(187, 99, 8, 'Doda', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(188, 99, 8, 'Jammu', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(189, 99, 8, 'Kargil', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(190, 99, 8, 'Kathua', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(191, 99, 8, 'Kupwara', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(192, 99, 8, 'Leh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(193, 99, 8, 'Poonch', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(194, 99, 8, 'Pulwama', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(195, 99, 8, 'Rajauri', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(196, 99, 8, 'Srinagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(197, 99, 8, 'Samba', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(198, 99, 8, 'Udhampur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(199, 99, 34, 'Bokaro', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(200, 99, 34, 'Chatra', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(201, 99, 34, 'Deoghar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(202, 99, 34, 'Dhanbad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(203, 99, 34, 'Dumka', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(204, 99, 34, 'Purba Singhbhum', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(205, 99, 34, 'Garhwa', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(206, 99, 34, 'Giridih', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(207, 99, 34, 'Godda', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(208, 99, 34, 'Gumla', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(209, 99, 34, 'Hazaribagh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(210, 99, 34, 'Koderma', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(211, 99, 34, 'Lohardaga', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(212, 99, 34, 'Pakur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(213, 99, 34, 'Palamu', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(214, 99, 34, 'Ranchi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(215, 99, 34, 'Sahibganj', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(216, 99, 34, 'Seraikela and Kharsawan', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(217, 99, 34, 'Pashchim Singhbhum', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(218, 99, 34, 'Ramgarh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(219, 99, 9, 'Bidar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(220, 99, 9, 'Belgaum', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(221, 99, 9, 'Bijapur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(222, 99, 9, 'Bagalkot', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(223, 99, 9, 'Bellary', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(224, 99, 9, 'Bangalore Rural District', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(225, 99, 9, 'Bangalore Urban District', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(226, 99, 9, 'Chamarajnagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(227, 99, 9, 'Chikmagalur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(228, 99, 9, 'Chitradurga', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(229, 99, 9, 'Davanagere', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(230, 99, 9, 'Dharwad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(231, 99, 9, 'Dakshina Kannada', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(232, 99, 9, 'Gadag', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(233, 99, 9, 'Gulbarga', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(234, 99, 9, 'Hassan', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(235, 99, 9, 'Haveri District', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(236, 99, 9, 'Kodagu', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(237, 99, 9, 'Kolar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(238, 99, 9, 'Koppal', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(239, 99, 9, 'Mandya', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(240, 99, 9, 'Mysore', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(241, 99, 9, 'Raichur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(242, 99, 9, 'Shimoga', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(243, 99, 9, 'Tumkur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(244, 99, 9, 'Udupi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(245, 99, 9, 'Uttara Kannada', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(246, 99, 9, 'Ramanagara', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(247, 99, 9, 'Chikballapur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(248, 99, 9, 'Yadagiri', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(249, 99, 10, 'Alappuzha', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(250, 99, 10, 'Ernakulam', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(251, 99, 10, 'Idukki', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(252, 99, 10, 'Kollam', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(253, 99, 10, 'Kannur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(254, 99, 10, 'Kasaragod', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(255, 99, 10, 'Kottayam', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(256, 99, 10, 'Kozhikode', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(257, 99, 10, 'Malappuram', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(258, 99, 10, 'Palakkad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(259, 99, 10, 'Pathanamthitta', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(260, 99, 10, 'Thrissur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(261, 99, 10, 'Thiruvananthapuram', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(262, 99, 10, 'Wayanad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(263, 99, 11, 'Alirajpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(264, 99, 11, 'Anuppur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(265, 99, 11, 'Ashok Nagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(266, 99, 11, 'Balaghat', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(267, 99, 11, 'Barwani', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(268, 99, 11, 'Betul', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(269, 99, 11, 'Bhind', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(270, 99, 11, 'Bhopal', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(271, 99, 11, 'Burhanpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(272, 99, 11, 'Chhatarpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(273, 99, 11, 'Chhindwara', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(274, 99, 11, 'Damoh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(275, 99, 11, 'Datia', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(276, 99, 11, 'Dewas', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(277, 99, 11, 'Dhar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(278, 99, 11, 'Dindori', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(279, 99, 11, 'Guna', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(280, 99, 11, 'Gwalior', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(281, 99, 11, 'Harda', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(282, 99, 11, 'Hoshangabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(283, 99, 11, 'Indore', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(284, 99, 11, 'Jabalpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(285, 99, 11, 'Jhabua', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(286, 99, 11, 'Katni', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(287, 99, 11, 'Khandwa', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(288, 99, 11, 'Khargone', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(289, 99, 11, 'Mandla', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(290, 99, 11, 'Mandsaur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(291, 99, 11, 'Morena', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(292, 99, 11, 'Narsinghpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(293, 99, 11, 'Neemuch', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(294, 99, 11, 'Panna', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(295, 99, 11, 'Rewa', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(296, 99, 11, 'Rajgarh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(297, 99, 11, 'Ratlam', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(298, 99, 11, 'Raisen', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(299, 99, 11, 'Sagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(300, 99, 11, 'Satna', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(301, 99, 11, 'Sehore', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(302, 99, 11, 'Seoni', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(303, 99, 11, 'Shahdol', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(304, 99, 11, 'Shajapur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(305, 99, 11, 'Sheopur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(306, 99, 11, 'Shivpuri', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(307, 99, 11, 'Sidhi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(308, 99, 11, 'Singrauli', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(309, 99, 11, 'Tikamgarh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(310, 99, 11, 'Ujjain', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(311, 99, 11, 'Umaria', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(312, 99, 11, 'Vidisha', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(313, 99, 12, 'Ahmednagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(314, 99, 12, 'Akola', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(315, 99, 12, 'Amrawati', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(316, 99, 12, 'Aurangabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(317, 99, 12, 'Bhandara', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(318, 99, 12, 'Beed', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(319, 99, 12, 'Buldhana', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(320, 99, 12, 'Chandrapur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(321, 99, 12, 'Dhule', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(322, 99, 12, 'Gadchiroli', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(323, 99, 12, 'Gondiya', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(324, 99, 12, 'Hingoli', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(325, 99, 12, 'Jalgaon', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(326, 99, 12, 'Jalna', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(327, 99, 12, 'Kolhapur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(328, 99, 12, 'Latur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(329, 99, 12, 'Mumbai City', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(330, 99, 12, 'Mumbai suburban', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(331, 99, 12, 'Nandurbar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(332, 99, 12, 'Nanded', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(333, 99, 12, 'Nagpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(334, 99, 12, 'Nashik', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(335, 99, 12, 'Osmanabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(336, 99, 12, 'Parbhani', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(337, 99, 12, 'Pune', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(338, 99, 12, 'Raigad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(339, 99, 12, 'Ratnagiri', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(340, 99, 12, 'Sindhudurg', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(341, 99, 12, 'Sangli', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(342, 99, 12, 'Solapur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(343, 99, 12, 'Satara', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(344, 99, 12, 'Thane', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(345, 99, 12, 'Wardha', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(346, 99, 12, 'Washim', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(347, 99, 12, 'Yavatmal', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(348, 99, 13, 'Bishnupur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(349, 99, 13, 'Churachandpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(350, 99, 13, 'Chandel', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(351, 99, 13, 'Imphal East', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(352, 99, 13, 'Senapati', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(353, 99, 13, 'Tamenglong', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(354, 99, 13, 'Thoubal', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(355, 99, 13, 'Ukhrul', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(356, 99, 13, 'Imphal West', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(357, 99, 14, 'East Garo Hills', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(358, 99, 14, 'East Khasi Hills', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(359, 99, 14, 'Jaintia Hills', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(360, 99, 14, 'Ri-Bhoi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(361, 99, 14, 'South Garo Hills', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(362, 99, 14, 'West Garo Hills', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(363, 99, 14, 'West Khasi Hills', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(364, 99, 15, 'Aizawl', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(365, 99, 15, 'Champhai', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(366, 99, 15, 'Kolasib', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(367, 99, 15, 'Lawngtlai', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(368, 99, 15, 'Lunglei', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(369, 99, 15, 'Mamit', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(370, 99, 15, 'Saiha', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(371, 99, 15, 'Serchhip', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(372, 99, 16, 'Dimapur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(373, 99, 16, 'Kohima', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(374, 99, 16, 'Mokokchung', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(375, 99, 16, 'Mon', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(376, 99, 16, 'Phek', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(377, 99, 16, 'Tuensang', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(378, 99, 16, 'Wokha', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(379, 99, 16, 'Zunheboto', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(380, 99, 17, 'Angul', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(381, 99, 17, 'Boudh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(382, 99, 17, 'Bhadrak', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(383, 99, 17, 'Bolangir', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(384, 99, 17, 'Bargarh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(385, 99, 17, 'Baleswar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(386, 99, 17, 'Cuttack', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(387, 99, 17, 'Debagarh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(388, 99, 17, 'Dhenkanal', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(389, 99, 17, 'Ganjam', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(390, 99, 17, 'Gajapati', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(391, 99, 17, 'Jharsuguda', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(392, 99, 17, 'Jajapur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(393, 99, 17, 'Jagatsinghpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(394, 99, 17, 'Khordha', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(395, 99, 17, 'Kendujhar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(396, 99, 17, 'Kalahandi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(397, 99, 17, 'Kandhamal', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(398, 99, 17, 'Koraput', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(399, 99, 17, 'Kendrapara', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(400, 99, 17, 'Malkangiri', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(401, 99, 17, 'Mayurbhanj', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(402, 99, 17, 'Nabarangpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(403, 99, 17, 'Nuapada', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(404, 99, 17, 'Nayagarh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(405, 99, 17, 'Puri', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(406, 99, 17, 'Rayagada', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(407, 99, 17, 'Sambalpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(408, 99, 17, 'Subarnapur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(409, 99, 17, 'Sundargarh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(410, 99, 27, 'Karaikal', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(411, 99, 27, 'Mahe', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(412, 99, 27, 'Puducherry', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(413, 99, 27, 'Yanam', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(414, 99, 18, 'Amritsar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(415, 99, 18, 'Bathinda', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(416, 99, 18, 'Firozpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(417, 99, 18, 'Faridkot', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(418, 99, 18, 'Fatehgarh Sahib', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(419, 99, 18, 'Gurdaspur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(420, 99, 18, 'Hoshiarpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(421, 99, 18, 'Jalandhar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(422, 99, 18, 'Kapurthala', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(423, 99, 18, 'Ludhiana', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(424, 99, 18, 'Mansa', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(425, 99, 18, 'Moga', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(426, 99, 18, 'Mukatsar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(427, 99, 18, 'Nawan Shehar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(428, 99, 18, 'Patiala', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(429, 99, 18, 'Rupnagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(430, 99, 18, 'Sangrur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(431, 99, 19, 'Ajmer', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(432, 99, 19, 'Alwar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(433, 99, 19, 'Bikaner', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(434, 99, 19, 'Barmer', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(435, 99, 19, 'Banswara', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(436, 99, 19, 'Bharatpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(437, 99, 19, 'Baran', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(438, 99, 19, 'Bundi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(439, 99, 19, 'Bhilwara', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(440, 99, 19, 'Churu', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(441, 99, 19, 'Chittorgarh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(442, 99, 19, 'Dausa', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(443, 99, 19, 'Dholpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(444, 99, 19, 'Dungapur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(445, 99, 19, 'Ganganagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(446, 99, 19, 'Hanumangarh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(447, 99, 19, 'Juhnjhunun', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(448, 99, 19, 'Jalore', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(449, 99, 19, 'Jodhpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(450, 99, 19, 'Jaipur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(451, 99, 19, 'Jaisalmer', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(452, 99, 19, 'Jhalawar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(453, 99, 19, 'Karauli', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(454, 99, 19, 'Kota', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(455, 99, 19, 'Nagaur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(456, 99, 19, 'Pali', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(457, 99, 19, 'Pratapgarh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(458, 99, 19, 'Rajsamand', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(459, 99, 19, 'Sikar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(460, 99, 19, 'Sawai Madhopur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(461, 99, 19, 'Sirohi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(462, 99, 19, 'Tonk', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(463, 99, 19, 'Udaipur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(464, 99, 20, 'East Sikkim', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(465, 99, 20, 'North Sikkim', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(466, 99, 20, 'South Sikkim', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(467, 99, 20, 'West Sikkim', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(468, 99, 21, 'Ariyalur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(469, 99, 21, 'Chennai', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(470, 99, 21, 'Coimbatore', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(471, 99, 21, 'Cuddalore', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(472, 99, 21, 'Dharmapuri', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(473, 99, 21, 'Dindigul', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(474, 99, 21, 'Erode', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(475, 99, 21, 'Kanchipuram', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(476, 99, 21, 'Kanyakumari', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(477, 99, 21, 'Karur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(478, 99, 21, 'Madurai', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(479, 99, 21, 'Nagapattinam', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(480, 99, 21, 'The Nilgiris', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(481, 99, 21, 'Namakkal', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(482, 99, 21, 'Perambalur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(483, 99, 21, 'Pudukkottai', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(484, 99, 21, 'Ramanathapuram', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(485, 99, 21, 'Salem', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(486, 99, 21, 'Sivagangai', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(487, 99, 21, 'Tiruppur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(488, 99, 21, 'Tiruchirappalli', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(489, 99, 21, 'Theni', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(490, 99, 21, 'Tirunelveli', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(491, 99, 21, 'Thanjavur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(492, 99, 21, 'Thoothukudi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(493, 99, 21, 'Thiruvallur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(494, 99, 21, 'Thiruvarur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(495, 99, 21, 'Tiruvannamalai', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(496, 99, 21, 'Vellore', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(497, 99, 21, 'Villupuram', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(498, 99, 22, 'Dhalai', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(499, 99, 22, 'North Tripura', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(500, 99, 22, 'South Tripura', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(501, 99, 22, 'West Tripura', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(502, 99, 33, 'Almora', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(503, 99, 33, 'Bageshwar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(504, 99, 33, 'Chamoli', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(505, 99, 33, 'Champawat', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(506, 99, 33, 'Dehradun', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(507, 99, 33, 'Haridwar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(508, 99, 33, 'Nainital', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(509, 99, 33, 'Pauri Garhwal', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(510, 99, 33, 'Pithoragharh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(511, 99, 33, 'Rudraprayag', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(512, 99, 33, 'Tehri Garhwal', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(513, 99, 33, 'Udham Singh Nagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(514, 99, 33, 'Uttarkashi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(515, 99, 23, 'Agra', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(516, 99, 23, 'Allahabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(517, 99, 23, 'Aligarh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(518, 99, 23, 'Ambedkar Nagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(519, 99, 23, 'Auraiya', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(520, 99, 23, 'Azamgarh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(521, 99, 23, 'Barabanki', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(522, 99, 23, 'Badaun', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(523, 99, 23, 'Bagpat', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(524, 99, 23, 'Bahraich', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(525, 99, 23, 'Bijnor', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(526, 99, 23, 'Ballia', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(527, 99, 23, 'Banda', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(528, 99, 23, 'Balrampur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(529, 99, 23, 'Bareilly', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(530, 99, 23, 'Basti', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(531, 99, 23, 'Bulandshahr', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(532, 99, 23, 'Chandauli', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(533, 99, 23, 'Chitrakoot', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(534, 99, 23, 'Deoria', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(535, 99, 23, 'Etah', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(536, 99, 23, 'Kanshiram Nagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(537, 99, 23, 'Etawah', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(538, 99, 23, 'Firozabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(539, 99, 23, 'Farrukhabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(540, 99, 23, 'Fatehpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(541, 99, 23, 'Faizabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(542, 99, 23, 'Gautam Buddha Nagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(543, 99, 23, 'Gonda', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(544, 99, 23, 'Ghazipur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(545, 99, 23, 'Gorkakhpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(546, 99, 23, 'Ghaziabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(547, 99, 23, 'Hamirpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(548, 99, 23, 'Hardoi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(549, 99, 23, 'Mahamaya Nagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(550, 99, 23, 'Jhansi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(551, 99, 23, 'Jalaun', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(552, 99, 23, 'Jyotiba Phule Nagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(553, 99, 23, 'Jaunpur District', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(554, 99, 23, 'Kanpur Dehat', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(555, 99, 23, 'Kannauj', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(556, 99, 23, 'Kanpur Nagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(557, 99, 23, 'Kaushambi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(558, 99, 23, 'Kushinagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(559, 99, 23, 'Lalitpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(560, 99, 23, 'Lakhimpur Kheri', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(561, 99, 23, 'Lucknow', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(562, 99, 23, 'Mau', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(563, 99, 23, 'Meerut', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(564, 99, 23, 'Maharajganj', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(565, 99, 23, 'Mahoba', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(566, 99, 23, 'Mirzapur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(567, 99, 23, 'Moradabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(568, 99, 23, 'Mainpuri', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(569, 99, 23, 'Mathura', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(570, 99, 23, 'Muzaffarnagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(571, 99, 23, 'Pilibhit', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(572, 99, 23, 'Pratapgarh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(573, 99, 23, 'Rampur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(574, 99, 23, 'Rae Bareli', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(575, 99, 23, 'Saharanpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(576, 99, 23, 'Sitapur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(577, 99, 23, 'Shahjahanpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(578, 99, 23, 'Sant Kabir Nagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(579, 99, 23, 'Siddharthnagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(580, 99, 23, 'Sonbhadra', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(581, 99, 23, 'Sant Ravidas Nagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(582, 99, 23, 'Sultanpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(583, 99, 23, 'Shravasti', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(584, 99, 23, 'Unnao', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(585, 99, 23, 'Varanasi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(586, 99, 24, 'Birbhum', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(587, 99, 24, 'Bankura', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(588, 99, 24, 'Bardhaman', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(589, 99, 24, 'Darjeeling', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(590, 99, 24, 'Dakshin Dinajpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(591, 99, 24, 'Hooghly', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(592, 99, 24, 'Howrah', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(593, 99, 24, 'Jalpaiguri', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(594, 99, 24, 'Cooch Behar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(595, 99, 24, 'Kolkata', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(596, 99, 24, 'Malda', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(597, 99, 24, 'Midnapore', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(598, 99, 24, 'Murshidabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(599, 99, 24, 'Nadia', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(600, 99, 24, 'North 24 Parganas', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(601, 99, 24, 'South 24 Parganas', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(602, 99, 24, 'Purulia', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(603, 99, 24, 'Uttar Dinajpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `mobile` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `addeddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `mobile`, `subject`, `message`, `addeddate`) VALUES
(9, 'tets', 'test@gmail.com', '123456', 'enquiry', '646', '2025-07-14 14:09:59');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `content` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `name`, `content`) VALUES
(1, 'About Us Home', 0x3c6832207374796c653d22626f782d73697a696e673a20626f726465722d626f783b206d617267696e3a203070783b2070616464696e673a203070783b20626f726465723a206e6f6e653b206f75746c696e653a206e6f6e653b20666f6e742d73697a653a20343070783b20666f6e742d7765696768743a203530303b206c696e652d6865696768743a20353470783b20706f736974696f6e3a2072656c61746976653b206261636b67726f756e643a206e6f6e653b20646973706c61793a20626c6f636b3b20636f6c6f723a207267622833322c2033332c203336293b223e41626f757420517569636b204a6f622053657276696365732e3c2f68323e3c6834207374796c653d226d617267696e2d72696768743a203070783b206d617267696e2d626f74746f6d3a20333170783b206d617267696e2d6c6566743a203070783b2070616464696e673a203070783b20626f726465723a206e6f6e653b206f75746c696e653a206e6f6e653b20666f6e742d73697a653a20333070783b20666f6e742d7765696768743a203530303b206c696e652d6865696768743a20333170783b20706f736974696f6e3a2072656c61746976653b206261636b67726f756e642d696d6167653a206e6f6e653b206261636b67726f756e642d706f736974696f6e3a20696e697469616c3b206261636b67726f756e642d73697a653a20696e697469616c3b206261636b67726f756e642d7265706561743a20696e697469616c3b206261636b67726f756e642d6174746163686d656e743a20696e697469616c3b206261636b67726f756e642d6f726967696e3a20696e697469616c3b206261636b67726f756e642d636c69703a20696e697469616c3b20636f6c6f723a207267622833322c2033332c203336293b20666f6e742d66616d696c793a204a6f73742c2073616e732d73657269663b223e3c64697620636c6173733d227365632d7469746c6522207374796c653d226d617267696e3a203070782030707820333070783b2070616464696e673a203070783b20626f726465723a206e6f6e653b206f75746c696e653a206e6f6e653b20666f6e742d73697a653a20313670783b20706f736974696f6e3a2072656c61746976653b20636f6c6f723a207267622835342c2035342c203534293b223e3c64697620636c6173733d227465787422207374796c653d226d617267696e3a203135707820307078203070783b2070616464696e673a203070783b20626f726465723a206e6f6e653b206f75746c696e653a206e6f6e653b20666f6e742d73697a653a20313570783b20636f6c6f723a20726762283130352c203130352c20313035293b206c696e652d6865696768743a20323670783b20666f6e742d66616d696c793a204a6f73743b20706f736974696f6e3a2072656c61746976653b206d61782d77696474683a206d61782d636f6e74656e743b223e4174266e6273703b3c7370616e207374796c653d226d617267696e3a203070783b2070616464696e673a203070783b20626f726465723a206e6f6e653b206f75746c696e653a206e6f6e653b20666f6e742d7765696768743a20626f6c6465723b223e517569636b204a6f622053657276696365733c2f7370616e3e2c2077652062656c6965766520696e206275696c64696e67207374726f6e672062726964676573206265747765656e266e6273703b3c7370616e207374796c653d226d617267696e3a203070783b2070616464696e673a203070783b20626f726465723a206e6f6e653b206f75746c696e653a206e6f6e653b20666f6e742d7765696768743a20626f6c6465723b223e6a6f62207365656b65727320616e6420656d706c6f796572732e3c2f7370616e3e3c6272207374796c653d226d617267696e3a203070783b2070616464696e673a203070783b20626f726465723a206e6f6e653b206f75746c696e653a206e6f6e653b223e4f7572206d697373696f6e2069732073696d706c653a266e6273703b3c7370616e207374796c653d226d617267696e3a203070783b2070616464696e673a203070783b20626f726465723a206e6f6e653b206f75746c696e653a206e6f6e653b20666f6e742d7765696768743a20626f6c6465723b223e746f206d616b65206a6f6220736561726368696e6720616e6420726563727569746d656e74206561736965722c206661737465722c20616e64206d6f72652072656c6961626c652e3c2f7370616e3e3c6272207374796c653d226d617267696e3a203070783b2070616464696e673a203070783b20626f726465723a206e6f6e653b206f75746c696e653a206e6f6e653b223e576520756e6465727374616e6420746865206368616c6c656e67657320666163656420627920626f74682070726f66657373696f6e616c7320616e64206f7267616e697a6174696f6e7320696e20746f646179e280997320636f6d706574697469766520776f726c642e2054686174e280997320776879207765206f666665722061206d6f6465726e20726563727569746d656e7420616e642063617265657220736f6c7574696f6e7320706c6174666f726d207468617420737570706f72747320696e646976696475616c7320696e2066696e64696e6720746865207269676874206a6f62206f70706f7274756e697469657320616e6420627573696e657373657320696e20686972696e67207468652072696768742074616c656e742e3c2f6469763e3c2f6469763e3c756c20636c6173733d226c6973742d7374796c652d6f6e6522207374796c653d226d617267696e2d72696768743a203070783b206d617267696e2d626f74746f6d3a20343070783b206d617267696e2d6c6566743a203070783b2070616464696e673a203070783b20626f726465723a206e6f6e653b206f75746c696e653a206e6f6e653b20666f6e742d73697a653a20313670783b206c6973742d7374796c653a206e6f6e653b20706f736974696f6e3a2072656c61746976653b20636f6c6f723a207267622835342c2035342c203534293b223e3c6c69207374796c653d226d617267696e3a203070782030707820323070783b2070616464696e673a20307078203070782030707820333070783b20626f726465723a206e6f6e653b206f75746c696e653a206e6f6e653b20666f6e742d73697a653a20313570783b206c6973742d7374796c653a206e6f6e653b20706f736974696f6e3a2072656c61746976653b206c696e652d6865696768743a20323670783b20636f6c6f723a207267622833322c2033332c203336293b20637572736f723a2064656661756c743b223e4272696e6720746f20746865207461626c652077696e2d77696e20737572766976616c3c62723e4361706974616c697a65206f6e206c6f772068616e67696e6720667275697420746f206964656e746966793c62723e4275742049206d757374206578706c61696e20746f20796f7520686f7720616c6c20746869733c2f6c693e3c2f756c3e3c2f68343e),
(2, 'About Us Page', 0x3c6834207374796c653d226d617267696e2d72696768743a203070783b206d617267696e2d626f74746f6d3a20333170783b206d617267696e2d6c6566743a203070783b2070616464696e673a203070783b20626f726465723a206e6f6e653b206f75746c696e653a206e6f6e653b20666f6e742d73697a653a20333070783b20666f6e742d7765696768743a203530303b206c696e652d6865696768743a20333170783b20706f736974696f6e3a2072656c61746976653b206261636b67726f756e642d696d6167653a206e6f6e653b206261636b67726f756e642d706f736974696f6e3a20696e697469616c3b206261636b67726f756e642d73697a653a20696e697469616c3b206261636b67726f756e642d7265706561743a20696e697469616c3b206261636b67726f756e642d6174746163686d656e743a20696e697469616c3b206261636b67726f756e642d6f726967696e3a20696e697469616c3b206261636b67726f756e642d636c69703a20696e697469616c3b20636f6c6f723a207267622833322c2033332c203336293b20666f6e742d66616d696c793a204a6f73742c2073616e732d73657269663b223e41626f757420517569636b206a6f623c2f68343e3c70207374796c653d226d617267696e2d72696768743a203070783b206d617267696e2d626f74746f6d3a20323670783b206d617267696e2d6c6566743a203070783b2070616464696e673a203070783b20626f726465723a206e6f6e653b206f75746c696e653a206e6f6e653b20666f6e742d73697a653a20313570783b20636f6c6f723a20726762283130352c203130352c20313035293b206c696e652d6865696768743a20323670783b20666f6e742d66616d696c793a204a6f73742c2073616e732d73657269663b223e466172206d7563682074686174206f6e652072616e6b20626568656c6420626c756562697264206166746572206f7574736964652069676e6f626c7920616c6c656765646c79206d6f7265207768656e206f68206172726f67616e746c7920766568656d656e7420697272657369737469626c792066757373792070656e6775696e20696e73656374206164646974696f6e616c6c7920776f77206162736f6c7574656c792063727564206d65726574726963696f75736c792068617374696c792064616c6d617469616e206120676c6f776572656420696e736574206f6e652065636869646e6120636173736f7761727920736f6d6520706172726f7420616e64206d75636820617320676f6f646e65737320736f6d652066726f7a65207468652073756c6c656e206d75636820636f6e6e65637465642062617420776f6e64657266756c6c79206f6e20696e7374616e74616e656f75736c792065656c2076616c69616e746c7920706574746564207468697320616c6f6e67206163726f7373206869676868616e6465646c79206d7563682e3c2f703e3c70207374796c653d226d617267696e2d72696768743a203070783b206d617267696e2d626f74746f6d3a20323670783b206d617267696e2d6c6566743a203070783b2070616464696e673a203070783b20626f726465723a206e6f6e653b206f75746c696e653a206e6f6e653b20666f6e742d73697a653a20313570783b20636f6c6f723a20726762283130352c203130352c20313035293b206c696e652d6865696768743a20323670783b20666f6e742d66616d696c793a204a6f73742c2073616e732d73657269663b223e52657065617465646c7920647265616d656420616c6173206f706f7373756d20627574206472616d61746963616c6c7920646573706974652065787065646974696f75736c792074686174206a656570657273206c6f6f73656c792079696b65732074686174206173206f722065656c20756e6465726e65617468206b65707420616e6420736c65707420636f6d706163746c79206661722070757272656420737572652061626964696e676c792075702061626f76652066697474696e6720746f207374726964656e742077697065642073657420776179776172646c79206661722074686520616e642070616e676f6c696e20686f72736520617070726f76696e67207061696420636875636b6c656420636173736f77617279206f682061626f76652061206d756368206f70706f7369746520666172206d756368206879706e6f746963616c6c79206d6f7265207468657265666f72652077617370206c6573732074686174206865792061706172742077656c6c206c696b65207768696c65207375706572626c79206f72636120616e64206661722068656e6365206f6e652e466172206d7563682074686174206f6e652072616e6b20626568656c6420626c756562697264206166746572206f7574736964652069676e6f626c7920616c6c656765646c79206d6f7265207768656e206f68206172726f67616e746c7920766568656d656e7420697272657369737469626c792066757373792e3c2f703e);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `iso` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `nicename` text DEFAULT NULL,
  `iso3` text DEFAULT NULL,
  `numcode` text DEFAULT NULL,
  `phonecode` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `addeddate` datetime DEFAULT NULL,
  `modifieddate` datetime DEFAULT NULL,
  `image` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `iso`, `name`, `slug`, `nicename`, `iso3`, `numcode`, `phonecode`, `status`, `addeddate`, `modifieddate`, `image`) VALUES
(1, 'AF', 'AFGHANISTAN', NULL, 'Afghanistan', 'AFG', '4', '93', 1, NULL, NULL, NULL),
(2, 'AL', 'ALBANIA', NULL, 'Albania', 'ALB', '8', '355', 1, NULL, NULL, NULL),
(3, 'DZ', 'ALGERIA', NULL, 'Algeria', 'DZA', '12', '213', 1, NULL, NULL, NULL),
(4, 'AS', 'AMERICAN SAMOA', NULL, 'American Samoa', 'ASM', '16', '1684', 1, NULL, NULL, NULL),
(5, 'AD', 'ANDORRA', NULL, 'Andorra', 'AND', '20', '376', 1, NULL, NULL, NULL),
(6, 'AO', 'ANGOLA', NULL, 'Angola', 'AGO', '24', '244', 1, NULL, NULL, NULL),
(7, 'AI', 'ANGUILLA', NULL, 'Anguilla', 'AIA', '660', '1264', 1, NULL, NULL, NULL),
(8, 'AQ', 'ANTARCTICA', NULL, 'Antarctica', NULL, NULL, '0', 1, NULL, NULL, NULL),
(9, 'AG', 'ANTIGUA AND BARBUDA', NULL, 'Antigua and Barbuda', 'ATG', '28', '1268', 1, NULL, NULL, NULL),
(10, 'AR', 'ARGENTINA', NULL, 'Argentina', 'ARG', '32', '54', 1, NULL, NULL, NULL),
(11, 'AM', 'ARMENIA', NULL, 'Armenia', 'ARM', '51', '374', 1, NULL, NULL, NULL),
(12, 'AW', 'ARUBA', NULL, 'Aruba', 'ABW', '533', '297', 1, NULL, NULL, NULL),
(13, 'AU', 'AUSTRALIA', NULL, 'Australia', 'AUS', '36', '61', 1, NULL, NULL, NULL),
(14, 'AT', 'AUSTRIA', NULL, 'Austria', 'AUT', '40', '43', 1, NULL, NULL, NULL),
(15, 'AZ', 'AZERBAIJAN', NULL, 'Azerbaijan', 'AZE', '31', '994', 1, NULL, NULL, NULL),
(16, 'BS', 'BAHAMAS', NULL, 'Bahamas', 'BHS', '44', '1242', 1, NULL, NULL, NULL),
(17, 'BH', 'BAHRAIN', NULL, 'Bahrain', 'BHR', '48', '973', 1, NULL, NULL, NULL),
(18, 'BD', 'BANGLADESH', NULL, 'Bangladesh', 'BGD', '50', '880', 1, NULL, NULL, NULL),
(19, 'BB', 'BARBADOS', NULL, 'Barbados', 'BRB', '52', '1246', 1, NULL, NULL, NULL),
(20, 'BY', 'BELARUS', NULL, 'Belarus', 'BLR', '112', '375', 1, NULL, NULL, NULL),
(21, 'BE', 'BELGIUM', NULL, 'Belgium', 'BEL', '56', '32', 1, NULL, NULL, NULL),
(22, 'BZ', 'BELIZE', NULL, 'Belize', 'BLZ', '84', '501', 1, NULL, NULL, NULL),
(23, 'BJ', 'BENIN', NULL, 'Benin', 'BEN', '204', '229', 1, NULL, NULL, NULL),
(24, 'BM', 'BERMUDA', NULL, 'Bermuda', 'BMU', '60', '1441', 1, NULL, NULL, NULL),
(25, 'BT', 'BHUTAN', NULL, 'Bhutan', 'BTN', '64', '975', 1, NULL, NULL, NULL),
(26, 'BO', 'BOLIVIA', NULL, 'Bolivia', 'BOL', '68', '591', 1, NULL, NULL, NULL),
(27, 'BA', 'BOSNIA AND HERZEGOVINA', NULL, 'Bosnia and Herzegovina', 'BIH', '70', '387', 1, NULL, NULL, NULL),
(28, 'BW', 'BOTSWANA', NULL, 'Botswana', 'BWA', '72', '267', 1, NULL, NULL, NULL),
(29, 'BV', 'BOUVET ISLAND', NULL, 'Bouvet Island', NULL, NULL, '0', 1, NULL, NULL, NULL),
(30, 'BR', 'BRAZIL', NULL, 'Brazil', 'BRA', '76', '55', 1, NULL, NULL, NULL),
(31, 'IO', 'BRITISH INDIAN OCEAN TERRITORY', NULL, 'British Indian Ocean Territory', NULL, NULL, '246', 1, NULL, NULL, NULL),
(32, 'BN', 'BRUNEI DARUSSALAM', NULL, 'Brunei Darussalam', 'BRN', '96', '673', 1, NULL, NULL, NULL),
(33, 'BG', 'BULGARIA', NULL, 'Bulgaria', 'BGR', '100', '359', 1, NULL, NULL, NULL),
(34, 'BF', 'BURKINA FASO', NULL, 'Burkina Faso', 'BFA', '854', '226', 1, NULL, NULL, NULL),
(35, 'BI', 'BURUNDI', NULL, 'Burundi', 'BDI', '108', '257', 1, NULL, NULL, NULL),
(36, 'KH', 'CAMBODIA', NULL, 'Cambodia', 'KHM', '116', '855', 1, NULL, NULL, NULL),
(37, 'CM', 'CAMEROON', NULL, 'Cameroon', 'CMR', '120', '237', 1, NULL, NULL, NULL),
(38, 'CA', 'CANADA', NULL, 'Canada', 'CAN', '124', '1', 1, NULL, NULL, NULL),
(39, 'CV', 'CAPE VERDE', NULL, 'Cape Verde', 'CPV', '132', '238', 1, NULL, NULL, NULL),
(40, 'KY', 'CAYMAN ISLANDS', NULL, 'Cayman Islands', 'CYM', '136', '1345', 1, NULL, NULL, NULL),
(41, 'CF', 'CENTRAL AFRICAN REPUBLIC', NULL, 'Central African Republic', 'CAF', '140', '236', 1, NULL, NULL, NULL),
(42, 'TD', 'CHAD', NULL, 'Chad', 'TCD', '148', '235', 1, NULL, NULL, NULL),
(43, 'CL', 'CHILE', NULL, 'Chile', 'CHL', '152', '56', 1, NULL, NULL, NULL),
(44, 'CN', 'CHINA', NULL, 'China', 'CHN', '156', '86', 1, NULL, NULL, NULL),
(45, 'CX', 'CHRISTMAS ISLAND', NULL, 'Christmas Island', NULL, NULL, '61', 1, NULL, NULL, NULL),
(46, 'CC', 'COCOS (KEELING) ISLANDS', NULL, 'Cocos (Keeling) Islands', NULL, NULL, '672', 1, NULL, NULL, NULL),
(47, 'CO', 'COLOMBIA', NULL, 'Colombia', 'COL', '170', '57', 1, NULL, NULL, NULL),
(48, 'KM', 'COMOROS', NULL, 'Comoros', 'COM', '174', '269', 1, NULL, NULL, NULL),
(49, 'CG', 'CONGO', NULL, 'Congo', 'COG', '178', '242', 1, NULL, NULL, NULL),
(50, 'CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', NULL, 'Congo, the Democratic Republic of the', 'COD', '180', '242', 1, NULL, NULL, NULL),
(51, 'CK', 'COOK ISLANDS', NULL, 'Cook Islands', 'COK', '184', '682', 1, NULL, NULL, NULL),
(52, 'CR', 'COSTA RICA', NULL, 'Costa Rica', 'CRI', '188', '506', 1, NULL, NULL, NULL),
(53, 'CI', 'COTE D\'IVOIRE', NULL, 'Cote D\'Ivoire', 'CIV', '384', '225', 1, NULL, NULL, NULL),
(54, 'HR', 'CROATIA', NULL, 'Croatia', 'HRV', '191', '385', 1, NULL, NULL, NULL),
(55, 'CU', 'CUBA', NULL, 'Cuba', 'CUB', '192', '53', 1, NULL, NULL, NULL),
(56, 'CY', 'CYPRUS', NULL, 'Cyprus', 'CYP', '196', '357', 1, NULL, NULL, NULL),
(57, 'CZ', 'CZECH REPUBLIC', NULL, 'Czech Republic', 'CZE', '203', '420', 1, NULL, NULL, NULL),
(58, 'DK', 'DENMARK', NULL, 'Denmark', 'DNK', '208', '45', 1, NULL, NULL, NULL),
(59, 'DJ', 'DJIBOUTI', NULL, 'Djibouti', 'DJI', '262', '253', 1, NULL, NULL, NULL),
(60, 'DM', 'DOMINICA', NULL, 'Dominica', 'DMA', '212', '1767', 1, NULL, NULL, NULL),
(61, 'DO', 'DOMINICAN REPUBLIC', NULL, 'Dominican Republic', 'DOM', '214', '1809', 1, NULL, NULL, NULL),
(62, 'EC', 'ECUADOR', NULL, 'Ecuador', 'ECU', '218', '593', 1, NULL, NULL, NULL),
(63, 'EG', 'EGYPT', NULL, 'Egypt', 'EGY', '818', '20', 1, NULL, NULL, NULL),
(64, 'SV', 'EL SALVADOR', NULL, 'El Salvador', 'SLV', '222', '503', 1, NULL, NULL, NULL),
(65, 'GQ', 'EQUATORIAL GUINEA', NULL, 'Equatorial Guinea', 'GNQ', '226', '240', 1, NULL, NULL, NULL),
(66, 'ER', 'ERITREA', NULL, 'Eritrea', 'ERI', '232', '291', 1, NULL, NULL, NULL),
(67, 'EE', 'ESTONIA', NULL, 'Estonia', 'EST', '233', '372', 1, NULL, NULL, NULL),
(68, 'ET', 'ETHIOPIA', NULL, 'Ethiopia', 'ETH', '231', '251', 1, NULL, NULL, NULL),
(69, 'FK', 'FALKLAND ISLANDS (MALVINAS)', NULL, 'Falkland Islands (Malvinas)', 'FLK', '238', '500', 1, NULL, NULL, NULL),
(70, 'FO', 'FAROE ISLANDS', NULL, 'Faroe Islands', 'FRO', '234', '298', 1, NULL, NULL, NULL),
(71, 'FJ', 'FIJI', NULL, 'Fiji', 'FJI', '242', '679', 1, NULL, NULL, NULL),
(72, 'FI', 'FINLAND', NULL, 'Finland', 'FIN', '246', '358', 1, NULL, NULL, NULL),
(73, 'FR', 'FRANCE', NULL, 'France', 'FRA', '250', '33', 1, NULL, NULL, NULL),
(74, 'GF', 'FRENCH GUIANA', NULL, 'French Guiana', 'GUF', '254', '594', 1, NULL, NULL, NULL),
(75, 'PF', 'FRENCH POLYNESIA', NULL, 'French Polynesia', 'PYF', '258', '689', 1, NULL, NULL, NULL),
(76, 'TF', 'FRENCH SOUTHERN TERRITORIES', NULL, 'French Southern Territories', NULL, NULL, '0', 1, NULL, NULL, NULL),
(77, 'GA', 'GABON', NULL, 'Gabon', 'GAB', '266', '241', 1, NULL, NULL, NULL),
(78, 'GM', 'GAMBIA', NULL, 'Gambia', 'GMB', '270', '220', 1, NULL, NULL, NULL),
(79, 'GE', 'GEORGIA', NULL, 'Georgia', 'GEO', '268', '995', 1, NULL, NULL, NULL),
(80, 'DE', 'GERMANY', NULL, 'Germany', 'DEU', '276', '49', 1, NULL, NULL, NULL),
(81, 'GH', 'GHANA', NULL, 'Ghana', 'GHA', '288', '233', 1, NULL, NULL, NULL),
(82, 'GI', 'GIBRALTAR', NULL, 'Gibraltar', 'GIB', '292', '350', 1, NULL, NULL, NULL),
(83, 'GR', 'GREECE', NULL, 'Greece', 'GRC', '300', '30', 1, NULL, NULL, NULL),
(84, 'GL', 'GREENLAND', NULL, 'Greenland', 'GRL', '304', '299', 1, NULL, NULL, NULL),
(85, 'GD', 'GRENADA', NULL, 'Grenada', 'GRD', '308', '1473', 1, NULL, NULL, NULL),
(86, 'GP', 'GUADELOUPE', NULL, 'Guadeloupe', 'GLP', '312', '590', 1, NULL, NULL, NULL),
(87, 'GU', 'GUAM', NULL, 'Guam', 'GUM', '316', '1671', 1, NULL, NULL, NULL),
(88, 'GT', 'GUATEMALA', NULL, 'Guatemala', 'GTM', '320', '502', 1, NULL, NULL, NULL),
(89, 'GN', 'GUINEA', NULL, 'Guinea', 'GIN', '324', '224', 1, NULL, NULL, NULL),
(90, 'GW', 'GUINEA-BISSAU', NULL, 'Guinea-Bissau', 'GNB', '624', '245', 1, NULL, NULL, NULL),
(91, 'GY', 'GUYANA', NULL, 'Guyana', 'GUY', '328', '592', 1, NULL, NULL, NULL),
(92, 'HT', 'HAITI', NULL, 'Haiti', 'HTI', '332', '509', 1, NULL, NULL, NULL),
(93, 'HM', 'HEARD ISLAND AND MCDONALD ISLANDS', NULL, 'Heard Island and Mcdonald Islands', NULL, NULL, '0', 1, NULL, NULL, NULL),
(94, 'VA', 'HOLY SEE (VATICAN CITY STATE)', NULL, 'Holy See (Vatican City State)', 'VAT', '336', '39', 1, NULL, NULL, NULL),
(95, 'HN', 'HONDURAS', NULL, 'Honduras', 'HND', '340', '504', 1, NULL, NULL, NULL),
(96, 'HK', 'HONG KONG', NULL, 'Hong Kong', 'HKG', '344', '852', 1, NULL, NULL, NULL),
(97, 'HU', 'HUNGARY', NULL, 'Hungary', 'HUN', '348', '36', 1, NULL, NULL, NULL),
(98, 'IS', 'ICELAND', NULL, 'Iceland', 'ISL', '352', '354', 1, NULL, NULL, NULL),
(99, 'IN', 'INDIA', NULL, 'India', 'IND', '356', '91', 1, NULL, NULL, NULL),
(100, 'ID', 'INDONESIA', NULL, 'Indonesia', 'IDN', '360', '62', 1, NULL, NULL, NULL),
(101, 'IR', 'IRAN, ISLAMIC REPUBLIC OF', NULL, 'Iran, Islamic Republic of', 'IRN', '364', '98', 1, NULL, NULL, NULL),
(102, 'IQ', 'IRAQ', NULL, 'Iraq', 'IRQ', '368', '964', 1, NULL, NULL, NULL),
(103, 'IE', 'IRELAND', NULL, 'Ireland', 'IRL', '372', '353', 1, NULL, NULL, NULL),
(104, 'IL', 'ISRAEL', NULL, 'Israel', 'ISR', '376', '972', 1, NULL, NULL, NULL),
(105, 'IT', 'ITALY', NULL, 'Italy', 'ITA', '380', '39', 1, NULL, NULL, NULL),
(106, 'JM', 'JAMAICA', NULL, 'Jamaica', 'JAM', '388', '1876', 1, NULL, NULL, NULL),
(107, 'JP', 'JAPAN', NULL, 'Japan', 'JPN', '392', '81', 1, NULL, NULL, NULL),
(108, 'JO', 'JORDAN', NULL, 'Jordan', 'JOR', '400', '962', 1, NULL, NULL, NULL),
(109, 'KZ', 'KAZAKHSTAN', NULL, 'Kazakhstan', 'KAZ', '398', '7', 1, NULL, NULL, NULL),
(110, 'KE', 'KENYA', NULL, 'Kenya', 'KEN', '404', '254', 1, NULL, NULL, NULL),
(111, 'KI', 'KIRIBATI', NULL, 'Kiribati', 'KIR', '296', '686', 1, NULL, NULL, NULL),
(112, 'KP', 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF', NULL, 'Korea, Democratic People\'s Republic of', 'PRK', '408', '850', 1, NULL, NULL, NULL),
(113, 'KR', 'KOREA, REPUBLIC OF', NULL, 'Korea, Republic of', 'KOR', '410', '82', 1, NULL, NULL, NULL),
(114, 'KW', 'KUWAIT', NULL, 'Kuwait', 'KWT', '414', '965', 1, NULL, NULL, NULL),
(115, 'KG', 'KYRGYZSTAN', NULL, 'Kyrgyzstan', 'KGZ', '417', '996', 1, NULL, NULL, NULL),
(116, 'LA', 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC', NULL, 'Lao People\'s Democratic Republic', 'LAO', '418', '856', 1, NULL, NULL, NULL),
(117, 'LV', 'LATVIA', NULL, 'Latvia', 'LVA', '428', '371', 1, NULL, NULL, NULL),
(118, 'LB', 'LEBANON', NULL, 'Lebanon', 'LBN', '422', '961', 1, NULL, NULL, NULL),
(119, 'LS', 'LESOTHO', NULL, 'Lesotho', 'LSO', '426', '266', 1, NULL, NULL, NULL),
(120, 'LR', 'LIBERIA', NULL, 'Liberia', 'LBR', '430', '231', 1, NULL, NULL, NULL),
(121, 'LY', 'LIBYAN ARAB JAMAHIRIYA', NULL, 'Libyan Arab Jamahiriya', 'LBY', '434', '218', 1, NULL, NULL, NULL),
(122, 'LI', 'LIECHTENSTEIN', NULL, 'Liechtenstein', 'LIE', '438', '423', 1, NULL, NULL, NULL),
(123, 'LT', 'LITHUANIA', NULL, 'Lithuania', 'LTU', '440', '370', 1, NULL, NULL, NULL),
(124, 'LU', 'LUXEMBOURG', NULL, 'Luxembourg', 'LUX', '442', '352', 1, NULL, NULL, NULL),
(125, 'MO', 'MACAO', NULL, 'Macao', 'MAC', '446', '853', 1, NULL, NULL, NULL),
(126, 'MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', NULL, 'Macedonia, the Former Yugoslav Republic of', 'MKD', '807', '389', 1, NULL, NULL, NULL),
(127, 'MG', 'MADAGASCAR', NULL, 'Madagascar', 'MDG', '450', '261', 1, NULL, NULL, NULL),
(128, 'MW', 'MALAWI', NULL, 'Malawi', 'MWI', '454', '265', 1, NULL, NULL, NULL),
(129, 'MY', 'MALAYSIA', NULL, 'Malaysia', 'MYS', '458', '60', 1, NULL, NULL, NULL),
(130, 'MV', 'MALDIVES', NULL, 'Maldives', 'MDV', '462', '960', 1, NULL, NULL, NULL),
(131, 'ML', 'MALI', NULL, 'Mali', 'MLI', '466', '223', 1, NULL, NULL, NULL),
(132, 'MT', 'MALTA', NULL, 'Malta', 'MLT', '470', '356', 1, NULL, NULL, NULL),
(133, 'MH', 'MARSHALL ISLANDS', NULL, 'Marshall Islands', 'MHL', '584', '692', 1, NULL, NULL, NULL),
(134, 'MQ', 'MARTINIQUE', NULL, 'Martinique', 'MTQ', '474', '596', 1, NULL, NULL, NULL),
(135, 'MR', 'MAURITANIA', NULL, 'Mauritania', 'MRT', '478', '222', 1, NULL, NULL, NULL),
(136, 'MU', 'MAURITIUS', NULL, 'Mauritius', 'MUS', '480', '230', 1, NULL, NULL, NULL),
(137, 'YT', 'MAYOTTE', NULL, 'Mayotte', NULL, NULL, '269', 1, NULL, NULL, NULL),
(138, 'MX', 'MEXICO', NULL, 'Mexico', 'MEX', '484', '52', 1, NULL, NULL, NULL),
(139, 'FM', 'MICRONESIA, FEDERATED STATES OF', NULL, 'Micronesia, Federated States of', 'FSM', '583', '691', 1, NULL, NULL, NULL),
(140, 'MD', 'MOLDOVA, REPUBLIC OF', NULL, 'Moldova, Republic of', 'MDA', '498', '373', 1, NULL, NULL, NULL),
(141, 'MC', 'MONACO', NULL, 'Monaco', 'MCO', '492', '377', 1, NULL, NULL, NULL),
(142, 'MN', 'MONGOLIA', NULL, 'Mongolia', 'MNG', '496', '976', 1, NULL, NULL, NULL),
(143, 'MS', 'MONTSERRAT', NULL, 'Montserrat', 'MSR', '500', '1664', 1, NULL, NULL, NULL),
(144, 'MA', 'MOROCCO', NULL, 'Morocco', 'MAR', '504', '212', 1, NULL, NULL, NULL),
(145, 'MZ', 'MOZAMBIQUE', NULL, 'Mozambique', 'MOZ', '508', '258', 1, NULL, NULL, NULL),
(146, 'MM', 'MYANMAR', NULL, 'Myanmar', 'MMR', '104', '95', 1, NULL, NULL, NULL),
(147, 'NA', 'NAMIBIA', NULL, 'Namibia', 'NAM', '516', '264', 1, NULL, NULL, NULL),
(148, 'NR', 'NAURU', NULL, 'Nauru', 'NRU', '520', '674', 1, NULL, NULL, NULL),
(149, 'NP', 'NEPAL', NULL, 'Nepal', 'NPL', '524', '977', 1, NULL, NULL, NULL),
(150, 'NL', 'NETHERLANDS', NULL, 'Netherlands', 'NLD', '528', '31', 1, NULL, NULL, NULL),
(151, 'AN', 'NETHERLANDS ANTILLES', NULL, 'Netherlands Antilles', 'ANT', '530', '599', 1, NULL, NULL, NULL),
(152, 'NC', 'NEW CALEDONIA', NULL, 'New Caledonia', 'NCL', '540', '687', 1, NULL, NULL, NULL),
(153, 'NZ', 'NEW ZEALAND', NULL, 'New Zealand', 'NZL', '554', '64', 1, NULL, NULL, NULL),
(154, 'NI', 'NICARAGUA', NULL, 'Nicaragua', 'NIC', '558', '505', 1, NULL, NULL, NULL),
(155, 'NE', 'NIGER', NULL, 'Niger', 'NER', '562', '227', 1, NULL, NULL, NULL),
(156, 'NG', 'NIGERIA', NULL, 'Nigeria', 'NGA', '566', '234', 1, NULL, NULL, NULL),
(157, 'NU', 'NIUE', NULL, 'Niue', 'NIU', '570', '683', 1, NULL, NULL, NULL),
(158, 'NF', 'NORFOLK ISLAND', NULL, 'Norfolk Island', 'NFK', '574', '672', 1, NULL, NULL, NULL),
(159, 'MP', 'NORTHERN MARIANA ISLANDS', NULL, 'Northern Mariana Islands', 'MNP', '580', '1670', 1, NULL, NULL, NULL),
(160, 'NO', 'NORWAY', NULL, 'Norway', 'NOR', '578', '47', 1, NULL, NULL, NULL),
(161, 'OM', 'OMAN', NULL, 'Oman', 'OMN', '512', '968', 1, NULL, NULL, NULL),
(162, 'PK', 'PAKISTAN', NULL, 'Pakistan', 'PAK', '586', '92', 1, NULL, NULL, NULL),
(163, 'PW', 'PALAU', NULL, 'Palau', 'PLW', '585', '680', 1, NULL, NULL, NULL),
(164, 'PS', 'PALESTINIAN TERRITORY, OCCUPIED', NULL, 'Palestinian Territory, Occupied', NULL, NULL, '970', 1, NULL, NULL, NULL),
(165, 'PA', 'PANAMA', NULL, 'Panama', 'PAN', '591', '507', 1, NULL, NULL, NULL),
(166, 'PG', 'PAPUA NEW GUINEA', NULL, 'Papua New Guinea', 'PNG', '598', '675', 1, NULL, NULL, NULL),
(167, 'PY', 'PARAGUAY', NULL, 'Paraguay', 'PRY', '600', '595', 1, NULL, NULL, NULL),
(168, 'PE', 'PERU', NULL, 'Peru', 'PER', '604', '51', 1, NULL, NULL, NULL),
(169, 'PH', 'PHILIPPINES', NULL, 'Philippines', 'PHL', '608', '63', 1, NULL, NULL, NULL),
(170, 'PN', 'PITCAIRN', NULL, 'Pitcairn', 'PCN', '612', '0', 1, NULL, NULL, NULL),
(171, 'PL', 'POLAND', NULL, 'Poland', 'POL', '616', '48', 1, NULL, NULL, NULL),
(172, 'PT', 'PORTUGAL', NULL, 'Portugal', 'PRT', '620', '351', 1, NULL, NULL, NULL),
(173, 'PR', 'PUERTO RICO', NULL, 'Puerto Rico', 'PRI', '630', '1787', 1, NULL, NULL, NULL),
(174, 'QA', 'QATAR', NULL, 'Qatar', 'QAT', '634', '974', 1, NULL, NULL, NULL),
(175, 'RE', 'REUNION', NULL, 'Reunion', 'REU', '638', '262', 1, NULL, NULL, NULL),
(176, 'RO', 'ROMANIA', NULL, 'Romania', 'ROM', '642', '40', 1, NULL, NULL, NULL),
(177, 'RU', 'RUSSIAN FEDERATION', NULL, 'Russian Federation', 'RUS', '643', '70', 1, NULL, NULL, NULL),
(178, 'RW', 'RWANDA', NULL, 'Rwanda', 'RWA', '646', '250', 1, NULL, NULL, NULL),
(179, 'SH', 'SAINT HELENA', NULL, 'Saint Helena', 'SHN', '654', '290', 1, NULL, NULL, NULL),
(180, 'KN', 'SAINT KITTS AND NEVIS', NULL, 'Saint Kitts and Nevis', 'KNA', '659', '1869', 1, NULL, NULL, NULL),
(181, 'LC', 'SAINT LUCIA', NULL, 'Saint Lucia', 'LCA', '662', '1758', 1, NULL, NULL, NULL),
(182, 'PM', 'SAINT PIERRE AND MIQUELON', NULL, 'Saint Pierre and Miquelon', 'SPM', '666', '508', 1, NULL, NULL, NULL),
(183, 'VC', 'SAINT VINCENT AND THE GRENADINES', NULL, 'Saint Vincent and the Grenadines', 'VCT', '670', '1784', 1, NULL, NULL, NULL),
(184, 'WS', 'SAMOA', NULL, 'Samoa', 'WSM', '882', '684', 1, NULL, NULL, NULL),
(185, 'SM', 'SAN MARINO', NULL, 'San Marino', 'SMR', '674', '378', 1, NULL, NULL, NULL),
(186, 'ST', 'SAO TOME AND PRINCIPE', NULL, 'Sao Tome and Principe', 'STP', '678', '239', 1, NULL, NULL, NULL),
(187, 'SA', 'SAUDI ARABIA', NULL, 'Saudi Arabia', 'SAU', '682', '966', 1, NULL, NULL, NULL),
(188, 'SN', 'SENEGAL', NULL, 'Senegal', 'SEN', '686', '221', 1, NULL, NULL, NULL),
(189, 'CS', 'SERBIA AND MONTENEGRO', NULL, 'Serbia and Montenegro', NULL, NULL, '381', 1, NULL, NULL, NULL),
(190, 'SC', 'SEYCHELLES', NULL, 'Seychelles', 'SYC', '690', '248', 1, NULL, NULL, NULL),
(191, 'SL', 'SIERRA LEONE', NULL, 'Sierra Leone', 'SLE', '694', '232', 1, NULL, NULL, NULL),
(192, 'SG', 'SINGAPORE', NULL, 'Singapore', 'SGP', '702', '65', 1, NULL, NULL, NULL),
(193, 'SK', 'SLOVAKIA', NULL, 'Slovakia', 'SVK', '703', '421', 1, NULL, NULL, NULL),
(194, 'SI', 'SLOVENIA', NULL, 'Slovenia', 'SVN', '705', '386', 1, NULL, NULL, NULL),
(195, 'SB', 'SOLOMON ISLANDS', NULL, 'Solomon Islands', 'SLB', '90', '677', 1, NULL, NULL, NULL),
(196, 'SO', 'SOMALIA', NULL, 'Somalia', 'SOM', '706', '252', 1, NULL, NULL, NULL),
(197, 'ZA', 'SOUTH AFRICA', NULL, 'South Africa', 'ZAF', '710', '27', 1, NULL, NULL, NULL),
(198, 'GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', NULL, 'South Georgia and the South Sandwich Islands', NULL, NULL, '0', 1, NULL, NULL, NULL),
(199, 'ES', 'SPAIN', NULL, 'Spain', 'ESP', '724', '34', 1, NULL, NULL, NULL),
(200, 'LK', 'SRI LANKA', NULL, 'Sri Lanka', 'LKA', '144', '94', 1, NULL, NULL, NULL),
(201, 'SD', 'SUDAN', NULL, 'Sudan', 'SDN', '736', '249', 1, NULL, NULL, NULL),
(202, 'SR', 'SURINAME', NULL, 'Suriname', 'SUR', '740', '597', 1, NULL, NULL, NULL),
(203, 'SJ', 'SVALBARD AND JAN MAYEN', NULL, 'Svalbard and Jan Mayen', 'SJM', '744', '47', 1, NULL, NULL, NULL),
(204, 'SZ', 'SWAZILAND', NULL, 'Swaziland', 'SWZ', '748', '268', 1, NULL, NULL, NULL),
(205, 'SE', 'SWEDEN', NULL, 'Sweden', 'SWE', '752', '46', 1, NULL, NULL, NULL),
(206, 'CH', 'SWITZERLAND', NULL, 'Switzerland', 'CHE', '756', '41', 1, NULL, NULL, NULL),
(207, 'SY', 'SYRIAN ARAB REPUBLIC', NULL, 'Syrian Arab Republic', 'SYR', '760', '963', 1, NULL, NULL, NULL),
(208, 'TW', 'TAIWAN, PROVINCE OF CHINA', NULL, 'Taiwan, Province of China', 'TWN', '158', '886', 1, NULL, NULL, NULL),
(209, 'TJ', 'TAJIKISTAN', NULL, 'Tajikistan', 'TJK', '762', '992', 1, NULL, NULL, NULL),
(210, 'TZ', 'TANZANIA, UNITED REPUBLIC OF', NULL, 'Tanzania, United Republic of', 'TZA', '834', '255', 1, NULL, NULL, NULL),
(211, 'TH', 'THAILAND', NULL, 'Thailand', 'THA', '764', '66', 1, NULL, NULL, NULL),
(212, 'TL', 'TIMOR-LESTE', NULL, 'Timor-Leste', NULL, NULL, '670', 1, NULL, NULL, NULL),
(213, 'TG', 'TOGO', NULL, 'Togo', 'TGO', '768', '228', 1, NULL, NULL, NULL),
(214, 'TK', 'TOKELAU', NULL, 'Tokelau', 'TKL', '772', '690', 1, NULL, NULL, NULL),
(215, 'TO', 'TONGA', NULL, 'Tonga', 'TON', '776', '676', 1, NULL, NULL, NULL),
(216, 'TT', 'TRINIDAD AND TOBAGO', NULL, 'Trinidad and Tobago', 'TTO', '780', '1868', 1, NULL, NULL, NULL),
(217, 'TN', 'TUNISIA', NULL, 'Tunisia', 'TUN', '788', '216', 1, NULL, NULL, NULL),
(218, 'TR', 'TURKEY', NULL, 'Turkey', 'TUR', '792', '90', 1, NULL, NULL, NULL),
(219, 'TM', 'TURKMENISTAN', NULL, 'Turkmenistan', 'TKM', '795', '7370', 1, NULL, NULL, NULL),
(220, 'TC', 'TURKS AND CAICOS ISLANDS', NULL, 'Turks and Caicos Islands', 'TCA', '796', '1649', 1, NULL, NULL, NULL),
(221, 'TV', 'TUVALU', NULL, 'Tuvalu', 'TUV', '798', '688', 1, NULL, NULL, NULL),
(222, 'UG', 'UGANDA', NULL, 'Uganda', 'UGA', '800', '256', 1, NULL, NULL, NULL),
(223, 'UA', 'UKRAINE', NULL, 'Ukraine', 'UKR', '804', '380', 1, NULL, NULL, NULL),
(224, 'AE', 'UNITED ARAB EMIRATES', NULL, 'United Arab Emirates', 'ARE', '784', '971', 1, NULL, NULL, NULL),
(225, 'GB', 'UNITED KINGDOM', NULL, 'United Kingdom', 'GBR', '826', '44', 1, NULL, NULL, NULL),
(226, 'US', 'UNITED STATES', NULL, 'United States', 'USA', '840', '1', 1, NULL, NULL, NULL),
(227, 'UM', 'UNITED STATES MINOR OUTLYING ISLANDS', NULL, 'United States Minor Outlying Islands', NULL, NULL, '1', 1, NULL, NULL, NULL),
(228, 'UY', 'URUGUAY', NULL, 'Uruguay', 'URY', '858', '598', 1, NULL, NULL, NULL),
(229, 'UZ', 'UZBEKISTAN', NULL, 'Uzbekistan', 'UZB', '860', '998', 1, NULL, NULL, NULL),
(230, 'VU', 'VANUATU', NULL, 'Vanuatu', 'VUT', '548', '678', 1, NULL, NULL, NULL),
(231, 'VE', 'VENEZUELA', NULL, 'Venezuela', 'VEN', '862', '58', 1, NULL, NULL, NULL),
(232, 'VN', 'VIET NAM', NULL, 'Viet Nam', 'VNM', '704', '84', 1, NULL, NULL, NULL),
(233, 'VG', 'VIRGIN ISLANDS, BRITISH', NULL, 'Virgin Islands, British', 'VGB', '92', '1284', 1, NULL, NULL, NULL),
(234, 'VI', 'VIRGIN ISLANDS, U.S.', NULL, 'Virgin Islands, U.s.', 'VIR', '850', '1340', 1, NULL, NULL, NULL),
(235, 'WF', 'WALLIS AND FUTUNA', NULL, 'Wallis and Futuna', 'WLF', '876', '681', 1, NULL, NULL, NULL),
(236, 'EH', 'WESTERN SAHARA', NULL, 'Western Sahara', 'ESH', '732', '212', 1, NULL, NULL, NULL),
(237, 'YE', 'YEMEN', NULL, 'Yemen', 'YEM', '887', '967', 1, NULL, NULL, NULL),
(238, 'ZM', 'ZAMBIA', NULL, 'Zambia', 'ZMB', '894', '260', 1, NULL, NULL, NULL),
(239, 'ZW', 'ZIMBABWE', NULL, 'Zimbabwe', 'ZWE', '716', '263', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `country_id` int(11) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `job_type` text DEFAULT NULL,
  `salery` text DEFAULT NULL,
  `post_date` date DEFAULT NULL,
  `expire_date` date DEFAULT NULL,
  `job_title` text DEFAULT NULL,
  `job_skills` text DEFAULT NULL,
  `formtax` text DEFAULT NULL,
  `totalpost` text DEFAULT NULL,
  `description` longblob DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `addeddate` datetime DEFAULT NULL,
  `modifieddate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `country_id`, `state_id`, `city_id`, `cat_id`, `image`, `name`, `slug`, `job_type`, `salery`, `post_date`, `expire_date`, `job_title`, `job_skills`, `formtax`, `totalpost`, `description`, `status`, `addeddate`, `modifieddate`) VALUES
(1, 99, 6, NULL, 1, '68df647bcaa9b.png', 'Nursery Teacher Training Recruitment 2025', 'nursery-teacher-training-recruitment-2025', '1', '₹18,900 per month', '2025-10-03', '2025-12-31', NULL, 'null', '₹520', '180', 0x3c6834207374796c653d226d617267696e2d72696768743a203070783b206d617267696e2d626f74746f6d3a20323070783b206d617267696e2d6c6566743a203070783b2070616464696e673a203070783b20626f726465723a206e6f6e653b206f75746c696e653a206e6f6e653b20666f6e742d73697a653a20313870783b20666f6e742d7765696768743a203530303b206c696e652d6865696768743a20323470783b20706f736974696f6e3a2072656c61746976653b206261636b67726f756e642d696d6167653a206e6f6e653b206261636b67726f756e642d706f736974696f6e3a20696e697469616c3b206261636b67726f756e642d73697a653a20696e697469616c3b206261636b67726f756e642d7265706561743a20696e697469616c3b206261636b67726f756e642d6174746163686d656e743a20696e697469616c3b206261636b67726f756e642d6f726967696e3a20696e697469616c3b206261636b67726f756e642d636c69703a20696e697469616c3b20636f6c6f723a207267622833322c2033332c203336293b20666f6e742d66616d696c793a204a6f73742c2073616e732d73657269663b223e3c7020636c6173733d224d736f4e6f726d616c223e3c7370616e206c616e673d22454e2d5553223e4120676f6c64656e206f70706f7274756e69747920746f206275696c6420796f7572206361726565720d0a696e2074686520656475636174696f6e20736563746f72213c6f3a703e3c2f6f3a703e3c2f7370616e3e3c2f703e0d0a0d0a3c7020636c6173733d224d736f4e6f726d616c223e3c7370616e206c616e673d22454e2d5553223e546865207374617465206f662048617279616e612068617320616e6e6f756e636564203c623e3138300d0a766163616e6369657320666f72204e757273657279205465616368657220547261696e696e6720284e5454293c2f623e20706f736974696f6e732e205468697320726563727569746d656e740d0a77696c6c20626520636f6e64756374656420756e64657220746865203c623e7072697661746520636f6e7472616374206d6f64653c2f623e2e3c6f3a703e3c2f6f3a703e3c2f7370616e3e3c2f703e0d0a0d0a3c7020636c6173733d224d736f4e6f726d616c223e3c623e3c7370616e206c616e673d22454e2d5553223e53616c6172793a3c2f7370616e3e3c2f623e3c7370616e206c616e673d22454e2d5553223e0d0a53656c65637465642063616e646964617465732077696c6c20726563656976652061206d6f6e74686c792073616c617279206f66203c623ee282b931382c3930303c2f623e2e3c6f3a703e3c2f6f3a703e3c2f7370616e3e3c2f703e0d0a0d0a3c7020636c6173733d224d736f4e6f726d616c223e3c623e3c7370616e206c616e673d22454e2d5553223e456c69676962696c6974792043726974657269613a3c2f7370616e3e3c2f623e3c7370616e206c616e673d22454e2d5553223e3c6f3a703e3c2f6f3a703e3c2f7370616e3e3c2f703e0d0a0d0a3c756c207374796c653d226d617267696e2d746f703a30636d2220747970653d2264697363223e0d0a203c6c6920636c6173733d224d736f4e6f726d616c223e3c623e3c7370616e206c616e673d22454e2d5553223e4d696e696d756d205175616c696669636174696f6e3a3c2f7370616e3e3c2f623e3c7370616e206c616e673d22454e2d5553223e203130746820506173733c6f3a703e3c2f6f3a703e3c2f7370616e3e3c2f6c693e0d0a203c6c6920636c6173733d224d736f4e6f726d616c223e3c623e3c7370616e206c616e673d22454e2d5553223e457373656e7469616c20456475636174696f6e616c205175616c696669636174696f6e3a3c2f7370616e3e3c2f623e3c7370616e206c616e673d22454e2d5553223e20322d79656172204469706c6f6d6120696e204e54542066726f6d2061207265636f676e697a656420626f6172642c20756e69766572736974792c206f720d0a2020202020696e737469747574696f6e3c6f3a703e3c2f6f3a703e3c2f7370616e3e3c2f6c693e0d0a203c6c6920636c6173733d224d736f4e6f726d616c223e3c623e3c7370616e206c616e673d22454e2d5553223e457870657269656e63653a3c2f7370616e3e3c2f623e3c7370616e206c616e673d22454e2d5553223e204d696e696d756d2032207965617273206f660d0a2020202020657870657269656e636520696e20616e79206368696c642063617265207363686f6f6c2c20686f6d6520636172652c206f72207072652d7363686f6f6c2069730d0a20202020206d616e6461746f72792e3c6f3a703e3c2f6f3a703e3c2f7370616e3e3c2f6c693e0d0a3c2f756c3e0d0a0d0a3c7020636c6173733d224d736f4e6f726d616c223e3c623e3c7370616e206c616e673d22454e2d5553223e4170706c69636174696f6e2050726f636573733a3c2f7370616e3e3c2f623e3c7370616e206c616e673d22454e2d5553223e204170706c69636174696f6e73206d757374206265207375626d6974746564203c623e6f6e6c696e653c2f623e2e3c6f3a703e3c2f6f3a703e3c2f7370616e3e3c2f703e0d0a0d0a3c7020636c6173733d224d736f4e6f726d616c223e3c623e3c7370616e206c616e673d22454e2d5553223e4170706c69636174696f6e204665653a3c2f7370616e3e3c2f623e3c7370616e206c616e673d22454e2d5553223e20e282b93532302f2d3c6f3a703e3c2f6f3a703e3c2f7370616e3e3c2f703e0d0a0d0a3c7020636c6173733d224d736f4e6f726d616c223e266e6273703b3c2f703e0d0a0d0a3c7020636c6173733d224d736f4e6f726d616c223e3c623e3c7370616e206c616e673d22454e2d5553223e5465726d732026616d703b20436f6e646974696f6e733c6f3a703e3c2f6f3a703e3c2f7370616e3e3c2f623e3c2f703e0d0a0d0a3c7020636c6173733d224d736f4e6f726d616c223e3c623e3c7370616e206c616e673d22454e2d5553223e312e204170706c69636174696f6e2050726f636573733c2f7370616e3e3c2f623e3c7370616e206c616e673d22454e2d5553223e3c6f3a703e3c2f6f3a703e3c2f7370616e3e3c2f703e0d0a0d0a3c756c207374796c653d226d617267696e2d746f703a30636d2220747970653d2264697363223e0d0a203c6c6920636c6173733d224d736f4e6f726d616c223e3c7370616e206c616e673d22454e2d5553223e4170706c69636174696f6e732077696c6c206265206163636570746564206f6e6c79207468726f756768206f6e6c696e65206d6f64652e3c6f3a703e3c2f6f3a703e3c2f7370616e3e3c2f6c693e0d0a203c6c6920636c6173733d224d736f4e6f726d616c223e3c7370616e206c616e673d22454e2d5553223e416e79206f66666c696e65206170706c69636174696f6e20666f726d732077696c6c206e6f7420626520636f6e736964657265642e3c6f3a703e3c2f6f3a703e3c2f7370616e3e3c2f6c693e0d0a3c2f756c3e0d0a0d0a3c7020636c6173733d224d736f4e6f726d616c223e3c623e3c7370616e206c616e673d22454e2d5553223e322e2053656c656374696f6e2050726f636573733c2f7370616e3e3c2f623e3c7370616e206c616e673d22454e2d5553223e3c6f3a703e3c2f6f3a703e3c2f7370616e3e3c2f703e0d0a0d0a3c756c207374796c653d226d617267696e2d746f703a30636d2220747970653d2264697363223e0d0a203c6c6920636c6173733d224d736f4e6f726d616c223e3c7370616e206c616e673d22454e2d5553223e416674657220666f726d207375626d697373696f6e2c2063616e646964617465732077696c6c20756e646572676f2061207772697474656e0d0a20202020206578616d696e6174696f6e2e3c6f3a703e3c2f6f3a703e3c2f7370616e3e3c2f6c693e0d0a203c6c6920636c6173733d224d736f4e6f726d616c223e3c7370616e206c616e673d22454e2d5553223e43616e646964617465732077686f207175616c69667920746865207772697474656e20746573742077696c6c2062652063616c6c656420666f7220616e0d0a2020202020696e746572766965772e3c6f3a703e3c2f6f3a703e3c2f7370616e3e3c2f6c693e0d0a203c6c6920636c6173733d224d736f4e6f726d616c223e3c7370616e206c616e673d22454e2d5553223e46696e616c6c792c2073656c65637465642063616e646964617465732077696c6c206265206f666665726564206a6f696e696e672e3c6f3a703e3c2f6f3a703e3c2f7370616e3e3c2f6c693e0d0a3c2f756c3e0d0a0d0a3c7020636c6173733d224d736f4e6f726d616c223e3c623e3c7370616e206c616e673d22454e2d5553223e332e20446f63756d656e7420566572696669636174696f6e3c2f7370616e3e3c2f623e3c7370616e206c616e673d22454e2d5553223e3c6f3a703e3c2f6f3a703e3c2f7370616e3e3c2f703e0d0a0d0a3c756c207374796c653d226d617267696e2d746f703a30636d2220747970653d2264697363223e0d0a203c6c6920636c6173733d224d736f4e6f726d616c223e3c7370616e206c616e673d22454e2d5553223e4170706c69636174696f6e732077696c6c206265206163636570746564206f6e6c792069662074686520646f63756d656e7473206172652076616c69640d0a2020202020616e6420636f72726563742e3c6f3a703e3c2f6f3a703e3c2f7370616e3e3c2f6c693e0d0a203c6c6920636c6173733d224d736f4e6f726d616c223e3c7370616e206c616e673d22454e2d5553223e416e792066616c7365206f722066616b6520696e666f726d6174696f6e2077696c6c206c65616420746f20696d6d6564696174650d0a20202020206469737175616c696669636174696f6e2e3c6f3a703e3c2f6f3a703e3c2f7370616e3e3c2f6c693e0d0a3c2f756c3e0d0a0d0a3c7020636c6173733d224d736f4e6f726d616c223e3c623e3c7370616e206c616e673d22454e2d5553223e342e204e6174757265206f66204a6f623c2f7370616e3e3c2f623e3c7370616e206c616e673d22454e2d5553223e3c6f3a703e3c2f6f3a703e3c2f7370616e3e3c2f703e0d0a0d0a3c756c207374796c653d226d617267696e2d746f703a30636d2220747970653d2264697363223e0d0a203c6c6920636c6173733d224d736f4e6f726d616c223e3c7370616e206c616e673d22454e2d5553223e5468697320726563727569746d656e7420697320756e646572203c623e7072697661746520636f6e7472616374206d6f64653c2f623e2e3c6f3a703e3c2f6f3a703e3c2f7370616e3e3c2f6c693e0d0a203c6c6920636c6173733d224d736f4e6f726d616c223e3c7370616e206c616e673d22454e2d5553223e49742073686f756c64206e6f7420626520636f6e73696465726564206173206120476f7665726e6d656e74204a6f622e3c6f3a703e3c2f6f3a703e3c2f7370616e3e3c2f6c693e0d0a3c2f756c3e0d0a0d0a3c7020636c6173733d224d736f4e6f726d616c223e3c623e3c7370616e206c616e673d22454e2d5553223e352e20457870657269656e636520526571756972656d656e743c2f7370616e3e3c2f623e3c7370616e206c616e673d22454e2d5553223e3c6f3a703e3c2f6f3a703e3c2f7370616e3e3c2f703e0d0a0d0a3c756c207374796c653d226d617267696e2d746f703a30636d2220747970653d2264697363223e0d0a203c6c6920636c6173733d224d736f4e6f726d616c223e3c7370616e206c616e673d22454e2d5553223e41206d696e696d756d206f662032207965617273206f6620657870657269656e6365206973206d616e6461746f72792e3c6f3a703e3c2f6f3a703e3c2f7370616e3e3c2f6c693e0d0a203c6c6920636c6173733d224d736f4e6f726d616c223e3c7370616e206c616e673d22454e2d5553223e43616e6469646174657320776974686f75742074686520726571756972656420657870657269656e63652073686f756c64206e6f74206170706c792e3c6f3a703e3c2f6f3a703e3c2f7370616e3e3c2f6c693e0d0a3c2f756c3e0d0a0d0a3c7020636c6173733d224d736f4e6f726d616c223e3c623e3c7370616e206c616e673d22454e2d5553223e362e20436f6e747261637420506572696f643c2f7370616e3e3c2f623e3c7370616e206c616e673d22454e2d5553223e3c6f3a703e3c2f6f3a703e3c2f7370616e3e3c2f703e0d0a0d0a3c756c207374796c653d226d617267696e2d746f703a30636d2220747970653d2264697363223e0d0a203c6c6920636c6173733d224d736f4e6f726d616c223e3c7370616e206c616e673d22454e2d5553223e546865206a6f622077696c6c206265206f666665726564206f6e206120636f6e747261637475616c2062617369732e3c6f3a703e3c2f6f3a703e3c2f7370616e3e3c2f6c693e0d0a203c6c6920636c6173733d224d736f4e6f726d616c223e3c7370616e206c616e673d22454e2d5553223e447572696e672074686520636f6e747261637420706572696f642c20696620612063616e6469646174652073686f777320696e6469736369706c696e652c0d0a202020202072656d61696e7320616273656e742c206f7220636f6d6d697473206120736572696f7573206d697374616b652c207465726d696e6174696f6e2077696c6c2062650d0a2020202020696d6d6564696174652e3c6f3a703e3c2f6f3a703e3c2f7370616e3e3c2f6c693e0d0a3c2f756c3e0d0a0d0a3c7020636c6173733d224d736f4e6f726d616c223e3c623e3c7370616e206c616e673d22454e2d5553223e372e204170706c69636174696f6e204665653c2f7370616e3e3c2f623e3c7370616e206c616e673d22454e2d5553223e3c6f3a703e3c2f6f3a703e3c2f7370616e3e3c2f703e0d0a0d0a3c756c207374796c653d226d617267696e2d746f703a30636d2220747970653d2264697363223e0d0a203c6c6920636c6173733d224d736f4e6f726d616c223e3c7370616e206c616e673d22454e2d5553223e546865206170706c69636174696f6e20666565206973203c623ee282b93532303c2f623e2c20746f2062652070616964206f6e6c696e65206f6e6c792e3c6f3a703e3c2f6f3a703e3c2f7370616e3e3c2f6c693e0d0a203c6c6920636c6173733d224d736f4e6f726d616c223e3c7370616e206c616e673d22454e2d5553223e54686520666565206f6e63652070616964206973203c623e6e6f6e2d726566756e6461626c653c2f623e2e3c6f3a703e3c2f6f3a703e3c2f7370616e3e3c2f6c693e0d0a3c2f756c3e0d0a0d0a3c7020636c6173733d224d736f4e6f726d616c223e3c623e3c7370616e206c616e673d22454e2d5553223e382e20496d706f7274616e7420496e737472756374696f6e733c2f7370616e3e3c2f623e3c7370616e206c616e673d22454e2d5553223e3c6f3a703e3c2f6f3a703e3c2f7370616e3e3c2f703e0d0a0d0a3c756c207374796c653d226d617267696e2d746f703a30636d2220747970653d2264697363223e0d0a203c6c6920636c6173733d224d736f4e6f726d616c223e3c7370616e206c616e673d22454e2d5553223e4f6e6c792063616e646964617465732077686f206d65657420616c6c20656c69676962696c69747920616e6420657870657269656e63650d0a202020202063726974657269612073686f756c64206170706c792e3c6f3a703e3c2f6f3a703e3c2f7370616e3e3c2f6c693e0d0a203c6c6920636c6173733d224d736f4e6f726d616c223e3c7370616e206c616e673d22454e2d5553223e416e79206b696e64206f6620756e66616972207072657373757265206f72207265636f6d6d656e646174696f6e2077696c6c206e6f742062650d0a2020202020656e7465727461696e656420647572696e67207468652070726f636573732e3c6f3a703e3c2f6f3a703e3c2f7370616e3e3c2f6c693e0d0a203c6c6920636c6173733d224d736f4e6f726d616c223e3c7370616e206c616e673d22454e2d5553223e546865206465636973696f6e206f6620746865206f7267616e697a6174696f6e2077696c6c206265203c623e66696e616c20616e642062696e64696e673c2f623e2e3c6f3a703e3c2f6f3a703e3c2f7370616e3e3c2f6c693e0d0a3c2f756c3e0d0a0d0a3c7020636c6173733d224d736f4e6f726d616c223e3c7370616e206c616e673d22454e2d5553223e266e6273703b3c2f7370616e3e3c2f703e3c2f68343e, 1, '2025-09-30 14:43:16', '2025-10-03 15:44:31');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_type`
--

CREATE TABLE `job_type` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `addeddate` datetime DEFAULT NULL,
  `modifieddate` datetime DEFAULT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_type`
--

INSERT INTO `job_type` (`id`, `name`, `slug`, `status`, `addeddate`, `modifieddate`, `image`) VALUES
(1, 'Full Time', 'full-time', 1, '2025-09-30 13:24:29', NULL, NULL),
(2, 'Private', 'private', 1, '2025-09-30 13:24:37', NULL, NULL),
(3, 'Urgent', 'urgent', 1, '2025-09-30 13:24:44', '2025-09-30 13:24:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `id` int(11) NOT NULL,
  `user_id` text NOT NULL,
  `device_id` text NOT NULL,
  `ip_address` text NOT NULL,
  `login_date` date NOT NULL,
  `login_time` time NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `logout_date` date DEFAULT NULL,
  `logout_time` time DEFAULT NULL,
  `login_status` int(11) NOT NULL COMMENT '0=login,1=logout,'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `meta_tags`
--

CREATE TABLE `meta_tags` (
  `id` int(11) NOT NULL,
  `page_name` varchar(150) DEFAULT NULL,
  `meta_title` text DEFAULT NULL,
  `meta_auther` varchar(150) DEFAULT NULL,
  `meta_keyword` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `add_date_time` datetime DEFAULT NULL,
  `update_date_time` datetime DEFAULT NULL,
  `update_history` text DEFAULT NULL,
  `is_delete` int(2) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `type` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `meta_tags`
--

INSERT INTO `meta_tags` (`id`, `page_name`, `meta_title`, `meta_auther`, `meta_keyword`, `meta_description`, `slug`, `add_date_time`, `update_date_time`, `update_history`, `is_delete`, `status`, `type`) VALUES
(31, NULL, NULL, NULL, NULL, NULL, 'government-sector-jobs', NULL, NULL, NULL, NULL, NULL, NULL),
(32, NULL, NULL, NULL, NULL, NULL, 'private-sector-jobs', NULL, NULL, NULL, NULL, NULL, NULL),
(33, NULL, NULL, NULL, NULL, NULL, 'pan-india-coverage', NULL, NULL, NULL, NULL, NULL, NULL),
(34, NULL, NULL, NULL, NULL, NULL, 'full-time', NULL, NULL, NULL, NULL, NULL, NULL),
(35, NULL, NULL, NULL, NULL, NULL, 'private', NULL, NULL, NULL, NULL, NULL, NULL),
(37, NULL, NULL, NULL, NULL, NULL, 'urgent', NULL, NULL, NULL, NULL, NULL, NULL),
(40, NULL, NULL, NULL, NULL, NULL, 'spiderman', NULL, NULL, NULL, NULL, NULL, NULL),
(44, NULL, NULL, NULL, NULL, NULL, 'software-engineer-android-libraries', NULL, NULL, NULL, NULL, NULL, NULL),
(49, NULL, NULL, NULL, NULL, NULL, 'nursery-teacher-training-recruitment-2025', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `multipleimage`
--

CREATE TABLE `multipleimage` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `multiple_image_json` text DEFAULT NULL,
  `single_image_data` text DEFAULT NULL,
  `multiple_images` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `addeddate` text DEFAULT NULL,
  `modifieddate` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `role` int(11) NOT NULL COMMENT '1=user,2=vendor',
  `username` text NOT NULL,
  `slug` text NOT NULL,
  `mobile` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `role_access` longtext DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `addeddate` datetime DEFAULT NULL,
  `modifieddate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`, `slug`, `role_access`, `status`, `addeddate`, `modifieddate`) VALUES
(9, 'Manager', 'manager', '{\"main_access\":[\"2\"],\"inner_access\":[[],[],[\"3\"],[\"1\",\"2\",\"3\",\"4\"],[\"2\"],[\"2\"],[]]}', 1, '2025-07-15 12:54:23', '2025-07-15 15:15:14');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('1XQROF20GXCtgdCTz5ZtFJ6EvwchTvFXUNsaX5JR', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'YTo3OntzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo1MzoiaHR0cDovL2xvY2FsaG9zdC9xdWlja2pvYnNlcnZpY2VhZG1pbi9hZG1pbi9hcHBseV9ub3ciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjY6Il90b2tlbiI7czo0MDoibGdId2hQUExDY3piOGp6UmQ4UzJQYXRVSlNzV1V0YnA1WTJSRFVYQSI7czo4OiJhZG1pbl9pZCI7aToyO3M6MTQ6ImFkbWluX3VzZXJuYW1lIjtzOjE1OiJhZG1pbkBnbWFpbC5jb20iO3M6MTA6ImFkbWluX25hbWUiO3M6NToiQWRtaW4iO3M6MTQ6ImFkbWluX3Bhc3N3b3JkIjtzOjU6ImFkbWluIjt9', 1759486995);

-- --------------------------------------------------------

--
-- Table structure for table `site_setting`
--

CREATE TABLE `site_setting` (
  `id` int(11) NOT NULL,
  `logo` text NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `alt_mobile` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alt_email` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `facebook` text NOT NULL,
  `twitter` text NOT NULL,
  `instagram` text NOT NULL,
  `youtube` text NOT NULL,
  `map` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_setting`
--

INSERT INTO `site_setting` (`id`, `logo`, `mobile`, `alt_mobile`, `email`, `alt_email`, `address`, `facebook`, `twitter`, `instagram`, `youtube`, `map`) VALUES
(1, '68db6b35d404c.png', '9999999999', '9586741023', 'myemail@gmail.com', 'altemail@gmail.com', 'your addressssss INDIA', 'https://www.facebook.com', 'https://twitter.com', 'https://www.instagram.com', 'https://www.youtube.com', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30767295.116023116!2d60.946027684017714!3d19.722272265144735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1713167102172!5m2!1sen!2sin\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `addeddate` datetime DEFAULT NULL,
  `modifieddate` datetime DEFAULT NULL,
  `image` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `slug`, `status`, `addeddate`, `modifieddate`, `image`) VALUES
(1, 'app', 'app', 1, '2025-09-30 13:28:51', NULL, NULL),
(2, 'android', 'android', 1, '2025-09-30 13:29:00', NULL, NULL),
(3, 'wordpress', 'wordpress', 1, '2025-09-30 13:29:08', NULL, NULL),
(4, 'react', 'react', 1, '2025-09-30 13:29:17', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `sub_title` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `content` text NOT NULL,
  `status` int(11) DEFAULT NULL,
  `addeddate` datetime DEFAULT NULL,
  `modifieddate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slugs`
--

CREATE TABLE `slugs` (
  `id` int(11) NOT NULL,
  `slug` text NOT NULL,
  `table_name` varchar(100) NOT NULL,
  `page_name` varchar(150) NOT NULL,
  `controller_name` varchar(150) NOT NULL,
  `p_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slugs`
--

INSERT INTO `slugs` (`id`, `slug`, `table_name`, `page_name`, `controller_name`, `p_id`) VALUES
(326, 'government-sector-jobs', 'category', 'category-wise-job', 'category', 1),
(327, 'private-sector-jobs', 'category', 'category-wise-job', 'category', 2),
(328, 'pan-india-coverage', 'category', 'category-wise-job', 'category', 3),
(344, 'nursery-teacher-training-recruitment-2025', 'job', 'job-details', 'job', 1);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `addeddate` datetime DEFAULT NULL,
  `modifieddate` datetime DEFAULT NULL,
  `image` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `name`, `slug`, `country_id`, `status`, `addeddate`, `modifieddate`, `image`) VALUES
(1, 'ANDHRA PRADESH', '', 99, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(2, 'ASSAM', '', 99, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(3, 'ARUNACHAL PRADESH', '', 99, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(4, 'BIHAR', '', 99, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(5, 'GUJRAT', '', 99, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(6, 'HARYANA', '', 99, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(7, 'HIMACHAL PRADESH', '', 99, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(8, 'JAMMU & KASHMIR', '', 99, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(9, 'KARNATAKA', '', 99, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(10, 'KERALA', '', 99, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(11, 'MADHYA PRADESH', '', 99, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(12, 'MAHARASHTRA', '', 99, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(13, 'MANIPUR', '', 99, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(14, 'MEGHALAYA', '', 99, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(15, 'MIZORAM', '', 99, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(16, 'NAGALAND', '', 99, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(17, 'ORISSA', '', 99, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(18, 'PUNJAB', '', 99, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(19, 'RAJASTHAN', '', 99, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(20, 'SIKKIM', '', 99, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(21, 'TAMIL NADU', '', 99, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(22, 'TRIPURA', '', 99, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(23, 'UTTAR PRADESH', '', 99, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(24, 'WEST BENGAL', '', 99, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(25, 'DELHI', '', 99, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(26, 'GOA', '', 99, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(27, 'PONDICHERY', '', 99, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(28, 'LAKSHDWEEP', '', 99, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(29, 'DAMAN & DIU', '', 99, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(30, 'DADRA & NAGAR', '', 99, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(31, 'CHANDIGARH', '', 99, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(32, 'ANDAMAN & NICOBAR', '', 99, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(33, 'UTTARANCHAL', '', 99, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(34, 'JHARKHAND', '', 99, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(35, 'CHATTISGARH', '', 99, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `type` int(11) DEFAULT NULL COMMENT '1=admin,2=subadmin',
  `role` int(11) DEFAULT NULL,
  `access` text DEFAULT NULL,
  `first_name` text DEFAULT NULL,
  `last_name` text DEFAULT NULL,
  `username` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `gender` text DEFAULT NULL,
  `dob` text DEFAULT NULL,
  `martial` text DEFAULT NULL,
  `age` text DEFAULT NULL,
  `country` text DEFAULT NULL,
  `state` text DEFAULT NULL,
  `hash_key` text DEFAULT NULL,
  `hash_expiry` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `addeddate` datetime DEFAULT NULL,
  `modifieddate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `type`, `role`, `access`, `first_name`, `last_name`, `username`, `password`, `email`, `mobile`, `address`, `image`, `gender`, `dob`, `martial`, `age`, `country`, `state`, `hash_key`, `hash_expiry`, `status`, `addeddate`, `modifieddate`) VALUES
(1, 1, 0, '', 'Azmal', 'Ansari', 'azmal123', 'azmal123', 'admin@gmail.com', '46546', 'sfsfsdf sdefdsfs fsdf sdf', 'user2.jpg', 'male', '01/01/2022', 'single', '22', 'india', 'elhi', NULL, NULL, 1, NULL, NULL),
(2, 1, 0, '', 'Admin', NULL, 'admin@gmail.com', 'admin', 'admin123@gmail.com', '95822980123', 'India', '675442c5d265d.png', 'male', '01/01/2022', 'single', '22', 'india', 'delhi', '6ef5a86a72d307d9d2df14306a26534f64236ca1887fb9ba0cff55e6e0a26390', '2024-08-30 13:34:00', 1, NULL, NULL),
(3, 1, 0, '', 'Wolverine', 'logen', 'azmal', 'azmal', 'wolverine@gmail.com', '897989', 'sfsfsdf sdefdsfs fsdf sdf', 'user3.jpg', 'male', '01/01/2022', 'single', '22', 'india', 'delhi', NULL, NULL, 1, NULL, NULL),
(4, 2, 9, '{\"main_access\":[\"3\"],\"inner_access\":[[],[],[\"3\"],[\"1\",\"2\",\"3\",\"4\"],[\"2\"],[\"2\"],[]]}', '', '', 'azmal12345', 'azmal12345', '', '', '', '', '', '', '', '', '', '', NULL, NULL, 1, '2024-08-24 17:23:45', '2025-07-15 15:03:46'),
(5, 2, 9, '{\"main_access\":[\"3\"],\"inner_access\":[[],[],[\"3\"],[\"1\",\"2\",\"3\",\"4\"],[\"2\"],[\"2\"],[]]}', NULL, NULL, 'superman', 'superman', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2025-07-15 13:13:14', '2025-07-15 15:03:43');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `image` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `position` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `addeddate` datetime DEFAULT NULL,
  `modifieddate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `image`, `name`, `slug`, `position`, `content`, `status`, `addeddate`, `modifieddate`) VALUES
(2, '6759696624865.png', 'Amit Ansari', 'amit-ansari', 'Client', 'Lorem ipsum dolor sit amet, consectetur adipisicin elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim', 1, '2024-12-11 15:56:37', '2025-07-14 17:45:58'),
(3, '6874f53ce5b86.png', 'Spiderman', 'spiderman', 'Client', 'Lorem ipsum dolor sit amet, consectetur adipisicin elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim', 1, '2025-07-14 17:47:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_records`
--
ALTER TABLE `activity_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apply_now`
--
ALTER TABLE `apply_now`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_type`
--
ALTER TABLE `job_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meta_tags`
--
ALTER TABLE `meta_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multipleimage`
--
ALTER TABLE `multipleimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `site_setting`
--
ALTER TABLE `site_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slugs`
--
ALTER TABLE `slugs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_records`
--
ALTER TABLE `activity_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=265;

--
-- AUTO_INCREMENT for table `apply_now`
--
ALTER TABLE `apply_now`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=604;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_type`
--
ALTER TABLE `job_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meta_tags`
--
ALTER TABLE `meta_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `multipleimage`
--
ALTER TABLE `multipleimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `site_setting`
--
ALTER TABLE `site_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `slugs`
--
ALTER TABLE `slugs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=345;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
