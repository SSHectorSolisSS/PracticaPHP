<?php include 'conexion.php';
	
	$id = $_REQUEST['id'];

	$sel = $con -> query("SELECT * FROM alumnos WHERE ID = '$id' ");
	if ($fila = $sel -> fetch_assoc()) {
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario</title>
</head>
<body>
<h1>Formulario para Alumnos</h1>
		<form action="update.php" method="post">
			<input type="hidden" name="id" value="<?php echo $id ?>">
			<input type="text" name="nombre" placeholder="Nombre del Alumno" value="<?php echo $fila['Nombre'] ?>"><br>
			<input type="text" name="facultad" placeholder="Facultad de precedencia" value="<?php echo $fila['Facultad'] ?>"><br>
			<input type="text" name="materia" placeholder="Materia a llevar" value="<?php echo $fila['Materia'] ?>"><br>
			<input type="submit" value="Actualizar">
		</form>
	
</body>
</html>