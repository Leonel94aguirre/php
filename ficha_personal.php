<?php
$fecha = date("d/m/Y");
$nombre = "Emiliano Leonel Aguirre";
$edad = 27;
$aPeliculas = array("Marvel", "Logan", "spiderman");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha personal</title>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Ficha personal</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table border table-hover">
                    <tr>
                        <td>Fecha:</td>
                        <td><?php echo $fecha; ?></td>
                    </tr>
                    <tr>
                        <td>Nombre y apellido:</td>
                        <td><?php echo $nombre; ?></td>
                    </tr>
                    <tr>
                        <td>Edad:</td>
                        <td><?php echo $edad; ?></td>
                    </tr>
                    <tr>
                        <th>Peliculas favoritas:</th>
                        <td>
                            <?php echo $aPeliculas[0]; ?><br>
                            <?php echo $aPeliculas[1]; ?><br>
                            <?php echo $aPeliculas[2]; ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </main>
</body>

</html>