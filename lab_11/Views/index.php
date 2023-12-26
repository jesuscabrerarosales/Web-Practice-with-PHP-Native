<?php
include '../Controllers/mostrar.php'
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Almacen</title>
    
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/estilos.css">
    <script src="../public/js/bootstrap.bundle.min.js"></script>
    
</head>
<body class="py-3">
    <main class="container contenedor">
        <div class="p-3 rounded">
            <div class="row">
                <div class="col-12">
                    <h4>Productos
                        <a href="ingresarView.php" class="btn btn-primary float-right">Nuevo</a>
                    </h4>
                </div>
            </div>
            <div class="row py-3">
                <div class="col">
                    <table class="table table-border">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Codigo</th>
                                <th>Descripcion</th>
                                <th>Stock</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($resultado as $row){
                            ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['codigo']; ?></td>
                                <td><?php echo $row['descripcion']; ?></td>
                                <td><?php echo $row['stock']; ?></td>
                                <td><a href="editarView.php?id=<?php echo $row['id'];?>" 
                                class="btn btn-warning">EDITAR</a></td>
                                <td><a href="eliminarView.php?id=<?php echo $row['id'];?>" 
                                class="btn btn-danger">ELIMINAR</a></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

            </div>
            <a href="../pdf.php" class="btn btn-primary">GENERAR REPORTE</a>
        </div>
    </main>
</body>
</html>