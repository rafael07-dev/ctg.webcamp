<?php
    require_once("./app/models/CategoryModel.php");
    require_once("./app/models/InvitadoModel.php");

    class HomeController
    {
        public function index()
        {
            $model = new InvitadoModel();
            $invitados = $model->get_invitados();

            $modelCategory = new CategoryModel();
            $arrayCategory = $modelCategory->getCategoryMulty();

            require("./app/views/main.view.php");
        }
    }
?>