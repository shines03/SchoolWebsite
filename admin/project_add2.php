<?php
if(isset($_POST['name']) && isset($_POST['start_date']) && isset($_POST['end_date']) && isset($_POST['image']) && isset($_POST['description']))
{
	echo "i'm in.";
	$name=$_POST['name'];
	$start_date=$_POST['start_date'];
	$end_date=$_POST['end_date'];
	$image=$_POST['image'];
	$desc=$_POST['description'];
	include 'connection.php';
	$dbname='vsvm';
	mysql_select_db($dbname);
	echo "i'm here.";
	$sql="INSERT INTO projects (project_id, name, start_date, end_date, image, description) VALUES (NULL,'$name','$start_date','$end_date','$image','$desc')";
	$retval=mysql_query($sql,$conn);
	if($retval)
	{
		$msg='Data Entered Successfully';
		echo '<script type="text/javascript">alert("!!! '. $msg .'!!!");</script>';
	}
	else
	{
		$error='Die could not be inserted: '.mysql_error();
		echo '<script type="text/javascript">alert("!!! '. $error .'!!!");</script>';
	}
	echo "<script> window.location.href = 'projects.php'; </script>";

}
?>