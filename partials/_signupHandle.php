<?php
    $error="false";
    if($SERVER["REQUEST"]="POST"){
        include '_dbconnect.php';
        $username=$_POST['username'];
        $user_email=$_POST['email'];
        $pass=$_POST['password'];
        $pass2=$_POST['password2'];

        //UNIQUE MAIL

        $exist="SELECT * FROM `users` WHERE user_email='$user_email';";
        $result=mysqli_query($conn,$exist);
        $numRows=mysqli_num_rows($result);
        if($numRows>0){
            $error="Email already in use";
            header("Location: /pp/index.php?signup=false&error=$error");
        }
        else{
            if($pass==$pass2){
                $hash =password_hash($pass, PASSWORD_DEFAULT);
                $sql="INSERT INTO `users` (`username`, `user_email`, `user_pass`, `timestamp`) VALUES ('$username', '$user_email', '$hash', current_timestamp());";
                $result=mysqli_query($conn,$sql);
                if($result){
                    $alert=true;
                    header("Location: /pp/index.php?signup=true");
                    exit();
                }
            }
            else{
                $error="Passwords do not match";
                header("Location: /pp/index.php?signup=false&error=$error");
            }
        }


    }

?>