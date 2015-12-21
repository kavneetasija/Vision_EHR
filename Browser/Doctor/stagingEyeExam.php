<?php
/**
 * Created by PhpStorm.
 * User: Dushyant
 * Date: 2015-12-09
 * Time: 5:23 PM
 */
require_once('../../Local/Classes/class.Exam.php');
require_once('../../Local/Classes/class.SessionManager.inc');
extract($_GET);
if(isset($PatientID) && isset($DoctorID))
{
    //create new exam
    $exam = new Exam();
    $examId = $exam->createExamByPatientId($PatientID,$DoctorID);
    //set exam id for exam object
    $exam->examId = $examId;
    //prepare Acuities
     $result = $exam->insertAcuities();
    if($result){
        //prepare Retinoscopy
        $result = $exam->insertRetinoscopy();
        if($result){
            //prepare External
           $result = $exam->insertExternal();
            if($result){
                //prepare Internal
               $result = $exam->insertInternal();
                if($result){
                    //prepare Tonometry
                    $result = $exam->insertTonometry();
                    if($result){
                        //prepare Diagnosis
                        $result = $exam->insertDiagnosis();
                        if($result){
                            //set patient session variables
                            $sessionExam = new SessionManager();
                            $session = $sessionExam->createPatientSessionInExam($PatientID,$examId);
                            if($session){
                                header('location: eyeExam.php');
                            }
                        }
                    }
                }
            }
        }

    }
}
else{
    header('location: dashboard.php');
}
?>