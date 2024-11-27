<?php
include 'connection.php';

try {
    $stmt = $conn->prepare("SELECT id, nme, imge, smalldesc FROM trayectos");
    $stmt->execute();
    $trayectos = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Error fetching trayectos: " . $e->getMessage());
}

if ($trayectos && count($trayectos) > 0): ?>
    <h2>Trayectos activos:</h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>URL Imagen</th>
                <th>Nombre</th>
                <th>Descripción corta</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($trayectos as $trayecto): ?>
                <tr>
                    <td><?php echo htmlspecialchars($trayecto['id']); ?></td>
                    <td><?php echo htmlspecialchars($trayecto['imge']); ?></td>
                    <td><?php echo htmlspecialchars($trayecto['nme']); ?></td>
                    <td><?php echo htmlspecialchars($trayecto['smalldesc']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>No trayectos found.</p>
<?php endif; ?>
