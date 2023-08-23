<?php

// getting information from input and stored it in vars
if( $_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone']; 


    try{
        include 'connection.php';
        include 'edit_model.php';
        include 'edit_controller.php';
        require_once 'register_model.php';
        require_once 'register_controller.php';

        // array that will store all the errors
        $errors = [];
       
        // check if input is empty 
        if(is_edit_input_empty($name ,$email , $phone)){
            $errors["empty_input"] = "Fill in all fields!";

        }
        // check if username is atleast 6 chars 
        if(strlen($name) < 6 ){
            $errors["too_short"] = "Username must be atleast 6 characters!";
        }
        
        // check if email is valid 
        if(is_email_invalid($email)){
            $errors["invalid_email"] = "Invalid email used!";

        }

        // check if username is already taken  
        if(is_username_taken($con ,$name)){
            $errors["Taken_username"] = "Username already taken!";

        }

        // check if email is already registered  
        if(is_email_registered( $con , $email)){
            $errors["Email_used"] = "Email already registered!";

        }

        require_once 'config_session.php';

        // check if error aray is empty  
        if($errors){
            $_SESSION["errors_register"] = $errors;
            header('Location: edit_profile.php');
            die();
        }
        include_once 'profile_inc.php';

        // if we pass the check update information in db
        update_user($con ,$name , $email , $phone);
        
       // reload the page to index.php
        header("Location: index.php");
        
        // shut down the connection and the statement
        $con = null;
        $stmt = null;


        die();

     
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
}else{
    //if dont pass the checks get error message and stay on edit page
     header('Location: edit.php');
     die();
}