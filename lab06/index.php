<?php
include_once 'conexion.php';
$sql_leer='select * from usuarios';
$gsent = $pdo->prepare($sql_leer);
$gsent ->execute();
$resultado=$gsent ->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
</head>
<body>
	<div>
		<?php foreach($resultado as $dato){?>
		<?php echo $dato ['Nombre']?><br>
		<?php echo $dato ['Apellido']?><br>
		<?php echo $dato ['Edad']?><br>
		<?php echo $dato ['Sexo']?><br>
		<?php }?>
	</div>
</body>
</html>