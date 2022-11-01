<?php

    Header("Content-type: image/jpeg");
    $im = imagecreate(200,200);
    Imagejpeg($im);
    Imagedestroy($im);
   
?>