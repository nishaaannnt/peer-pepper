<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Peer Peppers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Peer Pepper</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<!-- NAVBAR -->
    <?php include 'partials/_header.php';?>
    <?php include 'partials/_dbconnect.php';?>

<!-- MAIN CONTAINER -->
    <div class="container">
        <h2 class="text-center my-3">Welcome to..</h2>
        <h1 class="text-center display-2">Peer Pepper</h1><br>
        <h3 class="text-center my-2">VISIT FORUM OF ANY BRANCH BELOW</h3>

        <!-- CATEGORIES -->
        <div class="row">
    <?php 
    $sql="SELECT * FROM `categories`";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['category_id'];
        $name=$row['category_name'];
        $desc=$row['category_desc'];
        echo ' 
            <div class="col-md-3 mb-5">
                <div class="card my-3" style="width: 18rem; min-height: 550px;">
                    <img src="static/'.$id.'.jpg" width="10" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">'. $name .'</h5>
                        <p class="card-text">'.$desc.'</p>
                        <a href="threads.php?catid='. $id .'" class="btn btn-warning">View Discussion</a>
                    </div>
                </div>
            </div>  ' ; 
    }
    ?>

        <!-- We will loop through the categories -->  
        </div>
    </div>

<!-- FOOTER -->
    <?php include 'partials/_footer.php'?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>