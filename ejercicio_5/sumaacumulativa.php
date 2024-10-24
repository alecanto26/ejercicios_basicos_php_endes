<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el número N ingresado por el usuario
    $N = intval($_POST['numero']);

    // Inicializamos la variable para la suma
    $suma = 0;

    // Usamos un bucle for para calcular la suma acumulativa
    for ($i = 1; $i <= $N; $i++) {
        $suma += $i;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la Suma Acumulativa</title>
</head>
<body>
<h1>Resultado de la Suma Acumulativa</h1>

<?php if (isset($suma)): ?>
    <h2>La suma de los números desde 1 hasta <?= $N ?> es: <?= $suma ?></h2>
<?php endif; ?>

<a href="index.php">Volver</a>
</body>
</html>
