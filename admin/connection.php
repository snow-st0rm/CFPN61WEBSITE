<?php
$servername = "sql10.freesqldatabase.com";
$user = "sql10745565";  
$pass = "v9BG7wIDDE";      
$dbname = "sql10745565";  
$port = 3306;

try {
    $conn = new PDO("mysql:host=$servername;port=$port;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<script>console.log('Connected to database successfully');</script>";
} catch (PDOException $e) {
    echo "<script>console.error('Connection to database failed: " . addslashes($e->getMessage()) . "');</script>";
    exit();
}
?>
