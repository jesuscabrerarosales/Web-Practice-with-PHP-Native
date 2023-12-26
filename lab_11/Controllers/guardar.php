<?php
require '../Model/database.php';
$correcto=false;
if(isset($_POST['1'])){
    $id=$_POST['id'];
    $codigo=$_POST['codigo'];
    $descripcion=$_POST['descripcion'];
    $stock=$_POST['stock'];
    $invetariable=isset($_POST['inventariable'])?$_POST['inventariable']:0;

    if($stock==''){
        $stock= 0;
    }

    $query=$db->prepare('UPDATE productos SET codigo=?, descripcion=?,inventariable=?,stock=? WHERE id=?');
    $resultado=$query->execute(array($codigo,$descripcion,$invetariable,$stock,$id));
    if($resultado){
        $correcto=true;
    }

}else{
    $codigo=$_POST['codigo'];
    $descripcion=$_POST['descripcion'];
    $stock=$_POST['stock'];
    $invetariable=isset($_POST['inventariable'])?$_POST['inventariable']:0;
    
    if($stock==''){
        $stock= 0;
    }

    $query =$db->prepare('INSERT INTO productos (codigo,descripcion,inventariable,stock,activo)VALUES (:cod,:descr,:inv,:sto,1)');
    $resultado=$query->execute(array('cod'=>$codigo,'descr'=>$descripcion,'inv'=>$invetariable,'sto'=>$stock));
    if($resultado){
        $correcto=true;
        echo $db->lastInsertId();
    }
}
?>