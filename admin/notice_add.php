<?php include'boot_head.php' ?>
<div>
<h2>Add a notice to the notice board.</h2>
<form id="add_notice" action="notice_add2.php" method="POST">
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