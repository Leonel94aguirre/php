<?php
$aEmpleados = array();
$aEmpleados[] = array("dni" => 33568132, "nombre" => "David Garcia", "bruto" => 85000.30);
$aEmpleados[] = array("dni" => 38065479, "nombre" => "Ana Del Valle", "bruto" => 90000);
$aEmpleados[] = array("dni" => 40658125, "nombre" => "Andres Perez", "bruto" => 100000);
$aEmpleados[] = array("dni" => 52668749, "nombre" => "Victoria Luz", "bruto" => 700000);

//Definicion
function calcularNeto($bruto)
{
    return $bruto - ($bruto * 0.17);
}



?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Empleados</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Listado de empleados</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <tr>
                        <th>DNI</th>
                        <th>Nombre</th>
                        <th>Sueldo</th>
                    </tr>
                    <?php
                    $contador = 0;
                    foreach ($aEmpleados as $empleado) {
                        echo "<tr>";
                        echo "<td>" . $empleado["dni"] . "</td>";
                        echo "<td>" . strtoupper($empleado["nombre"]) . "<td>";
                        echo "<td>" . number_format(calcularNeto($empleado["bruto"]), 2, ",", ".") . "</td>";
                        echo "</tr>";
                        $contador++;
                    }
                    ?>
                </table>
                <?php echo "Cantidad de empleados activos: " . $contador;?>

            </div>
</body>

</html>