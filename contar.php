<?php
//Definicion de pacientes
$aPacientes = array();
$aPacientes[] = array(
    "dni" => "33.775.012",
    "nombre" => "Ana Acuña",
    "edad" => 45,
    "peso" => 81, 50
);
$aPacientes[] = array(
    "dni" => "23.156.238",
    "nombre" => "Gonzalo Bustamante",
    "edad" => 66,
    "peso" => 79
);
$aPacientes[] = array(
    "dni" => "38.007.194",
    "nombre" => "Emiliano Aguirre",
    "edad" => 27,
    "peso" => 76
);
$aPacientes[] = array(
    "dni" => "45.897.639",
    "nombre" => "Jose Gonzales",
    "edad" => 29,
    "peso" => 85
);

$aProductos = array();
$aProductos[] = array(
    "nombre" => "Smart TV 55\ 4K UHD",
    "marca" => "Hitachi",
    "modelo" => "554KS20",
    "stock" => 60,
    "precio" => 58000,
);
$aProductos[] = array(
    "nombre" => "Samsung Galaxy A30 Blanco",
    "marca" => "Samsung",
    "modelo" => "Galaxy A30",
    "stock" => 0,
    "precio" => 22000,
);
$aProductos[] = array(
    "nombre" => "Aire Acondicionado Split Inverter Frio/Calor Surrey 2900F",
    "marca" => "Surrey",
    "modelo" => "553AIQ1201E",
    "stock" => 5,
    "precio" => 45000,
);

$aNotas = array(9,8,9.50,4,7,8);

//Definicion
function contar($aArray) {
    $contador = 0;
    foreach($aArray as $item) {
        $contador++;
    }
    return $contador;
}
//Uso
echo "Cantidad de productos: " . contar($aProductos) . "<br>";
echo "Cantidad de pacientes: " . contar($aPacientes) . "<br>";
echo "Cantidad de notas: " . contar($aNotas);
?>