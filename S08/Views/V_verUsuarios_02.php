


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lista de Usuarios</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
	<div class="container mt-5">
			<div class="row">
				<div class="col-md-3">
					<h1>INGRESE DATOS</h1>
					<form action="insertar.php" method="POST">
						<input type="text" class="form-control-mb-3" name="cod_estudiante" placeholder="cod estudiante">
						<input type="text" class="form-control-mb-3" name="dni" placeholder="DNI">
						<input type="text" class="form-control-mb-3" name="nombres" placeholder="Nombres">
						<input type="text" class="form-control-mb-3" name="apellidos" placeholder="Apellidos">

						<input type="submit" class="btn btn-primary">

					</form>
				</div>
				<div class="col-md-8">
					<table class="table">
						<thead class="table-success table-striped">
							<tr>
								<th>Codigo</th>
								<th>Dni</th>
								<th>Nombres</th>
								<th>Apellidos</th>
								<th></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php
								foreach ($usuarios as $user){
							?>
							<tr>
								<th><?php echo $user['cod_estudiante']?></th>
								<th><?php echo $user['dni']?></th>
								<th><?php echo $user['nombres']?></th>
								<th><?php echo $user['apellidos']?></th>
								<th><a href="actualizar.php?id=<?php echo $user['cod_estudiante']?>" class="btn btn-info">Editar</a></th>
								<th><a href="delete.php?id=<?php echo $user['cod_estudiante']?>" class="btn btn-danger">Eliminar</a></th>
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