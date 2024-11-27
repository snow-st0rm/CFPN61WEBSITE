<?php
include 'connection.php';

try {
    $stmt = $conn->query("SELECT id, imge, nme, smalldesc FROM trayectos");
    $trayectos = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    echo "Error: " . htmlspecialchars($e->getMessage());
    exit();
}
?>

<div class="card-container">
    <?php if (!empty($trayectos)): ?>
        <?php foreach ($trayectos as $trayecto): ?>
            <div class="card">
                <img src="<?= htmlspecialchars($trayecto['imge']) ?>" class="card-img-top" alt="<?= htmlspecialchars($trayecto['nme']) ?>">
                <div class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                    <h5 class="card-title"><?= htmlspecialchars($trayecto['nme']) ?></h5>
                    <p class="card-text"><?= htmlspecialchars($trayecto['smalldesc']) ?></p>
                    <a href="./admin/trayecto.php?id=<?= htmlspecialchars($trayecto['id']) ?>" class="btn btn-primary mb-2 crdbttnz">Más Información</a>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <h5>No se han encontrado trayectos.</h5>
    <?php endif; ?>
</div>
