<?php

/*while ($min<60){
    echo "la hora es $hr:$min hs. <br>";
    $min++;

    if($min==59){
        $min=0;
        $hr++;
    }
    if($hr==24){
    $hr=0;
    }
}
  */


date_default_timezone_set('America/Argentina/Buenos_Aires');

$hr = date("H");
$min = date("i");

echo "La hora es: $hr:$min hs. <br>";

for ($i=0; $i < 60; $i++) { 
    
    echo "La hora es: " . (($hr >= 0 && $hr <= 9) ? "0$hr" : $hr) . ":" . (($min >= 0 && $min <= 9) ? "0$min" : $min) . "hs. <br>";
    $min++;
    if ($min==60) {
        $hr++;
        $min = 0;
    }
    if ($hr==24){
    $hr=0;
}


       
   


}
