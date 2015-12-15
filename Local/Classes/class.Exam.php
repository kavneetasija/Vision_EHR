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
   function createExamByPatientId($patientId){
       //timestamp
       $examTime =  date('Y-m-d H:i:s');
       //get location id
       $sqlSelectPatient = "SELECT location_id FROM tbl_patients WHERE patient_id = '$patientId'";
       $location = $this->queryDatabase($sqlSelectPatient);
       $location = mysqli_fetch_assoc($location);
       $location = $location['location_id'];
       //Insert Exam
       $sqlInsertExam = "INSERT INTO tbl_exam (patient_id,location_id,time) VALUES ('$patientId','$location','$examTime')";
       $this->queryDatabase($sqlInsertExam);
           return mysqli_insert_id($this->connection);
   }

}