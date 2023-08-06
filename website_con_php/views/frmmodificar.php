<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("../controllers/cursoController.php");
    if(isset($_GET['idC'])){
        $idC=$_GET['idC'];
        $datos=consultarCur($idC);
        if($row=mysqli_fetch_array($datos)){
            $id=$row['id'];
            $cod=$row['CodCur'];
            $nom=$row['NomCur'];
            $cic=$row['Ciclo'];
            $nc=$row['NumCre'];
        }
        echo "<form method='post' action='../controllers/cursoController.php'>";
        echo "Id : <input type='text' name ='id' value='".$id."'/><br>";
        echo "Codigo : <input type='text' name ='cod' value='".$cod."'/><br>";
        echo "Nombre : <input type='text' name ='nom' value='".$nom."'/><br>";
        echo "Ciclo : <input type='text' name ='cic' value='".$cic."'/><br>";
        echo "Numero de Creditos : <input type='text' name ='numCre' value='".$nc."'/><br>";
        echo "<input type='submit' name ='btnActualizar' value='Actualizar Curso'/>";
        echo "</form>";
    }
    ?>
</body>
</html>