<?php
/**
 * Created by PhpStorm.
 * User: Dushyant
 * Date: 2015-10-30
 * Time: 12:00 PM
 */
//user class required
require_once("../../Local/Classes/class.User.inc");

extract($_POST);
if(isset($btnSubmit)){
    $user = new User();
    $result = $user->createUser($txtFirstName,$txtLastName,$txtEmail,$txtPassword,$drpUserRole,$txtBirthDate,$rdbGender,$txtCredentials,$txtWorkPhone,$txtCellPhone,$txtFax,
                                $txtAddress,$txtCity,$drpStdProvince,$txtPostalCode,$txtRegistrationNumber,$txtLicenseNumber);
    if($result === true){
        $notifications['addUserSuccess'] = "New user is success fully added";
    }
    else{
        $notifications['addUserError'] = $result;
    }
}
?>
<?php
//include header and sidebar
include("header.php");
include("sidebar.php");
?>
    <form role="form" id="frm" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <div class="form-group">
            <div id="page-wrapper">
                <!--Notifications-->
                <?php
                    if(isset($notifications['addUserSuccess'])){
                        echo "<div class='row'>
                                <div class='alert alert-success alert-dismissable'>
                                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>$notifications[addUserSuccess]
                                </div>
                              </div>";
                    }
                    if(isset($notifications['addUserError'])){
                        echo "<div class='row'>
                                <div class='alert alert-danger alert-dismissable'>
                                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>$notifications[addUserError]
                                </div>
                              </div>";
                    }
                ?>
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Add new user</h1>
                    </div>
                </div>
                <!--Add user-->
                <div class="row">
                    <div class="panel panel-primary">
                        <div class="panel-heading" >
                            <div class="row">
                                <div class="col-md-12">
                                    <label>User role</label> <select name="drpUserRole" style="color: black; width: 150px" class="form-control">
                                        <option>Admin</option>
                                        <option>Doctor</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <!--First name & Last name-->
                            <div class="row">
                                <div class="col-md-6">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" name="txtFirstName">
                                </div>
                                <div class="col-md-6">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" name="txtLastName">
                                </div>
                            </div>
                            <!--email & Password-->
                            <div class="row">
                                <div class="col-md-6">
                                    <label>E-mail</label>
                                    <input type="text" class="form-control" name="txtEmail">
                                </div>
                                <div class="col-md-6">
                                    <label>Password</label>
                                    <input type="text" class="form-control" name="txtPassword">
                                </div>
                            </div><br/>
                            <!--Gender, Dob, credentials, Phone numbers and fax-->
                            <div class="row">
                                <!--Birth date-->
                                <div class="col-md-2">
                                    <label>Date of birth</label>
                                    <input type="text" class="form-control txtBirthDate" name="txtBirthDate">
                                </div>
                                <!--Gender-->
                                <div class="col-md-2">
                                    <label>Gender</label><br/>
                                    <div class="radio-inline">
                                        <lable>
                                            <input type="radio" id="rdbStdGender" name="rdbGender" value="Male">Male
                                        </lable>
                                    </div>
                                    <div class="radio-inline">
                                        <lable>
                                            <input type="radio" id="rdbStdGender" name="rdbGender" value="Female">Female
                                        </lable>
                                    </div>
                                </div>
                                <!--Credentials-->
                                <div class="col-md-2">
                                    <label>Credentials</label>
                                    <input type="text" class="form-control" name="txtCredentials">
                                </div>
                                <div class="col-md-2">
                                    <label>Work Phone</label>
                                    <input type="text" class="form-control" name="txtWorkPhone" maxlength="15">
                                </div>
                                <div class="col-md-2">
                                    <label>Cell Phone</label>
                                    <input type="text" class="form-control" name="txtCellPhone" maxlength="15">
                                </div>
                                <div class="col-md-2">
                                    <label>Fax Number</label>
                                    <input type="text" class="form-control" name="txtFax">
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
                                            <input type="text" class="form-control" name="txtAddress">
                                        </div>
                                    </div><br/>
                                    <!--City, Province-->
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label>City</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="txtCity">
                                        </div>
                                        <div class="col-md-2">
                                            <label>Province</label>
                                        </div>
                                        <div class="col-md-3">
                                            <select style="width: 80px;" name="drpStdProvince" class="form-control">
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
                                    </div><br/>
                                    <!--Province and postal code-->
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label>Postal code</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="txtPostalCode" maxlength="7">
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
                                            <input type="text" class="form-control" name="txtRegistrationNumber">
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
                                            <input type="text" class="form-control" name="txtLicenseNumber">
                                        </div>
                                    </div>
                                </div>
                            </div><br/>
                            <!--Submit btn-->
                            <div class="row">
                                <div class="col-md-offset-10 col-md-2">
                                    <button type="submit" class="btn btn-success" value="submit" name="btnSubmit">Create User</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </form>
<?php  include("footer.php"); ?>