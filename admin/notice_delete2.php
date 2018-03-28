<?php
include'connection.php';
if(isset($_POST['noticeNo']))
{
	if(!get_magic_quotes_gpc())
	{
		$notice_no=$_POST['noticeNo'];
		$notice_no=strtoupper($notice_no);
	}
else 
	die('format error'.mysql_error());
	$db_name="vsvm";
	mysql_select_db($db_name);
	$doExist="SELECT * FROM `notices` WHERE `notice_no`='$notice_no'";
	$exist=mysql_query($doExist,$conn);
	if($exist)
	{
		$sql="DELETE FROM `notices` WHERE `notice_no`='$notice_no'";
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
		$error="Notice no could not found".mysql_error();
		echo '<script type="text/javascript">alert("!!! '. $error .'!!!");</script>';
	}
	include 'notices.php';
}
mysql_close($conn);
?>