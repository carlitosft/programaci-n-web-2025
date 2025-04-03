<?php 
$cantidadPesos;
$valorDolar = 40;


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $cantidadPesos = floatval($_POST["pesos"]);
    $cantidadDolares = $cantidadPesos/$valorDolar;
    echo "Resultado de la conversion";
    echo "$cantidadPesos pesos uruguayos equivalen a " . $cantidadDolares . "dolares";
    }else{
        echo "error";
    }
?>