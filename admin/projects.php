
<h2>Enter the details about the project</h2>

<?php include'boot_head.php' ?>
<form action="project_add2.php" method="POST">
	<div class="form-group">
		<label for="name">Project Name:</label>
		<input type="text" class="form-control" id="name" name="name" placeholder="Enter the name" required/>
	</div>
	<div class="form-group">
		<label for="start_date">Start Date:</label>
		<input type="text" class="form-control" id="start_date" name="start_date" placeholder="Enter the start_Date" required/>
	</div>
	<div class="form-group">
		<label for="end_date">End date:</label>
		<input type="text" class="form-control" id="end_date" name="end_date" placeholder="Enter the end date" required/>
	</div>
	<div class="form-group">
		<label for="image">Image:</label>
		<input type="text" class="form-control" id="image" name="image" placeholder="Enter the full address of the image" required/>
	</div>
	<div class="form-group">
		<label for="description">Description:</label>
		<input type="text" class="form-control" id="description" name="description" placeholder="Enter the details" required/>
	</div>
	<div>
		<button type="submit" class="btn btn-default">Submit</button>
	</div>
</form>