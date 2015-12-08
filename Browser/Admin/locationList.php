<?php
/**
 * Created by PhpStorm.
 * User: Dushyant
 * Date: 2015-10-14
 * Time: 4:13 PM
 */
//required Location class
require_once('../../Local/Classes/class.Location.inc');
//todo handel page redirection on edit and delete
//todo on patient registration replace with CSV Import window.
?>
<?php
extract($_GET);
//on load populate table with list of locations
$location = new Location();
//if delete is requested
if($action == 'delete'){
    $result = $location->deleteLocationByID($LocationID);
    unset($action);
}
//get data to populate dataTable
$schoolLocations = $location->getAllLocationsByType('School');
$seniorLocations = $location->getAllLocationsByType('Senior home');


if(isset($editLocation)){
    if($editLocation){
        $notifications['editLocationSuccess'] = "Location successfully edited";
    }
    else{
        $notifications['editLocationError'] = "Sorry! There was error in updating location value. Please check if location name already exist in system";
    }
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
                <!--Notifications-->
                <?php
                if(isset($editLocation) && $editLocation){
                    echo "<div class='row'>
                        <div class='alert alert-success alert-dismissable'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>$notifications[editLocationSuccess]
                        </div>
                      </div>";
                }
                if(isset($editLocation) && !$editLocation){
                    echo "<div class='row'>
                        <div class='alert alert-danger alert-dismissable'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>$notifications[editLocationError]
                        </div>
                      </div>";
                }
                ?>
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Locations</h1>
                    </div>
                </div>
                <!--List of locations-->
                <div class="row" style="display: block;">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-10"> <label>
                                        List of locations as
                                    </label>
                                    <select style="color: black;" id="drpLocType" name="drpLocationType" onchange="locChange()">
                                        <option value="School">School</option>
                                        <option value="Senior">Senior home</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <a href="addNewLocation.php" class="btn btn-success">Add New Location</a>
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
                                        <th>Reference Person</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Doctor</th>
                                        <th class="info">Add patient</th>
                                        <th class="success">Edit</th>
                                        <th class="danger">Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        //populate list of school
                                            while($school = mysqli_fetch_assoc($schoolLocations)){
                                                echo "<tr>
                                                            <td>$school[name]</td>
                                                            <td>$school[reference_name]</td>
                                                            <td>$school[phone]</td>
                                                            <td>$school[email]</td>
                                                            <td>$school[first_name] $school[last_name]</td>
                                                            <td><a href='registerNewPatient.php?LocationName=$school[name]&Type=Student'><button type='button' class='btn btn-info btn-circle'><i class='fa fa-user'></i></button></a></td>
                                                            <td><a href='editLocation.php?LocationID=$school[location_id]'><button type='button' class='btn btn-success btn-circle'><i class='fa fa-edit'></i></button></a></td>
                                                            <td><a href='locationList.php?action=delete&LocationID=$school[location_id]'><button type='button' class='btn btn-danger btn-circle'><i class='fa fa-times'></i></button></a></td>
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
                                        <th>Reference Person</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Doctor</th>
                                        <th class="info">Add new patient</th>
                                        <th class="success">Edit</th>
                                        <th class="danger">Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    //populate senior home location
                                    while($seniorHomes = mysqli_fetch_assoc($seniorLocations)){
                                        echo "<tr>
                                                            <td>$seniorHomes[name]</td>
                                                            <td>$seniorHomes[reference_name]</td>
                                                            <td>$seniorHomes[phone]</td>
                                                            <td>$seniorHomes[email]</td>
                                                            <td>$seniorHomes[first_name] $seniorHomes[last_name]</td>
                                                            <td><a href='registerNewPatient.php?LocationName=$seniorHomes[name]&Type=Senior'><button type='button' class='btn btn-info btn-circle'><i class='fa fa-user'></i></button></a></td>
                                                            <td><a href='editLocation.php?LocationID=$seniorHomes[location_id]'><button type='button' class='btn btn-success btn-circle'><i class='fa fa-edit'></i></button></a></td>
                                                            <td><a href='locationList.php?action=deleteLocationID=$seniorHomes[location_id]'><button type='button' class='btn btn-danger btn-circle'><i class='fa fa-times'></i></button></a></td>
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
</script>
<?php  include("footer.php"); ?>