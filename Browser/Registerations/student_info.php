<?php
/**
 * Created by PhpStorm.
 * User: Dushyant
 * Date: 2015-05-15
 * Time: 2:57 PM
 * todo Change in to registration form for student and add feature like genrate link for location
 *
 */

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head lang="en">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Vision EHR System is a software designed for recording Eye health issues in kids.
    Software required for Mobile Eye Clinic (MEC) project run by Canadian Council of the Blind ">
    <meta name="Keywords" content="MEC, CCB, Canadian Council of the Blind, Mobile Eye Clinic">
    <meta name="author" content="Canadian Council of the blind">

    <title>MEC | Vision EHR System | Student Input Form</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../Local/Resources/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../Local/dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../../Local/Resources/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- jQuery -->
    <script src="../../Local/Resources/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


    <style>
        span{
            vertical-align: super;
            font-size: smaller;
        }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container-fluid">
    <div id="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">PARENTAL CONSENT FORM FOR MEC</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <form action="student_info.php" id="frm" method="post" role="form">
            <!--Student Information-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Student's Information.
                        </div>
                        <div class="panel-body">
                            <!--Row 1-->
                            <div class="row">
                                <!--r1 c1-->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>First Name<span style="color: red">*<?php if(isset($errorMsg)){echo" ".($errorMsg["txtStudentFirstName"]);} ?></span></label>
                                        <input class="form-control" name="txtStudentFirstName" id="txtStudentFirstName" tabindex="1" value="<?php echo $txtStudentFirstName;?>" placeholder="Student's first name"  onfocus="this.placeholder = ' '" onblur="this.placeholder='Student\'s first name'"  >
                                    </div>
                                </div>
                                <!--r1 c2-->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Last Name<span style="color: red">*<?php if(isset($errorMsg)){echo" ".($errorMsg["txtStudentLastName"]);} ?></span></label>
                                        <input class="form-control" name="txtStudentLastName" id="txtStudentLastName" tabindex="2" value="<?php echo "$txtStudentLastName" ?>" placeholder="Student's last name"  onfocus="this.placeholder = ' '" onblur="this.placeholder='Student\'s last name'"  >
                                    </div>
                                </div>
                            </div>
                            <!--Row 2-->
                            <div class="row">
                                <!--r2 c1-->
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>OHIP Number<span style="color: red">*<?php if(isset($errorMsg)){echo" ".($errorMsg["txtOhipNumber"]);} ?></span></label>
                                        <input type="text" class="form-control" name="txtOhipNumber" id="txtOhipNumber" tabindex="3" value="<?php echo "$txtOhipNumber"; ?>" placeholder="Max 10 Digits"  onfocus="this.placeholder = ' '" onblur="this.placeholder='Max 10 Digits'" >
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>OHIP Version Code<span style="color: red">*<?php if(isset($errorMsg)){echo" ".($errorMsg["txtVersionCode"]);} ?></span></label>
                                        <input type="text" class="form-control" name="txtVersionCode" id="txtVersionCode" tabindex="3" value="<?php echo "$txtVersionCode"; ?>" placeholder="Max 2 alphabets"  onfocus="this.placeholder = ' '" onblur="this.placeholder='Max 2 alphabets'"  >
                                    </div>
                                </div>
                                <!--r2 c2-->
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>Date of birth<span style="color: red">*<?php if(isset($errorMsg)){echo" ".($errorMsg["drpDob"]);}?></span></label>
                                        <select class="form-control" name="drpDobMonth"tabindex="4">
                                            <?php
                                            $months = array(
                                                0 => "MM",
                                                1 => "January",
                                                2 => "February",
                                                3 => "March",
                                                4 => "April",
                                                5 => "May",
                                                6 => "June",
                                                7 => "July",
                                                8 => "August",
                                                9 => "September",
                                                10 => "October",
                                                11 => "November",
                                                12 => "December"
                                            );
                                            foreach ($months as $key => $option){
                                                if($key == $drpDobMonth){
                                                    echo "<option value = '$key' selected>$option</option>";
                                                }
                                                else{
                                                    echo "<option value = '$key'>$option</option>";
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <!--r2 c3-->
                                <div class="col-lg-1">
                                    <div class="form-group">
                                        <label></label>
                                        <select class="form-control" name="drpDobDate" id="drpDobDate" tabindex="5">
                                            <?php
                                            for($index = 0; $index <= 31; $index++)
                                            {
                                                if($index == 0){
                                                    echo"<option selected>DD</option>";
                                                }
                                                elseif($index == $drpDobDate){
                                                    echo"<option value = '$index' selected>$index</option>";
                                                }
                                                else{
                                                    echo "<option value= '$index'>$index</option>";
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <!--r2 c4-->
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label> </label>
                                        <select class="form-control" name="drpDobYear" id="drpDobYear" tabindex="5">
                                            <?php
                                            for($startYear = (date("Y") - 19); $startYear <= date("Y"); $startYear++)
                                            {
                                                if($startYear == (date("Y") - 19)){
                                                    echo"<option value='$startYear' selected>YYYY</option>";
                                                }
                                                elseif($startYear == $drpDobYear){
                                                    echo "<option value= '$startYear' selected>$startYear</option>";
                                                }
                                                else{
                                                    echo "<option value= '$startYear'>$startYear</option>";
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <!--r2 c5-->
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>Gender<span style="color: red">*<?php if(isset($errorMsg)){echo" ".($errorMsg["rdbGender"]);} ?></span></label>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="rdbGender" id="optionsRadios1" tabindex="6" value="M" <?php if($rdbGender == "M"){echo "checked=checked";} ?> >Male
                                            </label>
                                            <label>
                                                <input type="radio" name="rdbGender" id="optionsRadios1" tabindex="6" value="F" <?php if($rdbGender == "F"){echo "checked=checked";} ?> >Female
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--Row 3-->
                            <div class="row">
                                <!--r3 c1-->
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Address<span style="color: red">*<?php if(isset($errorMsg)){echo" ".($errorMsg["txtAddress"]);} ?></span></label>
                                        <input type="text" class="form-control" name="txtAddress" id="txtAddress" tabindex="7" value="<?php echo "$txtAddress"; ?>">
                                    </div>
                                </div>
                                <!--r3 c2-->
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>City<span style="color: red">*<?php if(isset($errorMsg)){echo" ".($errorMsg["txtCity"]);} ?></span></label>
                                        <input type="text" class="form-control" name="txtCity" id="txtCity" tabindex="8" value="<?php echo "$txtCity"; ?>">
                                    </div>
                                </div>
                                <!--r3 c3-->
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Province<span style="color: red">*<?php if(isset($errorMsg)){echo" ".($errorMsg["txtProvince"]);} ?></span></label>
                                        <input type="text" class="form-control" name="txtProvince" id="txtProvince" tabindex="9" value="<?php echo "$txtProvince"; ?>">
                                    </div>
                                </div>
                                <!--r3 c4-->
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Postal Code<span style="color: red">* <?php if(isset($errorMsg)){echo" ".($errorMsg["txtPostalCode"]);} ?></span></label>
                                        <input type="text" class="form-control" name="txtPostalCode" id="txtPostalCode" tabindex="10" value="<?php echo "$txtPostalCode"; ?>">
                                    </div>
                                </div>
                            </div>
                            <!--Row 4-->
                            <div class="row">
                                <!--r4 c1-->
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Teacher's Name</label>
                                        <input type="text" class="form-control" name="txtTeacherName" id="txtTeacherName" tabindex="11" value="<?php echo "$txtTeacherName"; ?>">
                                    </div>
                                </div>
                                <!--r4 c2-->
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Grade</label>
                                        <input type="text" class="form-control" name="txtGrade" id="txtGrade" tabindex="12" value="<?php echo "$txtGrade"; ?>">
                                    </div>
                                </div>
                                <!--r4 c3-->
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Classroom<span style="color: red">* <?php if(isset($errorMsg)){echo" ".($errorMsg["txtClassroom"]);} ?></span></label>
                                        <input type="text" class="form-control" name="txtClassroom" id="txtClassroom" tabindex="13" value="<?php echo "$txtClassroom" ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Parent's Information-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Parent's Information.
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <!--r1 c1-->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>First Name<span style="color: red">* <?php if(isset($errorMsg)){echo" ".($errorMsg["txtParentFirstName"]);} ?></span></label>
                                        <input class="form-control" name="txtParentFirstName" id="txtParentFirstName" tabindex="14" value="<?php echo "$txtParentFirstName"; ?>" placeholder="Parent's first name"  onfocus="this.placeholder = ' '" onblur="this.placeholder='Parent\'s first name'"  >
                                    </div>
                                </div>
                                <!--r1 c2-->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Last Name<span style="color: red">*<?php if(isset($errorMsg)){echo" ".($errorMsg["txtParentLastName"]);} ?></span></label>
                                        <input class="form-control" name="txtParentLastName" id="txtParentLastName" tabindex="15" value="<?php echo "$txtParentLastName"; ?>" placeholder="Parent's last name"  onfocus="this.placeholder = ' '" onblur="this.placeholder='Parent\'s last name'"  >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!--r2 c1-->
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Contact Number<span style="color: red">*<?php if(isset($errorMsg)){ echo" ". $errorMsg["txtContactNumber"];} ?></span></label>
                                        <input class="form-control" name="txtContactNumber" id="txtContactNumber" tabindex="16" placeholder="###-###-####" onfocus="this.placeholder = ''" onblur="this.placeholder = '###-###-####'" value="<?php echo "$txtContactNumber"; ?>">
                                    </div>
                                </div>
                                <!--r2 c2-->
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Other Contact Number</label>
                                        <input class="form-control" name="txtContactNumber2" id="txtContactNumber2" tabindex="16" placeholder="###-###-####" placeholder="###-###-####" onfocus="this.placeholder = ''" onblur="this.placeholder = '###-###-####'" value="<?php echo "$txtContactNumber2"; ?>">
                                    </div>
                                </div>
                                <!--r2 c3-->
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>E-mail<span style="color: red">*<?php if(isset($errorMsg)){echo" ".($errorMsg["txtEmail"]);} ?></span></label>
                                        <input class="form-control" name="txtEmail" id="txtEmail" tabindex="17" value="<?php echo "$txtEmail"; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Health History-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Health History.
                        </div>
                        <div class="panel-body">
                            <p>In order to help determine if your child is experiencing vision problems or is at risk
                                for various eye conditions, please complete this health history questionnaire for the
                                child named above.
                            </p>
                            <!--Row 1-->
                            <div class="row">
                                <div class="col-lg-12">
                                    <label>1. My child already sees an eye doctor (optometrist) for regular eye exams.</label>
                                    <div class="radio-inline">
                                        <label><input type="radio" name="rdbRegularEyeExam" id="rdbRegularEyeExam" value="No"<?php if($rdbRegularEyeExam == "No"){echo "checked=checked";}?>>No</label>
                                    </div>
                                    <div class="radio-inline">
                                        <label><input type="radio" name="rdbRegularEyeExam" id="rdbRegularEyeExam" value="Yes"<?php if($rdbRegularEyeExam == "Yes"){echo "checked=checked";}?>>Yes</label>
                                    </div>
                                </div>
                            </div>
                            <!--Row 2 Updated-->
                             <div class="row">
                                 <div class="col-lg-12">
                                     <label>2.This is the 1<sup>st</sup> eye exam for my child with an eye doctor (optometrist).</label>
                                     <div class="radio-inline">
                                         <label><input type="radio" name="rdbFirstExam" value="No" <?php if($rdbFirstExam == "No"){echo "checked=checked";}?>>No</label>
                                     </div>
                                     <div class="radio-inline">
                                         <label><input type="radio" name="rdbFirstExam" value="Yes"<?php if($rdbFirstExam == "Yes"){echo "checked=checked";}?>>Yes</label>
                                     </div>
                                     &nbsp If no please specify year for previous eye exam <input type="text">
                                 </div>
                             </div>
                            <!--Row 2-->
                            <div class="row">
                                <!--r1 c1 Eye Condition-->
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>3. Please check off any of the following eye conditions your child currently has or has had in the past:</label>
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="chkEyeCondition[]" value="Turned Eye" <?php if(isset($chkEyeCondition)){if(in_array("Turned Eye",$chkEyeCondition)){echo "checked = checked";}} ?>> Turned Eye</label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="chkEyeCondition[]" value="Eye Surgery" <?php if(isset($chkEyeCondition)){if(in_array("Eye Surgery",$chkEyeCondition)){echo "checked = checked";}} ?>> Eye Surgery</label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="chkEyeCondition[]" value="Color Vision Defect" <?php if(isset($chkEyeCondition)){ if(in_array("Color Vision Defect",$chkEyeCondition)){echo "checked = checked";}} ?>> Color Vision Defect</label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="chkEyeCondition[]" value="Patching Therapy" <?php if(isset($chkEyeCondition)){if(in_array("Patching Therapy",$chkEyeCondition)){echo "checked = checked";}} ?>> Patching Therapy</label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="chkEyeCondition[]" value="Uses/Used glasses" <?php if(isset($chkEyeCondition)){if(in_array("Uses/Used glasses",$chkEyeCondition)){echo "checked = checked";}} ?>>Uses/Used glasses</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Row 3-->
                            <div class="row">
                                <!--r2 c1 Allergies-->
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>4. Does your child have any known ALLERGIES?</label>
                                        <div class="radio-inline">
                                            <label><input type="radio" name="rdbAllergies" id="rdbAllergiesNo"  value="No" <?php if($rdbAllergies == "No"){echo "checked = checked";} ?>>No</label>
                                        </div>
                                        <div class="radio-inline">
                                            <label><input type="radio" name="rdbAllergies" id="rdbAllergiesYes" value="Yes"<?php if($rdbAllergies == "Yes"){echo "checked = checked";} ?>>Yes</label>
                                        </div>
                                        <div id="txtAllergies">
                                            <label>Please specify</label><textarea class="form-control" name="txtAllergies" rows="3"><?php echo "$txtAllergies";?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!--r1 c2 Medication-->
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>5. Is your child currently taking any MEDICATION?</label>
                                        <div class="radio-inline">
                                            <label><input type="radio" name="rdbMedication"  id="rdbMedicationNo" value="No" <?php if($rdbMedication == "No"){echo "checked = checked";}?>>No</label>
                                        </div>
                                        <div class="radio-inline">
                                            <label><input type="radio" name="rdbMedication" id="rdbMedicationYes" value="Yes" <?php if($rdbMedication == "Yes"){echo "checked = checked";}?>>Yes</label>
                                        </div>
                                        <div id="txtMedication">
                                            <label>Please specify</label><textarea class="form-control" name="txtMedication" id="" rows="3"><?php echo "$txtMedication";?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!--r1 c3 Relatives have Eye disease-->
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>6. Do any of your child's relatives have an eye disease ?</label>
                                        <div class="radio-inline">
                                            <label><input type="radio" name="rdbRelative" id="rdbRelativeNo" value="No" <?php if($rdbRelative == "No"){echo "checked = checked";}?>>No</label>
                                        </div>
                                        <div class="radio-inline">
                                            <label><input type="radio" name="rdbRelative" id="rdbRelativeYes" value="Yes" <?php if($rdbRelative == "Yes"){echo "checked = checked";}?>>Yes</label>
                                        </div>
                                        <div id="txtRelative">
                                            <label>Please specify</label><textarea class="form-control" name="txtRelative" rows="3"><?php echo "$txtRelative";?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Row 4-->
                            <div class="row">
                                <div class="col-lg-12">
                                    <label>7. Please list any symptoms your child has in regards to his/her vision and/or eye
                                        health including eye strain and headaches and any triggers for these symptoms such as
                                        reading, TV, etc. Also list any concerns regarding your child's performance in school,
                                        sports, or other activities:
                                        <textarea class="form-control" name="txtOtherSymptoms" id="" rows="3"></textarea>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Share information with principal-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel-body">
                        <div class="form-group">

                            <!--todo swap the order of question and add radio button -->

                            <label>I give my permission for MEC to share the results of my child's eye examination with school's principal.</label>
                            <label class="radio-inline">
                                <input type="radio" name="rdbShare" value="Yes" <?php if($rdbShare == "Yes"){echo "checked=checked";}?>>
                                Yes
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="rdbShare" value="No" <?php if($rdbShare == "No"){echo "checked=checked";}?>>
                                No
                            </label>

                            <label>I give my permission for my son/daughter to receive his/her annual OHIP covered eye examination at location.<span style="color: red">*<?php if(isset($errorMsg)){echo" ".($errorMsg["rdbConsent"]);} ?></span></label>
                            <label class="radio-inline">
                                 <input type="radio" name="rdbConsent" value="Yes" <?php if($rdbConsent == "Yes"){echo "checked=checked";}?>>
                                 Yes
                            </label>
                            <label class="radio-inline">
                                 <input type="radio" name="rdbConsent" value="No" <?php if($rdbConsent == "No"){echo "checked=checked";}?>>
                                 No
                             </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel-body">
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit" name="btnSubmit" value="submit">Submit</button>
                            <button class="btn btn-danger" type="submit" name="btnReset">Reset</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Bootstrap Core JavaScript -->
<script src="../../Local/Resources/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>