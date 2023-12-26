<?php

if(!isset($_POST["oculto"])){
    exit();
}



session_start();
include '../controlador/conexion.php';


$nrodocumento=$_POST['nrodocumento'];
$nombre=$_POST['nombre'];
$apellidoPaterno=$_POST['apellidoPaterno'];
$apellidoMaterno=$_POST['apellidoMaterno'];

$sentencia=$db->prepare( "INSERT INTO cliente(nrodocumento,nombre,apellidoPaterno,apellidoMaterno) VALUES(?,?,?,?);");
$resultado = $sentencia->execute([$nrodocumento,$nombre,$apellidoPaterno,$apellidoMaterno]);

if($resultado===TRUE){
	Header("Location: ../vista/cliente.php");
}else {
    
}
?>