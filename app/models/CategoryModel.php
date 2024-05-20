<?php

    require("./config/db_conexion.php");

    class CategoryModel{

        private $db;
        private $category;

        public function __construct() {
            $this->db = Connetion::connet();
            $this->category = array();
        }
        
        public function get_categorys(){
            try {

                $sql = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado FROM eventos INNER JOIN categoria_evento ON eventos.id_cat_evento = categoria_evento.id_categoria INNER JOIN invitados ON eventos.id_invitado = invitados.invitado_id ORDER BY evento_id";
			    $result = $this->db->query($sql);

            } catch (\Exception $e) {
                echo $e->getMessage();
            }
			
			while($eventos = $result->fetch_assoc())
			{
                $evento = array(
                    'titulo' => $eventos['nombre_evento'],
                    'fecha' => $eventos['fecha_evento'],
                    'hora' => $eventos['hora_evento'],
                    'categoria' => $eventos['cat_evento'],
                    'icono' => $eventos['icono'],
                    'invitado' => $eventos['nombre_invitado'] . ' ' . $eventos['apellido_invitado']
                );
                
				$this->category[$eventos['fecha_evento']][] = $evento;
			}
			return $this->category;
		}
        
    }
?>


