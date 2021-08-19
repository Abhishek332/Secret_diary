<?php
require 'assets/config.php';
require 'assets/templates/header.php';

$showAlert = FALSE;
$source = "assets/templates/";
$filename = "mainlogin";

if (isset($_SESSION["UID"])!=null) {
  // user loged in check time status and allow to move ahead
  if (isset($_GET)) {
    foreach ($_GET as $key => $valuein) {
      $param = $key;
      $value = $valuein;
    }
    
    switch ($param) {
      case 'mydiary':
        $filename = "diary";
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