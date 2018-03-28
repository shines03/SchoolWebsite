<?php
if(isset($_POST['album_no']) && isset($_POST['image_id']))
{
	$album_no=$_POST['album_no'];
	$album_no=strtoupper($album_no);
	$image_id=$_POST['image_id'];
	$image_id=strtoupper($image_id);
	include'connection.php';
	$db_name="vsvm";
	mysql_select_db($db_name);
	$sql="DELETE FROM ".$album_no." WHERE image_id='$image_id'";
	$retval=mysql_query($sql,$conn);
	if($retval)
	{
		
		$msg='Data deleted Successfully';
		echo '<script type="text/javascript">alert("!!! '. $msg .'!!!");</script>';
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