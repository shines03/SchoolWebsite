<?php
include'connection.php';
if(isset($_POST['about']) && isset($_POST['image']) && isset($_POST['newsNo']) && isset($_POST['content']))
{
	if(!get_magic_quotes_gpc())
	{
		$news_no=$_POST['newsNo'];
		$news_no=strtoupper($news_no);
		$about=$_POST['about'];
		$image=$_POST['image'];
		$entry=date('Y-m-d H:i:s');
		$content=$_POST['content'];
	}
else 
	die('format error'.mysql_error());
	$db_name="vsvm";
	mysql_select_db($db_name);
	$sql="INSERT INTO `news` 
		(`news_id`, `news_no`, `about`, `pic`, `content`, `data_entered` ) 
		VALUES (NULL, '$news_no', '$about', '$image','$content','$entry')";
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
	include 'news.php';
	mysql_close($conn);
}

?>