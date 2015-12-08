-- phpMyAdmin SQL Dump
-- version 4.4.13.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Dec 08, 2015 at 02:00 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COMMENT='All patients'' appointment details ';

--
-- Dumping data for table `tbl_appointments`
--

INSERT INTO `tbl_appointments` (`appointment_id`, `session_id`, `patient_id`, `time`) VALUES
(12, 17, 1, '15:45:00'),
(13, 22, 30, '16:15:00'),
(20, 3, 86, '14:10:00'),
(21, 57, 51, '10:15:00'),
(22, 57, 298, '00:06:00'),
(24, 16, 45, '16:08:00'),
(25, 16, 281, '05:09:00'),
(26, 16, 285, '20:09:00'),
(27, 57, 299, '16:05:00');

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
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_locations`
--

INSERT INTO `tbl_locations` (`location_id`, `type`, `name`, `reference_name`, `email`, `phone`, `address`, `city`, `province`, `postal_code`, `assigned_doctor`) VALUES
(1, 'School', 'Florance', NULL, 'florance@aol.ca', '613-755-9189', '219 Florance Street, Ottawa, ON, K2E 5V2', NULL, NULL, NULL, NULL),
(2, 'School', 'Location test school 1', 'Alex', 'msg2dushyant@outlook.com', '613-232-6599', '224 Jorden Ave, Ottawa, , K2C 0C8.', '', 'AB', '', 7),
(3, 'Senior home', 'test location senior home', 'Martin', 'mreategui@ccbnatioal.net', '613-232-6599', '237 Jorden Ave, Ottawa, , K2C 0C8.', NULL, NULL, NULL, NULL),
(4, 'Senior home', 'Test locations senoir''s home', 'Baki', 'barkhert@location.net', '613-232-6599', '34 Jorden Ave, Ottawa, , K2G7C2.', NULL, NULL, NULL, NULL),
(6, 'School', 'Pam''Du portaj High school', 'Dr.Joen', 'joensr@hotmail.com', '(613)-799-2001', '52 Markhem st, Ottawa, , K2E 5V2.', NULL, NULL, NULL, NULL),
(10, 'School', 'test school location', 'Emily', 'burkhart@gmail.com', '613-232-6599', '121 Waterbridge Dr., Ottawa, , K2C 0C8.', NULL, NULL, NULL, NULL),
(12, 'School', 'Location test school 2', 'Some', 'maevin@gmail.com', '6137001177', '2109, Baseline Road,, ottawa, , K2C 0C8.', '', 'AB', '', 7),
(13, 'Senior home', 'Test run location 1', 'Sammir', 'mavani.j@aol.ca', '613-232-6599', '224 Mavriks rd, Ottawa, , K2G7C2.', NULL, NULL, NULL, NULL),
(21, 'School', 'St.Xeviors', 'Jasmin', 'ali@yahoo.com', '613-232-6599', '45 Strecks Ave., Ottawa, , K2E 5V2.', NULL, NULL, NULL, NULL),
(25, 'Senior home', 'Kelvin Hearts', 'Hertmen', 'desk@khsenior.org', '613-232-6599', '90 Augustes Dr., Ottawa, , K2G7C2.', NULL, NULL, NULL, 26),
(29, 'School', 'Alpha', 'HJG', 'msg2dushyant@gmail.com', '', '1 Overlake Dr, Ottawa, , K2E 5V2.', '', 'AB', '', 7),
(30, 'School', 'Bayshore Elementary School', 'Name Referance est', 'msg2dushyant@outlook.com', '613-232-6599', '20 James St, Ottawa, , K2G7C2.', NULL, NULL, NULL, 26),
(34, 'School', 'XYX test Location', 'Test referance name', 'mreategui@ccbnational.net', '613-232-6599', '20 James St, Ottawa, , K2C 0C8.', NULL, NULL, NULL, 26),
(42, 'School', 'New test school 001', 'Monica', 'msg2dushyant@outlook.com', '6137001177', '2109, Baseline Road,', 'ottawa', 'ON', 'K2C 0C8', 26),
(43, 'School', 'testLocation009', 'testName', 'msg2dushyant@outlook.com', '6137001177', '7 Florance Ave.', 'ottawa', 'AB', 'K2C 0C8', 11),
(49, 'Senior home', 'Some seneartest009', 'Referance', 'mreategui@ccbnational.net', '613-232-6599', '7 Florance Ave.', 'ottawa', 'QC', 'K2E 5V2', 7),
(50, 'School', 'Rideau High school', 'Steven Spidell', 'steve.spidell@ocdsb.ca', '613-555-5555', '5555 St. Laurant Ave.', 'Ottawa', 'ON', 'K2P 0M7', 10),
(52, 'School', 'Rideau High school eg.001', 'Steven Spidell', 'steve.spidell@ocdsb.ca', '613-788-1898', '7 Florance Ave.', 'Ottawa', 'NT', 'K2G7C2', 10),
(59, 'School', 'Test location 002', 'FAG', 'steve.spidell@ocdsb.ca', '6137001177', '7 Florance Ave.', 'Ottawa', 'ON', 'K2G7C2', 10),
(62, 'School', 'Location test school 003', 'Sammir', 'sing.h@aol.net', '613-788-1898', '121 Waterbridge Dr.', 'Ottawa', 'ON', 'K2P 0M7', 10);

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
) ENGINE=InnoDB AUTO_INCREMENT=303 DEFAULT CHARSET=utf8 COMMENT='All types of patients Basic info for registration.';

--
-- Dumping data for table `tbl_patients`
--

INSERT INTO `tbl_patients` (`patient_id`, `location_id`, `first_name`, `last_name`, `OHIP_number`, `OHIP_virsion`, `birth_date`, `gender`, `address`, `city`, `province`, `postal_code`, `type`) VALUES
(1, 25, 'DUSHYANT', '', 1231231231, 'AD', '2013-07-17', 'Male', '1 Overlake Dr,Ottawa,ON,K2E 5V2', NULL, NULL, NULL, 'Senior'),
(9, 21, 'DUSHYANT', '', 5677777987, 'FB', '2015-11-04', 'Male', '1 Overlake Dr,Ottawa,ON,K2E 5V2', NULL, NULL, NULL, NULL),
(24, 6, 'DUSHYANT', 'PATEL', 5436879809, 'GF', '2015-11-03', 'Male', '1 Overlake Dr,Ottawa,ON,K2E 5V2', NULL, NULL, NULL, NULL),
(30, 1, 'DUSHYANT', 'PATEL', 6758798679, 'DY', '2015-11-05', 'Male', '1 Overlake Dr', 'Ottawa', 'ON', 'K2E 5V2', 'Student'),
(31, 6, 'Fatima', 'Al''Kadin', 4574685689, 'TD', '2015-11-04', 'Female', '20 Jamea,Ottawa,ON,K2E 5V2', NULL, NULL, NULL, 'Student'),
(41, 6, 'Fatima', 'Al''Kadin', 7688799075, 'TD', '2015-11-04', 'Female', '20 Jamea', 'Ottawa', 'ON', 'K2G7C2', 'Student'),
(44, 6, 'Fatima', 'Al''Kadin', 6574685989, 'TD', '2015-11-04', 'Female', '20 Jamea,Ottawa,ON,K2E 5V2', NULL, NULL, NULL, 'Student'),
(45, 25, 'Marvin', 'Patel', 8976535435, 'HG', '2015-11-03', 'Male', '2109, Baseline Road', 'Ottawa', 'ON', 'K2E 5V2', 'Senior'),
(48, 25, 'Dushyant', 'Patel', 8976545435, 'HG', '2015-11-03', 'Male', '2109, Baseline Road,,ottawa,ON,K2C 0C8', NULL, NULL, NULL, 'Senior'),
(51, 25, 'Kevin', 'Duglas', 7833456755, 'DT', '2015-11-03', 'Male', '2109, Baseline Road,,ottawa,ON,K2C 0C8', NULL, NULL, NULL, 'Senior'),
(55, 25, 'Kevin', 'Duglas', 7833773395, 'DT', '2015-11-03', 'Male', '2109, Baseline Road,,ottawa,ON,K2C 0C8', NULL, NULL, NULL, 'Senior'),
(56, 25, 'Kevin', 'Duglas', 7853773395, 'DT', '2015-11-03', 'Male', '2109, Baseline Road,,ottawa,ON,K2C 0C8', NULL, NULL, NULL, 'Senior'),
(73, 25, 'Dushyant', 'Patel', 98786563, 'PS', '1995-01-12', 'Male', '2109, Baseline Road,,ottawa,ON,K2C 0C8', NULL, NULL, NULL, 'Senior'),
(86, 6, 'Marvin', 'Patel', 909887766, 'FD', '1996-01-12', 'Male', '1 Overlake Dr', 'Ottawa', 'ON', 'K2E 5V2', 'Student'),
(88, 3, 'Dushyant', 'Patel', 6677545445, 'YA', '1956-03-08', 'Male', '2109, Baseline Road,,ottawa,ON,K2C 0C8', NULL, NULL, NULL, 'Senior'),
(96, 4, 'Dushyant', 'Patel', 8876767676, 'FD', '2007-03-08', 'Male', '2109, Baseline Road,,ottawa,ON,K2C 0C8', NULL, NULL, NULL, 'Senior'),
(268, 29, 'Ginger', 'Gray', 9089776523, 'AV', '1997-02-13', 'Female', '121 Waterbridge Dr.,ottawa,ON,K2G7C2', NULL, NULL, NULL, 'Student'),
(281, 25, 'Firstname_001', 'Lastname_002', 9990098, 'SE', '2015-11-02', 'Male', '121 Waterbridge Dr.', 'ottawa', 'ON', 'K2G7C2', 'Senior'),
(285, 25, 'firstname_0002', 'lastname_002', 5349023465, 'DS', '2015-11-02', 'Male', '121 Waterbridge Dr.', 'ottawa', 'ON', 'K2G7C2', 'Senior'),
(286, 30, 'Firstname 001 Std', 'Lastname', 8893882981, 'DF', '2015-11-05', 'Male', '2109, Baseline Road,', 'ottawa', 'ON', 'K2C 0C8', 'Student'),
(287, 29, 'firstname 002 Std', 'Lastname', 5645464321, 'DE', '2015-11-08', 'Female', '234 Jorden Ave', 'Ottawa', 'ON', 'K2G7C2', 'Student'),
(295, 4, 'firstname 0003', 'Lastname', 998876766, 'DG', '2015-11-01', 'Female', '121 Waterbridge Dr.', 'ottawa', 'ON', 'K2G7C2', 'Senior'),
(296, 3, 'firsst_name 004', 'lastname', 9838776277, 'DF', '2015-11-03', 'Female', '7 Vatican St.', 'Ottawa', 'ON', 'K2E 5V2', 'Senior'),
(297, 3, 'firsst_name 005', 'lastname', 5663354222, 'GH', '2015-11-04', 'Male', '984 Osworld Rd.', 'Ottawa', 'ON', 'K2G7C2', 'Senior'),
(298, 50, 'Monica', 'Reategui', 987654321, 'cc', '2010-12-08', 'Female', '20 James St.', 'Ottawa', 'ON', 'k2p 0tm', 'Student'),
(299, 50, 'Marvin', 'Patel', 9876543210, 'ff', '2010-12-01', 'Male', '19 Baseline', 'Ottaw', 'ON', 'k7y0j2', 'Student'),
(300, 50, 'Mel', 'Doreis', 7654321098, 'we', '2009-04-07', 'Male', '45 Main St', 'Ottawa', 'ON', 'k8y0w2', 'Student'),
(301, 50, 'Julie', 'desjardins', 6543210987, 'er', '2011-03-09', 'Female', '24 Frank', 'Ottawa', 'ON', 'k8y 9t5', 'Student'),
(302, 52, 'std_first_name_001', 'last_name-001', 9987783000, 'KT', '2004-01-14', 'Female', '24 Frank', 'Ottawa', 'ON', 'K2E 5V2', 'Student');

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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_senior_relations`
--

INSERT INTO `tbl_senior_relations` (`relation_id`, `patient_id`, `room`, `first_name`, `last_name`, `phone`, `other_phone`, `email`, `relation`) VALUES
(1, 88, '', 'Narendra', 'Patel', '913 454 6655', '', 'msg2dushyant@outlook.com', ''),
(2, 96, '2209', 'Narendra', 'Patel', '913 454 6655', '', 'msg2dushyant@outlook.com', 'Father'),
(20, 295, '', '', '', '', '', '', ''),
(21, 296, '', '', '', '', '', '', ''),
(22, 297, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sessions`
--

CREATE TABLE IF NOT EXISTS `tbl_sessions` (
  `session_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_sessions`
--

INSERT INTO `tbl_sessions` (`session_id`, `location_id`, `date`) VALUES
(3, 2, '2015-09-26'),
(5, 12, '2015-11-14'),
(6, 13, '2015-11-29'),
(14, 21, '2015-11-15'),
(16, 25, '2015-11-19'),
(17, 25, '2015-11-18'),
(18, 25, '2015-11-25'),
(22, 29, '2015-11-26'),
(24, 30, '2015-11-21'),
(25, 30, '2015-11-22'),
(26, 30, '2015-11-24'),
(27, 34, '2015-11-28'),
(28, 34, '2015-11-29'),
(29, 34, '2015-11-30'),
(35, 42, '2015-11-26'),
(37, 43, '2015-12-02'),
(38, 43, '2015-12-03'),
(41, 49, '2015-12-02'),
(42, 49, '2015-12-20'),
(43, 1, '2015-12-18'),
(44, 1, '2015-12-16'),
(57, 50, '2015-12-10'),
(65, 29, '2015-12-17'),
(66, 29, '2015-12-25'),
(68, 50, '2015-12-27'),
(69, 12, '2015-12-19'),
(73, 59, '2015-12-11'),
(74, 59, '2015-12-05'),
(77, 62, '2015-12-04'),
(78, 62, '2015-12-04');

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
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_student_health`
--

INSERT INTO `tbl_student_health` (`health_id`, `patient_id`, `share_info`, `first_exam`, `last_exam_year`, `eye_condition`, `medical_condition`, `medical_condition_text`, `medication`, `medication_text`, `allergies`, `allergies_text`, `relative_eye_condition`, `relative_eye_condition_text`, `other_text`) VALUES
(3, 86, 'No', 'Yes', '2013', 'Turned Eye,Eye Surgery,Patching Therapy', 'Yes', 'Some medical conditions examples', 'Yes', 'Name of some medications', 'Yes', 'Type of some allergies in a list', 'No', 'Types of problems in reletive''s eye', 'Other problems with the vision'),
(16, 268, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(24, 286, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(25, 287, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(26, 298, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(27, 299, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(28, 300, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(29, 301, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(30, 41, 'Yes', 'No', '2013', '', '', 'Patint''s info', '', '', '', '', '', '', ''),
(31, 302, 'Yes', 'No', '', 'Turned Eye,Uses/Used glasses,', 'No', '', 'No', '', 'Yes', 'Tree nuts', 'Yes', 'Cataracts', 'Headaches'),
(32, 30, '', 'Yes', '2013', 'Turned Eye,', '', '', 'No', '', '', '', '', '', '');

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
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_student_relations`
--

INSERT INTO `tbl_student_relations` (`relation_id`, `patient_id`, `first_name`, `last_name`, `phone`, `other_phone`, `email`, `teacher_name`, `grade`, `class`) VALUES
(3, 86, 'Narendra', 'Patel', '919 639 8877', '', 'msg2dushyant@outlook.com', '', 'IWD 9', 'D 236'),
(24, 286, 'Narendra', 'Patel', '919 639 8877', '', 'msg2dushyant@outlook.com', '', 'IWD 9', 'D 236'),
(25, 287, 'Narendra', 'Patel', '919 639 8877', '', 'msg2dushyant@outlook.com', '', 'IWD 9', 'D 236'),
(26, 298, 'Narendra', 'Patel', '919 639 8877', '', 'msg2dushyant@outlook.com', '', 'IWD 9', 'D 236'),
(27, 299, 'Narendra', 'Patel', '919 639 8877', '', 'msg2dushyant@outlook.com', '', 'IWD 9', 'D 236'),
(28, 300, 'Narendra', 'Patel', '919 639 8877', '', 'msg2dushyant@outlook.com', '', 'IWD 9', 'D 236'),
(29, 301, '', '', '919 639 8877', '', 'msg2dushyant@outlook.com', '', 'IWD 9', 'D 236'),
(30, 41, 'Edited first name', 'last_name', '613-262-3141', '613-276-1354', 'mail', 'Teacher''s Name', '302', '41'),
(31, 302, 'parent_first_name', 'last_name', '647-335-5555', '', 'msg2dushyant@outlook.com', 'Teacher''s NAme', '4', 'ct56'),
(32, 30, '', '', '', '', '', '', '', '');

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
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `supper_admin`, `first_name`, `last_name`, `email`, `password`, `user_role`, `birth_date`, `gender`, `cradentials`, `work_phone`, `cell_phone`, `fax_nuber`, `address`, `city`, `province`, `postal_code`, `registration_number`, `license_number`) VALUES
(6, 0, 'Harbinger', 'Prosvel', 'prosvel.h@gmail.com', '32250170a0dca92d53ec9624f336ca24', 'Admin', '0000-00-00', '', 'ON', '613 191 8722', '613 191 8722', '', '234 Jorden Ave', 'Ottawa', 'ON', 'K2C 0C8', '', ''),
(7, 0, 'Jamini', 'Prabhu', 'grinager.m@aol.us', 'c2adc5c0f55abcc7d0d33975ff4c0b9d', 'Doctor', NULL, NULL, NULL, 'N/A', 'N/A', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 0, 'Harprit', 'Singh', 'sing.h@aol.net', '3262885fd192204ed8b7009ed04bafad', 'Admin', NULL, NULL, NULL, 'N/A', 'N/A', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 0, 'Monica', 'Reategui', 'mreategui@ccbnational.net', 'c2adc5c0f55abcc7d0d33975ff4c0b9d', 'Doctor', NULL, NULL, NULL, 'N/A', 'N/A', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 0, 'Bower', 'jason Make Admin', 'jason.b@ubuntu.org', '555e4a41e0d91f0f0c5ca28b9c2f20dd', 'Doctor', '2015-11-10', 'Male', 'POT', '6137001177', '6137001177', '', '2109, Baseline Road,', 'ottawa', 'ON', 'K2C 0C8', 'xxx-xxx-xxxx', 'xxx-xxx-xxxx'),
(24, 1, 'DUSHYANT', 'PATEL', 'msg2dushyant@gmail.com', '198731bd2817d8f471acca7484b23f6f', 'Admin', '1991-05-16', 'Male', 'ON', '6137001177', '6137001177', '', '1 Overlake Dr', 'Ottawa', 'ON', 'K2E 5V2', '', ''),
(26, 1, 'Dushyant', 'Patel', 'msg2dushyant@outlook.com', '198731bd2817d8f471acca7484b23f6f', 'Doctor', '1995-01-04', 'Male', 'M.D', '613-564-0095', '6137001177', '', '2109, Baseline Road,', 'Ottawa', 'SK', 'K2E 5V2', '675644556667', '1235678904');

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
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `tbl_locations`
--
ALTER TABLE `tbl_locations`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `tbl_patients`
--
ALTER TABLE `tbl_patients`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=303;
--
-- AUTO_INCREMENT for table `tbl_senior_relations`
--
ALTER TABLE `tbl_senior_relations`
  MODIFY `relation_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tbl_sessions`
--
ALTER TABLE `tbl_sessions`
  MODIFY `session_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `tbl_student_health`
--
ALTER TABLE `tbl_student_health`
  MODIFY `health_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `tbl_student_relations`
--
ALTER TABLE `tbl_student_relations`
  MODIFY `relation_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` mediumint(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
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
