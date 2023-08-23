<?php
function new_user_data( $con, string $name ,string  $email , $phone){

    $query = "UPDATE  users SET user_name = :username ,email = :email, phone = :phone WHERE id = :id";
    $stmt = $con-> prepare($query);

    $id = $_SESSION['user_id'];
    
    
   
  
    $stmt -> bindParam(":username", $name);
    $stmt -> bindParam(":email", $email);
    $stmt -> bindParam(":phone", $phone);
    $stmt -> bindParam(":id", $id );
    $stmt ->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
    return $result;
    


}