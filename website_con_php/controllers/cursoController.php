
<?php
    include("../models/cursoDAO.php");
    if(isset($_POST['btnActualizar'])){
        $id=$row['id'];
        $cod=$row['cod'];
        $nom=$row['nom'];
        $cic=$row['cic'];
        $numC=$row['numCre'];
        $m=modificar($id,$cod,$nom,$cic,$numC);
        header("Location: ../index.php?m=$m");
    }else if(isset($_GET['id'])){
        $id=$_GET['id'];
        $m=eliminarCurso($id);
        header("Location: ../index.php?m=$m");
    }else if(isset($_POST['btnRegistrar'])){
        $cod=$row['cod'];
        $nom=$row['nom'];
        $cic=$row['cic'];
        $numC=$row['numCre'];
        $m=insertar($cod,$nom,$cic,$numC);
        header("Location: ../index.php?m=$m");
    }
    function consultarCur($idC){
        return consultarCurso($idC);
    }
    function listaCursos(){
        return getCursos();
    }
?>
