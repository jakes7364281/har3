<?php
class Asiakas_model extends CI_Model{

public function getAsiakas() {
	$this->db->select('*');
	$this->db->from('asiakas');
	return $this->db->get()->result_array();

}

public function addAsiakas($lisaa_data) {
	$this->db->insert('asiakas', $lisaa_data);
	return $this->db->affected_rows();
}

}
