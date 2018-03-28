<div class="animated bounceInLeft">
<div id="noticeBoardHeading">NoticeBoard</div>
<div id="noticeBoardBody">
<marquee direction = "up" id="notices"><div onMouseOver="document.getElementById('notices').stop();" onMouseOut="document.getElementById('notices').start();">
<?php
	$servername="localhost";
	$user="root";
	$password="";
	$conn=mysql_connect($servername, $user, $password);
	if(!$conn)
	{
		die('Could not connect: '. mysql_error());
	}
	mysql_select_db('vsvm');
	$sql='SELECT quotation, file FROM notices ORDER BY notice_id DESC LIMIT 6';
	$retval=mysql_query($sql,$conn);
	if(!$retval)
	{
		die('Could not get data: '. mysql_error());
	}
	$count=0;
	while($row=mysql_fetch_array($retval, MYSQL_ASSOC))
	{	$title=$row['quotation'];
		$fileLocation=$row['file'];
		$count++;
		if($count<=2)
		{
			echo "<p id='NoticeBoard'><img src='notices/new.gif' height='40px' width='40px'></img>$title<a href='$fileLocation'>Read more...</a></p><hr>";
		}	
		else
			echo "<p id='NoticeBoard'>$title<a href='$fileLocation'>Read more...</a></p><hr>";
	}
	mysql_close($conn);
?>
	
</div>
</marquee>
</div>
</div>