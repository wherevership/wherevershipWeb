<?php
class Shipment_Cost_Model extends CI_model {
	
	public function __construct() {
		$this->load->database();
	}
	
	public function insert($insert_array=array()) {
		
		$this->db->insert("address_book",$insert_array);
		return $this->db->insert_id();
		
	}
	
	public function delete($delete_array=array()) {
	
		$this->db->where($delete_array);
		$this->db->update("shipment_cost",array(
		'is_deleted' => 1,
		'modified_date' => date("Y-m-d H:i:S"),
		));
	
	}
	
	public function update($where=array(),$update_array=array()) {
	
		$this->db->where($where);
		$this->db->update("shipment_cost",$update_array);
	
	}
	public function get($where=array()) {
		$this->db->where($where);
		$query = $this->db->get("shipment_cost");
		return $query->result_array();
	}
	public function getOne($where=array()) {
		$this->db->where($where);
		$query = $this->db->get("shipment_cost");
		return $query->row_array();
	}

}
?>