<?php
	include("conexion.php");
	$con=conectar();
	$sql="SELECT * FROM persona";
	$query=mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PAGINA PERSONA</title>
	<link rel="stylesheet"  href="css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
		<div class="container mt-5">
			<div class="row">
				<div class="col-md-3">
					<h1>INGRESE DATOS</h1>
					<form action="insertar.php" method="POST">
						<input type="text" class="form-control-mb-3" name="nombre" placeholder="Nombre">
						<input type="text" class="form-control-mb-3" name="apellido" placeholder="Apellido">
						<input type="text" class="form-control-mb-3" name="empleo" placeholder="Empleo">
						<input type="text" class="form-control-mb-3" name="estadoCivil" placeholder="Estado Civil">

						<input type="submit" class="btn btn-primary">

					</form>
				</div>
				<div class="col-md-8">
					<table class="table">
						<thead class="table-success table-striped">
							<tr>
								<th>Nombre</th>
								<th>Apellido</th>
								<th>Empleo</th>
								<th>Estado Civil</th>
								<th></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php
								while ($row=mysqli_fetch_array($query)) {
							?>
							<tr>
								<th><?php echo $row['nombre']?></th>
								<th><?php echo $row['apellido']?></th>
								<th><?php echo $row['empleo']?></th>
								<th><?php echo $row['estadoCivil']?></th>
								<th><a href="actualizar.php?nombre=<?php echo $row['nombre']?>" class="btn btn-info">Editar</a></th>
								<th><a href="delete.php?nombre=<?php echo $row['nombre']?>" class="btn btn-danger">Eliminar</a></th>
							</tr>
							<?php
								}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
</body>
</html>