<?php
class Shipment_Cost_Model extends CI_model {
	
	private $table_name = "credit_history";
	
	public function __construct() {
		$this->load->database();
	}
	
	public function insert($insert_array=array()) {
		
		$this->db->insert($this->table_name,$insert_array);
		return $this->db->insert_id();
		
	}
	
	public function delete($delete_array=array()) {
	
		$this->db->where($delete_array);
		$this->db->update($this->table_name,array(
		'is_deleted' => 1,
		'modified_date' => date("Y-m-d H:i:S"),
		));
	
	}
	
	public function update($where=array(),$update_array=array()) {
	
		$this->db->where($where);
		$this->db->update($this->table_name,$update_array);
	
	}
	
	public function search($where=array(),$like=array()) {
		$this->db->where($where);
		$this->db->like($like);
		$query = $this->db->get($this->table_name);
		return $query->result_array();
	}
	
	public function get($where=array()) {
		$this->db->where($where);
		$query = $this->db->get($this->table_name);
		return $query->result_array();
	}
	public function getOne($where=array()) {
		$this->db->where($where);
		$query = $this->db->get($this->table_name);
		return $query->row_array();
	}

}
?>