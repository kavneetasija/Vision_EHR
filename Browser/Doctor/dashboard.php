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
                           <?php echo "Dr.".$_SESSION['loginFirstName'].'\'s assigned locations'?>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTable">
                                    <thead>
                                    <tr>
                                        <th>Location Name</th>
                                        <th>Type</th>
                                        <th>Session Date</th>
                                        <th>Appointments</th>
                                        <th class="info">Start session</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    //populate list of school
                                    $assignedLocations = $location->getLocationForDoctorDashboard($_SESSION['loginUserId']);
                                    while($location = mysqli_fetch_assoc($assignedLocations)){
                                        if($location['date'] == date('Y-m-d')){
                                            echo "<tr class='success'>
                                                            <td>$location[name]</td>
                                                            <td>$location[type]</td>
                                                            <td>$location[date]</td>
                                                            <td>$location[appointments]</td>
                                                            <td><a href='patientList.php?LocationID=$location[session_id]&Date=$location[date]'><button type='button' class='btn btn-info btn-circle'><i class='fa fa-stethoscope'></i></button></a></td>
                                                  </tr>";
                                        }
                                        else{
                                            echo "<tr>
                                                            <td>$location[name]</td>
                                                            <td>$location[type]</td>
                                                            <td>$location[date]</td>
                                                            <td>$location[appointments]</td>
                                                            <td><a href='patientList.php?SessionID=$location[session_id]&Date=$location[date]'><button type='button' class='btn btn-info btn-circle'><i class='fa fa-stethoscope'></i></button></a></td>
                                                  </tr>";
                                        }

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
