<?php
for ($i = 0; $i <= 100 && $i != 60; $i += 2) {
    echo $i . "<br>";
}
?>
 <?php 
                 foreach ($aPacientes as $pos => $paciente) {
                    echo $paciente ["dni"] . "<br>";
                    echo $paciente ["nombre"] . "<br>";
                    echo $paciente ["edad"] . "<br>";
                    echo $paciente ["peso"];
                } 
                ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de pacientes</title>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Listado de pacientes</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-hover">
                <tr>
                    <th>DNI</th>
                    <th>Nombre y apellido</th>
                    <th>Edad</th>
                    <th>Peso</th>
                </tr>

                <tr>
                    <td><?php echo $aPaciente[0]["dni"]; ?></td>
                    <td><?php echo $aPaciente[0]["nombre"]; ?></td>
                    <td><?php echo $aPaciente[0]["edad"]; ?></td>
                    <td><?php echo $aPaciente[0]["peso"]; ?></td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>