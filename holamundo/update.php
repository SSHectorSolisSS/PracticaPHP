<?php include 'conexion.php';
	
	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$facultad = $_POST['facultad'];
	$materia = $_POST['materia'];

	$up = $con -> query("UPDATE alumnos SET Nombre = '$nombre', Facultad = '$facultad', Materia = '$materia' WHERE ID = '$id'"); 
	if ($up) {
		echo "<script>

			location.href = 'formularioAlumnos.php';

			</script>";
	}else{
		echo "<script>

			location.href='actualizar.php?id = ".$id."';

			</script>";
	}
?>
