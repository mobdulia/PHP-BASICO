<?php
session_name("CON");
/*session_id("php");*/
session_start();

if(isset($_SESSION['contador'])){
    $_SESSION['contador']++; } 
    else { $_SESSION['contador']=1;} 
?>
<!DOCTYPE html>
<html lang="es">
<head http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
    <meta >
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Sesiones en PHP </title>
</head>
<body> <?php echo "Hola = " .$_SESSION['nombre']. "<br>"; ?>
    <a href="index.php"> Inicio </a> <br>
    <a href="cerrar.php"> Cerrar Sesion </a>
</body>
</html>