<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pagos</title>
</head>
<body>
    <h1>Pagos</h1>
    <h2>Datos Generales</h2>
    <!-- Información de alumno -->
    
    <h3>Por pagar</h3>
    <table>
        <tr>
            <th>Fecha a pagar</th>
            <th>Concepto</th>
            <th>Monto</th>
        </tr>
        <?php foreach ($pagos as $pago): ?>
            <tr>
                <td><?= $pago['fecha_pago']; ?></td>
                <td><?= $pago['concepto']; ?></td>
                <td><?= $pago['monto']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <button>Ver recibo</button>
    <a href="index.php?action=siguiente">Siguiente</a>
    <a href="index.php?action=anterior">Anterior</a>
</body>
</html>
