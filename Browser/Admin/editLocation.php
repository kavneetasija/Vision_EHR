<?php
/**
 * Created by PhpStorm.
 * User: Dushyant
 * Date: 2015-10-28
 * Time: 4:16 PM
 */

//Required class
require_once("../../Local/Classes/class.Location.inc");
require_once("../../Local/Classes/class.Session.inc");
extract($_GET);

//Location Object
$location = new Location();
//set session variable
if(isset($LocationID)){
    $_SESSION['editLocationID'] = $LocationID;
}
elseif(!isset($LocationID) && !isset($_SESSION['editLocationID'])){
    header('location: locationList.php');
}

//Lode information for location
$selectedLocation = $location->getAllLocationsById($_SESSION['editLocationID'] );
$selectedLocation = mysqli_fetch_assoc($selectedLocation);
//Load Doctors list
$doctors = $location->getDoctorsList();

//get all scheduled dates for selected location
$session = new Session();
//Check for delete request
if($Delete){
    $session->deleteSessionBySessionId($SessionID);
}
//get All sessions for selected location
$sessions = $session->getSessionByLocationId($selectedLocation['location_id']);

//Update information on save
if(isset($btnSubmit)){
    //create new sessions if any added first
    foreach($txtSessionDate as $key => $date){
        if($date != null){
            //query to set session date
           $result = $session->setSessionDateByLocation($btnSubmit,$txtSessionDate[$key]);
        }
    }
    //if there is session value and it is true then update location info
    if($result && isset($result)){
        // then query to update location by id
        $result = $location->updateLocationById($btnSubmit,$txtLocationName,$drpLocationType,$txtReferenceName,$txtEmail,$txtPhone,$txtAddress,$txtCity,$drpProvince,$txtPostelCode,$drpDoctor);
    }
    elseif(!isset($result)){
        // then query to update location by id
        $result = $location->updateLocationById($btnSubmit,$txtLocationName,$drpLocationType,$txtReferenceName,$txtEmail,$txtPhone,$txtAddress,$txtCity,$drpProvince,$txtPostelCode,$drpDoctor);
    }
    //if result is true then redirect to location list with token true or error message.
    if(isset($result)){
        //unset session variable
        unset($_SESSION['LocationID']);
        //redirect
        header('location: locationList.php?editLocation='.$result);
    }
}
?>
<?php
/*
 * Add header and side bar*/
include("header.php");
include("sidebar.php");
?>

<form role="form" id="frm" method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <div class="form-group">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Edit Locations</h1>
                </div>
            </div>
            <!--Edit Location in system-->
            <div class="row">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-2">
                                <label>Location Type: </label>
                            </div>
                            <div class="col-md-3">
                                <select style="color: black;width: 140px " class="form-control" name="drpLocationType">
                                    <option value="School" <?php if($selectedLocation['type'] == 'School'){echo 'selected';}?>>School</option>
                                    <option value="Senior home" <?php if($selectedLocation['type'] == 'Senior home'){echo 'selected';}?>>Senior home</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label>Assign doctor</label>
                            </div>
                            <div class="col-md-5">
                                <select style="color: black;" class="form-control" name="drpDoctor">
                                    <?php
                                    while($option = mysqli_fetch_assoc($doctors)){
                                        if($selectedLocation['assigned_doctor'] == $option['user_id']){
                                            echo "<option value='$option[user_id]' selected>$option[first_name] $option[last_name]</option>";
                                        }
                                        else{
                                            echo "<option value='$option[user_id]'>$option[first_name] $option[last_name]</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <!--Row 1-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Name of location</label>
                                        <input name="txtLocationName" type="text" class="form-control" value="<?php echo $selectedLocation['name']?>">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Reference name</label>
                                        <input type="text" name="txtReferenceName" class="form-control" value="<?php echo $selectedLocation['reference_name']?>">
                                    </div>
                                </div><br>
                                <!--Row 2-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Email</label>
                                        <input type="text" name="txtEmail" class="form-control" value="<?php echo $selectedLocation['email']?>">
                                    </div>
                                    <div class="col-md-3">
                                        <label>Phone #</label>
                                        <input type="text" name="txtPhone" class="form-control" value="<?php echo $selectedLocation['phone']?>">
                                    </div>
                                </div><br>
                                <!--Row 3-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Address</label>
                                        <input type="text" name="txtAddress" class="form-control" value="<?php echo $selectedLocation['address']?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label>City</label>
                                        <input type="text" name="txtCity" class="form-control"  value="<?php echo $selectedLocation['city']?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label>Province </label>
                                        <select name="drpProvince" class="form-control">
                                            <option value="AB" <?php if($selectedLocation['province'] == "AB" ){echo 'selected';}?>>AB</option>
                                            <option value="BC" <?php if($selectedLocation['province'] == "BC" ){echo 'selected';}?>>BC</option>
                                            <option value="MB" <?php if($selectedLocation['province'] == "MB" ){echo 'selected';}?>>MB</option>
                                            <option value="NB" <?php if($selectedLocation['province'] == "NB" ){echo 'selected';}?>>NB</option>
                                            <option value="NL" <?php if($selectedLocation['province'] == "NL" ){echo 'selected';}?>>NL</option>
                                            <option value="NS" <?php if($selectedLocation['province'] == "NS" ){echo 'selected';}?>>NS</option>
                                            <option value="ON" <?php if($selectedLocation['province'] == "ON" ){echo 'selected';}?>>ON</option>
                                            <option value="PE" <?php if($selectedLocation['province'] == "PE" ){echo 'selected';}?>>PE</option>
                                            <option value="QC" <?php if($selectedLocation['province'] == "QC" ){echo 'selected';}?>>QC</option>
                                            <option value="SK" <?php if($selectedLocation['province'] == "SK" ){echo 'selected';}?>>SK</option>
                                            <option value="NT" <?php if($selectedLocation['province'] == "NT" ){echo 'selected';}?>>NT</option>
                                            <option value="NU" <?php if($selectedLocation['province'] == "NU" ){echo 'selected';}?>>NU</option>
                                            <option value="YT" <?php if($selectedLocation['province'] == "YT" ){echo 'selected';}?>>YT</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Postal Code</label>
                                        <input type="text" name="txtPostelCode" class="form-control" value="<?php echo $selectedLocation['postal_code']?>" >
                                    </div>
                                </div><br>
                                <!--ROw 4-->
                                <div id = "viewSession">
                                    <div class="row">
                                        <!--Input for new session-->
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Scheduled session dates</label>
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Date</th>
                                                                    <th>delete</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <!--todo change date -->
                                                                <?php
                                                                $sessionCounter = 1;
                                                                    while($value = mysqli_fetch_assoc($sessions)){
                                                                        echo "<tr>
                                                                                <td>$sessionCounter</td>
                                                                                 <td>$value[date]</td>
                                                                                 <td><button type='button' class='btn btn-circle btn-danger' onclick='warningDelete($selectedLocation[location_id],$value[session_id])'><i class='fa fa-times fa-fw'></i></button></td>
                                                                              </tr>
                                                                             ";
                                                                        $sessionCounter++;
                                                                    }
                                                                ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div><br>
                                            </div>
                                    </div><br>
                                </div>
                                <!--ROw 5-->
                                <div id = "addSession">
                                    <div class="row" id="container">
                                        <!--Input for new session-->
                                        <div class="newSession">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-2"><label>Add session Date</label>
                                                        <input type="date" name="txtSessionDate[]"  class="form-control">
                                                    </div>
                                                </div><br>
                                            </div>
                                        </div>
                                    </div><br>
                                    <!--Button to add new session-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="button" id="btnAddSession" class="btn btn-default" value="Add more session">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Sve, Close-->
                        <div class="row">
                            <div class="col-md-offset-10  col-md-2">
                                <button type="submit" name="btnSubmit" value="<?php echo $selectedLocation['location_id'];?>" class="btn btn-primary">Save</button>
                                <a class="btn btn-danger" href="locationList.php">Close</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</form>
<script>
    function warningDelete(locationId,sessionId) {
        var response = confirm("Deleting session  will remove appointment booked for the session");
        if (response == true) {
           window.location = "editLocation.php?Delete=true&LocationID="+locationId+"&SessionID="+sessionId;
        }
    }
</script>

<?php
include("footer.php");
?>
