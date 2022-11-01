<!DOCTYPE html>
<html>
<head>
	<title>Carga de Clases</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo_carga_clases.css">
</head>
<body>

<header>
	<nav id="botonera">
		<ul>
			<li><a href="cargar_clases.php">Cargar clases</a></li>
			<li><a href="ver_clases.php">Ver clases</a></li>
		</ul>
	</nav>
</header>

<section>
	
	<div id="caja_de_registro">
		<form name="cargar_clase" method="POST" action="insertar_clases.php">

			<input type="number" name="id_clase" placeholder="ID_Clase" max="99999" required>
			<input type="name" name="unidad" placeholder="unidad" maxlength="30" required>
			<input type="date" name="fecha" placeholder="fecha"  required>
			<input type="submit" name="Enviar">
			
		</form>
		

</section>

<footer>
	
</footer>

</body>
</html>