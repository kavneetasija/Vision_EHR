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
    if($drpDoctor != 'noSelect'){
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
                    $sessionResult = $session->setSessionDateByLocation($result,$txtSessionDate[$key]);
                }
            }
            if(isset($sessionResult) && $sessionResult){
                header('location: locationList.php');
            }
            elseif(!isset($sessionResult)){
                header('location: locationList.php');
            }
        }
        elseif(!$result){
            //error message from Location create expected
            $notifications['createError'] = "Sorry can not add this location. Check if this location already exist.";
        }
        unset($btnSubmit);
    }
    elseif($drpDoctor === 'noSelect'){
        //error message from Location create expected
        $notifications['createError'] = "You forget to select Doctor. Please reset session dates.";
    }


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
                                        <option value="School"<?php if($drpLocationType == 'School'){echo 'selected';}?>>School</option>
                                        <option value="Senior home" <?php if($drpLocationType == 'Senior home'){echo 'selected';}?>>Senior home</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label>Assign doctor</label>
                                </div>
                                <div class="col-md-5">
                                    <select style="color: black;" class="form-control" name="drpDoctor">
                                        <?php
                                        echo "<option value='noSelect'>Select Doctor</option>";
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
                                            <input name="txtLocationName" type="text" value="<?php echo $txtLocationName;?>" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Reference name</label>
                                            <input type="text" name="txtReferenceName"  value="<?php echo $txtReferenceName;?>" class="form-control">
                                        </div>
                                    </div><br>
                                    <!--Row 2-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Email</label>
                                            <input type="text" name="txtEmail"  value="<?php echo $txtEmail;?>" class="form-control">
                                        </div>
                                        <div class="col-md-3">
                                            <label>Phone #</label>
                                            <input type="text" name="txtPhone" value="<?php echo $txtPhone;?>" class="form-control">
                                        </div>
                                    </div><br>
                                    <!--Row 3-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Address</label>
                                            <input type="text" name="txtAddress" value="<?php echo $txtAddress;?>" class="form-control">
                                        </div>
                                        <div class="col-md-2">
                                            <label>City</label>
                                            <input type="text" name="txtCity" value="<?php echo $txtCity;?>" class="form-control">
                                        </div>
                                        <div class="col-md-2">
                                            <label>Province </label>
                                            <select name="drpProvince" class="form-control">
                                                <option value="AB"<?php if($drpProvince == "AB"){echo 'selected';}  ?>>AB</option>
                                                <option value="BC"<?php if($drpProvince == "BC"){echo 'selected';}  ?>>BC</option>
                                                <option value="MB"<?php if($drpProvince == "MB"){echo 'selected';}  ?>>MB</option>
                                                <option value="NB"<?php if($drpProvince == "NB"){echo 'selected';}  ?>>NB</option>
                                                <option value="NL"<?php if($drpProvince == "NL"){echo 'selected';}  ?>>NL</option>
                                                <option value="NS"<?php if($drpProvince == "NS"){echo 'selected';}  ?>>NS</option>
                                                <option value="ON"<?php if($drpProvince == "ON"){echo 'selected';} if(!isset($drpProvince)){echo 'selected';} ?>>ON</option>
                                                <option value="PE"<?php if($drpProvince == "PE"){echo 'selected';}  ?>>PE</option>
                                                <option value="QC"<?php if($drpProvince == "QC"){echo 'selected';}  ?>>QC</option>
                                                <option value="SK"<?php if($drpProvince == "SK"){echo 'selected';}  ?>>SK</option>
                                                <option value="NT"<?php if($drpProvince == "NT"){echo 'selected';}  ?>>NT</option>
                                                <option value="NU"<?php if($drpProvince == "NU"){echo 'selected';}  ?>>NU</option>
                                                <option value="YT"<?php if($drpProvince == "YT"){echo 'selected';}  ?>>YT</option>
                                                </select>
                                        </div>
                                        <div class="col-md-2">
                                            <label>Postal Code</label>
                                            <input type="text" name="txtPostelCode" value="<?php echo $txtPostelCode;?>" class="form-control">
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