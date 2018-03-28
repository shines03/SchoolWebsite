<?php
include'connection.php';
if(isset($_POST['quote']) && isset($_POST['file']) && isset($_POST['noticeNo']))
{
	if(!get_magic_quotes_gpc())
	{
		$notice_no=$_POST['noticeNo'];
		$notice_no=strtoupper($notice_no);
		$quotation=$_POST['quote'];
		$file=$_POST['file'];
		$entry=date('Y-m-d H:i:s');
	}
else 
	die('format error'.mysql_error());
	$db_name="vsvm";
	mysql_select_db($db_name);
	$sql="INSERT INTO `notices` 
		(`notice_id`, `notice_no`, `quotation`, `file`, `date_entered` ) 
		VALUES (NULL, '$notice_no', '$quotation', '$file', '$entry')";
	$retval=mysql_query($sql,$conn);
	if(!$retval)
	{
		$error='Die could not be inserted: '.mysql_error();
		echo '<script type="text/javascript">alert("!!! '. $error .'!!!");</script>';
	}
	else
	{
		$msg='Data entered successfully';
		echo '<script type="text/javascript">alert("!!! '. $msg .'!!!");</script>';
	}
	include 'notices.php';
	mysql_close($conn);
}

?>