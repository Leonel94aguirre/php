<?php
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
$aProductos[] = array(
    "nombre" => "Impresora HP Laser",
    "marca" => "HP",
    "modelo" => "P1102w",
    "stock" => 40,
    "precio" => 20000,
);

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center p-5">
                <h1>Listado de productos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table border table-hover">
                    <tr>
                        <th><strong>Nombre</th>
                        <th><strong>Marca</th>
                        <th><strong>Modelo</th>
                        <th><strong>Stock</th>
                        <th><strong>Precio</th>
                        <th><strong>Acción</th>
                    </tr>
                    <?php
                    $subtotal = 0;
                    for ($i = 0; $i < count($aProductos); $i++){
                    ?>
                    <tr>
                            <td><?php echo $aProductos[$i]["nombre"]; ?></td>
                            <td><?php echo $aProductos[$i]["marca"]; ?></td>
                            <td><?php echo $aProductos[$i]["modelo"]; ?></td>
                            <td><?php echo $aProductos[$i]["stock"] > 10 ? "hay stock" : ($aProductos[0]["stock"] > 0 && $aProductos[$i]["stock"] <= 10 ? "poco stock" : "sin stock"); ?></td>
                            <td><?php echo $aProductos[$i]["precio"]; ?></td>
                            <td><button class="btn btn-primary">Comprar</button></td>
                        </tr>
                        <?php
                        $subtotal += $aProductos[$i] ["precio"];
                    }
                    ?>
                </table>
                <h2>El subtotal es: $<?php echo $subtotal; ?></h2>
            </div>
        </div>
    </div>
</body>

</html>