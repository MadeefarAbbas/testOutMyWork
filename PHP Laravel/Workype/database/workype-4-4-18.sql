-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2018 at 11:27 AM
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
(18, '2018_03_205_0298_post_table', 4);

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

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 2);

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

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `first_name`, `last_name`, `verified`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'adeel@webicosoft.com', '$2y$10$6iooAUfMQQ6R0rzMW0FqROuxwSJOolRvdmRkY7MdmAQUIGJlCYDv6', 'Adeel', 'Royage', 1, 'ptqJcrpWb5mnLcAfkC3710w2DBqQ3SFgfX8F3bDgEuIfEFaKuTwmxyud0sGe', '2018-03-31 04:27:10', '2018-03-31 04:29:22');

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

--
-- Dumping data for table `verify_companies`
--

INSERT INTO `verify_companies` (`id`, `token`, `company_id`, `created_at`, `updated_at`) VALUES
(1, '1pL84PnZ7yJMIyrzrae21caVks9K4rJQJWRDJebwT', 1, '2018-03-31 04:36:58', '2018-03-31 04:36:58'),
(2, '2zlSn8EOGRBIcGVP55tPk62hDCiOzy22xR7thTSZY', 2, '2018-03-31 05:13:17', '2018-03-31 05:13:17'),
(3, '3CJSKGsOOs4ukOCRAZYEWPMZZPYKKK5R5tPLbsbGV', 3, '2018-03-31 05:28:37', '2018-03-31 05:28:37'),
(4, '7atU5goxBHgZRLLW3iegVpa1IU6yCv9FfUjF1slbt', 7, '2018-04-03 01:26:09', '2018-04-03 01:26:09'),
(5, '8NcX0kieqeY3h5gW1QRCEbEhGEhnTs9SvUaaFLdK4', 8, '2018-04-03 01:28:50', '2018-04-03 01:28:50'),
(6, '96DxemPcultMInBQPxcbK09LA4Jgh9Z8Jf8OaamKI', 9, '2018-04-03 01:31:16', '2018-04-03 01:31:16'),
(7, '107q1m06s0fVVsXVU0psTtF4bhU1wAvOcxYl6xTo2Z', 10, '2018-04-03 01:35:35', '2018-04-03 01:35:35'),
(8, '113UqA9tMu6PX3rVxijtLhxxJrdxjaDDoPqVtC3dT1', 11, '2018-04-03 06:52:13', '2018-04-03 06:52:13');

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

--
-- Dumping data for table `verify_users`
--

INSERT INTO `verify_users` (`user_id`, `token`, `created_at`, `updated_at`) VALUES
(1, 'emHSDqVdUkMAConsrfv17hDyLEyWgf9w8NZsMsOj', '2018-03-31 04:27:10', '2018-03-31 04:27:10');

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

--
-- Dumping data for table `wc_addresses`
--

INSERT INTO `wc_addresses` (`id`, `fk_db_key`, `fk_id`, `address`, `zip_code`, `city`, `province`, `country`, `created_at`, `updated_at`) VALUES
(3, 'company', 1, 'Gujrat pakistan', '50700', 'Gujrat', 'punjab', 'IN', '2018-03-31 04:48:39', '2018-03-31 04:48:39'),
(4, 'company', 10, 'Address1', 'Zip Code', 'City', 'Province', 'PK', '2018-04-03 05:27:08', '2018-04-03 05:29:59');

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
  `technology` text COLLATE utf8mb4_unicode_ci,
  `convention` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wc_companies`
--

INSERT INTO `wc_companies` (`id`, `fk_user_id`, `name`, `fk_company_type`, `established_year`, `fk_company_size`, `verified`, `description`, `fk_user_help`, `fk_user_primary`, `technology`, `convention`, `created_at`, `updated_at`) VALUES
(11, 1, 'Webicosoft1', 1, '2018-04-29', 1, 1, 'software house1', NULL, NULL, 'i m company technology1', 'i am company convention1', '2018-04-03 06:52:11', '2018-04-03 23:56:49');

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

--
-- Dumping data for table `wc_company_products`
--

INSERT INTO `wc_company_products` (`id`, `fk_company_id`, `title`, `overview`, `features`, `benefits`, `created_at`, `updated_at`) VALUES
(1, 1, 'wocommerce12', 'WooCommerce22222', '\"[\\\"f1\\\"]\"', '\"[\\\"b1\\\"]\"', '2018-03-31 06:37:40', '2018-04-02 01:35:56'),
(2, 1, 'wordpress', 'WordPress is a free and open-source content management system based on PHP and MySQL. To function, WordPress has to be installed on a web server, which would either be part of an Internet hosting service or a network host in its own right', '\"[\\\"Features1\\\",\\\"Features2\\\",\\\"Features3\\\"]\"', '\"[\\\"Benefits1\\\",\\\"Benefits2\\\",\\\"Benefits3\\\"]\"', '2018-03-31 06:42:31', '2018-03-31 06:42:31'),
(3, 1, 'laravel', 'The Laravel Ecosystem. Revolutionize how you build the web. Instant PHP Platforms On Linode, DigitalOcean, and more. Push to deploy, PHP 7.2, HHVM, queues, and everything you need to launch and deploy amazing Laravel applications. Launch your application in minutes! Forge UI Preview · Homestead.', '\"[\\\"Features1\\\",\\\"Features2\\\"]\"', '\"[\\\"Benefits1\\\",\\\"Benefits2\\\"]\"', '2018-03-31 06:46:25', '2018-03-31 06:46:25'),
(4, 1, 'wocommerce', 'WooCommerce Memberships is not just another plugin for restricting your site\'s content: it\'s an easy-to-use, site-wide membership solution that brings your content, shop, and memberships together. “This is maybe one of the easiest and cleanest plugins when it comes to configuration…it\'s super clean and easy to manage.', '\"[\\\"Features1\\\",\\\"Features2\\\",\\\"Features3\\\"]\"', '\"[\\\"Benefits1\\\",\\\"Benefits2\\\",\\\"Benefits3\\\"]\"', '2018-04-02 01:29:42', '2018-04-02 01:29:42'),
(5, 10, 'Titleasdasdas', 'asdasdas', '\"[\\\"dada\\\"]\"', '\"[\\\"asd\\\"]\"', '2018-04-03 04:41:50', '2018-04-03 04:41:50'),
(6, 11, 'Sample product', 'This is a sample product', '\"[\\\"feature 1\\\",\\\"feature 2\\\",\\\"feature 3\\\"]\"', '\"[\\\"Benefits 1\\\",\\\"Benefits 2\\\",\\\"Benefits 3\\\"]\"', '2018-04-03 06:55:17', '2018-04-03 06:55:17');

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
(2, '20', '30', 1);

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
(18, 'Specialties1', 1, '2018-03-31 05:04:06', '2018-03-31 05:04:06'),
(19, 'Specialties3', 1, '2018-03-31 05:04:06', '2018-03-31 05:04:06'),
(20, 'Specialties 1', 2, '2018-03-31 05:13:16', '2018-03-31 05:13:16'),
(21, 'Specialties 2', 2, '2018-03-31 05:13:16', '2018-03-31 05:13:16'),
(22, 'Specialties 3', 2, '2018-03-31 05:13:16', '2018-03-31 05:13:16'),
(23, 'specitty1', 3, '2018-03-31 05:28:36', '2018-03-31 05:28:36'),
(36, 'adasad', 10, '2018-04-03 05:51:35', '2018-04-03 05:51:35'),
(39, 'Specialty 1', 11, '2018-04-03 06:53:17', '2018-04-03 06:53:17');

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
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_db_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wc_contacts`
--

INSERT INTO `wc_contacts` (`id`, `phone`, `email`, `website`, `skype`, `fk_db_key`, `fk_id`, `created_at`, `updated_at`) VALUES
(1, '923466280231', 'tauqeerabbas01@gmail.com1', 'http://webicosoft.zeemanager.com1', 'tauqeerabbas011', 'company', 1, '2018-03-31 04:36:58', '2018-03-31 04:48:49'),
(2, NULL, 'mbaigarid@gmail.com', 'http://wemblo.com', NULL, 'company', 2, '2018-03-31 05:13:16', '2018-03-31 05:13:16'),
(3, NULL, 'arbisoft@gmail.com', 'http://arbisoft.com', NULL, 'company', 3, '2018-03-31 05:28:36', '2018-03-31 05:28:36'),
(4, NULL, 'tauqeerabbas0123@gmail.com', NULL, NULL, 'company', 4, '2018-04-03 01:17:32', '2018-04-03 01:17:32'),
(5, NULL, 'tauqeerabbas0123@gmail.com', NULL, NULL, 'company', 5, '2018-04-03 01:23:55', '2018-04-03 01:23:55'),
(6, NULL, 'tauqeerabbas0123@gmail.com', NULL, NULL, 'company', 6, '2018-04-03 01:25:21', '2018-04-03 01:25:21'),
(7, NULL, 'tauqeerabbas0123@gmail.com', NULL, NULL, 'company', 7, '2018-04-03 01:26:09', '2018-04-03 01:26:09'),
(8, NULL, 'tauqeerabbas01www23@gmail.com', NULL, NULL, 'company', 8, '2018-04-03 01:28:50', '2018-04-03 01:28:50'),
(9, NULL, 'tauqeerabbas0123@gmail.comdds', NULL, NULL, 'company', 9, '2018-04-03 01:31:16', '2018-04-03 01:31:16'),
(10, '123', 'a@b.com', 'http://localhost/workype/company/10/edit?tab=contact', 'tauqeerabbas01', 'company', 10, '2018-04-03 01:35:33', '2018-04-03 05:56:16'),
(11, NULL, 'adeel@webicosoft.com', 'http://webicosoft.com', NULL, 'company', 11, '2018-04-03 06:52:11', '2018-04-03 06:52:11');

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

--
-- Dumping data for table `wc_media`
--

INSERT INTO `wc_media` (`id`, `fk_db_key`, `fk_by_id`, `fk_id`, `filename`, `type`, `size`, `created_at`, `updated_at`) VALUES
(18, 'company_logo_image', 1, 11, 'Desert-20180403115211881.jpg', 'jpg', 845941, '2018-04-03 06:52:11', '2018-04-03 06:52:11'),
(19, 'product_logo_image', 1, 6, 'Penguins-201804031155178751.jpg', 'jpg', 777835, '2018-04-03 06:55:17', '2018-04-03 06:55:17'),
(20, 'company_product_gallery_images', 1, 6, 'Lighthouse-201804031155185351.jpg', 'jpg', 561276, '2018-04-03 06:55:18', '2018-04-03 06:55:18'),
(21, 'company_product_gallery_images', 1, 6, 'Tulips-20180403115518431.jpg', 'jpg', 620888, '2018-04-03 06:55:18', '2018-04-03 06:55:18'),
(23, 'post_logo_image', 1, 2, 'Penguins-1522823986-201804040639464001.jpg', 'jpg', 777835, '2018-04-04 01:39:46', '2018-04-04 01:39:46'),
(24, 'company_post_gallery_images', 1, 2, 'Koala-20180404063947731.jpg', 'jpg', 780831, '2018-04-04 01:39:47', '2018-04-04 01:39:47'),
(25, 'company_post_gallery_images', 1, 2, 'Tulips-201804040639471421.jpg', 'jpg', 620888, '2018-04-04 01:39:47', '2018-04-04 01:39:47'),
(26, 'company_post_gallery_images', 1, 1, 'Penguins-20180404070512751.jpg', 'jpg', 777835, '2018-04-04 02:05:12', '2018-04-04 02:05:12'),
(27, 'company_post_gallery_images', 1, 1, 'Tulips-20180404070512641.jpg', 'jpg', 620888, '2018-04-04 02:05:12', '2018-04-04 02:05:12'),
(28, 'company_post_gallery_images', 1, 1, 'Koala-20180404071612221.jpg', 'jpg', 780831, '2018-04-04 02:16:12', '2018-04-04 02:16:12');

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

--
-- Dumping data for table `wc_pivot_company_products`
--

INSERT INTO `wc_pivot_company_products` (`id`, `fk_company_id`, `fk_product_type_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2018-03-31 05:03:13', '2018-03-31 05:04:06'),
(2, 3, 2, '2018-03-31 05:28:37', '2018-03-31 05:28:37'),
(3, 6, 1, '2018-04-03 01:25:21', '2018-04-03 01:25:21'),
(4, 7, 1, '2018-04-03 01:26:09', '2018-04-03 01:26:09'),
(5, 8, 2, '2018-04-03 01:28:50', '2018-04-03 01:28:50'),
(6, 9, 2, '2018-04-03 01:31:16', '2018-04-03 01:31:16'),
(7, 10, 1, '2018-04-03 01:35:33', '2018-04-03 01:35:33'),
(8, 11, 1, '2018-04-03 06:52:11', '2018-04-03 06:52:11');

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

--
-- Dumping data for table `wc_pivot_user_company_roles`
--

INSERT INTO `wc_pivot_user_company_roles` (`id`, `fk_user_id`, `fk_company_id`, `fk_job_title_id`, `details`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, 'I\'m CEO of webicosoft1', '2018-03-31 04:36:58', '2018-03-31 04:47:05'),
(2, 1, 2, 2, 'He is the assitant maanger of this company', '2018-03-31 05:13:16', '2018-03-31 05:13:16'),
(3, 1, 3, 2, 'Your detail roles', '2018-03-31 05:28:36', '2018-03-31 05:28:36'),
(4, 1, 5, 1, NULL, '2018-04-03 01:23:55', '2018-04-03 01:23:55'),
(5, 1, 6, 1, NULL, '2018-04-03 01:25:21', '2018-04-03 01:25:21'),
(6, 1, 7, 1, NULL, '2018-04-03 01:26:09', '2018-04-03 01:26:09'),
(7, 1, 8, 1, NULL, '2018-04-03 01:28:50', '2018-04-03 01:28:50'),
(8, 1, 9, 1, NULL, '2018-04-03 01:31:16', '2018-04-03 01:31:16'),
(9, 1, 10, 1, NULL, '2018-04-03 01:35:33', '2018-04-03 01:35:33'),
(10, 1, 11, 1, 'ceo of webicosoft1', '2018-04-03 06:52:11', '2018-04-03 06:53:17');

-- --------------------------------------------------------

--
-- Table structure for table `wc_posts`
--

CREATE TABLE `wc_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_company_id` int(10) UNSIGNED NOT NULL,
  `fk_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wc_posts`
--

INSERT INTO `wc_posts` (`id`, `title`, `description`, `fk_company_id`, `fk_by`, `created_at`, `updated_at`) VALUES
(1, 'Title1', 'Description12', 11, 1, '2018-04-04 01:38:41', '2018-04-04 01:49:27'),
(2, 'Title', 'Description', 11, 1, '2018-04-04 01:39:46', '2018-04-04 01:39:46'),
(3, 'Hello', 'My name is tauqeer', 11, 1, '2018-04-04 02:27:31', '2018-04-04 02:27:31');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `verify_companies`
--
ALTER TABLE `verify_companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `wc_addresses`
--
ALTER TABLE `wc_addresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wc_companies`
--
ALTER TABLE `wc_companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `wc_company_products`
--
ALTER TABLE `wc_company_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `wc_company_size`
--
ALTER TABLE `wc_company_size`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wc_company_specialities`
--
ALTER TABLE `wc_company_specialities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `wc_company_type`
--
ALTER TABLE `wc_company_type`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wc_contacts`
--
ALTER TABLE `wc_contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `wc_job_titles`
--
ALTER TABLE `wc_job_titles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wc_media`
--
ALTER TABLE `wc_media`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `wc_pivot_company_products`
--
ALTER TABLE `wc_pivot_company_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `wc_pivot_user_company_roles`
--
ALTER TABLE `wc_pivot_user_company_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `wc_posts`
--
ALTER TABLE `wc_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
