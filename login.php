<?php
session_start();
$servername = "sql10.freesqldatabase.com";
$user = "sql10745565";
$pass = "v9BG7wIDDE";
$dbname = "sql10745565";
$port = 3306;

$conn = new mysqli($servername, $user, $pass, $dbname, $port);

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

$usrnme = 'CFPAdministr4cion';
$psswrd = 'CFP_Pa5swordF0Radm1n-db4se';
$hashed_password = password_hash($psswrd, PASSWORD_DEFAULT);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usrnme = $_POST['usrnme'];
    $psswrd = $_POST['psswrd'];

    $stmt = $conn->prepare("SELECT psswrd FROM cfptable WHERE usrnme = ?");
    $stmt->bind_param("s", $usrnme);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($hashed_password);
        $stmt->fetch();

        if (password_verify($psswrd, $hashed_password)) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $usrnme;
            echo "Usuario y Contraseña correctos, lo estamos redireccionando a la página de administración...";
            header("Location: adminw3bsite.html");
            exit();
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "El usuario es incorrecto o no existe.";
    }
    $stmt->close();
}
$conn->close();
