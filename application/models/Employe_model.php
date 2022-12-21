<?php
	class Employe_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function show(){
			$query = $this->db->get('employes');
			return $query->result(); 
		}

		public function insert($employe){
			return $this->db->insert('employes', $employe);
		}

		public function getemployes($id){
			$query = $this->db->get_where('employes',array('id'=>$id));
			return $query->row_array();
		}

		public function updateemployes($employe, $id){
			$this->db->where('employes.id', $id);
			return $this->db->update('employes', $employe);
		}

		public function delete($id){
			$this->db->where('employes.id', $id);
			return $this->db->delete('employes');
		}

	}
?>