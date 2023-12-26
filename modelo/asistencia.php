<?php
session_start();
include '../controlador/conexion.php';

$nrodocumento=$_POST['nrodocumento'];

$fecha = date('Y-m-d');

$sentencia =$db->prepare("INSERT INTO asistencia (nrdocumento, fecha) VALUES (?, ?)");
$resultado =$sentencia->execute([$nrodocumento, $fecha]); 

if($resultado===TRUE){
	Header("Location: ../vista/usuario.php");
}else {
    
}
?>