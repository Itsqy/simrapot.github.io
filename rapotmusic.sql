-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2022 at 02:36 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rapotmusic`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kelas_ajars`
--

CREATE TABLE `kelas_ajars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kd_guru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_mapel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_rombel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas_ajars`
--

INSERT INTO `kelas_ajars` (`id`, `kd_guru`, `kd_mapel`, `kd_rombel`, `created_at`, `updated_at`) VALUES
(1, 'G0003', 'M0004', 'RM002', NULL, NULL),
(2, 'G0003', 'M0004', 'RM003', NULL, NULL),
(3, 'G0002', 'M0002', 'RM004', NULL, NULL),
(16, 'G0005', 'M0005', 'RM003', NULL, '2022-02-09 23:29:37'),
(17, 'G0005', 'M0005', 'RM006', NULL, '2022-02-09 23:29:37'),
(54, 'G0005', 'M0005', 'RM021', NULL, '2022-02-09 23:29:37'),
(55, 'G0005', 'M0005', 'RM022', NULL, '2022-02-09 23:29:37'),
(56, 'G0005', 'M0005', 'RM016', NULL, '2022-02-09 23:29:37'),
(74, 'G0003', 'M0004', 'RM025', NULL, NULL),
(75, 'G0005', 'M0005', 'RM031', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mapels`
--

CREATE TABLE `mapels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kd_mapel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mapel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mapels`
--

INSERT INTO `mapels` (`id`, `kd_mapel`, `mapel`, `created_at`, `updated_at`) VALUES
(1, 'M0002', 'TKJ', NULL, NULL),
(2, 'M0003', 'RPL', '2021-12-15 23:32:26', '2021-12-15 23:32:26'),
(3, 'M0004', 'Diniyyah', '2021-12-16 00:36:31', '2021-12-16 00:36:31'),
(4, 'M0005', 'IPA', '2022-02-06 23:00:08', '2022-02-06 23:00:08'),
(5, 'M0006', 'MATEMATIKA', '2022-02-07 18:48:47', '2022-02-07 18:48:47'),
(6, 'M0007', 'BAHASA INDONESIA', '2022-02-07 18:48:53', '2022-02-07 18:48:53'),
(7, 'M0008', 'ENGLISH', '2022-02-07 18:48:58', '2022-02-07 18:48:58'),
(8, 'M0009', 'ARABIYYAH', '2022-02-07 18:49:03', '2022-02-07 18:49:03'),
(9, 'M0010', 'AQIDAH', '2022-02-07 18:49:10', '2022-02-07 18:49:10'),
(10, 'M0011', 'NAHWU', '2022-02-07 18:49:16', '2022-02-07 18:49:16'),
(11, 'M0012', 'SHARAF', '2022-02-07 18:49:20', '2022-02-07 18:49:20'),
(12, 'M0013', 'FIQH', '2022-02-07 18:49:27', '2022-02-07 18:49:27'),
(13, 'M0014', 'TAJWID', '2022-02-07 18:49:33', '2022-02-07 18:49:33'),
(14, 'M0015', 'Kurikulum', '2022-02-09 18:08:22', '2022-02-09 18:08:22');

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
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2019_08_19_000000_create_failed_jobs_table', 1),
(16, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(17, '2020_01_08_164501_tabel_siswa', 1),
(18, '2020_01_08_164521_tabel_rombel', 1),
(19, '2020_01_08_164530_tabel_rayon', 1),
(20, '2020_01_08_164542_tabel_mapel', 1),
(21, '2020_01_08_164552_tabel_ajar', 1),
(22, '2020_01_08_164605_tabel_nilai', 1),
(23, '2020_01_10_073813_tabel_nilai2', 1),
(24, '2020_01_28_044553_tabel_kkm', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_kkms`
--

CREATE TABLE `nilai_kkms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kd_rombel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_mapel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kkm` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilai_kkms`
--

INSERT INTO `nilai_kkms` (`id`, `kd_rombel`, `kd_mapel`, `kkm`, `created_at`, `updated_at`) VALUES
(1, 'RM002', 'M0004', 79.00, '2021-12-16 05:09:19', '2021-12-16 05:09:19'),
(2, 'RM003', 'M0004', 90.00, '2021-12-23 06:28:18', '2022-02-06 22:48:48'),
(3, 'RM014', 'M0005', 90.00, '2022-02-06 23:49:57', '2022-02-07 00:04:10'),
(4, 'RM005', 'M0005', 0.00, '2022-02-08 03:57:09', '2022-02-08 03:58:54'),
(5, 'RM021', 'M0005', 80.00, '2022-02-10 16:58:45', '2022-02-10 16:58:45'),
(6, 'RM022', 'M0005', 80.00, '2022-02-10 17:08:04', '2022-02-10 17:08:04'),
(7, 'RM031', 'M0005', 80.00, '2022-02-10 17:08:20', '2022-02-10 17:08:20'),
(8, 'RM016', 'M0005', 75.00, '2022-02-10 17:08:31', '2022-02-10 17:08:31');

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
-- Table structure for table `rombels`
--

CREATE TABLE `rombels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kd_rombel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rombel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jml_rombel` int(11) NOT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `singkatan_jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tingkat` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rombels`
--

INSERT INTO `rombels` (`id`, `kd_rombel`, `rombel`, `jml_rombel`, `jurusan`, `singkatan_jurusan`, `tingkat`, `created_at`, `updated_at`) VALUES
(20, 'RM014', 'SMA XI-1', 1, 'Sekolah Menengah Pertama', 'SMA', 2, '2022-02-08 03:48:00', '2022-02-08 03:48:00'),
(21, 'RM015', 'SMA XII-1', 1, 'Sekolah Menengah Pertama', 'SMA', 3, '2022-02-08 03:48:07', '2022-02-08 03:48:07'),
(22, 'RM016', 'SMA X-1', 1, 'Sekolah Menengah Pertama', 'SMA', 1, '2022-02-08 03:48:20', '2022-02-08 03:48:20'),
(23, 'RM017', 'SMP VII-1', 1, 'Sekolah Menengah Pertama', 'SMP', 1, '2022-02-08 03:48:26', '2022-02-08 03:48:26'),
(24, 'RM018', 'SMP VIII-1', 1, 'Sekolah Menengah Pertama', 'SMP', 2, '2022-02-08 03:48:48', '2022-02-08 03:48:48'),
(25, 'RM019', 'SMP IX-1', 1, 'Sekolah Menengah Pertama', 'SMP', 3, '2022-02-08 03:48:57', '2022-02-08 03:48:57'),
(27, 'RM021', 'SD II-1', 1, 'Sekolah Dasar', 'SD', 2, '2022-02-08 03:55:04', '2022-02-08 03:55:04'),
(28, 'RM022', 'SD III-1', 1, 'Sekolah Dasar', 'SD', 3, '2022-02-08 03:55:11', '2022-02-08 03:55:11'),
(40, 'RM029', 'SD V-1', 1, 'Sekolah Dasar', 'SD|', 2, '2022-02-10 07:10:44', '2022-02-10 07:10:44'),
(41, 'RM030', 'SD VI-1', 1, 'Sekolah Dasar', 'SD|', 3, '2022-02-10 07:11:08', '2022-02-10 07:11:08'),
(42, 'RM031', 'SD IV-1', 1, 'Sekolah Dasar', 'SD|', 1, '2022-02-10 07:19:18', '2022-02-10 07:19:18');

-- --------------------------------------------------------

--
-- Table structure for table `semester1s`
--

CREATE TABLE `semester1s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kd_rombel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_mapel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nis` int(11) NOT NULL,
  `uh_1p` double(8,2) UNSIGNED DEFAULT NULL,
  `uh_1k` double(8,2) UNSIGNED DEFAULT NULL,
  `uh_2p` double(8,2) UNSIGNED DEFAULT NULL,
  `uh_2k` double(8,2) UNSIGNED DEFAULT NULL,
  `uts_1p` double(8,2) UNSIGNED DEFAULT NULL,
  `uts_1k` double(8,2) UNSIGNED DEFAULT NULL,
  `uh_3p` double(8,2) UNSIGNED DEFAULT NULL,
  `uh_3k` double(8,2) UNSIGNED DEFAULT NULL,
  `uh_4p` double(8,2) UNSIGNED DEFAULT NULL,
  `uh_4k` double(8,2) UNSIGNED DEFAULT NULL,
  `uas_p` double(8,2) UNSIGNED DEFAULT NULL,
  `uas_k` double(8,2) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `semester1s`
--

INSERT INTO `semester1s` (`id`, `kd_rombel`, `kd_mapel`, `nis`, `uh_1p`, `uh_1k`, `uh_2p`, `uh_2k`, `uts_1p`, `uts_1k`, `uh_3p`, `uh_3k`, `uh_4p`, `uh_4k`, `uas_p`, `uas_k`, `created_at`, `updated_at`) VALUES
(1, 'RM002', 'M0004', 12345678, 90.00, 80.00, 90.00, 87.00, 80.00, 90.00, 90.00, 90.00, 85.00, 90.00, 86.00, 90.00, '2021-12-16 08:01:10', '2021-12-16 08:03:27'),
(2, 'RM014', 'M0005', 1278186271, 90.00, 100.00, 20.00, 70.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-07 02:58:39', '2022-02-07 02:59:26'),
(3, 'RM021', 'M0005', 1234566, 50.00, 90.00, 80.00, 70.00, 90.00, 90.00, 99.00, 100.00, 90.00, 100.00, 80.00, 60.00, '2022-02-10 16:59:32', '2022-02-10 17:06:29');

-- --------------------------------------------------------

--
-- Table structure for table `semester2s`
--

CREATE TABLE `semester2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kd_rombel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_mapel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nis` int(11) NOT NULL,
  `uh_5p` double(8,2) UNSIGNED DEFAULT NULL,
  `uh_5k` double(8,2) UNSIGNED DEFAULT NULL,
  `uh_6p` double(8,2) UNSIGNED DEFAULT NULL,
  `uh_6k` double(8,2) UNSIGNED DEFAULT NULL,
  `uts_2p` double(8,2) UNSIGNED DEFAULT NULL,
  `uts_2k` double(8,2) UNSIGNED DEFAULT NULL,
  `uh_7p` double(8,2) UNSIGNED DEFAULT NULL,
  `uh_7k` double(8,2) UNSIGNED DEFAULT NULL,
  `uh_8p` double(8,2) UNSIGNED DEFAULT NULL,
  `uh_8k` double(8,2) UNSIGNED DEFAULT NULL,
  `ukk_p` double(8,2) UNSIGNED DEFAULT NULL,
  `ukk_k` double(8,2) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `semester2s`
--

INSERT INTO `semester2s` (`id`, `kd_rombel`, `kd_mapel`, `nis`, `uh_5p`, `uh_5k`, `uh_6p`, `uh_6k`, `uts_2p`, `uts_2k`, `uh_7p`, `uh_7k`, `uh_8p`, `uh_8k`, `ukk_p`, `ukk_k`, `created_at`, `updated_at`) VALUES
(1, 'RM002', 'M0004', 12345678, 90.00, 85.00, 90.00, 90.00, 90.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:02:39', '2021-12-23 06:29:30'),
(2, 'RM021', 'M0005', 1234566, 20.00, 50.00, 70.00, 75.00, 90.00, 89.00, NULL, 83.00, 80.00, 67.00, 23.00, 9.00, '2022-02-10 17:06:36', '2022-02-10 17:07:32');

-- --------------------------------------------------------

--
-- Table structure for table `siswas`
--

CREATE TABLE `siswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nis` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rombel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'NOT FILLED',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswas`
--

INSERT INTO `siswas` (`id`, `nis`, `nama`, `jk`, `rombel`, `created_at`, `updated_at`) VALUES
(1, 12345678, 'Abdurrazaq', 'L', 'SMA XI-1', '2021-12-16 04:43:33', '2022-02-10 07:37:35'),
(2, 12345677, 'Abdurrahman', 'L', 'SD III-1', '2021-12-17 07:14:31', '2022-02-08 17:31:22'),
(3, 1234566, 'jijan', 'L', 'SD II-1', '2021-12-23 06:24:56', '2022-02-08 17:31:03'),
(7, 912001831, 'rifqisyatria', 'L', 'SD IV-1', '2022-02-09 00:49:50', '2022-02-10 07:37:10'),
(8, 127131893, 'syatruiiaa', 'L', 'SD V-1', '2022-02-09 01:41:07', '2022-02-10 07:37:24'),
(15, 11507261, 'TIO RSNANTO', 'L', 'NOT FILLED', '2022-02-10 08:17:44', '2022-02-10 08:17:44'),
(16, 11093834, 'HUMAM MUASSYIR', 'P', 'NOT FILLED', '2022-02-10 08:17:44', '2022-02-10 08:17:44'),
(17, 11032934, 'MUSALIM YUSUF', 'L', 'NOT FILLED', '2022-02-10 08:17:44', '2022-02-10 08:17:44'),
(18, 11483632, 'RIFQI ', 'L', 'NOT FILLED', '2022-02-10 08:17:44', '2022-02-10 08:17:44'),
(19, 11365434, 'RIVAL', 'P', 'SD III-1', '2022-02-10 08:17:44', '2022-02-10 08:17:59'),
(20, 11507261, 'RODHI', 'P', 'NOT FILLED', '2022-02-10 08:17:44', '2022-02-10 08:17:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kd_guru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_mapel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `kd_guru`, `avatar`, `name`, `role`, `kd_mapel`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'G0001', '2676121654.jpg', 'rifqi doang', 'Kurikulum', '-', 'rifqi@gmail.com', '$2y$10$Co4zs5SeyYKKhGK4E0e/5.kc0A1rBB.oxIhZfcQJ8/yeTqBBcxZpm', 'z4LqTjgWJxZ28POvh2cezegwtknF4Effz6o1ifWfKOSBSCOdQx5rJxqrrQpa', '2021-12-15 23:21:42', '2022-02-07 18:37:57'),
(2, 'G0002', 'user.png', 'Bayram', 'Guru', 'M0002', 'bayram@gmail.com', '$2y$10$jhveon8cg8Y3JrYDacZJsOhIsV8ceiSYjixReC1tY4IAzzlSxwSii', 'IGy8LzOfgEVCCyd2fldj3daOVKDU61l4lHFYTi8NkXM9RmiAs0pqgcTYFK0n', '2021-12-15 23:33:00', '2021-12-15 23:33:00'),
(3, 'G0003', 'ppdb.png', 'hanif', 'Guru', 'M0004', 'hanif@gmail.com', '$2y$10$o5zRjmyVe7w7o3Tw7XpZOuO2Qyljq0PmmquhGZAFyxcSVAAqsorbe', 'ileXdlDGF1osRiv5jeL5VfSkJ5XgrhBmYqAuqo5vO0O2lin3hOxyGnhNeAFq', '2021-12-16 00:36:50', '2022-02-09 01:49:45'),
(4, 'G0004', 'user.png', 'Mimin', 'Kurikulum', '-', 'admin@gmail.com', '$2y$10$8V1YeWjXZ5mT.6zgwGTJN.3G49NfXjmKRKNxMO.IjFoCAm4EYOG1a', 'lpmUut6UW7Tw87doTLXLHkQZoOKgGWhpKEwNzOLPTXPMufH5Sh8NuOCf4M6s', '2021-12-16 04:41:28', '2021-12-16 04:41:28'),
(5, 'G0005', 'hahhhaaha.jpeg', 'Syatrua', 'Guru', 'M0005', 'rifqii@gmail.com', '$2y$10$fbKHgmE7IWJaQVUV4Jjs1O6RmQ8SFdtUDi48gyNcvsY3s3FBhbDfq', '9IzBCVlul5SepE4Nf68Nfjw8RfbomScgeq6LdJGO', '2022-02-06 23:00:51', '2022-02-09 23:29:37'),
(6, 'G0006', 'user.png', 'minangsuang', 'Guru', 'M0002', 'beni@gmail.com', '$2y$10$VL3NYDwKUv76mVw98dANcO5AdKS/0Sz2h1xKMbntCdQK2qMTgYb9e', 'Rh2pntUaxT5y2qcRsoMblV3nwHvQqeO4PDEd4Xff', '2022-02-07 18:42:42', '2022-02-07 18:42:42'),
(7, 'G0007', 'Rifqiaja', 'user.png', 'Guru', 'aja@gmail.com', '12345678', 'WoF604WSJmpPBOF9tJmWcbVGNKzcc4zSONDzqAIvQLndmwbR2nThK2Zt7d7G', 'babaabdajaddjab', '2022-02-09 00:28:38', '2022-02-09 00:28:38'),
(8, 'G0010', 'user.png', 'Rifqi syatria', 'Kurikulum', 'M0002', 'rifqisyatria@gmail.com', '$2y$10$ZyBohzL7K/2meK0djWpcXeYxLZS5.F/mGRRfypBxKqvEnl9GJt/9S', NULL, '2022-02-09 17:53:03', '2022-02-09 17:53:03'),
(9, 'G0011', 'user.png', 'Humam', 'Guru', 'M0003', 'humma@gmail.com', '$2y$10$brS1BGoLDCGbZ9ri7bijp.Qv0kK/BQiaFaRW7fDugSpdabxXQQ.rK', NULL, '2022-02-09 17:53:03', '2022-02-09 17:53:03'),
(10, 'G0012', 'user.png', 'TIo', 'Guru', 'M0004', 'tiott@gmail.com', '$2y$10$DYJo0SPJ4R9uAYhMtmV9wOuDvqK9Y5DQSnHxQnLybnx3SMzPmyfzq', NULL, '2022-02-09 17:53:03', '2022-02-09 17:53:03'),
(11, 'G0013', 'user.png', 'Salm', 'Guru', 'M0005', 'limpan@gmail.com', '$2y$10$9.GPRqeudKTgYlmBGWbHdO8x3HqLRNSF.Gsjpn4B8tAx5.jZSLcgO', NULL, '2022-02-09 17:53:03', '2022-02-09 17:53:03'),
(12, 'G0014', 'user.png', 'Ucup', 'Guru', 'M0006', 'ucup@gmail.com', '$2y$10$9v6hK0aPkzwAmQmfOpLh1.ZLIncQwSbS68Oscf4TrLvWUJaNDBiQK', NULL, '2022-02-09 17:53:03', '2022-02-09 17:53:03'),
(13, 'G0015', 'user.png', 'Rodhi', 'Kurikulum', 'M0007', 'ridho@gmail.com', '$2y$10$KD0JyNNoJqdzJiXtw4vD8uVdiOAB.Sk8ff7UMLjJwn833qV01vfxO', NULL, '2022-02-09 17:53:03', '2022-02-09 17:53:03'),
(14, 'G0016', 'user.png', 'RIval', 'Guru', 'M0008', 'rpal@gmail.com', '$2y$10$X/0bnFu20uRD3dYrJmbXUu3NZGxDRsaPzi36gSNYqtAfGzqmAEuxm', NULL, '2022-02-09 17:53:03', '2022-02-09 17:53:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas_ajars`
--
ALTER TABLE `kelas_ajars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mapels`
--
ALTER TABLE `mapels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai_kkms`
--
ALTER TABLE `nilai_kkms`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `rombels`
--
ALTER TABLE `rombels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semester1s`
--
ALTER TABLE `semester1s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semester2s`
--
ALTER TABLE `semester2s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswas`
--
ALTER TABLE `siswas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelas_ajars`
--
ALTER TABLE `kelas_ajars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `mapels`
--
ALTER TABLE `mapels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `nilai_kkms`
--
ALTER TABLE `nilai_kkms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rombels`
--
ALTER TABLE `rombels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `semester1s`
--
ALTER TABLE `semester1s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `semester2s`
--
ALTER TABLE `semester2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `siswas`
--
ALTER TABLE `siswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
