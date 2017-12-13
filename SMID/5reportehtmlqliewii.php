<link rel="stylesheet" type="text/css" href="css1/estilos3.css">
<?php
 
$host="localhost";
$usuario="root";
$password="";
$db="taller";

$conexion = new mysqli($host,$usuario,$password,$db);
$sql = "select * from servicios";
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
                  <th>arreglo</th>
                  <th>costo</th>
				  <th>ejecutor</th>
				  <th>Fecha</th>
              
                  </tr>
            </header>";
		
		while($res=$query->fetch_array())
		{
         echo '<tr>
		<td>'.$res['id'].'</td>
		<td>'.$res['arreglo'].'</td>
		<td>'.$res['costo'].'</td>
		<td>'.$res['ejecutor'].'</td>
		<td>'.$res['Fecha'].'</td>
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
 
<p><a href="menuewii.html">Volver menu principal</a></p>