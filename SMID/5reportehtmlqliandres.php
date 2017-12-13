<link rel="stylesheet" type="text/css" href="css1/estilos1.css">
<?php


 
$host="localhost";
$usuario="root";
$password="";
$db="taller";

$conexion = new mysqli($host,$usuario,$password,$db);
$sql = "select * from empleados";
$query=$conexion->query($sql);
 
// $conexion = mysql_connect("localhost","root","");
//mysql_select_db("usuario",$conexion);
// $sql= mysql_query("select * from users");

//while($res=mysql_fetch_array($sql)){
	
//echo'<tr>
//		<td>'.$res['id'].'</td>
//		<td>'.$res['nombre'].'</td>
//		<td>'.$res['password'].'</td>
//	</tr>
//	';
//	}
	
	
			
	$tbHtml="";
	
	if($query->num_rows>0){
		
	        echo "<table border='10px'>
             <header>
                <tr>
                  <th>ID</th>
                  <th>nombre</th>
                  <th>identificacion</th>
				  <th>numero</th>
				  <th>cargo</th>
				  <th>laborado</th>
              
              
                  </tr>
            </header>";
		
		while($res=$query->fetch_array())
		{
         echo '<tr>
		<td>'.$res['id'].'</td>
		<td>'.$res['nombre'].'</td>
		<td><sty>'.$res['identificacion'].'</td>
		<td>'.$res['numero'].'</td>
		<td>'.$res['cargo'].'</td>
		<td>'.$res['laborado'].'</td>
	</tr>
	';
		}
		$tbHtml.= "</table>";
		
	}
	
	else
	{
	echo "No hay resultados";
	}
	//cambiar los datos por productos
	
?>
 <p><a href="menuandres.html">Volver menu principal</a></p>

