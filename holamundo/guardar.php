<?php 
	include 'conexion.php';
	$nombre = $_POST['nombre'];
	$escuela = $_POST['facultad'];
	$materia = $_POST['materia'];

	$ins = $con -> query("INSERT INTO alumnos(id,Nombre,Facultad,Materia) VALUES ('','$nombre','$escuela','$materia')");

	if ($ins){
		echo "Guardado!";
	}else{
		echo "No se ah podido guardar!";

	}
 ?>