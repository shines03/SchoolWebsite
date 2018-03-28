<?php
	include "boot_head.php";
?>
<?php include "head.php"?>
<?php include "navbar.php"?>
<div class='row'>
<div class='col-md-3 col-sm-12 col-xs-12'>

<div style="margin-top:20%; margin-bottom:10%;">
<div style="background-color:#FFFFFF; border:1px solid #CCC">
  <ul class="nav nav-pills nav-stacked sidebar">
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
						$sql='SELECT activity_no,about FROM activities ORDER BY activity_id';
						$retval=mysql_query($sql,$conn);
						if(!$retval)
						{
							die('Could not get data: '. mysql_error());
						}
						while($row=mysql_fetch_array($retval, MYSQL_ASSOC))
						{
							$activity_no=$row['activity_no'];
							$activity_no="#".$activity_no;
							$about=$row['about'];
							echo "<li><a href=$activity_no>$about</a></li>";
						}
						mysql_close($conn);
					?>
  </ul>
</div>
</div>
<script>
function selectside(no) {
  var $i=Number(no);
	$('.ul nav nav-pills nav-stacked sidebar li').attr('class','');
	$('.ul nav nav-pills nav-stacked sidebar li:nth-of-type('+$i+')').attr('class','active');
};
</script>

</div>
<div class='col-md-9 col-sm-12 col-xs-12'>
<div class="table-responsive">
			<table class="table table-hover" style="font-family:tahoma; font-size:14px;">
				<tbody>
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
						$sql='SELECT pic,about,content,activity_no FROM activities ORDER BY activity_id';
						$retval=mysql_query($sql,$conn);
						if(!$retval)
						{
							die('Could not get data: '. mysql_error());
						}
						while($row=mysql_fetch_array($retval, MYSQL_ASSOC))
						{
							$pic=$row['pic'];
							$pic=strtolower($pic);
							$about=$row['about'];
							$activity_no=$row['activity_no'];
							$content=$row['content'];
							echo "<tr>
									<div class='row'>
									<div id=$activity_no style='text-align:center;'>$about</div>
									</div>
								 <div class='row'>
									<div class='col-md-2 col-lg-2'>
									</div>
									<div class='col-lg-8 col-md-8 col-sm-12'>
										<img src='$pic' class='img-thumbnail' style='height:60%; width:100%;'>
									</div>
									<div class='col-md-2 col-lg-2'>
									</div>
								</div>
								<div class='row'>
									<div class='col-md-1 col-lg-1'>
									</div>
									<div class='col-lg-10 col-md-10 col-sm-12' id='panel-elements'>
										<p>$content</p>
									</div>
									<div class='col-md-1 col-lg-1'>
									</div>
								</div>	
							</tr>
							<hr>";
						}
						mysql_close($conn);
					?>
				</tbody>
				</table>
</div>
</div>
</div>
<?php include "footer.php";?>
