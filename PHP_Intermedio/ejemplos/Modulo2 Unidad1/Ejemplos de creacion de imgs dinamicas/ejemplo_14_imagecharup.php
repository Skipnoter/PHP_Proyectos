<?php
    header("content-type: image/png");
	$im = imagecreate(150,150);
	$t1="tama?o 1";
	$t2="tama?o 2";
	$t3="tama?o 3";
	$t4="tama?o 4";
	$t5="tama?o 5";
   
    $fondo=imagecolorallocate ($im, 0, 0, 200);
    $amarillo=imagecolorallocate ($im, 255, 255,0);

    imagecharup ($im, 1, 10, 10, $t1, $amarillo);
    imagecharup ($im, 2, 20, 20, $t2, $amarillo);
    imagecharup ($im, 3, 40, 40, $t2, $amarillo);
    imagecharup ($im, 4, 60, 60, $t2, $amarillo);
    imagecharup ($im, 5, 80, 80, $t2, $amarillo);

    imagepng($im);
    imagedestroy($im);
   
?>


