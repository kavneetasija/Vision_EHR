-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema vision_ehr
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema vision_ehr
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `vision_ehr` DEFAULT CHARACTER SET utf8 ;
USE `vision_ehr` ;

-- -----------------------------------------------------
-- Table `vision_ehr`.`tbl_users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vision_ehr`.`tbl_users` (
  `user_id` MEDIUMINT(10) NOT NULL AUTO_INCREMENT COMMENT '',
  `supper_admin` TINYINT(1) NOT NULL DEFAULT '0' COMMENT '',
  `first_name` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `last_name` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `email` VARCHAR(90) NOT NULL COMMENT '',
  `password` VARCHAR(32) NOT NULL COMMENT '',
  `user_role` CHAR(7) NULL DEFAULT NULL COMMENT '',
  `birth_date` DATE NULL DEFAULT NULL COMMENT '',
  `gender` CHAR(6) NULL DEFAULT NULL COMMENT '',
  `cradentials` VARCHAR(10) NULL DEFAULT NULL COMMENT '',
  `work_phone` VARCHAR(17) NULL DEFAULT 'N/A' COMMENT '',
  `cell_phone` VARCHAR(17) NULL DEFAULT 'N/A' COMMENT '',
  `fax_nuber` VARCHAR(17) NULL DEFAULT NULL COMMENT '',
  `address` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `city` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `province` CHAR(2) NULL DEFAULT NULL COMMENT '',
  `postal_code` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `registration_number` VARCHAR(20) NULL DEFAULT NULL COMMENT '',
  `license_number` VARCHAR(20) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`user_id`)  COMMENT '',
  UNIQUE INDEX `email_UNIQUE` (`email` ASC)  COMMENT '')
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `vision_ehr`.`tbl_locations`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vision_ehr`.`tbl_locations` (
  `location_id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `type` VARCHAR(12) NOT NULL COMMENT '',
  `name` VARCHAR(90) NOT NULL COMMENT '',
  `reference_name` VARCHAR(60) NULL DEFAULT NULL COMMENT '',
  `email` VARCHAR(60) NULL DEFAULT NULL COMMENT '',
  `phone` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `address` VARCHAR(45) NOT NULL COMMENT '',
  `city` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `province` CHAR(2) NULL DEFAULT NULL COMMENT '',
  `postal_code` VARCHAR(7) NULL DEFAULT NULL COMMENT '',
  `assigned_doctor` MEDIUMINT(10) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`location_id`)  COMMENT '',
  UNIQUE INDEX `name_UNIQUE` (`name` ASC)  COMMENT '',
  INDEX `location_user_idx` (`assigned_doctor` ASC)  COMMENT '',
  CONSTRAINT `location_user`
    FOREIGN KEY (`assigned_doctor`)
    REFERENCES `vision_ehr`.`tbl_users` (`user_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `vision_ehr`.`tbl_patients`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vision_ehr`.`tbl_patients` (
  `patient_id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `location_id` INT(11) NULL DEFAULT NULL COMMENT '',
  `first_name` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `last_name` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `OHIP_number` BIGINT(10) NULL DEFAULT NULL COMMENT '',
  `OHIP_virsion` CHAR(2) NULL DEFAULT NULL COMMENT '',
  `birth_date` DATE NULL DEFAULT NULL COMMENT '',
  `gender` CHAR(6) NULL DEFAULT NULL COMMENT '',
  `address` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `city` CHAR(20) NULL DEFAULT NULL COMMENT '',
  `province` CHAR(2) NULL DEFAULT NULL COMMENT '',
  `postal_code` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `type` CHAR(7) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`patient_id`)  COMMENT '',
  UNIQUE INDEX `OHIP_number_UNIQUE` (`OHIP_number` ASC)  COMMENT '',
  INDEX `location_id_indx` (`location_id` ASC)  COMMENT '',
  INDEX `location_id_tbl_locations` (`location_id` ASC)  COMMENT '',
  CONSTRAINT `locations_patients`
    FOREIGN KEY (`location_id`)
    REFERENCES `vision_ehr`.`tbl_locations` (`location_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 585
DEFAULT CHARACTER SET = utf8
COMMENT = 'All types of patients Basic info for registration.';


-- -----------------------------------------------------
-- Table `vision_ehr`.`tbl_exam`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vision_ehr`.`tbl_exam` (
  `exam_id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `patient_id` INT(11) NOT NULL COMMENT '',
  `location_id` INT(11) NOT NULL COMMENT '',
  `doctor_id` MEDIUMINT(10) NOT NULL COMMENT '',
  `time` DATETIME NOT NULL COMMENT '',
  PRIMARY KEY (`exam_id`)  COMMENT '',
  UNIQUE INDEX `time_UNIQUE` (`time` ASC)  COMMENT '',
  INDEX `exam_patients_idx` (`patient_id` ASC)  COMMENT '',
  INDEX `exam_locations_idx` (`location_id` ASC)  COMMENT '',
  INDEX `exam_doctor_idx` (`doctor_id` ASC)  COMMENT '',
  CONSTRAINT `exam_doctor`
    FOREIGN KEY (`doctor_id`)
    REFERENCES `vision_ehr`.`tbl_users` (`user_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `exam_locations`
    FOREIGN KEY (`location_id`)
    REFERENCES `vision_ehr`.`tbl_locations` (`location_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `exam_patients`
    FOREIGN KEY (`patient_id`)
    REFERENCES `vision_ehr`.`tbl_patients` (`patient_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 53
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `vision_ehr`.`tbl_acuities`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vision_ehr`.`tbl_acuities` (
  `acuities_id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `exam_id` INT(11) NOT NULL COMMENT '',
  `acuities_INPUT_0` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `acuities_INPUT_1` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `acuities_INPUT_2` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `acuities_INPUT_3` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `acuities_INPUT_4` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `acuities_INPUT_5` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `acuities_INPUT_6` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `acuities_INPUT_7` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `acuities_INPUT_8` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `acuities_INPUT_9` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `acuities_INPUT_10` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `acuities_INPUT_11` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `acuities_INPUT_12` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `acuities_INPUT_13` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `acuities_INPUT_14` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `acuities_INPUT_15` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `acuities_INPUT_16` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `acuities_INPUT_17` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `acuities_INPUT_18` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `acuities_INPUT_19` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `acuities_INPUT_20` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `acuities_INPUT_21` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `acuities_INPUT_22` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `acuities_INPUT_23` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `acuities_INPUT_24` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `acuities_INPUT_25` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `acuities_INPUT_26` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `acuities_INPUT_27` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `acuities_INPUT_28` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `acuities_INPUT_29` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `acuities_INPUT_30` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `acuities_INPUT_31` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `acuities_INPUT_32` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `acuities_INPUT_33` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `acuities_INPUT_34` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `acuities_INPUT_35` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `acuities_INPUT_36` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `acuities_SELECT_0` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `acuities_SELECT_1` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `acuities_SELECT_2` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `acuities_SELECT_3` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `acuities_SELECT_4` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`acuities_id`)  COMMENT '',
  UNIQUE INDEX `exam_id_UNIQUE` (`exam_id` ASC)  COMMENT '',
  CONSTRAINT `acuities_exam`
    FOREIGN KEY (`exam_id`)
    REFERENCES `vision_ehr`.`tbl_exam` (`exam_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 24
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `vision_ehr`.`tbl_sessions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vision_ehr`.`tbl_sessions` (
  `session_id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `location_id` INT(11) NOT NULL COMMENT '',
  `date` DATE NOT NULL COMMENT '',
  PRIMARY KEY (`session_id`)  COMMENT '',
  INDEX `location_id_idx` (`location_id` ASC)  COMMENT '',
  CONSTRAINT `location_session`
    FOREIGN KEY (`location_id`)
    REFERENCES `vision_ehr`.`tbl_locations` (`location_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 13
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `vision_ehr`.`tbl_appointments`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vision_ehr`.`tbl_appointments` (
  `appointment_id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `session_id` INT(11) NOT NULL COMMENT '',
  `patient_id` INT(11) NOT NULL COMMENT '',
  `time` TIME NOT NULL COMMENT '',
  PRIMARY KEY (`appointment_id`)  COMMENT '',
  UNIQUE INDEX `patient_id_UNIQUE` (`patient_id` ASC)  COMMENT '',
  INDEX `session_appointment_idx` (`session_id` ASC)  COMMENT '',
  INDEX `patients_appointments_indx` (`patient_id` ASC)  COMMENT '',
  INDEX `session_appointment_indx` (`session_id` ASC)  COMMENT '',
  CONSTRAINT `patients_appointments`
    FOREIGN KEY (`patient_id`)
    REFERENCES `vision_ehr`.`tbl_patients` (`patient_id`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION,
  CONSTRAINT `sessions_appointments`
    FOREIGN KEY (`session_id`)
    REFERENCES `vision_ehr`.`tbl_sessions` (`session_id`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 19
DEFAULT CHARACTER SET = utf8
COMMENT = 'All patients\' appointment details ';


-- -----------------------------------------------------
-- Table `vision_ehr`.`tbl_diagnosis`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vision_ehr`.`tbl_diagnosis` (
  `diagnosis_id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `exam_id` INT(11) NOT NULL COMMENT '',
  `diagnosis_INPUT_0` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `diagnosis_INPUT_1` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `diagnosis_INPUT_2` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `diagnosis_INPUT_3` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `diagnosis_INPUT_4` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `diagnosis_INPUT_5` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `diagnosis_INPUT_6` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `diagnosis_INPUT_7` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `diagnosis_INPUT_8` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `diagnosis_INPUT_9` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `diagnosis_INPUT_10` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `diagnosis_INPUT_11` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `diagnosis_INPUT_12` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `diagnosis_INPUT_13` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `diagnosis_INPUT_14` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `diagnosis_INPUT_15` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `diagnosis_INPUT_16` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `diagnosis_INPUT_17` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `diagnosis_INPUT_18` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `diagnosis_INPUT_19` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `diagnosis_INPUT_20` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `diagnosis_INPUT_21` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `diagnosis_INPUT_22` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `diagnosis_INPUT_23` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `diagnosis_INPUT_24` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `diagnosis_INPUT_25` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `diagnosis_INPUT_26` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `diagnosis_INPUT_27` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `diagnosis_INPUT_28` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `diagnosis_INPUT_29` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `diagnosis_INPUT_30` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `diagnosis_INPUT_31` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `diagnosis_INPUT_32` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `diagnosis_INPUT_33` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `diagnosis_INPUT_34` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `diagnosis_INPUT_35` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `diagnosis_INPUT_36` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `diagnosis_INPUT_37` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `diagnosis_INPUT_38` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `diagnosis_INPUT_39` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `diagnosis_INPUT_40` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `diagnosis_INPUT_41` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `diagnosis_INPUT_42` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `diagnosis_INPUT_43` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `diagnosis_INPUT_44` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `diagnosis_INPUT_45` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`diagnosis_id`)  COMMENT '',
  UNIQUE INDEX `exam_id_UNIQUE` (`exam_id` ASC)  COMMENT '',
  CONSTRAINT `diagnosis_exam`
    FOREIGN KEY (`exam_id`)
    REFERENCES `vision_ehr`.`tbl_exam` (`exam_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `vision_ehr`.`tbl_external`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vision_ehr`.`tbl_external` (
  `external_id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `exam_id` INT(11) NOT NULL COMMENT '',
  `external_INPUT_0` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `external_INPUT_1` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `external_INPUT_2` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `external_INPUT_3` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `external_INPUT_4` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `external_INPUT_5` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `external_INPUT_6` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `external_INPUT_7` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `external_INPUT_8` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `external_INPUT_9` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `external_INPUT_10` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `external_INPUT_11` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `external_INPUT_12` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `external_INPUT_13` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `external_INPUT_14` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `external_INPUT_15` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `external_INPUT_16` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `external_INPUT_17` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `external_INPUT_18` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `external_INPUT_19` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `external_INPUT_20` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `external_INPUT_21` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `external_INPUT_22` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`external_id`)  COMMENT '',
  UNIQUE INDEX `exam_id_UNIQUE` (`exam_id` ASC)  COMMENT '',
  INDEX `external_exam_idx` (`exam_id` ASC)  COMMENT '',
  CONSTRAINT `external_exam`
    FOREIGN KEY (`exam_id`)
    REFERENCES `vision_ehr`.`tbl_exam` (`exam_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = utf8
COMMENT = '																			';


-- -----------------------------------------------------
-- Table `vision_ehr`.`tbl_gtts`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vision_ehr`.`tbl_gtts` (
  `gtts_id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `gtts_name` VARCHAR(45) NOT NULL COMMENT '',
  PRIMARY KEY (`gtts_id`)  COMMENT '',
  UNIQUE INDEX `gtts_name_UNIQUE` (`gtts_name` ASC)  COMMENT '')
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `vision_ehr`.`tbl_internal`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vision_ehr`.`tbl_internal` (
  `internal_id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `exam_id` INT(11) NOT NULL COMMENT '',
  `internal_INPUT_0` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `internal_INPUT_1` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `internal_INPUT_2` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `internal_INPUT_3` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `internal_INPUT_4` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `internal_INPUT_5` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `internal_INPUT_6` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `internal_INPUT_7` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `internal_INPUT_8` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `internal_INPUT_9` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `internal_INPUT_10` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `internal_INPUT_11` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `internal_INPUT_12` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `internal_INPUT_13` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `internal_INPUT_14` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `internal_INPUT_15` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `internal_INPUT_16` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `internal_INPUT_17` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `internal_INPUT_18` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `internal_INPUT_19` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `internal_INPUT_20` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `internal_INPUT_21` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `internal_INPUT_22` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `internal_INPUT_23` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `internal_INPUT_24` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `internal_INPUT_25` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `internal_INPUT_26` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `internal_INPUT_27` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `internal_INPUT_28` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `internal_INPUT_29` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `internal_INPUT_30` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `internal_INPUT_31` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `internal_INPUT_32` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `internal_INPUT_33` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `internal_INPUT_34` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `internal_INPUT_35` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `internal_INPUT_36` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `internal_INPUT_37` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `internal_INPUT_38` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `internal_INPUT_39` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `internal_INPUT_40` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `internal_SELECT_0` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`internal_id`)  COMMENT '',
  UNIQUE INDEX `exam_id_UNIQUE` (`exam_id` ASC)  COMMENT '',
  CONSTRAINT `internal_exam`
    FOREIGN KEY (`exam_id`)
    REFERENCES `vision_ehr`.`tbl_exam` (`exam_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `vision_ehr`.`tbl_retinoscopy`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vision_ehr`.`tbl_retinoscopy` (
  `retinoscopy_id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `exam_id` INT(11) NOT NULL COMMENT '',
  `retinoscopy_INPUT_0` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `retinoscopy_INPUT_1` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `retinoscopy_INPUT_2` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `retinoscopy_INPUT_3` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `retinoscopy_INPUT_4` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `retinoscopy_INPUT_5` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `retinoscopy_INPUT_6` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `retinoscopy_INPUT_7` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `retinoscopy_INPUT_8` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `retinoscopy_INPUT_9` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `retinoscopy_INPUT_10` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `retinoscopy_INPUT_11` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `retinoscopy_INPUT_12` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `retinoscopy_INPUT_13` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `retinoscopy_INPUT_14` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `retinoscopy_INPUT_15` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `retinoscopy_INPUT_16` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `retinoscopy_INPUT_17` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `retinoscopy_INPUT_18` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `retinoscopy_INPUT_19` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `retinoscopy_INPUT_20` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `retinoscopy_INPUT_21` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `retinoscopy_INPUT_22` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `retinoscopy_INPUT_23` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `retinoscopy_INPUT_24` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `retinoscopy_INPUT_25` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `retinoscopy_INPUT_26` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `retinoscopy_INPUT_27` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `retinoscopy_INPUT_28` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `retinoscopy_INPUT_29` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `retinoscopy_INPUT_30` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `retinoscopy_INPUT_31` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `retinoscopy_INPUT_32` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `retinoscopy_INPUT_33` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `retinoscopy_INPUT_34` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `retinoscopy_INPUT_35` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `retinoscopy_INPUT_36` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `retinoscopy_INPUT_37` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `retinoscopy_INPUT_38` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `retinoscopy_INPUT_39` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `retinoscopy_INPUT_40` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `retinoscopy_INPUT_41` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `retinoscopy_INPUT_42` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `retinoscopy_INPUT_43` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `retinoscopy_INPUT_44` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `retinoscopy_INPUT_45` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`retinoscopy_id`)  COMMENT '',
  UNIQUE INDEX `exam_id_UNIQUE` (`exam_id` ASC)  COMMENT '',
  CONSTRAINT `retinoscopy_exam`
    FOREIGN KEY (`exam_id`)
    REFERENCES `vision_ehr`.`tbl_exam` (`exam_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 10
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `vision_ehr`.`tbl_senior_relations`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vision_ehr`.`tbl_senior_relations` (
  `relation_id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `patient_id` INT(11) NOT NULL COMMENT '',
  `room` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `first_name` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `last_name` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `phone` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `other_phone` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `email` VARCHAR(60) NULL DEFAULT NULL COMMENT '',
  `relation` VARCHAR(20) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`relation_id`)  COMMENT '',
  UNIQUE INDEX `patient_id_UNIQUE` (`patient_id` ASC)  COMMENT '',
  INDEX `relation_patient_senior_idx` (`patient_id` ASC)  COMMENT '',
  CONSTRAINT `relation_patient_senior`
    FOREIGN KEY (`patient_id`)
    REFERENCES `vision_ehr`.`tbl_patients` (`patient_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `vision_ehr`.`tbl_student_health`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vision_ehr`.`tbl_student_health` (
  `health_id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `patient_id` INT(11) NOT NULL COMMENT '',
  `share_info` CHAR(3) NULL DEFAULT NULL COMMENT '',
  `first_exam` CHAR(3) NULL DEFAULT NULL COMMENT '',
  `last_exam_year` VARCHAR(10) NULL DEFAULT NULL COMMENT '',
  `eye_condition` VARCHAR(90) NULL DEFAULT NULL COMMENT '',
  `medical_condition` CHAR(3) NULL DEFAULT NULL COMMENT '',
  `medical_condition_text` VARCHAR(255) NULL DEFAULT NULL COMMENT '',
  `medication` CHAR(3) NULL DEFAULT NULL COMMENT '',
  `medication_text` VARCHAR(255) NULL DEFAULT NULL COMMENT '',
  `allergies` CHAR(3) NULL DEFAULT NULL COMMENT '',
  `allergies_text` VARCHAR(255) NULL DEFAULT NULL COMMENT '',
  `relative_eye_condition` CHAR(3) NULL DEFAULT NULL COMMENT '',
  `relative_eye_condition_text` VARCHAR(255) NULL DEFAULT NULL COMMENT '',
  `other_text` VARCHAR(255) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`health_id`)  COMMENT '',
  UNIQUE INDEX `patient_id_UNIQUE` (`patient_id` ASC)  COMMENT '',
  INDEX `health_patient_idx` (`patient_id` ASC)  COMMENT '',
  CONSTRAINT `health_patient`
    FOREIGN KEY (`patient_id`)
    REFERENCES `vision_ehr`.`tbl_patients` (`patient_id`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 12
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `vision_ehr`.`tbl_student_relations`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vision_ehr`.`tbl_student_relations` (
  `relation_id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `patient_id` INT(11) NOT NULL COMMENT '',
  `first_name` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `last_name` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `phone` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `other_phone` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `email` VARCHAR(60) NULL DEFAULT NULL COMMENT '',
  `teacher_name` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `grade` VARCHAR(10) NULL DEFAULT NULL COMMENT '',
  `class` VARCHAR(10) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`relation_id`)  COMMENT '',
  UNIQUE INDEX `patient_id_UNIQUE` (`patient_id` ASC)  COMMENT '',
  INDEX `relation_patient_idx` (`patient_id` ASC)  COMMENT '',
  CONSTRAINT `relation_patient`
    FOREIGN KEY (`patient_id`)
    REFERENCES `vision_ehr`.`tbl_patients` (`patient_id`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 12
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `vision_ehr`.`tbl_tonometry`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vision_ehr`.`tbl_tonometry` (
  `tonometry_id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `exam_id` INT(11) NOT NULL COMMENT '',
  `tonometry_INPUT_0` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `tonometry_INPUT_1` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `tonometry_INPUT_2` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `tonometry_INPUT_3` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `tonometry_INPUT_4` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `tonometry_INPUT_5` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `tonometry_INPUT_6` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `tonometry_INPUT_7` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `tonometry_INPUT_8` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `tonometry_INPUT_9` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `tonometry_INPUT_10` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `tonometry_INPUT_11` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `tonometry_INPUT_12` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `tonometry_INPUT_13` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `tonometry_INPUT_14` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `tonometry_INPUT_15` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `tonometry_INPUT_16` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `tonometry_INPUT_17` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `tonometry_INPUT_18` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `tonometry_INPUT_19` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `tonometry_SELECT_0` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`tonometry_id`)  COMMENT '',
  UNIQUE INDEX `exam_id_UNIQUE` (`exam_id` ASC)  COMMENT '',
  INDEX `tonometry_exam_idx` (`exam_id` ASC)  COMMENT '',
  CONSTRAINT `tonometry_exam`
    FOREIGN KEY (`exam_id`)
    REFERENCES `vision_ehr`.`tbl_exam` (`exam_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
