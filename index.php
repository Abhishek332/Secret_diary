<?php
require 'assets/config.php';
require 'assets/templates/header.php';

$showAlert = FALSE;
$source = "assets/templates/";
$filename = "mainlogin";

if (isset($_SESSION["UID"])!=null) {
  $uid = $_SESSION["UID"];
  // user loged in check time status and allow to move ahead
  if (isset($_GET)) {
    foreach ($_GET as $key => $valuein) {
      $param = $key;
      $value = $valuein;
    }
    
    switch ($param) {
      case 'mydiary':{
        $filename = "diary";
        $diary = isset($_POST['diary'])?addslashes(strip_tags(trim($_POST['diary']))):null;
        $query = "UPDATE `users` SET `diary`= '$diary' where `id` = '$uid'";
        $result = mysqli_query($con, $query);
      }
      break;
    }
  }
}

require "".$source.$filename.".php";

require 'assets/templates/footer.php';

if (isset($_GET["msg"])) {
  $showAlert = TRUE;
  $msg = isset($_GET['msg'])?addslashes(trim($_GET['msg'])):null;
}
if ($showAlert) {
?>
  <script type="text/javascript">
    alert('<?php echo $msg; ?>');
  </script>
<?php
}
?>