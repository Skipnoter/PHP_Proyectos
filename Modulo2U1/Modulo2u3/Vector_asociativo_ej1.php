<!DOCTYPE html>
<html>
<head>
	<title>Ejercicos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="ejerciciocss.css">
</head>

<body>


<header>
	<h1> Vectores </h1>
</header>

<section>
	<?php

		$prueba= array("Administrador" => "Juan", "Editor" => "Pedro", "Autor" => "Anaclara", "Colaborador" => "Jorge","Suscriptor" => "Sofia");
	?>
	

	<p class  = "vector_prueba">

		<?php 

		 	echo "Administrador: ", $prueba["Administrador"],"<br/>";
		 	echo "Autor: ", $prueba["Autor"];


		 ?> 

	</p>


</section>

<footer>
	
</footer>


</body>

</html>