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

    //On save insert or update acuities
    function saveAcuities(){

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

}