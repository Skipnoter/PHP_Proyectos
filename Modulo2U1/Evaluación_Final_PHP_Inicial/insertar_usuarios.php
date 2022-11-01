<?php



$usuario = $_POST['usuario'];

$clave = $_POST['clave'];

$nombre = $_POST['nombre'];

$apellido = $_POST['apellido'];

$edad = $_POST['edad'];

$email = $_POST['email'];

$sitio_web = $_POST['sitio_web'];

include ("enviar_mail.php");

$datos_db = mysqli_connect("localhost", "root", "", "php_inicial") or exit("No se pudo conectar con la base de datos") ;

mysqli_query($datos_db, "INSERT INTO tabla_de_usuarios VALUES (DEFAULT, '$usuario', '$clave', '$nombre', '$apellido', '$edad', '$email', '$sitio_web')");

mysqli_close($datos_db);

header("Location: index_Final_PHP_Inicial.php?ok");

?>