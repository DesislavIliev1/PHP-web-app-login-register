<?php

//check if input is empty 
function is_input_empty(string $name , string $email ,string $password, $phone){
    if(empty($name) || empty($email) || empty($password) || empty($phone)){
        return true;
    }else{
        return false;
    }

}

//check if email is invalid 
function is_email_invalid(string $email){
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        return true;
    }else{
        return false;
    }

}

//check if username is taken 
function is_username_taken(object $con ,string $name){

  if(get_username($con,  $name)){
    return true;

}else{
    return false;
}


}

//check if email is already registered
function is_email_registered(object $con ,string $email){
    if(get_email($con, $email)){
        return true;
    
    }else{
        return false;
    }

}

// creating user 
function create_user(object $con,string $name , string $email ,string $password, $phone){
    set_user( $con,$name , $email , $password, $phone);

}