<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $imgurl = $_POST['imgurl'];
    $caption = !empty($_POST['caption']) ? $_POST['caption'] : null;

    try {
        $sql = "INSERT INTO gallery (imgurl, cption) VALUES (:imgurl, :caption)";
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':imgurl', $imgurl, PDO::PARAM_STR);
        $stmt->bindParam(':caption', $caption, PDO::PARAM_STR);

        $stmt->execute();

        echo "La imagen se ha subido a la galería!! Redireccionando...";
        header('Location: gallery.php');
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
