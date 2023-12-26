
<?php

        try {

            $db = new PDO("mysql:host=localhost;dbname=almacen","root","" );
            echo "conecto";
        } catch (PDOException $e) {
            echo 'Error conexion: ' . $e->getMessage();
        }          
?>
