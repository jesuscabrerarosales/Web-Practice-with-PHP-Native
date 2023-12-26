<?php
if(!isset($_GET['idEntrenador'])){
	header('Location: entrenador.php');
}


session_start();
include '../controlador/conexion.php';
$idEntrenador=$_GET['idEntrenador'];

$sentencia=$db->prepare("SELECT * FROM entrenador WHERE idEntrenador=?");
$sentencia->execute([$idEntrenador]);
$entrenador=$sentencia->fetch(PDO::FETCH_OBJ);


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Actualizar Entrenador</title>
	<link rel="stylesheet"  href="css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
	<div class="container mt-5">
		<form action="../modelo/update.php" method="POST">
			<input type="hidden" name="idEntrenador" value="<?php echo $entrenador->idEntrenador;?>">
			<input type="text" name="nrodocumento" placeholder="nrodocumento" value="<?php echo $entrenador->nrodocumento;?>">
			<input type="text"  name="nombre" placeholder="nombre" value="<?php echo $entrenador->nombre;?>">
			<input type="text"  name="apellidoPaterno" placeholder="apellidoPaterno" value="<?php echo $entrenador->apellidoPaterno;?>">
			<input type="text"  name="apellidoMaterno" placeholder="apellidoMaterno" value="<?php echo $entrenador->apellidoMaterno;?>">
			<input type="hidden" name="oculto">
			<input type="submit" class="btn btn-primary btn-block" value="Actualizar">
		</form>
	</div>
</body>
</html>