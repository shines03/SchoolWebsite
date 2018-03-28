<?php
if(isset($_POST['album_no']))
{
	$album_no=$_POST['album_no'];
	$album_no=strtoupper($album_no);
	include'connection.php';
	$db_name="vsvm";
	mysql_select_db($db_name);
	$sql="DELETE FROM albums WHERE album_no='$album_no'";
	$sql1="DROP TABLE ".$album_no;
	$retval=mysql_query($sql,$conn);
	if($retval)
	{
		$retval1=mysql_query($sql1,$conn);
		if($retval1)
		{
			$msg='Data Deleted Successfully';
			echo '<script type="text/javascript">alert("!!! '. $msg .'!!!");</script>';
		}

	}
	else
	{
			$error='Die could not be deleted: '.mysql_error();
			echo '<script type="text/javascript">alert("!!! '. $error .'!!!");</script>';
	}
	echo '<script>
				window.location.href = "gallery.php";
				</script>';
}
?>