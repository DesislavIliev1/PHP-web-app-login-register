<?php
 // getting the data from the input and store it in vars
 if( $_SERVER['REQUEST_METHOD'] === 'POST'){
    $email = $_POST['email'];
    $password =  $_POST['password'];
    

    try{
        require_once 'connection.php';
        require_once 'login_model.php';
        require_once 'login_controller.php';
        require_once 'login_view.php';

        $errors = [];
          // check if the input is empty 
            if(is_input_empty($email , $password,)){
                $errors["empty_input"] = "Fill in all fields!";

            }
             // storing the data from the profile in vars
            $result = get_email($con , $email);
            $user_info = get_username($con, $email);
            $phone_info = get_phone($con, $email);
            
           // check if email is wrong
            if(is_email_wrong($result)){
                $errors["login_incorrect"] = "Invalid login info!";
            }
          // check if the email and pass are wrong
            if(!is_email_wrong($result) && is_password_wrong($password, $result["password"])){
                $errors["login_incorrect"] = "Invalid login info!";
            }
            

            require_once 'config_session.php';
            //check if the array with errors is empty
            if($errors){
                $_SESSION["errors_login"] = $errors;
                header('Location: login.php');
                die();
            }
            //creating the new session with profile id
            $newSessionId = session_create_id();
            $sessionId = $newSessionId . "_" . $result["id"];
            session_id($sessionId);

             

            $_SESSION["user_id"] = $result["id"];
            //Sanitize user inputs to prevent XSS (Cross-Site Scripting) attacks
            $_SESSION["user_email"] = htmlspecialchars($result["email"]);
            $_SESSION["user_name"] = htmlspecialchars($user_info["user_name"]);
            $_SESSION["password"] = htmlspecialchars($pass_info["password"]);
            $_SESSION["phone"] = htmlspecialchars($phone_info["phone"]);

            $_SESSION["last_regeneration"] = time();
            

            header("Location: index.php?login=success");
            $con = null;
            $stmt = null;


            die();



    }catch(PDOException $e){
        die("Query failed: " .$e->getMessage());

    }
 }else{
    header('Location: login.php');
     die();
    }