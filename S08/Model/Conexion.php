<?php

class Conexion{
	private $con;


	public function __construct(){
		$this->con =new mysqli('localhost:8012','root','','bdalumos');
	}

	public function getUsers(){
		$query =$this->con->query('SELECT * FROM alumnos');
		$retorno=[];

		$i=0;
		while ($fila=$query->fetch_assoc()) {
			$retorno[$i]=$fila;
			$i++;
		}
		return $retorno;
	}

	
	
}

?>