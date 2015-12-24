<?php
/**
 * Created by PhpStorm.
 * User: Dushyant
 * Date: 2015-07-26
 * Time: 8:53 PM
 */
?>

<?php
include("header.php");
//add css
echo "<link href='../../Local/dist/css/eyeExam.css' rel='stylesheet'>";
include("sidebar.php");
?>

<?php
require_once('../../Local/Classes/class.Exam.php');
extract($_POST);
$exam = new Exam();
//set exam id for object
$exam->examId = $_SESSION['examID_eyeExam'];
//get all patient basic inf
$patientInfo = $exam->getPatientById($_SESSION['patientID_eyeExam']);
$patientInfo = mysqli_fetch_assoc($patientInfo);

//get relational ifo
if($patientInfo['type'] == "Student"){
    $patientRelation = $exam->getStudentRelationsByPatientId($patientInfo['patient_id']);
    $patientRelation = mysqli_fetch_array($patientRelation);
}
if($patientInfo['type'] == "Senior"){
    $patientRelation = $exam->getSeniorRelationsByPatientId($patientInfo['patient_id']);
    $patientRelation = mysqli_fetch_array($patientRelation);
}

//get student health info
$studentHealthHistory = $exam->getHealthHistoryByPatientId($_SESSION['patientID_eyeExam']);
$studentHealthHistory = mysqli_fetch_assoc($studentHealthHistory);
//get all gtts names and populate select info
$gtts = $exam->getAllGtts();

//get all data from database using exam id and apply to form element
//select Acuities
    $accuities = $exam->selectAcuitiesByExamId();
    $accuities = mysqli_fetch_array($accuities);
//select retnoscopy
    $retinoscopy = $exam->selectRetnoscopyByExamId();
    $retinoscopy = mysqli_fetch_array($retinoscopy);
    //set parameters for acuities
    $exam->acuities_INPUT_0   = $acuities_INPUT_0;  $exam->acuities_INPUT_1 =   $acuities_INPUT_1;  $exam->acuities_INPUT_2 =   $acuities_INPUT_2 ;$exam->acuities_INPUT_3 =   $acuities_INPUT_3 ;
    $exam->acuities_INPUT_4   = $acuities_INPUT_4;  $exam->acuities_INPUT_5 =   $acuities_INPUT_5;  $exam->acuities_INPUT_6 =   $acuities_INPUT_6 ;$exam->acuities_INPUT_7 =   $acuities_INPUT_7 ;
    $exam->acuities_INPUT_8   = $acuities_INPUT_8;  $exam->acuities_INPUT_9 =   $acuities_INPUT_9;  $exam->acuities_INPUT_10 =  $acuities_INPUT_10 ;$exam->acuities_INPUT_11 =  $acuities_INPUT_11 ;
    $exam->acuities_INPUT_12  = $acuities_INPUT_12; $exam->acuities_INPUT_13 =  $acuities_INPUT_13; $exam->acuities_INPUT_14 =  $acuities_INPUT_14 ;$exam->acuities_INPUT_15 =  $acuities_INPUT_15 ;
    $exam->acuities_INPUT_16  = $acuities_INPUT_16; $exam->acuities_INPUT_17 =  $acuities_INPUT_17; $exam->acuities_INPUT_18 =  $acuities_INPUT_18 ;$exam->acuities_INPUT_19 =  $acuities_INPUT_19 ;
    $exam->acuities_INPUT_20  = $acuities_INPUT_20; $exam->acuities_INPUT_21 =  $acuities_INPUT_21; $exam->acuities_INPUT_22 =  $acuities_INPUT_22 ;$exam->acuities_INPUT_23 =  $acuities_INPUT_23 ;
    $exam->acuities_INPUT_24  = $acuities_INPUT_24; $exam->acuities_INPUT_25 =  $acuities_INPUT_25; $exam->acuities_INPUT_26 =  $acuities_INPUT_26 ;$exam->acuities_INPUT_27 =  $acuities_INPUT_27 ;
    $exam->acuities_INPUT_28  = $acuities_INPUT_28; $exam->acuities_INPUT_29 =  $acuities_INPUT_29; $exam->acuities_INPUT_30 =  $acuities_INPUT_30 ;$exam->acuities_INPUT_31 =  $acuities_INPUT_31 ;
    $exam->acuities_INPUT_32  = $acuities_INPUT_32; $exam->acuities_INPUT_33 =  $acuities_INPUT_33; $exam->acuities_INPUT_34 =  $acuities_INPUT_34 ;$exam->acuities_INPUT_35 =  $acuities_INPUT_35 ;
    $exam->acuities_INPUT_36  = $acuities_INPUT_36; $exam->acuities_SELECT_0 =  $acuities_SELECT_0; $exam->acuities_SELECT_1 =  $acuities_SELECT_1 ;$exam->acuities_SELECT_2 =  $acuities_SELECT_2 ;
    $exam->acuities_SELECT_3  = $acuities_SELECT_3; $exam->acuities_SELECT_4 =  $acuities_SELECT_4; $exam->acuities_note = $txtAcutiesNote;

    //set parameters for retnoscopy
    $exam->retinoscopy_INPUT_0 = $retinoscopy_INPUT_0;$exam->retinoscopy_INPUT_1 = $retinoscopy_INPUT_1;$exam->retinoscopy_INPUT_2 = $retinoscopy_INPUT_2;
    $exam->retinoscopy_INPUT_3 = $retinoscopy_INPUT_3;$exam->retinoscopy_INPUT_4 = $retinoscopy_INPUT_4;$exam->retinoscopy_INPUT_5 = $retinoscopy_INPUT_5;
    $exam->retinoscopy_INPUT_6 = $retinoscopy_INPUT_6;$exam->retinoscopy_INPUT_7 = $retinoscopy_INPUT_7;$exam->retinoscopy_INPUT_8 = $retinoscopy_INPUT_8;
    $exam->retinoscopy_INPUT_9 = $retinoscopy_INPUT_9;$exam->retinoscopy_INPUT_10 = $retinoscopy_INPUT_10;$exam->retinoscopy_INPUT_11 = $retinoscopy_INPUT_11;
    $exam->retinoscopy_INPUT_12 = $retinoscopy_INPUT_12;$exam->retinoscopy_INPUT_13 = $retinoscopy_INPUT_13;$exam->retinoscopy_INPUT_14 = $retinoscopy_INPUT_14;
    $exam->retinoscopy_INPUT_15 = $retinoscopy_INPUT_15;$exam->retinoscopy_INPUT_16 = $retinoscopy_INPUT_16;$exam->retinoscopy_INPUT_17 = $retinoscopy_INPUT_17;
    $exam->retinoscopy_INPUT_18 = $retinoscopy_INPUT_18;$exam->retinoscopy_INPUT_19 = $retinoscopy_INPUT_19;$exam->retinoscopy_INPUT_20 = $retinoscopy_INPUT_20;
    $exam->retinoscopy_INPUT_21 = $retinoscopy_INPUT_21;$exam->retinoscopy_INPUT_22 = $retinoscopy_INPUT_22;$exam->retinoscopy_INPUT_23 = $retinoscopy_INPUT_23;
    $exam->retinoscopy_INPUT_24 = $retinoscopy_INPUT_24;$exam->retinoscopy_INPUT_25 = $retinoscopy_INPUT_25;$exam->retinoscopy_INPUT_26 = $retinoscopy_INPUT_26;
    $exam->retinoscopy_INPUT_27 = $retinoscopy_INPUT_27;$exam->retinoscopy_INPUT_28 = $retinoscopy_INPUT_28;$exam->retinoscopy_INPUT_29 = $retinoscopy_INPUT_29;
    $exam->retinoscopy_INPUT_30 = $retinoscopy_INPUT_30;$exam->retinoscopy_INPUT_31 = $retinoscopy_INPUT_31;$exam->retinoscopy_INPUT_32 = $retinoscopy_INPUT_32;
    $exam->retinoscopy_INPUT_33 = $retinoscopy_INPUT_33;$exam->retinoscopy_INPUT_34 = $retinoscopy_INPUT_34;$exam->retinoscopy_INPUT_35 = $retinoscopy_INPUT_35;
    $exam->retinoscopy_INPUT_36 = $retinoscopy_INPUT_36;$exam->retinoscopy_INPUT_37 = $retinoscopy_INPUT_37;$exam->retinoscopy_INPUT_38 = $retinoscopy_INPUT_38;
    $exam->retinoscopy_INPUT_39 = $retinoscopy_INPUT_39;$exam->retinoscopy_INPUT_40 = $retinoscopy_INPUT_40;$exam->retinoscopy_INPUT_41 = $retinoscopy_INPUT_41;
    $exam->retinoscopy_INPUT_42 = $retinoscopy_INPUT_42;$exam->retinoscopy_INPUT_43 = $retinoscopy_INPUT_43;$exam->retinoscopy_INPUT_44 = $retinoscopy_INPUT_44;
    $exam->retinoscopy_INPUT_45 = $retinoscopy_INPUT_45;$exam->retinoscopy_note = $txtRetinosopyNote;

    //set parameters for external
    $exam->external_INPUT_0 = $external_INPUT_0; $exam->external_INPUT_1 = $external_INPUT_1; $exam->external_INPUT_2 = $external_INPUT_2;
    $exam->external_INPUT_3 = $external_INPUT_3; $exam->external_INPUT_4 = $external_INPUT_4; $exam->external_INPUT_5 = $external_INPUT_5;
    $exam->external_INPUT_6 = $external_INPUT_6; $exam->external_INPUT_7 = $external_INPUT_7; $exam->external_INPUT_8 = $external_INPUT_8;
    $exam->external_INPUT_9 = $external_INPUT_9; $exam->external_INPUT_10 = $external_INPUT_10; $exam->external_INPUT_11 = $external_INPUT_11;
    $exam->external_INPUT_12 = $external_INPUT_12; $exam->external_INPUT_13 = $external_INPUT_13; $exam->external_INPUT_14 = $external_INPUT_14;
    $exam->external_INPUT_15 = $external_INPUT_15; $exam->external_INPUT_16 = $external_INPUT_16; $exam->external_INPUT_17 = $external_INPUT_17;
    $exam->external_INPUT_18 = $external_INPUT_18; $exam->external_INPUT_19 = $external_INPUT_19; $exam->external_INPUT_20 = $external_INPUT_20;
    $exam->external_INPUT_21 = $external_INPUT_21; $exam->external_INPUT_22 = $external_INPUT_22; $exam->external_note = $txtExternalNote;

    //set parameters for Internal
    $exam->internal_INPUT_0 = $internal_INPUT_0;$exam->internal_INPUT_1 = $internal_INPUT_1;$exam->internal_INPUT_2 = $internal_INPUT_2;
    $exam->internal_INPUT_3 = $internal_INPUT_3;$exam->internal_INPUT_4 = $internal_INPUT_4;$exam->internal_INPUT_5 = $internal_INPUT_5;
    $exam->internal_INPUT_6 = $internal_INPUT_6;$exam->internal_INPUT_7 = $internal_INPUT_7;$exam->internal_INPUT_8 = $internal_INPUT_8;
    $exam->internal_INPUT_9 = $internal_INPUT_9;$exam->internal_INPUT_10 = $internal_INPUT_10;$exam->internal_INPUT_11 = $internal_INPUT_11;
    $exam->internal_INPUT_12 = $internal_INPUT_12;$exam->internal_INPUT_13 = $internal_INPUT_13;$exam->internal_INPUT_14 = $internal_INPUT_14;
    $exam->internal_INPUT_15 = $internal_INPUT_15;$exam->internal_INPUT_16 = $internal_INPUT_16;$exam->internal_INPUT_17 = $internal_INPUT_17;
    $exam->internal_INPUT_18 = $internal_INPUT_18;$exam->internal_INPUT_19 = $internal_INPUT_19;$exam->internal_INPUT_20 = $internal_INPUT_20;
    $exam->internal_INPUT_21 = $internal_INPUT_21;$exam->internal_INPUT_22 = $internal_INPUT_22;$exam->internal_INPUT_23 = $internal_INPUT_23;
    $exam->internal_INPUT_24 = $internal_INPUT_24;$exam->internal_INPUT_25 = $internal_INPUT_25;$exam->internal_INPUT_26 = $internal_INPUT_26;
    $exam->internal_INPUT_27 = $internal_INPUT_27;$exam->internal_INPUT_28 = $internal_INPUT_28;$exam->internal_INPUT_29 = $internal_INPUT_29;
    $exam->internal_INPUT_30 = $internal_INPUT_30;$exam->internal_INPUT_31 = $internal_INPUT_31;$exam->internal_INPUT_32 = $internal_INPUT_32;
    $exam->internal_INPUT_33 = $internal_INPUT_33;$exam->internal_INPUT_34 = $internal_INPUT_34;$exam->internal_INPUT_35 = $internal_INPUT_35;
    $exam->internal_INPUT_36 = $internal_INPUT_36;$exam->internal_INPUT_37 = $internal_INPUT_37;$exam->internal_INPUT_38 = $internal_INPUT_38;
    $exam->internal_INPUT_39 = $internal_INPUT_39;$exam->internal_INPUT_40 = $internal_INPUT_40;$exam->internal_SELECT_0 = $internal_SELECT_0;
    $exam->internal_note = $txtInternalNote;

    //set parameters for Tonometry
    $exam->tonometry_INPUT_0 = $tonometry_INPUT_0;$exam->tonometry_INPUT_1 = $tonometry_INPUT_1;$exam->tonometry_INPUT_2 = $tonometry_INPUT_2;
    $exam->tonometry_INPUT_3 = $tonometry_INPUT_3;$exam->tonometry_INPUT_4 = $tonometry_INPUT_4;$exam->tonometry_INPUT_5 = $tonometry_INPUT_5;
    $exam->tonometry_INPUT_6 = $tonometry_INPUT_6;$exam->tonometry_INPUT_7 = $tonometry_INPUT_7;$exam->tonometry_INPUT_8 = $tonometry_INPUT_8;
    $exam->tonometry_INPUT_9 = $tonometry_INPUT_9;$exam->tonometry_INPUT_10 = $tonometry_INPUT_10;$exam->tonometry_INPUT_11 = $tonometry_INPUT_11;
    $exam->tonometry_INPUT_12 = $tonometry_INPUT_12;$exam->tonometry_INPUT_13 = $tonometry_INPUT_13;$exam->tonometry_INPUT_14 = $tonometry_INPUT_14;
    $exam->tonometry_INPUT_15 = $tonometry_INPUT_15;$exam->tonometry_INPUT_16 = $tonometry_INPUT_16;$exam->tonometry_INPUT_17 = $tonometry_INPUT_17;
    $exam->tonometry_INPUT_18 = $tonometry_INPUT_18;$exam->tonometry_INPUT_19 = $tonometry_INPUT_19;$exam->tonometry_SELECT_0 = $tonometry_SELECT_0;
    $exam->tonometry_note = $txtTonometryNote;

    //set parameters for Diagnosis
    $exam->diagnosis_INPUT_0 = $diagnosis_INPUT_0;$exam->diagnosis_INPUT_1 = $diagnosis_INPUT_1;$exam->diagnosis_INPUT_2 = $diagnosis_INPUT_2;
    $exam->diagnosis_INPUT_3 = $diagnosis_INPUT_3;$exam->diagnosis_INPUT_4 = $diagnosis_INPUT_4;$exam->diagnosis_INPUT_5 = $diagnosis_INPUT_5;
    $exam->diagnosis_INPUT_6 = $diagnosis_INPUT_6;$exam->diagnosis_INPUT_7 = $diagnosis_INPUT_7;$exam->diagnosis_INPUT_8 = $diagnosis_INPUT_8;
    $exam->diagnosis_INPUT_9 = $diagnosis_INPUT_9;$exam->diagnosis_INPUT_10 = $diagnosis_INPUT_10;$exam->diagnosis_INPUT_11 = $diagnosis_INPUT_11;
    $exam->diagnosis_INPUT_12 = $diagnosis_INPUT_12;$exam->diagnosis_INPUT_13 = $diagnosis_INPUT_13;$exam->diagnosis_INPUT_14 = $diagnosis_INPUT_14;
    $exam->diagnosis_INPUT_15 = $diagnosis_INPUT_15;$exam->diagnosis_INPUT_16 = $diagnosis_INPUT_16;$exam->diagnosis_INPUT_17 = $diagnosis_INPUT_17;
    $exam->diagnosis_INPUT_18 = $diagnosis_INPUT_18;$exam->diagnosis_INPUT_19 = $diagnosis_INPUT_19;$exam->diagnosis_INPUT_20 = $diagnosis_INPUT_20;
    $exam->diagnosis_INPUT_21 = $diagnosis_INPUT_21;$exam->diagnosis_INPUT_22 = $diagnosis_INPUT_22;$exam->diagnosis_INPUT_23 = $diagnosis_INPUT_23;
    $exam->diagnosis_INPUT_24 = $diagnosis_INPUT_24;$exam->diagnosis_INPUT_25 = $diagnosis_INPUT_25;$exam->diagnosis_INPUT_26 = $diagnosis_INPUT_26;
    $exam->diagnosis_INPUT_27 = $diagnosis_INPUT_27;$exam->diagnosis_INPUT_28 = $diagnosis_INPUT_28;$exam->diagnosis_INPUT_29 = $diagnosis_INPUT_29;
    $exam->diagnosis_INPUT_30 = $diagnosis_INPUT_30;$exam->diagnosis_INPUT_31 = $diagnosis_INPUT_31;$exam->diagnosis_INPUT_32 = $diagnosis_INPUT_32;
    $exam->diagnosis_INPUT_33 = $diagnosis_INPUT_33;$exam->diagnosis_INPUT_34 = $diagnosis_INPUT_34;$exam->diagnosis_INPUT_35 = $diagnosis_INPUT_35;
    $exam->diagnosis_INPUT_36 = $diagnosis_INPUT_36;$exam->diagnosis_INPUT_37 = $diagnosis_INPUT_37;$exam->diagnosis_INPUT_38 = $diagnosis_INPUT_38;
    $exam->diagnosis_INPUT_39 = $diagnosis_INPUT_39;$exam->diagnosis_INPUT_40 = $diagnosis_INPUT_40;$exam->diagnosis_INPUT_41 = $diagnosis_INPUT_41;
    $exam->diagnosis_INPUT_42 = $diagnosis_INPUT_42;$exam->diagnosis_INPUT_43 = $diagnosis_INPUT_43;$exam->diagnosis_INPUT_44 = $diagnosis_INPUT_44;
    $exam->diagnosis_INPUT_45 = $diagnosis_INPUT_45;$exam->diagnosis_notes = $txtDiagnosisNote; $exam->diagnosis_findings = $txtDiagnosisFindings;
    $exam->diagnosis_recommendation = $txtDiagnosisRecommendation;




?>


<form role="form" method="post" id="frm">
    <div class="form-group">
        <div id="page-wrapper" style="min-height: 649px;">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Eye Exam</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row1 -->

            <!-- /.row 5-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-8">
                                    <label><?php echo $patientInfo['first_name']." ".$patientInfo['last_name']?></label>
                                </div>
                                <div id="saveInfo" style="display: none;color:black;">
                                    <div class="col-md-3">
                                        <select class="form-control">
                                            <option value="404">404 - Full service(Child)</option>
                                            <option value="404">406 - Full service(Senior)</option>
                                            <option value="404">402 - Partial service</option>
                                        </select><br/>
                                    </div>
                                    <div class="col-md-1">
                                        <button class="btn btn-success" id="btnSave" name="btnSave" type="button" onclick="saveForm()" value="updateExam">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab0" data-toggle="tab" aria-expanded="false">Patient Info.</a></li>
                                <li class=""> <a href="#tab1" data-toggle="tab" aria-expanded="true">Acuities</a></li>
                                <li class=""> <a href="#tab2" data-toggle="tab" aria-expanded="false">Retinoscopy</a></li>
                                <li class=""> <a href="#tab3" data-toggle="tab" aria-expanded="false">External</a></li>
                                <li class=""> <a href="#tab4" data-toggle="tab" aria-expanded="false">Internal</a></li>
                                <li class=""> <a href="#tab5" data-toggle="tab" aria-expanded="false">Tonometry</a></li>
                                <li class="" onclick="document.getElementById('saveInfo').style.display='block'"> <a href="#tab6" data-toggle="tab" aria-expanded="false">Diagnosis &amp; Summary</a></li>
                            </ul>

                            <!--Eye exam Tab panes -->
                            <div class="tab-content">
                                <!--Patient info tab0-->
                                <div class="tab-pane fade active in" id="tab0">
                                    <h4>Patient Info.
                                        <?php
                                        if($studentHealthHistory['share_info']==='No'){
                                            echo "<span style='color: red'>Don\'t share</span>";
                                        }
                                        elseif($studentHealthHistory['share_info']==='Yes'){
                                            echo "<span style='color: green'>Can share</span>";
                                        }
                                        else{
                                            echo "<span style='color: blue'>Not provides by patient</span>";
                                        }
                                        ?>
                                    </h4>
                                    <!--General Information-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel panel-info">
                                                <div class="panel-heading">
                                                    <label>General information</label>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>Name</label>
                                                            <p class="form-control-static">
                                                                <?php echo "$patientInfo[first_name] $patientInfo[last_name]";?>
                                                            </p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label>Address</label>
                                                            <p class="form-control-static">
                                                                <?php
                                                                echo "$patientInfo[address]<br/>$patientInfo[city], $patientInfo[province]<br/>$patientInfo[postal_code]";
                                                                ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>Birth date</label>
                                                            <p class="form-control-static"><?php echo"$patientInfo[birth_date]";?></p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label>Health Card #</label>
                                                            <p class="form-control-static"><?php echo strtoupper("$patientInfo[OHIP_number]-$patientInfo[OHIP_virsion]");?></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label>Phone #</label>
                                                            <p class="form-control-static"><?php echo $patientRelation['phone']?></p>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>Email</label>
                                                            <p class="form-control-static"><?php echo $patientRelation['email']?></p>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>Other contact</label>
                                                            <p class="form-control-static"><?php echo $patientRelation['othet_phone']?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Health History-->
                                    <div class="panel panel-info" <?php if($patientInfo['type'] == 'Senior'){echo "style = 'display: none;'";}?>>
                                        <div class="panel-heading">
                                            <label>Health History</label>
                                        </div>
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
                                <!--Acuities tab1-->
                                <div class="tab-pane fade" id="tab1">
                                    <h4>Acuities</h4>
                                    <!--row 1 Recorded as-->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label>Recorded as:</label>
                                            <select class="form-control mediumText" name="acuities_SELECT_0"><!--todo ask for options to set values type-->
                                                <option>Select one......</option>
                                                <option value="Snellen" <?php if($accuities['acuities_SELECT_0']== 'Snellen'){echo 'selected';}?>>Snellen</option>
                                                <!--<option>Letters</option>
                                                <option>Option 3</option>-->
                                            </select>
                                        </div>
                                    </div><br>
                                    <!--row 2 lensometer-->
                                    <div class="panel panel-info">
                                        <div class="panel-heading"><label>Lensometer</label></div>
                                        <div class="panel-body">
                                            <!--Title Row-->
                                            <div class="row">
                                                <div class="col-md-3 col-md-offset-3">Rx</div>
                                                <div class="col-md-1">Add</div>
                                                <div class="col-md-1">Prism</div>
                                                <div class="col-md-1">PD</div>
                                                <div class="col-md-3">B.C</div>
                                            </div><br>
                                            <!--OD Row-->
                                            <div class="row">
                                                <div class="col-md-1 col-md-offset-2">OD</div>
                                                <div class="col-md-3"><!--OD RX txt1,txt2,txt3-->
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <input type="text" class="form-control smallText" name="acuities_INPUT_0"  value="<?php echo $accuities['acuities_INPUT_0']?>">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <input type="text" class="form-control smallText" name="acuities_INPUT_1"  value="<?php echo $accuities['acuities_INPUT_1']?>">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <input type="text" class="form-control smallText" name="acuities_INPUT_2"  value="<?php echo $accuities['acuities_INPUT_2']?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-1"><!--OD Add txt-->
                                                    <input type="text" class="form-control smallText" name="acuities_INPUT_3" value="<?php echo $accuities['acuities_INPUT_3']?>">
                                                </div>
                                                <div class="col-md-1"><!--OD Prism txt-->
                                                    <input type="text" class="form-control smallText" name="acuities_INPUT_4"  value="<?php echo $accuities['acuities_INPUT_4']?>">
                                                </div>
                                                <div class="col-md-1"><!--OD PD txt-->
                                                    <input type="text" class="form-control smallText" name="acuities_INPUT_5"  value="<?php echo $accuities['acuities_INPUT_5']?>">
                                                </div>
                                                <div class="col-md-3"><!--OD B.C txt-->
                                                    <input type="text" class="form-control smallText" name="acuities_INPUT_6"  value="<?php echo $accuities['acuities_INPUT_6']?>">
                                                </div>
                                            </div><br>
                                            <!--OS Row-->
                                            <div class="row">
                                                <div class="col-md-1 col-md-offset-2">OS</div>
                                                <div class="col-md-3"><!-- OS RX txt1,txt2,txt3-->
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <input type="text" class="form-control smallText" name=" acuities_INPUT_7"  value="<?php echo $accuities['acuities_INPUT_7']?>">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <input type="text" class="form-control smallText" name=" acuities_INPUT_8"  value="<?php echo $accuities['acuities_INPUT_8']?>">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <input type="text" class="form-control smallText" name=" acuities_INPUT_9"  value="<?php echo $accuities['acuities_INPUT_9']?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-1"><!--OS Add txt-->
                                                    <input type="text" class="form-control smallText" name=" acuities_INPUT_10"  value="<?php echo $accuities['acuities_INPUT_10']?>">
                                                </div>
                                                <div class="col-md-1"><!--OS Prism txt-->
                                                    <input type="text" class="form-control smallText" name=" acuities_INPUT_11"  value="<?php echo $accuities['acuities_INPUT_11']?>">
                                                </div>
                                                <div class="col-md-1"><!--OS PD txt-->
                                                    <input type="text" class="form-control smallText" name=" acuities_INPUT_12"  value="<?php echo $accuities['acuities_INPUT_12']?>">
                                                </div>
                                                <div class="col-md-3"><!--OS B.C txt-->
                                                    <input type="text" class="form-control smallText" name=" acuities_INPUT_13"  value="<?php echo $accuities['acuities_INPUT_13']?>">
                                                </div>
                                            </div><br>
                                            <!--Year old row-->
                                            <div class="row">
                                                <div class="col-md-1 col-md-offset-2">
                                                    Years old
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="number" min="1" class="form-control smallText" name=" acuities_INPUT_14"  value="<?php echo $accuities['acuities_INPUT_14']?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--row 3 Uncorrected and Corrected-->
                                    <div class="row">
                                        <!--Uncorrected Col-left-->
                                        <div class="col-md-6">
                                            <div class="panel panel-info">
                                                <div class="panel-heading"><label>Uncorrected</label></div>
                                                <div class="panel-body">
                                                    <!--Title-->
                                                    <div class="row">
                                                        <div class="col-md-5 col-md-offset-2">
                                                            <strong>Distance</strong>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <strong>Near</strong>
                                                        </div>
                                                    </div><br>
                                                    <!--Row 2 OD-->
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            VA &nbsp; OD
                                                        </div>
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control mediumText" name="acuities_INPUT_15"  value="<?php echo $accuities['acuities_INPUT_15']?>">
                                                        </div>
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control mediumText" name="acuities_INPUT_16"  value="<?php echo $accuities['acuities_INPUT_16']?>">
                                                        </div>
                                                    </div><br>
                                                    <!--Row 3 OS-->
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            OS
                                                        </div>
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control mediumText" name="acuities_INPUT_17"  value="<?php echo $accuities['acuities_INPUT_17']?>">
                                                        </div>
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control mediumText" name="acuities_INPUT_18"  value="<?php echo $accuities['acuities_INPUT_18']?>">
                                                        </div>
                                                    </div><br>
                                                    <!--Row 4 OU-->
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            OU
                                                        </div>
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control mediumText" name="acuities_INPUT_19"  value="<?php echo $accuities['acuities_INPUT_19']?>">
                                                        </div>
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control mediumText" name="acuities_INPUT_20"  value="<?php echo $accuities['acuities_INPUT_20']?>">
                                                        </div>
                                                    </div><br>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Corrected Col-Right -->
                                        <div class="col-md-6">
                                            <div class="panel panel-info">
                                                <div class="panel-heading"><label>Corrected</label></div>
                                                <div class="panel-body">
                                                    <!--Title-->
                                                    <div class="row">
                                                        <div class="col-md-5 col-md-offset-2">
                                                            <strong>Distance</strong>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <strong>Near</strong>
                                                        </div>
                                                    </div><br>
                                                    <!--Row 2 OD-->
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            VA &nbsp; OD
                                                        </div>
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control mediumText" name="acuities_INPUT_21"  value="<?php echo $accuities['acuities_INPUT_21']?>">
                                                        </div>
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control mediumText" name=" acuities_INPUT_22" value="<?php echo $accuities['acuities_INPUT_21']?>">
                                                        </div>
                                                    </div><br>
                                                    <!--Row 3 OS-->
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            OS
                                                        </div>
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control mediumText" name=" acuities_INPUT_23" value="<?php echo $accuities['acuities_INPUT_23']?>">
                                                        </div>
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control mediumText" name=" acuities_INPUT_24" value="<?php echo $accuities['acuities_INPUT_24']?>">
                                                        </div>
                                                    </div><br>
                                                    <!--Row 4 OU-->
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            OU
                                                        </div>
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control mediumText" name=" acuities_INPUT_25" value="<?php echo $accuities['acuities_INPUT_25']?>">
                                                        </div>
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control mediumText" name=" acuities_INPUT_26" value="<?php echo $accuities['acuities_INPUT_26']?>">
                                                        </div>
                                                    </div><br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--row 4 Cover test-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel panel-info">
                                                <div class="panel-heading"> <label>Cover Test</label> </div>
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <!-- Col 1 Left Unilateral,Alternating -->
                                                        <div class="col-md-6">
                                                            <!--Row 1 Title-->
                                                            <div class="row">
                                                                <div class="col-md-4 col-md-offset-3">
                                                                    <strong>Distance</strong>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <strong>Near</strong>
                                                                </div>
                                                            </div><br>
                                                            <!--Row 2 Unilateral-->
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    Unilateral
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control mediumText" name=" acuities_INPUT_27" value="<?php echo $accuities['acuities_INPUT_27']?>">
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <input type="text" class="form-control mediumText" name=" acuities_INPUT_28" value="<?php echo $accuities['acuities_INPUT_28']?>">
                                                                </div>
                                                            </div><br>
                                                            <!--Row 3 Alternating-->
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    Alternating
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control mediumText" name=" acuities_INPUT_29" value="<?php echo $accuities['acuities_INPUT_29']?>">
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <input type="text" class="form-control mediumText" name=" acuities_INPUT_30" value="<?php echo $accuities['acuities_INPUT_30']?>">
                                                                </div>
                                                            </div><br>
                                                        </div>
                                                        <!-- Col 1 Right Version,Saccades,Pursuits-->
                                                        <div class="col-md-6">
                                                            <!--Row 1-->
                                                            <div class="row">
                                                                <div class="col-md-3">Version</div>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control fullLengthText" name=" acuities_INPUT_31"  value="<?php echo $accuities['acuities_INPUT_31']?>">
                                                                </div>
                                                            </div><br>
                                                            <!--Row 2-->
                                                            <div class="row">
                                                                <div class="col-md-3">Saccades</div>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control fullLengthText" name=" acuities_INPUT_32"  value="<?php echo $accuities['acuities_INPUT_32']?>">
                                                                </div>
                                                            </div><br>
                                                            <!--Row 3-->
                                                            <div class="row">
                                                                <div class="col-md-3">Pursuits</div>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control fullLengthText" name=" acuities_INPUT_33"  value="<?php echo $accuities['acuities_INPUT_33']?>">
                                                                </div>
                                                            </div><br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <!-- Col 2 Left NPC,Maddox: VT,HZ -->
                                                        <div class="col-md-6">
                                                            <!--Row 1-->
                                                            <div class="row">
                                                                <div class="col-md-2">NPC</div>
                                                                <div class="col-md-2">
                                                                    <input type="text" class="form-control smallText" name=" acuities_INPUT_34"  value="<?php echo $accuities['acuities_INPUT_34']?>">
                                                                </div>
                                                                <div class="col-md-3">Maddox: VT</div>
                                                                <div class="col-md-2">
                                                                    <input type="text" class="form-control smallText" name=" acuities_INPUT_35"  value="<?php echo $accuities['acuities_INPUT_35']?>">
                                                                </div>
                                                                <div class="col-md-1">HZ</div>
                                                                <div class="col-md-2">
                                                                    <input type="text" class="form-control smallText" name=" acuities_INPUT_36"  value="<?php echo $accuities['acuities_INPUT_36']?>">
                                                                </div>
                                                            </div><br>
                                                        </div>
                                                        <!-- Col 2 Right Color Vision,Stereo Acuity -->
                                                        <div class="col-md-6">
                                                            <!--Row 1.1-->
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <strong>Color Vision</strong>
                                                                </div>
                                                            </div>
                                                            <!--Row 1.2-->
                                                            <div class="row">
                                                                <div class="col-md-2">Type</div>
                                                                <div class="col-md-4">
                                                                    <select class="form-control mediumText" name="acuities_SELECT_1"><!--todo add options-->
                                                                        <option value="Ishihara" <?php if($accuities['acuities_SELECT_1'] == 'Ishihara') {echo 'selected';}?>>Ishihara</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-2">Result</div>
                                                                <div class="col-md-4">
                                                                    <select class="form-control mediumText" name="acuities_SELECT_2"><!--todo add options-->
                                                                        <option <?php if($accuities['acuities_SELECT_2']== 1){echo 'selected';}?>value="1">1</option>
                                                                        <option <?php if($accuities['acuities_SELECT_2']== 2){echo 'selected';}?>value="2">2</option>
                                                                        <option <?php if($accuities['acuities_SELECT_2']== 3){echo 'selected';}?>value="3">3</option>
                                                                        <option <?php if($accuities['acuities_SELECT_2']== 4){echo 'selected';}?>value="4">4</option>
                                                                        <option <?php if($accuities['acuities_SELECT_2']== 5){echo 'selected';}?>value="5">5</option>
                                                                        <option <?php if($accuities['acuities_SELECT_2']== 6){echo 'selected';}?>value="6">6</option>
                                                                        <option <?php if($accuities['acuities_SELECT_2']== 7){echo 'selected';}?>value="7">7</option>
                                                                        <option <?php if($accuities['acuities_SELECT_2']== 8){echo 'selected';}?>value="8">8</option>
                                                                        <option <?php if($accuities['acuities_SELECT_2']== 9){echo 'selected';}?>value="9">9</option>
                                                                        <option <?php if($accuities['acuities_SELECT_2']== 10){echo 'selected';}?>value="10">10</option>
                                                                        <option <?php if($accuities['acuities_SELECT_2']== 11){echo 'selected';}?>value="11">11</option>
                                                                        <option <?php if($accuities['acuities_SELECT_2']== 12){echo 'selected';}?>value="12">12</option>
                                                                        <option <?php if($accuities['acuities_SELECT_2']== 13){echo 'selected';}?>value="13">13</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--Row 2.1-->
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <strong>Stereo Acuity</strong>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-2">Type</div>
                                                                <div class="col-md-4">
                                                                    <select class="form-control mediumText" name="acuities_SELECT_3"><!--todo add options-->
                                                                        <option value="Optical Dtereo"<?php if($accuities['Optical Dtereo']){echo 'select';}?>>Optical Dtereo</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-2">Result</div>
                                                                <div class="col-md-4">
                                                                    <select class="form-control mediumText" name="acuities_SELECT_4"><!--todo add options-->
                                                                        <option<?php if($accuities['acuities_SELECT_4']==1){echo 'select';}?> value="1">1</option>
                                                                        <option<?php if($accuities['acuities_SELECT_4']==2){echo 'select';}?> value="2">2</option>
                                                                        <option<?php if($accuities['acuities_SELECT_4']==3){echo 'select';}?> value="3">3</option>
                                                                        <option<?php if($accuities['acuities_SELECT_4']==4){echo 'select';}?> value="4">4</option>
                                                                        <option<?php if($accuities['acuities_SELECT_4']==5){echo 'select';}?> value="5">5</option>
                                                                        <option<?php if($accuities['acuities_SELECT_4']==6){echo 'select';}?> value="6">6</option>
                                                                        <option<?php if($accuities['acuities_SELECT_4']==7){echo 'select';}?> value="7">7</option>
                                                                        <option<?php if($accuities['acuities_SELECT_4']==8){echo 'select';}?> value="8">8</option>
                                                                        <option<?php if($accuities['acuities_SELECT_4']==9){echo 'select';}?> value="9">9</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Notes-->
                                    <div class="panel panel-default">
                                        <div class="panel-heading"><label>Notes...</label></div>
                                        <div class="panel-body">
                                            <textarea id="txtAcutiesNote" name="txtAcutiesNote" class="form-control"><?php echo "$accuities[note]";?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!--Retinoscopy tab2-->
                                <div class="tab-pane fade" id="tab2">
                                    <h4>Retinoscopy</h4>
                                    <!--1st Panel-->
                                    <div class="panel panel-info">
                                        <div class="panel-heading">
                                            <label>Retinoscopy Type
                                                <input style="color: black;" type="text" class="form-control largeText" name="retinoscopy_INPUT_0">
                                            </label>
                                        </div>
                                        <div class="panel-body form-group-sm">
                                            <!--row 1 OD,OS-->
                                            <div class="row">
                                                <!--OD-->
                                                <div class="col-md-6">
                                                    <!--Title-->
                                                    <div class="row">
                                                        <div class="col-sm-10 col-md-offset-2" style="text-align: center; background-color:#9d9d9d;">
                                                            <strong>OD</strong>
                                                        </div>
                                                    </div><br>
                                                    <!--Keratometry-->
                                                    <div class="row">
                                                        <div class="col-sm-2" style="padding: 0;text-align: center;">
                                                            Keratometry
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0px;">
                                                            <input type="text" class="form-control" name="retinoscopy_INPUT_1">
                                                        </div>
                                                        <div class="col-sm-1" style="padding: 0;text-align: center;">
                                                            at
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0px;">
                                                            <input type="text" class="form-control" name="retinoscopy_INPUT_2">
                                                        </div>
                                                        <div class="col-sm-1" style="padding: 0; text-align: center;">
                                                            /
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0px;">
                                                            <input type="text" class="form-control" name="retinoscopy_INPUT_3">
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0px;">
                                                            <input type="text" class="form-control" name="retinoscopy_INPUT_4">
                                                        </div>
                                                    </div><br>
                                                    <!--Dom OD-->
                                                    <div class="row">
                                                        <div class="col-sm-10 col-sm-offset-2">
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="retinoscopy_INPUT_5">DOM OD
                                                            </label>
                                                        </div>
                                                    </div><br>
                                                    <!--Retinoscopy-->
                                                    <div class="row">
                                                        <div class="col-sm-2" style="padding: 0;text-align: center;">
                                                            Retinoscopy
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0">
                                                            <input type="number" step="0.25" class="form-control" name="retinoscopy_INPUT_6" id="txtRetOD_1">
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0">
                                                            <input type="number" step="0.25" class="form-control" name="retinoscopy_INPUT_7" id="txtRetOD_2">
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0">
                                                            <input type="number" step="1" min="0" class="form-control" name="retinoscopy_INPUT_8" id="txtRetOD_3">
                                                        </div>
                                                        <div class="col-sm-1" style="padding: 0; text-align: center;">
                                                            /
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0">
                                                            <input type="text" class="form-control" name="retinoscopy_INPUT_9">
                                                        </div>
                                                    </div><br>
                                                    <!--Subjective Rx-->
                                                    <div class="row">
                                                        <div class="col-sm-2" style="padding: 0;text-align: center;">
                                                            Subjective Rx
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0">
                                                            <input type="number" step="0.25" class="form-control" name="retinoscopy_INPUT_10" id="txtSubOD_1">
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0">
                                                            <input type="number" step="0.25" class="form-control" name="retinoscopy_INPUT_11" id="txtSubOD_2">
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0">
                                                            <input type="number" step="1" min="0" class="form-control" name="retinoscopy_INPUT_12" id="txtSubOD_3">
                                                        </div>
                                                        <div class="col-sm-1" style="padding: 0; text-align: center;">
                                                            /
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0">
                                                            <input type="text" class="form-control" name="retinoscopy_INPUT_13">
                                                        </div>
                                                    </div><br>
                                                    <!--Trial Rx-->
                                                    <div class="row">
                                                        <div class="col-sm-2" style="padding: 0;text-align: center;">
                                                            Trial Rx
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0">
                                                            <input type="number" step="0.25" class="form-control" name="retinoscopy_INPUT_14" id="txtTriOD_1">
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0">
                                                            <input type="number" step="0.25" class="form-control" name="retinoscopy_INPUT_15" id="txtTriOD_2">
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0">
                                                            <input type="number" step="1" min="0" class="form-control" name="retinoscopy_INPUT_16" id="txtTriOD_3">
                                                        </div>
                                                        <div class="col-sm-1" style="padding: 0; text-align: center;">
                                                            /
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0">
                                                            <input type="text" class="form-control" name="retinoscopy_INPUT_17">
                                                        </div>
                                                    </div><br>
                                                </div>
                                                <!--OS-->
                                                <div class="col-md-6">
                                                    <!--Title-->
                                                    <div class="row">
                                                        <div class="col-sm-10" style="text-align: center; background-color: #dddddd;">
                                                            <strong>OS</strong>
                                                        </div>
                                                    </div><br>
                                                    <!--Keratometry-->
                                                    <div class="row">
                                                        <div class="col-sm-2" style="padding-left: 0px;">
                                                            <input type="text" class="form-control" name="retinoscopy_INPUT_18">
                                                        </div>
                                                        <div class="col-sm-1" style="padding: 0;text-align: center;">
                                                            at
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0px;">
                                                            <input type="text" class="form-control" name="retinoscopy_INPUT_19">
                                                        </div>
                                                        <div class="col-sm-1" style="padding: 0; text-align: center;">
                                                            /
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0px;">
                                                            <input type="text" class="form-control" name="retinoscopy_INPUT_20">
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0px;">
                                                            <input type="text" class="form-control" name="retinoscopy_INPUT_21">
                                                        </div>
                                                    </div><br>
                                                    <!--Dom OS-->
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="retinoscopy_INPUT_22">DOM OS
                                                            </label>
                                                        </div>
                                                    </div><br>
                                                    <!--Retinoscopy-->
                                                    <div class="row">
                                                        <div class="col-sm-2" style="padding-left: 0">
                                                            <input type="number" step="0.25" class="form-control" name="retinoscopy_INPUT_23" id="txtRetOS_1">
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0">
                                                            <input type="number" step="0.25" class="form-control" name="retinoscopy_INPUT_24" id="txtRetOS_2">
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0">
                                                            <input type="number" step="1" min="0" class="form-control" name="retinoscopy_INPUT_25" id="txtRetOS_3">
                                                        </div>
                                                        <div class="col-sm-1" style="padding: 0; text-align: center;">
                                                            /
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0">
                                                            <input type="text" class="form-control" name="retinoscopy_INPUT_26">
                                                        </div>
                                                    </div><br>
                                                    <!--Subjective Rx-->
                                                    <div class="row">
                                                        <div class="col-sm-2" style="padding-left: 0">
                                                            <input type="number" step="0.25" class="form-control" name="retinoscopy_INPUT_27" id="txtSubOS_1">
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0">
                                                            <input type="number" step="0.25" class="form-control" name="retinoscopy_INPUT_28" id="txtSubOS_2">
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0">
                                                            <input type="number" step="1" min="0" class="form-control" name="retinoscopy_INPUT_29" id="txtSubOS_3">
                                                        </div>
                                                        <div class="col-sm-1" style="padding: 0; text-align: center;">
                                                            /
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0">
                                                            <input type="text" class="form-control" name="retinoscopy_INPUT_30">
                                                        </div>
                                                    </div><br>
                                                    <!--Trial Rx-->
                                                    <div class="row">
                                                        <div class="col-sm-2" style="padding-left: 0">
                                                            <input type="number" step="0.25" class="form-control" name="retinoscopy_INPUT_31" id="txtTriOS_1">
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0">
                                                            <input type="number" step="0.25" class="form-control" name="retinoscopy_INPUT_32" id="txtTriOS_2">
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0">
                                                            <input type="number" step="1" min="0" class="form-control" name="retinoscopy_INPUT_33" id="txtTriOS_3">
                                                        </div>
                                                        <div class="col-sm-1" style="padding: 0; text-align: center;">
                                                            /
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0">
                                                            <input type="text" class="form-control" name="retinoscopy_INPUT_34">
                                                        </div>
                                                    </div><br>
                                                </div>
                                            </div><br>
                                            <!--Rx Notes-->
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <label>Rx Notes</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="text" id="txtRxNotes" class="form-control" name="retinoscopy_INPUT_35">
                                                </div>
                                            </div><br>
                                            <!--pnl Adds-->
                                            <div class="panel panel-default">
                                                <div class="panel-heading"><label>Adds</label></div>
                                                <div class="panel-body">
                                                    <!--Row 1-->
                                                    <div class="row">
                                                        <!--Tentative,Refined Adds-->
                                                        <div class="col-md-6">
                                                            <!--Tentative Add-->
                                                            <div class="row">
                                                                <div class="col-md-3">Tentative Add</div>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control mediumText" name="retinoscopy_INPUT_36">
                                                                </div>
                                                                <div class="col-md-1" style="padding: 0;text-align: center;">
                                                                    at
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control mediumText" name="retinoscopy_INPUT_37">
                                                                </div>
                                                            </div><br>
                                                            <!--Refined Add-->
                                                            <div class="row">
                                                                <div class="col-md-3">Refined Add</div>
                                                                <div class="col-md-4">
                                                                    <input type="number" min="0" step="0.25" class="form-control mediumText" name="retinoscopy_INPUT_38" id="txtAdd">
                                                                </div>
                                                                <div class="col-md-1" style="padding: 0;text-align: center;">
                                                                    at
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control mediumText" name="retinoscopy_INPUT_39">
                                                                </div>
                                                            </div><br>
                                                        </div>
                                                        <!--BPA/BMA, OD VA, OS VA-->
                                                        <div class="col-lg-6">
                                                            <!--BPA/BMA-->
                                                            <div class="row">
                                                                <div class="col-md-3">BPA/BMA</div>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control largeText" name="retinoscopy_INPUT_40">
                                                                </div>
                                                            </div><br>
                                                            <!--OD VA, OS VA-->
                                                            <div class="row">
                                                                <div class="col-md-1">
                                                                    OD
                                                                </div>
                                                                <div class="col-md-2" style="padding: 0;">
                                                                    <input type="number" step="0.25" min="0" class="form-control" name="retinoscopy_INPUT_41" id="txtAddOD">
                                                                </div>
                                                                <div class="col-md-1">
                                                                    VA
                                                                </div>
                                                                <div class="col-md-2" style="padding: 0;">
                                                                    <input type="text" class="form-control" name="retinoscopy_INPUT_42">
                                                                </div>
                                                                <div class="col-md-1">
                                                                    OS
                                                                </div>
                                                                <div class="col-md-2" style="padding: 0;">
                                                                    <input type="number" step="0.25" min="0" class="form-control" name="retinoscopy_INPUT_43" id="txtAddOS">
                                                                </div>
                                                                <div class="col-md-1">
                                                                    VA
                                                                </div>
                                                                <div class="col-md-2" style="padding: 0;">
                                                                    <input type="text" class="form-control" name="retinoscopy_INPUT_44">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><br>
                                            <!--row 2 Genrate rx Button-->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button type="button" class="btn btn-info btn-sm" id="btnRx" onclick="generateRx()" name="retinoscopy_INPUT_45">Generate Rx</button>
                                                </div>
                                            </div><br>
                                        </div>
                                    </div>
                                    <!--Notes-->
                                    <div class="panel panel-default">
                                        <div class="panel-heading"><label>Notes...</label></div>
                                        <div class="panel-body">
                                            <textarea name="txtRetinosopyNote" class="form-control">
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                                <!--External tab3-->
                                <div class="tab-pane fade" id="tab3">
                                    <h4>External</h4>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="external_INPUT_0"> PERRALA
                                            </label>
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-2">
                                            General
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="external_INPUT_1">
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="external_INPUT_2">
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-2">
                                            Lids/Margine
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="external_INPUT_3">
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="external_INPUT_4">
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-2">
                                            Conjuctiva
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="external_INPUT_5">
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="external_INPUT_6">
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-2">
                                            Limbus/Tears
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="external_INPUT_7">
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="external_INPUT_8">
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-2">
                                            Cornea
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="external_INPUT_9">
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="external_INPUT_10">
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-2">
                                            A-C
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="external_INPUT_11">
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="external_INPUT_12">
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-2">
                                            Iris
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="external_INPUT_13">
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="external_INPUT_14">
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-2">
                                            Pupil Size
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="external_INPUT_15">
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="external_INPUT_16">
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-2">
                                            Direct Reflex
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="external_INPUT_17">
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="external_INPUT_18">
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-2">
                                            Consensual
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="external_INPUT_19">
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="external_INPUT_20">
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-2">
                                            Near
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="external_INPUT_21">
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="external_INPUT_22">
                                        </div>
                                    </div><br>
                                    <!--Notes-->
                                    <div class="panel panel-default">
                                        <div class="panel-heading"><label>Notes...</label></div>
                                        <div class="panel-body">
                                            <textarea name="txtExternalNote" class="form-control">
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                                <!--Internal tab4-->
                                <div class="tab-pane fade" id="tab4">
                                    <h4>Internal</h4>
                                    <!--Row 1 Col1,col2,col3-->
                                    <div class="row">
                                        <!--DIR, MIO, BIO, Volk-->
                                        <div class="col-md-1 " style="background-color: #9d9d9d; padding-left: 25px; padding-right: 25px; padding-bottom: 15px; border-radius: 10px;">
                                            <!--DIR-->
                                            <div class="row">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="internal_INPUT_0"> DIR
                                                    </label>
                                                </div>
                                            </div>
                                            <!--MIO-->
                                            <div class="row">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="internal_INPUT_1"> MIO
                                                    </label>
                                                </div>
                                            </div>
                                            <!--BIO-->
                                            <div class="row">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="internal_INPUT_2"> BIO
                                                    </label>
                                                </div>
                                            </div>
                                            <!--BIO Text-->
                                            <div class="row">
                                                <input type="text" class="form-control" name="internal_INPUT_3">
                                            </div>
                                            <!--Volk-->
                                            <div class="row">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="internal_INPUT_4"> Volk
                                                    </label>
                                                </div>
                                            </div>
                                            <!--Volk Text-->
                                            <div class="row">
                                                <input type="text" class="form-control" name="internal_INPUT_5">
                                            </div>
                                        </div>
                                        <!--Col 1 left-->
                                        <div class="col-md-5 col-md-offset-1">
                                            <div class="row">
                                                <div class="col-md-2" style="padding: 0px;">
                                                    <label>lens</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" name="internal_INPUT_6">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" name="internal_INPUT_7">

                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-2" style="padding: 0px;">
                                                    <label>Vitreous</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" name="internal_INPUT_8">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" name="internal_INPUT_9">

                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-2" style="padding: 0px;">
                                                    <label>Depth/Cup</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" name="internal_INPUT_10">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" name="internal_INPUT_11">

                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-2" style="padding: 0px;">
                                                    <label>Margin</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" name="internal_INPUT_12">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" name="internal_INPUT_13">

                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-2" style="padding: 0px;">
                                                    <label>Crescents</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" name="internal_INPUT_14">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" name="internal_INPUT_15">

                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-2" style="padding: 0px;">
                                                    <label>A/V Crossing</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" name="internal_INPUT_16">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" name="internal_INPUT_17">

                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-2" style="padding: 0px;">
                                                    <label>Calibre-Ratio</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" name="internal_INPUT_18">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" name="internal_INPUT_19">

                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-2" style="padding: 0px;">
                                                    <label>Gen/App/Fun</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" name="internal_INPUT_20">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" name="internal_INPUT_21">

                                                </div>
                                            </div><br>
                                        </div>
                                        <!--Col 2 right-->
                                        <div class="col-md-5">
                                            <div class="row">
                                                <div class="col-md-2" style="padding: 0px;">
                                                    <label>ONH Cup</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" name="internal_INPUT_22">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" name="internal_INPUT_23">

                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-2" style="padding: 0px;">
                                                    <label>Disc Color</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" name="internal_INPUT_24">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" name="internal_INPUT_25">

                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-2" style="padding: 0px;">
                                                    <label>Lamina Crib.</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" name="internal_INPUT_26">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" name="internal_INPUT_27">

                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-2" style="padding: 0px;">
                                                    <label>Area/Cup</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" name="internal_INPUT_28">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" name="internal_INPUT_29">

                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-2" style="padding: 0px;">
                                                    <label>Macula</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" name="internal_INPUT_30">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" name="internal_INPUT_31">

                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-2" style="padding: 0px;">
                                                    <label>Course</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" name="internal_INPUT_32">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" name="internal_INPUT_33">

                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-2" style="padding: 0px;">
                                                    <label>Periphery</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" name="internal_INPUT_34">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" name="internal_INPUT_35">

                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-12" style="padding: 0px;">
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" name="internal_INPUT_36">
                                                        Vessels appear within normal limits
                                                    </label>
                                                </div>
                                            </div><br>
                                        </div>
                                    </div><br>
                                    <!--Row 2 gtts and now-->
                                    <div class="row form-group-sm">
                                        <div class="col-md-1">
                                            <label>gtts</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input id="txtGtts" type="text" onfocus="setCurentTime('txtInternalNow');" data-toggle="modal" data-target="#gttsList" class="form-control" name="internal_INPUT_37">
                                        </div>

                                        <!--gtts list module-->
                                        <div class="modal fade" id="gttsList" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h4 class="modal-title" id="myModalLabel">Gtts manager</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>Select from the list</label>
                                                            <select id="selectGtts" multiple="" class="form-control" name="internal_SELECT_0">
                                                                <option value="Example gtts 1">Example gtts 1</option><option value="Example gtts 2">Example gtts 2</option><option value="Gtts list item">Gtts list item</option>                                                            </select><br>
                                                            <button type="button" id="btnSelectGtts" onclick="fillTxtGtts('Select')" data-dismiss="modal" class="btn btn-success form-control">Select</button><br>
                                                            <label>Add new to list</label>
                                                            <input type="text" id="txtNewGtts" class="form-control" name="internal_INPUT_38"><br>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary" onclick="fillTxtGtts('Add')" data-dismiss="modal">Add new to list</button>
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!--Time Now-->
                                        <div class="col-md-2">
                                            <input id="txtInternalNow" type="time" class="form-control mediumText" onfocus="setCurentTime('txtInternalNow')" name="internal_INPUT_39">
                                        </div>
                                    </div><br>
                                    <!--ROw 3 chk-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="internal_INPUT_40">
                                                Patient counselled about the effect of Mydriatic
                                            </label>
                                        </div>
                                    </div>
                                    <!--Notes-->
                                    <div class="panel panel-default">
                                        <div class="panel-heading"><label>Notes...</label></div>
                                        <div class="panel-body">
                                            <textarea name="txtInternalNote" class="form-control">
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                                <!--Tonometry tab5-->
                                <div class="tab-pane fade" id="tab5">
                                    <h4>Tonometry/Fields</h4>
                                    <!--Row1 warning,tonometry-->
                                    <div class="row">
                                        <!--col left-->
                                        <div class="col-md-6">
                                            <!--Warning, Time-->
                                            <div class="row">
                                                <div class="col-md-3 checkbox">
                                                    <label>
                                                        <input type="checkbox" value="warning" name="tonometry_INPUT_0">
                                                        Warning Given
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    Time
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="time" class="form-control mediumText" id="txtTonometryNow" onfocus="setCurentTime('txtTonometryNow')" name="tonometry_INPUT_1">
                                                </div>
                                            </div><br>
                                            <!--Tonometry OD-->
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>Tonometry</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>OD</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control mediumText" name="tonometry_INPUT_2">
                                                </div>
                                            </div><br>
                                            <!--OS-->
                                            <div class="row">
                                                <div class="col-md-3 col-md-offset-3">
                                                    <label>OS</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control mediumText" name="tonometry_INPUT_3">
                                                </div>
                                            </div><br>
                                            <!--Type-->
                                            <div class="row">
                                                <div class="col-md-3 col-md-offset-3">
                                                    <label>Type</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <select class="form-control mediumText" name="tonometry_SELECT_0">
                                                        <option>Option 1</option>
                                                        <option>Option 2</option>
                                                        <option>Option 3</option>
                                                    </select>
                                                </div>
                                            </div><br>
                                        </div>
                                        <!--Col right-->
                                        <div class="col-md-6">
                                            <!--Alcaine gtts-->
                                            <div class="row">
                                                <div class="col-md-12 checkbox">
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" value="alcaineGtts" name="tonometry_INPUT_4">
                                                        Alcaine dtts
                                                    </label>
                                                </div>
                                            </div><br>
                                            <!--Time-->
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>Time</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="time" class="form-control mediumText" name="tonometry_INPUT_5">
                                                </div>
                                            </div><br>
                                            <!--Pachymetry-->
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>Pachymetry</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control largeText" name="tonometry_INPUT_6">
                                                </div>
                                            </div><br>
                                            <!--Topography-->
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>Topography</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control largeText" name="tonometry_INPUT_7">
                                                </div>
                                            </div>
                                        </div>
                                    </div><br>
                                    <!--row Visual Fields-->
                                    <div class="row">
                                        <!--COl bottam Visual Fields-->
                                        <div class="col-md-3">
                                            <label>Visual Fields</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="tonometry_INPUT_8">
                                        </div>
                                    </div><br>
                                    <!--Confrontation field-->
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label>Confrontation fields</label>
                                        </div>
                                        <div class="col-md-9 checkbox">
                                            <input type="checkbox" value="normalConfrontation" name="tonometry_INPUT_9">
                                            <label class="checkbox-inline">within normal</label>
                                        </div>
                                    </div>
                                    <!--row-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!--OD-->
                                            <div class="row">
                                                <!--Nasal-->
                                                <div class="col-md-1">
                                                    <label>OD Nasal</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" class="form-control mediumText" name="tonometry_INPUT_10">
                                                </div>
                                                <!--Temp-->
                                                <div class="col-md-1">
                                                    <label>Temp</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" class="form-control mediumText" name="tonometry_INPUT_11">
                                                </div>
                                                <!--Total-->
                                                <div class="col-md-1">
                                                    <label>Total</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" class="form-control mediumText" name="tonometry_INPUT_12">
                                                </div>
                                            </div><br>
                                            <!--OS-->
                                            <div class="row">
                                                <!--Nasal-->
                                                <div class="col-md-1">
                                                    <label>OS Nasal</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" class="form-control mediumText" name="tonometry_INPUT_13">
                                                </div>
                                                <!--Temp-->
                                                <div class="col-md-1">
                                                    <label>Temp</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" class="form-control mediumText" name="tonometry_INPUT_14">
                                                </div>
                                                <!--Total-->
                                                <div class="col-md-1">
                                                    <label>Total</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" class="form-control mediumText" name="tonometry_INPUT_15">
                                                </div>
                                            </div><br>
                                            <!--OU, CSF-->
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <label>OU Total</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" class="form-control mediumText" name="tonometry_INPUT_16">
                                                </div>
                                                <div class="col-md-1 col-md-offset-4">
                                                    <label>CSF</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" class="form-control mediumText" name="tonometry_INPUT_17">
                                                </div>
                                            </div><br>
                                            <!--Amsler-->
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <label>Amsler Grid</label>
                                                </div>
                                                <!--Input OD-->
                                                <div class="col-md-1">
                                                    <label>OD</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" class="form-control" name="tonometry_INPUT_18">
                                                </div>

                                                <!--Input OS-->
                                                <div class="col-md-1 col-md-offset-2">
                                                    <label>OS</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" class="form-control" name="tonometry_INPUT_19">
                                                </div>

                                            </div>
                                        </div>
                                    </div><br>
                                    <!--Notes-->
                                    <div class="panel panel-default">
                                        <div class="panel-heading"><label>Notes...</label></div>
                                        <div class="panel-body">
                                            <textarea name="txtTonometryNote" class="form-control">
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                                <!--Diagnosis, Summary tab6-->
                                <div class="tab-pane fade" id="tab6">
                                    <h4>Summary, Diagnosis, Treatment, Referral.</h4>
                                    <!--prescription from Retinoscopy-->
                                    <!--Final Rx-->
                                    <div class="panel panel-success">
                                        <div class="panel-heading"><label>Final Rx</label></div>
                                        <div class="panel-body">
                                            <div class="row form-group-sm">
                                                <div class="col-md-12">
                                                    <!--titles-->
                                                    <div class="row">
                                                        <div class="col-md-1 col-md-offset-1"><label>SPHERE</label></div>
                                                        <div class="col-md-1"><label>CYLINDER</label></div>
                                                        <div class="col-md-1"><label>AXIS</label></div>
                                                        <div class="col-md-1"><label>ADD</label></div>
                                                        <div class="col-md-1"><label>IN</label></div>
                                                        <div class="col-md-1"><label>OUT</label></div>
                                                        <div class="col-md-1"><label>UP</label></div>
                                                        <div class="col-md-1"><label>DOWN</label></div>
                                                        <div class="col-md-1"><label>DIST</label></div>
                                                        <div class="col-md-1"><label>NEAR</label></div>
                                                    </div>
                                                    <!--OD-->
                                                    <div class="row">
                                                        <div class="col-md-1"><label>OD</label></div>
                                                        <div class="col-md-1"><input type="number" step="0.25" class="form-control" name="diagnosis_INPUT_0" id="txtRxOD_1"></div>
                                                        <div class="col-md-1"><input type="number" step="0.25" class="form-control" name="diagnosis_INPUT_1" id="txtRxOD_2"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control" name="diagnosis_INPUT_2" id="txtRxOD_3"></div>
                                                        <div class="col-md-1"><input type="number" class="form-control" name="diagnosis_INPUT_3" id="txtRxODAdd"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control" name="diagnosis_INPUT_4"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control" name="diagnosis_INPUT_5"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control" name="diagnosis_INPUT_6"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control" name="diagnosis_INPUT_7"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control" name="diagnosis_INPUT_8"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control" name="diagnosis_INPUT_9"></div>
                                                    </div><br>
                                                    <!--OS-->
                                                    <div class="row">
                                                        <div class="col-md-1"><label>OS</label></div>
                                                        <div class="col-md-1"><input type="number" step="0.25" class="form-control" name="diagnosis_INPUT_10" id="txtRxOS_1"></div>
                                                        <div class="col-md-1"><input type="number" step="0.25" class="form-control" name="diagnosis_INPUT_11" id="txtRxOS_2"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control" name="diagnosis_INPUT_12" id="txtRxOS_3"></div>
                                                        <div class="col-md-1"><input type="number" class="form-control" name="diagnosis_INPUT_13" id="txtRxOSAdd"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control" name="diagnosis_INPUT_14"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control" name="diagnosis_INPUT_15"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control" name="diagnosis_INPUT_16"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control" name="diagnosis_INPUT_17"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control" name="diagnosis_INPUT_18"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control" name="diagnosis_INPUT_19"></div>
                                                    </div><br>
                                                    <!--Note rx-->
                                                    <!--Note rx-->
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label>Notes</label>
                                                            <input type="text" id="txtRxNotesFinal" class="form-control" name="diagnosis_INPUT_20">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Special RX-->
                                    <div class="panel panel-success">
                                        <div class="panel-heading"><label>Special Rx</label></div>
                                        <div class="panel-body">
                                            <div class="row form-group-sm">
                                                <div class="col-md-12">
                                                    <!--titles-->
                                                    <div class="row">
                                                        <div class="col-md-1 col-md-offset-1"><label>SPHERE</label></div>
                                                        <div class="col-md-1"><label>CYLINDER</label></div>
                                                        <div class="col-md-1"><label>AXIS</label></div>
                                                        <div class="col-md-1"><label>ADD</label></div>
                                                        <div class="col-md-1"><label>IN</label></div>
                                                        <div class="col-md-1"><label>OUT</label></div>
                                                        <div class="col-md-1"><label>UP</label></div>
                                                        <div class="col-md-1"><label>DOWN</label></div>
                                                        <div class="col-md-1"><label>DIST</label></div>
                                                        <div class="col-md-1"><label>NEAR</label></div>
                                                    </div>
                                                    <!--OD-->
                                                    <div class="row">
                                                        <div class="col-md-1"><label>OD</label></div>
                                                        <div class="col-md-1"><input type="number" step="0.25" class="form-control" name="diagnosis_INPUT_21"></div>
                                                        <div class="col-md-1"><input type="number" step="0.25" class="form-control" name="diagnosis_INPUT_22"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control" name="diagnosis_INPUT_23"></div>
                                                        <div class="col-md-1"><input type="number" class="form-control" name="diagnosis_INPUT_24"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control" name="diagnosis_INPUT_25"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control" name="diagnosis_INPUT_26"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control" name="diagnosis_INPUT_27"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control" name="diagnosis_INPUT_28"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control" name="diagnosis_INPUT_29"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control" name="diagnosis_INPUT_30"></div>
                                                    </div><br>
                                                    <!--OS-->
                                                    <div class="row">
                                                        <div class="col-md-1"><label>OS</label></div>
                                                        <div class="col-md-1"><input type="number" step="0.25" class="form-control" name="diagnosis_INPUT_31"></div>
                                                        <div class="col-md-1"><input type="number" step="0.25" class="form-control" name="diagnosis_INPUT_32"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control" name="diagnosis_INPUT_33"></div>
                                                        <div class="col-md-1"><input type="number" class="form-control" name="diagnosis_INPUT_34"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control" name="diagnosis_INPUT_35"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control" name="diagnosis_INPUT_36"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control" name="diagnosis_INPUT_37"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control" name="diagnosis_INPUT_38"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control" name="diagnosis_INPUT_39"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control" name="diagnosis_INPUT_40"></div>
                                                    </div><br>
                                                    <!--Note rx-->
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label>Notes</label>
                                                            <input type="text" class="form-control" name="diagnosis_INPUT_41">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Notes and result letters-->
                                    <div class="row">
                                        <!--Notes list-->
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>Doctors Note</label>
                                                    <textarea id="txt1" name="txtDiagnosisNote" class="form-control" rows="3">
                                                    </textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>Findings</label>
                                                    <textarea class="form-control" name="txtDiagnosisFindings" rows="3" >
                                                    </textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>Recommendation</label>
                                                    <textarea class="form-control" name="txtDiagnosisRecommendation" rows="3">
                                                    </textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Result letters check-->
                                        <div class="col-md-3">
                                            <div class="row">
                                                <div class="col-md-12"><strong>Statistics</strong></div>

                                            </div>

                                            <div class="row">
                                                <div class="col-md-12 checkbox">
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" value="Normal" name="diagnosis_INPUT_42">
                                                        Normal
                                                    </label>
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-12 checkbox">
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" value="Followup" name="diagnosis_INPUT_43">
                                                        Follow up
                                                    </label>
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-12">

                                                    Reason for follow up

                                                    <input type="text" class="form-control" name="diagnosis_INPUT_44">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 checkbox">
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" value="prescription" name="diagnosis_INPUT_45">
                                                        Prescription given
                                                    </label>
                                                </div>
                                            </div><br>
                                        </div>
                                        <!--Print buttions-->
                                        <div class="col-md-3">
                                            <div class="row">
                                                <div class="col-md-12"><strong>Results letter template</strong></div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <button class="btn btn-primary" type="button"><i class="fa fa-print fa-fw"></i> Normal</button>
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <button class="btn btn-primary" type="button"><i class="fa fa-print fa-fw"></i> Follow up</button>
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <button class="btn btn-primary" type="button"><i class="fa fa-print fa-fw"></i> Prescription</button>
                                                </div>
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div><!--/.Panel Body -->
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Location Name:</label>
                                    <i><?php echo $patientInfo['name']?></i>
                                </div>
                                <div class="col-md-2">
                                    <label>Patient ID:</label>
                                    <i><?php echo $_SESSION['patientID_eyeExam']?></i>
                                </div>
                                <div class="col-md-2">
                                    <label>Exam ID:</label>
                                    <i><?php echo $_SESSION['examID_eyeExam']?></i>
                                </div>
                                <div class="col-md-4">
                                    <label>Doctor ID</label>
                                    <i><?php echo $_SESSION['loginUserId']?></i>
                                </div>
                            </div>
                        </div>
                    </div><!--/.Panel-->
                </div><!--Col-lg-12-->
            </div><!--/.row-->
        </div><!--#Wrapper-->


        <!-- jQuery -->
        <script src="../../Local/Resources/bower_components/jquery/dist/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../../Local/Resources/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../../Local/Resources/bower_components/metisMenu/dist/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="../../Local/Resources/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
        <script src="../../Local/Resources/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../../Local/dist/js/sb-admin-2.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->



    </div></form></body>

<script>

    /*  //replace text area with ckedit
     CKEDITOR.replace( 'txtPatientInfoNotes' );*/

    //fill txtGtts
    function fillTxtGtts(option){
        var drpSelect = document.getElementById('selectGtts');
        var text = document.getElementById('txtGtts');
        var newGttsText = document.getElementById('txtNewGtts');
        if(option == 'Select'){
            text.value = drpSelect.value;
        }
        else if(option == 'Add'){
            text.value = newGttsText.value
        }
    }
    //generate rx click event
    function generateRx(){
        //txt Ret OD
        var txtRetOD_1 = document.getElementById('txtRetOD_1');
        var txtRetOD_2 = document.getElementById('txtRetOD_2');
        var txtRetOD_3 = document.getElementById('txtRetOD_3');
        //txt Ret OS
        var txtRetOS_1 = document.getElementById('txtRetOS_1');
        var txtRetOS_2 = document.getElementById('txtRetOS_2');
        var txtRetOS_3 = document.getElementById('txtRetOS_3');
        //txt Sub OD
        var txtSubOD_1 = document.getElementById('txtSubOD_1');
        var txtSubOD_2 = document.getElementById('txtSubOD_2');
        var txtSubOD_3 = document.getElementById('txtSubOD_3');
        //txt Sub OS
        var txtSubOS_1 = document.getElementById('txtSubOS_1');
        var txtSubOS_2 = document.getElementById('txtSubOS_2');
        var txtSubOS_3 = document.getElementById('txtSubOS_3');
        //txt Tri OD
        var txtTriOD_1 = document.getElementById('txtTriOD_1');
        var txtTriOD_2 = document.getElementById('txtTriOD_2');
        var txtTriOD_3 = document.getElementById('txtTriOD_3');
        //txt Tri OS
        var txtTriOS_1 = document.getElementById('txtTriOS_1');
        var txtTriOS_2 = document.getElementById('txtTriOS_2');
        var txtTriOS_3 = document.getElementById('txtTriOS_3');
        //Adds
        var txtAdd = document.getElementById('txtAdd');
        var txtAddOD = document.getElementById('txtAddOD');
        var txtAddOS = document.getElementById('txtAddOS');
        //Rx OD
        var txtRxOD_1 = document.getElementById('txtRxOD_1');
        var txtRxOD_2 = document.getElementById('txtRxOD_2');
        var txtRxOD_3 = document.getElementById('txtRxOD_3');
        //Rx OS
        var txtRxOS_1 = document.getElementById('txtRxOS_1');
        var txtRxOS_2 = document.getElementById('txtRxOS_2');
        var txtRxOS_3 = document.getElementById('txtRxOS_3');
        //Rx Add
        var txtRxODAdd = document.getElementById('txtRxODAdd');
        var txtRxOSAdd = document.getElementById('txtRxOSAdd');
        //notes
        var txtRxNotes = document.getElementById('txtRxNotes');
        var txtRxNotesFinal = document.getElementById('txtRxNotesFinal');


        //Set Rx fild
        //check if trial rx is not empty
        if((txtTriOD_1.value != '') && (txtTriOS_1.value != '')){
            //Set OD Values
            txtRxOD_1.value = txtTriOD_1.value;
            txtRxOD_2.value = txtTriOD_2.value;
            txtRxOD_3.value = txtTriOD_3.value;
            //Set OS Values
            txtRxOS_1.value = txtTriOS_1.value;
            txtRxOS_2.value = txtTriOS_2.value;
            txtRxOS_3.value = txtTriOS_3.value;
        }
        //Checke Subjective rx is not empty
        else if((txtSubOD_1.value != '') && (txtSubOD_1.value != '')){
            //Set OD Values
            txtRxOD_1.value = txtSubOD_1.value;
            txtRxOD_2.value = txtSubOD_2.value;
            txtRxOD_3.value = txtSubOD_3.value;
            //Set OS Values
            txtRxOS_1.value = txtSubOS_1.value;
            txtRxOS_2.value = txtSubOS_2.value;
            txtRxOS_3.value = txtSubOS_3.value;
        }
        //Check if Retinoscopy Rx isnot empty
        else if((txtRetOD_1.value != '') && (txtRetOS_1.value != '')){
            //Set OD Values
            txtRxOD_1.value = txtRetOD_1.value;
            txtRxOD_2.value = txtRetOD_2.value;
            txtRxOD_3.value = txtRetOD_3.value;
            //Set OS Values
            txtRxOS_1.value = txtRetOS_1.value;
            txtRxOS_2.value = txtRetOS_2.value;
            txtRxOS_3.value = txtRetOS_3.value;
        }

        //Set Adds
        if((txtAddOD.value != '') && (txtAddOS.value != '')){
            txtRxODAdd.value = txtAddOD.value;
            txtRxOSAdd.value = txtAddOS.value;
        }
        else if(txtAdd.value != ''){
            txtRxODAdd.value = txtRxOSAdd.value = txtAdd.value;
        }
        //Set notes
        txtRxNotes.value = txtRxNotesFinal.value;

    }

    //submit data via ajax
    var saveForm = function(){
        var data = $('#frm').serialize();
        console.log(data);
        $.post('eyeExam.php', data);
    };
    /*Set curent time function*/
    function setCurentTime(txtID){
        var txtNow = document.getElementById(txtID);
        var now = new Date();
        var min = ("0"+ now.getMinutes()).slice(-2);
        var hr = ("0"+ now.getHours()).slice(-2);
        txtNow.value = hr +":"+ min;
    }

    //send data to update every 10s
    setInterval(saveForm, 10000);

</script>
<script>
    /*Generate rx from retinoscopy to Diagnosis and summary displaying prescription*/
//    var btnRx = document.getElementById("btnRx");
//    btnRx.onclick = function(){
//        var pnlRx = document.getElementById("pnlRx");
//            pnlRx.style.display = 'block';
//    };

</script>
<?php

//update
//Update Acuities
    $result = $exam->updateAcuities();
    if($result){
        //Update Retinoscopy
        $result = $exam->updateRetinoscopy();
        if($result){
            //Update External
            $result = $exam->updateExternal();
            if($result){
                //Update Internal
                $result = $exam->updateInternal();
                if($result){
                    //Update Tonometry
                    $result = $exam->updateTonometry();
                    if($result){
                        $result = $exam->updateDiagnosis();
                    }
                }
            }
        }
    }
?>