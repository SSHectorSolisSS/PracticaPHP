<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Primer Codigo</title>
</head>
<body>
	<h1><?php echo "Hola mundo" ?></h1>
	<h2>
		<?php #Variables Basicas e Interacciones
			$var_uno = 1;
			$var_dos = 2;
			$res = $var_uno + $var_dos;
			$res_esp = "Tres";

			echo $var_uno, " + ", $var_dos, " = ", $res;
			echo "El resultado es: ", $res_esp;
		?>
	</h2>
	<h3>
		<?php #Arrays e if
							#0 - Manzanas , 1 - peras 
			$frutas = array('Manzanas','Uv' => 'Uvas','Peras');
		 	echo $frutas[1];

		 	$frutas2 = array('clave1' => 'Toronja','clave2' => 'Papaya');
		 	echo $frutas2['clave1'];
		 	
		 	if ($frutas[1] == 'Uvas'){
		 		echo "Es Correcto";
		 	}else{
		 		echo "Es incorrecto";
		 	}

		 ?>
	</h3>
	<h1>
		<?php #Constantes
			define('constante','Hola');
			echo constante
		 ?>
	</h1>
	<h2>
		<?php #Ciclo Switch
			$op = 2;
			switch ($op) {
				case '1':
					echo "opcion 1";
					break;
				case '2':
					echo "opcion 2";
					break;
				case '3':
					echo "opcion 3";
					break;
				default:
					echo "opcion default";
					break;
			}
		?>
	</h2>
	<h3>
		<?php #Operaciones con fechas
			echo "fecha de hoy: ".date('d-m-Y');
			echo "<br>";
			echo "El dia de hoy es: ".date('d');
			echo "<br>";
			echo "El mes actual es: ".date('m');
			echo "<br>";
			echo "El mes actual es: ".date('M');
			echo "<br>";
			echo "El mes actual es: ".date('F');
			echo "<br>";
			echo "La semans es: ".date('W');
			echo "<br>";
			echo "Cuantos dias tiene el mes: ".date('t');
		?>
	</h3>
	<h1>
		<?php 
			#Operadores Aritmeticos
			# == Igual
			# === Identico
			# != Diferente <>
			# !== No Identico
			# <= Menor que
			# > Mayor que

			#Manipulacion de Cadenas
			$cadena = 'Hola mundo';
			echo strlen($cadena);
			echo '<br>';
			echo str_replace('H', 'h', $cadena);
		?>
	</h1>
	<h2>
		<?php #Funciones
			function fun(){
				echo "Funcion Fun";
				return;
			}

			function nofun(){
				$var = "Funcion NoFun";
				return $var;
			}
			
			function suma($var1,$var2){
				$resultado = $var1 + $var2;
				return $resultado;
			}

			$varSuma = 4;

			echo fun();
			echo nofun();
			echo suma($varSuma,6);
		?>
	</h2>
	
</body>
</html>