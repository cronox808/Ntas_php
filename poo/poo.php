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