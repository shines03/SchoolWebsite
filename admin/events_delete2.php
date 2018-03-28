<?php
include'connection.php';
if(isset($_POST['eventNo']))
{
	if(!get_magic_quotes_gpc())
	{
		$event_no=$_POST['eventNo'];
		$event_no=strtoupper($event_no);
	}
else 
	die('format error'.mysql_error());
	$db_name="vsvm";
	mysql_select_db($db_name);
	$doExist="SELECT * FROM `events` WHERE `event_no`='$event_no'";
	$exist=mysql_query($doExist,$conn);
	if($exist)
	{
		$sql="DELETE FROM `events` WHERE `event_no`='$event_no'";
		$retval=mysql_query($sql,$conn);
		if(!$retval)
		{
			$error='Die could not be deleted: '.mysql_error();
			echo '<script type="text/javascript">alert("!!! '. $error .'!!!");</script>';
		}
		else
		{
			$msg='Data deleted successfully';
			echo '<script type="text/javascript">alert("!!! '. $msg .'!!!");</script>';
		}
	}
	else
	{
		$error="Event no could not found".mysql_error();
		echo '<script type="text/javascript">alert("!!! '. $error .'!!!");</script>';
	}
	include 'events.php';
}
mysql_close($conn);
?>