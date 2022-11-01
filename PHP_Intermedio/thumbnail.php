<!DOCTYPE html>
<html>
<head>
	<title>Thumbnail</title>
</head>
<body>

<div id="thumbnail" style="margin-left: 70px;">
	<?php

	$ruta = "Unidad1.jpg";
	$fuente = @imagecreatefromjpeg($ruta);
	$alto = 150;
	$ancho = 150;
	$imgancho = imagesx($fuente);
	$imgalto = imagesy($fuente);
	$imagen = imagecreate($ancho, $alto);
	imagecopyresized($imagen, $fuente, 0, 0, 0, 0, $ancho, $alto, $imgancho, $imgalto);
	imagejpeg($imagen, "Unidad11.jpg");
	echo '<img src="Unidad11.jpg">';
	echo "<br/>","<br/>","<br/>", "<br/>", "<br/>", "<br/>", "<br/>";
	echo '<img src="Unidad1.jpg">';


	?>
</div>

</body>
</html>





<?php
/*
$ruta = "Unidad1.jpg";
$fuente = @imagecreatefromjpeg($ruta);
$alto = 150;
$ancho = 150;
$imgancho = imagesx($fuente);
$imgalto = imagesy($fuente);
$imagen = imagecreate($ancho, $alto);
imagecopyresized($imagen, $fuente, 0, 0, 0, 0, $ancho, $alto, $imgancho, $imgalto);
imagejpeg($imagen, "Unidad11.jpg");
echo '<img src="Unidad11.jpg">';
echo "<br/>";
echo '<img src="Unidad1.jpg">';
*/
?>