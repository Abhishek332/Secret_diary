<?php require "assets/config.php";

if(isset($_POST['signup'])!=null){
    $email = isset($_POST['s-email'])?addslashes(strip_tags(trim($_POST['s-email']))):null;
    $password = isset($_POST['s-password'])?addslashes(strip_tags(trim($_POST['s-password']))):null;

    if($email==null || $password==null) {
        session_destroy();
        $msg = "Please Fill Input Fields";
        $backto = "./?msg=$msg";
    }else {
        // Check whether this email exists
        $query = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($con, $query);
        $numExistRows = mysqli_num_rows($result);
        if($numExistRows){
            $msg = "Email Already Used Please Use a Different One";
            $backto = "./?msg=$msg";
        }
        else{
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users ( email, password) VALUES ('$email', '$hash')";
            $result = mysqli_query($con, $sql);
            if ($result){
                $_SESSION['UID'] = mysqli_insert_id($con);
                $msg = "Registration Successful";
                $backto = "./?msg=$msg&mydiary"; 
            }
        }
    }

    if($backto != NULL){
?>
    <script>
        window.location="<?php echo $backto; ?>"
    </script>
<?php
    }

}