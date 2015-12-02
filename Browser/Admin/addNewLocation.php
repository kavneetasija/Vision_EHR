<?php
/**
 * Created by PhpStorm.
 * User: Dushyant
 * Date: 2015-10-30
 * Time: 12:00 PM
 */
require_once("../../Local/Classes/class.Location.inc");
require_once("../../Local/Classes/class.Session.inc");
?>
<?php
extract($_GET);
//Location Object
$location = new Location();
$doctors = $location->getDoctorsList();

if(isset($btnSubmit)){
    //Location Object
    $location = new Location();
    //query to insert locations
    $result = $location->createLocation($txtLocationName,$drpLocationType,$txtReferenceName,$txtEmail,$txtPhone,$txtAddress,$txtCity,$drpProvince,$txtPostelCode,$drpDoctor);
    //insert session data only if location is created.
    if($result){
        $session = new Session();
        //loop through txtSessionDate array and set sessions if not null
        foreach($txtSessionDate as $key => $date){
            if($date != null){
                //query to set session date
                $sessions = $session->setSessionDateByLocation($result,$txtSessionDate[$key]);
                if(!$sessions){
                   $notifications['createError'] = "Sorry can not add this location. Check if this location already exist.";
                }
                else{
                    $notifications['createSuccess'] = "New Location Successfully created";
                }
            }
        }
    }
    else{
        //error message from Location create expected
        $notifications['createError'] = "Sorry can not add this location. Check if this location already exist.";
    }
    unset($btnSubmit);

}
?>
<?php
include("header.php");
include("sidebar.php");
?>
    <form role="form" id="frm" method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <div class="form-group">
            <div id="page-wrapper">
                <!--Notifications-->
                <?php
                if(isset($notifications['createError'])){
                    echo "<div class='row'>
                        <div class='alert alert-danger alert-dismissable'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>$notifications[createError]
                        </div>
                      </div>";
                }
                if(isset($notifications['createSuccess'])){
                    echo "<div class='row'>
                        <div class='alert alert-success alert-dismissable'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>$notifications[createSuccess]
                        </div>
                      </div>";
                }
                ?>
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Add Locations</h1>
                    </div>
                </div>
                <!--Add new Location in system-->
                <div class="row">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-2">
                                    <label>Location Type: </label>
                                </div>
                                <div class="col-md-3">
                                    <select style="color: black;width: 140px " class="form-control" name="drpLocationType">
                                        <option value="School">School</option>
                                        <option value="Senior home">Senior home</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label>Assign doctor</label>
                                </div>
                                <div class="col-md-5">
                                    <select style="color: black;" class="form-control" name="drpDoctor">
                                        <?php
                                        while($option = mysqli_fetch_assoc($doctors)){
                                            echo "<option value='$option[user_id]'>$option[first_name] $option[last_name]</option>";
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
                                            <input name="txtLocationName" type="text" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Reference name</label>
                                            <input type="text" name="txtReferenceName" class="form-control">
                                        </div>
                                    </div><br>
                                    <!--Row 2-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Email</label>
                                            <input type="text" name="txtEmail" class="form-control">
                                        </div>
                                        <div class="col-md-3">
                                            <label>Phone #</label>
                                            <input type="text" name="txtPhone" class="form-control">
                                        </div>
                                    </div><br>
                                    <!--Row 3-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Address</label>
                                            <input type="text" name="txtAddress" class="form-control">
                                        </div>
                                        <div class="col-md-2">
                                            <label>City</label>
                                            <input type="text" name="txtCity" class="form-control">
                                        </div>
                                        <div class="col-md-2">
                                            <label>Province </label>
                                            <select name="drpProvince" class="form-control">
                                                    <option value="AB">AB</option>
                                                    <option value="BC">BC</option>
                                                    <option value="MB">MB</option>
                                                    <option value="NB">NB</option>
                                                    <option value="NL">NL</option>
                                                    <option value="NS">NS</option>
                                                    <option value="ON" selected="">ON</option>
                                                    <option value="PE">PE</option>
                                                    <option value="QC">QC</option>
                                                    <option value="SK">SK</option>
                                                    <option value="NT">NT</option>
                                                    <option value="NU">NU</option>
                                                    <option value="YT">YT</option>
                                                </select>
                                        </div>
                                        <div class="col-md-2">
                                            <label>Postal Code</label>
                                            <input type="text" name="txtPostelCode" class="form-control">
                                        </div>
                                    </div><br>
                                    <!--ROw 4-->
                                    <div class="row" id="container">
                                        <!--Input for new session-->
                                        <div class="newSession">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-2"><label>Add session Date</label>
                                                        <input type="date" name="txtSessionDate[]" class="form-control">
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
                            <div class="row">
                                <div class="col-md-offset-10  col-md-2">
                                    <button type="submit" name="btnSubmit" value="Submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
<?php  include("footer.php"); ?>