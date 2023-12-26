<?php
session_start();
include 'conexion.php';

if(isset($_POST["btnLogin"])){
    if($_POST["c_nomb_usua"]=="" or $_POST["c_clav_usua"]=="" ){
        header("Location: ../index.html");
    }else{
        $usuario=strip_tags(trim($_POST["c_nomb_usua"]));
        $password=strip_tags(trim($_POST["c_clav_usua"]));
        $query=$db->prepare("SELECT*FROM usuarios WHERE c_nomb_usua =? and c_clav_usua =? ");
        $query->execute(array($usuario,$password));
        $control=$query->fetch(PDO::FETCH_OBJ);


        if($control>=0){
            header("Location: ../vista/Menu.html");
        }else {
            header("Location: ../index.html");
        }
        
    }
}

?>

