<?php
/**
 * Created by PhpStorm.
 * User: Dushyant
 * Date: 2016-01-12
 * Time: 9:13 AM
 */
require_once('../../../Local/Classes/Letters.php');
extract($_GET);
$rxLater = new Letters();
//get doctor info to print
$doctorInfo = $rxLater->selectDoctorInfo($DoctorID);
$doctorInfo = mysqli_fetch_array($doctorInfo);
//Get patient details
$patientDetails = $rxLater->selectPatient($PateintID);
$patientDetails = mysqli_fetch_array($patientDetails);
//get exam details for print
$examDetails = $rxLater->selectExam($ExamID);
$examDetails = mysqli_fetch_array($examDetails);
$examLocation = $rxLater->getLocationName($ExamID);
//diagnosis
$rxDetails = $rxLater->selectDiagnosis($ExamID);
$rxDetails = mysqli_fetch_array($rxDetails);
?>
<html>
<head>
    <title>Prescription</title>
    <script src="../../../Local/Resources/ckeditor/ckeditor.js"></script>
</head>
<body>
<form id="frm" method="get">
    <div id="normal" style="height: 80%">
        <p><strong><?php echo date('m/d/Y',strtotime($examDetails['time']))?></strong></p>

        <p>Dear Parent/Guardian of <?php echo "$patientDetails[first_name] $patientDetails[last_name],";?> </p>

        <p><?php echo "$patientDetails[first_name]";?> had a full eye exam on <?php echo date('m/d/Y',strtotime($examDetails['time'])) ." at $examLocation[name]";?>.</p>

        <p><strong>At this time it was found that <?php echo "$patientDetails[first_name]";?> has:</strong></p>

        <p><strong><?php echo "$rxDetails[findings]";?></strong></p>

        <p><strong>Recommendation:</strong></p>

        <p><strong><?php echo "$rxDetails[recommendation]";?></strong></p>

        <p>Another eye exam is required in 1 year or sooner if needed. &nbsp;</p>

        <p>Attached you will find a prescription for glasses and some information regarding the relevant conditions.</p>

        <p>Please feel free to contact me if you have any questions or concerns.</p>

        <p>Sincerely,</p>

        <p><p><br />
            Dr. <?php echo"$doctorInfo[first_name] $doctorInfo[last_name]";?><br />
            Optometrist in collaboration with the Ottawa Carleton District School Board<br />
            <?php
            echo "$doctorInfo[address]<br/>";
            echo "$doctorInfo[city], $doctorInfo[province], $doctorInfo[postal_code]<br/>";
            echo "$doctorInfo[work_phone]";?>
        </p>
        </p>
    </div>





</form>
</body>
<script>
    CKEDITOR.replace('normal');
    CKEDITOR.editorConfig = function( config ) {
        config.language = 'es';
        config.uiColor = '#F7B42C';
        config.height = 500;
        config.toolbarCanCollapse = true;
    };
</script>
</html>
