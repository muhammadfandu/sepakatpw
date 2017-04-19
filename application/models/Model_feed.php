<?php

Class Model_feed extends CI_Model {
	function __construct(){
		$this->load->database();
	}

	function get_feed_row($id){
		$feed = $this->db
				->select('*')
				->from('postingan')
				->where('id_user', $id)
				->get();
		$feed->num_rows();
	}

	public function addfeed($data)
	{
		return $this->db->insert('postingan', $data);
	}

	function get_feed_manufaktur(){
		$feed = $this->db
				->select('*')
				->from('postingan')
				->join('user','user.id_user=postingan.id_user')
				->join('manufaktur','user.id_user = manufaktur.id_user')
				->get();
		return $feed->result_array();
	}

	function get_feed_penyedia(){
		$feed = $this->db
				->select('*')
				->from('postingan')
				->join('user','user.id_user = postingan.id_user')
				->join('bahan_baku','user.id_user = bahan_baku.id_user')
				->get();
		return $feed->result_array();
	}

	function manufaktur_get_by_id($id){
		$feed = $this->db
				->select('*')
				->from('postingan')
				->join('user','user.id_user=postingan.id_user')
				->join('manufaktur','user.id_user = manufaktur.id_user')
				->where('postingan.id_post',$id)
				->get();
		return $feed->result_array();
	}

	function penyedia_get_by_id($id){
		$feed = $this->db
				->select('*')
				->from('postingan')
				->join('user','user.id_user=postingan.id_user')
				->join('bahan_baku','user.id_user = bahan_baku.id_user')
				->where('postingan.id_post',$id)
				->get();
		return $feed->result_array();
	}

	function get_feed_detail($id){
		$feed = $this->db
				->select('*')
				->from('postingan')
				->where('id_user', $id)
				->get();
		return $feed->result_array();
	}

	function get_all_feed(){
		$feed = $this->db
				->select('*')
				->from('postingan')
				->get();
		return $feed->result_array();
	}

	function get_user_per($id){
		$feed = $this->db
				->select('*')
				->from('manufaktur')
				->where('id_user', $id)
				->get();
		return $feed->num_rows();
	}

	function get_user_pen($id){
		$feed = $this->db
				->select('*')
				->from('bahan_baku')
				->where('id_user', $id)
				->get();
		return $feed->num_rows();
	}

	function get_user_per_all($id){
		$peru = $this->db
				->select('*')
				->from('manufaktur')
				->where('id_user', $id)
				->get();
		return $peru->result_array();
	}

	function get_user_pen_all($id){
		$feed = $this->db
				->select('*')
				->from('bahan_baku')
				->where('id_user', $id)
				->get();
		return $feed->result_array();
	}
}
?>
