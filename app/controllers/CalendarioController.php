<?php
    require_once("./app/models/CategoryModel.php");
    class CalendarioController
    {
        public function index()
        {
            $model = new CategoryModel();
            $calendario = $model->get_categorys();
            require("./app/views/calendario.view.php");
        }
    }
?>