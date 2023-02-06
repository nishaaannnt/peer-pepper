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
<!-- THIS IS TO SHOW INDIVISUAL THREADS -->

<body>

    <?php include 'partials/_header.php'?>
    <?php include 'partials/_dbconnect.php';?>
    <div class="container ">

        <!-- GETTING INPUT FROM USER -->    
        <?php 
        $id=$_GET['threadid'];
    $alert=false;
       $method=$_SERVER['REQUEST_METHOD'];
        if($method=='POST'){
            $comment=$_POST['comment'];
            $sql="INSERT INTO `comments`(`comment_content`, `thread_id`, `comment_by`, `comment_time`) VALUES ('$comment','$id','0', current_timestamp())";
            $result=mysqli_query($conn,$sql);

            $alert=true;
            if($alert){
                echo '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong class="text-dark">Reply Added! </strong>You can see your question below.
                        <button type="button" class="close bg-warning" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                ';

            }
        } ?>

        <!-- DISPLAY ALL ABOUT THE QUESTION -->
        <?php
        $id=$_GET['threadid'];
        $sql="SELECT * FROM `threads` WHERE thread_id=$id";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result)){
            $ttitle=$row['thread_title'];
            $desc=$row['thread_desc'];
            $time=$row['timestamp'];

            echo '
            <div class="jumbotron jumbotron-fluid mt-5 p-5 bg-dark">
            <div class="container">
                <h1 class="display-4">'.$ttitle.'</h1>
                <p class="lead mt-4 mb-5 text-warning"> '.$desc.'</p>
                <hr>
                <p>Started on :'.$time.'</p>
            </div>
        </div>';
        }
        ?>




        <!-- FORM TO GET USER COMMENT -->
        <div class="container p-5">
            <hr>
            <form action="<?php echo $_SERVER['REQUEST_URI'] ;?>" method="post">
                <h1 class="mt-4 mb-4">REPLY</h1>
                <div class="form-group mt-3">
                    <label for="desc" class="mb-2">ENTER YOUR REPLY</label>
                    <textarea name="comment" class="form-control" id="comment" cols="30" rows="6"
                        placeholder="Your Reply"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
            <hr>

            <h1 class="text-center mt-3 mb-4">--- REPLIES ---</h1>
            <hr>

            <!-- DISPLAY THE REPLIES -->
            <?php
        $id=$_GET['threadid'];
        $sql="SELECT * FROM `comments` WHERE thread_id=$id;";
        $result=mysqli_query($conn,$sql);
        $noResult=true;
        while($row=mysqli_fetch_assoc($result)){
            $noResult=false;
            $comm=$row['comment_content'];
            $ctime=$row['comment_time'];
            echo '
            <div class="med d-flex mt-2 bg-secondary w-100">
                <img src="static/user.jpg" class="m-3" width="70px" alt="un">
                <div class="media-body m-3 w-100">
                    <div class="container" style="display:flex;justify-content:space-between;">
                    <h5><b>Anonymous User</b></h5> 
                    <p>'.$ctime.'</p>
                    </div>
                    <p>'.$comm.'</p>
                </div>
            </div>';
        }   

        if($noResult){
            echo '
                <h3 class="text-center text-light mt-5" >No Comments yet. You can write your own!</h3>
            ';
        }
   ?>

        </div>
    </div>

    <?php include 'partials/_footer.php'?>


    <!-- JAVASCRIPT -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
    </script>
</body>

</html>