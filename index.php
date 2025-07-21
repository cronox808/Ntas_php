<?php
header('Content-Type: text/html; charset=utf-8');
$opcion = 1;

switch($opcion){
    case 1:
        echo "Has elegido jugar"."<br>";
        break;
    case 2:
        echo "has elegido ver estadisticas"."<br>";
        break;
    case 3:
        echo "Has elegido salir"."<br>";
        break;
}

$usuario = "admin";
$clave = 1234;

if ($usuario === "admin" && $clave === 1234){
    echo "Acceso permitido"."<br>";
} else{
    echo "Acceso denegado"."<br>";
}

/**funciones */

function saludar($nombre){
    echo $nombre."<br>";
}

saludar("jose david");

function suma($numero1, $numero2){
    echo $numero1 + $numero2."<br>";
}

suma(2, 2);

function promedio($n1, $n2, $n3){
    $dividir = 3;
    return ($n1+$n2+$n3) / $dividir. "<br>";

}

echo promedio(3, 2, 4);

// arrays 

$array = [
    "rojo", "verde", "azul"
];
//recorre todos los elementos de $array y los almacena en $lista
foreach ($array as $lista){
    echo $lista."<br>";
}

echo count($array)."<br>";

$frutas= ["manzana", "pera", "banano", "kiwui", "pitalla"];

foreach ($frutas as $fruta){
    echo $fruta."<br>";
}

$libros = [
    "titulo" => "La vuelta al mundo en 80 dias",
    "autor" => "Julio Verne",
    "año" => "1872"

];

foreach ($libros as $clave => $info) {
    echo "$clave: $info<br>";
}

$productos = [
    [
        "nombre" => "RTX 5090",
        "precio" => "11,593.101",
        "stock" => "20"
    ],
    [
        "nombre" => "La vuelta al mundo en 80 dias",
        "precio" => "29.000",
        "stock" => "10"
    ]
];

foreach ($productos as $info) {
    echo "Producto: " . $info["nombre"] .
        " - Precio: $" . $info["precio"] .
        " - Stock: " . $info["stock"] . "<br>";
}
$numero = [1, 2, 3, 4, 5];

echo count($numero);

array_push($numero, 6);

//bucles
$i = 1;

while ($i <= 10){
    echo $i. ", ";
    $i++;
}

$entradas = [4, 7, 2, 0, 9];
$entrada = 0;

    do{
        foreach ($entradas as $entrada) {
            echo "Ingresado: ".$entrada."<br>";
        }
    }while ($entrada = 0);

$numero = 5;
for ($i = 1; $i <= 10; $i++){
    echo $numero ." x ".$i." = ". $numero * $i."<br>";
}
?>

<?php
//post y get
$name = $_POST["nombre"];

if (isset($name) && !empty($name)){
    echo "El nombre resbido es: ".$name."<br>";
}else{
    echo "no se encontro ningun nombre". "<br>";
}

$Name = $_POST["Name"];
$Edad = $_POST["Edad"];

if (isset($Name) && isset($Edad) && !empty($Name) && !empty($Edad)){
    echo "Hola ".$Name." tienes ".$Edad. " años.". "<br>";
}else{
    echo"no se introdujo nada". "<br>";
}

//superglobales
echo $_REQUEST["nombre"]. "<br>";
echo "Muestra el nombre del archivo actual: ".$_SERVER["PHP_SELF"]. "<br>";
echo "GET o POST: ".$_SERVER["REQUEST_METHOD"]. "<br>";
echo "Info del navegador: ".$_SERVER["HTTP_USER_AGENT"]. "<br>";

// subir.php
$archivo = $_FILES["mi_archivo"];
echo "el archivo se llama: ".$archivo["name"]."<br>"; // Nombre del archivo

//manejo de archivos en php
//$archivito = fopen("datos.txt", "a");
//fwrite($archivito, " hola mundo");
//fclose($archivito);

$archivito1 = fopen("datos.txt", "r");
$contenido = fread($archivito1, filesize("datos.txt"));
fclose($archivito1);

echo "la longitud en byts es: ".filesize("datos.txt")."<br>";

echo $contenido."<br>";

$contenidos = file_get_contents("datos.txt");
echo $contenidos."<br>";

file_put_contents("prueba.txt", "hola cronox\n ");

file_put_contents("prueba.txt", "esta es otra linea mas\n", FILE_APPEND);

$contenido1 = file_get_contents("prueba.txt");

echo "<pre>$contenido1</pre>";

$lineas = fopen("datos.txt", "r");

while (!feof($lineas)){
    $linea= fgets($lineas);
    echo $linea . "<br>";
}

fclose($lineas);

$usuarios = fopen("usuarios.txt", "r");

while (!feof($usuarios)) {
    $renglon = fgets($usuarios);
    echo $renglon . "<br>";
}

echo $renglon;

unlink("usuarios.txt");