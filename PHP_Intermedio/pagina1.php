<!DOCTYPE html>
<html>
<head>
	<title>Comentarios</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilos_de_comentarios_U4.css">
</head>
<body>

<header>
	<h1>Comentarios</h1>
</header>


<section>

	<form id="comentarios" action="pagina2.php" method="POST">
		<input type="text" name="nombre" placeholder="Nombre">
		<input type="text" name="email" placeholder="E-mail">
		<input type="textarea" name="comentario" placeholder="Comentario">
		<input type="submit" name="enviar">
		<input type="reset" name="borrar" value="Borrar">
	</form>

	<div id="listado">
		<?php
			$archivo2 = fopen("comentarios.txt", "r");
			fpassthru($archivo2);
			fclose($archivo2);
		?>
	</div>

</section>


<footer>
	
</footer>

</body>
</html>