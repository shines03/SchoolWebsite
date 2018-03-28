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
	$sql='SELECT * FROM table_name';
	$retval=mysql_query($sql,$conn);
	if(!$retval)
	{
		die('Could not get data: '. mysql_error());
	}
	while($row=mysql_fetch_array($retval, MYSQL_ASSOC))
	{
		echo "$row['column_name']";
	}
	mysql_close($conn);
?>

<!--
	<p id="NoticeBoard"><img src="new.gif" height="40px" width="40px"></img>There will be casual leave tomorrow. Come to the school on the day you like.<a href="#">Read more...</a></p><hr>
	<p id="NoticeBoard"><img src="new.gif" height="40px" width="40px"></img>There will be casual leave tomorrow. For furthur queries contact to the office.<a href="#">Read more...</a></p><hr>
	<p id="NoticeBoard">There will be casual leave tomorrow.<a href="#">Read more...</a></p><hr>
	<p id="NoticeBoard">There will be casual leave tomorrow. For furthur queries contact to the office.<a href="#">Read more...</a></p><hr>
	<p id="NoticeBoard">There will be casual leave tomorrow. For furthur queries contact to the office.<a href="#">Read more...</a></p><hr>
	<p id="NoticeBoard">There will be casual leave tomorrow.<a href="#">Read more...</a></p><hr>
	<p id="NoticeBoard">There will be casual leave tomorrow.<a href="#">Read more...</a></p>
	-->
<!--
	<tr>
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-12">
							<img src="a.jpg" class="img-thumbnail" height="120px"; width="120px";>
						</div>
						<div class="col-lg-9 col-md-9 col-sm-12" id="panel-elements">
							<a>A Sudha cafe is going to be opened in the school premise. Prices will be off by 50% on the opening day.</a>
						</div>
					</div>	
					</tr>
					<hr>
-->