<?php

$db_host = "localhost";   
$db_user = "root";        // MySQL Database username
$db_pass = "HumanResource"; // MySQL Database Password
$db_name = "uploadfile";     // Database 

try{
    // Create PDO Connection
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOException $e) {
    die("Terjadi error : " . $e->getMessage());
}

?>
