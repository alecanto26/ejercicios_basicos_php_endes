<?php
function diaDeLaSemana($numero) {
    switch($numero) {
        case 1:
            echo "Lunes";
            break;
        case 2:
            echo "Martes";
            break;
        case 3:
            echo "Miércoles";
            break;
        case 4:
            echo "Jueves";
            break;
        case 5:
            echo "Viernes";
            break;
        case 6:
            echo "Sábado";
            break;
        case 7:
            echo "Domingo";
            break;
        default:
            echo "Error: El número debe estar entre 1 y 7.";
            break;
    }
}

// Solicitamos al usuario que introduzca un número
echo "Introduce un número del 1 al 7: ";
$numero = intval(trim(fgets(STDIN)));  // Leer desde la entrada estándar (consola)
diaDeLaSemana($numero);
?>
