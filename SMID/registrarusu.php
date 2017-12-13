<?php
// Recibe los datos enviados desde html
$a=$_POST["id"];
$b=$_POST["user"];
$c=$_POST["pw"];
$c=password_hash($c, PASSWORD_DEFAULT);


echo $a."<br>";
echo $b."<br>";
echo $c."<br>";





//CONEXIÓN A LA BASE DE DATOS
//Datos de conexión
$hostname_db = "localhost";
$database_db = "clase_php";
$username_db = "root";
$password_db = "";
// Creación del Objeto y entregando los datos a los atributos
// Se crea el objeto a de la clase mysql
$zero = new mysqli($hostname_db, $username_db, $password_db,$database_db);
// Se verifica si hay algún erro en la conexion

if ($zero->connect_errno) {
    printf("Fallo en la conexion a la base de datos: %s\n", $a->connect_error);
    exit();
}
// Consulta en SQL
$query = "INSERT INTO `admin` (`id`, `user`,`pw`) VALUES ('$a', '$b','$c')";
$zero->query($query);

?>
<p><a href="index.html">Volver menu principal</a></p>