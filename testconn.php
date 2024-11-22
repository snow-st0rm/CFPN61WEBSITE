<?php
$servername = "sql10.freesqldatabase.com";
$user = "sql10745565";  
$pass = "v9BG7wIDDE";      
$dbname = "sql10745565";  
$port = 3306;

$conn = new mysqli($servername, $user, $pass, $dbname, $port);

if ($conn->connect_error){
    die("Connection Failed: " . $conn->connect_error);
} else { 
  echo "Connected yay!!";
    }
?>
