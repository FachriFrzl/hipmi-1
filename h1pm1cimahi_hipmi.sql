-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 16, 2023 at 02:29 PM
-- Server version: 10.3.37-MariaDB-cll-lve
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `h1pm1cimahi_hipmi`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(12) NOT NULL,
  `visi_id` int(11) NOT NULL,
  `misi_id` int(11) NOT NULL,
  `motto_id` int(11) NOT NULL,
  `gambar_1` varchar(255) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `deskripsi_lanjutan` varchar(750) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `visi_id`, `misi_id`, `motto_id`, `gambar_1`, `deskripsi`, `deskripsi_lanjutan`) VALUES
(1, 1, 1, 1, 'code.png', 'HIPMI memiliki 34 Badan Pengurus Daerah di seluruh Indonesia. HIPMI Jaya yang ada di Jakarta saat ini mempunyai Badan Pengurus Cabang (BPC) yang melingkupi 5 daerah di wilayah DKI Jakarta. Saat ini terdapat lebih dari 3000 anggota yang telah terdaftar di HIPMI Jaya', '10 Juni 1972, di kala sebagian besar pemuda bercita-cita menjadi PNS, ABRI, atau POLRI, sekelompok pengusaha muda: Drs. Abdul Latief; Ir. Siswono Yudo Husodo; Teuku Sjahrul; Datuk Hakim Thantawi, Badar Tando, Irawan Djajaatmadja, SH; Hari Sjamsudin Mangaan; Pontjo Sutowo; dan Ir. Mahdi Diah bersepakat untuk mendirikan HIPMI, sebuah wadah belajar dan berjejaring bagi pengusaha-pengusaha muda Indonesia. Langkah ini adalah upaya untuk mendorong pertumbuhan pengusaha nasional, khususnya dari kalangan pemuda karena mereka sadar bahwa untuk membangun perekonomian nasional, Indonesia membutuhkan lebih banyak entrepreneur');

-- --------------------------------------------------------

--
-- Table structure for table `agendas`
--

CREATE TABLE `agendas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `content` text NOT NULL,
  `location` text NOT NULL,
  `yt_link` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agendas`
--

INSERT INTO `agendas` (`id`, `title`, `slug`, `start_date`, `end_date`, `start_time`, `end_time`, `content`, `location`, `yt_link`, `image`, `user_id`, `created_at`, `updated_at`) VALUES
(5, 'Musyawarah Cabang', 'musyawarah-cabang', '2022-12-20', '2022-12-20', '08:00:00', '14:00:00', '<div style=\"color: #6688cc; background-color: #000c18; font-family: Consolas, \'Courier New\', monospace; font-size: 14px; line-height: 19px; white-space: pre;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum eius eos magni incidunt veniam, maiores dolore mollitia architecto. Illo enim beatae dignissimos quia eaque quisquam animi vel repellendus commodi sunt. Quod quia et asperiores, dolores eligendi optio veritatis ex tempore, sed facilis illo deserunt quisquam nobis, corporis repellendus doloremque maxime soluta officia cumque natus maiores voluptate ipsa eveniet? Voluptates doloribus hic unde fugit, maxime quaerat eaque consequuntur consectetur velit perspiciatis voluptate dicta ut dolores harum sequi natus, ratione ducimus necessitatibus optio id reiciendis accusantium perferendis? Amet tempore neque, distinctio aut dolore a iste minus dolorum, sunt fuga magnam, aliquid laudantium!</div>', 'Cimahi', '#', 'U3DAFRvhp9X9Bg1whuZXzULqJBTsDhS6DIdfi6gu.jpg', 1, '2022-12-09 21:08:24', '2023-01-13 03:03:27');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Berita', 'berita', 'sUxYWJAsp1uEJwMuhMv2VeHNyUj5YPFoNiJjljn1.jpg', '2022-11-20 13:46:42', '2022-12-09 20:19:07'),
(2, 'Artikel', 'artikel', 'fPnjTyYUivhpc3IspgAzirr44dUGrAvzFWvKxiZy.jpg', '2022-12-09 20:20:34', '2022-12-09 20:20:34');

-- --------------------------------------------------------

--
-- Table structure for table `categoriprestasis`
--

CREATE TABLE `categoriprestasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categoriprestasis`
--

INSERT INTO `categoriprestasis` (`id`, `name`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Prestasi Akademik', 'prestasi-akademik', 'cXaQTTOlGBdfaSv4HGUNHpDitjCwqPOtwgqGKgnr.jpg', '2022-11-29 21:55:01', '2022-11-30 04:33:14'),
(2, 'Hafidz Qur\'an', 'hafidz-quran', '94vSU9G9ssii5413zBCRzh5PZzHhvlwIBkd49ynu.png', '2022-11-30 04:32:58', '2022-11-30 04:32:58');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(3, 'Endar Suhendar', 'endarphysics@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2022-12-09 18:51:31', '2022-12-09 18:51:31');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `title`, `slug`, `description`, `image`, `created_at`, `updated_at`) VALUES
(13, 'Pemkot Cimahi', '', '<p>Pemerintahan Kota Cimahi</p>', 'e0RSOFgxYEGZZZEBMARdCipIG74LfKJnEJ5ZYaQp.png', '2023-01-04 02:36:01', '2023-01-05 20:55:18'),
(14, 'UNJANI', '', '<p>Universitas Jenderal Achmad Yani</p>', 'ZRkEvwokQi897R6oNWdgl5R88sQIIC07NGceF8IE.png', '2023-01-04 02:37:00', '2023-01-05 21:00:43'),
(15, 'Bank BJB', '', '<p>Bekerjasama dengan Bank BJB</p>', 'BdUNnoZj8DP5UBbKMfLl9j69ff7oA6vSFwqYnu1m.png', '2023-01-04 02:37:45', '2023-01-05 21:00:28'),
(16, 'Hipmi Jabar', '', '<p>HIPMI Jawa Barat</p>', 'EASMvVq6sgOV5bm1gea5q5wVbSEPcfjzEjCLFIcJ.png', '2023-01-04 02:38:11', '2023-01-04 02:38:11'),
(17, 'KNPI', '', '<p>Bekerjasama dengan KNPI</p>', '5vAezgKngDNsnIVw3WfOke5Ki82mV32SJhw9mEeO.png', '2023-01-04 02:38:31', '2023-01-05 21:00:13');

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
-- Table structure for table `formdaftars`
--

CREATE TABLE `formdaftars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `grade_need` varchar(255) NOT NULL,
  `jalur_masuk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) NOT NULL,
  `id_number` varchar(255) NOT NULL,
  `birth_place` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` text NOT NULL,
  `school_before` varchar(255) NOT NULL,
  `school_class_before` varchar(255) NOT NULL,
  `parent_name` varchar(255) NOT NULL,
  `parent_phone` varchar(255) NOT NULL,
  `parent_address` text DEFAULT NULL,
  `achievement` text DEFAULT NULL,
  `quran_memorized` text DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `formdaftars`
--

INSERT INTO `formdaftars` (`id`, `grade_need`, `jalur_masuk`, `name`, `id_number`, `birth_place`, `birth_date`, `phone`, `address`, `school_before`, `school_class_before`, `parent_name`, `parent_phone`, `parent_address`, `achievement`, `quran_memorized`, `image`, `created_at`, `updated_at`, `email`) VALUES
(5, 'GRADE 1', 'on', 'Endar Suhendar', '9876541212', 'Bandung', '2000-01-13', '+6285222287', 'Jalan Cipedes Selatan No. 85, Kelurahan Sukabungah, Kecamatan Sukajadi, Kota Bandung', 'Darul Ilmi Islamic Primary School', 'TKB', 'Yahya bin Ibrahim', '+6281111112949', NULL, NULL, NULL, 'EZHf8KDakZRhHDoik0bt0CMQXCqVIVkzJ4YGojpC.png', '2022-12-06 01:03:16', '2022-12-06 01:03:16', NULL),
(6, 'GRADE 12', 'Beasiswa', 'Budiman Wicaksono', '12321323', 'Yaman', '2000-12-27', '085222287942', 'Jalan Cipedes Selatan No. 85, Kelurahan Sukabungah, Kecamatan Sukajadi, Kota Bandung', 'Ini adalah Nam Sekolah', 'Kelas 7', 'Muhammad Adm', '+6281111112949', NULL, 'ini prestasi', 'juz 30', 'FbtDPla2wS21DDM0t3byKyn9c2FEJVF2cSgrkxiQ.png', '2022-12-06 01:05:19', '2022-12-06 03:38:21', NULL),
(7, 'GRADE 2', 'Umum', 'Rahmaniwafda', '4444444', 'Bandung', '2001-01-01', '12312312323', 'Jalan Cipedes Selatan No. 85, Kelurahan Sukabungah, Kecamatan Sukajadi, Kota Bandung', 'Darul Ilmi Islamic Primary School', '6', 'Muhammad Adm', '+6281111112949', NULL, '123123123\r\n123123\r\n123123', '123213\r\n123123\r\n123123', 'VguVeqKJkeM2TsOAz1jbUlRzpHdvJAEHG6mXnOU5.jpg', '2022-12-06 04:06:54', '2022-12-06 04:06:54', NULL),
(8, 'GRADE 2', 'Beasiswa', 'Endar Suhendar Bandung', '123123123', 'Bandung', '2001-01-01', '+6285222287', 'Jalan Cipedes Selatan No. 85, Kelurahan Sukabungah, Kecamatan Sukajadi, Kota Bandung', 'Ini adalah Nam Sekolah', 'TKB', 'Yahya bin Ibrahim', '085222287942', NULL, NULL, NULL, 'yZoXwXmZndYbLka2VLK3gqOlbsCvlDvDeABnPg4F.jpg', '2022-12-06 04:11:08', '2022-12-06 04:11:08', NULL),
(12, 'NURSERY', 'Umum', 'Nursari Nurani', '23123123213', 'Jakarta', '2015-01-02', '085222287942', 'Jalan Cipedes Selatan No. 85, Kelurahan Sukabungah, Kecamatan Sukajadi, Kota Bandung', 'Belum Sekolah', 'Belum Sekolah', 'Musa bin Harun', '085222287942', NULL, NULL, NULL, '6gPxHz9cBRBDe3z4ZZnfGZLKurWcIhbb2glf4RZQ.jpg', '2022-12-06 04:52:17', '2022-12-06 04:52:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `identities`
--

CREATE TABLE `identities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `address` text NOT NULL,
  `gmap` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fb` varchar(255) NOT NULL,
  `ig` varchar(255) NOT NULL,
  `tt` varchar(255) NOT NULL,
  `yt` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `identities`
--

INSERT INTO `identities` (`id`, `name`, `description`, `address`, `gmap`, `phone`, `email`, `fb`, `ig`, `tt`, `yt`, `created_at`, `updated_at`) VALUES
(1, 'Al Lathif', 'ini adalah deskripsi', 'Alamat lembaga', '1231sdfsdfsfsdf', '12312323434', 'admin@allathif.sch.id', 'facebook id', 'instagram', 'tiktok id', 'youtube id', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) NOT NULL,
  `favicon` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `logo`, `favicon`, `created_at`, `updated_at`) VALUES
(1, 'logo.png', 'fav.png', '2022-12-29 05:23:38', '2022-12-29 05:23:38');

-- --------------------------------------------------------

--
-- Table structure for table `metodologies`
--

CREATE TABLE `metodologies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `metodologies`
--

INSERT INTO `metodologies` (`id`, `title`, `slug`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'coba1', 'coba-1', 'coba 1', 'coba.png', '2023-01-06 10:13:12', '2023-01-06 10:13:12');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_11_20_115423_create_categories_table', 1),
(7, '2022_11_20_115549_create_posts_table', 1),
(8, '2022_11_20_115808_create_agendas_table', 1),
(9, '2022_11_20_120104_create_sliders_table', 1),
(10, '2022_11_20_120244_create_unggulans_table', 1),
(11, '2022_11_20_120438_create_identities_table', 1),
(12, '2022_11_25_210226_create_logos_table', 2),
(13, '2022_11_26_035144_create_prestasis_table', 3),
(14, '2022_11_26_035718_create_testimonies_table', 4),
(15, '2022_11_29_154136_create_categoriprestasis_table', 5),
(16, '2022_11_30_195931_create_facilities_table', 6),
(17, '2022_12_06_030754_create_formdaftars_table', 7),
(18, '2022_12_10_005857_create_contacts_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `misi`
--

CREATE TABLE `misi` (
  `id` int(11) NOT NULL,
  `misi` varchar(255) NOT NULL,
  `gambar_misi` varchar(255) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `misi`
--

INSERT INTO `misi` (`id`, `misi`, `gambar_misi`, `updated_at`, `created_at`) VALUES
(1, '1. Bangun koneksi dan kolaborasi dengan semangat inovasi dan optimalisasi\r\n2. Pengembangan ilmu dan kompetensi untuk anggota\r\n3. Membantu solusi modal dan akses pasar untuk anggota\r\n4. Menyebarkan semangat kewirausahaan di Kota Cimahi', 'misi.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `motto`
--

CREATE TABLE `motto` (
  `id` int(12) NOT NULL,
  `motto` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `motto`
--

INSERT INTO `motto` (`id`, `motto`, `kota`, `updated_at`, `created_at`) VALUES
(1, 'Menjadikan HIPMI Jaya sebagai organisasi pencetak pengusaha muda dan pembentuk ekosistem wirausaha terbaik di Kota Cimahi melalui program kerja yang tepat inovatif dengan semangat dan marwah organisasi HIPMI Jaya', 'Kota Cimahi', NULL, NULL),
(2, 'menjadi lebih baik dan melampauinya', 'Bandung', '2023-01-13 02:15:26', '2023-01-13 02:15:26'),
(3, 'kucoba dan janjikan', 'Bandung', '2023-01-13 04:37:23', '2023-01-13 04:37:23');

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
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` text NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `category_id`, `description`, `content`, `image`, `user_id`, `created_at`, `updated_at`) VALUES
(10, 'RAKERDA XVI - BPD HIPMI JAWA BARAT', 'rakerda-xvi-bpd-hipmi-jawa-barat', 1, 'PLT. Walikota Bandung hadiri pembukaan RAKERDA XVI BPD HIPMI Jawa Barat', '<p class=\"p\" style=\"margin-top: 0pt; margin-bottom: 15.75pt; margin-left: 0pt; text-indent: 0pt; line-height: 16.8pt; background: #ffffff;\"><span style=\"font-family: Montserrat; color: #333333; letter-spacing: 0pt; font-size: 9.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Pada masa transisi dari pandemi ke endemi Covid-19 ini Pemkot Bandung berharap dapat berkolaborasi dengan Himpunan Pengusaha Muda Indonesia (Hipmi) Kota Bandung dan Jawa Barat dalam upaya pemulihan ekonomi pascapandemi Covid-19.</span></p>\r\n<p class=\"p\" style=\"margin-top: 0pt; margin-bottom: 15.75pt; margin-left: 0pt; text-indent: 0pt; line-height: 16.8pt; background: #ffffff;\"><span style=\"font-family: Montserrat; color: #333333; letter-spacing: 0pt; font-size: 9.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Plt. Wali Kota Bandung Yana Mulyana berharap Pemkot Bandung dapat berkolaborasi dengan Himpunan Pengusaha Muda Indonesia (Hipmi) Kota Bandung dan Jawa Barat dalam upaya pemulihan ekonomi pascapandemi Covid-19.&nbsp;</span></p>\r\n<p class=\"p\" style=\"margin-top: 0pt; margin-bottom: 15.75pt; margin-left: 0pt; text-indent: 0pt; line-height: 16.8pt; background: #ffffff;\"><span style=\"font-family: Montserrat; color: #333333; letter-spacing: 0pt; font-size: 9.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Hal itu disampaikannya usai menghadiri Pembukaan Rakerda XVI BPD Hipmi Jawa Barat di The Papandayan Hotel, Sabtu (12/3/2022).</span></p>\r\n<p class=\"p\" style=\"margin-top: 0pt; margin-bottom: 15.75pt; margin-left: 0pt; text-indent: 0pt; line-height: 16.8pt; background: #ffffff;\"><span style=\"font-family: Montserrat; color: #333333; letter-spacing: 0pt; font-size: 9.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Ia berharap transisi dari pandemi ke endemi Covid-19 endemi menjadi awal kolaborasi Pemkot Bandung bersama HIPMI Kota Bandung.</span></p>\r\n<p class=\"p\" style=\"margin-top: 0pt; margin-bottom: 15.75pt; margin-left: 0pt; text-indent: 0pt; line-height: 16.8pt; background: #ffffff;\"><span style=\"font-family: Montserrat; color: #333333; letter-spacing: 0pt; font-size: 9.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">&ldquo;Semoga teman-teman di Hipmi, khususnya kota Bandung, bisa membantu Pemkot mempercepat pemulihan ekonomi pasca pandemi,&rdquo; ucapnya.</span></p>\r\n<p class=\"p\" style=\"margin-top: 0pt; margin-bottom: 15.75pt; margin-left: 0pt; text-indent: 0pt; line-height: 16.8pt; background: #ffffff;\"><span style=\"font-family: Montserrat; color: #333333; letter-spacing: 0pt; font-size: 9.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Berkaca pada pertumbuhan ekonomi di Jawa Barat yang diprediksi mencapai 5 persen, Yana pun optimis pertumbuhan ekonomi di Kota Bandung akan berada di kisaran angka tersebut.</span></p>\r\n<p class=\"p\" style=\"margin-top: 0pt; margin-bottom: 15.75pt; margin-left: 0pt; text-indent: 0pt; line-height: 16.8pt; background: #ffffff;\"><span style=\"font-family: Montserrat; color: #333333; letter-spacing: 0pt; font-size: 9.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">&ldquo;Biasanya, pertumbuhan ekonomi di Kota Bandung lebih tinggi dari Jawa Barat dan Nasional. Mudah-mudahan kalau prediksi pertumbuhan ekonomi di Jawa Barat di angka 5 persen, di Kota Bandung bisa mencapai 5,5 persen,&rdquo; ucapnya.</span></p>\r\n<p class=\"p\" style=\"margin-top: 0pt; margin-bottom: 15.75pt; margin-left: 0pt; text-indent: 0pt; line-height: 16.8pt; background: #ffffff;\"><span style=\"font-family: Montserrat; color: #333333; letter-spacing: 0pt; font-size: 9.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Sementara itu, Ketua Umum Hipmi Jawa Barat, Surya Batara Kartika, mengapresiasi inovasi program dari kepala daerah mulai dari Gubernur hingga Wali Kota dan Bupati di kota dan kabupaten se-Jawa Barat selama masa pandemi.</span></p>\r\n<p class=\"p\" style=\"margin-top: 0pt; margin-bottom: 15.75pt; margin-left: 0pt; text-indent: 0pt; line-height: 16.8pt; background: #ffffff;\"><span style=\"font-family: Montserrat; color: #333333; letter-spacing: 0pt; font-size: 9.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Ia juga mengajak semua pihak untuk melancarkan investasi sehingga banyak pengusaha baru yang tumbuh.</span></p>\r\n<p class=\"MsoNormal\" style=\"text-indent: 0.0000pt; padding: 0pt 0pt 0pt 0pt; mso-pagination: widow-orphan; text-align: center; vertical-align: top; mso-line-height-alt: 12pt; background: #ffffff; margin: 0.0000pt;\" align=\"center\">&nbsp;</p>\r\n<p class=\"p\" style=\"margin-top: 0pt; margin-bottom: 15.75pt; margin-left: 0pt; text-indent: 0pt; line-height: 16.8pt; background: #ffffff;\"><span style=\"font-family: Montserrat; color: #333333; letter-spacing: 0pt; font-size: 9.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">&ldquo;Investasi bukan nilai tambah. Tapi investasi harus menjadi nilai dan menciptakan banyak peluang serta pengusaha baru,&rdquo; pesannya.</span></p>\r\n<p class=\"p\" style=\"margin-top: 0pt; margin-bottom: 15.75pt; margin-left: 0pt; text-indent: 0pt; line-height: 16.8pt; background: #ffffff;\"><span style=\"font-family: Montserrat; color: #333333; letter-spacing: 0pt; font-size: 9.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Acara tersebut juga dihadiri oleh perwakilan anggota Hipmi Se-Jawa Barat dan Gubernur Jawa Barat, Ridwan Kamil.&nbsp;</span></p>\r\n<p class=\"p\" style=\"margin-top: 0pt; margin-bottom: 15.75pt; margin-left: 0pt; text-indent: 0pt; line-height: 16.8pt; background: #ffffff;\"><span style=\"font-family: Montserrat; color: #333333; letter-spacing: 0pt; font-size: 9.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Dalam sambutannya, Ridwan Kamil menyebut Jawa Barat punya banyak keunggulan dan daya serap pasar tinggi.</span></p>\r\n<p class=\"p\" style=\"margin-top: 0pt; margin-bottom: 15.75pt; margin-left: 0pt; text-indent: 0pt; line-height: 16.8pt; background: #ffffff;\"><span style=\"font-family: Montserrat; color: #333333; letter-spacing: 0pt; font-size: 9.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Berkaca pada hal tersebut, ia berharap para pengusaha dapat menawarkan produk yang tepat untuk warga Jawa Barat yang berjumlah sekitar 50.000 penduduk.</span></p>\r\n<p class=\"p\" style=\"margin-top: 0pt; margin-bottom: 15.75pt; margin-left: 0pt; text-indent: 0pt; line-height: 16.8pt; background: #ffffff;\"><span style=\"font-family: Montserrat; color: #333333; letter-spacing: 0pt; font-size: 9.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">&ldquo;Jabar ini marketnya banyak. Penduduknya saja 50.000. Maka dari itu, kita harus siapkan produk yang sesuai dengan kebutuhan mereka,&rdquo; pesannya.</span></p>\r\n<p class=\"p\" style=\"margin-top: 0pt; margin-bottom: 15.75pt; margin-left: 0pt; text-indent: 0pt; line-height: 16.8pt; background: #ffffff;\"><span style=\"font-family: Montserrat; color: #333333; letter-spacing: 0pt; font-size: 9.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Emil, sapaan akrab Ridwan Kamil, juga menginformasikan peningkatan ekonomi yang terus dialami oleh Jawa Barat. Ia optimis, pertumbuhan ekonomi Jawa Barat akan menembus angka 5 persen.</span></p>', 'bZOvyZksEbIUsPum6Pz1OlXaKbm0zHnV9dnjzzyu.jpg', 1, '2022-12-27 07:26:39', '2022-12-27 07:26:39'),
(11, 'Resmi Terpilih Ketua HIPMI Kota Cimahi, Firaldi Akbar Bakal Siapkan Strategi Ini', 'resmi-terpilih-ketua-hipmi-kota-cimahi-firaldi-akbar-bakal-siapkan-strategi-ini', 1, 'Posisi Ketua Himpunan Pengusaha Muda Indonesia (HIPMI) Kota Cimahi akhirnya terisi setelah M. Firaldi Akbar terpilih secara aklamasi dalam Musyawarah Cabang Luar Biasa (Muscablub) HIPMI Kota Cimahi di Valore Hotel Cimahi', '<div class=\"post-text\" style=\"box-sizing: border-box; clear: both; width: 720.4px; position: relative; max-width: 100%; font-family: Ubuntu, Helvetica, sans-serif; font-size: 16px; line-height: 26px; overflow-wrap: break-word; color: #222222; background-color: #ffffff;\">\r\n<div id=\":1ex\" class=\"ii gt\" style=\"box-sizing: border-box;\">\r\n<div id=\":1ey\" class=\"a3s aiL \" style=\"box-sizing: border-box;\">\r\n<div dir=\"auto\" style=\"box-sizing: border-box;\">\r\n<div dir=\"auto\" style=\"box-sizing: border-box;\">\r\n<div dir=\"auto\" style=\"box-sizing: border-box;\">Posisi Ketua Himpunan Pengusaha Muda Indonesia (HIPMI) Kota&nbsp;<a style=\"box-sizing: border-box; background-color: transparent; text-decoration-line: none; transition: all 0.2s ease-in-out 0s; color: #214381 !important; outline: none !important;\" href=\"https://inilahkoran.id/tag/cimahi\">Cimahi</a>&nbsp;akhirnya terisi setelah M.&nbsp;<a style=\"box-sizing: border-box; background-color: transparent; text-decoration-line: none; transition: all 0.2s ease-in-out 0s; color: #214381 !important; outline: none !important;\" href=\"https://inilahkoran.id/tag/firaldi-akbar\">Firaldi Akbar</a>&nbsp;terpilih secara aklamasi dalam Musyawarah Cabang Luar Biasa (Muscablub) HIPMI Kota&nbsp;<a style=\"box-sizing: border-box; background-color: transparent; text-decoration-line: none; transition: all 0.2s ease-in-out 0s; color: #214381 !important; outline: none !important;\" href=\"https://inilahkoran.id/tag/cimahi\">Cimahi</a>&nbsp;di Valore Hotel&nbsp;<a style=\"box-sizing: border-box; background-color: transparent; text-decoration-line: none; transition: all 0.2s ease-in-out 0s; color: #214381 !important; outline: none !important;\" href=\"https://inilahkoran.id/tag/cimahi\">Cimahi</a>, Rabu 28 September 2022.</div>\r\n<div dir=\"auto\" style=\"box-sizing: border-box;\">&nbsp;</div>\r\n<div dir=\"auto\" style=\"box-sizing: border-box;\">Dengan mengusung tagline Bangkit, Maju dan Berkibar, M.&nbsp;<a style=\"box-sizing: border-box; background-color: transparent; text-decoration-line: none; transition: all 0.2s ease-in-out 0s; color: #214381 !important; outline: none !important;\" href=\"https://inilahkoran.id/tag/firaldi-akbar\">Firaldi Akbar</a>&nbsp;mulai menyiapkan sejumlah strategi untuk memajukan BPC HIPMI Kota&nbsp;<a style=\"box-sizing: border-box; background-color: transparent; text-decoration-line: none; transition: all 0.2s ease-in-out 0s; color: #214381 !important; outline: none !important;\" href=\"https://inilahkoran.id/tag/cimahi\">Cimahi</a>.</div>\r\n<div dir=\"auto\" style=\"box-sizing: border-box;\">&nbsp;</div>\r\n<div dir=\"auto\" style=\"box-sizing: border-box;\">\"Pertama, sekarang itu Hipmi&nbsp;<a style=\"box-sizing: border-box; background-color: transparent; text-decoration-line: none; transition: all 0.2s ease-in-out 0s; color: #214381 !important; outline: none !important;\" href=\"https://inilahkoran.id/tag/cimahi\">Cimahi</a>&nbsp;menggunakan tagline Bangkit, Maju dan Berkibar. Jadi, kita pertama harus mensolidkan dulu teman-teman, program kerja, melakukan konsolidasi internal dulu, belanja masalah,\" kata Firaldi saat ditemui, Rabu 28 September 2022.</div>\r\n<div dir=\"auto\" style=\"box-sizing: border-box;\">&nbsp;</div>\r\n<div dir=\"auto\" style=\"box-sizing: border-box;\">Setelah itu, sambung dia, pihaknya bakal melakukan sejumlah tahapan yang sesuai dengan tagline yang diusungnya.</div>\r\n<div dir=\"auto\" style=\"box-sizing: border-box;\">&nbsp;</div>\r\n<div dir=\"auto\" style=\"box-sizing: border-box;\">\"Sebetulnya untuk di&nbsp;<a style=\"box-sizing: border-box; background-color: transparent; text-decoration-line: none; transition: all 0.2s ease-in-out 0s; color: #214381 !important; outline: none !important;\" href=\"https://inilahkoran.id/tag/cimahi\">Cimahi</a>&nbsp;saya gak ada target tertentu. Prinsipnya, kita buat bisnis di&nbsp;<a style=\"box-sizing: border-box; background-color: transparent; text-decoration-line: none; transition: all 0.2s ease-in-out 0s; color: #214381 !important; outline: none !important;\" href=\"https://inilahkoran.id/tag/cimahi\">Cimahi</a>&nbsp;dan kita gelorakan ekonomi&nbsp;<a style=\"box-sizing: border-box; background-color: transparent; text-decoration-line: none; transition: all 0.2s ease-in-out 0s; color: #214381 !important; outline: none !important;\" href=\"https://inilahkoran.id/tag/cimahi\">Cimahi</a>&nbsp;supaya bisa bangkit,\" jelasnya.</div>\r\n<div dir=\"auto\" style=\"box-sizing: border-box;\">&nbsp;</div>\r\n<div dir=\"auto\" style=\"box-sizing: border-box;\">Menurutnya, di Kota&nbsp;<a style=\"box-sizing: border-box; background-color: transparent; text-decoration-line: none; transition: all 0.2s ease-in-out 0s; color: #214381 !important; outline: none !important;\" href=\"https://inilahkoran.id/tag/cimahi\">Cimahi</a>&nbsp;itu sebenarnya ada banyak kafe, bahkan anak-anak muda di&nbsp;<a style=\"box-sizing: border-box; background-color: transparent; text-decoration-line: none; transition: all 0.2s ease-in-out 0s; color: #214381 !important; outline: none !important;\" href=\"https://inilahkoran.id/tag/cimahi\">Cimahi</a>&nbsp;ini banyak yang berbisnis. Hanya saja mereka tidak terkonsolidasi.</div>\r\n<div dir=\"auto\" style=\"box-sizing: border-box;\">&nbsp;</div>\r\n<div dir=\"auto\" style=\"box-sizing: border-box;\">\"Oleh karenanya, kita mencoba agar semua itu bisa terkonsolidasi,\" tuturnya.</div>\r\n<div dir=\"auto\" style=\"box-sizing: border-box;\">&nbsp;</div>\r\n<div dir=\"auto\" style=\"box-sizing: border-box;\">Disinggung terkait persiapan menghadapi ancaman krisis ketahanan pangan 2023 mendatang, ia mengaku, sebagai langkah pertama pihaknya bakal mengadakan operasi pasar murah.</div>\r\n<div dir=\"auto\" style=\"box-sizing: border-box;\">&nbsp;</div>\r\n<div dir=\"auto\" style=\"box-sizing: border-box;\">\"Kebetulan di kita itu akan diadakan pula acara pasar murah untuk beras, minyak goreng dan sejumlah kebutuhan pokok lainnya.Tapi kegiatan itu akan kita buat dalam beberapa hari ke depan,\" terangnya.</div>\r\n<div dir=\"auto\" style=\"box-sizing: border-box;\">&nbsp;</div>\r\n<div dir=\"auto\" style=\"box-sizing: border-box;\">Ia menilai, kegiatan tersebut sesuai dengan apa yang disampaikan Asda II Bidang Ekonomi supaya HIPMI bisa ikut andil dalam mendukung ketahanan pangan di Kota&nbsp;<a style=\"box-sizing: border-box; background-color: transparent; text-decoration-line: none; transition: all 0.2s ease-in-out 0s; color: #214381 !important; outline: none !important;\" href=\"https://inilahkoran.id/tag/cimahi\">Cimahi</a>.</div>\r\n<div dir=\"auto\" style=\"box-sizing: border-box;\">&nbsp;</div>\r\n<div dir=\"auto\" style=\"box-sizing: border-box;\">\"Kita juga bakal bekerjasama dengan Pemkot&nbsp;<a style=\"box-sizing: border-box; background-color: transparent; text-decoration-line: none; transition: all 0.2s ease-in-out 0s; color: #214381 !important; outline: none !important;\" href=\"https://inilahkoran.id/tag/cimahi\">Cimahi</a>. Selain itu kita juga ada teman-teman yang memiliki pabrik beras dan ada yang punya pom minyak goreng juga,\" ujarnya.</div>\r\n<div dir=\"auto\" style=\"box-sizing: border-box;\">&nbsp;</div>\r\n<div dir=\"auto\" style=\"box-sizing: border-box;\">\"Jadi, nanti kita akan mengawali ketahanan pangan ini dengan operasi pasar murah dulu,\" tambahnya.</div>\r\n<div dir=\"auto\" style=\"box-sizing: border-box;\">&nbsp;</div>\r\n<div dir=\"auto\" style=\"box-sizing: border-box;\">Ia menilai, kegiatan operasi pasar murah itu bukan sesuatu yang sulit karena hanya tinggal mengurangi profitnya saja.</div>\r\n<div dir=\"auto\" style=\"box-sizing: border-box;\">&nbsp;</div>\r\n<div dir=\"auto\" style=\"box-sizing: border-box;\">\"Untuk operasi pasar murah itu, kita menargetkan 1.000 ton beras. Karena kan pasar murah itu banyak peminatnya. Tapi mudah-mudahan sesuai yang kita targetkan,\" bebernya.</div>\r\n<div dir=\"auto\" style=\"box-sizing: border-box;\">&nbsp;</div>\r\n<div dir=\"auto\" style=\"box-sizing: border-box;\">Sedangkan untuk minyak goreng, kata dia, pihaknya akan buka di 15 titik di Kota&nbsp;<a style=\"box-sizing: border-box; background-color: transparent; text-decoration-line: none; transition: all 0.2s ease-in-out 0s; color: #214381 !important; outline: none !important;\" href=\"https://inilahkoran.id/tag/cimahi\">Cimahi</a>. Satu titik itu sekitar 1 ton minyak goreng untuk mengawali dengan target keseluruhan sebanyak 4 ton minyak goreng per bulan.</div>\r\n<div dir=\"auto\" style=\"box-sizing: border-box;\">&nbsp;</div>\r\n<div dir=\"auto\" style=\"box-sizing: border-box;\">\"Jadi 4 ton x 15 titik seluruhnya 60 ton minyak goreng. Kalau beras itu 1.000 ton karena kita punya 100 lapak di sini,\" ujarnya.</div>\r\n<div dir=\"auto\" style=\"box-sizing: border-box;\">&nbsp;</div>\r\n<div dir=\"auto\" style=\"box-sizing: border-box;\">Oleh karenanya, tambah dia, beras dan minyak goreng dulu yang akan pihaknya fokuskan karena yang jadi fokusnya ketahanan pangan.</div>\r\n<div dir=\"auto\" style=\"box-sizing: border-box;\">&nbsp;</div>\r\n<div dir=\"auto\" style=\"box-sizing: border-box;\">\"Sebenarnya pasar murah ini sudah kita jalani sebelumnya. Tapi, untuk HIPMI Kota&nbsp;<a style=\"box-sizing: border-box; background-color: transparent; text-decoration-line: none; transition: all 0.2s ease-in-out 0s; color: #214381 !important; outline: none !important;\" href=\"https://inilahkoran.id/tag/cimahi\">Cimahi</a>&nbsp;ini kita mengusung konsep dengan tema HIPMI&nbsp;<a style=\"box-sizing: border-box; background-color: transparent; text-decoration-line: none; transition: all 0.2s ease-in-out 0s; color: #214381 !important; outline: none !important;\" href=\"https://inilahkoran.id/tag/cimahi\">Cimahi</a>,\" tandasnya.*** (agus satia negara).</div>\r\n</div>\r\n</div>\r\n<div class=\"yj6qo\" style=\"box-sizing: border-box;\">&nbsp;</div>\r\n<div class=\"adL\" style=\"box-sizing: border-box;\">&nbsp;</div>\r\n</div>\r\n</div>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; overflow-wrap: break-word;\">&nbsp;</p>\r\n</div>', '5lRfxxoPlXsNLhdg9yC2qWv3tno9Jz7yxZ8uxTyJ.jpg', 1, '2022-12-27 07:33:10', '2022-12-27 07:33:10'),
(12, 'Hindari Krisis Perekonomian, HIPMI Cimahi Rencanakan Operasi Pasar Murah', 'hindari-krisis-perekonomian-hipmi-cimahi-rencanakan-operasi-pasar-murah', 1, 'Hindari Krisis Perekonomian, HIPMI Cimahi Rencanakan Operasi Pasar Murah', '<p class=\"p\" style=\"margin-top: 12.0000pt; margin-bottom: 12.0000pt; margin-left: 0.0000pt; text-indent: 0.0000pt; mso-pagination: widow-orphan; background: #ffffff;\"><span style=\"font-family: \'Open Sans\'; letter-spacing: 0pt; font-size: 9.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Krisis pangan menjadi ancaman saat ini, bahkan hingga tahun depan. Himpunan Pengusaha Muda Indonesia (HIPMI) pun bersiap melakukan serangkaian mitigasi agar krisis tersebut tidak menular ke sisi perekonomian.</span></p>\r\n<p class=\"p\" style=\"margin-top: 12.0000pt; margin-bottom: 12.0000pt; margin-left: 0.0000pt; text-indent: 0.0000pt; mso-pagination: widow-orphan; background: #ffffff;\"><span style=\"font-family: \'Open Sans\'; letter-spacing: 0pt; font-size: 9.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Diantaranya,&nbsp;</span><a href=\"https://www.pasundanekspres.co/headline/hipmi-cimahi/\"><u><span class=\"15\" style=\"font-family: \'Open Sans\'; color: #0000ff; letter-spacing: 0pt; font-size: 9.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">HIPMI Kota Cimahi</span></u></a><span style=\"font-family: \'Open Sans\'; letter-spacing: 0pt; font-size: 9.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">&nbsp;berencana akan membuka operasi pasar murah untuk pangan seperti beras dan minyak goreng.</span></p>\r\n<p class=\"p\" style=\"margin-top: 12.0000pt; margin-bottom: 12.0000pt; margin-left: 0.0000pt; text-indent: 0.0000pt; mso-pagination: widow-orphan; background: #ffffff;\"><span style=\"font-family: \'Open Sans\'; letter-spacing: 0pt; font-size: 9.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">&ldquo;Kita ini ketahanan pangan paling problem. Kebetulan nanti akan diadakan pasar murah untuk beras dan minyak goreng,&rdquo; kata</span></p>\r\n<p class=\"p\" style=\"margin-top: 12.0000pt; margin-bottom: 12.0000pt; margin-left: 0.0000pt; text-indent: 0.0000pt; mso-pagination: widow-orphan; background: #ffffff;\"><span style=\"font-family: \'Open Sans\'; letter-spacing: 0pt; font-size: 9.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Ketua BPC HIPMI Kota Cimahi terpilih, M Firaldi Akbar saat ditemui di Baros, Kota Cimahi, Rabu (28/9).</span></p>\r\n<p class=\"p\" style=\"margin-top: 12.0000pt; margin-bottom: 12.0000pt; margin-left: 0.0000pt; text-indent: 0.0000pt; mso-pagination: widow-orphan; background: #ffffff;\"><span style=\"font-family: \'Open Sans\'; letter-spacing: 0pt; font-size: 9.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Ia mengungkapkan, dalam operasi pasar murah nanti pihaknya yang bekerja sama dengan Pemkot Cimahi beserta pengusaha akan menyiapkan 1.000 ton beras dan puluhan ton minyak goreng.</span></p>\r\n<p class=\"p\" style=\"margin-top: 12.0000pt; margin-bottom: 12.0000pt; margin-left: 0.0000pt; text-indent: 0.0000pt; mso-pagination: widow-orphan; background: #ffffff;\"><span style=\"font-family: \'Open Sans\'; letter-spacing: 0pt; font-size: 9.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">&ldquo;Nanti kita adakan di setiap kecamatan dan kelurahan. Tahun ini kita targetkan di 100 titik,&rdquo; ucap Firaldi.</span></p>\r\n<p class=\"p\" style=\"margin-top: 12.0000pt; margin-bottom: 12.0000pt; margin-left: 0.0000pt; text-indent: 0.0000pt; mso-pagination: widow-orphan; background: #ffffff;\"><span style=\"font-family: \'Open Sans\'; letter-spacing: 0pt; font-size: 9.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Sementara itu, Ketua Bidang 2 BPD HIPMI Jawa Barat Fardi Nurdiansyah Anafi mengatakan, potensi krisis sebagai dampak dari resesi global tahun depan menjadi peringatan bagi para pengusaha untuk menyiapkan mitigasi agar tidak terdampak.</span></p>\r\n<p class=\"p\" style=\"margin-top: 12.0000pt; margin-bottom: 12.0000pt; margin-left: 0.0000pt; text-indent: 0.0000pt; mso-pagination: widow-orphan; background: #ffffff;\"><span style=\"font-family: \'Open Sans\'; letter-spacing: 0pt; font-size: 9.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">&ldquo;Apalagi di tahun 2023 ada potensi krisis impact dari krisis keuangan negara global, jadi ber-impact juga ke Indonesia sehingga kita berharap Cimahi menciptakan cara dalam membangun perekonomiannya sendiri,&rdquo; kata Fardi.</span></p>\r\n<p class=\"p\" style=\"margin-top: 12.0000pt; margin-bottom: 12.0000pt; margin-left: 0.0000pt; text-indent: 0.0000pt; mso-pagination: widow-orphan; background: #ffffff;\"><span style=\"font-family: \'Open Sans\'; letter-spacing: 0pt; font-size: 9.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Untuk menghindari ancaman krisis tersebut, kata dia, semua pihak harus bersinergi. Dimana pemerintah harus memberikan kemudahan izin bagi para pengusaha hingga ikut memasarkan produk lokal baik di dalam negeri maupun luar negeri.</span></p>\r\n<p class=\"p\" style=\"margin-top: 12.0000pt; margin-bottom: 12.0000pt; margin-left: 0.0000pt; text-indent: 0.0000pt; mso-pagination: widow-orphan; background: #ffffff;\"><span style=\"font-family: \'Open Sans\'; letter-spacing: 0pt; font-size: 9.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">&ldquo;Semuanya harus bersinergi. Pemerintah harus membantu temen-temen untuk mempermudah perizinan, membantu juga memasarkan produk kita baik di dalam negeri maupun di luar negeri. Kemudian masyaraktanya sendiri juga harus memaksa untuk membeli produk dalam negeri,&rdquo; jelas Fardi.</span></p>\r\n<p class=\"p\" style=\"margin-top: 12.0000pt; margin-bottom: 12.0000pt; margin-left: 0.0000pt; text-indent: 0.0000pt; mso-pagination: widow-orphan; background: #ffffff;\"><span style=\"font-family: \'Open Sans\'; letter-spacing: 0pt; font-size: 9.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Dirinya melanjutkan, para pengusaha sendiri saat ini harus memaksakan diri untuk tetap optimis meskipun perekonomiannya belum pulih sepenuhnya usai dihantam pandemi Covid-19. Ditambah konflik di negara lain yang juga berdampak terhadap Indonesia.</span></p>\r\n<p class=\"p\" style=\"margin-top: 12.0000pt; margin-bottom: 12.0000pt; margin-left: 0.0000pt; text-indent: 0.0000pt; mso-pagination: widow-orphan; background: #ffffff;\"><span style=\"font-family: \'Open Sans\'; letter-spacing: 0pt; font-size: 9.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">&ldquo;Kita berharap apapun kondisi yang akan terjadi ke depan pengusaha tetap optimis. Salah satunya bagaimana caranya produk-produk yang diciptakan oleh pengusaha-pengusaha lokal itu semaksimal mungkin dikonsumsi oleh masyarakat,&rdquo; pungkasnya.</span><strong><em><span class=\"16\" style=\"font-family: \'Open Sans\'; letter-spacing: 0pt; font-size: 9.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">(eko/sep)</span></em></strong></p>', 't5qNSMg2ef7xWeAHDtiK5ZuqD87McxiHmcUY2KDR.jpg', 1, '2022-12-27 07:37:09', '2022-12-27 07:37:09'),
(13, 'Kunjungan dan Penjajakan Kerjasama DPMPTSP dan BPC HIPMI Kota Cimahi', 'kunjungan-dan-penjajakan-kerjasama-dpmptsp-dan-bpc-hipmi-kota-cimahi', 1, 'Kunjungan dan Penjajakan Kerjasama DPMPTSP dan BPC HIPMI Kota Cimahi', '<p class=\"p\" style=\"margin-left: 0.0000pt; text-indent: 0.0000pt; padding: 0pt 0pt 0pt 0pt; mso-pagination: widow-orphan; text-align: justify; text-justify: inter-ideograph; background: #ffffff;\" align=\"justify\"><span style=\"font-family: Poppins; color: #374151; letter-spacing: 0pt; font-size: 9.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Bertempat di Gedung Mal Pelayanan Publik (MPP) Kota Cimahi Jl. Aruman,&nbsp;Kelurahan Pasirkaliki, Cimahi Utara, DPMPTSP Kota Cimahi menerima kunjungan dari Badan Pengurus Cabang Himpunan Pengusaha Muda Indonesia (BPC HIPMI) Kota Cimahi pada hari Kamis tanggal 9 Juni 2022. Kunjungan diterima oleh Kepala Dinas dan Sekretaris serta Jafung Madya Bidang Penanaman Modal&nbsp;pada DPMPTSP Kota Cimahi.</span></p>\r\n<p class=\"p\" style=\"margin-left: 0.0000pt; text-indent: 0.0000pt; padding: 0pt 0pt 0pt 0pt; mso-pagination: widow-orphan; text-align: justify; text-justify: inter-ideograph; background: #ffffff;\" align=\"justify\"><span style=\"font-family: Poppins; color: #374151; letter-spacing: 0pt; font-size: 9.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Kunjungan dimaksudkan untuk mejalin komunikasi dan&nbsp;</span><span class=\"15\" style=\"font-family: Poppins; color: #374151; letter-spacing: 0pt; font-size: 9.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">silaturahmi</span><span style=\"font-family: Poppins; color: #374151; letter-spacing: 0pt; font-size: 9.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">&nbsp;antara &nbsp;DPMPTSP dan BPC HIPMI Kota Cimahi. Hingga saat ini telah tercatatat 50 anggota HIPMI di Kota Cimahi dan keanggotan merupakan pengusaha muda dengan umur di bawah 41 tahun. Dalam diskusi disampaikan aspirasi dan juga pandangan BPC HIPMI mengenai proses pelayanan perizinan di Kota Cimahi. BPC HIPMI Cimahi berharap ke depannya dapat dijalin lebih banyak kerja&nbsp;sama kongkrit dalam bidang sosialisasi pengurusan perizinan bagi anggota, pembinaan investasi,&nbsp;dan peluang investasi di Kota Cimahi.</span></p>\r\n<p class=\"p\" style=\"margin-left: 0.0000pt; text-indent: 0.0000pt; padding: 0pt 0pt 0pt 0pt; mso-pagination: widow-orphan; text-align: justify; text-justify: inter-ideograph; background: #ffffff;\" align=\"justify\"><span style=\"font-family: Poppins; color: #374151; letter-spacing: 0pt; font-size: 9.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">DPMPTSP Kota Cimahi juga menyampaikan udangan kepada BPC HIPMI untuk dapat menghadiri acara doa bersama telah selesainya pembangunan gedung MPP Kota Cimahi. Pada bagian akhir diskusi, dilakukan&nbsp;</span><span class=\"15\" style=\"font-family: Poppins; color: #374151; letter-spacing: 0pt; font-size: 9.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">walking tour</span><span style=\"font-family: Poppins; color: #374151; letter-spacing: 0pt; font-size: 9.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">&nbsp;gedung MPP Kota Cimahi didampingi oleh Jafung Madya Bidang Penanaman Modal&nbsp;dan para pelaksana Bidang Penanaman Modal&nbsp;DPMPTSP Kota Cimahi.</span></p>', 'Gx9y3Clj1QakXgjh7X11YtWusGN9mvtSSeLkMQb3.png', 1, '2022-12-27 07:42:35', '2022-12-27 07:42:35');

-- --------------------------------------------------------

--
-- Table structure for table `prestasis`
--

CREATE TABLE `prestasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `categoriprestasi_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prestasis`
--

INSERT INTO `prestasis` (`id`, `title`, `slug`, `categoriprestasi_id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Juara 1 Renang Tingkat Nasional Indonesia', 'abdullah-bin-mahmud-bin-muhammad', '1', 'Abdullah bin Mahmud bin Muhammad', 'cjcuuanKvrXrrDOd45GVb0loc6wx9jyqgOSeU4Rb.jpg', '2022-11-30 04:01:53', '2022-11-30 04:30:49'),
(2, 'Hafidz 10 Juz', 'nurani-s1-ahmad-p6-nurdin-s1-syamsul-s2', '2', 'Nurani (S1), Ahmad (P6), Nurdin (S1), Syamsul (S2)', 'mubfqbrcxJ55lPLHG0owDpJUPYZPz96qs9SCWWnt.jpg', '2022-11-30 04:32:22', '2022-11-30 04:34:13');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `button` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `slug`, `image`, `description`, `button`, `link`, `created_at`, `updated_at`) VALUES
(4, 'Bangkit Bersama Kami', 'bangkit-bersama-kami', 'V3ndp606efWQjzvM8sTqngcu2bvHtkigeHJNCKiV.jpg', 'Bergabunglah bersama organisasi pengusaha muda terbesar di Indonesia', 'Selengkapnya', '#', '2022-12-27 10:12:32', '2022-12-27 10:12:32'),
(5, 'Bangkit Bersama Kami', 'bangkit-bersama-kami', 'qw8L7Dvat0niVAioT5o98YMI4RZvhaA1bz44pFlt.jpg', 'Bergabunglah bersama organisasi pengusaha muda terbesar di Indonesia', 'Selengkapnya', '#', '2022-12-29 19:50:07', '2022-12-29 19:50:07'),
(6, 'Bangkit Bersama Kami', 'bangkit-bersama-kami', 'gvC7W6VJzRdcGBXPPNtO7lRlDrZkpKT7W695at69.jpg', 'Bergabunglah bersama organisasi pengusaha muda terbesar di Indonesia', 'Selengkapnya', '#', '2022-12-29 19:51:13', '2022-12-29 19:51:13');

-- --------------------------------------------------------

--
-- Table structure for table `testimonies`
--

CREATE TABLE `testimonies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `yt_link` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonies`
--

INSERT INTO `testimonies` (`id`, `name`, `title`, `slug`, `content`, `image`, `yt_link`, `user_id`, `created_at`, `updated_at`) VALUES
(5, 'Utama jaya', 'direktur', 'utama-jaya', '<p>\"Saya bergabung dengan HIPMI sejak tahun lalu dan sejauh ini, saya merasa sangat bermanfaat dengan keanggotaan saya di sini. Melalui HIPMI, saya bisa berpartisipasi dalam berbagai kegiatan dan workshop yang bermanfaat untuk pengembangan diri dan bisnis saya.</p>', '8AGAhCeZbfCJSALdtvVgWuwWyb4Srw1ZuKpU7AxR.jpg', '#', 1, '2023-01-04 22:44:21', '2023-01-04 22:44:21'),
(6, 'Muhammad', 'Business Owner', 'muhammad', '<p>Saya bisa bergabung dengan komunitas anggota HIPMI yang luas dan bertukar pikiran dengan para anggota lainnya. Dukungan dan motivasi yang saya dapatkan dari komunitas HIPMI sangat membantu saya dalam mencapai tujuan bisnis saya.</p>', 'DJL1KHKOtm278Osytbh79RtGSQnxB75q3fk6rdVG.jpg', '#', 1, '2023-01-04 22:46:08', '2023-01-04 22:46:08');

-- --------------------------------------------------------

--
-- Table structure for table `unggulans`
--

CREATE TABLE `unggulans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `unggulans`
--

INSERT INTO `unggulans` (`id`, `title`, `slug`, `image`, `description`, `link`, `created_at`, `updated_at`) VALUES
(9, 'Koneksi - Solusi', 'koneksi-solusi', 'vnPCslULiE1PBpSgxuiun9ePwrROp3TKGG6tJEKp.jpg', '<p>HIPMI akan mempertemukan Anda dengan ribuan anggota lainnya, lintas generasi dan daerah. Perluas jangkauan koneksi Anda untuk menyelesaikan tantangan kewirausahaan Anda.</p>', 'https://www.hipmijaya.org/', '2022-12-27 06:31:47', '2023-01-05 20:23:37'),
(10, 'Kolaborasi - Kompetisi', 'kolaborasi-kompetisi', 'EeDZ1Fgth9BjKankZGkLCdFb0pI5lQ3ijskNecSf.jpg', '<p>Petakan pesaing dan mitra usaha Anda melalui HIPMI. Bangun kolaborasi untuk memajukan usaha Anda dalam berkompetisi.</p>', 'https://www.hipmijaya.org/', '2022-12-27 06:33:32', '2023-01-05 20:23:22'),
(11, 'Aktual - Kapital', 'aktual-kapital', 'vFz7CuOAdieztHC95hLMkGB75Z81qutGr68eV3Sf.jpg', '<p>Dapatkan informasi terbaru dan kesempatan untuk terlibat dalam program-program peningkatan kapasitas khusus anggota, serta akses modal melalui mitra-mitra HIPMI Jaya.</p>', 'https://www.hipmijaya.org/', '2022-12-27 06:34:37', '2023-01-05 20:23:07');

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
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@allathif.sch.id', NULL, '$2y$10$YVpF3almNT57XNXi2Rry7Ot4hoQLe6U46Q8mivGOZivmT5yls2p6y', 'eyJpdiI6IlZjam5QZ0NveExXaHZ2d3N4ZDYzUUE9PSIsInZhbHVlIjoicU5qWkhhS0xIbFdPOC9hZGVXbVNFTEhiUU9QY1NYdjdvaHllbmFOb1hEQT0iLCJtYWMiOiIyMmQ2OGZmNTBhZWIyZThhMmMxNGMzZGFiNzkzMzUwZWNjMzUzNjMyODllODg4ZDVlMDAxZTQ3YTIzNDM1YjgxIiwidGFnIjoiIn0=', 'eyJpdiI6IjdSNFFWd3R5QjkzcE9zM0s3RFJrNmc9PSIsInZhbHVlIjoiWWpQYmVkb2hUNFAwaEtOVEZEQXBlQ3ZYVUdMTGV5RHM1cHNjbityTWlFcFExNFdycE15ZVo5TDhiRE1vaVNvQVZrSVFsMlVzRXBWbjR3SERrQ3hjVU5IWWdWMTFQdmtOcUhuU1ZvZ1lBWGpwOHpXNmdFbjdFOEU4NHhyNXp6a2I2Y3NXS0hCU2lxVk96MWd5NlgxWnhwTi9rdlozZlEvM2dTNjlaR2xSdEtaaVdtWmFadFY2aEtJQ003ellBY0dsbUxWa1hkaHNyVFgya1lEQkhYNWhtOXEvTU1EZVJLRlZJVTRoOEVsWkMvbnlGMGVpcTd2K1lKbEFjaEtQb0RISjc0QzhnbUxUeUFOdnNXUUNTSGNDaWc9PSIsIm1hYyI6IjEwYjVjNjYzZWMyZTliOTBjNzJkNDlhM2YxZGM2OTllODU4NTI4MDEwOTU5Yzg1MWEwZWZlODlhOWQ2MjA5OGEiLCJ0YWciOiIifQ==', NULL, NULL, NULL, NULL, '2022-12-28 03:02:20');

-- --------------------------------------------------------

--
-- Table structure for table `visi`
--

CREATE TABLE `visi` (
  `id` int(12) NOT NULL,
  `visi` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visi`
--

INSERT INTO `visi` (`id`, `visi`, `gambar`, `updated_at`, `created_at`) VALUES
(1, 'Menjadikan HIPMI Jaya sebagai organisasi pencetak pengusaha muda dan pembentuk ekosistem wirausaha terbaik di Kota Cimahi melalui program kerja yang tepat inovatif dengan semangat dan marwah organisasi HIPMI Jaya', 'visi.png', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agendas`
--
ALTER TABLE `agendas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categoriprestasis`
--
ALTER TABLE `categoriprestasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `formdaftars`
--
ALTER TABLE `formdaftars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `identities`
--
ALTER TABLE `identities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `metodologies`
--
ALTER TABLE `metodologies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `misi`
--
ALTER TABLE `misi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motto`
--
ALTER TABLE `motto`
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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prestasis`
--
ALTER TABLE `prestasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonies`
--
ALTER TABLE `testimonies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unggulans`
--
ALTER TABLE `unggulans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visi`
--
ALTER TABLE `visi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `agendas`
--
ALTER TABLE `agendas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categoriprestasis`
--
ALTER TABLE `categoriprestasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `formdaftars`
--
ALTER TABLE `formdaftars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `identities`
--
ALTER TABLE `identities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `metodologies`
--
ALTER TABLE `metodologies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `misi`
--
ALTER TABLE `misi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `motto`
--
ALTER TABLE `motto`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `prestasis`
--
ALTER TABLE `prestasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testimonies`
--
ALTER TABLE `testimonies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `unggulans`
--
ALTER TABLE `unggulans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `visi`
--
ALTER TABLE `visi`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
