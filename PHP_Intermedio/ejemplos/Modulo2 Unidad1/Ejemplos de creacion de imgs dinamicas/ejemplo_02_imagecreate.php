<?php
Header("Content-type: image/jpeg");
    $im = imagecreate(300,200);
    Imagejpeg($im);
    Imagedestroy($im);
?>