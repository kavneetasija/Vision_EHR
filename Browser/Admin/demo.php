<?php
include("header.php");
include("sidebar.php");
?>
    <form role="form" id="frm">
        <div class="form-group">
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Locations</h1>
                    </div>
                </div>

                     <!--Row 1-->
                <div class="row">
                    <!--r1 c1-->
                    <div class="col-md-6">
                        <label>First Name<span style="color: red">*<?php if(isset($errorMsg)){echo" ".($errorMsg["txtStudentFirstName"]);} ?></span></label>
                        <input placeholder="Student's first name"  onfocus="this.placeholder = ' '" onblur="this.placeholder='Student\'s first name'"  >
                    </div>
                    <!--r1 c2-->
                    <div class="col-md-6">
                        <label>Last Name<span style="color: red">*<?php if(isset($errorMsg)){echo" ".($errorMsg["txtStudentLastName"]);} ?></span></label>
                        <input placeholder="Student's last name"  onfocus="this.placeholder = ' '" onblur="this.placeholder='Student\'s last name'"  >
                    </div>
                </div>
                <!--Row 2-->
                <div class="row">
                    <!--r2 c1-->
                    <div class="col-lg-3">
                        <label>OHIP Number<span style="color: red">*<?php if(isset($errorMsg)){echo" ".($errorMsg["txtOhipNumber"]);} ?></span></label>
                        <input type="text" value="<?php echo "$txtOhipNumber"; ?>" placeholder="Max 10 Digits"  onfocus="this.placeholder = ' '" onblur="this.placeholder='Max 10 Digits'" >
                    </div>
                    <div class="col-lg-2">
                        <label>OHIP Version Code<span style="color: red">*<?php if(isset($errorMsg)){echo" ".($errorMsg["txtVersionCode"]);} ?></span></label>
                        <input value="<?php echo "$txtVersionCode"; ?>" placeholder="Max 2 alphabets"  onfocus="this.placeholder = ' '" onblur="this.placeholder='Max 2 alphabets'"  >
                    </div>
                    <!--r2 c2-->
                    <div class="col-lg-2">
                        <label>Date of birth<span style="color: red">*<?php if(isset($errorMsg)){echo" ".($errorMsg["drpDob"]);}?></span></label>
                        <select>
                            <?php
                            $months = array(
                                0 => "MM",
                                1 => "January",
                                2 => "February",
                                3 => "March",
                                4 => "April",
                                5 => "May",
                                6 => "June",
                                7 => "July",
                                8 => "August",
                                9 => "September",
                                10 => "October",
                                11 => "November",
                                12 => "December"
                            );
                            foreach ($months as $key => $option){
                                if($key == $drpDobMonth){
                                    echo "<option value = '$key' selected>$option</option>";
                                }
                                else{
                                    echo "<option value = '$key'>$option</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <!--r2 c3-->
                    <div class="col-lg-1">
                        <label></label>
                        <select>
                            <?php
                            for($index = 0; $index <= 31; $index++)
                            {
                                if($index == 0){
                                    echo"<option selected>DD</option>";
                                }
                                elseif($index == $drpDobDate){
                                    echo"<option value = '$index' selected>$index</option>";
                                }
                                else{
                                    echo "<option value= '$index'>$index</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <!--r2 c4-->
                    <div class="col-lg-2">
                        <div class="form-group">
                            <label> </label>
                            <select>
                                <?php
                                for($startYear = (date("Y") - 19); $startYear <= date("Y"); $startYear++)
                                {
                                    if($startYear == (date("Y") - 19)){
                                        echo"<option value='$startYear' selected>YYYY</option>";
                                    }
                                    elseif($startYear == $drpDobYear){
                                        echo "<option value= '$startYear' selected>$startYear</option>";
                                    }
                                    else{
                                        echo "<option value= '$startYear'>$startYear</option>";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <!--r2 c5-->
                    <div class="col-lg-2">
                        <div class="form-group">
                            <label>Gender<span style="color: red">*<?php if(isset($errorMsg)){echo" ".($errorMsg["rdbGender"]);} ?></span></label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="rdbGender" id="optionsRadios1" tabindex="6" value="M" <?php if($rdbGender == "M"){echo "checked=checked";} ?> >Male
                                </label>
                                <label>
                                    <input type="radio" name="rdbGender" id="optionsRadios1" tabindex="6" value="F" <?php if($rdbGender == "F"){echo "checked=checked";} ?> >Female
                                </label>
                            </div>
                        </div>
                    </div>

                </div>
                <!--Row 3-->
                <div class="row">
                    <!--r3 c1-->
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label>Address<span style="color: red">*<?php if(isset($errorMsg)){echo" ".($errorMsg["txtAddress"]);} ?></span></label>
                            <input type="text" class="form-control" name="txtAddress" id="txtAddress" tabindex="7" value="<?php echo "$txtAddress"; ?>">
                        </div>
                    </div>
                    <!--r3 c2-->
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label>City<span style="color: red">*<?php if(isset($errorMsg)){echo" ".($errorMsg["txtCity"]);} ?></span></label>
                            <input type="text" class="form-control" name="txtCity" id="txtCity" tabindex="8" value="<?php echo "$txtCity"; ?>">
                        </div>
                    </div>
                    <!--r3 c3-->
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label>Province<span style="color: red">*<?php if(isset($errorMsg)){echo" ".($errorMsg["txtProvince"]);} ?></span></label>
                            <input type="text" class="form-control" name="txtProvince" id="txtProvince" tabindex="9" value="<?php echo "$txtProvince"; ?>">
                        </div>
                    </div>
                    <!--r3 c4-->
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label>Postal Code<span style="color: red">* <?php if(isset($errorMsg)){echo" ".($errorMsg["txtPostalCode"]);} ?></span></label>
                            <input type="text" class="form-control" name="txtPostalCode" id="txtPostalCode" tabindex="10" value="<?php echo "$txtPostalCode"; ?>">
                        </div>
                    </div>
                </div>
                <!--Row 4-->
                <div class="row">
                    <!--r4 c1-->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label>Teacher's Name</label>
                            <input type="text" class="form-control" name="txtTeacherName" id="txtTeacherName" tabindex="11" value="<?php echo "$txtTeacherName"; ?>">
                        </div>
                    </div>
                    <!--r4 c2-->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label>Grade</label>
                            <input type="text" class="form-control" name="txtGrade" id="txtGrade" tabindex="12" value="<?php echo "$txtGrade"; ?>">
                        </div>
                    </div>
                    <!--r4 c3-->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label>Classroom<span style="color: red">* <?php if(isset($errorMsg)){echo" ".($errorMsg["txtClassroom"]);} ?></span></label>
                            <input type="text" class="form-control" name="txtClassroom" id="txtClassroom" tabindex="13" value="<?php echo "$txtClassroom" ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
<?php  include("footer.php"); ?>