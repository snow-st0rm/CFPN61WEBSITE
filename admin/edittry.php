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

// Fetch specific trayecto details if an ID is provided
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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administrar Trayectos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link id="theme-stylesheet" rel="stylesheet" href="lightmode.css">

    <link rel="shortcut icon" href="../img/CFPlogo.png">
    <link rel="icon" href="../img/CFPlogo.png">
</head>

<body>
    <?php include 'navbar.php'; ?>
    <br>
    <br>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="admin-container">
            <h2>Editar Trayectos</h2>
            <form method="get" action="edittry.php">
                <label for="select-id">Seleccione el ID del Trayecto:</label>
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

            <form action="updtry.php" method="post">
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($trayecto['id'] ?? ''); ?>">

                <label for="name">Nombre del Trayecto:</label>
                <input type="text" id="name" name="name" class="form-control" 
                       value="<?php echo htmlspecialchars($trayecto['nme'] ?? ''); ?>" required>
                <br>

                <label for="image">URL de Imagen:</label>
                <input type="text" id="image" name="image" class="form-control"
                       value="<?php echo htmlspecialchars($trayecto['imge'] ?? ''); ?>" required>
                <br>

                <label for="smalldesc">Descripción pequeña:</label>
                <textarea id="smalldesc" name="smalldesc" class="form-control" required><?php echo htmlspecialchars($trayecto['smalldesc'] ?? ''); ?></textarea>
                <br>

                <label for="fulldesc">Descripción completa:</label>
                <textarea id="fulldesc" name="fulldesc" class="form-control"><?php echo htmlspecialchars($trayecto['fulldesc'] ?? ''); ?></textarea>
                <br>

                <button type="submit" class="btn btn-primary mb-2 adminbttnz">Actualizar Trayecto</button>
            </form>
        </div>
    </div>
    <br>
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