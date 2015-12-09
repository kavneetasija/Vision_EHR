-- phpMyAdmin SQL Dump
-- version 4.4.13.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Dec 09, 2015 at 12:35 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vision_ehr`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appointments`
--

CREATE TABLE IF NOT EXISTS `tbl_appointments` (
  `appointment_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='All patients'' appointment details ';

-- --------------------------------------------------------

--
-- Table structure for table `tbl_locations`
--

CREATE TABLE IF NOT EXISTS `tbl_locations` (
  `location_id` int(11) NOT NULL,
  `type` varchar(12) NOT NULL,
  `name` varchar(90) NOT NULL,
  `reference_name` varchar(60) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `address` varchar(45) NOT NULL,
  `city` varchar(45) DEFAULT NULL,
  `province` char(2) DEFAULT NULL,
  `postal_code` varchar(7) DEFAULT NULL,
  `assigned_doctor` mediumint(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_patients`
--

CREATE TABLE IF NOT EXISTS `tbl_patients` (
  `patient_id` int(11) NOT NULL,
  `location_id` int(11) DEFAULT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `OHIP_number` bigint(10) NOT NULL,
  `OHIP_virsion` char(2) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `gender` char(6) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `province` char(2) DEFAULT NULL,
  `postal_code` varchar(45) DEFAULT NULL,
  `type` char(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='All types of patients Basic info for registration.';

-- --------------------------------------------------------

--
-- Table structure for table `tbl_senior_relations`
--

CREATE TABLE IF NOT EXISTS `tbl_senior_relations` (
  `relation_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `room` varchar(15) DEFAULT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `other_phone` varchar(15) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `relation` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sessions`
--

CREATE TABLE IF NOT EXISTS `tbl_sessions` (
  `session_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student_health`
--

CREATE TABLE IF NOT EXISTS `tbl_student_health` (
  `health_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `share_info` char(3) DEFAULT NULL,
  `first_exam` char(3) DEFAULT NULL,
  `last_exam_year` varchar(10) DEFAULT NULL,
  `eye_condition` varchar(90) DEFAULT NULL,
  `medical_condition` char(3) DEFAULT NULL,
  `medical_condition_text` varchar(255) DEFAULT NULL,
  `medication` char(3) DEFAULT NULL,
  `medication_text` varchar(255) DEFAULT NULL,
  `allergies` char(3) DEFAULT NULL,
  `allergies_text` varchar(255) DEFAULT NULL,
  `relative_eye_condition` char(3) DEFAULT NULL,
  `relative_eye_condition_text` varchar(255) DEFAULT NULL,
  `other_text` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student_relations`
--

CREATE TABLE IF NOT EXISTS `tbl_student_relations` (
  `relation_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `other_phone` varchar(15) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `teacher_name` varchar(45) DEFAULT NULL,
  `grade` varchar(10) DEFAULT NULL,
  `class` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `user_id` mediumint(10) NOT NULL,
  `supper_admin` tinyint(1) NOT NULL DEFAULT '0',
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `email` varchar(90) NOT NULL,
  `password` varchar(32) NOT NULL,
  `user_role` char(7) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `gender` char(6) DEFAULT NULL,
  `cradentials` varchar(10) DEFAULT NULL,
  `work_phone` varchar(17) DEFAULT 'N/A',
  `cell_phone` varchar(17) DEFAULT 'N/A',
  `fax_nuber` varchar(17) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `province` char(2) DEFAULT NULL,
  `postal_code` varchar(45) DEFAULT NULL,
  `registration_number` varchar(20) DEFAULT NULL,
  `license_number` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_appointments`
--
ALTER TABLE `tbl_appointments`
  ADD PRIMARY KEY (`appointment_id`),
  ADD UNIQUE KEY `patient_id_UNIQUE` (`patient_id`),
  ADD KEY `session_appointment_idx` (`session_id`),
  ADD KEY `patients_appointments_indx` (`patient_id`),
  ADD KEY `session_appointment_indx` (`session_id`);

--
-- Indexes for table `tbl_locations`
--
ALTER TABLE `tbl_locations`
  ADD PRIMARY KEY (`location_id`),
  ADD UNIQUE KEY `name_UNIQUE` (`name`),
  ADD KEY `location_user_idx` (`assigned_doctor`);

--
-- Indexes for table `tbl_patients`
--
ALTER TABLE `tbl_patients`
  ADD PRIMARY KEY (`patient_id`),
  ADD UNIQUE KEY `OHIP_number_UNIQUE` (`OHIP_number`),
  ADD KEY `location_id_indx` (`location_id`),
  ADD KEY `location_id_tbl_locations` (`location_id`);

--
-- Indexes for table `tbl_senior_relations`
--
ALTER TABLE `tbl_senior_relations`
  ADD PRIMARY KEY (`relation_id`),
  ADD UNIQUE KEY `patient_id_UNIQUE` (`patient_id`),
  ADD KEY `relation_patient_senior_idx` (`patient_id`);

--
-- Indexes for table `tbl_sessions`
--
ALTER TABLE `tbl_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `location_id_idx` (`location_id`);

--
-- Indexes for table `tbl_student_health`
--
ALTER TABLE `tbl_student_health`
  ADD PRIMARY KEY (`health_id`),
  ADD UNIQUE KEY `patient_id_UNIQUE` (`patient_id`),
  ADD KEY `health_patient_idx` (`patient_id`);

--
-- Indexes for table `tbl_student_relations`
--
ALTER TABLE `tbl_student_relations`
  ADD PRIMARY KEY (`relation_id`),
  ADD UNIQUE KEY `patient_id_UNIQUE` (`patient_id`),
  ADD KEY `relation_patient_idx` (`patient_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_appointments`
--
ALTER TABLE `tbl_appointments`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_locations`
--
ALTER TABLE `tbl_locations`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_patients`
--
ALTER TABLE `tbl_patients`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_senior_relations`
--
ALTER TABLE `tbl_senior_relations`
  MODIFY `relation_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_sessions`
--
ALTER TABLE `tbl_sessions`
  MODIFY `session_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_student_health`
--
ALTER TABLE `tbl_student_health`
  MODIFY `health_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_student_relations`
--
ALTER TABLE `tbl_student_relations`
  MODIFY `relation_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` mediumint(10) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_appointments`
--
ALTER TABLE `tbl_appointments`
  ADD CONSTRAINT `patients_appointments` FOREIGN KEY (`patient_id`) REFERENCES `tbl_patients` (`patient_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `sessions_appointments` FOREIGN KEY (`session_id`) REFERENCES `tbl_sessions` (`session_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_locations`
--
ALTER TABLE `tbl_locations`
  ADD CONSTRAINT `location_user` FOREIGN KEY (`assigned_doctor`) REFERENCES `tbl_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_patients`
--
ALTER TABLE `tbl_patients`
  ADD CONSTRAINT `locations_patients` FOREIGN KEY (`location_id`) REFERENCES `tbl_locations` (`location_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_senior_relations`
--
ALTER TABLE `tbl_senior_relations`
  ADD CONSTRAINT `relation_patient_senior` FOREIGN KEY (`patient_id`) REFERENCES `tbl_patients` (`patient_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_sessions`
--
ALTER TABLE `tbl_sessions`
  ADD CONSTRAINT `location_session` FOREIGN KEY (`location_id`) REFERENCES `tbl_locations` (`location_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_student_health`
--
ALTER TABLE `tbl_student_health`
  ADD CONSTRAINT `health_patient` FOREIGN KEY (`patient_id`) REFERENCES `tbl_patients` (`patient_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_student_relations`
--
ALTER TABLE `tbl_student_relations`
  ADD CONSTRAINT `relation_patient` FOREIGN KEY (`patient_id`) REFERENCES `tbl_patients` (`patient_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
