<?php
include("Model/Conexion.php");
$con=new mysqli('localhost:8012','root','','bdalumos');

$cod_estudiante=$_GET['id'];
$sql="DELETE FROM alumnos WHERE cod_estudiante='$cod_estudiante'";
$query=mysqli_query($con,$sql);

if($query){
	Header("Location: V_verUsuarios_02.php");
}
?>
?>