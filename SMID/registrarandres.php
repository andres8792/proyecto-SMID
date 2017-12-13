<?php
// Recibe los datos enviados desde html
$a=$_POST["id"];
$b=$_POST["nombre"];
$c=$_POST["identificacion"];
$d=$_POST["numero"];
$e=$_POST["cargo"];
$f=$_POST["laborado"];


echo $a."<br>";
echo $b."<br>";
echo $c."<br>";
echo $d."<br>";
echo $e."<br>";
echo $f."<br>";


//CONEXIÓN A LA BASE DE DATOS
//Datos de conexión
$hostname_db = "localhost";
$database_db = "taller";
$username_db = "root";
$password_db = "";
// Creación del Objeto y entregando los datos a los atributos
// Se crea el objeto a de la clase mysql
$z = new mysqli($hostname_db, $username_db, $password_db,$database_db);
// Se verifica si hay algún erro en la conexion

if ($z->connect_errno) {
    printf("Fallo en la conexion a la base de datos: %s\n", $a->connect_error);
    exit();
}
// Consulta en SQL
$query = "INSERT INTO `empleados` (`id`, `nombre`,`identificacion`,`numero`, `cargo`,`laborado`) VALUES ('$a', '$b','$c','$d', '$e','$f')";
$z->query($query);

?>
<p><a href="5reportehtmlqliandres.php">consultar empleados</a></p>
<p><a href="menuandres.php">Volver menu principal</a></p>