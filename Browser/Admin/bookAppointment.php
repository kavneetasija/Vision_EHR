<?php
/**
 * Created by PhpStorm.
 * User: Dushyant
 * Date: 2015-11-09
 * Time: 12:45 AM
 */
session_start();
include('../../Local/Classes/class.Patient.inc');
extract($_GET);
//Populate session date drop down derSession
$patient = new Patient();
$selectedPatient = $patient->getPatientById($patientID);
//save patient id in session. To use at submit.
if(!isset($_SESSION['patientID'])){
    $_SESSION['patientID'] = $patientID;
}
$selectedPatient = mysqli_fetch_assoc($selectedPatient);

//Registered location name
$registeredLocation = $patient->getRegisteredLocation($selectedPatient['patient_id']);
$registeredLocation = mysqli_fetch_assoc($registeredLocation);
//Get available dates to populate drpSession
$availableDates = $patient->getAvailableSessionDates($selectedPatient['location_id']);
//On submit insert data
if(isset($btnSubmit)){
    if(isset($txtAppointment)){
       $result = $patient->bookAppointment($drpSession,$_SESSION['patientID'],$txtAppointment);
        print_r($result);
        if($result){
            unset($_SESSION['patientID']);
            echo "<script>window.close();</script>";
        }
        else{
            $notification['error'] = $result;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!--todo add meta content in include file to distribute in system pages -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Vision EHR System is a software designed for recording Eye health issues in kids.
    Software required for Mobile Eye Clinic (MEC) project run by Canadian Council of the Blind ">
    <meta name="Keywords" content="MEC, CCB, Canadian Council of the Blind, Mobile Eye Clinic">
    <meta name="author" content="Dushyant Patel">

    <title>MEC | Vision EHR System | Canadian Council of the Blind | Lions Club</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../Local/Resources/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../Local/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../Local/Resources/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <!--Error notification-->
                <?php
                if(isset($notification['error'])){
                    echo "<div class=\"alert alert-danger\">
                               $notification[error]
                         </div>";
                }
                ?>
                <!--Login panel-->
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Book Appointment for  <b><?php echo $selectedPatient['first_name']." ".$selectedPatient['last_name'];?></b>  at  <b><?php echo $registeredLocation['name'];?></b></h3>
                    </div>
                    <div class="panel-body">

                        <fieldset>
                            <div class="form-group">
                                <label class="control-label">Select date</label>
                               <select name="drpSession">
                                    <?php
                                        while($date = mysqli_fetch_assoc($availableDates)){
                                            echo "<option value='$date[session_id]'>$date[date]</option>";
                                        }
                                    ?>
                               </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Select time</label>
                                <input type="time"  name="txtAppointment">
                            </div>
                            <div class="form-group">
                                <button id="btnSubmit" name="btnSubmit" value="submit" type="submit" class="btn btn-success">Book</button>
                                <button id="btnClose" type="button" class="btn btn-danger" onclick="window.close();">Close</button>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- jQuery -->
<script src="../../Local/Resources/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../../Local/Resources/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../../Local/dist/js/sb-admin-2.js"></script>
</body>