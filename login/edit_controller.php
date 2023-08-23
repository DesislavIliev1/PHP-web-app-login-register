<?php

// function that update user info
function update_user( $con ,string $name , string $email , $phone){
    new_user_data( $con,$name , $email , $phone);

}

// function that check if the input for username , email and phone is empty
function is_edit_input_empty(string $name , string $email , $phone){
    if(empty($name) || empty($email) || empty($phone)){
        return true;
    }else{
        return false;
    }

}