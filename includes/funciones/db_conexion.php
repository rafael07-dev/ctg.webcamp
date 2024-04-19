<?php 
    $conn = new mysqli('localhost', 'root', 'root', 'ctgwebcamp');

    if ($conn -> connect_error) {
        echo $error -> $conn -> connect_error;
    }

?>