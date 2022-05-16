<?php 
 session_start();

 session_unset();

 session_destroy();

 header('Location: index.php');//este es como el que esta en login pero cierra la sesion que tiene los datos del logeado
 
 
 ?>