<div class="animated fadeIn">
<div class="row" id="panel" >
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="mainPanelBody">
	<div class="panel custompanel"> 
	<div class="panel-heading">Recent</div>
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainPanelTabs">
				<span class="fa fa-angle-double-down fa-border" style="font-size:150%;"></span>
		</button>
	</div>

	<div class="panel-body">
	<div class="collapse navbar-collapse" id="mainPanelTabs">
		<ul class="nav nav-pills nav-justified notifs">
			<li class="active" ><a href="#news" data-toggle="tab" style="border-radius:0px;">News
					</a></li>
			<li><a href="#events" data-toggle="tab">Events
				</a></li>
			<li><a href="#achievements" data-toggle="tab" style="border-radius:0px;">Success
				</a></li>
		</ul>
	<div class="tab-content">
		<div class="tab-pane fade in active" id="news">
		<br>
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
						$sql='SELECT pic,about,content FROM news ORDER BY news_id DESC LIMIT 5';
						$retval=mysql_query($sql,$conn);
						if(!$retval)
						{
							die('Could not get data: '. mysql_error());
						}
						while($row=mysql_fetch_array($retval, MYSQL_ASSOC))
						{
							$pic=$row['pic'];
							$about=$row['about'];
							$content=$row['content'];
							echo "<tr>
								 <div class='row'>
									<div class='col-lg-3 col-md-3 col-sm-12'>
										<img src='$pic' class='img-thumbnail' height='120px' width='120px'>
									</div>
									<div class='col-lg-9 col-md-9 col-sm-12' id='panel-elements'>
										<a href='$content'>$about</a>
									</div>
								</div>	
								</tr>
								<hr>";
						}
						//mysql_close($conn);
					?>
				</tbody>
			</table>
		</div>
		</div>
		<div class="tab-pane fade" id="events">
		<br>
		<div class="table-responsive">
			<table class="table table-hover" style="font-family:tahoma; font-size:14px;">
				<tbody>
					<?php
						$sql='SELECT pic,about,content FROM events ORDER BY event_id DESC LIMIT 5';
						$retval=mysql_query($sql,$conn);
						if(!$retval)
						{
							die('Could not get data: '. mysql_error());
						}
						while($row=mysql_fetch_array($retval, MYSQL_ASSOC))
						{
							$pic=$row['pic'];
							$about=$row['about'];
							$content=$row['content'];
							echo "<tr>
								 <div class='row'>
									<div class='col-lg-3 col-md-3 col-sm-12'>
										<img src='$pic' class='img-thumbnail' height='120px' width='120px'>
									</div>
									<div class='col-lg-9 col-md-9 col-sm-12' id='panel-elements'>
										<a href='$content'>$about</a>
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
		<div class="tab-pane fade" id="achievements">
		<br>
		<div class="table-responsive">
			<table class="table table-hover" style="font-family:tahoma; font-size:14px; font-size:14px;">
				<tbody>
					<tr>
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-12">
							<img src="c.jpg" class="img-thumbnail" height="120px;" width="120px;">
						</div>
						<div class="col-lg-9 col-md-9 col-sm-12" id="panel-elements">
							<a>A Sudha cafe is going to be opened in the school premise. Prices will be off by 50% on the opening day.</a>
						</div>
					</div>	
					</tr>
					<hr>
					<tr>
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-12">
							<img src="c.jpg" class="img-thumbnail" height="120px;" width="120px;">
						</div>
						<div class="col-lg-9 col-md-9 col-sm-12" id="panel-elements">
							<a>A Sudha cafe is going to be opened in the school premise. Prices will be off by 50% on the opening day.</a>
						</div>
					</div>
					</tr>
					<hr>
					<tr>
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-12">
							<img src="c.jpg" class="img-thumbnail" height="120px;" width="120px;">
						</div>
						<div class="col-lg-9 col-md-9 col-sm-12" id="panel-elements">
							<a>A Sudha cafe is going to be opened in the school premise. Prices will be off by 50% on the opening day.</a>
						</div>
					</div>
					</tr>
					<hr>
					<tr>
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-12">
							<img src="c.jpg" class="img-thumbnail" height="120px;" width="120px;">
						</div>
						<div class="col-lg-9 col-md-9 col-sm-12" id="panel-elements">
							<a>A Sudha cafe is going to be opened in the school premise. Prices will be off by 50% on the opening day.</a>
						</div>
					</div>
					</tr>
					<hr>
				</tbody>
			</table>
		</div>
		</div>
	</div>
	</div>
</div>
</div>
</div>
</div>
</div>