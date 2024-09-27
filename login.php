<?php
session_name("CON");
session_start();
if ($_POST['usuario']=='isai' && $_POST['clave']=='1234') {
	$_SESSION["nombre"]="Maria";
	$_SESSION["apellido"]="Trabasilo";
    $_SESSION["pais"]="Venezuela"; 
    echo "Sesion iniciada";  }
    else { echo "Datos incorrectos"; }
?>