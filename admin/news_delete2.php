<?php
include'connection.php';
if(isset($_POST['newsNo']))
{
	if(!get_magic_quotes_gpc())
	{
		$news_no=$_POST['newsNo'];
		$news_no=strtoupper($news_no);
	}
else 
	die('format error'.mysql_error());
	$db_name="vsvm";
	mysql_select_db($db_name);
	$doExist="SELECT * FROM `news` WHERE `news_no`='$news_no'";
	$exist=mysql_query($doExist,$conn);
	if($exist)
	{
		$sql="DELETE FROM `news` WHERE `news_no`='$news_no'";
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
		$error="News no could not found".mysql_error();
		echo '<script type="text/javascript">alert("!!! '. $error .'!!!");</script>';
	}
	include 'news.php';
}
mysql_close($conn);
?>