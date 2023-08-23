<?php
// variable for connection parameters
$dbhost = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "login_db";



// creating con variable that connect PDO to the db
try {
    $con = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);
    // set the PDO error mode to exception
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
