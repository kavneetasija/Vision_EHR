<?php
/**
 * Created by PhpStorm.
 * User: Dushyant
 * Date: 2015-07-26
 * Time: 8:53 PM
 */?>


<?php
include("header.php");
//add css
echo "<link href='../../Local/dist/css/eyeExam.css' rel='stylesheet'>";
include("sidebar.php");
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
                            <label> Billy Rubin</label>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab0" data-toggle="tab" aria-expanded="true">Patient Info.</a></li>
                                <li class=""><a href="#tab1" data-toggle="tab" aria-expanded="false">Acuities</a></li>
                                <li class=""><a href="#tab2" data-toggle="tab" aria-expanded="false">Retinoscopy</a></li>
                                <li class=""><a href="#tab3" data-toggle="tab" aria-expanded="false">External</a></li>
                                <li class=""><a href="#tab4" data-toggle="tab" aria-expanded="false">Internal</a></li>
                                <li class=""><a href="#tab5" data-toggle="tab" aria-expanded="false">Tonometry</a></li>
                                <li class=""><a href="#tab6" data-toggle="tab" aria-expanded="false">Diagnosis &amp; Summary</a></li>
                                <li class=""><a href="#tab7" data-toggle="tab" aria-expanded="false">Billing info</a></li>
                            </ul>

                            <!--Eye exam Tab panes -->
                            <div class="tab-content">
                                <!--Patient info tab0-->
                                <div class="tab-pane fade active in" id="tab0">
                                    <h4>Patient Info. <span style="color: red">Don't share</span></h4>
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
                                                            <p class="form-control-static">Billy Rubin</p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label>Address</label>
                                                            <p class="form-control-static">1791 Arastradero Rd,
                                                                Palo Alto, CA 94304,
                                                                United States</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>Birth date</label>
                                                            <p class="form-control-static">28 Feb 2000 (Age 15)</p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label>Health Card #</label>
                                                            <p class="form-control-static">1234567890AD</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label>Phone #</label>
                                                            <p class="form-control-static">800-849-7376</p>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>Email</label>
                                                            <p class="form-control-static">bill@cbc.net</p>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>Other contact</label>
                                                            <p class="form-control-static">800-849-7376</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Health History-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel panel-info">
                                                <div class="panel-heading">
                                                    <label>Health History</label>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label>Already see an eye doctor ?</label>
                                                            <p class="form-control-static">No</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label>This is 1<sup>st</sup> Eye Exam with an optometrist ?</label>
                                                            <p class="form-control-static">No</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label>Date of last eye exam?</label>
                                                            <p class="form-control-static">2013</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label>Ocular history</label>
                                                            <p class="form-control-static">Color Vision Defect</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label>Medical condition</label>
                                                            <p class="form-control-static">N/A</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label>Family history</label>
                                                            <p class="form-control-static">N/A</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>ALLERGIES</label>
                                                            <p class="form-control-static">N/A</p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label>MEDICATION</label>
                                                            <p class="form-control-static">Anti inflammatory.</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label>Other symptoms</label>
                                                            <p class="form-control-static">N/A</p>
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
                                            <textarea class="form-control" name="txtPatientInfoNotes" data-gramm="true" data-txt_gramm_id="503910ec-e37a-1f13-cabf-609eefabd80e" data-gramm_id="503910ec-e37a-1f13-cabf-609eefabd80e" spellcheck="false" data-gramm_editor="true" style="z-index: auto; position: relative; line-height: 20px; font-size: 14px; transition: none; overflow: auto; background: transparent !important;">
                                            </textarea><div><div style="z-index: 2; opacity: 1; margin-left: 917px; margin-top: 1073px;" class="gr-textarea-btn " data-grammarly-reactid=".9"><div title="Protected by Grammarly" class="gr-textarea-btn_status" data-grammarly-reactid=".9.0">&nbsp;</div></div></div>
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
                                            <select name="drpAcuitiesRecordedAs" class="form-control mediumText"><!--todo ask for options to set values type-->
                                                <option>Select one......</option>
                                                <option>Snellen</option>
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
                                                            <input type="text" class="form-control smallText">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <input type="text" class="form-control smallText">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <input type="text" class="form-control smallText">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-1"><!--OD Add txt-->
                                                    <input type="text" class="form-control smallText">
                                                </div>
                                                <div class="col-md-1"><!--OD Prism txt-->
                                                    <input type="text" class="form-control smallText">
                                                </div>
                                                <div class="col-md-1"><!--OD PD txt-->
                                                    <input type="text" class="form-control smallText">
                                                </div>
                                                <div class="col-md-3"><!--OD B.C txt-->
                                                    <input type="text" class="form-control smallText">
                                                </div>
                                            </div><br>
                                            <!--OS Row-->
                                            <div class="row">
                                                <div class="col-md-1 col-md-offset-2">OS</div>
                                                <div class="col-md-3"><!-- OS RX txt1,txt2,txt3-->
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <input type="text" class="form-control smallText">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <input type="text" class="form-control smallText">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <input type="text" class="form-control smallText">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-1"><!--OS Add txt-->
                                                    <input type="text" class="form-control smallText">
                                                </div>
                                                <div class="col-md-1"><!--OS Prism txt-->
                                                    <input type="text" class="form-control smallText">
                                                </div>
                                                <div class="col-md-1"><!--OS PD txt-->
                                                    <input type="text" class="form-control smallText">
                                                </div>
                                                <div class="col-md-3"><!--OS B.C txt-->
                                                    <input type="text" class="form-control smallText">
                                                </div>
                                            </div><br>
                                            <!--Year old row-->
                                            <div class="row">
                                                <div class="col-md-1 col-md-offset-2">
                                                    Years old
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="number" min="1" class="form-control smallText">
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
                                                            <input type="text" class="form-control mediumText">
                                                        </div>
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control mediumText">
                                                        </div>
                                                    </div><br>
                                                    <!--Row 3 OS-->
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            OS
                                                        </div>
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control mediumText">
                                                        </div>
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control mediumText">
                                                        </div>
                                                    </div><br>
                                                    <!--Row 4 OU-->
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            OU
                                                        </div>
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control mediumText">
                                                        </div>
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control mediumText">
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
                                                            <input type="text" class="form-control mediumText">
                                                        </div>
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control mediumText">
                                                        </div>
                                                    </div><br>
                                                    <!--Row 3 OS-->
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            OS
                                                        </div>
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control mediumText">
                                                        </div>
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control mediumText">
                                                        </div>
                                                    </div><br>
                                                    <!--Row 4 OU-->
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            OU
                                                        </div>
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control mediumText">
                                                        </div>
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control mediumText">
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
                                                                    <input type="text" class="form-control mediumText">
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <input type="text" class="form-control mediumText">
                                                                </div>
                                                            </div><br>
                                                            <!--Row 3 Alternating-->
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    Alternating
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control mediumText">
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <input type="text" class="form-control mediumText">
                                                                </div>
                                                            </div><br>
                                                        </div>
                                                        <!-- Col 1 Right Version,Saccades,Pursuits-->
                                                        <div class="col-md-6">
                                                            <!--Row 1-->
                                                            <div class="row">
                                                                <div class="col-md-3">Version</div>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control fullLengthText">
                                                                </div>
                                                            </div><br>
                                                            <!--Row 2-->
                                                            <div class="row">
                                                                <div class="col-md-3">Saccades</div>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control fullLengthText">
                                                                </div>
                                                            </div><br>
                                                            <!--Row 3-->
                                                            <div class="row">
                                                                <div class="col-md-3">Pursuits</div>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control fullLengthText">
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
                                                                    <input type="text" class="form-control smallText">
                                                                </div>
                                                                <div class="col-md-3">Maddox: VT</div>
                                                                <div class="col-md-2">
                                                                    <input type="text" class="form-control smallText">
                                                                </div>
                                                                <div class="col-md-1">HZ</div>
                                                                <div class="col-md-2">
                                                                    <input type="text" class="form-control smallText">
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
                                                                    <select class="form-control mediumText"><!--todo add options-->
                                                                        <option>CV 1</option>
                                                                        <option>CV 2</option>
                                                                        <option>CV 3</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-2">Result</div>
                                                                <div class="col-md-4">
                                                                    <select class="form-control mediumText"><!--todo add options-->
                                                                        <option>Result CV 1</option>
                                                                        <option>Result CV 2</option>
                                                                        <option>Result CV 3</option>
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
                                                                    <select class="form-control mediumText"><!--todo add options-->
                                                                        <option>SA 1</option>
                                                                        <option>SA 2</option>
                                                                        <option>SA 3</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-2">Result</div>
                                                                <div class="col-md-4">
                                                                    <select class="form-control mediumText"><!--todo add options-->
                                                                        <option>result SA 1</option>
                                                                        <option>result SA 2</option>
                                                                        <option>result SA 3</option>
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
                                            <textarea name="textAcuitiesNotes" class="form-control" data-gramm="" data-txt_gramm_id="43d3e0f8-8d38-3bf4-a1b2-36fa27e8a4d0">                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                                <!--Retinoscopy tab2-->
                                <div class="tab-pane fade active in" id="tab2">
                                    <h4>Retinoscopy</h4>
                                    <!--1st Panel-->
                                    <div class="panel panel-info">
                                        <div class="panel-heading">
                                            <label>Retinoscopy Type
                                                <input style="color: black;" type="text" class="form-control largeText">
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
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="col-sm-1" style="padding: 0;text-align: center;">
                                                            at
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0px;">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="col-sm-1" style="padding: 0; text-align: center;">
                                                            /
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0px;">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0px;">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div><br>
                                                    <!--Dom OD-->
                                                    <div class="row">
                                                        <div class="col-sm-10 col-sm-offset-2">
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox">DOM OD
                                                            </label>
                                                        </div>
                                                    </div><br>
                                                    <!--Retinoscopy-->
                                                    <div class="row">
                                                        <div class="col-sm-2" style="padding: 0;text-align: center;">
                                                            Retinoscopy
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0">
                                                            <input type="number" step="0.25" class="form-control">
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0">
                                                            <input type="number" step="0.25" class="form-control">
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0">
                                                            <input type="number" step="1" min="0" class="form-control">
                                                        </div>
                                                        <div class="col-sm-1" style="padding: 0; text-align: center;">
                                                            /
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div><br>
                                                    <!--Subjective Rx-->
                                                    <div class="row">
                                                        <div class="col-sm-2" style="padding: 0;text-align: center;">
                                                            Subjective Rx
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0">
                                                            <input type="number" step="0.25" class="form-control">
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0">
                                                            <input type="number" step="0.25" class="form-control">
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0">
                                                            <input type="number" step="1" min="0" class="form-control">
                                                        </div>
                                                        <div class="col-sm-1" style="padding: 0; text-align: center;">
                                                            /
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div><br>
                                                    <!--Trial Rx-->
                                                    <div class="row">
                                                        <div class="col-sm-2" style="padding: 0;text-align: center;">
                                                            Trial Rx
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0">
                                                            <input type="number" step="0.25" class="form-control">
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0">
                                                            <input type="number" step="0.25" class="form-control">
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0">
                                                            <input type="number" step="1" min="0" class="form-control">
                                                        </div>
                                                        <div class="col-sm-1" style="padding: 0; text-align: center;">
                                                            /
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0">
                                                            <input type="text" class="form-control">
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
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="col-sm-1" style="padding: 0;text-align: center;">
                                                            at
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0px;">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="col-sm-1" style="padding: 0; text-align: center;">
                                                            /
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0px;">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0px;">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div><br>
                                                    <!--Dom OS-->
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox">DOM OS
                                                            </label>
                                                        </div>
                                                    </div><br>
                                                    <!--Retinoscopy-->
                                                    <div class="row">
                                                        <div class="col-sm-2" style="padding-left: 0">
                                                            <input type="number" step="0.25" class="form-control">
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0">
                                                            <input type="number" step="0.25" class="form-control">
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0">
                                                            <input type="number" step="1" min="0" class="form-control">
                                                        </div>
                                                        <div class="col-sm-1" style="padding: 0; text-align: center;">
                                                            /
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div><br>
                                                    <!--Subjective Rx-->
                                                    <div class="row">
                                                        <div class="col-sm-2" style="padding-left: 0">
                                                            <input type="number" step="0.25" class="form-control">
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0">
                                                            <input type="number" step="0.25" class="form-control">
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0">
                                                            <input type="number" step="1" min="0" class="form-control">
                                                        </div>
                                                        <div class="col-sm-1" style="padding: 0; text-align: center;">
                                                            /
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div><br>
                                                    <!--Trial Rx-->
                                                    <div class="row">
                                                        <div class="col-sm-2" style="padding-left: 0">
                                                            <input type="number" step="0.25" class="form-control">
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0">
                                                            <input type="number" step="0.25" class="form-control">
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0">
                                                            <input type="number" step="1" min="0" class="form-control">
                                                        </div>
                                                        <div class="col-sm-1" style="padding: 0; text-align: center;">
                                                            /
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left: 0">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div><br>
                                                </div>
                                            </div><br/>
                                            <!--Rx Notes-->
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <label>Rx Notes</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control">
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
                                                                    <input type="text" class="form-control mediumText">
                                                                </div>
                                                                <div class="col-md-1" style="padding: 0;text-align: center;">
                                                                    at
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control mediumText">
                                                                </div>
                                                            </div><br>
                                                            <!--Refined Add-->
                                                            <div class="row">
                                                                <div class="col-md-3">Refined Add</div>
                                                                <div class="col-md-4">
                                                                    <input type="number" min="0" step="0.25" class="form-control mediumText">
                                                                </div>
                                                                <div class="col-md-1" style="padding: 0;text-align: center;">
                                                                    at
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control mediumText">
                                                                </div>
                                                            </div><br>
                                                        </div>
                                                        <!--BPA/BMA, OD VA, OS VA-->
                                                        <div class="col-lg-6">
                                                            <!--BPA/BMA-->
                                                            <div class="row">
                                                                <div class="col-md-3">BPA/BMA</div>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control largeText">
                                                                </div>
                                                            </div><br>
                                                            <!--OD VA, OS VA-->
                                                            <div class="row">
                                                                <div class="col-md-1">
                                                                    OD
                                                                </div>
                                                                <div class="col-md-2" style="padding: 0;">
                                                                    <input type="number" step="0.25" min="0" class="form-control">
                                                                </div>
                                                                <div class="col-md-1">
                                                                    VA
                                                                </div>
                                                                <div class="col-md-2" style="padding: 0;">
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                                <div class="col-md-1">
                                                                    OS
                                                                </div>
                                                                <div class="col-md-2" style="padding: 0;">
                                                                    <input type="number" step="0.25" min="0" class="form-control">
                                                                </div>
                                                                <div class="col-md-1">
                                                                    VA
                                                                </div>
                                                                <div class="col-md-2" style="padding: 0;">
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><br>
                                            <!--row 2 Genrate rx Button-->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="button" class="btn btn-info btn-sm" id="btnRx" value="Generate Rx">
                                                </div>
                                            </div><br>
                                        </div>
                                    </div>
                                    <!--pnl Prescription-->
                                    <div class="panel panel-info" id="pnlRx" style="display: none;">
                                        <div class="panel-heading"><label>Prescription Dec 02,2015</label></div>
                                        <div class="panel-body">
                                            <!--final Rx-->
                                            <div class="panel panel-success">
                                                <div class="panel-heading"><label>Final RX</label></div>
                                                <div class="panel-body">

                                                </div>
                                            </div>
                                            <!--special RX-->
                                            <div class="panel panel-success">
                                                <div class="panel-heading"><label>Special RX</label></div>
                                                <div class="panel-body">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Notes-->
                                    <div class="panel panel-default">
                                        <div class="panel-heading"><label>Notes...</label></div>
                                        <div class="panel-body">
                                            <textarea class="form-control" data-gramm="" data-txt_gramm_id="273721a4-5742-939d-7377-4fbe576814a0">                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                                <!--External tab3-->
                                <div class="tab-pane fade" id="tab3">
                                    <h4>External</h4>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="checkbox-inline">
                                                <input type="checkbox"> PERRALA
                                            </label>
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-2">
                                            General
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-2">
                                            Lids/Margine
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-2">
                                            Conjuctiva
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-2">
                                            Limbus/Tears
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-2">
                                            Cornea
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-2">
                                            A-C
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-2">
                                            Iris
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-2">
                                            Pupil Size
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-2">
                                            Direct Reflex
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-2">
                                            Consensual
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-2">
                                            Near
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div><br>
                                    <!--Notes-->
                                    <div class="panel panel-default">
                                        <div class="panel-heading"><label>Notes...</label></div>
                                        <div class="panel-body">
                                            <textarea class="form-control" data-gramm="" data-txt_gramm_id="a543816b-0b71-f429-22c3-84f66f448bcc">
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
                                                        <input type="checkbox"> DIR
                                                    </label>
                                                </div>
                                            </div>
                                            <!--MIO-->
                                            <div class="row">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox"> MIO
                                                    </label>
                                                </div>
                                            </div>
                                            <!--BIO-->
                                            <div class="row">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox"> BIO
                                                    </label>
                                                </div>
                                            </div>
                                            <!--BIO Text-->
                                            <div class="row">
                                                <input type="text" class="form-control">
                                            </div>
                                            <!--Volk-->
                                            <div class="row">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox"> Volk
                                                    </label>
                                                </div>
                                            </div>
                                            <!--Volk Text-->
                                            <div class="row">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <!--Col 1 left-->
                                        <div class="col-md-5 col-md-offset-1">
                                            <div class="row">
                                                <div class="col-md-2" style="padding: 0px;">
                                                    <label>lens</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control">

                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-2" style="padding: 0px;">
                                                    <label>Vitreous</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control">

                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-2" style="padding: 0px;">
                                                    <label>Depth/Cup</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control">

                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-2" style="padding: 0px;">
                                                    <label>Margin</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control">

                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-2" style="padding: 0px;">
                                                    <label>Crescents</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control">

                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-2" style="padding: 0px;">
                                                    <label>A/V Crossing</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control">

                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-2" style="padding: 0px;">
                                                    <label>Calibre-Ratio</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control">

                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-2" style="padding: 0px;">
                                                    <label>Gen/App/Fun</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control">

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
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control">

                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-2" style="padding: 0px;">
                                                    <label>Disc Color</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control">

                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-2" style="padding: 0px;">
                                                    <label>Lamina Crib.</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control">

                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-2" style="padding: 0px;">
                                                    <label>Area/Cup</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control">

                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-2" style="padding: 0px;">
                                                    <label>Macula</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control">

                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-2" style="padding: 0px;">
                                                    <label>Course</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control">

                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-2" style="padding: 0px;">
                                                    <label>Periphery</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control">

                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-12" style="padding: 0px;">
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox">
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
                                            <input id="txtGtts" type="text" class="form-control">
                                        </div>
                                        <div class="col-md-2">
                                            <button type="button" class="btn btn-sm btn-default">Add new gtts</button><!--todo add popup window for ading new gtts-->
                                        </div>
                                        <div class="col-md-2">
                                            <input id="txtInternalNow" type="time" class="form-control mediumText" onfocus="setCurentTime('txtInternalNow')">
                                        </div>
                                    </div><br>
                                    <!--ROw 3 chk-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="checkbox-inline">
                                                <input type="checkbox">
                                                Patient counselled about the effect of Mydriatic
                                            </label>
                                        </div>
                                    </div>
                                    <!--Notes-->
                                    <div class="panel panel-default">
                                        <div class="panel-heading"><label>Notes...</label></div>
                                        <div class="panel-body">
                                            <textarea class="form-control" data-gramm="" data-txt_gramm_id="810cff98-86d0-13b1-0125-a151771e8f45">
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
                                                        <input type="checkbox" value="warning">
                                                        Warning Given
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    Time
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="time" class="form-control mediumText" id="txtTonometryNow" onfocus="setCurentTime('txtTonometryNow')">
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
                                                    <input type="text" class="form-control mediumText">
                                                </div>
                                            </div><br>
                                            <!--OS-->
                                            <div class="row">
                                                <div class="col-md-3 col-md-offset-3">
                                                    <label>OS</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control mediumText">
                                                </div>
                                            </div><br>
                                            <!--Type-->
                                            <div class="row">
                                                <div class="col-md-3 col-md-offset-3">
                                                    <label>Type</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <select class="form-control mediumText">
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
                                                        <input type="checkbox" value="alcaineGtts">
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
                                                    <input type="time" class="form-control mediumText">
                                                </div>
                                            </div><br>
                                            <!--Pachymetry-->
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>Pachymetry</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control largeText">
                                                </div>
                                            </div><br>
                                            <!--Topography-->
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>Topography</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control largeText">
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
                                            <input type="text" class="form-control">
                                        </div>
                                    </div><br>
                                    <!--Confrontation field-->
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label>Confrontation fields</label>
                                        </div>
                                        <div class="col-md-9 checkbox">
                                            <input type="checkbox" value="normalConfrontation">
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
                                                    <input type="text" class="form-control mediumText">
                                                </div>
                                                <!--Temp-->
                                                <div class="col-md-1">
                                                    <label>Temp</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" class="form-control mediumText">
                                                </div>
                                                <!--Total-->
                                                <div class="col-md-1">
                                                    <label>Total</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" class="form-control mediumText">
                                                </div>
                                            </div><br>
                                            <!--OS-->
                                            <div class="row">
                                                <!--Nasal-->
                                                <div class="col-md-1">
                                                    <label>OS Nasal</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" class="form-control mediumText">
                                                </div>
                                                <!--Temp-->
                                                <div class="col-md-1">
                                                    <label>Temp</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" class="form-control mediumText">
                                                </div>
                                                <!--Total-->
                                                <div class="col-md-1">
                                                    <label>Total</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" class="form-control mediumText">
                                                </div>
                                            </div><br>
                                            <!--OU, CSF-->
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <label>OU Total</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" class="form-control mediumText">
                                                </div>
                                                <div class="col-md-1 col-md-offset-4">
                                                    <label>CSF</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" class="form-control mediumText">
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
                                                    <input type="text" class="form-control">
                                                </div>

                                                <!--Input OS-->
                                                <div class="col-md-1 col-md-offset-2">
                                                    <label>OS</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" class="form-control">
                                                </div>

                                            </div>
                                        </div>
                                    </div><br>
                                    <!--Notes-->
                                    <div class="panel panel-default">
                                        <div class="panel-heading"><label>Notes...</label></div>
                                        <div class="panel-body">
                                            <textarea class="form-control" data-gramm="" data-txt_gramm_id="0e9231a4-307a-3e14-31ee-9958018c1c58"></textarea>
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
                                                        <div class="col-md-1"><input type="number" step="0.25" class="form-control"></div>
                                                        <div class="col-md-1"><input type="number" step="0.25" class="form-control"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control"></div>
                                                        <div class="col-md-1"><input type="number" class="form-control"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control"></div>
                                                    </div><br>
                                                    <!--OS-->
                                                    <div class="row">
                                                        <div class="col-md-1"><label>OS</label></div>
                                                        <div class="col-md-1"><input type="number" step="0.25" class="form-control"></div>
                                                        <div class="col-md-1"><input type="number" step="0.25" class="form-control"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control"></div>
                                                        <div class="col-md-1"><input type="number" class="form-control"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control"></div>
                                                    </div><br>
                                                    <!--Note rx-->
                                                    <!--Note rx-->
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label>Notes</label>
                                                            <input type="text" class="form-control">
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
                                                        <div class="col-md-1"><input type="number" step="0.25" class="form-control"></div>
                                                        <div class="col-md-1"><input type="number" step="0.25" class="form-control"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control"></div>
                                                        <div class="col-md-1"><input type="number" class="form-control"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control"></div>
                                                    </div><br>
                                                    <!--OS-->
                                                    <div class="row">
                                                        <div class="col-md-1"><label>OS</label></div>
                                                        <div class="col-md-1"><input type="number" step="0.25" class="form-control"></div>
                                                        <div class="col-md-1"><input type="number" step="0.25" class="form-control"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control"></div>
                                                        <div class="col-md-1"><input type="number" class="form-control"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control"></div>
                                                        <div class="col-md-1"><input type="text" class="form-control"></div>
                                                    </div><br>
                                                    <!--Note rx-->
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label>Notes</label>
                                                            <input type="text" class="form-control">
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
                                            <textarea id="txt1" class="form-control" rows="3" data-gramm="true" data-txt_gramm_id="8805ed82-bf47-dbd9-01dd-77727f7fa36e" data-gramm_id="8805ed82-bf47-dbd9-01dd-77727f7fa36e" spellcheck="false" data-gramm_editor="true" style="overflow: auto; z-index: auto; position: relative; line-height: 20px; font-size: 14px; transition: none; background: transparent !important;">
                                            </textarea><div><div style="z-index: 2; opacity: 1; margin-left: 425px; margin-top: 68px;" class="gr-textarea-btn " data-grammarly-reactid=".3"><div title="Protected by Grammarly" class="gr-textarea-btn_status" data-grammarly-reactid=".3.0">&nbsp;</div></div></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>Findings</label>
                                                    <textarea class="form-control" rows="3" data-gramm="true" data-txt_gramm_id="6e5cd6b9-f7da-56be-7dd4-20f549e42109" data-gramm_id="6e5cd6b9-f7da-56be-7dd4-20f549e42109" spellcheck="false" data-gramm_editor="true" style="overflow: auto; z-index: auto; position: relative; line-height: 20px; font-size: 14px; transition: none; background: transparent !important;"></textarea><div><div style="z-index: 2; opacity: 1; margin-left: 425px; margin-top: 68px;" class="gr-textarea-btn " data-grammarly-reactid=".6"><div title="Protected by Grammarly" class="gr-textarea-btn_status" data-grammarly-reactid=".6.0">&nbsp;</div></div></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>Recommendation</label>
                                                    <textarea class="form-control" rows="3" data-gramm="true" data-txt_gramm_id="0fbb196b-324e-f882-61b2-eadaa08c84c4" data-gramm_id="0fbb196b-324e-f882-61b2-eadaa08c84c4" spellcheck="false" data-gramm_editor="true" style="z-index: auto; position: relative; line-height: 20px; font-size: 14px; transition: none; overflow: auto; background: transparent !important;"></textarea><div><div style="z-index: 2; opacity: 1; margin-left: 425px; margin-top: 68px;" class="gr-textarea-btn " data-grammarly-reactid=".c"><div title="Protected by Grammarly" class="gr-textarea-btn_status" data-grammarly-reactid=".c.0">&nbsp;</div></div></div>
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
                                                        <input type="checkbox" value="Normal">
                                                        Normal
                                                    </label>
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-12 checkbox">
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" value="Followup">
                                                        Follow up
                                                    </label>
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-12">

                                                    Reason for follow up

                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 checkbox">
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" value="prescription">
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
                                <!--Billing info tab7-->
                                <div class="tab-pane fade" id="tab7">
                                    <h4>Billing Info.</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>

                        </div><!--/.Panel Body -->
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Patient ID:</label>
                                    <i>##########</i>
                                </div>
                                <div class="col-md-4">
                                    <label>Location Name:</label>
                                    <i>Name of location</i>
                                </div>
                                <div class="col-md-4">
                                    <label>Doctor ID</label>
                                    <i>######</i>
                                </div>
                            </div>
                        </div>
                    </div><!--/.Panel-->
                </div><!--Col-lg-12-->
            </div><!--/.row-->
        </div><!--#Wrapper-->


        <script>

            /*add gtts in gttsList.xml file*/
            /*Set curent time function*/
            function setCurentTime(txtID){
                var txtNow = document.getElementById(txtID);
                var now = new Date();
                var min = ("0"+ now.getMinutes()).slice(-2);
                var hr = ("0"+ now.getHours()).slice(-2);
                txtNow.value = hr +":"+ min;
            }
            /*Generate rx from retinoscopy to Diagnosis and summary displaying prescription*/
            //    var btnRx = document.getElementById("btnRx");
            //    btnRx.onclick = function(){
            //        var pnlRx = document.getElementById("pnlRx");
            //            pnlRx.style.display = 'block';
            //    };

        </script>


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



    </div></form>
<script>

    /*add gtts in gttsList.xml file*/
    /*Set curent time function*/
    function setCurentTime(txtID){
        var txtNow = document.getElementById(txtID);
        var now = new Date();
        var min = ("0"+ now.getMinutes()).slice(-2);
        var hr = ("0"+ now.getHours()).slice(-2);
        txtNow.value = hr +":"+ min;
    }
    /*Generate rx from retinoscopy to Diagnosis and summary displaying prescription*/
//    var btnRx = document.getElementById("btnRx");
//    btnRx.onclick = function(){
//        var pnlRx = document.getElementById("pnlRx");
//            pnlRx.style.display = 'block';
//    };

</script>

<?php  include("footer.php"); ?>
