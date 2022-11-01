<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<meta charset="utf-8">
	<link rel="stylesheet"  href="estilos_final_PHP_inicial.css">
</head>

<body>

<header>
	<h1>Registro</h1>
</header>

<section>
	<div id="caja_de_registro">
		<form name="Form_Regis" method="POST" action="insertar_usuarios.php">

			<input type="username" name="usuario" placeholder="usuario" maxlength="30" required>
			<input type="password" name="clave" placeholder="clave" maxlength="30" required>
			<input type="name" name="nombre" placeholder="nombre" maxlength="40" required>
			<input type="family-name" name="apellido" placeholder="apellido" maxlength="40" required>
			<input type="number" name="edad" placeholder="edad" min="1" max="100" >
			<input type="email" name="email" placeholder="email" maxlength="50" required>
			<input type="url" name="sitio_web" placeholder="sitio_web">
			<input type="submit" name="Enviar">
			
		</form>
		<?php

		if (isset($_GET['ok'])) 
		{
			echo "<h3> Consulta enviada ! </h3>";
		}

		?>
	</div>
</section>

<footer>
	
</footer>

</body>

</html>