<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Multiplicar</title>
</head>
<body>
<h1>Generar Tabla de Multiplicar</h1>

<!-- Formulario para solicitar el número -->
<form method="POST" action="tablamultiplicar.php">
    <label for="numero">Elige un número entre 1 y 10:</label>
    <input type="number" id="numero" name="numero" min="1" max="10" required>
    <button type="submit">Generar Tabla</button>
</form>
</body>
</html>
