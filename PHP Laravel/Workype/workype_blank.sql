-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2018 at 01:17 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workype`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_11_0000_create_wc_job_titles_table', 1),
(2, '2014_10_12_0000_create_users_table', 1),
(3, '2014_10_12_1000_create_password_resets_table', 1),
(4, '2017_09_22_01814_create_addresses_table', 1),
(5, '2017_09_22_0928_create_media_table', 1),
(6, '2018_03_13_0823_create_verify_users_table', 1),
(7, '2018_03_13_91152542_create_companies_table', 1),
(8, '2018_03_205_0227_contact_table', 1),
(9, '2018_03_22_0907_verify_company', 1),
(10, '2018_03_27_0129_wc_company_specialities_table', 1),
(11, '2018_03_27_0129_wc_company_type_table', 1),
(12, '2018_03_27_0342_product_types_table', 1),
(13, '2018_03_27_0927_wc_company_size_table', 1),
(14, '2018_03_294_0129_pivot_user_company_roles_table', 1),
(15, '2018_03_30_0739_wc_company_products_table', 1),
(16, '2018_03_30_103343_entrust_setup_tables', 2),
(17, '2018_03_30_0530400_pivot_company_product_table', 3),
(18, '2018_04_02_165431_create_posts_table', 4),
(19, '2018_04_02_1657831_create_posts_table', 5),
(20, '2018_03_205_0298_post_table', 6),
(21, '2017_09_22_093708_chatter_message_table', 7),
(22, '2017_09_22_093708_chatter_message_table ', 8),
(23, '2017_09_22_093708_create_personal_details_table', 8),
(24, '2018_04_09_104212_wc_conversation_table', 8),
(25, '2018_04_09_104501_wc_conversation_group_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL, NULL, NULL),
(2, 'enduser', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `verify_companies`
--

CREATE TABLE `verify_companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `verify_users`
--

CREATE TABLE `verify_users` (
  `user_id` int(11) NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wc_addresses`
--

CREATE TABLE `wc_addresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `fk_db_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_id` int(11) NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wc_companies`
--

CREATE TABLE `wc_companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_company_type` int(11) DEFAULT NULL,
  `established_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_company_size` int(11) DEFAULT NULL,
  `verified` int(11) NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `fk_user_help` int(11) DEFAULT NULL,
  `fk_user_primary` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wc_company_admins`
--

CREATE TABLE `wc_company_admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `fk_company_id` int(11) NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wc_company_products`
--

CREATE TABLE `wc_company_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `fk_company_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `overview` text COLLATE utf8mb4_unicode_ci,
  `features` text COLLATE utf8mb4_unicode_ci,
  `benefits` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wc_company_size`
--

CREATE TABLE `wc_company_size` (
  `id` int(10) UNSIGNED NOT NULL,
  `from` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wc_company_size`
--

INSERT INTO `wc_company_size` (`id`, `from`, `to`, `fk_by`) VALUES
(1, '10', '20', 1),
(2, '20', '30', 2);

-- --------------------------------------------------------

--
-- Table structure for table `wc_company_specialities`
--

CREATE TABLE `wc_company_specialities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_company_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wc_company_specialities`
--

INSERT INTO `wc_company_specialities` (`id`, `name`, `fk_company_id`, `created_at`, `updated_at`) VALUES
(23, 'specitty1', 3, '2018-03-31 05:28:36', '2018-03-31 05:28:36'),
(36, 'Specialties1', 1, '2018-04-07 00:30:47', '2018-04-07 00:30:47'),
(37, 'Specialties3', 1, '2018-04-07 00:30:47', '2018-04-07 00:30:47'),
(38, 'Specialties 1', 1, '2018-04-07 00:30:47', '2018-04-07 00:30:47'),
(43, 'dfd', 5, '2018-04-10 06:33:18', '2018-04-10 06:33:18'),
(45, 'spec1', 7, '2018-04-13 01:42:37', '2018-04-13 01:42:37'),
(46, 'speiciality1', 9, '2018-04-13 01:46:13', '2018-04-13 01:46:13'),
(47, 'speiciality1', 1, '2018-04-14 00:37:24', '2018-04-14 00:37:24'),
(52, 'Specialties 1', 2, '2018-04-14 00:45:41', '2018-04-14 00:45:41'),
(53, 'Specialties 2', 2, '2018-04-14 00:45:41', '2018-04-14 00:45:41'),
(54, 'Specialties 3', 2, '2018-04-14 00:45:42', '2018-04-14 00:45:42'),
(55, 'Specialties', 2, '2018-04-14 00:45:42', '2018-04-14 00:45:42'),
(56, 'qq', 3, '2018-04-14 04:44:48', '2018-04-14 04:44:48'),
(57, 'N/A', 4, '2018-04-15 11:06:40', '2018-04-15 11:06:40');

-- --------------------------------------------------------

--
-- Table structure for table `wc_company_type`
--

CREATE TABLE `wc_company_type` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wc_company_type`
--

INSERT INTO `wc_company_type` (`id`, `name`, `fk_by`) VALUES
(1, 'game', 1),
(2, 'politics', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wc_contacts`
--

CREATE TABLE `wc_contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_db_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wc_conversations`
--

CREATE TABLE `wc_conversations` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `fk_company_id` int(11) NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wc_conversation_users`
--

CREATE TABLE `wc_conversation_users` (
  `fk_user_id` int(10) UNSIGNED NOT NULL,
  `fk_conversation_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wc_job_titles`
--

CREATE TABLE `wc_job_titles` (
  `id` int(10) UNSIGNED NOT NULL,
  `fk_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wc_job_titles`
--

INSERT INTO `wc_job_titles` (`id`, `fk_by`, `name`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '1', 'CEO', NULL, NULL, NULL),
(2, '1', 'Assitant Manager', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wc_media`
--

CREATE TABLE `wc_media` (
  `id` int(10) UNSIGNED NOT NULL,
  `fk_db_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_by_id` int(11) NOT NULL,
  `fk_id` int(11) NOT NULL,
  `filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wc_messages`
--

CREATE TABLE `wc_messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_conversation_id` int(10) UNSIGNED NOT NULL,
  `fk_user_id` int(10) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'text',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wc_personal_details`
--

CREATE TABLE `wc_personal_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `gender` tinyint(4) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `nationality` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wc_pivot_company_products`
--

CREATE TABLE `wc_pivot_company_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `fk_company_id` int(11) NOT NULL,
  `fk_product_type_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wc_pivot_user_company_roles`
--

CREATE TABLE `wc_pivot_user_company_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  `fk_company_id` int(11) NOT NULL,
  `fk_job_title_id` int(11) NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wc_posts`
--

CREATE TABLE `wc_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_company_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wc_product_types`
--

CREATE TABLE `wc_product_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wc_product_types`
--

INSERT INTO `wc_product_types` (`id`, `name`, `fk_by`) VALUES
(1, 'cricket', 1),
(2, 'hockey', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `verify_companies`
--
ALTER TABLE `verify_companies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `verify_companies_company_id_foreign` (`company_id`);

--
-- Indexes for table `wc_addresses`
--
ALTER TABLE `wc_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wc_companies`
--
ALTER TABLE `wc_companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wc_company_products`
--
ALTER TABLE `wc_company_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wc_company_size`
--
ALTER TABLE `wc_company_size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wc_company_specialities`
--
ALTER TABLE `wc_company_specialities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wc_company_type`
--
ALTER TABLE `wc_company_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wc_contacts`
--
ALTER TABLE `wc_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wc_conversations`
--
ALTER TABLE `wc_conversations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wc_conversation_users`
--
ALTER TABLE `wc_conversation_users`
  ADD PRIMARY KEY (`fk_user_id`,`fk_conversation_id`),
  ADD KEY `mc_conversation_user_conversation_id_foreign` (`fk_conversation_id`);

--
-- Indexes for table `wc_job_titles`
--
ALTER TABLE `wc_job_titles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `wc_job_titles_name_unique` (`name`);

--
-- Indexes for table `wc_media`
--
ALTER TABLE `wc_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wc_messages`
--
ALTER TABLE `wc_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mc_messages_user_id_foreign` (`fk_user_id`),
  ADD KEY `mc_messages_conversation_id_foreign` (`fk_conversation_id`);

--
-- Indexes for table `wc_personal_details`
--
ALTER TABLE `wc_personal_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wc_pivot_company_products`
--
ALTER TABLE `wc_pivot_company_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wc_pivot_user_company_roles`
--
ALTER TABLE `wc_pivot_user_company_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wc_posts`
--
ALTER TABLE `wc_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wc_product_types`
--
ALTER TABLE `wc_product_types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `verify_companies`
--
ALTER TABLE `verify_companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wc_addresses`
--
ALTER TABLE `wc_addresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wc_companies`
--
ALTER TABLE `wc_companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wc_company_products`
--
ALTER TABLE `wc_company_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wc_company_size`
--
ALTER TABLE `wc_company_size`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wc_company_specialities`
--
ALTER TABLE `wc_company_specialities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `wc_company_type`
--
ALTER TABLE `wc_company_type`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wc_contacts`
--
ALTER TABLE `wc_contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wc_conversations`
--
ALTER TABLE `wc_conversations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wc_job_titles`
--
ALTER TABLE `wc_job_titles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wc_media`
--
ALTER TABLE `wc_media`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wc_messages`
--
ALTER TABLE `wc_messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wc_personal_details`
--
ALTER TABLE `wc_personal_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wc_pivot_company_products`
--
ALTER TABLE `wc_pivot_company_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wc_pivot_user_company_roles`
--
ALTER TABLE `wc_pivot_user_company_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wc_posts`
--
ALTER TABLE `wc_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wc_product_types`
--
ALTER TABLE `wc_product_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `verify_companies`
--
ALTER TABLE `verify_companies`
  ADD CONSTRAINT `verify_companies_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `wc_companies` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
