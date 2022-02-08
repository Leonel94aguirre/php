
<?php
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
    <?php echo $mensaje; ?>
    <?php echo $segundo; ?>
</main>
</body>
</html>

