<?php
	include "../boot_head.php";
	include "../head.php";
	include "../navbar.php";
	echo" <link rel='stylesheet' href='styling.css'>";
	
	$servername="localhost";
	$user="root";
	$password="";
	$conn=mysql_connect($servername, $user, $password);
	if(!$conn)
	{
		die('Could not connect: '. mysql_error());
	}
	mysql_select_db('vsvm');
	$sql='SELECT * FROM faculty';
	$retval=mysql_query($sql,$conn);
	if(!$retval)
	{
		die('Could not get data: '. mysql_error());
	}
	echo"<div class='row'>";
	while($row=mysql_fetch_array($retval, MYSQL_ASSOC))
	{
		$name=$row['name'];
		$email=$row['email'];
		$pic=$row['image'];
		$subject=$row['subject'];
		$flag=$row['flag'];
		if($flag==1)
		echo "<div class='col-sm-12 col-md-4 col-xs-12' >
				<div id='blocks' align='center'>
					<img src='$pic' class='thumbnail' height='33%' width='75%'>
					<div style='font-weight:bold;'>$name</div>$email<br>$subject<br>
				</div>";
		echo "</div>";
	}
	echo"</div>";
	mysql_close($conn);
	include "../"."footer.php";
?>