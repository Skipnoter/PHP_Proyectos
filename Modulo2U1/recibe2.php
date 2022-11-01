<!DOCTYPE html>
<html>
<head>
	<title>Calculador</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="ejerciciocss.css">
</head>
<body>

<header>
	<h1>Calculadora Simple</h1>
</header>

<section>

<div id="caja_result">

<p> </p>

<?php 

if (isset($_GET['Signo']))
{

echo ' ', $_GET['Numero1'], ' ' , $_GET['Signo'] , ' ' , $_GET['Numero2'], ' ';

/*
if ($_GET['Signo'] == '+') 
{
	
	$result = $_GET['Numero1'] + $_GET['Numero2'];
	echo " =  $result";

}
elseif ($_GET['Signo'] == '-') 
{
	$result = $_GET['Numero1'] - $_GET['Numero2'];
	echo " = $result";
}
elseif ($_GET['Signo'] == '*' ) 
{
	$result = $_GET['Numero1'] * $_GET['Numero2'];
	echo " = $result";
}
elseif ($_GET['Signo'] == '/') 
{
	$result = $_GET['Numero1'] / $_GET['Numero2'];
	echo " = $result";
}
else
{
	echo "<br/> <br/>" ," Error, probablemente el signo que ingreso no es el correcto, asegurese de ingrear un solo signo para operar (un solo digito) y que solo sean +, -, *, / ";
}
*/

switch ($_GET['Signo']) {
	case '+':
		$result = $_GET['Numero1'] + $_GET['Numero2'];
		echo " =  $result";
	break;

	case '-':
		$result = $_GET['Numero1'] - $_GET['Numero2'];
		echo " = $result";
	break;


	case '*':
		$result = $_GET['Numero1'] * $_GET['Numero2'];
		echo " = $result";
	break;


	case '/':
		$result = $_GET['Numero1'] / $_GET['Numero2'];
		echo " = $result";
	break;


	default:
		echo "<br/> <br/>" ," Error, probablemente el signo que ingreso no es el correcto, asegurese de ingrear un solo signo para operar (un solo digito) y que solo sean +, -, *, / ";
	break;
}

}
else
{
	echo "Error primero debe ir primero a la pagina de calculadora para que podamos hacer una operacion <br/>","haga click en el link", "<a href='http://localhost/Curso_php/Modulo2U1/calculadora.html'> Calculadora </a> " ;

}

?>
 
</div>


</section>

<footer>


</footer>

</body>
</html>