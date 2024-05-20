<?php
    require_once("./app/models/InvitadoModel.php");
    class invitadosController
    {
        public function index()
        {
            $model = new InvitadoModel();
            $invitados = $model->get_invitados();
            require("./app/views/invitados.view.php");
        }
    }
?>