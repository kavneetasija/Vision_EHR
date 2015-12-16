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

}