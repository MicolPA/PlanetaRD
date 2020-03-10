<?php


class Model_admin extends CI_Model
{
	

	function login($user, $pass){

		$this->db->where('usuario', $user);
		$this->db->where('clave', $pass);

		/*$query =$this->db->query("SELECT * FROM admin WHERE usuario = '$user' AND clave = '$pass'");
		return $query->result();*/

		$query = $this->db->get('admin');

		if ($query->num_rows() > 0) {

			return true;

		} else{

			return false;

		}

	}

	function listNews(){

		$query = $this->db->query('SELECT * FROM noticia ORDER BY id DESC limit 20');
		return $query->result();

	}

	function createNews($title, $resumen, $contenido, $author, $fecha, $imagen, $category, $url){
		$newsData = array(

			'titulo' => $title,
			'resumen' => $resumen,
			'contenido' => $contenido,
			'autor' => $author,
			'fecha' => $fecha,
			'portada' => $imagen,
			'categoria' => $category,
			'url' => $url
		);

		$this->db->insert('noticia', $newsData);
		redirect(base_url('admin'));

	}

	function loadData($id){

		$query = $this->db->query('SELECT * FROM noticia WHERE id =' . $id);
		return $query->result();
	}

	function deleteNews($id){

		$this->db->where('id', $id);
		$this->db->delete('noticia');

		redirect(base_url('admin'));
	}

	function updateNew($id, $title, $resumen, $contenido, $author, $fecha, $imagen, $category, $url){
		$newsData = array(

			'titulo' => $title,
			'resumen' => $resumen,
			'contenido' => $contenido,
			'autor' => $author,
			'fecha' => $fecha,
			'portada' => $imagen,
			'categoria' => $category,
			'url' => $url
		);


		$this->db->where('id', $id);
		$this->db->update('noticia', $newsData);	
		redirect(base_url('admin'));
	}
}





?>