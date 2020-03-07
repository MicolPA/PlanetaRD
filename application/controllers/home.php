<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{


	function __construct(){

		parent::__construct();
		$this->load->model('Model_home');
	}


	function index(){

		$data['title'] = 'Inicio';
		$data['image'] = 'logo.png';
		$data['view'] = 'home/index';
		$data['displayNewsHome'] = $this->Model_home->displayNewsHome();
		$data['fecha'] = $this->getFecha();

 		$this->load->view('home/template', $data);
	}

	function getFecha(){
		$dias_ES = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
  		$dias_EN = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");

  		$fecha = date('d-m-Y H:i:s');
  		$fecha = substr($fecha, 0, 10);
		$numeroDia = date('d', strtotime($fecha));
  		$dia = date('l', strtotime($fecha));
  		$mes = date('F', strtotime($fecha));
  		$anio = date('Y', strtotime($fecha));

		$dias_ES = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
		$dias_EN = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
		$nombredia = str_replace($dias_EN, $dias_ES, $dia);


		$meses_ES = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
		$meses_EN = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
		$nombreMes = str_replace($meses_EN, $meses_ES, $mes);

  		return "Hoy es $nombredia $numeroDia de $nombreMes del $anio";
	}

	function noticia($url){

		$data['view'] = 'home/noticia';
		
		if ($_GET['id']) {
			$data['readNew'] = $this->Model_home->readNew($_GET['id'], $url);
			if (!$data['readNew']) {
				redirect(base_url());
			}

			$data['latestNews'] = $this->Model_home->latestNews();
			$data['title'] = $data['readNew'][0]->titulo;
			$data['image'] = $data['readNew'][0]->portada;
			$this->load->view('home/template', $data);
		} else {
			redirect(base_url());
		}
	}

	function categoria($category){

		$data['title'] = $category;
		$data['view'] = 'home/category';
		$data['image'] ='';
		$data['newsPerCategory'] = $this->Model_home->newsPerCategory($category);
		$this->load->view('home/template', $data);
	}

	function buscar(){

		$data['title'] = 'Resultados de la busqueda';
		$data['view'] = 'home/buscar';
		$data['busqueda'] = $this->Model_home->buscar($_GET['busqueda']);
		$this->load->view('home/template', $data);
	}

	public function votar(){
		$data['title'] = 'Regístrate Con Rafael Castillo!';
		$data['view'] = 'home/votar';
		$data['image'] = 'assets/images/rafael-castillo.jpg';
		if ($_POST) {
			$result = $this->register($_POST['cedula'], $_POST['celular']);
			$_SESSION['result'] = $result;
		}

		$this->load->view('home/template', $data);
	}

	public function register($ced, $celular){

		$ced = str_replace('-', '', trim($_POST['cedula']));
		$query = $this->db->query("SELECT * FROM votos where cedula = $ced");
		if ($query->result()) {
			return 0;
		}else{
			$person = array(

				'cedula' => $ced,
				'celular' => $celular,
				'candidato' => 'Rafael Castillo',
				'date' => date('Y-m-d H:i:s'),
			);

			$this->db->insert('votos', $person);

			return 1;
		}
		
	}

	

}





?>