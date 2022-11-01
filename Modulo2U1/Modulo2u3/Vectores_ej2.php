<!DOCTYPE html>
<html>
<head>
	<title>Ejercicos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="ejerciciocss.css">
</head>

<body>


<header>
	<h1> Vectores </h1>
</header>

<section>

	<?php

		$vect_img = array("img_1.jpg", "img_2.jpg", "img_3.jpg", "img_4.jpg" );
		shuffle($vect_img);
	?>
	
	<div id="vect_img_1">

		<img src= "<?php echo $vect_img["0"]; ?> ">
		
	</div>

	<div id="vect_img_2">

		<img src= "<?php echo $vect_img["1"]; ?> ">
		
		
	</div>

	<div id="vect_img_3">

		<img src= "<?php echo $vect_img["2"]; ?> ">
		
	</div>

	<div id="vect_img_4">

		<img src= "<?php echo $vect_img["3"]; ?> ">
		
	</div>

</section>

<footer>
	
</footer>


</body>

</html>