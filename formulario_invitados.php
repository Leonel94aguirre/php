<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Lista de invitados admitidos
//Preguntamos si existe el archivo "invitados.txt"
if (file_exists("invitados.txt")) {
    //Si es asi lo leemos con file_get_contents() y utilizamos la función explode que delimita un caracter que nosotros le indiquemos
    $aInvitados = explode(",", file_get_contents("invitados.txt"));
} else {
    $aInvitados = array();
}
//Preguntamos: Es POST? si! Pero tenemos que saber cual de los 2 botones hizo clic
if ($_POST) {
    //Es "btnInvitados"? esta seteado?
    if (isset($_REQUEST['btnInvitado'])) {
        //Si es btninvitados creamos una variable para capturar los datos del formulario
        //La funcion trim elimina los espacios laterales que pueda haber
        $nombre = trim($_REQUEST['txtNombre']);
        //tenemos que verificar si $nombre esta en una lista de invitados que esta dentro de un array "in_array()"
        if (in_array($nombre, $aInvitados)) //$nombre esta dentro del array $aInvitados?
        {
            $aMensaje = array(
                "texto" => "¡Bienvenid@ $nombre a la reunion Pony! Su código de acceso es Pony forever" ,
                "estado" => "success"
            );
        } else {
            $aMensaje = array(
                "texto" => "No es parte de la hermandad.",
                "estado" => "danger"
            );
        }
        //Y si no.. Esta seteado el "btnVip"?
    } else if (isset($_REQUEST['btnVip'])) {
        $respuesta = trim($_REQUEST['txtVip']);
        //Pregunto: es verde la respuesta?
        if ($respuesta == "Pony forever") {
            //Si es asi creo un msj "Su código de acceso es"
            $aMensaje = array("texto" => "Su código de acceso VIP es " . rand(1000, 9999), "estado" => "success");
        } else {
            $aMensaje = array("texto" => "Ud. no tiene pase VIP", "estado" => "danger");
            //$aMensaje hay que mostrarlo abajo en una alerta
        }
    }
}



?>
<!-- Se maqueta... -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <title>Listado de ingreso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1>Listado de invitados</h1>
            </div>
            <?php
            //Pregunto: existe la variable $aMensaje del array?
            if (isset($aMensaje)) : ?>
                <!--Si existe va a generar el div de abajo -->
                <div class="col-12">
                    <!-- Por un lado es un alert que tiene un color que lo trae del "estado"-->
                    <div class="alert alert-<?php echo $aMensaje["estado"]; ?>" role="alert">
                        <!-- Y por este lado el "texto"-->
                        <?php echo $aMensaje["texto"]; ?>
                    </div>
                </div>
            <?php endif; ?>
            <div class="col-12">
                <p>Complete el siguiente formulario:</p>
            </div>
        </div>
        <div class="col-6">
            <!-- Ponemos method="POST" y tenemos 2 botones: uno "btnInvitado" y el otro "btnVip"  -->
            <form action="" method="POST">
                <div class="row">
                    <div class="col-12">
                        <label for="txtNombre" class="mb-3">Ingrese el nombre:</label>
                        <input type="text" name="txtNombre"  class="form-control">
                        <input type="submit" name="btnInvitado" value="Verificar invitado" class="btn btn-primary">
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <label for="txtVip" class="mb-3">Ingresa el código secreto para el pase VIP:</label>
                        <input type="text" name="txtVip" id="txtVip" class="form-control">
                        <input type="submit" name="btnVip" value="Verificar código" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
        </div>
    </main>
</body>

</html>