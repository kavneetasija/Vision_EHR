<?php
	$q=$_GET['q'];
	$my_data=mysql_real_escape_string($q);
	$mysqli=mysqli_connect('localhost','root','dp1991dp','test') or die("Database Error");
	$sql="SELECT first_name FROM ehr_studentinfo WHERE first_name LIKE '%$my_data%' ORDER BY first_name";
	$result = mysqli_query($mysqli,$sql) or die(mysqli_error());
	
	if($result)
	{
		while($row=mysqli_fetch_array($result))
		{
			echo $row['first_name']."\n";
		}
	}
?>