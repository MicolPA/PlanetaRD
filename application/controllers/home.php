<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller{


	function __construct(){

		parent::__construct();
		$this->load->model('Model_home');
	}


	function index(){

		$data['title'] = 'Inicio';
		$data['view'] = 'home/index';
		$data ['displayNewsHome'] = $this->Model_home->displayNewsHome();
 		$this->load->view('home/template', $data);
	}

	function noticia($url){

		$data['view'] = 'home/noticia';
		
		if ($_GET['id']) {
			$id = $_GET['id'];
			$data['readNew'] = $this->Model_home->readNew($id);

			if (!$data['readNew']) {
				redirect(base_url());
			}

			$data['latestNews'] = $this->Model_home->latestNews();
			$data['title'] = $data['readNew'][0]->titulo;
			$this->load->view('home/template', $data);
		} else {
			redirect(base_url());
		}
	}

	function categoria($category){

		$data['title'] = $category;
		$data['view'] = 'home/category';
		$data['newsPerCategory'] = $this->Model_home->newsPerCategory($category);
		$this->load->view('home/template', $data);
	}

	

}





?>