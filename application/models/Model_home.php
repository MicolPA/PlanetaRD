<?php 

	class Model_home extends CI_Model{

		function displayNewsHome(){

			$query = $this->db->query('SELECT * FROM noticia ORDER BY id DESC LIMIT 4,20');
			//$id = $this->db->insert_id();
			return $query->result();
		}

		function readNew($id){

			$query = $this->db->query("SELECT * FROM noticia WHERE id = $id");
			return $query->result();
		}

		function latestNews(){

			$query = $this->db->query('SELECT * FROM noticia ORDER BY id DESC LIMIT 4');
			return $query->result();
		}

		function newsPerCategory($category){

			$query = $this->db->query("SELECT * FROM noticia WHERE categoria = '$category'");
			return $query->result();
		}

		

	}


?>