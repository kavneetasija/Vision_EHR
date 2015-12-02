<?php
/**
 * Created by PhpStorm.
 * User: Dushyant
 * Date: 2015-04-29
 * Time: 4:00 PM
 */
session_destroy();
include_once('../Local/Classes/class.User.inc');
include_once('../Local/Classes/class.SessionManager.inc');
session_start();
?>
<?php
extract($_POST);


if(isset($btnSubmit)){
    //user object
    $user = new User();
    //session object
    $session = new SessionManager();
    $loginUser = $user ->authenticateUser(trim($txtEmail),trim($txtPassword));

    //redirecting user to dashboard logic
    if($loginUser['user_role'] == 'Doctor'){
        //Set login user session
       if($session->createUserSession($loginUser['user_id'],$loginUser['first_name'],$loginUser['user_role'])){
           //todo redirect doctors to Doctor's dashboard
           header('Location: Doctor/dashboard.php');
       }
    }
    elseif($loginUser['user_role'] == 'Admin'){
        //Set login user session
        if($session->createUserSession($loginUser['user_id'],$loginUser['first_name'],$loginUser['user_role'])){
            //todo redirect doctors to Doctor's dashboard
            header('Location: Admin/locationList.php');
        }
    }
    else{
        $errors['authentication']= $loginUser;
    }


}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--todo add meta content in include file to distribute in system pages -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Vision EHR System is a software designed for recording Eye health issues in kids.
    Software required for Mobile Eye Clinic (MEC) project run by Canadian Council of the Blind ">
    <meta name="Keywords" content="MEC, CCB, Canadian Council of the Blind, Mobile Eye Clinic">
    <meta name="author" content="Dushyant Patel">

    <title>MEC | Vision EHR System | Canadian Council of the Blind | Lions Club</title>

    <!-- Bootstrap Core CSS -->
    <link href="../Local/Resources/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../Local/Resources/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../Local/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../Local/Resources/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <!--Error notification-->
            <?php
                if(isset($errors['authentication'])){
                    echo "<div class=\"alert alert-danger\">
                               $errors[authentication]
                         </div>";
                }
            ?>
            <!--Login panel-->
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Log in to <i><?php echo NAME." ".VERSION; ?></i></h3>
                </div>
                <div class="panel-body">

                        <fieldset>
                            <div class="form-group">

                                <input class="form-control" name="txtEmail" id="txtEmail" value = "" type="text" placeholder="Email"  onfocus="this.placeholder = ' '" onblur="this.placeholder='Email'" >
                            </div>
                            <div class="form-group">
                                <input class="form-control"  name="txtPassword" id="txtPassword" type="password" placeholder="Password" onfocus="this.placeholder = ' '" onblur="this.placeholder =  'Password'">
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <button id="btnSubmit" name="btnSubmit" type="submit" class="btn btn-lg btn-success btn-block">Login</button>
                        </fieldset>

                </div>
            </div>
        </div>
    </div>
</div>
</form>
<!-- jQuery -->
<script src="../Local/Resources/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../Local/Resources/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../Local/Resources/bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../Local/dist/js/sb-admin-2.js"></script>
</body>

</html>
