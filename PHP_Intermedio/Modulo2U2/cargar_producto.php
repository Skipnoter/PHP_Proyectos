<?php
session_start();

include ('conexionn.php');

$id_usuario = $_SESSION['cliente'];
$nombre = $_POST['Nombre'];
$marca = $_POST['Marca'];
$precio = $_POST['Precio'];
$id_producto = $_POST['ID_Producto'];
$foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
$estado = 'activo';

$asd = mysqli_query ($base_datos, "INSERT INTO productos VALUES ($id_usuario, '$nombre', '$marca', '$id_producto', $precio, '$foto', '$estado' )");

if ($asd) 
{
	header('Location: mostrar_contenido.php');
}else
{
	echo "Error no se cargo!";
}



?>