<?php include 'memoria.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Jugadores</title>
    <style>
        body { font-family: sans-serif; background: #f4f4f4; padding: 20px; }
        .contenedor { background: white; padding: 20px; border-radius: 8px; max-width: 400px; }
        input[type="text"] { padding: 8px; width: 70%; }
        button { padding: 8px; cursor: pointer; }
        ul { margin-top: 20px; }
    </style>
</head>
<body>

    <div class="contenedor">
        <h2>Nuevo Jugador</h2>
        
        <form action="memoria.php" method="POST">
            <input type="text" name="nombre_jugador" placeholder="Escribe el nombre..." required>
            <button type="submit">Guardar</button>
        </form>

        <h3>Jugadores Registrados:</h3>
        <ul>
            <?php foreach ($_SESSION['jugadores'] as $jugador): ?>
                <li><?php echo $jugador; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

</body>
</html>