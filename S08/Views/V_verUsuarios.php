<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lista de Usuarios</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
	<table>
		<thead>
			<tr>
				<td>Codigo de estudiante</td>
				<td>DNI</td>
				<td>Nombres</td>
				<td>Apellidos</td>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach ($usuarios as $user) {
					echo "<tr>";
					echo "<td>".$user['cod_estudiante']."</td>";
					echo "<td>".$user['dni']."</td>";
					echo "<td>".$user['nombres']."</td>";
					echo "<td>".$user['apellidos']."</td>";
					echo "</tr>";
				}
			?>
		</tbody>
	</table>
</body>
</html>