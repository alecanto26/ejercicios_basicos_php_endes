<?php
$num1 = $_GET['numero1'];
$num2 = $_GET['numero2'];
$num3 = $_GET['numero3'];


echo "Numero 1: $num1 , Numero 2: $num2 , Numero 3: $num3 <br>";

if($num1 > $num2 && $num1 > $num3){
    echo "El mayor es $num1";
}if ($num2>$num3) {
    echo "El mayor es $num2";
}else{
    echo "El mayor es $num3";
}