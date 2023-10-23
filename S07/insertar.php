<?php
include("conexion.php");
$con=conectar();
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$empleo=$_POST['empleo'];
$estadoCivil=$_POST['estadoCivil'];

$sql="INSERT INTO persona VALUES('$nombre','$apellido','$empleo','$estadoCivil')";

$query=mysqli_query($con,$sql);
if($query){
	Header("Location: alumno.php");
}else {
}
?>