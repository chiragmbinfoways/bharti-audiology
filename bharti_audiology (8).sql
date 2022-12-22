-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2022 at 10:21 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bharti_audiology`
--

-- --------------------------------------------------------

--
-- Table structure for table `actions`
--

CREATE TABLE `actions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `actions`
--

INSERT INTO `actions` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Create', 'create', '2022-10-17 02:49:03', '2022-10-17 02:49:03'),
(2, 'Read', 'read', '2022-10-17 02:49:03', '2022-10-17 02:49:03'),
(3, 'Update', 'update', '2022-10-17 02:49:03', '2022-10-17 02:49:03'),
(4, 'Delete', 'delete', '2022-10-17 02:49:03', '2022-10-17 02:49:03');

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(10, 'Bluetooth', 'bluetooth', '1', '2022-11-23 04:09:08', '2022-11-23 04:09:08'),
(11, 'Tv Play', 'tv-play', '1', '2022-11-23 04:09:43', '2022-11-23 04:09:43'),
(12, 'Battery', 'Battery', '1', '2022-11-23 04:10:42', '2022-11-23 04:10:42'),
(13, 'Colour', 'colour', '1', '2022-11-23 04:12:57', '2022-11-23 04:13:10'),
(14, 'Sits In Canal', 'sits-in-canal', '1', '2022-11-23 04:14:21', '2022-11-23 04:14:21'),
(15, 'Control', 'control', '1', '2022-11-23 04:14:47', '2022-11-23 04:14:47'),
(16, 'Warrenty', 'warrenty', '1', '2022-11-23 04:15:31', '2022-11-23 04:15:31'),
(17, 'Fitting Range', 'fitting-range', '1', '2022-11-23 04:16:26', '2022-11-23 04:16:26'),
(18, 'Channels', 'channels', '1', '2022-11-23 04:17:02', '2022-11-23 04:17:02');

-- --------------------------------------------------------

--
-- Table structure for table `attribute_values`
--

CREATE TABLE `attribute_values` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `attribute_id` bigint(20) UNSIGNED NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attribute_values`
--

INSERT INTO `attribute_values` (`id`, `attribute_id`, `value`, `created_at`, `updated_at`) VALUES
(21, 10, 'Yes', '2022-11-23 04:09:18', '2022-11-23 04:09:18'),
(22, 10, 'No', '2022-11-23 04:09:21', '2022-11-23 04:09:21'),
(23, 11, 'Compitable', '2022-11-23 04:10:11', '2022-11-23 04:10:11'),
(24, 11, 'Non-compitable', '2022-11-23 04:10:24', '2022-11-23 04:10:24'),
(25, 12, '312', '2022-11-23 04:10:53', '2022-11-23 04:10:53'),
(26, 12, '10', '2022-11-23 04:11:04', '2022-11-23 04:11:04'),
(27, 12, '13', '2022-11-23 04:11:09', '2022-11-23 04:11:09'),
(28, 12, 'Li-on', '2022-11-23 04:11:21', '2022-11-23 04:11:21'),
(29, 13, 'Red', '2022-11-23 04:13:21', '2022-11-23 04:13:21'),
(30, 13, 'Blue', '2022-11-23 04:13:28', '2022-11-23 04:13:28'),
(31, 13, 'Beige Shell', '2022-11-23 04:13:42', '2022-11-23 04:13:42'),
(32, 14, 'Yes', '2022-11-23 04:14:31', '2022-11-23 04:14:31'),
(33, 14, 'No', '2022-11-23 04:14:34', '2022-11-23 04:14:34'),
(34, 15, 'Push', '2022-11-23 04:15:03', '2022-11-23 04:15:03'),
(35, 15, 'Configureable', '2022-11-23 04:15:14', '2022-11-23 04:15:14'),
(36, 16, '4 Year', '2022-11-23 04:15:46', '2022-11-23 04:15:46'),
(37, 16, '2 Year', '2022-11-23 04:15:56', '2022-11-23 04:15:56'),
(39, 17, '10-110', '2022-11-23 04:16:39', '2022-11-23 04:16:39'),
(40, 17, '10-115', '2022-11-23 04:16:47', '2022-11-23 04:16:47'),
(41, 18, '48', '2022-11-23 04:17:13', '2022-11-23 04:17:13'),
(42, 18, '32', '2022-11-23 04:17:17', '2022-11-23 04:17:17'),
(43, 18, '24', '2022-11-23 04:17:19', '2022-11-23 04:17:19'),
(44, 18, '16', '2022-11-23 04:17:24', '2022-11-23 04:17:24'),
(45, 16, '1 Year', '2022-11-23 04:30:31', '2022-11-23 04:30:31');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brandLogo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coverImage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shortDescription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longDescription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metaTitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metaKeyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metaDescription` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `slug`, `brandLogo`, `coverImage`, `shortDescription`, `longDescription`, `metaTitle`, `metaKeyword`, `metaDescription`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Resound', 'resound', '1669187884.jpg', NULL, NULL, NULL, NULL, NULL, NULL, '1', '2022-11-04 04:23:31', '2022-11-23 01:48:04'),
(6, 'Oticon', 'oticon', '1669193099.png', '1669193104.png', NULL, NULL, NULL, NULL, NULL, '1', '2022-11-04 04:24:43', '2022-11-23 03:15:04'),
(7, 'Signia', 'signia', '1669192981.png', '1669192986.png', NULL, NULL, NULL, NULL, NULL, '1', '2022-11-04 04:26:13', '2022-11-23 03:13:06'),
(8, 'Widex', 'widex', '1669192769.png', '1669192822.png', NULL, NULL, NULL, NULL, NULL, '1', '2022-11-23 01:47:26', '2022-11-23 03:10:22');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shortDescription` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metaTitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metaKeyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metaDescription` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longDescription` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnailImage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iconImage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coverImage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`, `shortDescription`, `metaTitle`, `metaKeyword`, `metaDescription`, `longDescription`, `thumbnailImage`, `iconImage`, `coverImage`, `status`, `created_at`, `updated_at`) VALUES
(36, NULL, 'Invisible in canal (IIC)', 'The IIC hearing device Sit completely in your ear, so they won’t get tangled or pulled off when wearing or removing face masks. Custom-made you For mild to moderately severe hearing loss. i would suggest this hearing aid.', NULL, NULL, NULL, 'Built around the Widex Moment™ platform and the revolutionary PureSound™,  Moment Sheer sRIC R D  hearing aid is suitable for minimal to severe to profound hearing loss.', '1669477616.png', '1669477627.png', '1671001064.png', '1', '2022-11-23 03:24:33', '2022-12-14 01:27:44'),
(37, 36, 'IIC Rechargeable', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2022-11-23 03:24:40', '2022-11-23 03:24:40'),
(38, 36, 'IIC Non-rechargeable', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2022-11-23 03:24:45', '2022-11-23 03:24:45'),
(39, NULL, 'Complete In Canal (CIC)', 'Widex Moment Sheer sRIC R D is a direct streaming hearing aid and can be connected with 2.4 GHz Bluetooth connectivity to both iOS and Android devices, Widex TV Play and other DEX accessories.', NULL, NULL, NULL, 'The  Moment Sheer sRIC R D comes with a complete redesigned standard charger with premium materials and a refined finish.', '1669476540.png', '1669476547.png', '1671001083.png', '1', '2022-11-23 03:24:58', '2022-12-14 01:28:03'),
(40, 39, 'CIC Rechargeable', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2022-11-23 03:25:12', '2022-11-23 03:25:12'),
(41, 39, 'CIC Non-Rechargeable', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2022-11-23 03:26:19', '2022-11-23 03:26:19'),
(42, NULL, 'In The Canal (ITC)', 'The ItC hearing device Sit completely in your ear, so they won’t get tangled or pulled off when wearing or removing face masks. Custom-made you For mild to moderately severe hearing loss. i would suggest this hearing aid.', NULL, NULL, NULL, 'Discreet and powerful. Widex Moment BTE 13 D sits securely behind the ear, provides pure, natural sound with Widex PureSound™ powered by ZeroDelay™ and offers intelligent automation when you need it and personalized control when you want it. You can stream directly from iOS or DEX via the Widex Moment app and enjoy hours of entertainment or conversation.\r\n\r\nAvailable colors:', '1669476561.png', '1669476567.png', '1671001098.png', '1', '2022-11-23 03:26:33', '2022-12-14 01:28:18'),
(43, 42, 'ITC Rechargeable', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2022-11-23 03:27:26', '2022-11-23 03:27:26'),
(44, 42, 'ITC Non-Rechargeable', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2022-11-23 03:35:28', '2022-11-23 03:35:28'),
(45, NULL, 'Receiver In The Ear (RIE)', 'Widex Moment Sheer sRIC R D is most elegant receiver-in-canal (RIC) hearing aid and it is suitable for minimal to severe to profound hearing loss.', NULL, NULL, NULL, 'With the Widex Moment Sheer hearing aids, you have the option to fully control your hearing aid using the Widex Moment app on your Apple or Android smartphone*. It’s never been easier to fine-tune your hearing, so you get exactly the sound you prefer – in exactly the moments that are important to you.', '1669476591.png', '1669476597.png', '1671001113.png', '1', '2022-11-23 03:35:45', '2022-12-14 01:28:34'),
(46, 45, 'RIE Rechargeable', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2022-11-23 03:35:58', '2022-11-23 03:35:58'),
(47, 45, 'RIE Non-Rechargeable', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2022-11-23 03:36:07', '2022-11-23 03:36:07'),
(48, NULL, 'Behind The Ear (BTE)', 'The  Moment Sheer sRIC R D comes with a complete redesigned standard charger with premium materials and a refined finish.', NULL, NULL, NULL, 'Widex Moment Sheer sRIC R D is a direct streaming hearing aid and can be connected with 2.4 GHz Bluetooth connectivity to both iOS and Android devices, Widex TV Play and other DEX accessories.', '1669476614.png', '1669476620.png', '1671001127.png', '1', '2022-11-23 03:36:33', '2022-12-14 01:28:47'),
(49, 48, 'BTE Rechargeable', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2022-11-23 03:38:38', '2022-11-23 03:38:38'),
(50, 48, 'BTE Non-Rechargeable', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2022-11-23 03:38:45', '2022-11-23 03:38:45');

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`id`, `name`, `link`, `parent_id`, `status`, `created_at`, `updated_at`) VALUES
(19, 'Home', NULL, NULL, '1', '2022-11-08 03:47:19', '2022-12-15 13:24:24'),
(20, 'Hearing Aids', 'hearingAids', NULL, '1', '2022-11-08 03:47:58', '2022-11-09 07:57:46'),
(21, 'Hearing Loss', 'hearingLoss', NULL, '1', '2022-11-08 03:48:29', '2022-11-09 01:54:57'),
(22, 'Support & care', 'support', NULL, '1', '2022-11-08 03:49:15', '2022-11-09 03:16:00'),
(23, 'F & Q', 'faq', NULL, '1', '2022-11-08 03:49:42', '2022-11-09 01:54:44'),
(24, 'Invisible In Canal (IIC)', 'invisible', 20, '1', '2022-11-08 04:10:52', '2022-11-08 04:12:28'),
(25, 'Completely In Canal (CIC)', 'complete in canal', 20, '1', '2022-11-08 04:12:12', '2022-11-08 04:12:41'),
(26, 'In The Canal (ITC)', 'in the canal', 20, '1', '2022-11-08 04:13:37', '2022-11-08 04:13:37'),
(27, 'Receiver In The Ear (RIE)', 'receiver in the ear', 20, '1', '2022-11-08 04:14:37', '2022-11-08 04:14:37'),
(28, 'Behind The Ear (BTE)', 'behind the year', 20, '1', '2022-11-08 04:15:12', '2022-11-08 04:15:12'),
(29, 'contact Us', 'contact', NULL, '1', '2022-11-10 01:26:00', '2022-11-10 01:26:00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feature_products`
--

CREATE TABLE `feature_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feature_products`
--

INSERT INTO `feature_products` (`id`, `product_id`, `created_at`, `updated_at`) VALUES
(66, 90, '2022-11-23 04:29:01', '2022-11-23 04:29:01'),
(67, 91, '2022-11-23 04:35:11', '2022-11-23 04:35:11'),
(68, 92, '2022-11-23 04:40:56', '2022-11-23 04:40:56'),
(69, 93, '2022-11-23 04:45:12', '2022-11-23 04:45:12'),
(70, 94, '2022-11-23 04:48:05', '2022-11-23 04:48:05'),
(71, 95, '2022-11-23 04:50:38', '2022-11-23 04:50:38'),
(72, 96, '2022-11-23 04:52:55', '2022-11-23 04:52:55'),
(73, 97, '2022-11-23 04:56:09', '2022-11-23 04:56:09'),
(74, 98, '2022-11-23 04:59:13', '2022-11-23 04:59:13'),
(75, 99, '2022-11-23 05:01:50', '2022-11-23 05:01:50'),
(76, 100, '2022-11-23 05:05:36', '2022-11-23 05:05:36'),
(77, 101, '2022-11-23 05:08:49', '2022-11-23 05:08:49'),
(78, 102, '2022-11-23 05:10:26', '2022-11-23 05:10:26'),
(79, 103, '2022-11-23 05:11:26', '2022-11-23 05:11:26'),
(80, 104, '2022-11-23 05:12:48', '2022-11-23 05:12:48'),
(81, 105, '2022-11-23 05:14:37', '2022-11-23 05:14:37'),
(82, 106, '2022-11-23 05:17:02', '2022-11-23 05:17:02'),
(83, 107, '2022-11-23 05:18:49', '2022-11-23 05:18:49'),
(84, 108, '2022-11-23 05:20:47', '2022-11-23 05:20:47'),
(85, 109, '2022-11-23 05:34:06', '2022-11-23 05:34:06'),
(86, 110, '2022-11-23 05:36:56', '2022-11-23 05:36:56'),
(87, 111, '2022-11-23 05:39:00', '2022-11-23 05:39:00'),
(88, 112, '2022-11-23 05:43:26', '2022-11-23 05:43:26'),
(89, 113, '2022-11-23 05:48:44', '2022-11-23 05:48:44'),
(90, 114, '2022-11-23 05:51:29', '2022-11-23 05:51:29'),
(91, 115, '2022-11-23 05:59:36', '2022-11-23 05:59:36'),
(92, 116, '2022-11-23 06:04:39', '2022-11-23 06:04:39'),
(93, 117, '2022-11-23 06:06:33', '2022-11-23 06:06:33'),
(94, 118, '2022-11-23 06:09:59', '2022-11-23 06:09:59'),
(95, 119, '2022-11-23 06:11:27', '2022-11-23 06:11:27');

-- --------------------------------------------------------

--
-- Table structure for table `inqueries`
--

CREATE TABLE `inqueries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` bigint(13) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` int(6) DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inqueries`
--

INSERT INTO `inqueries` (`id`, `fname`, `lname`, `phone`, `email`, `postcode`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(56, 'chirag', 'pariyani', 7016637926, 'pariyani46@gmail.com', 382470, 'product inquery', 'll', '2022-11-12 05:46:58', '2022-11-12 05:46:58'),
(57, 'chirag', 'pariyani', 7016637926, 'pariyani46@gmail.com', 382470, 'product inquery', 'kjkijiji', '2022-11-23 06:16:20', '2022-11-23 06:16:20'),
(58, 'chirag', 'pariyani', 701663767, 'pariyani44@gmail.com', 382470, 'product inquery', 'dwdwdwwwwwwww', '2022-11-23 07:16:17', '2022-11-23 07:16:17'),
(59, 'chirag', 'pariyani', 7016637926, 'pariyani46@gmail.com', 382470, 'product inquery', 'jjn', '2022-12-13 01:41:43', '2022-12-13 01:41:43'),
(60, 'chirag', 'pariyani', 7016637926, 'pariyani46@gmail.com', 382470, 'product inquery', 'asasasas', '2022-12-13 04:29:50', '2022-12-13 04:29:50'),
(61, 'chirag', 'pariyani', 7016637976, 'lala@gmail.com', 382470, 'general inquery', 'aaa', '2022-12-13 04:30:53', '2022-12-13 04:30:53'),
(62, 'chirag', 'pariyani', 7016637976, 'lala@gmail.com', 382470, 'general inquery', 'aaa', '2022-12-13 04:31:40', '2022-12-13 04:31:40'),
(63, 'chirag', 'pariyani', 7016637976, 'lala@gmail.com', 382470, 'general inquery', 'sadsdsd', '2022-12-13 04:32:50', '2022-12-13 04:32:50'),
(64, 'chirag', 'pariyani', 7016637926, 'pariyani46@gmail.com', 382470, 'general inquery', 'sd,ffdfdfdf', '2022-12-13 04:33:38', '2022-12-13 04:33:38'),
(65, 'chirag', 'pariyani', 7016637926, 'pariyani46@gmail.com', 382470, 'general inquery', 'sd,ffdfdfdf', '2022-12-13 04:35:22', '2022-12-13 04:35:22'),
(66, 'chirag', 'pariyani', 7016637926, 'pariyani46@gmail.com', 382470, 'general inquery', 'sdsds', '2022-12-13 04:35:28', '2022-12-13 04:35:28'),
(67, 'chirag', 'pariyani', 701663767, 'pariyani44@gmail.com', 382470, 'general inquery', 'dsdsdsd', '2022-12-13 04:35:40', '2022-12-13 04:35:40'),
(68, 'mohit', 'pariyani', 9106011376, 'mohit@gmail.com', 382470, 'product inquery', 'hghjgjhghj', '2022-12-13 04:36:41', '2022-12-13 04:36:41');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'English', 'en', '2022-10-17 08:19:03', '2022-10-17 08:19:03');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_12_120905_create_roles_table', 1),
(6, '2022_03_12_120924_create_modules_table', 1),
(7, '2022_03_12_124200_create_actions_table', 1),
(8, '2022_03_12_125016_create_role_module_table', 1),
(9, '2022_03_12_125927_create_user_role_table', 1),
(10, '2022_03_12_130957_create_user_permission_table', 1),
(11, '2022_03_14_112601_create_permissions_table', 1),
(12, '2022_03_29_123254_create_language_table', 1),
(13, '2022_10_17_092152_create_table_categories', 2),
(14, '2022_10_17_092310_create_table_brands', 2),
(15, '2022_10_17_092945_create_categories', 3),
(16, '2022_10_17_093254_create_brands', 3),
(17, '2022_10_17_093753_create_categories', 4),
(18, '2022_10_17_093813_create_brands', 4),
(19, '2022_10_17_101546_create_attributes', 5),
(20, '2022_10_17_101648_create_attribute_values', 5),
(21, '2022_10_18_113853_create_products_table', 6),
(22, '2022_10_18_114008_create_feature_products_table', 6),
(23, '2022_10_18_120047_create_product_attributes_table', 6),
(24, '2022_10_18_121734_create_product_image_table', 6),
(25, '2022_10_21_105633_create_product_image_table', 7),
(26, '2022_11_02_120221_create_cms_table', 8),
(27, '2022_11_03_072709_create_settings_table', 9),
(28, '2022_11_05_115619_create_inquery_table', 10),
(29, '2022_11_05_120834_create_inquerys_table', 11),
(30, '2022_11_07_062441_create_inqueries_table', 12),
(31, '2022_11_09_114210_create_support_table', 13),
(32, '2022_11_09_120957_create_supports_table', 14),
(33, '2022_11_24_121730_create_product_inquerys_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Modules', 'modules', '2022-10-17 02:49:03', '2022-10-17 02:49:03'),
(2, 'Dashboard', 'dashboard', '2022-10-17 02:49:03', '2022-10-17 02:49:03'),
(3, 'Users', 'users', '2022-10-17 02:49:03', '2022-10-17 02:49:03'),
(4, 'Roles', 'roles', '2022-10-17 02:49:03', '2022-10-17 02:49:03'),
(5, 'Language', 'language', '2022-10-17 02:49:03', '2022-10-17 02:49:03'),
(7, 'Brand', 'brand', '2022-10-17 03:22:24', '2022-10-17 03:22:24'),
(8, 'Category', 'category', '2022-10-17 03:23:00', '2022-10-17 03:23:54'),
(9, 'Attribute', 'attribute', '2022-10-17 04:39:34', '2022-10-17 04:39:34'),
(10, 'Cms', 'cms', '2022-11-02 06:07:01', '2022-11-02 06:07:01'),
(11, 'Settings', 'settings', '2022-11-03 01:18:56', '2022-11-03 01:18:56'),
(12, 'Inquery', 'inquery', '2022-11-07 01:32:00', '2022-11-07 01:32:00');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `user_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `action_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`user_id`, `module_id`, `action_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2022-10-17 02:49:03', '2022-10-17 02:49:03'),
(1, 1, 2, '2022-10-17 02:49:03', '2022-10-17 02:49:03'),
(1, 1, 3, '2022-10-17 02:49:03', '2022-10-17 02:49:03'),
(1, 1, 4, '2022-10-17 02:49:03', '2022-10-17 02:49:03'),
(1, 2, 1, '2022-10-17 02:49:03', '2022-10-17 02:49:03'),
(1, 2, 2, '2022-10-17 02:49:03', '2022-10-17 02:49:03'),
(1, 2, 3, '2022-10-17 02:49:03', '2022-10-17 02:49:03'),
(1, 2, 4, '2022-10-17 02:49:03', '2022-10-17 02:49:03'),
(1, 3, 1, '2022-10-17 02:49:03', '2022-10-17 02:49:03'),
(1, 3, 2, '2022-10-17 02:49:03', '2022-10-17 02:49:03'),
(1, 3, 3, '2022-10-17 02:49:03', '2022-10-17 02:49:03'),
(1, 3, 4, '2022-10-17 02:49:03', '2022-10-17 02:49:03'),
(1, 4, 1, '2022-10-17 02:49:03', '2022-10-17 02:49:03'),
(1, 4, 2, '2022-10-17 02:49:03', '2022-10-17 02:49:03'),
(1, 4, 3, '2022-10-17 02:49:03', '2022-10-17 02:49:03'),
(1, 4, 4, '2022-10-17 02:49:03', '2022-10-17 02:49:03'),
(1, 5, 1, '2022-10-17 02:49:03', '2022-10-17 02:49:03'),
(1, 5, 2, '2022-10-17 02:49:03', '2022-10-17 02:49:03'),
(1, 5, 3, '2022-10-17 02:49:03', '2022-10-17 02:49:03'),
(1, 5, 4, '2022-10-17 02:49:03', '2022-10-17 02:49:03'),
(1, 6, 1, '2022-10-17 02:49:03', '2022-10-17 02:49:03'),
(1, 6, 2, '2022-10-17 02:49:03', '2022-10-17 02:49:03'),
(1, 6, 3, '2022-10-17 02:49:03', '2022-10-17 02:49:03'),
(1, 6, 4, '2022-10-17 02:49:03', '2022-10-17 02:49:03'),
(1, 7, 1, NULL, NULL),
(1, 7, 2, NULL, NULL),
(1, 7, 3, NULL, NULL),
(1, 7, 4, NULL, NULL),
(1, 8, 1, NULL, NULL),
(1, 8, 2, NULL, NULL),
(1, 8, 3, NULL, NULL),
(1, 8, 4, NULL, NULL),
(1, 9, 1, NULL, NULL),
(1, 9, 2, NULL, NULL),
(1, 9, 3, NULL, NULL),
(1, 9, 4, NULL, NULL),
(1, 10, 1, NULL, NULL),
(1, 10, 2, NULL, NULL),
(1, 10, 3, NULL, NULL),
(1, 10, 4, NULL, NULL),
(1, 11, 1, NULL, NULL),
(1, 11, 2, NULL, NULL),
(1, 11, 3, NULL, NULL),
(1, 11, 4, NULL, NULL),
(1, 12, 1, NULL, NULL),
(1, 12, 2, NULL, NULL),
(1, 12, 3, NULL, NULL),
(1, 12, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `brand_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shortDescription` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longDescription` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `title`, `shortDescription`, `longDescription`, `price`, `status`, `created_at`, `updated_at`) VALUES
(90, 46, 8, 'MRR4D (SRIC R D)', '<p>New, Elegant &amp; smallest RIC Li-ion\r\nRechargeable solution.tones to feel a sense of inner peace\r\nand supports end user’s well being.Metallic design with premium\r\nkvadrat fabric provides\r\nhigh definition TV Streaming<br></p>', '<h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif;\">YOUR FIRST STEP TO BETTER HEARING</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">Our online hearing test determines your ability to hear both high frequency and low frequency sounds.&nbsp; This frequency hearing test is designed to test your hearing in both your left and right ear.&nbsp; You will be asked to identify tones and messages at different frequencies to determine whether you should consult a hearing care professional.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">The process is free, painless, and only takes 5 minutes.&nbsp;</p><h2 style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif;\">HOW TO TAKE THE WIDEX ONLINE HEARING TEST</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">It is best to take our online hearing test with headphones, including AirPods, to help us pinpoint your hearing challenges.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">All you have to do is answer a few simple questions and check your hearing. You will then find out if your results indicate potential&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus/\" style=\"color: inherit;\">hearing loss</a>&nbsp;and what you can do about it!&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\"><br></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">If you have a severe&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus\" style=\"color: inherit;\">hearing loss</a>&nbsp;or small ear canals, behind-the-ear (BTE) hearing aids are a great solution.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">In the BTE hearing aid, all electronic components are tucked neatly in a shell or housing behind your ear and you can choose from a large range of sizes, shapes and colours.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">You can easily control volume and select programs on most BTE hearing aids.</p>', 49999, '1', '2022-11-23 04:29:01', '2022-11-23 04:29:01'),
(91, 49, 8, 'MBR3D (BTE RD)', '<p>New, Elegant &amp; smallest RIC Li-ion Rechargeable solution.tones to feel a sense of inner peace and supports end user’s well being.Metallic design with premium kvadrat fabric provides high definition TV Streaming<br></p>', '<h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">YOUR FIRST STEP TO BETTER HEARING</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">Our online hearing test determines your ability to hear both high frequency and low frequency sounds.&nbsp; This frequency hearing test is designed to test your hearing in both your left and right ear.&nbsp; You will be asked to identify tones and messages at different frequencies to determine whether you should consult a hearing care professional.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">The process is free, painless, and only takes 5 minutes.&nbsp;</p><h2 style=\"margin: 1rem 0px 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">HOW TO TAKE THE WIDEX ONLINE HEARING TEST</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">It is best to take our online hearing test with headphones, including AirPods, to help us pinpoint your hearing challenges.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">All you have to do is answer a few simple questions and check your hearing. You will then find out if your results indicate potential&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus/\" style=\"color: inherit;\">hearing loss</a>&nbsp;and what you can do about it!&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\"><br></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">If you have a severe&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus\" style=\"color: inherit;\">hearing loss</a>&nbsp;or small ear canals, behind-the-ear (BTE) hearing aids are a great solution.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">In the BTE hearing aid, all electronic components are tucked neatly in a shell or housing behind your ear and you can choose from a large range of sizes, shapes and colours.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">You can easily control volume and select programs on most BTE hearing aids.</p>', 25000, '1', '2022-11-23 04:35:11', '2022-11-23 04:35:11'),
(92, 46, 8, 'MRB2D (RIC 312D)', '<p><b>New, Elegant &amp; smallest RIC Li-ion Rechargeable solution.tones to feel a sense of inner peace and supports end user’s well being.Metallic design with premium kvadrat fabric provides high definition TV Streaming</b><br></p>', '<h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">YOUR FIRST STEP TO BETTER HEARING</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">Our online hearing test determines your ability to hear both high frequency and low frequency sounds.&nbsp; This frequency hearing test is designed to test your hearing in both your left and right ear.&nbsp; You will be asked to identify tones and messages at different frequencies to determine whether you should consult a hearing care professional.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">The process is free, painless, and only takes 5 minutes.&nbsp;</p><h2 style=\"margin: 1rem 0px 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">HOW TO TAKE THE WIDEX ONLINE HEARING TEST</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">It is best to take our online hearing test with headphones, including AirPods, to help us pinpoint your hearing challenges.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">All you have to do is answer a few simple questions and check your hearing. You will then find out if your results indicate potential&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus/\" style=\"color: inherit;\">hearing loss</a>&nbsp;and what you can do about it!&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\"><br></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">If you have a severe&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus\" style=\"color: inherit;\">hearing loss</a>&nbsp;or small ear canals, behind-the-ear (BTE) hearing aids are a great solution.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">In the BTE hearing aid, all electronic components are tucked neatly in a shell or housing behind your ear and you can choose from a large range of sizes, shapes and colours.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">You can easily control volume and select programs on most BTE hearing aids.</p>', 49000, '1', '2022-11-23 04:40:56', '2022-11-23 04:40:56'),
(93, 49, 8, 'EBB3D (BTE 13D)', '<p>New, Elegant &amp; smallest RIC Li-ion Rechargeable solution.tones to feel a sense of inner peace and supports end user’s well being.Metallic design with premium kvadrat fabric provides high definition TV Streaming<br></p>', '<h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">YOUR FIRST STEP TO BETTER HEARING</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">Our online hearing test determines your ability to hear both high frequency and low frequency sounds.&nbsp; This frequency hearing test is designed to test your hearing in both your left and right ear.&nbsp; You will be asked to identify tones and messages at different frequencies to determine whether you should consult a hearing care professional.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">The process is free, painless, and only takes 5 minutes.&nbsp;</p><h2 style=\"margin: 1rem 0px 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">HOW TO TAKE THE WIDEX ONLINE HEARING TEST</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">It is best to take our online hearing test with headphones, including AirPods, to help us pinpoint your hearing challenges.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">All you have to do is answer a few simple questions and check your hearing. You will then find out if your results indicate potential&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus/\" style=\"color: inherit;\">hearing loss</a>&nbsp;and what you can do about it!&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\"><br></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">If you have a severe&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus\" style=\"color: inherit;\">hearing loss</a>&nbsp;or small ear canals, behind-the-ear (BTE) hearing aids are a great solution.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">In the BTE hearing aid, all electronic components are tucked neatly in a shell or housing behind your ear and you can choose from a large range of sizes, shapes and colours.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">You can easily control volume and select programs on most BTE hearing aids.</p>', 40000, '1', '2022-11-23 04:45:12', '2022-11-23 04:45:12'),
(94, 46, 8, 'MRB0 (RIC 10)', '<p>New, Elegant &amp; smallest RIC Li-ion Rechargeable solution.tones to feel a sense of inner peace and supports end user’s well being.Metallic design with premium kvadrat fabric provides high definition TV Streaming<br></p>', '<h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">YOUR FIRST STEP TO BETTER HEARING</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">Our online hearing test determines your ability to hear both high frequency and low frequency sounds.&nbsp; This frequency hearing test is designed to test your hearing in both your left and right ear.&nbsp; You will be asked to identify tones and messages at different frequencies to determine whether you should consult a hearing care professional.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">The process is free, painless, and only takes 5 minutes.&nbsp;</p><h2 style=\"margin: 1rem 0px 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">HOW TO TAKE THE WIDEX ONLINE HEARING TEST</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">It is best to take our online hearing test with headphones, including AirPods, to help us pinpoint your hearing challenges.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">All you have to do is answer a few simple questions and check your hearing. You will then find out if your results indicate potential&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus/\" style=\"color: inherit;\">hearing loss</a>&nbsp;and what you can do about it!&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\"><br></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">If you have a severe&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus\" style=\"color: inherit;\">hearing loss</a>&nbsp;or small ear canals, behind-the-ear (BTE) hearing aids are a great solution.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">In the BTE hearing aid, all electronic components are tucked neatly in a shell or housing behind your ear and you can choose from a large range of sizes, shapes and colours.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">You can easily control volume and select programs on most BTE hearing aids.</p>', 45000, '1', '2022-11-23 04:48:05', '2022-11-23 04:48:05'),
(95, 49, 8, 'MBB2 (BTE 312)', '<p>New, Elegant &amp; smallest RIC Li-ion Rechargeable solution.tones to feel a sense of inner peace and supports end user’s well being.Metallic design with premium kvadrat fabric provides high definition TV Streaming<br></p>', '<h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">YOUR FIRST STEP TO BETTER HEARING</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">Our online hearing test determines your ability to hear both high frequency and low frequency sounds.&nbsp; This frequency hearing test is designed to test your hearing in both your left and right ear.&nbsp; You will be asked to identify tones and messages at different frequencies to determine whether you should consult a hearing care professional.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">The process is free, painless, and only takes 5 minutes.&nbsp;</p><h2 style=\"margin: 1rem 0px 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">HOW TO TAKE THE WIDEX ONLINE HEARING TEST</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">It is best to take our online hearing test with headphones, including AirPods, to help us pinpoint your hearing challenges.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">All you have to do is answer a few simple questions and check your hearing. You will then find out if your results indicate potential&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus/\" style=\"color: inherit;\">hearing loss</a>&nbsp;and what you can do about it!&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\"><br></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">If you have a severe&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus\" style=\"color: inherit;\">hearing loss</a>&nbsp;or small ear canals, behind-the-ear (BTE) hearing aids are a great solution.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">In the BTE hearing aid, all electronic components are tucked neatly in a shell or housing behind your ear and you can choose from a large range of sizes, shapes and colours.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">You can easily control volume and select programs on most BTE hearing aids.</p>', 21000, '1', '2022-11-23 04:50:38', '2022-11-23 04:50:38'),
(96, 40, 8, 'CIC', '<p>New, Elegant &amp; smallest RIC Li-ion Rechargeable solution.tones to feel a sense of inner peace and supports end user’s well being.Metallic design with premium kvadrat fabric provides high definition TV Streaming<br></p>', '<h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">YOUR FIRST STEP TO BETTER HEARING</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">Our online hearing test determines your ability to hear both high frequency and low frequency sounds.&nbsp; This frequency hearing test is designed to test your hearing in both your left and right ear.&nbsp; You will be asked to identify tones and messages at different frequencies to determine whether you should consult a hearing care professional.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">The process is free, painless, and only takes 5 minutes.&nbsp;</p><h2 style=\"margin: 1rem 0px 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">HOW TO TAKE THE WIDEX ONLINE HEARING TEST</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">It is best to take our online hearing test with headphones, including AirPods, to help us pinpoint your hearing challenges.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">All you have to do is answer a few simple questions and check your hearing. You will then find out if your results indicate potential&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus/\" style=\"color: inherit;\">hearing loss</a>&nbsp;and what you can do about it!&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\"><br></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">If you have a severe&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus\" style=\"color: inherit;\">hearing loss</a>&nbsp;or small ear canals, behind-the-ear (BTE) hearing aids are a great solution.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">In the BTE hearing aid, all electronic components are tucked neatly in a shell or housing behind your ear and you can choose from a large range of sizes, shapes and colours.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">You can easily control volume and select programs on most BTE hearing aids.</p>', 12000, '1', '2022-11-23 04:52:55', '2022-11-23 04:52:55'),
(97, 40, 8, 'XP ITE', '<p>New, Elegant &amp; smallest RIC Li-ion Rechargeable solution.tones to feel a sense of inner peace and supports end user’s well being.Metallic design with premium kvadrat fabric provides high definition TV Streaming<br></p>', '<h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">YOUR FIRST STEP TO BETTER HEARING</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">Our online hearing test determines your ability to hear both high frequency and low frequency sounds.&nbsp; This frequency hearing test is designed to test your hearing in both your left and right ear.&nbsp; You will be asked to identify tones and messages at different frequencies to determine whether you should consult a hearing care professional.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">The process is free, painless, and only takes 5 minutes.&nbsp;</p><h2 style=\"margin: 1rem 0px 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">HOW TO TAKE THE WIDEX ONLINE HEARING TEST</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">It is best to take our online hearing test with headphones, including AirPods, to help us pinpoint your hearing challenges.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">All you have to do is answer a few simple questions and check your hearing. You will then find out if your results indicate potential&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus/\" style=\"color: inherit;\">hearing loss</a>&nbsp;and what you can do about it!&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\"><br></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">If you have a severe&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus\" style=\"color: inherit;\">hearing loss</a>&nbsp;or small ear canals, behind-the-ear (BTE) hearing aids are a great solution.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">In the BTE hearing aid, all electronic components are tucked neatly in a shell or housing behind your ear and you can choose from a large range of sizes, shapes and colours.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">You can easily control volume and select programs on most BTE hearing aids.</p>', 75000, '1', '2022-11-23 04:56:09', '2022-11-23 04:56:09'),
(98, 40, 8, 'CIC-micro', '<p>New, Elegant &amp; smallest RIC Li-ion Rechargeable solution.tones to feel a sense of inner peace and supports end user’s well being.Metallic design with premium kvadrat fabric provides high definition TV Streaming<br></p>', '<h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">YOUR FIRST STEP TO BETTER HEARING</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">Our online hearing test determines your ability to hear both high frequency and low frequency sounds.&nbsp; This frequency hearing test is designed to test your hearing in both your left and right ear.&nbsp; You will be asked to identify tones and messages at different frequencies to determine whether you should consult a hearing care professional.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">The process is free, painless, and only takes 5 minutes.&nbsp;</p><h2 style=\"margin: 1rem 0px 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">HOW TO TAKE THE WIDEX ONLINE HEARING TEST</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">It is best to take our online hearing test with headphones, including AirPods, to help us pinpoint your hearing challenges.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">All you have to do is answer a few simple questions and check your hearing. You will then find out if your results indicate potential&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus/\" style=\"color: inherit;\">hearing loss</a>&nbsp;and what you can do about it!&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\"><br></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">If you have a severe&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus\" style=\"color: inherit;\">hearing loss</a>&nbsp;or small ear canals, behind-the-ear (BTE) hearing aids are a great solution.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">In the BTE hearing aid, all electronic components are tucked neatly in a shell or housing behind your ear and you can choose from a large range of sizes, shapes and colours.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">You can easily control volume and select programs on most BTE hearing aids.</p>', 45000, '1', '2022-11-23 04:59:13', '2022-11-23 04:59:13'),
(99, 46, 8, 'FUSION (F2)', '<p>New, Elegant &amp; smallest RIC Li-ion Rechargeable solution.tones to feel a sense of inner peace and supports end user’s well being.Metallic design with premium kvadrat fabric provides high definition TV Streaming<br></p>', '<h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">YOUR FIRST STEP TO BETTER HEARING</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">Our online hearing test determines your ability to hear both high frequency and low frequency sounds.&nbsp; This frequency hearing test is designed to test your hearing in both your left and right ear.&nbsp; You will be asked to identify tones and messages at different frequencies to determine whether you should consult a hearing care professional.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">The process is free, painless, and only takes 5 minutes.&nbsp;</p><h2 style=\"margin: 1rem 0px 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">HOW TO TAKE THE WIDEX ONLINE HEARING TEST</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">It is best to take our online hearing test with headphones, including AirPods, to help us pinpoint your hearing challenges.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">All you have to do is answer a few simple questions and check your hearing. You will then find out if your results indicate potential&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus/\" style=\"color: inherit;\">hearing loss</a>&nbsp;and what you can do about it!&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\"><br></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">If you have a severe&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus\" style=\"color: inherit;\">hearing loss</a>&nbsp;or small ear canals, behind-the-ear (BTE) hearing aids are a great solution.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">In the BTE hearing aid, all electronic components are tucked neatly in a shell or housing behind your ear and you can choose from a large range of sizes, shapes and colours.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">You can easily control volume and select programs on most BTE hearing aids.</p>', 80000, '1', '2022-11-23 05:01:50', '2022-11-23 05:01:50'),
(100, 49, 8, 'EBB3D (BTE 13 D)', '<p>New, Elegant &amp; smallest RIC Li-ion Rechargeable solution.tones to feel a sense of inner peace and supports end user’s well being.Metallic design with premium kvadrat fabric provides high definition TV Streaming<br></p>', '<h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">YOUR FIRST STEP TO BETTER HEARING</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">Our online hearing test determines your ability to hear both high frequency and low frequency sounds.&nbsp; This frequency hearing test is designed to test your hearing in both your left and right ear.&nbsp; You will be asked to identify tones and messages at different frequencies to determine whether you should consult a hearing care professional.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">The process is free, painless, and only takes 5 minutes.&nbsp;</p><h2 style=\"margin: 1rem 0px 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">HOW TO TAKE THE WIDEX ONLINE HEARING TEST</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">It is best to take our online hearing test with headphones, including AirPods, to help us pinpoint your hearing challenges.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">All you have to do is answer a few simple questions and check your hearing. You will then find out if your results indicate potential&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus/\" style=\"color: inherit;\">hearing loss</a>&nbsp;and what you can do about it!&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\"><br></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">If you have a severe&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus\" style=\"color: inherit;\">hearing loss</a>&nbsp;or small ear canals, behind-the-ear (BTE) hearing aids are a great solution.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">In the BTE hearing aid, all electronic components are tucked neatly in a shell or housing behind your ear and you can choose from a large range of sizes, shapes and colours.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">You can easily control volume and select programs on most BTE hearing aids.</p>', 42000, '1', '2022-11-23 05:05:36', '2022-11-23 05:05:36'),
(101, 49, 8, 'Fashion Power (FP)', '<p>New, Elegant &amp; smallest RIC Li-ion Rechargeable solution.tones to feel a sense of inner peace and supports end user’s well being.Metallic design with premium kvadrat fabric provides high definition TV Streaming<br></p>', '<h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">YOUR FIRST STEP TO BETTER HEARING</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">Our online hearing test determines your ability to hear both high frequency and low frequency sounds.&nbsp; This frequency hearing test is designed to test your hearing in both your left and right ear.&nbsp; You will be asked to identify tones and messages at different frequencies to determine whether you should consult a hearing care professional.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">The process is free, painless, and only takes 5 minutes.&nbsp;</p><h2 style=\"margin: 1rem 0px 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">HOW TO TAKE THE WIDEX ONLINE HEARING TEST</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">It is best to take our online hearing test with headphones, including AirPods, to help us pinpoint your hearing challenges.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">All you have to do is answer a few simple questions and check your hearing. You will then find out if your results indicate potential&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus/\" style=\"color: inherit;\">hearing loss</a>&nbsp;and what you can do about it!&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\"><br></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">If you have a severe&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus\" style=\"color: inherit;\">hearing loss</a>&nbsp;or small ear canals, behind-the-ear (BTE) hearing aids are a great solution.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">In the BTE hearing aid, all electronic components are tucked neatly in a shell or housing behind your ear and you can choose from a large range of sizes, shapes and colours.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">You can easily control volume and select programs on most BTE hearing aids.</p>', 18000, '1', '2022-11-23 05:08:49', '2022-11-23 05:08:49'),
(102, 49, 8, 'Fashion (FA)', '<p>New, Elegant &amp; smallest RIC Li-ion Rechargeable solution.tones to feel a sense of inner peace and supports end user’s well being.Metallic design with premium kvadrat fabric provides high definition TV Streaming<br></p>', '<h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">YOUR FIRST STEP TO BETTER HEARING</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">Our online hearing test determines your ability to hear both high frequency and low frequency sounds.&nbsp; This frequency hearing test is designed to test your hearing in both your left and right ear.&nbsp; You will be asked to identify tones and messages at different frequencies to determine whether you should consult a hearing care professional.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">The process is free, painless, and only takes 5 minutes.&nbsp;</p><h2 style=\"margin: 1rem 0px 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">HOW TO TAKE THE WIDEX ONLINE HEARING TEST</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">It is best to take our online hearing test with headphones, including AirPods, to help us pinpoint your hearing challenges.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">All you have to do is answer a few simple questions and check your hearing. You will then find out if your results indicate potential&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus/\" style=\"color: inherit;\">hearing loss</a>&nbsp;and what you can do about it!&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\"><br></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">If you have a severe&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus\" style=\"color: inherit;\">hearing loss</a>&nbsp;or small ear canals, behind-the-ear (BTE) hearing aids are a great solution.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">In the BTE hearing aid, all electronic components are tucked neatly in a shell or housing behind your ear and you can choose from a large range of sizes, shapes and colours.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">You can easily control volume and select programs on most BTE hearing aids.</p>', 70000, '1', '2022-11-23 05:10:26', '2022-11-23 05:10:26'),
(103, 46, 8, 'Fashion Mini (FM)', '<p>New, Elegant &amp; smallest RIC Li-ion Rechargeable solution.tones to feel a sense of inner peace and supports end user’s well being.Metallic design with premium kvadrat fabric provides high definition TV Streaming<br></p>', '<h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">YOUR FIRST STEP TO BETTER HEARING</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">Our online hearing test determines your ability to hear both high frequency and low frequency sounds.&nbsp; This frequency hearing test is designed to test your hearing in both your left and right ear.&nbsp; You will be asked to identify tones and messages at different frequencies to determine whether you should consult a hearing care professional.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">The process is free, painless, and only takes 5 minutes.&nbsp;</p><h2 style=\"margin: 1rem 0px 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">HOW TO TAKE THE WIDEX ONLINE HEARING TEST</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">It is best to take our online hearing test with headphones, including AirPods, to help us pinpoint your hearing challenges.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">All you have to do is answer a few simple questions and check your hearing. You will then find out if your results indicate potential&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus/\" style=\"color: inherit;\">hearing loss</a>&nbsp;and what you can do about it!&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\"><br></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">If you have a severe&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus\" style=\"color: inherit;\">hearing loss</a>&nbsp;or small ear canals, behind-the-ear (BTE) hearing aids are a great solution.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">In the BTE hearing aid, all electronic components are tucked neatly in a shell or housing behind your ear and you can choose from a large range of sizes, shapes and colours.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">You can easily control volume and select programs on most BTE hearing aids.</p>', 70000, '1', '2022-11-23 05:11:26', '2022-11-23 05:11:26'),
(104, 46, 8, 'Passion (PA)', '<p>New, Elegant &amp; smallest RIC Li-ion Rechargeable solution.tones to feel a sense of inner peace and supports end user’s well being.Metallic design with premium kvadrat fabric provides high definition TV Streaming<br></p>', '<h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">YOUR FIRST STEP TO BETTER HEARING</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">Our online hearing test determines your ability to hear both high frequency and low frequency sounds.&nbsp; This frequency hearing test is designed to test your hearing in both your left and right ear.&nbsp; You will be asked to identify tones and messages at different frequencies to determine whether you should consult a hearing care professional.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">The process is free, painless, and only takes 5 minutes.&nbsp;</p><h2 style=\"margin: 1rem 0px 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">HOW TO TAKE THE WIDEX ONLINE HEARING TEST</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">It is best to take our online hearing test with headphones, including AirPods, to help us pinpoint your hearing challenges.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">All you have to do is answer a few simple questions and check your hearing. You will then find out if your results indicate potential&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus/\" style=\"color: inherit;\">hearing loss</a>&nbsp;and what you can do about it!&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\"><br></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">If you have a severe&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus\" style=\"color: inherit;\">hearing loss</a>&nbsp;or small ear canals, behind-the-ear (BTE) hearing aids are a great solution.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">In the BTE hearing aid, all electronic components are tucked neatly in a shell or housing behind your ear and you can choose from a large range of sizes, shapes and colours.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">You can easily control volume and select programs on most BTE hearing aids.</p>', 52000, '1', '2022-11-23 05:12:48', '2022-11-23 05:12:48'),
(105, 47, 8, 'Fashion (FS)', '<p>New, Elegant &amp; smallest RIC Li-ion Rechargeable solution.tones to feel a sense of inner peace and supports end user’s well being.Metallic design with premium kvadrat fabric provides high definition TV Streaming<br></p>', '<h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">YOUR FIRST STEP TO BETTER HEARING</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">Our online hearing test determines your ability to hear both high frequency and low frequency sounds.&nbsp; This frequency hearing test is designed to test your hearing in both your left and right ear.&nbsp; You will be asked to identify tones and messages at different frequencies to determine whether you should consult a hearing care professional.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">The process is free, painless, and only takes 5 minutes.&nbsp;</p><h2 style=\"margin: 1rem 0px 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">HOW TO TAKE THE WIDEX ONLINE HEARING TEST</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">It is best to take our online hearing test with headphones, including AirPods, to help us pinpoint your hearing challenges.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">All you have to do is answer a few simple questions and check your hearing. You will then find out if your results indicate potential&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus/\" style=\"color: inherit;\">hearing loss</a>&nbsp;and what you can do about it!&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\"><br></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">If you have a severe&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus\" style=\"color: inherit;\">hearing loss</a>&nbsp;or small ear canals, behind-the-ear (BTE) hearing aids are a great solution.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">In the BTE hearing aid, all electronic components are tucked neatly in a shell or housing behind your ear and you can choose from a large range of sizes, shapes and colours.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">You can easily control volume and select programs on most BTE hearing aids.</p>', 60000, '1', '2022-11-23 05:14:37', '2022-11-23 05:14:37');
INSERT INTO `products` (`id`, `category_id`, `brand_id`, `title`, `shortDescription`, `longDescription`, `price`, `status`, `created_at`, `updated_at`) VALUES
(106, 41, 8, 'CIC', '<p>New, Elegant &amp; smallest RIC Li-ion Rechargeable solution.tones to feel a sense of inner peace and supports end user’s well being.Metallic design with premium kvadrat fabric provides high definition TV Streaming<br></p>', '<h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">YOUR FIRST STEP TO BETTER HEARING</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">Our online hearing test determines your ability to hear both high frequency and low frequency sounds.&nbsp; This frequency hearing test is designed to test your hearing in both your left and right ear.&nbsp; You will be asked to identify tones and messages at different frequencies to determine whether you should consult a hearing care professional.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">The process is free, painless, and only takes 5 minutes.&nbsp;</p><h2 style=\"margin: 1rem 0px 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">HOW TO TAKE THE WIDEX ONLINE HEARING TEST</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">It is best to take our online hearing test with headphones, including AirPods, to help us pinpoint your hearing challenges.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">All you have to do is answer a few simple questions and check your hearing. You will then find out if your results indicate potential&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus/\" style=\"color: inherit;\">hearing loss</a>&nbsp;and what you can do about it!&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\"><br></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">If you have a severe&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus\" style=\"color: inherit;\">hearing loss</a>&nbsp;or small ear canals, behind-the-ear (BTE) hearing aids are a great solution.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">In the BTE hearing aid, all electronic components are tucked neatly in a shell or housing behind your ear and you can choose from a large range of sizes, shapes and colours.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">You can easily control volume and select programs on most BTE hearing aids.</p>', 80000, '1', '2022-11-23 05:17:02', '2022-11-23 05:17:02'),
(107, 43, 5, 'XP ITE', '<p>New, Elegant &amp; smallest RIC Li-ion Rechargeable solution.tones to feel a sense of inner peace and supports end user’s well being.Metallic design with premium kvadrat fabric provides high definition TV Streaming<br></p>', '<h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">YOUR FIRST STEP TO BETTER HEARING</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">Our online hearing test determines your ability to hear both high frequency and low frequency sounds.&nbsp; This frequency hearing test is designed to test your hearing in both your left and right ear.&nbsp; You will be asked to identify tones and messages at different frequencies to determine whether you should consult a hearing care professional.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">The process is free, painless, and only takes 5 minutes.&nbsp;</p><h2 style=\"margin: 1rem 0px 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">HOW TO TAKE THE WIDEX ONLINE HEARING TEST</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">It is best to take our online hearing test with headphones, including AirPods, to help us pinpoint your hearing challenges.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">All you have to do is answer a few simple questions and check your hearing. You will then find out if your results indicate potential&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus/\" style=\"color: inherit;\">hearing loss</a>&nbsp;and what you can do about it!&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\"><br></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">If you have a severe&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus\" style=\"color: inherit;\">hearing loss</a>&nbsp;or small ear canals, behind-the-ear (BTE) hearing aids are a great solution.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">In the BTE hearing aid, all electronic components are tucked neatly in a shell or housing behind your ear and you can choose from a large range of sizes, shapes and colours.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">You can easily control volume and select programs on most BTE hearing aids.</p>', 40000, '1', '2022-11-23 05:18:49', '2022-11-23 05:18:49'),
(108, 40, 8, 'CIC-micro', '<p>New, Elegant &amp; smallest RIC Li-ion Rechargeable solution.tones to feel a sense of inner peace and supports end user’s well being.Metallic design with premium kvadrat fabric provides high definition TV Streaming<br></p>', '<h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">YOUR FIRST STEP TO BETTER HEARING</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">Our online hearing test determines your ability to hear both high frequency and low frequency sounds.&nbsp; This frequency hearing test is designed to test your hearing in both your left and right ear.&nbsp; You will be asked to identify tones and messages at different frequencies to determine whether you should consult a hearing care professional.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">The process is free, painless, and only takes 5 minutes.&nbsp;</p><h2 style=\"margin: 1rem 0px 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">HOW TO TAKE THE WIDEX ONLINE HEARING TEST</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">It is best to take our online hearing test with headphones, including AirPods, to help us pinpoint your hearing challenges.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">All you have to do is answer a few simple questions and check your hearing. You will then find out if your results indicate potential&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus/\" style=\"color: inherit;\">hearing loss</a>&nbsp;and what you can do about it!&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\"><br></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">If you have a severe&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus\" style=\"color: inherit;\">hearing loss</a>&nbsp;or small ear canals, behind-the-ear (BTE) hearing aids are a great solution.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">In the BTE hearing aid, all electronic components are tucked neatly in a shell or housing behind your ear and you can choose from a large range of sizes, shapes and colours.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">You can easily control volume and select programs on most BTE hearing aids.</p>', 25600, '1', '2022-11-23 05:20:47', '2022-11-23 05:20:47'),
(109, 44, 7, 'Styletto 7AX', '<p>New, Elegant &amp; smallest RIC Li-ion Rechargeable solution.tones to feel a sense of inner peace and supports end user’s well being.Metallic design with premium kvadrat fabric provides high definition TV Streaming<br></p>', '<h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">YOUR FIRST STEP TO BETTER HEARING</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">Our online hearing test determines your ability to hear both high frequency and low frequency sounds.&nbsp; This frequency hearing test is designed to test your hearing in both your left and right ear.&nbsp; You will be asked to identify tones and messages at different frequencies to determine whether you should consult a hearing care professional.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">The process is free, painless, and only takes 5 minutes.&nbsp;</p><h2 style=\"margin: 1rem 0px 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">HOW TO TAKE THE WIDEX ONLINE HEARING TEST</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">It is best to take our online hearing test with headphones, including AirPods, to help us pinpoint your hearing challenges.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">All you have to do is answer a few simple questions and check your hearing. You will then find out if your results indicate potential&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus/\" style=\"color: inherit;\">hearing loss</a>&nbsp;and what you can do about it!&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\"><br></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">If you have a severe&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus\" style=\"color: inherit;\">hearing loss</a>&nbsp;or small ear canals, behind-the-ear (BTE) hearing aids are a great solution.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">In the BTE hearing aid, all electronic components are tucked neatly in a shell or housing behind your ear and you can choose from a large range of sizes, shapes and colours.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">You can easily control volume and select programs on most BTE hearing aids.</p>', 40000, '1', '2022-11-23 05:34:06', '2022-11-23 05:34:06'),
(110, 37, 7, 'Kit Pure C&G 7AX', '<p>New, Elegant &amp; smallest RIC Li-ion Rechargeable solution.tones to feel a sense of inner peace and supports end user’s well being.Metallic design with premium kvadrat fabric provides high definition TV Streaming<br></p>', '<h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">YOUR FIRST STEP TO BETTER HEARING</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">Our online hearing test determines your ability to hear both high frequency and low frequency sounds.&nbsp; This frequency hearing test is designed to test your hearing in both your left and right ear.&nbsp; You will be asked to identify tones and messages at different frequencies to determine whether you should consult a hearing care professional.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">The process is free, painless, and only takes 5 minutes.&nbsp;</p><h2 style=\"margin: 1rem 0px 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">HOW TO TAKE THE WIDEX ONLINE HEARING TEST</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">It is best to take our online hearing test with headphones, including AirPods, to help us pinpoint your hearing challenges.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">All you have to do is answer a few simple questions and check your hearing. You will then find out if your results indicate potential&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus/\" style=\"color: inherit;\">hearing loss</a>&nbsp;and what you can do about it!&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\"><br></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">If you have a severe&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus\" style=\"color: inherit;\">hearing loss</a>&nbsp;or small ear canals, behind-the-ear (BTE) hearing aids are a great solution.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">In the BTE hearing aid, all electronic components are tucked neatly in a shell or housing behind your ear and you can choose from a large range of sizes, shapes and colours.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">You can easily control volume and select programs on most BTE hearing aids.</p>', 500000, '1', '2022-11-23 05:36:56', '2022-11-23 05:36:56'),
(111, 43, 7, 'Pure C&G TAX', '<p>New, Elegant &amp; smallest RIC Li-ion Rechargeable solution.tones to feel a sense of inner peace and supports end user’s well being.Metallic design with premium kvadrat fabric provides high definition TV Streaming<br></p>', '<h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">YOUR FIRST STEP TO BETTER HEARING</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">Our online hearing test determines your ability to hear both high frequency and low frequency sounds.&nbsp; This frequency hearing test is designed to test your hearing in both your left and right ear.&nbsp; You will be asked to identify tones and messages at different frequencies to determine whether you should consult a hearing care professional.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">The process is free, painless, and only takes 5 minutes.&nbsp;</p><h2 style=\"margin: 1rem 0px 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">HOW TO TAKE THE WIDEX ONLINE HEARING TEST</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">It is best to take our online hearing test with headphones, including AirPods, to help us pinpoint your hearing challenges.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">All you have to do is answer a few simple questions and check your hearing. You will then find out if your results indicate potential&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus/\" style=\"color: inherit;\">hearing loss</a>&nbsp;and what you can do about it!&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\"><br></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">If you have a severe&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus\" style=\"color: inherit;\">hearing loss</a>&nbsp;or small ear canals, behind-the-ear (BTE) hearing aids are a great solution.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">In the BTE hearing aid, all electronic components are tucked neatly in a shell or housing behind your ear and you can choose from a large range of sizes, shapes and colours.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">You can easily control volume and select programs on most BTE hearing aids.</p>', 10000, '1', '2022-11-23 05:39:00', '2022-11-23 05:39:00'),
(112, 38, 7, 'Insio C&G Ax', '<p>New, Elegant &amp; smallest RIC Li-ion Rechargeable solution.tones to feel a sense of inner peace and supports end user’s well being.Metallic design with premium kvadrat fabric provides high definition TV Streaming<br></p>', '<h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">YOUR FIRST STEP TO BETTER HEARING</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">Our online hearing test determines your ability to hear both high frequency and low frequency sounds.&nbsp; This frequency hearing test is designed to test your hearing in both your left and right ear.&nbsp; You will be asked to identify tones and messages at different frequencies to determine whether you should consult a hearing care professional.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">The process is free, painless, and only takes 5 minutes.&nbsp;</p><h2 style=\"margin: 1rem 0px 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">HOW TO TAKE THE WIDEX ONLINE HEARING TEST</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">It is best to take our online hearing test with headphones, including AirPods, to help us pinpoint your hearing challenges.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">All you have to do is answer a few simple questions and check your hearing. You will then find out if your results indicate potential&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus/\" style=\"color: inherit;\">hearing loss</a>&nbsp;and what you can do about it!&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\"><br></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">If you have a severe&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus\" style=\"color: inherit;\">hearing loss</a>&nbsp;or small ear canals, behind-the-ear (BTE) hearing aids are a great solution.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">In the BTE hearing aid, all electronic components are tucked neatly in a shell or housing behind your ear and you can choose from a large range of sizes, shapes and colours.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">You can easily control volume and select programs on most BTE hearing aids.</p>', 12000, '1', '2022-11-23 05:43:26', '2022-11-23 07:15:20'),
(113, 40, 6, 'Active Pro', '<p>New, Elegant &amp; smallest RIC Li-ion Rechargeable solution.tones to feel a sense of inner peace and supports end user’s well being.Metallic design with premium kvadrat fabric provides high definition TV Streaming<br></p>', '<h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">YOUR FIRST STEP TO BETTER HEARING</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">Our online hearing test determines your ability to hear both high frequency and low frequency sounds.&nbsp; This frequency hearing test is designed to test your hearing in both your left and right ear.&nbsp; You will be asked to identify tones and messages at different frequencies to determine whether you should consult a hearing care professional.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">The process is free, painless, and only takes 5 minutes.&nbsp;</p><h2 style=\"margin: 1rem 0px 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">HOW TO TAKE THE WIDEX ONLINE HEARING TEST</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">It is best to take our online hearing test with headphones, including AirPods, to help us pinpoint your hearing challenges.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">All you have to do is answer a few simple questions and check your hearing. You will then find out if your results indicate potential&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus/\" style=\"color: inherit;\">hearing loss</a>&nbsp;and what you can do about it!&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\"><br></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">If you have a severe&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus\" style=\"color: inherit;\">hearing loss</a>&nbsp;or small ear canals, behind-the-ear (BTE) hearing aids are a great solution.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">In the BTE hearing aid, all electronic components are tucked neatly in a shell or housing behind your ear and you can choose from a large range of sizes, shapes and colours.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">You can easily control volume and select programs on most BTE hearing aids.</p>', 40000, '1', '2022-11-23 05:48:44', '2022-11-23 05:48:44'),
(114, 44, 7, 'Styletto x', '<p>New, Elegant &amp; smallest RIC Li-ion Rechargeable solution.tones to feel a sense of inner peace and supports end user’s well being.Metallic design with premium kvadrat fabric provides high definition TV Streaming<br></p>', '<h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">YOUR FIRST STEP TO BETTER HEARING</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">Our online hearing test determines your ability to hear both high frequency and low frequency sounds.&nbsp; This frequency hearing test is designed to test your hearing in both your left and right ear.&nbsp; You will be asked to identify tones and messages at different frequencies to determine whether you should consult a hearing care professional.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">The process is free, painless, and only takes 5 minutes.&nbsp;</p><h2 style=\"margin: 1rem 0px 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">HOW TO TAKE THE WIDEX ONLINE HEARING TEST</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">It is best to take our online hearing test with headphones, including AirPods, to help us pinpoint your hearing challenges.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">All you have to do is answer a few simple questions and check your hearing. You will then find out if your results indicate potential&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus/\" style=\"color: inherit;\">hearing loss</a>&nbsp;and what you can do about it!&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\"><br></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">If you have a severe&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus\" style=\"color: inherit;\">hearing loss</a>&nbsp;or small ear canals, behind-the-ear (BTE) hearing aids are a great solution.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">In the BTE hearing aid, all electronic components are tucked neatly in a shell or housing behind your ear and you can choose from a large range of sizes, shapes and colours.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">You can easily control volume and select programs on most BTE hearing aids.</p>', 14000, '1', '2022-11-23 05:51:29', '2022-11-23 05:51:29'),
(115, 44, 5, 'PURE 312 X', '<p>New, Elegant &amp; smallest RIC Li-ion Rechargeable solution.tones to feel a sense of inner peace and supports end user’s well being.Metallic design with premium kvadrat fabric provides high definition TV Streaming<br></p>', '<h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">YOUR FIRST STEP TO BETTER HEARING</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">Our online hearing test determines your ability to hear both high frequency and low frequency sounds.&nbsp; This frequency hearing test is designed to test your hearing in both your left and right ear.&nbsp; You will be asked to identify tones and messages at different frequencies to determine whether you should consult a hearing care professional.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">The process is free, painless, and only takes 5 minutes.&nbsp;</p><h2 style=\"margin: 1rem 0px 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">HOW TO TAKE THE WIDEX ONLINE HEARING TEST</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">It is best to take our online hearing test with headphones, including AirPods, to help us pinpoint your hearing challenges.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">All you have to do is answer a few simple questions and check your hearing. You will then find out if your results indicate potential&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus/\" style=\"color: inherit;\">hearing loss</a>&nbsp;and what you can do about it!&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\"><br></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">If you have a severe&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus\" style=\"color: inherit;\">hearing loss</a>&nbsp;or small ear canals, behind-the-ear (BTE) hearing aids are a great solution.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">In the BTE hearing aid, all electronic components are tucked neatly in a shell or housing behind your ear and you can choose from a large range of sizes, shapes and colours.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">You can easily control volume and select programs on most BTE hearing aids.</p>', 1000000, '1', '2022-11-23 05:59:36', '2022-11-23 07:15:10'),
(116, 37, 5, 'Motion', '<p>New, Elegant &amp; smallest RIC Li-ion Rechargeable solution.tones to feel a sense of inner peace and supports end user’s well being.Metallic design with premium kvadrat fabric provides high definition TV Streaming<br></p>', '<p><br></p><table class=\"table table-bordered\"><tbody><tr><td>sdfd</td><td>dfdf</td><td>dfd</td></tr><tr><td>dfd</td><td>fdfd</td><td>fd</td></tr><tr><td>fdf</td><td>fd</td><td>fdfd</td></tr></tbody></table><p><br></p>', 10000, '1', '2022-11-23 06:04:39', '2022-11-23 06:04:39'),
(117, 41, 5, 'SILK X', '<p>New, Elegant &amp; smallest RIC Li-ion Rechargeable solution.tones to feel a sense of inner peace and supports end user’s well being.Metallic design with premium kvadrat fabric provides high definition TV Streaming<br></p>', '<h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">YOUR FIRST STEP TO BETTER HEARING</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">Our online hearing test determines your ability to hear both high frequency and low frequency sounds.&nbsp; This frequency hearing test is designed to test your hearing in both your left and right ear.&nbsp; You will be asked to identify tones and messages at different frequencies to determine whether you should consult a hearing care professional.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">The process is free, painless, and only takes 5 minutes.&nbsp;</p><h2 style=\"margin: 1rem 0px 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">HOW TO TAKE THE WIDEX ONLINE HEARING TEST</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">It is best to take our online hearing test with headphones, including AirPods, to help us pinpoint your hearing challenges.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">All you have to do is answer a few simple questions and check your hearing. You will then find out if your results indicate potential&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus/\" style=\"color: inherit;\">hearing loss</a>&nbsp;and what you can do about it!&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\"><br></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">If you have a severe&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus\" style=\"color: inherit;\">hearing loss</a>&nbsp;or small ear canals, behind-the-ear (BTE) hearing aids are a great solution.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">In the BTE hearing aid, all electronic components are tucked neatly in a shell or housing behind your ear and you can choose from a large range of sizes, shapes and colours.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">You can easily control volume and select programs on most BTE hearing aids.</p>', 420000, '1', '2022-11-23 06:06:33', '2022-11-23 07:14:55'),
(118, 41, 6, 'CROS BT', '<p>New, Elegant &amp; smallest RIC Li-ion Rechargeable solution.tones to feel a sense of inner peace and supports end user’s well being.Metallic design with premium kvadrat fabric provides high definition TV Streaming<br></p>', '<h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">YOUR FIRST STEP TO BETTER HEARING</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">Our online hearing test determines your ability to hear both high frequency and low frequency sounds.&nbsp; This frequency hearing test is designed to test your hearing in both your left and right ear.&nbsp; You will be asked to identify tones and messages at different frequencies to determine whether you should consult a hearing care professional.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">The process is free, painless, and only takes 5 minutes.&nbsp;</p><h2 style=\"margin: 1rem 0px 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">HOW TO TAKE THE WIDEX ONLINE HEARING TEST</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">It is best to take our online hearing test with headphones, including AirPods, to help us pinpoint your hearing challenges.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">All you have to do is answer a few simple questions and check your hearing. You will then find out if your results indicate potential&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus/\" style=\"color: inherit;\">hearing loss</a>&nbsp;and what you can do about it!&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\"><br></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">If you have a severe&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus\" style=\"color: inherit;\">hearing loss</a>&nbsp;or small ear canals, behind-the-ear (BTE) hearing aids are a great solution.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">In the BTE hearing aid, all electronic components are tucked neatly in a shell or housing behind your ear and you can choose from a large range of sizes, shapes and colours.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">You can easily control volume and select programs on most BTE hearing aids.</p>', 40000, '1', '2022-11-23 06:09:59', '2022-11-23 06:09:59'),
(119, 39, 6, 'CROS BICROS', '<p>New, Elegant &amp; smallest RIC Li-ion Rechargeable solution.tones to feel a sense of inner peace and supports end user’s well being.Metallic design with premium kvadrat fabric provides high definition TV Streaming<br></p>', '<h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">YOUR FIRST STEP TO BETTER HEARING</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">Our online hearing test determines your ability to hear both high frequency and low frequency sounds.&nbsp; This frequency hearing test is designed to test your hearing in both your left and right ear.&nbsp; You will be asked to identify tones and messages at different frequencies to determine whether you should consult a hearing care professional.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">The process is free, painless, and only takes 5 minutes.&nbsp;</p><h2 style=\"margin: 1rem 0px 0px; font-family: &quot;Noto Sans&quot;, sans-serif; color: rgb(42, 40, 38);\">HOW TO TAKE THE WIDEX ONLINE HEARING TEST</h2><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">It is best to take our online hearing test with headphones, including AirPods, to help us pinpoint your hearing challenges.&nbsp;&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">All you have to do is answer a few simple questions and check your hearing. You will then find out if your results indicate potential&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus/\" style=\"color: inherit;\">hearing loss</a>&nbsp;and what you can do about it!&nbsp;</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\"><br></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">If you have a severe&nbsp;<a href=\"https://www.widex.com/en/hearing-loss-and-tinnitus\" style=\"color: inherit;\">hearing loss</a>&nbsp;or small ear canals, behind-the-ear (BTE) hearing aids are a great solution.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">In the BTE hearing aid, all electronic components are tucked neatly in a shell or housing behind your ear and you can choose from a large range of sizes, shapes and colours.</p><p style=\"margin: 1rem 0px 0px; color: rgb(42, 40, 38); font-family: &quot;Noto Sans&quot;, sans-serif; font-size: 18px;\">You can easily control volume and select programs on most BTE hearing aids.</p>', 72000, '1', '2022-11-23 06:11:27', '2022-11-23 06:58:50');

-- --------------------------------------------------------

--
-- Table structure for table `product_attributes`
--

CREATE TABLE `product_attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `attribute_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attribute_value_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_attributes`
--

INSERT INTO `product_attributes` (`id`, `product_id`, `attribute_id`, `attribute_value_id`, `created_at`, `updated_at`) VALUES
(66, 90, '10', '21', '2022-11-23 04:29:23', '2022-11-23 04:29:23'),
(67, 90, '11', '23', '2022-11-23 04:29:32', '2022-11-23 04:29:32'),
(68, 90, '16', '37', '2022-11-23 04:30:04', '2022-11-23 04:30:04'),
(69, 91, '12', '28', '2022-11-23 04:35:35', '2022-11-23 04:35:35'),
(70, 91, '10', '21', '2022-11-23 04:35:39', '2022-11-23 04:35:39'),
(71, 91, '13', '31', '2022-11-23 04:35:45', '2022-11-23 04:35:45'),
(72, 92, '10', '21', '2022-11-23 04:41:14', '2022-11-23 04:41:14'),
(73, 92, '12', '25', '2022-11-23 04:41:21', '2022-11-23 04:41:21'),
(74, 92, '15', '34', '2022-11-23 04:41:35', '2022-11-23 04:41:35'),
(75, 93, '11', '23', '2022-11-23 04:45:24', '2022-11-23 04:45:24'),
(76, 93, '10', '21', '2022-11-23 04:45:28', '2022-11-23 04:45:28'),
(77, 93, '12', '27', '2022-11-23 04:45:35', '2022-11-23 04:45:35'),
(78, 94, '12', '26', '2022-11-23 04:48:39', '2022-11-23 04:48:39'),
(79, 94, '15', '35', '2022-11-23 04:48:50', '2022-11-23 04:48:50'),
(80, 94, '14', '33', '2022-11-23 04:48:58', '2022-11-23 04:48:58'),
(81, 95, '10', '21', '2022-11-23 04:50:49', '2022-11-23 04:50:49'),
(82, 95, '12', '25', '2022-11-23 04:50:56', '2022-11-23 04:50:56'),
(83, 95, '16', '37', '2022-11-23 04:51:05', '2022-11-23 04:51:05'),
(84, 96, '12', '26', '2022-11-23 04:53:09', '2022-11-23 04:53:09'),
(85, 96, '14', '32', '2022-11-23 04:53:16', '2022-11-23 04:53:16'),
(87, 97, '12', '25', '2022-11-23 04:57:37', '2022-11-23 04:57:37'),
(88, 97, '14', '32', '2022-11-23 04:57:41', '2022-11-23 04:57:41'),
(89, 97, '10', '22', '2022-11-23 04:57:45', '2022-11-23 04:57:45'),
(90, 98, '13', '30', '2022-11-23 04:59:20', '2022-11-23 04:59:20'),
(91, 98, '11', '24', '2022-11-23 04:59:24', '2022-11-23 04:59:24'),
(92, 98, '16', '37', '2022-11-23 04:59:28', '2022-11-23 04:59:28'),
(93, 99, '12', '25', '2022-11-23 05:02:17', '2022-11-23 05:02:17'),
(94, 99, '10', '21', '2022-11-23 05:02:24', '2022-11-23 05:02:24'),
(95, 99, '14', '32', '2022-11-23 05:03:08', '2022-11-23 05:03:08'),
(96, 100, '10', '21', '2022-11-23 05:05:47', '2022-11-23 05:05:47'),
(97, 100, '12', '26', '2022-11-23 05:05:51', '2022-11-23 05:05:51'),
(98, 100, '15', '34', '2022-11-23 05:05:54', '2022-11-23 05:05:54'),
(99, 101, '12', '27', '2022-11-23 05:09:11', '2022-11-23 05:09:11'),
(100, 101, '13', '30', '2022-11-23 05:09:16', '2022-11-23 05:09:16'),
(101, 101, '16', '37', '2022-11-23 05:09:20', '2022-11-23 05:09:20'),
(102, 102, '11', '23', '2022-11-23 05:10:32', '2022-11-23 05:10:32'),
(103, 102, '13', '29', '2022-11-23 05:10:36', '2022-11-23 05:10:36'),
(104, 102, '15', '34', '2022-11-23 05:10:38', '2022-11-23 05:10:38'),
(105, 103, '14', '32', '2022-11-23 05:11:32', '2022-11-23 05:11:32'),
(106, 103, '15', '34', '2022-11-23 05:11:35', '2022-11-23 05:11:35'),
(107, 103, '13', '29', '2022-11-23 05:11:37', '2022-11-23 05:11:37'),
(108, 103, '16', '36', '2022-11-23 05:11:39', '2022-11-23 05:11:39'),
(109, 104, '12', '28', '2022-11-23 05:13:06', '2022-11-23 05:13:06'),
(110, 104, '11', '24', '2022-11-23 05:13:09', '2022-11-23 05:13:09'),
(111, 104, '15', '35', '2022-11-23 05:13:14', '2022-11-23 05:13:14'),
(112, 106, '14', '32', '2022-11-23 05:17:10', '2022-11-23 05:17:10'),
(113, 106, '15', '35', '2022-11-23 05:17:13', '2022-11-23 05:17:13'),
(115, 106, '13', '31', '2022-11-23 05:17:26', '2022-11-23 05:17:26'),
(116, 107, '11', '23', '2022-11-23 05:19:44', '2022-11-23 05:19:44'),
(117, 107, '13', '29', '2022-11-23 05:19:47', '2022-11-23 05:19:47'),
(119, 107, '17', '40', '2022-11-23 05:19:54', '2022-11-23 05:19:54'),
(121, 108, '11', '23', '2022-11-23 05:24:55', '2022-11-23 05:24:55'),
(122, 108, '12', '27', '2022-11-23 05:24:59', '2022-11-23 05:24:59'),
(123, 108, '15', '35', '2022-11-23 05:25:03', '2022-11-23 05:25:03'),
(124, 108, '17', '40', '2022-11-23 05:25:13', '2022-11-23 05:25:13'),
(125, 109, '12', '26', '2022-11-23 05:34:14', '2022-11-23 05:34:14'),
(126, 109, '14', '32', '2022-11-23 05:34:17', '2022-11-23 05:34:17'),
(127, 109, '15', '35', '2022-11-23 05:34:25', '2022-11-23 05:34:25'),
(128, 109, '11', '24', '2022-11-23 05:34:29', '2022-11-23 05:34:29'),
(129, 110, '12', '26', '2022-11-23 05:37:06', '2022-11-23 05:37:06'),
(130, 110, '15', '35', '2022-11-23 05:37:10', '2022-11-23 05:37:10'),
(132, 110, '16', '45', '2022-11-23 05:37:21', '2022-11-23 05:37:21'),
(133, 110, '17', '40', '2022-11-23 05:37:24', '2022-11-23 05:37:24'),
(134, 111, '14', '32', '2022-11-23 05:39:10', '2022-11-23 05:39:10'),
(135, 111, '12', '25', '2022-11-23 05:39:12', '2022-11-23 05:39:12'),
(136, 111, '15', '35', '2022-11-23 05:39:17', '2022-11-23 05:39:17'),
(137, 112, '13', '31', '2022-11-23 05:43:33', '2022-11-23 05:43:33'),
(138, 112, '10', '22', '2022-11-23 05:43:36', '2022-11-23 05:43:36'),
(139, 112, '13', '29', '2022-11-23 05:43:38', '2022-11-23 05:43:38'),
(141, 114, '11', '24', '2022-11-23 05:51:41', '2022-11-23 05:51:41'),
(142, 114, '14', '33', '2022-11-23 05:51:47', '2022-11-23 05:51:47'),
(143, 114, '12', '28', '2022-11-23 05:51:51', '2022-11-23 05:51:51'),
(144, 114, '13', '30', '2022-11-23 05:51:55', '2022-11-23 05:51:55'),
(145, 115, '12', '25', '2022-11-23 05:59:54', '2022-11-23 05:59:54'),
(146, 115, '13', '29', '2022-11-23 05:59:57', '2022-11-23 05:59:57'),
(147, 115, '15', '35', '2022-11-23 06:00:01', '2022-11-23 06:00:01'),
(148, 115, '10', '22', '2022-11-23 06:00:06', '2022-11-23 06:00:06'),
(149, 116, '10', '22', '2022-11-23 06:04:49', '2022-11-23 06:04:49'),
(150, 116, '13', '30', '2022-11-23 06:04:52', '2022-11-23 06:04:52'),
(151, 116, '16', '37', '2022-11-23 06:04:56', '2022-11-23 06:04:56'),
(152, 117, '12', '27', '2022-11-23 06:06:52', '2022-11-23 06:06:52'),
(153, 117, '15', '35', '2022-11-23 06:06:55', '2022-11-23 06:06:55'),
(154, 117, '18', '43', '2022-11-23 06:06:59', '2022-11-23 06:06:59'),
(155, 117, '17', '40', '2022-11-23 06:07:06', '2022-11-23 06:07:06'),
(160, 118, '15', '34', '2022-11-23 06:10:07', '2022-11-23 06:10:07'),
(161, 118, '16', '45', '2022-11-23 06:10:09', '2022-11-23 06:10:09'),
(162, 118, '14', '32', '2022-11-23 06:10:11', '2022-11-23 06:10:11'),
(163, 118, '13', '29', '2022-11-23 06:10:14', '2022-11-23 06:10:14'),
(164, 119, '12', '26', '2022-11-23 06:11:35', '2022-11-23 06:11:35'),
(165, 119, '14', '33', '2022-11-23 06:11:38', '2022-11-23 06:11:38'),
(166, 119, '15', '35', '2022-11-23 06:11:47', '2022-11-23 06:11:47'),
(167, 96, '16', '37', '2022-11-23 06:23:39', '2022-11-23 06:23:39');

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `image_order` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`id`, `product_id`, `image_order`, `image_name`, `created_at`, `updated_at`) VALUES
(105, 90, '', '1669197720.png', '2022-11-23 04:32:00', '2022-11-23 04:32:00'),
(106, 91, '', '1669198003.png', '2022-11-23 04:36:43', '2022-11-23 04:36:43'),
(107, 92, '', '1669198416.png', '2022-11-23 04:43:36', '2022-11-23 04:43:36'),
(108, 93, '', '1669198619.png', '2022-11-23 04:46:59', '2022-11-23 04:46:59'),
(109, 94, '', '1669198801.png', '2022-11-23 04:50:01', '2022-11-23 04:50:01'),
(110, 95, '', '1669198925.png', '2022-11-23 04:52:05', '2022-11-23 04:52:05'),
(111, 96, '', '1669199100.png', '2022-11-23 04:55:00', '2022-11-23 04:55:00'),
(112, 97, '', '1669199312.png', '2022-11-23 04:58:32', '2022-11-23 04:58:32'),
(113, 98, '', '1669199410.png', '2022-11-23 05:00:10', '2022-11-23 05:00:10'),
(114, 99, '', '1669199625.png', '2022-11-23 05:03:45', '2022-11-23 05:03:45'),
(115, 100, '', '1669199819.png', '2022-11-23 05:06:59', '2022-11-23 05:06:59'),
(116, 101, '', '1669199979.png', '2022-11-23 05:09:39', '2022-11-23 05:09:39'),
(117, 102, '', '1669200048.png', '2022-11-23 05:10:48', '2022-11-23 05:10:48'),
(118, 103, '', '1669200131.png', '2022-11-23 05:12:11', '2022-11-23 05:12:11'),
(119, 104, '', '1669200226.png', '2022-11-23 05:13:46', '2022-11-23 05:13:46'),
(120, 105, '', '1669200318.png', '2022-11-23 05:15:19', '2022-11-23 05:15:19'),
(121, 106, '', '1669200474.png', '2022-11-23 05:17:54', '2022-11-23 05:17:54'),
(122, 108, '', '1669201126.png', '2022-11-23 05:28:46', '2022-11-23 05:28:46'),
(123, 109, '', '1669201483.png', '2022-11-23 05:34:43', '2022-11-23 05:34:43'),
(124, 111, '', '1669201766.png', '2022-11-23 05:39:26', '2022-11-23 05:39:26'),
(125, 112, '', '1669202061.png', '2022-11-23 05:44:21', '2022-11-23 05:44:21'),
(126, 113, '', '1669202410.png', '2022-11-23 05:50:10', '2022-11-23 05:50:10'),
(127, 114, '', '1669202535.png', '2022-11-23 05:52:15', '2022-11-23 05:52:15'),
(128, 115, '', '1669203016.png', '2022-11-23 06:00:16', '2022-11-23 06:00:16'),
(129, 116, '', '1669203311.png', '2022-11-23 06:05:11', '2022-11-23 06:05:11'),
(130, 117, '', '1669203441.png', '2022-11-23 06:07:21', '2022-11-23 06:07:21'),
(131, 118, '', '1669203627.png', '2022-11-23 06:10:27', '2022-11-23 06:10:27'),
(132, 119, '1', '1669203719.png', '2022-11-23 06:11:59', '2022-11-24 06:07:45'),
(133, 110, '', '1669204079.png', '2022-11-23 06:17:59', '2022-11-23 06:17:59'),
(134, 107, '', '1669204094.png', '2022-11-23 06:18:14', '2022-11-23 06:18:14'),
(135, 96, '', '1671021834.png', '2022-12-14 07:13:54', '2022-12-14 07:13:54'),
(136, 96, '', '1671021840.png', '2022-12-14 07:14:00', '2022-12-14 07:14:00'),
(139, 90, '', '1671448803.png', '2022-12-19 05:50:04', '2022-12-19 05:50:04'),
(140, 90, '', '1671448825.jpg', '2022-12-19 05:50:25', '2022-12-19 05:50:25');

-- --------------------------------------------------------

--
-- Table structure for table `product_inquerys`
--

CREATE TABLE `product_inquerys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_inquerys`
--

INSERT INTO `product_inquerys` (`id`, `name`, `email`, `phone`, `title`, `message`, `created_at`, `updated_at`) VALUES
(1, 'chirag pariyani', 'pariyani46@gmail.com', '7016637926', 'CIC', 'dfdfdf', '2022-12-14 06:14:47', '2022-12-14 06:14:47'),
(2, 'chirag pariyani', 'lala@gmail.com', '7016637976', 'CIC', 'asasas', '2022-12-14 06:15:12', '2022-12-14 06:15:12'),
(3, 'mohit pariyani', 'mohit@gmail.com', '9106011376', 'CIC', 'aqsasa', '2022-12-14 06:16:03', '2022-12-14 06:16:03'),
(4, 'mohit pariyani', 'mohit@gmail.com', '9106011376', 'CIC', 'aqsasa', '2022-12-14 06:16:25', '2022-12-14 06:16:25'),
(5, 'mohit pariyani', 'mohit@gmail.com', '9106011376', 'CIC', 'aqsasaasas', '2022-12-14 06:16:32', '2022-12-14 06:16:32'),
(6, 'chirag pariyani', 'pariyanu46@gmail.com', '7016637929', 'CIC', 'asasa', '2022-12-14 06:17:21', '2022-12-14 06:17:21'),
(7, 'chirag pariyani', 'pariyani44@gmail.com', '701663767', 'CIC', 'saas', '2022-12-14 06:17:31', '2022-12-14 06:17:31'),
(8, 'chirag pariyani', 'lala@gmail.com', '7016637976', 'CIC', 'aasasa', '2022-12-19 05:03:46', '2022-12-19 05:03:46'),
(9, 'chirag pariyani', 'pariyani46@gmail.com', '7016637926', 'CIC', 'asasa', '2022-12-19 05:04:04', '2022-12-19 05:04:04'),
(10, 'sadsds', 'dssd', 'sdsds', 'MRR4D (SRIC R D)', 'sdsd', '2022-12-19 05:42:06', '2022-12-19 05:42:06');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'super-admin', '2022-10-17 02:49:03', '2022-10-17 02:49:03');

-- --------------------------------------------------------

--
-- Table structure for table `role_module`
--

CREATE TABLE `role_module` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `module_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_module`
--

INSERT INTO `role_module` (`role_id`, `module_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(1, 2, NULL, NULL),
(1, 3, NULL, NULL),
(1, 4, NULL, NULL),
(1, 5, NULL, NULL),
(1, 7, NULL, NULL),
(1, 8, NULL, NULL),
(1, 9, NULL, NULL),
(1, 10, NULL, NULL),
(1, 11, NULL, NULL),
(1, 12, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`, `link`, `status`, `created_at`, `updated_at`) VALUES
(6, 'Address', 'b/6 mahipal nagar opp chandkhead rly station', 'titan.com', '1', '2022-11-07 06:39:15', '2022-11-07 12:11:48'),
(7, 'email', 'hello@gmail.com', 'titan.com', '1', '2022-11-07 06:39:54', '2022-11-07 06:39:54'),
(8, 'phone', '7016637926', 'titan.com', '1', '2022-11-07 06:40:13', '2022-11-07 06:40:13'),
(9, 'Time', 'Monday to Friday\r\n9AM to 6PM', NULL, '1', '2022-12-21 05:34:40', '2022-12-21 05:37:29');

-- --------------------------------------------------------

--
-- Table structure for table `supports`
--

CREATE TABLE `supports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intrest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `supports`
--

INSERT INTO `supports` (`id`, `name`, `email`, `phone`, `address`, `intrest`, `created_at`, `updated_at`) VALUES
(1, 'chirag pariyani', 'pariyani46@gmail.com', '07016637926', NULL, NULL, '2022-11-09 06:40:35', '2022-11-09 06:40:35'),
(2, 'chirag pariyani', 'pariyani46@gmail.com', '07016637926', 'b/6 mahipal nagar\r\nopp chandkheda rly station', NULL, '2022-11-09 06:41:29', '2022-11-09 06:41:29'),
(3, 'chirag pariyani', 'pariyani44@gmail.com', '701663767', 'b/6 mahipal nagar\r\nopp chandkheda rly station', NULL, '2022-11-09 06:43:02', '2022-11-09 06:43:02'),
(4, 'chirag pariyani', 'pariyani44@gmail.com', '701663767', 'b/6 mahipal nagar\r\nopp chandkheda rly station', 'Hearing Aids Support,Accessories Support,Purchase Support', '2022-11-09 07:04:00', '2022-11-09 07:04:00'),
(5, 'chirag pariyani', 'pariyani44@gmail.com', '701663767', 'b/6 mahipal nagar\r\nopp chandkheda rly station', 'App Support,Accessories Support', '2022-11-09 07:06:55', '2022-11-09 07:06:55'),
(6, 'chirag pariyani', 'pariyani46@gmail.com', '07016637926', 'b/6 mahipal nagar\r\nopp chandkheda rly station', 'Hearing Aids Support,Accessories Support', '2022-11-23 06:16:01', '2022-11-23 06:16:01'),
(7, 'chirag pariyani', 'pariyani46@gmail.com', '07016637926', 'b/6 mahipal nagar\r\nopp chandkheda rly station', 'App Support,Hearing Aids Support,Purchase Support', '2022-12-13 05:51:36', '2022-12-13 05:51:36'),
(8, 'chirag pariyani', 'lala@gmail.com', '07016637976', 'b/6 mahipal nagar\r\nopp chandkheda rly station', 'App Support,Hearing Aids Support,Purchase Support', '2022-12-13 05:51:51', '2022-12-13 05:51:51'),
(9, 'chirag pariyani', 'lala@gmail.com', '07016637976', 'b/6 mahipal nagar\r\nopp chandkheda rly station', 'App Support,Hearing Aids Support,Purchase Support', '2022-12-13 05:52:42', '2022-12-13 05:52:42'),
(10, 'chirag pariyani', 'lala@gmail.com', '07016637976', 'b/6 mahipal nagar\r\nopp chandkheda rly station', 'Hearing Aids Support,Accessories Support', '2022-12-13 05:52:50', '2022-12-13 05:52:50'),
(11, 'fgfgfg', 'fgfgfg', '1023654789', 'dgfsgf', 'dfgfgf', '2022-12-21 06:45:24', '2022-12-21 06:45:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `avatar`, `email`, `phone`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'sup_admin', 'Jaykishan Patel', '1667381918.jpg', 'myemail@mail.com', '9909999099', NULL, '$2y$10$bYMtYeU.T9ZRuah4mVdngOw8j9NyU7CV6EX86zBzFF71SDZGbGPhS', '1', NULL, '2022-10-17 08:19:03', '2022-11-22 04:21:14');

-- --------------------------------------------------------

--
-- Table structure for table `user_permission`
--

CREATE TABLE `user_permission` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `module_id` bigint(20) UNSIGNED NOT NULL,
  `action_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actions`
--
ALTER TABLE `actions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `actions_name_unique` (`name`),
  ADD UNIQUE KEY `actions_slug_unique` (`slug`);

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `attributes_name_unique` (`name`),
  ADD UNIQUE KEY `attributes_slug_unique` (`slug`);

--
-- Indexes for table `attribute_values`
--
ALTER TABLE `attribute_values`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attribute_values_attribute_id_foreign` (`attribute_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_name_unique` (`name`),
  ADD UNIQUE KEY `brands_slug_unique` (`slug`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cms_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feature_products`
--
ALTER TABLE `feature_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `feature_products_product_id_foreign` (`product_id`);

--
-- Indexes for table `inqueries`
--
ALTER TABLE `inqueries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `languages_name_unique` (`name`),
  ADD UNIQUE KEY `languages_slug_unique` (`slug`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `modules_name_unique` (`name`),
  ADD UNIQUE KEY `modules_slug_unique` (`slug`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `product_attributes`
--
ALTER TABLE `product_attributes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_attributes_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_image_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_inquerys`
--
ALTER TABLE `product_inquerys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indexes for table `role_module`
--
ALTER TABLE `role_module`
  ADD PRIMARY KEY (`role_id`,`module_id`),
  ADD KEY `role_module_module_id_foreign` (`module_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supports`
--
ALTER TABLE `supports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- Indexes for table `user_permission`
--
ALTER TABLE `user_permission`
  ADD PRIMARY KEY (`user_id`,`module_id`,`action_id`),
  ADD KEY `user_permission_module_id_foreign` (`module_id`),
  ADD KEY `user_permission_action_id_foreign` (`action_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_role_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actions`
--
ALTER TABLE `actions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `attribute_values`
--
ALTER TABLE `attribute_values`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feature_products`
--
ALTER TABLE `feature_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `inqueries`
--
ALTER TABLE `inqueries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `product_attributes`
--
ALTER TABLE `product_attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `product_inquerys`
--
ALTER TABLE `product_inquerys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `supports`
--
ALTER TABLE `supports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attribute_values`
--
ALTER TABLE `attribute_values`
  ADD CONSTRAINT `attribute_values_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cms`
--
ALTER TABLE `cms`
  ADD CONSTRAINT `cms_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `cms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feature_products`
--
ALTER TABLE `feature_products`
  ADD CONSTRAINT `feature_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_attributes`
--
ALTER TABLE `product_attributes`
  ADD CONSTRAINT `product_attributes_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_image`
--
ALTER TABLE `product_image`
  ADD CONSTRAINT `product_image_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_module`
--
ALTER TABLE `role_module`
  ADD CONSTRAINT `role_module_module_id_foreign` FOREIGN KEY (`module_id`) REFERENCES `modules` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_module_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_permission`
--
ALTER TABLE `user_permission`
  ADD CONSTRAINT `user_permission_action_id_foreign` FOREIGN KEY (`action_id`) REFERENCES `actions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_permission_module_id_foreign` FOREIGN KEY (`module_id`) REFERENCES `modules` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_permission_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_role`
--
ALTER TABLE `user_role`
  ADD CONSTRAINT `user_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_role_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
