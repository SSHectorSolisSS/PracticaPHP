<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1>
		<?php echo "Formulario"?>
	</h1>

	<form action="calculadora.php" method="post">
		<input type="text" name="valor1" placeholder="Valor 1">
		<br>
		<input type="text" name="valor2" placeholder="Valor 2">
		<br>
		<input type="radio" name="operador" value="0"> Suma <br>
		<input type="radio" name="operador" value="1"> Resta <br>
		<input type="radio" name="operador" value="2"> Multiplicacion <br>
		<input type="radio" name="operador" value="3"> Division <br>
		<input type="submit" value="Calcular">
	</form>
</body>
</html>