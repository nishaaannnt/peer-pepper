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

   <?php include 'partials/_header.php'?> 
   
   <div class="container">
    <h1 class="text-center">Signup </h1>
        <form action ="" method="post">
            <div class="mb-3 col-md-6">
                <label for="username" class="form-label">Username</label>
                <input type="username" class="form-control" id="username" name="username" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3 col-md-6">
                <label for="adnum" class="form-label">Admission Number</label>
                <input type="adnum" class="form-control" id="adnum" name="adnum" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Provide a Valid Admission Number</div>
            </div>
            <div class="mb-3 col-md-6" >
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3 col-md-6">
                <label for="Password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="pwd">
            </div>
            <div class="mb-3 col-md-6">
                <label for="CPassword" class="form-label">Confirm Password</label>
                <input type="cpassword" class="form-control" id="password2" name="cpwd">
            </div>
            
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Agree to the <a href="">Community Guidelines<a></label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
    
    <?php include 'partials/footer.php'?> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>