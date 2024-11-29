<?php
require 'connection.php';

try {
    $sql = "SELECT * FROM gallery";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $images = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Galería</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link id="theme-stylesheet" rel="stylesheet" href="lightmode.css">

    <link rel="shortcut icon" href="../img/CFPlogo.png">
    <link rel="icon" href="../img/CFPlogo.png">
</head>

<body>
    <?php include 'navbar.php'; ?>

    <div class="gallery-container">
        <h1>Galería de Imagenes</h1>
        <div class="gallery">
            <?php foreach ($images as $image): ?>
                <div class="gallery-item">
                    <a href="<?= htmlspecialchars($image['imgurl']) ?>" target="_blank">
                        <img
                            src="<?= htmlspecialchars($image['imgurl']) ?>"
                            alt="Image <?= $image['id'] ?>">
                    </a>
                    <div class="caption">
                        <span>ID: <?= $image['id'] ?></span><br>
                        <?= htmlspecialchars($image['cption']) ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <br>

    <?php include 'footer.php'; ?>

    <script src="adminscript.js"></script>
    <script src="admintheme.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>