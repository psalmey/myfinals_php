-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2024 at 05:41 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `id` int(150) NOT NULL,
  `personal_id` int(150) NOT NULL,
  `start_year` int(150) NOT NULL,
  `end_year` text NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`id`, `personal_id`, `start_year`, `end_year`, `title`) VALUES
(1, 1001, 2010, '2016', 'Consistent Honor Student, With Honors'),
(2, 1001, 2010, '2016', 'Athlete of the Year'),
(3, 1001, 2016, '2020', 'Consistent Honor Student, With Honors'),
(4, 1001, 2016, '2020', 'Leadership Awardee'),
(5, 1001, 2016, '2020', 'Best in Conduct'),
(6, 1001, 2016, '2020', 'Athlete of the Year'),
(7, 1006, 2016, '2020', 'Best in ICT'),
(8, 1001, 2016, '2020', 'Best in Poster'),
(9, 1001, 2020, '2022', 'Consistent Honor Student, With Honors'),
(10, 1001, 2022, 'Present', 'Consistent Honor Student, Dean Lister (First Honor)');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(20) NOT NULL,
  `personal_id` int(120) NOT NULL,
  `school_name` text NOT NULL,
  `school_start_year` text NOT NULL,
  `school_end_year` text NOT NULL,
  `others` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `personal_id`, `school_name`, `school_start_year`, `school_end_year`, `others`) VALUES
(2, 1001, 'Rizal College of Taal', '2020', '2022', 'Secondary - Senior High School'),
(3, 1001, 'Banoyo National High School', '2016', '2020', 'Secondary - Junior High School'),
(4, 1001, 'Banoyo Elementary School', '2010', '2016', 'Elementary');

-- --------------------------------------------------------

--
-- Table structure for table `personal_information`
--

CREATE TABLE `personal_information` (
  `personal_id` int(20) NOT NULL,
  `name` text NOT NULL,
  `birthdate` date NOT NULL,
  `age` int(50) NOT NULL,
  `address` text NOT NULL,
  `mobile_number` text NOT NULL,
  `email` text NOT NULL,
  `course` text NOT NULL,
  `objective` text NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personal_information`
--

INSERT INTO `personal_information` (`personal_id`, `name`, `birthdate`, `age`, `address`, `mobile_number`, `email`, `course`, `objective`, `about`) VALUES
(1001, 'Psalm Ashley Andal', '2024-06-27', 0, 'Banoyo, San Luis, Batangas', '+639928015709', 'apsalmashley@gmail.com', 'Bachelor of Science in Computer Science', 'Seeking a dynamic role that allows me to seamlessly integrate my expertise in computer science with my passion for the arts. As a versatile student who wants to have a part-time, I aim to contribute to innovative projects where technology and creativity converge, bringing a unique blend of technical skills and artistic flair to drive impactful and visually compelling outcomes.', 'I am a highly motivated individual deeply passionate about computer science. My expertise spans across software development, data structures, algorithms, and artificial intelligence, granting me a profound comprehension of computational systems and the intricate workings of modern technology');

-- --------------------------------------------------------

--
-- Table structure for table `skills_set`
--

CREATE TABLE `skills_set` (
  `skill_id` int(150) NOT NULL,
  `personal_id` int(20) NOT NULL,
  `skill_title` text NOT NULL,
  `skill_percentage` int(50) NOT NULL,
  `skill_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skills_set`
--

INSERT INTO `skills_set` (`skill_id`, `personal_id`, `skill_title`, `skill_percentage`, `skill_type`) VALUES
(2, 1001, 'Query Skills (SQL)', 85, 'Technical'),
(3, 1001, 'Problem-Solving Skills', 95, 'Technical'),
(4, 1001, 'Analytical Skills', 92, 'Technical'),
(5, 1001, 'Art Skills', 80, 'Technical'),
(6, 1001, 'Office365 Skills', 88, 'Technical'),
(7, 1001, 'Infographics Skills', 83, 'Technical'),
(8, 1001, 'Virtual Tools Skills', 90, 'Technical'),
(9, 1001, 'Written and Verbal Communications', 95, 'Personal'),
(10, 1001, 'Organized and Efficient', 90, 'Personal'),
(11, 1001, 'Ability to work independently', 93, 'Personal'),
(12, 1001, 'Leadership skills', 88, 'Personal'),
(13, 1001, 'Programming Skills', 100, 'Technical');

-- --------------------------------------------------------

--
-- Table structure for table `users_accounts`
--

CREATE TABLE `users_accounts` (
  `user_id` int(150) NOT NULL,
  `user_email` text NOT NULL,
  `user_password` text NOT NULL,
  `user_type` varchar(150) NOT NULL DEFAULT 'user',
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_accounts`
--

INSERT INTO `users_accounts` (`user_id`, `user_email`, `user_password`, `user_type`, `date_created`) VALUES
(1, 'jd@gmail.com', 'dGVzdA==', 'user', '2024-06-27 19:19:07'),
(1001, 'admin@admin.com', 'YWRtaW4=', 'admin', '2024-06-27 19:19:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_information`
--
ALTER TABLE `personal_information`
  ADD PRIMARY KEY (`personal_id`);

--
-- Indexes for table `skills_set`
--
ALTER TABLE `skills_set`
  ADD PRIMARY KEY (`skill_id`);

--
-- Indexes for table `users_accounts`
--
ALTER TABLE `users_accounts`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `skills_set`
--
ALTER TABLE `skills_set`
  MODIFY `skill_id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users_accounts`
--
ALTER TABLE `users_accounts`
  MODIFY `user_id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
