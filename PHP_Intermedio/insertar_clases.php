<?php

include ("conexion.php");

$id_clase = $_POST["id_clase"];
$unidad = $_POST["unidad"];
$fecha = $_POST["fecha"];

mysqli_query($base_datos, "INSERT INTO clases VALUES ($id_clase, '$unidad', '$fecha' )");


header("location: ver_clases.php");

?>