<?php
$uid = $_SESSION["UID"];
$query = "Select * from users where id='$uid'";
$diary = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($diary);
?>
<div class="logout"><img src="assets/images/logout.png" onclick="logout()" alt=""></div>
<div class="box-container" style="overflow : hidden;">
  <form action="./?mydiary" method="POST">
      <input type="text" id="hiddeninput" name="hiddeninput" value="set" style="display : none;" >
      <textarea name="diary" id="diary" placeholder="Enter Your text here"
      onchange="javascript:this.form.submit()" ><?php
          if($row['diary'] != NULL){
            echo $row['diary'];}
        ?></textarea>
  </form>
</div>

<script type="text/javascript">
  function logout(){
    window.location="./logout.php";
  }
</script>

<?php
require 'footer.php';
?>