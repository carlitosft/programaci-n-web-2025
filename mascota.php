<?php 
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $nombre = ($_POST["nombre"]);
$edad = intval($_POST["edad"]);
$raza = ($_POST["raza"]);
$vacunas = intval($_POST["vacunas"]);
$fechaNac = ($_POST["nacimiento"]);


$contadorNombre = count($veterinaria["nombre"]);
$contadorEdad = count($veterinaria["edad"]);
$contadorRaza = count($veterinaria["raza"]);
$contadorVac = count($veterinaria["vacunas"]);
$contadorNac = count($veterinaria["fechaNac"]);

if()



$veterinaria = [
    "nombre" => $nombre,
    "edad" => $edad,
    "raza" => $raza,
    "vacunas" => $vacunas,
    "nacimiento" => $fechaNac, 
];

var_dump($veterinaria);




























   
    }else{
        echo "error";
    }
?>


















?>