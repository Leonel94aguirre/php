
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST["txtUsusario"]) && isset ($_POST["txtClave"])) {
    
    ;
} else { ;
}
function sumar ($num1 , $num2) {
    $resultado = $num1 + $num2;
    return $resultado;
}

$mensaje =  "La suma es:" . sumar(5000,800) . "<br>";
$segundo =  "La suma es:" . sumar(100,20);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
</head>
<body>
<main>
    <div class="alert alert-primary" role="alert">

    </div>
    <?php echo $mensaje; ?>
    <?php echo $segundo; ?>
</main>
</body>
</html>

<button type="submit" class="btn btn-primary my-3">SALIR</button>
