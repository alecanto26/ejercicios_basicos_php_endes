<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el número N ingresado por el usuario
    $N = intval($_POST['numero']);

    // Función para calcular la suma usando bucle for
    function sumaAcumulativaFor($N) {
        $suma = 0;
        for ($i = 1; $i <= $N; $i++) {
            $suma += $i;
        }
        return $suma;
    }

    // Función para calcular la suma usando bucle while
    function sumaAcumulativaWhile($N) {
        $suma = 0;
        $i = 1;
        while ($i <= $N) {
            $suma += $i;
            $i++;
        }
        return $suma;
    }

    // Función para calcular la suma usando bucle do...while (simulación en PHP)
    function sumaAcumulativaDoWhile($N) {
        $suma = 0;
        $i = 1;
        do {
            $suma += $i;
            $i++;
        } while ($i <= $N);
        return $suma;
    }

    // Calcular las sumas con los diferentes bucles
    $resultadoFor = sumaAcumulativaFor($N);
    $resultadoWhile = sumaAcumulativaWhile($N);
    $resultadoDoWhile = sumaAcumulativaDoWhile($N);
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

    <?php if (isset($N)): ?>
        <h2>Suma de 1 a <?= $N ?> usando bucle for: <?= $resultadoFor ?></h2>
        <h2>Suma de 1 a <?= $N ?> usando bucle while: <?= $resultadoWhile ?></h2>
        <h2>Suma de 1 a <?= $N ?> usando bucle do...while: <?= $resultadoDoWhile ?></h2>
    <?php endif; ?>

    <a href="index.php">Volver</a>
</body>
</html>
