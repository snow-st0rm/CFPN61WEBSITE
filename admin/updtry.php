<?php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $image = $_POST['image'];
    $smalldesc = $_POST['smalldesc'];
    $fulldesc = $_POST['fulldesc'];

    try {
        $stmt = $conn->prepare("UPDATE trayectos SET nme = :name, imge = :image, smalldesc = :smalldesc, fulldesc = :fulldesc WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':image', $image, PDO::PARAM_STR);
        $stmt->bindParam(':smalldesc', $smalldesc, PDO::PARAM_STR);
        $stmt->bindParam(':fulldesc', $fulldesc, PDO::PARAM_STR);

        if ($stmt->execute()) {
            echo "Trayecto updated successfully.";
            header("Location: ../index.php");
        } else {
            echo "Failed to update trayecto.";
        }
    } catch (PDOException $e) {
        die("Error updating trayecto: " . $e->getMessage());
    }
}
