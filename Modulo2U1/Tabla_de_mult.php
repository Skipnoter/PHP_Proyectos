<!DOCTYPE html>
<html>
<head>
	<title>Factoriales</title>
	<meta charset="utf-8">
	<link rel="stylesheet"  href="ejerciciocss.css">
</head>
<body>

	<header>

		<h1> Tabla de multiplicar </h1>

	</header>

	<section>

		<div id="caja_de_tabla_mult_php">
			
			<?php
			
				if(isset($_GET["tab"]))
				{

					$a = $_GET["tab"];

					
					/*
					for ($i=0; $i < 11 ; $i++)
					{ 
						
						$result = $a * $i;
					?>
						<p class="result_tab" > <?php echo "$a x $i = $result<br/>"; ?> </p>
					<?php
					}
					*/

					/*
					$i = 0;
					
					while ( $i <= 10) 
					{
						$result = $a * $i;
						?>
							<p class="result_tab" > <?php echo "$a x $i = $result<br/>"; ?> </p>

						<?php

						$i++;
					}
					*/


					$i = 0;

					do
					{
						$result = $a * $i;
						?>
							<p class="result_tab" > <?php echo "$a x $i = $result<br/>"; ?> </p>

						<?php

						$i++;

					}while($i <= 10 );


				}
				else
				{

					echo "Usted ingreso a esta pagina sin pasar ningun caracter vaya a la pagina <a href='http://localhost/Curso_php/Modulo2U1/Tabla_de_mult.html'> link Tablas </a>";

				}



			?>



		</div>
		
	</section>

	<footer>
		
	</footer>

</body>
</html>