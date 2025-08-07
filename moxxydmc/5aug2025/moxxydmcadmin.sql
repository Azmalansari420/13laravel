-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2025 at 02:57 PM
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
-- Database: `moxxydmcadmin`
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
(5, '::1', 'http://localhost/moxxydmcadmin/admin/dashboard', '2025-07-17', '12:33:52', 2, 'admin', 'admin'),
(6, '::1', 'http://localhost/moxxydmcadmin/admin/site_setting/edit/1', '2025-07-17', '12:33:58', 2, 'admin', 'admin'),
(7, '::1', 'http://localhost/moxxydmcadmin/admin/site_setting/edit/1', '2025-07-17', '12:34:13', 2, 'admin', 'admin'),
(8, '::1', 'http://localhost/moxxydmcadmin/admin/slider', '2025-07-17', '12:34:17', 2, 'admin', 'admin'),
(9, '::1', 'http://localhost/moxxydmcadmin/admin/contact', '2025-07-17', '12:34:19', 2, 'admin', 'admin'),
(10, '::1', 'http://localhost/moxxydmcadmin/admin/site_setting/edit/1', '2025-07-17', '12:34:21', 2, 'admin', 'admin'),
(11, '::1', 'http://localhost/moxxydmcadmin/admin/dashboard', '2025-07-17', '12:34:22', 2, 'admin', 'admin'),
(12, '::1', 'http://localhost/moxxydmcadmin/admin/slider', '2025-07-17', '12:36:55', 2, 'admin', 'admin'),
(13, '::1', 'http://localhost/moxxydmcadmin/admin/contact', '2025-07-17', '13:18:06', 2, 'admin', 'admin'),
(14, '::1', 'http://localhost/moxxydmcadmin/admin/slider', '2025-07-17', '13:18:06', 2, 'admin', 'admin'),
(15, '::1', 'http://localhost/moxxydmcadmin/admin/contact', '2025-07-17', '13:18:20', 2, 'admin', 'admin'),
(16, '::1', 'http://localhost/moxxydmcadmin/admin/contact', '2025-07-17', '14:37:17', 2, 'admin', 'admin'),
(17, '::1', 'http://localhost/moxxydmcadmin/admin/dashboard', '2025-07-25', '16:54:37', 2, 'admin@gmail.com', 'admin'),
(18, '::1', 'http://localhost/moxxydmcadmin/admin/site_setting/edit/1', '2025-07-25', '16:54:40', 2, 'admin@gmail.com', 'admin'),
(19, '::1', 'http://localhost/moxxydmcadmin/admin/site_setting/edit/1', '2025-07-25', '16:55:19', 2, 'admin@gmail.com', 'admin'),
(20, '::1', 'http://localhost/moxxydmcadmin/admin/site_setting/edit/1', '2025-07-25', '16:55:25', 2, 'admin@gmail.com', 'admin'),
(21, '::1', 'http://localhost/moxxydmcadmin/admin/slider', '2025-07-25', '17:17:59', 2, 'admin@gmail.com', 'admin'),
(22, '::1', 'http://localhost/moxxydmcadmin/admin/slider/add', '2025-07-25', '17:18:01', 2, 'admin@gmail.com', 'admin'),
(23, '::1', 'http://localhost/moxxydmcadmin/admin/dashboard', '2025-07-26', '12:40:39', 2, 'admin@gmail.com', 'admin'),
(24, '::1', 'http://localhost/moxxydmcadmin/admin/slider', '2025-07-26', '12:40:50', 2, 'admin@gmail.com', 'admin'),
(25, '::1', 'http://localhost/moxxydmcadmin/admin/slider/add', '2025-07-26', '12:40:52', 2, 'admin@gmail.com', 'admin'),
(26, '::1', 'http://localhost/moxxydmcadmin/admin/slider/add', '2025-07-26', '12:43:42', 2, 'admin@gmail.com', 'admin'),
(27, '::1', 'http://localhost/moxxydmcadmin/admin/slider', '2025-07-26', '12:44:15', 2, 'admin@gmail.com', 'admin'),
(28, '::1', 'http://localhost/moxxydmcadmin/admin/slider', '2025-07-26', '12:44:32', 2, 'admin@gmail.com', 'admin'),
(29, '::1', 'http://localhost/moxxydmcadmin/admin/slider/edit/57', '2025-07-26', '12:44:35', 2, 'admin@gmail.com', 'admin'),
(30, '::1', 'http://localhost/moxxydmcadmin/admin/slider', '2025-07-26', '12:44:36', 2, 'admin@gmail.com', 'admin'),
(31, '::1', 'http://localhost/moxxydmcadmin/admin/slider', '2025-07-26', '12:45:15', 2, 'admin@gmail.com', 'admin'),
(32, '::1', 'http://localhost/moxxydmcadmin/admin/slider/edit/57', '2025-07-26', '12:45:41', 2, 'admin@gmail.com', 'admin'),
(33, '::1', 'http://localhost/moxxydmcadmin/admin/slider/edit/57', '2025-07-26', '12:45:48', 2, 'admin@gmail.com', 'admin'),
(34, '::1', 'http://localhost/moxxydmcadmin/admin/slider', '2025-07-26', '12:46:06', 2, 'admin@gmail.com', 'admin'),
(35, '::1', 'http://localhost/moxxydmcadmin/admin/slider/edit/57', '2025-07-26', '12:46:36', 2, 'admin@gmail.com', 'admin'),
(36, '::1', 'http://localhost/moxxydmcadmin/admin/slider', '2025-07-26', '12:46:38', 2, 'admin@gmail.com', 'admin'),
(37, '::1', 'http://localhost/moxxydmcadmin/admin/slider/add', '2025-07-26', '12:46:41', 2, 'admin@gmail.com', 'admin'),
(38, '::1', 'http://localhost/moxxydmcadmin/admin/slider', '2025-07-26', '12:46:50', 2, 'admin@gmail.com', 'admin'),
(39, '::1', 'http://localhost/moxxydmcadmin/admin/slider/add', '2025-07-26', '12:46:53', 2, 'admin@gmail.com', 'admin'),
(40, '::1', 'http://localhost/moxxydmcadmin/admin/slider', '2025-07-26', '12:47:00', 2, 'admin@gmail.com', 'admin'),
(41, '::1', 'http://localhost/moxxydmcadmin/admin/slider', '2025-07-26', '14:43:59', 2, 'admin@gmail.com', 'admin'),
(42, '::1', 'http://localhost/moxxydmcadmin/admin/slider', '2025-07-26', '14:44:50', 2, 'admin@gmail.com', 'admin'),
(43, '::1', 'http://localhost/moxxydmcadmin/admin/slider', '2025-07-26', '14:45:52', 2, 'admin@gmail.com', 'admin'),
(44, '::1', 'http://localhost/moxxydmcadmin/admin/content/edit/1', '2025-07-26', '14:48:24', 2, 'admin@gmail.com', 'admin'),
(45, '::1', 'http://localhost/moxxydmcadmin/admin/content/edit/1', '2025-07-26', '14:49:05', 2, 'admin@gmail.com', 'admin'),
(46, '::1', 'http://localhost/moxxydmcadmin/admin/content/edit/1', '2025-07-26', '14:49:21', 2, 'admin@gmail.com', 'admin'),
(47, '::1', 'http://localhost/moxxydmcadmin/admin/content/edit/1', '2025-07-26', '14:52:33', 2, 'admin@gmail.com', 'admin'),
(48, '::1', 'http://localhost/moxxydmcadmin/admin/content/edit/1', '2025-07-26', '14:52:56', 2, 'admin@gmail.com', 'admin'),
(49, '::1', 'http://localhost/moxxydmcadmin/admin/content/edit/1', '2025-07-26', '14:53:07', 2, 'admin@gmail.com', 'admin'),
(50, '::1', 'http://localhost/moxxydmcadmin/admin/content/edit/1', '2025-07-26', '14:56:05', 2, 'admin@gmail.com', 'admin'),
(51, '::1', 'http://localhost/moxxydmcadmin/admin/content/edit/1', '2025-07-26', '14:56:14', 2, 'admin@gmail.com', 'admin'),
(52, '::1', 'http://localhost/moxxydmcadmin/admin/content/edit/1', '2025-07-26', '14:56:36', 2, 'admin@gmail.com', 'admin'),
(53, '::1', 'http://localhost/moxxydmcadmin/admin/content/edit/1', '2025-07-26', '14:56:43', 2, 'admin@gmail.com', 'admin'),
(54, '::1', 'http://localhost/moxxydmcadmin/admin/content/edit/1', '2025-07-26', '14:56:58', 2, 'admin@gmail.com', 'admin'),
(55, '::1', 'http://localhost/moxxydmcadmin/admin/content/edit/1', '2025-07-26', '14:57:09', 2, 'admin@gmail.com', 'admin'),
(56, '::1', 'http://localhost/moxxydmcadmin/admin/content/edit/1', '2025-07-26', '14:57:21', 2, 'admin@gmail.com', 'admin'),
(57, '::1', 'http://localhost/moxxydmcadmin/admin/content/edit/1', '2025-07-26', '14:57:23', 2, 'admin@gmail.com', 'admin'),
(58, '::1', 'http://localhost/moxxydmcadmin/admin/content/edit/1', '2025-07-26', '14:57:28', 2, 'admin@gmail.com', 'admin'),
(59, '::1', 'http://localhost/moxxydmcadmin/admin/content/edit/1', '2025-07-26', '14:57:41', 2, 'admin@gmail.com', 'admin'),
(60, '::1', 'http://localhost/moxxydmcadmin/admin/content/edit/1', '2025-07-26', '14:59:02', 2, 'admin@gmail.com', 'admin'),
(61, '::1', 'http://localhost/moxxydmcadmin/admin/content/edit/1', '2025-07-26', '14:59:07', 2, 'admin@gmail.com', 'admin'),
(62, '::1', 'http://localhost/moxxydmcadmin/admin/content/edit/1', '2025-07-26', '14:59:23', 2, 'admin@gmail.com', 'admin'),
(63, '::1', 'http://localhost/moxxydmcadmin/admin/content/edit/1', '2025-07-26', '15:00:27', 2, 'admin@gmail.com', 'admin'),
(64, '::1', 'http://localhost/moxxydmcadmin/admin/content/edit/1', '2025-07-26', '15:01:54', 2, 'admin@gmail.com', 'admin'),
(65, '::1', 'http://localhost/moxxydmcadmin/admin/content/edit/1', '2025-07-26', '15:02:06', 2, 'admin@gmail.com', 'admin'),
(66, '::1', 'http://localhost/moxxydmcadmin/admin/content/edit/1', '2025-07-26', '15:03:55', 2, 'admin@gmail.com', 'admin'),
(67, '::1', 'http://localhost/moxxydmcadmin/admin/content/home-about/1', '2025-07-26', '15:06:19', 2, 'admin@gmail.com', 'admin'),
(68, '::1', 'http://localhost/moxxydmcadmin/admin/content/home-about/1', '2025-07-26', '15:06:59', 2, 'admin@gmail.com', 'admin'),
(69, '::1', 'http://localhost/moxxydmcadmin/admin/content/home-about/1', '2025-07-26', '15:08:45', 2, 'admin@gmail.com', 'admin'),
(70, '::1', 'http://localhost/moxxydmcadmin/admin/content/edit/1', '2025-07-26', '15:09:13', 2, 'admin@gmail.com', 'admin'),
(71, '::1', 'http://localhost/moxxydmcadmin/admin/content/edit/1', '2025-07-26', '15:09:16', 2, 'admin@gmail.com', 'admin'),
(72, '::1', 'http://localhost/moxxydmcadmin/admin/content/edit/1', '2025-07-26', '15:09:27', 2, 'admin@gmail.com', 'admin'),
(73, '::1', 'http://localhost/moxxydmcadmin/admin/content/edit/1', '2025-07-26', '15:09:29', 2, 'admin@gmail.com', 'admin'),
(74, '::1', 'http://localhost/moxxydmcadmin/admin/content/edit/1', '2025-07-26', '15:10:06', 2, 'admin@gmail.com', 'admin'),
(75, '::1', 'http://localhost/moxxydmcadmin/admin/content/edit/1', '2025-07-26', '15:10:16', 2, 'admin@gmail.com', 'admin'),
(76, '::1', 'http://localhost/moxxydmcadmin/admin/content/edit/1', '2025-07-26', '15:10:30', 2, 'admin@gmail.com', 'admin'),
(77, '::1', 'http://localhost/moxxydmcadmin/admin/content/edit/1', '2025-07-26', '15:11:02', 2, 'admin@gmail.com', 'admin'),
(78, '::1', 'http://localhost/moxxydmcadmin/admin/content/edit/1', '2025-07-26', '15:11:15', 2, 'admin@gmail.com', 'admin'),
(79, '::1', 'http://localhost/moxxydmcadmin/admin/content/edit/1', '2025-07-26', '15:11:34', 2, 'admin@gmail.com', 'admin'),
(80, '::1', 'http://localhost/moxxydmcadmin/admin/content/edit/1', '2025-07-26', '15:11:47', 2, 'admin@gmail.com', 'admin'),
(81, '::1', 'http://localhost/moxxydmcadmin/admin/content/edit/1', '2025-07-26', '15:12:10', 2, 'admin@gmail.com', 'admin'),
(82, '::1', 'http://localhost/moxxydmcadmin/admin/content/edit/1', '2025-07-26', '15:12:16', 2, 'admin@gmail.com', 'admin'),
(83, '::1', 'http://localhost/moxxydmcadmin/admin/content/edit/1', '2025-07-26', '15:22:53', 2, 'admin@gmail.com', 'admin'),
(84, '::1', 'http://localhost/moxxydmcadmin/admin/content/about/1', '2025-07-26', '15:22:56', 2, 'admin@gmail.com', 'admin'),
(85, '::1', 'http://localhost/moxxydmcadmin/admin/content/about/1', '2025-07-26', '15:23:34', 2, 'admin@gmail.com', 'admin'),
(86, '::1', 'http://localhost/moxxydmcadmin/admin/content/about/1', '2025-07-26', '15:24:06', 2, 'admin@gmail.com', 'admin'),
(87, '::1', 'http://localhost/moxxydmcadmin/admin/content/about/2', '2025-07-26', '15:24:08', 2, 'admin@gmail.com', 'admin'),
(88, '::1', 'http://localhost/moxxydmcadmin/admin/content/about/2', '2025-07-26', '15:26:12', 2, 'admin@gmail.com', 'admin'),
(89, '::1', 'http://localhost/moxxydmcadmin/admin/content/about/2', '2025-07-26', '15:26:18', 2, 'admin@gmail.com', 'admin'),
(90, '::1', 'http://localhost/moxxydmcadmin/admin/content/edit/1', '2025-07-26', '15:26:30', 2, 'admin@gmail.com', 'admin'),
(91, '::1', 'http://localhost/moxxydmcadmin/admin/content/about/2', '2025-07-26', '15:27:05', 2, 'admin@gmail.com', 'admin'),
(92, '::1', 'http://localhost/moxxydmcadmin/admin/content/about/2', '2025-07-26', '15:27:10', 2, 'admin@gmail.com', 'admin'),
(93, '::1', 'http://localhost/moxxydmcadmin/admin/content/about/2', '2025-07-26', '15:27:38', 2, 'admin@gmail.com', 'admin'),
(94, '::1', 'http://localhost/moxxydmcadmin/admin/content/about/2', '2025-07-26', '15:27:46', 2, 'admin@gmail.com', 'admin'),
(95, '::1', 'http://localhost/moxxydmcadmin/admin/content/about/2', '2025-07-26', '15:27:53', 2, 'admin@gmail.com', 'admin'),
(96, '::1', 'http://localhost/moxxydmcadmin/admin/content/about/2', '2025-07-26', '15:28:07', 2, 'admin@gmail.com', 'admin'),
(97, '::1', 'http://localhost/moxxydmcadmin/admin/content/about/2', '2025-07-26', '15:28:10', 2, 'admin@gmail.com', 'admin'),
(98, '::1', 'http://localhost/moxxydmcadmin/admin/content/about/2', '2025-07-26', '15:28:12', 2, 'admin@gmail.com', 'admin'),
(99, '::1', 'http://localhost/moxxydmcadmin/admin/content/about/2', '2025-07-26', '15:28:21', 2, 'admin@gmail.com', 'admin'),
(100, '::1', 'http://localhost/moxxydmcadmin/admin/content/about/2', '2025-07-26', '15:28:27', 2, 'admin@gmail.com', 'admin'),
(101, '::1', 'http://localhost/moxxydmcadmin/admin/content/about/2', '2025-07-26', '15:28:29', 2, 'admin@gmail.com', 'admin'),
(102, '::1', 'http://localhost/moxxydmcadmin/admin/content/about/2', '2025-07-26', '15:28:56', 2, 'admin@gmail.com', 'admin'),
(103, '::1', 'http://localhost/moxxydmcadmin/admin/content/about/2', '2025-07-26', '15:29:03', 2, 'admin@gmail.com', 'admin'),
(104, '::1', 'http://localhost/moxxydmcadmin/admin/content/about/2', '2025-07-26', '15:29:12', 2, 'admin@gmail.com', 'admin'),
(105, '::1', 'http://localhost/moxxydmcadmin/admin/content/edit/1', '2025-07-26', '15:29:15', 2, 'admin@gmail.com', 'admin'),
(106, '::1', 'http://localhost/moxxydmcadmin/admin/content/about/1', '2025-07-26', '15:29:17', 2, 'admin@gmail.com', 'admin'),
(107, '::1', 'http://localhost/moxxydmcadmin/admin/content/edit/1', '2025-07-26', '15:29:21', 2, 'admin@gmail.com', 'admin'),
(108, '::1', 'http://localhost/moxxydmcadmin/admin/content/edit/1', '2025-07-26', '15:29:34', 2, 'admin@gmail.com', 'admin'),
(109, '::1', 'http://localhost/moxxydmcadmin/admin/content/about/1', '2025-07-26', '15:29:36', 2, 'admin@gmail.com', 'admin'),
(110, '::1', 'http://localhost/moxxydmcadmin/admin/content/about/2', '2025-07-26', '15:29:42', 2, 'admin@gmail.com', 'admin'),
(111, '::1', 'http://localhost/moxxydmcadmin/admin/content/about/2', '2025-07-26', '15:30:28', 2, 'admin@gmail.com', 'admin'),
(112, '::1', 'http://localhost/moxxydmcadmin/admin/content/about/2', '2025-07-26', '15:30:31', 2, 'admin@gmail.com', 'admin'),
(113, '::1', 'http://localhost/moxxydmcadmin/admin/content/edit/1', '2025-07-26', '15:30:35', 2, 'admin@gmail.com', 'admin'),
(114, '::1', 'http://localhost/moxxydmcadmin/admin/content/edit/1', '2025-07-26', '15:30:37', 2, 'admin@gmail.com', 'admin'),
(115, '::1', 'http://localhost/moxxydmcadmin/admin/content/edit/1', '2025-07-26', '15:35:13', 2, 'admin@gmail.com', 'admin'),
(116, '::1', 'http://localhost/moxxydmcadmin/admin/content/edit/1', '2025-07-26', '15:35:19', 2, 'admin@gmail.com', 'admin'),
(117, '::1', 'http://localhost/moxxydmcadmin/admin/content/privacy/3', '2025-07-26', '15:35:21', 2, 'admin@gmail.com', 'admin'),
(118, '::1', 'http://localhost/moxxydmcadmin/admin/content/privacy/3', '2025-07-26', '15:35:40', 2, 'admin@gmail.com', 'admin'),
(119, '::1', 'http://localhost/moxxydmcadmin/admin/content/privacy/3', '2025-07-26', '15:36:01', 2, 'admin@gmail.com', 'admin'),
(120, '::1', 'http://localhost/moxxydmcadmin/admin/content/privacy/3', '2025-07-26', '15:36:15', 2, 'admin@gmail.com', 'admin'),
(121, '::1', 'http://localhost/moxxydmcadmin/admin/content/privacy/3', '2025-07-26', '15:36:18', 2, 'admin@gmail.com', 'admin'),
(122, '::1', 'http://localhost/moxxydmcadmin/admin/content/privacy/3', '2025-07-26', '15:37:33', 2, 'admin@gmail.com', 'admin'),
(123, '::1', 'http://localhost/moxxydmcadmin/admin/content/privacy/3', '2025-07-26', '15:39:55', 2, 'admin@gmail.com', 'admin'),
(124, '::1', 'http://localhost/moxxydmcadmin/admin/content/privacy/3', '2025-07-26', '15:40:02', 2, 'admin@gmail.com', 'admin'),
(125, '::1', 'http://localhost/moxxydmcadmin/admin/content/privacy/4', '2025-07-26', '15:40:04', 2, 'admin@gmail.com', 'admin'),
(126, '::1', 'http://localhost/moxxydmcadmin/admin/content/privacy/4', '2025-07-26', '15:40:34', 2, 'admin@gmail.com', 'admin'),
(127, '::1', 'http://localhost/moxxydmcadmin/admin/content/privacy/4', '2025-07-26', '15:40:42', 2, 'admin@gmail.com', 'admin'),
(128, '::1', 'http://localhost/moxxydmcadmin/admin/content/privacy/4', '2025-07-26', '15:43:56', 2, 'admin@gmail.com', 'admin'),
(129, '::1', 'http://localhost/moxxydmcadmin/admin/content/privacy/4', '2025-07-26', '15:44:16', 2, 'admin@gmail.com', 'admin'),
(130, '::1', 'http://localhost/moxxydmcadmin/admin/content/privacy/4', '2025-07-26', '15:44:24', 2, 'admin@gmail.com', 'admin'),
(131, '::1', 'http://localhost/moxxydmcadmin/admin/content/privacy/5', '2025-07-26', '15:44:26', 2, 'admin@gmail.com', 'admin'),
(132, '::1', 'http://localhost/moxxydmcadmin/admin/content/privacy/5', '2025-07-26', '15:44:38', 2, 'admin@gmail.com', 'admin'),
(133, '::1', 'http://localhost/moxxydmcadmin/admin/content/privacy/5', '2025-07-26', '15:44:52', 2, 'admin@gmail.com', 'admin'),
(134, '::1', 'http://localhost/moxxydmcadmin/admin/content/privacy/5', '2025-07-26', '15:45:32', 2, 'admin@gmail.com', 'admin'),
(135, '::1', 'http://localhost/moxxydmcadmin/admin/testimonials', '2025-07-26', '15:45:33', 2, 'admin@gmail.com', 'admin'),
(136, '::1', 'http://localhost/moxxydmcadmin/admin/testimonials/edit/3', '2025-07-26', '15:45:46', 2, 'admin@gmail.com', 'admin'),
(137, '::1', 'http://localhost/moxxydmcadmin/admin/testimonials', '2025-07-26', '15:46:06', 2, 'admin@gmail.com', 'admin'),
(138, '::1', 'http://localhost/moxxydmcadmin/admin/testimonials/edit/2', '2025-07-26', '15:46:09', 2, 'admin@gmail.com', 'admin'),
(139, '::1', 'http://localhost/moxxydmcadmin/admin/testimonials', '2025-07-26', '15:46:18', 2, 'admin@gmail.com', 'admin'),
(140, '::1', 'http://localhost/moxxydmcadmin/admin/testimonials', '2025-07-26', '15:58:49', 2, 'admin@gmail.com', 'admin'),
(141, '::1', 'http://localhost/moxxydmcadmin/admin/partner', '2025-07-26', '15:58:51', 2, 'admin@gmail.com', 'admin'),
(142, '::1', 'http://localhost/moxxydmcadmin/admin/partner/add', '2025-07-26', '15:59:17', 2, 'admin@gmail.com', 'admin'),
(143, '::1', 'http://localhost/moxxydmcadmin/admin/partner', '2025-07-26', '15:59:39', 2, 'admin@gmail.com', 'admin'),
(144, '::1', 'http://localhost/moxxydmcadmin/admin/partner/add', '2025-07-26', '15:59:41', 2, 'admin@gmail.com', 'admin'),
(145, '::1', 'http://localhost/moxxydmcadmin/admin/partner', '2025-07-26', '15:59:46', 2, 'admin@gmail.com', 'admin'),
(146, '::1', 'http://localhost/moxxydmcadmin/admin/partner', '2025-07-26', '16:03:31', 2, 'admin@gmail.com', 'admin'),
(147, '::1', 'http://localhost/moxxydmcadmin/admin/content/explore/6', '2025-07-26', '16:04:07', 2, 'admin@gmail.com', 'admin'),
(148, '::1', 'http://localhost/moxxydmcadmin/admin/content/explore/6', '2025-07-26', '16:04:31', 2, 'admin@gmail.com', 'admin'),
(149, '::1', 'http://localhost/moxxydmcadmin/admin/content/explore/6', '2025-07-26', '16:07:58', 2, 'admin@gmail.com', 'admin'),
(150, '::1', 'http://localhost/moxxydmcadmin/admin/content/explore/6', '2025-07-26', '16:11:37', 2, 'admin@gmail.com', 'admin'),
(151, '::1', 'http://localhost/moxxydmcadmin/admin/content/explore/6', '2025-07-26', '16:14:31', 2, 'admin@gmail.com', 'admin'),
(152, '::1', 'http://localhost/moxxydmcadmin/admin/content/explore/6', '2025-07-26', '16:15:24', 2, 'admin@gmail.com', 'admin'),
(153, '::1', 'http://localhost/moxxydmcadmin/admin/content/explore/6', '2025-07-26', '16:15:31', 2, 'admin@gmail.com', 'admin'),
(154, '::1', 'http://localhost/moxxydmcadmin/admin/content/explore/6', '2025-07-26', '16:15:38', 2, 'admin@gmail.com', 'admin'),
(155, '::1', 'http://localhost/moxxydmcadmin/admin/content/explore/6', '2025-07-26', '16:15:47', 2, 'admin@gmail.com', 'admin'),
(156, '::1', 'http://localhost/moxxydmcadmin/admin/content/explore/6', '2025-07-26', '16:16:03', 2, 'admin@gmail.com', 'admin'),
(157, '::1', 'http://localhost/moxxydmcadmin/admin/content/explore/6', '2025-07-26', '16:16:07', 2, 'admin@gmail.com', 'admin'),
(158, '::1', 'http://localhost/moxxydmcadmin/admin/content/explore/6', '2025-07-26', '16:16:25', 2, 'admin@gmail.com', 'admin'),
(159, '::1', 'http://localhost/moxxydmcadmin/admin/content/explore/6', '2025-07-26', '16:24:50', 2, 'admin@gmail.com', 'admin'),
(160, '::1', 'http://localhost/moxxydmcadmin/admin/gallery', '2025-07-26', '16:25:16', 2, 'admin@gmail.com', 'admin'),
(161, '::1', 'http://localhost/moxxydmcadmin/admin/gallery/add', '2025-07-26', '16:25:18', 2, 'admin@gmail.com', 'admin'),
(162, '::1', 'http://localhost/moxxydmcadmin/admin/gallery/add', '2025-07-26', '16:26:05', 2, 'admin@gmail.com', 'admin'),
(163, '::1', 'http://localhost/moxxydmcadmin/admin/gallery', '2025-07-26', '16:26:30', 2, 'admin@gmail.com', 'admin'),
(164, '::1', 'http://localhost/moxxydmcadmin/admin/gallery/edit/1', '2025-07-26', '16:26:31', 2, 'admin@gmail.com', 'admin'),
(165, '::1', 'http://localhost/moxxydmcadmin/admin/gallery', '2025-07-26', '16:27:11', 2, 'admin@gmail.com', 'admin'),
(166, '::1', 'http://localhost/moxxydmcadmin/admin/gallery/edit/1', '2025-07-26', '16:27:22', 2, 'admin@gmail.com', 'admin'),
(167, '::1', 'http://localhost/moxxydmcadmin/admin/gallery', '2025-07-26', '16:27:26', 2, 'admin@gmail.com', 'admin'),
(168, '::1', 'http://localhost/moxxydmcadmin/admin/gallery', '2025-07-26', '16:27:42', 2, 'admin@gmail.com', 'admin'),
(169, '::1', 'http://localhost/moxxydmcadmin/admin/gallery/edit/3', '2025-07-26', '16:27:44', 2, 'admin@gmail.com', 'admin'),
(170, '::1', 'http://localhost/moxxydmcadmin/admin/gallery', '2025-07-26', '16:27:51', 2, 'admin@gmail.com', 'admin'),
(171, '::1', 'http://localhost/moxxydmcadmin/admin/gallery/edit/1', '2025-07-26', '16:27:55', 2, 'admin@gmail.com', 'admin'),
(172, '::1', 'http://localhost/moxxydmcadmin/admin/gallery', '2025-07-26', '16:28:00', 2, 'admin@gmail.com', 'admin'),
(173, '::1', 'http://localhost/moxxydmcadmin/admin/gallery/edit/2', '2025-07-26', '16:28:02', 2, 'admin@gmail.com', 'admin'),
(174, '::1', 'http://localhost/moxxydmcadmin/admin/gallery', '2025-07-26', '16:28:06', 2, 'admin@gmail.com', 'admin'),
(175, '::1', 'http://localhost/moxxydmcadmin/admin/gallery/edit/1', '2025-07-26', '16:30:11', 2, 'admin@gmail.com', 'admin'),
(176, '::1', 'http://localhost/moxxydmcadmin/admin/gallery', '2025-07-26', '16:30:15', 2, 'admin@gmail.com', 'admin'),
(177, '::1', 'http://localhost/moxxydmcadmin/admin/gallery/edit/2', '2025-07-26', '16:30:17', 2, 'admin@gmail.com', 'admin'),
(178, '::1', 'http://localhost/moxxydmcadmin/admin/gallery', '2025-07-26', '16:30:21', 2, 'admin@gmail.com', 'admin'),
(179, '::1', 'http://localhost/moxxydmcadmin/admin/gallery/add', '2025-07-26', '16:30:27', 2, 'admin@gmail.com', 'admin'),
(180, '::1', 'http://localhost/moxxydmcadmin/admin/gallery', '2025-07-26', '16:30:33', 2, 'admin@gmail.com', 'admin'),
(181, '::1', 'http://localhost/moxxydmcadmin/admin/gallery', '2025-07-26', '16:38:24', 2, 'admin@gmail.com', 'admin'),
(182, '::1', 'http://localhost/moxxydmcadmin/admin/gallery', '2025-07-26', '16:39:04', 2, 'admin@gmail.com', 'admin'),
(183, '::1', 'http://localhost/moxxydmcadmin/admin/blog', '2025-07-26', '16:39:05', 2, 'admin@gmail.com', 'admin'),
(184, '::1', 'http://localhost/moxxydmcadmin/admin/blog/add', '2025-07-26', '16:39:08', 2, 'admin@gmail.com', 'admin'),
(185, '::1', 'http://localhost/moxxydmcadmin/admin/blog/add', '2025-07-26', '16:40:30', 2, 'admin@gmail.com', 'admin'),
(186, '::1', 'http://localhost/moxxydmcadmin/admin/blog/add', '2025-07-26', '16:41:59', 2, 'admin@gmail.com', 'admin'),
(187, '::1', 'http://localhost/moxxydmcadmin/admin/blog/add', '2025-07-26', '16:42:17', 2, 'admin@gmail.com', 'admin'),
(188, '::1', 'http://localhost/moxxydmcadmin/admin/blog/add', '2025-07-26', '16:43:00', 2, 'admin@gmail.com', 'admin'),
(189, '::1', 'http://localhost/moxxydmcadmin/admin/blog/add', '2025-07-26', '16:43:29', 2, 'admin@gmail.com', 'admin'),
(190, '::1', 'http://localhost/moxxydmcadmin/admin/blog', '2025-07-26', '16:43:59', 2, 'admin@gmail.com', 'admin'),
(191, '::1', 'http://localhost/moxxydmcadmin/admin/blog/edit/11', '2025-07-26', '16:47:22', 2, 'admin@gmail.com', 'admin'),
(192, '::1', 'http://localhost/moxxydmcadmin/admin/blog', '2025-07-26', '16:47:24', 2, 'admin@gmail.com', 'admin'),
(193, '::1', 'http://localhost/moxxydmcadmin/admin/blog', '2025-07-26', '16:47:32', 2, 'admin@gmail.com', 'admin'),
(194, '::1', 'http://localhost/moxxydmcadmin/admin/blog/edit/11', '2025-07-26', '16:48:29', 2, 'admin@gmail.com', 'admin'),
(195, '::1', 'http://localhost/moxxydmcadmin/admin/blog', '2025-07-26', '16:48:30', 2, 'admin@gmail.com', 'admin'),
(196, '::1', 'http://localhost/moxxydmcadmin/admin/blog/edit/11', '2025-07-26', '16:52:01', 2, 'admin@gmail.com', 'admin'),
(197, '::1', 'http://localhost/moxxydmcadmin/admin/blog', '2025-07-26', '16:52:22', 2, 'admin@gmail.com', 'admin'),
(198, '::1', 'http://localhost/moxxydmcadmin/admin/blog', '2025-07-26', '16:52:52', 2, 'admin@gmail.com', 'admin'),
(199, '::1', 'http://localhost/moxxydmcadmin/admin/blog/edit/11', '2025-07-26', '16:52:54', 2, 'admin@gmail.com', 'admin'),
(200, '::1', 'http://localhost/moxxydmcadmin/admin/blog', '2025-07-26', '16:52:59', 2, 'admin@gmail.com', 'admin'),
(201, '::1', 'http://localhost/moxxydmcadmin/admin/blog/edit/11', '2025-07-26', '16:55:14', 2, 'admin@gmail.com', 'admin'),
(202, '::1', 'http://localhost/moxxydmcadmin/admin/blog', '2025-07-26', '16:55:15', 2, 'admin@gmail.com', 'admin'),
(203, '::1', 'http://localhost/moxxydmcadmin/admin/blog/edit/11', '2025-07-26', '16:55:55', 2, 'admin@gmail.com', 'admin'),
(204, '::1', 'http://localhost/moxxydmcadmin/admin/blog', '2025-07-26', '16:55:56', 2, 'admin@gmail.com', 'admin'),
(205, '::1', 'http://localhost/moxxydmcadmin/admin/blog', '2025-07-26', '16:56:18', 2, 'admin@gmail.com', 'admin'),
(206, '::1', 'http://localhost/moxxydmcadmin/admin/blog/edit/11', '2025-07-26', '16:56:20', 2, 'admin@gmail.com', 'admin'),
(207, '::1', 'http://localhost/moxxydmcadmin/admin/blog', '2025-07-26', '16:56:34', 2, 'admin@gmail.com', 'admin'),
(208, '::1', 'http://localhost/moxxydmcadmin/admin/blog/edit/11', '2025-07-26', '16:56:36', 2, 'admin@gmail.com', 'admin'),
(209, '::1', 'http://localhost/moxxydmcadmin/admin/blog', '2025-07-26', '16:57:02', 2, 'admin@gmail.com', 'admin'),
(210, '::1', 'http://localhost/moxxydmcadmin/admin/blog/edit/11', '2025-07-26', '16:57:04', 2, 'admin@gmail.com', 'admin'),
(211, '::1', 'http://localhost/moxxydmcadmin/admin/blog', '2025-07-26', '16:57:18', 2, 'admin@gmail.com', 'admin'),
(212, '::1', 'http://localhost/moxxydmcadmin/admin/blog', '2025-07-26', '17:19:55', 2, 'admin@gmail.com', 'admin'),
(213, '::1', 'http://localhost/moxxydmcadmin/admin/meta_tags/edit/1', '2025-07-26', '17:20:20', 2, 'admin@gmail.com', 'admin'),
(214, '::1', 'http://localhost/moxxydmcadmin/admin/meta_tags/edit/1', '2025-07-26', '17:21:40', 2, 'admin@gmail.com', 'admin'),
(215, '::1', 'http://localhost/moxxydmcadmin/admin/meta_tags/edit/1', '2025-07-26', '17:22:14', 2, 'admin@gmail.com', 'admin'),
(216, '::1', 'http://localhost/moxxydmcadmin/admin/meta_tags/edit/1', '2025-07-26', '17:22:50', 2, 'admin@gmail.com', 'admin'),
(217, '::1', 'http://localhost/moxxydmcadmin/admin/meta_tags/edit/1', '2025-07-26', '17:23:25', 2, 'admin@gmail.com', 'admin'),
(218, '::1', 'http://localhost/moxxydmcadmin/admin/meta_tags/edit/1', '2025-07-26', '17:23:39', 2, 'admin@gmail.com', 'admin'),
(219, '::1', 'http://localhost/moxxydmcadmin/admin/meta_tags/edit/1', '2025-07-26', '17:24:01', 2, 'admin@gmail.com', 'admin'),
(220, '::1', 'http://localhost/moxxydmcadmin/admin/meta_tags/edit/1', '2025-07-26', '17:24:41', 2, 'admin@gmail.com', 'admin'),
(221, '::1', 'http://localhost/moxxydmcadmin/admin/meta_tags/edit/1', '2025-07-26', '17:25:07', 2, 'admin@gmail.com', 'admin'),
(222, '::1', 'http://localhost/moxxydmcadmin/admin/meta_tags/edit/1', '2025-07-26', '17:41:14', 2, 'admin@gmail.com', 'admin'),
(223, '::1', 'http://localhost/moxxydmcadmin/admin/meta_tags/edit/1', '2025-07-26', '17:41:57', 2, 'admin@gmail.com', 'admin'),
(224, '::1', 'http://localhost/moxxydmcadmin/admin/meta_tags/edit/5', '2025-07-26', '17:42:08', 2, 'admin@gmail.com', 'admin'),
(225, '::1', 'http://localhost/moxxydmcadmin/admin/meta_tags/edit/5', '2025-07-26', '17:42:14', 2, 'admin@gmail.com', 'admin'),
(226, '::1', 'http://localhost/moxxydmcadmin/admin/meta_tags/edit/2', '2025-07-26', '17:42:17', 2, 'admin@gmail.com', 'admin'),
(227, '::1', 'http://localhost/moxxydmcadmin/admin/meta_tags/edit/2', '2025-07-26', '17:42:20', 2, 'admin@gmail.com', 'admin'),
(228, '::1', 'http://localhost/moxxydmcadmin/admin/meta_tags/edit/3', '2025-07-26', '17:42:23', 2, 'admin@gmail.com', 'admin'),
(229, '::1', 'http://localhost/moxxydmcadmin/admin/meta_tags/edit/3', '2025-07-26', '17:42:26', 2, 'admin@gmail.com', 'admin'),
(230, '::1', 'http://localhost/moxxydmcadmin/admin/meta_tags/edit/4', '2025-07-26', '17:42:28', 2, 'admin@gmail.com', 'admin'),
(231, '::1', 'http://localhost/moxxydmcadmin/admin/meta_tags/edit/4', '2025-07-26', '17:42:32', 2, 'admin@gmail.com', 'admin'),
(232, '::1', 'http://localhost/moxxydmcadmin/admin/meta_tags/edit/5', '2025-07-26', '17:42:35', 2, 'admin@gmail.com', 'admin'),
(233, '::1', 'http://localhost/moxxydmcadmin/admin/meta_tags/edit/6', '2025-07-26', '17:42:42', 2, 'admin@gmail.com', 'admin'),
(234, '::1', 'http://localhost/moxxydmcadmin/admin/meta_tags/edit/6', '2025-07-26', '17:42:45', 2, 'admin@gmail.com', 'admin'),
(235, '::1', 'http://localhost/moxxydmcadmin/admin/meta_tags/edit/7', '2025-07-26', '17:42:48', 2, 'admin@gmail.com', 'admin'),
(236, '::1', 'http://localhost/moxxydmcadmin/admin/meta_tags/edit/7', '2025-07-26', '17:42:50', 2, 'admin@gmail.com', 'admin'),
(237, '::1', 'http://localhost/moxxydmcadmin/admin/meta_tags/edit/8', '2025-07-26', '17:42:53', 2, 'admin@gmail.com', 'admin'),
(238, '::1', 'http://localhost/moxxydmcadmin/admin/meta_tags/edit/8', '2025-07-26', '17:42:55', 2, 'admin@gmail.com', 'admin'),
(239, '::1', 'http://localhost/moxxydmcadmin/admin/meta_tags/edit/9', '2025-07-26', '17:42:58', 2, 'admin@gmail.com', 'admin'),
(240, '::1', 'http://localhost/moxxydmcadmin/admin/meta_tags/edit/9', '2025-07-26', '17:43:01', 2, 'admin@gmail.com', 'admin'),
(241, '::1', 'http://localhost/moxxydmcadmin/admin/meta_tags/edit/10', '2025-07-26', '17:43:04', 2, 'admin@gmail.com', 'admin'),
(242, '::1', 'http://localhost/moxxydmcadmin/admin/meta_tags/edit/10', '2025-07-26', '17:43:08', 2, 'admin@gmail.com', 'admin'),
(243, '::1', 'http://localhost/moxxydmcadmin/admin/meta_tags/edit/11', '2025-07-26', '17:43:10', 2, 'admin@gmail.com', 'admin'),
(244, '::1', 'http://localhost/moxxydmcadmin/admin/meta_tags/edit/11', '2025-07-26', '17:43:13', 2, 'admin@gmail.com', 'admin'),
(245, '::1', 'http://localhost/moxxydmcadmin/admin/meta_tags/edit/12', '2025-07-26', '17:43:15', 2, 'admin@gmail.com', 'admin'),
(246, '::1', 'http://localhost/moxxydmcadmin/admin/meta_tags/edit/12', '2025-07-26', '17:43:21', 2, 'admin@gmail.com', 'admin'),
(247, '::1', 'http://localhost/moxxydmcadmin/admin/dashboard', '2025-07-28', '11:37:20', 2, 'admin@gmail.com', 'admin'),
(248, '::1', 'http://localhost/moxxydmcadmin/admin/country', '2025-07-28', '11:37:23', 2, 'admin@gmail.com', 'admin'),
(249, '::1', 'http://localhost/moxxydmcadmin/admin/country/add', '2025-07-28', '11:37:25', 2, 'admin@gmail.com', 'admin'),
(250, '::1', 'http://localhost/moxxydmcadmin/admin/country/add', '2025-07-28', '11:37:40', 2, 'admin@gmail.com', 'admin'),
(251, '::1', 'http://localhost/moxxydmcadmin/admin/country/add', '2025-07-28', '11:37:43', 2, 'admin@gmail.com', 'admin'),
(252, '::1', 'http://localhost/moxxydmcadmin/admin/country', '2025-07-28', '11:37:45', 2, 'admin@gmail.com', 'admin'),
(253, '::1', 'http://localhost/moxxydmcadmin/admin/country/add', '2025-07-28', '11:37:48', 2, 'admin@gmail.com', 'admin'),
(254, '::1', 'http://localhost/moxxydmcadmin/admin/country', '2025-07-28', '11:37:59', 2, 'admin@gmail.com', 'admin'),
(255, '::1', 'http://localhost/moxxydmcadmin/admin/country', '2025-07-28', '11:38:00', 2, 'admin@gmail.com', 'admin'),
(256, '::1', 'http://localhost/moxxydmcadmin/admin/country/add', '2025-07-28', '11:38:04', 2, 'admin@gmail.com', 'admin'),
(257, '::1', 'http://localhost/moxxydmcadmin/admin/country/add', '2025-07-28', '11:38:05', 2, 'admin@gmail.com', 'admin'),
(258, '::1', 'http://localhost/moxxydmcadmin/admin/country', '2025-07-28', '11:38:40', 2, 'admin@gmail.com', 'admin'),
(259, '::1', 'http://localhost/moxxydmcadmin/admin/country/add', '2025-07-28', '11:38:41', 2, 'admin@gmail.com', 'admin'),
(260, '::1', 'http://localhost/moxxydmcadmin/admin/country/add', '2025-07-28', '11:38:43', 2, 'admin@gmail.com', 'admin'),
(261, '::1', 'http://localhost/moxxydmcadmin/admin/dashboard', '2025-07-28', '11:39:13', 2, 'admin@gmail.com', 'admin'),
(262, '::1', 'http://localhost/moxxydmcadmin/admin/country', '2025-07-28', '11:39:16', 2, 'admin@gmail.com', 'admin'),
(263, '::1', 'http://localhost/moxxydmcadmin/admin/country/add', '2025-07-28', '11:39:18', 2, 'admin@gmail.com', 'admin'),
(264, '::1', 'http://localhost/moxxydmcadmin/admin/country/add', '2025-07-28', '11:41:27', 2, 'admin@gmail.com', 'admin'),
(265, '::1', 'http://localhost/moxxydmcadmin/admin/country/add', '2025-07-28', '11:43:19', 2, 'admin@gmail.com', 'admin'),
(266, '::1', 'http://localhost/moxxydmcadmin/admin/country/add', '2025-07-28', '11:43:28', 2, 'admin@gmail.com', 'admin'),
(267, '::1', 'http://localhost/moxxydmcadmin/admin/country/add', '2025-07-28', '11:44:10', 2, 'admin@gmail.com', 'admin'),
(268, '::1', 'http://localhost/moxxydmcadmin/admin/country/add', '2025-07-28', '11:44:36', 2, 'admin@gmail.com', 'admin'),
(269, '::1', 'http://localhost/moxxydmcadmin/admin/country/add', '2025-07-28', '11:44:47', 2, 'admin@gmail.com', 'admin'),
(270, '::1', 'http://localhost/moxxydmcadmin/admin/country/add', '2025-07-28', '11:45:32', 2, 'admin@gmail.com', 'admin'),
(271, '::1', 'http://localhost/moxxydmcadmin/admin/country', '2025-07-28', '11:46:27', 2, 'admin@gmail.com', 'admin'),
(272, '::1', 'http://localhost/moxxydmcadmin/admin/country/add', '2025-07-28', '11:46:55', 2, 'admin@gmail.com', 'admin'),
(273, '::1', 'http://localhost/moxxydmcadmin/admin/country/add', '2025-07-28', '11:47:09', 2, 'admin@gmail.com', 'admin'),
(274, '::1', 'http://localhost/moxxydmcadmin/admin/country', '2025-07-28', '11:47:44', 2, 'admin@gmail.com', 'admin'),
(275, '::1', 'http://localhost/moxxydmcadmin/admin/country', '2025-07-28', '11:48:16', 2, 'admin@gmail.com', 'admin'),
(276, '::1', 'http://localhost/moxxydmcadmin/admin/country/edit/2', '2025-07-28', '11:48:23', 2, 'admin@gmail.com', 'admin'),
(277, '::1', 'http://localhost/moxxydmcadmin/admin/country/edit/3', '2025-07-28', '11:48:29', 2, 'admin@gmail.com', 'admin'),
(278, '::1', 'http://localhost/moxxydmcadmin/admin/country', '2025-07-28', '11:48:52', 2, 'admin@gmail.com', 'admin'),
(279, '::1', 'http://localhost/moxxydmcadmin/admin/country/edit/3', '2025-07-28', '11:48:53', 2, 'admin@gmail.com', 'admin'),
(280, '::1', 'http://localhost/moxxydmcadmin/admin/country/edit/3', '2025-07-28', '11:50:39', 2, 'admin@gmail.com', 'admin'),
(281, '::1', 'http://localhost/moxxydmcadmin/admin/country', '2025-07-28', '11:51:34', 2, 'admin@gmail.com', 'admin'),
(282, '::1', 'http://localhost/moxxydmcadmin/admin/country/add', '2025-07-28', '11:52:46', 2, 'admin@gmail.com', 'admin'),
(283, '::1', 'http://localhost/moxxydmcadmin/admin/country', '2025-07-28', '11:54:44', 2, 'admin@gmail.com', 'admin'),
(284, '::1', 'http://localhost/moxxydmcadmin/admin/country/add', '2025-07-28', '11:55:42', 2, 'admin@gmail.com', 'admin'),
(285, '::1', 'http://localhost/moxxydmcadmin/admin/country', '2025-07-28', '11:56:55', 2, 'admin@gmail.com', 'admin'),
(286, '::1', 'http://localhost/moxxydmcadmin/admin/country/edit/3', '2025-07-28', '11:59:24', 2, 'admin@gmail.com', 'admin'),
(287, '::1', 'http://localhost/moxxydmcadmin/admin/country', '2025-07-28', '12:01:44', 2, 'admin@gmail.com', 'admin'),
(288, '::1', 'http://localhost/moxxydmcadmin/admin/country/edit/3', '2025-07-28', '12:01:47', 2, 'admin@gmail.com', 'admin'),
(289, '::1', 'http://localhost/moxxydmcadmin/admin/country/edit/3', '2025-07-28', '12:19:03', 2, 'admin@gmail.com', 'admin'),
(290, '::1', 'http://localhost/moxxydmcadmin/admin/country', '2025-07-28', '12:19:08', 2, 'admin@gmail.com', 'admin'),
(291, '::1', 'http://localhost/moxxydmcadmin/admin/country/add', '2025-07-28', '12:20:11', 2, 'admin@gmail.com', 'admin'),
(292, '::1', 'http://localhost/moxxydmcadmin/admin/country', '2025-07-28', '12:21:32', 2, 'admin@gmail.com', 'admin'),
(293, '::1', 'http://localhost/moxxydmcadmin/admin/country/add', '2025-07-28', '12:22:10', 2, 'admin@gmail.com', 'admin'),
(294, '::1', 'http://localhost/moxxydmcadmin/admin/country', '2025-07-28', '12:23:34', 2, 'admin@gmail.com', 'admin'),
(295, '::1', 'http://localhost/moxxydmcadmin/admin/country', '2025-07-28', '12:33:15', 2, 'admin@gmail.com', 'admin'),
(296, '::1', 'http://localhost/moxxydmcadmin/admin/city', '2025-07-28', '12:33:42', 2, 'admin@gmail.com', 'admin'),
(297, '::1', 'http://localhost/moxxydmcadmin/admin/city', '2025-07-28', '12:34:17', 2, 'admin@gmail.com', 'admin'),
(298, '::1', 'http://localhost/moxxydmcadmin/admin/city/add', '2025-07-28', '12:34:18', 2, 'admin@gmail.com', 'admin'),
(299, '::1', 'http://localhost/moxxydmcadmin/admin/city/add', '2025-07-28', '12:34:47', 2, 'admin@gmail.com', 'admin'),
(300, '::1', 'http://localhost/moxxydmcadmin/admin/dashboard', '2025-07-28', '12:34:55', 2, 'admin@gmail.com', 'admin'),
(301, '::1', 'http://localhost/moxxydmcadmin/admin/city', '2025-07-28', '12:34:58', 2, 'admin@gmail.com', 'admin'),
(302, '::1', 'http://localhost/moxxydmcadmin/admin/city/add', '2025-07-28', '12:35:00', 2, 'admin@gmail.com', 'admin'),
(303, '::1', 'http://localhost/moxxydmcadmin/admin/dashboard', '2025-07-28', '12:35:36', 2, 'admin@gmail.com', 'admin'),
(304, '::1', 'http://localhost/moxxydmcadmin/admin/city', '2025-07-28', '12:35:39', 2, 'admin@gmail.com', 'admin'),
(305, '::1', 'http://localhost/moxxydmcadmin/admin/city/add', '2025-07-28', '12:35:41', 2, 'admin@gmail.com', 'admin'),
(306, '::1', 'http://localhost/moxxydmcadmin/admin/city/add', '2025-07-28', '12:39:18', 2, 'admin@gmail.com', 'admin'),
(307, '::1', 'http://localhost/moxxydmcadmin/admin/city/add', '2025-07-28', '12:40:32', 2, 'admin@gmail.com', 'admin'),
(308, '::1', 'http://localhost/moxxydmcadmin/admin/city/add', '2025-07-28', '12:40:50', 2, 'admin@gmail.com', 'admin'),
(309, '::1', 'http://localhost/moxxydmcadmin/admin/city', '2025-07-28', '12:41:03', 2, 'admin@gmail.com', 'admin'),
(310, '::1', 'http://localhost/moxxydmcadmin/admin/city', '2025-07-28', '12:43:23', 2, 'admin@gmail.com', 'admin'),
(311, '::1', 'http://localhost/moxxydmcadmin/admin/city', '2025-07-28', '12:45:29', 2, 'admin@gmail.com', 'admin'),
(312, '::1', 'http://localhost/moxxydmcadmin/admin/city', '2025-07-28', '12:45:49', 2, 'admin@gmail.com', 'admin'),
(313, '::1', 'http://localhost/moxxydmcadmin/admin/city', '2025-07-28', '12:46:31', 2, 'admin@gmail.com', 'admin'),
(314, '::1', 'http://localhost/moxxydmcadmin/admin/city', '2025-07-28', '12:46:39', 2, 'admin@gmail.com', 'admin'),
(315, '::1', 'http://localhost/moxxydmcadmin/admin/city', '2025-07-28', '12:49:39', 2, 'admin@gmail.com', 'admin'),
(316, '::1', 'http://localhost/moxxydmcadmin/admin/city/edit/1', '2025-07-28', '12:49:49', 2, 'admin@gmail.com', 'admin'),
(317, '::1', 'http://localhost/moxxydmcadmin/admin/city/edit/1', '2025-07-28', '12:50:16', 2, 'admin@gmail.com', 'admin'),
(318, '::1', 'http://localhost/moxxydmcadmin/admin/city', '2025-07-28', '12:51:50', 2, 'admin@gmail.com', 'admin'),
(319, '::1', 'http://localhost/moxxydmcadmin/admin/testimonials', '2025-07-28', '13:31:21', 2, 'admin@gmail.com', 'admin'),
(320, '::1', 'http://localhost/moxxydmcadmin/admin/city', '2025-07-28', '13:31:23', 2, 'admin@gmail.com', 'admin'),
(321, '::1', 'http://localhost/moxxydmcadmin/admin/city/edit/1', '2025-07-28', '13:31:25', 2, 'admin@gmail.com', 'admin'),
(322, '::1', 'http://localhost/moxxydmcadmin/admin/city', '2025-07-28', '14:39:42', 2, 'admin@gmail.com', 'admin'),
(323, '::1', 'http://localhost/moxxydmcadmin/admin/city/add', '2025-07-28', '14:39:54', 2, 'admin@gmail.com', 'admin'),
(324, '::1', 'http://localhost/moxxydmcadmin/admin/city', '2025-07-28', '14:40:37', 2, 'admin@gmail.com', 'admin'),
(325, '::1', 'http://localhost/moxxydmcadmin/admin/city/add', '2025-07-28', '14:40:58', 2, 'admin@gmail.com', 'admin'),
(326, '::1', 'http://localhost/moxxydmcadmin/admin/city', '2025-07-28', '14:41:22', 2, 'admin@gmail.com', 'admin'),
(327, '::1', 'http://localhost/moxxydmcadmin/admin/city/add', '2025-07-28', '14:41:29', 2, 'admin@gmail.com', 'admin'),
(328, '::1', 'http://localhost/moxxydmcadmin/admin/city', '2025-07-28', '14:42:01', 2, 'admin@gmail.com', 'admin'),
(329, '::1', 'http://localhost/moxxydmcadmin/admin/city/edit/4', '2025-07-28', '14:42:06', 2, 'admin@gmail.com', 'admin'),
(330, '::1', 'http://localhost/moxxydmcadmin/admin/city', '2025-07-28', '14:42:09', 2, 'admin@gmail.com', 'admin'),
(331, '::1', 'http://localhost/moxxydmcadmin/admin/city/edit/4', '2025-07-28', '15:12:42', 2, 'admin@gmail.com', 'admin'),
(332, '::1', 'http://localhost/moxxydmcadmin/admin/city', '2025-07-28', '15:23:33', 2, 'admin@gmail.com', 'admin'),
(333, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing', '2025-07-28', '15:28:13', 2, 'admin@gmail.com', 'admin'),
(334, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/add', '2025-07-28', '15:28:16', 2, 'admin@gmail.com', 'admin'),
(335, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/add', '2025-07-28', '15:32:35', 2, 'admin@gmail.com', 'admin'),
(336, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/add', '2025-07-28', '15:32:41', 2, 'admin@gmail.com', 'admin'),
(337, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/add', '2025-07-28', '15:32:55', 2, 'admin@gmail.com', 'admin'),
(338, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/add', '2025-07-28', '15:35:30', 2, 'admin@gmail.com', 'admin'),
(339, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/add', '2025-07-28', '15:35:45', 2, 'admin@gmail.com', 'admin'),
(340, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/add', '2025-07-28', '15:35:56', 2, 'admin@gmail.com', 'admin'),
(341, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/add', '2025-07-28', '15:38:40', 2, 'admin@gmail.com', 'admin'),
(342, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/add', '2025-07-28', '15:39:07', 2, 'admin@gmail.com', 'admin'),
(343, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/add', '2025-07-28', '15:40:15', 2, 'admin@gmail.com', 'admin'),
(344, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/add', '2025-07-28', '15:42:10', 2, 'admin@gmail.com', 'admin'),
(345, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/add', '2025-07-28', '15:43:23', 2, 'admin@gmail.com', 'admin'),
(346, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/add', '2025-07-28', '15:47:47', 2, 'admin@gmail.com', 'admin'),
(347, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing', '2025-07-28', '15:48:12', 2, 'admin@gmail.com', 'admin'),
(348, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing', '2025-07-28', '15:49:29', 2, 'admin@gmail.com', 'admin'),
(349, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '15:49:36', 2, 'admin@gmail.com', 'admin'),
(350, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '15:50:15', 2, 'admin@gmail.com', 'admin'),
(351, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '15:50:24', 2, 'admin@gmail.com', 'admin'),
(352, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing', '2025-07-28', '15:50:42', 2, 'admin@gmail.com', 'admin'),
(353, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '15:50:43', 2, 'admin@gmail.com', 'admin'),
(354, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '15:51:07', 2, 'admin@gmail.com', 'admin'),
(355, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing', '2025-07-28', '15:51:19', 2, 'admin@gmail.com', 'admin'),
(356, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '15:51:21', 2, 'admin@gmail.com', 'admin'),
(357, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '15:51:27', 2, 'admin@gmail.com', 'admin'),
(358, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '15:51:53', 2, 'admin@gmail.com', 'admin'),
(359, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '15:52:00', 2, 'admin@gmail.com', 'admin'),
(360, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '15:52:15', 2, 'admin@gmail.com', 'admin'),
(361, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '15:52:29', 2, 'admin@gmail.com', 'admin'),
(362, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '15:52:47', 2, 'admin@gmail.com', 'admin'),
(363, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '15:53:36', 2, 'admin@gmail.com', 'admin'),
(364, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing', '2025-07-28', '15:53:51', 2, 'admin@gmail.com', 'admin'),
(365, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '15:53:52', 2, 'admin@gmail.com', 'admin'),
(366, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '15:54:16', 2, 'admin@gmail.com', 'admin'),
(367, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing', '2025-07-28', '15:54:19', 2, 'admin@gmail.com', 'admin'),
(368, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '15:54:21', 2, 'admin@gmail.com', 'admin'),
(369, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '15:54:44', 2, 'admin@gmail.com', 'admin'),
(370, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '15:55:40', 2, 'admin@gmail.com', 'admin'),
(371, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '15:57:29', 2, 'admin@gmail.com', 'admin'),
(372, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '15:58:09', 2, 'admin@gmail.com', 'admin'),
(373, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '16:01:17', 2, 'admin@gmail.com', 'admin'),
(374, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '16:02:23', 2, 'admin@gmail.com', 'admin'),
(375, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing', '2025-07-28', '16:02:29', 2, 'admin@gmail.com', 'admin'),
(376, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing', '2025-07-28', '16:02:44', 2, 'admin@gmail.com', 'admin'),
(377, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '16:02:46', 2, 'admin@gmail.com', 'admin'),
(378, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '16:03:15', 2, 'admin@gmail.com', 'admin'),
(379, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '16:05:20', 2, 'admin@gmail.com', 'admin'),
(380, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing', '2025-07-28', '16:05:26', 2, 'admin@gmail.com', 'admin'),
(381, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '16:05:28', 2, 'admin@gmail.com', 'admin'),
(382, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '16:07:03', 2, 'admin@gmail.com', 'admin'),
(383, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '16:07:13', 2, 'admin@gmail.com', 'admin'),
(384, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '16:07:34', 2, 'admin@gmail.com', 'admin'),
(385, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '16:07:47', 2, 'admin@gmail.com', 'admin'),
(386, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '16:08:02', 2, 'admin@gmail.com', 'admin'),
(387, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '16:08:07', 2, 'admin@gmail.com', 'admin'),
(388, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '16:09:05', 2, 'admin@gmail.com', 'admin'),
(389, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing', '2025-07-28', '16:11:38', 2, 'admin@gmail.com', 'admin'),
(390, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '16:11:40', 2, 'admin@gmail.com', 'admin'),
(391, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing', '2025-07-28', '16:11:51', 2, 'admin@gmail.com', 'admin'),
(392, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '16:11:53', 2, 'admin@gmail.com', 'admin'),
(393, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '16:12:38', 2, 'admin@gmail.com', 'admin'),
(394, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '16:12:57', 2, 'admin@gmail.com', 'admin'),
(395, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '16:13:11', 2, 'admin@gmail.com', 'admin'),
(396, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing', '2025-07-28', '16:13:26', 2, 'admin@gmail.com', 'admin'),
(397, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '16:13:27', 2, 'admin@gmail.com', 'admin'),
(398, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '16:16:41', 2, 'admin@gmail.com', 'admin'),
(399, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '16:16:57', 2, 'admin@gmail.com', 'admin'),
(400, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '16:18:02', 2, 'admin@gmail.com', 'admin'),
(401, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing', '2025-07-28', '16:18:17', 2, 'admin@gmail.com', 'admin'),
(402, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '16:18:20', 2, 'admin@gmail.com', 'admin'),
(403, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing', '2025-07-28', '16:18:31', 2, 'admin@gmail.com', 'admin'),
(404, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '16:18:33', 2, 'admin@gmail.com', 'admin'),
(405, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '16:20:45', 2, 'admin@gmail.com', 'admin'),
(406, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '16:21:03', 2, 'admin@gmail.com', 'admin'),
(407, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing', '2025-07-28', '16:21:20', 2, 'admin@gmail.com', 'admin'),
(408, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '16:21:22', 2, 'admin@gmail.com', 'admin'),
(409, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing', '2025-07-28', '16:21:39', 2, 'admin@gmail.com', 'admin'),
(410, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '16:21:40', 2, 'admin@gmail.com', 'admin'),
(411, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '16:23:32', 2, 'admin@gmail.com', 'admin'),
(412, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '16:24:14', 2, 'admin@gmail.com', 'admin');
INSERT INTO `activity_records` (`id`, `ip_addreass`, `url`, `date`, `time`, `admin_id`, `admin_username`, `admin_password`) VALUES
(413, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing', '2025-07-28', '16:24:26', 2, 'admin@gmail.com', 'admin'),
(414, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '16:24:45', 2, 'admin@gmail.com', 'admin'),
(415, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '16:27:02', 2, 'admin@gmail.com', 'admin'),
(416, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '16:27:10', 2, 'admin@gmail.com', 'admin'),
(417, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing', '2025-07-28', '16:27:18', 2, 'admin@gmail.com', 'admin'),
(418, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing', '2025-07-28', '16:27:57', 2, 'admin@gmail.com', 'admin'),
(419, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '16:41:58', 2, 'admin@gmail.com', 'admin'),
(420, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing', '2025-07-28', '16:42:16', 2, 'admin@gmail.com', 'admin'),
(421, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/1', '2025-07-28', '16:42:26', 2, 'admin@gmail.com', 'admin'),
(422, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing', '2025-07-28', '16:51:11', 2, 'admin@gmail.com', 'admin'),
(423, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/add', '2025-07-28', '16:51:13', 2, 'admin@gmail.com', 'admin'),
(424, '::1', 'http://localhost/moxxydmcadmin/admin/city', '2025-07-28', '16:51:21', 2, 'admin@gmail.com', 'admin'),
(425, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing', '2025-07-28', '16:56:06', 2, 'admin@gmail.com', 'admin'),
(426, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/2', '2025-07-28', '16:56:09', 2, 'admin@gmail.com', 'admin'),
(427, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing', '2025-07-28', '16:57:45', 2, 'admin@gmail.com', 'admin'),
(428, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing/edit/2', '2025-07-28', '16:58:02', 2, 'admin@gmail.com', 'admin'),
(429, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing', '2025-07-28', '17:00:44', 2, 'admin@gmail.com', 'admin'),
(430, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing', '2025-07-28', '17:13:28', 2, 'admin@gmail.com', 'admin'),
(431, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing', '2025-07-28', '17:14:12', 2, 'admin@gmail.com', 'admin'),
(432, '::1', 'http://localhost/moxxydmcadmin/admin/sight_seeing', '2025-07-28', '17:14:24', 2, 'admin@gmail.com', 'admin'),
(433, '::1', 'http://localhost/moxxydmcadmin/admin/package', '2025-07-28', '17:15:04', 2, 'admin@gmail.com', 'admin'),
(434, '::1', 'http://localhost/moxxydmcadmin/admin/package/add', '2025-07-28', '17:15:06', 2, 'admin@gmail.com', 'admin'),
(435, '::1', 'http://localhost/moxxydmcadmin/admin/package/add', '2025-07-28', '17:15:39', 2, 'admin@gmail.com', 'admin'),
(436, '::1', 'http://localhost/moxxydmcadmin/admin/package/add', '2025-07-28', '17:17:28', 2, 'admin@gmail.com', 'admin'),
(437, '::1', 'http://localhost/moxxydmcadmin/admin/package/add', '2025-07-28', '17:17:42', 2, 'admin@gmail.com', 'admin'),
(438, '::1', 'http://localhost/moxxydmcadmin/admin/package/add', '2025-07-28', '17:18:26', 2, 'admin@gmail.com', 'admin'),
(439, '::1', 'http://localhost/moxxydmcadmin/admin/package/add', '2025-07-28', '17:18:46', 2, 'admin@gmail.com', 'admin'),
(440, '::1', 'http://localhost/moxxydmcadmin/admin/package/add', '2025-07-28', '17:19:00', 2, 'admin@gmail.com', 'admin'),
(441, '::1', 'http://localhost/moxxydmcadmin/admin/package/add', '2025-07-28', '17:22:22', 2, 'admin@gmail.com', 'admin'),
(442, '::1', 'http://localhost/moxxydmcadmin/admin/package/add', '2025-07-28', '17:22:44', 2, 'admin@gmail.com', 'admin'),
(443, '::1', 'http://localhost/moxxydmcadmin/admin/package/add', '2025-07-28', '17:22:58', 2, 'admin@gmail.com', 'admin'),
(444, '::1', 'http://localhost/moxxydmcadmin/admin/package/add', '2025-07-28', '17:23:57', 2, 'admin@gmail.com', 'admin'),
(445, '::1', 'http://localhost/moxxydmcadmin/admin/package/add', '2025-07-28', '17:24:22', 2, 'admin@gmail.com', 'admin'),
(446, '::1', 'http://localhost/moxxydmcadmin/admin/package/add', '2025-07-28', '17:26:22', 2, 'admin@gmail.com', 'admin'),
(447, '::1', 'http://localhost/moxxydmcadmin/admin/package/add', '2025-07-28', '17:26:31', 2, 'admin@gmail.com', 'admin'),
(448, '::1', 'http://localhost/moxxydmcadmin/admin/package/add', '2025-07-28', '17:26:55', 2, 'admin@gmail.com', 'admin'),
(449, '::1', 'http://localhost/moxxydmcadmin/admin/package/add', '2025-07-28', '17:30:41', 2, 'admin@gmail.com', 'admin'),
(450, '::1', 'http://localhost/moxxydmcadmin/admin/package', '2025-07-28', '17:31:19', 2, 'admin@gmail.com', 'admin'),
(451, '::1', 'http://localhost/moxxydmcadmin/admin/package', '2025-07-28', '17:32:14', 2, 'admin@gmail.com', 'admin'),
(452, '::1', 'http://localhost/moxxydmcadmin/admin/package', '2025-07-28', '17:32:25', 2, 'admin@gmail.com', 'admin'),
(453, '::1', 'http://localhost/moxxydmcadmin/admin/package/edit/2', '2025-07-28', '17:32:28', 2, 'admin@gmail.com', 'admin'),
(454, '::1', 'http://localhost/moxxydmcadmin/admin/package', '2025-07-28', '17:37:41', 2, 'admin@gmail.com', 'admin'),
(455, '::1', 'http://localhost/moxxydmcadmin/admin/package/edit/2', '2025-07-28', '17:37:45', 2, 'admin@gmail.com', 'admin'),
(456, '::1', 'http://localhost/moxxydmcadmin/admin/package/edit/1', '2025-07-28', '17:37:52', 2, 'admin@gmail.com', 'admin'),
(457, '::1', 'http://localhost/moxxydmcadmin/admin/package', '2025-07-28', '17:40:28', 2, 'admin@gmail.com', 'admin'),
(458, '::1', 'http://localhost/moxxydmcadmin/admin/package/edit/1', '2025-07-28', '17:40:30', 2, 'admin@gmail.com', 'admin'),
(459, '::1', 'http://localhost/moxxydmcadmin/admin/package/edit/1', '2025-07-28', '17:41:08', 2, 'admin@gmail.com', 'admin'),
(460, '::1', 'http://localhost/moxxydmcadmin/admin/package/edit/1', '2025-07-28', '17:41:48', 2, 'admin@gmail.com', 'admin'),
(461, '::1', 'http://localhost/moxxydmcadmin/admin/package', '2025-07-28', '17:41:57', 2, 'admin@gmail.com', 'admin'),
(462, '::1', 'http://localhost/moxxydmcadmin/admin/package/edit/1', '2025-07-28', '18:21:47', 2, 'admin@gmail.com', 'admin'),
(463, '::1', 'http://localhost/moxxydmcadmin/admin/package', '2025-07-28', '18:22:01', 2, 'admin@gmail.com', 'admin');

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
  `meta_title` text DEFAULT NULL,
  `meta_auther` text DEFAULT NULL,
  `meta_keyword` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `addeddate` datetime DEFAULT NULL,
  `modifieddate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `image`, `name`, `slug`, `content`, `meta_title`, `meta_auther`, `meta_keyword`, `meta_description`, `status`, `addeddate`, `modifieddate`) VALUES
(11, '6884bb6ab3698.jpg', 'Exploring The Green Spac Realar Residence Area Harmony', 'exploring-the-green-spac-realar-residence-area-harmony', 0x3c64697620636c6173733d2274672d626c6f672d7374616e646172642d6974656d206d622d333522207374796c653d226d617267696e2d626f74746f6d3a20333570783b20636f6c6f723a207267622835332c2035362c203638293b20666f6e742d66616d696c793a20506f7070696e732c2073616e732d73657269663b20666f6e742d73697a653a20313670783b223e3c64697620636c6173733d2274672d626c6f672d7374616e646172642d636f6e74656e74223e3c70207374796c653d226d617267696e2d626f74746f6d3a20313570783b20746578742d7472616e73666f726d3a206361706974616c697a653b206c696e652d6865696768743a20323870783b223e57656c636f6d6520746f205265616c6172205265736964656e63652c207768657265207375737461696e6162696c697479206d6565747320636f6d666f727420696e20657665727920636f726e65722e20496e207468697320626c6f6720706f73742c20776520617265206578706c6f72652074686520677265656e20696e6e6f766174696f6e73207365616d6c6573736c7920696e746567726174656420696e746f20746865206661627269632e7768656e20616e20756e6b6e6f776e207072696e74657220746f6f6b20612067616c6c6579206f66207479706520616e6420736372616d626c656420697420746f206d616b65206120747970652073706563696d656e20626f6f6b2e3c2f703e3c2f6469763e3c2f6469763e3c626c6f636b71756f746520636c6173733d2274672d626c6f672d626c6f636b71756f746520702d72656c6174697665206d622d323522207374796c653d226d617267696e2d72696768743a20343570783b206d617267696e2d626f74746f6d3a20323570783b206d617267696e2d6c6566743a20343070783b20706f736974696f6e3a2072656c61746976653b206261636b67726f756e643a20726762283233362c203234332c20323535293b2070616464696e673a20333570782035347078203435707820343970783b20626f726465722d6c6566743a20352e3535353536707820736f6c69642072676228372c2033312c203933293b20636f6c6f723a207267622835332c2035362c203638293b20666f6e742d66616d696c793a20506f7070696e732c2073616e732d73657269663b20666f6e742d73697a653a20313670783b223e3c70207374796c653d226d617267696e2d626f74746f6d3a203070783b20666f6e742d7374796c653a206974616c69633b20666f6e742d73697a653a20313870783b206c696e652d6865696768743a20333070783b20746578742d7472616e73666f726d3a206361706974616c697a653b20636f6c6f723a207267622831312c2031312c203230293b223ee2809c20757261626974757220766172697573206572726f7320617265612072757472756d20636f6e736571756174204d617572697320736f6c6c696369206172656120747564696e6f20656c656374726f6e6963207479706573657474696e672c2072656d61696e696e6720657373656e7469616c6c792064696d656e74756d206c756374757320656e696de2809d3c2f703e3c7370616e20636c6173733d2274672d626c6f672d626c6f636b71756f74652d69636f6e22207374796c653d22706f736974696f6e3a206162736f6c7574653b20626f74746f6d3a20333070783b2072696768743a20333870783b223e3c7376672077696474683d22333822206865696768743d223332222076696577426f783d22302030203338203332222066696c6c3d226e6f6e652220786d6c6e733d22687474703a2f2f7777772e77332e6f72672f323030302f737667223e3c7061746820643d224d33342e373736322032372e3431364333322e313131332033302e3435382032382e303738392033322032322e373932382033324c32302e383933342033324c32302e383933342032362e3336324c32322e343230362032362e30344332352e303232372032352e3439322032362e383332392032342e3431342032372e383031362032322e3833324332382e3330372032312e393739372032382e353933372032312e303033392032382e363333352032304c32322e373932382032304332322e323839312032302032312e3830362031392e373839332032312e343439382031392e343134324332312e303933352031392e303339312032302e383933342031382e353330342032302e383933342031384c32302e3839333420344332302e3839333420312e3739342032322e3539373220322e3339313238652d30362032342e3639323220322e3538343839652d30364c33362e3038383720332e3633383036652d30364333362e3539323420332e3638343632652d30362033372e3037353520302e3231303731362033372e3433313720302e3538353738394333372e3738373920302e3936303836312033372e3938383120312e34363935372033372e3938383120324c33372e393838312031324c33372e393832342031372e3833384333372e393939352031382e30362033382e333630332032332e33322033342e373736322032372e3431365a4d332e3739383820362e3534303539652d30374c31352e3139353220312e3730373234652d30364331352e36393920312e3735333739652d30362031362e3138323120302e3231303731342031362e3533383320302e3538353738374331362e3839343520302e3936303835392031372e3039343620312e34363935372031372e3039343620324c31372e303934362031324c31372e303838392031372e3833384331372e3130362031382e30362031372e343636392032332e33322031332e383832372032372e3431364331312e323137392033302e34353820372e313835343420333220312e383939342033324c2d332e38313437652d30362033324c2d332e3334383432652d30362032362e3336324c312e35323731322032362e303443342e313239332032352e34393220352e39333934332032342e34313420362e39303831322032322e38333243372e34313335372032312e3937393720372e37303032342032312e3030333920372e37343030372032304c312e3839393420323043312e333935363520323020302e3931323532362031392e3738393320302e3535363331372031392e3431343243302e3230303131322031392e30333931202d322e3730303734652d30362031382e35333034202d322e3635363837652d30362031384c2d312e3439393034652d30362034432d312e33313636652d303620312e37393420312e373033373620342e36303435652d303720332e3739383820362e3534303539652d30375a222066696c6c3d2223353630434533223e3c2f706174683e3c2f7376673e3c2f7370616e3e3c2f626c6f636b71756f74653e3c7020636c6173733d2274672d626c6f672d70617261206c682d3238206d622d343022207374796c653d226d617267696e2d626f74746f6d3a20343070783b206c696e652d6865696768743a20323870783b20746578742d7472616e73666f726d3a206361706974616c697a653b20666f6e742d73697a653a20313670783b20636f6c6f723a207267622835332c2035362c203638293b20666f6e742d66616d696c793a20506f7070696e732c2073616e732d73657269663b223e6e6f776e207072696e74657220746f6f6b20612067616c6c6579206f66207479706520616e6420736372616d626c656420697420746f206d616b65206120747970652073706563696d656e20626f6f6b2e20497420686173207375727669766564206e6f74206f6e6c7920666976652063656e7475726965732c2062757420616c736f20656c656374726f6e6963207479706573657474696e672072656d61696e696e6720657373656e7469616c6c7920756e6368616e6765642e2049742077617320706f70756c61726973656420696e207468652077697468207468652072656c65617365206f66204c657472617365742073686565747320636f6e7461696e696e676e20616e20756e6b6e6f776e207072696e74657220746f6f6b20612067616c6c6579206f66207479706520616e6420736372616d626c656420697420746f206d616b65206120747970652073706563696d656e20626f6f6b2e20497420686173207375727669766564206e6f74206f6e6c7920666976652063656e74757269652e3c2f703e, 'Exploring The Green Spac Realar Residence Area Harmony', 'Author', 'keywords', 'Description', 1, '2025-07-26 16:43:59', '2025-07-26 16:57:17');

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
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `image` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `content` blob DEFAULT NULL,
  `meta_title` text DEFAULT NULL,
  `meta_auther` text DEFAULT NULL,
  `meta_keyword` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `addeddate` datetime DEFAULT NULL,
  `modifieddate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `country_id`, `image`, `name`, `slug`, `content`, `meta_title`, `meta_auther`, `meta_keyword`, `meta_description`, `status`, `addeddate`, `modifieddate`) VALUES
(1, 4, '6887250eb6ac3.jpg', 'Moscow', 'moscow', 0x4d6f73636f772c205275737369616e204d6f736b76612c20636974792c206361706974616c206f66205275737369612c206c6f636174656420696e2074686520666172207765737465726e2070617274206f662074686520636f756e7472792e2053696e636520697420776173206669727374206d656e74696f6e656420696e20746865206368726f6e69636c6573206f6620313134372e, 'Moscow', 'MOXXY DMC', 'Moscow', 'Moscow', 1, '2025-07-28 12:41:03', '2025-07-28 14:39:42'),
(2, 7, '68873e8d4bf9b.jpg', 'Kaliningrad', 'kaliningrad', 0x54686520776f726c64e2809973206269676765737420636f756e7472792068617320612067656f706f6c69746963616c206f64646974793a2074686520726567696f6e206f66204b616c696e696e677261642e205468697320656e636c617665206973206120667261676d656e74206f66205275737369616e207465727269746f7279207468652073697a65206f6620596f726b73686972652c2073717565657a6564206265747765656e20506f6c616e6420616e64204c69746875616e69612e, 'Kaliningrad', 'MOXXY DMC', 'Worldwide, International Tour Operator, Vegetarian Tour Operator, Global Tour Operator, FWW, Group Tour Operator', 'tes', 1, '2025-07-28 14:40:37', NULL),
(3, 6, '68873eb9e0297.jpg', 'Sochi', 'sochi', 0x536f636869206973206f6674656e2063616c6c65642074686520756e6f6666696369616c202753756d6d6572204361706974616c27206f66205275737369612c206f722074686520426c61636b2053656120506561726c2e20546869732069732074686520636f756e7472792773206269676765737420616e6420627573696573742073756d6d657220736561207265736f72742c2061747472616374696e67206d6f7265207468616e20666f7572206d696c6c696f6e2076697369746f72732e, 'Sochi', 'MOXXY DMC', 'Tour Packages , best combo', 'test', 1, '2025-07-28 14:41:21', NULL),
(4, 5, '68873ee130955.jpg', 'Saint Petersburg', 'saint-petersburg', 0x41206d616a6f7220686973746f726963616c20616e642063756c747572616c2063656e74726520616e6420616e20696d706f7274616e7420706f72742c2053742e2050657465727362757267206c6965732061626f757420343030206d696c65732028363430206b6d29206e6f72746877657374206f66204d6f73636f7720616e64206f6e6c792061626f75742037c2b020736f757468206f66207468652041726374696320436972636c652e, 'Saint Petersburg', 'MOXXY DMC', 'Worldwide, International Tour Operator, Vegetarian Tour Operator, Global Tour Operator, FWW, Group Tour Operator', 'ddd', 1, '2025-07-28 14:42:01', '2025-07-28 14:42:09');

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
(9, 'tets', 'test@gmail.com', '123456', 'enquiry', '646', '2025-07-14 14:09:59'),
(10, 'Spiderman', 'Rahuljain@gmail.com', '01234645654', 'Enquiry', 'dsf', '2025-07-26 16:36:25');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `content` blob DEFAULT NULL,
  `title1` text DEFAULT NULL,
  `title1_content` text DEFAULT NULL,
  `title1_image` text DEFAULT NULL,
  `title2` text DEFAULT NULL,
  `title2_image` text DEFAULT NULL,
  `title2_content` text DEFAULT NULL,
  `title3` text DEFAULT NULL,
  `title3_content` text DEFAULT NULL,
  `title3_image` text DEFAULT NULL,
  `side_image` text DEFAULT NULL,
  `mission` text DEFAULT NULL,
  `vision` text DEFAULT NULL,
  `value` text DEFAULT NULL,
  `sub_title` text DEFAULT NULL,
  `title` text DEFAULT NULL,
  `url` text DEFAULT NULL,
  `bottom_title` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `name`, `image`, `content`, `title1`, `title1_content`, `title1_image`, `title2`, `title2_image`, `title2_content`, `title3`, `title3_content`, `title3_image`, `side_image`, `mission`, `vision`, `value`, `sub_title`, `title`, `url`, `bottom_title`) VALUES
(1, 'Home About Us', '6884a2ce7dafa.jpg', 0x3c683220636c6173733d2274672d73656374696f6e2d73752d7469746c6520746578742d6361706974616c697a6520776f772066616465496e5570206d622d31352220646174612d776f772d64656c61793d222e35732220646174612d776f772d6475726174696f6e3d222e397322207374796c653d226d617267696e2d626f74746f6d3a20313570783b206c696e652d6865696768743a20312e313b20636f6c6f723a2072676228322c20362c203231293b20666f6e742d73697a653a20333670783b20666f6e742d66616d696c793a204f75746669742c2073616e732d73657269663b206261636b67726f756e642d636f6c6f723a20726762283234362c203234342c20323530293b207669736962696c6974793a2076697369626c653b20616e696d6174696f6e2d6475726174696f6e3a20302e39733b20616e696d6174696f6e2d64656c61793a20302e35733b223e48657265206973204772656174206f70706f7274756e69747920666f7220616476656e7475726520262074726176656c733c2f68323e3c7020636c6173733d2274672d73656374696f6e2d73752d706172612074672d73656374696f6e2d73752d706172612d32206d622d3022207374796c653d22666f6e742d66616d696c793a204f75746669742c2073616e732d73657269663b20636f6c6f723a207267622835332c2035362c203638293b206c696e652d6865696768743a20323670783b20746578742d7472616e73666f726d3a206361706974616c697a653b20666f6e742d73697a653a20313670783b206261636b67726f756e642d636f6c6f723a20726762283234362c203234342c20323530293b223e41726520796f75207469726564206f6620746865207479706963616c20746f75726973742064657374696e6174696f6e7320616e64206c6f6f6b696e6720746f2073746570206f7574206f6620796f757220636f6d666f7274207a6f6e653f20416476656e747572652074726176656c206d617920626520746865207065726665637420736f6c7574696f6e20666f7220796f752120486572652061726520666f75722e3c2f703e, 'Best Travel Agency', 'Are you tiredthe typical tourist destina looking step outyour comfort.', '6884a09620dbe.webp', 'Secure Journey With Us', '6884a09620c3c.webp', 'Are you tiredthe typical tourist destina looking step outyour comfort.', 'Friendly price', 'Are you tiredthe typical tourist destina looking step outyour comfort.', '6884a096208b1.png', '6884a2db06b84.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'About Us', NULL, 0x3c683520636c6173733d2274672d73656374696f6e2d7375627469746c65206d622d313520776f772066616465496e55702220646174612d776f772d64656c61793d222e33732220646174612d776f772d6475726174696f6e3d222e317322207374796c653d226d617267696e2d626f74746f6d3a20313570783b206c696e652d6865696768743a20312e313b20636f6c6f723a2072676228372c2033312c203933293b20666f6e742d73697a653a20313770783b20746578742d7472616e73666f726d3a206361706974616c697a653b20666f6e742d66616d696c793a207365676f6570722c2073616e732d73657269663b207669736962696c6974793a2076697369626c653b20616e696d6174696f6e2d6475726174696f6e3a20302e31733b20616e696d6174696f6e2d64656c61793a20302e33733b223e4578706c6f72652074686520776f726c6420776974682075733c2f68353e3c683220636c6173733d226d622d313520746578742d6361706974616c697a6520776f772066616465496e55702220646174612d776f772d64656c61793d222e34732220646174612d776f772d6475726174696f6e3d222e397322207374796c653d226d617267696e2d626f74746f6d3a20313570783b206c696e652d6865696768743a20312e313b20636f6c6f723a2072676228322c20362c203231293b20666f6e742d73697a653a20333670783b20666f6e742d66616d696c793a20506f7070696e732c2073616e732d73657269663b207669736962696c6974793a2076697369626c653b20616e696d6174696f6e2d6475726174696f6e3a20302e39733b20616e696d6174696f6e2d64656c61793a20302e34733b223e5468652070657266656374207661636174696f6e20636f6d6520747275652077697468206f75722054726176656c204167656e63793c2f68323e3c7020636c6173733d22746578742d6361706974616c697a6520776f772066616465496e5570206d622d33352220646174612d776f772d64656c61793d222e35732220646174612d776f772d6475726174696f6e3d222e397322207374796c653d226d617267696e2d626f74746f6d3a20333570783b20636f6c6f723a207267622835332c2035362c203638293b20666f6e742d66616d696c793a20506f7070696e732c2073616e732d73657269663b20666f6e742d73697a653a20313670783b207669736962696c6974793a2076697369626c653b20616e696d6174696f6e2d6475726174696f6e3a20302e39733b20616e696d6174696f6e2d64656c61793a20302e35733b223e7768656e20616e20756e6b6e6f776e207072696e74657220746f6f6b20612067616c6c6579206f66207479706520616e6420736372616d626c656420697420746f206d616b65206120747970652073706563696d656e20626f6f6b2e20497420686173207375727669766564206e6f74206f6e6c7920666976652063656e747572696573c2a062757420616c736f20746865206c65617020696e746f20656c656374726f6e6963207479706573657474696e673c62723e72656d61696e696e6720657373656e7469616c6c7920756e6368616e6765642e3c2f703e, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'To create holidays that leave you speechless, and then turn you into a storyteller.', 'Once a year, we want everyone to travel some place they\'ve never been before.', 'Deliver unmatched travel experience with quality travelling and service, making greatest marvels and adding joy to your journey without burning a hole in your pocket.', NULL, NULL, NULL, NULL),
(3, 'Privacy Policy', NULL, 0x3c64697620636c6173733d227469746c6522207374796c653d22636f6c6f723a207267622831352c2035372c20313033293b20666f6e742d73697a653a20313870783b20666f6e742d7765696768743a203630303b20666f6e742d66616d696c793a20506f7070696e732c202671756f743b4261726c6f7720436f6e64656e7365642671756f743b2c2073616e732d73657269663b223e3c64697620636c6173733d227469746c65223e494e54524f44554354494f4e3c2f6469763e3c70207374796c653d226d617267696e2d746f703a20323070783b206d617267696e2d626f74746f6d3a203172656d3b20636f6c6f723a2072676228302c20302c2030293b20666f6e742d73697a653a20313670783b20666f6e742d7765696768743a203430303b206c696e652d6865696768743a20323670783b223e5468697320507269766163792028e2809c506f6c696379e2809d29206170706c69657320746f20746865207365637572696e6720616e642070726f63657373696e67206f6620706572736f6e616c206461746120627920464f52414d20574f524c445749444520484f53504954414c495459202868657265696e616674657220e2809c464f52414d20574f524c4457494445e2809d2920696e20636f6e6e656374696f6e207769746820706572736f6e616c20646174612070726f766964656420627920616e7920706572736f6e2028e2809c55736572e2809d292077686f2068617320707572636861736564206f7220696e74656e647320746f207075726368617365206f7220696e717569726965732061626f757420616e792070726f64756374287329206f722073657276696365287329206d61646520627920464f52414d20574f524c4457494445207468726f75676820616e79206f6620464f52414d20574f524c4457494445e280997320696e74657266616365206368616e6e656c7320696e636c7564696e6720776562736974652c206d6f62696c65207369746520616e64206d6f62696c65206170702028636f6c6c6563746976656c792072656665727265642068657265696e20617320e2809c53616c6573204368616e6e656c73e2809d292e3c2f703e3c7020636c6173733d22756c6c696e6522207374796c653d226d617267696e2d746f703a20323070783b206d617267696e2d626f74746f6d3a203172656d3b20636f6c6f723a2072676228302c20302c2030293b20666f6e742d73697a653a20313670783b20666f6e742d7765696768743a203430303b206c696e652d6865696768743a20323670783b223e466f722074686520707572706f7365206f66205072697661637920506f6c6963793a3c2f703e3c756c207374796c653d226d617267696e2d626f74746f6d3a203172656d3b20636f6c6f723a20726762283132342c203133332c20313535293b20666f6e742d7765696768743a203530303b223e3c6c69207374796c653d22636f6c6f723a2072676228302c20302c2030293b20666f6e742d73697a653a20313670783b206c696e652d6865696768743a20323670783b223e5265666572656e63657320696e207468697320706f6c69637920746f20e2809c796f75e2809d206f7220e2809c796f7572e2809d20617265207265666572656e63657320746f20e2809855736572e280993c2f6c693e3c6c69207374796c653d22636f6c6f723a2072676228302c20302c2030293b20666f6e742d73697a653a20313670783b206c696e652d6865696768743a20323670783b223e5265666572656e63657320746f20e2809c7765e2809d2c20e2809c7573e2809d206f7220e2809c6f7572e2809d20617265207265666572656e63657320746f20e28098464f52414d20574f524c4457494445e280993c2f6c693e3c6c69207374796c653d22636f6c6f723a2072676228302c20302c2030293b20666f6e742d73697a653a20313670783b206c696e652d6865696768743a20323670783b223e5265666572656e63657320746f20e2809c77656273697465e2809d206d65616e2061207265666572656e636520746f20e2809877656273697465287329e280992c20e280986d6f62696c652073697465287329e2809920616e64206d6f62696c65206170702873293c2f6c693e3c2f756c3e3c70207374796c653d226d617267696e2d746f703a20323070783b206d617267696e2d626f74746f6d3a203172656d3b20636f6c6f723a2072676228302c20302c2030293b20666f6e742d73697a653a20313670783b20666f6e742d7765696768743a203430303b206c696e652d6865696768743a20323670783b223e427920616363657373696e67206f72207573696e67207468652077656273697465206f7220616e79206f746865722073616c6573206368616e6e656c2c20746865205573657220616772656573207769746820746865207465726d206f6620746865205072697661637920506f6c69637920616e642074686520636f6e74656e74732068657265696e2e20496620796f75206469736167726565207769746820746865205072697661637920506f6c69637920706c6561736520646f206e6f7420616363657373206f7220757365206f75722077656273697465206f7220616e79206f746865722053616c6573204368616e6e656c732e3c2f703e3c70207374796c653d226d617267696e2d746f703a20323070783b206d617267696e2d626f74746f6d3a203172656d3b20636f6c6f723a2072676228302c20302c2030293b20666f6e742d73697a653a20313670783b20666f6e742d7765696768743a203430303b206c696e652d6865696768743a20323670783b223e54686973207072697661637920706f6c69637920646f6573206e6f74206170706c7920746f20616e792074686972642d706172747920776562736974652873292c206d6f62696c65207369746528732920616e64206d6f62696c65206170702873292e205573657273206172652072657175657374656420746f2074616b65206e6f7465207468617420696e666f726d6174696f6e20616e64207072697661637920707261637469636573206f6620464f52414d20574f524c4457494445e280997320627573696e65737320706172746e6572732c2061647665727469736572732c2073706f6e736f7273206f72206f7468657220736974657320746f20776869636820464f52414d20574f524c44574944452070726f76696465732068797065726c696e6b2873292c206d617920626520646966666572656e742066726f6d2074686973207072697661637920706f6c6963792c2048656e63652c206974206973207265636f6d6d656e646564207468617420796f752072657669657720746865207072697661637920706f6c696379206f6620616e7920737563682074686972642070617274696573206265666f726520796f7520696e7465726163742e3c2f703e3c70207374796c653d226d617267696e2d746f703a20323070783b206d617267696e2d626f74746f6d3a203172656d3b20636f6c6f723a2072676228302c20302c2030293b20666f6e742d73697a653a20313670783b20666f6e742d7765696768743a203430303b206c696e652d6865696768743a20323670783b223e596f7572207072697661637920697320696d706f7274616e7420746f20757320616e64207765207265636f676e6973652074686174207468652075736520616e6420646973636c6f73757265206f6620706572736f6e616c20646174612068617320696d706f7274616e7420696d706c69636174696f6e7320666f7220757320616e6420666f72207468652075736572732077686f736520706572736f6e616c20646174612077652070726f636573732e3c2f703e3c64697620636c6173733d227469746c65223e505552504f5345204f46205448495320504f4c4943593c2f6469763e3c70207374796c653d226d617267696e2d746f703a20323070783b206d617267696e2d626f74746f6d3a203172656d3b20636f6c6f723a2072676228302c20302c2030293b20666f6e742d73697a653a20313670783b20666f6e742d7765696768743a203430303b206c696e652d6865696768743a20323670783b223e5765207265737065637420796f7572206e65656420746f20756e6465727374616e6420686f7720616e642077687920696e666f726d6174696f6e206973206265696e6720636f6c6c65637465642c20757365642c20646973636c6f7365642c207472616e7366657272656420616e642073746f7265642e20546875732c207765206861766520646576656c6f706564207468697320506f6c69637920746f2066616d696c696172697a6520796f752077697468206f7572207072616374696365732e205468697320706f6c6963792073657473206f7574207468652077617920696e2077686963682077652070726f6365737320796f757220696e666f726d6174696f6e207768656e20796f7520757365206f75722057656273697465206f72206f74686572206469676974616c20706c6174666f726d7320696e206163636f7264616e63652077697468206170706c696361626c6520646174612070726f74656374696f6e206c6177732e20497420697320696d706f7274616e74207468617420796f752072656164207468697320706f6c69637920746f676574686572207769746820616e79206f7468657220706f6c6963696573207765206d61792070726f76696465206f6e207370656369666963206f63636173696f6e73207768656e2077652061726520636f6c6c656374696e67206f722070726f63657373696e6720796f757220706572736f6e616c20646174612c20736f207468617420796f75206172652066756c6c79206177617265206f6620686f7720616e642077687920776520617265207573696e6720796f757220706572736f6e616c20646174612e205468697320706f6c69637920737570706c656d656e747320746865206f74686572206e6f746963657320616e64206973206e6f7420696e74656e64656420746f206f76657272696465207468656d2e3c2f703e3c64697620636c6173733d227469746c65223e444546494e494e4720434f4e54524f4c4c4552204f4620504552534f4e414c20444154413c2f6469763e3c70207374796c653d226d617267696e2d746f703a20323070783b206d617267696e2d626f74746f6d3a203172656d3b20636f6c6f723a2072676228302c20302c2030293b20666f6e742d73697a653a20313670783b20666f6e742d7765696768743a203430303b206c696e652d6865696768743a20323670783b223e4120e2809c436f6e74726f6c6c6572e2809d206973206120706572736f6e206f72206f7267616e69736174696f6e2077686f20616c6f6e65206f72206a6f696e746c792064657465726d696e65732074686520707572706f73657320666f722077686963682c20616e6420746865206d616e6e657220696e2077686963682c20616e7920706572736f6e616c20646174612069732c206f72206973206c696b656c7920746f2062652c2070726f6365737365642e2054686973206e6f7469636520697320697373756564206f6e20626568616c66206f6620464f52414d20574f524c445749444520617320636f6e74726f6c6c65722e3c2f703e3c70207374796c653d226d617267696e2d746f703a20323070783b206d617267696e2d626f74746f6d3a203172656d3b20636f6c6f723a2072676228302c20302c2030293b20666f6e742d73697a653a20313670783b20666f6e742d7765696768743a203430303b206c696e652d6865696768743a20323670783b223e50726f636573736f722069732061206e61747572616c206f72206c6567616c20706572736f6e2c207075626c696320617574686f726974792c206167656e6379206f72206f7468657220626f64792077686963682070726f63657373657320706572736f6e616c2064617461206f6e20626568616c66206f662074686520436f6e74726f6c6c65722e3c2f703e3c70207374796c653d226d617267696e2d746f703a20323070783b206d617267696e2d626f74746f6d3a203172656d3b20636f6c6f723a2072676228302c20302c2030293b20666f6e742d73697a653a20313670783b20666f6e742d7765696768743a203430303b206c696e652d6865696768743a20323670783b223e4173207468652063697263756d7374616e6365732077617272616e7420464f52414d20574f524c4457494445206d617920626520436f6e74726f6c6c6572206f722050726f636573736f72206f6620796f757220706572736f6e616c20646174612e3c2f703e3c64697620636c6173733d227469746c65223e54595045204f4620504552534f4e414c204441544120574520434f4c4c4543543c2f6469763e3c70207374796c653d226d617267696e2d746f703a20323070783b206d617267696e2d626f74746f6d3a203172656d3b20636f6c6f723a2072676228302c20302c2030293b20666f6e742d73697a653a20313670783b20666f6e742d7765696768743a203430303b206c696e652d6865696768743a20323670783b223e506572736f6e616c206461746120696e636c7564657320616e7920696e666f726d6174696f6e2061626f757420616e7920757365722066726f6d207768696368207468617420706572736f6e2063616e206265206964656e7469666965642e20497420646f6573206e6f7420696e636c75646520706572736f6e616c206461746120776865726520746865206964656e7469747920686173206265656e2072656d6f7665642028616e6f6e796d6f75732064617461292e3c2f703e3c70207374796c653d226d617267696e2d746f703a20323070783b206d617267696e2d626f74746f6d3a203172656d3b20636f6c6f723a2072676228302c20302c2030293b20666f6e742d73697a653a20313670783b20666f6e742d7765696768743a203430303b206c696e652d6865696768743a20323670783b223e596f75206d61792062652061736b656420666f7220706572736f6e616c206461746120616e7974696d6520796f752061726520696e20636f6e74616374207769746820464f52414d20574f524c4457494445206469726563746c79206f7220696e6469726563746c79207468726f75676820612074686972642070617274792e3c2f703e3c70207374796c653d226d617267696e2d746f703a20323070783b206d617267696e2d626f74746f6d3a203172656d3b20636f6c6f723a2072676228302c20302c2030293b20666f6e742d73697a653a20313670783b20666f6e742d7765696768743a203430303b206c696e652d6865696768743a20323670783b223e576520636f6c6c6563742c2075736520616e6420736861726520616767726567617465642064617461207375636820617320737461746973746963616c206f722064656d6f67726170686963206461746120666f7220616e7920707572706f73652e20416767726567617465642064617461206d617920626520646572697665642066726f6d20796f757220706572736f6e616c206461746120627574206973206e6f7420636f6e7369646572656420706572736f6e616c206461746120696e206c61772061732074686973206461746120646f6573206e6f74206469726563746c79206f7220696e6469726563746c792072657665616c20796f7572206964656e746974792e20466f72206578616d706c652c207765206d61792061676772656761746520796f7572205573616765204461746120746f2063616c63756c617465207468652070657263656e74616765206f6620757365727320616363657373696e672061207370656369666963207765627369746520666561747572652e20486f77657665722c20696620776520636f6d62696e65206f7220636f6e6e65637420616767726567617465642064617461207769746820796f757220706572736f6e616c206461746120736f20746861742069742063616e206469726563746c79206f7220696e6469726563746c79206964656e7469667920796f752c2077652074726561742074686520636f6d62696e6564206461746120617320706572736f6e616c20646174612077686963682077696c6c206265207573656420696e206163636f7264616e63652077697468207468697320706f6c6963792e3c2f703e3c70207374796c653d226d617267696e2d746f703a20323070783b206d617267696e2d626f74746f6d3a203172656d3b20636f6c6f723a2072676228302c20302c2030293b20666f6e742d73697a653a20313670783b20666f6e742d7765696768743a203430303b206c696e652d6865696768743a20323670783b223e576520646f206e6f7420636f6c6c65637420616e79207370656369616c2063617465676f72696573206f6620706572736f6e616c20646174612061626f757420796f75207468726f756768206f7572205765627369746520287468697320696e636c756465732064657461696c732061626f757420796f75722072616365206f72206574686e69636974792c2072656c6967696f7573206f72207068696c6f736f70686963616c2062656c696566732c20736578206c6966652c2073657875616c206f7269656e746174696f6e2c20706f6c69746963616c206f70696e696f6e732c20747261646520756e696f6e206d656d626572736869702c20696e666f726d6174696f6e2061626f757420796f7572206865616c746820616e642067656e6574696320616e642062696f6d65747269632064617461292e204e6f7220646f20776520636f6c6c65637420616e7920696e666f726d6174696f6e2061626f7574206372696d696e616c20636f6e76696374696f6e7320616e64206f6666656e6365732e3c2f703e3c70207374796c653d226d617267696e2d746f703a20323070783b206d617267696e2d626f74746f6d3a203172656d3b20636f6c6f723a2072676228302c20302c2030293b20666f6e742d73697a653a20313670783b20666f6e742d7765696768743a203430303b206c696e652d6865696768743a20323670783b223e576520636f6c6c6563742c207573652c2073746f726520616e64207472616e7366657220646966666572656e74206b696e6473206f6620706572736f6e616c20646174612061626f757420796f752e20576520686176652067726f7570656420746f6765746865722074686520666f6c6c6f77696e672063617465676f72696573206f6620706572736f6e616c206461746120746f206578706c61696e20686f7720746869732074797065206f6620696e666f726d6174696f6e20697320757365642062792075732e205468657365207465726d73206172652075736564207468726f7567686f75742074686973204e6f746963653a3c2f703e3c70207374796c653d226d617267696e2d746f703a20323070783b206d617267696e2d626f74746f6d3a203172656d3b20636f6c6f723a2072676228302c20302c2030293b20666f6e742d73697a653a20313670783b20666f6e742d7765696768743a203430303b206c696e652d6865696768743a20323670783b223ee2809c436f6e746163742044617461e2809d3a20696e636c7564696e6720796f7572207265736964656e7469616c20616464726573732c20776f726b20616464726573732c20656d61696c206164647265737320616e642074656c6570686f6e65206e756d626572733b3c2f703e3c70207374796c653d226d617267696e2d746f703a20323070783b206d617267696e2d626f74746f6d3a203172656d3b20636f6c6f723a2072676228302c20302c2030293b20666f6e742d73697a653a20313670783b20666f6e742d7765696768743a203430303b206c696e652d6865696768743a20323670783b223ee2809c4964656e746974792044617461e2809d3a20696e636c7564696e6720796f7572206669727374206e616d652c206c617374206e616d652c20757365726e616d65206f722073696d696c6172206964656e7469666965722c207469746c653b3c2f703e3c70207374796c653d226d617267696e2d746f703a20323070783b206d617267696e2d626f74746f6d3a203172656d3b20636f6c6f723a2072676228302c20302c2030293b20666f6e742d73697a653a20313670783b20666f6e742d7765696768743a203430303b206c696e652d6865696768743a20323670783b223ee2809c5765627369746520557365722044617461e2809d3a20557365726e616d65732c2050617373776f72647320616e64206f746865722073656375726974792072656c6174656420696e666f726d6174696f6e207573656420627920796f7520696e2072656c6174696f6e20746f206f75722073657276696365733c2f703e3c70207374796c653d226d617267696e2d746f703a20323070783b206d617267696e2d626f74746f6d3a203172656d3b20636f6c6f723a2072676228302c20302c2030293b20666f6e742d73697a653a20313670783b20666f6e742d7765696768743a203430303b206c696e652d6865696768743a20323670783b223ee2809c5472616e73616374696f6e20446174613a205472616e73616374696f6e616c20686973746f72792061626f757420796f757220652d636f6d6d6572636520616374697669746965732c20627579696e67206265686176696f75722e20496e666f726d6174696f6e207065727461696e696e6720616e79206f746865722074726176656c6c657228732920666f722077686f6d20796f75206d616465206120626f6f6b696e67207468726f75676820796f7572207265676973746572656420464f52414d20574f524c4457494445206163636f756e742e20496e207375636820636173652c20796f75206d75737420636f6e6669726d20616e6420726570726573656e7420746861742065616368206f6620746865206f746865722074726176656c6c657228732920666f722077686f6d206120626f6f6b696e6720686173206265656e206d6164652c206861732061677265656420746f20686176652074686520696e666f726d6174696f6e2073686172656420627920796f7520646973636c6f73656420746f20757320616e6420667572746865722062652073686172656420627920757320776974682074686520636f6e6365726e656420736572766963652070726f76696465722873292e20e2809c4d61726b6574696e6720616e6420436f6d6d756e69636174696f6e732044617461e2809d3a20696e636c7564696e6720796f7572206d61726b6574696e6720616e6420636f6d6d756e69636174696f6e20707265666572656e6365732e20576520616c736f20747261636b207768656e20796f75207265636569766520616e642072656164206d61726b6574696e6720636f6d6d756e69636174696f6e732066726f6d2075732c20776869636820696e666f726d6174696f6e2077652075736520746f20696d70726f7665206f7572206d61726b6574696e672073657276696365732c2070726f7669646520796f752077697468206d6f72652072656c6576616e7420696e666f726d6174696f6e20616e6420696d70726f766520746865207175616c697479206f66206f7572206d61726b6574696e67206d6174657269616c732e204164646974696f6e616c20696e666f726d6174696f6e2061626f75742074686520706572736f6e616c20646174612077652070726f6365737320696e20636f6e6e656374696f6e2077697468206d61726b6574696e6720697320696e636c75646564207769746820746865206d61726b6574696e6720636f6d6d756e69636174696f6e732077652073656e6420796f753b3c2f703e3c70207374796c653d226d617267696e2d746f703a20323070783b206d617267696e2d626f74746f6d3a203172656d3b20636f6c6f723a2072676228302c20302c2030293b20666f6e742d73697a653a20313670783b20666f6e742d7765696768743a203430303b206c696e652d6865696768743a20323670783b223ee2809c5075626c696320446f6d61696e206f722054686972642050617274792044617461e2809d3a204461746120617661696c61626c6520696e207075626c696320646f6d61696e206f722072656365697665642066726f6d20616e7920746869726420706172747920696e636c7564696e6720736f6369616c206d65646961206368616e6e656c732c20696e636c7564696e6720627574206e6f74206c696d6974656420746f20706572736f6e616c206f72206e6f6e2d706572736f6e616c20696e666f726d6174696f6e2066726f6d20796f7572206c696e6b656420736f6369616c206d65646961206368616e6e656c7320286c696b65206e616d652c20656d61696c20616464726573732c20667269656e64206c6973742c2070726f66696c65207069637475726573206f7220616e79206f7468657220696e666f726d6174696f6e2074686174206973207065726d697474656420746f2062652072656365697665642061732070657220796f7572206163636f756e742073657474696e67732920617320612070617274206f6620796f7572206163636f756e7420696e666f726d6174696f6e2e3c2f703e3c70207374796c653d226d617267696e2d746f703a20323070783b206d617267696e2d626f74746f6d3a203172656d3b20636f6c6f723a2072676228302c20302c2030293b20666f6e742d73697a653a20313670783b20666f6e742d7765696768743a203430303b206c696e652d6865696768743a20323670783b223ee2809c50726f66696c652044617461e2809d3a20696e636c7564696e6720696e666f726d6174696f6e20636f6c6c65637465642070726f67726573736976656c79207768656e20796f75207669736974206f7572207369746520696e636c7564696e6720796f757220726566657272616c20776562736974652c20706167657320796f752076697369742c20616374696f6e7320796f752074616b652c207061747465726e73206f6620706167652076697369747320616e6420696e666f726d6174696f6e2066726f6d20666f726d7320796f752066696c6c20696e3b3c2f703e3c70207374796c653d226d617267696e2d746f703a20323070783b206d617267696e2d626f74746f6d3a203172656d3b20636f6c6f723a2072676228302c20302c2030293b20666f6e742d73697a653a20313670783b20666f6e742d7765696768743a203430303b206c696e652d6865696768743a20323670783b223ee2809c546563686e6963616c2044617461e2809d3a20696e636c7564657320696e666f726d6174696f6e20636f6c6c6563746564207768656e20796f7520616363657373206f757220776562736974652c206d6f62696c652073697465206f72206d6f62696c652061707020796f757220696e7465726e65742070726f746f636f6c202849502920616464726573732c20796f7572206c6f67696e20646174612c2062726f77736572207479706520616e642076657273696f6e2c2074696d65207a6f6e652073657474696e6720616e64206c6f636174696f6e2c2062726f7773657220706c75672d696e20747970657320616e642076657273696f6e732c206f7065726174696e672073797374656d20616e6420706c6174666f726d20616e64206f7468657220746563686e6f6c6f6779206f6e20746865206465766963657320796f7520617265207573696e673b20616e643c2f703e3c70207374796c653d226d617267696e2d746f703a20323070783b206d617267696e2d626f74746f6d3a203172656d3b20636f6c6f723a2072676228302c20302c2030293b20666f6e742d73697a653a20313670783b20666f6e742d7765696768743a203430303b206c696e652d6865696768743a20323670783b223ee2809c55736167652044617461e2809d3a20696e666f726d6174696f6e2061626f757420686f7720796f7520757365206f757220576562736974652e3c2f703e3c70207374796c653d226d617267696e2d746f703a20323070783b206d617267696e2d626f74746f6d3a203172656d3b20636f6c6f723a2072676228302c20302c2030293b20666f6e742d73697a653a20313670783b20666f6e742d7765696768743a203430303b206c696e652d6865696768743a20323670783b223ee2809c416e79206f7468657220506572736f6e616c2044617461e2809d3a20496620796f75207265717565737420464f52414d20574f524c445749444520746f2070726f7669646520766973612072656c617465642073657276696365732c207468656e20636f70696573206f6620796f75722070617373706f72742c2062616e6b2073746174656d656e74732c206f726967696e616c73206f66207468652066696c6c656420696e206170706c69636174696f6e20666f726d732c2070686f746f6772617068732c20616e6420616e79206f7468657220696e666f726d6174696f6e207768696368206d617920626520726571756972656420627920746865207265737065637469766520656d626173737920746f2070726f6365737320796f75722076697361206170706c69636174696f6e2e20496620796f75207265717565737420464f52414d20574f524c445749444520746f2070726f7669646520666f726569676e2065786368616e67652028666f726578292072656c61746564207365727669636573207468656e2070617373706f727420636f706965732c20413220666f726d2c20616972207469636b657473206f722074726176656c2061757468656e7469636174696f6e20646f63756d656e7420746f2076657269667920636f6e6669726d65642074726176656c206f7220616e79206f7468657220646f63756d656e747320726571756972656420746f2070726f6365737320796f757220466f726578207472616e73616374696f6e3c2f703e3c64697620636c6173733d227469746c65223e4d4f444553204f4620434f4c4c454354494e4720504552534f4e414c20444154413c2f6469763e3c70207374796c653d226d617267696e2d746f703a20323070783b206d617267696e2d626f74746f6d3a203172656d3b20636f6c6f723a2072676228302c20302c2030293b20666f6e742d73697a653a20313670783b20666f6e742d7765696768743a203430303b206c696e652d6865696768743a20323670783b223e546865206f6e6c79207761792077652077696c6c2067657420616e79206b696e64206f6620706572736f6e616c206461746120697320696620796f752063686f6f736520746f206769766520697420746f20757320696e2074686520666f6c6c6f77696e672063697263756d7374616e6365733a3c2f703e3c7020636c6173733d22756c6c696e6522207374796c653d226d617267696e2d746f703a20323070783b206d617267696e2d626f74746f6d3a203172656d3b20636f6c6f723a2072676228302c20302c2030293b20666f6e742d73697a653a20313670783b20666f6e742d7765696768743a203430303b206c696e652d6865696768743a20323670783b223e2861292044697265637420696e746572616374696f6e3a3c2f703e3c756c207374796c653d226d617267696e2d626f74746f6d3a203172656d3b20636f6c6f723a20726762283132342c203133332c20313535293b20666f6e742d7765696768743a203530303b223e3c6c69207374796c653d22636f6c6f723a2072676228302c20302c2030293b20666f6e742d73697a653a20313670783b206c696e652d6865696768743a20323670783b223e5768656e20796f75206d616b6520616e20656e7175697279206f722071756f746174696f6e2072657175657374206f72206d616b652061207265736572766174696f6e206f722070757263686173652066726f6d206f757220e2809857656273697465e28099206f72207468726f756768206f757220637573746f6d65722073657276696365207465616d202d20627920656d61696c2873292c206c65747465722873292c206661782c206f6e207468652070686f6e65206f7220696e20706879736963616c2073746f72653c2f6c693e3c6c69207374796c653d22636f6c6f723a2072676228302c20302c2030293b20666f6e742d73697a653a20313670783b206c696e652d6865696768743a20323670783b223e5768656e20796f7520726567697374657220776974682075732c2073756273637269626520746f206f7572206e6577736c65747465722c20656e74657220696e206c75636b792064726177732f636f6d7065746974696f6e732f737572766579732f666565646261636b2c2073656e642075732071756572696573206f7220726567697374657220666f722070726f6d6f74696f6e733c2f6c693e3c6c69207374796c653d22636f6c6f723a2072676228302c20302c2030293b20666f6e742d73697a653a20313670783b206c696e652d6865696768743a20323670783b223e5768656e20796f7520656e67616765207769746820757320696e20616e79206f6e6c696e65206f72206f66666c696e65206576656e742c2070726f6d6f74696f6e732c207061676520686f73746564206279207573206f6e206120746869726420706172747920706c6174666f726d206f72206c6f636174696f6e3c2f6c693e3c6c69207374796c653d22636f6c6f723a2072676228302c20302c2030293b20666f6e742d73697a653a20313670783b206c696e652d6865696768743a20323670783b223e5468726f75676820636f6f6b696573206f6e206f757220576562736974653c2f6c693e3c2f756c3e3c7020636c6173733d22756c6c696e6522207374796c653d226d617267696e2d746f703a20323070783b206d617267696e2d626f74746f6d3a203172656d3b20636f6c6f723a2072676228302c20302c2030293b20666f6e742d73697a653a20313670783b20666f6e742d7765696768743a203430303b206c696e652d6865696768743a20323670783b223e28622920436f6f6b69657320616e64206f7468657220746563686e6f6c6f67696573203a3c2f703e3c756c207374796c653d226d617267696e2d626f74746f6d3a203172656d3b20636f6c6f723a20726762283132342c203133332c20313535293b20666f6e742d7765696768743a203530303b223e3c6c69207374796c653d22636f6c6f723a2072676228302c20302c2030293b20666f6e742d73697a653a20313670783b206c696e652d6865696768743a20323670783b223e5765207265636569766520546563686e6963616c20446174612061626f757420796f75722065717569706d656e742c2062726f7773696e6720616374696f6e7320616e64207061747465726e732e20576520636f6c6c656374207468697320706572736f6e616c2064617461206279207573696e6720636f6f6b6965732c20736572766572206c6f677320616e64206f746865722073696d696c617220746563686e6f6c6f676965732e20506c656173652073656520636f6f6b696520706f6c69637920666f7220667572746865722064657461696c73206f662074686520696e666f726d6174696f6e20636f6c6c65637465642e3c2f6c693e3c2f756c3e3c7020636c6173733d22756c6c696e6522207374796c653d226d617267696e2d746f703a20323070783b206d617267696e2d626f74746f6d3a203172656d3b20636f6c6f723a2072676228302c20302c2030293b20666f6e742d73697a653a20313670783b20666f6e742d7765696768743a203430303b206c696e652d6865696768743a20323670783b223e2863292054686972642070617274696573206f72207075626c69636c7920617661696c61626c6520736f75726365733a3c2f703e3c756c207374796c653d226d617267696e2d626f74746f6d3a203172656d3b20636f6c6f723a20726762283132342c203133332c20313535293b20666f6e742d7765696768743a203530303b223e3c6c69207374796c653d22636f6c6f723a2072676228302c20302c2030293b20666f6e742d73697a653a20313670783b206c696e652d6865696768743a20323670783b223e5765207265636569766520546563686e6963616c20446174612066726f6d20616e616c79746963732070726f766964657273207375636820617320476f6f676c653c2f6c693e3c2f756c3e3c64697620636c6173733d227469746c65223e47524f554e445320464f522050524f43455353494e47204f4620444154413c2f6469763e3c7020636c6173733d22756c6c696e6522207374796c653d226d617267696e2d746f703a20323070783b206d617267696e2d626f74746f6d3a203172656d3b20636f6c6f723a2072676228302c20302c2030293b20666f6e742d73697a653a20313670783b20666f6e742d7765696768743a203430303b206c696e652d6865696768743a20323670783b223e5768656e20796f7520757365206f757220576562736974652077652077696c6c2075736520796f757220706572736f6e616c206461746120696e2074686520666f6c6c6f77696e672063697263756d7374616e6365733a3c2f703e3c756c207374796c653d226d617267696e2d626f74746f6d3a203172656d3b20636f6c6f723a20726762283132342c203133332c20313535293b20666f6e742d7765696768743a203530303b223e3c6c69207374796c653d22636f6c6f723a2072676228302c20302c2030293b20666f6e742d73697a653a20313670783b206c696e652d6865696768743a20323670783b223ee2809c706572666f726d616e6365206f66206120636f6e7472616374e2809d3a207768657265207765206e65656420746f20706572666f726d206120636f6e7472616374207768696368207765206172652061626f757420746f20656e74657220696e746f206f72206861766520656e746572656420696e746f207769746820796f752061732061207061727479206f7220746f2074616b6520737465707320617420796f75722072657175657374206265666f726520656e746572696e6720696e746f2073756368206120636f6e74726163743b3c2f6c693e3c6c69207374796c653d22636f6c6f723a2072676228302c20302c2030293b20666f6e742d73697a653a20313670783b206c696e652d6865696768743a20323670783b223ee2809c6c6567616c206f7220726567756c61746f7279206f626c69676174696f6ee2809d3a207768657265207765206e65656420746f20636f6d706c7920776974682061206c6567616c206f7220726567756c61746f7279206f626c69676174696f6e207468617420776520617265207375626a65637420746f3b3c2f6c693e3c6c69207374796c653d22636f6c6f723a2072676228302c20302c2030293b20666f6e742d73697a653a20313670783b206c696e652d6865696768743a20323670783b223ee2809c6c65676974696d61746520696e74657265737473e2809d3a207768657265206e656365737361727920666f72206f757220696e746572657374732070726f7669646564207468617420796f75722066756e64616d656e74616c2072696768747320646f206e6f74206f76657272696465207375636820696e746572657374732e20546869732063616e206d65616e2c20666f7220696e7374616e63652c207468617420697420697320696e206f757220696e7465726573742c20746f206d6f6e69746f7220686f7720796f7520617265207573696e67206f75722057656273697465206f7220636c69656e7420706f7274616c7320746f20656e73757265207468617420746865207365637572697479206f66206f75722057656273697465206f7220636c69656e7420706f7274616c73206f722073797374656d73206973206d61696e7461696e65642e205765206d616b65207375726520776520636f6e736964657220616e642062616c616e636520616e7920706f74656e7469616c20696d70616374206f6e20796f752028626f746820706f73697469766520616e64206e656761746976652920616e6420796f757220726967687473206265666f72652077652070726f6365737320796f757220706572736f6e616c206461746120666f72206f7572206c65676974696d61746520696e746572657374733b20616e643c2f6c693e3c6c69207374796c653d22636f6c6f723a2072676228302c20302c2030293b20666f6e742d73697a653a20313670783b206c696e652d6865696768743a20323670783b223ee2809c636f6e73656e74e2809d3a2057652072656c79206f6e20636f6e73656e742061732061206c6567616c20626173697320666f722070726f63657373696e6720796f757220706572736f6e616c206461746120696e2072656c6174696f6e20746f2073656e64696e6720646972656374206d61726b6574696e6720636f6d6d756e69636174696f6e7320746f20796f752076696120656d61696c206f722074657874206d6573736167652e3c2f6c693e3c2f756c3e3c70207374796c653d226d617267696e2d746f703a20323070783b206d617267696e2d626f74746f6d3a203172656d3b20636f6c6f723a2072676228302c20302c2030293b20666f6e742d73697a653a20313670783b20666f6e742d7765696768743a203430303b206c696e652d6865696768743a20323670783b223e576520646f206e6f742075736520796f757220706572736f6e616c206461746120666f722061637469766974696573207768657265206f757220696e7465726573747320617265206f76657272696464656e2062792074686520696d70616374206f6e20796f752028756e6c657373207765206861766520796f757220636f6e73656e74206f7220617265206f7468657277697365207265717569726564206f72207065726d697474656420746f206279206c6177292e3c2f703e3c2f6469763e, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Refund & Return Policy', NULL, 0x3c703e746573743c2f703e, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Term & Condition ', NULL, 0x3c703e5465726d2026616d703b20436f6e646974696f6e3c2f703e, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Explore Banner', '6884b1eb38f1a.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Next Adventure Destination', 'Popular Travel Destinations Available Worldwide', 'https://www.youtube.com/', 'Explore The World');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `image` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `banner` text DEFAULT NULL,
  `image2` text DEFAULT NULL,
  `image3` text DEFAULT NULL,
  `image4` text DEFAULT NULL,
  `content` longblob DEFAULT NULL,
  `meta_title` text DEFAULT NULL,
  `meta_auther` text DEFAULT NULL,
  `meta_keyword` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `addeddate` datetime DEFAULT NULL,
  `modifieddate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `image`, `name`, `slug`, `banner`, `image2`, `image3`, `image4`, `content`, `meta_title`, `meta_auther`, `meta_keyword`, `meta_description`, `status`, `addeddate`, `modifieddate`) VALUES
(3, '68871d63e1c63.jpg', 'Russia', 'russia', '6887195031532.jpg', '6887195031895.jpg', '6887195031c04.jpg', '6887195031f70.jpg', 0x3c7020636c6173733d224d736f4e6f726d616c22207374796c653d22626f726465722d77696474683a203070783b20626f726465722d7374796c653a20736f6c69643b20626f726465722d636f6c6f723a20726762283232392c203233312c20323335293b202d2d74772d626f726465722d73706163696e672d783a20303b202d2d74772d626f726465722d73706163696e672d793a20303b202d2d74772d7472616e736c6174652d783a20303b202d2d74772d7472616e736c6174652d793a20303b202d2d74772d726f746174653a20303b202d2d74772d736b65772d783a20303b202d2d74772d736b65772d793a20303b202d2d74772d7363616c652d783a20313b202d2d74772d7363616c652d793a20313b202d2d74772d70616e2d783a203b202d2d74772d70616e2d793a203b202d2d74772d70696e63682d7a6f6f6d3a203b202d2d74772d7363726f6c6c2d736e61702d7374726963746e6573733a2070726f78696d6974793b202d2d74772d6772616469656e742d66726f6d2d706f736974696f6e3a203b202d2d74772d6772616469656e742d7669612d706f736974696f6e3a203b202d2d74772d6772616469656e742d746f2d706f736974696f6e3a203b202d2d74772d6f7264696e616c3a203b202d2d74772d736c61736865642d7a65726f3a203b202d2d74772d6e756d657269632d6669677572653a203b202d2d74772d6e756d657269632d73706163696e673a203b202d2d74772d6e756d657269632d6672616374696f6e3a203b202d2d74772d72696e672d696e7365743a203b202d2d74772d72696e672d6f66667365742d77696474683a203070783b202d2d74772d72696e672d6f66667365742d636f6c6f723a20236666663b202d2d74772d72696e672d636f6c6f723a207267622835392031333020323436202f20302e35293b202d2d74772d72696e672d6f66667365742d736861646f773a203020302023303030303b202d2d74772d72696e672d736861646f773a203020302023303030303b202d2d74772d736861646f773a203020302023303030303b202d2d74772d736861646f772d636f6c6f7265643a203020302023303030303b202d2d74772d626c75723a203b202d2d74772d6272696768746e6573733a203b202d2d74772d636f6e74726173743a203b202d2d74772d677261797363616c653a203b202d2d74772d6875652d726f746174653a203b202d2d74772d696e766572743a203b202d2d74772d73617475726174653a203b202d2d74772d73657069613a203b202d2d74772d64726f702d736861646f773a203b202d2d74772d6261636b64726f702d626c75723a203b202d2d74772d6261636b64726f702d6272696768746e6573733a203b202d2d74772d6261636b64726f702d636f6e74726173743a203b202d2d74772d6261636b64726f702d677261797363616c653a203b202d2d74772d6261636b64726f702d6875652d726f746174653a203b202d2d74772d6261636b64726f702d696e766572743a203b202d2d74772d6261636b64726f702d6f7061636974793a203b202d2d74772d6261636b64726f702d73617475726174653a203b202d2d74772d6261636b64726f702d73657069613a203b20666f6e742d66616d696c793a2043616c696272692c2073616e732d73657269663b206d617267696e3a2030636d2030636d20302e3030303170743b20666f6e742d73697a653a206d656469756d3b20746578742d616c69676e3a206a7573746966793b20636f6c6f723a207267622833332c2033372c203431293b2063617265742d636f6c6f723a2072676228302c20302c2030293b223e3c7370616e206c616e673d22454e2d555322207374796c653d22626f726465722d77696474683a203070783b20626f726465722d7374796c653a20736f6c69643b20626f726465722d636f6c6f723a20726762283232392c203233312c20323335293b202d2d74772d626f726465722d73706163696e672d783a20303b202d2d74772d626f726465722d73706163696e672d793a20303b202d2d74772d7472616e736c6174652d783a20303b202d2d74772d7472616e736c6174652d793a20303b202d2d74772d726f746174653a20303b202d2d74772d736b65772d783a20303b202d2d74772d736b65772d793a20303b202d2d74772d7363616c652d783a20313b202d2d74772d7363616c652d793a20313b202d2d74772d70616e2d783a203b202d2d74772d70616e2d793a203b202d2d74772d70696e63682d7a6f6f6d3a203b202d2d74772d7363726f6c6c2d736e61702d7374726963746e6573733a2070726f78696d6974793b202d2d74772d6772616469656e742d66726f6d2d706f736974696f6e3a203b202d2d74772d6772616469656e742d7669612d706f736974696f6e3a203b202d2d74772d6772616469656e742d746f2d706f736974696f6e3a203b202d2d74772d6f7264696e616c3a203b202d2d74772d736c61736865642d7a65726f3a203b202d2d74772d6e756d657269632d6669677572653a203b202d2d74772d6e756d657269632d73706163696e673a203b202d2d74772d6e756d657269632d6672616374696f6e3a203b202d2d74772d72696e672d696e7365743a203b202d2d74772d72696e672d6f66667365742d77696474683a203070783b202d2d74772d72696e672d6f66667365742d636f6c6f723a20236666663b202d2d74772d72696e672d636f6c6f723a207267622835392031333020323436202f20302e35293b202d2d74772d72696e672d6f66667365742d736861646f773a203020302023303030303b202d2d74772d72696e672d736861646f773a203020302023303030303b202d2d74772d736861646f773a203020302023303030303b202d2d74772d736861646f772d636f6c6f7265643a203020302023303030303b202d2d74772d626c75723a203b202d2d74772d6272696768746e6573733a203b202d2d74772d636f6e74726173743a203b202d2d74772d677261797363616c653a203b202d2d74772d6875652d726f746174653a203b202d2d74772d696e766572743a203b202d2d74772d73617475726174653a203b202d2d74772d73657069613a203b202d2d74772d64726f702d736861646f773a203b202d2d74772d6261636b64726f702d626c75723a203b202d2d74772d6261636b64726f702d6272696768746e6573733a203b202d2d74772d6261636b64726f702d636f6e74726173743a203b202d2d74772d6261636b64726f702d677261797363616c653a203b202d2d74772d6261636b64726f702d6875652d726f746174653a203b202d2d74772d6261636b64726f702d696e766572743a203b202d2d74772d6261636b64726f702d6f7061636974793a203b202d2d74772d6261636b64726f702d73617475726174653a203b202d2d74772d6261636b64726f702d73657069613a203b223e3c7370616e207374796c653d22626f726465722d77696474683a203070783b20626f726465722d7374796c653a20736f6c69643b20626f726465722d636f6c6f723a20726762283232392c203233312c20323335293b202d2d74772d626f726465722d73706163696e672d783a20303b202d2d74772d626f726465722d73706163696e672d793a20303b202d2d74772d7472616e736c6174652d783a20303b202d2d74772d7472616e736c6174652d793a20303b202d2d74772d726f746174653a20303b202d2d74772d736b65772d783a20303b202d2d74772d736b65772d793a20303b202d2d74772d7363616c652d783a20313b202d2d74772d7363616c652d793a20313b202d2d74772d70616e2d783a203b202d2d74772d70616e2d793a203b202d2d74772d70696e63682d7a6f6f6d3a203b202d2d74772d7363726f6c6c2d736e61702d7374726963746e6573733a2070726f78696d6974793b202d2d74772d6772616469656e742d66726f6d2d706f736974696f6e3a203b202d2d74772d6772616469656e742d7669612d706f736974696f6e3a203b202d2d74772d6772616469656e742d746f2d706f736974696f6e3a203b202d2d74772d6f7264696e616c3a203b202d2d74772d736c61736865642d7a65726f3a203b202d2d74772d6e756d657269632d6669677572653a203b202d2d74772d6e756d657269632d73706163696e673a203b202d2d74772d6e756d657269632d6672616374696f6e3a203b202d2d74772d72696e672d696e7365743a203b202d2d74772d72696e672d6f66667365742d77696474683a203070783b202d2d74772d72696e672d6f66667365742d636f6c6f723a20236666663b202d2d74772d72696e672d636f6c6f723a207267622835392031333020323436202f20302e35293b202d2d74772d72696e672d6f66667365742d736861646f773a203020302023303030303b202d2d74772d72696e672d736861646f773a203020302023303030303b202d2d74772d736861646f773a203020302023303030303b202d2d74772d736861646f772d636f6c6f7265643a203020302023303030303b202d2d74772d626c75723a203b202d2d74772d6272696768746e6573733a203b202d2d74772d636f6e74726173743a203b202d2d74772d677261797363616c653a203b202d2d74772d6875652d726f746174653a203b202d2d74772d696e766572743a203b202d2d74772d73617475726174653a203b202d2d74772d73657069613a203b202d2d74772d64726f702d736861646f773a203b202d2d74772d6261636b64726f702d626c75723a203b202d2d74772d6261636b64726f702d6272696768746e6573733a203b202d2d74772d6261636b64726f702d636f6e74726173743a203b202d2d74772d6261636b64726f702d677261797363616c653a203b202d2d74772d6261636b64726f702d6875652d726f746174653a203b202d2d74772d6261636b64726f702d696e766572743a203b202d2d74772d6261636b64726f702d6f7061636974793a203b202d2d74772d6261636b64726f702d73617475726174653a203b202d2d74772d6261636b64726f702d73657069613a203b20666f6e742d7765696768743a20626f6c643b20636f6c6f723a20726762283230362c20302c2030293b223e486973746f72793c2f7370616e3e3c7370616e207374796c653d22626f726465722d77696474683a203070783b20626f726465722d7374796c653a20736f6c69643b20626f726465722d636f6c6f723a20726762283232392c203233312c20323335293b202d2d74772d626f726465722d73706163696e672d783a20303b202d2d74772d626f726465722d73706163696e672d793a20303b202d2d74772d7472616e736c6174652d783a20303b202d2d74772d7472616e736c6174652d793a20303b202d2d74772d726f746174653a20303b202d2d74772d736b65772d783a20303b202d2d74772d736b65772d793a20303b202d2d74772d7363616c652d783a20313b202d2d74772d7363616c652d793a20313b202d2d74772d70616e2d783a203b202d2d74772d70616e2d793a203b202d2d74772d70696e63682d7a6f6f6d3a203b202d2d74772d7363726f6c6c2d736e61702d7374726963746e6573733a2070726f78696d6974793b202d2d74772d6772616469656e742d66726f6d2d706f736974696f6e3a203b202d2d74772d6772616469656e742d7669612d706f736974696f6e3a203b202d2d74772d6772616469656e742d746f2d706f736974696f6e3a203b202d2d74772d6f7264696e616c3a203b202d2d74772d736c61736865642d7a65726f3a203b202d2d74772d6e756d657269632d6669677572653a203b202d2d74772d6e756d657269632d73706163696e673a203b202d2d74772d6e756d657269632d6672616374696f6e3a203b202d2d74772d72696e672d696e7365743a203b202d2d74772d72696e672d6f66667365742d77696474683a203070783b202d2d74772d72696e672d6f66667365742d636f6c6f723a20236666663b202d2d74772d72696e672d636f6c6f723a207267622835392031333020323436202f20302e35293b202d2d74772d72696e672d6f66667365742d736861646f773a203020302023303030303b202d2d74772d72696e672d736861646f773a203020302023303030303b202d2d74772d736861646f773a203020302023303030303b202d2d74772d736861646f772d636f6c6f7265643a203020302023303030303b202d2d74772d626c75723a203b202d2d74772d6272696768746e6573733a203b202d2d74772d636f6e74726173743a203b202d2d74772d677261797363616c653a203b202d2d74772d6875652d726f746174653a203b202d2d74772d696e766572743a203b202d2d74772d73617475726174653a203b202d2d74772d73657069613a203b202d2d74772d64726f702d736861646f773a203b202d2d74772d6261636b64726f702d626c75723a203b202d2d74772d6261636b64726f702d6272696768746e6573733a203b202d2d74772d6261636b64726f702d636f6e74726173743a203b202d2d74772d6261636b64726f702d677261797363616c653a203b202d2d74772d6261636b64726f702d6875652d726f746174653a203b202d2d74772d6261636b64726f702d696e766572743a203b202d2d74772d6261636b64726f702d6f7061636974793a203b202d2d74772d6261636b64726f702d73617475726174653a203b202d2d74772d6261636b64726f702d73657069613a203b20636f6c6f723a2072676228302c20302c2030293b223e3a205275737369612c2061207661737420616e6420656e69676d61746963206e6174696f6e2c20756e666f6c64732061206e61727261746976652074686174207370616e73207468652065706f636873206f662074736172732c207265766f6c7574696f6e732c20616e642074686520636f6d706c65786974696573206f662074686520536f76696574206572612e2046726f6d2074686520696d70657269616c206772616e64657572206f662053742e20506574657273627572672773204865726d6974616765204d757365756d20746f207468652073796d626f6c6963205265642053717561726520696e204d6f73636f772c20527573736961277320686973746f726963616c206a6f75726e6579206973206d61726b656420627920726573696c69656e636520616e64207472616e73666f726d6174696f6e2e2054686520566f6c67612052697665722c206b6e6f776e2061732074686520224d6f7468657220566f6c67612c2220666c6f7773207468726f756768206c616e6473636170657320746861742068617665207769746e657373656420746865207269736520616e642066616c6c206f6620656d70697265732e20546865207661737420657870616e736573206f6620536962657269612c20746865205572616c204d6f756e7461696e732c20616e6420746865204172637469632074756e64726120616464206c617965727320746f2052757373696127732067656f67726170686963616c206469766572736974792c2073686170696e6720697473206964656e74697479206173206120636f756e7472792074686174207370616e732074776f20636f6e74696e656e74732e3c6f3a70207374796c653d22626f726465722d77696474683a203070783b20626f726465722d7374796c653a20736f6c69643b20626f726465722d636f6c6f723a20726762283232392c203233312c20323335293b202d2d74772d626f726465722d73706163696e672d783a20303b202d2d74772d626f726465722d73706163696e672d793a20303b202d2d74772d7472616e736c6174652d783a20303b202d2d74772d7472616e736c6174652d793a20303b202d2d74772d726f746174653a20303b202d2d74772d736b65772d783a20303b202d2d74772d736b65772d793a20303b202d2d74772d7363616c652d783a20313b202d2d74772d7363616c652d793a20313b202d2d74772d70616e2d783a203b202d2d74772d70616e2d793a203b202d2d74772d70696e63682d7a6f6f6d3a203b202d2d74772d7363726f6c6c2d736e61702d7374726963746e6573733a2070726f78696d6974793b202d2d74772d6772616469656e742d66726f6d2d706f736974696f6e3a203b202d2d74772d6772616469656e742d7669612d706f736974696f6e3a203b202d2d74772d6772616469656e742d746f2d706f736974696f6e3a203b202d2d74772d6f7264696e616c3a203b202d2d74772d736c61736865642d7a65726f3a203b202d2d74772d6e756d657269632d6669677572653a203b202d2d74772d6e756d657269632d73706163696e673a203b202d2d74772d6e756d657269632d6672616374696f6e3a203b202d2d74772d72696e672d696e7365743a203b202d2d74772d72696e672d6f66667365742d77696474683a203070783b202d2d74772d72696e672d6f66667365742d636f6c6f723a20236666663b202d2d74772d72696e672d636f6c6f723a207267622835392031333020323436202f20302e35293b202d2d74772d72696e672d6f66667365742d736861646f773a203020302023303030303b202d2d74772d72696e672d736861646f773a203020302023303030303b202d2d74772d736861646f773a203020302023303030303b202d2d74772d736861646f772d636f6c6f7265643a203020302023303030303b202d2d74772d626c75723a203b202d2d74772d6272696768746e6573733a203b202d2d74772d636f6e74726173743a203b202d2d74772d677261797363616c653a203b202d2d74772d6875652d726f746174653a203b202d2d74772d696e766572743a203b202d2d74772d73617475726174653a203b202d2d74772d73657069613a203b202d2d74772d64726f702d736861646f773a203b202d2d74772d6261636b64726f702d626c75723a203b202d2d74772d6261636b64726f702d6272696768746e6573733a203b202d2d74772d6261636b64726f702d636f6e74726173743a203b202d2d74772d6261636b64726f702d677261797363616c653a203b202d2d74772d6261636b64726f702d6875652d726f746174653a203b202d2d74772d6261636b64726f702d696e766572743a203b202d2d74772d6261636b64726f702d6f7061636974793a203b202d2d74772d6261636b64726f702d73617475726174653a203b202d2d74772d6261636b64726f702d73657069613a203b223e3c2f6f3a703e3c2f7370616e3e3c2f7370616e3e3c2f703e3c7020636c6173733d224d736f4e6f726d616c22207374796c653d22626f726465722d77696474683a203070783b20626f726465722d7374796c653a20736f6c69643b20626f726465722d636f6c6f723a20726762283232392c203233312c20323335293b202d2d74772d626f726465722d73706163696e672d783a20303b202d2d74772d626f726465722d73706163696e672d793a20303b202d2d74772d7472616e736c6174652d783a20303b202d2d74772d7472616e736c6174652d793a20303b202d2d74772d726f746174653a20303b202d2d74772d736b65772d783a20303b202d2d74772d736b65772d793a20303b202d2d74772d7363616c652d783a20313b202d2d74772d7363616c652d793a20313b202d2d74772d70616e2d783a203b202d2d74772d70616e2d793a203b202d2d74772d70696e63682d7a6f6f6d3a203b202d2d74772d7363726f6c6c2d736e61702d7374726963746e6573733a2070726f78696d6974793b202d2d74772d6772616469656e742d66726f6d2d706f736974696f6e3a203b202d2d74772d6772616469656e742d7669612d706f736974696f6e3a203b202d2d74772d6772616469656e742d746f2d706f736974696f6e3a203b202d2d74772d6f7264696e616c3a203b202d2d74772d736c61736865642d7a65726f3a203b202d2d74772d6e756d657269632d6669677572653a203b202d2d74772d6e756d657269632d73706163696e673a203b202d2d74772d6e756d657269632d6672616374696f6e3a203b202d2d74772d72696e672d696e7365743a203b202d2d74772d72696e672d6f66667365742d77696474683a203070783b202d2d74772d72696e672d6f66667365742d636f6c6f723a20236666663b202d2d74772d72696e672d636f6c6f723a207267622835392031333020323436202f20302e35293b202d2d74772d72696e672d6f66667365742d736861646f773a203020302023303030303b202d2d74772d72696e672d736861646f773a203020302023303030303b202d2d74772d736861646f773a203020302023303030303b202d2d74772d736861646f772d636f6c6f7265643a203020302023303030303b202d2d74772d626c75723a203b202d2d74772d6272696768746e6573733a203b202d2d74772d636f6e74726173743a203b202d2d74772d677261797363616c653a203b202d2d74772d6875652d726f746174653a203b202d2d74772d696e766572743a203b202d2d74772d73617475726174653a203b202d2d74772d73657069613a203b202d2d74772d64726f702d736861646f773a203b202d2d74772d6261636b64726f702d626c75723a203b202d2d74772d6261636b64726f702d6272696768746e6573733a203b202d2d74772d6261636b64726f702d636f6e74726173743a203b202d2d74772d6261636b64726f702d677261797363616c653a203b202d2d74772d6261636b64726f702d6875652d726f746174653a203b202d2d74772d6261636b64726f702d696e766572743a203b202d2d74772d6261636b64726f702d6f7061636974793a203b202d2d74772d6261636b64726f702d73617475726174653a203b202d2d74772d6261636b64726f702d73657069613a203b20666f6e742d66616d696c793a2043616c696272692c2073616e732d73657269663b206d617267696e3a2030636d2030636d20302e3030303170743b20666f6e742d73697a653a206d656469756d3b20746578742d616c69676e3a206a7573746966793b2063617265742d636f6c6f723a2072676228302c20302c2030293b223e3c7370616e206c616e673d22454e2d555322207374796c653d22626f726465722d77696474683a203070783b20626f726465722d7374796c653a20736f6c69643b20626f726465722d636f6c6f723a20726762283232392c203233312c20323335293b202d2d74772d626f726465722d73706163696e672d783a20303b202d2d74772d626f726465722d73706163696e672d793a20303b202d2d74772d7472616e736c6174652d783a20303b202d2d74772d7472616e736c6174652d793a20303b202d2d74772d726f746174653a20303b202d2d74772d736b65772d783a20303b202d2d74772d736b65772d793a20303b202d2d74772d7363616c652d783a20313b202d2d74772d7363616c652d793a20313b202d2d74772d70616e2d783a203b202d2d74772d70616e2d793a203b202d2d74772d70696e63682d7a6f6f6d3a203b202d2d74772d7363726f6c6c2d736e61702d7374726963746e6573733a2070726f78696d6974793b202d2d74772d6772616469656e742d66726f6d2d706f736974696f6e3a203b202d2d74772d6772616469656e742d7669612d706f736974696f6e3a203b202d2d74772d6772616469656e742d746f2d706f736974696f6e3a203b202d2d74772d6f7264696e616c3a203b202d2d74772d736c61736865642d7a65726f3a203b202d2d74772d6e756d657269632d6669677572653a203b202d2d74772d6e756d657269632d73706163696e673a203b202d2d74772d6e756d657269632d6672616374696f6e3a203b202d2d74772d72696e672d696e7365743a203b202d2d74772d72696e672d6f66667365742d77696474683a203070783b202d2d74772d72696e672d6f66667365742d636f6c6f723a20236666663b202d2d74772d72696e672d636f6c6f723a207267622835392031333020323436202f20302e35293b202d2d74772d72696e672d6f66667365742d736861646f773a203020302023303030303b202d2d74772d72696e672d736861646f773a203020302023303030303b202d2d74772d736861646f773a203020302023303030303b202d2d74772d736861646f772d636f6c6f7265643a203020302023303030303b202d2d74772d626c75723a203b202d2d74772d6272696768746e6573733a203b202d2d74772d636f6e74726173743a203b202d2d74772d677261797363616c653a203b202d2d74772d6875652d726f746174653a203b202d2d74772d696e766572743a203b202d2d74772d73617475726174653a203b202d2d74772d73657069613a203b202d2d74772d64726f702d736861646f773a203b202d2d74772d6261636b64726f702d626c75723a203b202d2d74772d6261636b64726f702d6272696768746e6573733a203b202d2d74772d6261636b64726f702d636f6e74726173743a203b202d2d74772d6261636b64726f702d677261797363616c653a203b202d2d74772d6261636b64726f702d6875652d726f746174653a203b202d2d74772d6261636b64726f702d696e766572743a203b202d2d74772d6261636b64726f702d6f7061636974793a203b202d2d74772d6261636b64726f702d73617475726174653a203b202d2d74772d6261636b64726f702d73657069613a203b223e47656f6772617068793a205275737369612c20746865206c61726765737420636f756e74727920696e2074686520776f726c642c207370616e732074776f20636f6e74696e656e74732c204575726f706520616e6420417369612c206372656174696e672061207661737420616e642064697665727365206c616e6473636170652e2046726f6d2074686520657870616e7369766520706c61696e73206f6620746865204575726f7065616e207061727420746f2074686520727567676564205572616c204d6f756e7461696e732c2074686520626f756e646c65737320536962657269616e2074616967612c20616e6420746865204172637469632074756e6472612c2052757373696127732067656f67726170687920697320636861726163746572697a656420627920697473207368656572207363616c6520616e642065636f6c6f676963616c20766172696574792e2054686520636f756e74727920697320626c65737365642077697468206e61747572616c20776f6e64657273206c696b65204c616b65204261696b616c2c2074686520646565706573742066726573687761746572206c616b652c20616e6420746865206d696768747920566f6c67612052697665722c204575726f70652773206c6f6e676573742072697665722e204974732073747261746567696320706f736974696f6e206265747765656e204561737465726e204575726f706520616e6420417369612068617320686973746f726963616c6c79206d616465205275737369612061206b657920706c6179657220696e20676c6f62616c2067656f706f6c69746963732e3c2f7370616e3e3c2f703e, 'Russia', 'MOXXY DMC', 'Russia, a vast and enigmatic nation, unfolds a narrative that spans the epochs of tsars,', 'Russia, the largest country on Earth, unfolds history and geography as vast and diverse as its landscapes. From the imperial splendors of St. Petersburg and the cultural richness of Moscow\'s Red Square to the rugged beauty of Siberia and the historic cities along the Volga River, Russia is a tapestry of historical epochs and natural wonders.', 0, '2025-07-28 11:47:44', '2025-07-28 12:19:07'),
(4, '688717ac74700.jpg', 'Australia', 'australia', '688717ac74909.jpg', '688717ac74a73.jpg', '688717ac74bed.jpg', '688717ac74d24.jpg', 0x3c70207374796c653d226d617267696e2d626f74746f6d3a20313970783b20636f6c6f723a2072676228312c2031392c203439293b20666f6e742d66616d696c793a20506f7070696e732c2073616e732d73657269663b20666f6e742d73697a653a20313870783b223e596f7572204175737472616c69612074726970207769746820466f72616d20576f726c64776964652077696c6c20626520616e20756e666f726765747461626c6520657870657269656e63652e20466f72616d20576f726c64776964652070726f766964657320796f752077697468207665676574617269616e206d65616c7320707265706172656420627920616e2061757468656e7469632052616a61737468616e69204d61686172616a2c20656e737572696e67206120666c61776c657373207461737465206f6620496e6469616e20646973686573207468726f7567686f757420796f7572204175737472616c696120746f75722e3c2f703e3c70207374796c653d226d617267696e2d626f74746f6d3a20313970783b20636f6c6f723a2072676228312c2031392c203439293b20666f6e742d66616d696c793a20506f7070696e732c2073616e732d73657269663b20666f6e742d73697a653a20313870783b223e57652061726520612072656c6961626c6520616e6420747275737465642074726176656c206167656e63792c2077697468203930302b20686170707920637573746f6d657220726576696577732e2050726f766964696e67206f757220637573746f6d657273207769746820612073617469736679696e6720657870657269656e6365206973206f757220746f70207072696f726974792e205765206465646963617465206f7572206865617274732c206d696e64732c20616e6420656e6572677920746f20616368696576696e6720746869732e3c2f703e3c70207374796c653d226d617267696e2d626f74746f6d3a20313970783b20636f6c6f723a2072676228312c2031392c203439293b20666f6e742d66616d696c793a20506f7070696e732c2073616e732d73657269663b20666f6e742d73697a653a20313870783b223e45766572792074696d652077652074726176656c2c207765206f6666657220736f6d657468696e67206e65772e204a6f696e206f757220706572666563746c792064657369676e6564204175737472616c696120746f7572207061636b6167652c2066696c6c656420776974682062726561746874616b696e67206c616e647363617065732c2076696272616e742063756c74757265732c20616e64206361726566756c6c79206375726174656420657870657269656e63657320746861742077696c6c20696d6d6572736520796f7520696e20746865206865617274206f66207468697320696e6372656469626c6520636f6e74696e656e742c206d616b696e6720796f7572206a6f75726e65792065787472616f7264696e6172792e205765e28099766520636f76657265642065766572797468696e672c20736f20616c6c20796f75206861766520746f20646f20697320656e6a6f79213c2f703e, 'Australia', 'MOXXY DMC', 'Australia tours, Australia tour packages, Australia holiday packages, Australia trip, Australia packages from India, Australia Holidays', 'Luxury Australia tour packages - Explore Australia like never before only with Foram Worldwide. Our Specialities - Pure veg. and Jain food prepared by Rajasthani Maharaj Chef, Unmatched destinations, Experienced tour managers, and many more. Inquire now to know more and book your Australia tour package with us and unlock exciting deal!', 1, '2025-07-28 11:54:44', NULL),
(5, '6887182f6412e.jpg', 'DUBAI', 'dubai', '6887182f64344.jpg', '6887182f644b2.jpg', '6887182f64619.jpg', '6887182f6476e.jpg', 0x3c70207374796c653d226d617267696e2d626f74746f6d3a20313970783b20636f6c6f723a2072676228312c2031392c203439293b20666f6e742d66616d696c793a20506f7070696e732c2073616e732d73657269663b20666f6e742d73697a653a20313870783b223e57652061726520746872696c6c656420746f20696e7669746520796f75206f6e20616e20657868696c61726174696e6720746f7572206163726f73732044756261692e2057652073657276652064656c6963696f7573207665676574617269616e206d65616c73206d61646520627920616e2061757468656e7469632052616a61737468616e69204d61686172616a20647572696e672074686520747269702e20417320612072656c6961626c652074726176656c20636f6d70616e792c2077652061636869657665206d6f7265207468616e2039303020706f73697469766520726576696577732e204d616b696e67206f757220636c69656e7473206861707079206973206f757220746f70207072696f7269747920e2809420776520706f7572206f7572207370697269742c206d696e642c20616e6420737472656e67746820696e746f2069742e3c2f703e3c70207374796c653d226d617267696e2d626f74746f6d3a20313970783b20636f6c6f723a2072676228312c2031392c203439293b20666f6e742d66616d696c793a20506f7070696e732c2073616e732d73657269663b20666f6e742d73697a653a20313870783b223e4c657420466f72616d20576f726c6477696465206d616b6520796f757220447562616920746f757220616e20616d617a696e6720657870657269656e6365e280a63c2f703e3c70207374796c653d226d617267696e2d626f74746f6d3a20313970783b20636f6c6f723a2072676228312c2031392c203439293b20666f6e742d66616d696c793a20506f7070696e732c2073616e732d73657269663b20666f6e742d73697a653a20313870783b223e4a6f696e207573206f6e206120776f6e64657266756c207661636174696f6e2077697468206f75722070726f66657373696f6e616c6c792064657369676e65642044756261692074726176656c207061636b616765732e2041742074686520466f72616d20576f726c647769646520746f75722c20656e6a6f79207468652069636f6e69632076696577206f6620447562616920736b796c696e652c20746872696c6c696e67204665727261726920576f726c642c20616e6420446573657274205361666172692e204f757220447562616920746f757273206172652064657369676e656420746f2073686f7720796f75207468652062657374206f662044756261692e205768696c6520796f7520656e6a6f792074686520747269702c2057652074616b652063617265206f662065766572797468696e672c20736f20796f752063616e2072656c617820616e6420656e6a6f79e28094596f757220756e666f726765747461626c6520447562616920657870657269656e636520617761697473213c2f703e, 'DUBAI', 'MOXXY DMC', 'Dubai tour packages, Dubai packages, Dubai holiday packages, Dubai tours', 'Luxury Dubai tour packages - Explore Dubai like never before only with Foram Worldwide. Our Specialities - Pure veg. and Jain food prepared by Rajasthani Maharaj Chef, Unmatched destinations, Experienced tour managers, and many more. Inquire now to know more and book your Dubai tour package with us and unlock exciting deal!', 1, '2025-07-28 11:56:55', NULL),
(6, '68871df40da71.jpg', 'Japan', 'japan', '68871df40dc97.jpg', '68871df40de04.jpg', '68871df40df7d.jpg', '68871df40e0e7.jpg', 0x3c70207374796c653d226d617267696e2d626f74746f6d3a20313970783b20636f6c6f723a2072676228312c2031392c203439293b20666f6e742d66616d696c793a20506f7070696e732c2073616e732d73657269663b20666f6e742d73697a653a20313870783b223e596f7572204a6170616e20616476656e74757265207769746820466f72616d20576f726c64776964652077696c6c20626520746865206d6f7374206d656d6f7261626c652e20576520756e6465727374616e642074686520636f6e6365726e73206f66207665676574617269616e2074726176656c6c6572732c20776869636820697320776879206f75722061757468656e7469632052616a61737468616e69204d61686172616a2077696c6c20626520617661696c61626c65207468726f7567686f757420796f7572206a6f75726e65792c20707265706172696e672064656c6963696f7573206d65616c73206163636f7264696e6720746f20796f757220707265666572656e6365732e3c2f703e3c70207374796c653d226d617267696e2d626f74746f6d3a20313970783b20636f6c6f723a2072676228312c2031392c203439293b20666f6e742d66616d696c793a20506f7070696e732c2073616e732d73657269663b20666f6e742d73697a653a20313870783b223e4173206120747275737465642074726176656c206167656e63792c2077652068617665207265636569766564206f7665722039303020706f73697469766520726576696577732066726f6d2073617469736669656420637573746f6d6572732e204f757220746f70207072696f7269747920697320796f75722068617070696e6573732c20616e6420776520636f6e74696e756f75736c792073747269766520746f20756e636f766572206e657720657870657269656e63657320746861742077696c6c206d616b6520796f7572207472697020756e666f726765747461626c652e3c2f703e3c70207374796c653d226d617267696e2d626f74746f6d3a20313970783b20636f6c6f723a2072676228312c2031392c203439293b20666f6e742d66616d696c793a20506f7070696e732c2073616e732d73657269663b20666f6e742d73697a653a20313870783b223e4a6f696e20757320666f7220616e20696e6372656469626c65204a6170616e20746f75722077697468206f75722074686f7567687466756c6c792064657369676e65642074726176656c207061636b616765732e2057652074616b652063617265206f662065766572797468696e672c20736f20796f75206a757374206861766520746f20656e6a6f792069742e204c65742075732063726561746520756e666f726765747461626c65206d656d6f7269657320666f7220796f75213c2f703e, 'Japan', 'MOXXY DMC', 'Japan tour packages, Japan tours, Japan trip, Japan holiday packages, Japan packages', 'Luxury Japan tour packages - Explore Japan like never before only with Foram Worldwide. Our Specialities - Pure veg. and Jain food prepared by Rajasthani Maharaj Chef, Unmatched destinations, Experienced tour managers, and many more. Inquire now to know more and book your Japan tour package with us and unlock exciting deal!', 1, '2025-07-28 12:21:32', NULL),
(7, '68871e6e63f82.jpg', 'ICELAND', 'iceland', '68871e6e6418e.jpg', '68871e6e642df.jpg', '68871e6e6441a.jpg', '68871e6e6454b.jpg', 0x3c70207374796c653d226d617267696e2d626f74746f6d3a20313970783b20636f6c6f723a2072676228312c2031392c203439293b20666f6e742d66616d696c793a20506f7070696e732c2073616e732d73657269663b20666f6e742d73697a653a20313870783b223e5765206172652070726f756420746f206f6666657220796f75206120636f6d666f727461626c65206a6f75726e6579206163726f7373204963656c616e64207769746820466f72616d20576f726c64776964652e2057652073657276652064656c6963696f7573207665676574617269616e20616e64204a61696e206c756e636820616e642064696e6e6572206d61646520627920616e2061757468656e7469632052616a61737468616e69204d61686172616a207468726f7567686f75742074686520746f75722e204173206120747275737465642074726176656c20636f6d70616e792c20776520676f74206d6f7265207468616e2039303020706f73697469766520726576696577732e204d616b696e67206f757220637573746f6d657273206861707079206973206f757220746f70207072696f7269747920e28094776520707574206f757220736f756c2c206d696e642c20616e6420737472656e67746820696e746f2069742e3c2f703e3c70207374796c653d226d617267696e2d626f74746f6d3a20313970783b20636f6c6f723a2072676228312c2031392c203439293b20666f6e742d66616d696c793a20506f7070696e732c2073616e732d73657269663b20666f6e742d73697a653a20313870783b223e4c657420466f72616d20576f726c6477696465206d616b6520796f7572204963656c616e6420746f7572206d6f7265206d656d6f7261626c652e3c2f703e3c70207374796c653d226d617267696e2d626f74746f6d3a20313970783b20636f6c6f723a2072676228312c2031392c203439293b20666f6e742d66616d696c793a20506f7070696e732c2073616e732d73657269663b20666f6e742d73697a653a20313870783b223e4a6f696e207573206f6e20616e20756e666f726765747461626c65206a6f75726e65792077697468206f7572206265737420616e6420756e69717565204963656c616e642074726176656c207061636b616765732074686174206e6f206f6e6520697320676976696e6720696e2074686520656e746972652074726176656c20696e6475737472792e20417420466f726d20576f726c64776964652c2077652074616b6520796f7520746f207468652062726561746874616b696e67206c616e647363617065732c206d616a657374696320776174657266616c6c732c20616e64207374756e6e696e6720676c6163696572732e204f757220746f7572207061636b61676573206172652064657369676e656420746f2073686f7720796f75204963656c616e64206c696b65206e65766572206265666f72652e3c2f703e, 'ICELAND', 'MOXXY DMC', 'Iceland tour package, Iceland travel packages, Iceland tours, Iceland trip, Iceland packages, Iceland vacation packages', 'Luxury Iceland tour packages - Explore Iceland like never before only with Foram Worldwide. Our Specialities - Pure veg. and Jain food prepared by Rajasthani Maharaj Chef, Kitchen Caravan, Unmatched destinations, Experienced tour managers, and many more. Inquire now to know more and book your Iceland tour package with us and unlock exciting deal!', 1, '2025-07-28 12:23:34', NULL);

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
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `question` text DEFAULT NULL,
  `answere` text DEFAULT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime DEFAULT NULL,
  `modifieddate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `addeddate` datetime DEFAULT NULL,
  `modifieddate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `name`, `slug`, `content`, `status`, `addeddate`, `modifieddate`) VALUES
(1, '6884b53f96a7c.webp', 'Image Name', NULL, 'This is some extra content that appears on hover.', 1, '2025-07-26 16:26:29', '2025-07-26 16:30:15'),
(2, '6884b544d9183.webp', 'Image Name', NULL, 'This is some extra content that appears on hover.', 1, '2025-07-26 16:26:29', '2025-07-26 16:30:20'),
(3, '6884b4af527e3.webp', 'Image Name', NULL, 'This is some extra content that appears on hover.', 1, '2025-07-26 16:26:29', '2025-07-26 16:27:51'),
(4, '6884b551834f9.webp', 'Image Name', NULL, 'This is some extra content that appears on hover.', 1, '2025-07-26 16:30:33', NULL);

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
(1, 'Home', 'MOXXY DMC', 'MOXXY DMC', 'Worldwide, International Tour Operator, Vegetarian Tour Operator, Global Tour Operator, FWW, Group Tour Operator', 'MOXXY DMC Worldwide is a renowned name in international tour operators in India. Explore the world with our experienced in-house tour managers and indulge in 100% pure vegetarian and Jain food masterfully prepared by our Rajasthani Maharaj chefs. Join us for unforgettable travel experiences and explore the world like never before!', 'index', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'About Us', 'About Us', 'MOXXY DMC', 'Worldwide, International Tour Operator, Vegetarian Tour Operator, Global Tour Operator, FWW, Group Tour Operator', 'MOXXY DMC Worldwide is a renowned name in international tour operators in India. Explore the world with our experienced in-house tour managers and indulge in 100% pure vegetarian and Jain food masterfully prepared by our Rajasthani Maharaj chefs. Join us for unforgettable travel experiences and explore the world like never before!', 'about', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Tours', 'Tour', 'MOXXY DMC', 'Worldwide, International Tour Operator, Vegetarian Tour Operator, Global Tour Operator, FWW, Group Tour Operator', 'MOXXY DMC Worldwide is a renowned name in international tour operators in India. Explore the world with our experienced in-house tour managers and indulge in 100% pure vegetarian and Jain food masterfully prepared by our Rajasthani Maharaj chefs. Join us for unforgettable travel experiences and explore the world like never before!', 'tours', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Packages', 'Packages', 'MOXXY DMC', 'Worldwide, International Tour Operator, Vegetarian Tour Operator, Global Tour Operator, FWW, Group Tour Operator', 'MOXXY DMC Worldwide is a renowned name in international tour operators in India. Explore the world with our experienced in-house tour managers and indulge in 100% pure vegetarian and Jain food masterfully prepared by our Rajasthani Maharaj chefs. Join us for unforgettable travel experiences and explore the world like never before!', 'packages', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Gallery', 'Gallery', 'MOXXY DMC', 'Worldwide, International Tour Operator, Vegetarian Tour Operator, Global Tour Operator, FWW, Group Tour Operator', 'MOXXY DMC Worldwide is a renowned name in international tour operators in India. Explore the world with our experienced in-house tour managers and indulge in 100% pure vegetarian and Jain food masterfully prepared by our Rajasthani Maharaj chefs. Join us for unforgettable travel experiences and explore the world like never before!', 'gallery', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Testimonial', 'Testimonial', 'MOXXY DMC', 'Worldwide, International Tour Operator, Vegetarian Tour Operator, Global Tour Operator, FWW, Group Tour Operator', 'MOXXY DMC Worldwide is a renowned name in international tour operators in India. Explore the world with our experienced in-house tour managers and indulge in 100% pure vegetarian and Jain food masterfully prepared by our Rajasthani Maharaj chefs. Join us for unforgettable travel experiences and explore the world like never before!', 'testimonial', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Contact', 'Contact', 'MOXXY DMC', 'Worldwide, International Tour Operator, Vegetarian Tour Operator, Global Tour Operator, FWW, Group Tour Operator', 'MOXXY DMC Worldwide is a renowned name in international tour operators in India. Explore the world with our experienced in-house tour managers and indulge in 100% pure vegetarian and Jain food masterfully prepared by our Rajasthani Maharaj chefs. Join us for unforgettable travel experiences and explore the world like never before!', 'contact', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Blog', 'Blog', 'MOXXY DMC', 'Worldwide, International Tour Operator, Vegetarian Tour Operator, Global Tour Operator, FWW, Group Tour Operator', 'MOXXY DMC Worldwide is a renowned name in international tour operators in India. Explore the world with our experienced in-house tour managers and indulge in 100% pure vegetarian and Jain food masterfully prepared by our Rajasthani Maharaj chefs. Join us for unforgettable travel experiences and explore the world like never before!', 'blog', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Privacy Policy', 'Privacy Policy', 'MOXXY DMC', 'Worldwide, International Tour Operator, Vegetarian Tour Operator, Global Tour Operator, FWW, Group Tour Operator', 'MOXXY DMC Worldwide is a renowned name in international tour operators in India. Explore the world with our experienced in-house tour managers and indulge in 100% pure vegetarian and Jain food masterfully prepared by our Rajasthani Maharaj chefs. Join us for unforgettable travel experiences and explore the world like never before!', 'privacy-policy', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Refund Return Policy', 'Refund Return Policy', 'MOXXY DMC', 'Worldwide, International Tour Operator, Vegetarian Tour Operator, Global Tour Operator, FWW, Group Tour Operator', 'MOXXY DMC Worldwide is a renowned name in international tour operators in India. Explore the world with our experienced in-house tour managers and indulge in 100% pure vegetarian and Jain food masterfully prepared by our Rajasthani Maharaj chefs. Join us for unforgettable travel experiences and explore the world like never before!', 'refund-return-policy', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Term & Condition', 'Term & Condition', 'MOXXY DMC', 'Worldwide, International Tour Operator, Vegetarian Tour Operator, Global Tour Operator, FWW, Group Tour Operator', 'MOXXY DMC Worldwide is a renowned name in international tour operators in India. Explore the world with our experienced in-house tour managers and indulge in 100% pure vegetarian and Jain food masterfully prepared by our Rajasthani Maharaj chefs. Join us for unforgettable travel experiences and explore the world like never before!', 'term-condition', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'FAQ', 'FAQ', 'MOXXY DMC', 'Worldwide, International Tour Operator, Vegetarian Tour Operator, Global Tour Operator, FWW, Group Tour Operator', 'MOXXY DMC Worldwide is a renowned name in international tour operators in India. Explore the world with our experienced in-house tour managers and indulge in 100% pure vegetarian and Jain food masterfully prepared by our Rajasthani Maharaj chefs. Join us for unforgettable travel experiences and explore the world like never before!', 'faq', NULL, NULL, NULL, NULL, NULL, NULL),
(39, 'blog-details', 'Exploring The Green Spac Realar Residence Area Harmony', 'Author', 'keywords', 'Description', 'exploring-the-green-spac-realar-residence-area-harmony', NULL, NULL, NULL, NULL, NULL, NULL),
(51, 'tour-packages', 'asdasd', NULL, NULL, NULL, 'asdasd-1', NULL, NULL, NULL, NULL, NULL, NULL),
(52, 'tour-packages', 'asdsad', NULL, NULL, NULL, 'asdsad', NULL, NULL, NULL, NULL, NULL, NULL),
(54, 'tour-packages', 'asdsad asd', 'test', 'Tour Packages , best combo', 'sdfdsfsf', 'asdsad-asd', NULL, NULL, NULL, NULL, NULL, NULL),
(55, 'tour-packages', 'Australia', 'MOXXY DMC', 'Australia tours, Australia tour packages, Australia holiday packages, Australia trip, Australia packages from India, Australia Holidays', 'Luxury Australia tour packages - Explore Australia like never before only with Foram Worldwide. Our Specialities - Pure veg. and Jain food prepared by Rajasthani Maharaj Chef, Unmatched destinations, Experienced tour managers, and many more. Inquire now to know more and book your Australia tour package with us and unlock exciting deal!', 'australia', NULL, NULL, NULL, NULL, NULL, NULL),
(56, 'tour-packages', 'DUBAI', 'MOXXY DMC', 'Dubai tour packages, Dubai packages, Dubai holiday packages, Dubai tours', 'Luxury Dubai tour packages - Explore Dubai like never before only with Foram Worldwide. Our Specialities - Pure veg. and Jain food prepared by Rajasthani Maharaj Chef, Unmatched destinations, Experienced tour managers, and many more. Inquire now to know more and book your Dubai tour package with us and unlock exciting deal!', 'dubai', NULL, NULL, NULL, NULL, NULL, NULL),
(58, 'tour-packages', 'Russia', 'MOXXY DMC', 'Russia, a vast and enigmatic nation, unfolds a narrative that spans the epochs of tsars,', 'Russia, the largest country on Earth, unfolds history and geography as vast and diverse as its landscapes. From the imperial splendors of St. Petersburg and the cultural richness of Moscow\'s Red Square to the rugged beauty of Siberia and the historic cities along the Volga River, Russia is a tapestry of historical epochs and natural wonders.', 'russia', NULL, NULL, NULL, NULL, NULL, NULL),
(59, 'tour-packages', 'Japan', 'MOXXY DMC', 'Japan tour packages, Japan tours, Japan trip, Japan holiday packages, Japan packages', 'Luxury Japan tour packages - Explore Japan like never before only with Foram Worldwide. Our Specialities - Pure veg. and Jain food prepared by Rajasthani Maharaj Chef, Unmatched destinations, Experienced tour managers, and many more. Inquire now to know more and book your Japan tour package with us and unlock exciting deal!', 'japan', NULL, NULL, NULL, NULL, NULL, NULL),
(60, 'tour-packages', 'ICELAND', 'MOXXY DMC', 'Iceland tour package, Iceland travel packages, Iceland tours, Iceland trip, Iceland packages, Iceland vacation packages', 'Luxury Iceland tour packages - Explore Iceland like never before only with Foram Worldwide. Our Specialities - Pure veg. and Jain food prepared by Rajasthani Maharaj Chef, Kitchen Caravan, Unmatched destinations, Experienced tour managers, and many more. Inquire now to know more and book your Iceland tour package with us and unlock exciting deal!', 'iceland', NULL, NULL, NULL, NULL, NULL, NULL),
(61, 'packages', 'asdasd', 'MOXXY DMC', 'ss', 'ss', 'asdasd-2', NULL, NULL, NULL, NULL, NULL, NULL),
(63, 'packages', 'Moscow', 'MOXXY DMC', 'Moscow', 'Moscow', 'moscow', NULL, NULL, NULL, NULL, NULL, NULL),
(64, 'packages', 'Kaliningrad', 'MOXXY DMC', 'Worldwide, International Tour Operator, Vegetarian Tour Operator, Global Tour Operator, FWW, Group Tour Operator', 'tes', 'kaliningrad', NULL, NULL, NULL, NULL, NULL, NULL),
(65, 'packages', 'Sochi', 'MOXXY DMC', 'Tour Packages , best combo', 'test', 'sochi', NULL, NULL, NULL, NULL, NULL, NULL),
(67, 'packages', 'Saint Petersburg', 'MOXXY DMC', 'Worldwide, International Tour Operator, Vegetarian Tour Operator, Global Tour Operator, FWW, Group Tour Operator', 'ddd', 'saint-petersburg', NULL, NULL, NULL, NULL, NULL, NULL),
(84, 'sight-seeing-details', 'asd', 'asdas', 'dasd', 'asdsad', 'asd', NULL, NULL, NULL, NULL, NULL, NULL),
(86, 'sight-seeing-details', 'Sight Seeing', 'MOXXY DMC', 'Russia, a vast and enigmatic nation, unfolds a narrative that spans the epochs of tsars,', 'etest', 'sight-seeing', NULL, NULL, NULL, NULL, NULL, NULL),
(87, 'package-details', 'asdasd', NULL, NULL, NULL, 'asdasd-3', NULL, NULL, NULL, NULL, NULL, NULL),
(88, 'package-details', 'Saint Petersburg & Moscow', NULL, NULL, NULL, 'saint-petersburg-moscow', NULL, NULL, NULL, NULL, NULL, NULL),
(91, 'package-details', 'SOUTH AFRICA', NULL, NULL, NULL, 'south-africa', NULL, NULL, NULL, NULL, NULL, NULL);

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
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `country_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `price` text DEFAULT NULL,
  `rating` text DEFAULT NULL,
  `duration` text DEFAULT NULL,
  `departures` text DEFAULT NULL,
  `multiple_image_json` text DEFAULT NULL,
  `overview` longblob DEFAULT NULL,
  `itinerary` longblob DEFAULT NULL,
  `inclusion` longblob DEFAULT NULL,
  `exclusions` longblob DEFAULT NULL,
  `package_highlight` longblob DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `addeddate` datetime DEFAULT NULL,
  `modifieddate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `country_id`, `city_id`, `image`, `name`, `slug`, `price`, `rating`, `duration`, `departures`, `multiple_image_json`, `overview`, `itinerary`, `inclusion`, `exclusions`, `package_highlight`, `status`, `addeddate`, `modifieddate`) VALUES
(1, 4, 1, '688768b3d0b13.jpg', 'SOUTH AFRICA', 'south-africa', '650000', '4', '12 Days & 11 Nights', 'SA-01 (APR-25 TO SEP-25) Departures : Sep-2025', '[\"1753704717_4.jpg\",\"1753704717_2.jpg\",\"1753704717_1.jpg\",\"1753704717_3.jpg\"]', 0x3c7020636c6173733d22746578742d6361706974616c697a65206c682d3238206d622d333522207374796c653d226d617267696e2d626f74746f6d3a20333570783b206c696e652d6865696768743a20323870783b20636f6c6f723a207267622835332c2035362c203638293b20666f6e742d66616d696c793a20506f7070696e732c2073616e732d73657269663b20666f6e742d73697a653a20313670783b223e69736974696e672053746f6e6568656e67652c20426174682c20616e642057696e64736f7220436173746c6520696e206f6e6520646179206973206e65787420746f20696d706f737369626c652e2044657369676e6564206369666963616c6c7920666f722077697468206c696d697465642074696d6520696e204c6f6e646f6e2c207468697320746f757220616c6c6f777320796f7520746f20636865636b206f666620612072616e6765206f6620736f75746865726e20456e676c616e64e280987320617265206a757374206f6e652064617920627920656c696d696e6174696e672074686520686173736c65206f662074726176656c696e67206265747765656e2e3c2f703e3c683420636c6173733d2274672d746f75722d61626f75742d7469746c65206d622d323022207374796c653d226d617267696e2d626f74746f6d3a20323070783b206c696e652d6865696768743a20312e313b20636f6c6f723a2072676228322c20362c203231293b20666f6e742d73697a653a20323270783b20746578742d7472616e73666f726d3a206361706974616c697a653b20666f6e742d66616d696c793a20506f7070696e732c2073616e732d73657269663b223e5472697020486967686c69676874733c2f68343e3c64697620636c6173733d2274672d746f75722d61626f75742d6c69737422207374796c653d22636f6c6f723a207267622835332c2035362c203638293b20666f6e742d66616d696c793a20506f7070696e732c2073616e732d73657269663b20666f6e742d73697a653a20313670783b223e3c756c207374796c653d2270616464696e673a203070783b206d617267696e2d72696768743a203070783b206d617267696e2d626f74746f6d3a203070783b206d617267696e2d6c6566743a203070783b223e3c6c69207374796c653d226c6973742d7374796c653a206e6f6e653b20646973706c61793a20666c65783b206d617267696e2d626f74746f6d3a203970783b223e3c7370616e20636c6173733d2269636f6e206d722d313022207374796c653d226d617267696e2d72696768743a20313070783b2077696474683a20323270783b206865696768743a20323270783b20626f726465722d7261646975733a20353070783b206261636b67726f756e643a206e6f6e65203025203025202f206175746f20726570656174207363726f6c6c2070616464696e672d626f7820626f726465722d626f782072676228372c2033312c203933293b20746578742d616c69676e3a2063656e7465723b206c696e652d6865696768743a20323370783b20646973706c61793a20696e6c696e652d626c6f636b3b20666f6e742d73697a653a20313270783b20636f6c6f723a20726762283235352c203235352c20323535293b207472616e73666f726d3a207472616e736c6174655928327078293b20666c65783a20302030206175746f3b223e3c7370616e20636c6173733d2266612d73686172702066612d736f6c69642066612d636865636b2066612d667722207374796c653d222d7765626b69742d666f6e742d736d6f6f7468696e673a20616e7469616c69617365643b20646973706c61793a20696e6c696e652d626c6f636b3b20666f6e742d76617269616e742d6e756d657269633a206e6f726d616c3b20666f6e742d76617269616e742d656173742d617369616e3a206e6f726d616c3b20666f6e742d76617269616e742d616c7465726e617465733a206e6f726d616c3b20666f6e742d76617269616e742d706f736974696f6e3a206e6f726d616c3b20666f6e742d76617269616e742d656d6f6a693a206e6f726d616c3b206c696e652d6865696768743a20313b20746578742d72656e646572696e673a206175746f3b20666f6e742d66616d696c793a202671756f743b466f6e7420417765736f6d6520362050726f2671756f743b3b20666f6e742d7765696768743a203930303b223e3c2f7370616e3e3c2f7370616e3e3c7370616e20636c6173733d227465787422207374796c653d22666f6e742d73697a653a20313770783b20746578742d7472616e73666f726d3a206361706974616c697a653b20636f6c6f723a2072676228322c20362c203231293b223e546f757220746865206369747920776974682061206c6963656e736564204e594320746f75722067756964652c2077686f3c2f7370616e3e3c2f6c693e3c6c69207374796c653d226c6973742d7374796c653a206e6f6e653b20646973706c61793a20666c65783b206d617267696e2d626f74746f6d3a203970783b223e3c7370616e20636c6173733d2269636f6e206d722d313022207374796c653d226d617267696e2d72696768743a20313070783b2077696474683a20323270783b206865696768743a20323270783b20626f726465722d7261646975733a20353070783b206261636b67726f756e643a206e6f6e65203025203025202f206175746f20726570656174207363726f6c6c2070616464696e672d626f7820626f726465722d626f782072676228372c2033312c203933293b20746578742d616c69676e3a2063656e7465723b206c696e652d6865696768743a20323370783b20646973706c61793a20696e6c696e652d626c6f636b3b20666f6e742d73697a653a20313270783b20636f6c6f723a20726762283235352c203235352c20323535293b207472616e73666f726d3a207472616e736c6174655928327078293b20666c65783a20302030206175746f3b223e3c7370616e20636c6173733d2266612d73686172702066612d736f6c69642066612d636865636b2066612d667722207374796c653d222d7765626b69742d666f6e742d736d6f6f7468696e673a20616e7469616c69617365643b20646973706c61793a20696e6c696e652d626c6f636b3b20666f6e742d76617269616e742d6e756d657269633a206e6f726d616c3b20666f6e742d76617269616e742d656173742d617369616e3a206e6f726d616c3b20666f6e742d76617269616e742d616c7465726e617465733a206e6f726d616c3b20666f6e742d76617269616e742d706f736974696f6e3a206e6f726d616c3b20666f6e742d76617269616e742d656d6f6a693a206e6f726d616c3b206c696e652d6865696768743a20313b20746578742d72656e646572696e673a206175746f3b20666f6e742d66616d696c793a202671756f743b466f6e7420417765736f6d6520362050726f2671756f743b3b20666f6e742d7765696768743a203930303b223e3c2f7370616e3e3c2f7370616e3e3c7370616e20636c6173733d227465787422207374796c653d22666f6e742d73697a653a20313770783b20746578742d7472616e73666f726d3a206361706974616c697a653b20636f6c6f723a2072676228322c20362c203231293b223e4578706c6f72652077697468206120677569646520746f2064656c76652064656570657220696e746f2074686520686973746f72793c2f7370616e3e3c2f6c693e3c6c69207374796c653d226c6973742d7374796c653a206e6f6e653b20646973706c61793a20666c65783b223e3c7370616e20636c6173733d2269636f6e206d722d313022207374796c653d226d617267696e2d72696768743a20313070783b2077696474683a20323270783b206865696768743a20323270783b20626f726465722d7261646975733a20353070783b206261636b67726f756e643a206e6f6e65203025203025202f206175746f20726570656174207363726f6c6c2070616464696e672d626f7820626f726465722d626f782072676228372c2033312c203933293b20746578742d616c69676e3a2063656e7465723b206c696e652d6865696768743a20323370783b20646973706c61793a20696e6c696e652d626c6f636b3b20666f6e742d73697a653a20313270783b20636f6c6f723a20726762283235352c203235352c20323535293b207472616e73666f726d3a207472616e736c6174655928327078293b20666c65783a20302030206175746f3b223e3c7370616e20636c6173733d2266612d73686172702066612d736f6c69642066612d636865636b2066612d667722207374796c653d222d7765626b69742d666f6e742d736d6f6f7468696e673a20616e7469616c69617365643b20646973706c61793a20696e6c696e652d626c6f636b3b20666f6e742d76617269616e742d6e756d657269633a206e6f726d616c3b20666f6e742d76617269616e742d656173742d617369616e3a206e6f726d616c3b20666f6e742d76617269616e742d616c7465726e617465733a206e6f726d616c3b20666f6e742d76617269616e742d706f736974696f6e3a206e6f726d616c3b20666f6e742d76617269616e742d656d6f6a693a206e6f726d616c3b206c696e652d6865696768743a20313b20746578742d72656e646572696e673a206175746f3b20666f6e742d66616d696c793a202671756f743b466f6e7420417765736f6d6520362050726f2671756f743b3b20666f6e742d7765696768743a203930303b223e3c2f7370616e3e3c2f7370616e3e3c7370616e20636c6173733d227465787422207374796c653d22666f6e742d73697a653a20313770783b20746578742d7472616e73666f726d3a206361706974616c697a653b20636f6c6f723a2072676228322c20362c203231293b223e477265617420666f7220686973746f727920627566667320616e642074726176656c6572732077697468206c696d697465642074696d653c2f7370616e3e3c2f6c693e3c2f756c3e3c2f6469763e, 0x5b7b226974696e65726172795f6e616d65223a2241727269766520696e205361696e742050657465727362757267222c226974696e65726172795f6465736372697074696f6e223a2254726164652043656e7465722069732074686520736576656e74682074616c6c657374206275696c64696e6720696e2074686520776f726c6420616e64207468652074616c6c657374206275696c64696e6720696e2074686520772068656d69737068206572652e205468697320736b7973637261706572207374616e6473742076696577206f66204e657720596f726b20436974792e2046726f6d20686572652c20796f75206861766520617765736f6d65204d616e68617474616e2074686520537461747565206f66204c6962657274792c2042726f6f6b6c796e2c2053746174656e2049736c616e642c222c226974696e65726172795f696d616765223a5b22363838373638623364306538625f312e6a7067225d7d2c7b226974696e65726172795f6e616d65223a2274657374222c226974696e65726172795f6465736372697074696f6e223a2274657374222c226974696e65726172795f696d616765223a5b22363838373732373131636633625f35372e706e67225d7d5d, 0x3c703e3c62723e3c2f703e3c756c207374796c653d2270616464696e673a203070783b206d617267696e2d72696768743a203070783b206d617267696e2d626f74746f6d3a203070783b206d617267696e2d6c6566743a203070783b20636f6c6f723a207267622835332c2035362c203638293b20666f6e742d66616d696c793a20506f7070696e732c2073616e732d73657269663b20666f6e742d73697a653a20313670783b223e3c6c69207374796c653d226c6973742d7374796c653a206e6f6e653b20646973706c61793a20666c65783b206d617267696e2d626f74746f6d3a203970783b223e3c7370616e20636c6173733d227465787422207374796c653d22746578742d7472616e73666f726d3a206361706974616c697a653b223e4163636f6d6d6f646174696f6e20666f7220334e20696e20342a20486f74656c20696e204d6f73636f773c2f7370616e3e3c2f6c693e3c6c69207374796c653d226c6973742d7374796c653a206e6f6e653b20646973706c61793a20666c65783b206d617267696e2d626f74746f6d3a203970783b223e3c7370616e20636c6173733d2269636f6e206d722d313022207374796c653d226d617267696e2d72696768743a20313070783b2077696474683a20323270783b206865696768743a20323270783b20626f726465722d7261646975733a20353070783b206261636b67726f756e643a206e6f6e65203025203025202f206175746f20726570656174207363726f6c6c2070616464696e672d626f7820626f726465722d626f782072676228372c2033312c203933293b20746578742d616c69676e3a2063656e7465723b206c696e652d6865696768743a20323370783b20646973706c61793a20696e6c696e652d626c6f636b3b20666f6e742d73697a653a20313270783b20636f6c6f723a20726762283235352c203235352c20323535293b207472616e73666f726d3a207472616e736c6174655928327078293b20666c65783a20302030206175746f3b223e3c7370616e20636c6173733d2266612d73686172702066612d736f6c69642066612d636865636b2066612d667722207374796c653d222d7765626b69742d666f6e742d736d6f6f7468696e673a20616e7469616c69617365643b20646973706c61793a20696e6c696e652d626c6f636b3b20666f6e742d76617269616e742d6e756d657269633a206e6f726d616c3b20666f6e742d76617269616e742d656173742d617369616e3a206e6f726d616c3b20666f6e742d76617269616e742d616c7465726e617465733a206e6f726d616c3b20666f6e742d76617269616e742d706f736974696f6e3a206e6f726d616c3b20666f6e742d76617269616e742d656d6f6a693a206e6f726d616c3b206c696e652d6865696768743a20313b20746578742d72656e646572696e673a206175746f3b20666f6e742d66616d696c793a202671756f743b466f6e7420417765736f6d6520362050726f2671756f743b3b20666f6e742d7765696768743a203930303b223e3c2f7370616e3e3c2f7370616e3e3c7370616e20636c6173733d227465787422207374796c653d22746578742d7472616e73666f726d3a206361706974616c697a653b223e4163636f6d6d6f646174696f6e20666f7220334e20696e20342a20486f74656c20696e205361696e7420506574657273627572673c2f7370616e3e3c2f6c693e3c6c69207374796c653d226c6973742d7374796c653a206e6f6e653b20646973706c61793a20666c65783b206d617267696e2d626f74746f6d3a203970783b223e3c7370616e20636c6173733d2269636f6e206d722d313022207374796c653d226d617267696e2d72696768743a20313070783b2077696474683a20323270783b206865696768743a20323270783b20626f726465722d7261646975733a20353070783b206261636b67726f756e643a206e6f6e65203025203025202f206175746f20726570656174207363726f6c6c2070616464696e672d626f7820626f726465722d626f782072676228372c2033312c203933293b20746578742d616c69676e3a2063656e7465723b206c696e652d6865696768743a20323370783b20646973706c61793a20696e6c696e652d626c6f636b3b20666f6e742d73697a653a20313270783b20636f6c6f723a20726762283235352c203235352c20323535293b207472616e73666f726d3a207472616e736c6174655928327078293b20666c65783a20302030206175746f3b223e3c7370616e20636c6173733d2266612d73686172702066612d736f6c69642066612d636865636b2066612d667722207374796c653d222d7765626b69742d666f6e742d736d6f6f7468696e673a20616e7469616c69617365643b20646973706c61793a20696e6c696e652d626c6f636b3b20666f6e742d76617269616e742d6e756d657269633a206e6f726d616c3b20666f6e742d76617269616e742d656173742d617369616e3a206e6f726d616c3b20666f6e742d76617269616e742d616c7465726e617465733a206e6f726d616c3b20666f6e742d76617269616e742d706f736974696f6e3a206e6f726d616c3b20666f6e742d76617269616e742d656d6f6a693a206e6f726d616c3b206c696e652d6865696768743a20313b20746578742d72656e646572696e673a206175746f3b20666f6e742d66616d696c793a202671756f743b466f6e7420417765736f6d6520362050726f2671756f743b3b20666f6e742d7765696768743a203930303b223e3c2f7370616e3e3c2f7370616e3e3c7370616e20636c6173733d227465787422207374796c653d22746578742d7472616e73666f726d3a206361706974616c697a653b223e5472616e736665727320696e205072697661746520414320436f6163683c2f7370616e3e3c2f6c693e3c6c69207374796c653d226c6973742d7374796c653a206e6f6e653b20646973706c61793a20666c65783b206d617267696e2d626f74746f6d3a203970783b223e3c7370616e20636c6173733d2269636f6e206d722d313022207374796c653d226d617267696e2d72696768743a20313070783b2077696474683a20323270783b206865696768743a20323270783b20626f726465722d7261646975733a20353070783b206261636b67726f756e643a206e6f6e65203025203025202f206175746f20726570656174207363726f6c6c2070616464696e672d626f7820626f726465722d626f782072676228372c2033312c203933293b20746578742d616c69676e3a2063656e7465723b206c696e652d6865696768743a20323370783b20646973706c61793a20696e6c696e652d626c6f636b3b20666f6e742d73697a653a20313270783b20636f6c6f723a20726762283235352c203235352c20323535293b207472616e73666f726d3a207472616e736c6174655928327078293b20666c65783a20302030206175746f3b223e3c7370616e20636c6173733d2266612d73686172702066612d736f6c69642066612d636865636b2066612d667722207374796c653d222d7765626b69742d666f6e742d736d6f6f7468696e673a20616e7469616c69617365643b20646973706c61793a20696e6c696e652d626c6f636b3b20666f6e742d76617269616e742d6e756d657269633a206e6f726d616c3b20666f6e742d76617269616e742d656173742d617369616e3a206e6f726d616c3b20666f6e742d76617269616e742d616c7465726e617465733a206e6f726d616c3b20666f6e742d76617269616e742d706f736974696f6e3a206e6f726d616c3b20666f6e742d76617269616e742d656d6f6a693a206e6f726d616c3b206c696e652d6865696768743a20313b20746578742d72656e646572696e673a206175746f3b20666f6e742d66616d696c793a202671756f743b466f6e7420417765736f6d6520362050726f2671756f743b3b20666f6e742d7765696768743a203930303b223e3c2f7370616e3e3c2f7370616e3e3c7370616e20636c6173733d227465787422207374796c653d22746578742d7472616e73666f726d3a206361706974616c697a653b223e456e676c69736820537065616b696e672047756964653c2f7370616e3e3c2f6c693e3c6c69207374796c653d226c6973742d7374796c653a206e6f6e653b20646973706c61793a20666c65783b206d617267696e2d626f74746f6d3a203970783b223e3c7370616e20636c6173733d2269636f6e206d722d313022207374796c653d226d617267696e2d72696768743a20313070783b2077696474683a20323270783b206865696768743a20323270783b20626f726465722d7261646975733a20353070783b206261636b67726f756e643a206e6f6e65203025203025202f206175746f20726570656174207363726f6c6c2070616464696e672d626f7820626f726465722d626f782072676228372c2033312c203933293b20746578742d616c69676e3a2063656e7465723b206c696e652d6865696768743a20323370783b20646973706c61793a20696e6c696e652d626c6f636b3b20666f6e742d73697a653a20313270783b20636f6c6f723a20726762283235352c203235352c20323535293b207472616e73666f726d3a207472616e736c6174655928327078293b20666c65783a20302030206175746f3b223e3c7370616e20636c6173733d2266612d73686172702066612d736f6c69642066612d636865636b2066612d667722207374796c653d222d7765626b69742d666f6e742d736d6f6f7468696e673a20616e7469616c69617365643b20646973706c61793a20696e6c696e652d626c6f636b3b20666f6e742d76617269616e742d6e756d657269633a206e6f726d616c3b20666f6e742d76617269616e742d656173742d617369616e3a206e6f726d616c3b20666f6e742d76617269616e742d616c7465726e617465733a206e6f726d616c3b20666f6e742d76617269616e742d706f736974696f6e3a206e6f726d616c3b20666f6e742d76617269616e742d656d6f6a693a206e6f726d616c3b206c696e652d6865696768743a20313b20746578742d72656e646572696e673a206175746f3b20666f6e742d66616d696c793a202671756f743b466f6e7420417765736f6d6520362050726f2671756f743b3b20666f6e742d7765696768743a203930303b223e3c2f7370616e3e3c2f7370616e3e3c7370616e20636c6173733d227465787422207374796c653d22746578742d7472616e73666f726d3a206361706974616c697a653b223e42756666657420427265616b6661737420696e20486f74656c3c2f7370616e3e3c2f6c693e3c6c69207374796c653d226c6973742d7374796c653a206e6f6e653b20646973706c61793a20666c65783b206d617267696e2d626f74746f6d3a203970783b223e3c7370616e20636c6173733d2269636f6e206d722d313022207374796c653d226d617267696e2d72696768743a20313070783b2077696474683a20323270783b206865696768743a20323270783b20626f726465722d7261646975733a20353070783b206261636b67726f756e643a206e6f6e65203025203025202f206175746f20726570656174207363726f6c6c2070616464696e672d626f7820626f726465722d626f782072676228372c2033312c203933293b20746578742d616c69676e3a2063656e7465723b206c696e652d6865696768743a20323370783b20646973706c61793a20696e6c696e652d626c6f636b3b20666f6e742d73697a653a20313270783b20636f6c6f723a20726762283235352c203235352c20323535293b207472616e73666f726d3a207472616e736c6174655928327078293b20666c65783a20302030206175746f3b223e3c7370616e20636c6173733d2266612d73686172702066612d736f6c69642066612d636865636b2066612d667722207374796c653d222d7765626b69742d666f6e742d736d6f6f7468696e673a20616e7469616c69617365643b20646973706c61793a20696e6c696e652d626c6f636b3b20666f6e742d76617269616e742d6e756d657269633a206e6f726d616c3b20666f6e742d76617269616e742d656173742d617369616e3a206e6f726d616c3b20666f6e742d76617269616e742d616c7465726e617465733a206e6f726d616c3b20666f6e742d76617269616e742d706f736974696f6e3a206e6f726d616c3b20666f6e742d76617269616e742d656d6f6a693a206e6f726d616c3b206c696e652d6865696768743a20313b20746578742d72656e646572696e673a206175746f3b20666f6e742d66616d696c793a202671756f743b466f6e7420417765736f6d6520362050726f2671756f743b3b20666f6e742d7765696768743a203930303b223e3c2f7370616e3e3c2f7370616e3e3c7370616e20636c6173733d227465787422207374796c653d22746578742d7472616e73666f726d3a206361706974616c697a653b223e362044696e6e65727320696e20496e6469616e2052657374617572616e743c2f7370616e3e3c2f6c693e3c6c69207374796c653d226c6973742d7374796c653a206e6f6e653b20646973706c61793a20666c65783b206d617267696e2d626f74746f6d3a203970783b223e3c7370616e20636c6173733d2269636f6e206d722d313022207374796c653d226d617267696e2d72696768743a20313070783b2077696474683a20323270783b206865696768743a20323270783b20626f726465722d7261646975733a20353070783b206261636b67726f756e643a206e6f6e65203025203025202f206175746f20726570656174207363726f6c6c2070616464696e672d626f7820626f726465722d626f782072676228372c2033312c203933293b20746578742d616c69676e3a2063656e7465723b206c696e652d6865696768743a20323370783b20646973706c61793a20696e6c696e652d626c6f636b3b20666f6e742d73697a653a20313270783b20636f6c6f723a20726762283235352c203235352c20323535293b207472616e73666f726d3a207472616e736c6174655928327078293b20666c65783a20302030206175746f3b223e3c7370616e20636c6173733d2266612d73686172702066612d736f6c69642066612d636865636b2066612d667722207374796c653d222d7765626b69742d666f6e742d736d6f6f7468696e673a20616e7469616c69617365643b20646973706c61793a20696e6c696e652d626c6f636b3b20666f6e742d76617269616e742d6e756d657269633a206e6f726d616c3b20666f6e742d76617269616e742d656173742d617369616e3a206e6f726d616c3b20666f6e742d76617269616e742d616c7465726e617465733a206e6f726d616c3b20666f6e742d76617269616e742d706f736974696f6e3a206e6f726d616c3b20666f6e742d76617269616e742d656d6f6a693a206e6f726d616c3b206c696e652d6865696768743a20313b20746578742d72656e646572696e673a206175746f3b20666f6e742d66616d696c793a202671756f743b466f6e7420417765736f6d6520362050726f2671756f743b3b20666f6e742d7765696768743a203930303b223e3c2f7370616e3e3c2f7370616e3e3c7370616e20636c6173733d227465787422207374796c653d22746578742d7472616e73666f726d3a206361706974616c697a653b223e53415053414e206f6e6520776179207469636b65742066726f6d205361696e74205065746572736275726720746f204d6f73636f77202865636f6e6f6d7920636c617373293c2f7370616e3e3c2f6c693e3c6c69207374796c653d226c6973742d7374796c653a206e6f6e653b20646973706c61793a20666c65783b223e3c7370616e20636c6173733d2269636f6e206d722d313022207374796c653d226d617267696e2d72696768743a20313070783b2077696474683a20323270783b206865696768743a20323270783b20626f726465722d7261646975733a20353070783b206261636b67726f756e643a206e6f6e65203025203025202f206175746f20726570656174207363726f6c6c2070616464696e672d626f7820626f726465722d626f782072676228372c2033312c203933293b20746578742d616c69676e3a2063656e7465723b206c696e652d6865696768743a20323370783b20646973706c61793a20696e6c696e652d626c6f636b3b20666f6e742d73697a653a20313270783b20636f6c6f723a20726762283235352c203235352c20323535293b207472616e73666f726d3a207472616e736c6174655928327078293b20666c65783a20302030206175746f3b223e3c7370616e20636c6173733d2266612d73686172702066612d736f6c69642066612d636865636b2066612d667722207374796c653d222d7765626b69742d666f6e742d736d6f6f7468696e673a20616e7469616c69617365643b20646973706c61793a20696e6c696e652d626c6f636b3b20666f6e742d76617269616e742d6e756d657269633a206e6f726d616c3b20666f6e742d76617269616e742d656173742d617369616e3a206e6f726d616c3b20666f6e742d76617269616e742d616c7465726e617465733a206e6f726d616c3b20666f6e742d76617269616e742d706f736974696f6e3a206e6f726d616c3b20666f6e742d76617269616e742d656d6f6a693a206e6f726d616c3b206c696e652d6865696768743a20313b20746578742d72656e646572696e673a206175746f3b20666f6e742d66616d696c793a202671756f743b466f6e7420417765736f6d6520362050726f2671756f743b3b20666f6e742d7765696768743a203930303b223e3c2f7370616e3e3c2f7370616e3e3c7370616e20636c6173733d227465787422207374796c653d22746578742d7472616e73666f726d3a206361706974616c697a653b223e56534c3c2f7370616e3e3c2f6c693e3c2f756c3e, 0x3c756c207374796c653d2270616464696e673a203070783b206d617267696e2d72696768743a203070783b206d617267696e2d626f74746f6d3a203070783b206d617267696e2d6c6566743a203070783b20636f6c6f723a207267622835332c2035362c203638293b20666f6e742d66616d696c793a20506f7070696e732c2073616e732d73657269663b20666f6e742d73697a653a20313670783b223e3c6c69207374796c653d226c6973742d7374796c653a206e6f6e653b20646973706c61793a20666c65783b206d617267696e2d626f74746f6d3a203970783b223e3c7370616e20636c6173733d227465787422207374796c653d22746578742d7472616e73666f726d3a206361706974616c697a653b223e3525204753543c2f7370616e3e3c2f6c693e3c6c69207374796c653d226c6973742d7374796c653a206e6f6e653b20646973706c61793a20666c65783b206d617267696e2d626f74746f6d3a203970783b223e3c7370616e20636c6173733d2269636f6e206d722d313022207374796c653d226d617267696e2d72696768743a20313070783b2077696474683a20323270783b206865696768743a20323270783b20626f726465722d7261646975733a20353070783b206261636b67726f756e643a206e6f6e65203025203025202f206175746f20726570656174207363726f6c6c2070616464696e672d626f7820626f726465722d626f782072676228372c2033312c203933293b20746578742d616c69676e3a2063656e7465723b206c696e652d6865696768743a20323370783b20646973706c61793a20696e6c696e652d626c6f636b3b20666f6e742d73697a653a20313270783b20636f6c6f723a20726762283235352c203235352c20323535293b207472616e73666f726d3a207472616e736c6174655928327078293b20666c65783a20302030206175746f3b223e3c7370616e20636c6173733d2266612d73686172702066612d736f6c69642066612d636c6f73652066612d667722207374796c653d222d7765626b69742d666f6e742d736d6f6f7468696e673a20616e7469616c69617365643b20646973706c61793a20696e6c696e652d626c6f636b3b20666f6e742d76617269616e742d6e756d657269633a206e6f726d616c3b20666f6e742d76617269616e742d656173742d617369616e3a206e6f726d616c3b20666f6e742d76617269616e742d616c7465726e617465733a206e6f726d616c3b20666f6e742d76617269616e742d706f736974696f6e3a206e6f726d616c3b20666f6e742d76617269616e742d656d6f6a693a206e6f726d616c3b206c696e652d6865696768743a20313b20746578742d72656e646572696e673a206175746f3b20666f6e742d66616d696c793a202671756f743b466f6e7420417765736f6d6520362050726f2671756f743b3b20666f6e742d7765696768743a203930303b223e3c2f7370616e3e3c2f7370616e3e3c7370616e20636c6173733d227465787422207374796c653d22746578742d7472616e73666f726d3a206361706974616c697a653b223e496e737572616e63653c2f7370616e3e3c2f6c693e3c6c69207374796c653d226c6973742d7374796c653a206e6f6e653b20646973706c61793a20666c65783b206d617267696e2d626f74746f6d3a203970783b223e3c7370616e20636c6173733d2269636f6e206d722d313022207374796c653d226d617267696e2d72696768743a20313070783b2077696474683a20323270783b206865696768743a20323270783b20626f726465722d7261646975733a20353070783b206261636b67726f756e643a206e6f6e65203025203025202f206175746f20726570656174207363726f6c6c2070616464696e672d626f7820626f726465722d626f782072676228372c2033312c203933293b20746578742d616c69676e3a2063656e7465723b206c696e652d6865696768743a20323370783b20646973706c61793a20696e6c696e652d626c6f636b3b20666f6e742d73697a653a20313270783b20636f6c6f723a20726762283235352c203235352c20323535293b207472616e73666f726d3a207472616e736c6174655928327078293b20666c65783a20302030206175746f3b223e3c7370616e20636c6173733d2266612d73686172702066612d736f6c69642066612d636c6f73652066612d667722207374796c653d222d7765626b69742d666f6e742d736d6f6f7468696e673a20616e7469616c69617365643b20646973706c61793a20696e6c696e652d626c6f636b3b20666f6e742d76617269616e742d6e756d657269633a206e6f726d616c3b20666f6e742d76617269616e742d656173742d617369616e3a206e6f726d616c3b20666f6e742d76617269616e742d616c7465726e617465733a206e6f726d616c3b20666f6e742d76617269616e742d706f736974696f6e3a206e6f726d616c3b20666f6e742d76617269616e742d656d6f6a693a206e6f726d616c3b206c696e652d6865696768743a20313b20746578742d72656e646572696e673a206175746f3b20666f6e742d66616d696c793a202671756f743b466f6e7420417765736f6d6520362050726f2671756f743b3b20666f6e742d7765696768743a203930303b223e3c2f7370616e3e3c2f7370616e3e3c7370616e20636c6173733d227465787422207374796c653d22746578742d7472616e73666f726d3a206361706974616c697a653b223e566973613c2f7370616e3e3c2f6c693e3c6c69207374796c653d226c6973742d7374796c653a206e6f6e653b20646973706c61793a20666c65783b206d617267696e2d626f74746f6d3a203970783b223e3c7370616e20636c6173733d2269636f6e206d722d313022207374796c653d226d617267696e2d72696768743a20313070783b2077696474683a20323270783b206865696768743a20323270783b20626f726465722d7261646975733a20353070783b206261636b67726f756e643a206e6f6e65203025203025202f206175746f20726570656174207363726f6c6c2070616464696e672d626f7820626f726465722d626f782072676228372c2033312c203933293b20746578742d616c69676e3a2063656e7465723b206c696e652d6865696768743a20323370783b20646973706c61793a20696e6c696e652d626c6f636b3b20666f6e742d73697a653a20313270783b20636f6c6f723a20726762283235352c203235352c20323535293b207472616e73666f726d3a207472616e736c6174655928327078293b20666c65783a20302030206175746f3b223e3c7370616e20636c6173733d2266612d73686172702066612d736f6c69642066612d636c6f73652066612d667722207374796c653d222d7765626b69742d666f6e742d736d6f6f7468696e673a20616e7469616c69617365643b20646973706c61793a20696e6c696e652d626c6f636b3b20666f6e742d76617269616e742d6e756d657269633a206e6f726d616c3b20666f6e742d76617269616e742d656173742d617369616e3a206e6f726d616c3b20666f6e742d76617269616e742d616c7465726e617465733a206e6f726d616c3b20666f6e742d76617269616e742d706f736974696f6e3a206e6f726d616c3b20666f6e742d76617269616e742d656d6f6a693a206e6f726d616c3b206c696e652d6865696768743a20313b20746578742d72656e646572696e673a206175746f3b20666f6e742d66616d696c793a202671756f743b466f6e7420417765736f6d6520362050726f2671756f743b3b20666f6e742d7765696768743a203930303b223e3c2f7370616e3e3c2f7370616e3e3c7370616e20636c6173733d227465787422207374796c653d22746578742d7472616e73666f726d3a206361706974616c697a653b223e416e7920506f7274657220536572766963652c20546970732c206574633c2f7370616e3e3c2f6c693e3c6c69207374796c653d226c6973742d7374796c653a206e6f6e653b20646973706c61793a20666c65783b206d617267696e2d626f74746f6d3a203970783b223e3c7370616e20636c6173733d2269636f6e206d722d313022207374796c653d226d617267696e2d72696768743a20313070783b2077696474683a20323270783b206865696768743a20323270783b20626f726465722d7261646975733a20353070783b206261636b67726f756e643a206e6f6e65203025203025202f206175746f20726570656174207363726f6c6c2070616464696e672d626f7820626f726465722d626f782072676228372c2033312c203933293b20746578742d616c69676e3a2063656e7465723b206c696e652d6865696768743a20323370783b20646973706c61793a20696e6c696e652d626c6f636b3b20666f6e742d73697a653a20313270783b20636f6c6f723a20726762283235352c203235352c20323535293b207472616e73666f726d3a207472616e736c6174655928327078293b20666c65783a20302030206175746f3b223e3c7370616e20636c6173733d2266612d73686172702066612d736f6c69642066612d636c6f73652066612d667722207374796c653d222d7765626b69742d666f6e742d736d6f6f7468696e673a20616e7469616c69617365643b20646973706c61793a20696e6c696e652d626c6f636b3b20666f6e742d76617269616e742d6e756d657269633a206e6f726d616c3b20666f6e742d76617269616e742d656173742d617369616e3a206e6f726d616c3b20666f6e742d76617269616e742d616c7465726e617465733a206e6f726d616c3b20666f6e742d76617269616e742d706f736974696f6e3a206e6f726d616c3b20666f6e742d76617269616e742d656d6f6a693a206e6f726d616c3b206c696e652d6865696768743a20313b20746578742d72656e646572696e673a206175746f3b20666f6e742d66616d696c793a202671756f743b466f6e7420417765736f6d6520362050726f2671756f743b3b20666f6e742d7765696768743a203930303b223e3c2f7370616e3e3c2f7370616e3e3c7370616e20636c6173733d227465787422207374796c653d22746578742d7472616e73666f726d3a206361706974616c697a653b223e4c61756e6472793c2f7370616e3e3c2f6c693e3c6c69207374796c653d226c6973742d7374796c653a206e6f6e653b20646973706c61793a20666c65783b206d617267696e2d626f74746f6d3a203970783b223e3c7370616e20636c6173733d2269636f6e206d722d313022207374796c653d226d617267696e2d72696768743a20313070783b2077696474683a20323270783b206865696768743a20323270783b20626f726465722d7261646975733a20353070783b206261636b67726f756e643a206e6f6e65203025203025202f206175746f20726570656174207363726f6c6c2070616464696e672d626f7820626f726465722d626f782072676228372c2033312c203933293b20746578742d616c69676e3a2063656e7465723b206c696e652d6865696768743a20323370783b20646973706c61793a20696e6c696e652d626c6f636b3b20666f6e742d73697a653a20313270783b20636f6c6f723a20726762283235352c203235352c20323535293b207472616e73666f726d3a207472616e736c6174655928327078293b20666c65783a20302030206175746f3b223e3c7370616e20636c6173733d2266612d73686172702066612d736f6c69642066612d636c6f73652066612d667722207374796c653d222d7765626b69742d666f6e742d736d6f6f7468696e673a20616e7469616c69617365643b20646973706c61793a20696e6c696e652d626c6f636b3b20666f6e742d76617269616e742d6e756d657269633a206e6f726d616c3b20666f6e742d76617269616e742d656173742d617369616e3a206e6f726d616c3b20666f6e742d76617269616e742d616c7465726e617465733a206e6f726d616c3b20666f6e742d76617269616e742d706f736974696f6e3a206e6f726d616c3b20666f6e742d76617269616e742d656d6f6a693a206e6f726d616c3b206c696e652d6865696768743a20313b20746578742d72656e646572696e673a206175746f3b20666f6e742d66616d696c793a202671756f743b466f6e7420417765736f6d6520362050726f2671756f743b3b20666f6e742d7765696768743a203930303b223e3c2f7370616e3e3c2f7370616e3e3c7370616e20636c6173733d227465787422207374796c653d22746578742d7472616e73666f726d3a206361706974616c697a653b223e416e797468696e67206e6f74206d656e74696f6e656420696e20496e636c7573696f6e733c2f7370616e3e3c2f6c693e3c6c69207374796c653d226c6973742d7374796c653a206e6f6e653b20646973706c61793a20666c65783b223e3c7370616e20636c6173733d2269636f6e206d722d313022207374796c653d226d617267696e2d72696768743a20313070783b2077696474683a20323270783b206865696768743a20323270783b20626f726465722d7261646975733a20353070783b206261636b67726f756e643a206e6f6e65203025203025202f206175746f20726570656174207363726f6c6c2070616464696e672d626f7820626f726465722d626f782072676228372c2033312c203933293b20746578742d616c69676e3a2063656e7465723b206c696e652d6865696768743a20323370783b20646973706c61793a20696e6c696e652d626c6f636b3b20666f6e742d73697a653a20313270783b20636f6c6f723a20726762283235352c203235352c20323535293b207472616e73666f726d3a207472616e736c6174655928327078293b20666c65783a20302030206175746f3b223e3c7370616e20636c6173733d2266612d73686172702066612d736f6c69642066612d636c6f73652066612d667722207374796c653d222d7765626b69742d666f6e742d736d6f6f7468696e673a20616e7469616c69617365643b20646973706c61793a20696e6c696e652d626c6f636b3b20666f6e742d76617269616e742d6e756d657269633a206e6f726d616c3b20666f6e742d76617269616e742d656173742d617369616e3a206e6f726d616c3b20666f6e742d76617269616e742d616c7465726e617465733a206e6f726d616c3b20666f6e742d76617269616e742d706f736974696f6e3a206e6f726d616c3b20666f6e742d76617269616e742d656d6f6a693a206e6f726d616c3b206c696e652d6865696768743a20313b20746578742d72656e646572696e673a206175746f3b20666f6e742d66616d696c793a202671756f743b466f6e7420417765736f6d6520362050726f2671756f743b3b20666f6e742d7765696768743a203930303b223e3c2f7370616e3e3c2f7370616e3e3c7370616e20636c6173733d227465787422207374796c653d22746578742d7472616e73666f726d3a206361706974616c697a653b223e466c69676874733c2f7370616e3e3c2f6c693e3c2f756c3e, 0x3c703e3c62723e3c2f703e3c756c207374796c653d2270616464696e673a203070783b206d617267696e2d72696768743a203070783b206d617267696e2d626f74746f6d3a203070783b206d617267696e2d6c6566743a203070783b20636f6c6f723a207267622835332c2035362c203638293b20666f6e742d66616d696c793a20506f7070696e732c2073616e732d73657269663b20666f6e742d73697a653a20313670783b223e3c6c69207374796c653d226c6973742d7374796c653a206e6f6e653b20646973706c61793a20666c65783b206d617267696e2d626f74746f6d3a203970783b223e3c7370616e20636c6173733d227465787422207374796c653d22746578742d7472616e73666f726d3a206361706974616c697a653b223e566f646b61204d757365756d20776974682054617374696e673c2f7370616e3e3c2f6c693e3c6c69207374796c653d226c6973742d7374796c653a206e6f6e653b20646973706c61793a20666c65783b206d617267696e2d626f74746f6d3a203970783b223e3c7370616e20636c6173733d2269636f6e206d722d313022207374796c653d226d617267696e2d72696768743a20313070783b2077696474683a20323270783b206865696768743a20323270783b20626f726465722d7261646975733a20353070783b206261636b67726f756e643a206e6f6e65203025203025202f206175746f20726570656174207363726f6c6c2070616464696e672d626f7820626f726465722d626f782072676228372c2033312c203933293b20746578742d616c69676e3a2063656e7465723b206c696e652d6865696768743a20323370783b20646973706c61793a20696e6c696e652d626c6f636b3b20666f6e742d73697a653a20313270783b20636f6c6f723a20726762283235352c203235352c20323535293b207472616e73666f726d3a207472616e736c6174655928327078293b20666c65783a20302030206175746f3b223e3c7370616e20636c6173733d2266612d73686172702066612d736f6c69642066612d636865636b2066612d667722207374796c653d222d7765626b69742d666f6e742d736d6f6f7468696e673a20616e7469616c69617365643b20646973706c61793a20696e6c696e652d626c6f636b3b20666f6e742d76617269616e742d6e756d657269633a206e6f726d616c3b20666f6e742d76617269616e742d656173742d617369616e3a206e6f726d616c3b20666f6e742d76617269616e742d616c7465726e617465733a206e6f726d616c3b20666f6e742d76617269616e742d706f736974696f6e3a206e6f726d616c3b20666f6e742d76617269616e742d656d6f6a693a206e6f726d616c3b206c696e652d6865696768743a20313b20746578742d72656e646572696e673a206175746f3b20666f6e742d66616d696c793a202671756f743b466f6e7420417765736f6d6520362050726f2671756f743b3b20666f6e742d7765696768743a203930303b223e3c2f7370616e3e3c2f7370616e3e3c7370616e20636c6173733d227465787422207374796c653d22746578742d7472616e73666f726d3a206361706974616c697a653b223e4865726d6974616765204d757365756d3c2f7370616e3e3c2f6c693e3c6c69207374796c653d226c6973742d7374796c653a206e6f6e653b20646973706c61793a20666c65783b206d617267696e2d626f74746f6d3a203970783b223e3c7370616e20636c6173733d2269636f6e206d722d313022207374796c653d226d617267696e2d72696768743a20313070783b2077696474683a20323270783b206865696768743a20323270783b20626f726465722d7261646975733a20353070783b206261636b67726f756e643a206e6f6e65203025203025202f206175746f20726570656174207363726f6c6c2070616464696e672d626f7820626f726465722d626f782072676228372c2033312c203933293b20746578742d616c69676e3a2063656e7465723b206c696e652d6865696768743a20323370783b20646973706c61793a20696e6c696e652d626c6f636b3b20666f6e742d73697a653a20313270783b20636f6c6f723a20726762283235352c203235352c20323535293b207472616e73666f726d3a207472616e736c6174655928327078293b20666c65783a20302030206175746f3b223e3c7370616e20636c6173733d2266612d73686172702066612d736f6c69642066612d636865636b2066612d667722207374796c653d222d7765626b69742d666f6e742d736d6f6f7468696e673a20616e7469616c69617365643b20646973706c61793a20696e6c696e652d626c6f636b3b20666f6e742d76617269616e742d6e756d657269633a206e6f726d616c3b20666f6e742d76617269616e742d656173742d617369616e3a206e6f726d616c3b20666f6e742d76617269616e742d616c7465726e617465733a206e6f726d616c3b20666f6e742d76617269616e742d706f736974696f6e3a206e6f726d616c3b20666f6e742d76617269616e742d656d6f6a693a206e6f726d616c3b206c696e652d6865696768743a20313b20746578742d72656e646572696e673a206175746f3b20666f6e742d66616d696c793a202671756f743b466f6e7420417765736f6d6520362050726f2671756f743b3b20666f6e742d7765696768743a203930303b223e3c2f7370616e3e3c2f7370616e3e3c7370616e20636c6173733d227465787422207374796c653d22746578742d7472616e73666f726d3a206361706974616c697a653b223e4973616163732043617468656472616c3c2f7370616e3e3c2f6c693e3c6c69207374796c653d226c6973742d7374796c653a206e6f6e653b20646973706c61793a20666c65783b206d617267696e2d626f74746f6d3a203970783b223e3c7370616e20636c6173733d2269636f6e206d722d313022207374796c653d226d617267696e2d72696768743a20313070783b2077696474683a20323270783b206865696768743a20323270783b20626f726465722d7261646975733a20353070783b206261636b67726f756e643a206e6f6e65203025203025202f206175746f20726570656174207363726f6c6c2070616464696e672d626f7820626f726465722d626f782072676228372c2033312c203933293b20746578742d616c69676e3a2063656e7465723b206c696e652d6865696768743a20323370783b20646973706c61793a20696e6c696e652d626c6f636b3b20666f6e742d73697a653a20313270783b20636f6c6f723a20726762283235352c203235352c20323535293b207472616e73666f726d3a207472616e736c6174655928327078293b20666c65783a20302030206175746f3b223e3c7370616e20636c6173733d2266612d73686172702066612d736f6c69642066612d636865636b2066612d667722207374796c653d222d7765626b69742d666f6e742d736d6f6f7468696e673a20616e7469616c69617365643b20646973706c61793a20696e6c696e652d626c6f636b3b20666f6e742d76617269616e742d6e756d657269633a206e6f726d616c3b20666f6e742d76617269616e742d656173742d617369616e3a206e6f726d616c3b20666f6e742d76617269616e742d616c7465726e617465733a206e6f726d616c3b20666f6e742d76617269616e742d706f736974696f6e3a206e6f726d616c3b20666f6e742d76617269616e742d656d6f6a693a206e6f726d616c3b206c696e652d6865696768743a20313b20746578742d72656e646572696e673a206175746f3b20666f6e742d66616d696c793a202671756f743b466f6e7420417765736f6d6520362050726f2671756f743b3b20666f6e742d7765696768743a203930303b223e3c2f7370616e3e3c2f7370616e3e3c7370616e20636c6173733d227465787422207374796c653d22746578742d7472616e73666f726d3a206361706974616c697a653b223e4f757220536176696f7572206f6e205370696c6c656420426c6f6f64204368757263683c2f7370616e3e3c2f6c693e3c6c69207374796c653d226c6973742d7374796c653a206e6f6e653b20646973706c61793a20666c65783b223e3c7370616e20636c6173733d2269636f6e206d722d313022207374796c653d226d617267696e2d72696768743a20313070783b2077696474683a20323270783b206865696768743a20323270783b20626f726465722d7261646975733a20353070783b206261636b67726f756e643a206e6f6e65203025203025202f206175746f20726570656174207363726f6c6c2070616464696e672d626f7820626f726465722d626f782072676228372c2033312c203933293b20746578742d616c69676e3a2063656e7465723b206c696e652d6865696768743a20323370783b20646973706c61793a20696e6c696e652d626c6f636b3b20666f6e742d73697a653a20313270783b20636f6c6f723a20726762283235352c203235352c20323535293b207472616e73666f726d3a207472616e736c6174655928327078293b20666c65783a20302030206175746f3b223e3c7370616e20636c6173733d2266612d73686172702066612d736f6c69642066612d636865636b2066612d667722207374796c653d222d7765626b69742d666f6e742d736d6f6f7468696e673a20616e7469616c69617365643b20646973706c61793a20696e6c696e652d626c6f636b3b20666f6e742d76617269616e742d6e756d657269633a206e6f726d616c3b20666f6e742d76617269616e742d656173742d617369616e3a206e6f726d616c3b20666f6e742d76617269616e742d616c7465726e617465733a206e6f726d616c3b20666f6e742d76617269616e742d706f736974696f6e3a206e6f726d616c3b20666f6e742d76617269616e742d656d6f6a693a206e6f726d616c3b206c696e652d6865696768743a20313b20746578742d72656e646572696e673a206175746f3b20666f6e742d66616d696c793a202671756f743b466f6e7420417765736f6d6520362050726f2671756f743b3b20666f6e742d7765696768743a203930303b223e3c2f7370616e3e3c2f7370616e3e3c7370616e20636c6173733d227465787422207374796c653d22746578742d7472616e73666f726d3a206361706974616c697a653b223e4b72656d6c696e2026616d703b206974732043617468656472616c733c2f7370616e3e3c2f6c693e3c2f756c3e, 1, '2025-07-28 17:31:00', '2025-07-28 18:22:01');

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id` int(11) NOT NULL,
  `image` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `addeddate` datetime DEFAULT NULL,
  `modifieddate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id`, `image`, `status`, `addeddate`, `modifieddate`) VALUES
(1, '6884ae13c0a36.png', 1, '2025-07-26 15:59:39', NULL),
(2, '6884ae19e8979.png', 1, '2025-07-26 15:59:45', NULL);

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
('9Zs6OvLFNTsvpwB4PzAQFHrYdbPllM6M1nlzq7r5', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo3OntzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo0MzoiaHR0cDovL2xvY2FsaG9zdC9tb3h4eWRtY2FkbWluL3NvdXRoLWFmcmljYSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NjoiX3Rva2VuIjtzOjQwOiJaOERGWkQwMDExaWxXb2ZjMnNQcEE0ck4xU2RENWJFbzJESjRsdGI1IjtzOjg6ImFkbWluX2lkIjtpOjI7czoxNDoiYWRtaW5fdXNlcm5hbWUiO3M6MTU6ImFkbWluQGdtYWlsLmNvbSI7czoxMDoiYWRtaW5fbmFtZSI7czo1OiJBZG1pbiI7czoxNDoiYWRtaW5fcGFzc3dvcmQiO3M6NToiYWRtaW4iO30=', 1753707310);

-- --------------------------------------------------------

--
-- Table structure for table `sight_seeing`
--

CREATE TABLE `sight_seeing` (
  `id` int(11) NOT NULL,
  `image` text DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `name` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `banner` text DEFAULT NULL,
  `full_content` text DEFAULT NULL,
  `where_to_go` text DEFAULT NULL,
  `experiences_activities` text DEFAULT NULL,
  `art_therter` text DEFAULT NULL,
  `park_garden` text DEFAULT NULL,
  `hotels` text DEFAULT NULL,
  `meta_title` text DEFAULT NULL,
  `meta_auther` text DEFAULT NULL,
  `meta_keyword` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `addeddate` datetime DEFAULT NULL,
  `modifieddate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sight_seeing`
--

INSERT INTO `sight_seeing` (`id`, `image`, `country_id`, `city_id`, `name`, `slug`, `content`, `banner`, `full_content`, `where_to_go`, `experiences_activities`, `art_therter`, `park_garden`, `hotels`, `meta_title`, `meta_auther`, `meta_keyword`, `meta_description`, `status`, `addeddate`, `modifieddate`) VALUES
(1, '68874fb723577.webp', 4, 2, 'asd', 'asd', 'asd', '68874fb723787.webp', '<p>sdsdsd</p>', '[{\"where_to_go_name\":\"asdsad\",\"where_to_go_description\":\"123 465x46z54a ds6a65f 4dfda4f65ad af654 6a5f a6d5f da6f4 a6f54 a6f5 0as46f5 0as4f6 4a6f 5as0f6 a4df6asd4qw8e7q 0qw6 wq89 wq98d\",\"where_to_go_image\":[\"688751bd92a43_2.webp\"]},{\"where_to_go_name\":\"DFGFDG\",\"where_to_go_description\":\"DFGFDGF\",\"where_to_go_image\":[\"6887526e61dcc_12.webp\"]}]', '[{\"experiences_activities_name\":\"ASDSAD\",\"experiences_activities_description\":\"ASDASDSD\",\"experiences_activities_image\":[\"688753e23f8e9_4.webp\"]}]', '[{\"art_therter_name\":\"ASDASDASD\",\"art_therter_description\":\"ASDASDAD\",\"art_therter_image\":[\"68875571baac8_11.webp\"]},{\"art_therter_name\":\"ART\",\"art_therter_description\":\"FE FREWRFE\",\"art_therter_image\":[\"6887557f8731a_14.webp\"]}]', '[{\"park_garden_name\":\"PAYFR\",\"park_garden_description\":\"ASDFASD\",\"park_garden_image\":[\"68875627de87f_12.webp\"]},{\"park_garden_name\":\"PARK 22\",\"park_garden_description\":\"TETETE\",\"park_garden_image\":[\"6887563b3dc03_light.png\"]}]', '[{\"hotels_name\":\"HOTEL\",\"hotels_description\":\"SEFES RF\",\"hotels_image\":[\"688756e1f1ceb_Kolkata.png\"]}]', 'asd', 'asdas', 'dasd', 'asdsad', 1, '2025-07-28 15:48:11', '2025-07-28 16:42:16'),
(2, '68875eb0ef62f.webp', 6, 3, 'Sight Seeing', 'sight-seeing', 'Moscow is the biggest city in Russia by land area and the heart of the country. It\'s a city that\'s both old and growing,', '68875eb0ef867.webp', '<p class=\"text-capitalize wow fadeInUp\" data-wow-delay=\".5s\" data-wow-duration=\".9s\" style=\"margin-bottom: 15px; color: rgb(53, 56, 68); font-family: Poppins, sans-serif; font-size: 16px; visibility: visible; animation-duration: 0.9s; animation-delay: 0.5s;\">Moscow is the biggest city in Russia by land area and the heart of the country. It\'s a city that\'s both old and growing, with about 12 million people living there. Moscow, the capital of Russia, is the country\'s most important political, economic, scientific and cultural hub. Moscow is situated on the river Moskva, between the Oka River and the Volga River. Moscow is home to the President, the parliament, and the government.</p><p class=\"text-capitalize wow fadeInUp\" data-wow-delay=\".5s\" data-wow-duration=\".9s\" style=\"margin-bottom: 15px; color: rgb(53, 56, 68); font-family: Poppins, sans-serif; font-size: 16px; visibility: visible; animation-duration: 0.9s; animation-delay: 0.5s;\">History: Moscow has a rich history dating back to the 12th century. It has played a crucial role in the history of Russia and has served as the capital of the country for centuries.</p><p class=\"text-capitalize wow fadeInUp\" data-wow-delay=\".5s\" data-wow-duration=\".9s\" style=\"margin-bottom: 15px; color: rgb(53, 56, 68); font-family: Poppins, sans-serif; font-size: 16px; visibility: visible; animation-duration: 0.9s; animation-delay: 0.5s;\"><span style=\"font-weight: bolder;\">Government:&nbsp;</span>Moscow is a separate federal city and does not belong to any oblast (region). It has its own mayor and government.</p><p class=\"text-capitalize wow fadeInUp\" data-wow-delay=\".5s\" data-wow-duration=\".9s\" style=\"margin-bottom: 15px; color: rgb(53, 56, 68); font-family: Poppins, sans-serif; font-size: 16px; visibility: visible; animation-duration: 0.9s; animation-delay: 0.5s;\"><span style=\"font-weight: bolder;\">Tourism:&nbsp;</span>Moscow is a popular tourist destination, attracting visitors from around the world who come to explore its historical and cultural attractions. You can see the Kremlin, the Kremlin Palace, Red Square (UNESCO World Cultural Heritage), the world\'s most beautiful metro, the Christ the Savior Cathedral, the first pedestrian street, and the biggest museums in Russia all in one place.</p><p class=\"text-capitalize wow fadeInUp\" data-wow-delay=\".5s\" data-wow-duration=\".9s\" style=\"margin-bottom: 15px; color: rgb(53, 56, 68); font-family: Poppins, sans-serif; font-size: 16px; visibility: visible; animation-duration: 0.9s; animation-delay: 0.5s;\">Moscow\'s seven most famous skyscrapers - the Foreign Ministry, the Railroads Ministry, the Hotel Ukraine, the Hotel Leningrad, the Soviet Union high-rise, the Soviet University - were built between the 1950s and 1960s.</p><p class=\"text-capitalize wow fadeInUp\" data-wow-delay=\".5s\" data-wow-duration=\".9s\" style=\"margin-bottom: 15px; color: rgb(53, 56, 68); font-family: Poppins, sans-serif; font-size: 16px; visibility: visible; animation-duration: 0.9s; animation-delay: 0.5s;\">Moscow is famous for its iconic landmarks, including the Red Square, the Kremlin, St. Basil\'s Cathedral, and the Bolshoi Theatre. The Red Square, in particular, is a historic and cultural center of the city.</p><p class=\"text-capitalize wow fadeInUp\" data-wow-delay=\".5s\" data-wow-duration=\".9s\" style=\"margin-bottom: 15px; color: rgb(53, 56, 68); font-family: Poppins, sans-serif; font-size: 16px; visibility: visible; animation-duration: 0.9s; animation-delay: 0.5s;\">Moscow is a cultural hub with numerous museums, theatres, and art galleries. The city is known for its rich literary and artistic traditions.</p><p class=\"text-capitalize wow fadeInUp\" data-wow-delay=\".5s\" data-wow-duration=\".9s\" style=\"margin-bottom: 15px; color: rgb(53, 56, 68); font-family: Poppins, sans-serif; font-size: 16px; visibility: visible; animation-duration: 0.9s; animation-delay: 0.5s;\"><span style=\"font-weight: bolder;\">Economy:&nbsp;</span>The city is a major economic center, with a diverse economy that includes finance, technology, manufacturing, and more. Moscow is home to the Moscow Stock Exchange and numerous international corporations.</p>', '[{\"where_to_go_name\":\"Moscow Maket, Moscow\",\"where_to_go_description\":\"It\'s located in VDNH Park, and it\'s an architectural model of MOSCOW, performed at a scale of 1:400. All the buildings are connected, and each one has four well-researched fronts.\",\"where_to_go_image\":[\"68875e4e72493_154walking-in-Vdnh-scaled.webp\"]}]', '[{\"experiences_activities_name\":\"Arbat Street, Moscow\",\"experiences_activities_description\":\"It\'s located in VDNH Park, and it\'s an architectural model of MOSCOW, performed at a scale of 1:400. All the buildings are connected, and each one has four well-researched fronts.\",\"experiences_activities_image\":[\"68875e4e726fe_153ARBAT_STREET_(2).webp\"]}]', '[{\"art_therter_name\":\"Pushkin Fine Arts Museum, Moscow\",\"art_therter_description\":\"It\'s located in VDNH Park, and it\'s an architectural model of MOSCOW, performed at a scale of 1:400. All the buildings are connected, and each one has four well-researched fronts.\",\"art_therter_image\":[\"68875e4e72878_145Pushkin_Fine_Arts_Museum_Tour_(3).webp\"]}]', '[{\"park_garden_name\":\"VDNKH Park, Moscow\",\"park_garden_description\":\"It\'s located in VDNH Park, and it\'s an architectural model of MOSCOW, performed at a scale of 1:400. All the buildings are connected, and each one has four well-researched fronts.\",\"park_garden_image\":[\"68875e4e729f6_138VDNKH_Park_(2).webp\"]}]', '[{\"hotels_name\":\"Golden Ring Hotel, Moscow\",\"hotels_description\":\"It\'s located in VDNH Park, and it\'s an architectural model of MOSCOW, performed at a scale of 1:400. All the buildings are connected, and each one has four well-researched fronts.\",\"hotels_image\":[\"68875eb0efa29_138GOLDEN_RING_HOTEL.webp\"]}]', 'Sight Seeing', 'MOXXY DMC', 'Russia, a vast and enigmatic nation, unfolds a narrative that spans the epochs of tsars,', 'etest', 1, '2025-07-28 16:56:06', '2025-07-28 16:57:44');

-- --------------------------------------------------------

--
-- Table structure for table `site_setting`
--

CREATE TABLE `site_setting` (
  `id` int(11) NOT NULL,
  `logo` text NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `alt_mobile` varchar(50) NOT NULL,
  `whatsapp` varchar(15) NOT NULL,
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

INSERT INTO `site_setting` (`id`, `logo`, `mobile`, `alt_mobile`, `whatsapp`, `email`, `alt_email`, `address`, `facebook`, `twitter`, `instagram`, `youtube`, `map`) VALUES
(1, '688369a5170a0.png', '9999999999', '9586741023', '789456320', 'myemail@gmail.com', 'altemail@gmail.com', 'your addressssss INDIA', 'https://www.facebook.com', 'https://twitter.com', 'https://www.instagram.com', 'https://www.youtube.com', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30767295.116023116!2d60.946027684017714!3d19.722272265144735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1713167102172!5m2!1sen!2sin\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `url` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `addeddate` datetime DEFAULT NULL,
  `modifieddate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `url`, `image`, `status`, `addeddate`, `modifieddate`) VALUES
(1, 'https://www.youtube.com/', '688480ec42830.jpg', 1, '2025-07-26 12:47:00', NULL),
(2, 'https://www.youtube.com/', '688480e1ccd05.jpg', 1, '2025-07-26 12:46:49', NULL),
(3, 'https://www.youtube.com/', '68848047bad75.jpg', 1, '2025-07-26 12:44:15', '2025-07-26 12:46:38');

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
(334, 'exploring-the-green-spac-realar-residence-area-harmony', 'blog', 'blog-details', 'blog', 11),
(335, 'asdasd', 'country', 'tour-packages', 'country', 1),
(336, 'asdasd-1', 'country', 'tour-packages', 'country', 2),
(340, 'australia', 'country', 'tour-packages', 'country', 4),
(341, 'dubai', 'country', 'tour-packages', 'country', 5),
(343, 'russia', 'country', 'tour-packages', 'country', 3),
(344, 'japan', 'country', 'tour-packages', 'country', 6),
(345, 'iceland', 'country', 'tour-packages', 'country', 7),
(348, 'moscow', 'city', 'packages', 'city', 1),
(349, 'kaliningrad', 'city', 'packages', 'city', 2),
(350, 'sochi', 'city', 'packages', 'city', 3),
(352, 'saint-petersburg', 'city', 'packages', 'city', 4),
(369, 'asd', 'sight_seeing', 'sight-seeing-details', 'sight_seeing', 1),
(371, 'sight-seeing', 'sight_seeing', 'sight-seeing-details', 'sight_seeing', 2),
(374, 'saint-petersburg-moscow', 'package', 'package-details', 'package', 2),
(377, 'south-africa', 'package', 'package-details', 'package', 1);

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
(2, '6884aaf22d25c.png', 'Amit Ansari', 'amit-ansari', 'Client', 'Morem ipsum dolor siterey amet mean earty areaeey consec taetur adipisrvice ollwing  ipsum dolor consectetur', 1, '2024-12-11 15:56:37', '2025-07-26 15:46:18'),
(3, '6884aae687de6.png', 'Spiderman', 'spiderman', 'Client', 'Morem ipsum dolor siterey amet mean earty areaeey consec taetur adipisrvice ollwing ipsum dolor consectetur', 1, '2025-07-14 17:47:00', '2025-07-26 15:46:06');

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
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
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
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
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
-- Indexes for table `sight_seeing`
--
ALTER TABLE `sight_seeing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_setting`
--
ALTER TABLE `site_setting`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=464;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meta_tags`
--
ALTER TABLE `meta_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `multipleimage`
--
ALTER TABLE `multipleimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
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
-- AUTO_INCREMENT for table `sight_seeing`
--
ALTER TABLE `sight_seeing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `site_setting`
--
ALTER TABLE `site_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `slugs`
--
ALTER TABLE `slugs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=378;

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
