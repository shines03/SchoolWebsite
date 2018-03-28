<?php include'boot_head.php' ?>
<form action="faculty_add2.php" method="POST">
	<div class="form-group">
		<label for="name">Name:</label>
		<input type="text" class="form-control" id="name" name="name" placeholder="Enter the name" required/>
	</div>
	<div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter the email">
  </div>
  <div class="form-group">
    <label for="image">Image:</label>
    <input type="text" class="form-control" id="image" name="image" placeholder="Enter the full address of image">
  </div>
  <div class="form-group">
    <label for="subject">Subject:</label>
    <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter the subject">
  </div>
	<div>
		<button type="submit" class="btn btn-default">Submit</button>
	</div>
</form>