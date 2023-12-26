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
                    <h4>Nuevos registro</h4>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <form action="guardarView.php" class="row g-3" method="POST" autocomplete="off">
                        <div class="col-md-4">
                            <label for="codigo" class="form-lable">Codigo</label>
                            <input type="text" id="codigo" name="codigo" class="form-control" required autofocus>
                        </div>
                        <div class="col-md-8">
                            <label for="descripcion" class="form-lable">Descripcion</label>
                            <input type="text" id="descripcion" name="descripcion" class="form-control" required autofocus>
                        </div>
                        <h5>Inventario</h5>
                        <div class="col-md-12">
                            <label for="inventariable" class="form-lable">Usa Inventario</label>
                            <input type="checkbox" id="inventariable" name="inventariable" class="form-check-label" value="1">
                        </div>
                        <div class="col-md-4">
                            <label for="stock" class="form-lable">Existencia</label>
                            <input type="number" id="stock" name="stock" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <a class="btn btn-secondary" href="index.php">Regresar</a>
                            <button type="submit" class="btn btn-primary" name="registro" >Guardar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>