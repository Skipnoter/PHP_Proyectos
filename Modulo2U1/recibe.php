<!DOCTYPE html>
<html>
<head>
	<title>Info</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="ejerciciocss.css">
</head>
<body>

<header>
	<h1>Producto <?php echo $_GET['Producto']; ?></h1>
</header>

<section>
<br/>
<?php
print ('El producto elegido es: ');
print($_GET['Producto']);
echo '<br/>', '<br/>';
print ('Caracterisiticas principales: ');
print ($_GET['caracteristicas']);
echo '<br/>', '<br/>';
print ('Su precio es: ');
print ($_GET['Precio']);
echo '<br/>';

?>
<br/>
<img src="<?php echo $_GET ['imagen'] ?> " >

</section>

<footer>

</footer>

</body>
</html>
