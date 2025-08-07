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
        "precio" => 50.00,
        "stock" => "10",
        "venta" => "en venta",
    ],

    "Super Mario Bros 3" => [
        "consola" => "NES",
        "lanzamiento" => "1988",
        "precio" => 45.00,
        "stock" => "8",
        "venta" => "en venta",
    ],

    "Chronno Trigger" => [
        "consola" => "SNES",
        "lanzamiento" => "1995",
        "precio" => 45.00,
        "stock" => "8",
        "venta" => "en venta",
    ],





];

$persona1= [ "nombre" => "juan",
"apellido" => "pere",
"edad" => "25",
"nacimiento" => ["dia" => "1", "mes" => "1", "año" => 2008]


];

$claves = array_keys($inventario);

echo $claves[0] . $inventario['The legend of zelda'] ["consola"] . "<br>"; 
echo $persona1["nacimiento"]["año"] . "<br>";

/*Actividad 5: Listando Todos los Productos del Inventario 
Necesitamos una vista general de todo lo que tenemos para una página de "Nuestros Productos". Hay 
que generar un listado simple que muestre el título y la consola de cada juego en nuestro inventario. 
Utilizando la variable $inventario, escribe un código que procese la colección completa y, por cada 
juego, imprima una línea con su título y su consola. 
Tip: Para procesar cada juego, necesitas "visitar" cada elemento de tu arreglo de inventario uno por 
uno. Investiga qué estructura de control en PHP te permite ejecutar un bloque de código para todos los 
elementos de un arreglo. */

echo $claves[0] . $inventario["The legend of zelda"]["consola"] . $claves[1] . $inventario["Super Mario Bros 3"]["consola"] . $claves[2] . $inventario["Chronno Trigger"]["consola"];
var_dump($inventario);

foreach ($inventario as $nombrejuego => &$detalles) {
    if ($detalles['consola'] == 'NES') {
        $detalles['precio'] = $detalles['precio'] * 0.9;
    }
}

var_dump($inventario);

$busqueda = "Chronno Trigger";

foreach ($inventario as $nombrejuego => $detalles) {
    if ($nombrejuego == $busqueda) {
        echo 'Juego encontrado';
    }
}

$inventario["Sonic the Hedgehog"]['consola'] = "sega genesis";
$inventario["Sonic the Hedgehog"]['precio'] = 55.00;
$inventario["Sonic the Hedgehog"]['stock'] = "8";



    ?>