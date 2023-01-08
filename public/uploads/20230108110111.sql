-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2022 at 10:05 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ngo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `applied_books`
--

CREATE TABLE `applied_books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applied_books`
--

INSERT INTO `applied_books` (`id`, `user_id`, `book_id`, `status`, `created_at`, `updated_at`) VALUES
(1, '4', '5', '1', '2022-12-23 12:53:51', '2022-12-23 13:38:36'),
(2, '5', '3', '0', '2022-12-23 13:37:23', '2022-12-23 13:37:23'),
(3, '5', '2', '0', '2022-12-23 13:37:43', '2022-12-23 13:37:43'),
(4, '5', '5', '1', '2022-12-23 13:38:09', '2022-12-23 13:38:29'),
(5, '7', '3', '0', '2022-12-24 03:01:38', '2022-12-24 03:01:38');

-- --------------------------------------------------------

--
-- Table structure for table `applies`
--

CREATE TABLE `applies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `writter_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `writter_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_name`, `writter_name`, `category`, `file`, `created_at`, `updated_at`) VALUES
(1, 'Computerer Itihas', 'Khairul Alam munir', 'Bangla', '20221224031239.pdf', '2022-12-23 12:41:59', '2022-12-23 21:39:05'),
(2, 'Dragon samgra', 'Sri sawapan kumar', 'Bangla', '20221223061245.pdf', '2022-12-23 12:45:30', '2022-12-23 12:45:30'),
(3, 'Nat boltu', 'Mohammed Zafar Iqbal', 'Bangla', '20221223061247.pdf', '2022-12-23 12:47:14', '2022-12-23 12:47:14'),
(4, 'ongko vaiya', 'Chamak hasan', 'Math', '20221223061248.pdf', '2022-12-23 12:48:32', '2022-12-23 12:48:32'),
(5, 'Lal Nil Dipaboli', 'Humayon Azad', 'Bangla', '20221223061249.pdf', '2022-12-23 12:49:34', '2022-12-23 12:49:34');

-- --------------------------------------------------------

--
-- Table structure for table `bookslist`
--

CREATE TABLE `bookslist` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `writter_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Fariha', 'fariha@gmail.com', 'hey i am fariha', 'I want to know know about your donation system', '2022-12-23 12:04:30', '2022-12-23 12:04:30'),
(2, 'keya', 'keya@gmail.com', 'hello I am keya', 'I want donate some money could you please help me', '2022-12-23 12:22:50', '2022-12-23 12:22:50'),
(3, 'prity', 'prity@gmail.com', 'hey i am prity from uttara', 'I want to know about your scholarship', '2022-12-23 12:25:28', '2022-12-23 12:25:28');

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cause` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupation` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_number` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `name`, `email`, `phone_number`, `address`, `occupation`, `amount`, `account_number`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Fariha', 'fariha@gmail.com', '01918262020', 'uttara', 'doctor', '70000', '01918262020', 'approved', '2022-12-23 12:00:58', '2022-12-23 12:21:15'),
(2, 'kabita', 'kabita@gmail.com', '01794900180', 'tongi', 'housewife', '5000', '01721630612', 'pending', '2022-12-23 12:06:26', '2022-12-23 12:06:26'),
(3, 'sumita', 'sumita@gmail.com', '01721432413', 'gazipur', 'teacher', '30000', '0173214522', 'pending', '2022-12-23 12:09:16', '2022-12-23 12:09:16'),
(4, 'sumita', 'sumita@gmail.com', '01721432413', 'gazipur', 'teacher', '30000', '0173214522', 'pending', '2022-12-23 12:09:16', '2022-12-23 12:09:16'),
(5, 'mukta', 'mukta@gmail.com', '01917262027', 'savar', 'social worker', '600000', '01917262027', 'approved', '2022-12-23 12:13:49', '2022-12-23 12:21:03'),
(6, 'keya', 'keya@gmail.com', '01721632432', 'banani', 'engineer', '200000', '017216322462', 'pending', '2022-12-23 12:16:58', '2022-12-23 12:16:58'),
(7, 'Md Ali akber', 'akber@gmail.com', '01721630613', 'kodalia Chouhali', 'businessman', '600000', '794900185', 'pending', '2022-12-23 22:28:15', '2022-12-23 22:28:15'),
(8, 'Nazmul', 'naj112@gmail.com', '01794900180', 'zotpara', 'teacher', '40000', '01794900180', 'approved', '2022-12-23 22:30:57', '2022-12-23 22:32:04'),
(9, 'kona', 'kona@gmail.com', '01721630513', 'Tangail', 'social', '80000', '01721532643', 'pending', '2022-12-24 02:15:52', '2022-12-24 02:15:52');

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
-- Table structure for table `loans`
--

CREATE TABLE `loans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `father_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_occupation` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `family_member` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cause` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `member_name`, `email_name`, `password`, `phone_number`, `address`, `created_at`, `updated_at`) VALUES
(1, 'sajeda', 'sajeda@gmail.com', '12345', '01918102945', 'Rajshahi', '2022-12-23 12:27:31', '2022-12-23 12:27:31'),
(2, 'mina', 'mina@gmail.com', '12345', '01918312343', 'Narshindi', '2022-12-23 12:28:30', '2022-12-23 12:28:30'),
(3, 'khadija', 'kh@gmail.com', '12345', '01712345432', 'Barisal', '2022-12-23 12:29:26', '2022-12-23 12:29:26'),
(4, 'sufian', 'sm124@gmail.com', '12345', '01752503502', 'pirojpur', '2022-12-23 12:30:28', '2022-12-23 12:30:28'),
(5, 'miah', 'miah@gmail.com', '262020', '01732412343', 'bhola', '2022-12-23 12:31:25', '2022-12-23 22:12:06'),
(6, 'Zawad', 'Zawad@gmail.com', '32141', '01512365432', 'Rampura', '2022-12-23 12:32:42', '2022-12-23 22:23:59'),
(7, 'mihad', 'mihad@gmail.com', '6666', '01721431432', 'Chandra', '2022-12-23 21:39:44', '2022-12-23 22:22:44'),
(8, 'shajid', 'shajid@gmail.com', '6666', '0132153442', 'Narayongonj', '2022-12-23 21:40:04', '2022-12-23 22:21:26'),
(9, 'shakib', 'shakib123@gmail.com', '6666', '0132153421', 'bagura', '2022-12-23 21:40:45', '2022-12-23 22:24:34'),
(10, 'shakil', 's@gmail.com', '6666', '01321432154', 'Barisal', '2022-12-23 21:43:36', '2022-12-23 22:19:26'),
(11, 'jahid', 'miah@gmail.com', '262020', '01732412343', 'Jessore', '2022-12-23 21:44:45', '2022-12-23 21:44:45');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_31_154923_create_admin_table', 1),
(6, '2022_11_02_051916_create_books_table', 1),
(7, '2022_11_02_090725_create_notices_table', 1),
(8, '2022_11_13_111616_create_members_table', 1),
(9, '2022_11_30_085737_create_donors_table', 1),
(10, '2022_12_05_084847_create_donations_table', 1),
(11, '2022_12_06_095641_create_student_donations_table', 1),
(12, '2022_12_07_070031_create_scholarships_table', 1),
(13, '2022_12_07_102305_create_transcations_table', 1),
(14, '2022_12_08_063122_create_loans_table', 1),
(15, '2022_12_13_075936_create_contacts_table', 1),
(16, '2022_12_13_080028_create_bookslist_table', 1),
(17, '2022_12_13_083634_create_applies_table', 1),
(18, '2022_12_14_114320_create_reports_table', 1),
(19, '2022_12_17_072533_create_applied_books_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `notice_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `notice_name`, `status`, `published_date`, `description`, `created_at`, `updated_at`) VALUES
(1, 'scholarship', 'active', '2022-12-16', 'announcement of scholarship list', '2022-12-23 12:34:08', '2022-12-23 21:41:45'),
(2, 'student donation list', 'active', '2022-12-21', 'announcement of student donation list', '2022-12-23 12:35:47', '2022-12-23 12:35:47'),
(3, 'donation', 'active', '2022-12-22', 'announcement of active donor list', '2022-12-23 12:37:12', '2022-12-23 12:37:12');

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `scholarships`
--

CREATE TABLE `scholarships` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scholarships`
--

INSERT INTO `scholarships` (`id`, `name`, `amount`, `created_at`, `updated_at`) VALUES
(1, 'Sholarship type 1', 1000000, '2022-12-26 13:03:50', '2022-12-26 13:03:50'),
(2, 'Scholarship type 2', 20000, '2022-12-26 13:04:55', '2022-12-26 13:04:55'),
(3, 'Scholarship type 3', 40000, '2022-12-26 13:05:26', '2022-12-26 13:05:26');

-- --------------------------------------------------------

--
-- Table structure for table `scholarships_bakup`
--

CREATE TABLE `scholarships_bakup` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cause` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `to_date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_number` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scholarships_bakup`
--

INSERT INTO `scholarships_bakup` (`id`, `title`, `amount`, `institute`, `address`, `name`, `email`, `phone_number`, `cause`, `from_date`, `to_date`, `account_number`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Need scholarship', '500000', 'iubat', 'tongi', 'nisi123@gmail.com', 'nisi@gmail.com', '01721512321', 'I want to continue my study for completing my study i have to pay some money in my vercity', '2022-12-24', '2023-02-07', '01621354321', 'approved', '2022-12-23 13:25:31', '2022-12-23 13:35:00'),
(2, 'scholarship request', '35000', 'hazi khan institute', 'Narshindi', 'jawad', 'jawad@gmail.com', '017215324321', 'I need  scholarship for my education purpose', '2022-12-24', '2023-03-24', '0173245321', 'approved', '2022-12-23 13:29:43', '2022-12-23 21:34:57'),
(3, 'please grant my request', '500000', 'pachdona college bhola', 'Bhola', 'salman', 'salman@gmail.com', '01714432401', 'I want clear my dues from my college accounts', '2022-12-30', '2023-04-24', '01742432401', 'pending', '2022-12-23 13:34:42', '2022-12-23 13:34:42'),
(4, 'I need scholarship to admit a university', '60000', 'Belkuchi MA Manan college', 'Belkuchi Sirajgonj', 'jubayer', 'jubayer@gmail.com', '01721530513', 'I want admit university thats why I  need  some scholarship', '2022-12-24', '2023-06-24', '01794523121', 'pending', '2022-12-23 21:33:26', '2022-12-23 21:33:26'),
(5, 'request for scholarship', '50000', 'iubat', 'uttara', 'Al nahian', 'nahian@gmail.com', '01771668864', 'I need scholarship for my registration perpous', '2022-12-24', '2023-02-11', '01771532321', 'approved', '2022-12-24 05:11:36', '2022-12-24 05:12:00');

-- --------------------------------------------------------

--
-- Table structure for table `scholarship_applications`
--

CREATE TABLE `scholarship_applications` (
  `id` int(11) NOT NULL,
  `scholarship_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `note` text DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` time DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scholarship_applications`
--

INSERT INTO `scholarship_applications` (`id`, `scholarship_id`, `user_id`, `note`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 7, 'Dummy reason for the Scholarship 1', 1, '2022-12-26 14:05:44', '20:37:42');

-- --------------------------------------------------------

--
-- Table structure for table `student_donations`
--

CREATE TABLE `student_donations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cause` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_donations`
--

INSERT INTO `student_donations` (`id`, `title`, `name`, `email`, `phone_number`, `account_number`, `amount`, `institute`, `address`, `cause`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Donation request', 'Nisi', 'nisi@gmail.com', '01712344532', '01612324321', '15000', 'Dhaka college', 'Dhanmondi', 'I need donation for my education purpose', 'pending', '2022-12-23 12:56:50', '2022-12-23 12:56:50'),
(2, 'Need  donation', 'sayem', 'sayem@gmail.com', '01794900172', '01732564321', '200000', 'Habhit', 'Tangail sadar', 'I need donation for my registration  purpose', 'pending', '2022-12-23 12:59:16', '2022-12-23 12:59:16'),
(3, 'please approve my request I need donation badly', 'maruf', 'mmaruf@gmail.com', '01754321232', '01754321232', '10000', 'Chouhali degree college', 'chouhali sirajgonj', 'I need donation to continue my study', 'approved', '2022-12-23 13:03:28', '2022-12-23 13:25:51'),
(4, 'I am facing some problems I have to registration in my college please give some donation', 'Kajol', 'kajol@gmail.com', '01918242523', '01732145623', '20000', 'Udoyon boys college', 'mymensingh  valuka', 'I have to seat my final examination', 'pending', '2022-12-23 21:24:12', '2022-12-23 21:24:12'),
(5, 'request for donation', 'Himu', 'himu@gmail.com', '01752403403', '0172341521', '60000', 'eastern university', 'dhanmondi', 'I need donation for my education purpose', 'pending', '2022-12-24 02:58:58', '2022-12-24 02:58:58'),
(6, 'request for donation', 'Al nahian', 'nahian@gmail.com', '01771668864', '01771668843', '9000', 'iubat', 'uttara', 'I need donation to continue my study', 'approved', '2022-12-24 05:08:44', '2022-12-24 05:09:12');

-- --------------------------------------------------------

--
-- Table structure for table `transcations`
--

CREATE TABLE `transcations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trax_head` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `in` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recievers_account_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `out` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transcations`
--

INSERT INTO `transcations` (`id`, `trax_head`, `in`, `recievers_account_no`, `out`, `created_at`, `updated_at`) VALUES
(1, '8V7SpHOanplI', '1', '01917262027', NULL, '2022-12-23 12:21:03', '2022-12-23 12:21:03'),
(2, 'bqhFASmwvWPq', '1', '01918262020', NULL, '2022-12-23 12:21:15', '2022-12-23 12:21:15'),
(3, 'MXFBFNsvmuLZ', NULL, '01754321232', '1', '2022-12-23 13:25:51', '2022-12-23 13:25:51'),
(4, 'iyun83cWUTu7', NULL, '01621354321', '1', '2022-12-23 13:35:00', '2022-12-23 13:35:00'),
(5, 'UghFmjXWyqsb', NULL, '0173245321', '1', '2022-12-23 21:34:57', '2022-12-23 21:34:57'),
(6, '8b1ne53cZs4T', '1', '01794900180', NULL, '2022-12-23 22:32:04', '2022-12-23 22:32:04'),
(7, '7edoq9awehug', NULL, '01771668843', '1', '2022-12-24 05:09:12', '2022-12-24 05:09:12'),
(8, 'aJQtTiPCFCBd', NULL, '01771532321', '1', '2022-12-24 05:12:00', '2022-12-24 05:12:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', NULL, '$2y$10$.0UH5N0oNng3Ge86HpkPDOyVvTI0ZNIyQ/nfgLxWmgM2k7WJUCzRO', NULL, '2022-12-23 11:54:24', '2022-12-23 11:54:24'),
(2, 'Fariha', 'donor', 'fariha@gmail.com', NULL, '$2y$10$AAWvFoawmrauwffKPpRIvO7auP2.UAmLvnu1ztgxQZkBrAXLsNFBO', NULL, '2022-12-23 11:58:34', '2022-12-23 11:58:34'),
(3, 'Fariha', 'donor', 'fariha@gmail.com', NULL, '$2y$10$V7n8jLpBXJz4oMpQAbtjiuf8rJrMEhpbYCcdywY1EYT3V4NH6.Qgy', NULL, '2022-12-23 11:58:34', '2022-12-23 11:58:34'),
(4, 'Nisi', 'student', 'nisi@gmail.com', NULL, '$2y$10$l7XQEZWBTOhjgWM5U2l80.nY7zeqWRlHHfX6E7nNfBfF1wpsSrHZa', NULL, '2022-12-23 12:51:37', '2022-12-23 12:51:37'),
(5, 'jui', 'student', 'jui@gmail.com', NULL, '$2y$10$Y6lCzKHV.IuiE26N.RHRRuV3Tl.WSIb4oQMiibeNPw9ELdmSFS0Mq', NULL, '2022-12-23 13:36:22', '2022-12-23 13:36:22'),
(6, 'jui', 'student', 'jui@gmail.com', NULL, '$2y$10$tG7NgOKATCnRHsLoq8Bq2efytzTlgHzlRUV1pUUKWDut5I11gz68W', NULL, '2022-12-23 13:36:22', '2022-12-23 13:36:22'),
(7, 'Al nahian', 'student', 'nahian@gmail.com', NULL, '$2y$10$Losu18oJr6VtW.HoP/dn.OPFzFpLmbQ4Oj/7JuQCUa./MJweUMnbu', NULL, '2022-12-24 02:19:47', '2022-12-24 02:19:47'),
(8, 'Al nahian', 'student', 'nahian@gmail.com', NULL, '$2y$10$2Ww9AI.FmuxYS32/WGRTSuoIwVoy/o3d6yPX8dyXnj3crlWtYba0K', NULL, '2022-12-24 02:19:47', '2022-12-24 02:19:47'),
(9, 'Jidan', 'donor', 'jidan@gmail.com', NULL, '$2y$10$uCYlFh0nMRstvoOW4T/AmeIfCDH.CwmhDfN2REsY5sexeO9FYNUzG', NULL, '2022-12-24 04:27:46', '2022-12-24 04:27:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applied_books`
--
ALTER TABLE `applied_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applies`
--
ALTER TABLE `applies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookslist`
--
ALTER TABLE `bookslist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
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
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scholarships`
--
ALTER TABLE `scholarships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scholarships_bakup`
--
ALTER TABLE `scholarships_bakup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scholarship_applications`
--
ALTER TABLE `scholarship_applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_donations`
--
ALTER TABLE `student_donations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transcations`
--
ALTER TABLE `transcations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applied_books`
--
ALTER TABLE `applied_books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `applies`
--
ALTER TABLE `applies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bookslist`
--
ALTER TABLE `bookslist`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loans`
--
ALTER TABLE `loans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `scholarships`
--
ALTER TABLE `scholarships`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `scholarships_bakup`
--
ALTER TABLE `scholarships_bakup`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `scholarship_applications`
--
ALTER TABLE `scholarship_applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_donations`
--
ALTER TABLE `student_donations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transcations`
--
ALTER TABLE `transcations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
