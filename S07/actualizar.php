<?php
	include ("conexion.php");
	$con=conectar();

$nombre=$_GET['nombre'];
$sql="SELECT * FROM persona WHERE nombre='$nombre'";
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
			<input type="hidden" name="nombre" value="<?php echo $row['nombre']?>">
			<input type="text" class="form-control-mb-3" name="apellido" placeholder="Apellido" value="<?php echo $row['apellido']?>">
			<input type="text" class="form-control-mb-3" name="empleo" placeholder="Empleo" value="<?php echo $row['empleo']?>">
			<input type="text" class="form-control-mb-3" name="estadoCivil" placeholder="Estado Civil" value="<?php echo $row['estadoCivil']?>">
			<input type="submit" class="btn btn-primary btn-block" value="Actualizar">
		</form>
	</div>
</body>
</html>