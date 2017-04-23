<?php

Class Model_komentar extends CI_Model{

    public $table = 'komentar';
    function __construct(){
		$this->load->database();
	}
    function get(){
        $query = $this->db->get($this->table);

        return $query->result_array();
    }

    function get_by_id($id){
        $query = $this->db
                ->select('*')
                ->from($this->table)
                ->where('id_komentar',$id)
                ->get();

        return $query->result_array();
    }

    function get_by_post1($id_post){
        $query = $this->db
                ->from($this->table)
                ->join('user','komentar.id_user = user.id_user')
                ->join('manufaktur','manufaktur.id_user = user.id_user')
                ->where('id_post',$id_post)
                ->order_by('time', 'DESC')
                ->get();

        return $query->result_array();
    }

    function get_by_post2($id_post){
        $query = $this->db
                ->from($this->table)
                ->join('user','komentar.id_user = user.id_user')
                ->join('bahan_baku','bahan_baku.id_user = user.id_user')
                ->where('id_post',$id_post)
                ->order_by('time', 'DESC')
                ->get();

        return $query->result_array();
    }

    function insert($request){
        $query = $this->db
                ->insert($this->table,$request);

        return $query;
    }

    function update($id, $request){
        $query = $this->db
                ->where('id_komentar',$id)
                ->update($this->table,$request);

        return $query->num_rows();
    }
}

?>
