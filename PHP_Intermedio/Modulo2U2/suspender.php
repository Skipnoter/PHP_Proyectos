<?php

include("conexionn.php");

$cod = $_GET['cod'];
$estado = $_GET['estado'];

if ($estado == 'suspendido') 
{
	mysqli_query($base_datos, "UPDATE productos SET Estado='activo' WHERE ID_Producto= '$cod'");

header('Location: ver_productos.php');
}
else
{
	mysqli_query($base_datos, "UPDATE productos SET Estado='suspendido' WHERE ID_Producto= '$cod'");

header('Location: productos_suspendidos.php');
}


?>