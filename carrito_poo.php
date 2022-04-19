<?php

use Cliente as GlobalCliente;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



//Definición de clases

class Cliente
{
    private $dni;
    private $nombre;
    private $correo;
    private $telefono;
    private $descuento;


    public function __construct()
    {
        $this->descuento = 0.0;
    }

    public function __get($propiedad)
    {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor)
    {
        $this->$propiedad = $valor;
    }

    public function imprimir()
    {
        echo "DNI : " . $this->dni . "<br>";
        echo "Nombre : " . $this->nombre . "<br>";
        echo "Correo : " . $this->correo . "<br>";
        echo "Telefono : " . $this->telefono . "<br>";
        echo "Descuento : " . $this->descuento . "<br>";
    }
}
class Producto
{
    private $cod;
    private $nombre;
    private $precio;
    private $descripcion;
    private $iva;


    public function __construct()
    {
        $this->precio = 0.0;
        $this->iva = 0.0;
    }

    public function __get($propiedad)
    {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor)
    {
        $this->$propiedad = $valor;
    }

    public function imprimir()
    {
        echo "Código : " . $this->cod . "<br>";
        echo "Nombre : " . $this->nombre . "<br>";
        echo "Precio : " . $this->precio . "<br>";
        echo "Descripción : " . $this->descripcion . "<br>";
        echo "IVA : " . $this->iva . "<br>";
    }
}
class Carrito
{
    private $fecha;
    private $cliente;
    private $aProductos;
    private $subtotal;
    private $total;

    public function __construct()
    {
        $this->aProductos = array();
        $this->subTotal = 0.0;
        $this->total = 0.0;
    }

    public function __get($propiedad)
    {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor)
    {
        $this->$propiedad = $valor;
    }

    public function cargarProducto($producto)
    {
        $this->aProductos[] = $producto;
    }

    public function imprimirTicket()
    {
        echo '<div class="container-fluid">';
        echo '<div class="row">';
        echo '<div class="col-5">';

        echo '<table class="table table-hover border">';
        echo '<tr><th COLSPAN="2" class="text-center"> MARQUET </th></tr>';

        echo '<tr><td><strong> Fecha</td>';
        echo '<td>' . date("d/m/Y") . '</td></tr>';

        echo '<tr><td><strong> DNI</td>';
        echo '<td>' . $this->cliente->dni . '</td></tr>';

        echo '<tr><td><strong> Nombre</td>';
        echo '<td>' . $this->cliente->nombre . '</td></tr>';

        echo '<tr><td COLSPAN="2"><strong> PRODUCTOS: </td>';

        foreach($this->aProductos as $producto) :
            echo '<tr><td>' . $producto->nombre . '</td>';
            echo '<td>$' . number_format($producto->precio, 2) .'</td></tr>';

            $this->subtotal += $producto->precio;
            $this->total += $producto->precio * ($producto->iva/100+1);
        endforeach;
        $this->total = $this->total - ($this->total * $this->cliente->descuento);

        echo '<tr><td><strong> Subtotal S/IVA: </td>';
        echo '<td>$' . number_format($this->subtotal, 2) . '</td></tr>';

        echo '<tr><td><strong> Total: </td>';
        echo '<td>$' . number_format($this->total, 2) . '</td></tr>';

        echo '</table>';
        
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
}

//Programa
$cliente1 = new Cliente();
$cliente1->dni = "45962268";
$cliente1->nombre = "Bernabé";
$cliente1->correo = "bernabe@correo.com";
$cliente1->telefono = "+541165849756";
$cliente1->descuento = 0.05;
//print_r($cliente1);
//$cliente1->imprimir();

$cliente2 = new Cliente();
$cliente2->dni = "30118495";
$cliente2->nombre = "Emiliano";
$cliente2->correo = "emiliano@correo.com";
$cliente2->telefono = "+541144658963";
$cliente2->descuento = 0.15;
//print_r($cliente2);
//$cliente2->imprimir();

$producto1 = new Producto();
$producto1->cod = "AB8767";
$producto1->nombre = "Notebook 15\" HP";
$producto1->descripcion = "Esta es una computadora HP";
$producto1->precio = 30800;
$producto1->iva = 21;
//print_r($producto1);
//$producto1->imprimir();

$producto2 = new Producto();
$producto2->cod = "QWR579";
$producto2->nombre = "Heladera Whirlpool";
$producto2->descripcion = "Esta es una heladera no froze";
$producto2->precio = 76000;
$producto2->iva = 10.5;
//print_r($producto2);
//$producto2->imprimir();

$carrito = new Carrito();
$carrito->fecha = date("d/m/Y");
$carrito->cliente = $cliente1;

$carrito->cargarProducto($producto1);
$carrito->cargarProducto($producto2);
//print_r($carrito);
//$carrito->imprimirTicket();//imprime el ticket de la compra

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Carrito</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <td> <?php $carrito->imprimirTicket(); ?></td>
            </div>
        </div>
    </main>
</body>

</html>