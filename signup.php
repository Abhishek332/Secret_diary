<?php require "config.php";

if(isset($_POST['signup'])!=null){
    $email = isset($_POST['s-email'])?addslashes(strip_tags(trim($_POST['s-email']))):null;
    $password = isset($_POST['s-password'])?addslashes(strip_tags(trim($_POST['s-password']))):null;

    if ($email==null || $password==null) {
        session_destroy();
        header("Location : ./index.php");
    }else {

        // Check whether this email exists
        $query = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($con, $query);
        $numExistRows = mysqli_num_rows($result);
        if($numExistRows > 0){
            // echo "<script>alert('Email Already Used Please Use a Different One');</script>";
            // header("Location : ./index.php");
            ?>
            <script type="text/javascript">
                alert('Email Already Used Please Use a Different One');
                window.location="../index.php";
            </script>
           <?php 
        }
        else{
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users ( email, password) VALUES ('$email', '$hash')";
            $result = mysqli_query($con, $sql);
            if ($result){
                ?>
            <script type="text/javascript">
                alert('Register Successful, you can now login');
                window.location="../index.php";
            </script>
           <?php 
            }
        }
    }

}
            

