-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2023 at 02:29 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wizstamp_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_stamps_docs`
--

CREATE TABLE `all_stamps_docs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(111) NOT NULL DEFAULT 0,
  `wizid` varchar(255) DEFAULT 'ID786',
  `islocked` tinyint(1) DEFAULT 0,
  `doc_type` varchar(255) DEFAULT 'Real Estate',
  `seller_name` varchar(255) DEFAULT 'ABC',
  `form_creation_time` varchar(255) DEFAULT '11-30-2023',
  `seller_submit_time` varchar(255) DEFAULT '11-30-2023',
  `seller_doc` varchar(255) DEFAULT 'icons/notfound.png',
  `buyer_name` varchar(255) DEFAULT 'ABC',
  `buyer_doc` varchar(255) DEFAULT 'icons/notfound.png',
  `buyer_submit_time` varchar(255) DEFAULT '12-01-2023',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `all_stamps_docs`
--

INSERT INTO `all_stamps_docs` (`id`, `user_id`, `wizid`, `islocked`, `doc_type`, `seller_name`, `form_creation_time`, `seller_submit_time`, `seller_doc`, `buyer_name`, `buyer_doc`, `buyer_submit_time`, `created_at`, `updated_at`) VALUES
(1, 0, 'DNscR9i7', 0, 'electronics', NULL, NULL, NULL, 'images/web/notfound.jpg', NULL, 'icons/notfound.png', '12-01-2023', '2023-11-30 03:22:12', '2023-11-30 03:22:12'),
(2, 0, 'dL21jcJc', 0, 'electronics', NULL, NULL, NULL, 'images/web/notfound.jpg', NULL, 'icons/notfound.png', '12-01-2023', '2023-11-30 03:22:25', '2023-11-30 03:22:25'),
(3, 0, 'ND4R7VN2ZR', 0, 'electronics', NULL, NULL, NULL, 'images/web/notfound.jpg', NULL, 'icons/notfound.png', '12-01-2023', '2023-11-30 03:33:44', '2023-11-30 03:33:44'),
(4, 0, 'EYG3JHIX1J', 0, 'electronics', 'name 1', '07-30-2023 07:20:20', '07-30-2023 07:30:30', 'images/docs/1701334076.pdf', 'ABC', 'icons/notfound.png', '12-01-2023', '2023-11-30 03:47:56', '2023-11-30 03:47:56'),
(5, 0, 'XQRTGSQECY', 0, 'electronics', 'name 1', '07-30-2023 07:20:20', '07-30-2023 07:30:30', 'images/web/notfound.jpg', 'ABC', 'icons/notfound.png', '12-01-2023', '2023-11-30 03:56:18', '2023-11-30 03:56:18'),
(6, 0, 'C9CUHRGVKJ', 0, 'electronics', 'name 1', '07-30-2023 07:20:20', '07-30-2023 07:30:30', 'images/docs/1701336032.pdf', 'ABC', 'icons/notfound.png', '12-01-2023', '2023-11-30 04:20:32', '2023-11-30 04:20:32'),
(7, 0, '0X1BRWGYLR', 0, 'electronics', 'name 1', '07-30-2023 07:20:20', '07-30-2023 07:30:30', 'docs/1701336145.pdf', 'ABC', 'icons/notfound.png', '12-01-2023', '2023-11-30 04:22:25', '2023-11-30 04:22:25');

-- --------------------------------------------------------

--
-- Table structure for table `electronics_stamps_tabel`
--

CREATE TABLE `electronics_stamps_tabel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `wizid` varchar(255) DEFAULT 'electronics_786',
  `is_done_by_seller` varchar(255) DEFAULT '0',
  `is_done_by_buyer` varchar(255) DEFAULT '0',
  `is_locked` varchar(255) DEFAULT '0',
  `type` varchar(255) DEFAULT 'seller',
  `seller_name` varchar(255) DEFAULT 'Qasim',
  `seller_phone` varchar(255) DEFAULT '0301234567',
  `seller_cnic` varchar(255) DEFAULT '00000000000',
  `seller_device_name` varchar(255) DEFAULT 'OfficeName ABC',
  `seller_device_model` varchar(255) DEFAULT 'OfficeName ABC',
  `seller_device_final_price` varchar(255) DEFAULT '00.0',
  `guarantee_duration` varchar(255) DEFAULT '0',
  `seller_shop_name` varchar(255) DEFAULT 'ABC',
  `seller_shop_address` varchar(255) DEFAULT 'ABC',
  `seller_device_condition` varchar(255) DEFAULT '0',
  `seller_signature` varchar(255) DEFAULT 'notfound.png',
  `buyer_name` varchar(255) DEFAULT 'Name ABC',
  `buyer_Phone` varchar(255) DEFAULT '000000000',
  `buyer_cnic` varchar(255) DEFAULT '000000000',
  `buyer_address` varchar(255) DEFAULT 'Address ABC',
  `buyer_signature` varchar(255) DEFAULT 'notfound.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_20_124849_wizusers', 1),
(6, '2023_11_29_081700_realestate', 2),
(7, '2023_11_29_090929_vechile', 2),
(8, '2023_11_29_093812_electronics_stamps', 2),
(9, '2023_11_30_053605_all_stamps_docs', 3),
(10, '2023_11_30_063349_realestate_stamps', 4),
(11, '2023_11_30_063533_vehicle_stamps', 5),
(12, '2023_11_30_063636_electronics_stamps', 5),
(13, '2023_11_30_063937_wizallusers', 6);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `real_estate_stamps_tabel`
--

CREATE TABLE `real_estate_stamps_tabel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `wizid` varchar(255) DEFAULT 'realesate_786',
  `is_done_by_seller` varchar(255) DEFAULT '0',
  `is_done_by_buyer` varchar(255) DEFAULT '0',
  `is_locked` varchar(255) DEFAULT '0',
  `type` varchar(255) DEFAULT 'seller',
  `seller_name` varchar(255) DEFAULT 'Qasim',
  `seller_phone` varchar(255) DEFAULT '0301234567',
  `seller_cnic` varchar(255) DEFAULT '00000000000',
  `seller_business_Address` varchar(255) DEFAULT 'Address',
  `seller_office_name` varchar(255) DEFAULT 'OfficeName ABC',
  `seller_commission_amount` varchar(255) DEFAULT '0',
  `seller_final_price_of_property` varchar(255) DEFAULT '0',
  `security` varchar(255) DEFAULT '0000',
  `monthly_rent` varchar(255) DEFAULT '0000',
  `seller_plot_number` varchar(255) DEFAULT '0',
  `seller_block` varchar(255) DEFAULT '0',
  `seller_sector` varchar(255) DEFAULT 'A',
  `seller_phase` varchar(255) DEFAULT '0',
  `seller_society_name` varchar(255) DEFAULT 'ABC',
  `seller_city` varchar(255) DEFAULT 'city',
  `seller_zipcode` varchar(255) DEFAULT '0000',
  `seller_signature` varchar(255) DEFAULT 'notfound.png',
  `buyer_name` varchar(255) DEFAULT 'Name ABC',
  `buyer_Phone` varchar(255) DEFAULT '000000000',
  `buyer_cnic` varchar(255) DEFAULT '000000000',
  `buyer_address` varchar(255) DEFAULT 'Address ABC',
  `buyer_signature` varchar(255) DEFAULT 'notfound.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_stamps_tabel`
--

CREATE TABLE `vehicle_stamps_tabel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `wizid` varchar(255) DEFAULT 'vechile_786',
  `is_done_by_seller` varchar(255) DEFAULT '0',
  `is_done_by_buyer` varchar(255) DEFAULT '0',
  `is_locked` varchar(255) DEFAULT '0',
  `type` varchar(255) DEFAULT 'seller',
  `seller_name` varchar(255) DEFAULT 'Qasim',
  `seller_phone` varchar(255) DEFAULT '0301234567',
  `seller_cnic` varchar(255) DEFAULT '00000000000',
  `seller_office_name` varchar(255) DEFAULT 'OfficeName ABC',
  `seller_address` varchar(255) DEFAULT 'Address',
  `seller_commission_amount` varchar(255) DEFAULT '0',
  `seller_final_price_of_vehicle` varchar(255) DEFAULT '0',
  `seller_vehicle_name` varchar(255) DEFAULT 'ABC',
  `seller_vehicle_Model` varchar(255) DEFAULT 'ABC0',
  `seller_registration_no` varchar(255) DEFAULT '0',
  `seller_chasis_no` varchar(255) DEFAULT '0',
  `seller_engine_no` varchar(255) DEFAULT 'ABC',
  `seller_horse_power` varchar(255) DEFAULT 'ABC',
  `seller_vehicle_condition` varchar(255) DEFAULT '0000',
  `seller_signature` varchar(255) DEFAULT 'notfound.png',
  `buyer_name` varchar(255) DEFAULT 'Name ABC',
  `buyer_Phone` varchar(255) DEFAULT '000000000',
  `buyer_cnic` varchar(255) DEFAULT '000000000',
  `buyer_address` varchar(255) DEFAULT 'Address ABC',
  `buyer_signature` varchar(255) DEFAULT 'notfound.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wizallusers`
--

CREATE TABLE `wizallusers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT 'name1',
  `phone` varchar(255) DEFAULT '0301234567',
  `email` varchar(500) DEFAULT 'email@gmail.com',
  `city` varchar(255) DEFAULT 'city',
  `address` varchar(255) DEFAULT 'address',
  `image` varchar(255) DEFAULT 'icons/profile.png',
  `password` varchar(500) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wizallusers`
--

INSERT INTO `wizallusers` (`id`, `name`, `phone`, `email`, `city`, `address`, `image`, `password`, `created_at`, `updated_at`) VALUES
(4, 'webseowiz', '03012345678', 'webseowiz9@gmail.com', 'city', 'address', 'icons/profile.png', '12345', '2023-11-30 06:29:48', '2023-11-30 06:29:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_stamps_docs`
--
ALTER TABLE `all_stamps_docs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `electronics_stamps_tabel`
--
ALTER TABLE `electronics_stamps_tabel`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `real_estate_stamps_tabel`
--
ALTER TABLE `real_estate_stamps_tabel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vehicle_stamps_tabel`
--
ALTER TABLE `vehicle_stamps_tabel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wizallusers`
--
ALTER TABLE `wizallusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_stamps_docs`
--
ALTER TABLE `all_stamps_docs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `electronics_stamps_tabel`
--
ALTER TABLE `electronics_stamps_tabel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `real_estate_stamps_tabel`
--
ALTER TABLE `real_estate_stamps_tabel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vehicle_stamps_tabel`
--
ALTER TABLE `vehicle_stamps_tabel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wizallusers`
--
ALTER TABLE `wizallusers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
