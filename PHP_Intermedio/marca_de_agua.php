<?php
				
				$estampa = imagecreatefrompng("marca.png");
				$im = imagecreatefromjpeg("Resistencia.jpg");

				$margen_dcho = 10;
				$margen_inf = 10;
				$sx = imagesx($estampa);
				$sy = imagesy($estampa);

				imagecopy($im, $estampa, imagesx($im) - $sx - $margen_dcho, imagesy($im) - $sy - $margen_inf, 0, 0, imagesx($estampa), imagesy($estampa));


				//imagecopy(dst_im, src_im, dst_x, dst_y, src_x, src_y, src_w, src_h)

				header('Content-type: image/png');
				imagepng($im);
				imagedestroy($im);

?>