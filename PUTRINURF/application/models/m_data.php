<?php 
 
class M_data extends CI_Model{

	public function __construct() {
			$this->load->database();
	}

	function tampil_data(){
		return $this->db->get('users');
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}