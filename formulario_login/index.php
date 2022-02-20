<?php
if ($_POST) {
    $usuario = $_REQUEST["txtUsuario"];
    $clave = $_REQUEST["txtClave"];

if ($usuario != "" && $clave != "")  {
        header("Location: acceso-confirmado.php");

    }    else {$mensaje = "Válido para usuarios registrados.";}

}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-3">
                <h1>Formulario</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php if (isset ($mensaje) && $mensaje != ""): ?>
                    <div class="alert alert-danger" role="alert"> <?php echo $mensaje; ?></div>
                    <?php endif; ?>
                <form action="" method="POST">
                    <label for="txtUsuario">Usuario:</label>
                    <input type="text" name="txtUsuario" id="txtUsuario" class="form-control">

                    <div class="col-12">
                        <label for="txtClave">Clave:</label>
                        <input type="password" name="txtClave" id="txtClave" class="form-control">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary my-3">ENVIAR</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>