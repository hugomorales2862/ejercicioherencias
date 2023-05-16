<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Vamos a difinir la clase producto 
class Producto{
    // DEFINICION DE ATRIBUTOS
    public $valor;
    public $nombre;
    private $disponible;

    // Método constructor
    public function __construct(int $valor = 0 ,string $nombre = 'SIN NOMBRE', bool $disponible = false)
    {
        $this->valor = $valor;
        $this->nombre = $nombre;
        $this->disponible = $disponible;
    }

    // DEFINICION DE METODOS

    private function mostrarNombreProducto() : void{
        echo $this->nombre;
    }

    public function mostrarPrecioProducto() : void{
        echo $this->valor;
    }

    public function mostrarInformacionProducto() : void{
        $this->mostrarNombreProducto();
        echo "<br>";
        echo $this->valor;
    }

    // METODOS GETTER
    //usamos el return para asignarle una accion a la funcion y no asi un echo
    public function getDisponibilidad() : string {
        return $this->disponible ? 'SI ESTA DISPONIBLE' : 'NO ESTA DISPONIBLE';
    }
    // METODOS SETTER nos sirve para obtener la informacion cuado la declaramos como privade 
    public function setDisponibilidad(bool $disponible) : void {
        $this->disponible = $disponible;
    }
    
}

// vamos a crear un objeto 
// CREAR UNA INSTANCIA
$cama = new Producto(); 

$cama->nombre = "cama ";
$cama->valor = 1000;
// $mesa->disponible = 'disponible'; 
// $mesa->setDisponibilidad(false);
// echo $mesa->getDisponibilidad();

// $silla = new Producto(); 

// $mesa->nombre = "Silla grande";
// $mesa->precio = 100;
// $mesa->disponible = false;



echo "<pre>";
var_dump($cama);
echo "</pre>";
// echo "<pre>";
// var_dump($silla);
// echo "</pre>";
echo "<br>";
// $mesa->mostrarNombreProducto();
$cama->mostrarInformacionProducto();
// $silla->mostrarNombreProducto();
// $mesa->mostrarPrecioProducto();
?>