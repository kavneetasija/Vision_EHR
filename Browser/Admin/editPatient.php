<?php
/**
 * Created by PhpStorm.
 * User: Dushyant
 * Date: 2015-11-18
 * Time: 11:01 AM
 */
require_once('../../Local/Classes/class.Patient.inc');
extract($_GET);
//check for patient id
if(isset($PatientId)){

}
?>
<?php
//Include header and sidebar
include("header.php");
include("sidebar.php");
?>

<form role="form" id="frm" method="get">
    <div class="form-group">
        <div id="page-wrapper">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit patient info</h1>
                </div>
            </div>
            <!--Add page using $type-->
            <?php
                if($type == "Student"){
                    include('patient.Edit.Student.inc');
                }
                elseif($type == "Senior"){
                    include('patient.Edit.Seniors.inc');
                }
            ?>

        </div>
    </div>
</form>
<?php  include("footer.php"); ?>

