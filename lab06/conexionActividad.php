<?php
$link ='mysql:host=localhost;dbname=bd_actividad';
$usuario='root';
$pass='';

try {
	$pdo=new PDO($link,$usuario,$pass);
	print "Se conecto";
} catch (PDOException $e) {
	print "error!".$e->getMessage()."<br>";
	
}

?>