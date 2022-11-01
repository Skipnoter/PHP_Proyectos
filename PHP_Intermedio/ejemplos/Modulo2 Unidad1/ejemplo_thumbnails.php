<?php
$alto=300;
$ancho=400;
$src_img= @imagecreatefromjpeg('space.jpg');
$dst_img = @imagecreatetruecolor($ancho,$alto);
$imagen = @imagecreate($ancho,$alto);

@imagecopyresized($dst_img, $src_img, 0,0,0,0, $ancho, $alto, ImageSX($src_img), ImageSY($src_img));
@imagejpeg($dst_img,"space_thumb.jpg");

@imagecopyresized($imagen, $src_img, 0,0,0,0, $ancho, $alto, ImageSX($src_img), ImageSY($src_img));
@imagejpeg($imagen,"space_thumb2.jpg");

@imagedestroy($dst_img);

echo '<img src="space.jpg">';
echo '<img src="space_thumb.jpg">';
echo '<img src="space_thumb2.jpg">';
?>