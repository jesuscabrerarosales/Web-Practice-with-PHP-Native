<?php
include_once 'conexionActividad.php';
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
		<?php echo $dato ['nombre']?><br>
		<?php echo $dato ['apellido']?><br>
		<?php echo $dato ['empleo']?><br>
		<?php echo $dato ['estadoCivil']?><br>
		<?php }?>
	</div>
</body>
</html>