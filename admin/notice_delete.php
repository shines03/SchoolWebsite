<?php include'boot_head.php' ?>
<div>
<h2>Delete a notice to the notice board.</h2>
<form id="delete_notice" action="notice_delete2.php" method="POST">
  <div class="form-group">
    <label for="noticeNo">Notice No:</label>
    <input type="text" class="form-control" id="noticeNo" name="noticeNo" placeholder="Enter the notice number">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>