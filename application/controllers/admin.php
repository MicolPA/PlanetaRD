<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller{

	function __construct(){
		
		parent::__construct();
		if ($this->session->userdata('login')) {
			$this->load->model('Model_admin');
		} else {
			redirect(base_url('auth'));
		}
	}


	public function index(){

		$data['view'] = 'admin/index';
		$data['news'] = $this->Model_admin->listNews();
		$this->load->view('admin/template', $data);
		
	}
	public function cleanUrl($url){
		$url = str_replace(
       		array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
        	array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
        	$url
	    );
	 
	    $url = str_replace(
	        array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
	        array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
	        $url );
	 
	    $url = str_replace(
	        array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
	        array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
	        $url );
	 
	    $url = str_replace(
	        array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
	        array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
	        $url );
	 
	    $url = str_replace(
	        array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
	        array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
	        $url );
	 
	    $url = str_replace(
	        array('ñ', 'Ñ', 'ç', 'Ç'),
	        array('n', 'N', 'c', 'C'),
	        $url
	    );

	    $url = str_replace(' ', '-', $url);
	    $url = preg_replace("/[^a-zA-Z0-9_-]+/", '', $url);

	    return $url;
	}

	public function create(){

		$data['view'] = 'admin/create';
		$this->load->view('admin/template', $data);
	}

	public function createNew(){
			$info = $this->input->post();

			$title = $info['titulo'];
			$author = $info['autor'];
			$resumen = $info['resumen'];
			$contenido = html_entity_decode($info['contenido']);
			$fecha = date('d-m-y');
			

			$category=$info["categoria"];
     		/*$category = array();
		    for ($i=0;$i<count($_POST["categoria"]);$i++)    
		    {    
		    	
		    	array_push($category,$_POST["categoria"][$i]);

		    }

		    $category = json_encode($category);
*/
		    $url = $info['titulo'];
		    $url = $this->cleanUrl($url);

			$imagen = ($_FILES['portada']['tmp_name']);
			$imgDest = 'assets/images/' . $_FILES['portada']['name'];
			move_uploaded_file($imagen, $imgDest);
			$imagen = ($_FILES['portada']['name']);


			$this->Model_admin->createNews($title, $resumen, $contenido, $author, $fecha, $imagen, $category, $url);
	}

	public function edit($id){

		$data['view'] = 'admin/edit';
		$this->load->model('Model_home');	
		$data['oldInfo'] = $this->Model_home->readNew($id);
		$data['loadData'] = $this->Model_admin->loadData($id);
		$this->load->view('admin/template', $data);
	}

	public function editNew($id){


		$info = $this->input->post();

			$title = $info['titulo'];
			$author = $info['autor'];
			$resumen = $info['resumen'];
			$contenido = html_entity_decode($info['contenido']);
			
			$category= $info['categoria'];
     		

     		$fecha = $info['fecha'];
		    $url = $info['url'];
		    $id = $id;

		    $imagen = ($_FILES['portada']['tmp_name']);
			$imgDest = 'assets/images/' . $_FILES['portada']['name'];
			move_uploaded_file($imagen, $imgDest);
			$imagen = ($_FILES['portada']['name']);



			$this->Model_admin->updateNew($id, $title, $resumen, $contenido, $author, $fecha, $imagen, $category, $url);
	}

	public function deleteNews($id = null){

		if ($id != null) {
			
			$this->Model_admin->deleteNews($id);
		}
	}

	public function createQuiz(){

		$data['view'] = 'admin/createQuiz';
		$this->load->view('admin/template', $data);
	}

	
}






?>