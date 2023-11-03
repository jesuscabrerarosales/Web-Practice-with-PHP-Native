<?php
	include ("Model/Conexion.php");
	$con=__construct();

$id=$_GET['id'];
$sql="SELECT * FROM alumnos WHERE cod_estudiante='$id'";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Actualizar</title>
	<link rel="stylesheet"  href="css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
	<div class="container mt-5">
		<form action="update.php" method="POST">
			<input type="hidden" name="cod_estudiante" value="<?php echo $row['cod_estudiante']?>">
			<input type="text" class="form-control-mb-3" name="dni" placeholder="DNI" value="<?php echo $row['dni']?>">
			<input type="text" class="form-control-mb-3" name="nombres" placeholder="Nombres" value="<?php echo $row['nombres']?>">
			<input type="text" class="form-control-mb-3" name="apellidos" placeholder="Apellidos" value="<?php echo $row['apellidos']?>">
			<input type="submit" class="btn btn-primary btn-block" value="Actualizar">
		</form>
	</div>
</body>
</html>