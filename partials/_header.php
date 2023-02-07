<?php 
session_start();

echo'
<nav class="navbar-dark navbar navbar-expand-lg text-light" style="background-color:#f25a1d">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Peer Pepper</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Profile</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="index.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Categories
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="threads.php?catid=1">Engineering</a></li>
                  <li><a class="dropdown-item" href="threads.php?catid=2">Commerce</a></li>
                  <li><a class="dropdown-item" href="threads.php?catid=3">Bsc</a></li>
                  <li><a class="dropdown-item" href="threads.php?catid=4"> Management</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Other</a></li>
                </ul>
              </li>
              
            </ul>
            <div class="mx-2">
            </div>
';  
             
             //CHANGING NAVBAR AS PER LOGIN OR NOT

            if(isset($_SESSION['loggedin'])&&$_SESSION['loggedin']==true){
             echo' <div class="mx-3 my-0 p-0">
              <p class="p-0 m-0">Welcome '.$_SESSION['username']. '</p>
              </div>
              <button class="mx-1 btn btn-outline-warning"><a style="text-decoration: none;color:#fff;" href="partials/_logout.php">Log Out</a></button>'; 
            }
            else{
              echo'
              <div class="mx-2">
              <button class="mx-1 btn btn-outline-warning"><a style="text-decoration: none;color:#fff;" href="login.php">Log In</a></button>
              <button class="mx-1 btn btn-outline-warning"><a style="text-decoration: none;color:#fff;" href="signup.php">SignUp</a></button>
              </div>';
            }
            echo'
            </div>
        </div>
      </nav>';





//ALERT FOR SIGNIN OR LOGIN
      if(isset($_GET['signup'])&&$_GET['signup']=="true"){
        echo'
        <div class="alert alert-success alert-dismissible fade show my-0" role="alert">
              <strong class="text-dark">Success!</strong> You can now login.
              <button type="button" class="close bg-dark" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        ';
      }
      else if(isset($_GET['signup'])&&$_GET['signup']=="false")
      { 
        $prob=$_GET['error'];
          echo'
          <div class="alert alert-warning alert-dismissible fade show my-0" role="alert">
                <strong class="text-dark">Failed!</strong>' .$prob. '
                <button type="button" class="close bg-dark" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
          ';
      }
      if(isset($_GET['login'])&&$_GET['login']=="true"){
        echo'
        <div class="alert alert-success alert-dismissible fade show my-0" role="alert">
              <strong class="text-dark">Success!</strong> You are loggedin.
              <button type="button" class="close bg-dark" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        ';
      }
      else if(isset($_GET['login'])&&$_GET['login']=="false")
      { 
        $prob=$_GET['error'];
          echo'
          <div class="alert alert-warning alert-dismissible fade show my-0" role="alert">
                <strong class="text-dark">Failed!</strong>' .$prob. '
                <button type="button" class="close bg-dark" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
          ';
      }
      ?>