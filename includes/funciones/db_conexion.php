<?php 
    $conn = new mysqli('localhost', 'root', '', 'ctgwebcamp');

    if ($conn -> connect_error) {
        throw new RuntimeException("Error al intentar conectar a la base de datos", 
            $conn->connect_error);
    }

?>