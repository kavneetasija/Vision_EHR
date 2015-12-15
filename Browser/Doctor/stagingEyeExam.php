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
if(isset($PatientID))
{
    //create new exam
    $exam = new Exam();
    $examId = $exam->createExamByPatientId($PatientID);
        //set patient session variables todo paa exam id in method call
        $sessionExam = new SessionManager();
        $session = $sessionExam->createPatientSessionInExam($PatientID,$examId);
        if($session){
            header('location: eyeExam.php');
        }
}
else{
    header('location: dashboard.php');
}
?>