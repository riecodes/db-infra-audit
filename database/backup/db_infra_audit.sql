-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2025 at 08:49 AM
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
-- Database: `db_infra_audit`
--

-- --------------------------------------------------------

--
-- Table structure for table `buildings`
--

CREATE TABLE `buildings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `lat` decimal(10,7) NOT NULL,
  `lng` decimal(10,7) NOT NULL,
  `main_img` varchar(255) DEFAULT NULL,
  `no_of_storey` varchar(255) DEFAULT NULL,
  `type_of_building` varchar(255) DEFAULT NULL,
  `type_of_structure` varchar(255) DEFAULT NULL,
  `design_occupancy` varchar(255) DEFAULT NULL,
  `year_edition_of_nscp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buildings`
--

INSERT INTO `buildings` (`id`, `name`, `lat`, `lng`, `main_img`, `no_of_storey`, `type_of_building`, `type_of_structure`, `design_occupancy`, `year_edition_of_nscp`) VALUES
(1, 'Aquabest', 14.3224200, 120.7537313, '01_AquaBEST_Building.jpg', '2.0', 'Concrete Frame', 'Cast-in-Place & Pre-Cast', 'School', '2015'),
(2, 'STAR Building', 14.3226386, 120.7534904, '10_STAR _Center Bldg.jpg', '3.0', 'Concrete Frame', 'Cast-in-Place', 'School', '2015'),
(3, 'Supply office', 14.3228316, 120.7536801, '02_Pangasiwaan_Supply Office.jpg', '1.0', 'Concrete Frame', 'Cast-in-Place & Pre-Cast', 'School, Offices', 'Pre-Code'),
(4, 'Pangasiwaan', 14.3230521, 120.7537673, '02_Pangasiwaan_Supply Office.jpg', '1.0', 'Concrete Frame', 'Cast-in-Place & Pre-Cast', 'School, Offices', 'Pre-Code'),
(5, 'HR/Accounting', 14.3232023, 120.7540298, '03_Human Resources Office_Accounting Office_.jpg', '1.0', 'Concrete Frame', 'Cast-in-Place', 'School, Offices', '2001'),
(6, 'OSAS/CSG/ROTC', 14.3226051, 120.7541075, '05_OSAS_CSG_ROTC.jpg', '2.0', 'Concrete Frame', 'Cast-in-Place', 'School, Offices', '1992'),
(7, 'PPSS', 14.3224868, 120.7541515, '06_PPSS_Office.jpg', '1.0', 'Concrete Frame', 'Cast-in-Place', 'Offices', '1992'),
(8, 'Aklatan', 14.3229042, 120.7542756, '09_Aklatan.jpg', '2.0', 'Concrete Frame', 'Cast-in-Place', 'School', '2015'),
(9, 'Infirmary', 14.3230265, 120.7544064, '08_Infirmary.jpg', '1.0', 'Concrete Frame', 'Cast-in-Place', 'School, Health Center', '2015'),
(10, 'Gym', 14.3231598, 120.7543591, '07_Gym_Canteen.jpg', '1.0', 'Concrete Frame', 'Cast-in-Place', 'School, Commercial', '1992'),
(11, 'Coop', 14.3231751, 120.7542327, '04_Cooperative Office.jpg', '1.0', 'Concrete Frame', 'Cast-in-Place', 'School, Offices', '1992'),
(12, 'Canteen', 14.3231664, 120.7544831, '07_Gym_Canteen.jpg', '1.0', 'Concrete Frame', 'Cast-in-Place', 'School, Commercial', '1992'),
(13, 'Management Building 1', 14.3232810, 120.7543823, '11_Management Department Building No.1.JPG', '1.0', 'Concrete Frame', 'Cast-in-Place', 'School', 'Pre-code'),
(14, 'Management Building 2', 14.3233889, 120.7544560, '12_Management Department Building No.2.jpg', '1.0', 'Concrete Frame', 'Cast-in-Place', 'School', 'Pre-code'),
(15, 'Management Building 3', 14.3235410, 120.7545464, '13_Management Department Building No.3.JPG', '1.0', 'Concrete Frame', 'Cast-in-Place', 'School', 'Pre-code'),
(16, 'Management Building 4', 14.3236384, 120.7546926, '14_Management Department Building No.4.jpg', '1.0', 'Concrete Frame', 'Cast-in-Place', 'School', 'Pre-code'),
(17, 'Management Building 5', 14.3234565, 120.7546725, '15_Management Department Building No.5.JPG', '1.0', 'Concrete Frame', 'Cast-in-Place', 'School', '1992');

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
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `facebook_name` varchar(255) DEFAULT NULL,
  `facebook_url` varchar(255) DEFAULT NULL,
  `avatar_path` varchar(255) DEFAULT NULL,
  `display_order` int(11) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `first_name`, `middle_name`, `last_name`, `full_name`, `email`, `facebook_name`, `facebook_url`, `avatar_path`, `display_order`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'GIAN KELLY', 'S.', 'ALIBANGBANG', 'ALIBANGBANG, GIAN KELLY S.', 'giankelly.alibangbang@cvsu.edu.ph', 'Kelly Ali', 'gnklly', 'ALIBANGBANG.png', 1, 1, '2025-06-03 19:45:50', '2025-06-03 19:57:00'),
(2, 'MAECHELLE REI', 'M.', 'ASUNCION', 'ASUNCION, MAECHELLE REI M.', 'maechellerei.asuncion@cvsu.edu.ph', 'Maechelle Rei', '219.mache', 'ASUNCION.png', 2, 1, '2025-06-03 19:45:50', '2025-06-03 19:57:00'),
(3, 'BEATRIZE', 'E.', 'BUNADO', 'BUNADO, BEATRIZE E.', 'beatrize.bunado@cvsu.edu.ph', 'Beatrize Elevad', 'bunadobeatrize08', 'BUNADO.JPG', 3, 1, '2025-06-03 19:45:50', '2025-06-03 19:57:00'),
(4, 'ELLA LUISA', 'M.', 'CAPAROS', 'CAPAROS, ELLA LUISA M.', 'ellaluisa.caparos@cvsu.edu.ph', 'Ella Caparos', 'caparosella', 'CAPAROS.jpg', 4, 1, '2025-06-03 19:45:50', '2025-06-03 19:57:00'),
(5, 'PAUL DARYLE', 'T.', 'ASTILLA', 'ASTILLA, PAUL DARYLE T.', 'pauldaryle.astilla@cvsu.edu.ph', 'Paul Daryle Astilla', 'pauldaryle.astilla', 'ASTILLA.JPG', 5, 1, '2025-06-03 19:45:50', '2025-06-03 19:57:00'),
(6, 'MA. TRISHA RHUMAE', 'M.', 'BAES', 'BAES, MA. TRISHA RHUMAE M.', 'trisharhumae.baes@cvsu.edu.ph', 'Trisha Rhumae Baes', 'trisha.rhumae.baes.2024', 'BAES.jpg', 6, 1, '2025-06-03 19:45:50', '2025-06-03 19:57:00'),
(7, 'LADY THEA', 'G.', 'CAMPOZO', 'CAMPOZO, LADY THEA G.', 'ladythea.campozo@cvsu.edu.ph', 'Lady Thea Campozo', 'lady.thea.campozo.2024', 'CAMPOSO.jpg', 7, 1, '2025-06-03 19:45:50', '2025-06-03 19:57:00');

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
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_05_28_172604_create_buildings_table', 1),
(5, '2025_06_04_034116_create_contacts_table', 2),
(6, '2025_06_05_000000_add_building_info_columns_to_buildings_table', 3);

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
('lf68NsKK6wydGUyoml0TjmZ7pI7tcQNiioN6otZ3', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.100.3 Chrome/132.0.6834.210 Electron/34.5.1 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWFp4M2RST2pSTm0xN3FiN1MxWXZPaGZ6N1Q4OEYxRDdNU1BldDZORCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTI0OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYnVpbGRpbmdzL3N0YXItYnVpbGRpbmcvYXVkaXQ/aWQ9OTUxZTA3NzEtNDI4Mi00ZjUxLWI4N2EtYThiNmFkMjNmNzY2JnZzY29kZUJyb3dzZXJSZXFJZD0xNzQ5MDEzNjQxMTM0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749013641),
('x3CJTk487xsdTTccMMB8vTsMA4gXK9UmZlmlaM38', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWUNDd3R5cXBHNWV0T0h0WXd3Z0lIUGp2blM5SEFGYnAxQ0VGUXdFMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9idWlsZGluZ3MvYXF1YWJlc3QvYXVkaXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1749019663),
('xr9EZT1lBVPJgQLEhXF17msW40oNb4GtH5I4d6Hl', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.100.3 Chrome/132.0.6834.210 Electron/34.5.1 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiREJFNEdLUVN6bndqMkI0dTJ0aVNTTlZsYVJmUjN4bzFCRzJRR2txaCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTI0OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYnVpbGRpbmdzL3N0YXItYnVpbGRpbmcvYXVkaXQ/aWQ9OTUxZTA3NzEtNDI4Mi00ZjUxLWI4N2EtYThiNmFkMjNmNzY2JnZzY29kZUJyb3dzZXJSZXFJZD0xNzQ5MDEzODMxOTcxIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749013832);

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'a@a.com', '2025-06-03 19:36:21', '$2y$12$nopcT1t/X0Q5bSSSzJImCemn3IfXTC32vcs.SdGvgdzjGCc21AK6u', 'tDgANjJBpY', '2025-06-03 19:36:21', '2025-06-03 19:36:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buildings`
--
ALTER TABLE `buildings`
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
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contacts_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `buildings`
--
ALTER TABLE `buildings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
