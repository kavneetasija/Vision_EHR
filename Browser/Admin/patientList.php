<?php
/**
 * Created by PhpStorm.
 * User: Dushyant
 * Date: 2015-10-30
 * Time: 2:48 PM
 */
require_once("../../Local/Classes/class.Patient.inc");

$patients = new Patient();
$studentList = $patients->getAllPatientsByType('Student');
$seniorList = $patients->getAllPatientsByType('Senior');
?>
<?php
//include header and sidebar
include("header.php");
include("sidebar.php");
?>
<form role="form" id="frm" method="post">
    <div class="form-group">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Patient list</h1>
                </div>
            </div>
            <!--List of patients-->
            <div class="row" style="display: block;">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-10"> <label>
                                    List of patients in
                                </label>

                                <select style="color: black;" id="drpLocType" onchange="locChange()">
                                    <option value="School">School</option>
                                    <option value="Senior">Senior home</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <a href="registerNewPatient.php"><button type="button" class="btn btn-success">Register new patient</button></a>
                            </div>
                        </div>
                    </div>
                    <!--School patients-->
                    <div class="panel-body" id="pnlSchool">
                        <!--Responsive Data Table with pagination load table with ready information-->
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTableStdPatient">
                                <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Gender</th>
                                    <th>Date of birth</th>
                                    <th>OHIP #</th>
                                    <th>OHIP VC</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th class="warning">Edit</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach($studentList as $student){
                                        echo"<tr>
                                                <td>$student[first_name]</td>
                                                <td>$student[last_name]</td>
                                                <td>$student[gender]</td>
                                                <td>$student[birth_date]</td>
                                                <td>$student[OHIP_number]</td>
                                                <td>$student[OHIP_virsion]</td>
                                                <td>$student[date]</td>
                                                <td>$student[time]</td>
                                                <td><a href='editPatient.php?type=Student&PatientId=$student[patient_id]'><button type='button' class='btn btn-success btn-circle'><i class='fa fa-edit'></i></button></a></td>
                                            </tr>";
                                    }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--List of Senior homes-->
                    <div class="panel-body" id="pnlSenior" style="display: none;">
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTableSerPatient">
                                <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Gender</th>
                                    <th>Date of birth</th>
                                    <th>OHIP #</th>
                                    <th>OHIP VC</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th class="warning">Edit</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach($seniorList as $senior){
                                    echo"<tr>
                                              <td>$senior[first_name]</td>
                                              <td>$senior[last_name]</td>
                                              <td>$senior[gender]</td>
                                              <td>$senior[birth_date]</td>
                                              <td>$senior[OHIP_number]</td>
                                              <td>$senior[OHIP_virsion]</td>
                                              <td>$senior[date]</td>
                                              <td>$senior[time]</td>
                                              <td><a href='editPatient.php?type=Senior&PatientId=$senior[patient_id]'><button type='button' class='btn btn-success btn-circle'><i class='fa fa-edit'></i></button></a></td>
                                         </tr>";
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>

                </div>
            </div>
        </div>
    </div>
</form>
<script>
    /**
     * On selected location type change event listener.
     */
    function locChange(){
        var drpLocType = document.getElementById("drpLocType");
        var pnlSchool = document.getElementById("pnlSchool");
        var pnlSenior = document.getElementById("pnlSenior");
        if(drpLocType.value == "School"){
            pnlSchool.style.display = "block";
            pnlSenior.style.display = "none";
        }
        else if(drpLocType.value == "Senior"){
            pnlSchool.style.display = "none";
            pnlSenior.style.display = "block";
        }
    }
    /*On click open window for Appointment*/
    function openWindowToBookAppointment(patientId){
        var newWindow = window.open('bookAppointment.php?patientID=' + patientId,"_blank", "width=600, height=500");
    }
</script>
<?php  include("footer.php"); ?>

