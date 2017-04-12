<?php

Class Model_kategori extends CI_Model {
	function __construct(){
		$this->load->database();
	}

	function select_data(){
		$query = $this->db
		->select('*')
		->from('kategori')
		->get();
		return $query->result_array();
	}

	function get_by_id($id){
		$kategori= $this->db
		->select('*')
		->from('kategori')
		->where('id_kategori', $id)
		->get();
		return $kategori->result_array();
	}

	function select_id($kategori){
		$kategori= $this->db
		->select('*')
		->from('kategori')
		->where('kategori', $kategori)
		->get();
		return $kategori->result_array();
	}
}

?>
