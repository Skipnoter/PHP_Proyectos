<?php

if (function_exists("gd_info")){
	echo "GD est� disponible";
	echo "<pre>";
	print_r(gd_info()); 
	echo "</pre>";
} else {
	echo "GD no est� disponible";
}

?>
