-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2023 at 12:57 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstone2`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `banner_hash` text NOT NULL,
  `banner_body` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `banner_image` varchar(255) DEFAULT NULL,
  `alter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `created_at`, `updated_at`, `banner_hash`, `banner_body`, `user_id`, `banner_image`, `alter`) VALUES
(3, '2023-05-29 17:34:39', '2023-05-29 17:34:39', 'event', 'event', 1, 'event.png', 0),
(4, '2023-05-29 17:35:03', '2023-05-29 17:35:03', 'event', 'event', 1, 'event.png', 1),
(5, '2023-05-29 17:39:13', '2023-05-29 17:39:13', 'event', 'event', 1, 'slogan.png', 0),
(6, '2023-05-29 19:30:26', '2023-05-29 19:30:26', 'event', 'event', 1, 'event.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `clicks`
--

CREATE TABLE `clicks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `listing_id` bigint(20) UNSIGNED NOT NULL,
  `user_agent` text DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clicks`
--

INSERT INTO `clicks` (`id`, `listing_id`, `user_agent`, `ip`, `created_at`, `updated_at`) VALUES
(1, 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36 OPR/98.0.0.0', '127.0.0.1', '2023-05-28 23:25:45', '2023-05-28 23:25:45'),
(2, 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36 OPR/98.0.0.0', '127.0.0.1', '2023-05-29 16:52:56', '2023-05-29 16:52:56'),
(3, 2, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36 OPR/98.0.0.0', '127.0.0.1', '2023-05-29 16:53:02', '2023-05-29 16:53:02'),
(4, 3, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36 OPR/98.0.0.0', '127.0.0.1', '2023-05-29 17:02:51', '2023-05-29 17:02:51');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
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
-- Table structure for table `joblists`
--

CREATE TABLE `joblists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `joblist_title` text NOT NULL,
  `joblist_company` text NOT NULL,
  `joblist_description` text NOT NULL,
  `joblist_additionalinfo` text NOT NULL,
  `joblist_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `like` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `created_at`, `updated_at`, `user_id`, `post_id`, `like`) VALUES
(4, '2023-05-29 08:12:37', '2023-05-29 08:12:37', 1, 8, 1),
(6, '2023-05-29 08:16:54', '2023-05-29 08:16:54', 1, 7, 1),
(8, '2023-05-29 08:19:12', '2023-05-29 08:19:12', 1, 9, 1),
(9, '2023-05-29 08:19:44', '2023-05-29 08:19:44', 1, 10, 1),
(11, '2023-05-29 08:21:26', '2023-05-29 08:21:26', 2, 10, 1),
(12, '2023-05-29 08:21:34', '2023-05-29 08:21:34', 2, 2, 1),
(13, '2023-05-29 09:15:16', '2023-05-29 09:15:16', 2, 7, 1),
(14, '2023-05-29 09:15:21', '2023-05-29 09:15:21', 2, 6, 1),
(15, '2023-05-29 09:15:27', '2023-05-29 09:15:27', 2, 5, 1),
(16, '2023-05-29 17:04:28', '2023-05-29 17:04:28', 1, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `listings`
--

CREATE TABLE `listings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `is_highlighted` tinyint(1) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `content` text NOT NULL,
  `apply_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `listings`
--

INSERT INTO `listings` (`id`, `created_at`, `updated_at`, `user_id`, `title`, `slug`, `company`, `location`, `logo`, `is_highlighted`, `is_active`, `content`, `apply_link`) VALUES
(1, '2023-05-28 21:35:52', '2023-05-28 21:35:52', 1, 'job title', 'job-title-4109', 'company name', 'ermita,manila', 'nIgt342Fx2n8vOf1DjUzDWlzSrHTh2fznQrXMJxG.png', 1, 1, '<p>jfhgdawertqehjwrgwdfqw</p>', 'https://www.adamson.edu.ph/2018/'),
(2, '2023-05-28 22:40:34', '2023-05-28 22:40:34', 1, 'adamson', 'adamson-4560', 'adamson', 'ermita,manila', '8kC6y9FtJK4B6zSFnlUjQ6zpssv8AFYCrQcd8byd.png', 0, 1, '<p>dghsdfhsdfghdfghssdfg</p>', 'https://www.adamson.edu.ph/2018/'),
(3, '2023-05-29 16:57:28', '2023-05-29 16:57:28', 1, 'TREE', 'tree-4545', 'puno', 'ermita,manila', 'ZMkUuPLSqpNFU0SZ7s6QsHFNJRGtsffqLyvGeXGd.jpg', 1, 1, '<p>puno na may tree</p>', 'https://www.adamson.edu.ph/2018/'),
(4, '2023-05-29 16:58:29', '2023-05-29 16:58:29', 1, 'PUNO', 'puno-8623', 'TREE', 'ermita,manila', 'ZNK4r0NomPQZsXWSh6k5PdYOxbFDLVM0IceaRnEf.jpg', 0, 1, '<p>tree na may puno</p>', 'https://www.adamson.edu.ph/2018/'),
(5, '2023-05-29 19:31:47', '2023-05-29 19:31:47', 1, 'accounting', 'accounting-5106', 'company name', 'ermita,manila', '88qDucryl1vT0Y1QaSQycMDBhpfoQYQuAAL772cZ.jpg', 1, 1, '<p>body</p>', 'https://www.adamson.edu.ph/2018/');

-- --------------------------------------------------------

--
-- Table structure for table `listing_tag`
--

CREATE TABLE `listing_tag` (
  `listing_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `listing_tag`
--

INSERT INTO `listing_tag` (`listing_id`, `tag_id`) VALUES
(1, 1),
(1, 2),
(2, 3),
(2, 4),
(3, 5),
(3, 6),
(4, 7),
(5, 8),
(5, 9);

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
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_05_03_000001_create_customer_columns', 1),
(5, '2019_05_03_000002_create_subscriptions_table', 1),
(6, '2019_05_03_000003_create_subscription_items_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2023_04_27_163744_create_posts_table', 1),
(10, '2023_04_27_202716_create_likes_table', 1),
(11, '2023_05_03_142309_create_comments_table', 1),
(12, '2023_05_07_153731_create_banners_table', 1),
(13, '2023_05_11_015811_create_joblists_table', 1),
(14, '2023_05_13_155604_create_listings_table', 1),
(15, '2023_05_13_155623_create_clicks_table', 1),
(16, '2023_05_13_155638_create_tags_table', 1),
(17, '2023_05_13_185531_create_listing_tag_table', 1),
(18, '2023_05_29_161450_add_vote_count_to_posts', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `body` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_image` varchar(255) DEFAULT NULL,
  `type` int(11) NOT NULL,
  `private` int(11) NOT NULL,
  `vote_count` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `created_at`, `updated_at`, `body`, `user_id`, `post_image`, `type`, `private`, `vote_count`) VALUES
(1, '2023-05-28 19:21:41', '2023-05-28 19:21:41', 'asdasd', 1, NULL, 0, 0, 0),
(2, '2023-05-29 02:43:51', '2023-05-29 08:21:34', 'Speak up your mind..', 1, NULL, 0, 0, 1),
(3, '2023-05-29 02:51:10', '2023-05-29 02:51:10', 'adamson logo', 1, 'adulogo.png', 1, 0, 0),
(4, '2023-05-29 02:59:46', '2023-05-29 02:59:46', 'puno', 1, 'slogan.png', 1, 0, 0),
(5, '2023-05-29 03:04:15', '2023-05-29 17:04:28', 'guidance', 1, 'guidanceteam.png', 1, 0, 0),
(6, '2023-05-29 03:04:35', '2023-05-29 09:15:21', 'rapha', 1, 'rapha.png', 1, 0, 1),
(7, '2023-05-29 05:27:26', '2023-05-29 09:15:16', 'HAHAHAHA', 1, NULL, 0, 0, 2),
(9, '2023-05-29 08:19:10', '2023-05-29 08:19:12', 'yes', 1, NULL, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `stripe_id` varchar(255) NOT NULL,
  `stripe_status` varchar(255) NOT NULL,
  `stripe_price` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `ends_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscription_items`
--

CREATE TABLE `subscription_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subscription_id` bigint(20) UNSIGNED NOT NULL,
  `stripe_id` varchar(255) NOT NULL,
  `stripe_product` varchar(255) NOT NULL,
  `stripe_price` varchar(255) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Job', 'job', '2023-05-28 21:35:52', '2023-05-28 21:35:52'),
(2, 'Title', 'title', '2023-05-28 21:35:52', '2023-05-28 21:35:52'),
(3, 'School', 'school', '2023-05-28 22:40:34', '2023-05-28 22:40:34'),
(4, 'University', 'university', '2023-05-28 22:40:34', '2023-05-28 22:40:34'),
(5, 'Puno', 'puno', '2023-05-29 16:57:28', '2023-05-29 16:57:28'),
(6, 'Tree', 'tree', '2023-05-29 16:57:28', '2023-05-29 16:57:28'),
(7, 'Treehouse', 'treehouse', '2023-05-29 16:58:29', '2023-05-29 16:58:29'),
(8, 'IT', 'it', '2023-05-29 19:31:47', '2023-05-29 19:31:47'),
(9, 'CS', 'cs', '2023-05-29 19:31:47', '2023-05-29 19:31:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `studentnum` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `stripe_id` varchar(255) DEFAULT NULL,
  `pm_type` varchar(255) DEFAULT NULL,
  `pm_last_four` varchar(4) DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `bio` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `studentnum`, `username`, `email`, `email_verified_at`, `firstname`, `lastname`, `password`, `image`, `remember_token`, `role`, `created_at`, `updated_at`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`, `bio`) VALUES
(1, 2020139830, 'SHUAA', 'shua@gmail.com', NULL, 'Joshua', 'Agcon', '$2y$10$hP1J4daZJdCJlkvjQaO54eA2MKvUiMHjWZOFehvRa9NLmkdCVD0aO', NULL, NULL, 1, '2023-05-25 05:51:56', '2023-05-29 15:15:18', NULL, NULL, NULL, NULL, 'HAHAHAHA BIO KO TO'),
(2, 2020139831, 'joshua', 'carl@gmail.com', NULL, 'Gad', 'jih', '$2y$10$UuT6P9bUqFIIZwfWWsEWPerdJbvuL3sgbcuwdILJPPTfSCPLGnyRy', NULL, NULL, 0, '2023-05-29 08:20:57', '2023-05-29 08:20:57', NULL, NULL, NULL, NULL, NULL),
(5, 123456789, 'jisoo', 'jisoo@adamson.edu.ph', NULL, 'jennie', 'kim', '$2y$10$WF6nrpjkkioess/sy9Nadu5XTVK1.lldojfOb04K98JdMU454//rm', NULL, NULL, 0, '2023-05-29 19:25:50', '2023-05-29 19:29:29', NULL, NULL, NULL, NULL, 'black pink');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clicks`
--
ALTER TABLE `clicks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `joblists`
--
ALTER TABLE `joblists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listings`
--
ALTER TABLE `listings`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscriptions_stripe_id_unique` (`stripe_id`),
  ADD KEY `subscriptions_user_id_stripe_status_index` (`user_id`,`stripe_status`);

--
-- Indexes for table `subscription_items`
--
ALTER TABLE `subscription_items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscription_items_subscription_id_stripe_price_unique` (`subscription_id`,`stripe_price`),
  ADD UNIQUE KEY `subscription_items_stripe_id_unique` (`stripe_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_studentnum_unique` (`studentnum`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_stripe_id_index` (`stripe_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `clicks`
--
ALTER TABLE `clicks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `joblists`
--
ALTER TABLE `joblists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `listings`
--
ALTER TABLE `listings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscription_items`
--
ALTER TABLE `subscription_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
