<?php
if(!isset($_GET['idCliente'])){
	header('Location: cliente.php');
}


session_start();
include '../controlador/conexion.php';
$idCliente=$_GET['idCliente'];

$sentencia=$db->prepare("SELECT * FROM cliente WHERE idCliente=?");
$sentencia->execute([$idCliente]);
$cliente=$sentencia->fetch(PDO::FETCH_OBJ);


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Actualizar Cliente</title>
	<link rel="stylesheet"  href="css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<h1>Actualizar Cliente</h1>
	<div class="container mt-5">
		<form action="../modelo/update_Cliente.php" method="POST">
			<input type="hidden" name="idCliente" value="<?php echo $cliente->idCliente;?>">
			<input type="text" name="nrodocumento" placeholder="nrodocumento" value="<?php echo $cliente->nrodocumento;?>">
			<input type="text"  name="nombre" placeholder="nombre" value="<?php echo $cliente->nombre;?>">
			<input type="text"  name="apellidoPaterno" placeholder="apellidoPaterno" value="<?php echo $cliente->apellidoPaterno;?>">
			<input type="text"  name="apellidoMaterno" placeholder="apellidoMaterno" value="<?php echo $cliente->apellidoMaterno;?>">
			<input type="hidden" name="oculto">
			<input type="submit" class="btn btn-primary btn-block" value="Actualizar">
		</form>
	</div>
</body>
</html>