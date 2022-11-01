<?php
    Header("Content-type: image/png");
    $im = imagecreate(300,200);
	$fondo=imagecolorallocate ($im, 0, 0, 200);
	Imagefill ($im, 0, 0, $fondo); 
    Imagepng($im);
    Imagedestroy($im);
   
?>