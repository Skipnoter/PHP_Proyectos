<?php
session_start();
if (isset($_SESSION['cliente'])) 
{
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Insertar Producto</title>
	<link rel="stylesheet" type="text/css" href="estilos_m2_u2.css">
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
	<form id="ingreso" method="POST" enctype="multipart/form-data" action="cargar_producto.php">

		<input type="text" name="Nombre" placeholder="Nombre">
		<input type="text" name="Marca" placeholder="Marca">
		<input type="text" name="ID_Producto" placeholder="ID_Producto">
		<input type="number" name="Precio" placeholder="Precio">
		<input type="file" name="foto" >
		<input type="submit" name="Insertar" value="Insertar">

	</form>
</section>


<footer>
	
</footer>

</body>
</html>
<?php
}
else{
	header('Location: index.php');
}
?>