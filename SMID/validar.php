<?php
  session_start();

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>validando...</title>
 	<meta charset="utf-8">
 </head>
 <body>

 	       <?php
 	          include 'conexion.php';
			  
 	          if(isset($_POST['login'])and isset (password_verify($loginPassword,$actor["c"]))){

 	         	$usuario = $_POST['user'];
 	        	$pw =  $_POST['pw'];
 	        	$log = mysql_query("SELECT * FROM admin WHERE user='$usuario' AND pw='$pw'");
 	         	if(mysql_num_rows($log)>0){
					
					                    

 	            $row=mysql_fetch_array($log);
 	       		$_SESSION["user"] =$row['user'];
 	       		echo'iniciando sesion para<br>'.$_SESSION['user'].'<p>';
 	       		include'panel.php';
 	       	   }
 	       	  else {
 	       	  	echo '<script> alert("usuario o contraseña incorrectos.");</script>';
 	       	  	echo '<script>window.location="index.html";</script>';



 	       	  }

              }
			  


             ?> 
 </body>
 </html>