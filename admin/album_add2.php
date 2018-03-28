<?php
if(isset($_POST['album_name']) && isset($_POST['album_no']))
{
	$album=$_POST['album_name'];
	$album_no=$_POST['album_no'];
	$album_no=strtoupper($album_no);
	include'connection.php';
	$db_name="vsvm";
	mysql_select_db($db_name);
	$sql="INSERT INTO albums(album_id,album_no,album_name)VALUES(NULL,'$album_no','$album')";
	$sql1="CREATE TABLE ".$album_no."(image_no int unsigned primary key auto_increment not null, image_id varchar(15), address text(200))";
	$retval=mysql_query($sql,$conn);
	if($retval)
	{
		$retval1=mysql_query($sql1,$conn);
		if($retval1)
		{
			$msg='Data Entered Successfully';
			echo '<script type="text/javascript">alert("!!! '. $msg .'!!!");</script>';
		}
		else
		{
			$error='Die could not be inserted: '.mysql_error();
			echo '<script type="text/javascript">alert("!!! '. $error .'!!!");</script>';
		}
	}
	else
	{
			$error='Die could not be inserted: '.mysql_error();
			echo '<script type="text/javascript">alert("!!! '. $error .'!!!");</script>';
	}
	echo '<script>
				window.location.href = "gallery.php";
				</script>';
}
?>