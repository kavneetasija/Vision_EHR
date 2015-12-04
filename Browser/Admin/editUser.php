<?php
/**
 * Created by PhpStorm.
 * User: Dushyant
 * Date: 2015-10-30
 * Time: 12:00 PM
 */
session_start();
require_once("../../Local/Classes/class.User.inc");


extract($_GET);
$user = new User();
if(isset($UserID)){
    $_SESSION['editUserID'] = $UserID;
    //get query result
    $result = $user->readUserById($_SESSION['editUserID']);
    //fetch result data to fill in form
    $userInfo = mysqli_fetch_assoc($result);
}
else{
    header("location: userManager.php");

}
//on submit edit record
if(isset($btnSubmit)){
    //call function updateUserById and save results in $result;
    $result = $user->updateUser($_SESSION['editUserID'],$txtFirstName,$txtLastName,$txtEmail,$drpUserRole,$txtBirthDate,$rdbGender,$txtCredentials,$txtWorkPhone,$txtCellPhone,$txtFax,
             $txtAddress,$txtCity,$drpStdProvince,$txtPostalCode,$txtRegistrationNumber,$txtLicenseNumber);
    if($result===true){
        //redirect to userManager.
        header("location: userManager.php?userEdit=true");
        unset($_SESSION['editUserID']);
    }
    else{
        header("location: userManager.php?userEdit=$result");

    }
}

?>
<?php
//Header and sidebar master files
include("header.php");
include("sidebar.php");
?>
    <form role="form" id="frm" method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <div class="form-group">
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Edit user information</h1>
                    </div>
                </div>
                <!--edit user-->
                <div class="row">
                    <div class="panel panel-primary">
                        <div class="panel-heading" >
                            <label>User role</label>
                            <select name="drpUserRole" style="color: black;">
                                <?php
                                    if($userInfo['user_role']== 'Admin'){
                                        echo"<option selected>Admin</option>
                                              <option>Doctor</option>";
                                    }
                                else{
                                        echo"<option selected>Doctor</option>
                                             <option>Admin</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="panel-body">
                            <!--First name & Last name-->
                            <div class="row">
                                <div class="col-md-6">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" name="txtFirstName" value="<?php echo $userInfo['first_name']; ?>">
                                </div>
                                <div class="col-md-6">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" name="txtLastName" <?php echo "value = '$userInfo[last_name]'";?>>
                                </div>
                            </div>
                            <!--email & Password-->
                            <div class="row">
                                <div class="col-md-6">
                                    <label>E-mail</label>
                                    <input type="text" class="form-control" name="txtEmail" <?php echo "value = '$userInfo[email]'";?>>
                                </div>
                                <div class="col-md-6">
                                    <label>Password</label>
                                    <input type="text" class="form-control" name="txtPassword" disabled>
                                </div>
                            </div><br/>
                            <!--Gender, Dob, credentials, Phone numbers and fax-->
                            <div class="row">
                                <!--Birth date-->
                                <div class="col-md-2">
                                    <label>Date of birth</label>
                                    <input type="text" class="form-control txtBirthDate" name="txtBirthDate" <?php echo "value = '$userInfo[birth_date]'";?>>
                                </div>
                                <!--Gender-->
                                <div class="col-md-2">
                                    <label>Gender</label><br/>
                                    <div class="radio-inline">
                                        <lable>
                                            <input type="radio" id="rdbStdGender" name="rdbGender" value="Male" <?php if($userInfo['gender'] == 'Male'){echo 'checked';} ?>>Male
                                        </lable>
                                    </div>
                                    <div class="radio-inline">
                                        <lable>
                                            <input type="radio" id="rdbStdGender" name="rdbGender" value="Female" <?php if($userInfo['gender'] == 'Female'){echo 'checked';}  ?>>Female
                                        </lable>
                                    </div>
                                </div>
                                <!--Credentials-->
                                <div class="col-md-2">
                                    <label>Credentials</label>
                                    <input type="text" class="form-control" name="txtCredentials" <?php echo "value = '$userInfo[cradentials]'";?>>
                                </div>
                                <div class="col-md-2">
                                    <label>Work Phone</label>
                                    <input type="text" class="form-control" name="txtWorkPhone" maxlength="15" <?php echo "value = '$userInfo[work_phone]'";?>>
                                </div>
                                <div class="col-md-2">
                                    <label>Cell Phone</label>
                                    <input type="text" class="form-control" name="txtCellPhone" maxlength="15" <?php echo "value = '$userInfo[cell_phone]'";?>>
                                </div>
                                <div class="col-md-2">
                                    <label>Fax Number</label>
                                    <input type="text" class="form-control" name="txtFax" <?php echo "value = '$userInfo[fax_phone]'";?>>
                                </div>
                            </div><br/>
                            <!--Address and practice details-->
                            <div class="row">
                                <div class="col-md-6">
                                    <!--Address-->
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label>Address</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="txtAddress" <?php echo "value = '$userInfo[address]'";?>>
                                        </div>
                                    </div><br/>
                                    <!--City, Province-->
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label>City</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="txtCity" <?php echo "value = '$userInfo[city]'";?>>
                                        </div>
                                        <div class="col-md-2">
                                            <label>Province</label>
                                        </div>
                                        <div class="col-md-3">
                                            <select style="width: 80px;" name="drpStdProvince" class="form-control">
                                                <option value="AB"<?php if($userInfo['province'] == "AB"){echo 'selected';}  ?>>AB</option>
                                                <option value="BC"<?php if($userInfo['province'] == "BC"){echo 'selected';}  ?>>BC</option>
                                                <option value="MB"<?php if($userInfo['province'] == "MB"){echo 'selected';}  ?>>MB</option>
                                                <option value="NB"<?php if($userInfo['province'] == "NB"){echo 'selected';}  ?>>NB</option>
                                                <option value="NL"<?php if($userInfo['province'] == "NL"){echo 'selected';}  ?>>NL</option>
                                                <option value="NS"<?php if($userInfo['province'] == "NS"){echo 'selected';}  ?>>NS</option>
                                                <option value="ON"<?php if($userInfo['province'] == "ON"){echo 'selected';}  ?>>ON</option>
                                                <option value="PE"<?php if($userInfo['province'] == "PE"){echo 'selected';}  ?>>PE</option>
                                                <option value="QC"<?php if($userInfo['province'] == "QC"){echo 'selected';}  ?>>QC</option>
                                                <option value="SK"<?php if($userInfo['province'] == "SK"){echo 'selected';}  ?>>SK</option>
                                                <option value="NT"<?php if($userInfo['province'] == "NT"){echo 'selected';}  ?>>NT</option>
                                                <option value="NU"<?php if($userInfo['province'] == "NU"){echo 'selected';}  ?>>NU</option>
                                                <option value="YT"<?php if($userInfo['province'] == "YT"){echo 'selected';}  ?>>YT</option>
                                            </select>
                                        </div>
                                    </div><br/>
                                    <!--Province and postal code-->
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label>Postal code</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="txtPostalCode" maxlength="7"  <?php echo "value = '$userInfo[postal_code]'";?>>
                                        </div>
                                    </div><br/>
                                </div>
                                <div class="col-md-6">
                                    <!--Registration number-->
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>
                                                Registration Number
                                            </label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="txtRegistrationNumber"  <?php echo "value = '$userInfo[registration_number]'";?>>
                                        </div>
                                    </div><br/>
                                    <!--License number-->
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>
                                                License Number
                                            </label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="txtLicenseNumber"  <?php echo "value = '$userInfo[license_number]'";?>>
                                        </div>
                                    </div>
                                </div>
                            </div><br/>
                            <!--Submit btn-->
                            <div class="row">
                                <div class="col-md-offset-10 col-md-2">
                                    <button type="submit" class="btn btn-success" value="submit" name="btnSubmit"><i class="fa fa-save fa-fw"></i>Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
<?php
//footer master file
include("footer.php"); ?>