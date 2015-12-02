<?php
/**
 * Created by PhpStorm.
 * User: Dushyant
 * Date: 2015-10-30
 * Time: 2:48 PM
 */

require_once("../../Local/Classes/class.User.inc");
extract($_GET);

$user = new User();
//Check if action = delete is requested then delete data.
if($action == 'delete'){
    $user->deleteUserById($userID);
    //todo add message on delete.
}
//get query result to populate table
$userList = $user->readUsers();
if(isset($userEdit)){
    if($userEdit ==='true'){
        $notifications['editUserSuccess'] = "User successfully edited";
    }
    else{
        $notifications['editUserError'] = $userEdit;
    }
}

?>
<?php
include("header.php");
include("sidebar.php");
?>
<form role="form" id="frm" method="get">
    <div class="form-group">
        <div id="page-wrapper">
            <!--Notifications-->
            <?php
            if(isset($userEdit) && $userEdit==='true'){
                echo "<div class='row'>
                        <div class='alert alert-success alert-dismissable'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>$notifications[editUserSuccess]
                        </div>
                      </div>";
            }
            if(isset($userEdit) && $userEdit != 'true'){
                echo "<div class='row'>
                        <div class='alert alert-danger alert-dismissable'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>$notifications[editUserError]
                        </div>
                      </div>";
            }
            ?>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">User list</h1>
                </div>
            </div>
            <!--List of patients-->
            <div class="row" style="display: block;">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-10">
                                <label>
                                    List of users
                                </label>
                            </div>
                            <div class="col-md-2">
                                <a href="addUser.php"><button type="button" class="btn btn-success">Register new user</button></a>
                            </div>
                        </div>
                    </div>
                    <!--School patients-->
                    <div class="panel-body" id="pnlUserList">
                        <!--Responsive Data Table with pagination load table with ready information-->
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTableUserList">
                                <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Role</th>
                                    <th class="warning">Edit</th>
                                    <th class="danger">Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                while($row = mysqli_fetch_assoc($userList)) {
                                    echo "<tr>
                                                <td>$row[first_name]</td>
                                                <td>$row[last_name]</td>
                                                <td>$row[email]</td>
                                                <td><b>Work</b> ($row[work_phone]) | <b>Cell</b> ($row[cell_phone])</td>
                                                <td>$row[user_role]</td>
                                                <td><a href='editUser.php?userID=$row[user_id]'><button type='button' class='btn btn-success btn-circle'><i class='fa fa-edit'></i></button></a></td>
                                                <td><a href='userManager.php?action=delete&userID=$row[user_id]'><button type='button' class='btn btn-danger btn-circle'><i class='fa fa-times'></i></button></a></td>
                                          </tr>";
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<?php  include("footer.php"); ?>

