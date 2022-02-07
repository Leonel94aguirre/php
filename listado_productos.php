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
    <main class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Listado de productos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table border table-hover">
                    <thead>
                        <th><strong>Nombre</th>
                        <th><strong>Marca</th>
                        <th><strong>Modelo</th>
                        <th><strong>Stock</th>
                        <th><strong>Precio</th>
                        <th><strong>Acción</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $aProductos[0]["nombre"]; ?></td>
                            <td><?php echo $aProductos[0]["marca"]; ?></td>
                            <td><?php echo $aProductos[0]["modelo"]; ?></td>
                            <td><?php echo $aProductos[0]["stock"] > 10 ? "hay stock" : ($aProductos[0]["stock"] > 0 && $aProductos[0]["stock"] <= 10 ? "poco stock" : "sin stock"); ?></td>
                            <td><?php echo $aProductos[0]["precio"]; ?></td>
                            <td><a href="" class="btn bg-primary text-white">Comprar</a></td>
                        </tr>
                        <tr>
                            <td><?php echo $aProductos[1]["nombre"]; ?></td>
                            <td><?php echo $aProductos[1]["marca"]; ?></td>
                            <td><?php echo $aProductos[1]["modelo"]; ?></td>
                            <td><?php echo $aProductos[1]["stock"] > 10 ? "hay stock" : ($aProductos[1]["stock"] > 0 && $aProductos[1]["stock"] <= 10 ? "poco stock" : "sin stock"); ?></td>
                            <td><?php echo $aProductos[1]["precio"]; ?></td>
                            <td><a href="" class="btn bg-primary text-white">Comprar</a></td>
                        </tr>
                        <tr>
                            <td><?php echo $aProductos[2]["nombre"]; ?></td>
                            <td><?php echo $aProductos[2]["marca"]; ?></td>
                            <td><?php echo $aProductos[2]["modelo"]; ?></td>
                            <td><?php echo $aProductos[2]["stock"] > 10 ? "hay stock" : ($aProductos[2]["stock"] > 0 && $aProductos[2]["stock"] <= 10 ? "poco stock" : "sin stock"); ?></td>
                            <td><?php echo $aProductos[2]["precio"]; ?></td>
                            <td><a href="" class="btn bg-primary text-white">Comprar</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </main>
</body>

</html>