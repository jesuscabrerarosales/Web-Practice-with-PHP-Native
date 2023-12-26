<?php
if(!isset($_GET["idEntrenador"])){
    exit();
}
$idEntrenador = $_GET["idEntrenador"];
session_start();
include '../controlador/conexion.php';
$sentencia =$db->prepare('DELETE FROM entrenador WHERE idEntrenador=?');
$resultado=$sentencia->execute([$idEntrenador]);


if($resultado===TRUE){
	Header("Location: ../vista/entrenador.php");
}else {
    
}
?>