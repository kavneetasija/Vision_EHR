-- phpMyAdmin SQL Dump
-- version 4.4.13.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Dec 22, 2015 at 02:50 PM
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
-- Table structure for table `tbl_acuities`
--

CREATE TABLE IF NOT EXISTS `tbl_acuities` (
  `acuities_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `acuities_INPUT_0` varchar(15) DEFAULT NULL,
  `acuities_INPUT_1` varchar(15) DEFAULT NULL,
  `acuities_INPUT_2` varchar(15) DEFAULT NULL,
  `acuities_INPUT_3` varchar(15) DEFAULT NULL,
  `acuities_INPUT_4` varchar(15) DEFAULT NULL,
  `acuities_INPUT_5` varchar(15) DEFAULT NULL,
  `acuities_INPUT_6` varchar(15) DEFAULT NULL,
  `acuities_INPUT_7` varchar(15) DEFAULT NULL,
  `acuities_INPUT_8` varchar(15) DEFAULT NULL,
  `acuities_INPUT_9` varchar(15) DEFAULT NULL,
  `acuities_INPUT_10` varchar(15) DEFAULT NULL,
  `acuities_INPUT_11` varchar(15) DEFAULT NULL,
  `acuities_INPUT_12` varchar(15) DEFAULT NULL,
  `acuities_INPUT_13` varchar(15) DEFAULT NULL,
  `acuities_INPUT_14` varchar(15) DEFAULT NULL,
  `acuities_INPUT_15` varchar(15) DEFAULT NULL,
  `acuities_INPUT_16` varchar(15) DEFAULT NULL,
  `acuities_INPUT_17` varchar(15) DEFAULT NULL,
  `acuities_INPUT_18` varchar(15) DEFAULT NULL,
  `acuities_INPUT_19` varchar(15) DEFAULT NULL,
  `acuities_INPUT_20` varchar(15) DEFAULT NULL,
  `acuities_INPUT_21` varchar(15) DEFAULT NULL,
  `acuities_INPUT_22` varchar(15) DEFAULT NULL,
  `acuities_INPUT_23` varchar(15) DEFAULT NULL,
  `acuities_INPUT_24` varchar(15) DEFAULT NULL,
  `acuities_INPUT_25` varchar(15) DEFAULT NULL,
  `acuities_INPUT_26` varchar(15) DEFAULT NULL,
  `acuities_INPUT_27` varchar(15) DEFAULT NULL,
  `acuities_INPUT_28` varchar(15) DEFAULT NULL,
  `acuities_INPUT_29` varchar(15) DEFAULT NULL,
  `acuities_INPUT_30` varchar(15) DEFAULT NULL,
  `acuities_INPUT_31` varchar(15) DEFAULT NULL,
  `acuities_INPUT_32` varchar(15) DEFAULT NULL,
  `acuities_INPUT_33` varchar(15) DEFAULT NULL,
  `acuities_INPUT_34` varchar(15) DEFAULT NULL,
  `acuities_INPUT_35` varchar(15) DEFAULT NULL,
  `acuities_INPUT_36` varchar(15) DEFAULT NULL,
  `acuities_SELECT_0` varchar(15) DEFAULT NULL,
  `acuities_SELECT_1` varchar(15) DEFAULT NULL,
  `acuities_SELECT_2` varchar(15) DEFAULT NULL,
  `acuities_SELECT_3` varchar(15) DEFAULT NULL,
  `acuities_SELECT_4` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Table structure for table `tbl_diagnosis`
--

CREATE TABLE IF NOT EXISTS `tbl_diagnosis` (
  `diagnosis_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `diagnosis_INPUT_0` varchar(15) DEFAULT NULL,
  `diagnosis_INPUT_1` varchar(15) DEFAULT NULL,
  `diagnosis_INPUT_2` varchar(15) DEFAULT NULL,
  `diagnosis_INPUT_3` varchar(15) DEFAULT NULL,
  `diagnosis_INPUT_4` varchar(15) DEFAULT NULL,
  `diagnosis_INPUT_5` varchar(15) DEFAULT NULL,
  `diagnosis_INPUT_6` varchar(15) DEFAULT NULL,
  `diagnosis_INPUT_7` varchar(15) DEFAULT NULL,
  `diagnosis_INPUT_8` varchar(15) DEFAULT NULL,
  `diagnosis_INPUT_9` varchar(15) DEFAULT NULL,
  `diagnosis_INPUT_10` varchar(15) DEFAULT NULL,
  `diagnosis_INPUT_11` varchar(15) DEFAULT NULL,
  `diagnosis_INPUT_12` varchar(15) DEFAULT NULL,
  `diagnosis_INPUT_13` varchar(15) DEFAULT NULL,
  `diagnosis_INPUT_14` varchar(15) DEFAULT NULL,
  `diagnosis_INPUT_15` varchar(15) DEFAULT NULL,
  `diagnosis_INPUT_16` varchar(15) DEFAULT NULL,
  `diagnosis_INPUT_17` varchar(15) DEFAULT NULL,
  `diagnosis_INPUT_18` varchar(15) DEFAULT NULL,
  `diagnosis_INPUT_19` varchar(15) DEFAULT NULL,
  `diagnosis_INPUT_20` varchar(15) DEFAULT NULL,
  `diagnosis_INPUT_21` varchar(15) DEFAULT NULL,
  `diagnosis_INPUT_22` varchar(15) DEFAULT NULL,
  `diagnosis_INPUT_23` varchar(15) DEFAULT NULL,
  `diagnosis_INPUT_24` varchar(15) DEFAULT NULL,
  `diagnosis_INPUT_25` varchar(15) DEFAULT NULL,
  `diagnosis_INPUT_26` varchar(15) DEFAULT NULL,
  `diagnosis_INPUT_27` varchar(15) DEFAULT NULL,
  `diagnosis_INPUT_28` varchar(15) DEFAULT NULL,
  `diagnosis_INPUT_29` varchar(15) DEFAULT NULL,
  `diagnosis_INPUT_30` varchar(15) DEFAULT NULL,
  `diagnosis_INPUT_31` varchar(15) DEFAULT NULL,
  `diagnosis_INPUT_32` varchar(15) DEFAULT NULL,
  `diagnosis_INPUT_33` varchar(15) DEFAULT NULL,
  `diagnosis_INPUT_34` varchar(15) DEFAULT NULL,
  `diagnosis_INPUT_35` varchar(15) DEFAULT NULL,
  `diagnosis_INPUT_36` varchar(15) DEFAULT NULL,
  `diagnosis_INPUT_37` varchar(15) DEFAULT NULL,
  `diagnosis_INPUT_38` varchar(15) DEFAULT NULL,
  `diagnosis_INPUT_39` varchar(15) DEFAULT NULL,
  `diagnosis_INPUT_40` varchar(15) DEFAULT NULL,
  `diagnosis_INPUT_41` varchar(15) DEFAULT NULL,
  `diagnosis_INPUT_42` varchar(15) DEFAULT NULL,
  `diagnosis_INPUT_43` varchar(15) DEFAULT NULL,
  `diagnosis_INPUT_44` varchar(15) DEFAULT NULL,
  `diagnosis_INPUT_45` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_exam`
--

CREATE TABLE IF NOT EXISTS `tbl_exam` (
  `exam_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `doctor_id` mediumint(10) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_external`
--

CREATE TABLE IF NOT EXISTS `tbl_external` (
  `external_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `external_INPUT_0` varchar(15) DEFAULT NULL,
  `external_INPUT_1` varchar(15) DEFAULT NULL,
  `external_INPUT_2` varchar(15) DEFAULT NULL,
  `external_INPUT_3` varchar(15) DEFAULT NULL,
  `external_INPUT_4` varchar(15) DEFAULT NULL,
  `external_INPUT_5` varchar(15) DEFAULT NULL,
  `external_INPUT_6` varchar(15) DEFAULT NULL,
  `external_INPUT_7` varchar(15) DEFAULT NULL,
  `external_INPUT_8` varchar(15) DEFAULT NULL,
  `external_INPUT_9` varchar(15) DEFAULT NULL,
  `external_INPUT_10` varchar(15) DEFAULT NULL,
  `external_INPUT_11` varchar(15) DEFAULT NULL,
  `external_INPUT_12` varchar(15) DEFAULT NULL,
  `external_INPUT_13` varchar(15) DEFAULT NULL,
  `external_INPUT_14` varchar(15) DEFAULT NULL,
  `external_INPUT_15` varchar(15) DEFAULT NULL,
  `external_INPUT_16` varchar(15) DEFAULT NULL,
  `external_INPUT_17` varchar(15) DEFAULT NULL,
  `external_INPUT_18` varchar(15) DEFAULT NULL,
  `external_INPUT_19` varchar(15) DEFAULT NULL,
  `external_INPUT_20` varchar(15) DEFAULT NULL,
  `external_INPUT_21` varchar(15) DEFAULT NULL,
  `external_INPUT_22` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='																			';

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gtts`
--

CREATE TABLE IF NOT EXISTS `tbl_gtts` (
  `gtts_id` int(11) NOT NULL,
  `gtts_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_internal`
--

CREATE TABLE IF NOT EXISTS `tbl_internal` (
  `internal_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `internal_INPUT_0` varchar(15) DEFAULT NULL,
  `internal_INPUT_1` varchar(15) DEFAULT NULL,
  `internal_INPUT_2` varchar(15) DEFAULT NULL,
  `internal_INPUT_3` varchar(15) DEFAULT NULL,
  `internal_INPUT_4` varchar(15) DEFAULT NULL,
  `internal_INPUT_5` varchar(15) DEFAULT NULL,
  `internal_INPUT_6` varchar(15) DEFAULT NULL,
  `internal_INPUT_7` varchar(15) DEFAULT NULL,
  `internal_INPUT_8` varchar(15) DEFAULT NULL,
  `internal_INPUT_9` varchar(15) DEFAULT NULL,
  `internal_INPUT_10` varchar(15) DEFAULT NULL,
  `internal_INPUT_11` varchar(15) DEFAULT NULL,
  `internal_INPUT_12` varchar(15) DEFAULT NULL,
  `internal_INPUT_13` varchar(15) DEFAULT NULL,
  `internal_INPUT_14` varchar(15) DEFAULT NULL,
  `internal_INPUT_15` varchar(15) DEFAULT NULL,
  `internal_INPUT_16` varchar(15) DEFAULT NULL,
  `internal_INPUT_17` varchar(15) DEFAULT NULL,
  `internal_INPUT_18` varchar(15) DEFAULT NULL,
  `internal_INPUT_19` varchar(15) DEFAULT NULL,
  `internal_INPUT_20` varchar(15) DEFAULT NULL,
  `internal_INPUT_21` varchar(15) DEFAULT NULL,
  `internal_INPUT_22` varchar(15) DEFAULT NULL,
  `internal_INPUT_23` varchar(15) DEFAULT NULL,
  `internal_INPUT_24` varchar(15) DEFAULT NULL,
  `internal_INPUT_25` varchar(15) DEFAULT NULL,
  `internal_INPUT_26` varchar(15) DEFAULT NULL,
  `internal_INPUT_27` varchar(15) DEFAULT NULL,
  `internal_INPUT_28` varchar(15) DEFAULT NULL,
  `internal_INPUT_29` varchar(15) DEFAULT NULL,
  `internal_INPUT_30` varchar(15) DEFAULT NULL,
  `internal_INPUT_31` varchar(15) DEFAULT NULL,
  `internal_INPUT_32` varchar(15) DEFAULT NULL,
  `internal_INPUT_33` varchar(15) DEFAULT NULL,
  `internal_INPUT_34` varchar(15) DEFAULT NULL,
  `internal_INPUT_35` varchar(15) DEFAULT NULL,
  `internal_INPUT_36` varchar(15) DEFAULT NULL,
  `internal_INPUT_37` varchar(15) DEFAULT NULL,
  `internal_INPUT_38` varchar(15) DEFAULT NULL,
  `internal_INPUT_39` varchar(15) DEFAULT NULL,
  `internal_INPUT_40` varchar(15) DEFAULT NULL,
  `internal_SELECT_0` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `OHIP_number` bigint(10) DEFAULT NULL,
  `OHIP_virsion` char(2) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `gender` char(6) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `city` char(20) DEFAULT NULL,
  `province` char(2) DEFAULT NULL,
  `postal_code` varchar(45) DEFAULT NULL,
  `type` char(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='All types of patients Basic info for registration.';

-- --------------------------------------------------------

--
-- Table structure for table `tbl_retinoscopy`
--

CREATE TABLE IF NOT EXISTS `tbl_retinoscopy` (
  `retinoscopy_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `retinoscopy_INPUT_0` varchar(15) DEFAULT NULL,
  `retinoscopy_INPUT_1` varchar(15) DEFAULT NULL,
  `retinoscopy_INPUT_2` varchar(15) DEFAULT NULL,
  `retinoscopy_INPUT_3` varchar(15) DEFAULT NULL,
  `retinoscopy_INPUT_4` varchar(15) DEFAULT NULL,
  `retinoscopy_INPUT_5` varchar(15) DEFAULT NULL,
  `retinoscopy_INPUT_6` varchar(15) DEFAULT NULL,
  `retinoscopy_INPUT_7` varchar(15) DEFAULT NULL,
  `retinoscopy_INPUT_8` varchar(15) DEFAULT NULL,
  `retinoscopy_INPUT_9` varchar(15) DEFAULT NULL,
  `retinoscopy_INPUT_10` varchar(15) DEFAULT NULL,
  `retinoscopy_INPUT_11` varchar(15) DEFAULT NULL,
  `retinoscopy_INPUT_12` varchar(15) DEFAULT NULL,
  `retinoscopy_INPUT_13` varchar(15) DEFAULT NULL,
  `retinoscopy_INPUT_14` varchar(15) DEFAULT NULL,
  `retinoscopy_INPUT_15` varchar(15) DEFAULT NULL,
  `retinoscopy_INPUT_16` varchar(15) DEFAULT NULL,
  `retinoscopy_INPUT_17` varchar(15) DEFAULT NULL,
  `retinoscopy_INPUT_18` varchar(15) DEFAULT NULL,
  `retinoscopy_INPUT_19` varchar(15) DEFAULT NULL,
  `retinoscopy_INPUT_20` varchar(15) DEFAULT NULL,
  `retinoscopy_INPUT_21` varchar(15) DEFAULT NULL,
  `retinoscopy_INPUT_22` varchar(15) DEFAULT NULL,
  `retinoscopy_INPUT_23` varchar(15) DEFAULT NULL,
  `retinoscopy_INPUT_24` varchar(15) DEFAULT NULL,
  `retinoscopy_INPUT_25` varchar(15) DEFAULT NULL,
  `retinoscopy_INPUT_26` varchar(15) DEFAULT NULL,
  `retinoscopy_INPUT_27` varchar(15) DEFAULT NULL,
  `retinoscopy_INPUT_28` varchar(15) DEFAULT NULL,
  `retinoscopy_INPUT_29` varchar(15) DEFAULT NULL,
  `retinoscopy_INPUT_30` varchar(15) DEFAULT NULL,
  `retinoscopy_INPUT_31` varchar(15) DEFAULT NULL,
  `retinoscopy_INPUT_32` varchar(15) DEFAULT NULL,
  `retinoscopy_INPUT_33` varchar(15) DEFAULT NULL,
  `retinoscopy_INPUT_34` varchar(15) DEFAULT NULL,
  `retinoscopy_INPUT_35` varchar(150) DEFAULT NULL,
  `retinoscopy_INPUT_36` varchar(15) DEFAULT NULL,
  `retinoscopy_INPUT_37` varchar(15) DEFAULT NULL,
  `retinoscopy_INPUT_38` varchar(15) DEFAULT NULL,
  `retinoscopy_INPUT_39` varchar(15) DEFAULT NULL,
  `retinoscopy_INPUT_40` varchar(15) DEFAULT NULL,
  `retinoscopy_INPUT_41` varchar(15) DEFAULT NULL,
  `retinoscopy_INPUT_42` varchar(15) DEFAULT NULL,
  `retinoscopy_INPUT_43` varchar(15) DEFAULT NULL,
  `retinoscopy_INPUT_44` varchar(15) DEFAULT NULL,
  `retinoscopy_INPUT_45` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Table structure for table `tbl_tonometry`
--

CREATE TABLE IF NOT EXISTS `tbl_tonometry` (
  `tonometry_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `tonometry_INPUT_0` varchar(15) DEFAULT NULL,
  `tonometry_INPUT_1` varchar(15) DEFAULT NULL,
  `tonometry_INPUT_2` varchar(15) DEFAULT NULL,
  `tonometry_INPUT_3` varchar(15) DEFAULT NULL,
  `tonometry_INPUT_4` varchar(15) DEFAULT NULL,
  `tonometry_INPUT_5` varchar(15) DEFAULT NULL,
  `tonometry_INPUT_6` varchar(15) DEFAULT NULL,
  `tonometry_INPUT_7` varchar(15) DEFAULT NULL,
  `tonometry_INPUT_8` varchar(15) DEFAULT NULL,
  `tonometry_INPUT_9` varchar(15) DEFAULT NULL,
  `tonometry_INPUT_10` varchar(15) DEFAULT NULL,
  `tonometry_INPUT_11` varchar(15) DEFAULT NULL,
  `tonometry_INPUT_12` varchar(15) DEFAULT NULL,
  `tonometry_INPUT_13` varchar(15) DEFAULT NULL,
  `tonometry_INPUT_14` varchar(15) DEFAULT NULL,
  `tonometry_INPUT_15` varchar(15) DEFAULT NULL,
  `tonometry_INPUT_16` varchar(15) DEFAULT NULL,
  `tonometry_INPUT_17` varchar(15) DEFAULT NULL,
  `tonometry_INPUT_18` varchar(15) DEFAULT NULL,
  `tonometry_INPUT_19` varchar(15) DEFAULT NULL,
  `tonometry_SELECT_0` varchar(15) DEFAULT NULL
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
-- Indexes for table `tbl_acuities`
--
ALTER TABLE `tbl_acuities`
  ADD PRIMARY KEY (`acuities_id`),
  ADD UNIQUE KEY `exam_id_UNIQUE` (`exam_id`);

--
-- Indexes for table `tbl_appointments`
--
ALTER TABLE `tbl_appointments`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `session_appointment_idx` (`session_id`),
  ADD KEY `patients_appointments_indx` (`patient_id`),
  ADD KEY `session_appointment_indx` (`session_id`);

--
-- Indexes for table `tbl_diagnosis`
--
ALTER TABLE `tbl_diagnosis`
  ADD PRIMARY KEY (`diagnosis_id`),
  ADD UNIQUE KEY `exam_id_UNIQUE` (`exam_id`);

--
-- Indexes for table `tbl_exam`
--
ALTER TABLE `tbl_exam`
  ADD PRIMARY KEY (`exam_id`),
  ADD UNIQUE KEY `time_UNIQUE` (`time`),
  ADD KEY `exam_patients_idx` (`patient_id`),
  ADD KEY `exam_locations_idx` (`location_id`),
  ADD KEY `exam_doctor_idx` (`doctor_id`);

--
-- Indexes for table `tbl_external`
--
ALTER TABLE `tbl_external`
  ADD PRIMARY KEY (`external_id`),
  ADD UNIQUE KEY `exam_id_UNIQUE` (`exam_id`),
  ADD KEY `external_exam_idx` (`exam_id`);

--
-- Indexes for table `tbl_gtts`
--
ALTER TABLE `tbl_gtts`
  ADD PRIMARY KEY (`gtts_id`),
  ADD UNIQUE KEY `gtts_name_UNIQUE` (`gtts_name`);

--
-- Indexes for table `tbl_internal`
--
ALTER TABLE `tbl_internal`
  ADD PRIMARY KEY (`internal_id`),
  ADD UNIQUE KEY `exam_id_UNIQUE` (`exam_id`);

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
-- Indexes for table `tbl_retinoscopy`
--
ALTER TABLE `tbl_retinoscopy`
  ADD PRIMARY KEY (`retinoscopy_id`),
  ADD UNIQUE KEY `exam_id_UNIQUE` (`exam_id`);

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
-- Indexes for table `tbl_tonometry`
--
ALTER TABLE `tbl_tonometry`
  ADD PRIMARY KEY (`tonometry_id`),
  ADD UNIQUE KEY `exam_id_UNIQUE` (`exam_id`),
  ADD KEY `tonometry_exam_idx` (`exam_id`);

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
-- AUTO_INCREMENT for table `tbl_acuities`
--
ALTER TABLE `tbl_acuities`
  MODIFY `acuities_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_appointments`
--
ALTER TABLE `tbl_appointments`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_diagnosis`
--
ALTER TABLE `tbl_diagnosis`
  MODIFY `diagnosis_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_exam`
--
ALTER TABLE `tbl_exam`
  MODIFY `exam_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_external`
--
ALTER TABLE `tbl_external`
  MODIFY `external_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_gtts`
--
ALTER TABLE `tbl_gtts`
  MODIFY `gtts_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_internal`
--
ALTER TABLE `tbl_internal`
  MODIFY `internal_id` int(11) NOT NULL AUTO_INCREMENT;
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
-- AUTO_INCREMENT for table `tbl_retinoscopy`
--
ALTER TABLE `tbl_retinoscopy`
  MODIFY `retinoscopy_id` int(11) NOT NULL AUTO_INCREMENT;
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
-- AUTO_INCREMENT for table `tbl_tonometry`
--
ALTER TABLE `tbl_tonometry`
  MODIFY `tonometry_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` mediumint(10) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_acuities`
--
ALTER TABLE `tbl_acuities`
  ADD CONSTRAINT `acuities_exam` FOREIGN KEY (`exam_id`) REFERENCES `tbl_exam` (`exam_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_appointments`
--
ALTER TABLE `tbl_appointments`
  ADD CONSTRAINT `patients_appointments` FOREIGN KEY (`patient_id`) REFERENCES `tbl_patients` (`patient_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `sessions_appointments` FOREIGN KEY (`session_id`) REFERENCES `tbl_sessions` (`session_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_diagnosis`
--
ALTER TABLE `tbl_diagnosis`
  ADD CONSTRAINT `diagnosis_exam` FOREIGN KEY (`exam_id`) REFERENCES `tbl_exam` (`exam_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_exam`
--
ALTER TABLE `tbl_exam`
  ADD CONSTRAINT `exam_doctor` FOREIGN KEY (`doctor_id`) REFERENCES `tbl_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `exam_locations` FOREIGN KEY (`location_id`) REFERENCES `tbl_locations` (`location_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `exam_patients` FOREIGN KEY (`patient_id`) REFERENCES `tbl_patients` (`patient_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_external`
--
ALTER TABLE `tbl_external`
  ADD CONSTRAINT `external_exam` FOREIGN KEY (`exam_id`) REFERENCES `tbl_exam` (`exam_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_internal`
--
ALTER TABLE `tbl_internal`
  ADD CONSTRAINT `internal_exam` FOREIGN KEY (`exam_id`) REFERENCES `tbl_exam` (`exam_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `tbl_retinoscopy`
--
ALTER TABLE `tbl_retinoscopy`
  ADD CONSTRAINT `retinoscopy_exam` FOREIGN KEY (`exam_id`) REFERENCES `tbl_exam` (`exam_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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

--
-- Constraints for table `tbl_tonometry`
--
ALTER TABLE `tbl_tonometry`
  ADD CONSTRAINT `tonometry_exam` FOREIGN KEY (`exam_id`) REFERENCES `tbl_exam` (`exam_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
