<?php

// session_start();

  include("connection.php");
  include("functions.php");
  include("register_model.php");
  include("register_controller.php");
  

//getting data from the form and store it in vars
   
    if( $_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];

        try{

            require_once 'register_model.php';
            require_once 'register_controller.php';
            //array that stores errors
            $errors = [];
           
            //check if the input is empty
            if(is_input_empty($name ,$email , $password, $phone)){
                $errors["empty_input"] = "Fill in all fields!";

            }

             //check if the name and pass are atleast 6 chars
            if(strlen($name) < 6 || strlen($password) < 6){
                $errors["too_short"] = "Username and Password must be atleast 6 characters!";
            }
             
            //check if email is valid
            if(is_email_invalid($email)){
                $errors["invalid_email"] = "Invalid email used!";

            }
             //check if the username is taken
            if(is_username_taken($con ,$name)){
                $errors["Taken_username"] = "Username already taken!";

            }

             //check if the email is registered
            if(is_email_registered( $con , $email)){
                $errors["Email_used"] = "Email already registered!";

            }

            require_once 'config_session.php';
            //check if error array is empty
            if($errors){
                $_SESSION["errors_register"] = $errors;
                header('Location: register.php');
                die();
            }
   
            //creating user and store it in db
            create_user( $con, $name, $email, $password, $phone);

            header('Location: register.php?register=success');
            $con = null;
            $stmt = null;


            die();

          
          
        }catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }
    }else{
        // header('Location: register.php');
        // die();
    }
   