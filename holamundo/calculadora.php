<?php

	$val1 = $_POST['valor1'];
	$val2 = $_POST['valor2'];	

	function calcular($v1,$v2){
		$ope = $_POST['operador'];
		switch($ope){
			case 0:
				$resp = $v1 + $v2;
				break;
			case 1:
				$resp = $v1 - $v2;
				break;
			case 2:
				$resp = $v1 * $v2;
				break;
			case 3:
				$resp = $v1 / $v2;
				break;

		}
	return $resp;
	}

	$operacion = array('SUMA','RESTA','MULTIPLICACION','DIVISION'); 
	echo "El resultado de la ", $operacion[$_POST['operador']], " es : ", calcular($val1,$val2);

?>