<?php include_once('lib/miconexion.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejemplo de Conexion</title>
</head>
<body>
	<?php 
	$conexion = new miconexion();
	if ($conexion){
		echo '<h1>Conexion Exitosa</h1>';
		//  $conexion->desconectar();
	}
	//consulta de informacion a la tabla de alumnos
	$query = 'select * from alumnos';
	$rst = mysqli_query($conexion->conexion, $query);
	var_dump($rst);
	if (mysqli_num_rows($rst) == 0)
		echo '<h2>Sin registros</h2>';
	elseif (mysqli_num_rows($rst) == 1){
		$alumno = mysqli_fetch_assoc($rst);
		echo 'Matricula: ' $alumno['matricula'].', Alumno: '.$alumno['nombre'].', Email: '.$alumno['email'].', Telefono: '.$alumno['telefono'];

	}

	?>
</body>
</html>