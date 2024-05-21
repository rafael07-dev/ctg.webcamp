<?php

    class Connetion{
        
        public static function connet() {
            $conn = new mysqli("localhost", "root", "", "ctgwebcamp");

            return $conn;
        }
    }
    

?>