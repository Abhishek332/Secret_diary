<?php
$uid = $_SESSION["UID"];
$query = "Select * from users where id='$uid'";
$diary = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($diary);
?>

<div class="box-container" style="overflow : hidden;">
  <form action="./?mydiary" method="POST">
      <textarea name="diary" id="diary" placeholder="Enter Your text here"
      onchange="javascript:this.form.submit()" ><?php
          if($row['diary'] != NULL)
            echo $row['diary'];
        ?></textarea>
  </form>
</div>

<?php
require 'footer.php';
?>