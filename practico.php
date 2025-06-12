<?php
$tripulacion = [
    'Alex Raider',
    'Mia Kovalik',
    'Raj Patel',
    'Elena Vega',
    'Jules Bergman'
];
$tripulacion[] = 'Sam Cartyer' ;
$tripulacion[] = 'Leo Wu';
$tripulacion[] =  'Zara Khan';


function agregar($nuevoNombre,&$Arreglo) {
    $Arreglo[]=$nuevoNombre;
}
agregar('jose', $tripulacion);


function evacuar(&$tripulacion){
    $ultimoValor=array_pop($tripulacion);
    echo "El tripulante evacuasdo es: ". $ultimoValor;


}
evacuar(     $tripulacion);
print_r($tripulacion);




?>