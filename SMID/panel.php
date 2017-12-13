<?php

include 'conexion.php';

if(isset($_SESSION['user'])){?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
<title>Menu De Proyecto</title>
<link rel="stylesheet" type="text/css" href="css1/estilos.css">
</head>

<body>
<center><p>Menu</p></center>
<div><a href="menuandres.html">Menu empleados</a></div>
<div><a href="menuewii.html">Menu servicios</div>
<div><a href="menudavid.html">Menu clientes</div>
<div><a href="menudiego.html">Menu repuestos</div>
<div><a href="menudaniel.html">Menu carros</div>


<a href="logout.php"><button>salir</button></a>
</body>
</html>
<?php
}else{
	echo '<script>window.location="index.html";</script>';
}




?>
