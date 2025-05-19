<?php 
$cantidadPesos;
$valMoneda = [40, 43, 8, 'pepe'];

/* $nombreArray[]='objeto';
 agrega un nuevo elemento al array y leasigna una nueva posicion (la ultima)*/

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $cantidadPesos = floatval($_POST["pesos"]);
    $moneda = $_POST["moneda"];
    switch($moneda) {
        case "usd":
            $cantidadFinal = $cantidadPesos/$valMoneda[0];
            echo "$cantidadPesos pesos uruguayos equivalen a " . $cantidadFinal . " DOLARES";
            break;
        case "eur":
            $cantidadFinal = $cantidadPesos/$valMoneda[1];
            echo "$cantidadPesos pesos uruguayos equivalen a " .  $cantidadFinal . " EUROS";
            break;
        case "bra":
            $cantidadFinal = $cantidadPesos/$valMoneda[2];
            echo "$cantidadPesos pesos uruguayos equivalen a " .  $cantidadFinal . " REALES";
            break;
        default:
            echo "No es una moneda válida.";
    }
    }else{
        echo "error";
    }
?>
