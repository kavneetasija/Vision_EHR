<?php
/**
 * Created by PhpStorm.
 * User: Dushyant
 * Date: 2015-12-09
 * Time: 5:23 PM
 */
require_once('../../Local/Classes/class.Patient.inc');
require_once('../../Local/Classes/class.SessionManager.inc');
extract($_GET);
if(isset($PatientID))
{
    //set patient session variables
    $sessionExam = new SessionManager();
    $session = $sessionExam->createPatientSessionInExam($PatientID);
    if($session){
        header('location: eyeExam.php');
    }


}
else{
    header('location: dashboard.php');
}
?>