<?php

/**
 * Created by PhpStorm.
 * User: Dushyant
 * Date: 2015-12-09
 * Time: 5:46 PM
 */
include('class.Patient.inc');
class Exam extends Patient
{
    public $examId;

    //Acuities parameters
    public $acuities_INPUT_0; public $acuities_INPUT_1; public $acuities_INPUT_2; public $acuities_INPUT_3;
    public $acuities_INPUT_4; public $acuities_INPUT_5; public $acuities_INPUT_6; public $acuities_INPUT_7;
    public $acuities_INPUT_8;public $acuities_INPUT_9;public $acuities_INPUT_10;public $acuities_INPUT_11;
    public $acuities_INPUT_12;public $acuities_INPUT_13;public $acuities_INPUT_14;public $acuities_INPUT_15;
    public $acuities_INPUT_16;public $acuities_INPUT_17;public $acuities_INPUT_18;public $acuities_INPUT_19;
    public $acuities_INPUT_20;public $acuities_INPUT_21;public $acuities_INPUT_22;public $acuities_INPUT_23;
    public $acuities_INPUT_24;public $acuities_INPUT_25;public $acuities_INPUT_26;public $acuities_INPUT_27;
    public $acuities_INPUT_28;public $acuities_INPUT_29;public $acuities_INPUT_30;public $acuities_INPUT_31;
    public $acuities_INPUT_32;public $acuities_INPUT_33;public $acuities_INPUT_34;public $acuities_INPUT_35;
    public $acuities_INPUT_36;public $acuities_SELECT_0;public $acuities_SELECT_1;public $acuities_SELECT_2;
    public $acuities_SELECT_3;public $acuities_SELECT_4;

    //Retinoscopy parameters
    public $retinoscopy_INPUT_0; public $retinoscopy_INPUT_1; public $retinoscopy_INPUT_2; public $retinoscopy_INPUT_3;
    public $retinoscopy_INPUT_4; public $retinoscopy_INPUT_5; public $retinoscopy_INPUT_6; public $retinoscopy_INPUT_7;
    public $retinoscopy_INPUT_8; public $retinoscopy_INPUT_9;public  $retinoscopy_INPUT_10;public $retinoscopy_INPUT_11;
    public $retinoscopy_INPUT_12;public $retinoscopy_INPUT_13;public $retinoscopy_INPUT_14;public $retinoscopy_INPUT_15;
    public $retinoscopy_INPUT_16;public $retinoscopy_INPUT_17;public $retinoscopy_INPUT_18;public $retinoscopy_INPUT_19;
    public $retinoscopy_INPUT_20;public $retinoscopy_INPUT_21;public $retinoscopy_INPUT_22;public $retinoscopy_INPUT_23;
    public $retinoscopy_INPUT_24;public $retinoscopy_INPUT_25;public $retinoscopy_INPUT_26;public $retinoscopy_INPUT_27;
    public $retinoscopy_INPUT_28;public $retinoscopy_INPUT_29;public $retinoscopy_INPUT_30;public $retinoscopy_INPUT_31;
    public $retinoscopy_INPUT_32;public $retinoscopy_INPUT_33;public $retinoscopy_INPUT_34;public $retinoscopy_INPUT_35;
    public $retinoscopy_INPUT_36;public $retinoscopy_INPUT_37;public $retinoscopy_INPUT_38;public $retinoscopy_INPUT_39;
    public $retinoscopy_INPUT_40;public $retinoscopy_INPUT_41;public $retinoscopy_INPUT_42;public $retinoscopy_INPUT_43;
    public $retinoscopy_INPUT_44;public $retinoscopy_INPUT_45;

    //External parameters
    public $external_INPUT_0;public $external_INPUT_1;public $external_INPUT_2;
    public $external_INPUT_3;public $external_INPUT_4;public $external_INPUT_5;
    public $external_INPUT_6;public $external_INPUT_7;public $external_INPUT_8;
    public $external_INPUT_9;public $external_INPUT_10;public $external_INPUT_11;
    public $external_INPUT_12;public $external_INPUT_13;public $external_INPUT_14;
    public $external_INPUT_15;public $external_INPUT_16;public $external_INPUT_17;
    public $external_INPUT_18;public $external_INPUT_19;public $external_INPUT_20;
    public $external_INPUT_21;public $external_INPUT_22;

    //Internal parameters
    public $internal_INPUT_0;public $internal_INPUT_1;public $internal_INPUT_2;
    public $internal_INPUT_3;public $internal_INPUT_4;public $internal_INPUT_5;
    public $internal_INPUT_6;public $internal_INPUT_7;public $internal_INPUT_8;
    public $internal_INPUT_9;public $internal_INPUT_10;public $internal_INPUT_11;
    public $internal_INPUT_12;public $internal_INPUT_13;public $internal_INPUT_14;
    public $internal_INPUT_15;public $internal_INPUT_16;public $internal_INPUT_17;
    public $internal_INPUT_18;public $internal_INPUT_19;public $internal_INPUT_20;
    public $internal_INPUT_21;public $internal_INPUT_22;public $internal_INPUT_23;
    public $internal_INPUT_24;public $internal_INPUT_25;public $internal_INPUT_26;
    public $internal_INPUT_27;public $internal_INPUT_28;public $internal_INPUT_29;
    public $internal_INPUT_30;public $internal_INPUT_31;public $internal_INPUT_32;
    public $internal_INPUT_33;public $internal_INPUT_34;public $internal_INPUT_35;
    public $internal_INPUT_36;public $internal_INPUT_37;public $internal_INPUT_38;
    public $internal_INPUT_39;public $internal_INPUT_40;public $internal_SELECT_0;

    //Tonometry parameters
    public $tonometry_INPUT_0;public $tonometry_INPUT_1;public $tonometry_INPUT_2;
    public $tonometry_INPUT_3;public $tonometry_INPUT_4;public $tonometry_INPUT_5;
    public $tonometry_INPUT_6;public $tonometry_INPUT_7;public $tonometry_INPUT_8;
    public $tonometry_INPUT_9;public $tonometry_INPUT_10;public $tonometry_INPUT_11;
    public $tonometry_INPUT_12;public $tonometry_INPUT_13;public $tonometry_INPUT_14;
    public $tonometry_INPUT_15;public $tonometry_INPUT_16;public $tonometry_INPUT_17;
    public $tonometry_INPUT_18;public $tonometry_INPUT_19;public $tonometry_SELECT_0;

    //Diagnosis
    public $diagnosis_INPUT_0;public $diagnosis_INPUT_1;public $diagnosis_INPUT_2;public $diagnosis_INPUT_3;
    public $diagnosis_INPUT_4;public $diagnosis_INPUT_5;public $diagnosis_INPUT_6;public $diagnosis_INPUT_7;
    public $diagnosis_INPUT_8;public $diagnosis_INPUT_9;public $diagnosis_INPUT_10;public $diagnosis_INPUT_11;
    public $diagnosis_INPUT_12;public $diagnosis_INPUT_13;public $diagnosis_INPUT_14;public $diagnosis_INPUT_15;
    public $diagnosis_INPUT_16;public $diagnosis_INPUT_17;public $diagnosis_INPUT_18;public $diagnosis_INPUT_19;
    public $diagnosis_INPUT_20;public $diagnosis_INPUT_21;public $diagnosis_INPUT_22;public $diagnosis_INPUT_23;
    public $diagnosis_INPUT_24;public $diagnosis_INPUT_25;public $diagnosis_INPUT_26;public $diagnosis_INPUT_27;
    public $diagnosis_INPUT_28;public $diagnosis_INPUT_29;public $diagnosis_INPUT_30;public $diagnosis_INPUT_31;
    public $diagnosis_INPUT_32;public $diagnosis_INPUT_33;public $diagnosis_INPUT_34;public $diagnosis_INPUT_35;
    public $diagnosis_INPUT_36;public $diagnosis_INPUT_37;public $diagnosis_INPUT_38;public $diagnosis_INPUT_39;
    public $diagnosis_INPUT_40;public $diagnosis_INPUT_41;public $diagnosis_INPUT_42;public $diagnosis_INPUT_43;
    public $diagnosis_INPUT_44;public $diagnosis_INPUT_45;

    //create new exam
   function createExamByPatientId($patientId,$doctorId){
       //timestamp
       $examTime =  date('Y-m-d H:i:s');
       //get location id
       $sqlSelectPatient = "SELECT location_id FROM tbl_patients WHERE patient_id = '$patientId'";
       $location = $this->queryDatabase($sqlSelectPatient);
       $location = mysqli_fetch_assoc($location);
       $location = $location['location_id'];
       //Insert Exam
       $sqlInsertExam = "INSERT INTO tbl_exam (patient_id,location_id,doctor_id,time) VALUES ('$patientId','$location','$doctorId','$examTime')";
       $this->queryDatabase($sqlInsertExam);
          return $examID =  mysqli_insert_id($this->connection);
   }
    //select all gtts from table
    function getAllGtts(){
        $sqlSelectGtts = "SELECT gtts_name FROM tbl_gtts";
        return $gtts = $this->queryDatabase($sqlSelectGtts);
    }

    //On staging state prepare all tables to set and update data

    //On  insert acuities
    function insertAcuities(){

        $sqlInsertAcuities = "INSERT INTO tbl_acuities(exam_id,acuities_INPUT_0,acuities_INPUT_1,acuities_INPUT_2,acuities_INPUT_3,
                                                       acuities_INPUT_4,acuities_INPUT_5,acuities_INPUT_6,acuities_INPUT_7,
                                                       acuities_INPUT_8,acuities_INPUT_9,acuities_INPUT_10,acuities_INPUT_11,
                                                       acuities_INPUT_12,acuities_INPUT_13,acuities_INPUT_14,acuities_INPUT_15,
                                                       acuities_INPUT_16,acuities_INPUT_17,acuities_INPUT_18,acuities_INPUT_19,
                                                       acuities_INPUT_20,acuities_INPUT_21,acuities_INPUT_22,acuities_INPUT_23,
                                                       acuities_INPUT_24,acuities_INPUT_25,acuities_INPUT_26,acuities_INPUT_27,
                                                       acuities_INPUT_28,acuities_INPUT_29,acuities_INPUT_30,acuities_INPUT_31,
                                                       acuities_INPUT_32,acuities_INPUT_33,acuities_INPUT_34,acuities_INPUT_35,
                                                       acuities_INPUT_36,acuities_SELECT_0,acuities_SELECT_1,acuities_SELECT_2,
                                                       acuities_SELECT_3,acuities_SELECT_4)
                                                      VALUES ('$this->examId','$this->acuities_INPUT_0','$this->acuities_INPUT_1','$this->acuities_INPUT_2','$this->acuities_INPUT_3',
                                                              '$this->acuities_INPUT_4','$this->acuities_INPUT_5','$this->acuities_INPUT_6','$this->acuities_INPUT_7',
                                                              '$this->acuities_INPUT_8','$this->acuities_INPUT_9','$this->acuities_INPUT_10','$this->acuities_INPUT_11',
                                                              '$this->acuities_INPUT_12','$this->acuities_INPUT_13','$this->acuities_INPUT_14','$this->acuities_INPUT_15',
                                                              '$this->acuities_INPUT_16','$this->acuities_INPUT_17','$this->acuities_INPUT_18','$this->acuities_INPUT_19',
                                                              '$this->acuities_INPUT_20','$this->acuities_INPUT_21','$this->acuities_INPUT_22','$this->acuities_INPUT_23',
                                                              '$this->acuities_INPUT_24','$this->acuities_INPUT_25','$this->acuities_INPUT_26','$this->acuities_INPUT_27',
                                                              '$this->acuities_INPUT_28','$this->acuities_INPUT_29','$this->acuities_INPUT_30','$this->acuities_INPUT_31',
                                                              '$this->acuities_INPUT_32','$this->acuities_INPUT_33','$this->acuities_INPUT_34','$this->acuities_INPUT_35',
                                                              '$this->acuities_INPUT_36','$this->acuities_SELECT_0','$this->acuities_SELECT_1','$this->acuities_SELECT_2',
                                                              '$this->acuities_SELECT_3','$this->acuities_SELECT_4');
                                                              ";
        return $this->queryDatabase($sqlInsertAcuities);
    }

    //on update acuities
    function updateAcuities(){
        $sqlUpdateAcuities = "UPDATE tbl_acuities SET `acuities_INPUT_0` = '$this->acuities_INPUT_0',`acuities_INPUT_1` = '$this->acuities_INPUT_1',`acuities_INPUT_2` = '$this->acuities_INPUT_2',
                                                      `acuities_INPUT_3` = '$this->acuities_INPUT_3',`acuities_INPUT_4` = '$this->acuities_INPUT_4',
                                                      `acuities_INPUT_5` = '$this->acuities_INPUT_5',`acuities_INPUT_6` = '$this->acuities_INPUT_6',
                                                      `acuities_INPUT_7` = '$this->acuities_INPUT_7',`acuities_INPUT_8` = '$this->acuities_INPUT_8',
                                                      `acuities_INPUT_9` = '$this->acuities_INPUT_9',`acuities_INPUT_10` = '$this->acuities_INPUT_10',
                                                      `acuities_INPUT_11` = '$this->acuities_INPUT_11',`acuities_INPUT_12` = '$this->acuities_INPUT_12',
                                                      `acuities_INPUT_13` = '$this->acuities_INPUT_13',`acuities_INPUT_14` = '$this->acuities_INPUT_14',
                                                      `acuities_INPUT_15` = '$this->acuities_INPUT_15',`acuities_INPUT_16` = '$this->acuities_INPUT_16',
                                                      `acuities_INPUT_17` = '$this->acuities_INPUT_17',`acuities_INPUT_18` = '$this->acuities_INPUT_18',
                                                      `acuities_INPUT_19` = '$this->acuities_INPUT_19',`acuities_INPUT_20` = '$this->acuities_INPUT_20',
                                                      `acuities_INPUT_21` = '$this->acuities_INPUT_21',`acuities_INPUT_22` = '$this->acuities_INPUT_22',
                                                      `acuities_INPUT_23` = '$this->acuities_INPUT_23',`acuities_INPUT_24` = '$this->acuities_INPUT_24',
                                                      `acuities_INPUT_25` = '$this->acuities_INPUT_25',`acuities_INPUT_26` = '$this->acuities_INPUT_26',
                                                      `acuities_INPUT_27` = '$this->acuities_INPUT_27',`acuities_INPUT_28` = '$this->acuities_INPUT_28',
                                                      `acuities_INPUT_29` = '$this->acuities_INPUT_29',`acuities_INPUT_30` = '$this->acuities_INPUT_30',
                                                      `acuities_INPUT_31` = '$this->acuities_INPUT_31',`acuities_INPUT_32` = '$this->acuities_INPUT_32',
                                                      `acuities_INPUT_33` = '$this->acuities_INPUT_33',`acuities_INPUT_34` = '$this->acuities_INPUT_34',
                                                      `acuities_INPUT_35` = '$this->acuities_INPUT_35',`acuities_INPUT_36` = '$this->acuities_INPUT_36',
                                                      `acuities_SELECT_0` = '$this->acuities_SELECT_0',`acuities_SELECT_1` = '$this->acuities_SELECT_1',
                                                      `acuities_SELECT_2` = '$this->acuities_SELECT_2',`acuities_SELECT_3` = '$this->acuities_SELECT_3',
                                                      `acuities_SELECT_4` = '$this->acuities_SELECT_4'
                                                      WHERE exam_id = '$this->examId'";
        return $this->queryDatabase($sqlUpdateAcuities);
    }

    //On insert Retinoscopy
    function insertRetinoscopy(){

        $sqlInsertRetinoscopy = "INSERT INTO tbl_retinoscopy(exam_id,retinoscopy_INPUT_0,retinoscopy_INPUT_1,retinoscopy_INPUT_2,retinoscopy_INPUT_3,
                                                             retinoscopy_INPUT_4,retinoscopy_INPUT_5,retinoscopy_INPUT_6,retinoscopy_INPUT_7,
                                                             retinoscopy_INPUT_8,retinoscopy_INPUT_9,retinoscopy_INPUT_10,retinoscopy_INPUT_11,
                                                             retinoscopy_INPUT_12,retinoscopy_INPUT_13,retinoscopy_INPUT_14,retinoscopy_INPUT_15,
                                                             retinoscopy_INPUT_16,retinoscopy_INPUT_17,retinoscopy_INPUT_18,retinoscopy_INPUT_19,
                                                             retinoscopy_INPUT_20,retinoscopy_INPUT_21,retinoscopy_INPUT_22,retinoscopy_INPUT_23,
                                                             retinoscopy_INPUT_24,retinoscopy_INPUT_25,retinoscopy_INPUT_26,retinoscopy_INPUT_27,
                                                             retinoscopy_INPUT_28,retinoscopy_INPUT_29,retinoscopy_INPUT_30,retinoscopy_INPUT_31,
                                                             retinoscopy_INPUT_32,retinoscopy_INPUT_33,retinoscopy_INPUT_34,retinoscopy_INPUT_35,
                                                             retinoscopy_INPUT_36,retinoscopy_INPUT_37,retinoscopy_INPUT_38,retinoscopy_INPUT_39,
                                                             retinoscopy_INPUT_40,retinoscopy_INPUT_41,retinoscopy_INPUT_42,retinoscopy_INPUT_43,
                                                             retinoscopy_INPUT_44,retinoscopy_INPUT_45)
                                 VALUES ('$this->examId','$this->retinoscopy_INPUT_0','$this->retinoscopy_INPUT_1','$this->retinoscopy_INPUT_2',
                                         '$this->retinoscopy_INPUT_3','$this->retinoscopy_INPUT_4','$this->retinoscopy_INPUT_5',
                                         '$this->retinoscopy_INPUT_6','$this->retinoscopy_INPUT_7','$this->retinoscopy_INPUT_8',
                                         '$this->retinoscopy_INPUT_9','$this->retinoscopy_INPUT_10','$this->retinoscopy_INPUT_11',
                                         '$this->retinoscopy_INPUT_12','$this->retinoscopy_INPUT_13','$this->retinoscopy_INPUT_14',
                                         '$this->retinoscopy_INPUT_15','$this->retinoscopy_INPUT_16','$this->retinoscopy_INPUT_17',
                                         '$this->retinoscopy_INPUT_18','$this->retinoscopy_INPUT_19','$this->retinoscopy_INPUT_20',
                                         '$this->retinoscopy_INPUT_21','$this->retinoscopy_INPUT_22','$this->retinoscopy_INPUT_23',
                                         '$this->retinoscopy_INPUT_24','$this->retinoscopy_INPUT_25','$this->retinoscopy_INPUT_26',
                                         '$this->retinoscopy_INPUT_27','$this->retinoscopy_INPUT_28','$this->retinoscopy_INPUT_29',
                                         '$this->retinoscopy_INPUT_30','$this->retinoscopy_INPUT_31','$this->retinoscopy_INPUT_32',
                                         '$this->retinoscopy_INPUT_33','$this->retinoscopy_INPUT_34','$this->retinoscopy_INPUT_35',
                                         '$this->retinoscopy_INPUT_36','$this->retinoscopy_INPUT_37','$this->retinoscopy_INPUT_38',
                                         '$this->retinoscopy_INPUT_39','$this->retinoscopy_INPUT_40','$this->retinoscopy_INPUT_41',
                                         '$this->retinoscopy_INPUT_42','$this->retinoscopy_INPUT_43','$this->retinoscopy_INPUT_44',
                                         '$this->retinoscopy_INPUT_45');
                                          ";
        return $this->queryDatabase($sqlInsertRetinoscopy);
    }

    //on update Retinoscopy
    function updateRetinoscopy(){
        $sqlUpdateRetinoscopy = "UPDATE tbl_retinoscopy SET `retinoscopy_INPUT_0` = '$this->retinoscopy_INPUT_0',
                                                            `retinoscopy_INPUT_1` = '$this->retinoscopy_INPUT_1',
                                                            `retinoscopy_INPUT_2` = '$this->retinoscopy_INPUT_2',
                                                            `retinoscopy_INPUT_3` = '$this->retinoscopy_INPUT_3',
                                                            `retinoscopy_INPUT_4` = '$this->retinoscopy_INPUT_4',
                                                            `retinoscopy_INPUT_5` = '$this->retinoscopy_INPUT_5',
                                                            `retinoscopy_INPUT_6` = '$this->retinoscopy_INPUT_6',
                                                            `retinoscopy_INPUT_7` = '$this->retinoscopy_INPUT_7',
                                                            `retinoscopy_INPUT_8` = '$this->retinoscopy_INPUT_8',
                                                            `retinoscopy_INPUT_9` = '$this->retinoscopy_INPUT_9',
                                                            `retinoscopy_INPUT_10` = '$this->retinoscopy_INPUT_10',
                                                            `retinoscopy_INPUT_11` = '$this->retinoscopy_INPUT_11',
                                                            `retinoscopy_INPUT_12` = '$this->retinoscopy_INPUT_12',
                                                            `retinoscopy_INPUT_13` = '$this->retinoscopy_INPUT_13',
                                                            `retinoscopy_INPUT_14` = '$this->retinoscopy_INPUT_14',
                                                            `retinoscopy_INPUT_15` = '$this->retinoscopy_INPUT_15',
                                                            `retinoscopy_INPUT_16` = '$this->retinoscopy_INPUT_16',
                                                            `retinoscopy_INPUT_17` = '$this->retinoscopy_INPUT_17',
                                                            `retinoscopy_INPUT_18` = '$this->retinoscopy_INPUT_18',
                                                            `retinoscopy_INPUT_19` = '$this->retinoscopy_INPUT_19',
                                                            `retinoscopy_INPUT_20` = '$this->retinoscopy_INPUT_20',
                                                            `retinoscopy_INPUT_21` = '$this->retinoscopy_INPUT_21',
                                                            `retinoscopy_INPUT_22` = '$this->retinoscopy_INPUT_22',
                                                            `retinoscopy_INPUT_23` = '$this->retinoscopy_INPUT_23',
                                                            `retinoscopy_INPUT_24` = '$this->retinoscopy_INPUT_24',
                                                            `retinoscopy_INPUT_25` = '$this->retinoscopy_INPUT_25',
                                                            `retinoscopy_INPUT_26` = '$this->retinoscopy_INPUT_26',
                                                            `retinoscopy_INPUT_27` = '$this->retinoscopy_INPUT_27',
                                                            `retinoscopy_INPUT_28` = '$this->retinoscopy_INPUT_28',
                                                            `retinoscopy_INPUT_29` = '$this->retinoscopy_INPUT_29',
                                                            `retinoscopy_INPUT_30` = '$this->retinoscopy_INPUT_30',
                                                            `retinoscopy_INPUT_31` = '$this->retinoscopy_INPUT_31',
                                                            `retinoscopy_INPUT_32` = '$this->retinoscopy_INPUT_32',
                                                            `retinoscopy_INPUT_33` = '$this->retinoscopy_INPUT_33',
                                                            `retinoscopy_INPUT_34` = '$this->retinoscopy_INPUT_34',
                                                            `retinoscopy_INPUT_35` = '$this->retinoscopy_INPUT_35',
                                                            `retinoscopy_INPUT_36` = '$this->retinoscopy_INPUT_36',
                                                            `retinoscopy_INPUT_37` = '$this->retinoscopy_INPUT_37',
                                                            `retinoscopy_INPUT_38` = '$this->retinoscopy_INPUT_38',
                                                            `retinoscopy_INPUT_39` = '$this->retinoscopy_INPUT_39',
                                                            `retinoscopy_INPUT_40` = '$this->retinoscopy_INPUT_40',
                                                            `retinoscopy_INPUT_41` = '$this->retinoscopy_INPUT_41',
                                                            `retinoscopy_INPUT_42` = '$this->retinoscopy_INPUT_42',
                                                            `retinoscopy_INPUT_43` = '$this->retinoscopy_INPUT_43',
                                                            `retinoscopy_INPUT_44` = '$this->retinoscopy_INPUT_44',
                                                            `retinoscopy_INPUT_45` = '$this->retinoscopy_INPUT_45'
                                                            WHERE exam_id = '$this->examId' ";
        return $this->queryDatabase($sqlUpdateRetinoscopy);
    }

    //On insert external
    function insertExternal(){

        $sqlInsertExternal = "INSERT INTO tbl_external(exam_id,external_INPUT_0,external_INPUT_1,external_INPUT_2,external_INPUT_3,external_INPUT_4,
                                                       external_INPUT_5,external_INPUT_6,external_INPUT_7,external_INPUT_8,external_INPUT_9,external_INPUT_10,
                                                       external_INPUT_11,external_INPUT_12,external_INPUT_13,external_INPUT_14,external_INPUT_15,
                                                       external_INPUT_16,external_INPUT_17,external_INPUT_18,external_INPUT_19,external_INPUT_20,
                                                       external_INPUT_21,external_INPUT_22)
                              VALUES('$this->examId','$this->external_INPUT_0','$this->external_INPUT_1','$this->external_INPUT_2','$this->external_INPUT_3',
                                     '$this->external_INPUT_4','$this->external_INPUT_5','$this->external_INPUT_6','$this->external_INPUT_7',
                                     '$this->external_INPUT_8','$this->external_INPUT_9','$this->external_INPUT_10','$this->external_INPUT_11',
                                     '$this->external_INPUT_12','$this->external_INPUT_13','$this->external_INPUT_14','$this->external_INPUT_15',
                                     '$this->external_INPUT_16','$this->external_INPUT_17','$this->external_INPUT_18','$this->external_INPUT_19',
                                     '$this->external_INPUT_20','$this->external_INPUT_21','$this->external_INPUT_22')";

        return $this->queryDatabase($sqlInsertExternal);
    }

    //on update external
    function updateExternal(){
        $sqlUpdateExternal = "UPDATE tbl_external SET `external_INPUT_0` = '$this->external_INPUT_0',
                                                      `external_INPUT_1` = '$this->external_INPUT_1',
                                                      `external_INPUT_2` = '$this->external_INPUT_2',
                                                      `external_INPUT_3` = '$this->external_INPUT_3',
                                                      `external_INPUT_4` = '$this->external_INPUT_4',
                                                      `external_INPUT_5` = '$this->external_INPUT_5',
                                                      `external_INPUT_6` = '$this->external_INPUT_6',
                                                      `external_INPUT_7` = '$this->external_INPUT_7',
                                                      `external_INPUT_8` = '$this->external_INPUT_8',
                                                      `external_INPUT_9` = '$this->external_INPUT_9',
                                                      `external_INPUT_10` = '$this->external_INPUT_10',
                                                      `external_INPUT_11` = '$this->external_INPUT_11',
                                                      `external_INPUT_12` = '$this->external_INPUT_12',
                                                      `external_INPUT_13` = '$this->external_INPUT_13',
                                                      `external_INPUT_14` = '$this->external_INPUT_14',
                                                      `external_INPUT_15` = '$this->external_INPUT_15',
                                                      `external_INPUT_16` = '$this->external_INPUT_16',
                                                      `external_INPUT_17` = '$this->external_INPUT_17',
                                                      `external_INPUT_18` = '$this->external_INPUT_18',
                                                      `external_INPUT_19` = '$this->external_INPUT_19',
                                                      `external_INPUT_20` = '$this->external_INPUT_20',
                                                      `external_INPUT_21` = '$this->external_INPUT_21',
                                                      `external_INPUT_22` = '$this->external_INPUT_22' WHERE `exam_id` = '$this->examId'";

        return $this->queryDatabase($sqlUpdateExternal);
    }

    //On insert internal
    function insertInternal(){

        $sqlInsertInternal = "INSERT INTO tbl_internal(exam_id,internal_INPUT_0,internal_INPUT_1,internal_INPUT_2,internal_INPUT_3,internal_INPUT_4,
                                                       internal_INPUT_5,internal_INPUT_6,internal_INPUT_7,internal_INPUT_8,internal_INPUT_9,
                                                       internal_INPUT_10,internal_INPUT_11,internal_INPUT_12,internal_INPUT_13,internal_INPUT_14,
                                                       internal_INPUT_15,internal_INPUT_16,internal_INPUT_17,internal_INPUT_18,internal_INPUT_19,
                                                       internal_INPUT_20,internal_INPUT_21,internal_INPUT_22,internal_INPUT_23,internal_INPUT_24,
                                                       internal_INPUT_25,internal_INPUT_26,internal_INPUT_27,internal_INPUT_28,internal_INPUT_29,
                                                       internal_INPUT_30,internal_INPUT_31,internal_INPUT_32,internal_INPUT_33,internal_INPUT_34,
                                                       internal_INPUT_35,internal_INPUT_36,internal_INPUT_37,internal_INPUT_38,internal_INPUT_39,
                                                       internal_INPUT_40,internal_SELECT_0)
                              VALUES('$this->examId','$this->internal_INPUT_0','$this->internal_INPUT_1','$this->internal_INPUT_2','$this->internal_INPUT_3',
                                     '$this->internal_INPUT_4','$this->internal_INPUT_5','$this->internal_INPUT_6','$this->internal_INPUT_7',
                                     '$this->internal_INPUT_8','$this->internal_INPUT_9','$this->internal_INPUT_10','$this->internal_INPUT_11',
                                     '$this->internal_INPUT_12','$this->internal_INPUT_13','$this->internal_INPUT_14','$this->internal_INPUT_15',
                                     '$this->internal_INPUT_16','$this->internal_INPUT_17','$this->internal_INPUT_18','$this->internal_INPUT_19',
                                     '$this->internal_INPUT_20','$this->internal_INPUT_21','$this->internal_INPUT_22','$this->internal_INPUT_23',
                                     '$this->internal_INPUT_24','$this->internal_INPUT_25','$this->internal_INPUT_26','$this->internal_INPUT_27',
                                     '$this->internal_INPUT_28','$this->internal_INPUT_29','$this->internal_INPUT_30','$this->internal_INPUT_31',
                                     '$this->internal_INPUT_32','$this->internal_INPUT_33','$this->internal_INPUT_34','$this->internal_INPUT_35',
                                     '$this->internal_INPUT_36','$this->internal_INPUT_37','$this->internal_INPUT_38','$this->internal_INPUT_39',
                                     '$this->internal_INPUT_40','$this->internal_SELECT_0')";

        return $this->queryDatabase($sqlInsertInternal);
    }

    //on update internal
    function updateInternal(){
        $sqlUpdateInternal = "UPDATE tbl_internal SET `internal_INPUT_0` = '$this->internal_INPUT_0',
                                                      `internal_INPUT_1` = '$this->internal_INPUT_1',
                                                      `internal_INPUT_2` = '$this->internal_INPUT_2',
                                                      `internal_INPUT_3` = '$this->internal_INPUT_3',
                                                      `internal_INPUT_4` = '$this->internal_INPUT_4',
                                                      `internal_INPUT_5` = '$this->internal_INPUT_5',
                                                      `internal_INPUT_6` = '$this->internal_INPUT_6',
                                                      `internal_INPUT_7` = '$this->internal_INPUT_7',
                                                      `internal_INPUT_8` = '$this->internal_INPUT_8',
                                                      `internal_INPUT_9` = '$this->internal_INPUT_9',
                                                      `internal_INPUT_10` = '$this->internal_INPUT_10',
                                                      `internal_INPUT_11` = '$this->internal_INPUT_11',
                                                      `internal_INPUT_12` = '$this->internal_INPUT_12',
                                                      `internal_INPUT_13` = '$this->internal_INPUT_13',
                                                      `internal_INPUT_14` = '$this->internal_INPUT_14',
                                                      `internal_INPUT_15` = '$this->internal_INPUT_15',
                                                      `internal_INPUT_16` = '$this->internal_INPUT_16',
                                                      `internal_INPUT_17` = '$this->internal_INPUT_17',
                                                      `internal_INPUT_18` = '$this->internal_INPUT_18',
                                                      `internal_INPUT_19` = '$this->internal_INPUT_19',
                                                      `internal_INPUT_20` = '$this->internal_INPUT_20',
                                                      `internal_INPUT_21` = '$this->internal_INPUT_21',
                                                      `internal_INPUT_22` = '$this->internal_INPUT_22',
                                                      `internal_INPUT_23` = '$this->internal_INPUT_23',
                                                      `internal_INPUT_24` = '$this->internal_INPUT_24',
                                                      `internal_INPUT_25` = '$this->internal_INPUT_25',
                                                      `internal_INPUT_26` = '$this->internal_INPUT_26',
                                                      `internal_INPUT_27` = '$this->internal_INPUT_27',
                                                      `internal_INPUT_28` = '$this->internal_INPUT_28',
                                                      `internal_INPUT_29` = '$this->internal_INPUT_29',
                                                      `internal_INPUT_30` = '$this->internal_INPUT_30',
                                                       `internal_INPUT_31` = '$this->internal_INPUT_31',
                                                      `internal_INPUT_32` = '$this->internal_INPUT_32',
                                                      `internal_INPUT_33` = '$this->internal_INPUT_33',
                                                      `internal_INPUT_34` = '$this->internal_INPUT_34',
                                                      `internal_INPUT_35` = '$this->internal_INPUT_35',
                                                      `internal_INPUT_36` = '$this->internal_INPUT_36',
                                                      `internal_INPUT_37` = '$this->internal_INPUT_37',
                                                      `internal_INPUT_38` = '$this->internal_INPUT_38',
                                                      `internal_INPUT_39` = '$this->internal_INPUT_39',
                                                      `internal_INPUT_40` = '$this->internal_INPUT_40',
                                                      `internal_SELECT_0` = '$this->internal_SELECT_0'
                            WHERE exam_id = '$this->examId'";

        return $this->queryDatabase($sqlUpdateInternal);
    }

    //on insert Tonometry
    function  insertTonometry(){
        $sqlInsertTonometry = "INSERT INTO tbl_tonometry(exam_id,tonometry_INPUT_0,tonometry_INPUT_1,tonometry_INPUT_2,tonometry_INPUT_3,tonometry_INPUT_4,
                                                         tonometry_INPUT_5,tonometry_INPUT_6,tonometry_INPUT_7,tonometry_INPUT_8,tonometry_INPUT_9,
                                                         tonometry_INPUT_10,tonometry_INPUT_11,tonometry_INPUT_12,tonometry_INPUT_13,tonometry_INPUT_14,
                                                         tonometry_INPUT_15,tonometry_INPUT_16,tonometry_INPUT_17,tonometry_INPUT_18,tonometry_INPUT_19,
                                                         tonometry_SELECT_0)
                               VALUES('$this->examId','$this->tonometry_INPUT_0','$this->tonometry_INPUT_1','$this->tonometry_INPUT_2','$this->tonometry_INPUT_3','$this->tonometry_INPUT_4',
                                      '$this->tonometry_INPUT_5','$this->tonometry_INPUT_6','$this->tonometry_INPUT_7','$this->tonometry_INPUT_8','$this->tonometry_INPUT_9',
                                      '$this->tonometry_INPUT_10','$this->tonometry_INPUT_11','$this->tonometry_INPUT_12','$this->tonometry_INPUT_13','$this->tonometry_INPUT_14',
                                      '$this->tonometry_INPUT_15','$this->tonometry_INPUT_16','$this->tonometry_INPUT_17','$this->tonometry_INPUT_18','$this->tonometry_INPUT_19',
                                      '$this->tonometry_SELECT_0')";

        return $this->queryDatabase($sqlInsertTonometry);
    }

    //on update Tonometery
    function updateTonometry(){
        $sqlUpdateTonometry = "UPDATE tbl_tonometry SET `tonometry_INPUT_0` = '$this->tonometry_INPUT_0',
                                                        `tonometry_INPUT_1` = '$this->tonometry_INPUT_1',
                                                        `tonometry_INPUT_2` = '$this->tonometry_INPUT_2',
                                                        `tonometry_INPUT_3` = '$this->tonometry_INPUT_3',
                                                        `tonometry_INPUT_4` = '$this->tonometry_INPUT_4',
                                                        `tonometry_INPUT_5` = '$this->tonometry_INPUT_5',
                                                        `tonometry_INPUT_6` = '$this->tonometry_INPUT_6',
                                                        `tonometry_INPUT_7` = '$this->tonometry_INPUT_7',
                                                        `tonometry_INPUT_8` = '$this->tonometry_INPUT_8',
                                                        `tonometry_INPUT_9` = '$this->tonometry_INPUT_9',
                                                        `tonometry_INPUT_10` = '$this->tonometry_INPUT_10',
                                                        `tonometry_INPUT_11` = '$this->tonometry_INPUT_11',
                                                        `tonometry_INPUT_12` = '$this->tonometry_INPUT_12',
                                                        `tonometry_INPUT_13` = '$this->tonometry_INPUT_13',
                                                        `tonometry_INPUT_14` = '$this->tonometry_INPUT_14',
                                                        `tonometry_INPUT_15` = '$this->tonometry_INPUT_15',
                                                        `tonometry_INPUT_16` = '$this->tonometry_INPUT_16',
                                                        `tonometry_INPUT_17` = '$this->tonometry_INPUT_17',
                                                        `tonometry_INPUT_18` = '$this->tonometry_INPUT_18',
                                                        `tonometry_INPUT_19` = '$this->tonometry_INPUT_19',
                                                        `tonometry_SELECT_0` = '$this->tonometry_SELECT_0'
                                                        WHERE exam_id = '$this->examId'";
        return $this->queryDatabase($sqlUpdateTonometry);
    }

    //on insert Diagnosis
    function insertDiagnosis(){
        $sqlInsertDiagnosis = "INSERT INTO tbl_diagnosis(exam_id,diagnosis_INPUT_0,diagnosis_INPUT_1,diagnosis_INPUT_2,diagnosis_INPUT_3,diagnosis_INPUT_4,
                                                         diagnosis_INPUT_5,diagnosis_INPUT_6,diagnosis_INPUT_7,diagnosis_INPUT_8,diagnosis_INPUT_9,
                                                         diagnosis_INPUT_10,diagnosis_INPUT_11,diagnosis_INPUT_12,diagnosis_INPUT_13,diagnosis_INPUT_14,
                                                         diagnosis_INPUT_15,diagnosis_INPUT_16,diagnosis_INPUT_17,diagnosis_INPUT_18,diagnosis_INPUT_19,
                                                         diagnosis_INPUT_20,diagnosis_INPUT_21,diagnosis_INPUT_22,diagnosis_INPUT_23,diagnosis_INPUT_24,
                                                         diagnosis_INPUT_25,diagnosis_INPUT_26,diagnosis_INPUT_27,diagnosis_INPUT_28,diagnosis_INPUT_29,
                                                         diagnosis_INPUT_30,diagnosis_INPUT_31,diagnosis_INPUT_32,diagnosis_INPUT_33,diagnosis_INPUT_34,
                                                         diagnosis_INPUT_35,diagnosis_INPUT_36,diagnosis_INPUT_37,diagnosis_INPUT_38,diagnosis_INPUT_39,
                                                         diagnosis_INPUT_40,diagnosis_INPUT_41,diagnosis_INPUT_42,diagnosis_INPUT_43,diagnosis_INPUT_44,
                                                         diagnosis_INPUT_45)
                               VALUES('$this->examId','$this->diagnosis_INPUT_0','$this->diagnosis_INPUT_1','$this->diagnosis_INPUT_2','$this->diagnosis_INPUT_3',
                                      '$this->diagnosis_INPUT_4','$this->diagnosis_INPUT_5','$this->diagnosis_INPUT_6','$this->diagnosis_INPUT_7',
                                      '$this->diagnosis_INPUT_8','$this->diagnosis_INPUT_9','$this->diagnosis_INPUT_10','$this->diagnosis_INPUT_11',
                                      '$this->diagnosis_INPUT_12','$this->diagnosis_INPUT_13','$this->diagnosis_INPUT_14','$this->diagnosis_INPUT_15',
                                      '$this->diagnosis_INPUT_16','$this->diagnosis_INPUT_17','$this->diagnosis_INPUT_18','$this->diagnosis_INPUT_19',
                                      '$this->diagnosis_INPUT_20','$this->diagnosis_INPUT_21','$this->diagnosis_INPUT_22','$this->diagnosis_INPUT_23',
                                      '$this->diagnosis_INPUT_24','$this->diagnosis_INPUT_25','$this->diagnosis_INPUT_26','$this->diagnosis_INPUT_27',
                                      '$this->diagnosis_INPUT_28','$this->diagnosis_INPUT_29','$this->diagnosis_INPUT_30','$this->diagnosis_INPUT_31',
                                      '$this->diagnosis_INPUT_32','$this->diagnosis_INPUT_33','$this->diagnosis_INPUT_34','$this->diagnosis_INPUT_35',
                                      '$this->diagnosis_INPUT_36','$this->diagnosis_INPUT_37','$this->diagnosis_INPUT_38','$this->diagnosis_INPUT_39',
                                      '$this->diagnosis_INPUT_40','$this->diagnosis_INPUT_41','$this->diagnosis_INPUT_42','$this->diagnosis_INPUT_43',
                                      '$this->diagnosis_INPUT_44','$this->diagnosis_INPUT_45')";

        return $this->queryDatabase($sqlInsertDiagnosis);
    }

    //on update Diagnosis
    function updateDiagnosis(){
        $sqlUpdateDiagnosis = "Update tbl_diagnosis SET `diagnosis_INPUT_0` = '$this->diagnosis_INPUT_0',
                                                        `diagnosis_INPUT_1` = '$this->diagnosis_INPUT_1',
                                                        `diagnosis_INPUT_2` = '$this->diagnosis_INPUT_2',
                                                        `diagnosis_INPUT_3` = '$this->diagnosis_INPUT_3',
                                                        `diagnosis_INPUT_4` = '$this->diagnosis_INPUT_4',
                                                        `diagnosis_INPUT_5` = '$this->diagnosis_INPUT_5',
                                                        `diagnosis_INPUT_6` = '$this->diagnosis_INPUT_6',
                                                        `diagnosis_INPUT_7` = '$this->diagnosis_INPUT_7',
                                                        `diagnosis_INPUT_8` = '$this->diagnosis_INPUT_8',
                                                        `diagnosis_INPUT_9` = '$this->diagnosis_INPUT_9',
                                                        `diagnosis_INPUT_10` = '$this->diagnosis_INPUT_10',
                                                        `diagnosis_INPUT_11` = '$this->diagnosis_INPUT_11',
                                                        `diagnosis_INPUT_12` = '$this->diagnosis_INPUT_12',
                                                        `diagnosis_INPUT_13` = '$this->diagnosis_INPUT_13',
                                                        `diagnosis_INPUT_14` = '$this->diagnosis_INPUT_14',
                                                        `diagnosis_INPUT_15` = '$this->diagnosis_INPUT_15',
                                                        `diagnosis_INPUT_16` = '$this->diagnosis_INPUT_16',
                                                        `diagnosis_INPUT_17` = '$this->diagnosis_INPUT_17',
                                                        `diagnosis_INPUT_18` = '$this->diagnosis_INPUT_18',
                                                        `diagnosis_INPUT_19` = '$this->diagnosis_INPUT_19',
                                                        `diagnosis_INPUT_20` = '$this->diagnosis_INPUT_20',
                                                        `diagnosis_INPUT_21` = '$this->diagnosis_INPUT_21',
                                                        `diagnosis_INPUT_22` = '$this->diagnosis_INPUT_22',
                                                        `diagnosis_INPUT_23` = '$this->diagnosis_INPUT_23',
                                                        `diagnosis_INPUT_24` = '$this->diagnosis_INPUT_24',
                                                        `diagnosis_INPUT_25` = '$this->diagnosis_INPUT_25',
                                                        `diagnosis_INPUT_26` = '$this->diagnosis_INPUT_26',
                                                        `diagnosis_INPUT_27` = '$this->diagnosis_INPUT_27',
                                                        `diagnosis_INPUT_28` = '$this->diagnosis_INPUT_28',
                                                        `diagnosis_INPUT_29` = '$this->diagnosis_INPUT_29',
                                                        `diagnosis_INPUT_30` = '$this->diagnosis_INPUT_30',
                                                        `diagnosis_INPUT_31` = '$this->diagnosis_INPUT_31',
                                                        `diagnosis_INPUT_32` = '$this->diagnosis_INPUT_32',
                                                        `diagnosis_INPUT_33` = '$this->diagnosis_INPUT_33',
                                                        `diagnosis_INPUT_34` = '$this->diagnosis_INPUT_34',
                                                        `diagnosis_INPUT_35` = '$this->diagnosis_INPUT_35',
                                                        `diagnosis_INPUT_36` = '$this->diagnosis_INPUT_36',
                                                        `diagnosis_INPUT_37` = '$this->diagnosis_INPUT_37',
                                                        `diagnosis_INPUT_38` = '$this->diagnosis_INPUT_38',
                                                        `diagnosis_INPUT_39` = '$this->diagnosis_INPUT_39',
                                                        `diagnosis_INPUT_40` = '$this->diagnosis_INPUT_40',
                                                        `diagnosis_INPUT_41` = '$this->diagnosis_INPUT_41',
                                                        `diagnosis_INPUT_42` = '$this->diagnosis_INPUT_42',
                                                        `diagnosis_INPUT_43` = '$this->diagnosis_INPUT_43',
                                                        `diagnosis_INPUT_44` = '$this->diagnosis_INPUT_44',
                                                        `diagnosis_INPUT_45` = '$this->diagnosis_INPUT_45'
                                                        WHERE exam_id = '$this->examId'";
        return $this->queryDatabase($sqlUpdateDiagnosis);
    }



}