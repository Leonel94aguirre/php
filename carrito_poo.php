<?php

use Cliente as GlobalCliente;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Definición de clases

class Cliente{

}
class Producto{

}
class Carrito{

}

//Programa
$cliente1 = new Cliente();
$cliente1->dni = "45962268";
$cliente1->nombre = "Bernabe";
$cliente1->correo = "bernabe@correo.com";
$cliente1->telefono = "+541165849756";
$cliente1->descuento = 0.05;
$cliente1->imprimir();

?>