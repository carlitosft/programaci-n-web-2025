<?php
$videojuego = [
    "nombre" => "The legend of zelda",
    "consola" => "NES",
    "lanzamiento" => "1986",
    "precio" => "50.00",


];

$videojuego["stock"] = "10";
$videojuego["venta"] = "en venta";

echo "el juego es {$videojuego["nombre"]}, se lanzo en el año {$videojuego["lanzamiento"]} para la consola {$videojuego["consola"]}, lo vendemos a {$videojuego["precio"]}, hay {$videojuego["stock"]} en stock y esta {$videojuego["venta"]} <br>";



$inventario = [
    "The legend of zelda" => [
        "consola" => "NES",
        "lanzamiento" => "1986",
        "precio" => "50.00",
        "stock" => "10",
        "venta" => "en venta",
    ],

    "Super Mario Bros 3" => [
        "consola" => "NES",
        "lanzamiento" => "1988",
        "precio" => "45.00",
        "stock" => "8",
        "venta" => "en venta",
    ],

    "Chronno Trigger" => [
        "consola" => "SNES",
        "lanzamiento" => "1995",
        "precio" => "45.00",
        "stock" => "8",
        "venta" => "en venta",
    ],





];


$claves = array_keys($inventario);

echo $claves[0] . $inventario['The legend of zelda'] ["consola"];






    ?>