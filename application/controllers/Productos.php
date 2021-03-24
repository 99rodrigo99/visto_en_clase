<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('model_productos');
    }

	public function index()
	{
		$datos_productos['mis_productos'] = $this->model_productos->traer_productos();

		$this->load->view('menu/view_header');
        $this->load->view('Listar_productos',$datos_productos);
        $this->load->view('menu/view_footer');
	}

}
