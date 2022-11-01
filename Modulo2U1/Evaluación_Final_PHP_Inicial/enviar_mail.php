<?php


$usuario = $_POST['usuario'];

$clave = $_POST['clave'];

$nombre = $_POST['nombre'];

$apellido = $_POST['apellido'];

$edad = $_POST['edad'];

$email = $_POST['email'];

$sitio_web = $_POST['sitio_web'];

$cuerpo = "usuario" .$usuario. "\r\n" ."clave" .$clave. "\r\n" ."nombre" .$nombre. "\r\n" ."apellido" .$apellido. "\r\n" ."edad" .$edad. "\r\n" ."email" .$email. "\r\n" ."sitio_web" .$sitio_web;

@mail("asdasd@hotmail.com", "Resgistro aprobado de PHP curso inicial", $cuerpo);



?>