<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Materias</title>
</head>
<body>
    <h1>Materias</h1>
    <div class="materias">
        <?php foreach ($materias as $materia): ?>
            <div class="materia">
                <h3><?= $materia['materia']; ?></h3>
                <p>Docente: <?= $materia['docente']; ?></p>
                <progress value="<?= $materia['porcentaje']; ?>" max="100"></progress>
                <button>Detalle</button>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
