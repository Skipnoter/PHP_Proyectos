<!DOCTYPE html>
<html>
<head>
	<title>Factoriales</title>
	<meta charset="utf-8">
	<link rel="stylesheet"  href="ejerciciocss.css">
</head>

<body>


	<header>

		<h1> Factorial </h1>
		
	</header>

	<section>

		<div id="result_fact">
			
			<?php

				if(isset($_GET["Numero_fact"]))
				{


					$a = $_GET["Numero_fact"];
					
					$result = 1;

						if($a == 0 )
						{	
							

							$result = 1;

							
						}
						else
						{

							if($a < 0 )
							{

								$a = $a * -1;

									for ($i=1; $i <= $a ; $i++)
								{ 
								
									$result = $i * $result;

								}

								$a = $a * -1;
								$result = $result * -1;

							}
							else
							{
								for ($i=1; $i <= $a ; $i++)
								{ 
								
									$result = $i * $result;

								}

							}
						

						}	

					
				}
				else
				{

					echo "Usted ingreso a esta pagina sin pasar ningun caracter vaya a la pagina <a href='http://localhost/Curso_php/Modulo2U1/factorial.html'> link Factorial </a>";

				}
				

			?>

			<p class = "resultado_factorial"> 
				<?php 
					
					if(isset($_GET["Numero_fact"]))
					{

					
						echo "El factorial de $a es = $result <br/> <br/>", "$a! = $result"; 

					}
					else
					{
						echo "Error !";
					}

				
				?>  


			</p>

		</div>
		
	</section>

	<footer>
		
	</footer>


</body>
</html>