<?php
session_name("CON");
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
    <meta >
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Sesiones en PHP </title>
</head>
<body> <?php /*echo "Pagina recargada = " .$_SESSION['contador']. " veces";*/ ?>
   <form action="login.php" met="post">
    <label> Usuario: </label>
    <input type="text" name="usuario" id="usuario"><p>
    <label> Contraseña: </label>
    <input type="password" name="clave" id="clave"><p>
    <button type="submit"> Login </button>
   </form>
</body> 
</html>