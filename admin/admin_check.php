<?php
include'connection.php';
if(isset($_POST['user']) && isset($_POST['pwd']))
{
	$dbname='vsvm';
	mysql_select_db($dbname);
	$sql='SELECT * FROM admin';
	$retval=mysql_query($sql,$conn);
	if(!$retval)
		die('Data could not be fetched');
	$row=mysql_fetch_array($retval,MYSQL_ASSOC);
	if(@$row[userId]==$_POST['user'] && @$row[password]==$_POST['pwd'])
		include "admin_tasks.php";
	else
	{	
		echo '<script type="text/javascript">alert("!!! Incorrect UserId or Password. !!!");</script>';
		include "admin.php";
	}
	mysql_close($conn);
}
?>