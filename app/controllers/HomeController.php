<?php
    require_once("./app/models/CategoryModel.php");
    require_once("./app/models/InvitadoModel.php");

    class HomeController
    {
        public function index()
        {
            $modelInvitados = new InvitadoModel();
            $modelCategory = new CategoryModel();

            $categoria = $modelCategory->get_category();
            $arrayCategory = $modelCategory->getCategoryMulty();
            $invitados = $modelInvitados->get_invitados();
            
            require("./app/views/main.view.php");
        }
    }
?>