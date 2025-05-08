<?php 
$edad;


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $edad = intval($_POST["edad"]);
   if($edad >= 11 && $edad <= 19){
    echo "TIENE DESCUENTO!!";
   }else{
    echo "no tienes descuento :(";
   }
    }else{
        echo "error";
    }
?>