<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Definición de clases

class Persona {
    protected $documento;
    protected $nombre;
    protected $edad;
    protected $nacionalidad;

    public function setNombre($nombre){ $this->nombre = $nombre; }
    public function getNombre(){ return $this->nombre; }

    public function setDocumento($documento){ $this->documento = $documento; }
    public function getDocumento(){ return $this->documento; }

    public function setEdad($edad){ $this->edad = $edad; }
    public function getEdad(){ return $this->edad; }

    public function setNacionalidad($nacionalidad){ $this->nacionalidad = $nacionalidad; }
    public function getNacionalidadd(){ return $this->nacionalidad; }

    public function imprimir(){

    }
}
class Alumno extends Persona{
    private $legajo;
    private $notaPortfolio;
    private $notaPhp;
    private $notaProyecto;
    private $promedio;
    private $presentismo;
    private $aCursos;

    public function __construct(){
        $this->notaPortfolio = 0.0;
        $this->notaPhp = 0.0;
        $this->notaProyecto = 0.0;
    }

    public function __get($propiedad){
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor){
        $this->$propiedad = $valor;
    }

    public function imprimir(){
        echo "DNI: " . $this->documento . "<br>";
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Edad: " . $this->edad . "<br>";
        echo "Nacionalidad: " . $this->nacionalidad . "<br>";
        echo "Nota portfolio: " . $this->notaPortfolio . "<br>";
        echo "Nota PHP: " . $this->notaPhp . "<br>";
        echo "Nota proyecto: " . $this->notaProyecto . "<br>";
        echo "El promedio es: " . $this->calcularPromedio() . "<br><br>";
    }
    public function calcularPromedio(){
        return ($this->notaPortfolio + $this->notaPhp + $this->notaProyecto) / 3;
    }

    public function __destruct()
    {
        echo "Destruyendo el objeto: " . $this->nombre . "<br>";
    }
}

class Docente extends Persona{
    private $especialidad;

    const ESPECIALIDAD_WP = "Wordpress";
    const ESPECIALIDAD_MAT = "Matemáticas";
    const ESPECIALIDAD_BBDD = "Base de datos";

    public function __construct($dni, $nombre, $edad, $nacionalidad, $especialidad){
        $this->documento = $dni;
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->nacionalidad = $nacionalidad;
        $this->especialidad = $especialidad;
    }

    public function __get($propiedad){
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor){
        $this->$propiedad = $valor;
    }

    public function imprimir(){
        echo "DNI: " . $this->documento . "<br>";
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Edad: " . $this->edad . "<br>";
        echo "Nacionalidad: " . $this->nacionalidad . "<br>";
        echo "Especialidad: " . $this->especialidad . "<br>";
    }

    public function imprimirEspecialidadesHabilitadas(){
        echo "Las especialidades habilitadas para un docente son:<br>";
        echo self::ESPECIALIDAD_MAT . "<br>";
        echo self::ESPECIALIDAD_BBDD . "<br>";
        echo self::ESPECIALIDAD_WP . "<br>";
    }
    public function __destruct()
    {
        echo "Destruyendo el objeto: " . $this->nombre . "<br>";
    }

}

//Programa

$alumno1 = new Alumno();
$alumno1->setDocumento(36189647); 
$alumno1->setNombre("Emiliano Aguirre");
$alumno1->setEdad(27);
$alumno1->setNacionalidad("Argentino");
$alumno1->notaPortfolio = 8;
$alumno1->notaPhp = 8;
$alumno1->notaProyecto = 9;
$alumno1->imprimir();

$alumno2 = new Alumno(); 
$alumno2->setDocumento(38056458);
$alumno2->setNombre("Iván Riero");
$alumno2->setEdad(25);
$alumno2->setNacionalidad("Argentino");
$alumno2->notaPortfolio = 7;
$alumno2->notaPhp = 8;
$alumno2->notaProyecto = 10;
$alumno2->imprimir();

$docente1 = new Docente("45442965", "Jessica Perez", "24", "Paraguaya", Docente::ESPECIALIDAD_MAT);
$docente1->imprimir();
 

?>