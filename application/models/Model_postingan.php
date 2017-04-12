<?php
Class Model_postingan extends CI_Model {
	function __construct(){
		$this->load->database();
	}
	var $table = 'postingan';
function select_data(){
		$barang_bahan = $this->db
		->select('user.username,user.id_user, postingan.id_post, postingan.isi, postingan.tanggal, postingan.waktu')
		->from('postingan')
		->join('user', 'postingan.id_user = user.id_user')
		->get();
		return $barang_bahan->result_array();
	}
	public function get_by_id($id)
  {
    $this->db->from($this->table);
    $this->db->where('id_post',$id);
    $query = $this->db->get();

    return $query->row();
  }
	}

?>