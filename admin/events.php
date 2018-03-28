<?php include'boot_head.php' ?>
<a href="#add" data-toggle="collapse"><h3>Add an event</h3></a>
<form id="add" action="events_add2.php" method="POST" class="collapse">
  <div class="form-group">
    <label for="eventNo">Event No:</label>
    <input type="text" class="form-control" id="eventNo" name="eventNo" placeholder="Enter the event number">
  </div>
  <div class="form-group">
    <label for="about">About:</label>
    <input type="text" class="form-control" id="about" name="about" placeholder="Enter the title for the event">
  </div>
  <div class="form-group">
    <label for="image">Image:</label>
    <input type="text" class="form-control" id="image" name="image" placeholder="Enter the full address of the image file">
  </div>
  <div class="form-group">
    <label for="content">Content:</label>
    <input type="text" class="form-control" id="content" name="content" placeholder="Enter the content">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
<br>
<a href="#delete" data-toggle="collapse"><h3>Delete an event</h3></a>
<form id="delete" action="events_delete2.php" method="POST" class="collapse">
  <div class="form-group">
    <label for="eventNo">Event No:</label>
    <input type="text" class="form-control" id="eventNo" name="eventNo" placeholder="Enter the event number">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>