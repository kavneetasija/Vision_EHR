<?php

/**
 * Created by PhpStorm.
 * User: Dushyant
 * Date: 2016-01-19
 * Time: 11:41 AM
 */
include('config.inc');
include('mysql_db.inc');

class Letters extends MySQLDatabase
{
    //Prescription

    //Select Doctor info to print
    function selectDoctorInfo($userID){
        $sqlSelectDoctorInfo = "SELECT * FROM tbl_users WHERE user_id = '$userID'";
       return $this->queryDatabase($sqlSelectDoctorInfo);
    }
    //Select from diagnosis to print Rx
    function selectDiagnosis($examID){
        $sqlSelectDiagnosis = "SELECT * FROM tbl_diagnosis WHERE exam_id = '$examID'";
        return $this->queryDatabase($sqlSelectDiagnosis);
    }
    //Select exam to print normal,Followup,Prescription Letters
    function selectExam($examID){
        $sqlSelectExam = "SELECT * FROM tbl_exam WHERE exam_id = '$examID'";
        return $this->queryDatabase($sqlSelectExam);
    }
    //select patient
    function selectPatient($patientID){
        $sqoSelectPatient = "SELECT * FROM tbl_patients WHERE patient_id = '$patientID'";
        return $this->queryDatabase($sqoSelectPatient);

    }
    //get Location name from exam id
    function getLocationName($examID){
        $sqlGetLocationName = "select tbl_locations.name from tbl_locations join tbl_exam on tbl_locations.location_id = tbl_exam.location_id where tbl_exam.exam_id = '$examID';";
        $locationName = $this->queryDatabase($sqlGetLocationName);
        return  $locationName = mysqli_fetch_array($locationName);

    }


}