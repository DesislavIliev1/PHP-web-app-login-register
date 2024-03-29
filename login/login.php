<?php 
// session_start();
  include_once 'config_session.php';
  include_once("connection.php");
  include_once("login_view.php");

   
   

//    $sql3 = "SELECT * FROM users  WHERE email = '$email' limit 1 ";
//     $stmt3 = $con->prepare($sql3);
//     if($_SERVER['REQUEST_METHOD'] == 'POST'){
//         $email = $_POST['email'];
//         $password =  $_POST['password'];
    
//         try{
//         if(!empty($name) && !empty($password) && !empty($email) && !empty($phone)){  

           

//             $stmt3->execute([$user_id, $name, $email, $phone , $password]);
           
//             echo "Insert successfully";
//             header('Location: login.php');
//         }else{
//             echo("please enter valid infomation");
//         }
//         }catch(PDOException $e){
//             echo "Error: " . $e->getMessage();
//         }
//     }


   


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
      <!-- bootstrap link -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
     
     <!-- <script defer src="/main.js"></script> -->
     <link rel="stylesheet" href="styles/login_style.css">
</head>
<body class="body">
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-12 col-sm-8 col-md-6 m-auto">
                <div  id="swup"  class="card border-0 shadow transition-fade">
                    <div class="card-body">
                        <form method="post" class="" action="login_inc.php">
                            <div class="text-center">
                                <svg class=" " xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                  </svg>
                            </div>
                            <div class="input-group">
                                 <input type="text" class="form-control my-4 py-2 log-username" name="email" required="required" >
                                 <label for="" >Email</label>
                                </div>
                            <div class="input-group">
                                <input type="password" class="form-control my-4 py-2 log-password" name="password" required="required" >
                                <label for="" >Password</label>
                            </div>
                           
                            
                            <div class="text-center mt-3">
                                <button type="submit" class="btn btn-primary btn-login m-3">Login</button>
                                
                            </div>
                            
                            <div class="nav-link-container text-center ">
                                <a class="nav-link link-primary  link " href="register.php">Register</a>
                                <?php
                                check_login_errors();
                                ?>
                            </div>
                            


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Jquery link -->
    <script
  src="https://code.jquery.com/jquery-3.7.0.min.js"
  integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <!-- swup links for page transitions -->
     <!-- <script src="https://unpkg.com/swup@4"></script> 
     <script> const swup = new Swup(); </script> -->
     <script src="/main.js"></script>
     <!-- link for alerts  -->
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   
</body>
</html>