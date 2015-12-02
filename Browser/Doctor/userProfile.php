<?php
/**
 * Created by PhpStorm.
 * User: Dushyant
 * Date: 2015-11-02
 * Time: 11:44 PM
 */
/*Update user info here*/
?>
<?php
//include header and sidebar
include("header.php");
include("sidebar.php");
?>
<form role="form" id="frm" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <div class="form-group">
        <div id="page-wrapper">
            <!--Notifications-->
            <?php
            if(isset($notifications['addUserSuccess'])){
                echo "<div class='row'>
                                <div class='alert alert-success alert-dismissable'>
                                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>$notifications[addUserSuccess]
                                </div>
                              </div>";
            }
            if(isset($notifications['addUserError'])){
                echo "<div class='row'>
                                <div class='alert alert-danger alert-dismissable'>
                                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>$notifications[addUserError]
                                </div>
                              </div>";
            }
            ?>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">User Profile</h1>
                </div>
            </div>
            <!--Add user-->
            <div class="row">
                <div class="panel panel-primary">
                    <div class="panel-heading" >
                        <!--todo add user name from session-->
                        <label>User Name</label>
                    </div>
                    <div class="panel-body">
                        <!--First name & Last name-->
                        <div class="row">
                            <div class="col-md-6">
                                <label>First Name</label>
                                <input type="text" class="form-control" name="txtFirstName">
                            </div>
                            <div class="col-md-6">
                                <label>Last Name</label>
                                <input type="text" class="form-control" name="txtLastName">
                            </div>
                        </div>
                        <!--email & Password-->
                        <div class="row">
                            <div class="col-md-6">
                                <label>E-mail</label>
                                <input type="text" class="form-control" name="txtEmail">
                            </div>
                            <div class="col-md-6">
                                <label>Password</label>
                                <input type="text" class="form-control" name="txtPassword">
                            </div>
                        </div><br/>
                        <!--Submit btn-->
                        <div class="row">
                            <div class="col-md-offset-10 col-md-2">
                                <button type="submit" class="btn btn-success" value="submit" name="btnSubmit">Create User</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</form>
<?php  include("footer.php"); ?>
