<?php
if(!isset($_POST['oculto'])){
	header('Location: cliente.php');
}

session_start();
include '../controlador/conexion.php';

$oculto =$_POST['oculto'];
$idCliente = $_POST['idCliente'];
$nrodocumento =$_POST['nrodocumento'];
$nombre=$_POST['nombre'];
$apellidoPaterno=$_POST['apellidoPaterno'];
$apellidoMaterno=$_POST['apellidoMaterno'];

$sentencia =$db->prepare('UPDATE cliente SET  nrodocumento=?,nombre=?,apellidoPaterno=?,apellidoMaterno=? WHERE idCliente=?');
$resultado =$sentencia->execute([$nrodocumento, $nombre, $apellidoPaterno,$apellidoMaterno,$idCliente]);    

if($resultado===TRUE){
	Header("Location: ../vista/cliente.php");
}else {
    
}
?>