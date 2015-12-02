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
                <label>Senior</label>
        </div>
        <div class="panel panel-body">
            <!--Set location-->
            <div class="row">
                <!--Senior locations-->
                <div class="col-md-12" id="txtSenior">
                    Register new patient at <input type="text" id ="txtSerLocation"  name="txtSerLocation" >
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
                                <input type="text" name="txtSerFirstName">
                            </div>
                            <div class="col-md-2"><label>Last Name</label></div>
                            <div class="col-md-4">
                                <input type="text" name="txtSerLastName">
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-2"><label>OHIP Number</label></div>
                            <div class="col-md-4">
                                <input type="text" maxlength="10" name="txtSerOhipNumber">
                            </div>
                            <div class="col-md-2"><label>Version Code</label></div>
                            <div class="col-md-4">
                                <input type="text" maxlength="2" name="txtSerOhipVirsion" size="3">
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-2"><label>Birth Date</label></div>
                            <div class="col-md-4">
                                <input type="text" class="txtBirthDate" name="txtSerBirthDate" >
                            </div>
                            <div class="col-md-2"><label>Gender</label></div>
                            <div class="col-md-4">
                                <lable class="radio-inline">
                                    <input type="radio" name="rdbSerGender" value="Male">Male
                                </lable>
                                <lable class="radio-inline">
                                    <input type="radio" name="rdbSerGender" value="Female">Female
                                </lable>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4"><label>Address</label></div>
                                    <div class="col-md-8">
                                        <input type="text" name="txtSerAddress">
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-4"><label>City</label></div>
                                    <div class="col-md-8">
                                        <input type="text" name="txtSerCity">
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-4"><label>Province</label></div>
                                    <div class="col-md-8">
                                        <select style="width: 70px;" name="drpSerProvince">
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
                                        <input type="text" maxlength="7" size="7" name="txtSerPostalCode">
                                    </div>
                                </div><br>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4"><label>Room/Appartment</label></div>
                                    <div class="col-md-8">
                                        <input type="text" name="txtSerRoom">
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
