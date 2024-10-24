<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el número ingresado por el usuario
    $numero = intval($_POST['numero']);

    // Función para obtener el día de la semana usando switch
    function diaDeLaSemana($numero) {
        switch($numero) {
            case 1:
                return "Lunes";
            case 2:
                return "Martes";
            case 3:
                return "Miércoles";
            case 4:
                return "Jueves";
            case 5:
                return "Viernes";
            case 6:
                return "Sábado";
            case 7:
                return "Domingo";
            default:
                return "Error: El número debe estar entre 1 y 7.";
        }
    }

    // Mostrar el resultado
    $resultado = diaDeLaSemana($numero);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del Día de la Semana</title>
</head>
<body>
<h1>Resultado del Día de la Semana</h1>
<?php
// Mostrar el día correspondiente o el error
if (isset($resultado)) {
    echo "<h2>El día correspondiente es: $resultado</h2>";
}
?>
<a href="index.php">Volver</a>
</body>
</html>