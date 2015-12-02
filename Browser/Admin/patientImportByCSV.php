<?php
/**
 * Created by PhpStorm.
 * User: Dushyant
 * Date: 2015-11-09
 * Time: 12:45 AM
 */
//todo Can not include two class so make import function in location
require_once('../../Local/Classes/class.Location.inc');
require_once('../../Local/Classes/config.inc');
$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS,DB_NAME);
if (!$con) {
    die("Database connection failed: " .mysqli_error($con) );
}
?>
<?php
extract($_POST);
//Get location name to display on load
 $location = new Location();
    $result = $location->getAllLocationsById($LocationID);
    $selectedLocation = mysqli_fetch_assoc($result);
    if(isset($btnSubmit)){
        $file = $_FILES['file']['tmp_name'];
        $handle = fopen($file, "r");
        $c = 0;

        while(($csv = fgetcsv($handle,",")) !== false)
        {
            $firstName = $csv[0];
            $lastName = $csv[1];
            $ohipNumber = $csv[2];
            $ohipVersion = $csv[3];
            $birthDate = $csv[4];
            $gender = $csv[5];
            $address = $csv[6].",".$csv[7].",".$csv[8].",".$csv[9];
            $type = "Student";
            $sqlImport ="INSERT INTO tbl_patients (location_id,first_name,last_name,OHIP_number,OHIP_virsion,birth_date,gender,address,type)
                          VALUES ('$selectedLocation[location_id]','$firstName','$lastName','$ohipNumber','$ohipVersion','$birthDate','$gender','$address','$type')";
            $result = mysqli_query($con,$sqlImport);
            $c = $c + 1;
        }

        if($result){
            return "You database has imported successfully. You have inserted ". $c ." recoreds";
        }else{
            return "Sorry! There is some problem.";
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
    <link href="../../Local/Resources/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../Local/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../Local/Resources/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
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
                        <h3 class="panel-title">Select .csv file to import data at <b><?php echo $selectedLocation['name'];?></b></h3>
                    </div>
                    <div class="panel-body">

                        <fieldset>
                            <div class="form-group">
                                <label class="control-label">Select File</label>
                                <input type="file" class="btn btn-primary" name="file" accept=".csv">
                            </div>
                            <div class="form-group">
                                <button id="btnSubmit" name="btnSubmit" value="submit" type="submit" class="btn btn-success">Import</button>
                                <button id="btnClose" type="button" class="btn btn-danger" onclick="closeWindow()">Close</button>
                            </div>
                        </fieldset>

                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<script>
    function closeWindow(){
        window.close();
    }
</script>
<!-- jQuery -->
<script src="../../Local/Resources/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../../Local/Resources/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../../Local/dist/js/sb-admin-2.js"></script>
</body>