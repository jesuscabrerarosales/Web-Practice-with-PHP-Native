<?php
include("Model/Conexion.php");
$con=__construct();
$cod_estudiante=$_POST['cod_estudiante'];
$dni=$_POST['dni'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];

$sql="INSERT INTO alumnos VALUES('$cod_estudiante','$dni','$nombres','$apellidos')";

$query=mysqli_query($con,$sql);
if($query){
	Header("Location: V_verUsuarios_02.php");
}else {
}
?>