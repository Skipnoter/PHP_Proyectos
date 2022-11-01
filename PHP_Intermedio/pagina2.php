<?php

date_default_timezone_set("America/Argentina/Buenos_Aires");

if ($_POST) 
{
	$archivo = fopen("comentarios.txt", "a+");
	$texto = "<p>"."Fecha:".date("d-m-Y H:i")."<br><br>"."Nombre: ".$_POST['nombre']."<br><br>"."E-mail: ".$_POST['email']."<br><br>"."Comentario: ".$_POST['comentario']."</p>";
	fputs($archivo, $texto);
	fclose($archivo);
}

header("location: pagina1.php");

?>