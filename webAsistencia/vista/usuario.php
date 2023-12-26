<?php
session_start();
include '../controlador/conexion.php';
$sentencia = $db->query("SELECT * FROM entrenador WHERE estado=1");
$entrenador = $sentencia->fetchAll(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Usuario</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="usuario.css">

    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js'></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth'
            });
            calendar.setOption('locale', 'Es');
            calendar.render();
        });
    </script>


</head>

<body>
    <div class="container">
        <br>
        <h2>Panel de Usuario</h2>
        <br>
        <div class="row">
            <div class="col-md-7 border-right">
                <div class="row">
                    <div class="col-md-8 ">
                        <h3>Marcar Asistencia</h3>
                        <form action="../modelo/asistencia.php" method="post">
                            <div class="form-check">
                                <input type="text" name="nrodocumento" placeholder="Dni">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                    <div class="col-md-8">
                        <hr>
                        <br>
                        <h3>Entrenador Disponible</h3>
                        <p>Tienes total libertad de escoger a uno
                            de nuestros entrenadores</p>

                        <h2>Lista de Entrenadores</h2>
                        <div name="tablaEntrenador" id="container">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>DNI</th>
                                        <th>Nombre </th>
                                        <th>Apellido Paterno</th>
                                        <th>Apellido Materno</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($entrenador as $dato) {
                                    ?>
                                        <tr>
                                            <th><?php echo $dato->idEntrenador; ?></th>
                                            <th><?php echo $dato->nrodocumento; ?></th>
                                            <th><?php echo $dato->nombre; ?></th>
                                            <th><?php echo $dato->apellidoPaterno; ?></th>
                                            <th><?php echo $dato->apellidoMaterno; ?></th>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <h3>Calendario</h3>
                <br>
                <div id='calendar'></div>
                <p>Mantente pendiente de nuestros eventos y ofertas!!</p>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>