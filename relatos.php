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
if ($contadorPalabras > 100) {
        echo "el relato no puede tener mas de 100 palabras. Tiene $contadorPalabras palabras";
    } elseif ($contadorCaracteres > 700) {
        echo "el relato no puede tener mas de 700 caracteres. Tiene $contadorCaracteres caracteres";
    } else {
        echo "se recibio correctamente el relato";
    }
}


?>