<!DOCTYPE html>
<html>
<head>
	<title>Vista de Clases</title>
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
	
	<?php

		include ("conexion.php");

		$consulta = mysqli_query($base_datos, "SELECT * FROM clases");

		while ($lista_clases = mysqli_fetch_assoc($consulta) )
		{
		
	?>

	<div id="clases">
		<p> ID_Clase: <?php echo $lista_clases['id_clase']; ?> </p>
		<p> Unidad: <?php echo $lista_clases['unidad']; ?> </p>
		<p> Fecha: <?php echo $lista_clases['fecha']; ?> </p>
		<p><a href="borrar_clases.php?cod=<?php echo $lista_clases['id_clase']; ?>"> Borrar clase </a></p>
	</div>

	<?php

	} 

	?>

</section>

<footer>
	
</footer>

</body>
</html>