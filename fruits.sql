-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 31 2023 г., 10:44
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `fruits`
--

-- --------------------------------------------------------

--
-- Структура таблицы `banners`
--

CREATE TABLE `banners` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `banners`
--

INSERT INTO `banners` (`id`, `title`, `text`, `image`, `percentage`, `time`, `created_at`, `updated_at`) VALUES
(2, 'Hikan Strwaberry', 'Quisquam minus maiores repudiandae nobis, minima saepe id, fugit ullam similique! Beatae, minima quisquam molestias facere ea. Perspiciatis unde omnis iste natus error sit voluptatem                     accusant', '1690512165.jpg', '30', '2023/08/12', '2023-07-27 23:42:45', '2023-07-27 23:42:45');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `text`, `created_at`, `updated_at`) VALUES
(1, 'asdasd', 'shohruhermanov5@gmail.com', 'asdasdasd', '2023-07-30 00:23:39', '2023-07-30 00:23:39'),
(2, 'asdasd', 'asddddd@ds.comasd', 'adasdasdasd', '2023-07-30 00:31:36', '2023-07-30 00:31:36'),
(3, 'Shohruh', 'shohruhermanov5@gmail.com', 'asdasfasdfsdf', '2023-07-30 00:34:31', '2023-07-30 00:34:31');

-- --------------------------------------------------------

--
-- Структура таблицы `contact2s`
--

CREATE TABLE `contact2s` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contact2s`
--

INSERT INTO `contact2s` (`id`, `name`, `email`, `phone`, `subject`, `text`, `created_at`, `updated_at`) VALUES
(1, 'Shohruh', 'shohruhermanov5@gmail.com', '+998 (94) 055-21-01', 'asd', 'dasasdsad', '2023-07-30 01:19:43', '2023-07-30 01:19:43');

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `title`, `text`, `location`, `created_at`, `updated_at`) VALUES
(2, 'Shop Address', '34/8, East Hukupara', 'dsa', '2023-07-29 01:54:10', '2023-07-29 01:54:10'),
(3, 'Shop Hours', 'MON - FRIDAY: 8 to 9 PM <br> SAT - SUN: 10 to 8 PM', 'asd', '2023-07-29 01:54:37', '2023-07-29 01:54:37'),
(4, 'Contact', 'Phone: +00 111 222 3333', 'sad', '2023-07-29 01:54:58', '2023-07-29 01:54:58');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `features`
--

CREATE TABLE `features` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `features`
--

INSERT INTO `features` (`id`, `title`, `text`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Free Shipping', 'When order over $75', 'fas fa-shipping-fast', '2023-07-25 10:49:13', '2023-07-27 01:07:27'),
(3, '24/7 Support', 'Get support all day', 'fas fa-phone-volume', '2023-07-27 01:08:01', '2023-07-27 01:08:01'),
(4, 'Refund', 'Get refund within 3 days!', 'fas fa-sync', '2023-07-27 01:08:37', '2023-07-27 01:08:37');

-- --------------------------------------------------------

--
-- Структура таблицы `filters`
--

CREATE TABLE `filters` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `filters`
--

INSERT INTO `filters` (`id`, `title`, `data`, `created_at`, `updated_at`) VALUES
(1, 'Strawberry', 'strawberry', '2023-07-29 04:11:56', '2023-07-29 04:11:56'),
(2, 'Berry', 'berry', '2023-07-29 04:12:28', '2023-07-29 04:12:28'),
(3, 'Lemon', 'lemon', '2023-07-29 04:12:49', '2023-07-29 04:12:49'),
(4, 'Avocado', 'avocado', '2023-07-29 05:48:27', '2023-07-29 05:48:27'),
(5, 'Apple', 'apple', '2023-07-29 05:48:44', '2023-07-29 05:48:44');

-- --------------------------------------------------------

--
-- Структура таблицы `logos`
--

CREATE TABLE `logos` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `logos`
--

INSERT INTO `logos` (`id`, `image`, `created_at`, `updated_at`) VALUES
(2, '1690520385.png', '2023-07-28 01:59:45', '2023-07-28 01:59:45'),
(3, '1690520392.png', '2023-07-28 01:59:52', '2023-07-28 01:59:52'),
(4, '1690520400.png', '2023-07-28 02:00:00', '2023-07-28 02:00:00'),
(5, '1690520411.png', '2023-07-28 02:00:11', '2023-07-28 02:00:11'),
(6, '1690520856.png', '2023-07-28 02:07:36', '2023-07-28 02:07:36');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_07_25_131754_create_features_table', 2),
(7, '2023_07_27_041317_create_products_table', 3),
(8, '2023_07_27_064854_create_banners_table', 4),
(9, '2023_07_28_024623_create_testimons_table', 5),
(10, '2023_07_28_033731_create_news_table', 6),
(11, '2023_07_28_043815_create_logos_table', 7),
(12, '2023_07_28_051519_create_networks_table', 8),
(13, '2023_07_28_063423_create_contacts_table', 9),
(16, '2023_07_29_064420_create_filters_table', 10),
(18, '2023_07_29_082754_add_filter_id_column_to_products_table', 11),
(19, '2023_07_30_030743_create_comments_table', 12),
(20, '2023_07_30_040000_create_contact2s_table', 13),
(21, '2023_07_30_102530_add_slug_column_to_news_table', 14),
(22, '2023_07_30_111123_add_slug_column_to_products_table', 15);

-- --------------------------------------------------------

--
-- Структура таблицы `networks`
--

CREATE TABLE `networks` (
  `id` bigint UNSIGNED NOT NULL,
  `Icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `networks`
--

INSERT INTO `networks` (`id`, `Icon`, `url`, `created_at`, `updated_at`) VALUES
(3, 'fab fa-facebook-f', '#!', '2023-07-28 03:26:53', '2023-07-28 03:26:53'),
(4, 'fab fa-twitter', '#!', '2023-07-28 03:27:04', '2023-07-28 03:27:04'),
(5, 'fab fa-instagram', '#!', '2023-07-28 03:27:18', '2023-07-28 03:27:18'),
(6, 'fab fa-linkedin', '#!', '2023-07-28 03:27:29', '2023-07-28 03:27:29'),
(7, 'fab fa-dribbble', '#!', '2023-07-28 03:27:39', '2023-07-28 03:27:39'),
(8, 'fab fa-telegram', '#!', '2023-07-28 03:27:51', '2023-07-28 03:27:51');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `image`, `text`, `created_at`, `updated_at`, `slug`) VALUES
(7, 'You will vainly look for fruit on it in autumn.', '1690518730.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus laborum autem, dolores inventore, beatae nam.', '2023-07-28 01:32:10', '2023-07-30 07:33:45', 'you-will-vainly-look-for-fruit-on-it-in-autumn'),
(8, 'A man\'s worth has its season, like tomato.', '1690518790.jpg', 'Labore rebum duo est Sit dolore eos sit tempor eos stet, vero vero clita magna kasd no nonumy et eos dolor magna ipsum.', '2023-07-28 01:33:10', '2023-07-30 07:33:36', 'a-mans-worth-has-its-season-like-tomato'),
(9, 'Good thoughts bear good fresh juicy fruit.', '1690518814.jpg', 'Labore rebum duo est Sit dolore eos sit tempor eos stet, vero vero clita magna kasd no nonumy et eos dolor magna ipsum.', '2023-07-28 01:33:34', '2023-07-30 07:33:32', 'good-thoughts-bear-good-fresh-juicy-fruit'),
(10, 'Fall in love with the fresh orange', '1690518835.jpg', 'Labore rebum duo est Sit dolore eos sit tempor eos stet, vero vero clita magna kasd no nonumy et eos dolor magna ipsum.', '2023-07-28 01:33:55', '2023-07-30 07:33:26', 'fall-in-love-with-the-fresh-orange'),
(11, 'Why the berries always look delecious', '1690518856.jpg', 'Labore rebum duo est Sit dolore eos sit tempor eos stet, vero vero clita magna kasd no nonumy et eos dolor magna ipsum.', '2023-07-28 01:34:16', '2023-07-30 07:33:20', 'why-the-berries-always-look-delecious'),
(12, 'Love for fruits are genuine of John Doe', '1690518873.jpg', 'Labore rebum duo est Sit dolore eos sit tempor eos stet, vero vero clita magna kasd no nonumy et eos dolor magna ipsum.', '2023-07-28 01:34:33', '2023-07-30 07:33:11', 'love-for-fruits-are-genuine-of-john-doe');

-- --------------------------------------------------------

--
-- Структура таблицы `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `money` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `filter_id` int NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `image`, `money`, `created_at`, `updated_at`, `filter_id`, `slug`) VALUES
(12, 'Strawberry', '1690620328.jpg', '85$', '2023-07-29 05:45:28', '2023-07-30 08:16:31', 1, 'strawberry'),
(13, 'Berry', '1690620402.jpg', '70$', '2023-07-29 05:46:42', '2023-07-30 08:16:21', 2, 'berry'),
(14, 'Lemon', '1690620439.jpg', '35$', '2023-07-29 05:47:19', '2023-07-30 08:16:15', 3, 'lemon'),
(15, 'Avocado', '1690620551.jpg', '50$', '2023-07-29 05:49:11', '2023-07-30 08:16:09', 4, 'avocado'),
(16, 'Green Apple', '1690620583.jpg', '45$', '2023-07-29 05:49:43', '2023-07-30 08:16:03', 5, 'green-apple'),
(19, 'Strawberry', '1690685868.jpg', '80$', '2023-07-29 23:57:48', '2023-07-30 08:13:48', 1, 'strawberry');

-- --------------------------------------------------------

--
-- Структура таблицы `testimons`
--

CREATE TABLE `testimons` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `testimons`
--

INSERT INTO `testimons` (`id`, `title`, `image`, `job`, `text`, `created_at`, `updated_at`) VALUES
(2, 'Saira Hakim', '1690514149.png', 'Local shop owner', '\" Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium \"', '2023-07-28 00:15:49', '2023-07-28 00:15:49'),
(3, 'David Niph', '1690514198.png', 'Local shop owner', '\" Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium \"', '2023-07-28 00:16:38', '2023-07-28 00:16:38'),
(4, 'Jacob Sikim', '1690514239.png', 'Local shop owner', '\" Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium \"', '2023-07-28 00:17:19', '2023-07-28 00:17:19');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Shohruh', 'shohruhermanov5@gmail.com', NULL, '$2y$10$S0y54ByTAZqM65/2VIL0dudMzfe9bGbPU1Am8qRCv7ff5g7OC2Z62', NULL, '2023-07-25 01:13:18', '2023-07-25 01:13:18');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contact2s`
--
ALTER TABLE `contact2s`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `filters`
--
ALTER TABLE `filters`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `networks`
--
ALTER TABLE `networks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `testimons`
--
ALTER TABLE `testimons`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `contact2s`
--
ALTER TABLE `contact2s`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `filters`
--
ALTER TABLE `filters`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `networks`
--
ALTER TABLE `networks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `testimons`
--
ALTER TABLE `testimons`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
