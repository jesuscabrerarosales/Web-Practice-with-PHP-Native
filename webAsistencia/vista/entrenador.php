<?php
    session_start();
    include '../controlador/conexion.php';
    $sentencia= $db->query("SELECT * FROM entrenador");
    $entrenador= $sentencia->fetchAll(PDO::FETCH_OBJ);
    

?>



<!DOCTYPE html>
<html lang="es">

<head>
    <title>ENTRENADOR</title>
    <meta charset="utf-8">
    <meta name="description" content="Este es un documento HTML5">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <link rel="stylesheet" href="../estilos/entrenador.css">

</head>

<body>
    <header id="cabeceralogo">
        <div>
            <h1>Bienvenidos a MYAGYM</h1>
            <hr>
            <h2>Entrenedor</h2>
        </div>
    </header>
    <nav id="menuprincipal">
        <div>
            <ul id="listamenu">
                <li><a href="Menu.html">Inicio</a></li>

                <li><a href="reportes.html">Reportes</a>
                    <ul>
                        <li><a href="entrenador.php">Entrenador</a></li>
                        <li><a href="cliente.php">Cliente</a></li>
                    </ul>
                </li>
                
                <li><a href="usuario.php">Vista Usuario</a></li>
                <li><a href="../index.html">Cerrar Sesion</a></li>
            </ul>
        </div>
    </nav>
    <main>
        <div name="tablaEntrenador" id="container">
            <form action="../modelo/crear.php" method="POST">
                <h2>Crear Entrenador</h2>
                <input type="text" name="nrodocumento" placeholder="Número de Documento" required>
                <input type="text" name="nombre" placeholder="Nombre" required>
                <input type="text" name="apellidoPaterno" placeholder="Apellido Paterno" required>
                <input type="text" name="apellidoMaterno" placeholder="Apellido Materno" required>
                <button name="crear" type="submit">Crear</button>
                <input type="hidden" name="oculto" value="1">
            </form>
    
            <h2>Lista de Entrenadores</h2>
            <table>
                <thead>
                    <tr>
                        <th>DNI</th>
                        <th>Nombre </th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th></th>
                        <th></th>
                    </tr>    
                </thead>
                <tbody>
                    <?php
                        foreach($entrenador as $dato){
                            ?>
                        <tr>
                        <th><?php echo $dato->nrodocumento;?></th>
                        <th><?php echo $dato->nombre;?></th>
                        <th><?php echo $dato->apellidoPaterno;?></th>
                        <th><?php echo $dato->apellidoMaterno;?></th>
                        <th><a href="actualizar.php?idEntrenador=<?php echo $dato->idEntrenador;?>" class="button">EDITAR</a></th>
                        <th><a href="../modelo/delete.php?idEntrenador=<?php echo $dato->idEntrenador;?>" class="button">Eliminar</a></th>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
            
        </div>
<br>
        <a href="../pdf_Entrenador.php" class="btn btn-primary" target="_blank">GENERAR REPORTE</a>
        
    </main>
    <footer id="pielogo">
        <div>
            <section class="seccionpie">
                <h1>Redes sociales</h1>
                <p><a href="https://www.facebook.com/" target="_blank">Facebook</a></p>
                <p><a href="https://www.instagram.com/" target="_blank">Instagram</a></p>
                <p><a href="https://www.tiktok.com/" target="_blank">Tiktok</a></p>
            </section>
            <section class="seccionpie">
                <h1>Ayuda</h1>
                <p><a href="contacto.html">Contacto</a></p>
            </section>
            <section class="seccionpie">
                <address>Lima, Perú</address>
                <small>&copy; Derechos Reservados Grupo 04 2023</small>
            </section>
            <div class="recuperar"></div>
        </div>
    </footer>
</body>

</html>