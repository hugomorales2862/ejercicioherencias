<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// FINAL - 
// ABSTRACT -
// STATIC -

//las clases abstract son las que no se instancian si no que solo pueden ser heredadas
abstract class verduras{
    protected $nombre;
    public $precio;
    public static $color = "Verde"; // usamos el static para que este nombre pueda aparecer como por defecto 

    public function __construct($nombre, $precio){
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    final public static function getColor(){
        echo "Las verduras son de color  " . self::$color; 
        //cuando usamos el metodo static no se puede hacer referencia usando this 
         // unicamente con el self 
    }

    public function getInfo() : void{
        echo "Las verduras segun su tipo tienen un nombre $this->nombre y tienen un precio $this->precio Quetzales";
    }

    public function getNombre(): void{
        echo "El nombre del tipo de verdura es $this->nombre";
    }
}

class Verdura_grande extends verduras{
    public $nombre;

    public function __construct($nombre = 'verdura', $precio = 0, $estado = 'comestible')
    {
        $this->nombre = $nombre;
        //el parent hace referencia a la clse parent 
        parent::__construct($nombre, $precio, $estado);
    }

    public function getInfo() : void{
        echo "el $this->nombre es una verdura y tiene un precio de $this->precio Quetzales y el color es: " . parent::$color;
    }
}

class Zanahoria extends verduras{
    public function getInfo() : void{
        echo "La $this->nombre es una verdura y tiene un precio de $this->precio Quetzales";
    }
}

echo '<pre>';
$verdurasTomate = new verdura_grande('tomate',4,'no comestible');
$verdurasTomate->getInfo();
echo "<br>";
$verdurasZanahoria= new Zanahoria('Zanahoria',2);
$verdurasZanahoria->getInfo();
echo '</pre>';

?>

