-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 12, 2022 lúc 06:22 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `vr-api`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `biometrics`
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
-- Đang đổ dữ liệu cho bảng `biometrics`
--

INSERT INTO `biometrics` (`id`, `idTypeBiometric`, `data`, `fpIndex`, `note`, `status`, `created_at`, `updated_at`) VALUES
(3, 3, '0000000000017C0A5907952A4C360610', '1', NULL, 0, '2022-06-12 08:05:46', '2022-06-12 08:05:46'),
(4, 3, '0000000000017C0A5907952A4C360610', '2', NULL, 0, '2022-06-12 08:06:37', '2022-06-12 08:06:37'),
(5, 3, '0000000000017C0A5907952A4C360610', '3', NULL, 0, '2022-06-12 08:06:56', '2022-06-12 08:06:56'),
(6, 3, '0000000000017C0A5907952A4C360610', '4', NULL, 0, '2022-06-12 08:06:58', '2022-06-12 08:06:58'),
(7, 3, '0000000000017C0A5907952A4C360610', '5', NULL, 0, '2022-06-12 08:07:00', '2022-06-12 08:07:00'),
(8, 3, '0000000000017C0A5907952A4C360610', '6', NULL, 0, '2022-06-12 08:07:41', '2022-06-12 08:07:41'),
(9, 3, '0000000000017C0A5907952A4C360610', '7', NULL, 0, '2022-06-12 08:07:43', '2022-06-12 08:07:43'),
(10, 3, '0000000000017C0A5907952A4C360610', '8', NULL, 0, '2022-06-12 08:07:45', '2022-06-12 08:07:45'),
(11, 3, '0000000000017C0A5907952A4C360610', '9', NULL, 0, '2022-06-12 08:07:48', '2022-06-12 08:07:48'),
(12, 3, '0000000000017C0A5907952A4C360610', '10', NULL, 0, '2022-06-12 08:07:56', '2022-06-12 08:07:56'),
(14, 3, '0000000000017C0A5907952A4C360610', '11', NULL, 0, '2022-06-12 08:08:01', '2022-06-12 08:08:01'),
(15, 3, '0000000000017C0A5907952A4C360610', '12', NULL, 0, '2022-06-12 08:08:15', '2022-06-12 08:08:15'),
(16, 3, '0000000000017C0A5907952A4C360610', '13', NULL, 0, '2022-06-12 08:08:18', '2022-06-12 08:08:18'),
(17, 3, '0000000000017C0A5907952A4C360610', '14', NULL, 0, '2022-06-12 08:08:21', '2022-06-12 08:08:21'),
(18, 3, '0000000000017C0A5907952A4C360610', '15', NULL, 0, '2022-06-12 08:08:24', '2022-06-12 08:08:24'),
(19, 3, '0000000000017C0A5907952A4C360610', '16', NULL, 0, '2022-06-12 08:08:27', '2022-06-12 08:08:27'),
(20, 3, '0000000000017C0A5907952A4C360610', '17', NULL, 0, '2022-06-12 08:08:30', '2022-06-12 08:08:30'),
(21, 3, '0000000000017C0A5907952A4C360610', '18', NULL, 0, '2022-06-12 08:08:34', '2022-06-12 08:08:34'),
(22, 3, '0000000000017C0A5907952A4C360610', '19', NULL, 0, '2022-06-12 08:08:37', '2022-06-12 08:08:37'),
(23, 3, '0000000000017C0A5907952A4C360610', '20', NULL, 0, '2022-06-12 08:08:41', '2022-06-12 08:08:41'),
(24, 3, '0000000000017C0A5907952A4C360610', '21', NULL, 0, '2022-06-12 08:09:33', '2022-06-12 08:09:33'),
(25, 3, '0000000000017C0A5907952A4C360610', '22', NULL, 0, '2022-06-12 08:09:35', '2022-06-12 08:09:35'),
(26, 3, '0000000000017C0A5907952A4C360610', '23', NULL, 0, '2022-06-12 08:09:37', '2022-06-12 08:09:37'),
(28, 3, '0000000000017C0A5907952A4C360610', '24', NULL, 0, '2022-06-12 08:09:45', '2022-06-12 08:09:45'),
(30, 3, '0000000000017C0A5907952A4C360610', '25', NULL, 0, '2022-06-12 08:10:04', '2022-06-12 08:10:04'),
(31, 3, '0000000000017C0A5907952A4C360610', '26', NULL, 0, '2022-06-12 08:10:06', '2022-06-12 08:10:06'),
(32, 3, '0000000000017C0A5907952A4C360610', '27', NULL, 0, '2022-06-12 08:10:08', '2022-06-12 08:10:08'),
(33, 3, '0000000000017C0A5907952A4C360610', '28', NULL, 0, '2022-06-12 08:10:13', '2022-06-12 08:10:13'),
(34, 3, '0000000000017C0A5907952A4C360610', '29', NULL, 0, '2022-06-12 08:10:18', '2022-06-12 08:10:18'),
(35, 3, '0000000000017C0A5907952A4C360610', '30', NULL, 0, '2022-06-12 08:10:24', '2022-06-12 08:10:24'),
(36, 3, '0000000000017C0A5907952A4C360610', '31', NULL, 0, '2022-06-12 08:10:27', '2022-06-12 08:10:27'),
(37, 3, '0000000000017C0A5907952A4C360610', '32', NULL, 0, '2022-06-12 08:10:31', '2022-06-12 08:10:31'),
(38, 3, '0000000000017C0A5907952A4C360610', '33', NULL, 0, '2022-06-12 08:10:34', '2022-06-12 08:10:34'),
(39, 3, '0000000000017C0A5907952A4C360610', '34', NULL, 0, '2022-06-12 08:10:36', '2022-06-12 08:10:36'),
(40, 3, '0000000000017C0A5907952A4C360610', '35', NULL, 0, '2022-06-12 08:10:40', '2022-06-12 08:10:40'),
(41, 3, '0000000000017C0A5907952A4C360610', '36', NULL, 0, '2022-06-12 08:10:44', '2022-06-12 08:10:44'),
(42, 3, '0000000000017C0A5907952A4C360610', '37', NULL, 0, '2022-06-12 08:10:48', '2022-06-12 08:10:48'),
(43, 3, '0000000000017C0A5907952A4C360610', '38', NULL, 0, '2022-06-12 08:10:52', '2022-06-12 08:10:52'),
(44, 3, '0000000000017C0A5907952A4C360610', '39', NULL, 0, '2022-06-12 08:10:56', '2022-06-12 08:10:56'),
(45, 3, '0000000000017C0A5907952A4C360610', '40', NULL, 0, '2022-06-12 08:10:59', '2022-06-12 08:10:59'),
(46, 3, '0000000000017C0A5907952A4C360610', '41', NULL, 0, '2022-06-12 08:11:02', '2022-06-12 08:11:02'),
(47, 3, '0000000000017C0A5907952A4C360610', '42', NULL, 0, '2022-06-12 08:11:05', '2022-06-12 08:11:05'),
(48, 3, '0000000000017C0A5907952A4C360610', '43', NULL, 0, '2022-06-12 08:15:43', '2022-06-12 08:15:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
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
-- Cấu trúc bảng cho bảng `passed_the_gate`
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
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `readers`
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
-- Đang đổ dữ liệu cho bảng `readers`
--

INSERT INTO `readers` (`id`, `code`, `name`, `idUnit`, `address`, `status`, `created_at`, `updated_at`) VALUES
(1, '0000000000017C0A612293C420964037', 'VM HN Cửa 1', 4, 'Tầng 11, Số 4, Liễu Giai, Ba Đình, Hà Nội, Việt Nam', 0, '2022-06-09 21:10:12', '2022-06-09 21:10:12'),
(2, '0000000000017C0A5F2393C420964037', 'VM HN Cửa 2', 4, 'Tầng 11, Số 4, Liễu Giai, Ba Đình, Hà Nội, Việt Nam', 0, '2022-06-09 21:11:34', '2022-06-09 21:11:34'),
(3, '0000000000017C0A5907952A4C360610', 'VM HN Cửa 3', 4, 'Tầng 11, Số 4, Liễu Giai, Ba Đình, Hà Nội, Việt Nam', 0, '2022-06-09 21:11:47', '2022-06-09 21:11:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reader_user`
--

CREATE TABLE `reader_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idreader` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_biometrics`
--

CREATE TABLE `type_biometrics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `type_biometrics`
--

INSERT INTO `type_biometrics` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Khuôn mặt', 0, NULL, NULL),
(2, 'Tiếng nói', 0, NULL, NULL),
(3, 'Vân tay', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `units`
--

INSERT INTO `units` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(4, 'ViMASS Hà Nội', 0, '2022-06-09 21:04:20', '2022-06-09 21:04:20'),
(5, 'ViMASS Hồ Chí Minh', 0, '2022-06-09 21:04:37', '2022-06-09 21:04:37'),
(6, 'ViMASS Đà Nẵng', 0, '2022-06-09 21:04:44', '2022-06-09 21:04:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
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
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `vid`, `fid`, `phone`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Trần Việt Trung', '1', '1', NULL, 0, NULL, NULL, NULL),
(2, 'Nguyễn Trọng Thành', '27', '2', NULL, 0, NULL, NULL, NULL),
(3, 'Đinh Huy Toàn', '29', '5', NULL, 0, NULL, NULL, NULL),
(4, 'Khổng Mạnh Hùng', '30', '11', NULL, 0, NULL, NULL, NULL),
(5, 'Nguyễn Mạnh Vũ', '6', '3', NULL, 0, NULL, NULL, NULL),
(6, 'Nguyễn Lương Nam', '28', '16', NULL, 0, NULL, NULL, NULL),
(7, 'Nguyễn Thị Ngọc Hà', '16', '22', NULL, 0, NULL, NULL, NULL),
(8, 'Hoàng Thị Thiên Trang', '7', '26', NULL, 0, NULL, NULL, NULL),
(9, 'Hoàng Thị Minh Anh', '10', '23', NULL, 0, NULL, NULL, NULL),
(10, 'Nguyễn Huyền My', '23', '28', NULL, 0, NULL, NULL, NULL),
(11, 'Nguyễn Duy Thịnh', '9', '18', NULL, 0, NULL, NULL, NULL),
(12, 'Ngô Khắc Dự', '60936', '17', NULL, 0, NULL, NULL, NULL),
(13, 'Nguyễn Văn Tú', '60959', '6', NULL, 0, NULL, NULL, NULL),
(14, 'Nguyễn Tiến Thành', '60924', '4', NULL, 0, NULL, NULL, NULL),
(15, 'Trần Thị Thu Hằng', '60921', '19', NULL, 0, NULL, NULL, NULL),
(16, 'Nguyễn Thị Duyên', '60967', '27', NULL, 0, NULL, NULL, NULL),
(17, 'Chu Văn Cường', '60965', '14', NULL, 0, NULL, NULL, NULL),
(18, 'Đặng Thành Đạt', '60956', '20', NULL, 0, NULL, NULL, NULL),
(19, 'Bùi Văn Sơn', '60958', '12', NULL, 0, NULL, NULL, NULL),
(20, 'Bùi Đăng Danh', '60923', '7', NULL, 0, NULL, NULL, NULL),
(21, 'Chu Trung Kiên', '60960', '15', NULL, 0, NULL, NULL, NULL),
(22, 'Phạm Tâm Long', '60934', '31', NULL, 0, NULL, NULL, NULL),
(23, 'Trần Minh Trang KT HCM', '60925', '24', NULL, 0, NULL, NULL, NULL),
(24, 'Dương Hằng Song Thu', '60928', '32', NULL, 0, NULL, NULL, NULL),
(25, 'Nguyễn Khắc Minh - CV Giáo dục', '-1', NULL, NULL, 0, NULL, NULL, NULL),
(26, 'Mai Tiến Hùng - Kỹ thuật', '8', NULL, NULL, 0, NULL, NULL, NULL),
(27, 'Nguyễn Sơn Hải - Thiết kế', '40', NULL, NULL, 0, NULL, NULL, NULL),
(28, 'Lưu Phương Bình - Thiết kế', '-1', NULL, NULL, 0, NULL, NULL, NULL),
(29, 'Nguyễn Thùy Chi - Luật & Quốc tế', '60955', NULL, NULL, 0, NULL, NULL, NULL),
(30, 'Nguyễn Văn Thuỷ', '60922', '8', NULL, 0, NULL, NULL, NULL),
(31, 'Chử Văn Viên', '60933', '9', NULL, 0, NULL, NULL, NULL),
(32, 'Nguyễn Hải Long', '60953', '30', NULL, 0, NULL, NULL, NULL),
(33, 'Trương Ngọc Bảo Châu', '60954', NULL, NULL, 0, NULL, NULL, NULL),
(34, 'Đỗ Văn Đại', '60929', '21', NULL, 0, NULL, NULL, NULL),
(35, 'Vũ Trường Nam', '60930', '10', NULL, 0, NULL, NULL, NULL),
(36, 'Nguyễn Thị Bích Ngọc', '60931', '33', NULL, 0, NULL, NULL, NULL),
(37, 'Lê Hồng Ngọc', '60932', '25', NULL, 0, NULL, NULL, NULL),
(38, 'Nguyễn Thị Kiều Oanh', '60170', NULL, NULL, 0, NULL, NULL, NULL),
(39, 'Bùi Thị Minh Thu', '60171', NULL, NULL, 0, NULL, NULL, NULL),
(40, 'Nguyễn Thị Hương', '60172', NULL, NULL, 0, NULL, NULL, NULL),
(41, 'Vũ Hồng Liên', '60174', NULL, NULL, 0, NULL, NULL, NULL),
(42, 'Trần Huyền Trinh', '60173', NULL, NULL, 0, NULL, NULL, NULL),
(43, 'Hà Linh', '60175', NULL, NULL, 0, NULL, NULL, NULL),
(44, 'Lê Thanh Thùy', '60178', NULL, NULL, 0, NULL, NULL, NULL),
(45, 'Phạm Ngọc Thư', '60179', '29', NULL, 0, NULL, NULL, NULL),
(46, 'Trịnh Văn Tính', '60176', '40', NULL, 0, NULL, NULL, NULL),
(47, 'Nguyễn Khắc Dương', '60980', '13', NULL, 0, NULL, NULL, NULL),
(48, 'Vũ Thu Giang', '60935', NULL, NULL, 0, NULL, NULL, NULL),
(49, 'Nguyễn Xuân Quỳnh', '60939', NULL, NULL, 0, NULL, NULL, NULL),
(50, 'Đỗ Thị Dung', '60938', '41', NULL, 0, NULL, NULL, NULL),
(51, 'Vũ Tiến thành', '60949', '42', NULL, 0, NULL, NULL, NULL),
(52, 'Nguyễn Thị Thanh Huyền', '60177', NULL, NULL, 0, NULL, NULL, NULL),
(53, 'Đôn Thị Hải Yến', '60940', '34', NULL, 0, NULL, NULL, NULL),
(54, 'Đỗ Xuân Hùng', '60941', NULL, NULL, 0, NULL, NULL, NULL),
(55, 'Nguyễn Đức Thắng', '60963', '35', NULL, 0, NULL, NULL, NULL),
(56, 'Nguyễn Tú Quỳnh', '60981', NULL, NULL, 0, NULL, NULL, NULL),
(57, 'Nguyễn Phương Thảo', '60982', NULL, NULL, 0, NULL, NULL, NULL),
(58, 'Đặng Trần Vân Trang', '60964', NULL, NULL, 0, NULL, NULL, NULL),
(59, 'Nguyễn Thị Bích Ngọc', '60984', '33', NULL, 0, NULL, NULL, NULL),
(60, 'Đặng Thị Tâm', '60983', NULL, NULL, 0, NULL, NULL, NULL),
(63, 'Nguyễn Thị Thu Hương', '60900', '36', NULL, 0, NULL, NULL, NULL),
(64, 'Phùng Văn Thuật', '60901', NULL, NULL, 0, NULL, NULL, NULL),
(65, 'Nguyễn Minh Thu', '60902', '37', NULL, 0, NULL, NULL, NULL),
(66, 'Phạm Hiền Ly', '60903', '38', NULL, 0, NULL, NULL, NULL),
(67, 'Đỗ Thị Hồng Thủy', '60904', NULL, NULL, 0, NULL, NULL, NULL),
(68, 'Nguyễn Ngọc Huyền', '60905', NULL, NULL, 0, NULL, NULL, NULL),
(69, 'Nguyễn Thị Huyền Trang', '60906', '39', NULL, 0, NULL, NULL, NULL),
(70, 'Lưu Thị Thanh Hoa', '60907', NULL, NULL, 0, NULL, NULL, NULL),
(71, 'Nguyễn Nga Sơn Thủy', '60908', NULL, NULL, 0, NULL, NULL, NULL),
(72, 'Nguyễn Việt Đức', '60909', NULL, NULL, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_biometrics`
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
-- Đang đổ dữ liệu cho bảng `user_biometrics`
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
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `biometrics`
--
ALTER TABLE `biometrics`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `passed_the_gate`
--
ALTER TABLE `passed_the_gate`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `readers`
--
ALTER TABLE `readers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `reader_user`
--
ALTER TABLE `reader_user`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `type_biometrics`
--
ALTER TABLE `type_biometrics`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user_biometrics`
--
ALTER TABLE `user_biometrics`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `biometrics`
--
ALTER TABLE `biometrics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `passed_the_gate`
--
ALTER TABLE `passed_the_gate`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `readers`
--
ALTER TABLE `readers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `reader_user`
--
ALTER TABLE `reader_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `type_biometrics`
--
ALTER TABLE `type_biometrics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT cho bảng `user_biometrics`
--
ALTER TABLE `user_biometrics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
