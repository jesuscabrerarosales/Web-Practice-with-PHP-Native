<?php
if(!isset($_GET["idCliente"])){
    exit();
}
$idCliente = $_GET["idCliente"];
session_start();
include '../controlador/conexion.php';
$sentencia =$db->prepare('DELETE FROM cliente WHERE idCliente=?');
$resultado=$sentencia->execute([$idCliente]);


if($resultado===TRUE){
	Header("Location: ../vista/cliente.php");
}else {
    
}
?>