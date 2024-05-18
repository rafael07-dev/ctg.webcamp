<?php 
    class CategoryModel{

        private $db;
        private $category;

        public function __construct() {
            $this->db = Connetion::connet();
            $this->category = array();
        }
        
        public function get_categorys(){

			$sql = "SELECT * FROM categoria";
			$result = $this->db->query($sql);
			while($row = $result->fetch_assoc())
			{
				$this->category[] = $row;
			}
			return $this->category;
		}
        
    }
?>


