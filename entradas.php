<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Vamos a difinir la clase producto 
class Producto{
    // DEFINICION DE ATRIBUTOS
    public $precio;
    public $nombre;
    private $disponible;

    // Método constructor
    public function __construct(int $precio = 0 ,string $nombre = 'SIN NOMBRE', bool $disponible = false)
    {
        $this->precio = $precio;
        $this->nombre = $nombre;
        $this->disponible = $disponible;
    }

    // DEFINICION DE METODOS

    private function mostrarNombreProducto() : void{
        echo $this->nombre;
    }

    public function mostrarPrecioProducto() : void{
        echo $this->precio;
    }

    public function mostrarInformacionProducto() : void{
        $this->mostrarNombreProducto();
        echo $this->precio;
    }

    // METODOS GETTER
    public function getDisponibilidad() : string {
        return $this->disponible ? 'SI ESTA DISPONIBLE' : 'NO ESTA DISPONIBLE';
    }
    // METODOS SETTER
    public function setDisponibilidad(bool $disponible) : void {
        $this->disponible = $disponible;
    }
    
}

// vamos a crear un objeto 
// CREAR UNA INSTANCIA
$mesa = new Producto(); 

$mesa->nombre = "Mesa";
$mesa->precio = 500;
// $mesa->disponible = 'disponible'; 
// $mesa->setDisponibilidad(false);
// echo $mesa->getDisponibilidad();

// $silla = new Producto(); 

// $mesa->nombre = "Silla grande";
// $mesa->precio = 100;
// $mesa->disponible = false;



echo "<pre>";
var_dump($mesa);
echo "</pre>";
// echo "<pre>";
// var_dump($silla);
// echo "</pre>";

// $mesa->mostrarNombreProducto();
$mesa->mostrarInformacionProducto();
// $silla->mostrarNombreProducto();
// $mesa->mostrarPrecioProducto();
?>