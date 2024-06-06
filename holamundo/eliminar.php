<?php include 'conexion.php';
	
	$id = $_REQUEST['id'];

	$sel = $con -> query("DELETE FROM alumnos WHERE ID = '$id'" );

	if($sel){
		echo "<script>

			location.href = 'formularioAlumnos.php';

		</script>";
	}else{
		echo "<script>

			alert('El registro no pudo ser eliminado');
			location.href = 'formularioAlumnos.php';

		</script>";
	}

?>