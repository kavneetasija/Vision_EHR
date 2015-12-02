<?php
/**
 * Created by PhpStorm.
 * User: Dushyant
 * Date: 2015-10-19
 * Time: 2:02 PM
 */
require_once("../../Local/Classes/class.Patient.inc");
//todo display message if location is not selected, Validate radio buttons
extract($_GET);
if(isset($btnSubmit)){
    if(isset($drpPatientType)){
        $Type = $drpPatientType;
    }
    if($drpPatientType === "Student"){
        $patient = new Patient();
        //create new patient and get sql result, inserted id or error on fail
        $result = $patient->createPatient($txtStdLocation,$txtStdFirstName,$txtStdLastName,$txtStdOhipNumber,$txtStdOhipVirsion,$txtStdBirthDate,$rdbStdGender,$txtStdAddress,$txtStdCity,$drpStdProvince,$txtStdPostalCode,$drpPatientType);
        //Notify when patient is registered.
        $notifications['createStudent'] = $result['sqlResult'];
        if($result['sqlResult']){
            //Make single string of eye condition
            if(isset($chkEyeCondition)){
                 if(isset($chkEyeCondition['0'])){$eyeConditions .= $chkEyeCondition['0'].",";}
                 if(isset($chkEyeCondition['1'])){$eyeConditions .= $chkEyeCondition['1'].",";}
                 if(isset($chkEyeCondition['2'])){$eyeConditions .= $chkEyeCondition['2'].",";}
                 if(isset($chkEyeCondition['3'])){$eyeConditions .= $chkEyeCondition['3'].",";}
                 if(isset($chkEyeCondition['4'])){$eyeConditions .= $chkEyeCondition['4'];}
            }//create relational info for students
            $patient->createStudentRelation($result['insertId'],$txtStdParentFirstName,$txtStdParentLastName,$txtStdParentContact,$txtStdParentOptionalContact,$txtStdParentEmail, $txtStdTeacherName,$txtStdGrade,$txtStdClass);
            //create health info for students
            $patient->createStudentHealth($result['insertId'],$rdbShareInfo,$rdbFirstExam,$textFirstExam,$eyeConditions,$rdbMedicalCondition,
                                            $txtMedicalCondition,$rdbMedication,$txtMedication,$rdbAllergies,$txtAllergies,$rdbRelative,$txtRelative,$txtOther);
        }
    }
    elseif($drpPatientType == "Senior"){
        $patient = new Patient();
        //create new patient and get sql result, inserted id or error on fail.
        $result = $patient->createPatient($txtSerLocation,$txtSerFirstName,$txtSerLastName,$txtSerOhipNumber,$txtSerOhipVirsion,$txtSerBirthDate,$rdbSerGender,$txtSerAddress,$txtSerCity,$drpSerProvince,$txtSerPostalCode,$drpPatientType);
        //notify when patent is registered.
        $notifications['createSenior'] = $result['sqlResult'];
        if($result['sqlResult']){
            $patient->createSeniorRelation($result['insertId'],$txtSerRoom,$txtSerPoaFirstName,$txtSerPoaLastName,$txtSerPoaContact,$txtSerPoaOptionalContact,$txtSerPoaEmail,$txtSerPoaRelation);
        }
    }

}
?>
<?php
//Include header and sidebar
include("header.php");
include("sidebar.php");
//Element required session variables

?>


<form role="form" id="frm" method="get" action='<?php echo $_SERVER['PHP_SELF'];?>' onload="load()">
    <div class="form-group">
        <div id="page-wrapper">
            <!--todo display notifications-->
           <?php
               if(isset($notifications['createStudent']) && $notifications['createStudent'] != 1){
                    echo "<div class='row'>
                            <div class='alert alert-danger alert-dismissable'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>$notifications[createStudent]
                            </div>
                        </div>";
                }
                elseif(isset($notifications['createStudent']) && $notifications['createStudent'] == 1){
                    echo "<div class='row'>
                            <div class='alert alert-success alert-dismissable'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>Patient successfully added as student
                            </div>
                        </div>";
                }
                elseif(isset($notifications['createSenior']) && $notifications['createSenior'] != 1){
                    echo "<div class='row'>
                                <div class='alert alert-danger alert-dismissable'>
                                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>$notifications[createSenior]
                                </div>
                            </div>";
                }
                elseif(isset($notifications['createSenior']) && $notifications['createSenior'] == 1){
                    echo "<div class='row'>
                            <div class='alert alert-success alert-dismissable'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>Patient successfully added as senior
                            </div>
                        </div>";
                }
            ?>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Register new patient</h1>
                </div>
            </div>
            <!--Add new patient in to system-->
            <div class="row">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Patient Type:
                        <select id="drpPatientType" name="drpPatientType" onchange="patientTypeChange()" style="color: black;" tabindex="1">
                            <option value="Student" <?php if((isset($Type) && $Type == 'Student')){echo 'selected';} ?> >Student</option>
                            <option value="Senior" <?php if((isset($Type) && $Type == 'Senior')){echo 'selected';} ?>>Senior</option>
                        </select>
                    </div>
                    <div class="panel panel-body">
                        <!--Set location-->
                        <div class="row">
                            <div class="col-md-12" id="txtSchool" style="<?php  if(isset($Type) && $Type == 'Senior') {echo 'display: none;';} elseif(!isset($Type)){echo 'display: block;';}?>">
                               Register new patient at <input type="text" id = "txtStdLocation" name="txtStdLocation" value="<?php if(isset($LocationName) && $Type == 'Student'){echo $LocationName;} else{echo "$txtStdLocation";} ?>" >
                            </div>
                            <div class="col-md-12" id="txtSenior" style="<?php  if(isset($Type) && $Type == 'Student') {echo 'display: none;';} elseif(!isset($Type)){echo 'display: none;';}?>">
                                Register new patient at <input type="text" id ="txtSerLocation"  name="txtSerLocation" value="<?php if(isset($LocationName) && $Type == 'Senior'){echo $LocationName;} else{echo "$txtSerLocation";}  ?>">
                            </div>
                        </div>
                        <!--Student Info Pnl-->
                        <div id="pnlStudentInfo" style="<?php  if(isset($Type) && $Type == 'Senior') {echo 'display: none;';} elseif(!isset($Type) ){echo 'display: block;';} ?>" class="panel-body">
                            <!--Basic Info Student-->
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <label>Student's Information</label>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-2"><label>First Name</label></div>
                                        <div class="col-md-4">
                                            <input type="text" name="txtStdFirstName">
                                        </div>
                                        <div class="col-md-2"><label>Last Name</label></div>
                                        <div class="col-md-4">
                                            <input type="text" name="txtStdLastName">
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-2"><label>OHIP Number</label></div>
                                        <div class="col-md-4">
                                            <input type="text" maxlength="10" name="txtStdOhipNumber">
                                        </div>
                                        <div class="col-md-2"><label>Version Code</label></div>
                                        <div class="col-md-4">
                                            <input type="text" maxlength="2" name="txtStdOhipVirsion" size="3">
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-2"><label>Birth Date</label></div>
                                        <div class="col-md-4">
                                            <input type="text" class="txtBirthDate" name="txtStdBirthDate" >
                                        </div>
                                        <div class="col-md-2"><label>Gender</label></div>
                                        <div class="col-md-4">
                                            <lable class="radio-inline">
                                                <input type="radio" id="rdbStdGender" name="rdbStdGender" value="Male">Male
                                            </lable>
                                            <lable class="radio-inline">
                                                <input type="radio" id="rdbStdGender" name="rdbStdGender" value="Female">Female
                                            </lable>
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-6" style="border-right: dotted;">
                                            <div class="row">
                                                <div class="col-md-4"><label>Address</label></div>
                                                <div class="col-md-8">
                                                    <input type="text" name="txtStdAddress">
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-4"><label>City</label></div>
                                                <div class="col-md-8">
                                                    <input type="text" name="txtStdCity">
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-4"><label>Province</label></div>
                                                <div class="col-md-8">
                                                    <select style="width: 70px;" name="drpStdProvince">
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
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-4"><label>Postal Code</label></div>
                                                <div class="col-md-8">
                                                    <input type="text" maxlength="7" size="7" name="txtStdPostalCode">
                                                </div>
                                            </div><br>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-4"><label>Teacher's Name</label></div>
                                                <div class="col-md-8">
                                                    <input type="text" name = 'txtStdTeacherName'>
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-4"><label>Grade</label></div>
                                                <div class="col-md-8">
                                                    <input type="text" name="txtStdGrade">
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-4"><label>Class</label></div>
                                                <div class="col-md-8">
                                                    <input type="text" name="txtStdClass">
                                                </div>
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Parent's Info-->
                            <div class="panel panel-info">
                                <div class="panel-heading"><label>Parent's Information</label></div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-2"><label>First Name</label></div>
                                        <div class="col-md-4">
                                            <input type="text" name="txtStdParentFirstName">
                                        </div>
                                        <div class="col-md-2"><label>Last Name</label></div>
                                        <div class="col-md-4">
                                            <input type="text" name="txtStdParentLastName">
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-2"><label>Contact Number</label></div>
                                        <div class="col-md-4">
                                            <input type="text" maxlength="12" name="txtStdParentContact">
                                        </div>
                                        <div class="col-md-2"><label>Optional Contact</label></div>
                                        <div class="col-md-4">
                                            <input type="text" maxlength="12" name="txtStdParentOptionalContact">
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-2"><label>Email</label></div>
                                        <div class="col-md-10">
                                            <input type="text" name="txtStdParentEmail">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Health History-->
                            <div class="panel panel-warning">
                                <div class="panel-heading"><label>Health History</label></div>
                                <div class="panel-body">
                                    <!--1Share info-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>1. Give permission to share information with school's principal. </label>
                                            <div class="radio-inline">
                                                <label><input type="radio" name="rdbShareInfo"  value="No">No</label>
                                            </div>
                                            <div class="radio-inline">
                                                <label><input type="radio" name="rdbShareInfo"  value="Yes">Yes</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!--2is 1st eye exam-->
                                    <div class="row">
                                        <div class="col-md-7">
                                            <label>2.This is the 1<sup>st</sup> eye exam for my child with an eye doctor (optometrist).</label>
                                            <div class="radio-inline">
                                                <label><input type="radio" name="rdbFirstExam" value="No">No</label>
                                            </div>
                                            <div class="radio-inline">
                                                <label><input type="radio" name="rdbFirstExam" value="Yes">Yes</label>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <label>If no when was his/her last exam (Year)</label>
                                            <input type="text" name="textFirstExam">
                                        </div>
                                    </div>

                                    <!--3Eye Condition-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>3. Please check off any of the following eye conditions your child currently has or has had in the past:</label>
                                                <div class="checkbox">
                                                    <label><input type="checkbox" name="chkEyeCondition[]" value="Turned Eye"> Turned Eye</label>
                                                </div>
                                                <div class="checkbox">
                                                    <label><input type="checkbox" name="chkEyeCondition[]" value="Eye Surgery"> Eye Surgery</label>
                                                </div>
                                                <div class="checkbox">
                                                    <label><input type="checkbox" name="chkEyeCondition[]" value="Color Vision Defect"> Color Vision Defect</label>
                                                </div>
                                                <div class="checkbox">
                                                    <label><input type="checkbox" name="chkEyeCondition[]" value="Patching Therapy"> Patching Therapy</label>
                                                </div>
                                                <div class="checkbox">
                                                    <label><input type="checkbox" name="chkEyeCondition[]" value="Uses/Used glasses">Uses/Used glasses</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--4medical conditions-->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>4. List any medical conditions.</label>
                                                <div class="radio-inline">
                                                    <label><input type="radio" name="rdbMedicalCondition" value="No" >No</label>
                                                </div>
                                                <div class="radio-inline">
                                                    <label><input type="radio" name="rdbMedicalCondition" value="Yes" >Yes</label>
                                                </div>
                                                <div id="txtRelative">
                                                    <label>Please specify</label><textarea class="form-control" name="txtMedicalCondition" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--5Medications-->
                                    <div class="row">
                                        <!--Medication-->
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>5. Is your child currently taking any MEDICATION?</label>
                                                <div class="radio-inline">
                                                    <label><input type="radio" name="rdbMedication"   value="No">No</label>
                                                </div>
                                                <div class="radio-inline">
                                                    <label><input type="radio" name="rdbMedication" value="Yes" >Yes</label>
                                                </div>
                                                <div id="txtMedication">
                                                    <label>Please specify</label><textarea class="form-control" name="txtMedication" id="" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--6Allergies-->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>6. Does your child have any known ALLERGIES?</label>
                                                <div class="radio-inline">
                                                    <label><input type="radio" name="rdbAllergies" id="rdbAllergiesNo"  value="No">No</label>
                                                </div>
                                                <div class="radio-inline">
                                                    <label><input type="radio" name="rdbAllergies" id="rdbAllergiesYes" value="Yes">Yes</label>
                                                </div>
                                                <div id="txtAllergies">
                                                    <label>Please specify</label><textarea class="form-control" name="txtAllergies" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--7Relatives have Eye disease-->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>7. Do any of your child's relatives have an eye disease ?</label>
                                                <div class="radio-inline">
                                                    <label><input type="radio" name="rdbRelative" value="No">No</label>
                                                </div>
                                                <div class="radio-inline">
                                                    <label><input type="radio" name="rdbRelative" value="Yes" >Yes</label>
                                                </div>
                                                <div id="txtRelative">
                                                    <label>Please specify</label><textarea class="form-control" name="txtRelative" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--8Other symptoms-->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label>8. Please list any symptoms your child has in regards to his/her vision and/or eye
                                                health including eye strain and headaches and any triggers for these symptoms such as
                                                reading, TV, etc. Also list any concerns regarding your child's performance in school,
                                                sports, or other activities:
                                                <textarea class="form-control" name="txtOther" id="" rows="3"></textarea>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Senior Info Pnl-->
                        <div id="pnlSeniorInfo" style="<?php  if(isset($Type) && $Type == 'Student') {echo 'display: none;';} elseif(!isset($Type)){echo 'display: none;';}?>" class="panel-body">
                            <!--Basic Info Senior-->
                            <div class="panel panel-info">
                                <div class="panel-heading"><label>Senior's Information</label></div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-2"><label>First Name</label></div>
                                        <div class="col-md-4">
                                            <input type="text" name="txtSerFirstName">
                                        </div>
                                        <div class="col-md-2"><label>Last Name</label></div>
                                        <div class="col-md-4">
                                            <input type="text" name="txtSerLastName">
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-2"><label>OHIP Number</label></div>
                                        <div class="col-md-4">
                                            <input type="text" maxlength="10" name="txtSerOhipNumber">
                                        </div>
                                        <div class="col-md-2"><label>Version Code</label></div>
                                        <div class="col-md-4">
                                            <input type="text" maxlength="2" name="txtSerOhipVirsion" size="3">
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-2"><label>Birth Date</label></div>
                                        <div class="col-md-4">
                                            <input type="text" class="txtBirthDate" name="txtSerBirthDate" >
                                        </div>
                                        <div class="col-md-2"><label>Gender</label></div>
                                        <div class="col-md-4">
                                            <lable class="radio-inline">
                                                <input type="radio" name="rdbSerGender" value="Male">Male
                                            </lable>
                                            <lable class="radio-inline">
                                                <input type="radio" name="rdbSerGender" value="Female">Female
                                            </lable>
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-4"><label>Address</label></div>
                                                <div class="col-md-8">
                                                    <input type="text" name="txtSerAddress">
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-4"><label>City</label></div>
                                                <div class="col-md-8">
                                                    <input type="text" name="txtSerCity">
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-4"><label>Province</label></div>
                                                <div class="col-md-8">
                                                    <select style="width: 70px;" name="drpSerProvince">
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
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-4"><label>Postal Code</label></div>
                                                <div class="col-md-8">
                                                    <input type="text" maxlength="7" size="7" name="txtSerPostalCode">
                                                </div>
                                            </div><br>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-4"><label>Room/Appartment</label></div>
                                                <div class="col-md-8">
                                                    <input type="text" name="txtSerRoom">
                                                </div>
                                            </div><br>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--poa's info-->
                            <div class="panel panel-info">
                                <div class="panel-heading"><label>POA's Information</label></div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-2"><label>First Name</label></div>
                                        <div class="col-md-4">
                                            <input type="text" name="txtSerPoaFirstName">
                                        </div>
                                        <div class="col-md-2"><label>Last Name</label></div>
                                        <div class="col-md-4">
                                            <input type="text" name="txtSerPoaLastName">
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-2"><label>Contact Number</label></div>
                                        <div class="col-md-4">
                                            <input type="text" maxlength="12" name="txtSerPoaContact">
                                        </div>
                                        <div class="col-md-2"><label>Optional Contact</label></div>
                                        <div class="col-md-4">
                                            <input type="text" maxlength="12" name="txtSerPoaOptionalContact">
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-2"><label>Email</label></div>
                                        <div class="col-md-4">
                                            <input type="text" name="txtSerPoaEmail">
                                        </div>
                                        <div class="col-md-2"><label>Relation with client</label></div>
                                        <div class="col-md-4">
                                            <input type="text" name="txtSerPoaRelation">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Save info-->
                        <div class="row" style="text-align: center;">
                            <div class="col-md-6">
                                <input type="submit" name="btnSubmit" class="btn btn-primary" value="Save">
                            </div>
                            <div class="col-md-6">
                                <input type="reset" class="btn btn-danger" value="Reset">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</form>
<script>
    /**
     * On selected patient type change event listener.
     */
    function patientTypeChange(){
        var drpPatientType = document.getElementById("drpPatientType");
        var pnlStudent = document.getElementById("pnlStudentInfo");
        var pnlSenior = document.getElementById("pnlSeniorInfo");
        var schoolLocations = document.getElementById("txtSchool");
        var seniorLocations = document.getElementById("txtSenior");
        if(drpPatientType.value == "Student"){
            pnlStudent.style.display = "block";
            pnlSenior.style.display = "none";
            schoolLocations.style.display = "block";
            seniorLocations.style.display = "none";

        }
        else if(drpPatientType.value == "Senior"){
            pnlStudent.style.display = "none";
            pnlSenior.style.display = "block";
            schoolLocations.style.display = "none";
            seniorLocations.style.display = "block";
        }
    }
    /**
    * Save and add another student
    * */
</script>
<?php  include("footer.php"); ?>
