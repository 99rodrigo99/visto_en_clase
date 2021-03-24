<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_usuarios extends CI_Model {

	function __construct(){
		parent::__construct();

    }
	
    public function traer_usuarios(){
        $sql_datos_usuarios="SELECT * FROM usuarios";
        $query= $this->db->query($sql_datos_usuarios);
        //Cuando el resultado es toda la tabla
        return $query->result();
        //Cuando el resultado es una fila 
        //return $query->row();
    }

}
