-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 10, 2025 at 05:55 AM
-- Server version: 10.11.10-MariaDB-log
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u346521377_v2journeylarav`
--

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

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `image`, `name`, `slug`, `content`, `status`, `addeddate`, `modifieddate`) VALUES
(1, '6836af77a23b2.png', 'Indonesia Your Dream Destination', 'indonesia-your-dream-destination', 0x3c703e3c7370616e207374796c653d22636f6c6f723a207267622838332c2039312c203935293b20666f6e742d66616d696c793a20527562696b2c2073657269663b20666f6e742d73697a653a20313670783b206c65747465722d73706163696e673a20302e3570783b20746578742d7472616e73666f726d3a206361706974616c697a653b223e5261696e626f77e2809973206869676820746563686e67792073797374656d732077697468207468652068656c70206f662072656f76696e6720756e7365656e206475736f7468746c73206d69796f7574657320616e64206265642062756773206861726d66756c6c792064697365617365732062656361757365206f6620646972746572732e205468697320616c736f20696e636c7564657320686167696e6720686f6d6520626573206c696e656e732073686172652070726f7669642064697367207370656369616c697a6564206465657020756e7365656e20756e7365656e206563686e6779206d6974657320636c69656e742e3c2f7370616e3e3c2f703e, 1, '2025-05-28 12:08:47', '2025-05-28 12:09:13');

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

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `content` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `name`, `content`) VALUES
(1, 'About Us', 0x3c64697620636c6173733d227469746c652d6172656122207374796c653d226d617267696e2d626f74746f6d3a20363070783b20636f6c6f723a207267622838332c2039312c203935293b20666f6e742d66616d696c793a20527562696b2c2073657269663b20666f6e742d73697a653a20313470783b223e3c7370616e20636c6173733d227365632d7375627469746c6520746578742d6361706974616c697a6522207374796c653d22746578742d7472616e73666f726d3a207570706572636173653b20646973706c61793a20626c6f636b3b20636f6c6f723a20726762283235342c20302c2030293b20666f6e742d73697a653a20313870783b20666f6e742d7765696768743a203730303b206d617267696e3a203070782030707820313870783b223e4578706c6f7265266e6273703b3c2f7370616e3e3c2f6469763e),
(2, 'Privacy Policy', 0x3c703e707274697661637920706f6f6c6963793c2f703e),
(3, 'Terms & Conditions', 0x3c703e746572746d20636f6e646974696f6e3c2f703e),
(4, 'Home About Us', 0x3c64697620636c6173733d227469746c652d61726561206d622d3422207374796c653d226d617267696e2d626f74746f6d3a20363070783b20636f6c6f723a207267622838332c2039312c203935293b20666f6e742d66616d696c793a20527562696b2c2073657269663b20666f6e742d73697a653a20313470783b223e3c7370616e20636c6173733d227365632d7375627469746c6520746578742d6361706974616c697a6522207374796c653d22746578742d7472616e73666f726d3a207570706572636173653b20646973706c61793a20626c6f636b3b20636f6c6f723a20726762283235342c20302c2030293b20666f6e742d73697a653a20313870783b20666f6e742d7765696768743a203730303b206d617267696e3a203070782030707820313870783b223e57656c636f6d6520746f205632204a6f75726e65793c2f7370616e3e3c683220636c6173733d227365632d7469746c6522207374796c653d226d617267696e2d72696768743a203070783b206d617267696e2d626f74746f6d3a203070783b206d617267696e2d6c6566743a203070783b20666f6e742d7765696768743a203430303b206c696e652d6865696768743a2035342e3970783b20636f6c6f723a207267622832302c2032302c203230293b20666f6e742d73697a653a20343570783b20666f6e742d66616d696c793a202220616272696c3d22222066617466616365222c3d22222073657269663b3d222220746578742d7472616e73666f726d3a3d2222206361706974616c697a653b223d22223e776865726520796f7572206a6f75726e6579206265636f6d65732061206d656d6f727920776f7274682063686572697368696e67213c2f68323e3c2f6469763e3c64697620636c6173733d2261626f75742d696e666f22207374796c653d22666f6e742d73697a653a20313670783b206c696e652d6865696768743a2032352e393270783b206c65747465722d73706163696e673a20302e333270783b20746578742d7472616e73666f726d3a206361706974616c697a653b20636f6c6f723a207267622838332c2039312c203935293b20666f6e742d66616d696c793a20527562696b2c2073657269663b223e3c70207374796c653d226d617267696e2d72696768743a203070783b206d617267696e2d626f74746f6d3a203070783b206d617267696e2d6c6566743a203070783b206c696e652d6865696768743a20312e36333b206c65747465722d73706163696e673a20302e3570783b206d61782d77696474683a20313030253b223e57652061726520636f6d6d697474656420746f2070726f766964696e672074686520626573742074726176656c20657870657269656e63657320617420746865206d6f7374206166666f726461626c65207072696365732e204f7572206d697373696f6e20697320746f207475726e206576657279207472697020696e746f2061206d656d6f7261626c6520616476656e747572652074686174207374617973207769746820796f7520666f722061206c69666574696d652e3c62723e3c62723e3c2f703e3c70207374796c653d226d617267696e2d72696768743a203070783b206d617267696e2d626f74746f6d3a203070783b206d617267696e2d6c6566743a203070783b206c696e652d6865696768743a20312e36333b206c65747465722d73706163696e673a20302e3570783b206d61782d77696474683a20313030253b223e4174205632204a6f75726e65792c20637573746f6d657220736174697366616374696f6e206973206f757220746f70207072696f726974792e2057652074616b6520707269646520696e206265696e6720637573746f6d65722d63656e747269632c20656e737572696e672065766572792074726176656c6572206665656c732076616c7565642c2068656172642c20616e642074616b656e2063617265206f66207468726f7567686f7574207468656972206a6f75726e65792e3c2f703e3c62723e3c70207374796c653d226d617267696e2d72696768743a203070783b206d617267696e2d626f74746f6d3a203070783b206d617267696e2d6c6566743a203070783b206c696e652d6865696768743a20312e36333b206c65747465722d73706163696e673a20302e3570783b206d61782d77696474683a20313030253b223e48617665207175657374696f6e73206f7220726561647920746f20706c616e20796f7572206e65787420676574617761793f204665656c206672656520746f20636f6e7461637420757320616e7974696d6520e2809420796f757220756e666f726765747461626c65206a6f75726e6579266e6273703b626567696e73266e6273703b686572652e3c2f703e3c2f6469763e);

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `id` int(11) NOT NULL,
  `image` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `addeddate` datetime DEFAULT NULL,
  `modifieddate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`id`, `image`, `name`, `slug`, `status`, `addeddate`, `modifieddate`) VALUES
(5, '6837088e03f64.jpeg', 'Kalimpong', 'kalimpong', 1, '2025-05-28 18:14:57', '2025-05-28 18:28:54'),
(6, '68370c9796955.jpeg', 'Sikkim', 'sikkim', 1, '2025-05-28 18:29:26', '2025-06-04 12:38:20'),
(7, '6838567cc8ffc.jpeg', 'Darjeeling', 'darjeeling', 1, '2025-05-29 18:13:40', NULL),
(8, '6838580d46848.jpeg', 'Bhutan', 'bhutan', 1, '2025-05-29 18:20:21', NULL),
(9, '684161991ddc8.jpeg', 'Dooars', 'dooars', 1, '2025-06-05 14:51:29', NULL);

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
  `status` int(11) DEFAULT NULL,
  `addeddate` datetime DEFAULT NULL,
  `modifieddate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `answere`, `status`, `addeddate`, `modifieddate`) VALUES
(1, 'Tours and Adventures our awards ?', '<p><span style=\"color: rgb(83, 91, 95); font-family: Rubik, serif; font-size: 14px; letter-spacing: 0.42px; text-transform: capitalize;\">Travel is the movement of people between relatively distant geographical, and can involve travel by foot, bicycle, automobile.</span></p>', 1, '2025-05-28 11:24:36', '2025-05-28 11:25:19'),
(2, 'Romantic Sri Lanka Honeymoon ?', '<p><span style=\"color: rgb(83, 91, 95); font-family: Rubik, serif; font-size: 14px; letter-spacing: 0.42px; text-transform: capitalize;\">Travel is the movement of people between relatively distant geographical, and can involve travel by foot, bicycle, automobile.</span></p>', 1, '2025-05-28 11:27:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime DEFAULT NULL,
  `modifieddate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `name`, `slug`, `status`, `addeddate`, `modifieddate`) VALUES
(4, '68402c70a63ac.jpeg', 'Buddha Golden Temple', 'buddha-golden-temple', 1, '2025-06-04 16:52:24', NULL),
(5, '68402eba1fe83.jpeg', 'Paro Taktsang', 'paro-taktsang', 1, '2025-06-04 17:02:10', NULL),
(8, '684031fcd550a.jpeg', 'Thimphu', 'thimphu', 1, '2025-06-04 17:16:04', NULL),
(11, '684035433a286.jpeg', 'Punakha Suspension Bridge', 'punakha-suspension-bridge', 1, '2025-06-04 17:30:03', NULL),
(12, '684040725f475.jpeg', 'Visiting Place To Bhutan', 'visiting-place-to-bhutan', 1, '2025-06-04 18:17:46', NULL),
(13, '684041462df65.jpeg', 'West Sikkim Buddha park', 'west-sikkim-buddha-park', 1, '2025-06-04 18:21:18', NULL),
(14, '6840528a239fb.jpeg', 'Gangtok Tourism', 'gangtok-tourism', 1, '2025-06-04 19:34:58', NULL),
(16, '68405398cad2e.jpeg', 'North Sikkim', 'north-sikkim', 1, '2025-06-04 19:39:28', NULL),
(17, '68405cef7d049.jpeg', 'Tarey Bhir Namchi', 'tarey-bhir-namchi', 1, '2025-06-04 20:19:19', NULL),
(18, '684088fb8d4f0.jpeg', 'Batasia Loop Darjeeling', 'batasia-loop-darjeeling', 1, '2025-06-04 23:27:15', NULL),
(19, '6840892aa25a2.jpeg', 'Darjeeling meditation view', 'darjeeling-meditation-view', 1, '2025-06-04 23:28:02', NULL),
(20, '6840896129ed8.jpeg', 'Batasia Loop & War memorial', 'batasia-loop-war-memorial', 1, '2025-06-04 23:28:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `instagramgallery`
--

CREATE TABLE `instagramgallery` (
  `id` int(11) NOT NULL,
  `image` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime DEFAULT NULL,
  `modifieddate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instagramgallery`
--

INSERT INTO `instagramgallery` (`id`, `image`, `name`, `slug`, `status`, `addeddate`, `modifieddate`) VALUES
(6, '6840070c1cbdd.jpeg', NULL, NULL, 1, '2025-06-04 14:12:21', '2025-06-04 14:12:52'),
(7, '684007199ca96.jpeg', NULL, NULL, 1, '2025-06-04 14:13:05', NULL),
(9, '684053c26f50e.jpeg', NULL, NULL, 1, '2025-06-04 19:40:10', NULL),
(10, '684053ce0d4b6.jpeg', NULL, NULL, 1, '2025-06-04 19:40:22', NULL),
(12, '684053e279a90.jpeg', NULL, NULL, 1, '2025-06-04 19:40:42', NULL),
(14, '684053f8c531e.jpeg', NULL, NULL, 1, '2025-06-04 19:41:04', NULL),
(15, '68405404c30f1.jpeg', NULL, NULL, 1, '2025-06-04 19:41:16', NULL),
(17, '6840541c82a9b.jpeg', NULL, NULL, 1, '2025-06-04 19:41:40', NULL),
(18, '684054336a022.jpeg', NULL, NULL, 1, '2025-06-04 19:42:03', NULL);

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
  `type` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `destination_id` int(11) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `multiple_image_json` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `duration` text DEFAULT NULL,
  `price` text DEFAULT NULL,
  `cutprice` text DEFAULT NULL,
  `overview` blob DEFAULT NULL,
  `Itinerary` text DEFAULT NULL,
  `costdetails` text DEFAULT NULL,
  `faq` text DEFAULT NULL,
  `map` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `addeddate` datetime DEFAULT NULL,
  `modifieddate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `destination_id`, `image`, `multiple_image_json`, `name`, `slug`, `duration`, `price`, `cutprice`, `overview`, `Itinerary`, `costdetails`, `faq`, `map`, `status`, `addeddate`, `modifieddate`) VALUES
(1, 6, '1748345736_tour-package-3-5.png', '[\"1748345736_tour-package-3-1.png\",\"1748345736_tour-package-3-2.png\",\"1748345736_tour-package-3-3.png\",\"1748345736_tour-package-3-4.png\",\"1748345736_tour-package-3-5.png\"]', 'Tours and Adventures award', 'tours-and-adventures-award', '8', '1100', '1500', 0x3c70207374796c653d226d617267696e2d72696768743a203070783b206d617267696e2d626f74746f6d3a20313470783b206d617267696e2d6c6566743a203070783b20636f6c6f723a207267622838332c2039312c203935293b206c696e652d6865696768743a2032352e393270783b206c65747465722d73706163696e673a20302e3570783b20666f6e742d73697a653a20313670783b20746578742d7472616e73666f726d3a206361706974616c697a653b20666f6e742d66616d696c793a20527562696b2c2073657269663b223e3c62723e3c2f703e, NULL, '<div class=\"includes\" style=\"color: rgb(83, 91, 95); font-family: Rubik, serif; font-size: 14px;\"><h5 class=\"sub-title\" style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; font-weight: 400; line-height: 49.92px; color: rgb(20, 20, 20); font-size: 24px; font-family: \"Abril Fatface\", serif; text-transform: capitalize;\">The Cost Includes</h5><ul class=\"custom-ul\" style=\"padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; list-style-type: none;\"><li style=\"display: flex; align-items: center; gap: 8px; font-size: 16px; line-height: 25.92px; text-transform: capitalize; margin-bottom: 8px;\"><span class=\"fa-solid fa-circle-arrow-right\" style=\"-webkit-font-smoothing: antialiased; display: inline-block; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; font-variant-emoji: normal; line-height: 1; text-rendering: auto; font-family: \"Font Awesome 6 Pro\"; --fa: \"\\f0a9\"; --fa--fa: \"\\f0a9\\f0a9\"; font-weight: 900; color: rgb(67, 163, 45);\"></span>Trek to the world-famous Everest Base Camp</li><li style=\"display: flex; align-items: center; gap: 8px; font-size: 16px; line-height: 25.92px; text-transform: capitalize; margin-bottom: 8px;\"><span class=\"fa-solid fa-circle-arrow-right\" style=\"-webkit-font-smoothing: antialiased; display: inline-block; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; font-variant-emoji: normal; line-height: 1; text-rendering: auto; font-family: \"Font Awesome 6 Pro\"; --fa: \"\\f0a9\"; --fa--fa: \"\\f0a9\\f0a9\"; font-weight: 900; color: rgb(67, 163, 45);\"></span>Enjoy the amazing view of the Himalayas from Kala Patthar</li><li style=\"display: flex; align-items: center; gap: 8px; font-size: 16px; line-height: 25.92px; text-transform: capitalize; margin-bottom: 8px;\"><span class=\"fa-solid fa-circle-arrow-right\" style=\"-webkit-font-smoothing: antialiased; display: inline-block; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; font-variant-emoji: normal; line-height: 1; text-rendering: auto; font-family: \"Font Awesome 6 Pro\"; --fa: \"\\f0a9\"; --fa--fa: \"\\f0a9\\f0a9\"; font-weight: 900; color: rgb(67, 163, 45);\"></span>Travel through the Sherpa villages of Namche, Khumjung, Khunde, and Dingboche</li><li style=\"display: flex; align-items: center; gap: 8px; font-size: 16px; line-height: 25.92px; text-transform: capitalize; margin-bottom: 8px;\"><span class=\"fa-solid fa-circle-arrow-right\" style=\"-webkit-font-smoothing: antialiased; display: inline-block; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; font-variant-emoji: normal; line-height: 1; text-rendering: auto; font-family: \"Font Awesome 6 Pro\"; --fa: \"\\f0a9\"; --fa--fa: \"\\f0a9\\f0a9\"; font-weight: 900; color: rgb(67, 163, 45);\"></span>Trek to the world-famous Everest Base Camp</li><li style=\"display: flex; align-items: center; gap: 8px; font-size: 16px; line-height: 25.92px; text-transform: capitalize; margin-bottom: 8px;\"><span class=\"fa-solid fa-circle-arrow-right\" style=\"-webkit-font-smoothing: antialiased; display: inline-block; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; font-variant-emoji: normal; line-height: 1; text-rendering: auto; font-family: \"Font Awesome 6 Pro\"; --fa: \"\\f0a9\"; --fa--fa: \"\\f0a9\\f0a9\"; font-weight: 900; color: rgb(67, 163, 45);\"></span>Enjoy the amazing view of the Himalayas from Kala Patthar</li><li style=\"display: flex; align-items: center; gap: 8px; font-size: 16px; line-height: 25.92px; text-transform: capitalize;\"><span class=\"fa-solid fa-circle-arrow-right\" style=\"-webkit-font-smoothing: antialiased; display: inline-block; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; font-variant-emoji: normal; line-height: 1; text-rendering: auto; font-family: \"Font Awesome 6 Pro\"; --fa: \"\\f0a9\"; --fa--fa: \"\\f0a9\\f0a9\"; font-weight: 900; color: rgb(67, 163, 45);\"></span>Travel through the Sherpa villages of Namche, Khumjung, Khunde, and Dingboche</li></ul></div><div class=\"excludes\" style=\"color: rgb(83, 91, 95); font-family: Rubik, serif; font-size: 14px;\"><h5 class=\"sub-title\" style=\"margin: 20px 0px 15px; font-weight: 400; line-height: 49.92px; color: rgb(20, 20, 20); font-size: 24px; font-family: \"Abril Fatface\", serif; text-transform: capitalize;\">The Cost Excludes</h5><ul class=\"custom-ul\" style=\"padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; list-style-type: none;\"><li style=\"display: flex; align-items: center; gap: 8px; font-size: 16px; line-height: 25.92px; text-transform: capitalize; margin-bottom: 8px;\"><span class=\"fa-solid fa-circle-arrow-right\" style=\"-webkit-font-smoothing: antialiased; display: inline-block; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; font-variant-emoji: normal; line-height: 1; text-rendering: auto; font-family: \"Font Awesome 6 Pro\"; --fa: \"\\f0a9\"; --fa--fa: \"\\f0a9\\f0a9\"; font-weight: 900; color: rgb(216, 8, 8);\"></span>Trek to the world-famous Everest Base Camp</li><li style=\"display: flex; align-items: center; gap: 8px; font-size: 16px; line-height: 25.92px; text-transform: capitalize; margin-bottom: 8px;\"><span class=\"fa-solid fa-circle-arrow-right\" style=\"-webkit-font-smoothing: antialiased; display: inline-block; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; font-variant-emoji: normal; line-height: 1; text-rendering: auto; font-family: \"Font Awesome 6 Pro\"; --fa: \"\\f0a9\"; --fa--fa: \"\\f0a9\\f0a9\"; font-weight: 900; color: rgb(216, 8, 8);\"></span>Enjoy the amazing view of the Himalayas from Kala Patthar</li><li style=\"display: flex; align-items: center; gap: 8px; font-size: 16px; line-height: 25.92px; text-transform: capitalize; margin-bottom: 8px;\"><span class=\"fa-solid fa-circle-arrow-right\" style=\"-webkit-font-smoothing: antialiased; display: inline-block; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; font-variant-emoji: normal; line-height: 1; text-rendering: auto; font-family: \"Font Awesome 6 Pro\"; --fa: \"\\f0a9\"; --fa--fa: \"\\f0a9\\f0a9\"; font-weight: 900; color: rgb(216, 8, 8);\"></span>Travel through the Sherpa villages of Namche, Khumjung, Khunde, and Dingboche</li><li style=\"display: flex; align-items: center; gap: 8px; font-size: 16px; line-height: 25.92px; text-transform: capitalize; margin-bottom: 8px;\"><span class=\"fa-solid fa-circle-arrow-right\" style=\"-webkit-font-smoothing: antialiased; display: inline-block; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; font-variant-emoji: normal; line-height: 1; text-rendering: auto; font-family: \"Font Awesome 6 Pro\"; --fa: \"\\f0a9\"; --fa--fa: \"\\f0a9\\f0a9\"; font-weight: 900; color: rgb(216, 8, 8);\"></span>Trek to the world-famous Everest Base Camp</li><li style=\"display: flex; align-items: center; gap: 8px; font-size: 16px; line-height: 25.92px; text-transform: capitalize; margin-bottom: 8px;\"><span class=\"fa-solid fa-circle-arrow-right\" style=\"-webkit-font-smoothing: antialiased; display: inline-block; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; font-variant-emoji: normal; line-height: 1; text-rendering: auto; font-family: \"Font Awesome 6 Pro\"; --fa: \"\\f0a9\"; --fa--fa: \"\\f0a9\\f0a9\"; font-weight: 900; color: rgb(216, 8, 8);\"></span>Enjoy the amazing view of the Himalayas from Kala Patthar</li><li style=\"display: flex; align-items: center; gap: 8px; font-size: 16px; line-height: 25.92px; text-transform: capitalize;\"><span class=\"fa-solid fa-circle-arrow-right\" style=\"-webkit-font-smoothing: antialiased; display: inline-block; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; font-variant-emoji: normal; line-height: 1; text-rendering: auto; font-family: \"Font Awesome 6 Pro\"; --fa: \"\\f0a9\"; --fa--fa: \"\\f0a9\\f0a9\"; font-weight: 900; color: rgb(216, 8, 8);\"></span>Travel through the Sherpa villages of Namche, Khumjung, Khunde, and Dingboche</li></ul></div>', NULL, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30767295.116023116!2d60.946027684017714!3d19.722272265144735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1713167102172!5m2!1sen!2sin\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1, '2025-05-27 13:26:44', '2025-06-04 16:19:36'),
(2, 5, '684025595f741.jpeg', NULL, 'Tours', 'tours', '7', '20000', '20000', NULL, '[{\"itinerary_title\":null,\"itinerary_content\":null}]', NULL, '[{\"faq_question\":null,\"faq_answere\":null}]', NULL, 1, '2025-06-04 16:22:09', NULL),
(3, 8, '1749115163_IMG_0302.jpeg', '[\"1749115163_IMG_0302.jpeg\"]', 'Beautiful Bhutan, Phuentsholing,Thimpu,Paro', 'beautiful-bhutan-phuentsholingthimpuparo', '5 Nights/6Days', '29999/-', '34999/-', NULL, '[{\"itinerary_title\":null,\"itinerary_content\":null}]', NULL, '[{\"faq_question\":null,\"faq_answere\":null}]', NULL, 1, '2025-06-04 17:41:02', '2025-06-06 01:20:10');

-- --------------------------------------------------------

--
-- Table structure for table `packagedirectenquiry`
--

CREATE TABLE `packagedirectenquiry` (
  `id` int(11) NOT NULL,
  `selected_name` text DEFAULT NULL,
  `selected_price` text DEFAULT NULL,
  `selected_duration` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `mobile` text DEFAULT NULL,
  `message` text DEFAULT NULL,
  `addeddate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packagedirectenquiry`
--

INSERT INTO `packagedirectenquiry` (`id`, `selected_name`, `selected_price`, `selected_duration`, `name`, `email`, `mobile`, `message`, `addeddate`) VALUES
(4, 'Tours', '20000', '7', 'Spiderman', 'Rahuljain@gmail.com', '12346456546', 'test', '2025-06-04 17:27:08'),
(5, 'Tours', '20000', '7', 'muskan', NULL, '9564425673', 'destination', '2025-06-04 17:45:38'),
(6, 'Tours', '20000', '7', 'muskan', NULL, '9564425673', 'itenary', '2025-06-04 17:49:27'),
(7, 'Toursss', '8000', '5', 'test', 'test@gmail.com', '12346456546', 'test', '2025-06-04 17:50:39'),
(8, 'Toursss', '8000', '5', 'Youbraj Pradhan', 'youbrajshrestha58@gmail.com', '8597285754', 'Enquiry about to visit bhutan', '2025-06-04 18:07:08');

-- --------------------------------------------------------

--
-- Table structure for table `packageenquiry`
--

CREATE TABLE `packageenquiry` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `mobile` text DEFAULT NULL,
  `subject` text DEFAULT NULL,
  `message` text DEFAULT NULL,
  `addeddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packageenquiry`
--

INSERT INTO `packageenquiry` (`id`, `name`, `email`, `mobile`, `subject`, `message`, `addeddate`) VALUES
(1, 'Azmal', 'wolverine@gmail.com', '12346456546', 'Tours and Adventures award', 'hiii', '2025-05-27 00:00:00'),
(2, 'Superman', 'Rahuljain@gmail.com', '9837123396', 'Tours and Adventures award', 'test', '2025-05-27 18:07:32');

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
  `role` int(11) NOT NULL COMMENT '1=hospital,2=physician,3=ambulance,4=pathlogy,5=user',
  `username` text NOT NULL,
  `slug` text NOT NULL,
  `mobile` text NOT NULL,
  `email` text NOT NULL,
  `dob` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `zipcode` text NOT NULL,
  `country` text NOT NULL,
  `password` text NOT NULL,
  `address` text NOT NULL,
  `opning_time` text NOT NULL,
  `overview` blob NOT NULL,
  `location` blob NOT NULL,
  `bussiness_hour` blob NOT NULL,
  `logo` text NOT NULL,
  `total_bed` text NOT NULL,
  `avaliable_bed` text NOT NULL,
  `image` text NOT NULL,
  `ambulance_status` float NOT NULL COMMENT '1=active,0=deactive',
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
  `name` text NOT NULL,
  `slug` text NOT NULL,
  `role_access` longtext NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`, `slug`, `role_access`, `status`, `addeddate`, `modifieddate`) VALUES
(1, 'HR TEAM', 'hr-team', '{\"main_access\":[\"0\",\"1\",\"2\",\"4\",\"5\"],\"inner_access\":[[\"3\"],[\"3\"],[\"3\"],[],[\"1\",\"2\",\"3\",\"4\"],[\"1\",\"2\",\"3\",\"4\"]]}', 1, '2024-07-30 13:20:06', '2024-07-31 13:01:40'),
(2, 'NATIONAL SALE MANAGER', 'national-sale-manager', '{\"main_access\":[\"2\"],\"inner_access\":[[],[],[\"3\",\"4\"]]}', 1, '2024-07-30 13:20:42', '2024-07-30 16:17:25'),
(3, 'MIS ADMIN', 'mis-admin', '{\"main_access\":[\"1\"],\"inner_access\":[[],[\"2\",\"3\"],[]]}', 1, '2024-07-30 13:20:54', '2024-07-30 16:17:21'),
(4, 'ACCOUNTS TEAM', 'accounts-team', '{\"main_access\":[\"0\"],\"inner_access\":[[\"2\",\"4\"],[],[]]}', 1, '2024-07-30 13:21:07', '2024-07-30 16:17:16'),
(5, 'PRODUCTION TEAM', 'production-team', '{\"main_access\":[\"0\",\"1\",\"2\"],\"inner_access\":[[\"1\",\"2\",\"3\",\"4\"],[\"1\",\"2\",\"3\",\"4\"],[\"1\",\"2\",\"3\",\"4\"]]}', 1, '2024-07-30 13:21:20', '2024-07-30 17:42:01'),
(7, 'test', 'test', '{\"main_access\":[\"0\",\"1\",\"2\",\"7\"],\"inner_access\":[[\"1\",\"3\"],[\"1\",\"2\",\"3\",\"4\"],[\"1\",\"2\",\"3\"],[],[],[],[],[\"3\"]]}', 1, '2024-07-30 17:44:07', '2024-08-20 13:08:46'),
(8, 'Azmal Ansari', 'azmal-ansari', '{\"main_access\":[\"0\",\"1\",\"2\",\"3\"],\"inner_access\":[[\"1\",\"2\",\"3\",\"4\"],[\"1\"],[\"4\"],[\"1\"],[],[]]}', 1, '2024-08-24 17:03:02', '2024-09-06 17:53:18');

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
('AgCsk1STfoun0H4l6fHg4g6DyKBVWYu7BGdtV8Dv', NULL, '223.184.140.58', 'Mozilla/5.0 (iPhone; CPU iPhone OS 18_5 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/18.5 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWUxvMW1LSXQwZnBiME94WFJkaGJ1dTNGTkJzT2RRYWVNbmRPRWI5dSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDg6Imh0dHBzOi8vZGlnaXRhbG5hbW8uY29tL2F6bWFsLzIwMjUvbWF5L3Yyam91cm5leSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1749471477),
('k5f3VorgUJzN4Of5BqDvkNyXGY2KTxqGqYDkkatR', NULL, '223.184.140.58', 'Mozilla/5.0 (iPhone; CPU iPhone OS 18_5 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/18.5 Mobile/15E148 Safari/604.1', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiQzY0ME5RYWs0UjMyOGNzMFlLU2lMRGVuMlVURnZMd3J4d3U1b3RhZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NzE6Imh0dHBzOi8vZGlnaXRhbG5hbW8uY29tL2F6bWFsLzIwMjUvbWF5L3Yyam91cm5leS9hZG1pbi9pbnN0YWdyYW1nYWxsZXJ5Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo4OiJhZG1pbl9pZCI7aToyO3M6MTQ6ImFkbWluX3VzZXJuYW1lIjtzOjU6ImFkbWluIjtzOjEwOiJhZG1pbl9uYW1lIjtzOjU6IkFkbWluIjt9', 1749471634),
('R9CB7RZK5FIylLTPnf4q5expkrbWydL5Egeqqwl0', NULL, '150.129.66.253', 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_7_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.8.1 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibVZabnZZUVJuQVVzMjVRcjlrZFdpbjVsaDRWWm9WY2lZMUg5R2NPWSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTQ6Imh0dHBzOi8vZGlnaXRhbG5hbW8uY29tL2F6bWFsLzIwMjUvbWF5L3Yyam91cm5leS9hYm91dCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1749475981),
('S3xNu7MvKRoUnhHkZqkWKSuWyrCEmjhfumMVrMm5', NULL, '150.129.66.253', 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_7_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.8.1 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNWtXRjh6djM5NERwSHBjbzNMTlpQREp1b3RrenJ2dFNFNUFiM3FlciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDg6Imh0dHBzOi8vZGlnaXRhbG5hbW8uY29tL2F6bWFsLzIwMjUvbWF5L3Yyam91cm5leSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1749529554),
('Wn5YTli4J4NGGtnkOIp3DxZF201gfWLIdwIOgh53', NULL, '150.129.66.162', 'Mozilla/5.0 (iPhone; CPU iPhone OS 18_5 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/15E148', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiU2tsSkxPTjZVdUpYSnVtaEZNeFY5cEhYM3BnaWlndGlOMWNNNGx0SCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDg6Imh0dHBzOi8vZGlnaXRhbG5hbW8uY29tL2F6bWFsLzIwMjUvbWF5L3Yyam91cm5leSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1749483683),
('x79QDtpSH3pwaNYIdBeUfboy743VQraNdRSuIovm', NULL, '150.129.66.162', 'Mozilla/5.0 (iPhone; CPU iPhone OS 18_5 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/15E148', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiblFFU2c1ZFhCRjBhVE1xQnRwWDRVbkpUSFJHcjY0WlE4VHdxMmNINSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDg6Imh0dHBzOi8vZGlnaXRhbG5hbW8uY29tL2F6bWFsLzIwMjUvbWF5L3Yyam91cm5leSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1749483730);

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
(1, '6834630768528.png', '7602333047', '7602333047', 'V2journey11@gmail.com', 'altemail@gmail.com', 'Mangalbarey chowpati Jaigoan alipurduar 736182 west Bengal', 'https://www.facebook.com', 'https://twitter.com', 'https://www.instagram.com/v2.journey?igsh=MTZta2dnb3h2aGZrdg==', 'https://www.youtube.com', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30767295.116023116!2d60.946027684017714!3d19.722272265144735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1713167102172!5m2!1sen!2sin\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>');

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

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `sub_title`, `slug`, `image`, `content`, `status`, `addeddate`, `modifieddate`) VALUES
(40, 'ad asdad', 'sa dasd', 'ad-asdad', '675945d6b75c6.png', '<p>d asdad</p>', 1, '2024-12-11 13:27:10', '2024-12-12 18:43:03');

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
(2, 1, 0, '', 'Admin', NULL, 'admin', 'admin', 'admin123@gmail.com', '95822980123', 'India', '675442c5d265d.png', 'male', '01/01/2022', 'single', '22', 'india', 'delhi', '6ef5a86a72d307d9d2df14306a26534f64236ca1887fb9ba0cff55e6e0a26390', '2024-08-30 13:34:00', 1, NULL, NULL),
(3, 1, 0, '', 'Wolverine', 'logen', 'azmal', 'azmal', 'wolverine@gmail.com', '897989', 'sfsfsdf sdefdsfs fsdf sdf', '6834631505af4.png', 'male', '01/01/2022', 'single', '22', 'india', 'delhi', NULL, NULL, 1, NULL, NULL),
(4, 2, 8, '{\"main_access\":[\"0\",\"1\",\"2\",\"3\"],\"inner_access\":[[\"1\",\"2\",\"3\",\"4\"],[\"1\"],[\"4\"],[\"1\"],[],[]]}', '', '', 'azmal12345', 'azmal12345', '', '', '', '', '', '', '', '', '', '', NULL, NULL, 1, '2024-08-24 17:23:45', '2024-11-13 15:44:20');

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
(2, '6759696624865.png', 'Arman Ansari', 'arman-ansari', 'Client', 'From Towering Waterfalls To Dreamy Cloud Forests, Ecuador Is Where Mother Nature Did Some Of Her Best Work.', 1, '2024-12-11 15:56:37', '2025-05-27 18:26:08'),
(3, '6835b681cb3d3.png', 'Azmal Ansari', 'azmal-ansari', 'Client', 'From Towering Waterfalls To Dreamy Cloud Forests, Ecuador Is Where Mother Nature Did Some Of Her Best Work.', 1, '2025-05-27 18:26:33', NULL);

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
-- Indexes for table `destination`
--
ALTER TABLE `destination`
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
-- Indexes for table `instagramgallery`
--
ALTER TABLE `instagramgallery`
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
-- Indexes for table `packagedirectenquiry`
--
ALTER TABLE `packagedirectenquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packageenquiry`
--
ALTER TABLE `packageenquiry`
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `instagramgallery`
--
ALTER TABLE `instagramgallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `meta_tags`
--
ALTER TABLE `meta_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `multipleimage`
--
ALTER TABLE `multipleimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `packagedirectenquiry`
--
ALTER TABLE `packagedirectenquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `packageenquiry`
--
ALTER TABLE `packageenquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `slugs`
--
ALTER TABLE `slugs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=293;

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
