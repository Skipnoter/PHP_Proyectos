<?php 
$ruta="01.gif";
$fuente = @imagecreatefromgif($ruta);
$alto=200;
$ancho=200;
$imgAncho = imagesx ($fuente);
$imgAlto =imagesy($fuente);
$imagen = ImageCreate($ancho,$alto);

ImageCopyResized($imagen,$fuente,0,0,0,0,$ancho,$alto,$imgAncho,$imgAlto);

imageGif($imagen,"01_thumb.gif");

echo'<img src="01_thumb.gif">';
echo'<br/>';
echo'<img src="01.gif">';
?>