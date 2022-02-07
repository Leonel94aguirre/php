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


?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica</title>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Listado de pacientes</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <tr>
                        <th>DNI</th>
                        <th>Nombre y apellido</th>
                        <th>Edad</th>
                        <th>Peso</th>
                    </tr>
                    <?php
                    foreach ($aPacientes as $paciente) {
                    ?>
                        <tr>
                            <td><?php echo $paciente["dni"]; ?></td>
                            <td><?php echo $paciente["nombre"]; ?></td>
                            <td><?php echo $paciente["edad"]; ?></td>
                            <td><?php echo $paciente["peso"]; ?></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</body>

</html>