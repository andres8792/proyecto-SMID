<?php
session_start();
session_destroy();
echo 'cerraste sesion';
echo '<script>window.location="index.html";</script>';
?>
<!DOCTYPE html>
<html>
<head>
	<title>saliendo...</title>
	<meta charset="utf-8">
</head>
<body>

</body>
</html>