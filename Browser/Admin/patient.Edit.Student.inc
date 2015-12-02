<?php
/**
 * Created by PhpStorm.
 * User: Dushyant
 * Date: 2015-11-18
 * Time: 11:22 AM
 */
?>
<div class="row">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Patient Type:
                <label>Student</label>
        </div>
        <div class="panel panel-body">
            <!--Set location-->
            <div class="row">
                <!--Student locations-->
                <div class="col-md-12" id="txtSchool" >
                    Register new patient at <input type="text" id = "txtStdLocation" name="txtStdLocation" >
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
