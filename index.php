<?php
<?
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Día de la Semana</title>
</head>
<body>
    <h1>Introduce un número del 1 al 7</h1>
    
    <form action="diadelasemana.php" method="get">
        <label for="numero">Número del día:</label>
        <input type="number" id="numero" name="numero" min="1" max="7" required>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
