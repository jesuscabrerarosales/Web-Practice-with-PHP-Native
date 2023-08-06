<?php
    include("conexion.php");
    function insertar($cod,$nom,$cic,$nc){
        global $cn;
        $sql="INSERT INTO TCurso(CodCur,NomCur,Ciclo,NumCre) VALUES ('".$cod."','".$nom."','".$cic."','".$nc."')";
        if(mysqli_query($cn,$sql)){
            return "Los datos fueron registrados con exito!!";
        }else{
            return "ERROR, los datos no se registraron!!";
        }
    }
    function getCursos(){
        global $cn;
        $sql="SELECT*FROM TCurso";
        return mysqli_query($cn,$sql);
    }
    function consultarCurso($idC){
        global $cn;
        $sql="SELECT*FROM TCurso WHERE id='".$idC."'";
        return mysqli_query($cn,$sql);
    }

    function modificar($id,$cod,$nom,$cic,$numc){
        global $cn;
        $sql="UPDATE TCurso SET CodCur='".$cod."',NomCur='".$nom."',Ciclo='".$cic."',NumCre='".$numc."' WHERE id='".$id."'";
        
        if(mysqli_query($cn,$sql)){
            return "Los datos fueron modificados con exito!!";
        }else{
            return "ERROR, los datos no se modificaron!!";
        }
    }
    function eliminarCurso($id){
        global $cn;
        $sql="DELETE FROM TCurso WHERE id='".$id."'";
        if(mysqli_query($cn,$sql)){
            return "El curso se eliminado con exito!!";
        }else{
            return "ERROR, el curso no se elimino!!";
        }
    }
?>