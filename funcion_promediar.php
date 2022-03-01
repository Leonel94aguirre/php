<?php
function promediar($aNumeros){
    $suma = 0;
    foreach ($aNumeros as $numero) {
        $suma += $numero;
    } 
    return $suma / count($aNumeros); 
}
//Definicion
function maximo($aNumeros){
    $maximo = 0;
    foreach ($aNumeros as $numero){
        if ($numero > $maximo) {
            $maximo = $numero;
        }
    }
    return $maximo;
}
?>