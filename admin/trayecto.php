<?php
include 'connection.php';
include 'navbar.php';

$id = $_GET['id'] ?? null;

if ($id) {
    $stmt = $conn->prepare("SELECT nme, fulldesc, imge FROM trayectos WHERE id = ?");
    $stmt->execute([$id]);
    $trayecto = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($trayecto): ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?= htmlspecialchars($trayecto['nme']) ?></title>

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
            <link id="theme-stylesheet" rel="stylesheet" href="../lightmode.css">
        </head>

        <body>
            <div class="container my-5 text-center">
                <h1 class="mb-4"><?= htmlspecialchars($trayecto['nme']) ?></h1>

                <div class="d-flex justify-content-center">
                    <img src="<?= htmlspecialchars($trayecto['imge']) ?>" class="img-fluid" alt="<?= htmlspecialchars($trayecto['nme']) ?>">
                </div>

                <div class="mt-4 text-justify">
                    <p><?= nl2br(htmlspecialchars($trayecto['fulldesc'])) ?></p>
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
    <?php else: ?>
        <h3>Trayecto no encontrado.</h3>
<?php endif;
} else {
    echo "No trayecto ID provided.";
}
?>