<?php 
//Path from this page to the site root.
$path_to_root = '..';
//Title of this page.
$page_title = 'Renata';
require $path_to_root . '/library/start_page.inc';
require $path_to_root . '/library/header.inc';
require $path_to_root . '/library/left_nav.inc';
?>
<div id="center_region">
  <h1>Dog profile: Renata</h1>
  <p>Here is Renata.</p>
  <p><img src="renata.jpg" alt="Renata"></p> 
  <h2>Comments</h2>
  <?php
  if( file_exists('renata_comments.txt') ) {
    readfile('renata_comments.txt');
  }
  else {
    print '<p>There are no comments yet.</p>';
  }
  ?>
  <h2>Add a comment</h2>
  <form action="save-renata-comment.php" method="post">
    <p>
      <textarea rows="3" cols="30" name="comment"></textarea>
    </p>
    <p>
      <button type="submit">Save</button>
    </p>
  </form>
  <p><a href="index.php">Back to the dog list</a></p>
</div>
<?php
require $path_to_root . '/library/footer.inc';
require $path_to_root . '/library/end_page.inc';
?>
