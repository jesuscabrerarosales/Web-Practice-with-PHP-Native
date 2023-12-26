<?php
include '../Model/database.php';

$activo=1;

$sentencia=$db->prepare('SELECT id, codigo, descripcion, stock FROM productos
WHERE activo=? ORDER BY codigo ASC');
$sentencia->execute([$activo]);
$resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);

?>