-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18 سبتمبر 2022 الساعة 09:59
-- إصدار الخادم: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `joblister`
--

-- --------------------------------------------------------

--
-- بنية الجدول `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'business'),
(2, 'Technology'),
(3, 'construction'),
(4, 'Markting');

-- --------------------------------------------------------

--
-- بنية الجدول `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `company` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `contact_user` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `jobs`
--

INSERT INTO `jobs` (`id`, `category_id`, `company`, `job_title`, `description`, `salary`, `location`, `contact_user`, `contact_email`, `post_date`) VALUES
(1, 1, 'smart technology', 'IT support', 'Accelerate Your Digital Transformation and Gain the Ability to Operate from Edge to Cloud. Bridge the Gap Between Your Digital Vision and Reality with Technology Services from HPE', '10K', 'jeddah', 'omar abdullah', 'omar@gmail.com', '2022-09-11 07:07:56'),
(2, 2, 'benladen', 'IT Servive', 'With more employees now working from home, we are standing by to help you provide uninterrupted system productivity and a seamless end-user experience.', '13K', 'Ryad', 'Asim', 'Asim@gmail.com', '2022-09-11 07:07:56'),
(3, 3, 'Amazon', 'Social Media', 'Social Blade is an American website that tracks social media statistics and analytics. Social Blade most notably tracks ', '5K', 'Abha', 'ahmed', 'ahmed@gmail.com', '2022-09-11 10:43:29'),
(8, 2, 'Babteen', 'Accountant', 'An accountant may either be hired for a firm that requires accounting services on a continuous basis, or may belong to an accounting firm that provides accounting consulting services to other firms.', '3K', 'Ryad', 'ahmed', 'ahmed@gmail.com', '2022-09-12 12:48:36'),
(9, 1, 'المركز السعوي للاعمال', 'محاسب', 'An accountant may either be hired for a firm that requires accounting services on a continuous basis, or may belong to an accounting firm that provides accounting consulting services to other firms.', '5،', 'Jeddah', 'محمد ابو طعيمة', 'ahmed@gmail.com', '2022-09-12 12:51:26'),
(10, 3, 'Bnyan', 'programmer', 'A computer programmer, sometimes referred to as a software developer, a software engineer, or a programmer, is a person who creates computer programs- often ...', '10K', 'Makkah', 'abdullah', 'a@smart.sa', '2022-09-12 13:03:45'),
(13, 3, 'Formela 11', 'security', 'here we have it. Using the concepts presented in the previous post we have broken that function into smaller pieces and encapsulated those pieces within a class. In doing so, we have provided significantly better (more flexible, less error-prone) function', '13K', 'Jeddah', 'Ahlam', 'Ahlam@gmail.com', '2022-09-13 10:20:59'),
(14, 1, 'Testing ', 'Testing', 'Note, that many languages are just under translation, and the untranslated parts are still in English. Also some translated parts might be outdated. The translation teams are open to contributions.', '6K', 'ALmadina City', 'Asim Aljehany', 'asim@gmail.com', '2022-09-13 13:32:02'),
(15, 1, 'Abdullatif Jameel', 'Manager', 'Abdul Latif Jameel is a family-owned diversified business founded in Saudi Arabia in 1945 by the late Sheikh Abdul Latif Jameel. Operating across 7 core business sectors, Abdul Latif Jameel has a presence in over 30 countries across 6 continents.', '10K', 'Jeddah', 'Abdullah ', 'Abdullah@gmail.com', '2022-09-15 06:56:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
