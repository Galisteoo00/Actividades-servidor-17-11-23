<?php


$dni = isset($_GET['dni']) ? $_GET['dni'] : '';


if (is_numeric($dni) && strlen($dni) === 8) {
    
    
    $letraNIF = calcularLetraNIF($dni);
    
   
    echo "DNI: $dni-$letraNIF";
    
} else {
    
    echo "DNI no válido";
}
function calcularLetraNIF($dni) {
    $letras = "TRWAGMYFPDXBNJZSQVHLCKE";
    $resto = $dni % 23;
    $letraNIF = $letras[$resto];
    return $letraNIF;
}

?>
