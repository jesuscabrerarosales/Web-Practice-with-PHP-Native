<?php
$link ='mysql:host=localhost;dbname=BD_Cabrera';
$usuario='root';
$pass='';

try {
	$pdo=new PDO($link,$usuario,$pass);
	print "Se conecto";
} catch (PDOException $e) {
	print "error!".$e->getMessage()."<br>";
	
}

?>