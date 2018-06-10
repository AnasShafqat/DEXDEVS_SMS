-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2018 at 03:18 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dexdevs_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `batches`
--

CREATE TABLE `batches` (
  `batch_id` int(11) NOT NULL,
  `batch_course_id` int(11) NOT NULL,
  `batch_name` varchar(32) NOT NULL,
  `batch_status` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `batches`
--

INSERT INTO `batches` (`batch_id`, `batch_course_id`, `batch_name`, `batch_status`) VALUES
(2, 3, 'Web - 01', 'Active'),
(3, 4, 'GD - 01', 'Active'),
(4, 4, 'Android-Evening', 'Active'),
(5, 3, 'Web - Evening', 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_name` enum('Web Development','Graphic Designing','MS Office','Android Development') NOT NULL,
  `course_starting_date` date NOT NULL,
  `course_ending_date` date NOT NULL,
  `course_duration` enum('2 Months','3 Months','4 Months','5 Months') NOT NULL,
  `course_status` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_starting_date`, `course_ending_date`, `course_duration`, `course_status`) VALUES
(3, 'Web Development', '2018-06-05', '2018-09-05', '3 Months', 'Active'),
(4, 'Graphic Designing', '2018-06-05', '2018-07-05', '2 Months', 'Active'),
(5, 'Android Development', '2018-06-05', '2018-08-25', '3 Months', 'Active'),
(6, 'Graphic Designing', '0000-00-00', '0000-00-00', '2 Months', 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

CREATE TABLE `fee` (
  `fee_id` int(11) NOT NULL,
  `fee_std_id` int(11) NOT NULL,
  `fee_amount_received` int(11) NOT NULL,
  `fee_description` enum('Registration','1st Installment','2nd Installment','3rd Installment') NOT NULL,
  `fee_receiving_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fee`
--

INSERT INTO `fee` (`fee_id`, `fee_std_id`, `fee_amount_received`, `fee_description`, `fee_receiving_date`) VALUES
(1, 2, 1000, 'Registration', '2018-06-01');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1527362709),
('m130524_201442_init', 1527362713);

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `section_id` int(11) NOT NULL,
  `section_course_id` int(11) NOT NULL,
  `section_batch_id` int(11) NOT NULL,
  `section_name` enum('Morning','Evening') NOT NULL,
  `section_status` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`section_id`, `section_course_id`, `section_batch_id`, `section_name`, `section_status`) VALUES
(2, 3, 3, 'Morning', 'Active'),
(3, 4, 2, 'Evening', 'Active'),
(4, 4, 4, 'Evening', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `std_id` int(11) NOT NULL,
  `std_course_id` int(11) NOT NULL,
  `std_batch_id` int(11) NOT NULL,
  `std_section_id` int(11) NOT NULL,
  `std_name` varchar(32) NOT NULL,
  `std_gaurdian_name` varchar(32) NOT NULL,
  `std_email` varchar(60) NOT NULL,
  `std_cnic` varchar(15) NOT NULL,
  `std_phone` varchar(15) NOT NULL,
  `std_gaurdian_phone` varchar(15) NOT NULL,
  `std_address` varchar(256) NOT NULL,
  `std_gender` enum('Male','Female') NOT NULL,
  `std_qualification` varchar(128) NOT NULL,
  `std_status` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`std_id`, `std_course_id`, `std_batch_id`, `std_section_id`, `std_name`, `std_gaurdian_name`, `std_email`, `std_cnic`, `std_phone`, `std_gaurdian_phone`, `std_address`, `std_gender`, `std_qualification`, `std_status`) VALUES
(1, 3, 2, 2, 'Nadia Gull', 'kinza', 'nadiagull@gmail.com', '30313-3789478-3', '+03-007-8699546', '+03-336-7855472', 'khanpur adda', 'Female', 'BSCS', 'Active'),
(2, 4, 3, 2, 'Nauman Shahid', 'vhsdj;sdk', 'noman@gmail.com', '45102-755822-5', '03347986453', '03368945676', 'ryk', 'Male', 'BSCS', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'QPIFLxLINPQfxPz37tNybMpHIanGA2Qe', '$2y$13$PZrVhgq.qP/H5pKrHxWu9OmXLazD9LO2D74Iu2WCDlLuPiIbMfDnK', NULL, 'admin@gmail.com', 10, 1527362903, 1527362903),
(2, 'dexdevs', 'tZQvLUr0XWj8yaf9RcyMwACId6zQowdT', '$2y$13$sT936uIros9KT9qgs7OM/uMiWpDLKXqxTJqE2JZQIoPmNstLR1lt2', NULL, 'dexdevs@gmail.com', 10, 1527362933, 1527362933);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batches`
--
ALTER TABLE `batches`
  ADD PRIMARY KEY (`batch_id`),
  ADD KEY `batch_course_id` (`batch_course_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `fee`
--
ALTER TABLE `fee`
  ADD PRIMARY KEY (`fee_id`),
  ADD KEY `fee_std_id` (`fee_std_id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`section_id`),
  ADD KEY `section_batch_id` (`section_batch_id`),
  ADD KEY `section_course_id` (`section_course_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`std_id`),
  ADD KEY `std_section_id` (`std_section_id`),
  ADD KEY `std_course_id` (`std_course_id`),
  ADD KEY `std_batch_id` (`std_batch_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batches`
--
ALTER TABLE `batches`
  MODIFY `batch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `fee`
--
ALTER TABLE `fee`
  MODIFY `fee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `section_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `std_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `batches`
--
ALTER TABLE `batches`
  ADD CONSTRAINT `batches_ibfk_1` FOREIGN KEY (`batch_course_id`) REFERENCES `courses` (`course_id`);

--
-- Constraints for table `fee`
--
ALTER TABLE `fee`
  ADD CONSTRAINT `fee_ibfk_1` FOREIGN KEY (`fee_std_id`) REFERENCES `students` (`std_id`);

--
-- Constraints for table `sections`
--
ALTER TABLE `sections`
  ADD CONSTRAINT `sections_ibfk_1` FOREIGN KEY (`section_batch_id`) REFERENCES `batches` (`batch_id`),
  ADD CONSTRAINT `sections_ibfk_2` FOREIGN KEY (`section_course_id`) REFERENCES `courses` (`course_id`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`std_section_id`) REFERENCES `sections` (`section_id`),
  ADD CONSTRAINT `students_ibfk_2` FOREIGN KEY (`std_course_id`) REFERENCES `courses` (`course_id`),
  ADD CONSTRAINT `students_ibfk_3` FOREIGN KEY (`std_batch_id`) REFERENCES `batches` (`batch_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
