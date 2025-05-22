<?php
$contLab = 0;
$contNo = 0;
$diasLab = ['lunes', 'martes', 'miercoles', 'jueves', 'viernes', 'sabado', 'domingo'];
foreach ($diasLab as $dias ) {
    if ($dias == 'sabado' || $dias == 'domingo'){
echo $dias . " no laborable" . "<br>";
$contNo ++;
}else{
    echo $dias . " laborable" . "<br>";
    $contLab ++;
}

}

echo "<br>" . "dias laborables:" . $contLab . "<br>" . "dias no laborables:" . $contNo;
?>