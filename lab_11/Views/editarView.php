<?php include '../Controllers/editar.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/estilos.css">
    <script src="../public/js/bootstrap.bundle.min.js"></script>
</head>
<body class="py-3">
    <main class="container contenedor">
        <div class="p-3 rounded">
            <div class="row">
                <div class="col">
                    <h4>Nuevos registros</h4>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <form class="row g-3" method="POST" action="guardarView.php" autocomplete="off">
                        <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
                        <div class="col-md-4">
                            <label for="codigo" class="form-label">Codigo</label>
                            <input type="text" name="codigo" id="codigo" class="form-control" value="<?php echo $row['codigo'];?>" required autofocus>
                        </div>
                        <div class="col-md-8">
                            <label for="descripcion" class="form-label">Descripcion</label>
                            <input type="text" name="descripcion" id="descripcion" class="form-control" value="<?php echo $row['descripcion'];?>">
                        </div>
                        <h5>Inventario</h5>
                        <div class="col-md-12">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="inventariable" id="inventariable" value="1">
                                <label for="inventariable" class="form-check-label">Usa inventario</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="stock" class="form-label">Existencias</label>
                            <input type="number" name="stock" id="stock" value="<?php echo $rom['stock'];?>" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <a class="btn btn-secondary" href="index.php">Regresar</a>
                            <button type="submit" class="btn btn-primary" name="regisro">Guardar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </main>
</body>
</html>