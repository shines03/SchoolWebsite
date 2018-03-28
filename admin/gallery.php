<?php include'boot_head.php' ?>

<!-- Creating Albums-->
<a href="#add_album" data-toggle="collapse"><h3>Add an album</h3></a>
<form id="add_album" action="album_add2.php" method="POST" class="collapse">
  <div class="form-group">
    <label for="album_no">Album No:</label>
    <input type="text" class="form-control" id="album_no" name="album_no" placeholder="Enter the album number">
  </div>
  <div class="form-group">
    <label for="album_name">Name:</label>
    <input type="text" class="form-control" id="album_name" name="album_name" placeholder="Enter the title for the album">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
<br>
<a href="#delete_album" data-toggle="collapse"><h3>Delete an album</h3></a>
<form id="delete_album" action="album_delete2.php" method="POST" class="collapse">
  <div class="form-group">
    <label for="album_no">Album No:</label>
    <input type="text" class="form-control" id="album_no" name="album_no" placeholder="Enter the album number">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
<br>
<!-- Pics uploading in albums -->
<a href="#add_image" data-toggle="collapse"><h3>Add an image</h3></a>
<form id="add_image" action="image_add2.php" method="POST" class="collapse">
<div class="form-group">
    <label for="album_no">Album No:</label>
    <input type="text" class="form-control" id="album_no" name="album_no" placeholder="Enter the album number">
  </div>
  <div class="form-group">
    <label for="image_id">Id:</label>
    <input type="text" class="form-control" id="image_id" name="image_id" placeholder="Enter the Id for the image">
  </div>
  <div class="form-group">
    <label for="address">Address:</label>
    <input type="text" class="form-control" id="address" name="address" placeholder="Enter the full address of the image file">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
<br>
<a href="#delete_image" data-toggle="collapse"><h3>Delete an image</h3></a>
<form id="delete_image" action="image_delete2.php" method="POST" class="collapse">
<div class="form-group">
    <label for="album_no">Album No:</label>
    <input type="text" class="form-control" id="album_no" name="album_no" placeholder="Enter the album number">
  </div>
  <div class="form-group">
    <label for="image_id">Id:</label>
    <input type="text" class="form-control" id="image_id" name="image_id" placeholder="Enter the Id of the image">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>