<?php

function print_f1($variable){
    $archivo = fopen("datos.txt", "a+");

    if (is_array($variable)) {
        foreach ($variable as $item){
            fwrite($archivo , $item . "\n");
        }
    }
    else {
        fwrite($archivo, $variable . "\n");
    }
    fclose("datos.txt");
}
//Uso
//$aNotas = array(8,5,7,9,10)
$msg = "Este es un mensaje";
print_f1($msg);


?>
