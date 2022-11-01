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

        imagestringup ($im, 1, 10, 100, $t1, $amarillo);
        imagestringup ($im, 2, 20, 100, $t2, $amarillo);
        imagestringup ($im, 3, 40, 100, $t3, $amarillo);
        imagestringup ($im, 4, 60, 100, $t4, $amarillo);
        imagestringup ($im, 5, 80, 100, $t5, $amarillo);

        imagepng($im);
        imagedestroy($im);
   
?>



