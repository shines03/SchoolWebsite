<?php
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['image']) && isset($_POST['subject']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$image=$_POST['image'];
	$subject=$_POST['subject'];
	include'connection.php';
	$db_name="vsvm";
	mysql_select_db($db_name);
	$sql="INSERT INTO faculty (faculty_id,name,email,image,subject)VALUES(NULL,'$name','$email','$image','$subject')";
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
	echo '<script>
				window.location.href = "faculties.php";
				</script>';
}
?>