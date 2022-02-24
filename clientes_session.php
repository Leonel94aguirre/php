<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

if (!isset($_SESSION["listadoClientes"])) {
    $_SESSION["listadoClientes"] = array();
}


print_r($_SESSION);

if ($_POST) {
    $nombre = $_REQUEST["txtNombre"];
    $dni = $_REQUEST["txtDni"];
    $telefono = $_REQUEST["txtTelefono"];
    $edad = $_REQUEST["txtEdad"];



    if (isset($_POST["btnEnviar"])) {
        $_SESSION["listadoClientes"][] = array(
            "nombre" => $nombre,
            "dni" => $dni,
            "telefono" => $telefono,
            "edad" => $edad,
        );
    } else {
        if (isset($_POST["btnBorrar"])) {
            session_destroy();
            $_SESSION["listadoClientes"] = array();
        }
    }
}


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Tabla de clientes</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-3 offset-1 ">
            <form action="" method="POST">

                <label for="txtNombre">Nombre y apellido:
                    <input type="text" name="txtNombre" id="txtNombre" class="form-control my-2" placeholder="Ingrese su nombre y apellido.">
                </label>
                <label for="txtDni">DNI:
                    <input type="text" name="txtDni" id="txtDni" class="form-control my-2" placeholder="22.333.444">
                </label>
                <label for="txtTelefono">Teléfono:
                    <input type="tel" name="txtTelefono" id="txtTelefono" class="form-control my-2" placeholder="11 11111111">
                </label>
                <label for="txtEdad">Edad:
                    <input type="text" name="txtEdad" id="txtEdad" class="form-control my-2" placeholder="99">
                </label>
                <div class="my-3">
                    <button type="submit" name="btnEnviar" class="btn btn-primary">ENVIAR</button>
                    <button type="submit" name="btnBorrar" class="btn btn-secondary">BORRAR</button>
                </div>
            </form>
        </div>
        <div class="col-6 ms-5">
            <table class="table table-hover border shadow">
                <thead>
                    <th>Nombre y apellido:</th>
                    <th>DNI:</th>
                    <th>Teléfono:</th>
                    <th>Edad:</th>
                </thead>
                <tbody>
                    <?php
                    foreach ($_SESSION["listadoClientes"] as $cliente) {
                    ?>
                        <tr>
                            <td><?php echo $cliente["nombre"]; ?></td>
                            <td><?php echo $cliente["dni"]; ?></td>
                            <td><?php echo $cliente["telefono"]; ?></td>
                            <td><?php echo $cliente["edad"]; ?></td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
    </div>
</body>

</html>