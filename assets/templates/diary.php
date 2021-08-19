<?php
$uid = $_SESSION["UID"];
$query = "Select `diary` from users where id='$uid'";
$diary = mysqli_query($con, $query);
?>

<div class="box-container" style="overflow : hidden;">
  <form action="./?mydiary" method="POST">
      <textarea name="diary" id="diary" placeholder="Wow this is amazing">
        
      </textarea>
  </form>
</div>

<?php
require 'footer.php';
?>