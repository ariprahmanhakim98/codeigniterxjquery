<?php
class Users_model extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

			    // fungsi simpan data register
	public function register($data) {

		return $this->db->insert("users", $data);

	}

	public function login($username, $password){
		$query = $this->db->get_where('users', array('username'=>$username, 'password'=>$password));
		return $query->row_array();
	}

}
?>