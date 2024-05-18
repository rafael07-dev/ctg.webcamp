<?php

    include("./config/db_conexion.php");
    
    class InvitadoModel{

        private $db;
        private $invitado;

        public function __construct() {
            $this->db = Connetion::connet();
            $this->invitado = array();
        }
        
        public function get_invitados(){

			$sql = "SELECT * FROM invitados";
			$result = $this->db->query($sql);
			while($row = $result->fetch_assoc())
			{
				$this->invitado = $row;
			}
			return $this->invitado;
		}
        
    }
?>