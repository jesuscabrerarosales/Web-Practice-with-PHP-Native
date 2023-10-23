<?php
function conectar(){
	$host="localhost:3307";
	$user="root";
	$pass="";

	$bd="bd07";
	$con=mysqli_connect($host,$user,$pass);

	mysqli_select_db($con,$bd);
	return $con;
}

?>