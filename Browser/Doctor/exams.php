<?php
/**
 * Created by PhpStorm.
 * User: Dushyant
 * Date: 2015-11-20
 * Time: 11:10 AM
 */
//todo Display assigned sessions on login on click start session redirect to list of available patients
//required location class
require_once('../../Local/Classes/class.Exam.php');
?>
<?php
include("header.php");
include("sidebar.php");
?>
<?php
    //create exam object
    $exam = new Exam();
    $examList = $exam->selectAllExams();
?>
<form role="form" id="frm">
    <div class="form-group">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dash Board</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row1 -->
            <!-- /.row 5-->
            <div class="row">
                <div class="col-lg-12">

                    <!--List of locations assigned to log in doctor-->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <?php echo "Dr.".$_SESSION['loginFirstName'].'\'s assigned locations'?>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTable">
                                    <thead>
                                    <tr>
                                        <th>Exam ID</th>
                                        <th>Time</th>
                                        <th>Location</th>
                                        <th>Student</th>
                                        <th>OHIP Number</th>
                                        <th>OHIP Virsion</th>
                                        <th>View Exam</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    //populate list of exams
                                    while($list = mysqli_fetch_array($examList)){
                                        echo"<tr>
                                                <td>$list[exam_id]</td>
                                                <td>$list[time]</td>
                                                <td>$list[name]</td>
                                                <td>$list[first_name] $list[last_name]</td>
                                                <td>$list[OHIP_number]</td>
                                                <td>$list[OHIP_virsion]</td>
                                                <td><a class='btn btn-success btn-circle' href='stagingEyeExam.php?PatientID=$list[patient_id]&DoctorID=$_SESSION[loginUserId]&ExamID=$list[exam_id]&action=edit'><i class='fa fa-eye'></i></a> </td>
                                            </tr>";
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div><!--Col-lg-12-->
            </div><!--/.row-->
        </div><!--#Wrapper-->
</form>
<?php  include("footer.php"); ?>
