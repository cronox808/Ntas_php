PHP (PHP: Hypertext Preprocessor) es un

**lenguaje de programación de código abierto y de propósito general, especialmente diseñado para el desarrollo web**

. Se utiliza principalmente para crear páginas web dinámicas que interactúan con bases de datos y generan contenido en tiempo real. PHP se ejecuta en el servidor, procesando el código antes de enviarlo al navegador del cliente.

En términos más sencillos, PHP es la tecnología que permite a los sitios web ser dinámicos, es decir, que el contenido pueda cambiar según la interacción del usuario o la información que se encuentra en una base de datos.

**Características principales de PHP:**

- **Código abierto:** PHP es gratuito y cualquiera puede usarlo y modificarlo.

**Lenguaje de script del lado del servidor:** El código PHP se ejecuta en el servidor, no en el navegador del usuario.

- **Lenguaje de script del lado del servidor:** El código PHP se ejecuta en el servidor, no en el navegador del usuario.

**Fácil de aprender:** PHP tiene una sintaxis relativamente sencilla, lo que facilita su aprendizaje, especialmente para principiantes.

- **Fácil de aprender:** PHP tiene una sintaxis relativamente sencilla, lo que facilita su aprendizaje, especialmente para principiantes.

**Versatilidad:** PHP se puede integrar con HTML y se conecta a una gran variedad de bases de datos como MySQL, PostgreSQL, entre otras.

- **Versatilidad:** PHP se puede integrar con HTML y se conecta a una gran variedad de bases de datos como MySQL, PostgreSQL, entre otras.

**Amplia comunidad:** Existe una gran comunidad de desarrolladores que contribuyen con recursos, librerías y soporte para PHP.

- **Amplia comunidad:** Existe una gran comunidad de desarrolladores que contribuyen con recursos, librerías y soporte para PHP.

**Rendimiento:** Las versiones más recientes de PHP, como la 8.0, 8.1 y 8.2, ofrecen mejoras significativas en rendimiento en comparación con versiones anteriores.

- **Rendimiento:** Las versiones más recientes de PHP, como la 8.0, 8.1 y 8.2, ofrecen mejoras significativas en rendimiento en comparación con versiones anteriores.

**Usos comunes de PHP:**

**Desarrollo web:**Creación de sitios web dinámicos, tiendas online, blogs, redes sociales y aplicaciones web.

- **Desarrollo web:**Creación de sitios web dinámicos, tiendas online, blogs, redes sociales y aplicaciones web.

**Conexión con bases de datos:**Permite interactuar con bases de datos para almacenar y recuperar información.

- **Conexión con bases de datos:**Permite interactuar con bases de datos para almacenar y recuperar información.

**Procesamiento de formularios:**Manejo de la información enviada por los usuarios a través de formularios web.

- **Procesamiento de formularios:**Manejo de la información enviada por los usuarios a través de formularios web.

**Generación de contenido dinámico:**Creación de páginas web que muestran información personalizada según las necesidades del usuario.

- **Generación de contenido dinámico:**Creación de páginas web que muestran información personalizada según las necesidades del usuario.

**Sistemas de gestión de contenidos (CMS):**PHP es la base de muchos CMS populares como WordPress, Drupal y Joomla.

- **Sistemas de gestión de contenidos (CMS):**PHP es la base de muchos CMS populares como WordPress, Drupal y Joomla.

**Aplicaciones empresariales:**Desarrollo de aplicaciones web para gestión de clientes (CRM) y otros procesos empresariales.

- **Aplicaciones empresariales:**
    
    Desarrollo de aplicaciones web para gestión de clientes (CRM) y otros procesos empresariales.
    

# Partes clave de un archivo PHP:

---

```php
<?php
// Tu código va aquí
?>
```

- **Todo archivo PHP comienza con `<?php`**.
- **Puede (opcionalmente) cerrar con `?>`**.
- Puede incluir múltiples instrucciones separadas por punto y coma (`;`).
- Los comentarios se hacen con `//` o `/* */`.

### Buenas prácticas iniciales:

- Siempre usa `;` para finalizar líneas.
- Usa nombres de archivo descriptivos (`login.php`, `formulario.php`).
- Usa comentarios para explicar secciones del código.

## Comentarios y formato:

---

```php
<?php
// Esto imprime un saludo
echo "Hola, Jose David"; // Comentario de una línea

/* Comentario
   de múltiples líneas */
echo "Bienvenido a PHP";
?>
```

# Diferencias entre print y echo

---

En PHP, tanto `echo` como `print` se utilizan para mostrar datos en la salida, pero tienen algunas diferencias clave. `echo` es más rápido y flexible, permitiendo mostrar múltiples valores a la vez, mientras que `print` solo acepta un argumento y devuelve un valor (1), lo que puede ser útil en ciertas expresiones. 

# Mostrar la versión actual de PHP

---

```php
<?php
echo "Versión actual: " . phpversion();
?>
```

Guárdalo como `version.php` y ejecútalo con:

```bash
php version.php
```

# Condicionales: `if`, `else`, `elseif`

---

### ¿Qué son?

Las estructuras condicionales permiten **tomar decisiones** en el código dependiendo de condiciones lógicas.

### Sintaxis básica:

```php
if (condición) {
    // Código si se cumple la condición
} elseif (otra_condición) {
    // Otra opción si no se cumple la primera
} else {
    // Código si no se cumple ninguna condición
}
```

## Ejemplo:

```php
<?php
$edad = 20;

if ($edad >= 18) {
    echo "Eres mayor de edad";
} elseif ($edad >= 13) {
    echo "Eres adolescente";
} else {
    echo "Eres menor de edad";
}
?>

```

# Operador ternario

---

En PHP, el operador ternario es una forma compacta de escribir una declaración `if-else`. Su sintaxis es la siguiente:

```php
(condición) ? valor_si_verdadero : valor_si_falso;

```

### Ejemplo:

```php
$edad = 18;
$mensaje = ($edad >= 18) ? "Eres mayor de edad" : "Eres menor de edad";
echo $mensaje;

```

En este ejemplo:

- Si la condición `$edad >= 18` es `true`, se asigna el valor `"Eres mayor de edad"` a la variable `$mensaje`.
- Si la condición es `false`, se asigna el valor `"Eres menor de edad"`.

Es una manera de simplificar estructuras de control `if-else`, especialmente cuando la lógica es simple y fácil de entender.

# Condicional `switch`

---

### ¿Qué es?

El `switch` es útil cuando se necesita comparar una variable contra **varios valores exactos**.

### Sintaxis:

```php
switch ($variable) {
    case valor1:
        // código
        break;
    case valor2:
        // código
        break;
    default:
        // código si no se cumple ningún caso
}
```

### Ejemplo:

```php
switch ($variable) {
    case valor1:
        // código
        break;
    case valor2:
        // código
        break;
    default:
        // código si no se cumple ningún caso
}
```

## Operadores de Comparación y Lógicos

---

### Comparación:

- `==`: Igualdad
- `===`: Igualdad estricta (valor y tipo)
- `!=` o `<>`: Diferente
- `<`, `>`, `<=`, `>=`: Comparaciones

### Lógicos:

- `&&`: y
- `||`: o
- `!`: no

## Ejemplo comparación múltiple:

```php
<?php
$usuario = "admin";
$conectado = true;

if ($usuario == "admin" && $conectado) {
    echo "Acceso concedido";
} else {
    echo "Acceso denegado";
}
?>
```

# 🧩 MÓDULO 2: Funciones en PHP

---

## 📘 Tema 2.1 — Crear y Usar Funciones

### ¿Qué es una función?

Una **función** es un bloque de código que se puede reutilizar. Se define una vez y se puede ejecutar (llamar) cuantas veces sea necesario.

### Sintaxis:

```php
function nombreFuncion() {
    // código a ejecutar
}

```

Y se llama así:

```php
nombreFuncion();

```

---

## 💻 Ejemplo 2.1 — Saludo personalizado

```php
<?php
function saludar() {
    echo "¡Hola, bienvenido a PHP!";
}

saludar(); // llamada a la función
?>

```

---

---

## 📘 Tema 2.2 — Parámetros y Argumentos

### ¿Qué son?

Puedes **pasar valores** a las funciones para hacerlas más flexibles.

```php
function saludar($nombre) {
    echo "Hola, $nombre";
}

saludar("Jose David"); // imprime: Hola, Jose David

```

---

## 💻 Ejemplo 2.2 — Sumar dos números

```php
<?php
function sumar($a, $b) {
    echo $a + $b;
}

sumar(5, 3); // imprime 8
?>

```

---

## 📘 Tema 2.3 — Retorno de valores

### ¿Qué es?

En vez de solo imprimir, una función puede **devolver un valor** con `return`.

```php
function multiplicar($a, $b) {
    return $a * $b;
}

$resultado = multiplicar(4, 6);
echo $resultado; // imprime 24

```

---

## 💻 Ejemplo 2.3 — Edad futura

```php
<?php
function edadFutura($edadActual, $años) {
    return $edadActual + $años;
}

echo "Tendrás " . edadFutura(20, 5) . " años en 5 años.";
?>

```

---

## 📘 Tema 2.4 — Funciones con Tipado (PHP 7+)

### Ejemplo con tipo de parámetro y retorno:

```php
function cuadrado(int $n): int {
    return $n * $n;
}

echo cuadrado(4); // 16

```

🔒 **Ventaja:** ayuda a evitar errores al forzar el tipo de dato.

---

## ¿Para qué sirve el tipado de parámetros en PHP?

---

Desde PHP 7 en adelante puedes especificar el tipo de dato que esperas que reciba una función (ej. `int`, `float`, `string`) y también lo que debe **retornar**.

```php
php
Copy code
function multiplicar(int $a, int $b): int {
    return $a * $b;
}

```

✅ Esto:

- **Evita errores** por tipo de dato incorrecto.
- Ayuda a tener **código más claro y robusto**.
- Facilita el trabajo en equipos grandes o con pruebas automatizadas.

# Arrays

## 🔹Arrays indexados

Son arrays donde **cada elemento tiene un número como índice**, comenzando desde 0.

```php
$colores = ["rojo", "verde", "azul"];
echo $colores[0]; // rojo
```

- Se accede a los elementos con índices numéricos (`[0]`, `[1]`...)
- Se pueden modificar, añadir y eliminar elementos.

# Que es un array asociativo

---

Un **array asociativo** en PHP es un tipo de array en el que **las claves no son numéricas** (como en los arrays indexados), sino que pueden ser cualquier tipo de valor **escala** (como un string). En lugar de acceder a los elementos del array por un índice numérico (como `0`, `1`, `2`, etc.), se accede a ellos usando una **clave personalizada**.

### Ejemplo de array asociativo:

```php
$array_asociativo = [
    "nombre" => "Juan",
    "edad" => 30,
    "ciudad" => "Madrid"
]
```

En este ejemplo:

- `"nombre"`, `"edad"`, y `"ciudad"` son las **claves**.
- `"Juan"`, `30`, y `"Madrid"` son los **valores** asociados a esas claves.

### Acceso a los valores de un array asociativo:

```php
echo $array_asociativo["nombre"]; // Salida: Juan
echo $array_asociativo["edad"];   // Salida: 30
```

### Características:

1. **Claves personalizadas**: En lugar de usar índices numéricos, puedes usar cualquier tipo de dato (comúnmente **strings**) como clave.
2. **Acceso directo a valores**: Puedes acceder a los elementos directamente por su clave, lo que hace más legible el código.

---

### Ejemplo práctico:

```php
$persona = [
    "nombre" => "Ana",
    "edad" => 25,
    "ocupacion" => "Ingeniera"
];

// Acceder a los elementos por su clave
echo "Nombre: " . $persona["nombre"] . "<br>";  // Salida: Ana
echo "Edad: " . $persona["edad"] . "<br>";      // Salida: 25
echo "Ocupación: " . $persona["ocupacion"];     // Salida: Ingeniera
```

### Diferencia con un array indexado:

- **Array indexado**: Accedes a los elementos usando índices numéricos (0, 1, 2…).
    
    ```php
    $array_indexado = ["Juan", "Ana", "Carlos"];
    echo $array_indexado[0];  // Salida: Juan
    ```
    
- **Array asociativo**: Accedes a los elementos usando claves personalizadas (como `nombre`, `edad`, etc.).
    
    ```php
    $array_asociativo = [
        "nombre" => "Juan",
        "edad" => 30
    ];
    echo $array_asociativo["nombre"];  // Salida: Juan
    ```
    

---

### ¿Por qué usar arrays asociativos?

- **Más legibles**: Las claves descriptivas como `"nombre"`, `"edad"`, y `"ciudad"` hacen que el código sea más claro y entendible.
- **Acceso más intuitivo**: Es más fácil acceder a un dato usando una clave descriptiva que un número de índice.

---

### **Ejemplo de array asociativo con subarrays:**

A veces, un array asociativo puede contener otros arrays dentro de él, lo que crea una estructura **multidimensional**.

```php
$personas = [
    "juan" => ["edad" => 30, "ocupacion" => "desarrollador"],
    "ana" => ["edad" => 25, "ocupacion" => "diseñadora"]
];

// Acceder a datos dentro de un subarray
echo $personas["juan"]["edad"];  // Salida: 30
echo $personas["ana"]["ocupacion"];  // Salida: diseñadora
```

en PHP puedes convertir un array a un string utilizando varias funciones, dependiendo de cómo quieras que se vea el resultado. Aquí te muestro las más comunes:

---

### 1. **`implode()`** – Unir los elementos de un array en un string

```php
$array = ['manzana', 'banana', 'naranja'];
$string = implode(', ', $array);

echo $string; // Salida: manzana, banana, naranja
```

---

### 2. **`json_encode()`** – Convertir el array a una cadena JSON

```php
$array = ['nombre' => 'Juan', 'edad' => 30];
$string = json_encode($array);

echo $string; // Salida: {"nombre":"Juan","edad":30}
```

---

### 3. **`serialize()`** – Serializar el array (útil para guardar estructuras complejas)

```php
$array = ['nombre' => 'Ana', 'puntos' => [10, 20, 30]];
$string = serialize($array);

echo $string;
// Salida: a:2:{s:6:"nombre";s:3:"Ana";s:6:"puntos";a:3:{i:0;i:10;i:1;i:20;i:2;i:30;}}
```

---

### ¿Cuál usar?

- Usa **`implode()`** si el array es **indexado** y quieres una lista separada por comas u otro separador.
- Usa **`json_encode()`** si quieres **convertir a texto legible** o enviar datos a JavaScript.
- Usa **`serialize()`** si necesitas guardar o transmitir estructuras complejas de PHP.

### Recorrer arrays con `foreach`

```php
foreach ($colores as $color) {
    echo $color . "<br>";
}

foreach ($usuario as $clave => $valor) {
    echo "$clave: $valor <br>";
}
```

## 🔹Recorrer arrays con `foreach`

`foreach` es una estructura que permite **recorrer fácilmente todos los elementos** de un array, sin necesidad de contar los índices.

Permite recorrer un array  y almazenar los datos del arra en una variable para poder acder a ellos

```php
foreach ($colores as $color) {
    echo $color;
}
```

---

## 🔹Funciones útiles para arrays

PHP ofrece muchas funciones para **agregar, quitar, buscar, ordenar y manipular arrays** de forma sencilla y rápida.

Ejemplos:

- `count()`: contar elementos.
- `array_push()`: añadir un elemento.
- `sort()`: ordenar un array.

---

## 🔹 Arrays multidimensionales

Son arrays que contienen **otros arrays como elementos**. Se usan para representar estructuras más complejas como listas de productos, usuarios, etc.

```php
php
Copy code
$productos = [
    ["id" => 1, "nombre" => "Mouse", "precio" => 25000]
];
```

---

# 🔁 Estructuras Repetitivas (Bucles)

---

### 🔹 2. Bucle `while`

🔸 **Descripción**:

Ejecuta un bloque **mientras la condición sea verdadera**. La condición se evalúa **antes** de cada ejecución.

```php
$i = 1;
while ($i <= 5) {
    echo $i;
    $i++;
}
```

---

### 🔹 3. Bucle `do...while`

🔸 **Descripción**:

Es similar al `while`, pero la condición se evalúa **después**, por lo que **siempre se ejecuta al menos una vez**.

```php
$i = 1;
do {
    echo $i;
    $i++;
} while ($i <= 5);
```

---

### 🔹 4. Bucle `for`

🔸 **Descripción**:

Ideal cuando sabes cuántas veces necesitas repetir algo. Incluye **inicialización**, **condición** y **incremento** todo en una sola línea.

```php
for ($i = 1; $i <= 5; $i++) {
    echo $i;
}
```

---

### 🔹 5. Control de bucles: `break` y `continue`

- `break`: sale completamente del bucle.
- `continue`: **salta la iteración actual** y sigue con la siguiente.

```php
for ($i = 1; $i <= 10; $i++) {
    if ($i == 7) break;         // detiene el ciclo
    if ($i % 2 == 0) continue;  // omite los pares
    echo $i . "<br>";           // imprime solo los impares hasta 6
}
```

```php
for ($i = 1; $i <= 5; $i++) {
    if ($i === 3) continue;
    echo $i;
}
```

---

## 🧠 REGLAS IMPORTANTES

- Evita bucles infinitos (donde la condición nunca se vuelve falsa).
- Usa `break` si necesitas detener el bucle según cierta lógica.
- `continue` es útil para **omitir valores específicos** sin detener el ciclo completo.

---

# 🧾 MÓDULO 5 — Formularios en PHP (GET y POST)

---

### 🔹 1. ¿Qué es un formulario?

🔸 **Descripción**:

Un formulario HTML es una sección donde el usuario **introduce datos** que luego se **envían al servidor** para ser procesados por PHP u otro lenguaje backend.

---

### 🔹 2. Método GET

🔸 **Descripción**:

- Los datos se **envían por la URL** (visibles).
- Se accede con `$_GET`.
- Ideal para búsquedas, filtros o datos no sensibles.

```php
<form method="GET" action="procesar.php">
  <input type="text" name="nombre">
  <input type="submit">
</form>
```

```php
echo $_GET["nombre"];
```

---

### 🔹 3. Método POST

🔸 **Descripción**:

- Los datos se **envían de forma oculta** (no se muestran en la URL).
- Se accede con `$_POST`.
- Ideal para datos sensibles: contraseñas, registros, inicios de sesión.

```php
<form method="POST" action="procesar.php">
  <input type="password" name="clave">
  <input type="submit">
</form>

```

```php
echo $_POST["clave"];

```

---

### 🔹 4. Diferencias entre GET y POST

| Característica | GET | POST |
| --- | --- | --- |
| Seguridad | Menos seguro (visible en URL) | Más seguro (oculto) |
| Límite de datos | Sí (~2000 caracteres aprox.) | No práctico |
| Uso común | Filtros, búsqueda, navegación | Formularios, login, envíos |
| Cacheable | Sí | No |

---

### 🔹 5. Validación básica de campos

🔸 **Descripción**:

Antes de procesar los datos, debes asegurarte de que no estén vacíos ni contengan errores básicos.

```php
if (isset($_POST["nombre"]) && !empty($_POST["nombre"])) {
    echo "Nombre: " . $_POST["nombre"];
} else {
    echo "El campo está vacío";
}

```

---

## 🧠 REGLAS IMPORTANTES

- Usa `POST` para cualquier dato sensible.
- Siempre valida la existencia y contenido de los datos con `isset()` y `!empty()`.
- Nunca confíes en los datos del usuario: valida y sanitiza antes de guardar o mostrar.

---

## Ejemplo de get

---

1. **En HTML**, tú creas un campo así dentor del formulario:

```html
<input type="text" name="nombre">

```

👉 Eso quiere decir: “Voy a enviar una variable llamada `nombre`”.

---

1. Cuando el usuario escribe algo, por ejemplo **"Jose David"**, y hace clic en el botón `submit`, eso que escribió se **envía al servidor** (al archivo PHP que pusiste en `action`).

---

1. En PHP, tú capturas ese dato así:

```php
echo $_GET["nombre"]; // Si usaste method="GET"

```

---

1. El navegador te mostrará:

```
Jose David
```

lo malo de esto es que se muetra en la url y en algunos caso habrir en la url el servidor relacionado

🎯 ¡Así es como PHP recibe los datos del formulario y los usa!

---

### 🧠 Analogia rápida

Es como si HTML escribiera una **nota con una variable** (`nombre = Jose David`) y se la entregara a PHP diciendo:

“¡Toma, esto escribió el usuario!”.

y se captura ya sea que la guardes en una variable o la imprimas directamente

---

## ✅ ¿Qué es `isset()`?

### 🔹 Significa: *¿Existe esta variable?*

Sirve para verificar si **una variable ha sido definida** (o existe) y **no es `null`**.

```php
$nombre = "Jose";

if (isset($nombre)) {
    echo "La variable existe";
}

```

📌 En formularios se usa para evitar errores si el usuario **no ha enviado nada**:

```php
if (isset($_POST["nombre"])) {
    echo $_POST["nombre"];
}

```

🔒 **Previene errores tipo: `undefined index`** cuando accedes a un campo que aún no se ha enviado.

---

## ✅ ¿Qué es `empty()`?

### 🔹 Significa: *¿Está vacía esta variable?*

Devuelve `true` si la variable está vacía o es uno de los siguientes casos:

- Cadena vacía: `""`
- Número `0`
- Valor `null`
- Array vacío: `[]`
- Booleano `false`

```php
$nombre = "";

if (empty($nombre)) {
    echo "Está vacío";
}

```

---

## 🧠 Resumen Rápido:

| Función | ¿Qué hace? | ¿Cuándo usarla? |
| --- | --- | --- |
| `isset()` | Verifica si **existe** la variable | Siempre antes de acceder a variables de formularios |
| `empty()` | Verifica si **está vacía o nula** | Para validar si el usuario **llenó** el campo |

---

## 🧪 EJEMPLO COMPLETO CON `POST`

### 🗂️ Archivos necesarios:

### 📄 1. `formulario.html` (el formulario)

```html
<!DOCTYPE html>
<html>
<head>
  <title>Formulario con POST</title>
</head>
<body>
  <h2>Formulario usando POST</h2>
  <form method="POST" action="procesar.php">
    <label>Nombre:</label>
    <input type="text" name="nombre">
    <br><br>
    <input type="submit" value="Enviar">
  </form>
</body>
</html>
```

---

### 📄 2. `procesar.php` (el que recibe y muestra el dato)

```php
<?php
// Verificamos si llegó el dato
if (isset($_POST["nombre"]) && !empty($_POST["nombre"])) {
    echo "El nombre recibido es: " . $_POST["nombre"];
} else {
    echo "No se recibió ningún nombre";
}
?>

```

---

## 🔍 ¿Qué cambia respecto a GET?

| Característica | GET | POST |
| --- | --- | --- |
| Se ve en URL | ✔️  Sí (`?nombre=Jose`) | ❌ No, es invisible |
| Seguridad | Menor (visible) | Mayor (oculto en red) |
| Ideal para | Búsqueda, navegación | Formularios de login, registros |

---

### 🚀 Resultado

1. Abres `formulario.html` en tu navegador.
2. Escribes “Jose David” y le das a **Enviar**.
3. Se abre `procesar.php` y muestra:

```
El nombre recibido es: Jose David

```

Pero **en la URL no aparece el dato**, porque se mandó oculto con POST.

---

# Manejo de formularios y datos (en contexto API)

### 🎯 Objetivo

Capturar datos desde Postman (JSON) y responder de forma estructurada.

### ✅ Temas Aplicados

- `file_get_contents("php://input")` → Para leer el cuerpo JSON.
- `json_decode()` para convertir JSON en array PHP.
- `json_encode()` para devolver respuestas.
- `http_response_code()` para establecer el código HTTP adecuado.
- Validaciones con `isset()`, `empty()`, y tipos.

### 📌 Ejemplo base de lectura de entrada JSON

```php
$input = json_decode(file_get_contents("php://input"), true);
if (!$input || !isset($input['nombre'])) {
    http_response_code(400);
    echo json_encode(["error" => "Nombre es requerido"]);
    exit;
}

```

---

## 🔷 Conexión con la base de datos con PDO

### 🎯 Objetivo

Usar PDO para hacer consultas SQL seguras y eficientes.

### ✅ Temas Aplicados

- Conexión a MySQL.
- `prepare()`, `bindParam()`, `execute()`
- Manejo de errores con `try/catch`.

### 📄 db.php

```php
<?php
function conectar() {
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=taller_api", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        http_response_code(500);
        echo json_encode(["error" => "Error de conexión: " . $e->getMessage()]);
        exit;
    }
}
?>

```

---

## 🔷 MÓDULO 4: MySQL y modelado

### 🎯 Objetivo

Diseñar las tablas relacionales para el backend de productos, categorías y promociones.

### ✅ Temas Aplicados

- Claves primarias y foráneas
- Relaciones 1:N
- `JOIN` para mostrar productos con su categoría y promoción
- Sentencias `CREATE`, `INSERT`, `SELECT`, `UPDATE`, `DELETE`

### 📄 Script de base de datos inicial

```sql
CREATE DATABASE IF NOT EXISTS taller_api;
USE taller_api;

CREATE TABLE categorias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL
);

CREATE TABLE productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    precio DECIMAL(10,2) NOT NULL,
    categoria_id INT,
    FOREIGN KEY (categoria_id) REFERENCES categorias(id)
);

CREATE TABLE promociones (
    id INT AUTO_INCREMENT PRIMARY KEY,
    descripcion TEXT,
    descuento DECIMAL(5,2),
    producto_id INT,
    FOREIGN KEY (producto_id) REFERENCES productos(id)
);

```

✅ Puedes insertar registros iniciales con:

```sql
INSERT INTO categorias (nombre) VALUES ('Electrónica'), ('Ropa'), ('Hogar');

INSERT INTO productos (nombre, precio, categoria_id) VALUES
('Celular', 1200.00, 1),
('Camiseta', 40.00, 2),
('Nevera', 1800.00, 3),
('Tablet', 500.00, 1),
('Zapatos', 90.00, 2);

INSERT INTO promociones (descripcion, descuento, producto_id) VALUES
('Descuento del 30%', 30, 1),
('Descuento del 50%', 50, 3);

```

---

## 🔷 MÓDULO 5: Estructura de una API REST con PHP

### 🎯 Objetivo

Crear endpoints que respondan según el método HTTP usado.

### ✅ Temas Aplicados

- `$_SERVER['REQUEST_METHOD']`
- Enrutamiento básico usando `switch`
- Modularización por archivo

### 📄 index.php (router simple)

```php
<?php
$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

if (strpos($uri, '/productos') !== false) {
    require 'productos.php';
} elseif (strpos($uri, '/categorias') !== false) {
    require 'categorias.php';
} elseif (strpos($uri, '/promociones') !== false) {
    require 'promociones.php';
} else {
    http_response_code(404);
    echo json_encode(["error" => "Ruta no encontrada"]);
}

```

---

## 🔷 MÓDULO 6: Testing de API con Postman

> Ya estás empezando este módulo, así que aquí es donde empezaremos el desarrollo en tiempo real de los endpoints, mostrando cómo probarlos desde Postman con datos de ejemplo.
> 

---

### ➤ ¿Cómo seguimos?

A partir de aquí, te propongo desarrollar **paso a paso los endpoints CRUD** comenzando por `productos`, explicando **cada técnica aplicada** al módulo correspondiente.

Por ejemplo:

- Empezamos con: `GET /productos`
- Te explico cómo hacer el SELECT con JOIN, cómo responder en JSON, cómo probarlo en Postman
- Después: `POST /productos`, y así hasta completar todos los CRUD y el reto.

¿Te parece si arrancamos con el primer endpoint: `GET /productos`?

---

## 🧩 Superglobales en PHP

---

### 🔹 1. ¿Qué son las Superglobales?

Son **arreglos predefinidos** que PHP crea automáticamente y que puedes usar en cualquier lugar del código, **sin necesidad de declarar nada**. Siempre comienzan con `$` y guion bajo doble: `$_`.

---

### 🔹 2. `$_GET`, `$_POST`, `$_REQUEST`

| Variable | ¿Qué hace? |
| --- | --- |
| `$_GET` | Recibe datos enviados por URL (`?dato=valor`) |
| `$_POST` | Recibe datos de formularios ocultos (más seguro) |
| `$_REQUEST` | Recoge **ambos**: datos `GET` y `POST` |

✅ **Ejemplo**:

```php
// localhost:8080/index.php?nombre=Jose
echo $_GET["nombre"]; // Jose

echo $_REQUEST["nombre"]; // Funciona igual si vino por GET o POST

```

---

### 🔹 3. `$_SERVER`

🔸 Contiene información del **servidor y del entorno de ejecución** (URL, nombre del archivo, tipo de petición, etc.).

✅ Ejemplo:

```php
echo $_SERVER["PHP_SELF"]; // Muestra el nombre del archivo actual
echo $_SERVER["REQUEST_METHOD"]; // GET o POST
echo $_SERVER["HTTP_USER_AGENT"]; // Info del navegador

```

---

### 🔹 4. `$_FILES`

🔸 Se usa para **subir archivos** a través de formularios.

✅ Ejemplo básico:

```php
<form method="POST" enctype="multipart/form-data" action="subir.php">
  <input type="file" name="mi_archivo">
  <input type="submit" value="Subir">
</form>

```

```php
// subir.php
$archivo = $_FILES["mi_archivo"];
echo $archivo["name"]; // Nombre del archivo

```

---

### 🔹 5. `$_SESSION`

🔸 Almacena información **temporal por usuario**, útil para inicios de sesión.

✅ Ejemplo:

```php
session_start();
$_SESSION["usuario"] = "Jose";
echo $_SESSION["usuario"];

```

---

### 🔹 6. `$_COOKIE`

🔸 Guarda datos **en el navegador del usuario**, incluso si cierra el navegador.

✅ Ejemplo:

```php
setcookie("tema", "oscuro", time() + 3600); // 1 hora
echo $_COOKIE["tema"];

```

---

### 🔹 7. `$_ENV`

🔸 Accede a **variables de entorno** (por ejemplo, claves de API o configuración).

```php
echo $_ENV["APP_ENV"];

```

---

### 🧠 REGLAS IMPORTANTES

- `$_GET`, `$_POST`, y `$_FILES` se usan para **recibir datos del usuario**.
- `$_SESSION` y `$_COOKIE` permiten **guardar información entre páginas**.
- `$_SERVER` y `$_ENV` son útiles para **configuración o depuración**.
- Siempre usa `isset()` antes de acceder a superglobales para evitar errores.

---

# 🗂️ Manejo de Archivos en PHP

---

### 🛠 Constantes útiles

| Constante | Significado |
| --- | --- |
| `__FILE__` | Muestra la ruta completa del archivo actual |
| `__DIR__` | Muestra el directorio donde está el script actual |

### Ejemplo:

```php
echo "Archivo: " . __FILE__ . "<br>";
echo "Directorio: " . __DIR__;
```

---

## 🔹 1. Introducción al Manejo de Archivos en PHP

### 📘 ¿Qué es un archivo en contexto del servidor?

En PHP, un **archivo** es cualquier documento (texto, imagen, CSV, PDF, etc.) ubicado en el sistema de archivos del servidor. PHP puede:

- Leer archivos existentes 📖
- Crear nuevos archivos 🧾
- Modificar contenido ✏️
- Borrarlos 🗑️
- Organizarlos en carpetas 📁

---

### 🧭 Rutas: **Relativas vs Absolutas**

| Tipo | Ejemplo | Significado |
| --- | --- | --- |
| Relativa | `"datos.txt"` | Desde el archivo PHP actual |
| Relativa | `"../carpeta/archivo.txt"` | Sube un nivel y entra a "carpeta" |
| Absoluta | `"/var/www/html/datos.txt"` | Ruta completa desde el sistema del servidor |
| PHP | `__FILE__`, `__DIR__` | Constantes para conocer la ubicación actual del script |

✅ Recomendación: Usa rutas relativas o `__DIR__` para mantener compatibilidad.

---

### 📂 Permisos

Para trabajar con archivos, la carpeta debe tener permisos de escritura:

- En sistemas Linux (como Docker):
    
    ```bash
    chmod 755 carpeta
    chmod 644 archivo.txt
    
    ```
    
- PHP puede detectar esto con:
    
    ```php
    is_writable("carpeta") // true o false
    
    ```
    

---

## 🔹 2. Funciones básicas de manejo de archivos

PHP tiene varias funciones nativas para **leer, escribir y manipular archivos**. Vamos a ver las más importantes con explicación clara y ejemplos.

---

### ✅ `fopen()`: Abrir un archivo

```php
$archivo = fopen("datos.txt", "r");

```

- **Primer parámetro**: nombre o ruta del archivo.
- **Segundo parámetro**: modo de apertura.

| Modo | Significado |
| --- | --- |
| `"r"` | Leer. El archivo debe existir. |
| `"w"` | Escribir. Borra el contenido anterior. |
| `"a"` | Agregar. Escribe al final sin borrar nada. |
| `"x"` | Crear nuevo archivo. Falla si ya existe. |
| `"r+"` | Leer y escribir. No borra contenido. |

---

### ✅ `fwrite()`: Escribir en archivo

```php
$archivo = fopen("datos.txt", "w");
fwrite($archivo, "Hola Mundo!");
fclose($archivo); // ¡Importante!

```

> 🔒 Siempre debes cerrar el archivo con fclose() para liberar recursos.
> 

---

### ✅ `fread()`: Leer contenido del archivo

```php
$archivo = fopen("datos.txt", "r");
$contenido = fread($archivo, filesize("datos.txt"));
fclose($archivo);

echo $contenido;

```

> filesize() devuelve la longitud del archivo (en bytes).
> 

---

### ✅ `file_get_contents()`: Leer archivo completo (más simple)

```php
$contenido = file_get_contents("datos.txt");
echo $contenido;

```

> Esta función es más directa y recomendable si solo necesitas leer.
> 

---

### ✅ `file_put_contents()`: Escribir directamente (más simple)

```php
file_put_contents("datos.txt", "Texto nuevo");

```

- Si el archivo existe, lo sobrescribe.
- Si no existe, lo crea.

---

### 🧪 Ejercicio práctico sugerido

Crea un archivo `test_archivos.php` con este código:

```php
<?php
// Escribir texto
file_put_contents("prueba.txt", "Hola Jose\n");

// Agregar otra línea
file_put_contents("prueba.txt", "Otra línea más\n", FILE_APPEND);

// Leer el contenido
$contenido = file_get_contents("prueba.txt");

echo "<pre>$contenido</pre>";
?>

```

Esto:

1. Crea o sobrescribe `prueba.txt`
2. Agrega una segunda línea
3. Lee y muestra el contenido

---

## 🔹 3. Leer archivos línea por línea: `fgets()` y `feof()`

Este método es ideal cuando quieres **leer un archivo línea por línea**, por ejemplo para procesar logs, datos CSV o texto estructurado.

---

### ✅ `fgets()`: Lee una línea del archivo

```php
$archivo = fopen("datos.txt", "r");

while (!feof($archivo)) {
    $linea = fgets($archivo);
    echo $linea . "<br>";
}

fclose($archivo);

```

---

### 🧠 ¿Qué hace esto?

- `fopen("datos.txt", "r")`: abre el archivo en modo lectura.
- `!feof($archivo)`: verifica si **no se llegó al final del archivo**.
- `fgets($archivo)`: lee la **siguiente línea**.
- `fclose($archivo)`: cierra el archivo al final.

---

### ✅ Ejemplo real con archivo `alumnos.txt`

Supón que tienes este archivo con contenido:

```
Ana,18
Carlos,19
Laura,20

```

Este código:

```php
<?php
$archivo = fopen("alumnos.txt", "r");

while (!feof($archivo)) {
    $linea = fgets($archivo);
    echo "Línea: $linea <br>";
}

fclose($archivo);
?>

```

📋 Mostrará:

```
Línea: Ana,18
Línea: Carlos,19
Línea: Laura,20

```

> ⚠️ A veces se lee una última línea vacía por el salto final. Puedes evitarlo con:
> 

```php
if (trim($linea) !== "") { ... }

```
