<?php
session_start();

$DNI = $_POST['DNI'];
$clave = $_POST['clave'];
$captcha = $_POST['captcha'];

if ($DNI=="41840287" || $DNI=="42580695" || $DNI=="43255787" || $DNI=="40127265" || $DNI=="17658932" || $DNI=="20546832") 
{
	if ($clave=="112233aa" || $clave=="contraseña123" || $clave=="asd123" || $clave=="contraseña22" || $clave=="dm5456" || $clave=="fg8965") 
	{
		if ($captcha == $_SESSION['codigos']) 
		{
			$_SESSION['cliente'] = $DNI;
			header("Location: mostrar_contenido.php");
		}else
		{
			header("Location: index.php?error");
		}


	}



}
else
{
	header("Location: index.php?error");
}

?>