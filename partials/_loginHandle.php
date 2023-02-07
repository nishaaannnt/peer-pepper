<?php
    
    if($SERVER["REQUEST"]="POST"){
    include '_dbconnect.php';
    $username=$_POST['username'];
    $pass=$_POST['password'];

    $sql="SELECT * FROM `users` WHERE username='$username';";
    $result=mysqli_query($conn,$sql);
    $numRows=mysqli_num_rows($result);
    if($numRows==1){
        $row= mysqli_fetch_assoc($result);
        if($pass==$row['user_pass']){
            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['username']=$username;
            header("Location: /pp/index.php?login=true");
        }
        // echo "loggedin";
        else{
            $error='Wrong Password';
         header("Location: /pp/index.php?login=false&error=$error");
        }     
    }
    else{
        $error='Unable to login';
         header("Location: /pp/index.php?login=false&error=$error");
    }
    }
    
    ?>