<?php
if(isset($_POST['name']) && isset($_POST['contact']) && isset($_POST['image']) && isset($_POST['post']))
{
	$name=$_POST['name'];
	$contact=$_POST['contact'];
	$image=$_POST['image'];
	$post=$_POST['post'];
	include'connection.php';
	$db_name="vsvm";
	mysql_select_db($db_name);
	$sql="INSERT INTO staff (staff_id,name,contact,image,post)VALUES(NULL,'$name','$contact','$image','$post')";
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
				window.location.href = "staffs.php";
				</script>';
}
?>