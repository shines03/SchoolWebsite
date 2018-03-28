<head>
<?php include'boot_head.php' ?>
<link="stylesheet" href="admin_custom.css">
</head>
<body id="main_body">
<div><a id="logout" href="#"><i class="fa fa-power-off" style="padding:10px;"></i>Logout</a></div><br><br>
<div style="text-align:center; font-size:30px; font-family:tahoma;">
	Welcome to the admin panel. 
</div>
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"></div>
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
<form id="login-form" style="padding:25px; margin-top:30%" action="admin_check.php" method="POST">
  <div class="form-group">
    <label for="user">UserId:</label>
    <input type="text" class="form-control" id="user" name="user">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" name="pwd">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"></div>
</body>