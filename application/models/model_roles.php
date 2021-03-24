<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_roles extends CI_Model {

	function __construct(){
		parent::__construct();

    }
	
    public function traer_roles(){
        $sql_datos_roles="SELECT * FROM roles";
        $query= $this->db->query($sql_datos_roles);
        //Cuando el resultado es toda la tabla
        return $query->result();
        //Cuando el resultado es una fila 
        //return $query->row();
    }

}
