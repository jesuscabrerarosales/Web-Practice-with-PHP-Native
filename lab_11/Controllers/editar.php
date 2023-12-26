<?php
include '../Model/database.php';

$id=$_GET['id'];
$activo=1;

$sentencia=$db->prepare('SELECT codigo, descripcion, inventariable,stock FROM productos
WHERE id=:id AND activo=:activo');
$sentencia->execute(['id'=>$id,'activo'=>$activo]);
$num=$sentencia->rowCount();
if($num> 0){
    $row=$sentencia->fetch(PDO::FETCH_ASSOC);
}else{
    header('Location: index.php');}

?>