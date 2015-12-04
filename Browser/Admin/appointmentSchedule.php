<?php
/**
 * Created by PhpStorm.
 * User: Dushyant
 * Date: 2015-10-14
 * Time: 4:13 PM
 */
//required Location class
require_once('../../Local/Classes/class.Location.inc');
?>
<?php
extract($_GET);

//on load populate table with list of locations
$location = new Location();
$schoolLocations = $location->getAllLocationsByType('School');
$seniorLocations = $location->getAllLocationsByType('Senior home');

if(isset($locationID)) {
    $selectedLocation = $location->getAllLocationsById($locationID);
    $selectedLocation = mysqli_fetch_assoc($selectedLocation);
    $registeredPatients = $location->getRegisteredPatients($locationID);
}
?>
<?php
//include header and sidebar
include("header.php");
include("sidebar.php");
?>
    <form role="form" id="frm" method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <div class="form-group">
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Schedule Appointment</h1>
                    </div>
                </div>
                <!--List of locations-->
                <div class="row" id="locationList" <?php if(isset($locationID)){echo "style = 'display : none;'";}?> >
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-12"> <label>
                                        List of locations as
                                    </label>
                                    <select style="color: black;" id="drpLocType" name="drpLocationType" onchange="locChange()">
                                        <option value="School">School</option>
                                        <option value="Senior">Senior home</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--List of schools-->
                        <div class="panel-body" id="pnlSchool">
                            <!--Responsive Data Table with pagination load table with ready information-->
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTableSchool">
                                    <thead>
                                    <tr>
                                        <th class="">Location Name</th>
                                        <th>Doctor</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th class="primary">Appointment</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    //populate list of school
                                    while($school = mysqli_fetch_assoc($schoolLocations)){
                                        echo "<tr>
                                                  <td>$school[name]</td>
                                                  <td>$school[first_name] $school[last_name]</td>
                                                  <td>$school[phone]</td>
                                                  <td>$school[email]</td>
                                                  <td><a href='appointmentSchedule.php?locationID=$school[location_id]' class='btn btn-circle btn-primary'><i class='fa fa-calendar fa-fw'></i></a> </td>
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
                                <table class="table table-striped table-bordered table-hover" id="dataTableSenior">
                                    <thead>
                                    <tr>
                                        <th class="">Location Name</th>
                                        <th>Doctor</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th class="primary">Appointment</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    //populate senior home location
                                    while($seniorHomes = mysqli_fetch_assoc($seniorLocations)){
                                        echo "<tr>
                                                   <td>$seniorHomes[name]</td>
                                                   <td>$seniorHomes[first_name] $seniorHomes[last_name]</td>
                                                   <td>$seniorHomes[phone]</td>
                                                   <td>$seniorHomes[email]</td>
                                                   <td><a href='appointmentSchedule.php?locationID=$seniorHomes[location_id]' class='btn btn-circle btn-primary'><i class='fa fa-calendar fa-fw'></i></a> </td>
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
                <!--List of students for selected location-->
                <div class="row" id="locationList" <?php if(isset($locationID)){echo "style = 'display : block;'";}else{echo "style = 'display : none;'";}?> >
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-12"> <label> List of registered patients at <?php echo $selectedLocation['name'];?> </label></div>
                            </div>
                        </div>
                        <!--List of schools-->
                        <div class="panel-body" id="pnlSchool">
                            <!--Responsive Data Table with pagination load table with ready information-->
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th class="">First Name</th>
                                        <th>Last Name</th>
                                        <th>Birth date</th>
                                        <th>OHIP Number</th>
                                        <th>Gender</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th class="primary">Appointment</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $count = 0;
                                        if(mysqli_num_rows($registeredPatients) == 0){
                                            echo "No patient is registered for booking or all are booked";
                                        }
                                    else{
                                        //populate list of patients in selected location
                                        while($patientList = mysqli_fetch_assoc($registeredPatients)){
                                            $count++;
                                            echo "<tr>
                                                    <td><a href='editPatient.php?type=$patientList[type]&PatientId=$patientList[patient_id]' class='btn btn-circle btn-primary' target='_blank'>$count</a></td>
                                                    <td>$patientList[first_name]</td>
                                                    <td>$patientList[last_name]</td>
                                                    <td>$patientList[birth_date]</td>
                                                    <td>$patientList[OHIP_number]</td>
                                                    <td>$patientList[gender]</td>
                                                    <td>$patientList[date]</td>
                                                    <td>$patientList[time]</td>
                                                    <td><button type='button' onclick='openWindowToBookAppointment($patientList[patient_id])' class='btn btn-circle btn-primary'><i class='fa fa-clock-o'></i></button> </td>
                                                 </tr>";
                                        }
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- /#wrapper -->
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