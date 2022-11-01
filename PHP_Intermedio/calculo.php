<!DOCTYPE html>
<html>
<head>
	<title>Fechas</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo_fecha_U3.css">
</head>
<body>

<header>
	<h2>Fecha de comparacion</h2>
</header>

<section>
	<div id="resultado">
	<?php

		date_default_timezone_set("America/Argentina/Buenos_Aires");

		$fecha_actual = date("d-m-Y");

		$fecha_ingresada = date("d-m-Y", strtotime($_POST['Fecha']));

	?>
		<p> <?php echo "Fecha actual:<br><br>",$fecha_actual, "<br>","<br>"; ?> </p>

		<p> <?php echo "Fecha elegida:<br><br>",$fecha_ingresada,"<br>", "<br>"; ?> </p>

	<?php

		$dias_restantes = strtotime($fecha_ingresada)-strtotime($fecha_actual);

		$dias_restantes = intval($dias_restantes/86400);
	?>
			
		<p> <?php echo "Los dias que faltan para esa fecha son: ", $dias_restantes; ?> </p>

	</div>

	<a href="datos.php"> <= Volver a elegir otra fecha</a>


</section>

<footer>
	
</footer>

</body>
</html>












<?php
/*
date_default_timezone_set("America/Argentina/Buenos_Aires");

$fecha_actual = date("d-m-Y");

$fecha_ingresada = date("d-m-Y", strtotime($_POST['Fecha']));


echo $fecha_actual, "<br>","<br>";
echo $fecha_ingresada,"<br>", "<br>";

$dias_restantes = strtotime($fecha_ingresada)-strtotime($fecha_actual);
$dias_restantes = intval($dias_restantes/86400);

echo "los dias que faltan para esa fecha son:", $dias_restantes;

*/
?>