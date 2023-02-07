<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Peer Pepper</title>
    <link rel="stylesheet" href="style.css">

</head>
<body> 

   <?php include 'partials/_header.php';?> 
  
   
   <div class="container p-5    ">
    <h1 class="text-center">Login</h1>
        <form action ="/pp/partials/_loginHandle.php" method="post">
            <div class="mb-3 text-center p-4">
                
                <input type="username" class="form-control m-4" id="username" placeholder="Username" name="username" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
  
                
                <input type="password" class="form-control m-4" placeholder="Password" id="password" name="password">

                <button type="submit" class="btn btn-primary w-50  mt-5">Submit</button>
            </div>
        </form>
    </div>
    
    
    <?php include 'partials/_footer.php';?> 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>