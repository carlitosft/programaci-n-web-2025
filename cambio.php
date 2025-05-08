<?php 
$cantidadPesos;
$valorDolar = 40;
$valorEuro = 43;
$valorReal = 8;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $cantidadPesos = floatval($_POST["pesos"]);
    $moneda = $_POST["moneda"];
    switch($moneda) {
        case "dolares":
            $cantidadFinal = $cantidadPesos/$valorDolar;
            echo "$cantidadPesos pesos uruguayos equivalen a " . $cantidadFinal . "DOLARES";
            break;
        case "Euros":
            $cantidadFinal = $cantidadPesos/$valorEuro;
            echo "$cantidadPesos pesos uruguayos equivalen a " .  $cantidadFinal . "EUROS";
            break;
        case "Reales":
            $cantidadFinal = $cantidadPesos/$valorReal;
            echo "$cantidadPesos pesos uruguayos equivalen a " .  $cantidadFinal . "REALES";
            break;
        default:
            echo "No es una moneda válida.";
    }
    }else{
        echo "error";
    }
?>