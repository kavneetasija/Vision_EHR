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
//get exam details for print
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
    <div id="txtPrescription" style="height: 80%">

    <div style="text-align: center">
       <h1><?php
            echo "$doctorInfo[address]<br/>";
            echo "$doctorInfo[city], $doctorInfo[province], $doctorInfo[postal_code]<br/>";
            ?>
       </h1>
        <h2>
            <?php
            echo "$doctorInfo[work_phone]";?>
        </h2>
    </div>

    <p style="text-align:center"><br />
        <strong>Spectacle Lances Prescription<br />
            Printed&nbsp;</strong><strong>on:</strong><strong> <?php echo date('m/d/Y');?><br />
            Date of RX: <?php echo date('m/d/Y');?></strong>
    </p>
    <div style="display: block;width: inherit; align-content: center;">
        <p style="text-align: center">
            <strong><?php echo "$doctorInfo[first_name] $doctorInfo[last_name]";?></strong><br />
            Ottawa<br />
        </p>

        <table align="center"  cellpadding="1" cellspacing="1" style="width: auto;">
            <thead>
            <tr>
                <th scope="col">&nbsp;</th>
                <th scope="col">Sphere</th>
                <th scope="col">Cylinder</th>
                <th scope="col">Axis</th>
                <th scope="col">Add</th>
                <th scope="col">Prism</th>
                <th scope="col">In</th>
                <th scope="col">Out</th>
                <th scope="col">Up</th>
                <th scope="col">Down</th>
                <th scope="col">PD</th>
                <th scope="col">Dist</th>
                <th scope="col">Near</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><strong>OD</strong></td>
                <td><?php echo "$rxDetails[diagnosis_INPUT_0]"; ?></td>
                <td><?php echo "$rxDetails[diagnosis_INPUT_1]"; ?></td>
                <td><?php echo "$rxDetails[diagnosis_INPUT_2]"; ?></td>
                <td><?php echo "$rxDetails[diagnosis_INPUT_3]"; ?></td>
                <td><?php //todo not in exam ?></td>
                <td><?php echo "$rxDetails[diagnosis_INPUT_4]"; ?></td>
                <td><?php echo "$rxDetails[diagnosis_INPUT_5]"; ?></td>
                <td><?php echo "$rxDetails[diagnosis_INPUT_6]"; ?></td>
                <td><?php echo "$rxDetails[diagnosis_INPUT_7]"; ?></td>
                <td><?php echo "$rxDetails[diagnosis_INPUT_8]"; ?></td>
                <td><?php //todo not in exam?></td>
                <td><?php echo "$rxDetails[diagnosis_INPUT_9]"; ?></td>
            </tr>
            <tr>
                <td><strong>OS</strong></td>
                <td><?php echo "$rxDetails[diagnosis_INPUT_10]"; ?></td>
                <td><?php echo "$rxDetails[diagnosis_INPUT_11]"; ?></td>
                <td><?php echo "$rxDetails[diagnosis_INPUT_12]"; ?></td>
                <td><?php echo "$rxDetails[diagnosis_INPUT_13]"; ?></td>
                <td><?php //todo not in exam ?></td>
                <td><?php echo "$rxDetails[diagnosis_INPUT_14]"; ?></td>
                <td><?php echo "$rxDetails[diagnosis_INPUT_15]"; ?></td>
                <td><?php echo "$rxDetails[diagnosis_INPUT_16]"; ?></td>
                <td><?php echo "$rxDetails[diagnosis_INPUT_17]"; ?></td>
                <td><?php echo "$rxDetails[diagnosis_INPUT_18]"; ?></td>
                <td><?php //todo not in exam?></td>
                <td><?php echo "$rxDetails[diagnosis_INPUT_19]"; ?></td>
            </tr>
            </tbody>
        </table>
    </div>

    <p style="text-align:center">&nbsp; Notes: <?php echo "$rxDetails[diagnosis_INPUT_20]"?><br />
        -----------------------------------<br />
       <?php echo"$doctorInfo[first_name] $doctorInfo[last_name]"?></p>
    </div>





</form>
</body>
<script>
    CKEDITOR.replace('txtPrescription');
    CKEDITOR.editorConfig = function( config ) {
        config.language = 'es';
        config.uiColor = '#F7B42C';
        config.height = 500;
        config.toolbarCanCollapse = true;
    };
</script>
</html>
