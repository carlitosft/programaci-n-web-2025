<?php
$nombre;
$apellido;
$edad;
$ciudad;


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $relato = ($_POST["relato"]);
$palabras = explode(" ", $relato);
$contadorPalabras = count($palabras);
$contadorCaracteres = count($relato);
var_dump($palabras);
echo "$contadorPalabras" + $contadorCaracteres;








}


?>