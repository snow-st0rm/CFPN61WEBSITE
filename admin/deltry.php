<?php
include 'connection.php';

// Fetch all trayectos to populate the dropdown
try {
    $stmt = $conn->prepare("SELECT id, nme FROM trayectos");
    $stmt->execute();
    $allTrayectos = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Error fetching trayectos: " . $e->getMessage());
}

// If an ID is provided, fetch the trayecto to confirm deletion
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    try {
        $stmt = $conn->prepare("SELECT * FROM trayectos WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $trayecto = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$trayecto) {
            die("Error: Trayecto not found.");
        }
    } catch (PDOException $e) {
        die("Error fetching trayecto: " . $e->getMessage());
    }
} else {
    $trayecto = null;
}

// Handle the deletion when the form is submitted
if (isset($_POST['delete'])) {
    $idToDelete = $_POST['id'];

    try {
        $stmt = $conn->prepare("DELETE FROM trayectos WHERE id = :id");
        $stmt->bindParam(':id', $idToDelete, PDO::PARAM_INT);
        $stmt->execute();

        echo "<script>alert('Trayecto deleted successfully!'); window.location.href = 'deltry.php';</script>";
    } catch (PDOException $e) {
        die("Error deleting trayecto: " . $e->getMessage());
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eliminar Trayecto</title>

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
            <h2>Eliminar Trayecto</h2>
            
            <form method="get" action="deltry.php">
                <label for="select-id">Seleccione el ID del Trayecto a Eliminar:</label>
                <select id="select-id" name="id" class="form-select mb-3" onchange="this.form.submit()">
                    <option value="">Seleccione un ID</option>
                    <?php foreach ($allTrayectos as $tray): ?>
                        <option value="<?php echo htmlspecialchars($tray['id']); ?>"
                            <?php echo isset($id) && $id == $tray['id'] ? 'selected' : ''; ?>>
                            <?php echo htmlspecialchars($tray['id'] . " - " . $tray['nme']); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </form>

            <?php if ($trayecto): ?>
                <form action="deltry.php" method="post">
                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($trayecto['id']); ?>">

                    <h4>¿Está seguro de que desea eliminar este trayecto?</h4>
                    <div>
                        <img src="<?php echo htmlspecialchars($trayecto['imge']); ?>" alt="Trayecto Image" width="200">
                    </div>
                    <p><strong>Nombre:</strong> <?php echo htmlspecialchars($trayecto['nme']); ?></p>
                    <p><strong>Descripción pequeña:</strong> <?php echo htmlspecialchars($trayecto['smalldesc']); ?></p>

                    <button type="submit" name="delete" class="btn btn-danger mb-2 adminbttnz">Eliminar Trayecto</button>
                    <a href="deltry.php" class="btn btn-secondary mb-2 adminbttnz">Cancelar</a>
                </form>
            <?php endif; ?>
        </div>
    </div>

    <?php include 'footer.php'; ?>
    
    <script src="adminscript.js"></script>
    <script src="admintheme.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>