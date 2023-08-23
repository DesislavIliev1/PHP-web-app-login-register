 <?php 
 
 include_once 'config_session.php';
 include_once 'connection.php';

// include_once 'login_inc.php';
 include_once 'login_view.php';
 include_once 'profile_inc.php';

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
     
    <link rel="stylesheet" href="styles/profile.css">
    <link rel="stylesheet" href="styles/login_style.css">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand ms-5" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link ms-5" href="#">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link ms-5" href="edit_profile.php">Edit profile</a>
      </li>
      <li class="nav-item ms-5">
      <a href="login.php"> <button class="btn btn-danger ">Log out</button> </a>
      </li>
      
    </ul>
  </div>
</nav>

<div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-12 col-sm-8 col-md-6 m-auto">
                <div  id="swup"  class="card border-0 shadow transition-fade">
                    <div class="card-body">
                    <?php
    
    display_the_info()
    ?>


                    </div>
                </div>
            </div>
        <div>
</div>
    <!-- <div class="nav">
        <div class="logo">

        </div>
        <div class="right-links">
            <a href="edit_profile.php"> Edit profile</a>
            <a href="login.php"> <button class="btn btn-danger">Log out</button> </a>
        </div>
    </div>
    <h1>welcome </h1>
    <h2> -->
   
    

    <script
  src="https://code.jquery.com/jquery-3.7.0.min.js"
  integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>