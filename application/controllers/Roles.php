<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Roles extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('model_roles');
    }

	public function index()
	{
		$datos_roles['mis_roles'] = $this->model_roles->traer_roles();

		$this->load->view('menu/view_header');
        $this->load->view('Listar_roles',$datos_roles);
        $this->load->view('menu/view_footer');
	}

}
