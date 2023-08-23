<?php

include_once 'config_session.php';
include_once 'register_view.php';

// include_once "register_inc.php";
//    if($_SERVER['REQUEST_METHOD'] == 'POST'){
//     $username = $_POST['username'];
//     $email = $_POST['email'];
//     $phone = $_POST['phone'];
//     $password =  $_POST['password'];

//     if(!empty($username) && !empty($password) && !empty($email) && !empty($phone)){

//         //save to db
//         $user_id = random_num(20);
//         $query = "insert into users (user_id, user_name, email , password , phone) values ('$user_id' , '$username' , '$email' , '$password' , '$phone')";

//         mysqli_query($con , $query);
//         header("Location: login.php");


//     }else{
//         echo("please enter valid infomation");

//     }



//    }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regiser</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- <script defer src="https://unpkg.com/swup@4"></script> 
    <script defer src="/node_modules/swup/dist/Swup.modern.js"></script> -->
    <!-- <script defer src="main.js"></script> -->
    <link rel="stylesheet" href="styles/login_style.css">
</head>
<body class="body">
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-12 col-sm-8 col-md-6 m-auto">
                
                <div id="swup" class="card border-0 shadow transition-fade mb-5">
                    <div class="card-body">
                        <form class=""  action="register_inc.php" method="post">
                            <div class="text-center">
                                <svg class=" " xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                  </svg>
                            </div>
                            <div class="input-group">
                                 <input type="text" class="form-control my-4 py-2 reg-username" name="username" >
                                 <label for="" >Username</label>
                                </div>
                            <div class="input-group">
                                <input type="text" class="form-control my-4 py-2 reg-email" name="email" >
                                <label for="" >E-mail</label>
                            </div>
                            <div class="input-group">
                                <input type="text" class="form-control my-4 py-2 reg-phone" name="phone" >
                                <label for="" >Phone</label>

                            </div>
                            <div class="input-group">
                                <input type="password" class="form-control my-4 py-2 reg-password" name="password" >
                                <label for="" >Password</label>

                            </div>
                            <div class="text-center mt-3">
                                <button type="submit" class="btn btn-primary btn-register">Register</button>
                            </div>
                            
                            <div class="nav-link-container text-center">
                                <a class="nav-link link-primary my-3" href="login.php">Login</a>
                                <?php 
                           check_register_errors();
                        ?>
                            </div>
                           


                        </form>

                        
                    </div>
                </div>
              
            </div>
        </div>
    </div>

    <script
  src="https://code.jquery.com/jquery-3.7.0.min.js"
  integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <!-- <script src="main.js"><script>  -->
</body>
</html>