<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('model_usuarios');
    }

	public function index()
	{
		$datos_usuarios['mis_usuarios'] = $this->model_usuarios->traer_usuarios();

		$this->load->view('menu/view_header');
        $this->load->view('Listar_usuarios',$datos_usuarios);
        $this->load->view('menu/view_footer');
	}

}
