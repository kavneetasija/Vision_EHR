<?php
/**
 * Created by PhpStorm.
 * User: Dushyant
 * Date: 2015-11-18
 * Time: 11:22 AM
 */
//patient object
$patient = new Patient();
//check if form is submitted
if(isset($btnSubmit)){
    $PatientId = $btnSubmit;
    //change basic info
    $result['basic_info'] = $patient->updatePatientInfoById($PatientId,$txtStdLocation,$txtStdFirstName,$txtStdLastName,$txtStdOhipNumber,
                                    $txtStdOhipVirsion,$txtStdBirthDate,$rdbStdGender,$txtStdAddress,$txtStdCity,
                                    $drpStdProvince,$txtStdPostalCode);
    //change relational info
       $result['relations'] = $patient->updateStudentRelationInfoByPatientId($PatientId,$txtStdParentFirstName,$txtStdParentLastName,
            $txtStdParentContact,$txtStdParentOptionalContact,$txtStdParentEmail,
            $txtStdTeacherName,$txtStdGrade,$txtStdClass);
    //Make single string of eye condition
    if(isset($chkEyeCondition)){
        if(isset($chkEyeCondition['0'])){$eyeConditions .= $chkEyeCondition['0'].",";}
        if(isset($chkEyeCondition['1'])){$eyeConditions .= $chkEyeCondition['1'].",";}
        if(isset($chkEyeCondition['2'])){$eyeConditions .= $chkEyeCondition['2'].",";}
        if(isset($chkEyeCondition['3'])){$eyeConditions .=  $chkEyeCondition['3'].",";}
        if(isset($chkEyeCondition['4'])){$eyeConditions .= $chkEyeCondition['4'];}
    }
    //change health history
    $result['health'] = $patient->updateStudentHealthByPatientId($PatientId,$rdbShareInfo,$rdbFirstExam,$textFirstExam,$eyeConditions,$rdbMedicalCondition,
        $txtMedicalCondition,$rdbMedication,$txtMedication,$rdbAllergies,$txtAllergies,$rdbRelative,$txtRelative,$txtOther);

}
//check for patient id
if(isset($PatientId)){
    //get patient info by id
    $patientInfo = $patient->getPatientById($PatientId);
    $patientInfo = mysqli_fetch_assoc($patientInfo);
    //get relation info
    $studentRelation = $patient->getStudentRelationsByPatientId($patientInfo['patient_id']);
    $studentRelation = mysqli_fetch_assoc($studentRelation);
    //get health history
    $studentHealthHistory = $patient->getHealthHistoryByPatientId($patientInfo['patient_id']);
    $studentHealthHistory = mysqli_fetch_assoc($studentHealthHistory);
}

?>
<div class="row">
    <div class="row">
        <div class="col-md-12">
            <?php
                if(isset($result)){

                    if($result['basic_info'] != 1){
                        echo "<div class='alert alert-danger alert-dismissable'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>$result[basic_info]
                            </div>";
                    }
                    elseif($result['relations'] != 1){
                        echo "<div class='alert alert-danger alert-dismissable'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>$result[relations]
                            </div>";
                    }
                    elseif($result['health'] != 1){
                        echo "<div class='alert alert-danger alert-dismissable'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>$result[health]
                            </div>";
                    }
                    else{
                        echo "<div class='alert alert-success alert-dismissable'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>Patient info successfully edited
                            </div>";
                    }

                }
            ?>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            Patient Type:
            <input type="text" name="type" value="Student" style="color: black; display: none;">Student
        </div>
        <div class="panel panel-body">
            <!--Set location-->
            <div class="row">
                <!--Student locations-->
                <div class="col-md-12" id="txtSchool" >
                    Register new patient at <input type="text" id = "txtStdLocation" name="txtStdLocation" value="<?php echo $patientInfo['name'];?>" >
                </div>
            </div>
            <!--Student Info Pnl-->
            <div id="pnlStudentInfo" style="display: block;" class="panel-body">
                <!--Basic Info Student-->
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <label>Student's Information</label>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-2"><label>First Name</label></div>
                            <div class="col-md-4">
                                <input type="text" name="txtStdFirstName" value="<?php echo $patientInfo['first_name'];?>">
                            </div>
                            <div class="col-md-2"><label>Last Name</label></div>
                            <div class="col-md-4">
                                <input type="text" name="txtStdLastName" value="<?php echo $patientInfo['last_name'];?>">
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-2"><label>OHIP Number</label></div>
                            <div class="col-md-4">
                                <input type="text" maxlength="10" name="txtStdOhipNumber" value="<?php echo $patientInfo['OHIP_number'];?>">
                            </div>
                            <div class="col-md-2"><label>Version Code</label></div>
                            <div class="col-md-4">
                                <input type="text" maxlength="2" name="txtStdOhipVirsion" size="3" value="<?php echo $patientInfo['OHIP_virsion'];?>">
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-2"><label>Birth Date</label></div>
                            <div class="col-md-4">
                                <input type="text" class="txtBirthDate" name="txtStdBirthDate" value="<?php echo $patientInfo['birth_date'];?>" >
                            </div>
                            <div class="col-md-2"><label>Gender</label></div>
                            <div class="col-md-4">
                                <lable class="radio-inline">
                                    <input type="radio" id="rdbStdGender" name="rdbStdGender" value="Male" <?php if($patientInfo['gender']==='Male'){echo 'checked';}?>>Male
                                </lable>
                                <lable class="radio-inline">
                                    <input type="radio" id="rdbStdGender" name="rdbStdGender" value="Female" <?php if($patientInfo['gender']==='Female'){echo 'checked';}?>>Female
                                </lable>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-6" style="border-right: dotted;">
                                <div class="row">
                                    <div class="col-md-4"><label>Address</label></div>
                                    <div class="col-md-8">
                                        <input type="text" name="txtStdAddress" value="<?php echo $patientInfo['address']?>">
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-4"><label>City</label></div>
                                    <div class="col-md-8">
                                        <input type="text" name="txtStdCity" value="<?php echo $patientInfo['city']?>">
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-4"><label>Province</label></div>
                                    <div class="col-md-8">
                                        <select style="width: 70px;" name="drpStdProvince">
                                            <option value="AB" <?php if($patientInfo['province'] == "AB" ){echo 'selected';}?>>AB</option>
                                            <option value="BC" <?php if($patientInfo['province'] == "BC" ){echo 'selected';}?>>BC</option>
                                            <option value="MB" <?php if($patientInfo['province'] == "MB" ){echo 'selected';}?>>MB</option>
                                            <option value="NB" <?php if($patientInfo['province'] == "NB" ){echo 'selected';}?>>NB</option>
                                            <option value="NL" <?php if($patientInfo['province'] == "NL" ){echo 'selected';}?>>NL</option>
                                            <option value="NS" <?php if($patientInfo['province'] == "NS" ){echo 'selected';}?>>NS</option>
                                            <option value="ON" <?php if($patientInfo['province'] == "ON" ){echo 'selected';}?>>ON</option>
                                            <option value="PE" <?php if($patientInfo['province'] == "PE" ){echo 'selected';}?>>PE</option>
                                            <option value="QC" <?php if($patientInfo['province'] == "QC" ){echo 'selected';}?>>QC</option>
                                            <option value="SK" <?php if($patientInfo['province'] == "SK" ){echo 'selected';}?>>SK</option>
                                            <option value="NT" <?php if($patientInfo['province'] == "NT" ){echo 'selected';}?>>NT</option>
                                            <option value="NU" <?php if($patientInfo['province'] == "NU" ){echo 'selected';}?>>NU</option>
                                            <option value="YT" <?php if($patientInfo['province'] == "YT" ){echo 'selected';}?>>YT</option>
                                        </select>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-4"><label>Postal Code</label></div>
                                    <div class="col-md-8">
                                        <input type="text" maxlength="7" size="7" name="txtStdPostalCode" value="<?php echo $patientInfo['postal_code'];?>">
                                    </div>
                                </div><br>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4"><label>Teacher's Name</label></div>
                                    <div class="col-md-8">
                                        <input type="text" name = 'txtStdTeacherName' value="<?php echo $studentRelation['teacher_name'];?>">
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-4"><label>Grade</label></div>
                                    <div class="col-md-8">
                                        <input type="text" name="txtStdGrade" value="<?php echo $studentRelation['grade'];?>">
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-4"><label>Class</label></div>
                                    <div class="col-md-8">
                                        <input type="text" name="txtStdClass" value="<?php echo $studentRelation['class'];?>">
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
                                <input type="text" name="txtStdParentFirstName" value="<?php echo $studentRelation['first_name']?>">
                            </div>
                            <div class="col-md-2"><label>Last Name</label></div>
                            <div class="col-md-4">
                                <input type="text" name="txtStdParentLastName" value="<?php echo $studentRelation['last_name']?>">
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-2"><label>Contact Number</label></div>
                            <div class="col-md-4">
                                <input type="text" maxlength="12" name="txtStdParentContact" value="<?php echo $studentRelation['phone']?>">
                            </div>
                            <div class="col-md-2"><label>Optional Contact</label></div>
                            <div class="col-md-4">
                                <input type="text" maxlength="12" name="txtStdParentOptionalContact" value="<?php echo $studentRelation['other_phone']?>">
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-2"><label>Email</label></div>
                            <div class="col-md-4">
                                <input type="text" name="txtStdParentEmail" value="<?php echo $studentRelation['email']?>">
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
                                    <label><input type="radio" name="rdbShareInfo"  value="No" <?php if($studentHealthHistory['share_info']==='No'){echo 'checked';}?>>No</label>
                                </div>
                                <div class="radio-inline">
                                    <label><input type="radio" name="rdbShareInfo"  value="Yes" <?php if($studentHealthHistory['share_info']==='Yes'){echo 'checked';}?>>Yes</label>
                                </div>
                            </div>
                        </div>

                        <!--2is 1st eye exam-->
                        <div class="row">
                            <div class="col-md-7">
                                <label>2.This is the 1<sup>st</sup> eye exam for my child with an eye doctor (optometrist).</label>
                                <div class="radio-inline">
                                    <label><input type="radio" name="rdbFirstExam" value="No" <?php if($studentHealthHistory['first_exam']==='No'){echo 'checked';}?>>No</label>
                                </div>
                                <div class="radio-inline">
                                    <label><input type="radio" name="rdbFirstExam" value="Yes" <?php if($studentHealthHistory['first_exam']==='Yes'){echo 'checked';}?>>Yes</label>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <label>If no when was his/her last exam (Year)</label>
                                <input type="text" name="textFirstExam" value="<?php echo $studentHealthHistory['last_exam_year'];?>">
                            </div>
                        </div>

                        <!--3Eye Condition-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>3. Please check off any of the following eye conditions your child currently has or has had in the past:</label>
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="chkEyeCondition[]" value="Turned Eye"<?php if(strpos($studentHealthHistory['eye_condition'],'Turned Eye')!== false){echo 'checked';}?>> Turned Eye</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="chkEyeCondition[]" value="Eye Surgery"<?php if(strpos($studentHealthHistory['eye_condition'],'Eye Surgery')!== false){echo 'checked';}?>> Eye Surgery</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="chkEyeCondition[]" value="Color Vision Defect" <?php if(strpos($studentHealthHistory['eye_condition'],'Color Vision Defect')!== false){echo 'checked';}?>> Color Vision Defect</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="chkEyeCondition[]" value="Patching Therapy" <?php if(strpos($studentHealthHistory['eye_condition'],'Patching Therapy')!== false){echo 'checked';}?>> Patching Therapy</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="chkEyeCondition[]" value="Uses/Used glasses" <?php if(strpos($studentHealthHistory['eye_condition'],'Uses/Used glasses')!== false){echo 'checked';}?>>Uses/Used glasses</label>
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
                                        <label><input type="radio" name="rdbMedicalCondition" value="No" <?php if($studentHealthHistory['medical_condition']==='No'){echo 'checked';}?>>No</label>
                                    </div>
                                    <div class="radio-inline">
                                        <label><input type="radio" name="rdbMedicalCondition" value="Yes" <?php if($studentHealthHistory['medical_condition']==='Yes'){echo 'checked';}?>>Yes</label>
                                    </div>
                                    <div id="txtRelative">
                                        <label>Please specify</label><textarea class="form-control" name="txtMedicalCondition" rows="3"><?php echo $studentHealthHistory['medical_condition_text'];?></textarea>
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
                                        <label><input type="radio" name="rdbMedication" value="No" <?php if($studentHealthHistory['medication']==='No'){echo 'checked';}?>>No</label>
                                    </div>
                                    <div class="radio-inline">
                                        <label><input type="radio" name="rdbMedication" value="Yes" <?php if($studentHealthHistory['medication']==='Yes'){echo 'checked';}?>>Yes</label>
                                    </div>
                                    <div id="txtMedication">
                                        <label>Please specify</label><textarea class="form-control" name="txtMedication" rows="3"><?php echo $studentHealthHistory['medication_text'];?></textarea>
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
                                        <label><input type="radio" name="rdbAllergies" value="No" <?php if($studentHealthHistory['allergies']==='No'){echo 'checked';}?>>No</label>
                                    </div>
                                    <div class="radio-inline">
                                        <label><input type="radio" name="rdbAllergies" value="Yes" <?php if($studentHealthHistory['allergies']==='Yes'){echo 'checked';}?>>Yes</label>
                                    </div>
                                    <div id="txtAllergies">
                                        <label>Please specify</label><textarea class="form-control" name="txtAllergies" rows="3"><?php echo $studentHealthHistory['allergies_text'];?></textarea>
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
                                        <label><input type="radio" name="rdbRelative" value="No" <?php if($studentHealthHistory['relative_eye_condition']==='No'){echo 'checked';}?>>No</label>
                                    </div>
                                    <div class="radio-inline">
                                        <label><input type="radio" name="rdbRelative" value="Yes" <?php if($studentHealthHistory['relative_eye_condition']==='Yes'){echo 'checked';}?>>Yes</label>
                                    </div>
                                    <div id="txtRelative">
                                        <label>Please specify</label><textarea class="form-control" name="txtRelative" rows="3"><?php echo $studentHealthHistory['relative_eye_condition_text'];?></textarea>
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
                                    <textarea class="form-control" name="txtOther" rows="3"><?php echo $studentHealthHistory['other_text'];?></textarea>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>
</div>
