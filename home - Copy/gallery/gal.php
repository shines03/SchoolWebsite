<?php
	include "../"."boot_head.php";
	include "../"."head.php";
	include "../"."navbar.php";
	echo" <link rel='stylesheet' href='styling_pics.css'>";
	echo "<div>";
	$servername="localhost";
	$user="root";
	$password="";
	$conn=mysql_connect($servername, $user, $password);
	if(!$conn)
	{
		die('Could not connect: '. mysql_error());
	}
	mysql_select_db('vsvm');
	$sql='SELECT * FROM albums ORDER BY album_id DESC';
	$retval=mysql_query($sql,$conn);
	if(!$retval)
	{
		die('Could not get data: '. mysql_error());
	}
	while($row=mysql_fetch_array($retval, MYSQL_ASSOC))
	{
		$album=$row['album_no'];
		$album=strtolower($album);
		$name=$row['album_name'];
		echo"<div id='heading'>$name</div><hr>";
		echo"<div class='row'>";
		$sql1='SELECT * FROM '.$album.' ORDER BY image_no DESC';
		$retval1=mysql_query($sql1,$conn);
		while($row1=mysql_fetch_array($retval1, MYSQL_ASSOC))
		{
			$pic=$row1['address'];
			echo "<div class='col-sm-12 col-md-4 col-xs-12' >
					<a href='$pic' target='blank'>
						<div>
							<img src='$pic' class='thumbnail' height='200px' width='300px' id='pic_blocks'>
						</div>
					</a>
				 </div>";
		}
		echo"</div><br>";
	}
	mysql_close($conn);
	echo "</div>";
	include "../"."footer.php";
?>