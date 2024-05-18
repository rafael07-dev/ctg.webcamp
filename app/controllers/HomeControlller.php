<?php

class HomeController
{

    public function index()
    {
        echo "index - Asi llamo una funcion dentro de un controllador";
    }

    //HomeController@showHome
    public function showHome()
    {
        echo "Home - Asi llamo una funcion dentro de un controllador";
    }

    //HomeController@showAbout
    public function showAbout()
    {
        echo "About - Asi llamo una funcion dentro de un controllador";
    }
}
?>