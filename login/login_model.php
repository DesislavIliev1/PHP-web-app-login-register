<?php


// get email from the db
function get_email(object $con,string $email){
    $query = "SELECT * FROM users WHERE email = :email;";
    $stmt = $con-> prepare($query);
    $stmt -> bindParam(":email", $email);
    $stmt ->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;


}

// get username from the db
function get_username(object $con,string $email){
    $query = "SELECT user_name FROM users WHERE email = :email;";
    $stmt = $con-> prepare($query);
    $stmt -> bindParam(":email", $email);
    $stmt ->execute();

    $user_info = $stmt->fetch(PDO::FETCH_ASSOC);
    return $user_info;


}
// get phone from the db
function get_phone(object $con,string $email){
    $query = "SELECT phone FROM users WHERE email = :email;";
    $stmt = $con-> prepare($query);
    $stmt -> bindParam(":email", $email);
    $stmt ->execute();

    $phone_info = $stmt->fetch(PDO::FETCH_ASSOC);
    return $phone_info;


}

// get password from the db
function get_pass(object $con,string $email){
    $query = "SELECT password FROM users WHERE email = :email;";
    $stmt = $con-> prepare($query);
    $stmt -> bindParam(":email", $email);
    $stmt ->execute();

    $pass_info = $stmt->fetch(PDO::FETCH_ASSOC);
    return $pass_info;


}




