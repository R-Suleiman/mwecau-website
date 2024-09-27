-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 26, 2024 at 08:25 AM
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
(1, 'About', '<p><strong>Welcome to Mwenge Catholic University (MWECAU),</strong> a University that gives you the opportunity to pursue quality education in truthfulness and <span style=\"font-family:\'Courier New\', Courier, monospace;\">f</span><span style=\"font-family:Arial, Helvetica, sans-serif;\">reedom of thought, so that you may gain professional competency to boldly serve and contribute to the development of humanity. In order to prepare for your future career or pursue academic and professional advancement, be it education, administration, sciences, law and/or social sciences, think of MWECAU as your </span><span style=\"font-family:\'Trebuchet MS\', Helvetica, sans-serif;\">best choice.&nbsp;</span></p><p>Our community is being called to reimagine the future. As the only university where a renowned design school comes together with premier colleges, we are making learning more relevant and transformational. We are enriched by the wide range of experiences and perspectives of our students, faculty, staff and alumni. Preparing students to make meaningful contributions to society as leaders in a complex world.</p>', NULL, '2024-09-13 04:50:20');

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
(10, NULL, 'joining-instruction', NULL, '1727246769-Joining-Instructions-for-postgraduate-students-2022-2023.pdf', '2024-09-25 03:46:09', '2024-09-25 03:46:09', 'postgraduate'),
(11, NULL, 'joining-instruction', NULL, '1727246789-Joining Instructions for Undergraduate 2024-2025.pdf', '2024-09-25 03:46:29', '2024-09-25 03:46:29', 'undergraduate'),
(12, NULL, 'joining-instruction', NULL, '1727246805-Joining Instructions for Cert and Dip 2024-2025.pdf', '2024-09-25 03:46:45', '2024-09-25 03:46:45', 'non-degree'),
(13, 'Almanac', 'almanac', NULL, '1727247760-ALMANAC FOR THE ACADEMIC YEAR 2024-2025.pdf', '2024-09-25 04:02:40', '2024-09-25 04:02:40', 'undergraduate');

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
(1, '17th MWECAU Graduation Ceremony', 'Event Category', '17th MWECAU Graduation Ceremony\r\nWe are pleased to inform the graduates of the 2023/2024 academic year and the general public that Mwenge Catholic University will hold its 17th Graduation Ceremony on Saturday, 23rd November 2024 at the University Campus, from 8:00 a.m. to 2:00 p.m. The event will commence with a Holy Mass at 8:00 a.m. followed by the Academic Procession at 10:00 a.m.\r\nGraduation gowns and booklets will be available for collection from Wednesday, 20th November to Friday, 22nd November 2024. Graduands are reminded that the return of gowns will take place from Monday, 25th November to Wednesday, 20th November 2024. A late return will incur a penalty of Tsh 10,000 per day.\r\nA compulsory graduation rehearsal will be held on Friday, 25th November 2024, at 2:00 p.m. All graduates are required to attend.\r\nWe cordially invite you to join us in celebrating this significant academic event.', '1727243662-GRAD.jpg', '1727244218-Press release Graduation 2024.pdf', 'MWECAU', NULL, 'Mwenge Catholic University', '1727178115-png', '0', '2024-11-23', '08:30:00', '14:00:00', 'Mwenge Ctholic University', 'MWECAU', '-', '-', '2024-09-24 06:52:12', '2024-09-25 03:03:38'),
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
  `link` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `header`, `sub_header`, `description`, `page`, `image_section`, `image`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Discover the world of possibilities with MWECAU', 'Discover the world of possibility with MWECAU', NULL, 'home', 'homeslider', '1725868680-BANNER-WEB-CONF.jpg', NULL, '2024-08-26 06:27:38', '2024-09-09 04:58:00'),
(2, 'Postgraduate Admissions', NULL, 'Whatever you\'re seeking from your college experience, you\'ll find it at Mwenge Catholic University.', 'home', 'homeprograms', '1724832606-BBZV6239.JPG', NULL, '2024-08-26 06:57:11', '2024-08-28 05:10:06'),
(3, 'Undergraduate Admissions', NULL, 'Whatever you\'re seeking from your college experience, you\'ll find it at Mwenge Catholic University.', 'home', 'homeprograms', '1724788003-LXKC1912.JPG', NULL, '2024-08-26 07:13:51', '2024-08-27 16:46:43'),
(4, 'Non-Degree Admission', NULL, 'Whatever you\'re seeking from your college experience, you\'ll find it at Mwenge Catholic University.', 'home', 'homeprograms', '1724767041-COII6861.JPG', NULL, '2024-08-26 08:13:07', '2024-08-27 10:57:21'),
(5, NULL, NULL, NULL, 'home', 'homeslider', '1725624100-BANNER-WEB-CONFIRM-3.jpg', NULL, '2024-08-26 08:23:42', '2024-09-06 09:01:40'),
(6, NULL, NULL, NULL, 'course', 'course-banner', '1725858684-BANNER APPLY NOW 2.jpg', NULL, '2024-08-26 08:34:21', '2024-09-09 02:11:24'),
(7, 'undergraduate', NULL, NULL, 'academics', 'academics-undergraduate', '1724922980-FRUZ9645.JPG', NULL, '2024-08-26 08:46:11', '2024-08-29 06:16:20'),
(8, 'Discover the world of possibilities with MWECAU', NULL, NULL, 'home', 'homeslider', '1725890640-BANNER-WEB-moja.jpg', NULL, '2024-08-27 16:57:39', '2024-09-09 11:04:00'),
(9, 'postgraduate', NULL, NULL, 'academics', 'academics-postgraduate', '1724922911-RELA5493.JPG', NULL, '2024-08-27 18:03:29', '2024-08-29 06:15:11'),
(10, 'non-degree', NULL, NULL, 'academics', 'academics-non-degree', '1724923065-KRDT0052.JPG', NULL, '2024-08-27 18:06:30', '2024-08-29 06:17:45'),
(11, NULL, NULL, NULL, 'ict', 'ict-banner', '1724919356-TOFE6174.JPG', NULL, '2024-08-29 05:15:56', '2024-08-29 05:15:56'),
(12, NULL, NULL, NULL, 'undergraduate', 'courses-banner', '1724959911-QRSN5596.JPG', NULL, '2024-08-29 16:31:51', '2024-08-29 16:31:51'),
(14, NULL, NULL, NULL, 'non-degree', 'homeslider', '1724960013-GAZL4076.JPG', NULL, '2024-08-29 16:33:33', '2024-08-29 16:33:33'),
(15, 'Discover the world of possibilities with MWECAU', NULL, NULL, 'home', 'homeslider', '1725891420-BANNER-WEB-two.jpgGGGGG.jpg', NULL, '2024-09-05 04:13:59', '2024-09-09 11:17:00'),
(17, NULL, NULL, NULL, 'campus-life', 'campus-life', '1725959260-BANNER-WEB-CONFIRM-3-CAMPUS-LIFE.jpg', NULL, '2024-09-09 02:16:21', '2024-09-10 06:07:40'),
(21, NULL, NULL, NULL, 'postgraduate', 'homeprograms', '1725958279-OMWL9908.JPG', NULL, '2024-09-10 05:51:19', '2024-09-10 05:51:19'),
(22, NULL, NULL, NULL, 'about', 'about-gallery', '1726232451-0J3A0402MWECAU.JPG', NULL, '2024-09-13 10:00:51', '2024-09-13 10:00:51'),
(23, NULL, NULL, NULL, 'about', 'about-partners', '1726233046-agroLab.png', 'https://www.agrolab.us/', '2024-09-13 10:10:46', '2024-09-13 10:10:46'),
(25, NULL, NULL, NULL, 'about', 'about-partners', '1726236905-ternet.png', 'https://www.ternet.or.tz/', '2024-09-13 11:15:05', '2024-09-13 11:15:05'),
(26, NULL, NULL, NULL, 'about', 'about-partners', '1726236966-misitu.png', 'https://www.tfs.go.tz/index.php/en', '2024-09-13 11:16:06', '2024-09-13 11:16:06'),
(27, NULL, NULL, NULL, 'about', 'about-partners', '1726237007-univervitate.jpg', 'https://www.uniservitate.org/', '2024-09-13 11:16:47', '2024-09-13 11:16:47'),
(28, NULL, NULL, NULL, 'about', 'about-partners', '1726237051-MIC.png', 'https://www.mic.ul.ie/', '2024-09-13 11:17:31', '2024-09-13 11:17:31'),
(29, NULL, NULL, NULL, 'about', 'about-partners', '1726237094-misereor.png', 'https://www.misereor.org/', '2024-09-13 11:18:14', '2024-09-13 11:18:14'),
(30, NULL, NULL, NULL, 'about', 'about-partners', '1726237140-porticus.png', 'https://www.porticus.com/en/home', '2024-09-13 11:19:00', '2024-09-13 11:19:00'),
(31, NULL, NULL, NULL, 'about', 'about-partners', '1726237174-walsh university.png', 'https://www.walsh.edu/', '2024-09-13 11:19:34', '2024-09-13 11:19:34'),
(32, NULL, NULL, NULL, 'about', 'about-partners', '1726237262-logo.svg', 'https://www.kuleuven.be/english/kuleuven/', '2024-09-13 11:21:02', '2024-09-13 11:21:02'),
(33, NULL, NULL, NULL, 'about', 'about-partners', '1726237311-cropped-cropped-UniKWebiste-Hi.png', 'https://unik.ac.ug/', '2024-09-13 11:21:51', '2024-09-13 11:21:51'),
(34, NULL, NULL, NULL, 'about', 'about-partners', '1726237525-inn-eng-logo.svg', 'https://www.inn.no/english/', '2024-09-13 11:25:25', '2024-09-13 11:25:25'),
(35, NULL, NULL, NULL, 'about', 'about-partners', '1726237563-turku-AMK.svg', 'https://www.tuas.fi/en/', '2024-09-13 11:26:03', '2024-09-13 11:26:03'),
(36, NULL, NULL, NULL, 'about', 'about-partners', '1726237594-susie.png', 'https://susie.turkuamk.fi/', '2024-09-13 11:26:34', '2024-09-13 11:26:34'),
(37, NULL, NULL, NULL, 'about', 'about-gallery', '1726237832-uni.jpg', NULL, '2024-09-13 11:30:32', '2024-09-13 11:30:32'),
(38, NULL, NULL, NULL, 'about', 'about-gallery', '1726238124-0J3A0411MWECAU.JPG', NULL, '2024-09-13 11:35:24', '2024-09-13 11:35:24'),
(39, NULL, NULL, NULL, 'about', 'about-gallery', '1726238173-0J3A0442MWECAU.JPG', NULL, '2024-09-13 11:36:13', '2024-09-13 11:36:13');

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
(27, '2024_09_25_040152_add_file_to_event_table', 22);

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
(4, 'Non Degree Results Semester 2', 'Non Degree Results Semester 2', '2024-07-15', '1725856608_JOB ADVERT_FEB 21_2024(1).pdf', '2024-09-09 01:42:51', '2024-09-09 01:42:51'),
(5, 'MWECAU Job Advert July 2024', 'Mwenge Catholic University (MWECAU) is a secular, private and non-profit institution of\nhigher learning owned and managed by the Tanzania Episcopal Conference (TEC). The\nUniversity offers holistic education based on profound principles of teaching and research, which\nis echoed through community service as a commitment of the University to the development of\nTanzania. MWECAU aims at training confident and self-motivated professionals, ready to work\nin various capacities in an ever-dynamic global society. MWECAU offers various academic\nprogrammes from Certificate, Diploma, Bachelors, Masters and PhD degrees. The University is\nlocated in Moshi about 10 kilometers north of Moshi Town, on the lower slopes of Mt.\nKilimanjaro, Tanzania.\nMWECAU invites dynamic and suitable qualified Tanzanians to fill the following vacant posts\nas mentioned below.', '2024-08-05', NULL, '2024-09-09 01:44:40', '2024-09-09 01:44:40'),
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
(1, 'Bega Kwa Bega: building climate-smart, biodiverse, resilient and inclusive agroforestry systems in Tanzania’s mountain environments', '<p>This project aims to improve livelihoods, biodiversity and carbon sequestration in the mountainous environments of Northern Tanzania by building climate-smart, resilient and inclusive farming systems using indigenous trees. Moreover, we aim to improve the situation for vulnerable groups, in casu single headed households and special needs groups, by restoring ecosystem services and by improving and diversifying agroforestry production. The project is inspired by the outcomes of the <strong>VLIR-UOS SI LiveLabLink </strong>project and will strengthen research and outreach capacity and infrastructure at <strong>MWECAU </strong>by joint research, by development of demo\'s and digital tools, and by establishing networks with NGO’s for upscaling...</p>', 'project', '2024-09-09 10:16:50', '2024-09-13 07:03:29'),
(2, 'Mtu Ni Watu: Enhancing nutrition of vulnerable groups in agroforestry systems in Northern Mountains of Tanzania via collaboration for better dairy cattle management.', 'This project aims to improve agro-ecosystem quality as well as nutrition in the agroforestry systems of the Northern Mountains of Tanzania. Our aim is to integrate and enhance livestock health and productivity under a zero-grazing system. By collaborating between established and emerging universities, we aim to strengthening the research and outreach capacity of MWECAU through joint research, focusing on record keeping, cattle health, breeds and nutritious animal feeds for enhanced milk quality and quantity. Moreover, we aim to improve the situation for vulnerable groups, in casu single-headed households and special needs groups, by improving their access to protein-rich food. The project is inspired by the outcomes of the VLIR-UOS SI LiveLabLink, and extends upon the scope of the VLIR-UOS Bega Kwa Bega Team project to build more inclusive and sustainable agroforestry systems in northern Tanzania.', 'project', '2024-09-09 10:18:28', '2024-09-09 10:18:28'),
(3, 'Active Citizenship and Gender Equality through International Teacher Education (CIGETE)', 'With this project, we aim to improve teacher education through international collaboration on topics related to active citizenship and gender equality. The main focus will be on student and staff exchange between Tanzania and Norway. The project coordinator will be Dr. Prisca Bruno Massao, associate professor in Social Science/Sociology at the Faculty of Education, Inland Norway University of Applied Sciences (INN University).\r\n\r\nThe partner institutions are Mwenge Catholic University (MWECAU) in Moshi, Marangu Teachers College (MTC) and Darajani Secondary School (Darajani) in Marangu, all three located in the Kilimanjaro region in the Northern part of Tanzania. During the implementation of the project we also aim at creating new partner schools in Tanzania for future teaching practice for INN University students in order to ensure sustainability of our collaboration even after the project completion.\r\n\r\nThe project target groups are Norwegian elementary school student teachers (MGLU) in social science, humanities and music subjects and Tanzanian student teachers from related subjects, as well as staff from all the institutions involved in the project. However, the project is open for broader interdisciplinary subjects that facilitate the implementation of the national curricula from both countries.', 'project', '2024-09-09 10:19:33', '2024-09-09 10:19:33'),
(4, 'Sustainable Business and Employability through Active Pedagogy in Higher Education Institutions (SUSIE)', 'Towards sustainable higher education institutions in Tanzania: SUSIE project experiences\r\n\r\nSUSIE, Sustainable Business and Employability through HEIs’ Innovation Pedagogy, was comprised three Tanzanian HEIs—Tumaini University of Dar es Salaam College (TUDARCo), Moshi Co-operative University (MoCU), and Mwenge Catholic University (MWECAU) alongside the Finnish Turku University of Applied Sciences (Turku UAS), which served as the project coordinator. The consortium did not arise from the vacuum, but the foundation rests on former development initiatives during which partners had not only established confidential relationships but also invested in capacity building.', 'project', '2024-09-09 10:58:20', '2024-09-09 10:58:20'),
(5, 'Towards sustained service-learning institutionalization: Understanding Advances Opportunities and Challenges at Mwenge Catholic University, Tanzania', 'The research project sought to assess the process of institutionalization at Mwenge Catholic University (MWECAU) towards sustained service-learning by understanding advances, opportunities and challenges. The objectives of the project was to identify philosophy and mission of service-learning at MWECAU, to examine faculty and students support in institutionalization process at MWECAU, to analyze community partnership and participation in institutionalization and implementation of SL at MWECAU, to determine institutional support for service-learning institutionalization at MWECAU and to evaluate advances and impendent of institutionalization at MWECAU.', 'project', '2024-09-09 10:58:50', '2024-09-09 10:58:50'),
(10, 'Designing Interdisciplinary Solutions for Urban Development and Enhanced Environmental Sustainability in Moshi Municipal Council- Student Workshop (Connecting Moshi Urban Pazuri)', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(33,37,41);\">Mwenge Catholic University (MWECAU) in Moshi Tanzania in Collaboration with Erasmus Brussels University of Applied Sciences and Arts (EhB) of Belgium were involved in Joint interdisciplinary workshop for students from both institutions to be held in Moshi, Kilimanjaro, Tanzania from 9th March to 17th March 2024. The theme of the workshop is sustainable urban area-development “</span><strong>Connecting for Moshi Urban Pazuri”.</strong><span style=\"background-color:rgb(255,255,255);color:rgb(33,37,41);\">&nbsp;The workshop will involve designing interdisciplinary solutions for urban development and enhanced environmental sustainability in Moshi.&nbsp;The students were involved in field excursions in Moshi urban including Uhuru Park. The field excursion at Uhuru Park took place on 15</span>th <span style=\"background-color:rgb(255,255,255);color:rgb(33,37,41);\">and 16</span>th<span style=\"background-color:rgb(255,255,255);color:rgb(33,37,41);\">&nbsp;March 2024. &nbsp;During the field tour 20 students from each institution were guided in designing interdisciplinary solutions for urban development and enhanced environmental sustainability in Moshi Municipal Council. &nbsp;The activity was supported by the team from department of Natural Resources and Environmental Conservation and Department of Urban&nbsp;Planning and Land Management of Moshi Municipal.</span></p>', 'outreach', '2024-09-25 07:01:39', '2024-09-25 07:01:39'),
(11, 'Never Drop the Mike Outreach Program', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(33,37,41);\">Never Drop the Microphone’ is a outreach program aimed at empowering youth in Tanzania to discover and utilize their talents and potentials towards self-determination and societal contribution. The initiative addresses the prevalent issue of youth unemployment by encouraging young people to focus on creativity and self-employment rather than solely seeking jobs. The outreach has two primary objectives. Firstly, it aims to awaken youths to their inherent talents and potentials through workshops and training sessions held in secondary schools and universities across Tanzania. By fostering a sense of ownership over their learning and decision-making, the outreach program equips youths with the confidence and autonomy needed to navigate modern society. This objective is important for nurturing engaged citizens capable of positively impacting their communities and supporting Sustainable Development Goals. Secondly, the outreach activities seek to raise awareness about the urgent impacts of climate change among youth. This is achieved through various activities such as concerts, talk shows, and community engagements like the ‘Walk Talk’ program, where experts meet with community members to discuss and address climate-related issues. By increasing awareness, the program aims to inspire sustainable practices and drive technological advancements in climate change solutions. To effectively communicate its actions, the program utilizes social media platforms and engages in educational initiatives such as creating informative posts, videos, and articles. It also organizes screenings, debates, and climate-themed projects in schools to further spread awareness and encourage active participation among youths and their families.</span></p>', 'outreach', '2024-09-25 07:02:30', '2024-09-25 07:02:30'),
(12, 'Sustainable tourism Outreach /workshop at  Materuni Village Community in Moshi District Council, Kilimanjaro Tanzania', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(33,37,41);\">On <strong>17</strong></span><strong>th</strong><span style=\"background-color:rgb(255,255,255);color:rgb(33,37,41);\"><strong>&nbsp;May 2024</strong> we were able to conduct workshop at Materuni Village Community on sustainable tourism practices, emphasizing the critical importance of preserving the environment, culture, and communities. &nbsp;There is increased number of tourists in the village attractions with less sustainable tourism practices.&nbsp;In partnership with Service Learning -MWECAU, and the Moshi District Council, the workshop aimed to empower tour guides with the essential knowledge, skills, and competencies required to champion responsible tourism initiatives in the village. Through this collaborative effort, participants were equipped to lead the way in fostering sustainable tourism practices that not only minimize ecological footprint but also enrich the culture and economy of the village.</span></p>', 'project', '2024-09-25 07:03:11', '2024-09-25 07:03:11');

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
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `courses_course_code_unique` (`course_code`);

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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `news_updates`
--
ALTER TABLE `news_updates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `research`
--
ALTER TABLE `research`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
