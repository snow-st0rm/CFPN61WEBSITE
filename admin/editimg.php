<?php
require 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $image_id = $_POST['image_id'] ?? null;
    $new_url = $_POST['new_url'] ?? null;
    $new_caption = $_POST['new_caption'] ?? null;

    if ($image_id && $new_url !== null) {
        try {
            $sql = "UPDATE gallery SET imgurl = :new_url, cption = :new_caption WHERE id = :image_id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':new_url', $new_url);
            $stmt->bindParam(':new_caption', $new_caption);
            $stmt->bindParam(':image_id', $image_id, PDO::PARAM_INT);
            $stmt->execute();

            echo "<script>console.log('Imagen actualizada.');</script>";
        } catch (PDOException $e) {
            echo "<script>console.log('Error al actualizar la imagen: ');" . $e->getMessage() . "</script>";
        }
    } else {
        echo "<script>Error: Missing required fields.</script>";
    }
}

try {
    $sql = "SELECT * FROM gallery";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $images = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error al conseguir las imágenes: " . $e->getMessage();
}

$images_json = json_encode($images);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administrar Galería</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link id="theme-stylesheet" rel="stylesheet" href="lightmode.css">

    <link rel="shortcut icon" href="../img/CFPlogo.png">
    <link rel="icon" href="../img/CFPlogo.png">
</head>

<body>
    <?php include 'navbar.php'; ?>

    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="admin-container">
            <h2>Editar Imágenes</h2>
            <?php if (isset($success_message)): ?>
                <div class="alert alert-success"><?= $success_message ?></div>
            <?php endif; ?>
            <?php if (isset($error_message)): ?>
                <div class="alert alert-danger"><?= $error_message ?></div>
            <?php endif; ?>

            <form method="POST" action="editimg.php">
                <div class="mb-3">
                    <label for="image_id" class="form-label">Selecciona un ID:</label>
                    <select class="form-select" name="image_id" id="image_id" required>
                        <option value="" disabled selected>Selecciona una imagen...</option>
                        <?php foreach ($images as $image): ?>
                            <option value="<?= $image['id'] ?>">ID <?= $image['id'] ?>: <?= $image['imgurl'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="new_url" class="form-label">Nueva URL de la Imagen:</label>
                    <input type="url" class="form-control" name="new_url" id="new_url" placeholder="Añade la nueva URL de la imagen"
                        required>
                </div>
                <div class="mb-3">
                    <label for="new_caption" class="form-label">Nueva Descripción (Opcional):</label>
                    <input type="text" class="form-control" name="new_caption" id="new_caption"
                        placeholder="Dejar en blanco para eliminar la descripción actual">
                </div>

                <div class="image-preview" id="image-preview">
                    <p>Selecciona una imagen.</p>
                </div>
                <br>

                <button type="submit" class="btn btn-primary mb-2 adminbttnz">Actualizar Imagen</button>
            </form>
        </div>
    </div>
    <br>

    <?php include 'footer.php'; ?>

    <script>
        const imagesData = <?= $images_json ?>;
    </script>
    <script src="adminscript.js"></script>
    <script src="admintheme.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>