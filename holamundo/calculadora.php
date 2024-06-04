<?php
	
	function filtroDatos($datos){
		$datos = trim($datos); //Elimina espacios antes y despues de los datos
		$datos = stripcslashes($datos); //Elimina backslashes
		$datos = htmlspecialchars($datos); //Traduce caracteres a HTMl
	}

	$val1 = filtroDatos($_POST['valor1']);
	$val2 = filtroDatos($_POST['valor2']);
	$operador = filtroDatos($_POST['operador']);

	function calcular($v1,$v2){
		$ope = 'operador';
		switch($ope){
			case 0:
				$res = $v1 + $v2;
				break;
			case 1:
				$res = $v1 - $v2;
				break;
			case 2:
				$res = $v1 * $v2;
				break;
			case 3:
				$res = $v1 / $v2;
				break;

		}
		return $res;
	}

	$operacion = array('SUMA','RESTA','MULTIPLICACION','DIVISION'); 
	echo "El resultado de la ", $operacion[$operador], " es : ", calcular($val1,$val2);

?>