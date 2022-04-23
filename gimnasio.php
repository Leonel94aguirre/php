<?php

use Persona as GlobalPersona;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Definición de clases

class Persona {
    protected $dni;
    protected $nombre;
    protected $correo;
    protected $celular;

    public function __get($propiedad)
    {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor)
    {
        $this->$propiedad = $valor;
    }

}

class Clase{
    private $nombre;
    private $entrenador;
    private $aAlumnos;

    public function __get($propiedad)
    {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor)
    {
        $this->$propiedad = $valor;
    }

    public function __construct()
    {
        $this->aAlumnos = array();
    }

    public function asignarEntrenador($entrenador){
        $this->entrenador = $entrenador;
        $entrenador->asignarClase($this->nombre);
    }

    public function inscribirAlumno($alumno){
        $this->aAlumnos[] = $alumno;
    }

    public function imprimirListado(){
        echo "Clase: " . $this->nombre . "<br>";
        echo "Entrenador: " . $this->entrenador->nombre . "<br>";
        echo "Alumnos: ";
        foreach ($this->aAlumnos as $key => $alumno) {
            echo $alumno->nombre;
            if ($key < count($this->aAlumnos) - 1) 
                echo ",";
            } echo "<br><br>";

    }
}

class Alumno extends Persona {
    private $fechaNac;
    private $peso;
    private $altura;
    private $aptoFisico;
    private $presentismo;

    public function __get($propiedad)
    {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor)
    {
        $this->$propiedad = $valor;
    }

    public function setFichaMedica($peso, $altura, $aptoFisico){
        $this->peso = $peso;
        $this->altura = $altura;
        $this->aptoFisico = $aptoFisico;
    }
}

class Entrenador extends Persona {
    private $aClases;

    public function __get($propiedad)
    {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor)
    {
        $this->$propiedad = $valor;
    }

    public function __construct()
    {
        $this->aClases = array();
    }

    public function asignarClase($clase){
        $this->aClases = $clase;
    }
}

//Programa
$entrenador1 = new Entrenador();
$entrenador1->dni = "38465294";
$entrenador1->nombre = "Emiliano Aguirre";
$entrenador1->correo = "aguirre@correo.com";
$entrenador1->celular = "1126386148";


$entrenador2 = new Entrenador();
$entrenador2->dni = "39465789";
$entrenador2->nombre = "Alan Ojeda";
$entrenador2->correo = "ojeda@correo.com";
$entrenador2->celular = "1146587926";


$alumno1 = new Alumno();
$alumno1->dni = "37462897";
$alumno1->nombre = "Iván Riero";
$alumno1->correo = "riero@gmail.com";
$alumno1->celular = "1546589765";
$alumno1->fechaNac = "1997-04-23";
$alumno1->setFichaMedica = "90, 178, true";
$alumno1->presentismo = 78;
print_r($alumno1);

$alumno2 = new Alumno();
$alumno2->dni = "45286479";
$alumno2->nombre = "Cesar Medina";
$alumno2->correo = "medina@gmail.com";
$alumno2->celular = "1145798632";
$alumno2->fechaNac = "1992-11-07";
$alumno2->setFichaMedica = "100, 168, false";
$alumno2->presentismo = 68;


$alumno3 = new Alumno();
$alumno3->dni = "38025687";
$alumno3->nombre = "Daniel Montllau";
$alumno3->correo = "dmonshi@gmail.com";
$alumno3->celular = "1156895238";
$alumno3->fechaNac = "1996-04-11";
$alumno3->setFichaMedica = "90, 187, true";
$alumno3->presentismo = 88;


$alumno4 = new Alumno();
$alumno4->dni = "45452995";
$alumno4->nombre = "Jessica Pérez";
$alumno4->correo = "perez@gmail.com";
$alumno4->celular = "1126568974";
$alumno4->fechaNac = "1997-10-19";
$alumno4->setFichaMedica = "50, 153, false";
$alumno4->presentismo = 98;


$clase1 = new Clase();
$clase1->nombre = "Funcional";
$clase1->asignarEntrenador($entrenador1);
$clase1->inscribirAlumno($alumno4);
$clase1->inscribirAlumno($alumno1);
$clase1->inscribirAlumno($alumno3);
$clase1->imprimirListado();



$clase2 = new Clase();
$clase2->nombre = "Gimnasia Artistica";
$clase2->asignarEntrenador($entrenador2);
$clase2->inscribirAlumno($alumno1);
$clase2->inscribirAlumno($alumno2);
$clase2->imprimirListado();






?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Gimnasio</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <td> <?php ?></td>
            </div>
        </div>
    </main>
</body>
</html>