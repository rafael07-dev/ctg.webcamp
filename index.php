<?php
    require(__DIR__."/config/config.php");
    require(__DIR__."/config/db_conexion.php");
    require(__DIR__."/app/core/app.php");

    $app = new App();
    $app->run();

?>