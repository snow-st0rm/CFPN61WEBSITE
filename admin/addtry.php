<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nme = $_POST['nme'];
    $smalldesc = $_POST['smalldesc'];
    $fulldesc = $_POST['fulldesc'];
    $imge = $_POST['imge'];

    try {
        $stmt = $conn->prepare("INSERT INTO trayectos (nme, smalldesc, fulldesc, imge) VALUES (:nme, :smalldesc, :fulldesc, :imge)");
        $stmt->bindParam(':nme', $nme);
        $stmt->bindParam(':smalldesc', $smalldesc);
        $stmt->bindParam(':fulldesc', $fulldesc);
        $stmt->bindParam(':imge', $imge);

        $stmt->execute();

        $lastId = $conn->lastInsertId();

        echo "<script>alert('El Trayecto ha sido añadido!'); window.location.href='trayecto.php?id=" . $lastId . "';</script>";
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
