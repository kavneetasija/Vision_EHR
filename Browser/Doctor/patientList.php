<?php
/**
 * Created by PhpStorm.
 * User: Dushyant
 * Date: 2015-11-20
 * Time: 11:10 AM
 */
//todo Display assigned sessions on login on click start session redirect to list of available patients
//required location class
require_once('../../Local/Classes/class.Location.inc');
extract($_GET);
$location = new Location();
?>
<?php
include("header.php");
include("sidebar.php");
?>
<form role="form" id="frm">
    <div class="form-group">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dash Board</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row1 -->
            <!-- /.row 5-->
            <div class="row">
                <div class="col-lg-12">

                    <!--List of locations assigned to log in doctor-->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <?php echo "Appointments on [$Date]"?>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTable">
                                    <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>OHIP Number</th>
                                        <th>Gender</th>
                                        <th class="info">Start Eye Exam</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    //populate list of school
                                    $appointments = $location->getAppointmentsBySessionId($SessionID);
                                    while($appointment = mysqli_fetch_assoc($appointments)){
                                        echo "<tr>
                                                <td>$appointment[first_name]</td>
                                                <td>$appointment[last_name]</td>
                                                <td>$appointment[OHIP_number]</td>
                                                <td>$appointment[gender]</td>
                                                <td><a href='stagingEyeExam.php?PatientID=$appointment[patient_id]' target='_blank' class='btn btn-info'><i class='fa fa-user-md fa-2x'></i></a></td>
                                             </tr>";
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div><!--Col-lg-12-->
            </div><!--/.row-->
        </div><!--#Wrapper-->
</form>
<?php  include("footer.php"); ?>
