<?php
$conectar = @mysql_connect("localhost","root","") or die ("no se encontro el servidor");
mysql_select_db("clase_php",$conectar)or die ("no se encontro la base de datos ");
?>