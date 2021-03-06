-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2022 at 01:24 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vr-api`
--

-- --------------------------------------------------------

--
-- Table structure for table `biometrics`
--

CREATE TABLE `biometrics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idTypeBiometric` int(4) NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fpIndex` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '-1',
  `note` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `biometrics`
--

INSERT INTO `biometrics` (`id`, `idTypeBiometric`, `data`, `fpIndex`, `note`, `status`, `created_at`, `updated_at`) VALUES
(3, 3, '0000000000017C0A5907952A4C360610', ',1,', NULL, 0, '2022-06-12 08:05:46', '2022-06-12 08:05:46'),
(4, 3, '0000000000017C0A5907952A4C360610', ',2,', NULL, 0, '2022-06-12 08:06:37', '2022-06-12 08:06:37'),
(5, 3, '0000000000017C0A5907952A4C360610', ',3,', NULL, 0, '2022-06-12 08:06:56', '2022-06-12 08:06:56'),
(6, 3, '0000000000017C0A5907952A4C360610', ',4,', NULL, 0, '2022-06-12 08:06:58', '2022-06-12 08:06:58'),
(7, 3, '0000000000017C0A5907952A4C360610', ',5,', NULL, 0, '2022-06-12 08:07:00', '2022-06-12 08:07:00'),
(8, 3, '0000000000017C0A5907952A4C360610', ',6,', NULL, 0, '2022-06-12 08:07:41', '2022-06-12 08:07:41'),
(9, 3, '0000000000017C0A5907952A4C360610', ',7,', NULL, 0, '2022-06-12 08:07:43', '2022-06-12 08:07:43'),
(10, 3, '0000000000017C0A5907952A4C360610', ',8,', NULL, 0, '2022-06-12 08:07:45', '2022-06-12 08:07:45'),
(11, 3, '0000000000017C0A5907952A4C360610', ',9,', NULL, 0, '2022-06-12 08:07:48', '2022-06-12 08:07:48'),
(12, 3, '0000000000017C0A5907952A4C360610', ',10,', NULL, 0, '2022-06-12 08:07:56', '2022-06-12 08:07:56'),
(14, 3, '0000000000017C0A5907952A4C360610', ',11,', NULL, 0, '2022-06-12 08:08:01', '2022-06-12 08:08:01'),
(15, 3, '0000000000017C0A5907952A4C360610', ',12,', NULL, 0, '2022-06-12 08:08:15', '2022-06-12 08:08:15'),
(16, 3, '0000000000017C0A5907952A4C360610', ',13,', NULL, 0, '2022-06-12 08:08:18', '2022-06-12 08:08:18'),
(17, 3, '0000000000017C0A5907952A4C360610', ',14,', NULL, 0, '2022-06-12 08:08:21', '2022-06-12 08:08:21'),
(18, 3, '0000000000017C0A5907952A4C360610', ',15,', NULL, 0, '2022-06-12 08:08:24', '2022-06-12 08:08:24'),
(19, 3, '0000000000017C0A5907952A4C360610', ',16,', NULL, 0, '2022-06-12 08:08:27', '2022-06-12 08:08:27'),
(20, 3, '0000000000017C0A5907952A4C360610', ',17,', NULL, 0, '2022-06-12 08:08:30', '2022-06-12 08:08:30'),
(21, 3, '0000000000017C0A5907952A4C360610', ',18,', NULL, 0, '2022-06-12 08:08:34', '2022-06-12 08:08:34'),
(22, 3, '0000000000017C0A5907952A4C360610', ',19,', NULL, 0, '2022-06-12 08:08:37', '2022-06-12 08:08:37'),
(23, 3, '0000000000017C0A5907952A4C360610', ',20,', NULL, 0, '2022-06-12 08:08:41', '2022-06-12 08:08:41'),
(24, 3, '0000000000017C0A5907952A4C360610', ',21,', NULL, 0, '2022-06-12 08:09:33', '2022-06-12 08:09:33'),
(25, 3, '0000000000017C0A5907952A4C360610', ',22,', NULL, 0, '2022-06-12 08:09:35', '2022-06-12 08:09:35'),
(26, 3, '0000000000017C0A5907952A4C360610', ',23,', NULL, 0, '2022-06-12 08:09:37', '2022-06-12 08:09:37'),
(28, 3, '0000000000017C0A5907952A4C360610', ',24,', NULL, 0, '2022-06-12 08:09:45', '2022-06-12 08:09:45'),
(30, 3, '0000000000017C0A5907952A4C360610', ',25,', NULL, 0, '2022-06-12 08:10:04', '2022-06-12 08:10:04'),
(31, 3, '0000000000017C0A5907952A4C360610', ',26,', NULL, 0, '2022-06-12 08:10:06', '2022-06-12 08:10:06'),
(32, 3, '0000000000017C0A5907952A4C360610', ',27,', NULL, 0, '2022-06-12 08:10:08', '2022-06-12 08:10:08'),
(33, 3, '0000000000017C0A5907952A4C360610', ',28,', NULL, 0, '2022-06-12 08:10:13', '2022-06-12 08:10:13'),
(34, 3, '0000000000017C0A5907952A4C360610', ',29,', NULL, 0, '2022-06-12 08:10:18', '2022-06-12 08:10:18'),
(35, 3, '0000000000017C0A5907952A4C360610', ',30,', NULL, 0, '2022-06-12 08:10:24', '2022-06-12 08:10:24'),
(36, 3, '0000000000017C0A5907952A4C360610', ',31,', NULL, 0, '2022-06-12 08:10:27', '2022-06-12 08:10:27'),
(37, 3, '0000000000017C0A5907952A4C360610', ',32,', NULL, 0, '2022-06-12 08:10:31', '2022-06-12 08:10:31'),
(38, 3, '0000000000017C0A5907952A4C360610', ',33,', NULL, 0, '2022-06-12 08:10:34', '2022-06-12 08:10:34'),
(39, 3, '0000000000017C0A5907952A4C360610', ',34,', NULL, 0, '2022-06-12 08:10:36', '2022-06-12 08:10:36'),
(40, 3, '0000000000017C0A5907952A4C360610', ',35,', NULL, 0, '2022-06-12 08:10:40', '2022-06-12 08:10:40'),
(41, 3, '0000000000017C0A5907952A4C360610', ',36,', NULL, 0, '2022-06-12 08:10:44', '2022-06-12 08:10:44'),
(42, 3, '0000000000017C0A5907952A4C360610', ',37,', NULL, 0, '2022-06-12 08:10:48', '2022-06-12 08:10:48'),
(43, 3, '0000000000017C0A5907952A4C360610', ',38,', NULL, 0, '2022-06-12 08:10:52', '2022-06-12 08:10:52'),
(44, 3, '0000000000017C0A5907952A4C360610', ',39,', NULL, 0, '2022-06-12 08:10:56', '2022-06-12 08:10:56'),
(45, 3, '0000000000017C0A5907952A4C360610', ',40,', NULL, 0, '2022-06-12 08:10:59', '2022-06-12 08:10:59'),
(46, 3, '0000000000017C0A5907952A4C360610', ',41,', NULL, 0, '2022-06-12 08:11:02', '2022-06-12 08:11:02'),
(47, 3, '0000000000017C0A5907952A4C360610', ',42,', NULL, 0, '2022-06-12 08:11:05', '2022-06-12 08:11:05'),
(48, 3, '0000000000017C0A5907952A4C360610', ',43,', NULL, 0, '2022-06-12 08:15:43', '2022-06-12 08:15:43');

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
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2019_08_19_000000_create_failed_jobs_table', 1),
(14, '2022_06_09_093148_create_table_type_biometrics_table', 1),
(15, '2022_06_09_093503_create_table_biometrics_table', 1),
(16, '2022_06_09_094447_create_table_units_table', 1),
(17, '2022_06_09_095739_create_table_user_biometrics_table', 1),
(18, '2022_06_09_100412_create_table_passed_the_gate_table', 1),
(19, '2022_06_09_104851_create_table_reader_user_table', 1),
(20, '2022_06_09_162339_create_table_readers_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `passed_the_gate`
--

CREATE TABLE `passed_the_gate` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idreader` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `time` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `readers`
--

CREATE TABLE `readers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idUnit` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `readers`
--

INSERT INTO `readers` (`id`, `code`, `name`, `idUnit`, `address`, `status`, `created_at`, `updated_at`) VALUES
(1, '0000000000017C0A612293C420964037', 'VM HN C???a 1', 4, 'T???ng 11, S??? 4, Li???u Giai, Ba ????nh, H?? N???i, Vi???t Nam', 0, '2022-06-09 21:10:12', '2022-06-09 21:10:12'),
(2, '0000000000017C0A5F2393C420964037', 'VM HN C???a 2', 4, 'T???ng 11, S??? 4, Li???u Giai, Ba ????nh, H?? N???i, Vi???t Nam', 0, '2022-06-09 21:11:34', '2022-06-09 21:11:34'),
(3, '0000000000017C0A5907952A4C360610', 'VM HN C???a 3', 4, 'T???ng 11, S??? 4, Li???u Giai, Ba ????nh, H?? N???i, Vi???t Nam', 0, '2022-06-09 21:11:47', '2022-06-09 21:11:47');

-- --------------------------------------------------------

--
-- Table structure for table `reader_user`
--

CREATE TABLE `reader_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idreader` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reader_user`
--

INSERT INTO `reader_user` (`id`, `idreader`, `iduser`, `status`, `created_at`, `updated_at`) VALUES
(6, 1, 1, 0, '2022-06-13 08:22:08', '2022-06-13 08:22:08'),
(7, 1, 2, 0, '2022-06-13 08:22:21', '2022-06-13 08:22:21'),
(8, 1, 3, 0, '2022-06-13 08:22:23', '2022-06-13 08:22:23'),
(9, 1, 4, 0, '2022-06-13 08:22:26', '2022-06-13 08:22:26'),
(11, 1, 6, 0, '2022-06-13 08:22:31', '2022-06-13 08:22:31'),
(12, 1, 7, 0, '2022-06-13 08:22:33', '2022-06-13 08:22:33'),
(13, 1, 8, 0, '2022-06-13 08:22:36', '2022-06-13 08:22:36'),
(14, 1, 9, 0, '2022-06-13 08:22:39', '2022-06-13 08:22:39'),
(15, 1, 10, 0, '2022-06-13 08:22:42', '2022-06-13 08:22:42'),
(17, 1, 11, 0, '2022-06-13 08:22:50', '2022-06-13 08:22:50'),
(18, 1, 12, 0, '2022-06-13 08:22:53', '2022-06-13 08:22:53'),
(19, 1, 13, 0, '2022-06-13 08:22:56', '2022-06-13 08:22:56'),
(20, 1, 14, 0, '2022-06-13 08:22:59', '2022-06-13 08:22:59'),
(21, 1, 15, 0, '2022-06-13 08:23:02', '2022-06-13 08:23:02'),
(22, 1, 16, 0, '2022-06-13 08:23:07', '2022-06-13 08:23:07'),
(23, 1, 17, 0, '2022-06-13 08:23:11', '2022-06-13 08:23:11'),
(24, 1, 18, 0, '2022-06-13 08:23:14', '2022-06-13 08:23:14'),
(25, 1, 19, 0, '2022-06-13 08:23:17', '2022-06-13 08:23:17'),
(26, 1, 20, 0, '2022-06-13 08:23:21', '2022-06-13 08:23:21'),
(27, 1, 21, 0, '2022-06-13 08:23:24', '2022-06-13 08:23:24'),
(28, 1, 22, 0, '2022-06-13 08:23:26', '2022-06-13 08:23:26'),
(29, 1, 23, 0, '2022-06-13 08:23:29', '2022-06-13 08:23:29'),
(30, 1, 24, 0, '2022-06-13 08:23:32', '2022-06-13 08:23:32'),
(31, 1, 25, 0, '2022-06-13 08:23:39', '2022-06-13 08:23:39'),
(32, 1, 26, 0, '2022-06-13 08:23:47', '2022-06-13 08:23:47'),
(33, 1, 27, 0, '2022-06-13 08:23:52', '2022-06-13 08:23:52'),
(34, 1, 28, 0, '2022-06-13 08:23:57', '2022-06-13 08:23:57'),
(35, 1, 29, 0, '2022-06-13 08:24:00', '2022-06-13 08:24:00'),
(36, 1, 30, 0, '2022-06-13 08:24:04', '2022-06-13 08:24:04'),
(37, 1, 31, 0, NULL, NULL),
(38, 1, 32, 0, NULL, NULL),
(39, 1, 32, 0, NULL, NULL),
(40, 1, 33, 0, NULL, NULL),
(41, 1, 34, 0, NULL, NULL),
(42, 1, 35, 0, NULL, NULL),
(43, 1, 36, 0, NULL, NULL),
(44, 1, 37, 0, NULL, NULL),
(45, 1, 38, 0, NULL, NULL),
(46, 1, 39, 0, NULL, NULL),
(47, 1, 40, 0, NULL, NULL),
(48, 1, 41, 0, NULL, NULL),
(49, 1, 42, 0, NULL, NULL),
(50, 1, 43, 0, NULL, NULL),
(51, 1, 44, 0, NULL, NULL),
(52, 1, 45, 0, NULL, NULL),
(53, 1, 46, 0, NULL, NULL),
(54, 1, 47, 0, NULL, NULL),
(55, 1, 48, 0, NULL, NULL),
(56, 1, 49, 0, NULL, NULL),
(57, 1, 50, 0, NULL, NULL),
(58, 1, 51, 0, NULL, NULL),
(59, 1, 52, 0, NULL, NULL),
(60, 1, 53, 0, NULL, NULL),
(61, 1, 54, 0, NULL, NULL),
(62, 1, 55, 0, NULL, NULL),
(63, 1, 56, 0, NULL, NULL),
(64, 1, 57, 0, NULL, NULL),
(65, 1, 58, 0, NULL, NULL),
(66, 1, 59, 0, NULL, NULL),
(67, 1, 60, 0, NULL, NULL),
(68, 1, 61, 0, NULL, NULL),
(69, 1, 62, 0, NULL, NULL),
(70, 1, 63, 0, NULL, NULL),
(71, 1, 64, 0, NULL, NULL),
(72, 1, 65, 0, NULL, NULL),
(73, 1, 66, 0, NULL, NULL),
(74, 1, 67, 0, NULL, NULL),
(75, 1, 68, 0, NULL, NULL),
(76, 1, 69, 0, NULL, NULL),
(77, 1, 70, 0, NULL, NULL),
(78, 1, 71, 0, NULL, NULL),
(79, 1, 72, 0, NULL, NULL),
(80, 2, 1, 0, NULL, NULL),
(81, 2, 2, 0, NULL, NULL),
(82, 2, 3, 0, NULL, NULL),
(83, 2, 4, 0, NULL, NULL),
(84, 2, 5, 0, NULL, NULL),
(85, 2, 6, 0, NULL, NULL),
(86, 2, 7, 0, NULL, NULL),
(87, 2, 8, 0, NULL, NULL),
(88, 2, 9, 0, NULL, NULL),
(89, 2, 10, 0, NULL, NULL),
(90, 2, 11, 0, NULL, NULL),
(91, 2, 12, 0, NULL, NULL),
(92, 2, 13, 0, NULL, NULL),
(93, 2, 14, 0, NULL, NULL),
(94, 2, 15, 0, NULL, NULL),
(95, 2, 16, 0, NULL, NULL),
(96, 2, 17, 0, NULL, NULL),
(97, 2, 18, 0, NULL, NULL),
(98, 2, 19, 0, NULL, NULL),
(99, 2, 20, 0, NULL, NULL),
(100, 2, 21, 0, NULL, NULL),
(101, 2, 22, 0, NULL, NULL),
(102, 2, 23, 0, NULL, NULL),
(103, 2, 24, 0, NULL, NULL),
(104, 2, 25, 0, NULL, NULL),
(105, 2, 26, 0, NULL, NULL),
(106, 2, 27, 0, NULL, NULL),
(107, 2, 28, 0, NULL, NULL),
(108, 2, 29, 0, NULL, NULL),
(109, 2, 30, 0, NULL, NULL),
(110, 2, 31, 0, NULL, NULL),
(111, 2, 32, 0, NULL, NULL),
(112, 2, 33, 0, NULL, NULL),
(113, 2, 34, 0, NULL, NULL),
(114, 2, 35, 0, NULL, NULL),
(115, 2, 36, 0, NULL, NULL),
(116, 2, 37, 0, NULL, NULL),
(117, 2, 38, 0, NULL, NULL),
(118, 2, 39, 0, NULL, NULL),
(119, 2, 40, 0, NULL, NULL),
(120, 2, 41, 0, NULL, NULL),
(121, 2, 42, 0, NULL, NULL),
(122, 2, 43, 0, NULL, NULL),
(123, 2, 44, 0, NULL, NULL),
(124, 2, 45, 0, NULL, NULL),
(125, 2, 46, 0, NULL, NULL),
(126, 2, 47, 0, NULL, NULL),
(127, 2, 48, 0, NULL, NULL),
(128, 2, 49, 0, NULL, NULL),
(129, 2, 50, 0, NULL, NULL),
(130, 2, 51, 0, NULL, NULL),
(131, 2, 52, 0, NULL, NULL),
(132, 2, 53, 0, NULL, NULL),
(133, 2, 54, 0, NULL, NULL),
(134, 2, 55, 0, NULL, NULL),
(135, 2, 56, 0, NULL, NULL),
(136, 2, 57, 0, NULL, NULL),
(137, 2, 58, 0, NULL, NULL),
(138, 2, 59, 0, NULL, NULL),
(139, 2, 60, 0, NULL, NULL),
(140, 2, 61, 0, NULL, NULL),
(141, 2, 62, 0, NULL, NULL),
(142, 2, 63, 0, NULL, NULL),
(143, 2, 64, 0, NULL, NULL),
(144, 2, 65, 0, NULL, NULL),
(145, 2, 66, 0, NULL, NULL),
(146, 2, 67, 0, NULL, NULL),
(147, 2, 68, 0, NULL, NULL),
(148, 2, 69, 0, NULL, NULL),
(149, 2, 70, 0, NULL, NULL),
(150, 2, 71, 0, NULL, NULL),
(151, 2, 72, 0, NULL, NULL),
(152, 3, 1, 0, NULL, NULL),
(153, 3, 2, 0, NULL, NULL),
(154, 3, 3, 0, NULL, NULL),
(155, 3, 4, 0, NULL, NULL),
(156, 3, 5, 0, NULL, NULL),
(157, 3, 6, 0, NULL, NULL),
(158, 3, 7, 0, NULL, NULL),
(159, 3, 8, 0, NULL, NULL),
(160, 3, 9, 0, NULL, NULL),
(161, 3, 10, 0, NULL, NULL),
(162, 3, 11, 0, NULL, NULL),
(163, 3, 12, 0, NULL, NULL),
(164, 3, 13, 0, NULL, NULL),
(165, 3, 14, 0, NULL, NULL),
(166, 3, 15, 0, NULL, NULL),
(167, 3, 16, 0, NULL, NULL),
(168, 3, 17, 0, NULL, NULL),
(169, 3, 18, 0, NULL, NULL),
(170, 3, 19, 0, NULL, NULL),
(171, 3, 20, 0, NULL, NULL),
(172, 3, 21, 0, NULL, NULL),
(173, 3, 22, 0, NULL, NULL),
(174, 3, 23, 0, NULL, NULL),
(175, 3, 24, 0, NULL, NULL),
(176, 3, 25, 0, NULL, NULL),
(177, 3, 26, 0, NULL, NULL),
(178, 3, 27, 0, NULL, NULL),
(179, 3, 28, 0, NULL, NULL),
(180, 3, 29, 0, NULL, NULL),
(181, 3, 30, 0, NULL, NULL),
(182, 3, 31, 0, NULL, NULL),
(183, 3, 32, 0, NULL, NULL),
(184, 3, 33, 0, NULL, NULL),
(185, 3, 34, 0, NULL, NULL),
(186, 3, 35, 0, NULL, NULL),
(187, 3, 36, 0, NULL, NULL),
(188, 3, 37, 0, NULL, NULL),
(189, 3, 38, 0, NULL, NULL),
(190, 3, 39, 0, NULL, NULL),
(191, 3, 40, 0, NULL, NULL),
(192, 3, 41, 0, NULL, NULL),
(193, 3, 42, 0, NULL, NULL),
(194, 3, 43, 0, NULL, NULL),
(195, 3, 44, 0, NULL, NULL),
(196, 3, 45, 0, NULL, NULL),
(197, 3, 46, 0, NULL, NULL),
(198, 3, 47, 0, NULL, NULL),
(199, 3, 48, 0, NULL, NULL),
(200, 3, 49, 0, NULL, NULL),
(201, 3, 50, 0, NULL, NULL),
(202, 3, 51, 0, NULL, NULL),
(203, 3, 52, 0, NULL, NULL),
(204, 3, 53, 0, NULL, NULL),
(205, 3, 54, 0, NULL, NULL),
(206, 3, 55, 0, NULL, NULL),
(207, 3, 56, 0, NULL, NULL),
(208, 3, 57, 0, NULL, NULL),
(209, 3, 58, 0, NULL, NULL),
(210, 3, 59, 0, NULL, NULL),
(211, 3, 60, 0, NULL, NULL),
(212, 3, 61, 0, NULL, NULL),
(213, 3, 62, 0, NULL, NULL),
(214, 3, 63, 0, NULL, NULL),
(215, 3, 64, 0, NULL, NULL),
(216, 3, 65, 0, NULL, NULL),
(217, 3, 66, 0, NULL, NULL),
(218, 3, 67, 0, NULL, NULL),
(219, 3, 68, 0, NULL, NULL),
(220, 3, 69, 0, NULL, NULL),
(221, 3, 70, 0, NULL, NULL),
(222, 3, 71, 0, NULL, NULL),
(223, 3, 72, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `type_biometrics`
--

CREATE TABLE `type_biometrics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_biometrics`
--

INSERT INTO `type_biometrics` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Khu??n m???t', 0, NULL, NULL),
(2, 'Ti???ng n??i', 0, NULL, NULL),
(3, 'V??n tay', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(4, 'ViMASS H?? N???i', 0, '2022-06-09 21:04:20', '2022-06-09 21:04:20'),
(5, 'ViMASS H??? Ch?? Minh', 0, '2022-06-09 21:04:37', '2022-06-09 21:04:37'),
(6, 'ViMASS ???? N???ng', 0, '2022-06-09 21:04:44', '2022-06-09 21:04:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `vid`, `fid`, `phone`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tr???n Vi???t Trung', '1', '1', NULL, 0, NULL, NULL, NULL),
(2, 'Nguy???n Tr???ng Th??nh', '27', '2', NULL, 0, NULL, NULL, NULL),
(3, '??inh Huy To??n', '29', '5', NULL, 0, NULL, NULL, NULL),
(4, 'Kh???ng M???nh H??ng', '30', '11', NULL, 0, NULL, NULL, NULL),
(5, 'Nguy???n M???nh V??', '6', '3', NULL, 0, NULL, NULL, NULL),
(6, 'Nguy???n L????ng Nam', '28', '16', NULL, 0, NULL, NULL, NULL),
(7, 'Nguy???n Th??? Ng???c H??', '16', '22', NULL, 0, NULL, NULL, NULL),
(8, 'Ho??ng Th??? Thi??n Trang', '7', '26', NULL, 0, NULL, NULL, NULL),
(9, 'Ho??ng Th??? Minh Anh', '10', '23', NULL, 0, NULL, NULL, NULL),
(10, 'Nguy???n Huy???n My', '23', '28', NULL, 0, NULL, NULL, NULL),
(11, 'Nguy???n Duy Th???nh', '9', '18', NULL, 0, NULL, NULL, NULL),
(12, 'Ng?? Kh???c D???', '60936', '17', NULL, 0, NULL, NULL, NULL),
(13, 'Nguy???n V??n T??', '60959', '6', NULL, 0, NULL, NULL, NULL),
(14, 'Nguy???n Ti???n Th??nh', '60924', '4', NULL, 0, NULL, NULL, NULL),
(15, 'Tr???n Th??? Thu H???ng', '60921', '19', NULL, 0, NULL, NULL, NULL),
(16, 'Nguy???n Th??? Duy??n', '60967', '27', NULL, 0, NULL, NULL, NULL),
(17, 'Chu V??n C?????ng', '60965', '14', NULL, 0, NULL, NULL, NULL),
(18, '?????ng Th??nh ?????t', '60956', '20', NULL, 0, NULL, NULL, NULL),
(19, 'B??i V??n S??n', '60958', '12', NULL, 0, NULL, NULL, NULL),
(20, 'B??i ????ng Danh', '60923', '7', NULL, 0, NULL, NULL, NULL),
(21, 'Chu Trung Ki??n', '60960', '15', NULL, 0, NULL, NULL, NULL),
(22, 'Ph???m T??m Long', '60934', '31', NULL, 0, NULL, NULL, NULL),
(23, 'Tr???n Minh Trang KT HCM', '60925', '24', NULL, 0, NULL, NULL, NULL),
(24, 'D????ng H???ng Song Thu', '60928', '32', NULL, 0, NULL, NULL, NULL),
(25, 'Nguy???n Kh???c Minh - CV Gi??o d???c', '-1', NULL, NULL, 0, NULL, NULL, NULL),
(26, 'Mai Ti???n H??ng - K??? thu???t', '8', NULL, NULL, 0, NULL, NULL, NULL),
(27, 'Nguy???n S??n H???i - Thi???t k???', '40', NULL, NULL, 0, NULL, NULL, NULL),
(28, 'L??u Ph????ng B??nh - Thi???t k???', '-1', NULL, NULL, 0, NULL, NULL, NULL),
(29, 'Nguy???n Th??y Chi - Lu???t & Qu???c t???', '60955', NULL, NULL, 0, NULL, NULL, NULL),
(30, 'Nguy???n V??n Thu???', '60922', '8', NULL, 0, NULL, NULL, NULL),
(31, 'Ch??? V??n Vi??n', '60933', '9', NULL, 0, NULL, NULL, NULL),
(32, 'Nguy???n H???i Long', '60953', '30', NULL, 0, NULL, NULL, NULL),
(33, 'Tr????ng Ng???c B???o Ch??u', '60954', NULL, NULL, 0, NULL, NULL, NULL),
(34, '????? V??n ?????i', '60929', '21', NULL, 0, NULL, NULL, NULL),
(35, 'V?? Tr?????ng Nam', '60930', '10', NULL, 0, NULL, NULL, NULL),
(36, 'Nguy???n Th??? B??ch Ng???c', '60931', '33', NULL, 0, NULL, NULL, NULL),
(37, 'L?? H???ng Ng???c', '60932', '25', NULL, 0, NULL, NULL, NULL),
(38, 'Nguy???n Th??? Ki???u Oanh', '60170', NULL, NULL, 0, NULL, NULL, NULL),
(39, 'B??i Th??? Minh Thu', '60171', NULL, NULL, 0, NULL, NULL, NULL),
(40, 'Nguy???n Th??? H????ng', '60172', NULL, NULL, 0, NULL, NULL, NULL),
(41, 'V?? H???ng Li??n', '60174', NULL, NULL, 0, NULL, NULL, NULL),
(42, 'Tr???n Huy???n Trinh', '60173', NULL, NULL, 0, NULL, NULL, NULL),
(43, 'H?? Linh', '60175', NULL, NULL, 0, NULL, NULL, NULL),
(44, 'L?? Thanh Th??y', '60178', NULL, NULL, 0, NULL, NULL, NULL),
(45, 'Ph???m Ng???c Th??', '60179', '29', NULL, 0, NULL, NULL, NULL),
(46, 'Tr???nh V??n T??nh', '60176', '40', NULL, 0, NULL, NULL, NULL),
(47, 'Nguy???n Kh???c D????ng', '60980', '13', NULL, 0, NULL, NULL, NULL),
(48, 'V?? Thu Giang', '60935', NULL, NULL, 0, NULL, NULL, NULL),
(49, 'Nguy???n Xu??n Qu???nh', '60939', NULL, NULL, 0, NULL, NULL, NULL),
(50, '????? Th??? Dung', '60938', '41', NULL, 0, NULL, NULL, NULL),
(51, 'V?? Ti???n th??nh', '60949', '42', NULL, 0, NULL, NULL, NULL),
(52, 'Nguy???n Th??? Thanh Huy???n', '60177', NULL, NULL, 0, NULL, NULL, NULL),
(53, '????n Th??? H???i Y???n', '60940', '34', NULL, 0, NULL, NULL, NULL),
(54, '????? Xu??n H??ng', '60941', NULL, NULL, 0, NULL, NULL, NULL),
(55, 'Nguy???n ?????c Th???ng', '60963', '35', NULL, 0, NULL, NULL, NULL),
(56, 'Nguy???n T?? Qu???nh', '60981', NULL, NULL, 0, NULL, NULL, NULL),
(57, 'Nguy???n Ph????ng Th???o', '60982', NULL, NULL, 0, NULL, NULL, NULL),
(58, '?????ng Tr???n V??n Trang', '60964', NULL, NULL, 0, NULL, NULL, NULL),
(59, 'Nguy???n Th??? B??ch Ng???c', '60984', '33', NULL, 0, NULL, NULL, NULL),
(60, '?????ng Th??? T??m', '60983', NULL, NULL, 0, NULL, NULL, NULL),
(63, 'Nguy???n Th??? Thu H????ng', '60900', '36', NULL, 0, NULL, NULL, NULL),
(64, 'Ph??ng V??n Thu???t', '60901', NULL, NULL, 0, NULL, NULL, NULL),
(65, 'Nguy???n Minh Thu', '60902', '37', NULL, 0, NULL, NULL, NULL),
(66, 'Ph???m Hi???n Ly', '60903', '38', NULL, 0, NULL, NULL, NULL),
(67, '????? Th??? H???ng Th???y', '60904', NULL, NULL, 0, NULL, NULL, NULL),
(68, 'Nguy???n Ng???c Huy???n', '60905', NULL, NULL, 0, NULL, NULL, NULL),
(69, 'Nguy???n Th??? Huy???n Trang', '60906', '39', NULL, 0, NULL, NULL, NULL),
(70, 'L??u Th??? Thanh Hoa', '60907', NULL, NULL, 0, NULL, NULL, NULL),
(71, 'Nguy???n Nga S??n Th???y', '60908', NULL, NULL, 0, NULL, NULL, NULL),
(72, 'Nguy???n Vi???t ?????c', '60909', NULL, NULL, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_biometrics`
--

CREATE TABLE `user_biometrics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `iduser` int(11) NOT NULL DEFAULT 0,
  `idbiometric` int(11) NOT NULL DEFAULT 0,
  `status` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_biometrics`
--

INSERT INTO `user_biometrics` (`id`, `iduser`, `idbiometric`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 0, '2022-06-12 08:22:34', '2022-06-12 08:22:34'),
(2, 2, 4, 0, '2022-06-12 08:28:04', '2022-06-12 08:28:04'),
(3, 3, 7, 0, '2022-06-12 08:28:32', '2022-06-12 08:28:32'),
(4, 4, 14, 0, '2022-06-12 08:28:50', '2022-06-12 08:28:50'),
(5, 5, 5, 0, '2022-06-12 08:29:17', '2022-06-12 08:29:17'),
(6, 6, 19, 0, '2022-06-12 08:29:45', '2022-06-12 08:29:45'),
(7, 7, 25, 0, '2022-06-12 08:30:01', '2022-06-12 08:30:01'),
(8, 8, 31, 0, '2022-06-12 08:30:22', '2022-06-12 08:30:22'),
(9, 9, 26, 0, '2022-06-12 08:30:40', '2022-06-12 08:30:40'),
(10, 10, 33, 0, '2022-06-12 08:31:08', '2022-06-12 08:31:08'),
(11, 11, 21, 0, '2022-06-12 08:31:19', '2022-06-12 08:31:19'),
(12, 12, 20, 0, '2022-06-12 08:31:36', '2022-06-12 08:31:36'),
(13, 13, 8, 0, '2022-06-12 08:31:55', '2022-06-12 08:31:55'),
(14, 14, 6, 0, '2022-06-12 08:32:41', '2022-06-12 08:32:41'),
(15, 15, 22, 0, '2022-06-12 08:32:55', '2022-06-12 08:32:55'),
(16, 16, 32, 0, '2022-06-12 08:33:11', '2022-06-12 08:33:11'),
(17, 17, 17, 0, '2022-06-12 08:33:39', '2022-06-12 08:33:39'),
(18, 18, 23, 0, '2022-06-12 08:34:23', '2022-06-12 08:34:23'),
(19, 19, 15, 0, '2022-06-12 08:34:33', '2022-06-12 08:34:33'),
(20, 20, 9, 0, '2022-06-12 08:34:51', '2022-06-12 08:34:51'),
(21, 21, 18, 0, '2022-06-12 08:35:17', '2022-06-12 08:35:17'),
(22, 22, 36, 0, '2022-06-12 08:35:35', '2022-06-12 08:35:35'),
(23, 23, 28, 0, '2022-06-12 08:35:47', '2022-06-12 08:35:47'),
(24, 24, 37, 0, '2022-06-12 08:36:03', '2022-06-12 08:36:03'),
(25, 30, 10, 0, '2022-06-12 08:37:06', '2022-06-12 08:37:06'),
(26, 31, 11, 0, '2022-06-12 08:37:20', '2022-06-12 08:37:20'),
(27, 32, 35, 0, '2022-06-12 08:37:45', '2022-06-12 08:37:45'),
(28, 34, 24, 0, '2022-06-12 08:37:58', '2022-06-12 08:37:58'),
(29, 35, 12, 0, '2022-06-12 08:39:53', '2022-06-12 08:39:53'),
(30, 36, 38, 0, '2022-06-12 08:40:11', '2022-06-12 08:40:11'),
(31, 37, 30, 0, '2022-06-12 08:40:26', '2022-06-12 08:40:26'),
(32, 45, 34, 0, '2022-06-12 08:40:49', '2022-06-12 08:40:49'),
(33, 46, 45, 0, '2022-06-12 08:41:17', '2022-06-12 08:41:17'),
(34, 47, 16, 0, '2022-06-12 08:41:36', '2022-06-12 08:41:36'),
(35, 50, 46, 0, '2022-06-12 08:42:03', '2022-06-12 08:42:03'),
(36, 51, 47, 0, '2022-06-12 08:42:23', '2022-06-12 08:42:23'),
(37, 53, 39, 0, '2022-06-12 08:42:44', '2022-06-12 08:42:44'),
(38, 55, 35, 0, '2022-06-12 08:43:06', '2022-06-12 08:43:06'),
(39, 59, 38, 0, '2022-06-12 08:44:28', '2022-06-12 08:44:28'),
(40, 63, 41, 0, '2022-06-12 08:44:42', '2022-06-12 08:44:42'),
(41, 65, 42, 0, '2022-06-12 08:45:02', '2022-06-12 08:45:02'),
(42, 69, 44, 0, '2022-06-12 08:45:21', '2022-06-12 08:45:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biometrics`
--
ALTER TABLE `biometrics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passed_the_gate`
--
ALTER TABLE `passed_the_gate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `readers`
--
ALTER TABLE `readers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reader_user`
--
ALTER TABLE `reader_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_biometrics`
--
ALTER TABLE `type_biometrics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_biometrics`
--
ALTER TABLE `user_biometrics`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biometrics`
--
ALTER TABLE `biometrics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `passed_the_gate`
--
ALTER TABLE `passed_the_gate`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `readers`
--
ALTER TABLE `readers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reader_user`
--
ALTER TABLE `reader_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=224;

--
-- AUTO_INCREMENT for table `type_biometrics`
--
ALTER TABLE `type_biometrics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `user_biometrics`
--
ALTER TABLE `user_biometrics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
