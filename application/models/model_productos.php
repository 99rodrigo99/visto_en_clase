<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_productos extends CI_Model {

	function __construct(){
		parent::__construct();

    }
	
    public function traer_productos(){
        $sql_datos_productos="SELECT * FROM productos";
        $query= $this->db->query($sql_datos_productos);
        //Cuando el resultado es toda la tabla
        return $query->result();
        //Cuando el resultado es una fila 
        //return $query->row();
    }

}
