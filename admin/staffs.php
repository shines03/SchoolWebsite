<?php include'boot_head.php' ?>
<form action="staff_add2.php" method="POST">
	<div class="form-group">
		<label for="name">Name:</label>
		<input type="text" class="form-control" id="name" name="name" placeholder="Enter the name" required/>
	</div>
	<div class="form-group">
    <label for="contact">Contact:</label>
    <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter the contact">
  </div>
  <div class="form-group">
    <label for="image">Image:</label>
    <input type="text" class="form-control" id="image" name="image" placeholder="Enter the full address of image">
  </div>
  <div class="form-group">
    <label for="post">Post:</label>
    <input type="text" class="form-control" id="post" name="post" placeholder="Enter the post">
  </div>
	<div>
		<button type="submit" class="btn btn-default">Submit</button>
	</div>
</form>