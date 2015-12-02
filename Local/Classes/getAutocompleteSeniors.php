<?php
/**
 * Created by PhpStorm.
 * User: Dushyant
 * Date: 2015-11-09
 * Time: 2:59 AM
 */
include('config.inc');
?>
<?php
 $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS,DB_NAME);
 $term=$_GET["term"];
 $term = mysqli_real_escape_string($term);
 $query=mysqli_query($con,"SELECT location_id, name FROM tbl_locations WHERE name like '%".$term."%' AND type = 'Senior home' order by name ");
 $json=array();

    while($location=mysqli_fetch_array($query)){
        $json[]=array(
            'value'=> $location["name"],
            'label'=> $location["name"]
        );
    }

 echo json_encode($json);

?>

