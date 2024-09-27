<?php
session_name("CON");
session_start();
/*session_unset();*/ // Elimina las variables de sesion
session_destroy();

header("location:index.php");
?>