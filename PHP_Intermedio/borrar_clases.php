<?php

include("conexion.php");

$cod = $_GET['cod'];

mysqli_query($base_datos, "DELETE FROM clases WHERE id_clase = $cod ");

header("location: ver_clases.php");

?>