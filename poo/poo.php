<?php
//Definir una clase llamada ,coche

class coche{
    public $marca;
    public $color;

    // constructor
    public function __construct($marca, $color) {
        $this ->marca = $marca;
        $this ->color = $color;
    }

    //metodo
    public function arrancar(){
        echo "el coche ". $this->marca." esta arrancando<br>";
    }

}

//crear el objeto
$miCoche = new Coche("bosvagen", "gris");
$miCoche->arrancar();

// THIS  

class persona{
    public $nombre;

    public function setNombre($nombre) {
        $this ->nombre =$nombre; // 'this' se refiere a este objeto actual
    }

    public function  saludar(){
        echo "hola, mi nombre es ". $this->nombre."<br>";
    }
}

$p = new persona();
$p->setNombre("jose");
$p->saludar(); //salida esperada: hola, mi nombre es jose

//destructor

class ConexionDB {
    public function __construct() {
        echo "conectando a la base de datos <br>";
    }
    public function __destruct() {
        echo "Cerrando conexion con la base de datos <br>";
    }
    
}

$conexiones = new ConexionDB();
 echo "Haciendo consultas en la base de datos<br>";

 //piblic
 class usuario {
    public $nombre = "Jose";

    public function saludar() {
        return "Hola, soy ".$this->nombre;
    }
 }

 $u = new Usuario();
 echo $u->nombre."<br>"; // salida esperada: Jose
 echo $u->saludar()."<br>"; // salida esperada: Hola, soy Jose

 //private
 class UsuarioPrivado {
    private $clave = "secreta123";

    public function verClave(){
        return "La clave es: ". $this->clave; //apesar de no poder intrar a clave, podemos ver su contenido con una funcion dentro de la clsae, la cual si puede acceder a el
    }   
 }

 $up = new UsuarioPrivado();
 //echo $up->clave;  Esto generará un error, ya que 'clave' es privada y no se puede acceder directamente
 echo $up->verClave()."<br>"; // salida esperada: La clave es: secreta123

    //protected
class UsuarioProtegido 