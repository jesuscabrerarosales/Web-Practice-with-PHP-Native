<?php

include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$empleo=$_POST['empleo'];
$estadoCivil=$_POST['estadoCivil'];

$sql="UPDATE persona SET apellido='$apellido',empleo='$empleo',estadoCivil='$estadoCivil' WHERE nombre='$nombre'";
$query=mysqli_query($con,$sql);

if($query){
	Header("Location: alumno.php");
}
?>