-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jul 2024 pada 11.45
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moonevent`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('ijulijul@gmail.com|127.0.0.1', 'i:2;', 1720432640),
('ijulijul@gmail.com|127.0.0.1:timer', 'i:1720432640;', 1720432640),
('spatie.permission.cache', 'a:3:{s:5:\"alias\";a:4:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:10:\"guard_name\";s:1:\"r\";s:5:\"roles\";}s:11:\"permissions\";a:6:{i:0;a:3:{s:1:\"a\";i:1;s:1:\"b\";s:17:\"manage categories\";s:1:\"c\";s:3:\"web\";}i:1;a:3:{s:1:\"a\";i:2;s:1:\"b\";s:15:\"manage packages\";s:1:\"c\";s:3:\"web\";}i:2;a:3:{s:1:\"a\";i:3;s:1:\"b\";s:19:\"manage transactions\";s:1:\"c\";s:3:\"web\";}i:3;a:3:{s:1:\"a\";i:4;s:1:\"b\";s:21:\"manage packages banks\";s:1:\"c\";s:3:\"web\";}i:4;a:4:{s:1:\"a\";i:5;s:1:\"b\";s:16:\"checkout package\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:5;a:4:{s:1:\"a\";i:6;s:1:\"b\";s:10:\"view order\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}}s:5:\"roles\";a:1:{i:0;a:3:{s:1:\"a\";i:1;s:1:\"b\";s:8:\"customer\";s:1:\"c\";s:3:\"web\";}}}', 1721779235);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `icon`, `slug`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'WO PAKET JGU', 'icons/watPYk0n9ICYbk39F8iL9XXaF4hBRQ5JOHUefSTV.png', 'wo-paket-jgu', NULL, '2024-07-08 03:05:06', '2024-07-08 03:05:06'),
(2, 'WO OUT JGU', 'icons/iKgLNbHn1zFgsMyVP1huWfuidYUxB05CL6isnYel.png', 'wo-out-jgu', NULL, '2024-07-08 03:05:33', '2024-07-08 03:05:33'),
(3, 'WO SAJA DI GEDUNG JGU', 'icons/iT8snfVUvAj97AdYxLr6lcp8EIooaWZSnNbiIJe6.png', 'wo-saja-di-gedung-jgu', '2024-07-17 00:16:06', '2024-07-08 03:05:48', '2024-07-17 00:16:06'),
(4, 'SEWA GEDUNG JGU', 'icons/fveD9i96Qls4P4BmCDp2QcOGc8Mev4c3m4OOuRG0.png', 'sewa-gedung-jgu', NULL, '2024-07-08 03:06:11', '2024-07-08 03:06:11'),
(5, 'WO SAJA DI GEDUNG JGU', 'icons/Qb1QE9Ceo7IdwFDQSvVCLngWsf74WN6ovD0LZmSM.png', 'wo-saja-di-gedung-jgu', NULL, '2024-07-23 00:40:52', '2024-07-23 00:40:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(65, '0001_01_01_000000_create_users_table', 1),
(66, '0001_01_01_000001_create_cache_table', 1),
(67, '0001_01_01_000002_create_jobs_table', 1),
(68, '2024_05_19_074228_create_permission_tables', 1),
(69, '2024_05_19_082127_create_categories_table', 1),
(70, '2024_05_19_084043_create_package_banks_table', 1),
(71, '2024_05_19_084111_create_package_tours_table', 1),
(72, '2024_05_19_084129_create_package_photos_table', 1),
(73, '2024_05_19_084143_create_package_bookings_table', 1),
(74, '2024_07_04_142328_add_soft_deletes_to_package_photos_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `package_banks`
--

CREATE TABLE `package_banks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_account_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_account_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `package_banks`
--

INSERT INTO `package_banks` (`id`, `bank_name`, `bank_account_name`, `bank_account_number`, `logo`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'BCA', 'Munahwati', '3218948723673', 'logos/wKYRnAmy7vasu5mW3lvn6U7ofoEwmI1XqjSYDS2t.png', NULL, '2024-07-08 03:31:46', '2024-07-08 03:31:46'),
(2, 'Mandiri', 'Munahwati', '123762301491236', 'logos/dNGDux4EB4aIIBtW2KhmB7idqiMOvI6iaviyA6pY.png', NULL, '2024-07-08 03:32:01', '2024-07-08 03:32:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `package_bookings`
--

CREATE TABLE `package_bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `proof` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `package_tour_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `package_bank_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` bigint(20) UNSIGNED NOT NULL,
  `total_amount` bigint(20) UNSIGNED NOT NULL,
  `sub_total` bigint(20) UNSIGNED NOT NULL,
  `insurance` bigint(20) UNSIGNED NOT NULL,
  `tax` bigint(20) UNSIGNED NOT NULL,
  `is_paid` tinyint(1) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `package_bookings`
--

INSERT INTO `package_bookings` (`id`, `proof`, `package_tour_id`, `user_id`, `package_bank_id`, `quantity`, `total_amount`, `sub_total`, `insurance`, `tax`, `is_paid`, `start_date`, `end_date`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'proofs/ZVH4jgtfCv7GN7WiKCUK6szHkxnWKx5xPoYBqYp0.jpg', 4, 2, 1, 1, 30500000, 25000000, 3000000, 2500000, 1, '2025-03-29', '2025-03-29', NULL, '2024-07-08 03:33:25', '2024-07-10 09:52:16'),
(2, 'proofs/dov606pdsixZh17l2R0TwSn3G5zS1wH9clzgdErj.jpg', 4, 2, 1, 1, 30500000, 25000000, 3000000, 2500000, 1, '2024-07-10', '2024-07-10', NULL, '2024-07-09 00:14:37', '2024-07-10 09:50:45'),
(3, 'proofs/lGota9R4AXiBwigbe7cnaDYOJcIyrcumCqjOqWh6.jpg', 4, 2, 1, 1, 30500000, 25000000, 3000000, 2500000, 1, '2024-07-10', '2024-07-10', NULL, '2024-07-09 01:34:04', '2024-07-10 09:47:11'),
(4, 'proofs/8ZSXb3hSw5I93VEBM4bqosJUq3LwAod31H4mllde.jpg', 4, 2, 1, 1, 30500000, 25000000, 3000000, 2500000, 1, '2024-07-10', '2024-07-10', NULL, '2024-07-09 02:47:16', '2024-07-10 09:45:24'),
(5, 'dummytrx.png', 4, 2, 1, 2, 61000000, 50000000, 6000000, 5000000, 1, '2024-07-13', '2024-07-13', NULL, '2024-07-11 19:57:45', '2024-07-11 20:12:11'),
(6, 'dummytrx.png', 4, 2, 2, 1, 30500000, 25000000, 3000000, 2500000, 1, '2024-07-13', '2024-07-13', NULL, '2024-07-11 20:45:50', '2024-07-15 05:38:32'),
(7, 'proofs/fNs0FQf7NM6UiA0gppLNf9FBzVNHIfINMzh1GIBf.jpg', 4, 2, 1, 1, 30500000, 25000000, 3000000, 2500000, 1, '2024-07-13', '2024-07-13', NULL, '2024-07-11 20:46:24', '2024-07-11 20:50:41'),
(8, 'proofs/PaZo4q9qf3JTovWEu19cTy9O9iBkf7aYWFuMWCdM.jpg', 3, 2, 2, 2, 8200000, 2000000, 6000000, 200000, 1, '2024-07-16', '2024-07-16', NULL, '2024-07-15 05:42:01', '2024-07-15 05:45:13'),
(9, 'proofs/4g3bAFpPY60ltx2BhscIRhLGzNUn88AdsWbYrCIw.jpg', 2, 2, 1, 1, 85500000, 75000000, 3000000, 7500000, 1, '2024-07-25', '2024-07-25', NULL, '2024-07-15 05:45:50', '2024-07-15 05:59:02'),
(10, 'proofs/CjEE2Q6Uq6JpuQSRlglh6ugt3kC0lNS4HzTVmkYu.jpg', 4, 2, 1, 2, 61000000, 50000000, 6000000, 5000000, 1, '2024-07-27', '2024-07-27', NULL, '2024-07-15 07:24:39', '2024-07-15 07:32:16'),
(11, 'proofs/TaqK9J3FOR3poEepmEpXjKqeklrUspcqw1V1pCsb.jpg', 1, 2, 1, 1, 58000000, 50000000, 3000000, 5000000, 1, '2024-07-26', '2024-07-26', NULL, '2024-07-15 07:48:54', '2024-07-16 09:29:00'),
(12, 'dummytrx.png', 4, 2, 2, 1, 30500000, 25000000, 3000000, 2500000, 0, '2024-07-23', '2024-07-23', NULL, '2024-07-16 23:03:04', '2024-07-16 23:03:04'),
(13, 'dummytrx.png', 3, 2, 2, 1, 4100000, 1000000, 3000000, 100000, 0, '2024-07-26', '2024-07-26', NULL, '2024-07-16 23:06:21', '2024-07-16 23:06:21'),
(14, 'dummytrx.png', 3, 2, 2, 1, 4100000, 1000000, 3000000, 100000, 0, '2024-07-26', '2024-07-26', NULL, '2024-07-16 23:06:35', '2024-07-16 23:06:35'),
(15, 'proofs/arnQagbcNmFCo3HP4hIEa2mBEDZwuH6urQDIqzdJ.jpg', 3, 2, 1, 1, 4100000, 1000000, 3000000, 100000, 1, '2024-07-26', '2024-07-26', NULL, '2024-07-16 23:16:36', '2024-07-17 00:20:02'),
(16, 'dummytrx.png', 4, 2, 2, 1, 30500000, 25000000, 3000000, 2500000, 0, '2024-07-19', '2024-07-19', NULL, '2024-07-17 23:48:30', '2024-07-17 23:48:30'),
(17, 'dummytrx.png', 4, 2, 2, 1, 30500000, 25000000, 3000000, 2500000, 0, '2024-07-19', '2024-07-19', NULL, '2024-07-18 00:25:33', '2024-07-18 00:25:33'),
(18, 'dummytrx.png', 4, 2, 2, 1, 30500000, 25000000, 3000000, 2500000, 0, '2024-07-19', '2024-07-19', NULL, '2024-07-18 00:25:47', '2024-07-18 00:25:47'),
(19, 'dummytrx.png', 4, 2, 2, 1, 30500000, 25000000, 3000000, 2500000, 1, '2024-07-19', '2024-07-19', NULL, '2024-07-18 00:25:48', '2024-07-20 08:18:18'),
(20, 'proofs/idjCz5D282rsUOmy3LVHBG0KsS2hWVUT9Lm87uIk.jpg', 2, 2, 1, 1, 85500000, 75000000, 3000000, 7500000, 0, '2024-08-03', '2024-08-03', NULL, '2024-07-20 08:43:22', '2024-07-20 08:45:36'),
(21, 'proofs/JZ0bwHpOmAcG0qfUXOGWm3nnwByNSVX5nER7wzso.jpg', 4, 2, 1, 1, 30500000, 25000000, 3000000, 2500000, 0, '2024-08-02', '2024-08-02', NULL, '2024-07-22 01:50:29', '2024-07-22 02:15:40'),
(22, 'proofs/vRqsDp03qKoVLfI8rJjbeFxVVjX457aPL6n4MHdC.jpg', 4, 2, 1, 1, 30500000, 25000000, 3000000, 2500000, 1, '2024-07-24', '2024-07-24', NULL, '2024-07-22 04:31:53', '2024-07-22 04:32:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `package_photos`
--

CREATE TABLE `package_photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `package_tour_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `package_photos`
--

INSERT INTO `package_photos` (`id`, `photo`, `package_tour_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'package_photos/2024/07/08/ZYPevlWe6OdO4L5YmsYvMe86ZNiINWcJnABikU2i.jpg', 1, '2024-07-08 03:12:40', '2024-07-08 03:12:40', NULL),
(2, 'package_photos/2024/07/08/Uvz0gdtG6KRwJvVJMOngN1a7K5wcVy0YJOL5N3AZ.jpg', 1, '2024-07-08 03:12:40', '2024-07-08 03:12:40', NULL),
(3, 'package_photos/2024/07/08/Vs1k92aLEzaa01AtwKp8RpPIsqIvudswQOjrMQW4.jpg', 1, '2024-07-08 03:12:40', '2024-07-08 03:12:40', NULL),
(4, 'package_photos/2024/07/08/mXJ6NS0mgfuahS8jqIZ1nytIXxDawHz9TG6YQQdI.jpg', 2, '2024-07-08 03:15:12', '2024-07-08 03:15:12', NULL),
(5, 'package_photos/2024/07/08/xC6JQ6ErMzxOZqr2zaiau8lWdfFAml6Bvl97xb3L.jpg', 2, '2024-07-08 03:15:12', '2024-07-08 03:15:12', NULL),
(6, 'package_photos/2024/07/08/NibX3JH20iXtvmf1JT2i168HIrWz30FI0XBYR0P7.jpg', 2, '2024-07-08 03:15:12', '2024-07-08 03:15:12', NULL),
(7, 'package_photos/2024/07/08/M0TFTUxOcrtdGHQZSh4kUMWAoX8g6wGTeYlcNA3s.jpg', 3, '2024-07-08 03:18:42', '2024-07-08 03:18:42', NULL),
(8, 'package_photos/2024/07/08/jAStfpCNtAioXsCtFfqjEbHAK9kFW5OM6vzJNNst.jpg', 3, '2024-07-08 03:18:42', '2024-07-08 03:18:42', NULL),
(9, 'package_photos/2024/07/08/fJuHb29VNu3rt5myjRhwee1MAeVaqAhmbKVdVnQP.jpg', 3, '2024-07-08 03:18:42', '2024-07-08 03:18:42', NULL),
(10, 'package_photos/2024/07/08/GRF9a8Zt1Sw8NIsEOV7BTmzhR7UOE3ot7hPYeAfG.jpg', 4, '2024-07-08 03:22:36', '2024-07-08 03:22:36', NULL),
(11, 'package_photos/2024/07/08/LNDbbHulWNNgafQLkWZP4jJXFwMEtPBf1pYwMNR6.jpg', 4, '2024-07-08 03:22:36', '2024-07-08 03:22:36', NULL),
(12, 'package_photos/2024/07/08/mlas3IzRLW4iGGYdQoBLU4TR2uevxLmanQhn6Suk.jpg', 4, '2024-07-08 03:22:36', '2024-07-08 03:22:36', NULL),
(13, 'package_photos/2024/07/23/sBV5u6vP5RVNgHR8Fz4YgcdClIlsxlVNu6KSO3jK.jpg', 3, '2024-07-23 00:56:46', '2024-07-23 00:56:46', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `package_tours`
--

CREATE TABLE `package_tours` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` bigint(20) UNSIGNED NOT NULL,
  `days` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `package_tours`
--

INSERT INTO `package_tours` (`id`, `name`, `slug`, `thumbnail`, `location`, `about`, `price`, `days`, `category_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'WO + Paket 250 Undangan', 'wo-paket-250-undangan', 'thumbnails/2024/07/08/3C1tLZZrlDlm9IHA0Vvvig2htZfZbdifgZm1b48p.jpg', 'Depok, Jawa Barat', 'Selamat datang di Moonevent Organizer, tempat di mana setiap detail pernikahan Anda diperlakukan dengan penuh cinta dan perhatian. Kami adalah Wedding Organizer profesional yang berkomitmen untuk mewujudkan pernikahan impian Anda dengan sentuhan personal dan keahlian terbaik.\r\n\r\nPaket Pernikahan 250 Orang\r\n\r\nKami memahami bahwa setiap pasangan memiliki visi unik untuk hari istimewanya. Oleh karena itu, kami menawarkan Paket Pernikahan untuk 250 orang yang mencakup:\r\n\r\nVenue Pernikahan: Pilihan lokasi eksklusif dengan dekorasi elegan.\r\nCatering: Hidangan lezat dengan menu yang dapat disesuaikan.\r\nDekorasi: Konsep dekorasi yang sesuai dengan tema dan warna pilihan Anda.\r\nDokumentasi: Tim fotografer dan videografer profesional untuk mengabadikan setiap momen berharga.\r\nEntertainment: Hiburan menarik, termasuk band atau DJ untuk memeriahkan acara.\r\nKoordinasi Hari H: Tim kami akan memastikan semuanya berjalan lancar dan sesuai rencana.\r\nDengan pengalaman yang luas dan dedikasi tinggi, kami siap membantu Anda menciptakan kenangan tak terlupakan di hari pernikahan Anda.', 50000000, 1, 1, NULL, '2024-07-08 03:12:40', '2024-07-08 03:24:45'),
(2, 'WO + Paket 500 Undangan', 'wo-paket-500-undangan', 'thumbnails/2024/07/08/mSFKJfORBlrLmHeJj6DOHuutJZuIpFtiHNvHeX8g.jpg', 'Depok, Jawa Barat', 'Selamat datang di Moonevent Organizer, tempat di mana setiap detail pernikahan Anda diperlakukan dengan penuh cinta dan perhatian. Kami adalah Wedding Organizer profesional yang berkomitmen untuk mewujudkan pernikahan impian Anda dengan sentuhan personal dan keahlian terbaik.\r\n\r\nPaket Pernikahan 500 Orang\r\n\r\nKami memahami bahwa setiap pasangan memiliki visi unik untuk hari istimewanya. Oleh karena itu, kami menawarkan Paket Pernikahan untuk 500 undangan yang mencakup:\r\n\r\nVenue Pernikahan: Pilihan lokasi eksklusif dengan dekorasi elegan.\r\nCatering: Hidangan lezat dengan menu yang dapat disesuaikan.\r\nDekorasi: Konsep dekorasi yang sesuai dengan tema dan warna pilihan Anda.\r\nDokumentasi: Tim fotografer dan videografer profesional untuk mengabadikan setiap momen berharga.\r\nEntertainment: Hiburan menarik, termasuk band atau DJ untuk memeriahkan acara.\r\nKoordinasi Hari H: Tim kami akan memastikan semuanya berjalan lancar dan sesuai rencana.\r\nCrew WO: 5 ORANG\r\nDengan pengalaman yang luas dan dedikasi tinggi, kami siap membantu Anda menciptakan kenangan tak terlupakan di hari pernikahan Anda.', 75000000, 1, 1, NULL, '2024-07-08 03:15:12', '2024-07-08 03:15:12'),
(3, 'WO Sekitar Jakarta Selatan 1000 Undangan', 'wo-sekitar-jakarta-selatan-1000-undangan', 'thumbnails/2024/07/23/190vaUpsmzAoVVep4HLXES68fl0iPOuISUEhx2iB.jpg', 'Jakarta Selatan', 'Selamat datang di Moonevent Organizer, tempat di mana setiap detail pernikahan Anda diperlakukan dengan penuh cinta dan perhatian. Kami adalah Wedding Organizer profesional yang berkomitmen untuk mewujudkan pernikahan impian Anda dengan sentuhan personal dan keahlian terbaik.\r\n\r\nPaket Pernikahan 1000 Orang\r\n\r\nCrew WO: 10 ORANG\r\nDengan pengalaman yang luas dan dedikasi tinggi, kami siap membantu Anda menciptakan kenangan tak terlupakan di hari pernikahan Anda.', 1000000, 1, 2, NULL, '2024-07-08 03:18:42', '2024-07-23 00:56:46'),
(4, 'Sewa Gedung 250 Undangan', 'sewa-gedung-250-undangan', 'thumbnails/2024/07/08/zQFkp12l0QD4zuot6rjllSPPHDnSS1zncTU7IquX.png', 'Depok, Jawa Barat', 'Penyewaan Ruangan di Gedung JGU Depok dengan kapasitas 250 orang  yang mendapatkan fasilitas sebagai berikut\r\n- tempat parkir 100 mobil\r\n- tempat parkir executive 25 mobil\r\n- listrik 10.000 watt\r\n-\r\n-', 25000000, 1, 4, NULL, '2024-07-08 03:22:36', '2024-07-08 03:22:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'manage categories', 'web', '2024-07-08 02:55:31', '2024-07-08 02:55:31'),
(2, 'manage packages', 'web', '2024-07-08 02:55:31', '2024-07-08 02:55:31'),
(3, 'manage transactions', 'web', '2024-07-08 02:55:31', '2024-07-08 02:55:31'),
(4, 'manage packages banks', 'web', '2024-07-08 02:55:31', '2024-07-08 02:55:31'),
(5, 'checkout package', 'web', '2024-07-08 02:55:31', '2024-07-08 02:55:31'),
(6, 'view order', 'web', '2024-07-08 02:55:31', '2024-07-08 02:55:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'customer', 'web', '2024-07-08 02:55:31', '2024-07-08 02:55:31'),
(2, 'super_admin', 'web', '2024-07-08 02:55:31', '2024-07-08 02:55:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(5, 1),
(6, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('2iszjADxU6ZKZCG2KpU7eyuNuEUBEat55s362SRk', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiNXBrUnV4dzF4QzRjNElHTFdyTEczcWk2MXkwY2dJSm1rcnRObVBscyI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQxOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYWRtaW4vcGFja2FnZV90b3VycyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1721727484),
('HvSrA9RGsrcxBG3YYbpIGrixjK2GJYOkYSxCq4xL', NULL, '127.0.0.1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.6 Mobile/15E148 Safari/604.1 Edg/126.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVklvSElYajVoSERqVUtRVzBkRVNlRnBhY0hoNjJUN1ExNngzdlBhUyI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo0MjoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2Rhc2hib2FyZC9teS1ib29raW5nIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jYXRlZ29yeS9zZXdhLWdlZHVuZy1qZ3UiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1721719617),
('kX9J5DZFuNx9oncdXKo1H01HNk863VMJNgix3vU5', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoidlNwQUNWM05Lc05yWksycUxrTmR3ZWk0UDJjZ2dwQXBwdnF6MjJlaiI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI5OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvcHJvZmlsZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1721696887),
('zgN4giifG5aljwevA1fWISSJK0pSgq251M8AZgx6', 2, '127.0.0.1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.6 Mobile/15E148 Safari/604.1 Edg/126.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiMmVGYnRvMzdzelBVQjRTR2RMamJ4TjVhZ2tzWXdSMVhmaXFhaGt0NCI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjUzOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvZGFzaGJvYXJkL215LWJvb2tpbmdzL2RldGFpbHMvMSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7fQ==', 1721696886);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `avatar`, `phone_number`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'super admin', 'image/default-avatar.png', '62839439892', 'super@admin.com', NULL, '$2y$12$v7l8a6dRxRQhrJuYYBJ8K.msBHtUcvVYDKXPsCwiTV8xjZ21Ca3wy', NULL, '2024-07-08 02:55:31', '2024-07-08 02:55:31'),
(2, 'Kusumawardhana Hadi Surya', 'avatars/P3Ck8x7QfxmwtBlntMtNtNNjHKzDaBjgA6ZUBzTe.jpg', '087885619509', 'kuskus@gmail.com', NULL, '$2y$12$g.sft3tDnnpBe61O8VSEKOP4BeP70IjkCAL//9sXCFCTO2tnWDbSC', NULL, '2024-07-08 02:57:40', '2024-07-08 02:57:40');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `package_banks`
--
ALTER TABLE `package_banks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `package_bookings`
--
ALTER TABLE `package_bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `package_bookings_package_tour_id_foreign` (`package_tour_id`),
  ADD KEY `package_bookings_user_id_foreign` (`user_id`),
  ADD KEY `package_bookings_package_bank_id_foreign` (`package_bank_id`);

--
-- Indeks untuk tabel `package_photos`
--
ALTER TABLE `package_photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `package_photos_package_tour_id_foreign` (`package_tour_id`);

--
-- Indeks untuk tabel `package_tours`
--
ALTER TABLE `package_tours`
  ADD PRIMARY KEY (`id`),
  ADD KEY `package_tours_category_id_foreign` (`category_id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT untuk tabel `package_banks`
--
ALTER TABLE `package_banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `package_bookings`
--
ALTER TABLE `package_bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `package_photos`
--
ALTER TABLE `package_photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `package_tours`
--
ALTER TABLE `package_tours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `package_bookings`
--
ALTER TABLE `package_bookings`
  ADD CONSTRAINT `package_bookings_package_bank_id_foreign` FOREIGN KEY (`package_bank_id`) REFERENCES `package_banks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `package_bookings_package_tour_id_foreign` FOREIGN KEY (`package_tour_id`) REFERENCES `package_tours` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `package_bookings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `package_photos`
--
ALTER TABLE `package_photos`
  ADD CONSTRAINT `package_photos_package_tour_id_foreign` FOREIGN KEY (`package_tour_id`) REFERENCES `package_tours` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `package_tours`
--
ALTER TABLE `package_tours`
  ADD CONSTRAINT `package_tours_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
