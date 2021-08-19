<?php require "assets/config.php";

if(isset($_POST['signin'])!=null){
    $email = isset($_POST['email'])?addslashes(strip_tags(trim($_POST['email']))):null;
    $password = isset($_POST['password'])?addslashes(strip_tags(trim($_POST['password']))):null;

    if ($email==null || $password==null) {
        session_destroy();
        $backto = "./?msg=Invalid Credentials&status=error";
    }else {
        $sql = "Select * FROM `users` WHERE `email`='$email'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        if($row['id']!=null){
            if (password_verify($password, $row['password'])){
                $_SESSION['UID'] = $row['id'];
                $msg = "LogIn Successful";
                $backto = "./?msg=$msg&mydiary";
            }else{
                $msg = "Wrong Password";
                $backto = "./?msg=$msg";
            }
        }
        else{
            $msg = "Entered Email is not registered, Signup first";
            $backto = "./?msg=$msg";
        }
    }
}else {
    session_destroy();
    $msg = isset($_GET["msg"])?$_GET["msg"]:"Logged Out.";
    $backto = "./?msg=$msg";
}

if ($backto!=null) {
    ?>
    <script type="text/javascript">
      window.location="<?php echo $backto; ?>"
    </script>
    <?php
  }else {
    echo "LOST IN SPACE";
  }
  ?>
  