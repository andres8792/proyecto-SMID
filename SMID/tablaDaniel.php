<link rel="stylesheet" type="text/css" href="css1/estilos4.css">
<?php
 
$host="localhost";
$usuario="root";
$password="";
$db="taller";

$conexion = new mysqli($host,$usuario,$password,$db);
$sql = "select * from clasevehiculo";
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
		
	        echo "<table border='1px'>
             <header>
                <tr>
                  <th>ID</th>
                  <th>Marca</th>
                  <th>Modelo</th>
				  <th>Año</th>
              
                  </tr>
            </header>";
		while($res=$query->fetch_array())
		{
         echo '<tr>
		<td>'.$res['ID'].'</td>
		<td>'.$res['Marca'].'</td>
		<td>'.$res['Modelo'].'</td>
		<td>'.$res['Ano'].'</td>
		
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
</form>

<p><a href="menudaniel.html">Volver menu principal</a></p>

</body></html>
 
