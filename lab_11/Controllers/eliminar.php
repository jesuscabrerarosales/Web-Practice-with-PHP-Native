<?php
require '../Model/database.php';

$id=$_GET['id'];
$query=$db->prepare("DELETE FROM productos WHERE id=?");
$query->execute([$id]);
$numElimina=$query->rowCount();
?>