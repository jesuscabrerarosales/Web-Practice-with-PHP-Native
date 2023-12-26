<?php
if(!isset($_POST['oculto'])){
	header('Location: entrenador.php');
}

session_start();
include '../controlador/conexion.php';

$oculto =$_POST['oculto'];
$idEntrenador = $_POST['idEntrenador'];
$nrodocumento =$_POST['nrodocumento'];
$nombre=$_POST['nombre'];
$apellidoPaterno=$_POST['apellidoPaterno'];
$apellidoMaterno=$_POST['apellidoMaterno'];

$sentencia =$db->prepare('UPDATE entrenador SET  nrodocumento=?,nombre=?,apellidoPaterno=?,apellidoMaterno=? WHERE idEntrenador=?');
$resultado =$sentencia->execute([$nrodocumento, $nombre, $apellidoPaterno,$apellidoMaterno,$idEntrenador]);    

if($resultado===TRUE){
	Header("Location: ../vista/entrenador.php");
}else {
    
}
?>