<?php

$db_host = "localhost";   
$db_user = "root";        // MySQL Database username
$db_pass = ""; // MySQL Database Password
$db_name = "taqim";     // Database 

// Create mysqli Connection
$db = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: " . $db->connect_error;
    exit();
}

?>
