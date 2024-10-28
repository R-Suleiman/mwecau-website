-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 26, 2024 at 08:51 AM
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
-- Database: `mwecau-website`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `header` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `header`, `description`, `created_at`, `updated_at`) VALUES
(1, 'About', '<p style=\"text-align:justify;\"><strong>Welcome to Mwenge Catholic University (MWECAU),</strong> a University that gives you the opportunity to pursue quality education in truthfulness and freedom of thought, so that you may gain professional competency to boldly serve and contribute to the development of humanity. In order to prepare for your future career or pursue academic and professional advancement, be it education, administration, sciences, law and/or social sciences, think of MWECAU as your best choice.&nbsp;</p><p style=\"text-align:justify;\">Our community is being called to reimagine the future. As the only university where a renowned design school comes together with premier colleges, we are making learning more relevant and transformational. We are enriched by the wide range of experiences and perspectives of our students, faculty, staff and alumni. Preparing students to make meaningful contributions to society as leaders in a complex world.</p>', NULL, '2024-10-05 17:35:36');

-- --------------------------------------------------------

--
-- Table structure for table `conferences`
--

CREATE TABLE `conferences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `date` date NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_desc` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `header` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `header`, `type`, `description`, `file`, `created_at`, `updated_at`, `level`) VALUES
(1, 'MWECAU Journal of Academic Studies Vol 2, 2014', 'journal', NULL, '1727179705-MWECAU Journal Academic Studies 2014.pdf', '2024-09-24 09:08:25', '2024-09-24 09:08:25', NULL),
(4, 'MWECAU Journal of Academic Studies Vol 3, 2015', 'journal', NULL, '1727184839-MWECAU Journal Academic Studies  2015-compressed.pdf', '2024-09-24 10:33:59', '2024-09-24 10:33:59', NULL),
(5, 'MWECAU Journal of Academic Studies Vol 4, 2016', 'journal', NULL, '1727185366-MWECAU Journal Academic Studies  2016.pdf', '2024-09-24 10:42:46', '2024-09-24 10:42:46', NULL),
(6, 'MWECAU Journal of Academic Studies Vol 5, 2017', 'journal', NULL, '1727189722-MWECAU Journal Academic Studies 2017.pdf', '2024-09-24 11:55:22', '2024-09-24 11:55:22', NULL),
(7, 'fee structure postgraduate', 'fee-structure', NULL, '1727245770-Fee Structure for Postgraduate Programmes.pdf', '2024-09-25 03:29:30', '2024-09-25 03:29:30', 'postgraduate'),
(8, 'fee structure undergraduate', 'fee-structure', NULL, '1727246074-Fee Structure for Bachelor Degree.pdf', '2024-09-25 03:34:34', '2024-09-25 03:34:34', 'undergraduate'),
(9, 'fee structure Non-degree', 'fee-structure', NULL, '1727246148-Fee Structure for Certificate and Diploma.pdf', '2024-09-25 03:35:48', '2024-09-25 03:35:48', 'non-degree'),
(10, 'Postgraduate Joining Instruction', 'joining-instruction', NULL, '1728837663-ALMANAC FOR THE ACADEMIC YEAR 2024-2025.pdf', '2024-09-25 03:46:09', '2024-10-13 13:41:03', 'postgraduate'),
(11, 'Undergraduate Joining Instruction', 'joining-instruction', NULL, '1727246789-Joining Instructions for Undergraduate 2024-2025.pdf', '2024-09-25 03:46:29', '2024-10-13 13:37:15', 'undergraduate'),
(12, 'Non Degree Joining Instruction', 'joining-instruction', NULL, '1727246805-Joining Instructions for Cert and Dip 2024-2025.pdf', '2024-09-25 03:46:45', '2024-10-13 13:36:33', 'non-degree'),
(13, 'Almanac', 'almanac', NULL, '1727247760-ALMANAC FOR THE ACADEMIC YEAR 2024-2025.pdf', '2024-09-25 04:02:40', '2024-10-13 13:37:54', 'undergraduate'),
(14, 'Undergraduate Timetable', 'timetable', NULL, '1727967011-Undergraduate_TT_2024-2025_sem1_09272024_1st Draft.pdf', '2024-10-03 11:50:11', '2024-10-03 11:50:11', 'undergraduate');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_title` varchar(255) NOT NULL,
  `event_category` varchar(255) NOT NULL,
  `event_description` text NOT NULL,
  `event_image` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `speaker_fullname` varchar(255) NOT NULL,
  `speaker_profession` varchar(255) DEFAULT NULL,
  `speaker_info` text NOT NULL,
  `speaker_photo` varchar(255) DEFAULT NULL,
  `event_cost` varchar(255) NOT NULL,
  `event_date` date NOT NULL,
  `eventStart_time` time NOT NULL,
  `eventEnd_time` time NOT NULL,
  `event_location` varchar(255) NOT NULL,
  `event_organizer` varchar(255) NOT NULL,
  `total_slots` varchar(255) DEFAULT '-',
  `booked_slots` varchar(255) NOT NULL DEFAULT '-',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_title`, `event_category`, `event_description`, `event_image`, `file`, `speaker_fullname`, `speaker_profession`, `speaker_info`, `speaker_photo`, `event_cost`, `event_date`, `eventStart_time`, `eventEnd_time`, `event_location`, `event_organizer`, `total_slots`, `booked_slots`, `created_at`, `updated_at`) VALUES
(1, '17th MWECAU Graduation Ceremony', 'Academic', '<p><strong>17th MWECAU Graduation Ceremony</strong></p><p>&nbsp;We are pleased to inform the graduates of the 2023/2024 academic year and the general public that Mwenge Catholic University will hold its 17th Graduation Ceremony on Saturday, 23rd November 2024 at the University Campus, from 8:00 a.m. to 2:00 p.m.&nbsp;</p><p>The event will commence with a Holy Mass at 8:00 a.m. followed by the Academic Procession at 10:00 a.m. Graduation gowns and booklets will be available for collection from Wednesday, 20th November to Friday, 22nd November 2024.</p><p>Graduands are reminded that the return of gowns will take place from Monday, 25th November to Wednesday, 20th November 2024. A late return will incur a penalty of Tsh 10,000 per day.</p><p>&nbsp;A compulsory graduation rehearsal will be held on Friday, 25th November 2024, at 2:00 p.m. All graduates are required to attend. We cordially invite you to join us in celebrating this significant academic event.</p>', '1727243662-GRAD.jpg', '1727244218-Press release Graduation 2024.pdf', 'MWECAU', NULL, 'Mwenge Catholic University', '1727178115-png', '0', '2024-11-23', '08:30:00', '14:00:00', 'Mwenge Ctholic University', 'MWECAU', '-', '-', '2024-09-24 06:52:12', '2024-10-05 11:58:21'),
(2, '5th MWECAU International Conference', 'Event Category', 'The conference aims to unite academics, educators, researchers, and practitioners globally to discuss teacher education, gender equality, and active citizenship for a sustainable future. It emphasizes the role of teacher education in promoting gender equality and active participation in social and economic well-being. By sharing knowledge and experiences, the conference seeks to highlight how teacher education can foster sustainable lifestyles, human rights, and cultural diversity worldwide.\r\nclick here to visit the conference link https://conference.mwecau.ac.tz/', '1727244465-CONFERENC.jpg', NULL, 'MWECAU', NULL, 'Mwenge Catholic Univeristy', '1727178115-png', '0', '2024-11-07', '08:30:00', '14:00:00', 'Mwenge Ctholic University', 'MWECAU', '0', '0', '2024-09-24 08:41:55', '2024-09-25 03:07:45'),
(3, 'Opening of 2024/2025 Academic Year', 'academic', 'Non-Degree 7th Oct 2024, Undergrduate 14th Oct 2024, Postgraduate 7th Oct 2024', '1727250683-ACADEMIC.jpg', NULL, 'MWECAU', 'University', 'Mwecau', NULL, '0', '2024-10-07', '08:30:00', '16:00:00', 'MWECAU', 'MWECAU', '0', '0', '2024-09-25 04:51:23', '2024-09-25 04:51:23');

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
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `link` text DEFAULT NULL,
  `category` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `name`, `description`, `link`, `category`, `created_at`, `updated_at`) VALUES
(4, 'Learning Management System(LMS)', NULL, 'https://lms.mwecau.ac.tz/', 'popular-links', '2024-10-05 19:44:45', '2024-10-05 19:44:45'),
(5, 'Ministry of Education,Science,and Technology', NULL, NULL, 'popular-links', '2024-10-05 19:46:39', '2024-10-05 19:46:39'),
(6, 'TCU', NULL, 'https://www.tcu.go.tz/', 'popular-links', '2024-10-05 19:47:13', '2024-10-05 19:47:13'),
(7, 'NGLP', NULL, 'https://www.nglp.net/', 'popular-links', '2024-10-05 19:47:50', '2024-10-05 19:47:50'),
(8, 'HESLB', NULL, 'https://www.heslb.go.tz/?lang=', 'popular-links', '2024-10-05 19:48:44', '2024-10-05 19:48:44'),
(9, 'NACTVET', NULL, 'https://www.nactvet.go.tz/', 'popular-links', '2024-10-05 19:49:07', '2024-10-05 19:49:07');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `date`, `thumbnail`, `created_at`, `updated_at`) VALUES
(1, 'Graduation Gallery', NULL, 'mwecau.jpg', '2024-10-26 02:53:53', '2024-10-26 02:53:53'),
(2, 'Conference Gallery', NULL, 'BANNER 1.jpg', '2024-10-26 03:12:10', '2024-10-26 03:12:10'),
(3, 'Permission Create', NULL, 'banner1.jpg', '2024-10-26 03:20:34', '2024-10-26 03:20:34'),
(4, 'then', NULL, 'LATEST1.jpg', '2024-10-26 03:27:52', '2024-10-26 03:27:52'),
(5, 'The first Open access resource', NULL, 'mwecau2.jpg', '2024-10-26 03:35:57', '2024-10-26 03:35:57'),
(6, 'b', NULL, 'banner1.jpg', '2024-10-26 03:40:46', '2024-10-26 03:40:46'),
(7, 'b', NULL, 'mwecau2.jpg', '2024-10-26 03:42:18', '2024-10-26 03:42:18'),
(8, 'folder', NULL, 'mwecau_housing.JPG', '2024-10-26 03:50:27', '2024-10-26 03:50:27');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_images`
--

CREATE TABLE `gallery_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `gallery_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `health_services`
--

CREATE TABLE `health_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `header` varchar(255) DEFAULT NULL,
  `sub_header` varchar(255) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `page` varchar(255) DEFAULT NULL,
  `image_section` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `header`, `sub_header`, `description`, `page`, `image_section`, `type`, `image`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Welcome to Mwenge Catholic University', 'The registration process for the new academic year 2024/2025 is ongoing', NULL, 'home', 'homeslider', 'video', '1729063611-USAJILI 2.mp4', NULL, '2024-08-26 06:27:38', '2024-10-16 06:16:37'),
(2, 'Postgraduate Admissions', NULL, 'Whatever you\'re seeking from your college experience, you\'ll find it at Mwenge Catholic University.', 'home', 'homeprograms', 'image', '1724832606-BBZV6239.JPG', NULL, '2024-08-26 06:57:11', '2024-08-28 05:10:06'),
(3, 'Undergraduate Admissions', NULL, 'Whatever you\'re seeking from your college experience, you\'ll find it at Mwenge Catholic University.', 'home', 'homeprograms', 'image', '1724788003-LXKC1912.JPG', NULL, '2024-08-26 07:13:51', '2024-08-27 16:46:43'),
(4, 'Non-Degree Admissions', NULL, 'Whatever you\'re seeking from your college experience, you\'ll find it at Mwenge Catholic University.', 'home', 'homeprograms', 'image', '1724767041-COII6861.JPG', NULL, '2024-08-26 08:13:07', '2024-08-27 10:57:21'),
(5, NULL, NULL, NULL, 'home', 'homeslider', 'image', '1727939396-BANNER-WEB-CONFIRM-tu.jpg', NULL, '2024-08-26 08:23:42', '2024-10-03 04:09:56'),
(6, NULL, NULL, NULL, 'course', 'course-banner', 'image', '1725858684-BANNER APPLY NOW 2.jpg', NULL, '2024-08-26 08:34:21', '2024-09-09 02:11:24'),
(7, 'undergraduate', NULL, NULL, 'academics', 'academics-undergraduate', 'image', '1724922980-FRUZ9645.JPG', NULL, '2024-08-26 08:46:11', '2024-08-29 06:16:20'),
(8, 'Discover the world of possibilities with MWECAU', NULL, NULL, 'home', 'homeslider', 'image', '1725890640-BANNER-WEB-moja.jpg', NULL, '2024-08-27 16:57:39', '2024-09-09 11:04:00'),
(9, 'postgraduate', NULL, NULL, 'academics', 'academics-postgraduate', 'image', '1724922911-RELA5493.JPG', NULL, '2024-08-27 18:03:29', '2024-08-29 06:15:11'),
(10, 'non-degree', NULL, NULL, 'academics', 'academics-non-degree', 'image', '1724923065-KRDT0052.JPG', NULL, '2024-08-27 18:06:30', '2024-08-29 06:17:45'),
(11, NULL, NULL, NULL, 'ict', 'ict-banner', 'image', '1724919356-TOFE6174.JPG', NULL, '2024-08-29 05:15:56', '2024-08-29 05:15:56'),
(12, NULL, NULL, NULL, 'undergraduate', 'courses-banner', 'image', '1724959911-QRSN5596.JPG', NULL, '2024-08-29 16:31:51', '2024-08-29 16:31:51'),
(14, NULL, NULL, NULL, 'non-degree', 'homeslider', 'image', '1724960013-GAZL4076.JPG', NULL, '2024-08-29 16:33:33', '2024-08-29 16:33:33'),
(15, 'Discover the world of possibilities with MWECAU', NULL, NULL, 'home', 'homeslider', 'image', '1725891420-BANNER-WEB-two.jpgGGGGG.jpg', NULL, '2024-09-05 04:13:59', '2024-09-09 11:17:00'),
(17, NULL, NULL, NULL, 'campus-life', 'campus-life', 'image', '1725959260-BANNER-WEB-CONFIRM-3-CAMPUS-LIFE.jpg', NULL, '2024-09-09 02:16:21', '2024-09-10 06:07:40'),
(21, NULL, NULL, NULL, 'postgraduate', 'homeprograms', 'image', '1725958279-OMWL9908.JPG', NULL, '2024-09-10 05:51:19', '2024-09-10 05:51:19'),
(22, NULL, NULL, NULL, 'about', 'about-gallery', 'image', '1726232451-0J3A0402MWECAU.JPG', NULL, '2024-09-13 10:00:51', '2024-09-13 10:00:51'),
(23, NULL, NULL, NULL, 'about', 'about-partners', 'image', '1726233046-agroLab.png', 'https://www.agrolab.us/', '2024-09-13 10:10:46', '2024-09-13 10:10:46'),
(25, NULL, NULL, NULL, 'about', 'about-partners', 'image', '1726236905-ternet.png', 'https://www.ternet.or.tz/', '2024-09-13 11:15:05', '2024-09-13 11:15:05'),
(26, NULL, NULL, NULL, 'about', 'about-partners', 'image', '1726236966-misitu.png', 'https://www.tfs.go.tz/index.php/en', '2024-09-13 11:16:06', '2024-09-13 11:16:06'),
(27, NULL, NULL, NULL, 'about', 'about-partners', 'image', '1726237007-univervitate.jpg', 'https://www.uniservitate.org/', '2024-09-13 11:16:47', '2024-09-13 11:16:47'),
(28, NULL, NULL, NULL, 'about', 'about-partners', 'image', '1726237051-MIC.png', 'https://www.mic.ul.ie/', '2024-09-13 11:17:31', '2024-09-13 11:17:31'),
(29, NULL, NULL, NULL, 'about', 'about-partners', 'image', '1726237094-misereor.png', 'https://www.misereor.org/', '2024-09-13 11:18:14', '2024-09-13 11:18:14'),
(30, NULL, NULL, NULL, 'about', 'about-partners', 'image', '1726237140-porticus.png', 'https://www.porticus.com/en/home', '2024-09-13 11:19:00', '2024-09-13 11:19:00'),
(31, NULL, NULL, NULL, 'about', 'about-partners', 'image', '1726237174-walsh university.png', 'https://www.walsh.edu/', '2024-09-13 11:19:34', '2024-09-13 11:19:34'),
(32, NULL, NULL, NULL, 'about', 'about-partners', '', '1726237262-logo.svg', 'https://www.kuleuven.be/english/kuleuven/', '2024-09-13 11:21:02', '2024-09-13 11:21:02'),
(33, NULL, NULL, NULL, 'about', 'about-partners', '', '1726237311-cropped-cropped-UniKWebiste-Hi.png', 'https://unik.ac.ug/', '2024-09-13 11:21:51', '2024-09-13 11:21:51'),
(34, NULL, NULL, NULL, 'about', 'about-partners', '', '1726237525-inn-eng-logo.svg', 'https://www.inn.no/english/', '2024-09-13 11:25:25', '2024-09-13 11:25:25'),
(35, NULL, NULL, NULL, 'about', 'about-partners', '', '1726237563-turku-AMK.svg', 'https://www.tuas.fi/en/', '2024-09-13 11:26:03', '2024-09-13 11:26:03'),
(36, NULL, NULL, NULL, 'about', 'about-partners', '', '1726237594-susie.png', 'https://susie.turkuamk.fi/', '2024-09-13 11:26:34', '2024-09-13 11:26:34'),
(37, NULL, NULL, NULL, 'about', 'about-gallery', '', '1726237832-uni.jpg', NULL, '2024-09-13 11:30:32', '2024-09-13 11:30:32'),
(38, NULL, NULL, NULL, 'about', 'about-gallery', '', '1726238124-0J3A0411MWECAU.JPG', NULL, '2024-09-13 11:35:24', '2024-09-13 11:35:24'),
(39, NULL, NULL, NULL, 'about', 'about-gallery', '', '1726238173-0J3A0442MWECAU.JPG', NULL, '2024-09-13 11:36:13', '2024-09-13 11:36:13');

-- --------------------------------------------------------

--
-- Table structure for table `libray`
--

CREATE TABLE `libray` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `libray`
--

INSERT INTO `libray` (`id`, `category_name`, `name`, `description`, `link`, `created_at`, `updated_at`) VALUES
(1, 'objectiv', 'The Objective of the MWECAU Library', '<p>The main Objective is to develop and maintain library and information services in the relevant disciplines so as to support core function of the university in teaching research and out rincluding consultancy services as well as provide information to other categories of users. <strong>welcome</strong></p>', NULL, '2024-10-24 11:23:22', '2024-10-25 04:53:42'),
(2, 'welcome', 'Library Welcome Message', '<p>DOAB is a community-driven discovery service that indexes and provides access to scholarly, peer-reviewed open access books and helps users to find trusted open access book publishers.</p>', 'google.com', '2024-10-24 11:47:41', '2024-10-25 04:55:14'),
(3, 'services', 'Services', '<ul><li>Circulation-check out and check in of library materials</li><li>lkjhbgvc</li></ul><p>&nbsp;</p>', 'google', '2024-10-24 16:21:23', '2024-10-25 09:11:25'),
(6, 'welcome', 'Welcome Message', '<p>Welcome Message</p>', NULL, '2024-10-25 05:55:01', '2024-10-25 05:55:01'),
(7, 'open-access-resource', NULL, '<p>n</p>', 'n', '2024-10-25 10:02:32', '2024-10-25 10:02:32');

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
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_02_01_141529_create-courses-table', 2),
(7, '2024_02_06_083413_create_courses_table', 3),
(8, '2024_03_04_180807_create_events_table', 4),
(9, '2024_03_04_181007_create_staffs_table', 4),
(10, '2024_03_15_105016_create_events_table', 5),
(11, '2024_03_16_170854_create_courses_table', 6),
(12, '2024_03_16_202226_create_staffs_table', 7),
(14, '2024_03_26_004744_create_pdfs_table', 9),
(15, '2024_08_16_130846_create_images_table', 10),
(16, '2024_08_16_144054_create_images_table', 11),
(17, '2024_08_26_091517_create_images_table', 12),
(18, '2024_08_27_084912_create_statistics_table', 13),
(19, '2024_08_27_111724_create_news_updates_table', 14),
(20, '2024_09_09_100421_create_research_table', 15),
(21, '2024_09_12_195721_create_abouts_table', 16),
(22, '2024_09_13_135831_add_link_to_images_table', 17),
(23, '2024_09_23_090706_create_pdfs_table', 18),
(24, '2024_09_23_110947_add_type_pdfs_table', 19),
(25, '2024_09_23_111341_create_documents_table', 20),
(26, '2024_09_24_041524_add_level_to_documents_table', 21),
(27, '2024_09_25_040152_add_file_to_event_table', 22),
(28, '2024_09_27_072007_create_footers_table', 23),
(29, '2024_09_27_080115_create_conferences_table', 24),
(30, '2024_10_08_093738_create_health_services_table', 25),
(31, '2024_10_08_110603_create_health_services_table', 26),
(32, '2024_10_15_143040_add_type_to_images_table', 26),
(33, '2024_10_22_212002_create_projects_table', 27),
(34, '2024_10_24_130844_create_libray_table', 27),
(35, '2024_10_25_143050_create_gallery_table', 28),
(36, '2024_10_25_143719_create_gallery_images_table', 28);

-- --------------------------------------------------------

--
-- Table structure for table `news_updates`
--

CREATE TABLE `news_updates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `posting_date` date NOT NULL,
  `attachment` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_updates`
--

INSERT INTO `news_updates` (`id`, `name`, `description`, `posting_date`, `attachment`, `created_at`, `updated_at`) VALUES
(21, 'Selected Applicants Round 2 Degree', '<p>Selected Applicants round 2</p>', '2024-10-16', '1729062125_Selected-Applicants-Round-1-Degree.pdf', '2024-10-16 04:02:05', '2024-10-16 04:02:05');

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

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('godfrey_erick@yahoo.com', '$2y$12$sSDr7f/S3SXVz6Vtx27QS.vzTFan1GYBUWnQCqXkFCRMt.BPxW3cS', '2024-05-07 09:01:24');

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
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `research`
--

CREATE TABLE `research` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `header` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `research`
--

INSERT INTO `research` (`id`, `header`, `description`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Bega Kwa Bega: building climate-smart, biodiverse, resilient and inclusive agroforestry systems in Tanzania’s mountain environments', '<p>This project aims to improve livelihoods, biodiversity and carbon sequestration in the mountainous environments of Northern Tanzania by building climate-smart, resilient and inclusive farming systems using indigenous trees. Moreover, we aim to improve the situation for vulnerable groups, in casu single headed households and special needs groups, by restoring ecosystem services and by improving and diversifying agroforestry production. The project is inspired by the outcomes of the <strong>VLIR-UOS SI LiveLabLink </strong>project and will strengthen research and outreach capacity and infrastructure at <strong>MWECAU </strong>by joint research, by development of demo\'s and digital tools, and by establishing networks with NGO’s for upscaling...</p>', 'project', '2024-09-09 10:16:50', '2024-09-13 07:03:29'),
(2, 'Mtu Ni Watu: Enhancing nutrition of vulnerable groups in agroforestry systems in Northern Mountains of Tanzania via collaboration for better dairy cattle management.', '<p>This project aims to improve agro-ecosystem quality as well as nutrition in the agroforestry systems of the Northern Mountains of Tanzania. Our aim is to integrate and enhance livestock health and productivity under a zero-grazing system. By collaborating between established and emerging universities, we aim to strengthening the research and outreach capacity of MWECAU through joint research, focusing on record keeping, cattle health, breeds and nutritious animal feeds for enhanced milk quality and quantity. Moreover, we aim to improve the situation for vulnerable groups, in casu single-headed households and special needs groups, by improving their access to protein-rich food. The...</p>', 'project', '2024-09-09 10:18:28', '2024-10-05 09:58:40'),
(3, 'Active Citizenship and Gender Equality through International Teacher Education (CIGETE)', '<p>With this project, we aim to improve teacher education through international collaboration on topics related to active citizenship and gender equality. The main focus will be on student and staff exchange between Tanzania and Norway.</p><p>&nbsp;The project coordinator will be Dr. Prisca Bruno Massao, associate professor in Social Science/Sociology at the Faculty of Education, Inland Norway University of Applied Sciences (INN University). The partner institutions are Mwenge Catholic University (MWECAU) in Moshi, Marangu Teachers College (MTC) and Darajani Secondary School (Darajani) in Marangu, all three located in the Kilimanjaro region in the Northern part of Tanzania. During the implementation of...</p>', 'project', '2024-09-09 10:19:33', '2024-10-05 09:57:13'),
(4, 'Sustainable Business and Employability through Active Pedagogy in Higher Education Institutions (SUSIE)', 'Towards sustainable higher education institutions in Tanzania: SUSIE project experiences\r\n\r\nSUSIE, Sustainable Business and Employability through HEIs’ Innovation Pedagogy, was comprised three Tanzanian HEIs—Tumaini University of Dar es Salaam College (TUDARCo), Moshi Co-operative University (MoCU), and Mwenge Catholic University (MWECAU) alongside the Finnish Turku University of Applied Sciences (Turku UAS), which served as the project coordinator. The consortium did not arise from the vacuum, but the foundation rests on former development initiatives during which partners had not only established confidential relationships but also invested in capacity building.', 'project', '2024-09-09 10:58:20', '2024-09-09 10:58:20'),
(5, 'Towards sustained service-learning institutionalization: Understanding Advances Opportunities and Challenges at Mwenge Catholic University, Tanzania', 'The research project sought to assess the process of institutionalization at Mwenge Catholic University (MWECAU) towards sustained service-learning by understanding advances, opportunities and challenges. The objectives of the project was to identify philosophy and mission of service-learning at MWECAU, to examine faculty and students support in institutionalization process at MWECAU, to analyze community partnership and participation in institutionalization and implementation of SL at MWECAU, to determine institutional support for service-learning institutionalization at MWECAU and to evaluate advances and impendent of institutionalization at MWECAU.', 'project', '2024-09-09 10:58:50', '2024-09-09 10:58:50'),
(10, 'Designing Interdisciplinary Solutions for Urban Development and Enhanced Environmental Sustainability in Moshi Municipal Council- Student Workshop (Connecting Moshi Urban Pazuri)', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(33,37,41);\"><strong>Mwenge Catholic University (MWECAU) </strong>in Moshi Tanzania in Collaboration with Erasmus Brussels University of Applied Sciences and Arts (EhB) of Belgium were involved in Joint interdisciplinary workshop for students from both institutions to be held in Moshi, Kilimanjaro, Tanzania from 9th March to 17th March 2024.</span></p><p><span style=\"background-color:rgb(255,255,255);color:rgb(33,37,41);\">&nbsp;The theme of the workshop is sustainable urban area-development “</span><strong>Connecting for Moshi Urban Pazuri”.</strong><span style=\"background-color:rgb(255,255,255);color:rgb(33,37,41);\">&nbsp;The workshop will involve designing interdisciplinary solutions for urban development and enhanced environmental sustainability in Moshi.&nbsp;The students were involved in field excursions in Moshi urban including Uhuru Park. The field excursion at Uhuru Park took place on 15</span>th</p>', 'outreach', '2024-09-25 07:01:39', '2024-10-05 09:55:50'),
(11, 'Never Drop the Mike Outreach Program', '<p style=\"text-align:justify;\"><span style=\"background-color:rgb(255,255,255);color:rgb(33,37,41);\"><i><strong>Never Drop the Microphone’</strong></i><strong> </strong>is a outreach program aimed at empowering youth in Tanzania to discover and utilize their talents and potentials towards self-determination and societal contribution. The initiative addresses the prevalent issue of youth unemployment by encouraging young people to focus on creativity and self-employment rather than solely seeking jobs. The outreach has two primary objectives. Firstly, it aims to awaken youths to their inherent talents and potentials through workshops and training sessions held in secondary schools and universities across Tanzania. By fostering a sense of ownership over their learning and decision-making, the outreach program equips youths...</span></p>', 'outreach', '2024-09-25 07:02:30', '2024-10-05 09:54:46'),
(12, 'Sustainable tourism Outreach /workshop at  Materuni Village Community in Moshi District Council, Kilimanjaro Tanzania', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(33,37,41);\">On <strong>17</strong></span><strong>th</strong><span style=\"background-color:rgb(255,255,255);color:rgb(33,37,41);\"><strong>&nbsp;May 2024</strong> we were able to conduct workshop at Materuni Village Community on sustainable tourism practices, emphasizing the critical importance of preserving the environment, culture, and communities. &nbsp;There is increased number of tourists in the village attractions with less sustainable tourism practices.&nbsp;In partnership with Service Learning -MWECAU, and the Moshi District Council, the workshop aimed to empower tour guides with the essential knowledge, skills, and competencies required to champion responsible tourism initiatives in the village. Through this collaborative effort, participants were equipped to lead the way in fostering sustainable tourism practices that not only minimize ecological footprint but also enrich the culture and economy of the village.</span></p>', 'project', '2024-09-25 07:03:11', '2024-09-25 07:03:11');

-- --------------------------------------------------------

--
-- Table structure for table `statistics`
--

CREATE TABLE `statistics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `statistic_name` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statistics`
--

INSERT INTO `statistics` (`id`, `statistic_name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'Established', '2001', '2024-08-27 06:16:58', '2024-08-27 06:16:58'),
(2, 'Faculty', '3', '2024-08-27 06:17:24', '2024-08-27 06:17:24'),
(3, 'Students', '5700', '2024-08-27 06:17:40', '2024-08-27 06:17:40'),
(4, 'Graduation rate', '95', '2024-08-27 06:18:06', '2024-08-27 06:18:06');

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
(1, 'webAmin', 'eri@gmail.com', NULL, '$2y$12$hY2wo7InZqKpYvR.FLtcJevvTS9DwNV3peumRDFnv0W1eBl15HXO6', NULL, '2024-03-24 08:13:41', '2024-03-24 08:13:41'),
(3, 'Athanas Sing\'ambi', 'athanas@mwecau.ac.tz', NULL, '$2y$12$XcgaSJqBHPtHtS0YZ9nkdOTRRyhC2M3TGXGMUVKW6J2QdLNQjnWb6', NULL, '2024-03-25 07:43:29', '2024-03-25 07:43:29'),
(4, 'msaki hali', 'godfrey_erick@yahoo.com', NULL, '$2y$12$0ikds5XER/x7PMLFbNhTpewYNMraNFet2cTP8N8giwX2RsH1Pk.ee', NULL, '2024-03-25 08:46:26', '2024-03-25 08:46:26'),
(5, 'laravel', 'laravel@gmail.com', NULL, '$2y$12$A4umYhEvQ85pZ9xJvcaESuRc./CLx7eYtyS69e9esSw41Za0pLuMO', NULL, '2024-03-31 05:01:43', '2024-03-31 05:01:43'),
(6, 'Tayrol otwel', 'otwel@gmail.com', NULL, '$2y$12$gllYj40VJ0iE1X5ohqJNHO4ybLteUXC8sQIEzRTVvTdh1.uFzKGie', NULL, '2024-03-31 05:21:50', '2024-03-31 05:21:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conferences`
--
ALTER TABLE `conferences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_images`
--
ALTER TABLE `gallery_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gallery_images_gallery_id_foreign` (`gallery_id`);

--
-- Indexes for table `health_services`
--
ALTER TABLE `health_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `libray`
--
ALTER TABLE `libray`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_updates`
--
ALTER TABLE `news_updates`
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
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `research`
--
ALTER TABLE `research`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statistics`
--
ALTER TABLE `statistics`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `conferences`
--
ALTER TABLE `conferences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gallery_images`
--
ALTER TABLE `gallery_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `health_services`
--
ALTER TABLE `health_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `libray`
--
ALTER TABLE `libray`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `news_updates`
--
ALTER TABLE `news_updates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `research`
--
ALTER TABLE `research`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `statistics`
--
ALTER TABLE `statistics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gallery_images`
--
ALTER TABLE `gallery_images`
  ADD CONSTRAINT `gallery_images_gallery_id_foreign` FOREIGN KEY (`gallery_id`) REFERENCES `gallery` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
