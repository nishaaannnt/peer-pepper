<?php 
echo'
<nav class="navbar-dark navbar-expand-lg " style="background-color:#1b3058">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Peer Pepper</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Profile</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Categories
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Engineering</a></li>
                  <li><a class="dropdown-item" href="#">Commerce</a></li>
                  <li><a class="dropdown-item" href="#">Bsc</a></li>
                  <li><a class="dropdown-item" href="#"> Management</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Other</a></li>
                </ul>
              </li>
              
            </ul>
            <div class="mx-2">
            </div>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-success" type="submit">Search</button>
            </form>
            <div class="mx-2">
            <button class="mx-1 btn btn-outline-success">LogIn</button>
            <button class="mx-1 btn btn-outline-success">SignIn</button>
          </div>
          </div>
        </div>
      </nav>'
      ?>