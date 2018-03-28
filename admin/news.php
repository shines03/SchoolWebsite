<?php include'boot_head.php' ?>
<a href="#add" data-toggle="collapse"><h3>Add a news</h3></a>
<form id="add" action="news_add2.php" method="POST" class="collapse">
  <div class="form-group">
    <label for="newsNo">News No:</label>
    <input type="text" class="form-control" id="newsNo" name="newsNo" placeholder="Enter the news number">
  </div>
  <div class="form-group">
    <label for="about">About:</label>
    <input type="text" class="form-control" id="about" name="about" placeholder="Enter the title for the news">
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
<a href="#delete" data-toggle="collapse"><h3>Delete a news</h3></a>
<form id="delete" action="news_delete2.php" method="POST" class="collapse">
  <div class="form-group">
    <label for="newsNo">News No:</label>
    <input type="text" class="form-control" id="newsNo" name="newsNo" placeholder="Enter the news number">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>