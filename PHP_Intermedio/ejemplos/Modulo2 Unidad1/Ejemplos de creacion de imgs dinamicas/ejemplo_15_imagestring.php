<?php
    header("content-type: image/png");
        $im = imagecreate(150,150);
	$t1="tamaño 1";
	$t2="tamaño 2";
	$t3="tamaño 3";
	$t4="tamaño 4";
	$t5="tamaño 5"; 
        $fondo=imagecolorallocate ($im, 0, 0, 200);
        $amarillo=imagecolorallocate ($im, 255, 255,0);

        imagestring ($im, 1, 10, 20, $t1, $amarillo);
        imagestring ($im, 2, 10, 40, $t2, $amarillo);
        imagestring ($im, 3, 10, 60, $t3, $amarillo);
        imagestring ($im, 4, 10, 80, $t4, $amarillo);
        imagestring ($im, 5, 10, 100, $t5, $amarillo);

        imagepng($im);
        imagedestroy($im);
   
?>

