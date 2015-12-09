<?php

/**
 * Created by PhpStorm.
 * User: Dushyant
 * Date: 2015-11-04
 * Time: 5:05 PM
 */
include('config.inc');
?>
<?php
class SessionManager
{
    /**
     * @param $userId
     * @param $firstName
     * @param $userRole
     * @return bool
     */
    //create session for login user and redirect to dashboard according to user_role
    function createUserSession($userId,$firstName,$userRole){
        session_start();
        $_SESSION['loginUserId']=$userId;
        $_SESSION['loginUserRole']=$userRole;
        $_SESSION['loginFirstName']=$firstName;
        echo $_SESSION['loginFirstName'];
        if(isset($_SESSION)){
            return true;
        }
    }

    /**
     * @param $userTypeAllowed
     * @param $loginUserRole
     * @return bool
     */
    //Prevent user to access an authorised pages [user Authorization]
    function isAuthorized($userTypeAllowed,$loginUserRole){
        if($userTypeAllowed != $loginUserRole){
            return false;
        }
        else{
            return true;
        }

    }

    //Create session for patient in eye exam
    function createPatientSessionInExam($patientId){
        session_start();
        $_SESSION['patientID_eyeExam'] = $patientId;
        if(isset($_SESSION['patientID_eyeExam'])){
            return true;
        }
        else{
            return false;
        }
    }

}
?>