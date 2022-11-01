<?php 
session_start(); 
if (isset ($_SESSION['cliente'])) 
{
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilos_m2_u2_seccion_auto.css">
	<title> Cliente </title>
</head>
<body>

	<header>

		<nav>
			<ul>
				<li><a href="index.php">Inicio</a></li>
				<li><a href="mostrar_contenido.php">Mostrar Todo</a></li>
				<li><a href="insertar_producto.php">Insertar Producto</a></li>
				<li><a href="ver_productos.php">Ver Productos</a></li>
				<li><a href="productos_suspendidos.php">Productos Suspendidos</a></li>
				<li><a href="salir.php">Cerrar Sesión</a></li>
			</ul>
		</nav>

	</header>


	<section>
		<div id="caja_principal_mostrar_todo">
			<div id="caja_principal_mostrar_todo_2">
				<img src="acceso_clientes.png">
				<h3>Bienvenido cliente DNI <?php echo $_SESSION['cliente']; ?> </h3>
				<p>En esta sesión se mostrará información sobre productos (incluidos los suyos).</p>
			</div>
		</div>

		<?php

		include ('conexionn.php');

		$consulta = mysqli_query($base_datos, "SELECT * FROM productos ");

		while ($lista_productos = mysqli_fetch_assoc($consulta) )
		{

	?>

	<div id="productos">
		<p class="espe"> ID_Usuario: <?php echo $lista_productos['ID_Usuario']; ?> </p>
		<p class="espe"> Nombre: <?php echo $lista_productos['Nombre']; ?> </p>
		<p class="espe"> Marca: <?php echo $lista_productos['Marca']; ?> </p>
		<p class="espe"> ID_Producto: <?php echo $lista_productos['ID_Producto']; ?></p>
		<p class="espe"> Precio: $<?php echo $lista_productos['Precio']; ?></p>
		<?php if ($lista_productos['Estado'] == 'activo')
		{

		?>
		<p class="espe_E_A"> Estado: <?php echo $lista_productos['Estado']; ?></p>
		<?php 
		}else{


		?>
		<p class="espe_E_S"> Estado: <?php echo $lista_productos['Estado']; ?></p>
		<?php 
		}
		?>
		<p class="img"><img height="300px" src="data:image/jpg;base64,<?php echo base64_encode($lista_productos['Foto']); ?>"/><p>
		<p><a href="suspender.php?cod=<?php echo $lista_productos['ID_Producto'];?>"> Suspender </a></p>
	</div>


	<?php
		}
	?>

		
	</section>


	<footer>
		
	</footer>

</body>
</html>

<?php
}
else{
header('Locatin: index.php');
}
?>