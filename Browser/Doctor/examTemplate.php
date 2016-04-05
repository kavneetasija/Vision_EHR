<?php
/**
 * Created by PhpStorm.
 * User: Dushyant
 * Date: 2016-04-05
 * Time: 11:07 AM
 */
?>
<?php
include("header.php");
//add css
echo "<link href='../../Local/dist/css/eyeExam.css' rel='stylesheet'>";
include("sidebar.php");
?>
<div id="page-wrapper" style="min-height: 383px;">
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
                        <div class="col-md-4">
                            <!--Template name todo add template name in Datamodle-->
                            <lable>Template name</lable>
                            <input type="text" class="form-control">
                        </div>
                        <div id="saveInfo" style="color:black;">
                            <div class="col-md-3 col-md-offset-4">
                                <select class="form-control">
                                    <option value="404">404 - Full service(Child)</option>
                                    <option value="404">406 - Full service(Senior)</option>
                                    <option value="404">402 - Partial service</option>
                                </select><br>
                            </div>
                            <div class="col-md-1 ">
                                <button class="btn btn-success" id="btnSave" name="btnSave" type="button" onclick="saveForm()" value="updateExam">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"> <a href="#tab1" data-toggle="tab" aria-expanded="true">Acuities</a></li>
                        <li class=""> <a href="#tab2" data-toggle="tab" aria-expanded="false">Retinoscopy</a></li>
                        <li class=""> <a href="#tab3" data-toggle="tab" aria-expanded="false">External</a></li>
                        <li class=""> <a href="#tab4" data-toggle="tab" aria-expanded="false">Internal</a></li>
                        <li class=""> <a href="#tab5" data-toggle="tab" aria-expanded="false">Tonometry</a></li>
                    </ul>

                    <!--Eye exam Tab panes -->
                    <div class="tab-content">
                        <!--Acuities tab1-->
                        <div class="tab-pane fade active in" id="tab1">
                            <h4>Acuities</h4>
                            <!--row 1 Recorded as-->
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Recorded as:</label>
                                    <input id="txtRecordedas" type="text" data-toggle="modal" data-target="#recordList" class="form-control" name="acuities_SELECT_0" value="">
                                </div>
                                <div class="modal fade" id="recordList" role="dialog" aria-labelledby="myModalLabel0" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title" id="myModalLabel0">Recorde type manager</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label>Select from the list</label>
                                                    <select id="selectType" multiple="" class="form-control">

                                                    </select><br>
                                                    <button type="button" id="btnSelectType" onclick="" data-dismiss="modal" class="btn btn-success form-control">Select</button><br>
                                                    <label>Add new to list</label>
                                                    <input type="text" id="txtNewType" class="form-control" name=""><br>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" onclick="" data-dismiss="modal">Add new to list</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
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
                                        <div class="col-md-3"><!--OD RX txt1,txt2,txt3 todo make wattermarkes at fileds-->
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <input type="number" step="0.25" class="form-control " name="acuities_INPUT_0" placeholder="SPH" value="">
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="number" step="0.25" class="form-control " name="acuities_INPUT_1" placeholder="CYL" value="">
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="number" step="1" min="0" max="180" class="form-control" name="acuities_INPUT_2" placeholder="AXIS" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-1"><!--OD Add txt-->
                                            <input type="text" class="form-control smallText" name="acuities_INPUT_3" value="">
                                        </div>
                                        <div class="col-md-1"><!--OD Prism txt-->
                                            <input type="text" class="form-control smallText" name="acuities_INPUT_4" value="">
                                        </div>
                                        <div class="col-md-1"><!--OD PD txt-->
                                            <input type="text" class="form-control smallText" name="acuities_INPUT_5" value="">
                                        </div>
                                        <div class="col-md-3"><!--OD B.C txt-->
                                            <input type="text" class="form-control smallText" name="acuities_INPUT_6" value="">
                                        </div>
                                    </div><br>
                                    <!--OS Row-->
                                    <div class="row">
                                        <div class="col-md-1 col-md-offset-2">OS</div>
                                        <div class="col-md-3"><!-- OS RX txt1,txt2,txt3-->
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control " name=" acuities_INPUT_7" placeholder="SPH" value="">
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control " name=" acuities_INPUT_8" placeholder="CYL" value="">
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control " name=" acuities_INPUT_9" placeholder="AXIS" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-1"><!--OS Add txt-->
                                            <input type="text" class="form-control smallText" name=" acuities_INPUT_10" value="">
                                        </div>
                                        <div class="col-md-1"><!--OS Prism txt-->
                                            <input type="text" class="form-control smallText" name=" acuities_INPUT_11" value="">
                                        </div>
                                        <div class="col-md-1"><!--OS PD txt-->
                                            <input type="text" class="form-control smallText" name=" acuities_INPUT_12" value="">
                                        </div>
                                        <div class="col-md-3"><!--OS B.C txt-->
                                            <input type="text" class="form-control smallText" name=" acuities_INPUT_13" value="">
                                        </div>
                                    </div><br>
                                    <!--Year old row-->
                                    <div class="row">
                                        <div class="col-md-1 col-md-offset-2">
                                            Years old
                                        </div>
                                        <div class="col-md-1">
                                            <input type="number" min="1" class="form-control smallText" name=" acuities_INPUT_14" value="">
                                        </div>
                                        <div class="col-md-1">
                                            Notes
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name=" "><!--todo save to db Added new fild-->
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
                                                    <input type="text" tabindex="15" class="form-control mediumText" name="acuities_INPUT_15" value="">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" tabindex="18" class="form-control mediumText" name="acuities_INPUT_16" value="">
                                                </div>
                                            </div><br>
                                            <!--Row 3 OS-->
                                            <div class="row">
                                                <div class="col-md-2">
                                                    OS
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" tabindex="16" class="form-control mediumText" name="acuities_INPUT_17" value="">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" tabindex="19" class="form-control mediumText" name="acuities_INPUT_18" value="">
                                                </div>
                                            </div><br>
                                            <!--Row 4 OU-->
                                            <div class="row">
                                                <div class="col-md-2">
                                                    OU
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" tabindex="17" class="form-control mediumText" name="acuities_INPUT_19" value="">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" tabindex="20" class="form-control mediumText" name="acuities_INPUT_20" value="">
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
                                                    <input type="text" class="form-control mediumText" name="acuities_INPUT_21" value="">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control mediumText" name=" acuities_INPUT_22" value="">
                                                </div>
                                            </div><br>
                                            <!--Row 3 OS-->
                                            <div class="row">
                                                <div class="col-md-2">
                                                    OS
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control mediumText" name=" acuities_INPUT_23" value="">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control mediumText" name=" acuities_INPUT_24" value="">
                                                </div>
                                            </div><br>
                                            <!--Row 4 OU-->
                                            <div class="row">
                                                <div class="col-md-2">
                                                    OU
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control mediumText" name=" acuities_INPUT_25" value="">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control mediumText" name=" acuities_INPUT_26" value="">
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
                                                            <input type="text" class="form-control mediumText" name=" acuities_INPUT_27" value="">
                                                        </div>
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control mediumText" name=" acuities_INPUT_28" value="">
                                                        </div>
                                                    </div><br>
                                                    <!--Row 3 Alternating-->
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            Alternating
                                                        </div>
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control mediumText" name=" acuities_INPUT_29" value="">
                                                        </div>
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control mediumText" name=" acuities_INPUT_30" value="">
                                                        </div>
                                                    </div><br>
                                                </div>
                                                <!-- Col 1 Right Version,Saccades,Pursuits-->
                                                <div class="col-md-6">
                                                    <!--Row 1-->
                                                    <div class="row">
                                                        <div class="col-md-3">Version</div>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control fullLengthText" name=" acuities_INPUT_31" value="">
                                                        </div>
                                                    </div><br>
                                                    <!--Row 2-->
                                                    <div class="row">
                                                        <div class="col-md-3">Saccades</div>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control fullLengthText" name=" acuities_INPUT_32" value="">
                                                        </div>
                                                    </div><br>
                                                    <!--Row 3-->
                                                    <div class="row">
                                                        <div class="col-md-3">Pursuits</div>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control fullLengthText" name=" acuities_INPUT_33" value="">
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
                                                            <input type="text" class="form-control smallText" name=" acuities_INPUT_34" value="">
                                                        </div>
                                                        <div class="col-md-3">Maddox: VT</div>
                                                        <div class="col-md-2">
                                                            <input type="text" class="form-control smallText" name=" acuities_INPUT_35" value="">
                                                        </div>
                                                        <div class="col-md-1">HZ</div>
                                                        <div class="col-md-2">
                                                            <input type="text" class="form-control smallText" name=" acuities_INPUT_36" value="">
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
                                                            <input type="input" name="acuities_SELECT_1" id="acuities_SELECT_1" class="form-control" data-toggle="modal" data-target="#colorVisionList">
                                                        </div>
                                                        <!--Color vision test list manageer-->
                                                        <div class="modal fade" id="colorVisionList" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                        <h4 class="modal-title" id="myModalLabel">Color vision test manager</h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="form-group">
                                                                            <label>Select from the list</label>
                                                                            <select id="selectGtts" multiple="" class="form-control">
                                                                                <!--pull data from table-->
                                                                            </select><br/>
                                                                            <button type="button" id="btnSelectGtts" data-dismiss="modal" class="btn btn-success form-control mediumText">Select</button><br/><!--todo apply js functions-->
                                                                            <label>Add new to list</label>
                                                                            <input type="text" id="txtNewGtts" class="form-control" name="internal_INPUT_38"><br/>
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
                                                        <div class="col-md-2">Result</div>
                                                        <div class="col-md-4">
                                                            <select class="form-control mediumText" name="acuities_SELECT_2"><!--todo add options-->
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option selectedvalue="12">12</option>
                                                                <option value="13">13</option>
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
                                                            <input type="text" class="form-control" name="acuities_SELECT_3" 
                                                        </div>
                                                        <div class="col-md-2">Result</div>
                                                        <div class="col-md-4">
                                                            <select class="form-control mediumText" name="acuities_SELECT_4"><!--todo add options-->
                                                                <option value="1">1</option>
                                                                2
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
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
                                    <textarea id="txtAcutiesNote" name="txtAcutiesNote" class="form-control"></textarea>
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
                                        <input style="color: black;" type="text" class="form-control largeText" name="retinoscopy_INPUT_0" value="">
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
                                                    <input type="text" class="form-control" name="retinoscopy_INPUT_1" value="">
                                                </div>
                                                <div class="col-sm-1" style="padding: 0;text-align: center;">
                                                    at
                                                </div>
                                                <div class="col-sm-2" style="padding-left: 0px;">
                                                    <input type="text" class="form-control" name="retinoscopy_INPUT_2" value="">
                                                </div>
                                                <div class="col-sm-1" style="padding: 0; text-align: center;">
                                                    /
                                                </div>
                                                <div class="col-sm-2" style="padding-left: 0px;">
                                                    <input type="text" class="form-control" name="retinoscopy_INPUT_3" value="">
                                                </div>
                                                <div class="col-sm-2" style="padding-left: 0px;">
                                                    <input type="text" class="form-control" name="retinoscopy_INPUT_4" value="">
                                                </div>
                                            </div><br>
                                            <!--Dom OD-->
                                            <div class="row">
                                                <div class="col-sm-10 col-sm-offset-2">
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" name="retinoscopy_INPUT_5" value="true">DOM OD
                                                    </label>
                                                </div>
                                            </div><br>
                                            <!--Retinoscopy-->
                                            <div class="row">
                                                <div class="col-sm-2" style="padding: 0;text-align: center;">
                                                    Retinoscopy
                                                </div>
                                                <div class="col-sm-2" style="padding-left: 0">
                                                    <input type="number" step="0.25" placeholder="SPH" class="form-control" name="retinoscopy_INPUT_6" id="txtRetOD_1" value="">
                                                </div>
                                                <div class="col-sm-2" style="padding-left: 0">
                                                    <input type="number" step="0.25" placeholder="CYL" class="form-control" name="retinoscopy_INPUT_7" id="txtRetOD_2" value="">
                                                </div>
                                                <div class="col-sm-2" style="padding-left: 0">
                                                    <input type="number" step="1" min="0" max="180" placeholder="AXIS" class="form-control" name="retinoscopy_INPUT_8" id="txtRetOD_3" value="">
                                                </div>
                                                <div class="col-sm-1" style="padding: 0; text-align: center;">
                                                    /
                                                </div>
                                                <div class="col-sm-2" style="padding-left: 0">
                                                    <input type="text" class="form-control" name="retinoscopy_INPUT_9" value="">
                                                </div>
                                            </div><br>
                                            <!--Subjective Rx-->
                                            <div class="row">
                                                <div class="col-sm-2" style="padding: 0;text-align: center;">
                                                    Subjective Rx
                                                </div>
                                                <div class="col-sm-2" style="padding-left: 0">
                                                    <input type="number" step="0.25" placeholder="SPH" class="form-control" name="retinoscopy_INPUT_10" id="txtSubOD_1" value="">
                                                </div>
                                                <div class="col-sm-2" style="padding-left: 0">
                                                    <input type="number" step="0.25" placeholder="CYL" class="form-control" name="retinoscopy_INPUT_11" id="txtSubOD_2" value="">
                                                </div>
                                                <div class="col-sm-2" style="padding-left: 0">
                                                    <input type="number" step="1" min="0" max="180" placeholder="AXIS" class="form-control" name="retinoscopy_INPUT_12" id="txtSubOD_3" value="">
                                                </div>
                                                <div class="col-sm-1" style="padding: 0; text-align: center;">
                                                    /
                                                </div>
                                                <div class="col-sm-2" style="padding-left: 0">
                                                    <input type="text" class="form-control" name="retinoscopy_INPUT_13" value="">
                                                </div>
                                            </div><br>
                                            <!--Trial Rx-->
                                            <div class="row">
                                                <div class="col-sm-2" style="padding: 0;text-align: center;">
                                                    Trial Rx
                                                </div>
                                                <div class="col-sm-2" style="padding-left: 0">
                                                    <input type="number" step="0.25" placeholder="SPH" class="form-control" name="retinoscopy_INPUT_14" id="txtTriOD_1" value="">
                                                </div>
                                                <div class="col-sm-2" style="padding-left: 0">
                                                    <input type="number" step="0.25" placeholder="CYL" class="form-control" name="retinoscopy_INPUT_15" id="txtTriOD_2" value="">
                                                </div>
                                                <div class="col-sm-2" style="padding-left: 0">
                                                    <input type="number" step="1" min="0" placeholder="AXIS" class="form-control" name="retinoscopy_INPUT_16" id="txtTriOD_3" value="">
                                                </div>
                                                <div class="col-sm-1" style="padding: 0; text-align: center;">
                                                    /
                                                </div>
                                                <div class="col-sm-2" style="padding-left: 0">
                                                    <input type="text" class="form-control" name="retinoscopy_INPUT_17" value="">
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
                                                    <input type="text" class="form-control" name="retinoscopy_INPUT_18" value="">
                                                </div>
                                                <div class="col-sm-1" style="padding: 0;text-align: center;">
                                                    at
                                                </div>
                                                <div class="col-sm-2" style="padding-left: 0px;">
                                                    <input type="text" class="form-control" name="retinoscopy_INPUT_19" value="">
                                                </div>
                                                <div class="col-sm-1" style="padding: 0; text-align: center;">
                                                    /
                                                </div>
                                                <div class="col-sm-2" style="padding-left: 0px;">
                                                    <input type="text" class="form-control" name="retinoscopy_INPUT_20" value="">
                                                </div>
                                                <div class="col-sm-2" style="padding-left: 0px;">
                                                    <input type="text" class="form-control" name="retinoscopy_INPUT_21" value="">
                                                </div>
                                            </div><br>
                                            <!--Dom OS-->
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" name="retinoscopy_INPUT_22" value="true">DOM OS
                                                    </label>
                                                </div>
                                            </div><br>
                                            <!--Retinoscopy-->
                                            <div class="row">
                                                <div class="col-sm-2" style="padding-left: 0">
                                                    <input type="number" step="0.25" placeholder="SPH" class="form-control" name="retinoscopy_INPUT_23" id="txtRetOS_1" value="">
                                                </div>
                                                <div class="col-sm-2" style="padding-left: 0">
                                                    <input type="number" step="0.25" placeholder="CYL" class="form-control" name="retinoscopy_INPUT_24" id="txtRetOS_2" value="">
                                                </div>
                                                <div class="col-sm-2" style="padding-left: 0">
                                                    <input type="number" step="1" min="0" max="180" placeholder="AXIS" class="form-control" name="retinoscopy_INPUT_25" id="txtRetOS_3" value="">
                                                </div>
                                                <div class="col-sm-1" style="padding: 0; text-align: center;">
                                                    /
                                                </div>
                                                <div class="col-sm-2" style="padding-left: 0">
                                                    <input type="text" class="form-control" name="retinoscopy_INPUT_26" value="">
                                                </div>
                                            </div><br>
                                            <!--Subjective Rx-->
                                            <div class="row">
                                                <div class="col-sm-2" style="padding-left: 0">
                                                    <input type="number" step="0.25" placeholder="SPH" class="form-control" name="retinoscopy_INPUT_27" id="txtSubOS_1" value="">
                                                </div>
                                                <div class="col-sm-2" style="padding-left: 0">
                                                    <input type="number" step="0.25" placeholder="CYL" class="form-control" name="retinoscopy_INPUT_28" id="txtSubOS_2" value="">
                                                </div>
                                                <div class="col-sm-2" style="padding-left: 0">
                                                    <input type="number" step="1" min="0" max="180" placeholder="AXIS" class="form-control" name="retinoscopy_INPUT_29" id="txtSubOS_3" value="">
                                                </div>
                                                <div class="col-sm-1" style="padding: 0; text-align: center;">
                                                    /
                                                </div>
                                                <div class="col-sm-2" style="padding-left: 0">
                                                    <input type="text" class="form-control" name="retinoscopy_INPUT_30" value="">
                                                </div>
                                            </div><br>
                                            <!--Trial Rx-->
                                            <div class="row">
                                                <div class="col-sm-2" style="padding-left: 0">
                                                    <input type="number" step="0.25" placeholder="SPH" class="form-control" name="retinoscopy_INPUT_31" id="txtTriOS_1" value="">
                                                </div>
                                                <div class="col-sm-2" style="padding-left: 0">
                                                    <input type="number" step="0.25" placeholder="CYL" class="form-control" name="retinoscopy_INPUT_32" id="txtTriOS_2" value="">
                                                </div>
                                                <div class="col-sm-2" style="padding-left: 0">
                                                    <input type="number" step="1" min="0" max="180" placeholder="AXIS" class="form-control" name="retinoscopy_INPUT_33" id="txtTriOS_3" value="">
                                                </div>
                                                <div class="col-sm-1" style="padding: 0; text-align: center;">
                                                    /
                                                </div>
                                                <div class="col-sm-2" style="padding-left: 0">
                                                    <input type="text" class="form-control" name="retinoscopy_INPUT_34" value="">
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
                                            <input type="text" id="txtRxNotes" class="form-control" name="retinoscopy_INPUT_35" value="">
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
                                                            <input type="text" class="form-control mediumText" name="retinoscopy_INPUT_36" value="">
                                                        </div>
                                                        <div class="col-md-1" style="padding: 0;text-align: center;">
                                                            at
                                                        </div>
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control mediumText" name="retinoscopy_INPUT_37" value="">
                                                        </div>
                                                    </div><br>
                                                    <!--Refined Add-->
                                                    <div class="row">
                                                        <div class="col-md-3">Refined Add</div>
                                                        <div class="col-md-4">
                                                            <input type="number" min="0" step="0.25" class="form-control mediumText" name="retinoscopy_INPUT_38" id="txtAdd" value="">
                                                        </div>
                                                        <div class="col-md-1" style="padding: 0;text-align: center;">
                                                            at
                                                        </div>
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control mediumText" name="retinoscopy_INPUT_39" value="">
                                                        </div>
                                                    </div><br>
                                                </div>
                                                <!--BPA/BMA, OD VA, OS VA-->
                                                <div class="col-lg-6">
                                                    <!--BPA/BMA-->
                                                    <div class="row">
                                                        <div class="col-md-3">BPA/BMA</div>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control largeText" name="retinoscopy_INPUT_40" value="">
                                                        </div>
                                                    </div><br>
                                                    <!--OD VA, OS VA-->
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            OD
                                                        </div>
                                                        <div class="col-md-2" style="padding: 0;">
                                                            <input type="number" step="0.25" min="0" class="form-control" name="retinoscopy_INPUT_41" id="txtAddOD" value="">
                                                        </div>
                                                        <div class="col-md-1">
                                                            VA
                                                        </div>
                                                        <div class="col-md-2" style="padding: 0;">
                                                            <input type="text" class="form-control" name="retinoscopy_INPUT_42" value="">
                                                        </div>
                                                        <div class="col-md-1">
                                                            OS
                                                        </div>
                                                        <div class="col-md-2" style="padding: 0;">
                                                            <input type="number" step="0.25" min="0" class="form-control" name="retinoscopy_INPUT_43" id="txtAddOS" value="">
                                                        </div>
                                                        <div class="col-md-1">
                                                            VA
                                                        </div>
                                                        <div class="col-md-2" style="padding: 0;">
                                                            <input type="text" class="form-control" name="retinoscopy_INPUT_44" value="">
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
                                    <textarea name="txtRetinosopyNote" class="form-control">                                                                                            </textarea>
                                </div>
                            </div>
                        </div>
                        <!--External tab3-->
                        <div class="tab-pane fade" id="tab3">
                            <h4>External</h4>
                            <div class="row">
                                <div class="col-md-2">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="external_INPUT_0" value="true"> PERRLA
                                    </label>
                                </div>
                                <div class="col-md-5" style="text-align: center; background-color: #9d9d9d;">
                                    <label>OD</label>
                                </div>
                                <div class="col-md-5" style="text-align: center; background-color:#dddddd;">
                                    <label>OS</label>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-2">
                                    General
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" name="external_INPUT_1" value="">
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" name="external_INPUT_2" value="">
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-2">
                                    Lids/Margin
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" name="external_INPUT_3" value="">
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" name="external_INPUT_4" value="">
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-2">
                                    Conjunctiva
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" name="external_INPUT_5" value="">
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" name="external_INPUT_6" value="">
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-2">
                                    Limbus/Tears
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" name="external_INPUT_7" value="">
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" name="external_INPUT_8" value="">
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-2">
                                    Cornea
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" name="external_INPUT_9" value="">
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" name="external_INPUT_10" value="">
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-2">
                                    A-C
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" name="external_INPUT_11" value="">
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" name="external_INPUT_12" value="">
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-2">
                                    Iris
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" name="external_INPUT_13" value="">
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" name="external_INPUT_14" value="">
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-2">
                                    Pupil Size
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" name="external_INPUT_15" value="">
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" name="external_INPUT_16" value="">
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-2">
                                    Direct Reflex
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" name="external_INPUT_17" value="">
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" name="external_INPUT_18" value="">
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-2">
                                    Consensual
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" name="external_INPUT_19" value="">
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" name="external_INPUT_20" value="">
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-2">
                                    Near
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" name="external_INPUT_21" value="">
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" name="external_INPUT_22" value="">
                                </div>
                            </div><br>
                            <!--Notes-->
                            <div class="panel panel-default">
                                <div class="panel-heading"><label>Notes...</label></div>
                                <div class="panel-body">
                                    <textarea name="txtExternalNote" class="form-control">                                                                                            </textarea>
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
                                                <input type="checkbox" name="internal_INPUT_0" value="true"> DIR
                                            </label>
                                        </div>
                                    </div>
                                    <!--MIO-->
                                    <div class="row">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="internal_INPUT_1" value="true"> MIO
                                            </label>
                                        </div>
                                    </div>
                                    <!--BIO-->
                                    <div class="row">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="internal_INPUT_2" value="true"> BIO
                                            </label>
                                        </div>
                                    </div>
                                    <!--BIO Text-->
                                    <div class="row">
                                        <input type="text" class="form-control" name="internal_INPUT_3" value="">
                                    </div>
                                    <!--Volk-->
                                    <div class="row">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="internal_INPUT_4" value="true"> Volk
                                            </label>
                                        </div>
                                    </div>
                                    <!--Volk Text-->
                                    <div class="row">
                                        <input type="text" class="form-control" name="internal_INPUT_5" value="">
                                    </div>
                                </div>
                                <!--Col 1 left-->
                                <div class="col-md-5 col-md-offset-1">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label class="checkbox-inline">
                                            </label>
                                        </div>
                                        <div class="col-md-5" style="text-align: center; background-color: #9d9d9d;">
                                            <label>OD</label>
                                        </div>
                                        <div class="col-md-5" style="text-align: center; background-color:#dddddd;">
                                            <label>OS</label>
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-2" style="padding: 0px;">
                                            <label>lens</label>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="internal_INPUT_6" value="">
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="internal_INPUT_7" value="">

                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-2" style="padding: 0px;">
                                            <label>Vitreous</label>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="internal_INPUT_8" value="">
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="internal_INPUT_9" value="">

                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-2" style="padding: 0px;">
                                            <label>Depth/Cup</label>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="internal_INPUT_10" value="">
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="internal_INPUT_11" value="">

                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-2" style="padding: 0px;">
                                            <label>Margin</label>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="internal_INPUT_12" value="">
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="internal_INPUT_13" value="">

                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-2" style="padding: 0px;">
                                            <label>Crescents</label>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="internal_INPUT_14" value="">
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="internal_INPUT_15" value="">
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-2" style="padding: 0px;">
                                            <label>A/V Crossing</label>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="internal_INPUT_16" value="">
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="internal_INPUT_17" value="">
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-2" style="padding: 0px;">
                                            <label>Calibre-Ratio</label>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="internal_INPUT_18" value="">
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="internal_INPUT_19" value="">

                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-2" style="padding: 0px;">
                                            <label>Gen/App/Fun</label>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="internal_INPUT_20" value="">
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="internal_INPUT_21" value="">

                                        </div>
                                    </div><br>
                                </div>
                                <!--Col 2 right-->
                                <div class="col-md-5">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label class="checkbox-inline">
                                            </label>
                                        </div>
                                        <div class="col-md-5" style="text-align: center; background-color: #9d9d9d;">
                                            <label>OD</label>
                                        </div>
                                        <div class="col-md-5" style="text-align: center; background-color:#dddddd;">
                                            <label>OS</label>
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-2" style="padding: 0px;">
                                            <label>ONH Cup</label>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="internal_INPUT_22" value="">
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="internal_INPUT_23" value="">

                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-2" style="padding: 0px;">
                                            <label>Disc Color</label>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="internal_INPUT_24" value="">
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="internal_INPUT_25" value="">

                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-2" style="padding: 0px;">
                                            <label>Lamina Crib.</label>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="internal_INPUT_26" value="">
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="internal_INPUT_27" value="">

                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-2" style="padding: 0px;">
                                            <label>Area/Cup</label>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="internal_INPUT_28" value="">
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="internal_INPUT_29" value="">

                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-2" style="padding: 0px;">
                                            <label>Macula</label>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="internal_INPUT_30" value="">
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="internal_INPUT_31" value="">

                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-2" style="padding: 0px;">
                                            <label>Course</label>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="internal_INPUT_32" value="">
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="internal_INPUT_33" value="">

                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-2" style="padding: 0px;">
                                            <label>Periphery</label>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="internal_INPUT_34" value="">
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="internal_INPUT_35" value="">
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-12" style="padding: 0px;">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="internal_INPUT_36" value="">
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
                                    <input id="txtGtts" type="text" onfocus="setCurentTime('txtInternalNow');" data-toggle="modal" data-target="#gttsList" class="form-control" name="internal_INPUT_37" value="">
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
                                                        <!--pull data from table-->
                                                    </select><br/>
                                                    <button type="button" id="btnSelectGtts" onclick="fillTxtGtts('Select')" data-dismiss="modal" class="btn btn-success form-control mediumText">Select</button><br/><!--todo apply js functions-->
                                                    <label>Add new to list</label>
                                                    <input type="text" id="txtNewGtts" class="form-control" name="internal_INPUT_38"><br/>
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
                                    <input id="txtInternalNow" type="time" class="form-control mediumText" onfocus="setCurentTime('txtInternalNow')" name="internal_INPUT_39" value="">
                                </div>
                            </div><br>
                            <!--ROw 3 chk-->
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="internal_INPUT_40" value="true">
                                        Patient counselled about the effect of Mydriatic
                                    </label>
                                </div>
                            </div>
                            <!--Notes-->
                            <div class="panel panel-default">
                                <div class="panel-heading"><label>Notes...</label></div>
                                <div class="panel-body">
                                    <textarea name="txtInternalNote" class="form-control">                                                                                            </textarea>
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
                                            <input type="time" class="form-control mediumText" id="txtTonometryNow" onfocus="setCurentTime('txtTonometryNow')" name="tonometry_INPUT_1" value="">
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
                                            <input type="text" class="form-control mediumText" name="tonometry_INPUT_2" value="">
                                        </div>
                                    </div><br>
                                    <!--OS-->
                                    <div class="row">
                                        <div class="col-md-3 col-md-offset-3">
                                            <label>OS</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control mediumText" name="tonometry_INPUT_3" value="">
                                        </div>
                                    </div><br>
                                    <!--Type-->
                                    <div class="row">
                                        <div class="col-md-3 col-md-offset-3">
                                            <label>Type</label>
                                        </div>
                                        <div class="col-md-6">
                                            <select class="form-control mediumText" name="tonometry_SELECT_0">
                                                <option value="1" selected="">Option 1</option>
                                                <option value="2">Option 2</option>
                                                <option value="3">Option 3</option>
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
                                                Alcaine gtts
                                            </label>
                                        </div>
                                    </div><br>
                                    <!--Time todo remove from db-->

                                    <!--Pachymetry-->
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label>Pachymetry</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control largeText" name="tonometry_INPUT_6" value="">
                                        </div>
                                    </div><br>
                                    <!--Topography-->
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label>Topography</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control largeText" name="tonometry_INPUT_7" value="">
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
                                    <input type="text" class="form-control" name="tonometry_INPUT_8" value="">
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
                                            <input type="text" class="form-control mediumText" name="tonometry_INPUT_10" value="">
                                        </div>
                                        <!--Temp-->
                                        <div class="col-md-1">
                                            <label>Temp</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control mediumText" name="tonometry_INPUT_11" value="">
                                        </div>
                                        <!--Total-->
                                        <div class="col-md-1">
                                            <label>Total</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control mediumText" name="tonometry_INPUT_12" value="">
                                        </div>
                                    </div><br>
                                    <!--OS-->
                                    <div class="row">
                                        <!--Nasal-->
                                        <div class="col-md-1">
                                            <label>OS Nasal</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control mediumText" name="tonometry_INPUT_13" value="">
                                        </div>
                                        <!--Temp-->
                                        <div class="col-md-1">
                                            <label>Temp</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control mediumText" name="tonometry_INPUT_14" value="">
                                        </div>
                                        <!--Total-->
                                        <div class="col-md-1">
                                            <label>Total</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control mediumText" name="tonometry_INPUT_15" value="">
                                        </div>
                                    </div><br>
                                    <!--OU, CSF-->
                                    <div class="row">
                                        <div class="col-md-1">
                                            <label>OU Total</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control mediumText" name="tonometry_INPUT_16" value="">
                                        </div>
                                        <div class="col-md-1 col-md-offset-4">
                                            <label>CSF</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control mediumText" name="tonometry_INPUT_17" value="">
                                        </div>
                                    </div><br>
                                    <!--Amsler-->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label>Amsler Grid</label>
                                        </div>
                                        <!--Input OD-->
                                        <div class="col-md-5">
                                            <label>OD</label>
                                            <input type="text" class="form-control" name="tonometry_INPUT_18" value="">

                                        </div>

                                        <!--Input OS-->

                                        <div class="col-md-5">
                                            <label>OS </label>
                                            <input type="text" class="form-control" name="tonometry_INPUT_19" value="">

                                        </div>

                                    </div>
                                </div>
                            </div><br>
                            <!--Notes-->
                            <div class="panel panel-default">
                                <div class="panel-heading"><label>Notes...</label></div>
                                <div class="panel-body">
                                    <textarea name="txtTonometryNote" class="form-control">                                                                                            </textarea>
                                </div>
                            </div>
                        </div>
                        <!--todo add Diagnosys pnl if required-->
                    </div>

                </div><!--/.Panel Body -->
                <div class="panel-footer"> <!--Footer code if any--></div>
            </div><!--/.Panel-->
        </div><!--Col-lg-12-->
    </div><!--/.row-->
</div>
<script src="../../Local/Resources/bower_components/jquery/dist/jquery.min.js"></script>
<!--#Wrapper-->
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
    /*http://stackoverflow.com/questions/5004233/jquery-ajax-post-example-with-php
    * todo Save data using AJAX post request and shoe success message using responce use link for solution */
    /*Set curent time function*/
    function setCurentTime(txtID){
        var txtNow = document.getElementById(txtID);
        var now = new Date();
        var min = ("0"+ now.getMinutes()).slice(-2);
        var hr = ("0"+ now.getHours()).slice(-2);
        txtNow.value = hr +":"+ min;
    }
</script>