<?php
    class CategoryModel{

        private $db;
        private $category;
        private $categoryMulti;

        public function __construct() {
            $this->db = Connetion::connet();
            $this->category = array();
            $this->categoryMulti = array();
        }

        public function getCategoryMulty(): array{

            try {

                $query = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento,
                    cat_evento, icono, nombre_invitado, apellido_invitado FROM eventos 
                    INNER JOIN categoria_evento 
                    ON eventos.id_cat_evento = categoria_evento.id_categoria 
                    INNER JOIN invitados ON eventos.id_invitado = invitados.invitado_id 
                    AND eventos.id_cat_evento = 3 LIMIT 2;
                    
                    SELECT evento_id, nombre_evento, fecha_evento, hora_evento,
                    cat_evento, icono, nombre_invitado, apellido_invitado FROM eventos 
                    INNER JOIN categoria_evento 
                    ON eventos.id_cat_evento = categoria_evento.id_categoria 
                    INNER JOIN invitados ON eventos.id_invitado = invitados.invitado_id 
                    AND eventos.id_cat_evento = 2 LIMIT 2;

                    SELECT evento_id, nombre_evento, fecha_evento, hora_evento,
                    cat_evento, icono, nombre_invitado, apellido_invitado FROM eventos 
                    INNER JOIN categoria_evento 
                    ON eventos.id_cat_evento = categoria_evento.id_categoria 
                    INNER JOIN invitados ON eventos.id_invitado = invitados.invitado_id 
                    AND eventos.id_cat_evento = 1 LIMIT 2; ";

                if ($this->db->multi_query($query)) {
                    do {
                        $result = $this->db->store_result();
                        $row = $result->fetch_all(MYSQLI_ASSOC);

                        $this->categoryMulti[] = $row;

                    } while ($this->db->next_result());   
                }
                $this->db->close();

            } catch (\Exception $e) {
                echo $e->getMessage();
            }

            return $this->categoryMulti;
        }

        public function get_category(): array{
            try {

                $sql = "SELECT * FROM categoria_evento";
			    $result = $this->db->query($sql);
                
                while ($cat = $result->fetch_array(MYSQLI_ASSOC)) {
                    $this->category[] = $cat;
                }

            } catch (\Exception $e) {
                echo $e->getMessage();
            }
            return $this->category;
        }
        
        public function get_categorys(): array{
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


