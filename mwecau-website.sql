-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 10, 2024 at 03:15 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

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
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_title` varchar(255) NOT NULL,
  `course_description` text NOT NULL,
  `course_entry_qualification` text NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `course_duration` varchar(255) NOT NULL,
  `course_category` enum('undergraduate','postgraduate','non-degree') NOT NULL,
  `course_thumbnail` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_title`, `course_description`, `course_entry_qualification`, `course_code`, `course_duration`, `course_category`, `course_thumbnail`, `created_at`, `updated_at`) VALUES
(1, 'Doctor of Philosophy in Education (PhD)', 'Master of Education or related field with an average of “B” or a minimum GPA of 3.0.', 'Master of Education or related field with an average of “B” or a minimum GPA of 3.0.', 'PhD', '(3 Years)', 'postgraduate', '1714898730.jpg', '2024-03-20 16:42:39', '2024-05-05 05:45:30'),
(2, 'Master of Science with Education', 'Bachelor’s degree in Science (Education) or Education (Science) in the following Science Subjects: Biology, Chemistry, and Mathematics with an average of “B” or a minimum GPA of 2,7,  OR Postgraduate Diploma in Education with an average of “B” or a minimum GPA of 3,0', 'Bachelor’s degree in Science (Education) or Education (Science) in the following Science Subjects: Biology, Chemistry, and Mathematics with an average of “B” or a minimum GPA of 2.7. OR Postgraduate Diploma in Education with an average of “B” or a minimum GPA of 3.0.', 'Masters1', '2 Years', 'postgraduate', '1710965075jpg', '2024-03-20 17:04:35', '2024-03-20 17:04:35'),
(3, 'Master of Education', 'Bachelor’s degree in Education or related field with an average of “B”', 'Bachelor’s degree in Education or related field with an average of “B” or a minimum GPA of 2.7. or  Postgraduate Diploma in Education  with an  average of B or a minimum GPA  of  3.0', 'Masters2', '2 Years', 'postgraduate', '1710965143jpg', '2024-03-20 17:05:43', '2024-03-20 17:05:43'),
(4, 'Master of Business Administration', 'Bachelor’s degree in any relevant field with an average of “B” or a minimum GPA of', 'Bachelor’s degree in any relevant field with an average of “B” or a minimum GPA of 2.7. OR A candidate without a minimum GPA of 2.7 in the Bachelor’s degree must have an average of “C” or a minimum GPA of 2.0 PLUS a Postgraduate diploma in a Business related field. OR Professional qualifications such as CPA (T), ACCA, CSP or PSPTB.', 'Masters3', '2 Years', 'postgraduate', '1710965226jpg', '2024-03-20 17:07:06', '2024-03-20 17:07:06'),
(5, 'Postgraduate Diploma in Business Management', 'Bachelor’s degree or Advanced Diploma in Accounting, Finance, Marketing, Human Resources or Business-related field with an average of “B” or a minimum GPA of', 'Bachelor’s degree or Advanced Diploma in Accounting, Finance, Marketing, Human Resources or Business-related field with an average of “B” or a minimum GPA of 3.0. OR Professional Qualifications such as CPA (T), ACCA, CSP or PSPTB.', 'Masters4', '1 year', 'postgraduate', '1710965413jpg', '2024-03-20 17:10:13', '2024-03-20 17:10:13'),
(6, 'Postgraduate Diploma in Education', 'Bachelor’s degree with a minimum GPA of 20 or C grade', 'Bachelor’s degree with a minimum GPA of 2.0 or C grade.', 'Masters5', '1 year', 'postgraduate', '1710998343png', '2024-03-21 02:19:03', '2024-03-21 02:19:03'),
(8, 'Certificate in Laws', 'Holders of a certificate of secondary education examination (CSEE) with at least four (4) passes in non-religious subjects including the English Language', 'Holders of a certificate of secondary education examination (CSEE) with at least four (4) passes in non-religious subjects including the English Language', 'non2', '1 year', 'non-degree', '1710998568jpg', '2024-03-21 02:22:48', '2024-03-21 02:22:48'),
(9, 'Certificate in Procurement and Supply', 'Holders of Certificate of Secondary Education Examination ( CSEE ) with at least four (4) passes in non-religious subjects', 'Holders of Certificate of Secondary Education Examination ( CSEE ) with at least four (4) passes in non-religious subjects', 'non3', '1 year', 'non-degree', '1710999300PNG', '2024-03-21 02:35:00', '2024-03-21 02:35:00'),
(10, 'Certificate in Social Work', 'Holders of Certificate of Secondary Education Examination (CSEE) with at least four (4) passes in non-religious subjects', 'Holders of Certificate of Secondary Education Examination (CSEE) with at least four (4) passes in non-religious subjects', 'non4', '1 year', 'non-degree', '1710999414png', '2024-03-21 02:36:54', '2024-03-21 02:36:54'),
(11, 'Ordinary Diploma in Business Administration', 'Holders of Basic Technician Certificate (NTA level 4) in Business Administration OR Advanced Certificate of Secondary Education Examination (ACSEE) with at least one Principal pass and one Subsidiary Principal subjects', 'Holders of Basic Technician Certificate (NTA level 4) in Business Administration OR Advanced Certificate of Secondary Education Examination (ACSEE) with at least one Principal pass and one Subsidiary Principal subjects', 'non5', '2 Years', 'non-degree', '1710999481jpg', '2024-03-21 02:38:01', '2024-03-21 02:38:01'),
(12, 'Ordinary Diploma in Law', 'Holders of Basic Technician Certificate (NTA Level 4) in Procurement and Supply, Logistics, Clearing and Forwarding OR Advanced Certificate of Secondary Education Examination (ACSEE) with at least one Principal pass and one Subsidiary in Principal subjects', 'Holders of Basic Technician Certificate (NTA Level 4) in Procurement and Supply, Logistics, Clearing and Forwarding OR Advanced Certificate of Secondary Education Examination (ACSEE) with at least one Principal pass and one Subsidiary in Principal subjects', 'non6', '2 Years', 'non-degree', '1710999546png', '2024-03-21 02:39:06', '2024-03-21 02:39:06'),
(13, 'Ordinary Diploma in Social Work', 'Holder of Basic Technician Certificate (NTA Level 4) in Social Work, Gender and Community Development OR Advanced Certificate of Secondary Education Examination (ACSEE) with at least one Principal pass and one Subsidiary in Principal subjects', 'Holder of Basic Technician Certificate (NTA Level 4) in Social Work, Gender and Community Development OR Advanced Certificate of Secondary Education Examination (ACSEE) with at least one Principal pass and one Subsidiary in Principal subjects', 'non7', '2 Years', 'non-degree', '1710999621jpg', '2024-03-21 02:40:21', '2024-03-21 02:40:21'),
(15, 'Ordinary Diploma in Procurement and Supply', 'Holders of Basic Technician Certificate (NTA Level 4) in Procurement and Supply, Logistics, Clearing and Forwarding OR Advanced Certificate of Secondary Education Examination (ACSEE) with at least one Principal pass and one Subsidiary in Principal subjects', 'Holders of Basic Technician Certificate (NTA Level 4) in Procurement and Supply, Logistics, Clearing and Forwarding OR Advanced Certificate of Secondary Education Examination (ACSEE) with at least one Principal pass and one Subsidiary in Principal subjects', 'non8', '2 Years', 'non-degree', '1710999767jpg', '2024-03-21 02:42:47', '2024-03-21 02:42:47'),
(16, 'Bachelor of Arts in Geography and Environmental', 'This is a Science course that is important to everyday life. It deals with the properties, composition and structure of elements and compounds used in daily life (water, oil, perfumes, soup, paper, minerals, plastics, drugs, etc. The Government policy of industrialization has resulted to a high demand for qualified chemists for Industries, Government Institutions and research Institutions in the country.\r\n\r\nTo this end, the course curriculum for BSc in General Chemistry prepares students to apply chemistry principles required for Industry and research. Prospective students will be exposed to practical oriented skills that prepare them to work in different sectors in the country.\r\nBSc. in General Chemistry graduates will possess strong analytical skills to operation, development methods and analyze chemicals using modern analytical tools. They will also be able to develop and monitor the production of quality chemical products. Students will work on a research project of their choice that creates products or solves community problems. This programme is for students with career interest related to chemical Industries and Research Institutions.\r\n\r\nProgramme Goals.\r\n\r\n1:  To equip students with concepts/principles of chemistry required for research and industry.\r\n 1: To provides the students with the skills of creating products used in daily life.', 'This is a Science course that', 'under1', '3 years', 'undergraduate', '1711142005.jpg', '2024-03-21 02:45:39', '2024-03-22 18:13:25'),
(17, 'Bachelor of Science in Applied Biology', 'This programme is for all those interested in the various areas of biology, ranging from Microbiology, cellular Biology, Biochemistry, molecular biology and Genetics, Biomedicine, Environmental and Agricultural Biology. Unlike a very broad-based, general biology degree at a university, this programme course will offer specific biological and technical knowledge which is of essential significance for industrial applications. In doing so our teaching is highly interdisciplinary aimed at giving a student insights into the many different areas of application of biology, and at the same time, a high level of problem-solving capability.\r\n\r\nPrincipally, the student will have an opportunity to combine a degree in biology with another degree in real life application of the knowledge acquired. In so doing, the Applied Biology degree at Mwenge Catholic University, is a strongly interdisciplinary programme. A research project during final year will accord the students more opportunity to practice Science writing and give additional openings to practice the knowledge gained in class. During the training, students will have an exposure to major on issues facing sustainability of human populations and natural resources.\r\n\r\nProgramme Goals:\r\n\r\n    To enable students to acquire and apply foundational knowledge, concepts, and theories in biology.\r\n 1: To facilitate collection, synthetization and critical evaluation of information in order to suggest solutions to environmental, agricultural, industrial and human health-related problems.\r\n 2:To enable acquisition a broad range of tools that can be applied in research and in the workplace to solve biological problems\r\n 3:To enable one to earn professional certifications in order to increase employment prospects.\r\n  4:To equip one with independent critical thinking and strong written communication skills, ready to integrate and apply acquired knowledge in the society\'s greatest glitches', 'olecular biology and Genetics, Biomedicine, Environmental and Agricultural Biology. Unlike a very broad-based, general biology degree at a university, this programme course will offer specific biological and technical knowledge which is of essential significance for industrial applications.', 'BScAPB', '3 years', 'undergraduate', '1724671626.jpg', '2024-03-21 02:49:27', '2024-08-26 08:27:06'),
(18, 'Bachelor of Arts with Education', 'Two principal passes in the following subjects: History, Geography, Kiswahili, English Language, Economics, Commerce, Accountancy or Advanced Mathematics', 'Two principal passes in the following subjects: History, Geography, Kiswahili, English Language, Economics, Commerce, Accountancy or Advanced Mathematics', 'under2', '3 years', 'undergraduate', '1711000229png', '2024-03-21 02:50:29', '2024-03-21 02:50:29'),
(19, 'Bachelor of Science with Education', 'Two principal passes in the following subjects: Physics, Chemistry, Biology, Advanced Mathematics, Geography or Computer Science', 'Two principal passes in the following subjects: Physics, Chemistry, Biology, Advanced Mathematics, Geography or Computer Science', 'under3', '3 years', 'undergraduate', '1711000305PNG', '2024-03-21 02:51:45', '2024-03-21 02:51:45'),
(20, 'Bachelor of Business Administration and Management', 'Two principal passes in the following subjects: History, Geography, Kiswahili, English Language, French, Arabic, Fine Arts, Economics, Commerce, Accountancy, Physics, Chemistry, Biology, Advanced Mathematics, Agriculture, Computer Science or Nutrition. In addition, an applicant must have a subsidiary in Advanced Mathematics/ Basic Applied Mathematics at A-Level or a minimum of “D” grade in Mathematics at O-Level.', 'Two principal passes in the following subjects: History, Geography, Kiswahili, English Language, French, Arabic, Fine Arts, Economics, Commerce, Accountancy, Physics, Chemistry, Biology, Advanced Mathematics, Agriculture, Computer Science or Nutrition. In addition, an applicant must have a subsidiary in Advanced Mathematics/ Basic Applied Mathematics at A-Level or a minimum of “D” grade in Mathematics at O-Level.', 'under4', '2 Years', 'undergraduate', '1711000370jpg', '2024-03-21 02:52:50', '2024-03-31 15:39:00'),
(21, 'Bachelor of Arts in Sociology and Social Work', 'Admission Requirements\r\n\r\nTwo principal passes in the following subjects: History, Geography, Kiswahili, English Language, French, Arabic, Fine Arts, Economics, Commerce, Accountancy, Physics, Chemistry, Biology, Advanced Mathematics, Agriculture, Computer Science or Nutrition.\r\nOR\r\n\r\nDiploma in Social Work, Gender and Development, Community Development, Development Studies, Counseling Psychology, Nursing, Education, Rural Development, Human Resource, Business Administration, Diplomacy or Law with an average of “B’’ or a minimum GPA of 3.0.', 'Admission Requirements\r\n\r\nTwo principal passes in the following subjects: History, Geography, Kiswahili, English Language, French, Arabic, Fine Arts, Economics, Commerce, Accountancy, Physics, Chemistry, Biology, Advanced Mathematics, Agriculture, Computer Science or Nutrition.\r\nOR\r\n\r\nDiploma in Social Work, Gender and Development, Community Development, Development Studies, Counseling Psychology, Nursing, Education, Rural Development, Human Resource, Business Administration, Diplomacy or Law with an average of “B’’ or a minimum GPA of 3.0.', 'under5', '3 years', 'undergraduate', '1711000451jpg', '2024-03-21 02:54:11', '2024-03-21 02:54:11'),
(22, 'Bachelor of Science in Mathematics and Statistics', 'Two principal passes, one in Advanced Mathematics and the other one from the following subjects: Economics, Commerce, Accountancy, Physics, Chemistry, Biology, Geography, Agriculture, Computer Science or Nutrition\r\nOR\r\n\r\nDiploma in Statistics, Applied Statistics, Biostatistics or Education with Mathematics as a teaching subject with an average of “B’’ or a minimum GPA of 3.0.', 'Two principal passes, one in Advanced Mathematics and the other one from the following subjects: Economics, Commerce, Accountancy, Physics, Chemistry, Biology, Geography, Agriculture, Computer Science or Nutrition\r\nOR\r\n\r\nDiploma in Statistics, Applied Statistics, Biostatistics or Education with Mathematics as a teaching subject with an average of “B’’ or a minimum GPA of 3.0.', 'under6', '3 years', 'undergraduate', '1711000515PNG', '2024-03-21 02:55:15', '2024-03-21 02:55:15'),
(23, 'Bachelor of Arts in Philosophy with Ethics', 'Two principal passes in the following subjects: History, Geography, Kiswahili, English Language, French, Arabic, Fine Arts, Economics, Commerce, Accountancy, Physics, Chemistry, Biology, Advanced Mathematics, Agriculture, Computer Science, Divinity or Nutrition.\r\nOR\r\n\r\nAny Diploma with an average of “B’’ or a minimum GPA of 3.0.', 'Two principal passes in the following subjects: History, Geography, Kiswahili, English Language, French, Arabic, Fine Arts, Economics, Commerce, Accountancy, Physics, Chemistry, Biology, Advanced Mathematics, Agriculture, Computer Science, Divinity or Nutrition.\r\nOR\r\n\r\nAny Diploma with an average of “B’’ or a minimum GPA of 3.0.', 'under7', '3 years', 'undergraduate', '1711000566PNG', '2024-03-21 02:56:06', '2024-03-21 02:56:06'),
(25, 'Bachelor of Arts in Project Planning and Management', 'Two principal passes in the following subjects: History, Geography, Kiswahili, English Language, French, Arabic, Fine Arts, Economics, Commerce, Accountancy, Physics, Chemistry, Biology, Advanced Mathematics, Agriculture, Computer Science, Divinity or Nutrition.\r\nOR\r\n\r\nDiploma in Development Planning, Accountancy, Business Administration, Records and Archives, Social work, Public Administration, Marketing Management, Local Government Accounting and Finance, Procurement and Supply, Cooperative Management and Accounting, Public Sector Financial Management, Development Administration and Management, Development Economics, Public Policy and Planning, Agriculture Economics, Education, Development Planning, Environment Planning, Investment Planning, Records Management, Community Development, Local Government Administration, Human Resource Management, Business Planning, Land Use Planning, Cartography, Project Training, Law, Gender and Development, Economics Planning, Health Science, Social Welfare, Wild Life Management, Urban Planning, Cooperative Management and Accounting with an average of “B’’ or a minimum GPA of 3.0.', 'Two principal passes in the following subjects: History, Geography, Kiswahili, English Language, French, Arabic, Fine Arts, Economics, Commerce, Accountancy, Physics, Chemistry, Biology, Advanced Mathematics, Agriculture, Computer Science, Divinity or Nutrition.\r\nOR\r\n\r\nDiploma in Development Planning, Accountancy, Business Administration, Records and Archives, Social work, Public Administration, Marketing Management, Local Government Accounting and Finance, Procurement and Supply, Cooperative Management and Accounting, Public Sector Financial Management, Development Administration and Management, Development Economics, Public Policy and Planning, Agriculture Economics, Education, Development Planning, Environment Planning, Investment Planning, Records Management, Community Development, Local Government Administration, Human Resource Management, Business Planning, Land Use Planning, Cartography, Project Training, Law, Gender and Development, Economics Planning, Health Science, Social Welfare, Wild Life Management, Urban Planning, Cooperative Management and Accounting with an average of “B’’ or a minimum GPA of 3.0.', 'under8', '3 years', 'undergraduate', '1711000668jpg', '2024-03-21 02:57:48', '2024-03-21 02:57:48'),
(26, 'Bachelor of Science in Computer Science', 'Two principal passes in the following subjects: Geography, Economics, Physics, Chemistry, Biology, Advanced Mathematics, Agriculture or Computer Science.\r\nOR\r\n\r\nDiploma in ICT, Computer Science, Information Systems, Software Engineering, Business Informatics, Computer Engineering or Telecommunication Engineering with an average of “B’’ or a minimum GPA of 3.0.', 'Two principal passes in the following subjects: Geography, Economics, Physics, Chemistry, Biology, Advanced Mathematics, Agriculture or Computer Science.\r\nOR\r\n\r\nDiploma in ICT, Computer Science, Information Systems, Software Engineering, Business Informatics, Computer Engineering or Telecommunication Engineering with an average of “B’’ or a minimum GPA of 3.0.', 'under9', '3 years', 'undergraduate', '1711000749jpg', '2024-03-21 02:59:09', '2024-03-21 02:59:09'),
(27, 'Bachelor of Science in Chemistry', 'Two principal passes, one in Chemistry and in one of the following subjects: Geography, Physics, Advanced Mathematics, Biology, Agriculture, Computer Science or Nutrition.\r\nOR\r\n\r\nDiploma in Education (Science), Pharmaceutical Sciences, Chemistry or Laboratory Technology with an average of “B’’ or a minimum GPA of 3.0.', 'Two principal passes, one in Chemistry and in one of the following subjects: Geography, Physics, Advanced Mathematics, Biology, Agriculture, Computer Science or Nutrition.\r\nOR\r\n\r\nDiploma in Education (Science), Pharmaceutical Sciences, Chemistry or Laboratory Technology with an average of “B’’ or a minimum GPA of 3.0.', 'chemistry', '3 years', 'undergraduate', '1711014303.jpg', '2024-03-21 03:01:53', '2024-03-31 15:51:11'),
(28, 'Bachelor of Science in Applied Biology', 'Two principal passes, one in Biology and in one of the following subjects: Geography, Physics, Advanced Mathematics, Chemistry, Agriculture, Computer Science or Nutrition.\r\n\r\nOR.\r\n\r\nDiploma in Education, Agriculture, Forestry, Aquaculture or Biological Sciences with an average of “B’’ or a minimum GPA of 3,0', 'Two principal passes, one in Biology and in one of the following subjects: Geography, Physics, Advanced Mathematics, Chemistry, Agriculture, Computer Science or Nutrition.\r\nOR.\r\n\r\nDiploma in Education, Agriculture, Forestry, Aquaculture or Biological Sciences with an average of “B’’ or a minimum GPA of 3.0.', 'bios12', '3 years', 'undergraduate', '1711015838.jpg', '2024-03-21 03:03:18', '2024-03-21 07:10:58'),
(29, 'Bachelor of Laws', 'Two principal passes in the following subjects: History, Geography, Kiswahili, English Language, French, Arabic, Fine Arts, Economics, Commerce, Accountancy or Advanced Mathematics. If one of the principals is not English an applicant must have a minimum of “C” grade in English at O-Level or Foundation Programme of the OUT with a minimum GPA of 3.0.\r\nOR.\r\n\r\nDiploma in Law or Law Enforcement with an average of “B’’ or a minimum GPA of 3.0.', 'Two principal passes in the following subjects: History, Geography, Kiswahili, English Language, French, Arabic, Fine Arts, Economics, Commerce, Accountancy or Advanced Mathematics. If one of the principals is not English an applicant must have a minimum of “C” grade in English at O-Level or Foundation Programme of the OUT with a minimum GPA of 3.0.\r\nOR.\r\n\r\nDiploma in Law or Law Enforcement with an average of “B’’ or a minimum GPA of 3.0.', 'LLB', '3 years', 'undergraduate', '1711001060jpg', '2024-03-21 03:04:20', '2024-03-31 04:23:32'),
(30, 'Bachelor of Procurement and Supply Chain Management', 'Two principal passes in the following subjects: History, Geography, Kiswahili, English Language, French, Arabic, Fine Arts, Economics, Commerce, Accountancy, Physics, Chemistry, Biology, Advanced Mathematics, Agriculture, Computer Science or Nutrition.\r\nOR\r\n\r\nDiploma in Procurement and Logistics Management, Logistics and Transport Management, Freight Clearing and Forwarding, Accounting, Business Administration or Information and Communication Technology with an average of “B’’ or a minimum GPA of 3.0. OR Foundation Certificate of The OUT with a minimum GPA of 3.0.', 'Two principal passes in the following subjects: History, Geography, Kiswahili, English Language, French, Arabic, Fine Arts, Economics, Commerce, Accountancy, Physics, Chemistry, Biology, Advanced Mathematics, Agriculture, Computer Science or Nutrition.\r\nOR\r\n\r\nDiploma in Procurement and Logistics Management, Logistics and Transport Management, Freight Clearing and Forwarding, Accounting, Business Administration or Information and Communication Technology with an average of “B’’ or a minimum GPA of 3.0. OR Foundation Certificate of The OUT with a minimum GPA of 3.0.', 'chain', '3 years', 'undergraduate', '1711001157jpg', '2024-03-21 03:05:57', '2024-03-21 03:05:57'),
(31, 'Bachelor of Accounting and Finance', 'Two principal passes in the following subjects: History, Geography, Economics, Commerce, Accountancy, Physics, Chemistry, Biology or Advanced Mathematics. If one of the principals is not Advanced Mathematics an applicant must have a subsidiary pass in Advanced Mathematics/Basic Applied Mathematics at A-Level or a “D” grade in Basic Mathematics at O-Level.\r\nOR\r\n\r\nDiploma in Business Administration, Marketing, Social Studies, Industrial Relations, Economic Studies, Public Sector Finance Management, Information Technology with Accounting, Human Resources, Management, Financial Administration, Local Government Accounting and Finance, Insurance and Risk Management, Customs and Tax Management, Freight Clearing and Forwarding, Statistics, Business Management and Logistic Management or Banking and Finance, Accountancy Procurement and Supplies Management with an average of “B’’ or a minimum GPA of 3.0. OR Foundation Programme of The OUT with a minimum of GPA of 3.0 in Business Cluster.', 'Two principal passes in the following subjects: History, Geography, Economics, Commerce, Accountancy, Physics, Chemistry, Biology or Advanced Mathematics. If one of the principals is not Advanced Mathematics an applicant must have a subsidiary pass in Advanced Mathematics/Basic Applied Mathematics at A-Level or a “D” grade in Basic Mathematics at O-Level.\r\nOR\r\n\r\nDiploma in Business Administration, Marketing, Social Studies, Industrial Relations, Economic Studies, Public Sector Finance Management, Information Technology with Accounting, Human Resources, Management, Financial Administration, Local Government Accounting and Finance, Insurance and Risk Management, Customs and Tax Management, Freight Clearing and Forwarding, Statistics, Business Management and Logistic Management or Banking and Finance, Accountancy Procurement and Supplies Management with an average of “B’’ or a minimum GPA of 3.0. OR Foundation Programme of The OUT with a minimum of GPA of 3.0 in Business Cluster.', 'accounts', '3 years', 'undergraduate', '1711001233png', '2024-03-21 03:07:13', '2024-03-21 03:07:13'),
(32, 'Bachelor of Arts in Social Work and Human Rights', 'Two principal passes in the following subjects: History, Geography, Kiswahili, English Language, French, Arabic, Fine Arts, Economics, Commerce, Accountancy, Physics, Chemistry, Biology, Advanced Mathematics, Agriculture, Computer Science or Nutrition.\r\nOR\r\n\r\nDiploma in Social work, Law, Community development, Counseling psychology, Early Childhood Education, Nursing, Education, Gender studies, Rural development, Development studies, Project planning management and Social security with an average of “B’’ or a minimum GPA of 3.0. OR Foundation Programme of The OUT with a minimum of GPA of 3.0', 'Two principal passes in the following subjects: History, Geography, Kiswahili, English Language, French, Arabic, Fine Arts, Economics, Commerce, Accountancy, Physics, Chemistry, Biology, Advanced Mathematics, Agriculture, Computer Science or Nutrition.\r\nOR\r\n\r\nDiploma in Social work, Law, Community development, Counseling psychology, Early Childhood Education, Nursing, Education, Gender studies, Rural development, Development studies, Project planning management and Social security with an average of “B’’ or a minimum GPA of 3.0. OR Foundation Programme of The OUT with a minimum of GPA of 3.0', 'social work', '3 years', 'undergraduate', '1711001301jpeg', '2024-03-21 03:08:21', '2024-03-21 03:08:21');

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
  `speaker_fullname` varchar(255) NOT NULL,
  `speaker_profession` varchar(255) NOT NULL,
  `speaker_info` text NOT NULL,
  `speaker_photo` varchar(255) DEFAULT NULL,
  `event_cost` varchar(255) NOT NULL,
  `event_date` date NOT NULL,
  `eventStart_time` time NOT NULL,
  `eventEnd_time` time NOT NULL,
  `event_location` varchar(255) NOT NULL,
  `event_organizer` varchar(255) NOT NULL,
  `total_slots` varchar(255) NOT NULL,
  `booked_slots` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_title`, `event_category`, `event_description`, `event_image`, `speaker_fullname`, `speaker_profession`, `speaker_info`, `speaker_photo`, `event_cost`, `event_date`, `eventStart_time`, `eventEnd_time`, `event_location`, `event_organizer`, `total_slots`, `booked_slots`, `created_at`, `updated_at`) VALUES
(1, 'MWECAU International Conference', 'academic', 'ss', '1710499992jpg', 'Athanas Sing\'ambi', 'Assitant Lecturer', 'naming name', NULL, 'code', '2023-03-01', '10:23:00', '12:23:00', 'mwenge', 'mwecau', '12', '12', '2024-03-15 07:53:12', '2024-03-15 07:53:12'),
(3, 'MWECAU International Conference', 'Event Category', 'clear', '1710499992jpg', 'Suleiman shaban', 'Developer', 'Please provide details about the main Organizer or Speaker of the event', '1710501976jpg', '36', '2024-03-15', '12:23:00', '12:23:00', 'Mwenge catholic university', 'Mwecau', '12', '12', '2024-03-15 08:26:16', '2024-09-06 11:31:37'),
(4, 'Mwecau 19th Graduation Ceremony', 'culture', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur iusto explicabo debitis optio\nerror commodi nihil unde ea placeat minus modi quod, dolorem, voluptatibus dolor ratione doloribus sint nostrum. Reiciendis.', '1710499992jpg', 'Temu john', 'Mechanical Engineer', 'lkm', '1710502114jpg', '1233', '2024-03-15', '10:23:00', '12:23:00', 'ngorongoro', 'tanapa', '12', '12', '2024-03-15 08:28:34', '2024-03-15 08:28:34');

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
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `header` varchar(255) DEFAULT NULL,
  `sub_header` varchar(255) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `page` varchar(255) DEFAULT NULL,
  `image_section` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `header`, `sub_header`, `description`, `page`, `image_section`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Discover the world of possibilities with MWECAU', 'Discover the world of possibility with MWECAU', NULL, 'home', 'homeslider', '1725868680-BANNER-WEB-CONF.jpg', '2024-08-26 06:27:38', '2024-09-09 04:58:00'),
(2, 'Postgraduate Admissions', NULL, 'Whatever you\'re seeking from your college experience, you\'ll find it at Mwenge Catholic University.', 'home', 'homeprograms', '1724832606-BBZV6239.JPG', '2024-08-26 06:57:11', '2024-08-28 05:10:06'),
(3, 'Undergraduate Admissions', NULL, 'Whatever you\'re seeking from your college experience, you\'ll find it at Mwenge Catholic University.', 'home', 'homeprograms', '1724788003-LXKC1912.JPG', '2024-08-26 07:13:51', '2024-08-27 16:46:43'),
(4, 'Non-Degree Admission', NULL, 'Whatever you\'re seeking from your college experience, you\'ll find it at Mwenge Catholic University.', 'home', 'homeprograms', '1724767041-COII6861.JPG', '2024-08-26 08:13:07', '2024-08-27 10:57:21'),
(5, NULL, NULL, NULL, 'home', 'homeslider', '1725624100-BANNER-WEB-CONFIRM-3.jpg', '2024-08-26 08:23:42', '2024-09-06 09:01:40'),
(6, NULL, NULL, NULL, 'course', 'course-banner', '1725858684-BANNER APPLY NOW 2.jpg', '2024-08-26 08:34:21', '2024-09-09 02:11:24'),
(7, 'undergraduate', NULL, NULL, 'academics', 'academics-undergraduate', '1724922980-FRUZ9645.JPG', '2024-08-26 08:46:11', '2024-08-29 06:16:20'),
(8, 'Discover the world of possibilities with MWECAU', NULL, NULL, 'home', 'homeslider', '1725890640-BANNER-WEB-moja.jpg', '2024-08-27 16:57:39', '2024-09-09 11:04:00'),
(9, 'postgraduate', NULL, NULL, 'academics', 'academics-postgraduate', '1724922911-RELA5493.JPG', '2024-08-27 18:03:29', '2024-08-29 06:15:11'),
(10, 'non-degree', NULL, NULL, 'academics', 'academics-non-degree', '1724923065-KRDT0052.JPG', '2024-08-27 18:06:30', '2024-08-29 06:17:45'),
(11, NULL, NULL, NULL, 'ict', 'ict-banner', '1724919356-TOFE6174.JPG', '2024-08-29 05:15:56', '2024-08-29 05:15:56'),
(12, NULL, NULL, NULL, 'undergraduate', 'courses-banner', '1724959911-QRSN5596.JPG', '2024-08-29 16:31:51', '2024-08-29 16:31:51'),
(14, NULL, NULL, NULL, 'non-degree', 'homeslider', '1724960013-GAZL4076.JPG', '2024-08-29 16:33:33', '2024-08-29 16:33:33'),
(15, 'Discover the world of possibilities with MWECAU', NULL, NULL, 'home', 'homeslider', '1725891420-BANNER-WEB-two.jpgGGGGG.jpg', '2024-09-05 04:13:59', '2024-09-09 11:17:00'),
(17, NULL, NULL, NULL, 'campus-life', 'campus-life', '1725959260-BANNER-WEB-CONFIRM-3-CAMPUS-LIFE.jpg', '2024-09-09 02:16:21', '2024-09-10 06:07:40'),
(21, NULL, NULL, NULL, 'postgraduate', 'homeprograms', '1725958279-OMWL9908.JPG', '2024-09-10 05:51:19', '2024-09-10 05:51:19');

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
(13, '2024_03_25_173805_create_pdfs_table', 8),
(14, '2024_03_26_004744_create_pdfs_table', 9),
(15, '2024_08_16_130846_create_images_table', 10),
(16, '2024_08_16_144054_create_images_table', 11),
(17, '2024_08_26_091517_create_images_table', 12),
(18, '2024_08_27_084912_create_statistics_table', 13),
(19, '2024_08_27_111724_create_news_updates_table', 14),
(20, '2024_09_09_100421_create_research_table', 15);

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
(1, 'The 16 MWECAU Graduation Ceremony', 'We are delighted to announce that Mwenge Catholic University will celebrate its 16th Graduation Ceremony on Saturday, the 25th of November, 2023. This significant event will commence with a Holy Mass at 08:00 AM, to be followed by a grandiose Academic Procession at 11:00 AM.', '2023-08-09', '1725855559_Graduation Announcement 2023.pdf', '2024-09-09 01:19:19', '2024-09-09 01:19:19'),
(2, 'VACANCY ANNOUNCEMENT Deadline 25 Feb. 2024', 'VACANCY ANNOUNCEMENT Deadline 25 Feb. 2024', '2024-07-18', '1725856608_JOB ADVERT_FEB 21_2024(1).pdf', '2024-09-09 01:36:48', '2024-09-09 01:36:48'),
(3, 'SUPP/SPECIAL NON-DEGREE TIMETABLE', 'SUPP/SPECIAL NON-DEGREE TIMETABLE', '2024-08-07', '1725856829_2023-2024 Supp, Special - Non-degree.pdf', '2024-09-09 01:40:29', '2024-09-09 01:40:29'),
(4, 'Non Degree Results Semester 2', 'Non Degree Results Semester 2', '2024-07-15', NULL, '2024-09-09 01:42:51', '2024-09-09 01:42:51'),
(5, 'MWECAU Job Advert July 2024', NULL, '2024-08-05', NULL, '2024-09-09 01:44:40', '2024-09-09 01:44:40'),
(6, 'Selected Applicants Round 1 Degree', NULL, '2024-09-03', '1725857154_Selected-Applicants-Round-1-Degree.pdf', '2024-09-09 01:45:54', '2024-09-09 01:45:54');

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
-- Table structure for table `pdfs`
--

CREATE TABLE `pdfs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pdfs`
--

INSERT INTO `pdfs` (`id`, `file_name`, `file_path`, `created_at`, `updated_at`) VALUES
(1, 'Intro coding theory.pdf', '1711414312_Intro coding theory.pdf', '2024-03-25 21:51:52', '2024-03-25 21:51:52'),
(2, 'RTFM Red Team Field Manual v2 -- Ben Clark & Nick Downer.pdf', '1711414716_RTFM Red Team Field Manual v2 -- Ben Clark & Nick Downer.pdf', '2024-03-25 21:58:36', '2024-03-25 21:58:36'),
(3, '2.3 Invisible C-WPS Office.docx', '1711415165_2.3 Invisible C-WPS Office.docx', '2024-03-25 22:06:05', '2024-03-25 22:06:05'),
(4, 'Lecture 2 -INFORMATICS.pptx', '1711415381_Lecture 2 -INFORMATICS.pptx', '2024-03-25 22:09:41', '2024-03-25 22:09:41'),
(5, 'download.pdf', '1716479728_download.pdf', '2024-05-23 12:55:28', '2024-05-23 12:55:28');

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
(1, 'Bega Kwa Bega: building climate-smart, biodiverse, resilient and inclusive agroforestry systems in Tanzania’s mountain environments', 'This project aims to improve livelihoods, biodiversity and carbon sequestration in the mountainous environments of Northern Tanzania by building climate-smart, resilient and inclusive farming systems using indigenous trees. Moreover, we aim to improve the situation for vulnerable groups, in casu single headed households and special needs groups, by restoring ecosystem services and by improving and diversifying agroforestry production. The project is inspired by the outcomes of the VLIR-UOS SI LiveLabLink project and will strengthen research and outreach capacity and infrastructure at MWECAU by joint research, by development of demo\'s and digital tools, and by establishing networks with NGO’s for upscaling of results.', 'outreach', '2024-09-09 10:16:50', '2024-09-09 10:46:43'),
(2, 'Mtu Ni Watu: Enhancing nutrition of vulnerable groups in agroforestry systems in Northern Mountains of Tanzania via collaboration for better dairy cattle management.', 'This project aims to improve agro-ecosystem quality as well as nutrition in the agroforestry systems of the Northern Mountains of Tanzania. Our aim is to integrate and enhance livestock health and productivity under a zero-grazing system. By collaborating between established and emerging universities, we aim to strengthening the research and outreach capacity of MWECAU through joint research, focusing on record keeping, cattle health, breeds and nutritious animal feeds for enhanced milk quality and quantity. Moreover, we aim to improve the situation for vulnerable groups, in casu single-headed households and special needs groups, by improving their access to protein-rich food. The project is inspired by the outcomes of the VLIR-UOS SI LiveLabLink, and extends upon the scope of the VLIR-UOS Bega Kwa Bega Team project to build more inclusive and sustainable agroforestry systems in northern Tanzania.', 'project', '2024-09-09 10:18:28', '2024-09-09 10:18:28'),
(3, 'Active Citizenship and Gender Equality through International Teacher Education (CIGETE)', 'With this project, we aim to improve teacher education through international collaboration on topics related to active citizenship and gender equality. The main focus will be on student and staff exchange between Tanzania and Norway. The project coordinator will be Dr. Prisca Bruno Massao, associate professor in Social Science/Sociology at the Faculty of Education, Inland Norway University of Applied Sciences (INN University).\r\n\r\nThe partner institutions are Mwenge Catholic University (MWECAU) in Moshi, Marangu Teachers College (MTC) and Darajani Secondary School (Darajani) in Marangu, all three located in the Kilimanjaro region in the Northern part of Tanzania. During the implementation of the project we also aim at creating new partner schools in Tanzania for future teaching practice for INN University students in order to ensure sustainability of our collaboration even after the project completion.\r\n\r\nThe project target groups are Norwegian elementary school student teachers (MGLU) in social science, humanities and music subjects and Tanzanian student teachers from related subjects, as well as staff from all the institutions involved in the project. However, the project is open for broader interdisciplinary subjects that facilitate the implementation of the national curricula from both countries.', 'project', '2024-09-09 10:19:33', '2024-09-09 10:19:33'),
(4, 'Sustainable Business and Employability through Active Pedagogy in Higher Education Institutions (SUSIE)', 'Towards sustainable higher education institutions in Tanzania: SUSIE project experiences\r\n\r\nSUSIE, Sustainable Business and Employability through HEIs’ Innovation Pedagogy, was comprised three Tanzanian HEIs—Tumaini University of Dar es Salaam College (TUDARCo), Moshi Co-operative University (MoCU), and Mwenge Catholic University (MWECAU) alongside the Finnish Turku University of Applied Sciences (Turku UAS), which served as the project coordinator. The consortium did not arise from the vacuum, but the foundation rests on former development initiatives during which partners had not only established confidential relationships but also invested in capacity building.', 'project', '2024-09-09 10:58:20', '2024-09-09 10:58:20'),
(5, 'Towards sustained service-learning institutionalization: Understanding Advances Opportunities and Challenges at Mwenge Catholic University, Tanzania', 'The research project sought to assess the process of institutionalization at Mwenge Catholic University (MWECAU) towards sustained service-learning by understanding advances, opportunities and challenges. The objectives of the project was to identify philosophy and mission of service-learning at MWECAU, to examine faculty and students support in institutionalization process at MWECAU, to analyze community partnership and participation in institutionalization and implementation of SL at MWECAU, to determine institutional support for service-learning institutionalization at MWECAU and to evaluate advances and impendent of institutionalization at MWECAU.', 'project', '2024-09-09 10:58:50', '2024-09-09 10:58:50');

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` enum('Mr','Ms','Dr','Prof') NOT NULL DEFAULT 'Mr',
  `staffID` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `aboutStaff` text NOT NULL,
  `academicQualification` text NOT NULL,
  `department` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` enum('male','female') NOT NULL DEFAULT 'female',
  `nationality` varchar(255) NOT NULL,
  `language` enum('swahili','english','swahili and english') NOT NULL DEFAULT 'english',
  `staffProfile_picture` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `title`, `staffID`, `firstName`, `lastName`, `aboutStaff`, `academicQualification`, `department`, `email`, `phone`, `gender`, `nationality`, `language`, `staffProfile_picture`, `created_at`, `updated_at`) VALUES
(2, 'Mr', 'MWECAU-0152', 'Athanas', 'Sing\'ambi', 'Master of Business Administration in Marketing Management\r\nBachelor of Public Relations and Marketing', 'Communication Strategies\r\nMarketing', 'PRO/DEBS', 'athanas@mwecau.ac.tz', '+255755154215', 'male', 'Tanzania', 'english', '1714839220.png', '2024-03-22 09:08:42', '2024-05-04 13:13:48'),
(4, 'Dr', 'MWECAU-0152', 'Daniel', 'Temu', 'Prudence is cognisant of strategic public relations practice, strategic communication, communication research, media management, media ethics, and several other areas of media studies (both traditional media and new media). Prudence has a rich  academic and research history accumulated from the following higher learning institutions in Tanzania', 'Tutorial Assistant Fellow, St Augustine University of Tanzania (SAUT), Mwanza main campus, Faculty of Social Sciences, Department of PR and Advertising (2008-2010).\r\n\r\nAssistant Lecturer (six years), St Augustine University of Tanzania (SAUT), Mwanza main campus, Faculty of Social Sciences, Department of PR and Advertising (2011-2016).\r\n\r\nPart-time Assistant Lecturer (one year), Institute of Rular Development Planning (IRDP), Lake Zone Center (LZC) (2016).\r\n\r\nAssistant Lecturer (two years), Tumaini University Dar es Salaam College (TUDARCo), Department of Mass Communication (2016-2018).\r\n\r\nPart-time Assistant Lecturer (two years), University of Dar es Salaam (UDSM), School of Journalism and Mass Communication (SJMC) (2016-2018), and\r\n\r\nCurrently Lecturer at The University of Dodoma (UDOM), Department of Arts and Media Studies (AMS) (2018 onwards).', 'DNSIT', 'djtemu@gmail.com', '+255624861910', 'male', 'tanzania', 'swahili', '1711881097.png', '2024-03-31 04:31:43', '2024-05-06 08:23:17');

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
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `courses_course_code_unique` (`course_code`);

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
-- Indexes for table `images`
--
ALTER TABLE `images`
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
-- Indexes for table `pdfs`
--
ALTER TABLE `pdfs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `research`
--
ALTER TABLE `research`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
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
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `news_updates`
--
ALTER TABLE `news_updates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pdfs`
--
ALTER TABLE `pdfs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `research`
--
ALTER TABLE `research`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
