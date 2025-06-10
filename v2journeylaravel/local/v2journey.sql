-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2025 at 09:04 AM
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
-- Database: `v2journey`
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

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `mobile`, `subject`, `message`, `addeddate`) VALUES
(1, 'Wolverine Name', 'wol1@gmail.com', '123456789', 'Test', 'teste ete st', '2024-08-24 14:18:28'),
(27, 'Spiderman', 'wolverine@gmail.com', '12346456546', 'Enquiry', 'test', '2025-05-28 11:47:53');

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
(1, 'About Us', 0x3c64697620636c6173733d227469746c652d6172656122207374796c653d226d617267696e2d626f74746f6d3a20363070783b20636f6c6f723a207267622838332c2039312c203935293b20666f6e742d66616d696c793a20527562696b2c2073657269663b20666f6e742d73697a653a20313470783b223e3c7370616e20636c6173733d227365632d7375627469746c6520746578742d6361706974616c697a6522207374796c653d22746578742d7472616e73666f726d3a207570706572636173653b20646973706c61793a20626c6f636b3b20636f6c6f723a20726762283235342c20302c2030293b20666f6e742d73697a653a20313870783b20666f6e742d7765696768743a203730303b206d617267696e3a203070782030707820313870783b223e4578706c6f7265206f757220747269703c2f7370616e3e3c683220636c6173733d227365632d7469746c6522207374796c653d226d617267696e2d72696768743a203070783b206d617267696e2d626f74746f6d3a203070783b206d617267696e2d6c6566743a203070783b20666f6e742d7765696768743a203430303b206c696e652d6865696768743a2035342e3970783b20636f6c6f723a207267622832302c2032302c203230293b20666f6e742d73697a653a20343570783b20666f6e742d66616d696c793a202671756f743b416272696c20466174666163652671756f743b2c2073657269663b20746578742d7472616e73666f726d3a206361706974616c697a653b223e446973636f766572206c757875727920746f757220746861696c616e643c2f68323e3c2f6469763e3c64697620636c6173733d2261626f75742d696e666f22207374796c653d22666f6e742d73697a653a20313670783b206c696e652d6865696768743a2032352e393270783b206c65747465722d73706163696e673a20302e333270783b20746578742d7472616e73666f726d3a206361706974616c697a653b20636f6c6f723a207267622838332c2039312c203935293b20666f6e742d66616d696c793a20527562696b2c2073657269663b223e3c70207374796c653d226d617267696e2d72696768743a203070783b206d617267696e2d626f74746f6d3a203070783b206d617267696e2d6c6566743a203070783b206c696e652d6865696768743a20312e36333b206c65747465722d73706163696e673a20302e3570783b206d61782d77696474683a20313030253b223e426c69656e756d206e6861656472756d20746f72717561746f73206e65632065756c2c20766973206465747261786974207065726963756c69732065786e6968696c20697320696e206d65692e2058656920616e207065726963756c617520726970696469732c2066696e636172746520446c69656e756d20706861656420697320746f757273206861636b206d646569204c65692068696e63617274656d2065696573742e3c2f703e3c64697620636c6173733d2273657276696365732d6c6973747322207374796c653d226d617267696e2d746f703a20323870783b206d617267696e2d626f74746f6d3a20343270783b223e3c756c20636c6173733d22637573746f6d2d756c22207374796c653d2270616464696e673a203070783b206d617267696e2d72696768743a203070783b206d617267696e2d626f74746f6d3a203070783b206d617267696e2d6c6566743a203070783b206c6973742d7374796c652d747970653a206e6f6e653b223e3c6c69207374796c653d22646973706c61793a20666c65783b20616c69676e2d6974656d733a2063656e7465723b206761703a203870783b206d617267696e2d626f74746f6d3a20313070783b223e3c73766720786d6c6e733d22687474703a2f2f7777772e77332e6f72672f323030302f737667222077696474683d22313822206865696768743d223136222076696577426f783d22302030203138203136222066696c6c3d226e6f6e65223e3c7061746820643d224d372e39393934392031352e3732343743372e39343634342031352e3732343720372e38393339362031352e3731333720372e38343533362031352e3639323443372e37393637352031352e3637313220372e37353330382031352e3634303120372e37313730372031352e363031314c302e31303231383420372e333633393943302e3035313432303920372e333039303720302e3031373736383420372e323430353520302e303035333434373920372e3136363831432d302e3030373037383820372e303933303620302e303032323635333920372e3031373320302e3033323233333920362e393438373843302e3036323230323320362e383830323620302e31313134393520362e383231393720302e31373430373920362e373831303443302e32333636363320362e3734303120302e33303938323420362e3731383320302e33383436303720362e373138323948342e303439393943342e313035303220362e3731383320342e313539343220362e373330313120342e3230393520362e373532393343342e323539353820362e373735373520342e333034313820362e383039303420342e3334303320362e38353035364c362e383835323220392e373738343143372e313630323620392e313930343920372e363932363820382e323131353620382e363236393920372e30313837324331302e3030383220352e32353532362031322e3537373420322e36363137362031362e3937323920302e3332303532354331372e3035373920302e3237353238332031372e3135363720302e3236333534322031372e3234393920302e3238373631384331372e3334333120302e3331313639342031372e3432333920302e3336393833382031372e3437363320302e3435303536394331372e3532383720302e3533313330312031372e3534383920302e36323837352031372e35333320302e3732333637354331372e3531373120302e383138362031372e3436363120302e3930343130312031372e3339303220302e3936333239344331372e3337333520302e39373634312031352e3637383720322e33313130332031332e3732383220342e373535364331312e3933333120372e303035323220392e35343639312031302e3638333720382e33373237322031352e3433323543382e333532312031352e35313620382e33303431322031352e3539303120382e32333634352031352e3634333143382e31363837382031352e36393620382e30383533322031352e3732343820372e39393933382031352e373234384c372e39393934392031352e373234375a222066696c6c3d2263757272656e74436f6c6f72223e3c2f706174683e3c2f7376673e566965746e616d20696e636c756465207669736974733c2f6c693e3c6c69207374796c653d22646973706c61793a20666c65783b20616c69676e2d6974656d733a2063656e7465723b206761703a203870783b206d617267696e2d626f74746f6d3a20313070783b223e3c73766720786d6c6e733d22687474703a2f2f7777772e77332e6f72672f323030302f737667222077696474683d22313822206865696768743d223136222076696577426f783d22302030203138203136222066696c6c3d226e6f6e65223e3c7061746820643d224d372e39393934392031352e3732343743372e39343634342031352e3732343720372e38393339362031352e3731333720372e38343533362031352e3639323443372e37393637352031352e3637313220372e37353330382031352e3634303120372e37313730372031352e363031314c302e31303231383420372e333633393943302e3035313432303920372e333039303720302e3031373736383420372e323430353520302e303035333434373920372e3136363831432d302e3030373037383820372e303933303620302e303032323635333920372e3031373320302e3033323233333920362e393438373843302e3036323230323320362e383830323620302e31313134393520362e383231393720302e31373430373920362e373831303443302e32333636363320362e3734303120302e33303938323420362e3731383320302e33383436303720362e373138323948342e303439393943342e313035303220362e3731383320342e313539343220362e373330313120342e3230393520362e373532393343342e323539353820362e373735373520342e333034313820362e383039303420342e3334303320362e38353035364c362e383835323220392e373738343143372e313630323620392e313930343920372e363932363820382e323131353620382e363236393920372e30313837324331302e3030383220352e32353532362031322e3537373420322e36363137362031362e3937323920302e3332303532354331372e3035373920302e3237353238332031372e3135363720302e3236333534322031372e3234393920302e3238373631384331372e3334333120302e3331313639342031372e3432333920302e3336393833382031372e3437363320302e3435303536394331372e3532383720302e3533313330312031372e3534383920302e36323837352031372e35333320302e3732333637354331372e3531373120302e383138362031372e3436363120302e3930343130312031372e3339303220302e3936333239344331372e3337333520302e39373634312031352e3637383720322e33313130332031332e3732383220342e373535364331312e3933333120372e303035323220392e35343639312031302e3638333720382e33373237322031352e3433323543382e333532312031352e35313620382e33303431322031352e3539303120382e32333634352031352e3634333143382e31363837382031352e36393620382e30383533322031352e3732343820372e39393933382031352e373234384c372e39393934392031352e373234375a222066696c6c3d2263757272656e74436f6c6f72223e3c2f706174683e3c2f7376673e446973636f76657220556c74696d6174652054726176656c204861636b3c2f6c693e3c6c69207374796c653d22646973706c61793a20666c65783b20616c69676e2d6974656d733a2063656e7465723b206761703a203870783b223e3c73766720786d6c6e733d22687474703a2f2f7777772e77332e6f72672f323030302f737667222077696474683d22313822206865696768743d223136222076696577426f783d22302030203138203136222066696c6c3d226e6f6e65223e3c7061746820643d224d372e39393934392031352e3732343743372e39343634342031352e3732343720372e38393339362031352e3731333720372e38343533362031352e3639323443372e37393637352031352e3637313220372e37353330382031352e3634303120372e37313730372031352e363031314c302e31303231383420372e333633393943302e3035313432303920372e333039303720302e3031373736383420372e323430353520302e303035333434373920372e3136363831432d302e3030373037383820372e303933303620302e303032323635333920372e3031373320302e3033323233333920362e393438373843302e3036323230323320362e383830323620302e31313134393520362e383231393720302e31373430373920362e373831303443302e32333636363320362e3734303120302e33303938323420362e3731383320302e33383436303720362e373138323948342e303439393943342e313035303220362e3731383320342e313539343220362e373330313120342e3230393520362e373532393343342e323539353820362e373735373520342e333034313820362e383039303420342e3334303320362e38353035364c362e383835323220392e373738343143372e313630323620392e313930343920372e363932363820382e323131353620382e363236393920372e30313837324331302e3030383220352e32353532362031322e3537373420322e36363137362031362e3937323920302e3332303532354331372e3035373920302e3237353238332031372e3135363720302e3236333534322031372e3234393920302e3238373631384331372e3334333120302e3331313639342031372e3432333920302e3336393833382031372e3437363320302e3435303536394331372e3532383720302e3533313330312031372e3534383920302e36323837352031372e35333320302e3732333637354331372e3531373120302e383138362031372e3436363120302e3930343130312031372e3339303220302e3936333239344331372e3337333520302e39373634312031352e3637383720322e33313130332031332e3732383220342e373535364331312e3933333120372e303035323220392e35343639312031302e3638333720382e33373237322031352e3433323543382e333532312031352e35313620382e33303431322031352e3539303120382e32333634352031352e3634333143382e31363837382031352e36393620382e30383533322031352e3732343820372e39393933382031352e373234384c372e39393934392031352e373234375a222066696c6c3d2263757272656e74436f6c6f72223e3c2f706174683e3c2f7376673e73656375726520616e6420666c657869626c65207061796d656e74206f7074696f6e733c2f6c693e3c2f756c3e3c2f6469763e3c2f6469763e),
(2, 'Privacy Policy', 0x3c703e707274697661637920706f6f6c6963793c2f703e),
(3, 'Terms & Conditions', 0x3c703e746572746d20636f6e646974696f6e3c2f703e);

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `id` int(11) NOT NULL,
  `image` text DEFAULT NULL,
  `name` text NOT NULL,
  `slug` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime DEFAULT NULL,
  `modifieddate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`id`, `image`, `name`, `slug`, `status`, `addeddate`, `modifieddate`) VALUES
(1, '68355d2c29aba.png', 'Tokyo City', 'tokyo-city', 1, '2025-05-27 12:05:24', '2025-05-27 12:07:01'),
(2, '68355db6ecb3a.png', 'thailand trip', 'thailand-trip', 1, '2025-05-27 12:07:42', NULL),
(3, '68355dd85ea57.jpg', 'Spain', 'spain', 1, '2025-05-27 12:08:16', NULL),
(4, '68355e0539225.jpg', 'New Zeland', 'new-zeland', 1, '2025-05-27 12:08:53', '2025-05-27 12:09:01');

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
(1, '6836a0402012a.png', 'Name', 'name', 1, '2025-05-28 11:03:52', NULL),
(2, '6836a04c035a2.png', 'Name 21', 'name-21', 1, '2025-05-28 11:04:04', '2025-05-28 11:04:09'),
(3, '6836a05e23f7a.png', 'Spiderman', 'spiderman', 1, '2025-05-28 11:04:22', NULL);

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
(1, '6836a0402012a.png', 'Name', 'name', 1, '2025-05-28 11:03:52', '2025-05-28 11:16:16'),
(2, '6836a04c035a2.png', 'Name 21', 'name-21', 1, '2025-05-28 11:04:04', '2025-05-28 11:04:09'),
(3, '6836a05e23f7a.png', 'Spiderman', 'spiderman', 1, '2025-05-28 11:04:22', NULL),
(4, '6836a3db57d05.png', NULL, NULL, 1, '2025-05-28 11:19:15', NULL),
(5, '6836a3f16d400.png', NULL, NULL, 1, '2025-05-28 11:19:37', NULL);

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
(1, 2, '1748345736_tour-package-3-5.png', '[\"1748345736_tour-package-3-1.png\",\"1748345736_tour-package-3-2.png\",\"1748345736_tour-package-3-3.png\",\"1748345736_tour-package-3-4.png\",\"1748345736_tour-package-3-5.png\"]', 'Tours and Adventures award', 'tours-and-adventures-award', '8', '1100', '1500', 0x3c70207374796c653d226d617267696e2d72696768743a203070783b206d617267696e2d626f74746f6d3a20313470783b206d617267696e2d6c6566743a203070783b20636f6c6f723a207267622838332c2039312c203935293b206c696e652d6865696768743a2032352e393270783b206c65747465722d73706163696e673a20302e3570783b20666f6e742d73697a653a20313670783b20746578742d7472616e73666f726d3a206361706974616c697a653b20666f6e742d66616d696c793a20527562696b2c2073657269663b223e5261696e626f77e2809973206869676820746563686e67792073797374656d732077697468207468652068656c70206f662072656f76696e6720756e7365656e206475736f7468746c73206d69796f7574657320616e642062656420627573206861726d66756c6c792064697365617365732062656361757365206f6620646972746572732e205468697320616c736f20696e636c7564657320686167696720686f6d6520626573206c696e656e732073686172652070726f7669642064697367207370656369616c697a6564206465657020756e7365656e20756e7365656e206563686e6779206d6974657320636c69656e742e3c2f703e3c70207374796c653d226d617267696e2d72696768743a203070783b206d617267696e2d626f74746f6d3a20313470783b206d617267696e2d6c6566743a203070783b20636f6c6f723a207267622838332c2039312c203935293b206c696e652d6865696768743a2032352e393270783b206c65747465722d73706163696e673a20302e3570783b20666f6e742d73697a653a20313670783b20746578742d7472616e73666f726d3a206361706974616c697a653b20666f6e742d66616d696c793a20527562696b2c2073657269663b223e4461696e626f77e2809973206869676820746563686e67792073797374656d732077697468207468652068656c70206f662072656f76696e6720756e7365656e206475736f7468746c73206d69796f7574657320616e642062656420627573206861726d66756c6c792064697365617365732062656361757365206f6620646972746572732e205468697320616c736f20696e636c7564657320686167696720686f6d6520626573206c696e656e732073686172652070726f7669642064697367207370656369616c697a6564206465657020756e7365656e20756e7365656e206563686e6779206d6974657320636c69656e742e3c2f703e3c756c20636c6173733d22637573746f6d2d756c22207374796c653d2270616464696e673a203070783b206d617267696e2d72696768743a203070783b206d617267696e2d626f74746f6d3a203070783b206d617267696e2d6c6566743a203070783b206c6973742d7374796c652d747970653a206e6f6e653b20636f6c6f723a207267622838332c2039312c203935293b20666f6e742d66616d696c793a20527562696b2c2073657269663b20666f6e742d73697a653a20313470783b223e3c6c69207374796c653d22646973706c61793a20666c65783b20616c69676e2d6974656d733a2063656e7465723b206761703a203870783b20666f6e742d73697a653a20313670783b206c696e652d6865696768743a2032352e393270783b20746578742d7472616e73666f726d3a206361706974616c697a653b206d617267696e2d626f74746f6d3a203870783b223e3c7370616e20636c6173733d2266612d736f6c69642066612d636972636c652d6172726f772d726967687422207374796c653d222d7765626b69742d666f6e742d736d6f6f7468696e673a20616e7469616c69617365643b20646973706c61793a20696e6c696e652d626c6f636b3b20666f6e742d76617269616e742d6e756d657269633a206e6f726d616c3b20666f6e742d76617269616e742d656173742d617369616e3a206e6f726d616c3b20666f6e742d76617269616e742d616c7465726e617465733a206e6f726d616c3b20666f6e742d76617269616e742d706f736974696f6e3a206e6f726d616c3b20666f6e742d76617269616e742d656d6f6a693a206e6f726d616c3b206c696e652d6865696768743a20313b20746578742d72656e646572696e673a206175746f3b20666f6e742d66616d696c793a2022466f6e7420417765736f6d6520362050726f223b202d2d66613a20225c66306139223b202d2d66612d2d66613a20225c663061395c66306139223b20666f6e742d7765696768743a203930303b20636f6c6f723a20726762283235342c20302c2030293b223e3c2f7370616e3e56697369742074686520507972616d696473206f662047697a6120616e64207365653c2f6c693e3c6c69207374796c653d22646973706c61793a20666c65783b20616c69676e2d6974656d733a2063656e7465723b206761703a203870783b20666f6e742d73697a653a20313670783b206c696e652d6865696768743a2032352e393270783b20746578742d7472616e73666f726d3a206361706974616c697a653b206d617267696e2d626f74746f6d3a203870783b223e3c7370616e20636c6173733d2266612d736f6c69642066612d636972636c652d6172726f772d726967687422207374796c653d222d7765626b69742d666f6e742d736d6f6f7468696e673a20616e7469616c69617365643b20646973706c61793a20696e6c696e652d626c6f636b3b20666f6e742d76617269616e742d6e756d657269633a206e6f726d616c3b20666f6e742d76617269616e742d656173742d617369616e3a206e6f726d616c3b20666f6e742d76617269616e742d616c7465726e617465733a206e6f726d616c3b20666f6e742d76617269616e742d706f736974696f6e3a206e6f726d616c3b20666f6e742d76617269616e742d656d6f6a693a206e6f726d616c3b206c696e652d6865696768743a20313b20746578742d72656e646572696e673a206175746f3b20666f6e742d66616d696c793a2022466f6e7420417765736f6d6520362050726f223b202d2d66613a20225c66306139223b202d2d66612d2d66613a20225c663061395c66306139223b20666f6e742d7765696768743a203930303b20636f6c6f723a20726762283235342c20302c2030293b223e3c2f7370616e3e536565204761756469277320776f726b7320616e6420536167726164612046616dc3ad6c696120696e2042617263656c6f6e613c2f6c693e3c6c69207374796c653d22646973706c61793a20666c65783b20616c69676e2d6974656d733a2063656e7465723b206761703a203870783b20666f6e742d73697a653a20313670783b206c696e652d6865696768743a2032352e393270783b20746578742d7472616e73666f726d3a206361706974616c697a653b223e3c7370616e20636c6173733d2266612d736f6c69642066612d636972636c652d6172726f772d726967687422207374796c653d222d7765626b69742d666f6e742d736d6f6f7468696e673a20616e7469616c69617365643b20646973706c61793a20696e6c696e652d626c6f636b3b20666f6e742d76617269616e742d6e756d657269633a206e6f726d616c3b20666f6e742d76617269616e742d656173742d617369616e3a206e6f726d616c3b20666f6e742d76617269616e742d616c7465726e617465733a206e6f726d616c3b20666f6e742d76617269616e742d706f736974696f6e3a206e6f726d616c3b20666f6e742d76617269616e742d656d6f6a693a206e6f726d616c3b206c696e652d6865696768743a20313b20746578742d72656e646572696e673a206175746f3b20666f6e742d66616d696c793a2022466f6e7420417765736f6d6520362050726f223b202d2d66613a20225c66306139223b202d2d66612d2d66613a20225c663061395c66306139223b20666f6e742d7765696768743a203930303b20636f6c6f723a20726762283235342c20302c2030293b223e3c2f7370616e3e7265617420507972616d696473206f66204368656f70732c204368656672656e2c20616e64204d796b6572696e75732c20616c6f6e6773696465207468652077656c6c3c2f6c693e3c2f756c3e, '[{\"itinerary_title\":\"Day 01 : Drive to Nayapul and trek to Ulleri\",\"itinerary_content\":\"<p><span style=\\\"color: rgb(83, 91, 95); font-family: Rubik, serif; font-size: 14px; letter-spacing: 0.42px; text-transform: capitalize;\\\">Travel is movement of people between relatively distant geograp location, andca involve travels byfo, bicycle, autmobile, train, boat, bus, airplane, or other means, without luggage, and can be one way or round trip. Travel can also include successive.<\\/span><\\/p>\"},{\"itinerary_title\":\"Day 02 : Drive to Nayapul and trek to Ulleri\",\"itinerary_content\":\"<p><span style=\\\"color: rgb(83, 91, 95); font-family: Rubik, serif; font-size: 14px; letter-spacing: 0.42px; text-transform: capitalize;\\\">Travel is movement of people between relatively distant geograp location, andca involve travels byfo, bicycle, autmobile, train, boat, bus, airplane, or other means, without luggage, and can be one way or round trip. Travel can also include successive.<\\/span><\\/p>\"}]', '<div class=\"includes\" style=\"color: rgb(83, 91, 95); font-family: Rubik, serif; font-size: 14px;\"><h5 class=\"sub-title\" style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; font-weight: 400; line-height: 49.92px; color: rgb(20, 20, 20); font-size: 24px; font-family: \"Abril Fatface\", serif; text-transform: capitalize;\">The Cost Includes</h5><ul class=\"custom-ul\" style=\"padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; list-style-type: none;\"><li style=\"display: flex; align-items: center; gap: 8px; font-size: 16px; line-height: 25.92px; text-transform: capitalize; margin-bottom: 8px;\"><span class=\"fa-solid fa-circle-arrow-right\" style=\"-webkit-font-smoothing: antialiased; display: inline-block; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; font-variant-emoji: normal; line-height: 1; text-rendering: auto; font-family: \"Font Awesome 6 Pro\"; --fa: \"\\f0a9\"; --fa--fa: \"\\f0a9\\f0a9\"; font-weight: 900; color: rgb(67, 163, 45);\"></span>Trek to the world-famous Everest Base Camp</li><li style=\"display: flex; align-items: center; gap: 8px; font-size: 16px; line-height: 25.92px; text-transform: capitalize; margin-bottom: 8px;\"><span class=\"fa-solid fa-circle-arrow-right\" style=\"-webkit-font-smoothing: antialiased; display: inline-block; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; font-variant-emoji: normal; line-height: 1; text-rendering: auto; font-family: \"Font Awesome 6 Pro\"; --fa: \"\\f0a9\"; --fa--fa: \"\\f0a9\\f0a9\"; font-weight: 900; color: rgb(67, 163, 45);\"></span>Enjoy the amazing view of the Himalayas from Kala Patthar</li><li style=\"display: flex; align-items: center; gap: 8px; font-size: 16px; line-height: 25.92px; text-transform: capitalize; margin-bottom: 8px;\"><span class=\"fa-solid fa-circle-arrow-right\" style=\"-webkit-font-smoothing: antialiased; display: inline-block; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; font-variant-emoji: normal; line-height: 1; text-rendering: auto; font-family: \"Font Awesome 6 Pro\"; --fa: \"\\f0a9\"; --fa--fa: \"\\f0a9\\f0a9\"; font-weight: 900; color: rgb(67, 163, 45);\"></span>Travel through the Sherpa villages of Namche, Khumjung, Khunde, and Dingboche</li><li style=\"display: flex; align-items: center; gap: 8px; font-size: 16px; line-height: 25.92px; text-transform: capitalize; margin-bottom: 8px;\"><span class=\"fa-solid fa-circle-arrow-right\" style=\"-webkit-font-smoothing: antialiased; display: inline-block; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; font-variant-emoji: normal; line-height: 1; text-rendering: auto; font-family: \"Font Awesome 6 Pro\"; --fa: \"\\f0a9\"; --fa--fa: \"\\f0a9\\f0a9\"; font-weight: 900; color: rgb(67, 163, 45);\"></span>Trek to the world-famous Everest Base Camp</li><li style=\"display: flex; align-items: center; gap: 8px; font-size: 16px; line-height: 25.92px; text-transform: capitalize; margin-bottom: 8px;\"><span class=\"fa-solid fa-circle-arrow-right\" style=\"-webkit-font-smoothing: antialiased; display: inline-block; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; font-variant-emoji: normal; line-height: 1; text-rendering: auto; font-family: \"Font Awesome 6 Pro\"; --fa: \"\\f0a9\"; --fa--fa: \"\\f0a9\\f0a9\"; font-weight: 900; color: rgb(67, 163, 45);\"></span>Enjoy the amazing view of the Himalayas from Kala Patthar</li><li style=\"display: flex; align-items: center; gap: 8px; font-size: 16px; line-height: 25.92px; text-transform: capitalize;\"><span class=\"fa-solid fa-circle-arrow-right\" style=\"-webkit-font-smoothing: antialiased; display: inline-block; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; font-variant-emoji: normal; line-height: 1; text-rendering: auto; font-family: \"Font Awesome 6 Pro\"; --fa: \"\\f0a9\"; --fa--fa: \"\\f0a9\\f0a9\"; font-weight: 900; color: rgb(67, 163, 45);\"></span>Travel through the Sherpa villages of Namche, Khumjung, Khunde, and Dingboche</li></ul></div><div class=\"excludes\" style=\"color: rgb(83, 91, 95); font-family: Rubik, serif; font-size: 14px;\"><h5 class=\"sub-title\" style=\"margin: 20px 0px 15px; font-weight: 400; line-height: 49.92px; color: rgb(20, 20, 20); font-size: 24px; font-family: \"Abril Fatface\", serif; text-transform: capitalize;\">The Cost Excludes</h5><ul class=\"custom-ul\" style=\"padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; list-style-type: none;\"><li style=\"display: flex; align-items: center; gap: 8px; font-size: 16px; line-height: 25.92px; text-transform: capitalize; margin-bottom: 8px;\"><span class=\"fa-solid fa-circle-arrow-right\" style=\"-webkit-font-smoothing: antialiased; display: inline-block; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; font-variant-emoji: normal; line-height: 1; text-rendering: auto; font-family: \"Font Awesome 6 Pro\"; --fa: \"\\f0a9\"; --fa--fa: \"\\f0a9\\f0a9\"; font-weight: 900; color: rgb(216, 8, 8);\"></span>Trek to the world-famous Everest Base Camp</li><li style=\"display: flex; align-items: center; gap: 8px; font-size: 16px; line-height: 25.92px; text-transform: capitalize; margin-bottom: 8px;\"><span class=\"fa-solid fa-circle-arrow-right\" style=\"-webkit-font-smoothing: antialiased; display: inline-block; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; font-variant-emoji: normal; line-height: 1; text-rendering: auto; font-family: \"Font Awesome 6 Pro\"; --fa: \"\\f0a9\"; --fa--fa: \"\\f0a9\\f0a9\"; font-weight: 900; color: rgb(216, 8, 8);\"></span>Enjoy the amazing view of the Himalayas from Kala Patthar</li><li style=\"display: flex; align-items: center; gap: 8px; font-size: 16px; line-height: 25.92px; text-transform: capitalize; margin-bottom: 8px;\"><span class=\"fa-solid fa-circle-arrow-right\" style=\"-webkit-font-smoothing: antialiased; display: inline-block; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; font-variant-emoji: normal; line-height: 1; text-rendering: auto; font-family: \"Font Awesome 6 Pro\"; --fa: \"\\f0a9\"; --fa--fa: \"\\f0a9\\f0a9\"; font-weight: 900; color: rgb(216, 8, 8);\"></span>Travel through the Sherpa villages of Namche, Khumjung, Khunde, and Dingboche</li><li style=\"display: flex; align-items: center; gap: 8px; font-size: 16px; line-height: 25.92px; text-transform: capitalize; margin-bottom: 8px;\"><span class=\"fa-solid fa-circle-arrow-right\" style=\"-webkit-font-smoothing: antialiased; display: inline-block; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; font-variant-emoji: normal; line-height: 1; text-rendering: auto; font-family: \"Font Awesome 6 Pro\"; --fa: \"\\f0a9\"; --fa--fa: \"\\f0a9\\f0a9\"; font-weight: 900; color: rgb(216, 8, 8);\"></span>Trek to the world-famous Everest Base Camp</li><li style=\"display: flex; align-items: center; gap: 8px; font-size: 16px; line-height: 25.92px; text-transform: capitalize; margin-bottom: 8px;\"><span class=\"fa-solid fa-circle-arrow-right\" style=\"-webkit-font-smoothing: antialiased; display: inline-block; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; font-variant-emoji: normal; line-height: 1; text-rendering: auto; font-family: \"Font Awesome 6 Pro\"; --fa: \"\\f0a9\"; --fa--fa: \"\\f0a9\\f0a9\"; font-weight: 900; color: rgb(216, 8, 8);\"></span>Enjoy the amazing view of the Himalayas from Kala Patthar</li><li style=\"display: flex; align-items: center; gap: 8px; font-size: 16px; line-height: 25.92px; text-transform: capitalize;\"><span class=\"fa-solid fa-circle-arrow-right\" style=\"-webkit-font-smoothing: antialiased; display: inline-block; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; font-variant-emoji: normal; line-height: 1; text-rendering: auto; font-family: \"Font Awesome 6 Pro\"; --fa: \"\\f0a9\"; --fa--fa: \"\\f0a9\\f0a9\"; font-weight: 900; color: rgb(216, 8, 8);\"></span>Travel through the Sherpa villages of Namche, Khumjung, Khunde, and Dingboche</li></ul></div>', '[{\"faq_question\":\"How fit do I need to be to do this trek?\",\"faq_answere\":\"<p><span style=\\\"color: rgb(83, 91, 95); font-family: Rubik, serif; font-size: 14px; letter-spacing: 0.42px; text-transform: capitalize;\\\">Travel is movement of people between relatively distant geograp location, andca involve travels byfo, bicycle, autmobile, train, boat, bus, airplane, or other means, without luggage, and can be one way or round trip. Travel can also include successive.<\\/span><\\/p>\"},{\"faq_question\":\"How long do we walk every day when doing Annapurna Base Camp trekking?\",\"faq_answere\":\"<p><span style=\\\"color: rgb(83, 91, 95); font-family: Rubik, serif; font-size: 14px; letter-spacing: 0.42px; text-transform: capitalize;\\\">Travel is movement of people between relatively distant geograp location, andca involve travels byfo, bicycle, autmobile, train, boat, bus, airplane, or other means, without luggage, and can be one way or round trip. Travel can also include successive.<\\/span><\\/p>\"}]', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30767295.116023116!2d60.946027684017714!3d19.722272265144735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1713167102172!5m2!1sen!2sin\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1, '2025-05-27 13:26:44', '2025-05-27 17:47:47');

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
('92WQmBkOakasTaSZzIEUeK6VpwKaNOjJxpzEus7X', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUHB4YjNPemFra2t4bTNxaUJUMTVucE9WREk4ZGl3dGJWeDVmeVB6cCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly9sb2NhbGhvc3QvdjJqb3VybmV5bGFyYXZlbCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1748412866),
('V7Ja7pgccltlZrwdmbO3wfJ9IHR35FlZbtUAGVWu', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'YTo2OntzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo0ODoiaHR0cDovL2xvY2FsaG9zdC92MmpvdXJuZXlsYXJhdmVsL3Rlcm0tY29uZGl0aW9uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo2OiJfdG9rZW4iO3M6NDA6ImRtaGhRMjM2TjBEckcxWlZob08wYTNmQnE2bVlCR29tMWg1bzlMSHciO3M6ODoiYWRtaW5faWQiO2k6MztzOjE0OiJhZG1pbl91c2VybmFtZSI7czo1OiJhem1hbCI7czoxMDoiYWRtaW5fbmFtZSI7czo5OiJXb2x2ZXJpbmUiO30=', 1748415260);

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
(1, '6834630768528.png', '9856472360', '9586741023', 'email@gmail.com', 'altemail@gmail.com', 'your addressssss', 'https://www.facebook.com', 'https://twitter.com', 'https://www.instagram.com', 'https://www.youtube.com', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30767295.116023116!2d60.946027684017714!3d19.722272265144735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1713167102172!5m2!1sen!2sin\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `instagramgallery`
--
ALTER TABLE `instagramgallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
