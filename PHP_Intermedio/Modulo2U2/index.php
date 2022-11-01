<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilos_m2_u2.css">
	<title> Cliente </title>
</head>
<body>

	<?php
		$numero1= rand(0,9);
		$minus = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","ñ","o","p","q","r","s","t","u","v","w","x","y","z");
		$mayus = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","Ñ","O","P","Q","R","S","T","U","V","W","X","Y","Z");
		$signos = array("!","#","$","%","&","=");

		$generador_min = rand(0,26);
		$generador_may = rand(0,26);
		$generador_sig = rand(0,5);


		$_SESSION["codigos"] = ($numero1).($minus[$generador_min]).($mayus[$generador_may]).($signos[$generador_sig]);
	?>

	<header>
		<nav>
			<ul>
				<li><a href="index.php">Inicio</a></li>
				<li><a href="insertar_producto.php">Insertar Producto</a></li>
				<li><a href="ver_productos.php">Ver Producto</a></li>
				<li><a href="productos_suspendidos.php">Productos Suspendidos</a></li>
			</ul>
		</nav>
	</header>


	<section>
		<main>
			<form id="inicio" action="validar.php" method="POST">
				<input type="number" name="DNI" placeholder="DNI" required minlength="8" maxlength="8">
				<input type="password" name="clave" placeholder="Clave" required maxlength="10">

				
				<?php 

				if (isset($_GET['correcto'])) {
					echo ('captcha correcto');
				}else
				{


				?>
				
					<input type="text" name="captcha" required>
					<?php echo "<img src=imagen.php>"; ?>
					
				
				<?php
					}
				?>
				<input type="submit" value="Ingresar">

				<br>
				<br>
				<h2> Realice esta comprobacion para saber que no eres un robot </h2>

			</form>
			
			<div id="contenido">
				<?php
					if (isset($_GET['error'])) 
					{
						echo "<h2> Incorrecto </h2>";
					}

				?>

			</div>
		</main>
	</section>


	<footer>
		
	</footer>

</body>
</html>