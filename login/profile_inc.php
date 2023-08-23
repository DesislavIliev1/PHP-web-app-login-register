<?php
// while($result = fetch(PDO::FETCH_ASSOC)){
// $user_email = $result["user_email"];
// $user_name  = $result["user_name"];
// $user_phone = $result["phone"];
//  $user_pass = $result["password"];
// }

//function that get and  display the profile info
function display_the_info(){;
    if(isset($_SESSION["user_id"])){
        echo "<div class='text'>Welcome! </div>";
        echo "<br>";
        echo "<div class='text'>You are logged in as: " . $_SESSION["user_name"]. "</div>" ;
        echo "<br>";
        
        echo " <div class='text'>Your email is: ". $_SESSION["user_email"]. "</div>";
        echo "<br>";
        
        echo" <div class='text'>Your phone number is: " . $_SESSION["phone"]. "</div>";
        echo "<br>";
        
    }else{
        echo "you are not logged in";
    };
}


          


