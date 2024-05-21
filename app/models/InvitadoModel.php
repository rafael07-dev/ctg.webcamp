<?php
    
    class InvitadoModel{

        private $db;
        private $invitado;

        public function __construct() {
            $this->db = Connetion::connet();
            $this->invitado = array();
        }
        
        public function get_invitados(){

			$sql = "SELECT invitado_id, nombre_invitado, apellido_invitado, url_imagen FROM invitados";
			$result = $this->db->query($sql);
			while($row = $result->fetch_all(MYSQLI_ASSOC))
			{
				$this->invitado = $row;
			}
			return $this->invitado;
		}
        
    }
?>