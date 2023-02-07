<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Peer Peppers</title>
    <link rel="stylesheet" href="style.css">
</head>
<!-- THIS PAGE IS TO SHOW ALL THE  COLLECTION THREADS -->

<body>

    <?php include 'partials/_header.php'?>
    <?php include 'partials/_dbconnect.php';?>

    <!-- SHOWING INFORMATION ABOUT CATEGORIES -->

    <?php
        $id=$_GET['catid'];
        $sql="SELECT * FROM `categories` WHERE category_id=$id";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result)){
            $catname=$row['category_name'];
            $desc=$row['category_desc'];
        }
   ?>

   <!-- CODE TO GET THE DISCUSSION INPUT FROM USER NOT DISPLAYED -->
    <?php 
    $alert=false;
       $method=$_SERVER['REQUEST_METHOD'];
        if($method=='POST'){
            $t_title=$_POST['title'];
            $t_desc=$_POST['description'];
            $sql="INSERT INTO `threads` (`thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES ('$t_title', '$t_desc', '$id', '1', current_timestamp())";
            $result=mysqli_query($conn,$sql);

            $alert=true;
            if($alert){
                echo '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong class="text-dark">Question Added! </strong>You can see your question below.
                        <button type="button" class="close bg-warning" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                ';

            }
        }
   ?>

   <!-- DISPLAYING THE DISCUSSIONS TOPIC-->
   <?php
        echo '
            <div class="container bg-secondary mb-1" style="min-height:300px;">
                <h1 class="py-5 m-3 mt-5 forum-head display-4"><b>'.$catname.' Section </b></h1>

            <h4 class="py-3 m-1">'.$desc.'</h4>
            </div>';
   ?>

    <!-- START DISCUSSION SECTION -->
    <!-- IF LOGGEN IN THEN CAN INPUT DISCUSSION -->
    <?php

    if(isset($_SESSION['loggedin'])&&$_SESSION['loggedin']==true){
    echo '<div class="container p-5">
        <hr>
        <form action="'. $_SERVER["REQUEST_URI"].' " method="post">
            <h2 class="mt-4 mb-4">START A DISCUSSION</h2>
            <div class="form-group mt-3">
                <label for="title" class="mb-2">Question Title</label>
                <input type="text" class="form-control" name="title" id="title"
                placeholder="Please keep your title very clear.">
            </div>
            <div class="form-group mt-3">
                <label for="desc" class="mb-2">Elaborate your Question</label>
                <textarea name="description" class="form-control" id="description" cols="30" rows="6"
                placeholder="Your Question"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
        <hr>
        <h1 class="mt-4 mb-4 text-center">DISCUSSIONS</h1>
        <hr>';
    }
    else{
        echo '<hr><div class="container my-5">
        <h1 class="mt-4 mb-4">START A DISCUSSION</h1>
        <h3 class="">Login to start a Discussion!</h3>
    </div><hr>';
    }
    ?> 
        
        <!-- ALL THE DISCUSSIONS -->
        <?php
        $id=$_GET['catid'];
        $sql="SELECT * FROM `threads` WHERE thread_cat_id=$id";
        $result=mysqli_query($conn,$sql);
        $noResult=true;
        while($row=mysqli_fetch_assoc($result)){
            $noResult=false;
            $ttitle=$row['thread_title'];
            $id=$row['thread_id'];
            $desc=$row['thread_desc'];
            $time=$row['timestamp'];
            $tuser_id=$row['thread_user_id'];
            $sql2="SELECT username FROM `users` WHERE sno='$tuser_id';";
            $result2=mysqli_query($conn,$sql2);
            $row2=mysqli_fetch_assoc($result2);
            $un=$row2['username'];
            echo '
            <div class="container med d-flex mt-2 bg-secondary">
                <img src="static/user.jpg" class="m-3" width="80px"alt="un">
                <div class="media-body my-3 w-100">
                    <p class="p-0 m-0"><b>by '.$un.'</b></p>
                    <div class="container mt-1 px-0" style="display:flex;justify-content:space-between;">
                        <h5><a class="text-light mt-2"href="thread.php?threadid='.$id.'">'.$ttitle.'</a></h5>
                        <p>'.$time.'</p>
                    </div>
                    <p>'.$desc.'</p>
                </div>
        </div>';
        }   

        if($noResult){
            echo '
                <h3 class="text-center text-light mt-5" >No Discussions yet. You can start your own!</h3>
            ';
        }
   ?>

        <?php include 'partials/_footer.php'?>

            <!-- JAVASCRIPT -->
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>

</html>