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
    $result['basic_info'] = $patient->updatePatientInfoById($PatientId,$txtSerLocation,$txtSerFirstName,$txtSerLastName,$txtSerOhipNumber,$txtSerOhipVirsion,$txtSerBirthDate,$rdbSerGender,$txtSerAddress,$txtSerCity,$drpSerProvince,$txtSerPostalCode);
    //change relational info
    $result['relations'] = $patient->updateSeniorRelationInfoByPatientId($PatientId,$txtSerRoom,$txtSerPoaFirstName,$txtSerPoaLastName,$txtSerPoaContact,$txtSerPoaOptionalContact,$txtSerPoaEmail,$txtSerPoaRelation);
}
//check for patient id
if(isset($PatientId)){
    //get patient info by id
    $patientInfo = $patient->getPatientById($PatientId);
    $patientInfo = mysqli_fetch_assoc($patientInfo);
    //get relation info
    $seniorRelations = $patient->getSeniorRelationsByPatientId($patientInfo['patient_id']);
    $seniorRelations = mysqli_fetch_assoc($seniorRelations);

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
            <input type="text" name="type" value="Senior" style="color: black; display: none;">Senior
        </div>
        <div class="panel panel-body">
            <!--Set location-->
            <div class="row">
                <!--Senior locations-->
                <div class="col-md-12" id="txtSenior">
                    Register new patient at <input type="text" id ="txtSerLocation"  name="txtSerLocation" value="<?php echo $patientInfo['name'];?>" >
                </div>
            </div>
            <!--Senior Info Pnl-->
            <div id="pnlSeniorInfo"  class="panel-body">
                <!--Basic Info Senior-->
                <div class="panel panel-info">
                    <div class="panel-heading"><label>Senior's Information</label></div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-2"><label>First Name</label></div>
                            <div class="col-md-4">
                                <input type="text" name="txtSerFirstName" value="<?php echo $patientInfo['first_name'];?>">
                            </div>
                            <div class="col-md-2"><label>Last Name</label></div>
                            <div class="col-md-4">
                                <input type="text" name="txtSerLastName" value="<?php echo $patientInfo['last_name'];?>">
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-2"><label>OHIP Number</label></div>
                            <div class="col-md-4">
                                <input type="text" maxlength="10" name="txtSerOhipNumber" value="<?php echo $patientInfo['OHIP_number'];?>">
                            </div>
                            <div class="col-md-2"><label>Version Code</label></div>
                            <div class="col-md-4">
                                <input type="text" maxlength="2" name="txtSerOhipVirsion" size="3" value="<?php echo $patientInfo['OHIP_virsion'];?>">
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-2"><label>Birth Date</label></div>
                            <div class="col-md-4">
                                <input type="text" class="txtBirthDate" name="txtSerBirthDate" value="<?php echo $patientInfo['birth_date'];?>" >
                            </div>
                            <div class="col-md-2"><label>Gender</label></div>
                            <div class="col-md-4">
                                <lable class="radio-inline">
                                    <input type="radio" name="rdbSerGender" value="Male" <?php if($patientInfo['gender']=='Male'){echo 'checked';}?>>Male
                                </lable>
                                <lable class="radio-inline">
                                    <input type="radio" name="rdbSerGender" value="Female"  <?php if($patientInfo['gender']=='Female'){echo 'checked';}?>>Female
                                </lable>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4"><label>Address</label></div>
                                    <div class="col-md-8">
                                        <input type="text" name="txtSerAddress" value="<?php echo $patientInfo['address'];?>" >
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-4"><label>City</label></div>
                                    <div class="col-md-8">
                                        <input type="text" name="txtSerCity" value="<?php echo $patientInfo['city'];?>" >
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-4"><label>Province</label></div>
                                    <div class="col-md-8">
                                        <select style="width: 70px;" name="drpSerProvince">
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
                                        <input type="text" maxlength="7" size="7" name="txtSerPostalCode" value="<?php echo $patientInfo['postal_code'];?>" >
                                    </div>
                                </div><br>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4"><label>Room/Appartment</label></div>
                                    <div class="col-md-8">
                                        <input type="text" name="txtSerRoom" value="<?php echo $studentRelation['room'];?>">
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
        </div>

    </div>
</div>
