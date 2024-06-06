<?php include 'conexion.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario</title>
</head>
<body>
<h1>Formulario para Alumnos</h1>
		<form action="guardar.php" method="post">
			<input type="text" name="nombre" placeholder="Nombre del Alumno"><br>
			<input type="text" name="facultad" placeholder="Facultad de precedencia"><br>
			<input type="text" name="materia" placeholder="Materia a llevar"><br>
			<input type="submit" name="Guardar">
		</form>
	<br><br>
<h1>Alumnos Inscritos</h1>
		<table>
			<th>ID</th>
			<th>Nombre</th>
			<th>Escuela</th>
			<th>Materia</th>
			<td></td>
			<?php 
				$sel = $con -> query("SELECT * FROM alumnos ");
				while ($fila = $sel -> fetch_assoc()) {
			 ?>
			 <tr>
			 	<td><?php echo $fila['ID']; ?></td>
			 	<td><?php echo $fila['Nombre'];?></td>
			 	<td><?php echo $fila['Facultad']; ?></td>
			 	<td><?php echo $fila['Materia']; ?></td>
			 	<td><a href="actualizar.php?id= <?php echo $fila['ID'] ?>">EDITAR</a> </td>
			 	<td><a href="eliminar.php?id= <?php echo $fila['ID'] ?>">ELIMINAR</a></td>
			 </tr>
			<?php } ?>
		</table>
</body>
</html>