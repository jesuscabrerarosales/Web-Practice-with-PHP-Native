<?php
require('Model/Conexion.php');
$con=new Conexion();

$usuarios=$con->getUsers();
require('Views/V_verUsuarios_02.php');


?>