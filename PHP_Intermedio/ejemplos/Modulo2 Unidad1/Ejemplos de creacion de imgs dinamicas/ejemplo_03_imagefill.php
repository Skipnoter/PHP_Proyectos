<?php
    Header("Content-type: image/jpeg");
    $im = imagecreate(200,200);
	$fondo=imagecolorallocate ($im, 0, 0, 200);
	Imagefill ($im, 0, 0, $fondo); 
    Imagejpeg($im);
   Imagedestroy($im);
   
?>