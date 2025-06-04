-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2025 at 04:31 PM
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
  `year_edition_of_nscp` varchar(255) DEFAULT NULL,
  `rvs_score` decimal(3,1) DEFAULT NULL,
  `rvs_assessment` varchar(255) DEFAULT NULL,
  `vulnerable_earthquake` tinyint(1) NOT NULL DEFAULT 0,
  `vulnerable_landslide` tinyint(1) NOT NULL DEFAULT 0,
  `vulnerable_liquefaction` tinyint(1) NOT NULL DEFAULT 0,
  `vulnerable_tsunami` tinyint(1) NOT NULL DEFAULT 0,
  `vulnerable_storm_surge` tinyint(1) NOT NULL DEFAULT 0,
  `structural_condition` varchar(255) DEFAULT NULL,
  `nonstructural_condition` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `documentation_imgs` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buildings`
--

INSERT INTO `buildings` (`id`, `name`, `lat`, `lng`, `main_img`, `no_of_storey`, `type_of_building`, `type_of_structure`, `design_occupancy`, `year_edition_of_nscp`, `rvs_score`, `rvs_assessment`, `vulnerable_earthquake`, `vulnerable_landslide`, `vulnerable_liquefaction`, `vulnerable_tsunami`, `vulnerable_storm_surge`, `structural_condition`, `nonstructural_condition`, `slug`, `description`, `documentation_imgs`) VALUES
(1, 'Aquabest', 14.3224200, 120.7537313, '01_AquaBEST_Building.jpg', '2.0', 'Concrete Frame', 'Cast-in-Place & Pre-Cast', 'School', '2015', 2.3, 'Structure may not be vulnerable to Seismic Hazard', 1, 0, 1, 1, 0, 'No adverse defects', 'Presence of minor non-structural defects', 'aquabest', 'Aquaculture, Biology, Science and Technology Building', '01_AquaBEST_Bldg/01_AquaBEST_Bldg (1).jpg,01_AquaBEST_Bldg/01_AquaBEST_Bldg (2).jpg,01_AquaBEST_Bldg/01_AquaBEST_Bldg (3).jpg'),
(2, 'STAR Building', 14.3226386, 120.7534904, '10_STAR _Center Bldg.jpg', '3.0', 'Concrete Frame', 'Cast-in-Place', 'School', '2015', 2.3, 'Structure may not be vulnerable to Seismic Hazard', 1, 0, 1, 1, 0, 'No adverse defects', 'Presence of minor non-structural defects', 'star-building', 'Science, Technology and Applied Research (STAR) Center Building', '10_STAR_Center Bldg/10_STAR_Center Bldg (1).jpg,10_STAR_Center Bldg/10_STAR_Center Bldg (2).jpg'),
(3, 'Supply office', 14.3228316, 120.7536801, '02_Pangasiwaan_Supply Office.jpg', '1.0', 'Concrete Frame', 'Cast-in-Place & Pre-Cast', 'School, Offices', 'Pre-Code', 0.4, 'Structure may be vulnerable to Seismic Hazard', 1, 0, 1, 1, 0, 'No adverse defects', 'Presence of minor non-structural defects', 'supply-office', 'Supply Office Building', '02_Pangasiwaan-Supply Office/02_Pangasiwaan-Supply Office (1).jpg,02_Pangasiwaan-Supply Office/02_Pangasiwaan-Supply Office (2).jpg,02_Pangasiwaan-Supply Office/02_Pangasiwaan-Supply Office (3).jpg'),
(4, 'Pangasiwaan', 14.3230521, 120.7537673, '02_Pangasiwaan_Supply Office.jpg', '1.0', 'Concrete Frame', 'Cast-in-Place & Pre-Cast', 'School, Offices', 'Pre-Code', 0.4, 'Structure may be vulnerable to Seismic Hazard', 1, 0, 1, 1, 0, 'No adverse defects', 'Presence of minor non-structural defects', 'pangasiwaan', 'Pangasiwaan Building', '02_Pangasiwaan-Supply Office/02_Pangasiwaan-Supply Office (1).jpg,02_Pangasiwaan-Supply Office/02_Pangasiwaan-Supply Office (2).jpg,02_Pangasiwaan-Supply Office/02_Pangasiwaan-Supply Office (3).jpg'),
(5, 'HR/Accounting', 14.3232023, 120.7540298, '03_Human Resources Office_Accounting Office_.jpg', '1.0', 'Concrete Frame', 'Cast-in-Place', 'School, Offices', '2001', 2.3, 'Structure may not be vulnerable to Seismic Hazard', 1, 0, 1, 1, 0, 'Presence of minor structural defects', 'No adverse defects', 'hraccounting', 'Human Resource Office and Accounting Office', '03_Human Resource Office-Accounting Office/03_Human Resource Office-Accounting Office (1).jpg,03_Human Resource Office-Accounting Office/03_Human Resource Office-Accounting Office (2).jpg,03_Human Resource Office-Accounting Office/03_Human Resource Office-Accounting Office (3).jpg'),
(6, 'OSAS/CSG/ROTC', 14.3226051, 120.7541075, '05_OSAS_CSG_ROTC.jpg', '2.0', 'Concrete Frame', 'Cast-in-Place', 'School, Offices', '1992', 2.3, 'Structure may not be vulnerable to Seismic Hazard', 1, 0, 1, 1, 0, 'Presence of minor structural defects', 'Presence of localized defect found', 'osascsgrotc', 'Office of the Student Affairs and Services, Central Student Government Office, Reserve Officers Training Corps Office', '05_OSAS_CSG_ROTC Office/05_OSAS_CSG_ROTC Office (1).jpg,05_OSAS_CSG_ROTC Office/05_OSAS_CSG_ROTC Office (2).jpg,05_OSAS_CSG_ROTC Office/05_OSAS_CSG_ROTC Office (3).jpg'),
(7, 'PPSS', 14.3224868, 120.7541515, '06_PPSS_Office.jpg', '1.0', 'Concrete Frame', 'Cast-in-Place', 'Offices', '1992', 2.3, 'Structure may not be vulnerable to Seismic Hazard', 1, 0, 1, 1, 0, 'No adverse defects', 'Presence of minor non-structural defects', 'ppss', 'Physical Plant and Security Services Office', '06_PPSS_Office/06_PPSS_Office (1).jpg,06_PPSS_Office/06_PPSS_Office (2).jpg'),
(8, 'Aklatan', 14.3229042, 120.7542756, '09_Aklatan.jpg', '2.0', 'Concrete Frame', 'Cast-in-Place', 'School', '2015', 2.3, 'Structure may not be vulnerable to Seismic Hazard', 1, 0, 1, 1, 0, 'No adverse defects', 'No adverse defects', 'aklatan', 'Aklatan (Library)', '09_Aklatan/09_Aklatan (1).jpg,09_Aklatan/09_Aklatan (2).jpg,09_Aklatan/09_Aklatan (3).jpg'),
(9, 'Infirmary', 14.3230265, 120.7544064, '08_Infirmary.jpg', '1.0', 'Concrete Frame', 'Cast-in-Place', 'School, Health Center', '2015', 2.3, 'Structure may not be vulnerable to Seismic Hazard', 1, 0, 1, 1, 0, 'Presence of minor structural defects', 'Presence of minor non-structural defects', 'infirmary', 'Campus Infirmary', '08_Infirmary/08_Infirmary (1).jpg,08_Infirmary/08_Infirmary (2).jpg,08_Infirmary/08_Infirmary (3).jpg'),
(10, 'Gym', 14.3231598, 120.7543591, '07_Gym_Canteen.jpg', '1.0', 'Concrete Frame', 'Cast-in-Place', 'School, Commercial', '1992', 2.3, 'Structure may not be vulnerable to Seismic Hazard', 1, 0, 1, 1, 0, 'Presence of minor structural defects', 'Presence of minor non-structural defects', 'gym', 'Campus Gymnasium', '07_Gym_Canteen/07_Gym_Canteen (1).jpg'),
(11, 'Coop', 14.3231751, 120.7542327, '04_Cooperative Office.jpg', '1.0', 'Concrete Frame', 'Cast-in-Place', 'School, Offices', '1992', 1.9, 'Structure may be vulnerable to Seismic Hazard', 1, 0, 1, 1, 0, 'Presence of minor structural defects', 'Presence of localized defect found', 'coop', 'Cooperative Office', '04_Cooperative Office/04_Cooperative Office (1).jpg,04_Cooperative Office/04_Cooperative Office (2).jpg,04_Cooperative Office/04_Cooperative Office (3).jpg'),
(12, 'Canteen', 14.3231664, 120.7544831, '07_Gym_Canteen.jpg', '1.0', 'Concrete Frame', 'Cast-in-Place', 'School, Commercial', '1992', 2.3, 'Structure may not be vulnerable to Seismic Hazard', 1, 0, 1, 1, 0, 'Presence of minor structural defects', 'Presence of minor non-structural defects', 'canteen', 'Campus Canteen', '07_Gym_Canteen/07_Gym_Canteen (1).jpg'),
(13, 'Management Building 1', 14.3232810, 120.7543823, '11_Management Department Building No.1.JPG', '1.0', 'Concrete Frame', 'Cast-in-Place', 'School', 'Pre-code', 0.8, 'Structure may be vulnerable to Seismic Hazard', 1, 0, 1, 1, 0, 'Presence of minor structural defects', 'Presence of minor non-structural defects', 'management-building-1', 'Management Department Building No. 1', '11_Management Department Bldg No. 1/11_Management Department Bldg No. 1 (1).jpg,11_Management Department Bldg No. 1/11_Management Department Bldg No. 1 (2).jpg,11_Management Department Bldg No. 1/11_Management Department Bldg No. 1 (3).jpg'),
(14, 'Management Building 2', 14.3233889, 120.7544560, '12_Management Department Building No.2.jpg', '1.0', 'Concrete Frame', 'Cast-in-Place', 'School', 'Pre-code', 0.8, 'Structure may be vulnerable to Seismic Hazard', 1, 0, 1, 1, 0, 'Presence of minor structural defects', 'Presence of localized defect found', 'management-building-2', 'Management Department Building No. 2', '12_Management Department Bldg No. 2/12_Management Department Bldg No. 2 (1).jpg,12_Management Department Bldg No. 2/12_Management Department Bldg No. 2 (2).jpg,12_Management Department Bldg No. 2/12_Management Department Bldg No. 2 (3).jpg,12_Management Department Bldg No. 2/12_Management Department Bldg No. 2 (4).jpg'),
(15, 'Management Building 3', 14.3235410, 120.7545464, '13_Management Department Building No.3.JPG', '1.0', 'Concrete Frame', 'Cast-in-Place', 'School', 'Pre-code', 0.8, 'Structure may be vulnerable to Seismic Hazard', 1, 0, 1, 1, 0, 'Presence of minor structural defects', 'Presence of minor non-structural defects', 'management-building-3', 'Management Department Building No. 3', '13_Management Department Bldg No. 3/13_Management Department Bldg No. 3 (1).jpg,13_Management Department Bldg No. 3/13_Management Department Bldg No. 3 (2).jpg,13_Management Department Bldg No. 3/13_Management Department Bldg No. 3 (3).jpg'),
(16, 'Management Building 4', 14.3236384, 120.7546926, '14_Management Department Building No.4.jpg', '1.0', 'Concrete Frame', 'Cast-in-Place', 'School', 'Pre-code', 0.8, 'Structure may be vulnerable to Seismic Hazard', 1, 0, 1, 1, 0, 'Presence of some severe defect found', 'Presence of minor non-structural defects', 'management-building-4', 'Management Department Building No. 4', '14_Management Department Bldg No. 4/14_Management Department Bldg No. 4 (1).jpg,14_Management Department Bldg No. 4/14_Management Department Bldg No. 4 (2).jpg,14_Management Department Bldg No. 4/14_Management Department Bldg No. 4 (3).jpg,14_Management Department Bldg No. 4/14_Management Department Bldg No. 4 (4).jpg'),
(17, 'Management Building 5', 14.3234565, 120.7546725, '15_Management Department Building No.5.JPG', '1.0', 'Concrete Frame', 'Cast-in-Place', 'School', '1992', 2.3, 'Structure may not be vulnerable to Seismic Hazard', 1, 0, 1, 1, 0, 'Presence of minor structural defects', 'Presence of minor non-structural defects', 'management-building-5', 'Management Department Building No. 5', '15_Management Department Bldg No. 5/15_Management Department Bldg No. 5 (1).jpg,15_Management Department Bldg No. 5/15_Management Department Bldg No. 5 (2).jpg,15_Management Department Bldg No. 5/15_Management Department Bldg No. 5 (3).jpg,15_Management Department Bldg No. 5/15_Management Department Bldg No. 5 (4).jpg');

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
(6, '2025_06_05_000000_add_building_info_columns_to_buildings_table', 3),
(7, '2025_06_04_065940_add_audit_columns_to_buildings_table', 4),
(8, '2025_06_06_000000_add_documentation_imgs_to_buildings_table', 5),
(9, '2025_06_07_000000_fix_duplicate_building_slugs', 6);

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
('0Try79hWXwgAYeaKotfMsVvH7OPAgZaC5UnWPxUY', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-US) WindowsPowerShell/5.1.26100.4202', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiT2Y2cWI5T1BCSFhGZHozakNaWWVvUTY2bDdvRGlFYnhMUGt2SGZvOSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749029996),
('0ztlCIZFOjQXdlprFqkG7jWcffDidOPuMyClXC44', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.100.3 Chrome/132.0.6834.210 Electron/34.5.1 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMjFDOWp1Uk9QVmJyOXBBUkd5bloxcGgyS2VOWHNVQlh0YVJRbkQzbyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTAwOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvbG9naW4/aWQ9ZDc0ODc5MjMtODk0My00Y2Y5LWIzN2ItYzc3ZTU1ODI4NjQxJnZzY29kZUJyb3dzZXJSZXFJZD0xNzQ5MDMwMzMzNTAxIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749030333),
('2UYr84EqNu01ntDnZJcGcrttZRqE2CzHxEypXeb9', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.100.3 Chrome/132.0.6834.210 Electron/34.5.1 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiV09YbkVGZEJTVVB6OE85aW9EVEhvNDBjQ281N3ozU0NZM2dwOGdNZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTI0OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYnVpbGRpbmdzL3N0YXItYnVpbGRpbmcvYXVkaXQ/aWQ9ZGFhODgwODYtY2Q2Zi00MjI2LTg5YWUtZWExZDg3NmZiMjk5JnZzY29kZUJyb3dzZXJSZXFJZD0xNzQ5MDMxMTM1OTQyIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749031136),
('5iWB0TB6Z4JTRbQIyHU0RGjd3nQGxGWiNBQV6XX5', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.100.3 Chrome/132.0.6834.210 Electron/34.5.1 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOVZscTRZaHF3OXRXMVhmR1dVMlBQNXpTVWdQR3dUNDFqZTY2dE1URiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTIyOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYnVpbGRpbmdzL2d5bS1hbmQtY2FudGVlbi0yP2lkPWRhYTg4MDg2LWNkNmYtNDIyNi04OWFlLWVhMWQ4NzZmYjI5OSZ2c2NvZGVCcm93c2VyUmVxSWQ9MTc0OTAzMTM2NDIwOSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1749031364),
('5YNeBs2yytb60D9t9usU0UWsYI3LFgYrgERDqZkg', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.100.3 Chrome/132.0.6834.210 Electron/34.5.1 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRXB3NG5sU2o1MjJpYVFCTGo1cnlnMkNWU2tWZjJvcUlnc0RXM0I2MiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTExOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvY3JlYXRlLXRlc3QtdXNlcj9pZD1kNzQ4NzkyMy04OTQzLTRjZjktYjM3Yi1jNzdlNTU4Mjg2NDEmdnNjb2RlQnJvd3NlclJlcUlkPTE3NDkwMzAzMjkyNDgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1749030329),
('6Cz7FYghlrlNpszaBOne9UCGdvVVHW2eLPIIWLGJ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.100.3 Chrome/132.0.6834.210 Electron/34.5.1 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ0J4aUUwa2w1TlM4djlmcVpqYll0ejZDTWgzYlVQUExKbkxnVUxCViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTA4OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYnVpbGRpbmdzL2d5bT9pZD1kNzQ4NzkyMy04OTQzLTRjZjktYjM3Yi1jNzdlNTU4Mjg2NDEmdnNjb2RlQnJvd3NlclJlcUlkPTE3NDkwMjk4MDI0MzIiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1749029802),
('6VlKTgCjkMVr4iZo7fAtRPC4s9jCqTeA5JDMRN1x', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.100.3 Chrome/132.0.6834.210 Electron/34.5.1 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNUU3STZJOU5XbEROTDdTUWdFR1oycXFaamFrZWEzYmpDNlhQMzZtMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTM2OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYnVpbGRpbmdzL3N1cHBseS1vZmZpY2UtYW5kLXBhbmdhc2l3YWFuLTI/aWQ9ZGFhODgwODYtY2Q2Zi00MjI2LTg5YWUtZWExZDg3NmZiMjk5JnZzY29kZUJyb3dzZXJSZXFJZD0xNzQ5MDMxMzU0MDQ0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749031354),
('7mvpjOjFC8H6G4ZRvqtVbfcX6yknFJ8INFfQTu2H', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.100.3 Chrome/132.0.6834.210 Electron/34.5.1 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibnM2R3NwMzJPRG5mQzkxektiQVhBbTB5VWN5aE1iell4OEJyMGV4dyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTE2OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYnVpbGRpbmdzL2d5bS1jYW50ZWVuP2lkPWQ3NDg3OTIzLTg5NDMtNGNmOS1iMzdiLWM3N2U1NTgyODY0MSZ2c2NvZGVCcm93c2VyUmVxSWQ9MTc0OTAyOTIwNjQ1MiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1749029206),
('acXsgy6lNTq4J8WwnnlmK81nDRQ6QyxQHrH7iqVq', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.100.3 Chrome/132.0.6834.210 Electron/34.5.1 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib2tqR2JtcWZ0alZzMU5ORjhrYk1UTUlGZURIV0sxQnJTOUVNVVdrbCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTAwOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvbG9naW4/aWQ9ZGFhODgwODYtY2Q2Zi00MjI2LTg5YWUtZWExZDg3NmZiMjk5JnZzY29kZUJyb3dzZXJSZXFJZD0xNzQ5MDM0NDI0MTIwIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749034424),
('aR28hGRHSfNXdOyE32W8ZBQagosaWNkK0FLPUWRo', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.100.3 Chrome/132.0.6834.210 Electron/34.5.1 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVzdmR05NTWtpbFRTTmtMaUdxbmJhWDFONllUZm5RNVZVZWxkNWpRMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6OTU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC8/aWQ9ZDc0ODc5MjMtODk0My00Y2Y5LWIzN2ItYzc3ZTU1ODI4NjQxJnZzY29kZUJyb3dzZXJSZXFJZD0xNzQ5MDI5MTk0MzMzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749029194),
('bg13YwWmV4YEyz9Wmt9Pa7jsmh7gkoBg9BXDBWuO', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.100.3 Chrome/132.0.6834.210 Electron/34.5.1 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiakdaTXhKTDBHbDhreDNRZ3IzT0FCb0l4bnBuVVNLUVNFSzZmcDk5ZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTE5OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYnVpbGRpbmdzL2FxdWFiZXN0L2F1ZGl0P2lkPWRhYTg4MDg2LWNkNmYtNDIyNi04OWFlLWVhMWQ4NzZmYjI5OSZ2c2NvZGVCcm93c2VyUmVxSWQ9MTc0OTAzMDkyNjMzMyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1749030926),
('DpjbVmXqIxfBAhZ1HlZqEkk5KULtYOinCPR8MyKp', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.100.3 Chrome/132.0.6834.210 Electron/34.5.1 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidmlHVlFwdUNaa2lkSzJEdHpiWU50QkkwRnlhRmJlSzBVZVlac0xwaCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTMwOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYnVpbGRpbmdzL3Bhbmdhc2l3YWFuLXN1cHBseS1vZmZpY2U/aWQ9ZDc0ODc5MjMtODk0My00Y2Y5LWIzN2ItYzc3ZTU1ODI4NjQxJnZzY29kZUJyb3dzZXJSZXFJZD0xNzQ5MDI5MjAxMDc1Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749029201),
('eznN1u3unzSRcGmtEyezSNFUBcwZl0xvNxBpUBjT', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-US) WindowsPowerShell/5.1.26100.4202', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiczNQd05tSXhKQzV1ZlpWM0ZHU3dGbXUySFc3Z1ZZbE9kWmtOVDJHVyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749029996),
('GbICLVc7kOiOisvlyMT60BwhXtUbLXaeqi7x2TET', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.100.3 Chrome/132.0.6834.210 Electron/34.5.1 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiR1d4YjJTQUNveFB3clVpMDhYcGN2amllSHNlczdQblE1RkxiTmxzZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6OTU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC8/aWQ9ZGFhODgwODYtY2Q2Zi00MjI2LTg5YWUtZWExZDg3NmZiMjk5JnZzY29kZUJyb3dzZXJSZXFJZD0xNzQ5MDM0NDE5MzYyIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749034419),
('gIcKt2AcSeSImtFKdgDdHTceoembLJvaAvn7lX9E', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.100.3 Chrome/132.0.6834.210 Electron/34.5.1 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTnNCbjM1VUhjMHVCWlpOZWx6ZmNZblVlZjJYUTNXUnVpOWdMV1VMRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9idWlsZGluZ3Mvc3VwcGx5LW9mZmljZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1749028780),
('GLhXmt35G7wR605X3RGHOOf74lY1KsUiYugtv9jC', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.100.3 Chrome/132.0.6834.210 Electron/34.5.1 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVHlhendVbTVyQ3F2Y3p0MzlPenRnUGhqTUk4SXljRmVwZzZUeFhyWSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTIwOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYnVpbGRpbmdzL21haW4tYmxkZy9hdWRpdD9pZD1kYWE4ODA4Ni1jZDZmLTQyMjYtODlhZS1lYTFkODc2ZmIyOTkmdnNjb2RlQnJvd3NlclJlcUlkPTE3NDkwMzEzMzQ0MTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1749031334),
('h68ZZfzcBe4yqenWhP2oOC5Y0zZIN0dmRlJbUcCF', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoieHd4NGxJNXVEN0JESGRRTW9SVnp6TmZVODdQZUVLQVY0ZUlDYTNJZSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9leHBsb3JlIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mzt9', 1749046110),
('hobn7xQXEJ3QMAeid8pK4Gu45ZiHlPAeiXbR9Tvf', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.100.3 Chrome/132.0.6834.210 Electron/34.5.1 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidnVsdEFTeFVRSjJBem1jRE90OFFqWjAwVzQ4RHQzODFkNUNRa2UzdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTE5OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYnVpbGRpbmdzL2FxdWFiZXN0L2F1ZGl0P2lkPWRhYTg4MDg2LWNkNmYtNDIyNi04OWFlLWVhMWQ4NzZmYjI5OSZ2c2NvZGVCcm93c2VyUmVxSWQ9MTc0OTAzMDk2MDY3NyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1749030961),
('hxR5dWIRNG8B5yGzM3EC2Zbo2hsF2ImPsHPuzn6t', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.100.3 Chrome/132.0.6834.210 Electron/34.5.1 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOHhLbkJ2QTlhT0dqZlFnRW1WUTRKaDZSWUE2dUlZSWw2UXYySTlpdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTM4OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYnVpbGRpbmdzL2FxdWFiZXN0LW11bHRpLXB1cnBvc2UtYmxkZy9hdWRpdD9pZD1kYWE4ODA4Ni1jZDZmLTQyMjYtODlhZS1lYTFkODc2ZmIyOTkmdnNjb2RlQnJvd3NlclJlcUlkPTE3NDkwMzExMzE3NzIiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1749031132),
('I3aOr9x2QNR62NzPrdANg0a9cgCHWIYHxKiAEwzx', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.100.3 Chrome/132.0.6834.210 Electron/34.5.1 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieTJLc1FUcjZKUmJ5ZDNnUTFtMVhycjZpTGUyUmN2T2cySHdOa2xOMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTI0OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYnVpbGRpbmdzL3N1cHBseS1vZmZpY2UvYXVkaXQ/aWQ9ZDc0ODc5MjMtODk0My00Y2Y5LWIzN2ItYzc3ZTU1ODI4NjQxJnZzY29kZUJyb3dzZXJSZXFJZD0xNzQ5MDI5ODE0OTA4Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749029815),
('J0qTXkfFr6BuH1V8nqVyMnxmLX8VdIhaXPefWvG9', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.100.3 Chrome/132.0.6834.210 Electron/34.5.1 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSUZVVFg5eVhSdTZESHd4dkxyTGhwdlZOdXpTZ0IyRHEzeXJFdU43bSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTE5OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYnVpbGRpbmdzL2FxdWFiZXN0L2F1ZGl0P2lkPWRhYTg4MDg2LWNkNmYtNDIyNi04OWFlLWVhMWQ4NzZmYjI5OSZ2c2NvZGVCcm93c2VyUmVxSWQ9MTc0OTAzMDY3MzE3OCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1749030673),
('jACN0hIk4wFq7eZRZOwjk23IMj406JW4an5j2rIe', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.100.3 Chrome/132.0.6834.210 Electron/34.5.1 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiY2xKSXVWNmFHTnB0UDdRUHlDdDk4UnZibWtoWlJHenlLSlQ4cUtsMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTE0OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYnVpbGRpbmdzL2d5bS9hdWRpdD9pZD1kNzQ4NzkyMy04OTQzLTRjZjktYjM3Yi1jNzdlNTU4Mjg2NDEmdnNjb2RlQnJvd3NlclJlcUlkPTE3NDkwMjk4Mjg5MTUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1749029829),
('jAFcRHU6t9dyGISlVwUw1MRE01n4ShKtsvW8plhN', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.100.3 Chrome/132.0.6834.210 Electron/34.5.1 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicFljT2pNamhUYmxlMjBUZGMxY3NEeXZLRHFuY21OYkVZd1BoU2x4VCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTAwOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvbG9naW4/aWQ9ZDc0ODc5MjMtODk0My00Y2Y5LWIzN2ItYzc3ZTU1ODI4NjQxJnZzY29kZUJyb3dzZXJSZXFJZD0xNzQ5MDI5ODM1NzA3Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749029836),
('JPutxCzVKtAtKmvSLcgaSknu9sMhytR2YiUyaqig', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.100.3 Chrome/132.0.6834.210 Electron/34.5.1 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVXVLZVhBcWZKVEZiZzNYYTBVeWZWV05PRHhKNWoyVUNuaDFoZzJSQSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTM4OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYnVpbGRpbmdzL2FxdWFiZXN0LW11bHRpLXB1cnBvc2UtYmxkZy9hdWRpdD9pZD1kYWE4ODA4Ni1jZDZmLTQyMjYtODlhZS1lYTFkODc2ZmIyOTkmdnNjb2RlQnJvd3NlclJlcUlkPTE3NDkwMzE2MDUxMDciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1749031605),
('jQYA2JY1LKNgkf0z1bLQloqn9Pnhe9HAjwr2IOhd', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.100.3 Chrome/132.0.6834.210 Electron/34.5.1 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOUgzZUZ3S0dZdFBlbW5HOURETE1IS2JnQTF1bVRZbkNNRGxiSUt5VSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTM0OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYnVpbGRpbmdzL3N1cHBseS1vZmZpY2UtYW5kLXBhbmdhc2l3YWFuP2lkPWRhYTg4MDg2LWNkNmYtNDIyNi04OWFlLWVhMWQ4NzZmYjI5OSZ2c2NvZGVCcm93c2VyUmVxSWQ9MTc0OTAzMTM0MTM0NyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1749031341),
('JUkKCPC3IairSM8Sf7jG9abbN0xtxx20A08swG3k', NULL, '127.0.0.1', '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZjFGYldlSmoyVGJIYXhFdDdRM3oyWGRRWlhYOG5oU0Z4SExOdjd0VyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kZWJ1Zy9idWlsZGluZ3MiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1749029761),
('k6yIYKXiFcbyThWJvrsd8TUuRLu2B5i2KLyD59bp', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.100.3 Chrome/132.0.6834.210 Electron/34.5.1 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicUgxSmdOSFNRa2djM1BBVnhJUHJQVVF4dVVZamQ0Z0ZETmxVOFZsayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTAyOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvZXhwbG9yZT9pZD1iNDM3YTgzZC05YTQ5LTQ1MmQtODc4Ni01MDdkN2I1ZDdiMmUmdnNjb2RlQnJvd3NlclJlcUlkPTE3NDkwMjg3NjQ3OTAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1749028765),
('keCtkqhmkaR24xA2Hm0NWvB7NNLQKOyf35A4YL1i', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-US) WindowsPowerShell/5.1.26100.4202', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiNkQ4NE1UUHBQa1RPaFlZRHROalVLSFk2SWU3dUY1aGlBeUhydFVEYiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749029997),
('LcKDqMGMP2yPDzUtuHWIuwyblsbr924QZ0xaWpr0', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.100.3 Chrome/132.0.6834.210 Electron/34.5.1 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMVB6dFB5TGhWZFh1bmdJdzk2TG9mZGt0elM2RU5OaVVqRm43QWRHZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTEwOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvZGVidWcvYnVpbGRpbmdzP2lkPWQ3NDg3OTIzLTg5NDMtNGNmOS1iMzdiLWM3N2U1NTgyODY0MSZ2c2NvZGVCcm93c2VyUmVxSWQ9MTc0OTAyOTY5MzU1NiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1749029693),
('LIggljwTbIt7B845bIdOe4DW9w7BhxszPftyGsGg', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.100.3 Chrome/132.0.6834.210 Electron/34.5.1 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYjY4a09VUDZyazl6UGcwZUZJeDd1VUpKUGJqVG9qelBYUFd5a21tVyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6OTU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC8/aWQ9ZGFhODgwODYtY2Q2Zi00MjI2LTg5YWUtZWExZDg3NmZiMjk5JnZzY29kZUJyb3dzZXJSZXFJZD0xNzQ5MDMxMDMyNDc1Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749031032),
('loC7a4riVSEuHErFfK1UNo9ghCFHk5W95CzEu6gI', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.100.3 Chrome/132.0.6834.210 Electron/34.5.1 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRWpVckhyTldGT0pET1dEbjFHQ0NKOFBRSElCeUlkUnhiTjhLTnhYUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTE4OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYnVpbGRpbmdzL3N1cHBseS1vZmZpY2U/aWQ9ZDc0ODc5MjMtODk0My00Y2Y5LWIzN2ItYzc3ZTU1ODI4NjQxJnZzY29kZUJyb3dzZXJSZXFJZD0xNzQ5MDI5NzkwNzQ1Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749029790),
('LXJC1U5Dl63ci7vXMAgHpxsEwU8dUKZJXPpgJRyC', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.100.3 Chrome/132.0.6834.210 Electron/34.5.1 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMFBPaVd1M0ZadDJIUWVBWm5hS091TkMxT29lM0dpTlNXVEo1T0ZETyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTE4OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYnVpbGRpbmdzL3N0YXItYnVpbGRpbmc/aWQ9ZGFhODgwODYtY2Q2Zi00MjI2LTg5YWUtZWExZDg3NmZiMjk5JnZzY29kZUJyb3dzZXJSZXFJZD0xNzQ5MDMxMzAyNTI0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749031303),
('lYEr45UdxIOKtTivJpZ9UuS6lkmsHmy035n0rouo', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.100.3 Chrome/132.0.6834.210 Electron/34.5.1 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiU0FGd3puSXc2Mk5wSkFpeThwc3VMQzZISUxnZGttUDdCM1plMzhhWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTI0OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYnVpbGRpbmdzL3N0YXItYnVpbGRpbmcvYXVkaXQ/aWQ9ZGFhODgwODYtY2Q2Zi00MjI2LTg5YWUtZWExZDg3NmZiMjk5JnZzY29kZUJyb3dzZXJSZXFJZD0xNzQ5MDMxNjA5OTcyIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749031610),
('nJi5cjm9cPA2VaemMW1iOGBqtsTpV3pRuay0hijG', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.100.3 Chrome/132.0.6834.210 Electron/34.5.1 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaGsyOHdTZVAxalp0UGphR0JrdkNjeXd0enc4ek5DWmVrYVNJc2w3YSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTM4OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYnVpbGRpbmdzL2FxdWFiZXN0LW11bHRpLXB1cnBvc2UtYmxkZy9hdWRpdD9pZD1kYWE4ODA4Ni1jZDZmLTQyMjYtODlhZS1lYTFkODc2ZmIyOTkmdnNjb2RlQnJvd3NlclJlcUlkPTE3NDkwMzE4MTI3NzciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1749031813),
('NZJQdF3a0iEvVSj8Uo9btpnuM8DFzizpp5jIdRCR', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.100.3 Chrome/132.0.6834.210 Electron/34.5.1 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUWNvS2VVdkpNMUhiWnVpOGIzUHoxcnJ3ejRrSXpzRWJiVnluYmM3ayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTAwOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvbG9naW4/aWQ9ZGFhODgwODYtY2Q2Zi00MjI2LTg5YWUtZWExZDg3NmZiMjk5JnZzY29kZUJyb3dzZXJSZXFJZD0xNzQ5MDMxMzIzMDgxIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749031323),
('OHECdhkPKcMXgTRt0EQuhxFCg9mtW3q6ZjGtJHRH', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-US) WindowsPowerShell/5.1.26100.4202', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiMVBiWm1HYXJ4SDdjUHJtc3JpaFd4dFIzSmhRejl5Wm1WSUppalZBcCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749029986),
('qAVSh5CTgOI88oFzyyZNSnGeJdpy6jhJ25psdQ5e', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-US) WindowsPowerShell/5.1.26100.4202', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoid2NnR1d0ZmIzdkV5cVpPbERObHJNM0VnQ1VOR1YwelJqTTVUdnJ6cyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749029997),
('qlHU7Nfu0IsLGjHQwTgUeq1pdnQ9QWbPKBZqtSYA', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.100.3 Chrome/132.0.6834.210 Electron/34.5.1 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNTAzazRyZmlzZm5WSTd5cDZhMkNrbkpGQTRhQkVPUWZsTXZ6OWhSRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTM4OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYnVpbGRpbmdzL2FxdWFiZXN0LW11bHRpLXB1cnBvc2UtYmxkZy9hdWRpdD9pZD1kYWE4ODA4Ni1jZDZmLTQyMjYtODlhZS1lYTFkODc2ZmIyOTkmdnNjb2RlQnJvd3NlclJlcUlkPTE3NDkwMzEzMjgxNDMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1749031328),
('RgwRaAEOXg6VJQSqsdVTGU6XL00zHD3xcRStw8Gq', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.100.3 Chrome/132.0.6834.210 Electron/34.5.1 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMFhiUE83UWJTYzRIWnI5MkRBWFo3czVlTzZqWjNXczkwQTQxWEp1aiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTI0OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYnVpbGRpbmdzL3N0YXItYnVpbGRpbmcvYXVkaXQ/aWQ9ZGFhODgwODYtY2Q2Zi00MjI2LTg5YWUtZWExZDg3NmZiMjk5JnZzY29kZUJyb3dzZXJSZXFJZD0xNzQ5MDMxMzc5NTU1Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749031379),
('rnv3eupH1L4wRpRbvs0XpzLCSKaa2XzSgrulkwgc', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.100.3 Chrome/132.0.6834.210 Electron/34.5.1 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVVhwcTBldkIxMmE0M0hWcDBiVUJNRmhmd3RZeU9OY1VzOTNnTU4yUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTE2OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYnVpbGRpbmdzL3Bhbmdhc2l3YWFuP2lkPWQ3NDg3OTIzLTg5NDMtNGNmOS1iMzdiLWM3N2U1NTgyODY0MSZ2c2NvZGVCcm93c2VyUmVxSWQ9MTc0OTAyOTc5NjY5OCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1749029797),
('sLDH3uCBIJeItBWozRjjJLzxez2LcNwYLiSq7AHp', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.100.3 Chrome/132.0.6834.210 Electron/34.5.1 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoibkl4Ykp6TzRldm5EQlMwbGNIVTQxT0ljR0JXd1Z4SzBxTkxOTGIzdyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749029859),
('sMLkP5Y3a9pZtDWvpOEiDsZy32xedAl5lqRrMXQ8', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.100.3 Chrome/132.0.6834.210 Electron/34.5.1 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ0VTd3lienJsZ2lYSVVwMFpCTWsxeXRwVGY4djJaZ094ZzNDaHh2TiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTI0OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYnVpbGRpbmdzL3N0YXItYnVpbGRpbmcvYXVkaXQ/aWQ9ZGFhODgwODYtY2Q2Zi00MjI2LTg5YWUtZWExZDg3NmZiMjk5JnZzY29kZUJyb3dzZXJSZXFJZD0xNzQ5MDMxMTYzMjQzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749031163),
('srndXoqnQX6mtt6O0AEyEosEn18kiUrcOcpHI1cJ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.100.3 Chrome/132.0.6834.210 Electron/34.5.1 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVksyczhXSGJQWTAycHpsT2dsRk05U0pMVzlVTlJvNnpEUktFbHVmeiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTAyOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvZXhwbG9yZT9pZD1kNzQ4NzkyMy04OTQzLTRjZjktYjM3Yi1jNzdlNTU4Mjg2NDEmdnNjb2RlQnJvd3NlclJlcUlkPTE3NDkwMjk3MDE2ODkiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1749029701),
('TrwQFQUh7DE2xVJMLc5iQB9Gng0c65FFbDX67K9n', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.100.3 Chrome/132.0.6834.210 Electron/34.5.1 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZUlrWVZxdkhSa29xckx1a0hBZTVFaTBlaDIzV1dqS3RZRXExOEhPSCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTI0OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYnVpbGRpbmdzL3N0YXItYnVpbGRpbmcvYXVkaXQ/aWQ9ZGFhODgwODYtY2Q2Zi00MjI2LTg5YWUtZWExZDg3NmZiMjk5JnZzY29kZUJyb3dzZXJSZXFJZD0xNzQ5MDMwOTMyNTY4Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749030932),
('V3Z5jUJ3NnkfOYkyYYrjFstz9hKd8OXIqib7v1xi', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.100.3 Chrome/132.0.6834.210 Electron/34.5.1 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicHB4MGc3aThXcGZ4cFBkT2NybGxkd200TnBNY2RFdUZnSlZCaTNHbSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTI0OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYnVpbGRpbmdzL3N0YXItYnVpbGRpbmcvYXVkaXQ/aWQ9ZGFhODgwODYtY2Q2Zi00MjI2LTg5YWUtZWExZDg3NmZiMjk5JnZzY29kZUJyb3dzZXJSZXFJZD0xNzQ5MDMwNjk2MzA3Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749030696),
('vbrodb0iASuIZuJqRVypmafPD7BtsEjh2w1UqFPa', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-US) WindowsPowerShell/5.1.26100.4202', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiSFBZZEZWb2xubjNQR3VYT1lRQXBoVlg0amhMbks0N0k2Zzh4S1RSZyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749029997),
('veHerG0lxJi5XIuhXcPr3jlRivCsVdGTtML133wy', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.100.3 Chrome/132.0.6834.210 Electron/34.5.1 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidEZINU9UMUxxQjFsYllPNFNkOURrWGNiYVhFbUI0ZVIzY2E0SDFRRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTIwOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYnVpbGRpbmdzL2d5bS1hbmQtY2FudGVlbj9pZD1kYWE4ODA4Ni1jZDZmLTQyMjYtODlhZS1lYTFkODc2ZmIyOTkmdnNjb2RlQnJvd3NlclJlcUlkPTE3NDkwMzEzNDc3OTMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1749031348),
('w91WkBBFMLBUEP5KpOSh7A67nM9vzzYseLGmsqNB', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-US) WindowsPowerShell/5.1.26100.4202', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQVFmb09XY2xlaUVKUnFiSlF6R001OHJhS0ZZeExRMU1ReVBOdDk1cSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kZWJ1Zy9idWlsZGluZ3MiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1749029726),
('yfZhx9sD9HyfkUGZTQ8rzFmvKny8V0dmCByYaX08', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.100.3 Chrome/132.0.6834.210 Electron/34.5.1 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMXhFUVI5dzhGdXFVd3JuZEhYYVdmSjRUbnVPbWhlZklIWmdnSzVyTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTI0OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYnVpbGRpbmdzL3N0YXItYnVpbGRpbmcvYXVkaXQ/aWQ9ZGFhODgwODYtY2Q2Zi00MjI2LTg5YWUtZWExZDg3NmZiMjk5JnZzY29kZUJyb3dzZXJSZXFJZD0xNzQ5MDMxODE3Nzc2Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749031818),
('yjuHZmR9EsvC3ay1QUr15GHqtq01suTD6ziHbuGP', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.100.3 Chrome/132.0.6834.210 Electron/34.5.1 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMjV6eDAyQU42UzlzUkpqc2VsanJEVkp3ZFA1S2NQdmZmaXdVSGZoTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6OTU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC8/aWQ9ZGFhODgwODYtY2Q2Zi00MjI2LTg5YWUtZWExZDg3NmZiMjk5JnZzY29kZUJyb3dzZXJSZXFJZD0xNzQ5MDM0NDU0NTM3Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749034454),
('YTS5Yb8q8p1NEg8IIClndYPUF50CNirPHXkQEiMR', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.100.3 Chrome/132.0.6834.210 Electron/34.5.1 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUXdXa1hVbmViaGVWclpQbmtrWXBhSUVMQ1UzNm5DeG84TkRxZHQ2RSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTEyOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYnVpbGRpbmdzL2NhbnRlZW4/aWQ9ZDc0ODc5MjMtODk0My00Y2Y5LWIzN2ItYzc3ZTU1ODI4NjQxJnZzY29kZUJyb3dzZXJSZXFJZD0xNzQ5MDI5ODA3NTE2Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749029807);

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
(3, 'yo', 'yo@gmail.com', NULL, '$2y$12$VjKAva0CTujcVRpHayxkrOINJaGtdmoc/RheX4u3uQSxxdLVJx82O', NULL, '2025-06-04 01:40:35', '2025-06-04 01:40:35'),
(4, 'Admin User', 'admin@test.com', NULL, '$2y$12$N.JBCv87tKdW6Ed0brEO8OMledZHbkoACSZKXQlwSlLuwoPWa6Luu', NULL, '2025-06-04 01:45:29', '2025-06-04 01:45:29');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
