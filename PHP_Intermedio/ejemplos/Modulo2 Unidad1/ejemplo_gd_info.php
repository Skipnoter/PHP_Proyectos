<?php

if (function_exists("gd_info")){
	echo "GD está disponible";
	echo "<pre>";
	print_r(gd_info()); 
	echo "</pre>";
} else {
	echo "GD no está disponible";
}

?>
