<?php include "boot_head.php";?>
<?php include "head.php";?>
<?php include "navbar.php";?>

<div class='row'>
	<div class='col-md-1'>
	</div>
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
						$sql='SELECT pic FROM inheadlines ORDER BY headlines_id DESC';
						$retval=mysql_query($sql,$conn);
						if(!$retval)
						{
							die('Could not get data: '. mysql_error());
						}
						echo"<div class='row'>";
						while($row=mysql_fetch_array($retval, MYSQL_ASSOC))
						{
							$pic=$row['pic'];
							$randw=(rand(3,7)%10)*70;
							$randh=(rand(4,5)%10)*75;
							$randw=$randw."px";
							$randh=$randh."px";
							echo"<img src='$pic' style='width:$randw; height:$randh; padding:10px;'>";
						}
						echo"</div>";
						mysql_close($conn);
						?>
	<div class='col-md-1'>
	</div>
</div>
<?php include "footer.php"?>
