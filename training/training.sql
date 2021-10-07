-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2021 at 03:00 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `training`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `name`, `details`, `cover_image`, `type`, `video`, `created_at`, `updated_at`) VALUES
(13, 'Tot', 'dfgdfgsdf', 'TTPurSNCTbOnYSCmog2loReyllHdfQ3q9qeVKNsq.png', 'desktop', 'yrxVPKloRG9ZSWmKKxCJPe9eomnOhcQ4n2Flllm0.mp4', '2021-09-25 05:33:57', '2021-09-25 06:45:40');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'شبكات', 'Vi2BCpRSPt0cCs8aSxSpu4gsPn8NFTMvjCOqO7qQ.png', '2021-09-27 08:08:21', '2021-09-27 08:08:21'),
(4, 'تطوير برمجيات', 'qGPKDe5yTJ9cB4ivOVZyqC3Yx1jRRzGtgl9n1G49.jpg', '2021-09-28 04:00:13', '2021-09-28 04:02:15'),
(5, 'تصميم', 'NQ7igMjB3ZEix4bMdy7CKrPs4E1ubQbPAp6VgozT.png', '2021-09-28 04:21:33', '2021-09-28 04:21:33'),
(6, 'علاقات عامة وإعلام', 'rB1TTg6CgbSr7td1SraHYOxoBuJS39k3BNGFrRVh.png', '2021-10-05 03:45:18', '2021-10-05 03:45:18');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lectures_num` int(11) NOT NULL,
  `lecture_interval` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `payment_details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `place`, `lectures_num`, `lecture_interval`, `start_date`, `end_date`, `details`, `price`, `payment_details`, `image`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'laravel', 'gaza', 5, '2', '2021-10-05', '2020-10-15', '<p>لا يوجد تفاصيل الدورة</p>', 300.00, 'لا يوجد تفاصيل الدفع', 'bNbCdOUtL8tYz7ue2zXGZtyCpOYTnbiavPBfkjjD.jpg', 4, '2021-10-05 05:01:45', '2021-10-05 05:01:45'),
(2, 'css', 'gaza', 8, '3', '2021-10-05', '2022-02-15', '<p>nothing</p>', 150.00, 'nothing', '6OCFtflcb9iGmVaTZsWgxQCshpga1V0TU65jWNqh.png', 5, '2021-10-05 08:18:21', '2021-10-05 08:18:21');

-- --------------------------------------------------------

--
-- Table structure for table `course_registrations`
--

CREATE TABLE `course_registrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_gallery_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `image_gallery_id`, `created_at`, `updated_at`) VALUES
(11, 'S4IfMt2Xg23v0FYqlZTaEuVOwbyjPkqAEqMK9ld0.jpg', '16', '2021-09-22 08:06:11', '2021-09-22 08:06:11'),
(12, '3Ya0ihnW5X9Ww6GYHYOtQLwOKo6fhmlpKTEiPTnv.jpg', '16', '2021-09-22 08:06:11', '2021-09-22 08:06:11'),
(13, 'mujIXPfK0rXYrnUZKbiGAl5kYtfh1f6KGot38XDe.png', '16', '2021-09-22 08:06:11', '2021-09-22 08:06:11'),
(14, 'lcD4vR5ZJ1vW8kcUoSvuXUEkUhoBPf8le9kjIwoq.jpg', '17', '2021-09-23 05:15:16', '2021-09-23 05:15:16'),
(15, 'VBBXy8Bs9NrYNUR9Fcfspi5euhQbspoouBM7zAQY.png', '17', '2021-09-23 05:15:16', '2021-09-23 05:15:16');

-- --------------------------------------------------------

--
-- Table structure for table `images_gallery`
--

CREATE TABLE `images_gallery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images_gallery`
--

INSERT INTO `images_gallery` (`id`, `name`, `course_name`, `created_at`, `updated_at`) VALUES
(16, 'hana yousef', 'laravel', NULL, NULL),
(17, 'Tot', 'css', '2021-09-22 08:07:02', '2021-09-22 08:07:02');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2021_09_12_064815_create_sliders_table', 2),
(12, '2021_09_12_065702_create_testimonials_table', 2),
(13, '2021_09_12_065734_create_partners_table', 2),
(16, '2021_09_12_072415_create_images_table', 2),
(18, '2021_09_12_072912_create_news_letters_table', 2),
(19, '2021_09_12_072935_create_trainers_table', 2),
(21, '2021_09_13_101048_add_course_id_column_to_students_table', 3),
(23, '2021_09_12_065532_create_about_us_table', 4),
(24, '2021_09_14_092618_create_sessions_table', 5),
(25, '2021_09_12_072342_create_images_gallery_table', 6),
(26, '2021_09_12_065824_create_settings_table', 7),
(28, '2021_09_27_092253_create_categories_table', 8),
(35, '2014_10_12_000000_create_users_table', 9),
(36, '2021_09_11_082846_create_students_table', 9),
(38, '2021_09_12_064711_create_courses_table', 10),
(39, '2021_09_12_072730_create_course_registrations_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `news_letters`
--

CREATE TABLE `news_letters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `title`, `link`, `image`, `created_at`, `updated_at`) VALUES
(3, 'الغرفة التجارية', 'https://www.nablus-chamber.org/', 'Xh8PAvavmQbRUyDvE9Ufxd6HoAgJxtUj5TYnOVkD.png', '2021-09-23 06:36:42', '2021-09-23 06:36:42'),
(4, 'جامعة النجاح الوطنية', 'https://www.najah.edu/ar/', 'C6sRAuqJ5YakoEAZXB97lCZkbReVOeAqp78fc4d7.png', '2021-09-28 09:12:34', '2021-09-28 09:12:34'),
(5, 'المركز الكندي', 'https://cglobalc.com/', 'qkEDL3Y93Qv7Pmju3Ctm5X8ox7owWAzhSDeZfqQx.png', '2021-09-28 09:13:25', '2021-09-28 09:13:25');

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
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('yCrTTrfYO8L0cSSSixD4P5tQobHixTW7x3ALynaO', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.71 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiQ1YyN2s0dFBNeWRnV2hrbVJBbDB6TENlTkJ1eG1pRzRoOFFkelJZSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC90cmFpbmluZy9hZG1pbi9jb3Vyc2VzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJDE1aEVnUktzRnJZaFVyVXdYNEkzcHV0QjVRMkVuS2NQck9LMTA0QXVVeEJvYkZUVktRRHJhIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCQxNWhFZ1JLc0ZyWWhVclV3WDRJM3B1dEI1UTJFbktjUHJPSzEwNEF1VXhCb2JGVFZLUURyYSI7fQ==', 1633611183);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_name`, `logo`, `mobile`, `email`, `facebook`, `instagram`, `twitter`, `whatsapp`, `youtube`, `created_at`, `updated_at`) VALUES
(4, 'ToTff', 'v2YrMoXNjIk14rqxXaUEPCVuj3Z1z3l1ppVL8BcK.jpg', '0599893468', 'hanayoussef.1571997@gmail.com', 'https://www.youtube.com/watch?v=e3Rpqi_IHa8', 'https://www.youtube.com/watch?v=e3Rpqi_IHa8', 'https://www.youtube.com/watch?v=e3Rpqi_IHa8', 'https://www.youtube.com/watch?v=e3Rpqi_IHa8', 'https://www.youtube.com/watch?v=e3Rpqi_IHa8', '2021-09-25 09:56:18', '2021-09-25 10:01:56');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `details`, `image`, `created_at`, `updated_at`) VALUES
(47, 'دورة تصميم الحقائب التدريبية', 'تعلم فن التفاصيل من خلال دورة منهجية من كندا جلوبال سنتر تجعلك تمتلك تنظيم حقائبك بحرفية.', 'cnWcflVQI3EVPLJALTWRNcSPfmYTONaL0k3apjpK.jpg', '2021-09-28 06:19:35', '2021-09-28 06:20:41'),
(48, 'فرع كندا جلوبال سنتر في فلسطين', 'نرحب بالتعاون مع جميع المراكز و المدربين ويسعدنا تقديم خدماتنا التدريبية المتخصصة لكم', 'mwB7S4fPD0LJvEGiyGgIN1pCa6NPsjM45YV4b21P.jpg', '2021-09-28 06:23:53', '2021-09-28 06:23:53'),
(49, 'برنامج PCT', 'برنامج متخصص لتأهيل المدربين وتطوير مهاراتهم.', 'IKxcJWOcItGOypXWIHbDmWFCvJJVzMZOGpaVMVP0.jpg', '2021-09-28 06:24:36', '2021-09-28 06:24:36');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `mobile`, `gender`, `password`, `address`, `created_at`, `updated_at`) VALUES
(5, 'Tot', 'hana@gmail.com', '0599893468', 'M', '$2y$10$C0i438U.Clqs7F2m7MfRZecH63y8wha6RU8DaEWL/MxLUbdUsT9su', 'gaza', '2021-10-03 05:54:43', '2021-10-03 05:54:43'),
(6, 'Hana Youssef', 'hanayoussef.1571997@gmail.com', '0599793468', 'F', '$2y$10$NimzrLjnK27.T/0AhNdKoOxuKyajIPy6VQEZVBAoWohnO8GCvc.NS', 'gaza', '2021-10-03 06:03:16', '2021-10-03 06:03:16'),
(7, 'rihma', 'riham@gmail.com', '0599693468', 'F', '$2y$10$iukdchsDQPBu32Gx28JIOul6pTOLxy3QzO7yRISav2CYO5g8qvQlS', 'gaza', '2021-10-03 06:27:52', '2021-10-03 06:27:52');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `job_title`, `message`, `image`, `created_at`, `updated_at`) VALUES
(2, 'ghadaaaa', 'software', 'دورة مفيدة وممتعة وحملت معلومات جديدة ، كان لها اثر في اسلوبي وشخصيتي وتطورها للأفضل .', 'JY7pUHUATB9RaRd3KUlGLBPFlWARiuzpI7DNUqnV.png', '2021-09-23 04:24:49', '2021-09-23 04:24:49'),
(3, 'Hana Youssef', 'engineer', 'دورة مميزة جدا اخذت منها الكثير من المعلومات المهمة التي لم أعرفها .. أضافت إلى معلوماتي ومهاراتي الكثير وصححت بعض المعلومات التي كانت مغلوطة بالنسبة لي .', 'NoxNJFAkz9BOrN9qt8pX0r3VTjq68EJsCPnJYaIh.jpg', '2021-09-23 04:29:09', '2021-09-28 08:20:12'),
(4, 'Samar', 'student', 'من لايشكر الناس لا يشكر الله اليك استاذي القدير جمال الزبيدي ملتقى المدبين الفلسطيني لكم منا كل تقدير واحترام على مبادرتكم الطيبة التي كان لها اثر كبير على اداء المعلمين   في زمن التعلم عن بعد بما اكسبتموه للمعلم من مهارات تكنولوجية ساعدت المعلمين على التواصل مع طلبتهم واستراتيجيات كسرت الملل والروتين اثناء تقديم حصصهم لكم منا كل الشكر والعرفان  وجزاكم الله عنا خير الجزاء دمتم في خدمة وطنكم وبكم يسمو الوطن......', 'm4s7RoQC7bf8t0k3eeByHI8JMlOjVI7ZFmFb7eH0.png', '2021-09-23 04:44:21', '2021-09-28 08:19:54');

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

CREATE TABLE `trainers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PCT` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ISID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SBS` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Hana Youssef', 'hanayoussef.1571997@gmail.com', NULL, '$2y$10$15hEgRKsFrYhUrUwX4I3putB5Q2EnKcPrOK104AuUxBobFTVKQDra', NULL, NULL, NULL, '2021-10-03 06:01:45', '2021-10-03 06:01:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_category_id_foreign` (`category_id`);

--
-- Indexes for table `course_registrations`
--
ALTER TABLE `course_registrations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_registrations_student_id_foreign` (`student_id`),
  ADD KEY `course_registrations_course_id_foreign` (`course_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images_gallery`
--
ALTER TABLE `images_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_letters`
--
ALTER TABLE `news_letters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `news_letters_email_unique` (`email`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_email_unique` (`email`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_email_unique` (`email`),
  ADD UNIQUE KEY `students_mobile_unique` (`mobile`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainers`
--
ALTER TABLE `trainers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `trainers_email_unique` (`email`);

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
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course_registrations`
--
ALTER TABLE `course_registrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `images_gallery`
--
ALTER TABLE `images_gallery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `news_letters`
--
ALTER TABLE `news_letters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `trainers`
--
ALTER TABLE `trainers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `course_registrations`
--
ALTER TABLE `course_registrations`
  ADD CONSTRAINT `course_registrations_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `course_registrations_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
