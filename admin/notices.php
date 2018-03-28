<?php include'boot_head.php' ?>
<a href="#add" data-toggle="collapse"><h3>Add a notice</h3></a>
<form id="add" action="notice_add2.php" method="POST" class="collapse">
  <div class="form-group">
    <label for="noticeNo">Notice No:</label>
    <input type="text" class="form-control" id="noticeNo" name="noticeNo" placeholder="Enter the notice number">
  </div>
  <div class="form-group">
    <label for="quote">Quotation:</label>
    <input type="text" class="form-control" id="quote" name="quote" placeholder="Enter the title for the notice">
  </div>
  <div class="form-group">
    <label for="file">File:</label>
    <input type="text" class="form-control" id="file" name="file" placeholder="Enter the full address of the file">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
<br>
<a href="#delete" data-toggle="collapse"><h3>Delete a notice</h3></a>
<form id="delete" action="notice_delete2.php" method="POST" class="collapse">
  <div class="form-group">
    <label for="noticeNo">Notice No:</label>
    <input type="text" class="form-control" id="noticeNo" name="noticeNo" placeholder="Enter the notice number">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>