<?php
//getting username form the db
function get_username(object $con, string $name){
    $query = "SELECT user_name FROM users WHERE user_name = :username;";
    $stmt = $con-> prepare($query);
    $stmt -> bindParam(":username", $name);
    $stmt ->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;


}


//get email from the db
function get_email(object $con, string $email){
    $query = "SELECT email FROM users WHERE email = :email;";
    $stmt = $con-> prepare($query);
    $stmt -> bindParam(":email", $email);
    $stmt ->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;


}
//creating user in the db
function set_user(object $con, string $name ,string  $email , string  $password, $phone){

    $query = "INSERT INTO users (user_id, user_name, email, password, phone) VALUES( :userid, :username, :email , :pass , :phone)";
    $stmt = $con-> prepare($query);

    $options = [
        'cost' => 12
    ];
  //hashing the password with bcrypt
    $hashedPass = password_hash($password ,PASSWORD_BCRYPT , $options);

    //random num for user_id
    $user_id = random_num(20);

    $stmt -> bindParam(":userid", $user_id);
    $stmt -> bindParam(":username", $name);
    $stmt -> bindParam(":email", $email);
    $stmt -> bindParam(":pass", $hashedPass);
    $stmt -> bindParam(":phone", $phone);
    $stmt ->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;


}

