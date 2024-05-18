<?php 

    $urlPath = $_SERVER['REQUEST_URI'];

    $url = substr($urlPath, 13);

    define("URL", $url);

?>