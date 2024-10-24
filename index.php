<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma Acumulativa</title>
</head>
<body>
<h1>Introduce un número para calcular la suma acumulativa</h1>

<!-- Formulario que envía el número a sumaacumulativa.php -->
<form method="POST" action="sumaacumulativa.php">
    <label for="numero">Número N:</label>
    <input type="number" id="numero" name="numero" min="1" required>
    <button type="submit">Calcular Suma</button>
</form>
</body>
</html>