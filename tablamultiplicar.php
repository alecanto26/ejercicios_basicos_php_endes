<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el número ingresado por el usuario
    $numero = intval($_POST['numero']);

    // Validar que el número esté entre 1 y 10
    if ($numero >= 1 && $numero <= 10) {
        // Generar la tabla de multiplicar usando un bucle for
        echo "<h1>Tabla de Multiplicar del $numero</h1>";
        echo "<ul>";
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "<li>$numero x $i = $resultado</li>";
        }
        echo "</ul>";
    } else {
        echo "<h2>Error: El número debe estar entre 1 y 10.</h2>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la Tabla de Multiplicar</title>
</head>
<body>
<a href="index.php">Volver</a>
</body>
</html>