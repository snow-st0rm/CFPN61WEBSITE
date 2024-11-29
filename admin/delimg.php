<?php
require 'connection.php';

if (isset($_POST['image_id'])) {
    $image_id = $_POST['image_id'];

    try {
        $sql = "DELETE FROM gallery WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $image_id, PDO::PARAM_INT);
        $stmt->execute();

        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                La imagen fue eliminada correctamente.
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Cerrar'></button>
              </div>";
    } catch (PDOException $e) {
        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                Error eliminando la imagen: " . $e->getMessage() . "
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Cerrar'></button>
              </div>";
    }
} else {
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
            Selecciona una imagen válida.
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Cerrar'></button>
          </div>";
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
            <h2>Eliminar Imagenes</h2>
            <form id="delete-form" method="POST" action="delimg.php">
                <div class="mb-3">
                    <label for="image_id" class="form-label">Selecciona un ID para eliminar:</label>
                    <select class="form-select" name="image_id" id="image_id" required>
                        <option value="" disabled selected>Selecciona una imagen...</option>
                        <?php foreach ($images as $image): ?>
                            <option value="<?= $image['id'] ?>">ID <?= $image['id'] ?>: <?= $image['imgurl'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div id="preview-section" class="d-none">
                    <div class="image-preview mb-3" id="image-preview">
                        <img src="" alt="Preview" class="img-thumbnail" style="max-width: 300px;">
                        <p id="image-caption"></p>
                    </div>
                    <button type="submit" class="btn btn-danger mb-2 adminbttnz">Estoy seguro, eliminar la imagen</button>
                    <button type="button" class="btn btn-secondary mb-2 adminbttnz" id="cancel-btn">No, cancelar</button>
                </div>
            </form>
        </div>
    </div>

    <div id="images-json" data-images='<?= $images_json ?>'></div>

    <?php include 'footer.php'; ?>

    <script src="adminscript.js"></script>
    <script src="admintheme.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>