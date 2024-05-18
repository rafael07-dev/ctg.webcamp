<?php
    require(__DIR__ . "/config/router.php");
    require(__DIR__."/app/controllers/HomeControlller.php");

    $router = new Router();

    $router->add('/', 'HomeController@index'); 

    $router->add('/home', 'HomeController@showHome');

    $router->add('/about', 'HomeController@showAbout');

    $router->run();
?>