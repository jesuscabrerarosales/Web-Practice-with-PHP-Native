<?php
$usuario='root';
$contraseña='';
        try {

            $db = new PDO('mysql:host=localhost:3307;dbname=bdmyagym', $usuario, $contraseña );
            #echo "conecto";
        } catch (PDOException $e) {
            #echo 'Error conexion: ' . $e->getMessage();
        }          
?>